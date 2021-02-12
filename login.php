<?php 
	session_start();
	
	if(isset($_SESSION["login"])){
		header("Location: signout.php");
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

<body class="loginBody">

<div id="wrap" class="loginWrap">

	<div id = "header">
		<img src="imgs/bcclogo.gif" alt="logo" />
		<span style="float: right; padding-top: 10px;"><img src="imgs/portal.png" alt="portal photo" width="" height="150px"/></span>
	</div>

	<div id = "menu">
	<?php
		
	if(empty($_SESSION)){
		echo"<br/>
		<br/>
		<br/>";
	}
	else{
		 include("menu.php");
	}
	?>
	</div>

	<div id = "content" class="loginContent">
		<h1>Barbados Community College - Web Portal</h1>
		<div id="slideshow">
		
		</div>
		<br/>
		<br/>
		<form class="loginForm" style="width: 300px;" action='<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>' method='post'>
			<h1>Login</h1>
			
			Email: <input type='text' value="v.branker@bcc.edu.bb" min='0' max='9999999' name='email' style="left: 40%" /><br/><br/>
			Password: <input type='password' value="P@ssw0rd" name='pwd'  style="left: 40%" /><br/>
			
			<div id='bubble' class='bubble'>
				<p id='message' class='message' style='padding: 10px; text-align: center; color: white; border-radius: 15px' ></p>
			</div>
			<input style="" type='submit' value='Login' /> 
			<br/>
		</form>
		<br/><br/>		
		<?php
			$id = $password = "";
			
						
			//CHECKS IF PERSON HAS NOT LOGGED IN
			if( $_SERVER["REQUEST_METHOD"] == "POST"){

				if($_POST["email"] == "v.branker@bcc.edu.bb"){
					$_SESSION["id"] = 111;
					$_SESSION["login"] = "yes";
					$_SESSION["name"] = "Vincent Branker";
					$_SESSION["typeOfUser"] = "tutor";
					$_SESSION["division"] = "Computer Science";

					//GET COURSE TUTOR TEACHES
					$course1 = "Web Applications";
					$course2 = "Major Project";
					
					//WRITE IT TO THE MENU
					include 'writemenu.php';

					header("Location: tutordashboard.php");
				}

				else if($_POST["email"] == "s.rouse@bcc.edu.bb"){
					$_SESSION["id"] = 111;
					$_SESSION["login"] = "yes";
					$_SESSION["name"] = "Samuel Rouse";
					$_SESSION["typeOfUser"] = "seniortutor";
					$_SESSION["division"] = 1;

					header("Location: seniordashboard.php");
				}
				

				/*
				$id = $_POST["id"];
				$password = md5($_POST["pwd"]);
							
				//ESTABLISH CONNECT
				$con = mysqli_connect("localhost", "root", "");
				
				//CONNECT TO DB
				$db = mysqli_select_db($con, "sis");
				
				//MAKE QUERY 1
				$rs1 = mysqli_query($con, "SELECT * FROM users WHERE id=$id ");
				
				
				if(!$con || !$db || !$rs1 ){
					die("Error: ".mysqli_error($con));
				}
				else{
					
					//IF USER IS FOUND IN USER TABLE DO THIS
					if(mysqli_num_rows($rs1) > 0){
					
						//GET DATA USERNAME AND PASSWORD FROM USERS TABLE
						while($row = mysqli_fetch_array($rs1)){
							$dbid = $row["id"];
							$dbpassword = $row["password"];	
							$dbname = $row["name"];	
							$type = $row["typeOfUser"];
						}
						//VERIFICATION
						if($id == $dbid && $password == $dbpassword){
							$_SESSION["id"] = $dbid;
							$_SESSION["login"] = "yes";
							$_SESSION["name"] = $dbname;
							$_SESSION["typeOfUser"] = $type;
							
							
							
							if($type == "tutor"){
							
								//MAKE QUERY
								$rs = mysqli_fetch_array(mysqli_query("SELECT division_id,course1,course2 FROM tutors where id = $id ")) or die('Error: '.mysqli_error());
								
								//GET COURSE TUTOR TEACHES
								$course1 = $rs["course1"];
								$course2 = $rs["course2"];
								$_SESSION["division"] = $rs["division_id"];
								
								//WRITE IT TO THE MENU
								include 'writemenu.php';
								
								//REDIRECT TO TUTOR DASHBOARD
								header("Location: tutordashboard.php");
							}
							
							elseif($type == "seniortutor"){
								$rs = mysqli_fetch_array(mysqli_query("SELECT division_id FROM tutors where id = $id ")) or die('Error: '.mysqli_error());
								
								$_SESSION["division"] = $rs["division_id"];
								
								header("Location: seniordashboard.php");
							}
							
							
							elseif($type == "student"){
								//STUDENT DASHBOARD
								header("Location: studentdashboard.php");
							}
							
							//SUCCESS
							
							
						}
						else{
							echo '<script>
									  function msg(){	
										var msg = document.getElementById("message");
										
										message.style.backgroundColor = "#a94442";
										
										msg.innerHTML	= "Incorrect username or password"
									  }	
									  window.msg();
								  </script>								 
								';
						}
			
					}
					else{
						
						echo '<script>
								  function msg(){	
									var msg = document.getElementById("message");
									
									message.style.backgroundColor = "#a94442";
									
									msg.innerHTML	= "Incorrect username or password"
								  }	
								  window.msg();
							  </script>	
							  <br/>';
						
						
					}
					
					
				}
				
				mysqli_close($con);
			
				*/
			}

		?>		
		<p>Want to apply for a degree? Click <a href="apply.php">here</a> </p>
		<a href='signup.php'>Sign up</a>

	</div>		
	<div id = "footer" class="loginFooter">
		<?php include 'footer.php';?>
	</div>

</div>
</body>
</html>