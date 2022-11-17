<?php
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST") {
	$user_password = $_POST["password"];
	$file = fopen('password.txt', 'r');
	while(!feof($file)){
		$line = fgets($file);
		if(trim($line) == $user_password){
			$_SESSION['pwd'] = $user_password;
			echo 'login';
			header('Location: home.php');
		}
		else{
			$errorMsg = "Login failed";
		}

	}

}
function validation($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
}

?>

<!DOCTYPE html>
<html>
<head>
<title>Login Page</title>
</head>
	<body>
		<?php 
			if(isset($errorMsg))
			{
				echo "<div class='error-msg'>";
				echo $errorMsg;
				echo "</div>";
				unset($errorMsg);
			}
			
			if(isset($_GET['logout']))
			{
				echo "<div class='success-msg'>";
				echo "You have successfully logout";
				echo "</div>";
			}
		?>
		<form method="POST" action="<?php echo $_SERVER["PHP_SELF"];?>">
		  <table align="center">
			<tr>
				<td>Password: <td>
				<td><input type="password" name="password" placeholder="enter password"></td>
			</tr>
			<tr>
				<td></td>
				<td><button type="submit" name="submit">Submit</button></td>
			</tr>
		</form>
	</body>
</html>