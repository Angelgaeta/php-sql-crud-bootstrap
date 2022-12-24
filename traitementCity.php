<?php
require_once 'DBConnect.php';

$ville = htmlentities($_POST['nomVille'], ENT_QUOTES);
$codepostal = htmlentities($_POST['cpVille'], ENT_QUOTES);


/* Exécute une requête préparée en liant des variables et valeurs */
$sql = "INSERT INTO t_ville (nomVille, cpVille) VALUES(:ville, :codePostal)";
$stmt = $dbh->prepare($sql);

/* PDOStatement::bindValue() va remplacer telle étiquette par telle valeur.
PDOStatement::bindParam() va remplacer telle étiquette par telle variable, dont la valeur pourra être modifiée avec le temps par PHP pour exécuter plusieurs fois une même requête préparée et avoir des résultats différents à chaque fois.*/
$stmt->bindParam(':ville', $ville, PDO::PARAM_STR);
$stmt->bindParam(':codePostal', $codepostal, PDO::PARAM_INT);

$stmt->execute();

header('Location: list.php');
exit();

?>