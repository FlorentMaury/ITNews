        <!-- Titre, NavBar et Formulaire d'inscription -->
    
    <header class="p-4 bg-dark">
        <div class="container">

            <div class="d-flex lead flex-wrap align-items-center justify-content-center justify-content-lg-start">

                <!-- Titre -->
                <a href="/" class="d-flex fs-5 align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                    <h1>ITNews</h1>
                </a>

                <!-- NavBar -->
                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 mx-5 justify-content-center mb-md-0">
                    <li><a href="index.php" class="nav-link px-2 text-primary">Accueil</a></li>
                    <li><a href="articles.php" class="nav-link px-2 text-white">Articles</a></li>
                    <li><a href="contact.php" class="nav-link px-2 text-white">Contact</a></li>
                </ul>

                <!-- Inscriptions et lancement des modales -->
                <div class="text-end">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#subscription">S'inscrire</button>
                    <button type="button" class="btn btn-outline-primary me-2" data-bs-toggle="modal" data-bs-target="#signIn">Se connecter</button>
                </div>
            </div>
        </div>
    </header>


    <!-- Modale d'inscription -->

    <div class="modal fade" id="subscription" data-bs-backdrop="static">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content p-3 mt-0">

                <!-- Titre de la modale -->
                <div class="modal-header">
                    <h5 class="modal-title">Inscrivez-vous</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal">
                    </button>
                </div>

                <!-- Corps de la modale -->
                <form method="POST" action="index.php">

                    <?php
                        if(isset($_GET['success'])) {
                            echo '<p class="alert success">Inscription réalisée avec succès.</p>';
                        } else if(isset($_GET['error']) && !empty($_GET['message'])) {
                            echo '<p class="alert error">'.htmlspecialchars($_GET['message']).'</p>';
                        } 
                    ?>

                    <div class="form-floating m-2">
                        <input type="name" class="form-control" id="name" placeholder="Michel Dupont">
                        <label for="name">Nom</label>
                    </div>
                    <div class="form-floating m-2">
                        <input type="email" class="form-control" id="email" placeholder="dupont@email.com">
                        <label for="email">Email</label>
                    </div>
                    <div class="form-floating m-2">
                        <input type="password" class="form-control" id="password" placeholder="Mot de passe">
                        <label for="password">Mot de passe</label>
                    </div>

                    <div class="checkbox my-4">
                        <label>
                        <input type="checkbox" value="remember-me"> Se souvenir de moi
                        </label>
                    </div>
                    <button class="w-100 btn btn-lg btn-primary" type="submit">Inscription</button>
                </form>

            </div>
        </div>
    </div>


        <!-- Modale de connexion -->


    <div class="modal fade" id="signIn" data-bs-backdrop="static">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content p-3 mt-0">

                <!-- Titre de la modale -->
                <div class="modal-header">
                    <h5 class="modal-title">Connectez-vous</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal">
                    </button>
                </div>

                <!-- Corps de la modale -->
                <form method="POST" action="index.php">

                    <?php
                        if(isset($_GET['success'])) {
                            echo '<p class="alert success">Inscription réalisée avec succès.</p>';
                        } else if(isset($_GET['error']) && !empty($_GET['message'])) {
                            echo '<p class="alert error">'.htmlspecialchars($_GET['message']).'</p>';
                        } 
                    ?>

                    <div class="form-floating m-2">
                        <input type="email" class="form-control" id="email" placeholder="dupont@email.com">
                        <label for="email">Email</label>
                    </div>
                    <div class="form-floating m-2">
                        <input type="password" class="form-control" id="password" placeholder="Mot de passe">
                        <label for="password">Mot de passe</label>
                    </div>

                    <div class="checkbox my-4">
                        <label>
                            <input type="checkbox" value="remember-me"> Se souvenir de moi
                        </label>
                    </div>
                    <button class="w-100 btn btn-lg btn-primary" type="submit">Connexion</button>
                </form>

            </div>
        </div>
    </div>