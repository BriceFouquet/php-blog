<?php

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $post = filter_input(INPUT_POST, "post");
    $username = $_SESSION["username"];
    $id = $_SESSION["id"];

    if ($post) {
        $pdo = new PDO("mysql:host=db:3306;dbname=data", "root", "password");
        $requete = $pdo->prepare("INSERT INTO posts (content,username,id) values (:content,:username,:id)");
        $requete->execute([
            ":content" => $post,
            ":username" => $username,
            ":id" => $id
        ]);
        header('Location: main.php');
        exit();
    }
}