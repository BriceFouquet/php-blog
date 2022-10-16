<?php

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $modify = filter_input(INPUT_POST, "modify");
    $post_id = filter_input(INPUT_POST, "postId");

    if ($modify && $post_id) {
        $pdo = new PDO("mysql:host=db:3306;dbname=data", "root", "password");
        $requete = $pdo->prepare(" UPDATE posts SET content=:modify WHERE post_id = :post_id");
        $requete->execute([
            ":modify" => $modify,
            ":post_id" => $post_id
        ]);
        header('Location: admin.php');
        exit();
    }
}