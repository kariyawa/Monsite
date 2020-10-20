<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon site web</title>

<!-- font -->
<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;500;600&display=swap" rel="stylesheet">
<!-- css -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/stylemonsite.css">

    
    
</head>

<!-- contenu du site -->
<body>

    <!-- header -->
    <?php
        require 'templates/header.php'
    ?>
    <!-- end header -->

    <!-- bannière -->
    <section class="container-fluid banner">
        <div class="ban">
            <img src="img/2630.jpg" alt="bannière du site" />
        </div>
        <div>
            <h1> Bienvenu sur mon portefolio</h1>
            <button class="btn btn-custom"> Contactez moi !</button>
        </div>
    </section>
    <!-- end bannière -->


    <!-- à propos -->
    <section class="container-fluid about">
        <div class="container">
            <div class="row">
                <article class="col-md-4 col-lg-4 col-xs-12 col-sm-12">
                    <h2> Etudes </h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor. Cras elementum ultrices diam. Maecenas ligula massa, varius a, semper congue, euismod non, mi. Proin porttitor, orci nec nonummy molestie, enim est eleifend mi, non fermentum diam nisl sit amet erat. Duis semper. Duis arcu massa, scelerisque vitae, consequat in, pretium a, enim. Pellentesque congue. Ut in risus volutpat libero pharetra tempor. Cras vestibulum bibendum augue. Praesent egestas leo in pede. Praesent blandit odio eu enim. Pellentesque sed dui ut augue blandit sodales. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aliquam nibh. Mauris ac mauris sed pede pellentesque fermentum. Maecenas adipiscing ante non diam sodales hendrerit.
                    </p>
                </article>
                <article class="col-md-4 col-lg-4 col-xs-12 col-sm-12">
                    <h2> Experiences </h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor. Cras elementum ultrices diam. Maecenas ligula massa, varius a, semper congue, euismod non, mi. Proin porttitor, orci nec nonummy molestie, enim est eleifend mi, non fermentum diam nisl sit amet erat. Duis semper. Duis arcu massa, scelerisque vitae, consequat in, pretium a, enim. Pellentesque congue. Ut in risus volutpat libero pharetra tempor. Cras vestibulum bibendum augue. Praesent egestas leo in pede. Praesent blandit odio eu enim. Pellentesque sed dui ut augue blandit sodales. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aliquam nibh. Mauris ac mauris sed pede pellentesque fermentum. Maecenas adipiscing ante non diam sodales hendrerit.
                    </p>
                </article>
                <article class="col-md-4 col-lg-4 col-xs-12 col-sm-12">
                    <h2> Hobbies </h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor. Cras elementum ultrices diam. Maecenas ligula massa, varius a, semper congue, euismod non, mi. Proin porttitor, orci nec nonummy molestie, enim est eleifend mi, non fermentum diam nisl sit amet erat. Duis semper. Duis arcu massa, scelerisque vitae, consequat in, pretium a, enim. Pellentesque congue. Ut in risus volutpat libero pharetra tempor. Cras vestibulum bibendum augue. Praesent egestas leo in pede. Praesent blandit odio eu enim. Pellentesque sed dui ut augue blandit sodales. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aliquam nibh. Mauris ac mauris sed pede pellentesque fermentum. Maecenas adipiscing ante non diam sodales hendrerit.
                    </p>
                </article>    
            </div>
        </div>
    
    </section>
    <!-- end à propos -->



    <!-- portefolio -->
    <section class="container-fluid portefolio">
        <div class="container">
            <article class="col-md-3 col-lg-3 col-xs-12 col-sm-12 item-folio">

            </article>
            <article class="col-md-3 col-lg-3 col-xs-12 col-sm-12 item-folio">

            </article>
            <article class="col-md-3 col-lg-3 col-xs-12 col-sm-12 item-folio">

            </article>
            <article class="col-md-3 col-lg-3 col-xs-12 col-sm-12 item-folio">

            </article>
            <article class="col-md-3 col-lg-3 col-xs-12 col-sm-12 item-folio">

            </article>
            <article class="col-md-3 col-lg-3 col-xs-12 col-sm-12 item-folio">

            </article>
            <article class="col-md-3 col-lg-3 col-xs-12 col-sm-12 item-folio">

            </article>
            <article class="col-md-3 col-lg-3 col-xs-12 col-sm-12 item-folio">

            </article>
            

            
        </div>
    </section>
    <!-- end portefolio -->

    <!-- footer -->
    <?php
        require 'templates/footer.php'
    ?>
    <!-- end footer -->
    <script src="https://kit.fontawesome.com/faa5f757b2.js" crossorigin="anonymous"></script>
</body>
</html>