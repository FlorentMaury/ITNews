        <!-- Header -->

        <?php
        require_once('src/header.php');
    ?>

        <!-- Formulaire de contact -->

    <div class="px-4 pt-5 my-5 text-center">
        <h1 class="display-4 fw-bold text-primary">Rejoignez-nous</h1>
        <div class="col-lg-6 mx-auto my-1 p-3">
        <form method="POST" action="index.php">

            <?php if(isset($_GET['success'])) {
                echo '<p class="alert success">Inscription réalisée avec succès.</p>';
            }
            else if(isset($_GET['error']) && !empty($_GET['message'])) {
                echo '<p class="alert error">'.htmlspecialchars($_GET['message']).'</p>';
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