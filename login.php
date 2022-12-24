<?php
require_once 'DBConnect.php';
require_once 'navbar.php';
// session_start();
// var_dump($_SESSION)['user'];

// Ici pour se connecter à son compte déjà enregistrer dans la bdd, 
// avec vérification et si il n y a pas de doublon

if(isset($_POST) && !empty($_POST)){
    $pseudo = $_POST['nom'];
    $mdp    = $_POST['pass'];
    //$hashed_password = password_hash($mdp, PASSWORD_BCRYPT);
    $stmt   = $dbh->prepare("SELECT * FROM t_users WHERE pseudoUser = :nom");
    $stmt->bindParam(':nom', $pseudo, PDO::PARAM_STR);
    $stmt->execute();
    $user   = $stmt->fetch(PDO::FETCH_ASSOC); 

    if($user){
        //var_dump($user);  //tester la connexion utilisateur ici !
        $hashed     = $user['mdpUser'];
        $isAuthUser = password_verify($mdp, $hashed);
        //var_dump($isAuthUser);
        if($isAuthUser){
            //var_dump($_SESSION);
            session_start();
            $_SESSION ['user'] = [
                'id'=>$user['idUser'], 
                'pseudo'=>$user['pseudoUser']
            ];
            header ('Location: index.php');
        }

    } else {
        echo "Cet utilisateur n'existe pas";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Page de connexion</title>
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
        
    </head>
    <body style="margin-top: 120px">
        <!-- <header class="bd-header bg-dark py-3 d-flex align-items-stretch border-bottom border-dark">
            <div class="container-fluid d-flex align-items-center">
                <h1 class="d-flex align-items-center fs-4 text-white mb-0">
                Connexion à son compte
                </h1>
            </div>
        </header> -->
        <form action="" method="POST" class="col-md-6 offset-md-3 mt-5" >

        <div class="mb-3">
            <label for="InputPseudo" class="form-label">Pseudo de l'utilisateur</label>
            <input type="text" class="form-control" id="InputPseudo" name="nom">
        </div>
        <div class="mb-3">
            <label for="InputPassword" class="form-label">Mot de passe de l'utilisateur</label>
            <input type="password" class="form-control" id="InputPassword" name="pass">
        </div>
        <button class="btn btn-primary" type="submit">SE CONNECTER</button>
        <a href="list.php" class="btn btn-primary">RETOUR</a>
        </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>
</html>