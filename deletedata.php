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
</div>

<div id = "menu">
<?php include("menu.php") ?>
</div>

<div id = "content">
	<h1>Barbados Community College - Web Portal</h1>
	<?php
				
		//GET FORM DATA
		$id = $_POST["ID"];
		
		//ESTABLISH CONNECTION
		$con = mysql_connect("localhost", "root", "");
		
		//CONNECT TO DB
		$db = mysql_select_db("my course");
			
		//EXTRACT RESULTSET
		$rs1 = mysql_query("DELETE FROM students WHERE student_id=$id");
				
		if(!$con || !$db || !$rs1){
			$error = "Error: ".mysql_error();
		}
		else{
			header("Location: Success.php");
		}
		
	?>
	

<br/>
<br/>

<script>
	function redirect() {
	   window.location.href= 'deletestudent.php'; // the redirect goes here

	); 
</script>
	Success!
</div>


<div id = "footer">
	<h3>Barbados Community College - Web Portal</h3>
	<p>&copy; 2000 - <?php echo date("Y"); ?>, The Barbados Community College<br/>
	developed by: Khalil Greenidge & Romario Bates</p>
	</p>
</div>

</body>
</html>
