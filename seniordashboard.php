<!DOCTYPE html>
<?php session_start(); ?>
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
    <div id="aboutPortalInfo">
        
		<span style = "margin-left: 270px;"><img src = "imgs/portal.png" alt = "content portal photo"/></span><br>
		<img style="height: 100px; width: 100px; margin-left: 470px;" src = "imgs/bcclogosolo.jpg" alt="logo" /> <br>
        
        
        <h3>Welcome to The Barbados Community College Web Portal!</h3>
        <h4>About The Barbados Community College</h4>
        <p>
            In 1968, the Barbados Community College (BCC) was established by an Act of Parliament to provide post-secondary education to a
            wide cross-section of the Barbadian public to which higher education was previously inaccessible. The Barbados Community College Act 
            was amended in 1990 to empower the College to grant certificates, diplomas, associate degrees, degrees and other awards to persons who
            successfully complete courses of study approved by the Board of Management.  The College has remained true to its mission which states that 
        </p>

         <p>
             The Barbados Community College is a dynamic centre of learning which exists to meet the changing education, training and development 
             needs of the societies that it serves, by providing a range of courses and programmes of study in a learning environment conducive to the intellectual,
             physical and social development of students and staff, so that they can make a meaningful contribution to their country, region and the wider community.
        </p>

        <h4>About the Web Portal</h4>
        <p>
            Web Portal was created by Khalil Greenidge, Romario Bates and Scott Henry in response to the need for increased access to tertiary 
            education for Barbadian as well as international students. Web Portal is the platform for a comprehensive open and distance education programme which will
            allow tertiary institutions to offer a variety of blended and on-line courses. Through the use of the internet, these courses will offer the public increased access to
            education that is delivered in a more flexible and convenient format.
        </p>
        
        <h4>Grades</h4>
		
		<?php 
			
		?>
		<!--CLASS 1-->
			
    </div>
</div>
     
     
<div id = "footer">
	<?php include 'footer.php'; ?> 
</div>
 
 </div>
 
</body>
</html>