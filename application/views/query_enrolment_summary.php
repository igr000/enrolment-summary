<!DOCTYPE html>
<!---------------------------------------------------------------------------------------------
-- Query_enrolment_summary page is the page where enrolment summary will be displayed. --------
-----------------------------------------------------------------------------------------------
-- Author: Irene Gayle Roque ------------------------------------------------------------------
---------------------------------------------------------------------------------------------->
<html>
<head>
	<title><?php echo $title; ?></title>
    <!-- Styles -->
	<style type="text/css">
		html{
			background-color: #C8E5EE;
		}
		.table{
			border-color: #216B82;
			margin:50px;
			padding:35px;
			background-color: #F6F7F7;
			border-radius: 15px;
		}
	</style>
</head>
<body>
	<div class="table">
	<h1>Enrolment Summary</h1>
	<hr>
	<table>
		<tr>
			<th></th>
			<th style="float:left;">Student Count</th>
		</tr>

		<tr>
			<td>
				Enrolled Students: 
				<br>
				Not Enrolled Students: 
				<br>
				Total Students:
			</td>
			<td>
				<!-- Displays number of enrolled students -->
				<?php echo $enrolled; ?> 
				<br>
				<!-- Displays number of not enrolled students -->
				<?php echo $not_enrolled; ?>
				<br>
				<!-- Displays total number of students -->
				<?php echo $total_students; ?>
				<br>
				<?php
                //compute for percentage of enrolled students and set answer as $percent
				$percent = ($enrolled/$total_students)*100;
                //displays percentage of enrolled students
				echo round($percent, 2).'% enrolled students';
				?>
			</td>
		</tr>
	</table>
    
    <br>
    <br>

	<table>
		<tr>
			<th></th>
			<th style="float:left;">No. of Students per Course</th>
			<th>Percentage</th>
		</tr>

		<tr>
			<td>
				BSCS
				<br>
				BSIS 
				<br>
				CT
			</td>
			<td style="float: right;">
				<!-- Displays number of enrolled students in BSCS -->
				<?php echo $students_BSCS; ?> 
				<br>
				<!-- Displays number of not enrolled students in BSIS -->
				<?php echo $students_BSIS; ?>
				<br>
				<!-- Displays number of not enrolled students in CT -->
				<?php echo $students_CT; ?>
			</td>
			<td>
				<?php
                //compute for percentage of enrolled students in BSCS
				$percent_BSCS = ($students_BSCS/$total_students)*100;
                //displays percentage of enrolled students in BSCS
				echo round($percent_BSCS, 2).'%';
				?>
				<br>
				<?php
                //compute for percentage of enrolled students in BSIS
				$percent_BSIS = ($students_BSIS/$total_students)*100;
                //displays percentage of enrolled students in BSIS
				echo round($percent_BSIS, 2).'%';
				?>
				<br>
				<?php
                //compute for percentage of enrolled students in CT
				$percent_CT = ($students_CT/$total_students)*100;
                //displays percentage of enrolled students in CT
				echo round($percent_CT, 2).'%';
				?>
			</td>
		</tr>
	</table>	
    </div>


	

</body>
</html>