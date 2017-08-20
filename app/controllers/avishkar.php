<?php

class avishkar extends controller{

    public function index(){
        $this->view("avishkar");
    }

    public function submit($get, $post){
        // var_dump($get);
        // var_dump($post);
        $name_of_uploaded_file =basename($_FILES['form-model']['name']);
        $formData = $post;
        $this->getFile( $name_of_uploaded_file, $formData );
        // header("Locaton: http://takshak.in");
    }

    protected function getFile( $filename , $formData ) {
        
        $allowedExts = array("csv","pdf");
        $temp = explode(".", $_FILES["form-model"]["name"]);
        $extension = end($temp);
        $mimes = array('application/vnd.ms-excel','text/plain','text/csv','text/tsv', 'application/pdf');
     
        if (in_array($_FILES['form-model']['type'],$mimes )
        && in_array($extension, $allowedExts))
          {
          if ($_FILES["form-model"]["error"] > 0)
            {
            echo "Return Code: " . $_FILES["form-model"]["error"] . "<br>";
            }
          else
            {      
                $this->sendMailAsAttachment($_FILES["form-model"]["tmp_name"],$_FILES["form-model"]["name"],$formData);         
            }
          }
        else
          {
        echo ($_FILES["form-model"]["size"]);
          echo "Invalid file";
          }  
    }

    protected function sendMailAsAttachment( $filename, $fileorgname, $formData ) {
        
        $emailData = $this->prepareEmail( $formData );
        $attachContent = $this->pepareAttachment( $filename,$fileorgname );
        $message = $emailData['message'].$attachContent;
        $ok = @mail($emailData['to'], $emailData['subject'], $message, $emailData['headers']); 
        if ($ok) { 
                echo "<p>mail sent to $to!</p>"; 
                $this->view("Success");
        } else { 
                echo "<p>mail could not be sent!</p>"; 
        } 
    }

    protected function prepareEmail( $formData ) {
        
        // email fields: to, from, subject, and so on
        $to = "avishkar@takshak.in";
        $from = $formData['form-member-1-email']; 
        $subject ="New Registration"; 
        $message = "Uploaded File\n";
        $message .= "Project Name :". $formData['form-project-name']."\n";
        // $message .= "School/College". $formData['form-college']."\n";
        $i = 0;
        for($i = 1; $i<7; $i++){
            if(isset($formData['form-member-1-name'])){
                $message .= "Student".$i." \n";
                $message .= "Name :". $formData['form-member-'.$i.'-name']."\n";
                $message .= "Email :". $formData['form-member-'.$i.'-email']."\n";
                $message .= "School/College :". $formData['form-member-'.$i.'-school']."\n";
                $message .= "Age :". $formData['form-member-'.$i.'-age']."\n";
            }
        }
        $headers = "From: $from";
     
        // boundary 
        $semi_rand = md5(time()); 
        $mime_boundary = "==Multipart_Boundary_x{$semi_rand}x"; 
     
        // headers for attachment 
        $headers .= "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . " boundary=\"{$mime_boundary}\""; 
     
        // multipart boundary 
        $message .= "This is a multi-part message in MIME format.\n\n" . "--{$mime_boundary}\n" . "Content-Type: text/plain; charset=\"iso-8859-1\"\n" . "Content-Transfer-Encoding: 7bit\n\n" . $message . "\n\n"; 
        $message .= "--{$mime_boundary}\n";
        
        $emailData = array (
            'to' => $to,
            'from' => $from,
            'subject' => $subject,
            'headers' => $headers,
            'message' => $message
        );
        
        return $emailData;
        
    }

    protected function pepareAttachment( $filename ,$fileorgname) {
        $attachContent = '';
        $file = fopen($filename,"rb");
        $data = fread($file,filesize($filename));
        fclose($file);
        $cvData = chunk_split(base64_encode($data));
        $semi_rand = md5(time());
        $mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";
        $attachContent .= "Content-Type: {\"application/octet-stream\"};\n" . " name=\"$fileorgname\"\n" . 
        "Content-Disposition: attachment;\n" . " filename=\"$fileorgname\"\n" . 
        "Content-Transfer-Encoding: base64\n\n" . $cvData . "\n\n";
        $attachContent .= "--{$mime_boundary}\n"; 
        
        return $attachContent;
        
    }

}