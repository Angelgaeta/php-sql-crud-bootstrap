    <?php session_start() ?>
    
    <nav class="navbar navbar-dark bg-dark fixed-top py-3 d-flex align-items-stretch border-bottom border-dark fs-4 text-white m-20">
        <div class="container-fluid d-flex align-items-center fs-4 text-white mb-20">
            <a class="navbar-brand" href="#">Gestion des Stagiaires</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar"
                aria-labelledby="offcanvasDarkNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Menu</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <a class="nav-link active" aria-current="page" href="index.php">Accueil</a>
                                </li>

                        <?php if(isset($_SESSION['user'])&& !empty($_SESSION['user'])) {?>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="login.php" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Gestion
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark">
                                <li><a class="dropdown-item" href="list.php">Afficher la liste</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="create.php">Créer un stagiaire</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="createCity.php">Ajouter une ville</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="createFormation.php">Ajouter une formation</a></li>
                                </ul>
                                </li>
                                <li class="nav-item">
                                <a class="nav-link" href="logout.php">Se deconnecter</a>
                                </li> <?php } else{ ?>
                                <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="signin.php">S'inscrire</a>
                                </li>
                                <a class="nav-link" href="login.php">Se connecter</a>
                                <li class="nav-item">
                                </li>
                                <?php } ?>

                        
                    </ul>
                    <!-- <form class="d-flex mt-3" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-success" type="submit">Search</button>
                    </form> -->
                </div>
            </div>
        </div>
    </nav>
