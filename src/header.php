<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="public/design/style.css">
    <title>ITNEws | L'information technologique</title>
</head>
<body> 
       
       <!-- Titre, NavBar et Formulaire d'inscription -->
    
    <header class="p-3 bg-dark sticky-top">
        <div class="container">

            <nav class="d-flex lead flex-wrap align-items-center justify-content-center justify-content-lg-start">

                <!-- Titre -->
                <a href="/" class="d-flex fs-5 align-items-center mb-lg-0 text-white text-decoration-none">
                    <h1>ITNews</h1>
                </a>

                <!-- NavBar -->
                <ul class="nav col-12 col-lg-auto me-lg-auto mx-5 justify-content-center">
                    <li><a href="index.php" class="nav-link px-2 text-primary">Accueil</a></li>
                    <li><a href="articles.php" class="nav-link px-2 text-white">Articles</a></li>
                    <li><a href="contact.php" class="nav-link px-2 text-white">Contact</a></li>
                </ul>

                <!-- Inscriptions et lancement des modales -->
                <div class="text-end">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#subscription">S'inscrire</button>
                    <button type="button" class="btn btn-outline-primary me-2" data-bs-toggle="modal" data-bs-target="#signIn">Se connecter</button>
                </div>
            </nav>
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

                    <p class="form-floating m-2">
                        <input type="name" name="name" class="form-control" id="name" placeholder="Michel Dupont">
                        <label for="name">Nom</label>
                    </p>
                    <p class="form-floating m-2">
                        <input type="email" name="email" class="form-control" id="email" placeholder="dupont@email.com">
                        <label for="email">Email</label>
                    </p>
                    <p class="form-floating m-2">
                        <input type="password" name="password" class="form-control" id="password" placeholder="Mot de passe">
                        <label for="password">Mot de passe</label>
                    </p>
                    <p class="form-floating m-2">
                        <input type="password" name="passwordTwo" class="form-control" id="passwordTwo" placeholder="Mot de passe">
                        <label for="password">Confirmez mot de passe</label>
                    </p>

                    <p class="checkbox my-4">
                        <label>
                        <input type="checkbox" value="remember-me"> Se souvenir de moi
                        </label>
                    </p>
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

                    <div class="form-floating m-2">
                        <input type="email" name="email" class="form-control" id="email" placeholder="dupont@email.com">
                        <label for="email">Email</label>
                    </div>
                    <div class="form-floating m-2">
                        <input type="password" name="password" class="form-control" id="password" placeholder="Mot de passe">
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