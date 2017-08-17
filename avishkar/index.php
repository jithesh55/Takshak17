<?php



// To avoid typing again , when backend found any mistake in input data.
$nameofproject = "";
$college = "";

$member1name = "";
$member1school = "";
$member1age = "";

$member2name = "";
$member2school = "";
$member2age = "";

$member3name = "";
$member3school = "";
$member3age = "";

$member4name = "";
$member4school = "";
$member4age = "";

$member5name = "";
$member5school = "";
$member5age = "";

$member6name = "";
$member6school = "";
$member6age = "";

$cost = "";

?>
<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Avishkar 2017 | Registeration</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

    </head>

    <body>

        <!-- Content -->
        <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                        	<a class="logo" href="index.html"></a>
                            <h1><strong>Avishkar 2017</strong> Registeration</h1>
                            <div class="description">
                            	<p>
	                            	<b>Avishkar</b> is Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ullamcorper accumsan ex sed sagittis. Vivamus sit amet neque rhoncus, pretium ante a, finibus sapien. Mauris ac magna tristique, tincidunt lorem nec, pellentesque augue. Pellentesque interdum vitae lectus ac viverra. Suspendisse tempus nisl magna, et ornare est vehicula eu. Donec mollis cursus nisl a sollicitudin.
                            	</p>
                            </div>
                            <div class="top-big-link">
                                <a class="btn btn-link-1 launch-modal" href="#" data-modal-id="modal-register">Click Here To Register</a>
                                <a class="btn btn-link-1" href="#">About Avishkar</a>
                            	<a class="btn btn-link-1" href="#">About MACE</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        
        <!-- MODAL -->
        <div class="modal fade" id="modal-register" tabindex="-1" role="dialog" aria-labelledby="modal-register-label" aria-hidden="true">
        	<div class="modal-dialog">
        		<div class="modal-content">
        			
        			<div class="modal-header">
        				<button type="button" class="close" data-dismiss="modal">
        					<span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
        				</button>
        				<h3 class="modal-title" id="modal-register-label">Fill The Form</h3>
        				<p>You can give informations and instructions here</p>
        			</div>
        			
        			<div class="modal-body">
        				
	                    <form role="form" action="" method="post" class="registration-form" enctype="multipart/form-data">
	                    	<div class="form-group">
	                    		<label class="sr-only" for="form-project-name">Name Of Project*</label>
	                        	<input type="text" name="form-project-name" placeholder="Name of Project*" class="form-project-name form-control" id="form-project-name" value="<?=$nameofproject?>">
	                        </div>
                            <div class="form-group">
                                <label class="sr-only" for="form-college">College / School *</label>
                                <input type="text" name="form-college" placeholder="College / School *" class="form-college form-control" id="form-college" value="<?=$college?>">
                            </div>
                            <hr/>

                            <div class="form-member">
                                <h5>Member 1</h5>
                                <input type="hidden" name="member1" value="1"/>
                                <div class="form-group">
                                    <label class="sr-only" for="form-member-1-name">Name</label>
                                    <input type="text" name="form-member-1-name" placeholder="Name" class="form-member-name form-control" id="form-member-1-name" value="<?=$member1name?>">
                                </div>
                                <div class="col-sm-8" style="padding-left:0;">
                                    <div class="form-group">
                                        <label class="sr-only" for="form-member-1-school">School</label>
                                        <input type="text" name="form-member-1-school" placeholder="Name Of College / School " class="form-member-school form-control" id="form-member-1-school" value="<?=$member1school?>">
                                    </div>
                                </div>
                                <div class="col-sm-4"  style="padding-right:0;padding-left:0;">
                                    <div class="form-group">
                                        <label class="sr-only" for="form-member-1-age">Age</label>
                                        <input type="text" name="form-member-1-age" placeholder="Age" class="form-member-age form-control" id="form-member-1-age" value="<?=$member1age?>">
                                    </div>
                                </div>
                            </div>

                            <div class="form-member hidden-form-member">
                                <h5>Member 2</h5>
                                <input type="hidden" name="member2" value="0"/>
                                <div class="form-group">
                                    <label class="sr-only" for="form-member-2-name">Name</label>
                                    <input type="text" name="form-member-2-name" placeholder="Name" class="form-member-name form-control form-optional" id="form-member-2-name" value="<?=$member2name?>">
                                </div>
                                <div class="col-sm-8" style="padding-left:0;">
                                    <div class="form-group">
                                        <label class="sr-only" for="form-member-2-school">School</label>
                                        <input type="text" name="form-member-2-school" placeholder="Name Of College / School " class="form-member-school form-control form-optional" id="form-member-2-school" value="<?=$member2school?>">
                                    </div>
                                </div>
                                <div class="col-sm-4"  style="padding-right:0;padding-left:0;">
                                    <div class="form-group">
                                        <label class="sr-only" for="form-member-2-age">Age</label>
                                        <input type="text" name="form-member-2-age" placeholder="Age" class="form-member-age form-control form-optional" id="form-member-2-age" value="<?=$member2age?>">
                                    </div>
                                </div>
                            </div>

                            <div class="form-member hidden-form-member">
                                <h5>Member 3</h5>
                                <input type="hidden" name="member3" value="0"/>
                                <div class="form-group">
                                    <label class="sr-only" for="form-member-3-name">Name</label>
                                    <input type="text" name="form-member-3-name" placeholder="Name" class="form-member-name form-control form-optional" id="form-member-3-name" value="<?=$member3name?>">
                                </div>
                                <div class="col-sm-8" style="padding-left:0;">
                                    <div class="form-group">
                                        <label class="sr-only" for="form-member-3-school">School</label>
                                        <input type="text" name="form-member-3-school" placeholder="Name Of College / School " class="form-member-school form-control form-optional" id="form-member-3-school" value="<?=$member3school?>">
                                    </div>
                                </div>
                                <div class="col-sm-4"  style="padding-right:0;padding-left:0;">
                                    <div class="form-group">
                                        <label class="sr-only" for="form-member-3-age">Age</label>
                                        <input type="text" name="form-member-3-age" placeholder="Age" class="form-member-age form-control form-optional" id="form-member-3-age" value="<?=$member3age?>">
                                    </div>
                                </div>
                            </div>

                            <div class="form-member hidden-form-member">
                                <h5>Member 4</h5>
                                <input type="hidden" name="member4" value="0"/>
                                <div class="form-group">
                                    <label class="sr-only" for="form-member-4-name">Name</label>
                                    <input type="text" name="form-member-4-name" placeholder="Name" class="form-member-name form-control form-optional" id="form-member-4-name" value="<?=$member4name?>" >
                                </div>
                                <div class="col-sm-8" style="padding-left:0;">
                                    <div class="form-group">
                                        <label class="sr-only" for="form-member-4-school">School</label>
                                        <input type="text" name="form-member-4-school" placeholder="Name Of College / School " class="form-member-school form-control form-optional" id="form-member-4-school" value="<?=$member4school?>">
                                    </div>
                                </div>
                                <div class="col-sm-4"  style="padding-right:0;padding-left:0;">
                                    <div class="form-group">
                                        <label class="sr-only" for="form-member-4-age">Age</label>
                                        <input type="text" name="form-member-4-age" placeholder="Age" class="form-member-age form-control form-optional" id="form-member-4-age" value="<?=$member4age?>">
                                    </div>
                                </div>
                            </div>

                            <div class="form-member hidden-form-member">
                                <h5>Member 5</h5>
                                <input type="hidden" name="member5" value="0"/>
                                <div class="form-group">
                                    <label class="sr-only" for="form-member-5-name">Name</label>
                                    <input type="text" name="form-member-5-name" placeholder="Name" class="form-member-name form-control form-optional" id="form-member-5-name" value="<?=$member5name?>">
                                </div>
                                <div class="col-sm-8" style="padding-left:0;">
                                    <div class="form-group">
                                        <label class="sr-only" for="form-member-5-school">School</label>
                                        <input type="text" name="form-member-5-school" placeholder="Name Of College / School " class="form-member-school form-control form-optional" id="form-member-5-school" value="<?=$member5school?>">
                                    </div>
                                </div>
                                <div class="col-sm-4"  style="padding-right:0;padding-left:0;">
                                    <div class="form-group">
                                        <label class="sr-only" for="form-member-5-age">Age</label>
                                        <input type="text" name="form-member-5-age" placeholder="Age" class="form-member-age form-control form-optional" id="form-member-5-age" value="<?=$member5age?>">
                                    </div>
                                </div>
                            </div>

                            <div class="form-member hidden-form-member">
                                <h5>Member 6</h5>
                                <input type="hidden" name="member6" value="0"/>
                                <div class="form-group">
                                    <label class="sr-only" for="form-member-6-name">Name</label>
                                    <input type="text" name="form-member-6-name" placeholder="Name" class="form-member-name form-control form-optional" id="form-member-6-name" value="<?=$member6name?>">
                                </div>
                                <div class="col-sm-8" style="padding-left:0;">
                                    <div class="form-group">
                                        <label class="sr-only" for="form-member-6-school">School</label>
                                        <input type="text" name="form-member-6-school" placeholder="Name Of College / School " class="form-member-school form-control form-optional" id="form-member-6-school" value="<?=$member6school?>">
                                    </div>
                                </div>
                                <div class="col-sm-4"  style="padding-right:0;padding-left:0;">
                                    <div class="form-group">
                                        <label class="sr-only" for="form-member-6-age">Age</label>
                                        <input type="text" name="form-member-6-age" placeholder="Age" class="form-member-age form-control form-optional" id="form-member-6-age" value="<?=$member6age?>">
                                    </div>
                                </div>
                            </div>

                            
                            <div class="form-member">
                                <button class="btn green" id="newmember" onclick="addmember()" type="button" ">Add Another Member</button>
                            </div>

                            <hr/>
                            <div class="form-group">
                                <label style="font-weight: normal;">&#8226; Did your project win prize in any other competitions ? </label>
                                <select name="form-other-competition" class="form-select">
                                    <option value="yes">Yes</option>
                                    <option value="no" selected="selected">No</option>
                                </select>
                            </div>
                            
                            <hr/>
                            <div class="form-group">
                                <label class="form-label" style="font-weight: normal;" id="formmodellabel">&#8226; A brief description of your project/model in pdf or ppt format* </label>
                                <input type="file" name="form-model" accept=".ppt, .pptx,.txt,.pdf" id="formmodelfile">
                            </div>
                            
                            <hr/>
                            <div class="form-group">
                                <label class="form-label" style="font-weight: normal;">&#8226; Photos of the project (if any) - jpg / jpeg format</label>
                                <input type="file" name="form-photo" accept="image/jpg, image/jpeg">
                            </div>

                            <hr/>

	                        <div class="form-group">
	                        	<label class="sr-only" for="form-cost">Cost Of The Project In Rupees ( Optional )</label>
	                        	<input type="text" name="form-cost" placeholder="Cost Of The Project ( Optional )" class="form-cost form-control  form-optional" id="form-cost" value="<?=$cost?>">
	                        </div>
	                        <button type="submit" class="btn">Sent The Form &amp; Register</button>
	                    </form>
	                    
        			</div>
        			
        		</div>
        	</div>
        </div>


        <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/scripts.js"></script>
        
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>