<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="public/design/style.css">
    <title>ITNEws | L'information technologique</title>
</head>
<body>
    
        <!-- Header -->

    <?php
        require_once('header.php');
    ?>

        <!-- Formulaire de contact -->

    <div class="px-4 pt-5 my-5 text-center">
        <h1 class="display-4 fw-bold text-primary">Contactez-nous</h1>
        <div class="col-lg-6 mx-auto my-1 p-3">
            <form>
                <p>
                    <label for="name" class="form-label">Nom : </label>
                    <div class="input-group">
                        <span class="input-group-text">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-person" viewBox="0 0 16 16">
                                <path d="M11 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2v9.255S12 12 8 12s-5 1.755-5 1.755V2a1 1 0 0 1 1-1h5.5v2z"/>
                            </svg>
                        </span>
                        <input type="text" name="name" id="name" class="form-control" placeholder="Jacques Dupont">
                    </div>
                </p>
                <p>
                    <label for="email" class="form-label">Email : </label>
                    <div class="input-group">
                        <span class="input-group-text">@</span>
                        <input type="text" name="email" id="email" class="form-control" placeholder="jacques-dupont@email.com">
                    </div>
                </p>
                <p>
                    <label for="messsage" class="form-label mb-4">Votre message :</label>
                    <textarea class="form-control" id="messsage" rows="5" placeholder="Hello World !"></textarea>
                </p>
                <p>
                    <button type="submit" class="btn btn-primary my-3">Envoyer</button>
                </p>
            </form>
        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mb-5"></div>
        <div class="overflow-hidden" style="max-height: 30vh;"></div>
    </div>
        
  
        <!-- Footer -->

    <?php

        require_once('footer.php');
    ?>