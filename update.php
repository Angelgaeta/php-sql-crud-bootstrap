<?php
require_once 'DBConnect.php';
require_once 'navbar.php';
$id = $_GET['id'];

$query=$dbh->prepare("SELECT * FROM t_stagiaire AS S JOIN t_ville AS V ON V.idVille = S.idVille JOIN t_formation AS F ON F.idFormation = S.idformation WHERE S.idStagiaire=$id");
$query->execute();
$stagiaire = $query->fetch();
//echo "Ceci est la page de  mise à jour! Elle concerne le stagiaire " . $id;
//var_dump($stagiaire);
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
    <link rel="stylesheet" href="style.css">

</head>
<body>

    <!-- <header class="bd-header bg-dark py-3 d-flex align-items-stretch border-bottom border-dark">
        <div class="container-fluid d-flex align-items-center">
            <h1 class="d-flex align-items-center fs-4 text-white mb-0">
            Liste d'un stagiaire
            </h1>
        </div>
    </header> -->
    <section class="container my-5">
        <div class="row">
            <form action="traitementUpdate.php" method="POST" class="col-md-6 offset-md-3">
            <input name="idStagiaire" type="hidden" value="<?php echo $stagiaire['idStagiaire'] ?>">
                <div class="mb-3">
                    <label for="InputNom" class="form-label">Nom du stagiaire</label>
                    <input type="text" class="form-control" id="InputNom" name="nom" value="<?php echo $stagiaire['nomStagiaire'] ?>">
                </div>
                <div class="mb-3">
                    <label for="InputPrenom" class="form-label">Prénom du stagiaire</label>
                    <input type="text" class="form-control" id="InputPrenom" name="prenom" value="<?php echo $stagiaire['prenomStagiaire'] ?>">
                </div>
                <div class="mb-3">
                    <label for="DateNaissance" class="form-label">Date de Naissance du stagiaire</label>
                    <input type="text" class="form-control" id="DateNaissance" name="naissance" placeholder="YYYY-MM-JJ" pattern="[0-9]{4}-(0[1-9]|1[012])-(0[1-9]|1[0-9]|2[0-9]|3[01])" value="<?php echo $stagiaire['dateNaisStagiaire'] ?>">
                </div>
                <div class="mb-3">
                <label for="civilité" class="form-label" value="<?php echo $stagiaire['civiliteStagiaire'] ?>">Choisir la civilité</label>
                    <select class="form-select" name="civilite" aria-label="civilité">
                    <?php
                        foreach($civilites as $civilite) {
                            if($civilite['civiliteStagiaire'] === $stagiaire['civiliteStagiaire']){
                            echo '<option selected value=' .$civilite['idCivilite'].'>'.$civilite['civiliteStagiaire'].'</option>';
                            } else {
                                echo '<option value=' .$civilite['idCivilite'].'>'.$civilite['civiliteStagiaire'].'</option>';
                            }
                        }
                    ?>
                        <!-- <option value="madame">Madame</option>
                        <option value="monsieur">Monsieur</option> -->
                    </select>
                </div>
                <div class="mb-3">
                    <label for="Adresse" class="form-label">Adresse du stagiaire</label>
                    <input type="text" class="form-control" id="Adresse" name="adresse" value="<?php echo $stagiaire['adressStagiaire'] ?>">
                </div>
                <div class="mb-3">
                    <label for="ville" class="form-label" >Choisir la ville</label>

                    <?php 
                        $villes = $dbh->query("SELECT * from t_ville");
                    ?>
                    <select class="form-select" name="ville" aria-label="ville">
                    <?php
                        foreach($villes as $ville) {
                            if($ville['nomVille'] === $stagiaire['nomVille']){
                            echo '<option selected value=' .$ville['idVille'].'>'.$ville['nomVille'].'</option>';
                            } else {
                                echo '<option value=' .$ville['idVille'].'>'.$ville['nomVille'].'</option>';
                            }
                        }
                    ?>

                    </select>
                </div>
                <div class="mb-3">
                    <label for="mail" class="form-label">Email du stagiaire</label>
                    <input type="email" class="form-control" id="mail" name="mail" value="<?php echo $stagiaire['mailStagiaire'] ?>">
                </div>
                <div class="mb-3">
                <label for="formation" class="form-label">Choisir la formation</label>
                    <?php 
                        $formations = $dbh->query("SELECT * from t_formation");
                    ?>
                    <select class="form-select" name="formation" aria-label="formation">
                        <?php
                        foreach($formations as $formation) {
                            if($formation['titreFormation'] === $stagiaire['accronymeFormation']){
                            echo '<option selected value=' .$formation['idFormation'].'>'.$ville['nomVille'].'</option>';
                            } else {
                                echo '<option value=' .$formation['idFormation'].'>'.$formation['titreFormation'].'</option>';
                            }
                        }
                        ?>

                    </select>
                </div>
                <?php
                    // et maintenant, fermez-la !
                    $dbh = null;
                ?>
                <button type="submit" class="btn btn-primary">Mettre à jour</button>
            </form>
        </div>
    </section>

   <!-- JavaScript Bundle with Popper -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>