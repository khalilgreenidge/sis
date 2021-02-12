<?php
	$xml= simplexml_load_file("students.xml") or die("Error: Cannot create object");

	$id = 001;

	foreach($xml->children() as $student) { 
			
		$theStudent = $student['id'];
		
		if($theStudent != $id){
			continue;
		}
		else{
			$courseArray = $student->course;
			
			//PRINT ALL COURSES
			for($i = 0; $i < count($courseArray); $i++){
				echo $student->course[$i];
			}
			
			break;
		}
		
	}
?>
