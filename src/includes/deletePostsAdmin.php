<?php

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $post_id = filter_input(INPUT_POST, "post_id");

    if ($post_id) {
        $pdo = new PDO("mysql:host=db:3306;dbname=data", "root", "password");
        $requete = $pdo->prepare(" DELETE FROM `posts` WHERE post_id = :post_id");
        $requete->execute([
            ":post_id" => $post_id
        ]);
        header('Location: admin.php');
        exit();
    }
}