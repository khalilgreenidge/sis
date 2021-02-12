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
	
	<h2>DELETE RECORD?<h2>
	<br/>
	<p>Do you want to delete this record?</p>
	

	<?php
		$rowNum = 0;
		$rem = 0;

		$id = $_POST["ID"];
		
		
		$con = mysql_connect("localhost","root","") or die(mysql_error());
		$db = mysql_select_db("my course") or die(mysql_error());



		$result = mysql_query("SELECT * FROM students WHERE student_id = $id ") or die(mysql_error());

		echo"<table border = '1'>
		<tr>
		<th>Student's ID</th>
		<th>First Name</th>
		<th>Last Name</th>
		<th>Test 1 %</th>
		<th>Test 2 %</th>
		<th>Assignment %</th>
		<th>Project %</th>
		<th>Paper 1 %</th>
		<th>Paper 2 %</th>
		</tr>"; 

		while($row = mysql_fetch_array($result)){
			$rowNum++;
			$rem = $rowNum % 2;
					
			//CREATES AN ALTERNATING COLOUR
			if($rem == 0){
				echo "<tr style='background-color: #FA8258;'>";
				echo "<td>".$row['student_id']."</td>";
				echo "<td>".$row['first_name']."</td>";
				echo "<td>".$row['last_name']."</td>";
				echo "<td style='text-align: right'>".$row['test_1']."</td>";
				echo "<td style='text-align: right'>".$row['test_2']."</td>";
				echo "<td style='text-align: right'>".$row['assignment']."</td>";
				echo "<td style='text-align: right'>".$row['project']."</td>";
				echo "<td style='text-align: right'>".$row['paper_1']."</td>";
				echo "<td style='text-align: right'>".$row['paper_2']."</td>";
				echo "</tr>";
			}
			else{
				echo "<tr>";
				echo "<td>".$row['student_id']."</td>";
				echo "<td>".$row['first_name']."</td>";
				echo "<td>".$row['last_name']."</td>";
				echo "<td style='text-align: right'>".$row['test_1']."</td>";
				echo "<td style='text-align: right'>".$row['test_2']."</td>";
				echo "<td style='text-align: right'>".$row['assignment']."</td>";
				echo "<td style='text-align: right'>".$row['project']."</td>";
				echo "<td style='text-align: right'>".$row['paper_1']."</td>";
				echo "<td style='text-align: right'>".$row['paper_2']."</td>";
				echo "</tr>";
			}
			
		}
		
		echo "</table>";
				

		mysql_close($con);

	?>
	
<script>
	function redirect(){
		window.location.href="deletestudent.php";
	}
</script>

<form method="post" action="deletedata.php">
	<input type="hidden" value="<?php echo $id; ?>" name="ID"/>
	<button type="submit">Delete</button>&nbsp;<button type="button" onclick="redirect()">Cancel</button>
	
</form>
	


</div>


<div id = "footer">
	<h3>Barbados Community College - Web Portal</h3>
	<p>&copy; 2000 - <?php echo date("Y"); ?>, The Barbados Community College<br/>
	developed by: Khalil Greenidge & Romario Bates</p>
	</p>
</div>

</body>
</html>
