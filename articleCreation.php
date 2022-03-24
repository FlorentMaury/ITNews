<?php

    session_start();
        
    require_once('src/header.php');
    
?>

        <!-- Formulaire de contact -->

    <div class="px-4 pt-5 my-5 text-center">
        <h1 class="display-4 fw-bold text-primary">Nouvel article</h1>
        <div class="col-lg-6 mx-auto my-1 p-3">

        <form method="POST" action="/subscription.php">

            <?php if(isset($_GET['success'])) {
                echo '<p>Inscription réalisée avec succès.</p>';
            }
            else if(isset($_GET['error']) && !empty($_GET['message'])) {
                echo '<p>'.htmlspecialchars($_GET['message']).'</p>';
            } ?>

                <p class="form-floating m-2">
                    <label for="title">Titre de l'article</label>
                    <input type="text" name="title" class="form-control" id="title" placeholder="Titre de l'article">
                </p>
                <p class="form-floating m-2">
                    <label for="subtitle">Sous-titre de l'article</label>
                    <textarea name="subtitle" class="form-control" rows="5" id="subtitle" placeholder="Sous-titre de l'article"></textarea>
                </p>
                <p class="form-floating m-2">
                    <label for="password">Contenu de l'article</label>
                    <textarea type="password" name="password" class="form-control" id="password" placeholder="Contenu de l'article"></textarea>
                </p>
                <button class="w-50 btn btn-lg btn-primary mt-4" type="submit">Poster</button>
            </form>
        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mb-5"></div>
        <div class="overflow-hidden" style="max-height: 30vh;"></div>
    </div>
        
  
        <!-- Footer -->

    <?php

        require_once('src/footer.php');
    ?>