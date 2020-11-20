<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redu</title>
</head>

<style>
    * {
        margin: 0;
        padding: 0;
    }

    .header {
        box-shadow: 0px 3px 10px lightgrey;
        position: sticky;
        top: 0px;

    }

    .header .head {
        margin: auto;
        display: flex;
    }

    ul {
        display: flex;
        margin: auto;
    }

    li , .btn {
        list-style: none;
        padding: 16px;
    }

    a {
        text-decoration: none;
        color: black;
        font-family: system-ui;
    }

    a:hover {
        text-decoration: underline;
    }

    .btn1{
    margin-right: 15px;
    }
    .btn-register, .btnr{
        margin-top: 0px;
        padding: 8px;
        outline: 0;
        border: 0;
        background-color: indigo;
        color: white;
        font-weight: 500;
        border-radius: .35rem;
        font-family: system-ui;
        letter-spacing: 1px;
        text-transform: uppercase;
        cursor: pointer;
    }
</style>

<body>
        <div class="header">
            <header class="head">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a>Profile</a></li>
                    <li><a>Contact</a></li>
                        <a class='btn' href='signup.php'><button class='btn-register'>Sign Up</button></a>
                        <a class='btn' href='login.php'><button class='btn-register'>Sign In</button></a>
                </ul>
               
            </header>

        </div>
        
</body>

</html>