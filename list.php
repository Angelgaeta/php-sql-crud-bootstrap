<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listes des stagiaires</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css"></head>
<body>
    <header class="bd-header bg-dark py-3 d-flex align-items-stretch border-bottom border-dark">
        <div class="container-fluid d-flex align-items-center">
            <h1 class="d-flex align-items-center fs-4 text-white mb-0">
            Liste des stagiaires
            </h1>
        </div>
    </header>
    <section class="container mt-5">
        <div class="row">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Prénom</th>
                        <th scope="col">Date de naissance</th>
                        <th scope="col">Civilité</th>
                        <th scope="col">Adresse</th>
                        <th scope="col">Code Postal</th>
                        <th scope="col">Ville</th>
                        <th scope="col">Email</th>
                        <th scope="col">Formation</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Hendrix</td>
                        <td>Jimi</td>
                        <td>27/11/1942</td>
                        <td>Monsieur</td>
                        <td>2 rue Desmoulins</td>
                        <td>34000</td>
                        <td>Montpellier</td>
                        <td>jimi@paradis.com</td>
                        <td>D2WM</td>
                        <td>
                            <a href="#" class="btn btn-outline-primary"><i class="bi bi-eye"></i></a>
                            <a href="#" class="btn btn-outline-success"><i class="bi bi-pencil"></i></a>
                            <a href="#" class="btn btn-outline-danger"><i class="bi bi-trash"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Joplin</td>
                        <td>Janis</td>
                        <td>19/01/1943</td>
                        <td>Madame</td>
                        <td>14 rue Des licornes</td>
                        <td>34000</td>
                        <td>Montpellier</td>
                        <td>janis@paradis.com</td>
                        <td>D2WM</td>
                        <td>                            
                            <a href="#" class="btn btn-outline-primary"><i class="bi bi-eye"></i></a>
                            <a href="#" class="btn btn-outline-success"><i class="bi bi-pencil"></i></a>
                            <a href="#" class="btn btn-outline-danger"><i class="bi bi-trash"></i></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>