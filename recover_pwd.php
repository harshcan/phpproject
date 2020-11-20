<?php

if (isset($_POST["reset-request-submit"])) {

	include 'includes/dbh.inc.php';

	$email = mysqli_real_escape_string($conn, $_POST["email"]);

	$emailquery = " SELECT * FROM users WHERE usersEmail='$email' ";
	$query = mysqli_query($conn, $emailquery);

	$emailcount = mysqli_num_rows($query);

	if ($emailcount) {

		$userdata = mysqli_fetch_array($query);

		$username = $userdata['usersName'];
		$token = $userdata['token'];

	$to = $userEmail;

	$subject = 'Reset your password for redu';
	$body = "Hi, $username , Click here to activate your account http://localhost/phpproject/reset_pwd.php?.token=$token ";


	$sender_email = "From : harst useharsh@gmail.com\r\n";
	$headers = "Reply-To: useredu@gmail.com\r\n";
	$headers .= "Content-type: text/html\r\n";

	if (mail($to, $subject, $body, $sender_email)) {
		$_SESSION['msg'] = "check yoor mail to activate your account $email";
		header("location: login.php");
	}
	else{
		echo "Failed Connection";
	}

	}
	
	$selector = bin2hex(random_bytes(8));
	$token = random_bytes(32);
	?>


<!DOCTYPE html>
	
<html>

<head>
	<title>Reset Password</title>
</head>

<body>
	<form action="" method="post">
		<input type="text" name="email" placeholder="email">
		<button type="submit" name="reset-request-submit">Receive E-mail</button>


	</form>
</body>

</html>

