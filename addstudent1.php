<?php
	session_start(); 
	
	if(empty($_SESSION["login"])){
		header("Location: login.php");
	}
?>
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
			include 'seniormenu.php';
		?>
	</div>

	<div id = "content">
		
		<div id="signup">
			<form class="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" onsubmit="return Check()" >
				<h1>Add Student</h1><br/><br/>
				
				ID: <input type='number' min="001" max="9999999" name='ID' required /><br/><br/>
				First Name: <input type='text' name='fname' required/> <br/><br/>
				Last Name: <input type='text' name='lname' required /><br/><br/>
				Program: <input id="p"  type="text" name="program" /><br/><br/>
				Major 1: <input id="m1" type="text" name="major1"/><br/><br/>
				Major 2: <input id="m2" type="text" name="major2"/><br/><br/>
				Year: <input type="text" style="text-align: center;" name="year" value="<?php echo date("Y-m-d");?>" readonly/><br/><br/>
				Division 1: <input type="number" min="001" max="9999999" name="division1"required /><br/><br/>
				Division 2: <input type="number" min="001" max="9999999" name="division2"/><br/><br/>
				<div id="bubble" class="bubble" style="">
					<p id="message" class="message" style="width: 300px; padding: 10px; text-align: center; color: white; border-radius: 15px" ></p>
				</div><br/><br/>
							
				<input type="submit"> <input type="reset">
				
				<script>
					function Check(form){
						//GET REPRESENTATIVE
						
						var p  = document.getElementById("p").value;
						var m1 = document.getElementById("m1").value;
						var m2 = document.getElementById("m2").value;
						
						
						
						
						
						
					}
				
				
				</script>
				
			</form>
		</div>
	</div>
	<div id="footer">
		<?php include 'footer.php';?>
	</div>	
	<?php
		
		//DEFINE VARIABLES
		$id = $name = $program = $major1 = $major2 = $year = $division1 = $division2 = "";
		if($_SERVER["REQUEST_METHOD"] == "POST" ){

			//GET FORM DATA
			$id = $_POST["ID"];
			$name = ucwords(strtolower($_POST["fname"] . " " .$_POST["lname"]));
			$program = $_POST["program"];
			$major1 = $_POST["major1"];	
			$major2 = $_POST["major2"];
			$year = $_POST["year"];	
			$division_id1 = $_POST["division1"];
			$division_id2 = $_POST["division2"];	
			
			//IF PROGRAM AND MAJOR 1 IS NOT EMPTY OR PROGRAM AND MAJOR 2! DISPLAY ERROR 
			if(!empty($program && ($major1 || $major2))){
				exit('<script>
						  function checkName(){	
							var msg = document.getElementById("message");
							
							message.style.backgroundColor = "#a94442";
							
							msg.innerHTML	= "Error! You cannot select a program and a major as a combination"
						  }	
						  window.checkName();
					  </script>
					');
			}
			
			if( $program == "" && $major1=="" && $major2==""){
				exit('<script>
						  function checkName(){	
							var msg = document.getElementById("message");
							
							message.style.backgroundColor = "#a94442";
							
							msg.innerHTML	= "Please select a program/major";
						  }	
						  window.checkName();
					  </script>
					');
			}
			
			if(!empty($program && $division2)){
				exit('<script>
						  function checkName(){	
							var msg = document.getElementById("message");
							
							message.style.backgroundColor = "#a94442";
							
							msg.innerHTML	= "Error! You cannot select a program and a second division as a combination"
						  }	
						  window.checkName();
					  </script>');
			}
			
			if($program == "" && ( ($major1 != "" && $major2 == "") || ( $major1 == "" && $major2 != "" ) ) ){
				exit('<script>
						  function checkName(){	
							var msg = document.getElementById("message");
							
							message.style.backgroundColor = "#a94442";
							
							msg.innerHTML	= "Error! A second major should definitely be selected."
						  }	
						  window.checkName();
					  </script>');
			}
			
			if( $major1 != "" && $major2 != "" && $division2 == ""){
				exit('<script>
						  function checkName(){	
							var msg = document.getElementById("message");
							
							message.style.backgroundColor = "#a94442";
							
							msg.innerHTML	= "Error! A a student with two majors are in two divisions. Please enter a second division."
						  }	
						  window.checkName();
					  </script>');
			}

			//ESTABLISH CONNECT
			$con = mysql_connect("localhost", "root", "");
			
			//CONNECT TO DB
			$db = mysql_select_db("sis");
			
			//SEARCHING TABLE FOR ID(PRIMARY KEY)
			$rs5 =mysql_query("SELECT * FROM students where id=$id ");
								
			if(!$con || !$db || !$rs5 ){
				die('Error: '.mysql_error());
			}	
			else{
				if(mysql_num_rows($rs5) > 0 ) {
					 echo '<script>
							  function checkName(){	
								var msg = document.getElementById("message");
								
								message.style.backgroundColor = "#a94442";
								
								msg.innerHTML	= "The user already exists in the database."
							  }	
							  window.checkName();
						  </script>'; 
				}
				else{ 

					//MAKE QUERY 1
					
					
					if(empty($program)){
						$rs = mysql_query("INSERT INTO students(id, name, major1, major2, year, division_id1, division_id2) VALUES($id, \"$name\", \"$major1\", \"$major2\", \"$year\", \"division_id1\", \"division_id2\" )") or die('Error: '.mysql_error());
					
									
					}
					else{
						$rs1 = mysql_query("INSERT INTO students(id, name, program, year, division_id1) VALUES($id, \"$name\", \"$program\", \"$year\", \"$division_id1\" )") or die('Error: '.mysql_error());
					}	
					
					echo '<div id="ani" class="success"><img src="imgs/tick.png"/>Success, student added to the database. They can now sign up.</div>';
				
					//ADD TO STUDENT XML FILE
					$xml= simplexml_load_file("students.xml") or die("Error: Cannot create object");
			
					//ADD STUDENT
					$newstudent = $xml->addChild("student","");
					
					//ADD ID ATTRIBUTE
					$newstudent->addAttribute("id", $id);
										
					$dom = new DOMDocument('1.0'); 
					$dom->preserveWhiteSpace = false; 
					$dom->formatOutput = true; 
					$dom->loadXML($xml->asXML()); 
					$dom->saveXML();
					$dom->save("students.xml");
					
				}
			}
		
		}
		
	?>

</div>
</body>
</html>