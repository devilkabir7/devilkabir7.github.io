<!DOCTYPE html>
<html> 
	<head>
		<title>College grades</title>
		<link rel="stylesheet" href="Table_CSS.css">
	</head>
	<body>
		<?php include "navigation.php"; ?>
		<?php include "header.php"; ?>
		<table>
			<caption>College results</caption>
			<tr>
				<th>Semester</th>
				<th>Obtained GPA</th>
				<th>Total GPA</th>
				<th>Percentage</th>
			</tr>
			<tr>
				<td>Semester 1</td>
				<td>7.0</td>
				<td>10.0</td>
				<td>70%</td>
			</tr>
			<tr>
				<td>Semester 2</td>
				<td>7.79</td>
				<td>10.0</td>
				<td>77.9%</td>
			</tr>
			<tr>
				<td>Semester 3</td>
				<td>7.94</td>
				<td>10.0</td>
				<td>79.4%</td>
			</tr>
			<tr>
				<td>Semester 4</td>
				<td>8.16</td>
				<td>10.0</td>
				<td>81.6%</td>
			</tr>
			<tr>
				<td>Semester 5</td>
				<td>8.32</td>
				<td>10.0</td>
				<td>83.2%</td>
			</tr>
		</table>
		<p class="Percent">Overall CGPA: 7.84</p>
		<p class="Percent">Overall percentage: 78.4%</p>
		<?php include "footer.php"; ?>
	</body>
</html>