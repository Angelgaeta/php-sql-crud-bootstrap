<?php
require_once 'DBConnect.php';
require_once 'navbar.php';
$id = $_GET['id'];

$query=$dbh->prepare("SELECT * FROM t_stagiaire AS S JOIN t_ville AS V ON V.idVille = S.idVille JOIN t_formation AS F ON F.idFormation = S.idformation WHERE S.idStagiaire=$id");
$query->execute();
$stagiaire=$query->fetch();

?>

<!DOCTYPE html>
    <html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Création d'un stagiaire</title>
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    </head>
    <body>
        <!-- <header class="bd-header bg-dark py-3 d-flex align-items-stretch border-bottom border-dark">
            <div class="container-fluid d-flex align-items-center">
                <h1 class="d-flex align-items-center fs-4 text-white mb-0">
                Création d'un stagiaire
                </h1>
                <a href="create.php" class="btn btn-outline-info ms-auto link-light">Créer</a>
            </div>
        </header> -->
        <section class="container my-5">
            <div class="row"> 
                <div class="col-md-6 offset-md-3">
                    <?php
                        echo '<h1>'.$stagiaire['prenomStagiaire']." ".$stagiaire['nomStagiaire'].'</h1>';
                        echo '<p> Identifiant : '.$stagiaire['idStagiaire'].'</p>';
                        echo '<p>Date de naissance :'.$stagiaire['dateNaisStagiaire'].'</p>';
                        echo '<p>Civilité : '.$stagiaire['civiliteStagiaire'].'</p>';
                        echo '<p>Adresse : '.$stagiaire['adressStagiaire'].'</p>';
                        echo '<p>Code Postal : '.$stagiaire['cpVille'].'</p>';
                        echo '<p>Ville : '.$stagiaire['nomVille'].'</p>';
                        echo '<p>Email : '.$stagiaire['mailStagiaire'].'</p>';
                        echo '<p>Formation suivie : '.$stagiaire['titreFormation'].'</p>';
                        echo '<p><a href="list.php" class="btn btn-primary">RETOUR</a></p>';

                        $dbh = NULL;
                    ?>
                </div>        
            </div>
        </section>
        <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>
    </html>

            
            
            