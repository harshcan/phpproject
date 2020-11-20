<!DOCTYPE HTML>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="css/createpassword.css">

    <title>Sign In</title>

</head>

<body>

    <div class="mainform">

        <?php

        $selector = $_GET["selector"];
        $validator = $_GET["validator"];

        if (empty($selector) || empty($validator)) {
            echo 'ERROR! we could not validate your PASSWORD RESET request. PLEASE TRY AGAIN.';
        } else {

            if (ctype_xdigit($selector) !== false && ctype_xdigit($validator) !== false) {



                echo '<H1>Create New Password</H1>
            <form action="includes/reset-password.inc.php" method="post">
               
                <input type="hidden" name="selector" value="' . $selector . '">
                <input type="hidden" name="validator" value="' . $validator . '">
                <input class="pwd" type="password" name="pwd" placeholder="Enter a new password" >
                <input class="pwd" type="password" name="pwd-repeat" placeholder="Repeat a new password" >
                <button class= "btn" type="submit" name="reset-password-submit">Reset Password</button>
            </form>
' .$validator .'';


                if (!isset($_GET['newpwd'])) {
                } else {
                    $errorcheck = $_GET['newpwd'];

                    if ($errorcheck == "empty") {
                        echo "<p class='error'>You did not fill in all the fields!</p>";
                    } elseif ($errorcheck == "pwdnotmatch") {
                        echo '<p class="error">Your passwords do not match.</p>';
                    }
                }
            }
        }

        ?>



    </div>

</body>

</html>