

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
require_once 'navbar.php';
?>
    <header class="indexheader"><h1 id="bloc"></h1><br>
    <a href="list.php" class="btn btn-primary">RETOUR</a></header>
    <!-- <header class="bd-header bg-dark py-3 d-flex align-items-stretch border-bottom border-dark">
        <div class="container-fluid d-flex align-items-center">
            <h1 class="d-flex align-items-center fs-4 text-white mb-0">
            Liste des stagiaires
            </h1>
            <a href="create.php" class="btn btn-outline-info ms-auto link-light">Créer un stagiaire</a>
            <a href="createCity.php" class="btn btn-outline-info ms-auto link-light">Ajouter une ville</a>
            <a href="createFormation.php" class="btn btn-outline-info ms-auto link-light">Ajouter une formation</a>
            <a href="signin.php" class="btn btn-outline-info ms-auto link-light">S'inscrire</a>
            <a href="login.php" class="btn btn-outline-info ms-auto link-light">Se connecter</a>
        </div>
    </header> -->
    <SCRIPT LANGUAGE=JavaScript>
var chaine = "Bienvenue sur ce super gestionnaire de stagiaires ! " ;
var nb_car = chaine.length;
var tableau = chaine.split("");
texte = new Array;
var txt = '';
var nb_msg = nb_car - 1;
for (i=0; i<nb_car; i++) {
texte[i] = txt+tableau[i];
var txt = texte[i];
}

actual_texte = 0;
function changeMessage()
{
document.getElementById("bloc").innerHTML = texte[actual_texte];
actual_texte++;
if(actual_texte >= texte.length)
actual_texte = nb_msg;
}
if(document.getElementById)

setInterval("changeMessage()",150) /* la vitesse de defilement (plus on a une valeur faible plus
texte s'affiche rapidement) */
</SCRIPT>
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>