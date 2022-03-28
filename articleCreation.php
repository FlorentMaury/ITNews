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

    if(isset($_POST['title']) && isset($_POST['subtitle']) && isset($_POST['content']) && isset($_FILES['image']) && $_FILES['image']['error'] === 0) {
        if(!empty($_POST['title']) AND !empty($_POST['subtitle']) AND !empty($_POST['content']) AND !empty($_FILES['image'])) {

            $title    = htmlspecialchars($_POST['title']);
            $subtitle = htmlspecialchars($_POST['subtitle']);
            $content  = htmlspecialchars($_POST['content']);

            if($_FILES['image']['size'] <= 3000000) {
    
                $informationsImage = pathinfo($_FILES['image']['name']);
                $extensionImage    = $informationsImage['extension'];
                $extensionsArray   = ['png', 'gif', 'jpg', 'jpeg'];
        
                if(in_array($extensionImage, $extensionsArray)) {
        
                    $newImageName = time().rand().rand().'.'.$extensionImage;
                    move_uploaded_file($_FILES['image']['tmp_name'], 'public/assets/illustrations/'.$newImageName);
                    $send = true;
        
                }
            } 

            if($editing == 0) {
                $send = $bdd->prepare('INSERT INTO article (title, subtitle, content, article_date) VALUES (?, ?, ?, NOW())');
                $send->execute(array($title, $subtitle, $content));
                $send = true;

                $message = "Article posté !";
            } else {
                $update = $bdd->prepare('UPDATE article SET title = ?, subtitle = ?, content = ?, date_edition =now() WHERE id = ?');
                $update->execute(array($title, $subtitle, $content, $edition_id));
                $message = "Article modifié !";
            }

        } else {
            header('location: articleCreation.php?error=1&message=Tous les champs doivent être remplis.');
            exit();
        }
    }
        
    require_once('src/header.php');
    
?>

        <!-- Formulaire de contact -->

    <div class="px-4 pt-5 my-5 text-center">
        <h1 class="display-4 fw-bold text-primary">Gestion des articles</h1>
        <div class="col-lg-6 mx-auto my-1 p-3">

        <form method="POST" enctype="multipart/form-data">

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
                    <input class="form-control" type="file" name="image" id="image">
                </p>
                    <?php if(isset($_GET['success'])) {
                    echo '<p>Article en ligne !</p>';
                }
                else if(isset($_GET['error']) && !empty($_GET['message'])) {
                    echo '<p>'.htmlspecialchars($_GET['message']).'</p>';
                } ?>
                <button class="w-50 btn btn-lg btn-primary mt-5" type="submit">Poster</button>
            </form>
    </div>
        
  
        <!-- Footer -->

    <?php

        require_once('src/footer.php');
    ?>