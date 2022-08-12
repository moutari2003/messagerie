<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="layout/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="layout/boot.css">
</head>
<body>
<header>
<section>
 <h1 class="acceuill" style="text-align: center;">Bienvenue dans notre forum : Login</h1> 
</section>
	<nav>
	<div class='pstion'>
	<button type="button" class="btn btn-success"><a href="principal.php">Login</a></button>
	<button type="button" class="btn btn-secondary"><a href="inscription.php">Inscription</a></button>
	
	<?php
		if(isset($_SESSION['nom']))
		{
			echo '	<button type="button" class="btn btn-danger"><a href="logout.php">Déconnexion</a></button>';
		}
		?>
		</div>
	</nav>
</header>

<section>
<div class="form-row align-items-center first">
<form action="" method="post" id="flogin">

<div class="col-auto">
            <label class="sr-only" for="inlineFormInput">Email</label>
            <input type="mail" class="form-control mb-2" id="inlineFormInput" name="email" placeholder="example@gmail.com">
          </div>
          <div class="col-auto">
            <label class="sr-only" for="inlineFormInput">Mot de passe</label>
            <input type="password" class="form-control mb-2" id="inlineFormInput" name="pw" >
          </div>
		<div class="col-auto">
            <button type="submit" name="valider" class="btn btn-primary mb-2">Valider</button>
          </div>
        </div>

	
<?php
include("connexion.php");

if(isset($_POST['valider']))
{
	$email = htmlspecialchars($_POST['email']);
	$pw = md5($_POST['pw']);

	$retourne = $cn->query("SELECT * FROM utilisateurs WHERE email_user = '$email' and pw_user = '$pw'");
	if($retourne->rowCount() == 0)
	{
		echo 'mot de passe ou identifant incorrect';
	
     
  }
	else{
		
		$valeur = $retourne->fetch(PDO::FETCH_ASSOC);
		$_SESSION['id_user'] = $valeur['id_user'];
		$_SESSION['nom'] = $valeur['nom_user'];
		$_SESSION['prenom'] = $valeur['prenom_user'];
		$_SESSION['login'] = $valeur['email_user'];
		$_SESSION['mp'] = $valeur['pw_user'];
	}
	header("location:forum.php");     
	}

?>
</form>
</section>
</body>
</html>