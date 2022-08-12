
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="layout/bootstrap.min.css">
	<link rel="stylesheet" href="layout/boot.css">

</head>
<body>
<!--   code pour afficher les message disponible  -->
<div class="alert alert-light piston " >
  
  <img src="<?=$path.".jpg"?>" class="photo" width="30px" height="30px">
  <p class="hack"><?= $data['nom_user']." ".$data['prenom_user']?></p>
</div>
<div class="alert alert-secondary gambol" >
  <p>posté le : <?=$data_change."  à ".$data['heure_message']?></p>  
  <p> <?=$data['text_message']?></p> 
</div>


</body>
</html>