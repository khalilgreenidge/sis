<?php session_start(); ?>
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
		<?php include 'header.php';?>
	</div>

	<div id = "menu">
		<?php
			
		
			 include("seniormenu.php");
		
		?>
	</div>

	<div id = "content">
		
		<div id="signup">
			<form class="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
			
				<?php
				$rowNum = $rem = 0;

				$con = mysql_connect("localhost", "root", "") or die(mysql_error());
				mysql_select_db("sis") or die(mysql_error());
				//DEFINE VARIABLES
				$id = $name = $division_id = $course1 = $course2 = "";

				$result = mysql_query("SELECT * FROM tutors");

				echo "<table border = '1'>
				<tr>
					<th>Tutor Id</th>
					<th>Tutor Name</th>
					<th>Division ID</th>
					<th>Course 1</th>
					<th>Course 2</th>
				</tr>";

				while($row = mysql_fetch_array($result)){
					$rowNum++;
					$rem = $rowNum % 2;
							
						echo "<td>" . $row['id'] . "</td>";
						echo "<td>" . $row['name'] . "</td>";
						echo "<td>" . $row['division_id'] . "</td>";
						echo "<td>" . $row['course1'] . "</td>";
						echo "<td>" . $row['course2'] . "</td>";
						
						
						echo "<tr>";
					
				}
				echo "</table>";


				mysql_close();
				?>

		</form>
		<br/><br/>
			<hr/><br/><br/>
	
	
	<form method="POST" class="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>">
		<h2>Choose an ID, and field to be updated.</h2>
		ID: <input type="number" name="id" /> <br/><br/>
		Field:	<select name="field" required>
					<option value="">Choose</option>
					<option value="name">Name</option>
					<option value="division_id">Division</option>
					<option value="course1">Course 1</option>
					<option value="course2">Course 2</option>
				</select><br/><br/>
		
		Value: <input type="text" name="value" required /><br/><br/>
		<button type="submit">Update</button>&nbsp;<button type="reset">Reset</button><br/>
		
	</form>
	
	<?php
		  $id = $name = $division_id = $course1 = $course2 = "";
		
		if($_SERVER["REQUEST_METHOD"] == "POST"){
			
			//GET FORM DATA
			$id = $_POST["id"];
			$field = $_POST["field"];
			$value = $_POST["value"];
			
			
			//ESTABLISH CONNECTION
			$con = mysql_connect("localhost", "root", "");
			
			//CONNECT TO DB
			$db = mysql_select_db("sis");
			
			//EXTRACT RESULTSET
			$rs = mysql_query("UPDATE tutors SET $field='$value' WHERE id=$id ");
			
			if(!$con || !$db || !$rs){
				die('Error: '.mysql_error());
				
			}
			else{
								
				if($field == "course1" || $field == "course2" ){
				
					//IF FIELD IS COURSE1 OR COURSE2 -->WRITE TO XML FILE THE FILE NAME
					$xml= simplexml_load_file("tutors.xml") or die("Error: Cannot create object");
					
					$tutorArray = $xml->tutor; 			
					
					for($i = 0; $i < count($tutorArray); $i++){ 
						
						$theTutor = $tutorArray[$i]['id'];
						
						if($theTutor != $id){
							continue;
						}
						else{

							//APPEND COURSE
							//SYNTAX -- $xml->ELEMENT->CHILD
							$course = $xml->tutor[$i]->course;
							
							if( empty($course) ){
								//IF NO COURSE IF FOUND --> Add a course to the tutor element
								$xml->tutor[$i]->addChild("course", $value);
							
							}//ELSE CHANGE THE COURSE NAME to either course 1 or course 2
							else if($course != "" && $field == "course1"){
								$xml->tutor[$i]->course[0] = $value;
							}
							else if($course != "" && $field == "course2"){
								$xml->tutor[$i]->course[1] = $value;
							}	

							$dom = new DOMDocument('1.0'); 
							$dom->preserveWhiteSpace = false; 
							$dom->formatOutput = true; 
							$dom->loadXML($xml->asXML()); 
							$dom->saveXML();
							$dom->save("tutors.xml");
						
						}
											
					}
				}
				//SUCCESS
				echo '<div id="ani" class="seniorsuccess"><img src="imgs/tick.png"/>Success, tutor information updated.</div>';
				$location = 'seniorview.php';
				echo '<META HTTP-EQUIV="Refresh"  Content="7; URL='.$location.'" />';		
			}
		}
		
		mysql_close($con);
	?>	
		</div>
	</div>
	
	<div id = "footer">
		<?php include 'footer.php'; ?>
	</div>



</div>
</body>
</html>

