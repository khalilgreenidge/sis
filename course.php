
<?php include 'header.php' ?>

<div id="content">
	<h1>Barbados Community College - Web Portal</h1>
	
	<div class = "courseHeader">	
		<h2>Welcome to <?php echo $course;?>!</h2> 

		<img src = "imgs/webapps.jpg" alt = "webapps" height = "300px" width = "300px" style="margin-top: 10%"/> 
		
		<h3>Barbados Community College</h3>
		<h3>Computer Studies</h3>
		<h3>Tutor:  <?php echo $_SESSION["name"] ?></h3>
	</div>
	<br/><br/><br/>
	
	
	
	<div class="courseContent">
	
		<!-- COURSE DESCRIPTION---->
		<h2>Course Description</h2>
		<p>Welcome to <span style = "font-weight: bold; color: red;"><?php echo $course;?></span>, In this course you'll learn a new way to manipulate <br>
		html code. We will introduce you to the world of PHP which is a script language and <br>
			interpreter that is freely available and used primarily on Linux Web servers. PHP, originally <br>
			derived from Personal Home Page Tools, now stands for PHP: Hypertext Preprocessor, <br>
			which the PHP FAQ describes as a "recursive acronym." </p>
			<hr>
			
			<dl>
				<dt>Student Assessment: </dt>
				<dd>Assignments and class tests  40% of final grade.</dd>
				<dd>Final Written Examination  60% of final grade.</dd>
			</dl> 
			
			<textarea rows="5" cols="50" name="description" readonly><?php 
				$file = $course."/info/description.txt";
				if(file_exists($file)){
					$file = file_get_contents($course."/info/description.txt");
					echo $file;
				}
			?>
		</textarea><br/>
		<?php 
			$content;
			
			$xml= simplexml_load_file("courses.xml") or die("Error: Cannot create object");

			$trimCourse = preg_replace('/\s+/', '', $course);
			
			foreach($xml->children() as $course1) { 
					
				$theCourse = $course1['name'];
				
				if($theCourse != $trimCourse){
					continue;
				}
				else{
					if(!empty($course1->file[0])){
						echo '<a href ="'.$course1->file[0].'" download><img style = "height: 15px; width:15px" src = "imgs/download.png" />Download Course Description</a><br/>';
						
					}
					break;
				}
				echo "It didn't work";					
			}
			
			
		?>
			
			<hr/>
					
			<h4>
				Welcome to the first week of the <?php echo $course;?> course! <br> 
				Here's your first Assignment to freshen your memory up about HTML  <input type = "checkbox" name = "assignmentCheck" value = "" style =  "float: right"/>
			</h4> 
			
			<!-- ASSIGNMENT 1-->
			<h2>Assignment 1</h2>
			<!--<ul>
				<li>Here's Assignment 1, you are expected to complete and submit to the dropbox.</li>
				<li>Please click the link below to submit.</li>
				<li>Please submit before deadline, any student submitting after the deadline will receive no credit.</li>
				<li>Please Download Assignment 1 from below</li>
			</ul>-->

		<textarea rows="5" cols="50" name="description" readonly ><?php 
				$file = $course."/info/assignment1.txt";
				if(file_exists($file)){
					$file = file_get_contents($course."/info/assignment1.txt");
					echo $file;
				}
			?>
		</textarea><br/>
			<?php 
				$content;
				
				$xml= simplexml_load_file("courses.xml") or die("Error: Cannot create object");

				$trimCourse = preg_replace('/\s+/', '', $course);
				
				foreach($xml->children() as $course1) { 
						
					$theCourse = $course1['name'];
					
					if($theCourse != $trimCourse){
						continue;
					}
					else{
						if(!empty($course1->file)){
							foreach($course1->children() as $file){
								
								$theFile = $file["id"];
								
								if($theFile != "assignment1"){
									continue;
								}
								else{
									echo '<a href ="'.$file.'" download><img style = "height: 15px; width:15px" src = "imgs/download.png" />Download Assignment 1</a><br/>';
									echo '<a href = "submission.php?key=assignment1&course='.$course.' "><img style = "height: 15px; width:15px" src = "imgs/Paper.png" />Upload for Assignment 1</a>';
									break;
								}
							}
						}
						break;
					}
					echo "It didn't work";					
				}
				
				
			?>
			
			<hr>
		
		<h4>
			Here's your second Assignment. Use what you've learnt in class this week to complete this assignment  <input type = "checkbox" name = "assignmentCheck" value = "" style =  "float: right"/>
		</h4>
			
			<!------------------------------------BELOW HAS BE COMPLETED------------------------------------------------------->
			
			
			<!-- ASSIGNMENT 2-->
			<h2>Assignment 2</h2>
			<!--<ul>
				<li>Here's Assignment 2, you are expected to complete and submit to the dropbox.</li>
				<li>Please click the link below to submit.</li>
				<li>Please submit before deadline, any student submitting after the deadline will receive no credit.</li>
				<li>Please Download Assignment 2 from below</li>
			</ul>-->

		<textarea rows="5" cols="50" name="description" readonly><?php 
					$file = $course."/info/assignment2.txt";
					if(file_exists($file)){
						$file = file_get_contents($course."/info/assignment2.txt");
						echo $file;
					}
				?>
			</textarea><br/>
			<?php 
				$content;
				
				$xml= simplexml_load_file("courses.xml") or die("Error: Cannot create object");

				$trimCourse = preg_replace('/\s+/', '', $course);
				
				foreach($xml->children() as $course1) { 
						
					$theCourse = $course1['name'];
					
					if($theCourse != $trimCourse){
						continue;
					}
					else{
						/* if(!empty($course1->file[1])){
							echo '<a href ="'.$course1->file[1].'" download><img style = "height: 15px; width:15px" src = "imgs/download.png" />Download Assignment 2</a><br/>';
							echo '<a href = "submission.php?key=assignment2&course='.$course.' "><img style = "height: 15px; width:15px" src = "imgs/Paper.png" />Upload for Assignment 2</a>';
						}
						break; */
						if(!empty($course1->file)){
							foreach($course1->children() as $file){
								
								$theFile = $file["id"];
								
								if($theFile != "assignment2"){
									continue;
								}
								else{
									echo '<a href ="'.$file.'" download><img style = "height: 15px; width:15px" src = "imgs/download.png" />Download Assignment 2</a><br/>';
									echo '<a href = "submission.php?key=assignment2&course='.$course.' "><img style = "height: 15px; width:15px" src = "imgs/Paper.png" />Upload for Assignment 2</a>';
									break;
								}
							}
						}
						break;
					}
					echo "It didn't work";					
				}
				
				
			?>
				
		
		<hr>
		
		<h4>
			Here's your first Test.  <input type = "checkbox" name = "assignmentCheck" value = "" style =  "float: right"/>
		</h4>
			
			<!-- TEST 1-->
			<h2>Test 1</h2>
			<!--<ul>
				<li>Here's Test 1, you are expected to complete and submit to the dropbox.</li>
				<li>Please click the link below to submit.</li>
				<li>Please submit before deadline, any student submitting after the deadline will receive no credit.</li>
				<li>Please Download Test 1 from below</li>
			</ul>-->

			<textarea rows="5" cols="50" name="description" readonly><?php 
					$file = $course."/info/test1.txt";
					if(file_exists($file)){
						$file = file_get_contents($course."/info/test1.txt");
						echo $file;
					}
				?>
			</textarea><br/>
					
			<hr>
		
		<h4>
			Here's your second Test.  <input type = "checkbox" name = "assignmentCheck" value = "" style =  "float: right"/>
		</h4>
		
			<!-- TEST 2-->
			<h2>Test 2</h2>
			<!--<ul>
				<li>Here's Test 2, you are expected to complete and submit to the dropbox.</li>
				<li>Please click the link below to submit.</li>
				<li>Please submit before deadline, any student submitting after the deadline will receive no credit.</li>
				<li>Please Download Test 2 from below</li>
			</ul>-->

			<textarea rows="5" cols="50" name="description" readonly><?php 
					$file = $course."/info/test2.txt";
					if(file_exists($file)){
						$file = file_get_contents($course."/info/test2.txt");
						echo $file;
					}
				?>
			</textarea><br/>     
			
			<hr> 
		
		<h4>
			Here's your third Test.  <input type = "checkbox" name = "assignmentCheck" value = "" style =  "float: right"/>
		</h4>
			
			<!-- TEST 3-->
			<h2>Test 3</h2>
			<!--<ul>
				<li>Here's Test 3, you are expected to complete and submit to the dropbox.</li>
				<li>Please click the link below to submit.</li>
				<li>Please submit before deadline, any student submitting after the deadline will receive no credit.</li>
				<li>Please Download Test 3 from below</li>
			</ul>-->

		<textarea rows="5" cols="50" name="description" readonly><?php 
					$file = $course."/info/test3.txt";
					if(file_exists($file)){
						$file = file_get_contents($course."/info/test3.txt");
						echo $file;
					}
				?>
		</textarea><br/>
	</div>
				
</div>


<?php include 'footer.php'; ?>
