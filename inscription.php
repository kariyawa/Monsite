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

	<br><br><br>
    <div class="inscription">
	<!---Form starting----> 
	
    <div class="col-sm-12">
		     <div class="row">
			    <div class="col-6">
                     <label class="username">Nom utilisateur :</label>
                </div>
                <div class ="col-10">	 
		             <input type="text" name="uname" id="uname" placeholder="Entrer your Nom d'utilisateur" class="form-control">
                </div>
		     </div>
    </div>
    <div class="col-sm-12">
		     <div class="row">
			    <div class="col-6">
                     <label class="firstname">Prénom :</label>
                </div>
                <div class ="col-10">	 
		             <input type="text" name="fname" id="fname" placeholder="Entrer votre Prénom" class="form-control last">
                </div>
		     </div>
    </div>
    <div class="col-sm-12">
		     <div class="row">
			    <div class="col-6">
                     <label class="lastname">Nom :</label>
                </div>
                <div class ="col-10">	 
		             <input type="text" name="lname" id="lname" placeholder="Entrer votre Nom" class="form-control last">
                </div>
		     </div>
    </div>
     <!-----For email---->
    <div class="col-sm-12">
		     <div class="row">
			    <div class="col-6">
                     <label class="mail" >Adresse Mail :</label>
                </div>
                <div class="col-10"	>	 
			          <input type="email" name="email"  id="email" placeholder="Entrer votre email" class="form-control" >
		        </div>
		     </div>
    </div>
    <div class="col-sm-12">
		     <div class="row">
			    <div class="col-6">
                     <label class="mail" >Mot de passe :</label>
                </div>
                <div class="col-10"	>	 
			          <input type="email" name="email"  id="email" placeholder="Entrer votre mot de passe" class="form-control" >
		        </div>
		     </div>
    </div>
    </div>
    <br><br><br>



    <!-- footer -->
    <?php
        require 'templates/footer.php'
    ?>
    <!-- end footer -->
</body>
</html>