<?php
$pdo = new PDO("mysql:host=db:3306;dbname=data", "root", "password");


/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
const DB_SERVER = 'db';
const DB_USERNAME = 'root';
const DB_PASSWORD = 'password';
const DB_NAME = 'data';

/* Attempt to connect to MySQL database */
try {
    $pdo = new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
}
catch (Exception $e) {
    die("Erreur : " .$e->getMessage());
}
