

<div id="main-sidebar">
		<ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
			
			<!--MAIN NAVIGATION-->
            <li class="treeview" onclick="menu1()"  style="margin-top: 10px;">
				<a href="#">Dashboard</a>
				<ul class="treeview-menu" id="treemenu1">
					<li><a href="studentlist.php?key=<?php echo $course; ?>">Student list</a></li>
					<li><a href="viewsubmissions.php?key=<?php echo $course; ?>">Submission</a></li>
					<li><a href="studentreport.php?key=<?php echo $course; ?>">Reports</a></li>
				</ul>
            </li>            
						
			<!--ENTER RECORDS-->
            <li class="treeview" onclick="menu2()">
              <a href="#">Enter records</a>
              <ul class="treeview-menu" id="treemenu2">
				<li><a href="addstudent.php?key=<?php echo $course; ?>">Add Student</a></li>
              </ul>
            </li>
						
			<!--EDIT RECORDS-->
            <li class="treeview" onclick="menu3()">
              <a href="#">Edit records</a>
              <ul class="treeview-menu" id="treemenu3">
				<li><a href="editcourse.php?key=<?php echo $course; ?>.php">Edit course</a></li>
				<li><a href="updatesemestermarks.php?key=<?php echo $course; ?>.php">Update semester marks</a></li>
				<li><a href="updatefinalmarks.php?key=<?php echo $course; ?>.php">Update final marks</a></li>
              </ul>
            </li>
			
          </ul>
	</div>
	
