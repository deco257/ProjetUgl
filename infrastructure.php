<?php
require('bdd.php');

$req=$bdd->prepare("SELECT * FROM campus");//la selection dans la table campus
$req->execute([]);
$aff=$req->fetch();

$req=$bdd->prepare("SELECT * FROM  typeinfrastructure ");//la selection dans la table  typeinfra
$req->execute([]);
$trvtypinf=$req->fetch();

if(isset($_POST[' save'])){
                    $cherrchez=$bbd->prepare("SELECT* FROM infrastructure where nom_infra=? AND lieu_infra=?");
                    $cherrchez->execute([$_POST['nom_infra'],$_POST['lieu_infra']]);
                  
if($trouvez->fetch()){
  echo"impossible d'ajouter ";
}else{
$insert=$bdd->prepare("INSERT INTO infrastructure(nom_infra,lieu_infra,id_campus,id_typeinfra) VALUES(?,?,?,?)");
$insert->execute([]);
echo"enregistrement reussi";
}
}


                                            $req=$bdd->prepare("SELECT id_infra,nom_infra,lieu_infra,nom,lieu,nom_typeinfra FROM 
                                            infrastructure  inf INNER JOIN 
                                            campus  cp on  cp.id_campus=inf.id_campus INNER JOIN 
                                            typeinfrastructure  typinf on typinf.id_typeinfra=inf.id_typeinfra" );
                                            $req->execute([]);
                                            $deco=$req->fetchAll();
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
    <title>infrastructure</title>
    <link rel="icon" href="ugl.jpg" type="image/jpg">
</head>
<body>

<div class="container">
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
          <a class="nav-link"  href="dashbord.php" class="btn btn-primary">acceuil</a>
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
            <li><a class="dropdown-item" href="bloc.php"><svg xmlns="http://www.w3.org/2000/svg" width="36" height="16" fill="currentColor" class="bi bi-building" viewBox="0 0 16 16">
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
    <img src="ugl.jpg" width="120px">
  </div>
</nav>
<br><br><br><br><br>
<div class="container">
                                <!-- Button trigger modal -->
                            <button type="button" class=" mt-9 btn btn-primary " data-bs-toggle="modal" data-bs-target="#exampleModal">
                            ajoutez
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">infrastructure</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">

                                  <!-- fromulaire d'insertion des infrastrucure -->
                                    <form method="POST" action="">
                                        <label for="nom_infra"class="label-control">nom infrastructure</label>
                                        <input type="" placeholder="nom de l'infrastructure.." name="infra"class="form-control" required>


                                        <label for="nom_infra"class="label-control">lieu infrastructure</label>
                                        <input type="" placeholder="nom de l'infrastructure.." name="lieu"class="form-control" required>
                                     

                                        <label class="label-control">campus</label>
                                        <select name="campus" class="form-select">
                                        
                                         <option value=""></option>
                                     </select>
                                         

                                     <label class="label-control">type infrastructure</label>
                                     <select name="type" class="form-select">
                                     <?php foreach($aff as $af):?>
                                         <option value="<?= $af['id_campus']?>"></option>
                                         <?php endforeach ?>
                                     </select>
                                  
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit"  name="save" class="btn btn-primary">enregistrez</button>
                                </div>
                                </div>
                            </div>
                            </div>
                            </form>
                                </div>
                                </div>
                                <table class="table table-success table-striped">
                                  <th>nom infra</th>
                                  <th>lieu infra</th>
                                  <th>nom campus</th>
                                  <th>lieu campus</th>
                                  <th>nom type infra</th>
                                  <th>action</th>
                                  <?php foreach($deco as $derick):?>
                                    <td><?= $derick['nom_infra']?></td>
                                    <td><?= $derick['lieu_infra']?></td>
                                    <td><?= $derick['nom']?></td>
                                    <td><?= $derick['lieu']?></td>
                                    <td><?= $derick['nom_typeinfra']?></td>
                                    <?php endforeach?>

                                </table>
                                </div>
</body>
</html>