<?php

    session_start();

    require_once('src/connection.php');

    $articles = $bdd->query('SELECT * FROM article ORDER BY article_date DESC');

    require_once('src/header.php');

?>


    <!-- Articles -->

<div class="container">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 my-4">
        <?php while($x = $articles->fetch()) { ?>
            <div class="col"> 
                <div class="card shadow-sm">
                    <img class="rounded" src="https://picsum.photos/419/225" alt="Image">
                    <div class="card-body">
                        <p class="card-text"><?= $x['subtitle'] ?></p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#lire">Lire</button>
                                <button type="button" class="btn btn-sm btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#commenter">Commenter</button>
                            </div>
                            <small class="text-muted"><?= $x['article_date'] ?></small>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
</div>

<div class="container">
    <button class="w-25 btn btn-lg btn-primary my-4" href="/articleCreation.php" type="submit">
        <a href="/articleCreation.php" class="text-decoration-none text-secondary">Ajouter un article</a>
    </button>
</div>



    <!-- Modales -->

<div class="modal fade" id="lire" data-bs-backdrop="static">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <!-- Titre de la modale -->
            <div class="modal-header text-primary">
                <h5 class="modal-title">Titre de l'article</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <!-- Corps de la modale -->
            <div class="modal-body">
                <p class="m-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam convallis porta est nec laoreet. Aliquam erat volutpat. Praesent et hendrerit felis. Donec molestie augue at felis lacinia, et consectetur mauris tristique. Morbi placerat ultrices orci, sit amet ultrices odio facilisis eget. Vestibulum egestas, leo in varius fringilla, nisi risus consectetur neque, at blandit odio lacus non neque. Donec a tortor dolor. Pellentesque diam dolor, pharetra vel arcu ac, vestibulum dictum neque. </p>
                <p class="m-4">Mauris sagittis felis et odio posuere sagittis. Maecenas libero libero, convallis semper accumsan a, consectetur nec ex. Aenean aliquet sodales laoreet. Nam diam elit, pulvinar eget risus eu, vestibulum pretium elit. Nunc dui ipsum, fringilla et nisl id, vehicula vehicula nisl. Nam ut leo metus. Praesent pulvinar vitae quam eu pellentesque. Vivamus sagittis a neque et ornare. In eget fringilla est, in euismod nisi. Maecenas sagittis id quam vel finibus. Sed quis semper ligula. Sed blandit sem ut purus rhoncus, et iaculis justo laoreet. Vestibulum vestibulum mattis lobortis. Fusce rhoncus sapien feugiat urna mattis pretium. Vivamus tristique, ex aliquet gravida tristique, nisi massa ullamcorper erat, finibus varius ex tortor nec ligula. </p>
                <p class="m-4">Suspendisse aliquam dapibus lectus vitae varius. Vivamus fringilla purus eu ex vestibulum, sit amet ullamcorper neque lacinia. Nunc varius dictum risus. Vestibulum ut imperdiet eros. Etiam quis imperdiet nisi, vel semper urna. Vestibulum ante dolor, malesuada et malesuada volutpat, interdum in nibh. Pellentesque posuere augue sed quam consequat rhoncus. Aliquam vitae semper est. Curabitur pretium ullamcorper augue, et porttitor justo finibus in. </p>
            </div>

            <!-- Pied-de-page de la modale -->
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-primary" data-bs-dismiss="modal">Fermer</button>
            </div>
        </div>
    </div>
</div> 



<div class="modal fade" id="commenter" data-bs-backdrop="static">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <!-- Titre de la modale -->
            <div class="modal-header text-primary mb-2">
                <h5 class="modal-title">Espace commentaires</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <!-- Corps de la modale -->
            <form class="mx-3">
            <p>
                <label for="title" class="form-label">Titre : </label>
                <div class="input-group">
                    <input type="text" name="title" id="title" class="form-control" placeholder="Titre de votre commentaire">
                </div>
            </p>
            <p>
                <label for="messsage" class="form-label mb-4">Votre commentaire :</label>
                <textarea class="form-control" id="messsage" rows="5" placeholder="Hello World !"></textarea>
            </p>
            <p>
                <button type="submit" class="btn btn-primary my-3">Poster</button>
            </p>
        </form>

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