 <?php

    $savecontent = $_POST['assignment1'];
    $course = $_POST["course"];

    $loadcontent = $course."/info/assignment1.txt";
   
    $savecontent = stripslashes($savecontent);
    
	$fp = fopen($loadcontent, "w");
    
    fwrite($fp, $savecontent);
	
    fclose($fp);
    
    $course = $_POST["course"];
    if($_FILES['savefile']['name'] != ""){
                    
					
	   //ADD NEW PIC
		$target_dir = $course."/assignments/".$_FILES["savefile"]["name"];
		$ext = pathinfo($_FILES["savefile"]["name"], PATHINFO_EXTENSION);
		
		// Check if image file is a PNG image  
		if($ext == "doc" || $ext == "docx" || $ext == "xls" || $ext == "ppt"){
			
			//ERROR
			$trimCourse = preg_replace('/\s+/', '', $course);
		
			//$target_file = $target_dir .".". $ext;
			$target_file = $target_dir;
			
			//WRITE TO XML FILE THE FILE NAME
			$xml= simplexml_load_file("courses.xml") or die("Error: Cannot create object");
			
			$courseArray = $xml->course; 			
			
			for($i = 0; $i < count($courseArray); $i++){ 
				
				$theCourse = $courseArray[$i]['name'];
				
				if($theCourse != $trimCourse){
					continue;
				}
				else{

					//APPEND COURSE
					//SYNTAX -- $xml->ELEMENT->CHILD
					
					// Add a file name to the file element
					if( empty($xml->course[$i]->file) ){
						$xml->course[$i]->addChild("file", $target_file)->addAttribute("id", "assignment1");
					}
					else{
						$xml->course[$i]->file[0] = $target_file;
					}	

					$dom = new DOMDocument('1.0'); 
					$dom->preserveWhiteSpace = false; 
					$dom->formatOutput = true; 
					$dom->loadXML($xml->asXML()); 
					echo $dom->saveXML();
					$dom->save("courses.xml");
					
				}
				
			}
			
			
			if(move_uploaded_file($_FILES["savefile"]["tmp_name"], $target_file) ){
				echo '<script>
						  function checkFile(){	
							var msg = document.getElementById("message");
							
							message.style.backgroundColor = "#5fa918";
							
							msg.innerHTML	= "Yes! File uploaded successfully"
						  }	
						  window.checkFile();
					  </script>
					 
					';
			}
			else{
				echo '<script>
						  function checkFile(){	
							var msg = document.getElementById("message");
							
							message.style.backgroundColor = "#a94442";
							
							msg.innerHTML	= "Sorry, there was an error uploading the file."
						  }	
						  window.checkFile();
					  </script>
					 
					';
			}
		}
			
							
		else{
			echo "Your file must be a .doc, .docx, .xls or .ppt.";
		}
	
	}
	$location = "editcourse.php?key=".$course;

	echo '<META HTTP-EQUIV="Refresh"  Content="0; URL='.$location.'" />';
                
?>