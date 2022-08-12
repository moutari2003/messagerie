<?php
session_start();
if(isset($_SESSION['login']) and isset($_SESSION['mp']))
{
  require("connexion.php");

?>
<!-- partie html qui constitue le champs de login -->
<html>
<head>
	<title></title>
 <meta charset="utf-8">
 <link rel="stylesheet" href="layout/bootstrap.min.css">
	<link rel="stylesheet" href="layout/boot.css">
</head>
<body>
  <header>
  <nav>
    <div class='pstion'>
	<button type="button" class="btn btn-success"><a href="principal.php">Login</a></button>
	<button type="button" class="btn btn-secondary"><a href="inscription.php">Inscription</a></button>
	<!-- introduction du php pour conditionner l'apparition du bouton de desactivation -->
	<?php
		if(isset($_SESSION['nom']))
		{
			echo '	<button type="button" class="btn btn-danger"><a href="logout.php">Déconnexion</a></button>';
		}
		?>
		</div>
  </nav>
</header>
<section id="sect1" class="division">
<?php
  /* changer le format de la date en français*/
function changedate($dt)

{
$tab = explode("-",$dt);
$nd = $tab[2]."-".$tab[1]."-".$tab[0];
return $nd;
}
 // requete pour recuperer les donnees  lorsque la cle primaire est egale a la cle secondaire
$res=$cn->prepare("SELECT * FROM utilisateurs,message WHERE utilisateurs.id_user=message.id_user order by id_message DESC"); 
$res->execute();
// la boucle while sert a afficher de facon sequentielle les message
while($data=$res->fetch(PDO::FETCH_ASSOC))
{
  $path ="images/".$data["id_user"];
  $data_change = changedate($data['date_message']);

 require"affichage.php";
  
}
?>
<!-- partie du texte a ecrire et du boutton d'envoie -->
<form action="" class="envoie" method="POST">
 
        <div class="col-auto mess">
            
            <textarea class="form-control mb-2" rows="2" cols="100" id="inlineFormInput" placeholder="message" name="message" ></textarea>
          </div>
         <div class="col-auto">
            <input type="submit" name="send" class="btn btn-primary mb-2  boutton" value="SEND">
          </div>
        </div>
</form>
<?php


if(isset($_POST['send']))
{ 
  
  $id=($_SESSION['id_user']);
  $msg=htmlspecialchars($_POST['message']);
  $date=date('Y-m-d');
  $heure=date('H:i');
   $sending = $cn->prepare("INSERT INTO message VALUES (NULL,?,?,?,?)");
   $sending ->execute(array($msg,$date,$heure,$id));
   header("location:forum.php");
 

}
?>
</section>
</body>
</html>
<?php
}
else
header("location:index.php");
?>
