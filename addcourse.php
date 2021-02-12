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
		<?php include 'header.php'; ?>
	</div>

	<div id = "menu">
		<?php
			
		
			 include("seniormenu.php");
		
		?>
	</div>

	<div id = "content">
		<br/><br/>
		<div id="signup">
			<form class="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
				<h1>Add Course</h1><br/><br/>
				
				Course Name:  <input type='text' name='newcoursename' /><br/><br/>
				Major or Program ID: <select name="mopid" required ><br/><br/>
										<option value="">Choose carefully</option>
										<?php
											$con = mysql_connect("localhost", "root", "");
											
											$db = mysql_select_db("sis");
											
											$division = $_SESSION["division"];
											
											$rs = mysql_query("SELECT * FROM majorprogram WHERE division_id = $division");
											
											if(!$con || !$db || !$rs){
												die('Error: '.mysql_error());
											}
											else{
												//PRINT MESSAGE
												while($row = mysql_fetch_array($rs)){
													echo "<option value=' ".$row["major/program_id"]."'>".$row["major/program_id"]."</option>
													";
												}
											}
										?>
									</select><br/><br/>
				Tutor ID: <select name="tutorid" required ><br/><br/>
							<option value="">Choose carefully</option>
							<?php
								$con = mysql_connect("localhost", "root", "");
								
								$db = mysql_select_db("sis");
								
								$division = $_SESSION["division"];
								
								$rs = mysql_query("SELECT * FROM tutors WHERE division_id = $division ");
								
								if(!$con || !$db || !$rs){
									die('Error: '.mysql_error());
								}
								else{
									//PRINT MESSAGE
									while($row = mysql_fetch_array($rs)){
										$course1 = $row["course1"];
										$course2 = $row["course2"];
										
										if($course1 == "" || $course2 == ""){
											echo "<option value=' ".$row["id"]."'>".$row["id"]."</option>";
										}
										
									}
								}
							?>
						</select><br/><br/>	 
				Division ID: <input name="divid" type="number" value="<?php echo $_SESSION["division"]; ?>" readonly /><br/><br/>
			
				
				<div id="bubble" class="bubble" style="">
					<p id="message" class="message" style="width: 300px; padding: 10px; text-align: center; color: white; border-radius: 15px" ></p>
				</div><br/><br/>
							
				<input type="submit"> <input type="reset">
				
			</form>
			
			<?php
			$newcoursename = $test1Date = $test2Date = $test3Date = $assignment1Date
			= $assignment2Date = $project1Date = $project2Date = $majorprogram_id = $tutor_id1 = $division_id = $tablename=""; 
			//DEFINE VARIABLES
			
			
			if($_SERVER["REQUEST_METHOD"] == "POST" ){

				//GET FORM DATA
				$newcoursename = $_POST["newcoursename"];
				$majorprogram_id = $_POST["mopid"];
				$tutor_id1 = $_POST["tutorid"];
				$division_id = $_POST["divid"];
				
				$course = $newcoursename;
				
				//ESTABLISH CONNECT
				$con = mysql_connect("localhost", "root", "");
				
				//CONNECT TO DB
				$db = mysql_select_db("sis");

				//MAKE QUERY 1
				$rs = mysql_query("INSERT INTO course VALUES (\"$newcoursename\",$majorprogram_id, $tutor_id1, $division_id)");
                			
				$rs =  mysql_query("SELECT * FROM tutors where id=$tutor_id1 ");
				
				if(mysql_num_rows($rs) < 1){
					exit('<div id="ani" class="error"><img src="imgs/tick.png"/>Error, tutor has two courses already.</div>');
				}
				
				$course1 = $rs["course1"];
				$course2 = $rs["course2"];
							
				if(!$con || !$db || !$rs){
					die('Error: '.mysql_error());
				}
				else{
					
					//IF COURSE 1 IS EMPTY, ADD NEW COURSE TO TUTOR'S COURSE PAGE
					if($course1 == ""){
						$ud = mysql_query("UPDATE tutors SET course1 = \"$newcoursename\" where id=$tutor_id1  ");
					}
					else if($course2 == ""){
						$ud = mysql_query("UPDATE tutors SET course2 = \"$newcoursename\" where id=$tutor_id1  ");
					}
					else{
						exit('<div id="ani" class="error"><img src="imgs/tick.png"/>Error, tutor has two courses already.</div>');
					}
					
					$newcoursename = preg_replace('/\s+/', '', $newcoursename);	
						
					$rs = mysql_query("CREATE TABLE $newcoursename (student_id INT(7) NOT NULL PRIMARY KEY, test_1 DOUBLE NULL, test_2 DOUBLE NULL, test_3 DOUBLE NULL, assignment_1 DOUBLE NULL, assignment_2 DOUBLE NULL, paper_1 DOUBLE NULL, paper_2 DOUBLE NULL, grade VARCHAR(3)) ") or die('Error: '.mysql_error());
					
					mkdir($course."/assignments", 0755, true);
					mkdir($course."/info", 0755, true);
					
					mkdir($course."/submissions/assignment1", 0755, true);
					mkdir($course."/submissions/assignment2", 0755, true);
					
					
					echo '<div id="ani" class="seniorsuccess"><img src="imgs/tick.png"/>Success, A new course has been added to your division.</div>';				
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