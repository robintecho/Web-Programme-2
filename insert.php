<?php
include("config.php");
$result=mysqli_query($mysql2,"SELECT * from record ORDER by id DESC");

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>

		<form action="function.php" method="POST">
			Patient ID<input type="number" name="pid"><br>
			Patient Name<input type="text" name="pname"><br>
			Age<input type="number" name="page"><br>
			Address<input type="text" name="paddress"><br>
			Date of Admission<input type="date" name="addate"><br>
			Doctor Name<input type="text" name="dname"><br>
			Prescriped medicine<input type="text" name="pmed"><br>
			
			<input type="submit" name="submit">
		</form>
</body>
</html>