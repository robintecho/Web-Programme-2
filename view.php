<?php
include("config.php");



?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>

<table border="1" align="center">
	<tr>
		<th>Patient ID</th>
		<th>Patient Name</th>
		<th>Age</th>
		<th>Address</th>
		<th>Date of Admission</th>
		<th>Doctor's Name</th>
		<th>Prescribed Medicine</th>



	</tr>
	
		<?php 

		$val=$_GET["vals"];
        $result1=mysqli_query($mysql2,"SELECT * from precord where pname='$val'");
		while ($res=mysqli_fetch_array($result1)) {
			echo '<tr>';
			echo '<td>'.$res['pid'].'</td>';
			echo '<td>'.$res['pname'].'</td>';
			echo '<td>'.$res['page'].'</td>';
			echo '<td>'.$res['paddress'].'</td>';
			echo '<td>'.$res['addate'].'</td>';
			echo '<td>'.$res['dname'].'</td>';
			echo '<td>'.$res['pmed'].'</td>';
			echo '</tr>';
		}
		?>
</table>
</body>
</html>