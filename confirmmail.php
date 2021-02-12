<?php

	$subject = "Barbados Community College - Web Portal";
		
	// the message
	$msg = "<!DOCTYPE html>
	<html>
	<head>
	<title>Barbados Community College - Web Portal</title>
	<link href = 'http://fonts.googleapis.com/css?family=Open+Sans' rel = 'stylesheet' type = 'text/css'>
	</head>
	<body style=\"
		font-family: 'Open Sans', sans-serif;
		background-color: #e4e4e4;\">

	<div id = \"wrap\" style=\"
		
		display: block;
		margin: 0 auto;
		height: auto;
		width: 800px;
		background-color: #FFFFFF;
		box-shadow: 0px 5px 30px #888888;\">

	<div id = \"header\">
		<img src= \"http://bcc.edu.bb/images/logo-web.gif\" alt=\"log\" />
		<span style=\"float: right; padding-top: 10px;\"><img src=\"http://thetutortrust.org/images/portal-main-graphic.png\" alt=\"portal photo\" width=\"\" height=\"150px\"/></span>
	</div>
	<hr/>
	<br/>
	<br/>
	<br/>
	<div id = \"content\">
		<h1>BCC Web Portal</h1>
		
		<h3>Confirmation<h3/><br/></br/>
		
		<p>Dear Senior Tutor,
			
			a student requested to join the web portal. Do you accept? If so, please click the link.
		</p>
		
		<a href=\"http://localhost:8000/SIS/confirm.php?hash=$hash\" target=\"_blank\">http://localhost:8000/SIS/confirm.php?hash=$hash</a>
																									
		<br/>
			This link must be clicked within 7 days, to avoid security exploits. </p>
		<br/><br/>
		
		<p style=\"font-family:Arial,Helvetica,sans-serif;font-weight:normal;font-size:14px;line-height:24px;margin-top:0!important;margin-bottom:0!important\">
		 Thanks!<br>
		BCC Web Portal
		</p>


	</div>
	<br/>
	<br/>
	<br/>

	<div id = \"footer\" style=\"height: 80px;line-height: 20px;text-align: center;background: #848484;
		color: #ccc;font-size: 11px;\">
		<h3>Barbados Community College - Web Portal</h3>
		<p>&copy; 2000 - ".date("Y").", Barbados Community College<br/>
		Developed by: Khalil Greenidge, Romario Bates, and Scott Henry</p>
		</p>
	</div>

	</body>
	</html>";

	// use wordwrap() if lines are longer than 70 characters
	//$msg = wordwrap($msg,70);
	
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
	$headers .= "Date: ".date("Y/m/d, h:i:sa")."\r\n";
	$headers .= "From: BCC Web Portal <no-reply@BCCWebPortal.com>";

	// send email
	if(mail($email,$subject,$msg, $headers)){
		//SHOW MESSAGE
		echo "<div id=\"ani\" class=\"info\"><img src=\"imgs/info.png\" />Pending approval. If not approved in 7 days, please reapply.</div>";
		
		//NB *** THE BUTTON ONLY WORKS IN GMAIL AND NOT HOTMAIL!!
	}
	else
		echo "<div id=\"ani\" class=\"error\"><img src=\"imgs/x.png\"/> Error sending mail :( </div>";
		
?>