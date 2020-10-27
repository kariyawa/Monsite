
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
<header>
  <?=require 'templates/header.php'?>
</header>
<main>
<?= $content ?>
</main>

<footer>
<script src="https://kit.fontawesome.com/faa5f757b2.js" crossorigin="anonymous"></script>
</footer>
</body>