
<?php include 'header.php' ?>

<div id = "content" class="menu"  style="height: 2900px;">
		
	<div id="middle">
	
		<h1>Welcome to	<?php echo $course; ?></h1> <button onclick="window.location.href='course.php?name=<?php echo $course; ?>'">Preview</button>
                
		<h4>Course Description</h4>
		<!--COURSE DESCRIPTION-->
		<form action="descriptionpost.php" method="post" onsubmit="return check()" enctype="multipart/form-data" >
			<textarea rows="5" cols="50" name="description" ><?php 
					$file = $course."/info/description.txt";
					if(file_exists($file)){
						$file = file_get_contents($course."/info/description.txt");
						echo $file;
					}
				?>
			</textarea> <br/>
		    <br><br>
        
            File: <input id="uploadFile" placeholder="Choose File" disabled="disabled" />
							<div class="fileUpload btn btn-primary" style="  background-color: #FF4000;
							color: white;  border-radius: 7px;">
								<span>Upload</span>
								<input id="uploadBtn" onchange="check()" type="file" name="savefile" class="upload" />
							</div>
            <div id="bubble" class="bubble" style="margin: 15px;">
				<p id="message" class="message" style="padding: 10px; text-align: center; color: white; border-radius: 15px" ></p>
            </div>	
            <input type="hidden" name="course" value="<?php echo $course;?>"/>
			<input type="submit" value="Submit"  /> 
        </form>
		<script>
			function check(){
				var btn = document.getElementById("uploadBtn");
				var file = document.getElementById("uploadFile").value = btn.value;
				var msg = document.getElementById("message");
				
				
				if(file != ""){
				
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
				else{
					return true;
				}
				
			}

		</script>	
		<br/>
		<hr/>
		<br/>
		<br/>
              
		<!--ASSIGNMENT ONE-->
		<h4>Assignment One</h4>
		<form action="assign1post.php" method="post" onsubmit="return check()" enctype="multipart/form-data" >
			<textarea rows="5" cols="50" name="assignment1" ><?php 
					$file = $course."/info/assignment1.txt";
					if(file_exists($file)){
						$file = file_get_contents($course."/info/assignment1.txt");
						echo $file;
					}
				?>
			</textarea> <br/>
		    <br><br>
        
            File: <input id="uploadFile" placeholder="Choose File" disabled="disabled" />
							<div class="fileUpload btn btn-primary" style="  background-color: #FF4000;
							color: white;  border-radius: 7px;">
								<span>Upload</span>
								<input id="uploadBtn" onchange="check()" type="file" name="savefile" class="upload" />
							</div>
            <div id="bubble" class="bubble" style="margin: 15px;">
				<p id="message" class="message" style="padding: 10px; text-align: center; color: white; border-radius: 15px" ></p>
            </div>	
            <input type="hidden" name="course" value="<?php echo $course;?>"/>
			<input type="submit" value="Submit"  /> 
        </form>
		<script>
			function check(){
				var btn = document.getElementById("uploadBtn");
				var file = document.getElementById("uploadFile").value = btn.value;
				var msg = document.getElementById("message");
				
				
				if(file != ""){
				
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
				else{
					return true;
				} 
				
			}

		</script>        
		<br/>
		<hr/> 
		<br/>
		<br/>
        
        <!--ASSIGNMENT TWO-->
		<h4>Assignment Two</h4>
		<form action="assign2post.php" method="post" onsubmit="return check()" enctype="multipart/form-data" >
			<textarea rows="5" cols="50" name="assignment2" ><?php 
					$file = $course."/info/assignment2.txt";
					if(file_exists($file)){
						$file = file_get_contents($course."/info/assignment2.txt");
						echo $file;
					}
				?>
			</textarea> <br/>
		    <br><br>
        
            File: <input id="uploadFile" placeholder="Choose File" disabled="disabled" />
							<div class="fileUpload btn btn-primary" style="  background-color: #FF4000;
							color: white;  border-radius: 7px;">
								<span>Upload</span>
								<input id="uploadBtn" onchange="check()" type="file" name="savefile" class="upload" />
							</div>
            <div id="bubble" class="bubble" style="margin: 15px;">
				<p id="message" class="message" style="padding: 10px; text-align: center; color: white; border-radius: 15px" ></p>
            </div>	
            <input type="hidden" name="course" value="<?php echo $course;?>"/>
			<input type="submit" value="Submit"  /> 
        </form>
		<script>
			function check(){
				var btn = document.getElementById("uploadBtn");
				var file = document.getElementById("uploadFile").value = btn.value;
				var msg = document.getElementById("message");
				
				if(file != ""){
				
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
				else{
					return true;
				} 
				
			}
		</script>        
		<br/>
		<hr/> 
		<br/>
		<br/>
        
        <!--TEST ONE-->
		<h4>Test One</h4>
		<form action="test1post.php" method="post" onsubmit="return check()" enctype="multipart/form-data" >
			<textarea rows="5" cols="50" name="test1" ><?php 
					$file = $course."/info/test1.txt";
					if(file_exists($file)){
						$file = file_get_contents($course."/info/test1.txt");
						echo $file;
					}
				?>
			</textarea> <br/>
		    <br><br>
        
            <input type="hidden" name="course" value="<?php echo $course;?>"/>
			<input type="submit" value="Submit"  /> 
        </form>
		<script>
			function check(){
				var btn = document.getElementById("uploadBtn");
				var file = document.getElementById("uploadFile").value = btn.value;
				var msg = document.getElementById("message");
				
				
				if(file != ""){
				
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
				else{
					return true;
				} 
				
			}

		</script>        
		<br/>
		<hr/> 
		<br/>
		<br/>
        
        <!--TEST TWO-->
		<h4>Test Two</h4>
		<form action="test2post.php" method="post" onsubmit="return check()" enctype="multipart/form-data" >
			<textarea rows="5" cols="50" name="test2" ><?php 
					$file = $course."/info/test2.txt";
					if(file_exists($file)){
						$file = file_get_contents($course."/info/test2.txt");
						echo $file;
					}
				?>
			</textarea> <br/>
		    <br><br>
        
            <input type="hidden" name="course" value="<?php echo $course;?>"/>
			<input type="submit" value="Submit"  /> 
        </form>
		<script>
			function check(){
				var btn = document.getElementById("uploadBtn");
				var file = document.getElementById("uploadFile").value = btn.value;
				var msg = document.getElementById("message");
				
				
				if(file != ""){
				
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
				else{
					return true;
				} 
				
			}

		</script>        
		<br/>
		<hr/> 
		<br/>
		<br/>
        
        <!--TEST THREE-->
		<h4>Test Three</h4>
		<form action="test3post.php" method="post" onsubmit="return check()" enctype="multipart/form-data" >
			<textarea rows="5" cols="50" name="test3" ><?php 
					$file = $course."/info/test3.txt";
					if(file_exists($file)){
						$file = file_get_contents($course."/info/test3.txt");
						echo $file;
					}
				?>
			</textarea> <br/>
		    <br><br>
        
            <input type="hidden" name="course" value="<?php echo $course;?>"/>
			<input type="submit" value="Submit"  /> 
        </form>
		<script>
		  function check(){
			var btn = document.getElementById("uploadBtn");
			var file = document.getElementById("uploadFile").value = btn.value;
			var msg = document.getElementById("message");
			
			
			if(file != ""){
			
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
			else{
				return true;
			} 
			
		}

		</script>        
		<br/>
		<hr/> 
		<br/>
		<br/>
        
        
	</div>
	
</div>

<?php include 'footer.php';?>
