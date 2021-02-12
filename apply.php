<!DOCTYPE html>
<html>
<head>
    <title>
        Barbados Community College - Application Form
    </title>
	<link rel="shortcut icon" href="imgs/titleimg.gif" />
    <link rel="stylesheet" href="style.css" type="text/css"/>
</head>
<body class="applyBody">

<div id="wrap" class="applyWrap">

    <div id = "header">
		<img src="imgs/bcclogo.gif" alt="log" />
		<span style="float: right; padding-top: 10px;"><img src="imgs/portal.png" alt="portal photo" width="" height="150px"/></span>
		
	</div>

	<div id="menu">
		<ul>
			<li><a href="login.php">Home</a></li>
		</ul>
	</div>
	
				
    <div id="content" class="applyContent">
		<h1>Barbados Community College </h1>
		<br/>
		<h2 style="color: #585858;">Application Form</h2> 
            </span>
        
        <hr>
        <form class="apply" action="post.php" method="post">
			
			<!--TABLE A STARTS-->
			
			<div>
				Have you previously applied to the college? 
				<div style="width: 500px">If yes, state year  <input type="date" name="applied" /> <label for="neverapplied">No <input id="" type="radio" name="neverapplied" id="neverapplied" value="" /> </label></div>
			</div>
			<br/><br/>
			
			<div>
				Sex: <label for="female">Female</label/><input type="radio" name="sex" id="female" value="female" required> <label for="male">Male</label/> <input type="radio" name="sex" id="male" value="male" required> 
			</div>
			
			<div style="margin-left: 6%">
				Marital Status: <label for="single">Single</label> <input type="radio"name="status" value="single" id="single" required> <label for="married">Married</label> <input type="radio" name="status" value="married" id="married" required>
			</div>
			
			<div style="margin-left: 6%">
				Barbados I.D #:<input type="text" name="barbadosid" placeholder="Registration Number" required/> 
            </div>
			
			<div>
				Legal Name: <input type="text" name="fname" placeholder="First Name" required/> | <input type="text" name="middlename1" placeholder="Middle Name" required/> | <input type="text" name="middlename2" placeholder="Middle Name" required/> | <input type="text" name="lname" placeholder="Last Name" required/> 
			</div>
			
			<div>
				Address: <br/><br/> <textarea name="address" placeholder="Address" cols="30" rows="5" required></textarea>
			</div>
						
			<div style="margin-left: 20%">
				Mailing Address: <br/><br/> <textarea name="maddress" placeholder="Mailing Address" cols="30" rows="5" required></textarea> <br/><br/>	
			</div>	
			
			<div>
				E-mail Address: <input type="email" name="email" placeholder="Email Address" required/>
			</div>
			
			<div>
				Telephone no: <input value="" type="number" name="home" placeholder="Home #" required/>
				| <input type="number" value="" name="work" placeholder="Work #" required/> | <input type="number" value="" name="ext" placeholder="Work ext#" required/>
				| <input type="number" value="" name="cell" placeholder="Cell #" required/>
			</div>
						
			<div>
				Date of Birth: <input type="date" name="dob"  required/><br/><br/>
			</div>
			
			<div style="margin-left: 15%">
				Country of Birth: <input type="text" name="birthcountry" placeholder="Country of Birth" required/> &nbsp; &nbsp; &nbsp; &nbsp; 
			</div>
			
			<div style="clear: both; margin-bottom: 5%;">
				Nationality:<input type="text" name="nationality" placeholder="Nationality" required/>
			</div>
			         
			
			<hr style="margin-top: 2%;"/>
			
			<!--TABLE B STARTS-->
			
					<!----------SUBMISSION------------>
			<div id="buttons">		
				<input type="submit" name="submit" value="Submit" style="width: 80px;background-color: #585858;color: white;"/> 
				
				<input type="reset" style="width:80px;background-color: white;color: #585858;"/>
			</div>
		</form>
	</div>
            
	<?php
		//DEFINE VARIABLES
		 $name = $Dob = $Address = $Applied = $Sex = $RegistrationNumber = $Email = $HomeNumber = $WorkNumber = $CellNumber = $MailingAddress = $CountryofBirth = $Nationality = $Status = $emergency_contact = $Home = $Cell = $Work = $major1 = $major2 = $major3 = $program1 = $program2 ="";
				
		if($_SERVER["REQUEST_METHOD"] == "POST" ){
			
		
			$Name = ucwords($_POST["fname"]." ".$_POST["lname"]." ".$_POST["middlename1"]." ".$_POST["middlename2"]);
						
			$Dob = $_POST["dob"];
			
			$Address = $_POST["address"];
			
			$Applied = $_POST["applied"];
						
			$Sex = $_POST["sex"];
			
			$RegistrationNumber = $_POST["barbadosid"];
						
			$Email = $_POST["email"];
			
			$ext = $_POST["ext"];
			
			if(empty($_POST["home"])){
				$HomeNumber = null; 
			}	
			else{
				$HomeNumber = format_phone($_POST["home"]);
			}
			
			if(empty($_POST["work"])){
				$WorkNumber = null; 
			}
			else{
				$WorkNumber = format_phone($_POST["work"])." ext-".$ext;
			}
						
			if(empty($_POST["cell"])){
				$CellNumber = null; 
			}
			else{
				$CellNumber = format_phone($_POST["cell"]);
			}
			
			$MailingAddress = $_POST["maddress"];
									
			$CountryofBirth = $_POST["birthcountry"];
			
			$Nationality = $_POST["nationality"];
			
			$Status = $_POST["status"];
						
/* 			$Emergency_contact = $_POST["emergencycontact"];
			
			$ehome = $_POST["ehome"];
			
			$ecell = $_POST["ecell"];
			
			$ework = $_POST["ework"];
			
			$major1 = $_POST["major1"];
						
			$major2 = $_POST["major2"];
			
			$major3 = $_POST["major3"];
			
			$program1 = $_POST["program1"];
			
			$program2 = $_POST["program2"]; */
				
			
			
				//echo '<div id="ani" class="info"><img src="imgs/info.png"/>Information saved. Please await acceptance.</div>';
				
				//echo "Your id is ".$newid;	
				
			//SHOW IN PDF
			require("fpdf17/fpdf.php");
			$pdf = new FPDF();
			$pdf->AddPage();
			$pdf->SetFont("Arial", "B", 16);
			$pdf->Cell(0,10, "Welcome {$Name}",1,0,C);
			$pdf->output();				
			//include 'makepdf.php';
			
			
		
		}//END POST
		
		
		function format_phone($phone){
		
			$phone = preg_replace("/[^0-9]/", "", $phone);
		 
			if(strlen($phone) == 7)
				return preg_replace("/([0-9]{3})([0-9]{4})/", "$1-$2", $phone);
			elseif(strlen($phone) == 10)
				return preg_replace("/([0-9]{3})([0-9]{3})([0-9]{4})/", "($1) $2-$3", $phone);
			else
				echo $phone;
		}
			
	?>
			
<?php include 'footer.php'?>
   