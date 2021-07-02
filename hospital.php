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

		<form action="hfunction.php" method="POST">
			
			Patient Name<input type="text" name="pname"><br>
			Today's Date<input type="date" name="pdate"><br>
			
			<input type="submit" name="submit">
		</form>
</body>
</html>