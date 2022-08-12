
<?php
require"connexion.php";

if(isset($_POST['validate']))
{
	
    $nom = htmlspecialchars($_POST["nom"]);
    $prenom = htmlspecialchars($_POST["prenom"]);
    $email = htmlspecialchars($_POST["email"]);
    $mp1=$_POST['mp1'];
    $mp2=$_POST['mp2'];
   

if($mp1==$mp2)
{
    $mp=md5($_POST['mp1']);
  $req =$cn->prepare("INSERT INTO utilisateurs VALUES(NULL,?,?,?,?)");
  $req->execute(array($nom,$prenom,$email,$mp));
  $req->closeCursor();
  $id=$cn->lastInsertId();
  $photo= "$id.jpg";
  move_uploaded_file($_FILES['photo']['tmp_name'], "images/$photo");

  $retourne = $cn->query("SELECT * FROM utilisateurs ");
  $objets = $retourne->fetchAll(PDO::FETCH_ASSOC);
  foreach($objets as $objet)
  {
      
      $_SESSION['id_users'] = $objet['id_user'];
      $_SESSION['nom'] = $objet['nom_user'];
      $_SESSION['prenom'] = $objet['prenom_user'];
      $_SESSION['email'] = $objet['email_user'];
      $_SESSION['pw'] = $objet['pw_user'];
     
  }
  

  echo 'inscription validé';
}
else
   
 echo 'les mots de passe ne sont pas identiques ';
}
?>

