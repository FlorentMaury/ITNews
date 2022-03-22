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
                    <h5 class="modal-title">Please subscribe</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal">
                    </button>
                </div>

                <!-- Corps de la modale -->
                <form>
                    <div class="form-floating m-2">
                        <input type="name" class="form-control" id="floatingInput" placeholder="Name">
                        <label for="floatingInput">Name</label>
                    </div>
                    <div class="form-floating m-2">
                        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Email address</label>
                    </div>
                    <div class="form-floating m-2">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">Password</label>
                    </div>

                    <div class="checkbox my-4">
                        <label>
                        <input type="checkbox" value="remember-me"> Remember me
                        </label>
                    </div>
                    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
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
                    <h5 class="modal-title">Please sign in</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal">
                    </button>
                </div>

                <!-- Corps de la modale -->
                <form>
                    <div class="form-floating m-2">
                    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Email address</label>
                    </div>
                    <div class="form-floating m-2">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Password</label>
                    </div>

                    <div class="checkbox my-4">
                    <label>
                        <input type="checkbox" value="remember-me"> Remember me
                    </label>
                    </div>
                    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
                </form>

            </div>
        </div>
    </div>