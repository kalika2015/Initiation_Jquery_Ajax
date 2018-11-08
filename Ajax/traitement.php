<?php
/**
 * Created by PhpStorm.
 * User: stagiaire
 * Date: 07/11/2018
 * Time: 16:53
 */
$serveur = "localhost";
$user = "root";
$password = "";
$name_bdd = "kalika";
try
{
    $pdo = new PDO('mysql:host='.$serveur.';dbname='.$name_bdd.';charset=utf8', $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}

$firstname = $_GET['firstname'];
$row = $pdo->query("SELECT first_name FROM information WHERE first_name LIKE '$firstname%' ORDER BY first_name");

while ($rows = $row->fetch() ){
    echo "<option value='".$rows['first_name']."'>";
}