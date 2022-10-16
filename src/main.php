<?php
session_start();
$username = $_SESSION["username"];
$id = $_SESSION["id"];
$admin = $_SESSION["admin"];

if(!$_SESSION["connecte"]) {
    http_response_code(302);
    header('Location: index.php');
    exit();
}


require("./includes/createPosts.php");
require("./includes/deletePosts.php");
require("./includes/modifyPosts.php");

$pdo = new PDO("mysql:host=db:3306;dbname=data", "root", "password");
$printPosts = $pdo->prepare("SELECT content, created, username,post_id from posts ORDER BY created DESC");
$printPosts->execute();
$requete = $printPosts->fetchAll();



?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css" media="screen" type="text/css" />

    <title>Stormwind</title>
</head>
<body>
<h1>Stormwind</h1>
<a href="index.php"><button>Log out</button></a>

<div id="main">
    <form method="POST">
        <input type="text" name="post" id="submit" placeholder="Say Something !"/>
        <input type="submit" value="Send" id="submit"/>
    </form>

    <form method="POST">
        <input type="text" name="modify" placeholder="Modify your post"/>
        <input type="text" name="postId" placeholder="post's id">
        <input type="submit" value="Send" />
    </form>

    <form method="POST">
        <input type="text" name="post_id" placeholder="id of the post you wish to delete">
        <input type="submit" value="Validate" name="delete" />
    </form>
</div>

<div id="content">
    <p>News</p>
    <?php foreach($requete as $printPosts): ?>
        <?="Post of ",$printPosts['username'],", " ?><br>
        <div>
            <?=$printPosts["content"] ?> <br>
        </div>
        <?="Date: ",$printPosts["created"] ?><br>
        <?= "id ",$printPosts["post_id"] ?>
        <hr><br>
        </tr>
    <?php endforeach;?>
</div>

</body>
</html>