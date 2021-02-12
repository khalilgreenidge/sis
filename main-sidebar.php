<div id="main-sidebar">
		
	<div class="header" style="text-align: center;height: 50px;">MAIN NAVIGATION</div>
	
	<!--MAIN NAVIGATION-->
	<button class="accordion"><a><i class="fa fa-briefcase" aria-hidden="true"></i>Reports<span></span></a>  </button>
	<div class="panel">
		<ul class="panel">
			<li><a href="studentlist.php?key=<?php echo $course; ?>">Student list</a></li>
			<li><a href="viewsubmissions.php?key=<?php echo $course; ?>">Submission</a></li>
			<li><a href="studentreport.php?key=<?php echo $course; ?>">Reports</a></li>	
		</ul>
	</div>            
				
	<!--ENTER RECORDS-->
	<button class="accordion"><a><i class="fa fa-briefcase" aria-hidden="true"></i>Enter Records<span></span></a>  </button>
	<div class="panel">
		<ul class="panel">
			<li><a href="addstudent.php?key=<?php echo $course; ?>">Add Student</a></li>
			<li><a href="editcourse.php?key=<?php echo $course; ?>.php">Edit course</a></li>
			<li><a href="updatesemestermarks.php?key=<?php echo $course; ?>.php">Update semester marks</a></li>
			<li><a href="updatefinalmarks.php?key=<?php echo $course; ?>.php">Update final marks</a></li>
		</ul>		
	</div>	
	
</div>
	