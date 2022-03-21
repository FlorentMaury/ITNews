<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="public/design/style.css">
    <title>Document</title>
</head>
<body>
    
        <!-- Header -->

    <?php
        require_once('header.php');
    ?>

        <!-- Hero -->

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


        <!-- Articles -->



<div class="container">
    <hr class="featurette-divider text-primary">
        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading pt-4">First featurette heading. <span class="text-muted">It’ll blow your mind.</span></h2>
                <p class="lead">Some great placeholder content for the first featurette here. Imagine some exciting prose here.</p>
                <button type="button" class="btn btn-primary btn-lg px-2 me-sm-3">Lire l'article</button>
            </div>
            <div class="col-md-5">
                <img src="https://picsum.photos/500" alt="">
            </div>
        </div>

    <hr class="featurette-divider text-primary">

        <div class="row featurette">
            <div class="col-md-7 order-md-2">
                <h2 class="featurette-heading pt-4">Oh yeah, it’s that good. <span class="text-muted">See for yourself.</span></h2>
                <p class="lead">Another featurette? Of course. More placeholder content here to give you an idea of how this layout would work with some actual real-world content in place.</p>
                <button type="button" class="btn btn-primary btn-lg px-2 me-sm-3">Lire l'article</button>
            </div>
            <div class="col-md-5 order-md-1">
                <img src="https://picsum.photos/500" alt="">
            </div>
        </div>

    <hr class="featurette-divider text-primary">

        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading pt-4">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
                <p class="lead">And yes, this is the last block of representative placeholder content. Again, not really intended to be actually read, simply here to give you a better view of what this would look like with some actual content. Your content.</p>
                <button type="button" class="btn btn-primary btn-lg px-2 me-sm-3">Lire l'article</button>
            </div>
            <div class="col-md-5">
                <img src="https://picsum.photos/500" alt="">
            </div>
        </div>

    <hr class="featurette-divider text-primary">
</div>
  
        <!-- Footer -->

    <?php

        require_once('footer.php');
    ?>

</body>
</html>