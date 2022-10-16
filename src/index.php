<?php
session_start();
$_SESSION["connecte"] = false;

require("./includes/pdo.php");
require("./includes/loginverify.php")
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
<div id="main">
    <header>
        <h1>Stormwind</h1>
        <img src="image/Stormwindgate.webp" alt="Stormwind" id="image" height="150px" width="150px">
        <h4>For the Alliance ! For Azeroth !</h4>
    </header>

    <p>Log In</p>
    <div class="connexion">
        <form method="POST">
            <label for="username">Username</label><br/>
            <input type="text" name="username" id="username" /><br/><br/>

            <label for="password">Password</label><br/>
            <input type="password" name="password" id="password" /><br/><br/>

            <input type="submit" name="submit" value="Log In" class="button" />
        </form>
    </div>
    <p>Not yet registered ? <a href="register.php"><button>Click Here</button></a></p>
</div>
</body>
</html>