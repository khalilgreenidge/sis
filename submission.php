<?php session_start(); 
	
	$course = $document = "";
	
	if(isset($_GET["course"])){
		$course = $_GET["course"];
		
		//SANITIZE STRING
		$course = filter_var($course, FILTER_SANITIZE_STRING);
	}	
	if(isset($_GET["key"])){
		$document = $_GET["key"];
		
		//SANITIZE STRING
		$document = filter_var($document, FILTER_SANITIZE_STRING);
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
	<?php include 'header.php';?>
</div>

<div id = "menu">
<?php include 'studentmenu.php' ?>
</div>

<div id = "content">
<div class = "submissionDisplay">

<h1>SUBMISSION</h1>
<table border="1" class = "displaySubInfo">
<tr >
	<td>
		Available From:
	</td>
	<td>
		Wednesday, 1st April, 9:00am
	</td>
</tr>

<tr>
	<td>
		Due Date:
	</td>
	
	<td>
       <!--if(isset($_GET["key"])){
            //GET DATE FROM DATABASE
        }
        
        if(strtotime("now") > $dbDate){
            //TOO LATE
        }
        ELSE{
            //SHOW DATE
        }-->
		Monday, 11th May, 11:59pm
	</td>
</tr>
</table>
</div>

		<div class = "uploadFile">
			<form class="form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" onsubmit="return check()" method="post" enctype="multipart/form-data" onsubmit="return check()">
							
				File: <input id="uploadFile" placeholder="Choose File" disabled="disabled" />
							<div class="fileUpload btn btn-primary" style="  background-color: #FF4000;
							color: white;  border-radius: 7px;">
								<span>Upload</span>
								<input id="uploadBtn" onchange="check()" type="file" name="pic" class="upload"  required/>
							</div>
				<div id="bubble" class="bubble" style="margin: 0 auto;">
					<p id="message" class="message" style="padding: 10px; text-align: center; color: white; border-radius: 15px" ></p>
				</div>	
				<input type="hidden" name="course" value="<?php echo $course;?>"/>
				<input type="hidden" name="document" value="<?php echo $document;?>"/>
				<input type="submit"/> <input type="reset" />	
		</form> 	
		<script>
			
			String.prototype.capitalizeFirstLetter = function() {
				return this.charAt(0).toUpperCase() + this.slice(1);
			}
			
			
			
			function check(){
				var btn = document.getElementById("uploadBtn");
				var file = document.getElementById("uploadFile").value = btn.value;
				var msg = document.getElementById("message");
				
				
				
				if( file.slice(-3) == "doc" || file.slice(-4) == "docx" || file.slice(-3) == "xls" || file.slice(-3) == "ppt" ){
					msg.innerHTML	= "";
					msg.style.backgroundColor = "#ffffff";
					return true;
					
				}
				else{
					msg.style.backgroundColor = "#a94442";
					msg.innerHTML	= "Your file must be a .doc, .docx, .xls or .ppt.";
					return false;
				}
			}
			
		</script>

<?php
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		
		//ADD NEW PIC
		$name = preg_replace('/\s+/', '', $_SESSION["name"]);
		$course = $_POST["course"];
		$document = $_POST["document"];
		$target_dir = $course."/submissions/".$document."/".$name;
		$ext = pathinfo($_FILES["pic"]["name"], PATHINFO_EXTENSION);
		
		// Check if image file is a PNG image  
		if($ext == "doc" || $ext == "docx" || $ext == "xls" || $ext == "ppt"){
			//ERROR
		
			$target_file = $target_dir .".". $ext;
			
			if(move_uploaded_file($_FILES["pic"]["tmp_name"], $target_file) ){
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
?>
</div>

</div>

<div id = "footer">
	<h3>Barbados Community College - Web Portal</h3>
	<p>&copy; 2000 - <?php echo date("Y"); ?>, The Barbados Community College<br/>
	developed by: Khalil Greenidge & Romario Bates</p>
	</p>
</div>

</div>
</body>
</html>