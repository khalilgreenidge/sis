 <?php
	//EDIT HERE FOR EVERY ASSIGNMENT, TEST, ETC.
    $savecontent = $_POST['test1'];
    $course = $_POST["course"];

	//EDIT HERE FOR EVERY ASSIGNMENT, TEST, ETC.	
    $loadcontent = $course."/info/test1.txt";
   
    $savecontent = stripslashes($savecontent);
    
	$fp = fopen($loadcontent, "w");
    
    fwrite($fp, $savecontent);
	
    fclose($fp);
    
    $course = $_POST["course"];
    
	$location = "editcourse.php?key=".$course;

	echo '<META HTTP-EQUIV="Refresh"  Content="0; URL='.$location.'" />';            
?>