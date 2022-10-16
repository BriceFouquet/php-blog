<?php

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $modify = filter_input(INPUT_POST, "modify");
    $id = $_SESSION["id"];
    $post_id = filter_input(INPUT_POST, "postId");

    if ($modify && $post_id) {
        $pdo = new PDO("mysql:host=db:3306;dbname=data", "root", "password");
        $requete = $pdo->prepare(" UPDATE posts SET content=:modify WHERE id = :id AND post_id = :post_id");
        $requete->execute([
            ":modify" => $modify,
            ":id" => $id,
            ":post_id" => $post_id
        ]);
        header('Location: main.php');
        exit();
    }
}