<?php
require('bdd.php');
require('session/session.php');

if (isset($_POST['save'])) {
  $nom = $_POST['nom'];
  $marque = $_POST['marque'];
  $num = $_POST['num_serie'];
  $date = $_POST['date_de_fabrication'];
  $capacite = $_POST['capacite'];
  $categorie = $_POST['categorie'];
  $etat = $_POST['etat'];


  $req = $bdd->prepare("INSERT INTO materiel(nom,marque,num_serie,date_de_fabrication,capacite,id_cat,etat_mat)
  VALUES(?,?,?,?,?,?,?)");
  $req->execute(array(
    $_POST['nom'], $_POST['marque'], $_POST['num_serie'], $_POST['date_de_fabrication'],
    $_POST['capacite'], $_POST['categorie'], $_POST['etat']
  ));
}
//la selection des donnees dans la base de donnees
$query = $bdd->prepare("SELECT * FROM categories");
$query->execute([]);
$categories = $query->fetchAll();


//la suppression des donnees dans la base de donne
if (isset($_GET['delete'])) {
  $supprimez_id = htmlspecialchars($_GET['delete']);
  $supprimez = $bdd->prepare("DELETE FROM materiel WHERE id_mat=$supprimez_id");
  $supprimez->execute([$supprimez_id]);
}
$result=isset($_GET['search'])? $_GET['search']: "";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="bootstrap-5.0.2-dist/bootstrap-5.0.2-dist/css/bootstrap.css">
  <link rel="stylesheet" href="bootstrap-5.0.2-dist/bootstrap-5.0.2-dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="bootstrap-5.0.2-dist/bootstrap-5.0.2-dist/js/bootstrap.js">
  <link rel="stylesheet" href="bootstrap-5.0.2-dist/bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js">
  <link rel="stylesheet" href="bootstrap-5.0.2-dist/bootstrap-5.0.2-dist/css/bootstrap.css">

  <script src="bootstrap-5.1.0-dist/bootstrap-5.1.0-dist/js/bootstrap.js"></script>

  <title>Materiaux</title>
  <link rel="icon" href="ugl.jpg" type="image/jpg">
</head>

<body>
  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand" href=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active btn btn-warning " aria-current="page" href="">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
                  <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" />
                </svg>Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="employee.php">
                <svg xmlns="http://www.w3.org/2000/svg" width="46" height="16" fill="currentColor" class="bi bi-person-lines-fill" viewBox="0 0 16 16">
                  <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2z" />
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
              <a class="nav-link" href="table.php" class="btn btn-primary">dashbord</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle " href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                infrastructure
              </a>
              <ul class="dropdown-menu bg-info" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="#">infrastructure</a></li>
                <li><a class="dropdown-item" href="campus.php"><svg xmlns="http://www.w3.org/2000/svg" width="36" height="16" fill="currentColor" class="bi bi-bank2" viewBox="0 0 16 16">
                      <path d="M8.277.084a.5.5 0 0 0-.554 0l-7.5 5A.5.5 0 0 0 .5 6h1.875v7H1.5a.5.5 0 0 0 0 1h13a.5.5 0 1 0 0-1h-.875V6H15.5a.5.5 0 0 0 .277-.916l-7.5-5zM12.375 6v7h-1.25V6h1.25zm-2.5 0v7h-1.25V6h1.25zm-2.5 0v7h-1.25V6h1.25zm-2.5 0v7h-1.25V6h1.25zM8 4a1 1 0 1 1 0-2 1 1 0 0 1 0 2zM.5 15a.5.5 0 0 0 0 1h15a.5.5 0 1 0 0-1H.5z" />
                    </svg>campus</a></li>
                <li><a class="dropdown-item" href="salles.php">
                    <svg xmlns="http://www.w3.org/2000/svg" width="36" height="16" fill="currentColor" class="bi bi-building" viewBox="0 0 16 16">
                      <path fill-rule="evenodd" d="M14.763.075A.5.5 0 0 1 15 .5v15a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5V14h-1v1.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V10a.5.5 0 0 1 .342-.474L6 7.64V4.5a.5.5 0 0 1 .276-.447l8-4a.5.5 0 0 1 .487.022zM6 8.694 1 10.36V15h5V8.694zM7 15h2v-1.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5V15h2V1.309l-7 3.5V15z" />
                      <path d="M2 11h1v1H2v-1zm2 0h1v1H4v-1zm-2 2h1v1H2v-1zm2 0h1v1H4v-1zm4-4h1v1H8V9zm2 0h1v1h-1V9zm-2 2h1v1H8v-1zm2 0h1v1h-1v-1zm2-2h1v1h-1V9zm0 2h1v1h-1v-1zM8 7h1v1H8V7zm2 0h1v1h-1V7zm2 0h1v1h-1V7zM8 5h1v1H8V5zm2 0h1v1h-1V5zm2 0h1v1h-1V5zm0-2h1v1h-1V3z" />
                    </svg>salles</a></li>
                <li><a class="dropdown-item" href="bloc.php"><svg xmlns="http://www.w3.org/2000/svg" width="36" height="16" fill="currentColor" class="bi bi-building" viewBox="0 0 16 16">
                      <path fill-rule="evenodd" d="M14.763.075A.5.5 0 0 1 15 .5v15a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5V14h-1v1.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V10a.5.5 0 0 1 .342-.474L6 7.64V4.5a.5.5 0 0 1 .276-.447l8-4a.5.5 0 0 1 .487.022zM6 8.694 1 10.36V15h5V8.694zM7 15h2v-1.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5V15h2V1.309l-7 3.5V15z" />
                      <path d="M2 11h1v1H2v-1zm2 0h1v1H4v-1zm-2 2h1v1H2v-1zm2 0h1v1H4v-1zm4-4h1v1H8V9zm2 0h1v1h-1V9zm-2 2h1v1H8v-1zm2 0h1v1h-1v-1zm2-2h1v1h-1V9zm0 2h1v1h-1v-1zM8 7h1v1H8V7zm2 0h1v1h-1V7zm2 0h1v1h-1V7zM8 5h1v1H8V5zm2 0h1v1h-1V5zm2 0h1v1h-1V5zm0-2h1v1h-1V3z" />
                    </svg>bloc</a></li>
                <li><a class="dropdown-item" href="#">vehicules</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
      <form method="GET" action="">
      <input type="text" placeholder="search" name="search">
      </form>
      <a href="deconection.php" style="color:blue;">deconectez</a>&nbsp;&nbsp;&nbsp;
      <div class="pull-right">
        <img src="ugl.jpg" width="120px">
        
      </div>
      
    </nav>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Formulaire d'Ajout des Materiaux</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">

            <form method="POST" action="">



              <label class="label-control" for="nom">nom</label>
              <input class="form-control" type="" placeholder=" entrez le nom du materiel.." name="nom" id="nom" required>


              <label class="label-control" for="marque">marque du materiel</label>
              <input class="form-control" type="" placeholder=" entrez marque du materiel .." name="marque" id="marque" required>


              <label class="label-control" for="numserie">numero serie</label>
              <input class="form-control" type="" placeholder=" entrez le numero  serie de votre materiel.." name="num_serie" id="numesrie" required>


              <label class="label-control" for="datefabrication">date de fabrication</label>
              <input class="form-control" type="" placeholder="  entrez  la date de fabrication...." name="date_de_fabrication" id="datefabrication" required>


              <label class="label-control" for="capacite">capacité </label>
              <input class="form-control" type="" placeholder=" entrez capacité du materiel.." name="capacite" id="capacite" required>

              <label class="label-control" for="etat">état du materiel</label>
              <input class="form-control" type="" placeholder="  dire l'état de votre materiel...." name="etat" id="etat" required><br>
              <label class="label-control" for="categorie">categorie</label>
              <select class="form-group" name="categorie">
                <?php foreach ($categories as $category) : ?>

                  <option value="<?= $category['id_cat'] ?>"> <?= $category['nom_cat'] ?></option>
                <?php endforeach ?>
              </select>
              <div class="modal-footer">
                <button type="submit" name="save" id="btn" class="btn btn-primary">enregistrez</button>
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>

              </div>
          </div>

          </form>
        </div>
      </div>
    </div>
                      <?php
                      $req = $bdd->prepare("SELECT  ma.id_mat,ma.nom,ma.etat_mat, ma.marque,ma.num_serie,ma.date_de_fabrication,ma.capacite,
                      ca.nom_cat,s.nom_salle,blo.num_bloc FROM materielsalle mt INNER JOIN salles s on s.id_salle=mt.id_salle 
                      INNER JOIN materiel ma on ma.id_mat=mt.id_mat  
                      INNER JOIN categories ca on ca.id_cat=ma.id_cat INNER JOIN blocs blo on blo.id_bloc=s.id_bloc  WHERE nom like '%$result%' ");
                      $req->execute([]);
                      $materiels = $req->fetchAll();
                      ?>
    
    
      <div class="card">
        <div class=" bg-primary card-header">
          
  <!-- Button trigger modal -->
  <?php if($_SESSION['rolees']=='admi'){?>
      <button type="button" id="bnn"  style="color:blue; margin-left:93%" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal">
        ajoutez
      </button>
      <?php }?>
        </div>
      <div class="card-body">
    <table class=" table table-bordered mt-7" id="table">
      <tr>
        <th >nom</th>
        <th >marque</th>
        <th >numero_serie</th>
        <th >date_fabrication</th>
        <th >capacite</th>
        <th >categorie</th>
        <th >salles</th>
        <th >num_bloque</th>
        <th >etat</th>
        <th  colspan="2">action</th>
      </tr>
      <?php foreach ($materiels as $materiel) : ?>
        <tr>

          <td><?= $materiel['nom'] ?></td>
          <td><?= $materiel['marque'] ?></td>
          <td><?= $materiel['num_serie'] ?></td>
          <td><?= $materiel['date_de_fabrication'] ?></td>
          <td><?= $materiel['capacite'] ?></td>
          <td><?= $materiel['nom_cat'] ?></td>
          <td><?= $materiel['num_bloc'] ?></td>
          <td><?= $materiel['nom_salle'] ?></td>
          <td><?= $materiel['etat_mat'] ?></td>

          <td>
          <?php if($_SESSION['rolees']=='admi'){?>
            <a  href="modifierform/modifiermateriel.php?edit=<?= $materiel['id_mat']?>" class=" btn btn-success"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"  class="bi bi-pen editmat" viewBox="0 0 16 16" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z" />
              </svg></a>
          </td>
          <td>
            <a href="materiaux.php?delete=<?= $materiel['id_mat'] ?>" onclik="alert('voulez-vous supprimer')" class=" btn btn-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
              </svg></a>
              <?php }?>
          </td>
        </tr>
      <?php endforeach ?>
    </table>
  </div>
  </div>
  </div>

      

  </div>
</body>

<style>
 
  .card{
    margin-top:15%;
  }
  
  nav a:hover{  transition-delay: 0.005s;
         transition-duration: 0.5s;
                background-color: orange;
                            border-radius: 20px;
                        transition-property: background;
                       transition:0.5s;
                   }
  body {
    font-size: 16px;
    background:#EFF0FF;
    font-family:cursive;
  }

  .container a {
    text-decoration: none;
    font-size: 20px;
    color: white;

  }

  
  .content input {
    margin: 10px;
    width: 400px;
    height: 20px;
    background-color: #ddd;
    border: 1px solid whitesmoke;
    ;

  }


  .content input:hover {
    border: 1px solid orange;
    transition: 0.005s;
    border-radius: 10px;
  }

  .content input:focus {
    background: orange;
  }

  .content #btn {
    width: 170px;
    height: 30px;
    cursor: pointer;
    color: white;
  }


  .content hr {
    width: 620px;
    margin-top: 50px;

  }
  .btn-table {
    margin-top: 130px;
  }

  .content e {
    margin-left: 200px;
    margin-top: -40px;


  }

  #table {
    width: 100%;
    margin-top: 10px;
  }

  #btnn {
    margin-left: 100px;
  }
</style>
<script>
  $(document).on('click', '.editmat', function() {
    alert("ok");
    var idinst = $(this).attr("valeur");
    //alert(idinst);
    var btn_action = 'modal-body';


    $.ajax({
      url: "../include/updateEmploye.php",
      method: "POST",
      data: {
        idinst: idinst,
        btn_action: btn_action
      },
      success: function(data) {
        //$("#updateModal").modal({backdrop: "static"});                
        $('.modal-body').html(data);


        $('.modal-title').html("GESTION DU PERSONNEL:" + idinst);
        $('.modal-header').css("background-color", "#00a68f");
        $('.modal-header').css("color", "white");
        // $('.modal-footer').css("background-color","#ccc");
      }
    })
  });
</script>

</html>