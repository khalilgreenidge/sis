<?php session_start();

if(empty($_SESSION["login"])){
	header("Location: login.php");
}
 
?>
<!DOCTYPE html>
<html>
<head>
<title>Barbados Community College - Web Portal</title>
<link rel="shortcut icon" href="imgs/titleimg.gif" />
<link rel="stylesheet" type="text/css" href="style.css" media="screen" />
<link href = 'http://fonts.googleapis.com/css?family=Open+Sans' rel = 'stylesheet' = type = 'text/css'>
</head>
<body>

<div id = "wrap">

<div id = "header">
	<img src="imgs/bcclogo.gif" alt="log" />
	<span style="float: right; padding-top: 10px;"><img src="imgs/portal.png" alt="portal photo" width="" height="150px"/></span>
	<p class="msg" style="float: right;">Signed in as <?php echo "<b>".ucfirst($_SESSION["name"]).".</b>";?></p>
</div>

<div id = "menu">
	<?php include("menu.php") ?>
</div>

<div id = "content">
	<h1>Barbados Community College - Web Portal</h1>
	
	<h2>ABOUT</h2>
	
This application is a fully functional Web Portal which allows for Tutors to sign in to the College and enter their information. As the 
semester progresses marks will be added for all assignments, tests, projects etc. This allows for the tutor to login at any time to view
their students' grades. Tutors are allowed access to the marks itself and are able to update or delete marks or a whole record. Students' reports can also be printed.
<br/><br/>
NAME: Khalil Greenidge <br>
ID: #0069964
<br/><br/>
NAME: Romario Bates <br>
ID: #0011828
<br/><br/>
Name: Scott Henry<br/>
ID: #0069812
<br/><br/>
&copy; 2000 - <?php echo date("Y"); ?>, The Barbados Community College<br/>
	Developed by: Khalil Greenidge & Romario Bates
	
	
</div>


<div id = "footer">
	<h3>Barbados Community College - Web Portal</h3>
	<p>&copy; 2000 - <?php echo date("Y"); ?>, The Barbados Community College<br/>
	Developed by: Khalil Greenidge & Romario Bates</p>
	</p>
</div>

</body>
</html>
