<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des stagiaires</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
</head>
<body>

    <header class="bd-header bg-dark py-3 d-flex align-items-stretch border-bottom border-dark">
        <div class="container-fluid d-flex align-items-center">
            <h1 class="d-flex align-items-center fs-4 text-white mb-0">
            Formulaire
            </h1>
        </div>
    </header>
    <section class="container my-5">
        <div class="row">
            <form action="treatement.php" method="POST" class="col-md-6 offset-md-3">
                <div class="mb-3">
                    <label for="InputNom" class="form-label">Nom du stagiaire</label>
                    <input type="text" class="form-control" id="InputNom" name="nom">
                </div>
                <div class="mb-3">
                    <label for="InputPrenom" class="form-label">Prénom du stagiaire</label>
                    <input type="text" class="form-control" id="InputPrenom" name="prenom">
                </div>
                <div class="mb-3">
                    <label for="DateNaissance" class="form-label">Date de Naissance du stagiaire</label>
                    <input type="text" class="form-control" id="DateNaissance" name="naissance" placeholder="YYYY-MM-JJ" pattern="[0-9]{4}-(0[1-9]|1[012])-(0[1-9]|1[0-9]|2[0-9]|3[01])">
                    <!-- <input type="text"  placeholder="YYYY-MM-DD" pattern="(?:19|20)(?:(?:[13579][26]|[02468][048])-(?:(?:0[1-9]|1[0-2])-(?:0[1-9]|1[0-9]|2[0-9])|(?:(?!02)(?:0[1-9]|1[0-2])-(?:30))|(?:(?:0[13578]|1[02])-31))|(?:[0-9]{2}-(?:0[1-9]|1[0-2])-(?:0[1-9]|1[0-9]|2[0-8])|(?:(?!02)(?:0[1-9]|1[0-2])-(?:29|30))|(?:(?:0[13578]|1[02])-31)))" class="form-control "  name="eventDate" id="" required autofocus autocomplete="nope"> -->
                </div>
                <div class="mb-3">
                <label for="civilité" class="form-label">Choisir la civilité</label>
                    <select class="form-select" name="civilite" aria-label="civilité">
                        <option value="madame">Madame</option>
                        <option value="monsieur">Monsieur</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="Adresse" class="form-label">Adresse du stagiaire</label>
                    <input type="text" class="form-control" id="Adresse" name="adresse">
                </div>
                <div class="mb-3">
                <label for="ville" class="form-label">Choisir la ville</label>
                    <select class="form-select" name="ville" aria-label="ville">
                        <option selected>...</option>
                        <option value='1'>Montpellier</option>
                        <option value='2'>Paris</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="mail" class="form-label">Email du stagiaire</label>
                    <input type="email" class="form-control" id="mail" name="mail">
                </div>
                <div class="mb-3">
                <label for="formation" class="form-label">Choisir la formation</label>
                    <select class="form-select" name="formation" aria-label="formation">
                        <option selected>...</option>
                        <option value='1'>Developpeur web & web mobile</option>
                        <option value='2'>Concepteur Développeur d'application</option>
                        <option value='3'>Technicien d'Assistance Informatique</option>
                    </select>
                </div>
                <?php
                    // et maintenant, fermez-la !
                    $dbh = null;
                ?>
                <button type="submit" class="btn btn-primary">Créer</button>
            </form>
        </div>
    </section>

   <!-- JavaScript Bundle with Popper -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>