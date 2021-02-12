<ul>
	<div class = "dropdown">
		<li class = "dropdownFontDisplay">
			<a href="studentdashboard.php">Home</a>
		</li>
		<li  class = "dropdownFontDisplay">
			Courses
				<ul>
				    <?php
						$xml= simplexml_load_file("students.xml") or die("Error: Cannot create object");

						$id = $_SESSION["id"];

						foreach($xml->children() as $student) { 
								
							$theStudent = $student['id'];
							
							if($theStudent != $id){
								continue;
							}
							else{
								$courseArray = $student->course;
								
								//PRINT ALL COURSES
								for($i = 0; $i < count($courseArray); $i++){
									echo '<li><a href="course.php?name='.$student->course[$i].'">'.$student->course[$i].'</a></li><br/>';
								}
								
								break;
							}
							
						}
					?>
				</ul>
		</li>
	</div>
</ul>