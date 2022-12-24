<?php
require_once 'DBConnect.php';
require_once 'navbar.php';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Création d'une formation</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">

</head>
<body>

    <!-- <header class="bd-header bg-dark py-3 d-flex align-items-stretch border-bottom border-dark">
        <div class="container-fluid d-flex align-items-center">
            <h1 class="d-flex align-items-center fs-4 text-white mb-0">
            Ajouter une formation
            </h1>
        </div>
    </header> -->
    <section class="container my-5">
        <div class="row">
            <form action="traitementFormation.php" method="POST" class="col-md-6 offset-md-3">
                <div class="mb-3">
                    <label for="titreFormation" class="form-label">Ajouter une formation</label>
                    <input type="text" class="form-control" id="titreFormation" name="titreFormation">
                </div>
                <div class="mb-3">
                    <label for="acronyme" class="form-label">Ajouter son acronyme</label>
                    <input type="text" class="form-label" id="acronyme" name="acronyme">
                </div>
                <?php
                    // et maintenant, fermez-la !
                    $dbh = null;
                ?>
                <button type="submit" class="btn btn-primary">AJOUTER</button>
                <a href="list.php" class="btn btn-primary">RETOUR</a>
            </form>
        </div>
    </section>

   <!-- JavaScript Bundle with Popper -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>