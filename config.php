<?php
include "header.php";
include "form_render.php";
include "message_render.php";
echo '<link rel="stylesheet" href="style.scss">';

$host = 'localhost:3306';
$db = 'it_labs';
$charset = 'utf8';

$user = 'root';
$pass = '36357';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

$opt = array (
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE =>PDO::FETCH_ASSOC
);

$pdo = new PDO ($dsn, $user, $pass, $opt);
?>