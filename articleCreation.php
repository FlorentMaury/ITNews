<?php

    session_start();

    require_once('src/connection.php');

    if(isset($_POST['title']) && isset($_POST['subtitle']) && isset($_POST['content'])) {
        if(!empty($_POST['title']) AND !empty($_POST['subtitle']) AND !empty($_POST['content'])) {

            $title    = htmlspecialchars($_POST['title']);
            $subtitle = htmlspecialchars($_POST['subtitle']);
            $content  = htmlspecialchars($_POST['content']);

            $send = $bdd->prepare('INSERT INTO article (title, subtitle, content, article_date) VALUES (?, ?, ?, NOW())');
            $send->execute(array($title, $subtitle, $content));

            $message = "Article posté !";

        } else {
            $message = "Tout les champs doivent être remplis.";
        }
    }
        
    require_once('src/header.php');
    
?>

        <!-- Formulaire de contact -->

    <div class="px-4 pt-5 my-5 text-center">
        <h1 class="display-4 fw-bold text-primary">Nouvel article</h1>
        <div class="col-lg-6 mx-auto my-1 p-3">

        <form method="POST">

            <?php if(isset($_GET['success'])) {
                echo '<p>Inscription réalisée avec succès.</p>';
            }
            else if(isset($_GET['error']) && !empty($_GET['message'])) {
                echo '<p>'.htmlspecialchars($_GET['message']).'</p>';
            } ?>

                <p class="form-floating m-2">
                    <input type="text" name="title" class="form-control" id="title" placeholder="Titre de l'article">
                    <label for="title">Titre de l'article</label>
                </p>
                <p class="form-floating m-2">
                    <textarea name="subtitle" class="form-control" rows="5" id="subtitle" placeholder="Sous-titre de l'article"></textarea>
                    <label for="subtitle">Sous-titre de l'article</label>
                </p>
                <p class="form-floating m-2">
                    <textarea type="text" name="content" class="form-control" id="content" placeholder="Contenu de l'article"></textarea>
                    <label for="content">Contenu de l'article</label>
                </p>
                <button class="w-50 btn btn-lg btn-primary mt-5" type="submit">Poster</button>
            </form>
            <?php
                if(isset($message)) {
                    echo $message;
                }
            ?>
    </div>
        
  
        <!-- Footer -->

    <?php

        require_once('src/footer.php');
    ?>