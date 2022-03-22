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

        <!-- Boîte de présentation 1 -->

    <div class="px-4 pt-5 my-5 text-center">
        <h1 class="display-4 fw-bold text-primary">Centered screenshot</h1>
        <div class="col-lg-6 mx-auto">
            <p class="lead mb-4">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
            <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mb-5">
             </div>
        </div>
        <div class="overflow-hidden" style="max-height: 30vh;">
        </div>
    </div>


        <!-- Boîte de présentation 2 -->


    <div class="container my-5">
        <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg">
            <div class="col-lg-7 p-3 p-lg-5 pt-lg-3">
                <h1 class="display-4 fw-bold lh-1 mb-5">L'actualité en temps réél, n'importe quand, n'importe où</h1>
                <p class="lead mb-5">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3">
                        <button type="button" class="btn btn-primary btn-lg px-4 me-md-2 fw-bold" data-bs-toggle="modal" data-bs-target="#subscription">S'inscrire</button>
                        <button type="button" class="btn btn-outline-secondary btn-lg px-4" data-bs-toggle="modal" data-bs-target="#signIn">Se connecter</button>
                    </div>
            </div>
            <div class="col-lg-4 offset-lg-1 p-0 overflow-hidden shadow-lg">
                <img class="rounded-lg-3" src="public/assets/caption.png" alt="" width="500">
            </div>
        </div>
    </div>


        <!-- Boîte de présentation 3 -->


    <div class="bg-secondary text-primary px-4 py-5 text-center">
        <div class="py-5">
            <h1 class="display-5 fw-bold text-white">Dark mode hero</h1>
            <div class="col-lg-6 mx-auto">
                <p class="fs-5 mb-4">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
                    <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                    </div>
            </div>
        </div>
    </div>
  
        <!-- Footer -->

    <?php
        require_once('footer.php');
    ?>