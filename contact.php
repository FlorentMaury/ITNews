<?php

    session_start();

    require_once('src/header.php');
    
?>

    <!-- Formulaire de contact -->

<div class="px-4 pt-5 my-5 text-center">
    <h2 class="display-4 fw-bold text-primary">Contactez-nous</h2>
    <div class="col-lg-6 mx-auto my-1 p-3">
        <form>
            <p class="m-3 p-4">
                Une question sur notre entreprise, une soudaine envie de nous rejoindre ? <br>
                Une information que nous aurions manquée ? Ou juste nous envoyer de l'amour ? <br>
                Envoyez-nous un email ! 
            </p>
            <p>
                <button type="submit" name="contact" class="btn btn-primary my-3 w-25">
                    <a class="text-decoration-none text-secondary" href="mailto:contact@florent-maury.fr?subject=Hello ITNews !&body=Je vous contacte car ">Envoyer !</a>
                </button>
            </p>
        </form>
    <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mb-5"></div>
    <div class="overflow-hidden" style="max-height: 30vh;"></div>
</div>
    

    <!-- Footer -->

<?php

    require_once('src/footer.php');
?>