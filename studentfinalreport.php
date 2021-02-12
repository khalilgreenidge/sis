<?php 
	session_start();  
		
	if(empty($_SESSION["login"])){
		header("Location: login.php");
	}
	$course = "";
	if(isset($_GET["key"])){
		$course = $_GET["key"];
		
		//SANITIZE STRING
		$course = filter_var($course, FILTER_SANITIZE_STRING);
	}
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Barbados Community College - Web Portal</title>
	<link rel="shortcut icon" href="imgs/titleimg.gif" />
	<link rel="stylesheet" type="text/css" href="style.css" media="all" />
	<link href = 'http://fonts.googleapis.com/css?family=Open+Sans' rel = 'stylesheet' = type = 'text/css'>
</head>
<body onload="window.print()">

<div id = "wrap">

<div id = "header">
	<?php include 'header.php';?>
</div>

<div id = "menu">
<?php include("menu.php") ?>
</div>

<div id = "content">
	<h1>Barbados Community College - Web Portal</h1>
	
	<h2>Student's Final Report</h2>
	
	<?php


		$id = $_GET["student_id"];
		$semester = 0;
		$final = 0;

		echo "<h3>Showing the results for -- ".$id.":</h3>";
		echo "<br/><br/>";
		
		$con = mysql_connect("localhost", "root", "");
		
		$db = mysql_select_db("sis");

		$result = mysql_query("SELECT * FROM students WHERE student_id = '$id'") or die(mysql_error());

		if(!$con || !$db || !$rs1){
			die('Error: '.mysql_error());
		}
		else{
		
			echo "<table border = '1'>
			<tr>
			<th>Student ID</th>
			<th>Name</th>
			<th>Test 1</th>
			<th>Test 2</th>
			<th>Test 3</th>
			<th>Assignment 1</th>
			<th>Assignment 2</th>
			<th>Paper 1</th>
			<th>Paper 2</th>
			<th>Semester Percentage (40%)</th>
			<th>Final Percentage (60%)</th>
			<th>Grade</th>
			</tr>";

			while($row = mysql_fetch_array($result)){
				$semester = (($row['test_1']/100*0.10) + ($row['test_2']/100*0.10) + ($row['assignment']/100*0.10) + ($row['project']/100*0.10))/0.40*100;
				$final = (($row['paper_1']/100*0.30) + ($row['paper_2']/100*0.30))/0.60*100;
				$final = ($semester + $final) / 200 * 100;
				echo "<tr>";
				echo "<td>" . $row['student_id'] . "</td>";
				echo "<td>" . $row['first_name'] . "</td>";
				echo "<td style='text-align: right'>" . $row['test_1'] . "</td>";
				echo "<td style='text-align: right'>" . $row['test_2'] . "</td>";
				echo "<td style='text-align: right'>" . $row['assignment'] . "</td>";
				echo "<td style='text-align: right'>" . $row['project'] . "</td>";
				echo "<td style='text-align: right'>" . $row['paper_1'] . "</td>";
				echo "<td style='text-align: right'>" . $row['paper_2'] . "</td>";

				//SEMESTER PERCENTAGE

				if( $semester < 50 || $final <= 45){
					echo "<td style='text-align: right; color: red;'>" . number_format($semester,2)."%". "</td>";
				}
				else{
					echo "<td style='text-align: right'>" . number_format($semester,2)."%". "</td>";
				}

				//FINAL PERCENTAGE
				if($final == 0.0)
					echo "<td style='text-align: center;'>"."NO FINAL PERCENTAGE". "</td>";

				else if( $semester < 50 || $final <= 45){
					echo "<td style='text-align: right;'>".number_format($final,2)."%". "</td>";
				}
				else{
					echo "<td style='text-align: right'>" . number_format($final,2)."%". "</td>";
				}
					
				//GRADE	

				if ($final >= 85 && $final <=100){
				  echo "<td style=\"text-align: right;\">" . "A+" . "</td>";
				  $sql=mysql_query("INSERT INTO students(grade) values(\"A+\") WHERE student_id=$id"); 
				}
				else if ($final >= 75 && $final <=84){
				  echo "<td style=\"text-align: right;\">" . "A" . "</td>";
				  $sql=mysql_query("INSERT INTO students(grade) values(\"A\") WHERE student_id=$id");
				}
				else if ($final >= 65 && $final <=74){
				  echo "<td style=\"text-align: right;\">" . "B+" . "</td>";
				  $sql=mysql_query("INSERT INTO students(grade) values(\"B+\") WHERE student_id=$id");
				}
				else if ($final >= 55 &&  $final <=64){
				  echo "<td style=\"text-align: right;\">" . "B" . "</td>";
				  $sql=mysql_query("INSERT INTO students(grade) values(\"B\") WHERE student_id=$id");
				}
				else if ($final >= 45 && $final <=54){
				  if($final < 50)
					echo "<td style=\"text-align: right;\">" . "C" . "</td>";
					$sql=mysql_query("INSERT INTO students(grade) values(\"C\") WHERE student_id=$id");
				}
				else if ($final >= 0 &&  $final <=44){
				  echo "<td style=\"color: red; text-align: right;\">" . "F" . "</td>";
				  $sql=mysql_query("INSERT INTO students(grade) values(\"F\") WHERE student_id=$id");
				}

				else
					echo "<td style=\"text-align: right;\">" . "NO GRADE" . "</td>";
					$sql=mysql_query("INSERT INTO students(grade) values(\"A\") WHERE student_id=$id");

				echo "</tr>";
			}
		
		}
		
		echo "</table>";


		mysql_close();

	?>
	</form>
	<br/><br/>
	<hr/>
</div>


<div id = "footer">
	<h3>Barbados Community College - Web Portal</h3>
	<p>&copy; 2000 - <?php echo date("Y"); ?>, The Barbados Community College<br/>
	Developed by: Khalil Greenidge & Romario Bates</p>
	</p>
</div>

</body>
</html>
