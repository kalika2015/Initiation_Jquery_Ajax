<?php
/**
 * Created by PhpStorm.
 * User: stagiaire
 * Date: 07/11/2018
 * Time: 14:34
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
function fname()
{
    global $pdo;
    $req1= $pdo->prepare("SELECT * FROM information");
    $req1->execute([]);
    return $req1;
}