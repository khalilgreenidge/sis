<!DOCTYPE html>
<?php 
	session_start(); 
	
	if(isset($_GET["name"])){
		$course = $_GET["name"];
		$_SESSION["course"] = $_GET["name"];
		
		//SANITIZE STRING
		$course = filter_var($course, FILTER_SANITIZE_STRING);
	}
	
	if(isset($_GET["key"])){
		$course = $_GET["key"];
		
		//SANITIZE STRING
		$course = filter_var($course, FILTER_SANITIZE_STRING);
	}
	
?>
<html>
<head>
<title>Barbados Community College - Web Portal</title>
	<link rel="shortcut icon" href="imgs/titleimg.gif" />
	<link rel="stylesheet" type="text/css" href="style.css" media="screen" />
	<link href = 'http://fonts.googleapis.com/css?family=Open+Sans' rel = 'stylesheet' = type = 'text/css'>
</head>

<body>

<div id="wrap">

	<div id = "header">
		<img src="imgs/bcclogo.gif" alt="log" />
		<span style="float: right; padding-top: 10px;"><img src="imgs/portal.png" alt="portal photo" width="" height="150px"/></span>
		<p class="msg" style="float: right;">Signed in as <?php echo "<b>".$_SESSION["name"].".</b>";?></p>
		<button onclick="window.location.href='logout.php' ">Log out</button>
	</div>

	<div id="menu">
		<?php 
			if($_SESSION["typeOfUser"] == "tutor"){
				include 'menu.php';
			}	
			else{
				include 'studentmenu.php';
			}	
		?>
	</div>

	<?php include 'main-sidebar.php'; ?>
