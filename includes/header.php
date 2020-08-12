<?php
  if(isset($_POST["submit"])){
  $mailsub=$_POST["name"];
  $mailbod=$_POST["phone"]." ".$_POST["message"];
  $mailto=$_POST["email"];
  
  
 require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';
require 'phpmailer/src/Exception.php';
  
	//create instant of phpmail class
	//Create a new PHPMailer instance
$mail = new PHPMailer\PHPMailer\PHPMailer();
	$mail->isSMTP();
	$mail->SMTPDebug=0;
	$mail->SMTPAuth=true;
	$mail->SMTPSecure='ssl';
	$mail->Host="secure167.servconfig.com";
	$mail->Port=465;
	$mail->isHTML(true);
	$mail->Username="info@laanjgroup.com.ng";
	$mail->Password="@laanjgroup.com.ng";
	//set who is sending a email
	$mail->setFrom($mailto);
	//set subject
	$mail->Subject=$mailsub;
	//write email
	$mail->Body=$mailbod;
	//set where we are sending mail
	$mail->addAddress('malachiegbugha@laanjgroup.com.ng');
	//send an email
	if(!$mail->send())
	{
	echo "<script>window.alert('Mail Not sent.')</script>";
	
	}
	else
	{
	echo "<script>window.alert('Mail sent.')</script>";
	}
	
	}
?>
  <div class="navbar navbar-inverse navbar-fixed-top log" role="navigation" style="background-color: #C90202; margin-bottom: 0px; ">
    
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" >
                <ul class="nav navbar-nav navbar-left">
                    <li>
                        <a class="wow rotateIn" data-wow-delay="0.8s" href="index.php" style="color:#ffffff;">HOME</a>
                    </li>
                    <li>
                        <a class="wow zoomIn" data-wow-delay="0.6s" href="about.php" style="color:#ffffff">ABOUT US</a>
                    </li>
                    <li style="color:#ffffff">
                        <a class="wow bounceInLeft" data-wow-delay="0.4s" href="gallery.php" style="color:#ffffff">APPLY FOR A COURSE</a>
                    </li>		
                    <li >
                        <a class="wow bounceInLeft" data-wow-delay="0.4s" href="contact.php" style="color:#ffffff">CONTACT</a>
                    </li>
								
                </ul>
				 <ul class="nav navbar-nav navbar-right">
				 <li> <a class="hovl" href="#"><i class="fa fa-phone wow fadeInUp" aria-hidden="true"></i> +234 (708) 9873 271 </a></li>
				 <li> <a class="hovl" href="mailto:info@laanjgroup.com"><i class="fa fa-envelope-o wow fadeInUp" aria-hidden="true"></i> Email:<strong>info@laanjgroup.com.ng</strong></a></li>
				 </ul>
            </div>
            <!-- /.navbar-collapse -->
   
        <!-- /.container -->
    </div>
