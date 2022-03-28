<?php

    session_start();

    require_once('src/header.php');
?>

    <!-- Formulaire de contact -->

<div class="px-4 pt-5 my-5 text-center">
    <h2 class="display-4 fw-bold text-primary">Contactez-nous</h2>
    <div class="col-lg-6 mx-auto my-1 p-3">
        <form method="POST">
            <p>
                <label for="name" class="form-label"></label>
                <div class="input-group">
                    <span class="input-group-text">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-person" viewBox="0 0 16 16">
                            <path d="M11 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                            <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2v9.255S12 12 8 12s-5 1.755-5 1.755V2a1 1 0 0 1 1-1h5.5v2z"/>
                        </svg>
                    </span>
                    <input type="text" name="name" id="name" class="form-control" placeholder="Votre nom">
                </div>
            </p>
            <p>
                <label for="email" class="form-label"></label>
                <div class="input-group">
                    <span class="input-group-text">@</span>
                    <input type="text" name="email" id="email" class="form-control" placeholder="email@email.com">
                </div>
            </p>
            <p>
                <label for="messsage" class="form-label mb-4"></label>
                <textarea class="form-control" id="messsage" rows="5" placeholder="Hello World !"></textarea>
            </p>
            <p>
                <button type="submit" name="contact" class="btn btn-primary my-3 w-25">Envoyer</button>
            </p>
        </form>
    <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mb-5"></div>
    <div class="overflow-hidden" style="max-height: 30vh;"></div>
</div>
    

    <!-- Footer -->

<?php

    require_once('src/footer.php');
?>