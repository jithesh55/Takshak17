<?php
/**
 * Created by PhpStorm.
 * User: Ashwin Joseph
 * Date: 28-08-2017
 * Time: 13:03
 */

$status=$_POST["status"];
$firstname=$_POST["firstname"];
$amount=$_POST["amount"];
$txnid=$_POST["txnid"];
$posted_hash=$_POST["hash"];
$key=$_POST["key"];
$productinfo=$_POST["productinfo"];
$email=$_POST["email"];
$salt="e5iIg1jwi8";

If (isset($_POST["additionalCharges"])) {
    $additionalCharges=$_POST["additionalCharges"];
    $retHashSeq = $additionalCharges.'|'.$salt.'|'.$status.'|||||||||||'.$email.'|'.$firstname.'|'.$productinfo.'|'.$amount.'|'.$txnid.'|'.$key;

}
else {

    $retHashSeq = $salt.'|'.$status.'|||||||||||'.$email.'|'.$firstname.'|'.$productinfo.'|'.$amount.'|'.$txnid.'|'.$key;

}
$hash = hash("sha512", $retHashSeq);

if ($hash != $posted_hash) {
    echo "Invalid Transaction. Please try again";
}
else {
    try{
        $handler = new PDO("mysql:host=127.0.0.1;dbname=takshak;charset=utf8", "root", "");
        $handler->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $e){
        die("Sorry, Error Establishing Connection To Database");
    }
    $query = $handler->prepare("SELECT * FROM robogenesis WHERE txnid = :txnid LIMIT 1");
    $query->bindParam(":txnid", $txnid);
    $query->execute();
//    $result = $query->fetch(PDO::FETCH_ASSOC);
    if($query->rowCount()==0){
        die("Sorry, Transaction Failed, please contact organiser");
    }
    else{
        $query = $handler->prepare("UPDATE robogenesis SET valid = 1 WHERE txnid = :txnid");
        $query->bindParam(":txnid", $txnid);
        if($query->execute()){
            echo "<h3>Thank You. Your order status is ". $status .".</h3>";
            echo "<h4>Your Transaction ID for this transaction is ".$txnid.".</h4>";
            echo "<h4>We have received a payment of Rs. " . $amount . ". Your order will soon be shipped.</h4>";
        }
    }
//    var_dump($_POST);
}
?>