<?php

	session_start();

	if(!empty($_POST['email']) && !empty($_POST['password'])) {
		// Connexion à la base de donnée
		require_once('src/connection.php');

		// Variables
		$email     = htmlspecialchars($_POST['email']);
		$password  = htmlspecialchars($_POST['password']);

		// L'adresse email est-elle correcte ?
		if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			header('location: index.php?error=1&Votre adresse email est invalide.');
			exit();
		}

		// Chiffrement du mot de passe
		$password = "aq1".sha1($password ."123")."25";

		// L'adresse email est-elle bien utilisée ?
		$req = $bdd->prepare('SELECT COUNT(*) as numberEmail FROM user WHERE email = ?');
		$req->execute([$email]);

		while($emailVerification = $req->fetch()) {
			if($emailVerification['numberEmail'] != 1) {
				header('location: index.php?error=1&message=Impossible de vous authentifier correctement.');
				exit();
			}
		}

		// Connexion
		$req = $bdd->prepare('SELECT * FROM user WHERE email = ?');
		$req->execute([$email]);

		while($user = $req->fetch()) {
			if($password == $user['password']) {
				$_SESSION['connect'] = 1;
				$_SESSION['email'] = $user['email'];

				// Connexion auto par cookie
				if(isset($_POST['auto'])) {
					setcookie('auth', $user['secret'], time() + 365*24*3600, '/', null, false, true);
				} 

				header('location: index.php?success=1');
				exit();
			} else {
				header('location: index.php?error=1&message=Impossible de vous authentifier correctement.');
				exit();
			}
		}
	}

?>
  
        <!-- Header -->

    <?php
        require_once('src/header.php');
    ?>

        <!-- Boîte de présentation 1 -->

    <div class="px-4 pt-5 my-5 text-center">
        <h1 class="display-4 fw-bold text-primary">
            Bienvenue
            <?php
            	if(isset($_SESSION['connect'])) {
                    require_once('src/connection.php');
                        echo $_SESSION['email'];
                }
            ?>
        </h1>
        <div class="col-lg-6 mx-auto">
            <p class="lead mb-4">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
            <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mb-5">
             </div>
        </div>
        <div class="overflow-hidden" style="max-height: 30vh;">
        </div>
    </div>


        <!-- Boîte de présentation 2 -->


    <div class="container my-5">
        <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg">
            <div class="col-lg-7 p-3 p-lg-5 pt-lg-3">
                <h1 class="display-4 fw-bold lh-1 mb-5">L'actualité en temps réél, n'importe quand, n'importe où</h1>
                <p class="lead mb-5">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3">
                        <button type="button" class="btn btn-primary btn-lg px-4 me-md-2" data-bs-toggle="modal" data-bs-target="#subscription">S'inscrire</button>
                        <button type="button" class="btn btn-outline-secondary btn-lg px-4" data-bs-toggle="modal" data-bs-target="#signIn">Se connecter</button>
                    </div>
            </div>
            <div class="col-lg-4 offset-lg-1 p-0 overflow-hidden shadow-lg">
                <img class="rounded-lg-3" src="public/assets/caption.png" alt="" width="500">
            </div>
        </div>
    </div>


        <!-- Boîte de présentation 3 -->


    <div class="bg-secondary text-primary px-4 py-5 text-center">
        <div class="py-5">
            <h1 class="display-5 fw-bold text-white">Dark mode hero</h1>
            <div class="col-lg-6 mx-auto">
                <p class="fs-5 mb-4">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
                    <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                    </div>
            </div>
        </div>
    </div>
  
        <!-- Footer -->

    <?php
        require_once('src/footer.php');
    ?>