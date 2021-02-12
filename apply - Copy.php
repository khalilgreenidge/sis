<!DOCTYPE html>
<html>
<head>
    <title>
        Barbados Community College - Application Form
    </title>
	<link rel="shortcut icon" href="imgs/titleimg.gif" />
    <link rel="stylesheet" href="style.css" type="text/css"/>
</head>
<body>

<div id="wrap">

    <div id = "header">
		<img src="imgs/bcclogo.gif" alt="log" />
		<span style="float: right; padding-top: 10px;"><img src="imgs/portal.png" alt="portal photo" width="" height="150px"/></span>
		
	</div>

	<div id = "menu">
		<?php
		
			if(empty($_SESSION)){
				echo"
				<a href ='login.php'>Home</a>
				";
			}
		?>
	</div>
	
	<div id="main-sidebar">
		<ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
			
			<!--MAIN NAVIGATION-->
            <li class="treeview">
              <a href="#">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
				<li><a href="index.php"><i class="fa fa-angle-double-right"></i> Dashboard</a></li>
				<li><a href="remainder.php"><i class="fa fa-angle-double-right"></i>Items Remaining</a></li>
			 </ul>
            </li>
            
						
			<!--ENTER RECORDS-->
            <li class="treeview">
              <a href="#">
                <i class="fa fa-bar-chart-o"></i>
                <span>Enter Records</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
				<li><a href="userloan.php"><i class="fa fa-angle-double-right"></i>Loan an asset</a></li>

              </ul>
            </li>
			
          </ul>
	</div>
			
    <div id="content" style="float: left; margin:0;min-height: 1000px">
		<h1>Barbados Community College </h1>
		<br/>
		<h2 style="color: #585858;">Application Form</h2> 
            </span>
        
        <hr>
        <form class ="apply" action="post.php" method="post">
			
			<!--TABLE A STARTS-->
		
            Have you previously applied to the college? 
			<br/><br/> If yes, state year  <input type="date" name="applied" /> <label for="neverapplied">No</label> <input id="" type="radio" name="neverapplied" id="neverapplied" value="" />
            <br/><br/><br/>
			
			<div>
				Sex: <label for="female">Female</label/><input type="radio" name="sex" id="female" value="female"> <label for="male">Male</label/> <input type="radio" name="sex" id="male" value="male"> 
			</div>
			
			<div style="margin-left: 6%">
				Marital Status: <label for="single">Single</label> <input type="radio"name="status" value="single" id="single"> <label for="married">Married</label> <input type="radio" name="status" value="married" id="married">
			</div>
			
			<div style="margin-left: 6%">
				Barbados I.D #:<input type="text" name="barbadosid" placeholder="Registration Number"/> 
            </div>
			<br/><br/><br/>
			
			<div>
				Legal Name: <input type="text" name="fname" placeholder="First Name"/> | <input type="text" name="middlename1" placeholder="Middle Name"/> | <input type="text" name="middlename2" placeholder="Middle Name"/> | <input type="text" name="lname" placeholder="Last Name"/> 
			</div>
			<br/><br/><br/>
			
			<div>
				Address: <br/><br/> <textarea name="address" placeholder="Address" cols="30" rows="5"></textarea>
			</div>
			
			
			<div style="margin-left: 20%">
				Mailing Address: <br/><br/> <textarea name="maddress" placeholder="Mailing Address" cols="30" rows="5"></textarea> <br/><br/>
				<br/><br/>	
			</div>	
			

			<div>
				E-mail Address: <input type="email" name="email" placeholder="Email Address"/>
				<br/><br/><br/>
			</div>
			

			<div>
				Telephone no: <input value="" type="number" name="home" placeholder="Home #"/>
				| <input type="number" value="" name="work" placeholder="Work #"/> | <input type="number" value="" name="ext" placeholder="Work ext#"/>
				| <input type="number" value="" name="cell" placeholder="Cell #"/>
				<br/><br/><br/>
			</div>
						
			<div>
				Date of Birth: <input type="date" name="dob" /><br/><br/>
			</div>
			
			<div style="margin-left: 15%">
				Country of Birth: <input type="text" name="birthcountry" placeholder="Country of Birth"/> &nbsp; &nbsp; &nbsp; &nbsp; 
			</div>
			
			<div style="clear: both;">
				Nationality:<input type="text" name="nationality" placeholder="Nationality"/>
				<br/><br/><br/><br/>
			</div>
			         
			
			<hr/>
			
			<!--TABLE B STARTS-->
			
					<!----------SUBMISSION------------>
			<div id="buttons">		
				<input type="submit" name="submit" value="Submit" style="width: 80px;background-color: #585858;color: white;"/> <input type="reset" style="width:80px;background-color: #585858;color: white;"/>
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
				
			
			//ESTABLISH CONNECT
			$con = mysql_connect("localhost", "root", "");
					
			//CONNECT TO DB
			$db = mysql_select_db("sis");
				
			//EXTRACT RESULTS
			
			//TABLE A
			$rs = mysql_query("INSERT INTO application_a(Name, DOB, Address, Applied, Sex, RegistrationNumber, Email, HomeNumber, WorkNumber, CellNumber, MailingAddress, CountryofBirth, Nationality, MaritalStatus)VALUES(\"$Name\", \"$Dob\", \"$Address\", \"$Applied\", \"$Sex\", \"$RegistrationNumber\", \"$Email\", \"$HomeNumber\", \"$WorkNumber\", \"$CellNumber\", \"$MailingAddress\", \"$CountryofBirth\", \"$Nationality\", \"$Status\")");
					
			$newid = mysql_insert_id($con);		
			/* //TABLE B			
			$rs1 = mysql_query("INSERT INTO application_b(emergency_contact, Home, Work, Cell)VALUES('$emergency_contact', '$Home', '$Work', '$Cell')") or die (mysql_error());
						
			//TABLE F			
			$rs2 = mysql_query("INSERT INTO application_f(major1, major2, major3, program1, program2)VALUES('$major1', 
						'$major2', '$major3', '$program1', '$program2')") or die (mysql_error()); */
						
			if(!$con || !$db || !$rs){
				die(mysql_error());
			
			}
			else{
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
				
			}
		
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
			
    <div id="footer">
        <?php include 'footer.php'?>
    </div>

</div>

<?php
/**
 * User: Romario
 * Date: 3/10/2015
 * Time: 11:46 PM
 */
?>
</body>
</html>