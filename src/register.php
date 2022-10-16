<?php
session_start();
$_SESSION["connecte"] = false;
$_SESSION["admin"] = false;

require("./includes/pdo.php");
require("./includes/registerverify.php")
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css" media="screen" type="text/css" />

    <title>register</title>
</head>
<body>
<div>
    <form method="POST">
        <h1>Register</h1>

        <label><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="username" required><br>

        <label><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="password" required><br>

        <input type="submit" id='submit' value='REGISTER'>
    </form>
</div>
</body>
</html>