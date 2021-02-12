<!DOCTYPE html>
<html>
<head>
	<title>Barbados Community College - Web Portal</title>
	<link rel="shortcut icon" href="imgs/titleimg.gif" />
	<link rel="stylesheet" type="text/css" href="style.css" media="screen" />
	<link href = 'http://fonts.googleapis.com/css?family=Open+Sans' rel = 'stylesheet' = type = 'text/css'>
</head>
<body>

<div id="wrap" class="signupWrap">

	<div id = "header">
		<img src="imgs/bcclogo.gif" alt="log" />
		<span style="float: right; padding-top: 10px;"><img src="imgs/portal.png" alt="portal photo" width="" height="150px"/></span>
	</div>

	<div id = "menu">
		<ul>
			<li><a href="login.php">Home</a></li>
		</ul>
	</div>

	<div id="content" class="signupContent">
		
		<h1>Sign up</h1>
		
			<form class="signupForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" onsubmit="return (checkPattern() && checkPass())" >
				<h1>Sign up</h1>
				<br/> <br/>
				<div>First Name: <input type='text' name='fname' /> </div>
				
				<div>Last Name: <input type='text' name='lname' /></div>
								
				<div>Email: <input type="email" name="email" /></div>
				
				<div>Password: <input type='password' name='pwd' id="pass1" onkeyup="checkPattern()" /></div>
				
				<div>Confirm password: <input type='password' name='pwd' id="pass2" onkeyup="checkPass()" /></div>
				
				<br/>
											
				<div><label for="student">Student</label> <input type="radio" id="student" name="typeOfUser" value="students"/> 
				
				<label for="tutor">Tutor</label> <input id="tutor" type="radio" name="typeOfUser" value="tutors"/></div>
				
				<div id="bubble" class="bubble" style="">
					<p id="message" class="message" style="width: 300px; padding: 10px; text-align: center; color: white; border-radius: 15px" ></p>
				</div>
							
				<div style="width: 200px; margin: 3% auto;"><input type="submit" /> <input type="reset" style="float: right;" /></div>
				
			</form>
			
			<script>
			
				function checkPattern(form){
					var x = document.getElementById("pass1");
					var decimal =  /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,30}$/;  
					var message = document.getElementById('message');
					//Set the colors we will be using ...
					var goodColor = "#5fa918";
					var badColor = "#a94442";
					
					if(x.value.match(decimal)){   
						message.style.backgroundColor = goodColor;
						message.innerHTML = "Pattern Correct";
						return true;  
					}  
					else{   
						message.style.backgroundColor = badColor;
						message.innerHTML = "Must be at least 8 characters and less than 30, at least one lowercase letter, uppercase letter, and one numeric digit";
						return false;  
					}  
				}
			
				function checkPass(form){
					//Store the password field objects into variables ...
					var pass1 = document.getElementById('pass1');
					var pass2 = document.getElementById('pass2');
					//Store the Confimation Message Object ...
					var message = document.getElementById('message');
					//Set the colors we will be using ...
					var goodColor = "#5fa918";
					var badColor = "#a94442";
					//Compare the values in the password field 
					//and the confirmation field
					
					if(pass1.value == pass2.value){
						//The passwords match. 
						//Set the color to the good color and inform
						//the user that they have entered the correct password 
					
						message.style.backgroundColor = goodColor;
						message.innerHTML = "Passwords Match!"
						return true;
					}
					else{
						//The passwords do not match.
						//Set the color to the bad color and
						//notify the user.
						
						message.style.backgroundColor = badColor;
						message.innerHTML = "Passwords Do Not Match!"
						return false;
					}
					
								
				}
				
				
			</script>
			
		
		
		<p><a href="login.php">Login</a></p>
	</div>

	<div id="footer" class="signupFooter">
		<?php include 'footer.php'; ?>
	</div>

	<?php
		
		//DEFINE VARIABLES
		
		if($_SERVER["REQUEST_METHOD"] == "POST" ){

			//GET FORM DATA
			$pwd = md5($_POST["pwd"]);
			$gender = $_POST["gender"];
			$name = ucwords(strtolower(test_name($_POST["fname"]) . " " .test_name($_POST["lname"])));
			$email = $_POST["email"];
			$typeOfUser = $_POST["typeOfUser"];	
			
			$hash = md5($email.time());

			//ESTABLISH CONNECT
			$con = mysql_connect("localhost", "root", "");
			
			//CONNECT TO DB
			$db = mysql_select_db("sis");
			
			//MAKE QUERY 1
			//FIRST CHECK THE USER TABLE
			
			$rs1 = mysql_query("SELECT * FROM users WHERE id=$id ");
					
			if(!$con || !$db ){
				die('Error: '.mysql_error());
			}
			else{
		
				/*
				if Student/tutor is not in the table, they have not been accepted or employed respectively
				
				if student is now applying, the senior tutor must accept them --> confirm email sent to senior tutor
				if tutor is now applying they are accepted straight ahead as a user
				*/
				if(mysql_num_rows($rs1) > 0){
					
					//USER ADDED --> EXIT
					echo '<script>
							function checkUser(){	
								var msg = document.getElementById("message");
									
								message.style.backgroundColor = "#a94442";
									
								msg.innerHTML	= " Your id -'.$id.'- is not available."
							}	
							window.checkUser();
						  </script>';
					exit();
					
					
				}
				
				//MAKE QUERY 1
				$rs2 = mysql_query("SELECT * FROM $typeOfUser WHERE id=$id ") or die('Error: '.mysql_error());
					
			
				//VALIDATION
				if(mysql_num_rows($rs2) > 0 && $typeOfUser == "students") {
					
					$startDate = date("Y-m-d", strtotime("now"));
					$endDate = date("Y-m-d", strtotime("today +7 days"));
					
					$rs3 = mysql_fetch_array(mysql_query("SELECT * FROM students WHERE id='$id' ")) or die('Error: '.mysql_error());
					
					$studentDivision = $rs3["division_id1"];
					
					$rs3 = mysql_fetch_array(mysql_query("SELECT senior_tutor_email FROM divisions WHERE division_id='$studentDivision' ")) or die('Error: '.mysql_error());
					
					$email = $rs3["senior_tutor_email"];
					
					$typeOfUser = "student";
					
					$rs3 = mysql_query("INSERT INTO activation_links VALUES('$hash', '$startDate', '$endDate' )") or die('Error: '.mysql_error());
					$rs3 = mysql_query("INSERT INTO registration VALUES('$hash', $id, '$pwd', '$gender', '$name', '$email', '$typeOfUser')") or die('Error: '.mysql_error());

					
					//SEND MAIL TO SENIOR TUTOR
					include 'confirmmail.php';
					
				}
				else if(mysql_num_rows($rs2) > 0 && $typeOfUser == "tutors" ){
					//ADD TO USER TABLE
					$typeOfUser = "tutor";
					$rs4 = mysql_query("INSERT INTO users VALUES($id, '$pwd', '$gender', '$name', '$email', '$typeOfUser' )") or die('Error: '.mysql_error());			
					echo '<div id="ani" class="success"><img src="imgs/tick.png"/>Success, you can now login</div>';
				}
				else{
					
					if($typeOfUser == "tutors"){
						echo '<div id="ani" class="warning"><img src="imgs/warning.png"/>Please tell your senior tutor to add you to the database</div>';
					}
					else{
						echo '<div id="ani" class="warning"><img src="imgs/warning.png"/>You must first apply to BCC. Please apply and await acceptance</div>';
					}
					
				}
				

			}
			mysql_close($con);
		}
		
		function test_name($data){
			if (!preg_match("/^[a-zA-Z ]*$/", $data)) {
			  echo '<script>
						  function checkName(){	
							var msg = document.getElementById("message");
							
							message.style.backgroundColor = "#a94442";
							
							msg.innerHTML	= "Only letters and white space allowed."
						  }	
						  window.checkName();
					  </script>
					 window.checkName();
					';
					exit();
			}
			else{
				return $data;
			}
		}
		
	?>

</div>
</body>
</html>
