<?php
require('bdd.php');
if(isset($_POST['send'])){
    if(!empty($_POST['mat'] AND ! empty($_POST['salle']))){
        $req=$bdd->prepare('INSERT INTO materielsalle(id_mat,id_salle) VALUES (?,?)');
        $req->execute(array($_POST['mat'],$_POST['salle']));
    }else{
       echo"erreu";
    }
}
$query = $bdd->prepare("SELECT * FROM materiel");
$query->execute([]);
$materiaux = $query->fetchAll();


$query = $bdd->prepare("SELECT * FROM salles");
$query->execute([]);
$salles = $query->fetchAll();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/bootstrap-5.0.2-dist/css/bootstrap.css">
  <link rel="stylesheet" href="bootstrap-5.0.2-dist/bootstrap-5.0.2-dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="bootstrap-5.0.2-dist/bootstrap-5.0.2-dist/js/bootstrap.js">
  <link rel="stylesheet" href="bootstrap-5.0.2-dist/bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js">
  <link rel="stylesheet" href="bootstrap-5.0.2-dist/bootstrap-5.0.2-dist/css/bootstrap.css">

  <script src="bootstrap-5.1.0-dist/bootstrap-5.1.0-dist/js/bootstrap.js"></script>
    <title>materiel salle</title>
</head>
<body>
<div class="card">
<div class=" bg-warning card-header">completez le formulaire</div>
<div class="card-body">
    <form  method="POST" action="">
    <label class="label-control">materiel</label>
    <select name="mat" class="form-group">
    <?php foreach ($materiaux as $mat) : ?>
<option value="<?= $mat['id_mat'] ?>"> <?= $mat['nom'] ?></option>
<?php endforeach  ?>
    </select>&nbsp;&nbsp;&nbsp;&nbsp;
    <label  class="label-control">materiel</label>
    <select name="salle" class="form-group">
    <?php foreach ($salles as $salle) : ?>

<option value="<?= $salle['id_salle'] ?>"> <?= $salle['nom_salle'] ?></option>
<?php endforeach ?>
    </select>
    <div class=" bg-light card-footer">
    <button type="submit" name="send" class="btn btn-danger"> envoyer</button>
    </div>
    </form>
    </div>
    </div>
</body>
<style>
.card{
    width:40%;
}
</style>
</html>