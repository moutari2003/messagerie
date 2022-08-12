<?php
require'ressource.php';
session_start();
?>
<html>
<head>
	<title></title>
 <meta charset="utf-8">
 <link rel="stylesheet" href="layout/bootstrap.min.css">
 <link rel="stylesheet" type="text/css" href="layout/boot.css">
</head>
<body>
  <header>
  <section>
 <h1 class="acceuill">Page inscription</h1> 
</section>
  <nav>

   <div class='pstion'>
	<button type="button" class="btn btn-success"><a href="index.php">Login</a></button>
	<button type="button" class="btn btn-secondary"><a href="inscription.php">Inscription</a></button>

</div>
</nav>
</header>

<form action="" method="post" id="inscription" enctype="multipart/form-data">
<div class="form-row align-items-center first">
          <div class="col-auto">
            <label class="sr-only" for="inlineFormInput">Name</label>
            <input type="text" class="form-control mb-2 " id="inlineFormInput" name="nom" placeholder="Jane Doe">
          </div>
          <div class="col-auto">
            <label class="sr-only" for="inlineFormInputGroup">Username</label>
            <div class="input-group mb-2">
              <div class="input-group-prepend">
                <div class="input-group-text">@</div>
              </div>
              <input type="text" class="form-control" id="inlineFormInputGroup"name="prenom" placeholder="Username">
            </div>
          </div>
          <div class="col-auto">
            <label class="sr-only" for="inlineFormInput">Email</label>
            <input type="mail" class="form-control mb-2" id="inlineFormInput" name="email" placeholder="moutarisigui3@gmail.com">
          </div>
          <div class="col-auto">
            <label class="sr-only" for="inlineFormInput">Mot de passe</label>
            <input type="mail" class="form-control mb-2" id="inlineFormInput" name="mp1" >
          </div>
          <div class="col-auto">
            <label class="sr-only" for="inlineFormInput">Confirmer votre mot de passe</label>
            <input type="mail" class="form-control mb-2" id="inlineFormInput" name="mp2" >
          </div>
          <div class="input-group mb-3">
          <div class="col-auto">
            <input type="file" class="form-control mb-2" id="inlineFormInput" name='photo' >
          </div>
          
          <div class="input-group mb-3">
             <div class="col-auto">
            <button type="submit" name="validate" class="btn btn-primary mb-2">Submit</button>
          </div>
         </div>
</div>


</form>
</div>
</body>

</html>