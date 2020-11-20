<?php

session_start();

if (isset($_SESSION['usersUid'])) {
    header("location: dashboard");
    exit;
}
require_once 'includes/dbh.inc.php';
require_once 'includes/functions.inc.php';

?>










<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <title>Login</title>
</head>
<style type="text/css">
    label {
        text-transform: uppercase;
        letter-spacing: 1px
    }
</style>

<body>

    <header class="text-gray-700 body-font">
        <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
            <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-indigo-600 rounded-full" viewBox="0 0 24 24">
                    <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
                </svg>
                <span class="ml-3 text-xl">Redu</span>
            </a>
            <nav class="md:ml-auto md:mr-auto flex flex-wrap items-center text-base justify-center">
                <a class="mr-5 hover:text-black text-grey-300">Home</a>
                <a class="mr-5 hover:text-black">Tasks</a>
                <a class="mr-5 hover:text-black" href="register.php">Register</a>
                <a class="mr-5 hover:text-black" href="logout.php">Logout</a>
            </nav>
            <a href="signup.php" class="right-auto">
                <button class="inline-flex items-center bg-indigo-600 text-white border-0 py-1 px-3 focus:outline-none hover:bg-indigo-600 rounded text-base mt-4 md:mt-0">Register
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
                        <path d="M5 12h14M12 5l7 7-7 7"></path>
                    </svg>
                </button>
            </a>
        </div>
    </header>


    <section style="display:grid; place-items:center; height: 75vh">
        <div class="w-full max-w-xs ">
            <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 border border-gray-200 " style="width: 25pc" action="includes/login.inc.php" method="post">

            <?php
            if(isset($_GET["newpwd"])) {
                if($_GET["newpwd"] == "passwordupdated") {
                    echo '<p>Your Password changed successfuly</p>';
                }
            }
            ?>
                <div class="mb-4">
                    <label class="block uppercase text-gray-700 text-xs font-bold mb-2" for="username">
                        Username
                    </label>
                    <input type="text" name="uid" placeholder="Placeholder" class="appearance-none border
                    border-0 rounded w-full py-2 px-3 text-gray-700 leading-tight bg-grey-200 focus:outline-none focus:shadow-outline focus:bg-white">
                </div>
                <div class="mb-6">
                    <label class="block uppercase text-gray-700 text-sm font-bold mb-2" for="password">
                        Password
                    </label>
                    <input type="password" name="pwd" placeholder="Placeholder" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline">
                </div>
                <div class="flex items-center justify-between">
                    <button type="submit" name="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"> Submit </button>
                    <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800" href="reset-password.php">
                        Forgot Password?
                    </a>
                </div>


                <?php

                if (isset($_GET["error"])) {

                    if ($_GET["error"] == "emptyInput") {
                        echo "<p>Fill all the Fields</p>";
                    } else if ($_GET["error"] == "wronglogin") {
                        echo "<p> Incorrect Password </p>";
                    }
                }

                ?>


            </form>
            <p class="text-center text-gray-500 text-xs">
                &copy;2020 Acme Corp. All rights reserved.
            </p>

        </div>

    </section>
</body>

</html>