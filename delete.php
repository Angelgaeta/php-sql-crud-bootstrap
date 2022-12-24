<?php
    require_once 'DBConnect.php';

    $id = $_GET['id'];

    $sql = "DELETE FROM t_stagiaire WHERE idStagiaire = :id";
    $stmt = $dbh->prepare($sql);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->execute();

    header('Location:list.php');
    exit;
?>