<?php include 'header.php' ?>

<div id = "content">
	<h1>Barbados Community College - Web Portal</h1>
	
	<div id="left" class="report">
		<form method = "get" action = "studentfinalreport.php">
			<?php

				$rowNum = 0;
				$rem = $i = 0;

				$row = array( array("student_id"=>1, "name"=>"Khalil Greenidge", "grade"=>90 ),  array("student_id"=>2, "name"=>"Scott Henry", "grade"=>60),   array("student_id"=>3, "name"=>"Jeff Bezos", "grade"=>50 ),  array("student_id"=>4, "name"=>"Elon Musk", "grade"=>90) );


				echo "<table border = '1' style=\"position: relative; left: 100px;\">
				<tr>
					<th>Student Identification Number</th>
					<th>First Name </th>
					<th>Grade </th>
				</tr>";



				while($i < count($row)){
					$rowNum++;

					$rem = $rowNum % 2;
					
					$id = $row[$i]["student_id"];
	
					$name = $row[$i]["name"];	

					$grade = $row[$i]["grade"];	
					
					//CREATES AN ALTERNATING COLOUR
					if($rem == 0){
						echo "<tr style='background-color: #FA8258;'>";
						echo "<td align=\"center\">" . $id . "</td>";
						echo "<td>" . $name . "</td>";
						echo "<td align=\"center\">" . $grade. "</td>";
						echo "<tr>";
					}
					else {
						echo "<tr>";
						echo "<td align=\"center\">".$id."</td>";
						echo "<td>".$name."</td>";	
						echo "<td align=\"center\">" . $grade. "</td>";		
					}

					$i++;

				}
				echo "</table><br/><br/>";


				
		    ?>
	</div>
	
	<div id="middle" class="report" >	
		<h3>Statistics for <?php if(isset($course)){ echo $course;} ?></h3>
		
		<p>Below is a summary of the number of grades achieved by the class:</p>
		<div id="chart_div" style="height: 500px;"></div>
		<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
		<script type="text/javascript">
			google.charts.load("current", {packages:["corechart"]});
			google.charts.setOnLoadCallback(drawChart);
			function drawChart() {

				var data = google.visualization.arrayToDataTable([
					["Id", "Grade"],
					[1, 90],
					[2, 60],
					[3, 50],
					[4, 90]
									
				]);

				var options = {
					title: 'Grades',
					legend: { position: 'none' },
					chart: {
						title: 'Students\'s Grades'
					},
					hAxis: {title: 'Student'},
					vAxis: {title: 'Grade', minValue: 0, maxValue: 100}
				};

				var chart = new google.visualization.ScatterChart(document.getElementById('chart_div'));
				chart.draw(data, options);
			}
		</script>
				
	</div>
 
</div>

<?php include 'footer.php';?>
