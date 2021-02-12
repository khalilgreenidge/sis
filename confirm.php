<html>
<head>
<title>Barbados Community College - Web Portal</title>
		<!--REDIRECTS TO LOGIN PAGE-->
	<!--<meta http-equiv="Refresh" content="15; URL=login.php" />-->
	<link rel="shortcut icon" href="imgs/titleimg.gif" />
	<link rel="stylesheet" type="text/css" href="style.css" media="screen" />
	<link href = 'http://fonts.googleapis.com/css?family=Open+Sans' rel = 'stylesheet' = type = 'text/css'>
</head>
<body>

<div id = "wrap" style="height: 500px;">

<div id = "header">
	<img src="imgs/bcclogo.gif" alt="log" />
	<span style="float: right; padding-top: 10px;"><img src="imgs/portal.png" alt="portal photo" width="" height="150px"/></span>
</div>



<div id = "content" style="height: 200px;">
		
	<?php
		//IF LINK IS ACTIVATED OR EXPIRED --> SHOW ERROR. ELSE --> DISPLAY PAGE AND ADD USER TO DATABASE
		$hash = $dbendDate = $mkdate = $today = $dbuser = $dbpwd = $dbgender = $dbname = $dbemail = '';
		
		//GET TODAY'S DATE
		$today = strtotime("now");								
		
		if(isset($_GET['hash'])):
			//extract hash
			$hash = $_GET['hash'];
			//SANITIZE STRING
			$hash = filter_var($hash, FILTER_SANITIZE_STRING);
			
		endif;
		
		//ESTABLISH CONNECT
		$con = mysql_connect("localhost", "root", "");
				
		//CONNECT TO DB
		$db = mysql_select_db("sis");
				
		//MAKE QUERY 1
		$rs1 = mysql_query("SELECT * FROM activation_links WHERE hash='$hash' ");// or die('Error :'.mysql_error());
		$rs2 = mysql_query("SELECT * FROM registration WHERE hash='$hash' "); // or die('Error :'.mysql_error());
							
		if(!$con || !$db || !$rs1 || !$rs2){
			echo "Error: ".mysql_error();
		}
		else{
			//IF LINK IS ACTIVATED OR EXPIRED --> SHOW ERROR. ELSE --> DISPLAY PAGE AND ADD USER TO DATABASE
			
			while($row = mysql_fetch_array($rs1)){
				
				$dbendDate = $row["endDate"];
				
			}
			
			$dbendDate = strtotime($dbendDate);
			
			while($row = mysql_fetch_array($rs2)){
				//ASSIGN VARIABLES TO ADD USER
				$dbid = $row["id"];
				$dbpwd = $row["password"];
				$dbgender = $row["gender"];
				$dbname = $row["name"];
				$dbemail = $row["email"];
				$dbtype = $row["typeOfUser"];
			}
			if($today >= $dbendDate){
				//FAIL
			
				$rs = mysql_query("DELETE FROM activation_links WHERE hash='$hash' ") or die('Error: '.mysql_error());
			
				echo "<h2>Link Expired!</h2>";
				echo "<br/>";
				echo "He's dead jimmy!";
				echo ' <img src="imgs/x.png" width="20" height="20" />';
				echo '<img src="imgs/brokenlink.png" width="20" height="20" />';
				echo "<br/><br/>";
				
				$location = "login.php";
				//echo '<META HTTP-EQUIV="Refresh" Content="15; URL='.$location.'">';
			}
			else{
				//SUCCESS
				echo '<h1>Success</h1>';
				$rs = mysql_query("INSERT INTO users VALUES($dbid, '$dbpwd', '$dbgender', '$dbname', '$dbemail', '$dbtype' )") or die('Error: '.mysql_error());
				$rs = mysql_query("DELETE FROM activation_links WHERE hash='$hash' ") or die('Error: '.mysql_error());
				
			}
			
		}
		mysql_close($con);
	
	?>

</div>
<div id = "footer">
	<?php include 'footer.php'; ?>
</div>

</body>
</html>