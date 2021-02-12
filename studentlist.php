<?php include 'header.php' ?>

<div id = "content">
	<h1>Barbados Community College - Web Portal</h1>
	
	<h3>Students List for <?php echo $course; ?>:</h3>
	<br/><br/>
	<form>
	<?php
		$rowNum = $rem = 0;

		echo "<table border = '1' style=\"position: relative; left: 100px;\">
		<tr>
			<th>Student Identification Number</th>
			<th>First Name </th>
		</tr>";


		$i = 0;
		$row = array( array("student_id"=>1, "name"=>"Khalil Greenidge" ),  array("student_id"=>2, "name"=>"Scott Henry"),   array("student_id"=>3, "name"=>"Jeff Bezos" ),  array("student_id"=>4, "name"=>"Elon Musk") );

		while($i < count($row)){
			$rowNum++;
			$rem = $rowNum % 2;
			
			$id = $row[$i]["student_id"];

			$name = $row[$i]["name"];	
			
			//CREATES AN ALTERNATING COLOUR
			if($rem == 0){
				echo "<tr style='background-color: #FA8258;'>";
				echo "<td align=\"center\">" . $id . "</td>";
				echo "<td>" . $name . "</td>";
				echo "<tr>";
			}
			else {
				echo "<tr>";
				echo "<td align=\"center\">".$id."</td>";
				echo "<td>".$name."</td>";		
			}

			$i++;
		}
		echo "</table>";


	?>
	</form>
</div>


<?php include 'footer.php'; ?>

