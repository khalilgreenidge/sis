<?php include 'header.php' ?>

<div id = "content">
	<h1><?php if(isset($course)){ echo $course;} ?></h1>
	<br/><br/>
	<form method="post" class="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
		<h1>Add The Student</h1>
		<br/><br/>
		Student ID: <select name="id" required ><br/><br/>
						<option value="">Choose..</option>
						<option value="1">Khalil Greenidge</option>
						<option value="2">Scott Henry</option>
						<!--?php
							$con = mysql_connect("localhost", "root", "");
							
							$db = mysql_select_db("sis");
							
							$division = $_SESSION["division"];
							
							$rs = mysql_query("SELECT * FROM students WHERE division_id1=$division OR division_id2=$division");
							
							if(!$con || !$db || !$rs){
								die('Error: '.mysql_error());
							}
							else{
								//PRINT MESSAGE
								while($row = mysql_fetch_array($rs)){
									echo "<option value=' ".$row["id"]."'>".$row["id"]."</option>
									";
								}
							}
						?-->
					</select><br/>
		<div id="bubble" class="bubble" style="margin: 15px;">
			<p id="message" class="message" style="padding: 10px; text-align: center; color: white; border-radius: 15px" ></p>
        </div><br/><br/>
		
		<input type="hidden" name="course" value="<?php echo $course; ?>"/>
		
		<input type="submit" value="Save"/> <input type="reset" value="Reset" /><br/>
		
		
	</form>

	<?php
		$msg = $id = $firstname = $lastname = $error = "";
		
		if($_SERVER["REQUEST_METHOD"] == "POST"){
			
			//GET FORM DATA
			$id = $_POST["id"];
			
			$course = $_POST["course"];
			
			//WRITE TO STUDENT XML FILE -- USED FOR STUDENTS MENU
			$xml= simplexml_load_file("students.xml") or die("Error: Cannot create object");
			
			print_r($xml);

			$studentArray = $xml->student; 			
			
			for($i = 0; $i < count($studentArray); $i++){ 
				
				$theStudent = $studentArray[$i]['id'];
				
				if($theStudent != $id){
					continue;
				}
				else{

					//APPEND COURSE
						//$xml->ELEMENT->CHILD
					
					// Add a child element(called course) to the student element
					$xml->student[$i]->addChild("course",$course);

					$dom = new DOMDocument('1.0'); 
					$dom->preserveWhiteSpace = false; 
					$dom->formatOutput = true; 
					$dom->loadXML($xml->asXML()); 
					echo $dom->saveXML();
					$dom->save("students.xml");
					
					echo '<div id="ani" class="success"><img src="imgs/tick.png"/>Success, student added to your '.$course.'! </div>';

					
				}
			}
			
			//REFRESH
			$location = 'addstudent.php?key='.$course;
			//echo '<META HTTP-EQUIV="Refresh"  Content="7; URL='.$location.'" />';
			

			/*
			//ESTABLISH CONNECTION
			$con = mysql_connect("localhost", "root", "");
			
			//CONNECT TO DB
			$db = mysql_select_db("sis");
			
			$trimCourse = preg_replace('/\s+/', '', $course);
			
			//EXTRACT RESULTSET
			
			$rs = mysql_query("SELECT student_id FROM $trimCourse WHERE student_id=$id ");
			
			if(!$con || !$db || !$rs ){
					die('Error: '.mysql_error());
			}
			else{
				if(mysql_num_rows($rs) == 0){
					
					$rs = mysql_query("INSERT INTO $trimCourse(student_id) values($id) ") or die('Error: '.mysql_error());
				
					//WRITE TO STUDENT XML FILE -- USED FOR STUDENTS MENU
					$xml= simplexml_load_file("students.xml") or die("Error: Cannot create object");
					
					$studentArray = $xml->student; 			
					
					for($i = 0; $i < count($studentArray); $i++){ 
						
						$theStudent = $studentArray[$i]['id'];
						
						if($theStudent != $id){
							continue;
						}
						else{

							//APPEND COURSE
								//$xml->ELEMENT->CHILD
							
							// Add a child element(called course) to the student element
							$xml->student[$i]->addChild("course",$course);

							$dom = new DOMDocument('1.0'); 
							$dom->preserveWhiteSpace = false; 
							$dom->formatOutput = true; 
							$dom->loadXML($xml->asXML()); 
							$dom->saveXML();
							$dom->save("students.xml");
							
							echo '<div id="ani" class="success"><img src="imgs/tick.png"/>Success, student added to your '.$course.'! </div>';

							
						}
					}
					
					//REFRESH
					$location = 'addstudent.php?key='.$course;
					echo '<META HTTP-EQUIV="Refresh"  Content="7; URL='.$location.'" />';
					
				}
				else{
					
					//REFRESH
					$location = 'addstudent.php?key='.$course;
					echo '<div id="ani" class="error"><img src="imgs/x.png"/>Error, student already added to your class.</div>';
					echo '<META HTTP-EQUIV="Refresh"  Content="7; URL='.$location.'" />';						

				}
				
			}

			*/
						
		}
		
	?>

	
	
</div>

<?php include 'footer.php';?>
