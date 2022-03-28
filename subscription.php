<?php

    session_start();

    if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['passwordTwo'])) {

        // Connexion à la bdd
        require_once('src/connection.php');

        // Variables
        $name        = htmlspecialchars($_POST['name']);
        $email       = htmlspecialchars($_POST['email']);
        $password    = htmlspecialchars($_POST['password']);
        $passwordTwo = htmlspecialchars($_POST['passwordTwo']);

        // Les mots de passe sont-ils identiques ?
        if($password != $passwordTwo) {
            header('location: subscription.php?error=1&message=Vos mots de passe ne sont pas identiques.');
            exit();
        }

        // Le pseudo est-il déjà utilisé ou trop long ?
        $req = $bdd->prepare('SELECT COUNT(*) as numberName FROM user WHERE name = ?');
        $req->execute([$name]);

        while($nameVerification = $req->fetch()) {
            if($nameVerification['numberName'] != 0) {
                header('location: subscription.php?error=1&message=Votre pseudo est déjà utilisée.');
                exit();
            }
            if(strlen($name) > 20) {
                header('location: subscription.php?error=1&message=Votre pseudo est trop long.');
                exit();
            }
        }

        // L'adresse email est-elle correcte ?
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            header('location: subscription.php?error=1&Votre adresse email est invalide.');
            exit();
        }

        // L'adresse email est-elle en doublon ?
        $req = $bdd->prepare('SELECT COUNT(*) as numberEmail FROM user WHERE email = ?');
        $req->execute([$email]);

        while($emailVerification = $req->fetch()) {
            if($emailVerification['numberEmail'] != 0) {
                header('location: subscription.php?error=1&message=Votre adresse email est déjà utilisée.');
                exit();
            }
        }

        // Chiffrement du mot de passe
        $password = "aq1".sha1($password ."123")."25";

        // Secret
        $secret = sha1($email).time();
        $secret = sha1($secret).time();

        // Ajouter un utilisateur
        $req = $bdd->prepare('INSERT INTO user(name, email, password, secret) VALUES(?, ?, ?, ?)');
        $req->execute([$name, $email, $password, $secret]);

        header('location: subscription.php?success=1');
        exit();

     }
        
    require_once('src/header.php');
    
?>

        <!-- Formulaire de contact -->

    <div class="px-4 pt-5 my-5 text-center">
        <h1 class="display-4 fw-bold text-primary">Rejoignez-nous</h1>
        <div class="col-lg-6 mx-auto my-1 p-3">

        <form method="POST" action="/subscription.php">

            <?php if(isset($_GET['success'])) {
                echo '<p class="mt-4 fw-bold text-success">Inscription réalisée avec succès !</p>';
            }
            else if(isset($_GET['error']) && !empty($_GET['message'])) {
                echo '<p class="mt-4 fw-bold text-danger">'.htmlspecialchars($_GET['message']).'</p>';
            } ?>

                <p class="form-floating m-2">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Pseudo">
                    <label for="name">Pseudo</label>
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
                    <input type="password" name="passwordTwo" class="form-control" id="passwordTwo" placeholder="Confirmez votre mot de passe">
                    <label for="passwordTwo">Confirmez votre mot de passe</label>
                </p>
                <button class="w-100 btn btn-lg btn-primary mt-4" type="submit">Inscription</button>
            </form>
        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mb-5"></div>
        <div class="overflow-hidden" style="max-height: 30vh;"></div>
    </div>
        
  
        <!-- Footer -->

    <?php

        require_once('src/footer.php');
    ?>