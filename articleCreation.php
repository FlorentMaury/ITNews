<?php

    session_start();

    require_once('src/connection.php');

    $editing = 0;

    if(isset($_GET['edit']) AND !empty($_GET['edit'])) {
        $editing = 1;
        $edition_id = htmlspecialchars($_GET['edit']);
        $edition   = $bdd->prepare('SELECT * FROM article WHERE id = ?');
        $edition->execute(array($edition_id));

        $edition = $edition->fetch();
    }

    if(isset($_POST['title']) && isset($_POST['subtitle']) && isset($_POST['content'])) {
        if(!empty($_POST['title']) AND !empty($_POST['subtitle']) AND !empty($_POST['content'])) {

            $title    = htmlspecialchars($_POST['title']);
            $subtitle = htmlspecialchars($_POST['subtitle']);
            $content  = htmlspecialchars($_POST['content']);

            if($editing == 0) {
                
                $send = $bdd->prepare('INSERT INTO article (title, subtitle, content, article_date) VALUES (?, ?, ?, NOW())');
                $send->execute(array($title, $subtitle, $content));
                $message = "Article posté !";
            } else {
                $update = $bdd->prepare('UPDATE article SET title = ?, subtitle = ?, content = ?, date_edition =now() WHERE id = ?');
                $update->execute(array($title, $subtitle, $content, $edition_id));
                $message = "Article modifié !";
            }

        } else {
            $message = "Tout les champs doivent être remplis.";
        }
    }
        
    require_once('src/header.php');
    
?>

        <!-- Formulaire de contact -->

    <div class="px-4 pt-5 my-5 text-center">
        <h1 class="display-4 fw-bold text-primary">Gestion des articles</h1>
        <div class="col-lg-6 mx-auto my-1 p-3">

        <form method="POST" enctype="multipart/form-data">

            <?php if(isset($_GET['success'])) {
                echo '<p>Inscription réalisée avec succès.</p>';
            }
            else if(isset($_GET['error']) && !empty($_GET['message'])) {
                echo '<p>'.htmlspecialchars($_GET['message']).'</p>';
            } ?>

                <p class="form-floating m-2">
                    <input type="text" name="title" class="form-control" id="title" placeholder="Titre de l'article" <?php if($editing == 1) { ?> value="<?= $edition['title'] ?>"<?php } ?>>
                    <label for="title">Titre de l'article</label>
                </p>
                <p class="form-floating m-2">
                    <textarea name="subtitle" class="form-control" rows="5" id="subtitle" placeholder="Sous-titre de l'article"><?php if($editing == 1) { ?><?= $edition['subtitle'] ?><?php } ?></textarea>
                    <label for="content">Sous-titre de l'article</label>
                </p>
                <p class="form-floating m-2">
                    <textarea type="text" name="content" class="form-control" id="content" placeholder="Contenu de l'article"><?php if($editing == 1) { ?><?= $edition['content'] ?><?php } ?></textarea>
                    <label for="content">Contenu de l'article</label>
                </p>
                <p class="mx-5 my-2">
                    <label for="image" class="form-label">Illustration de l'article</label>
                    <input class="form-control" type="file" id="image">
                </p>
                <button class="w-50 btn btn-lg btn-primary mt-5" type="submit">Poster</button>
            </form>
    </div>
        
  
        <!-- Footer -->

    <?php

        require_once('src/footer.php');
    ?>