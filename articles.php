<?php

    session_start();

    require_once('src/connection.php');

    $articles = $bdd->query('SELECT * FROM article ORDER BY article_date DESC');
    $content = $bdd->query('SELECT * FROM article ORDER BY id DESC');

    if(isset($_POST['sendComment'])) {
        if(!empty($_POST['userComment'])) {
            $comment = htmlspecialchars($_POST['userComment']);
            $ins = $bdd->prepare('INSERT INTO comment (user_comment) VALUES (?)');
            $ins->execute(array($comment));
            header('location: articles.php?success=1');
        } else {
            header('location: articles.php?error=1&message=Remplir avant d\'envoyer.');
            exit();
        }
    }

    $showComments = $bdd->prepare('SELECT * FROM comment WHERE article_id = ?');
    $showComments->execute(array(0));

    $master = $bdd->query('SELECT * FROM user WHERE id = 11');

    require_once('src/header.php');

?>


    <!-- Articles -->


<div class="container">
    <?php if(isset($_GET['success'])) {
        echo '<p class="mt-4 font-weight-bold text-success">Message posté !</p>';
    }
    else if(isset($_GET['error']) && !empty($_GET['message'])) {
        echo '<p mt-2 class="mt-4 fw-bold text-danger">'.htmlspecialchars($_GET['message']).'</p>';
    } ?>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 my-4">
        <?php while($x = $articles->fetch()) { ?>
            <div class="col"> 
                <div class="card shadow-sm">
                    <img class="rounded" src="https://picsum.photos/419/225" alt="Image">
                    <div class="card-body">
                        <p class="card-text"><?= $x['subtitle'] ?></p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#read<?= $x['id'] ?>">Lire</button>
                                <button type="button" class="btn btn-sm btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#comment">Commenter</button>
                            </div>
                            <small class="text-muted pl-3"><?= $x['article_date'] ?></small>
                        </div>
                    </div>

                    <?php if(isset($_SESSION['connect'])) { ?>
                        <div class="card-footer d-flex justify-content-between">
                            <button class="btn btn-sm btn-primary" href="/articleCreation.php" type="submit">
                                <a href="/articleCreation.php?edit=<?= $x['id'] ?>" class="text-decoration-none text-secondary">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-wrench-adjustable" viewBox="0 0 16 16">
                                    <path d="M16 4.5a4.492 4.492 0 0 1-1.703 3.526L13 5l2.959-1.11c.027.2.041.403.041.61Z"/>
                                    <path d="M11.5 9c.653 0 1.273-.139 1.833-.39L12 5.5 11 3l3.826-1.53A4.5 4.5 0 0 0 7.29 6.092l-6.116 5.096a2.583 2.583 0 1 0 3.638 3.638L9.908 8.71A4.49 4.49 0 0 0 11.5 9Zm-1.292-4.361-.596.893.809-.27a.25.25 0 0 1 .287.377l-.596.893.809-.27.158.475-1.5.5a.25.25 0 0 1-.287-.376l.596-.893-.809.27a.25.25 0 0 1-.287-.377l.596-.893-.809.27-.158-.475 1.5-.5a.25.25 0 0 1 .287.376ZM3 14a1 1 0 1 1 0-2 1 1 0 0 1 0 2Z"/>
                                </svg>
                                </a>
                            </button>
                            <button class="btn btn-sm btn-outline-danger" href="/articleCreation.php" type="submit">
                                <a href="src/delete.php?id=<?= $x['id'] ?>" class="text-decoration-none text-secondary">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                    <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                                </svg>
                                </a>
                            </button>
                        </div>
                    <?php } ?>
                </div>
            </div>
        <?php } ?>
</div>

<div class="container">
    <?php if(isset($_SESSION['connect'])) { ?>
        <button class="btn btn-lg btn-primary my-4" href="/articleCreation.php" type="submit">
            <a href="/articleCreation.php" class="text-decoration-none text-secondary">Ajouter</a>
        </button>
    <?php } ?>
</div>



    <!-- Modales -->
    
<?php while($y = $content->fetch()) { ?>
    <div class="modal fade" id="read<?= $y['id'] ?>" data-bs-backdrop="static">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <!-- Titre de la modale -->
                <div class="modal-header text-primary">
                    <h5 class="modal-title"><?= $y['title'] ?></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <!-- Corps de la modale -->
                <div class="modal-body">
                    <p class="m-4"><?= $y['content'] ?></p>
                </div>

                <!-- Pied-de-page de la modale -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-primary" data-bs-dismiss="modal">Fermer</button>
                </div>
            </div>
        </div>
    </div> 
<?php } ?>


<div class="modal fade" id="comment" data-bs-backdrop="static">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <!-- Titre de la modale -->
            <div class="modal-header text-primary mb-2">
                <h5 class="modal-title">Espace commentaires</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <!-- Corps de la modale -->
            <?php
            	if(isset($_SESSION['connect'])) { ?>
                    <div class="modal-body">
                    <?php while($c = $showComments->fetch()) { ?>
                        <p>NAME : <?= $c['user_comment'] ?></p>
                    <?php } ?>
                    <form class="mx-3" method="POST">
                        <p>
                            <label for="messsage" class="form-label mb-4">Votre commentaire :</label>
                            <textarea class="form-control" name="userComment" id="messsage" rows="5" placeholder="Hello World !"></textarea>
                        </p>
                        <p>
                            <button type="submit" name="sendComment" class="btn btn-primary my-3">Poster</button>
                        </p>
                    </form>
                </div>
                <?php } else
                    echo '<p class="mx-3">Vous devez être connecté pour commenter ou voir les commentaires.<br>
                    Inscrivrez-vous <a href="subscription.php">ici</a>.</p>'
                ?>


            <!-- Pied-de-page de la modale -->
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-primary" data-bs-dismiss="modal">Fermer</button>
            </div>
        </div>
    </div>
</div> 

    <!-- Footer -->

<?php

    require_once('src/footer.php');
?>


