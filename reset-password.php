<?php
?>

<!DOCTYPE html>
<html>

<head>
	<title>Reset Password</title>
</head>

<body>
	<form action="includes/reset-request.inc.php" method="post">
		<input type="text" name="email" placeholder="email">
		<button type="submit" name="reset-request-submit">Receive E-mail</button>


		<?php
		if (isset($_GET["reset"])) {
			if ($_GET["reset"] == "success") {
				echo "<p>Check your email </p>";
			}
		}
		?>


	</form>
</body>

</html>