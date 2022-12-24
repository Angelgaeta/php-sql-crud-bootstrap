<?php
require_once 'DBConnect.php';

$formation = htmlentities($_POST['titreFormation'], ENT_QUOTES);
$acronyme  = htmlentities($_POST['acronyme'], ENT_QUOTES);

/* Exécute une requête préparée en liant des variables et valeurs */
$sql  = "INSERT INTO t_formation (titreFormation, acronyme) VALUES(:titreF, :acron)";
$stmt = $dbh->prepare($sql);

$stmt -> bindParam(':titreF', $formation, PDO::PARAM_STR);
$stmt -> bindParam(':acron', $acronyme, PDO::PARAM_STR);

$stmt -> execute();

header ('Location: list.php');
exit();

?>