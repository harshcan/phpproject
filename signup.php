<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <title>Redu - Register</title>
</head>
<style>
    .bg-my:hover {
        background-color: #dbe6f1;
    }

    * {
        margin: 0;
        padding: 0;
        font-family: system-ui;
    }

    .my-own-a a {
        color: grey;
    }

    .my-bg{
        background: red;
    }
    .items-center-my {
        display: grid;
        place-items: center;
    }
    .btn-danger{
        border-color: #dc3545;
    }
    .my-section:nth-child(2){
    margin-top: .5rem;
    justify-content: flex-end;
    display: flex;
    }
    .mr-40{
        margin-right: 40rem;
    }
    .my-bg-err{
        background: #FFCFCF;
        color: #FF0000;
    }
    .square{
        height: 20px;
        width: 20px;
        background: #222;
        transform: translate(900px , 300px);
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
            <nav class="md:ml-auto md:mr-auto flex flex-wrap items-center text-base justify-center my-own-a">
                <a class="mr-5 hover:text-black">Home</a>
                <a class="mr-5 hover:text-black">Tasks</a>
                <a class="mr-5 hover:text-black">About Us</a>
                <a class="mr-5 hover:text-black" href="login.php">Login</a>
            </nav>
            <a href="login.php">
                <button class="inline-flex items-center bg-indigo-600 text-white border-0 py-1 px-3 focus:outline-none hover:bg-indigo-600 rounded text-base mt-4 md:mt-0">
                    Login
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
                        <path d="M5 12h14M12 5l7 7-7 7"></path>
                    </svg>
                </button>
            </a>
        </div>
    </header>



    <section class="my-section">

        <section class="sect-t w-full">

        <form action="includes/signup.inc.php" method="post" class="mr-auto ml-10 max-w-md border border-grey-600 p-8">
            <div class="square"></div>
                <?php

                if (isset($_GET["error"])) {


                    if ($_GET["error"] == "emptyInput") {
                        echo "<center class='bg-indigo-600 focus:outline-none my-bg-err focus:border-red-300 border border-red-500 mb-8 p-2 bg-red-400><span class=''>Fill all the Fields</span></center>";
                    } else if ($_GET["error"] == "invaliduid") {
                        echo "<span class='border border-red-500 my-bg p-2 bg-red-100 err'> Choose a proper username </span>";
                    } else if ($_GET["error"] == "passwordsdontmatch") {
                        echo "<span class='border border-red-500 my-bg p-2 bg-red-100 err'> Password don't Match! </span>";
                    } else if ($_GET["error"] == "stmtfailed") {
                        echo "<span class='border border-red-500 my-bg p-2 bg-red-100 err'> Username already taken </span>";
                    } else if ($_GET["error"] == "success") {
                        echo "<span class='border border-red-500 my-bg p-2 bg-red-100 err'> You have signed up! </span>";
                    }
                }

                ?>

            </center>
            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                        UserName
                    </label>
                    <?php
                    if (isset($_GET["error"])) {

                        if ($_GET["error"] == "usernameTaken") {
                            echo "<input type='text' name='uid' placeholder='Username' class='block appearance-none border border-red-500 rounded  py-3 px-4 w-full text-gray-700 mb-3 focus:outline-none leading-tight focus:shadow-outline focus:border-0'><center class='w-full'><p class='text-red-500 text-m'>Username already exists.</p></center>";
                        } else {
                            echo "<input type='text' name='uid' placeholder='Username' class='username appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500'>";
                        }
                    } else {
                        echo "<input type='text' name='uid' placeholder='Username' class='username appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500'>";
                    }

                    ?>
                </div>
            </div>


            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                        Name
                    </label>
                    <input type="text" name="name" placeholder="Name" class="username appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                </div>
            </div>

            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                        E-mail
                    </label>
                    <input type="text" name="email" placeholder="E-mail" class="username appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                </div>
            </div>


            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                        Password
                    </label>
                    <input type="password" name="pwd" placeholder="Password" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                </div>
                <div class="w-full md:w-1/2 px-3 flex flex-col">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                        Confrim Password
                    </label>
                    <input type="password" name="pwdrepeat" placeholder="Confirm Password" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                </div>
            </div>
            <center>
                <button type="submit" name="submit" class="mt border-0 py-2 px-8 focus:outline-none bg-indigo-600 rounded bg-my text-lg text-white hover:text-indigo-700">Sign Up</button>

            </center>

        </form>

    </section>
    <div class="img">
        <?php 
        if (isset($_GET["error"])) {
            echo '<img src="components/img/error-signup.svg" alt="" draggable="false" style="height: 450px" class="mr-40 mt-10" />';
        }
        else
            echo '<img src="components/img/signup.svg" alt="" draggable="false" style="height: 450px" class="mr-40 mt-10" />';
         ?>

        </div>
        

    </section>

</body>

</html>
