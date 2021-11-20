<?php
require('bdd.php');
session_start();
if(isset($_POST['save'])){

  $requser=$bdd->prepare('INSERT INTO groupe(num_serie,carburant,marque,puissance,etat_groupe,id_infra) VALUES(?,?,?,?,?,?)');
  $requser->execute([$_POST['num_serie'],$_POST['carburant'],$_POST['marque'],$_POST['puissance'],$_POST['etat'],$_POST['infrastructure']]);
}
                      $req=$bdd->prepare("SELECT* FROM infrastructure");
                      $req->execute([]);
                      $recherche=$req->fetchAll();
              
            $search=$bdd->prepare("SELECT id_groupe, num_serie,carburant,marque,puissance,etat_groupe,nom_infra,lieu_infra FROM infrastructure
            INNER JOIN groupe on infrastructure.id_infra= groupe.id_infra ");
            $search->execute([]);
            $seaching=$search->fetchAll();


            //supprimez l'element 
            if(isset($_GET['delete'])){
              $supprimez_id=htmlspecialchars($_GET['delete']);
              $supprimez=$bdd->prepare("DELETE FROM groupe WHERE id_groupe=$supprimez_id");
              $supprimez->execute([$supprimez_id]);
            }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/bootstrap-5.0.2-dist/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/bootstrap-5.0.2-dist/js/bootstrap.js">
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/bootstrap-5.0.2-dist/css/bootstrap.css">
    <script src="bootstrap-5.1.0-dist/bootstrap-5.1.0-dist/js/bootstrap.js"></script>
    <title>groupe</title>
    <link rel="icon" href="ugl.jpg" type="image/jpg">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active btn btn-warning " aria-current="page" href="#"  >
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
  <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
</svg>Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="employee.php">
          <svg xmlns="http://www.w3.org/2000/svg" width="46" height="16" fill="currentColor" class="bi bi-person-lines-fill" viewBox="0 0 16 16">
  <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2z"/>
</svg>employees</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="vehicules.php">vehicules</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="materiaux.php">materiaux</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="groupe.php">groupe</a>
        </li>
        
        
        <li class="nav-item">
          <a class="nav-link"  href="table.php" class="btn btn-primary">dashbord</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle " href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            infrastructure
          </a>
          <ul class="dropdown-menu bg-info" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="#">infrastructure</a></li>
            <li><a class="dropdown-item" href="campus.php"><svg xmlns="http://www.w3.org/2000/svg" width="36" height="16" fill="currentColor" class="bi bi-bank2" viewBox="0 0 16 16">
  <path d="M8.277.084a.5.5 0 0 0-.554 0l-7.5 5A.5.5 0 0 0 .5 6h1.875v7H1.5a.5.5 0 0 0 0 1h13a.5.5 0 1 0 0-1h-.875V6H15.5a.5.5 0 0 0 .277-.916l-7.5-5zM12.375 6v7h-1.25V6h1.25zm-2.5 0v7h-1.25V6h1.25zm-2.5 0v7h-1.25V6h1.25zm-2.5 0v7h-1.25V6h1.25zM8 4a1 1 0 1 1 0-2 1 1 0 0 1 0 2zM.5 15a.5.5 0 0 0 0 1h15a.5.5 0 1 0 0-1H.5z"/>
</svg>campus</a></li>
            <li><a class="dropdown-item" href="salles.php">
            <svg xmlns="http://www.w3.org/2000/svg" width="36" height="16" fill="currentColor" class="bi bi-building" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M14.763.075A.5.5 0 0 1 15 .5v15a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5V14h-1v1.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V10a.5.5 0 0 1 .342-.474L6 7.64V4.5a.5.5 0 0 1 .276-.447l8-4a.5.5 0 0 1 .487.022zM6 8.694 1 10.36V15h5V8.694zM7 15h2v-1.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5V15h2V1.309l-7 3.5V15z"/>
  <path d="M2 11h1v1H2v-1zm2 0h1v1H4v-1zm-2 2h1v1H2v-1zm2 0h1v1H4v-1zm4-4h1v1H8V9zm2 0h1v1h-1V9zm-2 2h1v1H8v-1zm2 0h1v1h-1v-1zm2-2h1v1h-1V9zm0 2h1v1h-1v-1zM8 7h1v1H8V7zm2 0h1v1h-1V7zm2 0h1v1h-1V7zM8 5h1v1H8V5zm2 0h1v1h-1V5zm2 0h1v1h-1V5zm0-2h1v1h-1V3z"/>
</svg>salles</a></li>
            <li><a class="dropdown-item" href="bloc"><svg xmlns="http://www.w3.org/2000/svg" width="36" height="16" fill="currentColor" class="bi bi-building" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M14.763.075A.5.5 0 0 1 15 .5v15a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5V14h-1v1.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V10a.5.5 0 0 1 .342-.474L6 7.64V4.5a.5.5 0 0 1 .276-.447l8-4a.5.5 0 0 1 .487.022zM6 8.694 1 10.36V15h5V8.694zM7 15h2v-1.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5V15h2V1.309l-7 3.5V15z"/>
  <path d="M2 11h1v1H2v-1zm2 0h1v1H4v-1zm-2 2h1v1H2v-1zm2 0h1v1H4v-1zm4-4h1v1H8V9zm2 0h1v1h-1V9zm-2 2h1v1H8v-1zm2 0h1v1h-1v-1zm2-2h1v1h-1V9zm0 2h1v1h-1v-1zM8 7h1v1H8V7zm2 0h1v1h-1V7zm2 0h1v1h-1V7zM8 5h1v1H8V5zm2 0h1v1h-1V5zm2 0h1v1h-1V5zm0-2h1v1h-1V3z"/>
</svg>bloc</a></li>
            <li><a class="dropdown-item" href="#">vehicules</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
  <div class="pull-right">
    <a href="deconection.php">deconectez</a>&nbsp;&nbsp;&nbsp;
    
  </div
  <div class="pull-right">
    <img src="ugl.jpg" width="120px">
  </div>
</nav>
<br>
<br>


<div class="container">
<div class="card">
  <div class=" bg-primary card-header">
<!-- Button trigger modal -->
<?php if($_SESSION['rolees']=='admi'){?>
<button type="button" style="margin-left:91%" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal">
  ajoutez
</button>
<?php }?>

  </div>
  <div class="card-body">
<table class="table table-borded " id="table">
  
  <th >numero serie</th>
  <th >carburant</th>
  <th >marque</th>
  <th >puissance</th>
  <th >etat</th>
  <th >nom infra</th>
  <th >lieu_infra</th>

  <th  colspan="2" > action </th>
  
  <?php foreach($seaching as $seaches):?>
    <tr>
    <td><?= $seaches['num_serie']?></td>
    <td><?= $seaches['carburant']?></td>
    <td><?= $seaches['marque']?></td>
    <td><?= $seaches['puissance']?></td>
    <td><?= $seaches['etat_groupe']?></td>
    <td><?= $seaches['nom_infra']?></td>
    <td><?= $seaches['lieu_infra']?></td>

    <td>
    <?php if($_SESSION['rolees']=='admi'){?>
    <a    title="editez"  href="modifierform/modifiergroupe.php?edit=<?=$seaches['id_groupe']?>" class=" btn btn-success"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">
  <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z"/>
</svg></a></td>
    <td><a   title="supprimez"   href="groupe.php?delete=<?=$seaches['id_groupe']?>" class=" btn btn-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
  <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
  <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
</svg></a>
<?php }?>
</td>

    <?php endforeach?>
    </tr>
</table>
</div>
</div>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">ajout des groupes</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form method="POST" action="">



<label for="numero_serie">numero de serie</label>
<input type="" class="form-control" placeholder="completez le numero " required name="num_serie" id="numero_serie">

<label for="carburant">carburant</label>
<input type="" class="form-control" placeholder="completez le numero " id="carburant" required name="carburant">

<label for="marque">marque</label>
<input type="" class="form-control" placeholder="completez le numero " id="marque" required name="marque">


<label for="puissance">puissance</label>
<input type="" class="form-control" placeholder="completez le numero " id="puissance" required name="puissance">

<label for="etat">etat</label>
<input type="" class="form-control" placeholder="completez le numero " id="etat" required name="etat">


    <label for="infra" class="label-control">infrastructure</label>
    <select  class="form-select"name="infrastructure">
      <?php foreach($recherche as $infra):?>
      <option value="<?= $infra['id_infra']?>"> <?=$infra['nom_infra']?></option>
      <?php endforeach?>
    </select>
        
      
      <div class="modal-footer">
      <button type="submit"  name="save" id="btn" class="btn btn-primary">enregistrez</button>
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
        
      </div>
    </div>
    
    </form>
</div>

</body>
<style>
  nav a:hover{  transition-delay: 0.005s;
         transition-duration: 0.5s;
                background-color: orange;
                            border-radius: 20px;
                        transition-property: background;
                       transition:0.5s;
                   }
                   
 .card{
   margin-top:10%;
   width:87%;
 }

  body{
    font-family:cursive;
        background: #D9EFF5;
  }
</style>
</html>