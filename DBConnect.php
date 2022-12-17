<?php
/* Connexion à une base MySQL avec l'invocation de pilote */
$dsn = 'mysql:host=localhost;dbname=crud';
$user = '';
$pass = '';

try {
    $dbh = new PDO($dsn, $user, $pass, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));

} catch (PDOException $e){
    print "Erreur! : " . $e->getMessage() . "<br/>";
    die();
}
?>