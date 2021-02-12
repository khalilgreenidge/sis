<?php
//DEFINE VARIABLES
		 $name = $Dob = $Address = $Applied = $Sex = $RegistrationNumber = $Email = $HomeNumber = $WorkNumber = $CellNumber = $MailingAddress = $CountryofBirth = $Nationality = $Status = $emergency_contact = $Home = $Cell = $Work = $major1 = $major2 = $major3 = $program1 = $program2 ="";
				
		if(!empty($_POST["submit"])){
			
		
			$Name = ucwords($_POST["fname"]." ".$_POST["lname"]." ".$_POST["middlename1"]." ".$_POST["middlename2"]);
						
			$Dob = $_POST["dob"];
			
			$Address = $_POST["address"];
			
			if(empty($_POST["applied"])){
				$Applied = null;
			}
			else{
				$Applied = $_POST["applied"];
			}			
				
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
			if($Sex == "male"){
				$abbr = "Mr.";
			}
			else if($Sex == "female" && $Status == "single"){
				$abbr == "Ms.";
			}
			
			else if($Sex == "female" && $Status == "married"){
				$abbr == "Mrs.";
			}
			
			//SHOW IN PDF
			
			include 'makepdf.php';
				
		
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

