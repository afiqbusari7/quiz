<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Dashboard</title>
<link rel="stylesheet" href="style.css">
</head>
	<body>
		<form method="POST" action="main.php">
		  <table align="center">
			<tr>
				<td>Password: <td>
				<td><input type="text" name="password" value="<?= $_SESSION['pwd']; ?>" disabled></td>
			</tr>
			<tr>
				<td></td>
				<td><input name="submit" type="submit" value="LOGOUT"></td>
			</tr>
		</form>
	</body>
</html>
