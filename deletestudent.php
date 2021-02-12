<?php 
	session_start();
	
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
	
	<h2>Delete Student Record</h2>
	<form method ="post" action = "deleteinfo.php">	
		Enter Student's ID: <br/>
		<input type = "search" name ="ID"> <br/>
		<button type = "submit">SEARCH</button>
	</form>
	<br/>
	<hr/>
</div>


<div id = "footer">
	<h3>Barbados Community College - Web Portal</h3>
	<p>&copy; 2000 - <?php echo date("Y"); ?>, The Barbados Community College<br/>
	developed by: Khalil Greenidge & Romario Bates</p>
	</p>
</div>

</body>
</html>
