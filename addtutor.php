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
			<form class="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
				<h1>Add Tutor</h1><br/><br/>
				
				ID:  <input type='number' min="1" max="9999999" name='tutorID' /><br/><br/>
				
				First Name: <input type='text' name='fname' /> <br/><br/>
				
				Last Name: <input type='text' name='lname' /><br/><br/>	 
				
				Division ID: <input name="divid" type="number" value="<?php echo $_SESSION["division"]; ?>" readonly /><br/><br/>
			
				Course 1: <input name="course1" type="text" required /><br/><br/>
						
				Course 2: <input name="course2" type="text" /><br/><br/>
				<div id="bubble" class="bubble" style="">
					<p id="message" class="message" style="width: 300px; padding: 10px; text-align: center; color: white; border-radius: 15px" ></p>
				</div>
							
				<input type="submit"> <input type="reset">
				
			</form>
			
				<?php
		
					//DEFINE VARIABLES
					$id = $name = $division_id = $course1 = $course2 = "";
					
					if($_SERVER["REQUEST_METHOD"] == "POST" ){

						//GET FORM DATA
						$id = $_POST["tutorID"];
						$name = ucwords(strtolower($_POST["fname"]) . " " .($_POST["lname"]));
						$division_id = $_POST["divid"];
						$course1 = $_POST["course1"];
						$course2 = $_POST["course2"];
						
						if($course1 == $course2){
							$course2 = null;
						}
						
						//ESTABLISH CONNECT
						$con = mysql_connect("localhost", "root", "");
						
						//CONNECT TO DB
						$db = mysql_select_db("sis");
						
						$select = mysql_query("SELECT * FROM course WHERE name=\"$course1\" ") or die('Error: '.mysql_error());
						$select1 = mysql_query("SELECT * FROM course WHERE name=\"$course2\" ") or die('Error: '.mysql_error());
						
						$select2 = mysql_query("SELECT * FROM tutors WHERE id=$id ") or die('Error: '.mysql_error());
												
						if(mysql_num_rows($select2) > 0) {
							 exit('<script>
									  function checkName(){	
										var msg = document.getElementById("message");
										
										message.style.backgroundColor = "#a94442";
										
										msg.innerHTML	= "The tutor exists in the database."
									  }	
									  window.checkName();
								  </script>'); 
						}
						
						if(mysql_num_rows($select) < 1 || mysql_num_rows($select1) < 1 ) {
							 exit('<script>
									  function checkName(){	
										var msg = document.getElementById("message");
										
										message.style.backgroundColor = "#a94442";
										
										msg.innerHTML	= "The course doesn\'t exists in the database."
									  }	
									  window.checkName();
								  </script>'); 
						}
						
						
						if($course2 == ""){
							//MAKE QUERY 1
							$rs1 = mysql_query("INSERT INTO tutors(id, name, division_id, course1) VALUES($id, \"$name\", $division_id, \"$course1\" )");
						}
						else{
							$rs1 = mysql_query("INSERT INTO tutors VALUES($id, \"$name\", $division_id, \"$course1\", \"$course2\" )");
						}
						
						if(!$con || !$db || !$rs1){
							die('Error: '.mysql_error());
						}
						else{
							
							//ADD TO TUTORS XML FILE
							$xml= simplexml_load_file("tutors.xml") or die("Error: Cannot create object");
					
							//ADD STUDENT
							$newtutor = $xml->addChild("tutor","");
							
							//ADD ID ATTRIBUTE
							$newtutor->addAttribute("id", $id);
							
							//IF COURSE TWO IS EMPTY, ADD ONE COURSE
							if($course2 == ""){
								$newtutor->addChild("course", $course1);
							}
							else{
								$newtutor->addChild("course", $course1);
								$newtutor->addChild("course", $course2);
							}	
							
							$dom = new DOMDocument('1.0'); 
							$dom->preserveWhiteSpace = false; 
							$dom->formatOutput = true; 
							$dom->loadXML($xml->asXML()); 
							$dom->saveXML();
							$dom->save("tutors.xml");
						
							echo '<div id="ani" class="seniorsuccess"><img src="imgs/tick.png"/>Success, A new tutor has been added to your division.</div>';
						}
								
					}
							
				?>
		</div>
	
	</div>
	
	<div id = "footer">
		<?php include 'footer.php'; ?>
	</div>



</div>
</body>
</html>
