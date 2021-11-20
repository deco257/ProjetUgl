<?php
require('bdd.php');
session_start();
if(isset($_POST['save'])){
    $matricule=htmlentities($_POST['matricule']);
    $nom=htmlentities($_POST['nom']);
    $prenom=htmlentities($_POST['prenom']);
    $telephone=htmlentities($_POST['tel']);
    $mail=htmlentities($_POST['email']);
    $fonction=htmlentities($_POST['fonction']);



 $req=$bdd->prepare("INSERT INTO employees(matricule,nom,prenom,tel,email,fonction,id_grade,id_titre) VALUES(?,?,?,?,?,?,?,?)");
 $req->execute(array($_POST['matricule'],$_POST['nom'],$_POST['prenom'],$_POST['tel'],$_POST['email'],$_POST['fonction'],$_POST['grade'],$_POST['titre']));
/*
$req="INSERT INTO employees(matricule,nom,prenom,tel,email,fonction) VALUES(?,?,?,?,?,?)";
$ps=$bdd->prepare($req);
$param=array($matricule,$nom,$prenom,$telephone,$mail,$fonction);
$ps->execute($param);*/

}
$query=$bdd->prepare("SELECT * FROM grade");
$query->execute([]);
$grades=$query->fetchAll();


$query=$bdd->prepare("SELECT * FROM titre");
$query->execute([]);
$titres=$query->fetchAll();


//la suppresion des employees dans la base de donnnees
if(isset($_GET['delete'])){
  $supprimez_id=htmlspecialchars($_GET['delete']);
    $req=$bdd->prepare("DELETE  FROM employees WHERE id_emp=$supprimez_id");
     $req->execute([$supprimez_id]);    
}
//requete de recuperation des info des employees
if(isset($_GET['edit'])){
  $id=$_GET['edit'];
  $req=$bdd->prepare("SELECT * FROM employees WHERE id_emp=?");
  $req->execute([$id]);
  $trve=$req->fetchAll();
  
    $matricule=$trve['matricule'];
  $nom=$trve['nom'];
  $prenom=$trve['prenom'];
  $telephone=$trve['tel'];
  $mail=$trve['email'];
  $fonction=$trve['fonction'];

}

//boutton recherchez
$result=isset($_GET['nom'])? $_GET['nom']: "";

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
       
    <title>employées</title>
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
          <a class="nav-link " href="vehicules.php">vehicules </a>
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
  <div class="derick">
  <form method="GET" action="">
    <input type="text" placeholder="recherchere"  style="margin-left:-60%;margin-top:10%" name="nom" id="search"  required>
   <!--  
    <input type="submit"  name="search" value="rechercher" style="margin-left:50%;margin-top:-20%" class="btn btn-danger">
    -->
    </form>
  </div>
  <div class="pull-right">
    <a href="deconection.php">deconectez</a>&nbsp;
    
  </div
 
<div class="pull-right">
    <img src="ugl.jpg" width="70px">
    
  </div>

</nav>
   
    

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class=" bg-warning  modal-header">
        <h5 >formulaire des employés</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
    


      <form method="POST" action="">
        
                                              
                                                
                                <label  class ="label-control"for="matricule">matricule</label>
                                                          
 <input class="form-control"  type="" placeholder="entrez le matricule.."  autocomplete="off" name="matricule"  required>
                                                              
                                                                                    
                                        <label class ="label-control" for="nom">nom</label>
                                                          
                                  <input  class="form-control" type="" placeholder="entrez le nom.." autocomplete="off" name="nom"  required >
                                                          
                                                          
                                              <label  class ="label-control "for="prenom">prenom</label>
                                              
                            <input  class="form-control" type="" placeholder="entrez le prenom.."  autocomplete="off" name="prenom" required >
                                              
                                              <label  class ="label-control "for="tel">telephone</label>
                                              
                          <input  class="form-control" type="tel" placeholder="entrez votre numero de telephone.."  autocomplete="off" name="tel" required >
                                      
                                      
            <label  class ="label-control" for="email">email</label>
                                      
                <input  class="form-control" type="email" placeholder="entrez votre mail.."  autocomplete="off" name="email" required >
                                          
                <label  class ="label-control"for="fonction">fonction</label>
                                          
                        <input  class="form-control" type="" placeholder="entrez votre fonction.."  autocomplete="off"  name="fonction" required >
                                          
                            
                            <label  class ="label-control"for="grade">grade</label>
     
          <select  class="form-select" name="grade" required>
              <?php foreach($grades as $grade):?>
              <option value="<?=$grade['id_grade']?>"><?=$grade['nom_grade']?></option>
              <?php endforeach?>
          </select>
          <label  class ="label-control"for="titre">titre</label>
          
          <select class="form-select" name="titre">
              <?php  foreach($titres as $titre):?>
              <option value="<?=$titre['id_titre']?>"><?=$titre['nom_titre']?></option>
              <?php endforeach?>
              
          </select>
            </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">fermez</button>
                <button  type="submit" name="save" type="button" class="btn btn-primary">enregistez</button>
              </div>
      </form>
    </div>
  </div>
</div>

    <?php
    //la selection des utilisateurs dans la base de de donne
    $requser=$bdd->prepare("SELECT  id_emp,matricule,nom,prenom,tel,email,fonction,nom_grade,nom_titre FROM employees INNER JOIN grade
    on grade.id_grade= employees.id_grade  INNER JOIN  titre on titre.id_titre= employees.id_titre  WHERE  matricule like '%$result%' ");
    $requser->execute([]);
    $dec=$requser->fetchAll();

    ?>

    <div class="container">
    <div class="card">
      <div class=" bg-primary card-header">
<!-- Button trigger modal -->
<?php if($_SESSION['rolees']=='admi'){?>
<button type="button"  style="margin-left:92%" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal">
  ajoutez
</button>
<?php }?>
<!--  -->

      </div>
      <div class="card-body">
    <table class="table table-borded " id="table" >
       <thead>
    <tr>
        <th >matricule</th>
        <th >nom</th>
        <th >prenom</th>
        <th>telephone</th>
        <th>email</th>
        <th>fonction</th>
        <th>grade</th>
        <th>titre</th>
        <th colspan="3">action</th>
        </tr>
        </thead>
    <?php foreach($dec as $deco):?>
      <tbody>
<tr>
    <td><?= $deco['matricule']?></td>
    <td><?= $deco['nom']?></td>
    <td><?= $deco['prenom']?></td>
    <td><?= $deco['tel']?></td>
    <td><?= $deco['email']?></td>
    <td><?= $deco['fonction']?></td>
    <td><?= $deco['nom_grade']?></td>
    <td><?= $deco['nom_titre']?></td>
    <td>
    <td>
    <?php if($_SESSION['rolees']=='admi'){?>
    <a href="modifierform/modifieremploye.php?edit=<?=$deco['id_emp']?>"  class=" btn btn-success"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">
  <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z"/>
</svg></a></td>
    <td><a href="employee.php?delete=<?=$deco['id_emp']?>" class=" btn btn-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
  <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
  <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
</svg></a>
<?php }?>
</td>

<tr>
</tbody>
    <?php endforeach?>
     </table>
     </div>
     </div>
     </div>
<script src="jquery-3.6.0.js"></script>

     <script>
      $(document).ready(function(){
          $('#search').keyup(function(){
              search_table($(this).val());
          });
               function  search_table(value){
                  $('#table tr').each(function(){
                    var  found= false;
                    $(this).each(function(){
                            if($(this).text().toLowerCase().indexOf(value.toLowerCase()) >= 0){
                             var  found= true;
                            } });
                            if(found= true){
                              $(this).show();
                            }else{
                              $(this).hide();
                            }
                  });
                }
      });
     </script>
</body>

<style>
.card{
  width:90%;
  margin-top:15%;
}
 
    body{
        font-family:cursive;
        background: #D9EFF5;
    }
    footer{
        margin-left: 200px;
    }
    nav a:hover{  transition-delay: 0.005s;
         transition-duration: 0.5s;
                background-color: orange;
                            border-radius: 20px;
                        transition-property: background;
                       transition:0.5s;
                   }
.containeur {
    margin-left: 650px;
    margin-top: -350px;
}

*{
    margin: 0;
    padding: 0;
}



.content{
        opacity: 0;
        visibility: hidden;
        margin-left: 600px;
        margin-top: -200px;
        height: 500px;
        position: absolute;
        box-shadow: -2px -2px 14px #ddd,2px 2px 25px #f1f1f1;
        text-align: center;
        background: white;
    }
    .content input{
        width: 400px;
        height: 30px;
        margin: 10px;
        background: #ddd;
        border: 1px solid white;
    }
    .content input:focus{
        background: orange;
    }
    .button{
        margin-left:50px;
        margin-top: 30px;
        width:100px;
        height: 30px;
        border: 2px solid green;
        border-radius: 20px;
    }
    

@media  screen and (max-width:700px) {
  table{
    width:500px;
    background: orange;
    font-size: 12px;
  }
  footer p{
    font-size: 12px;
  }
}
</style>
</html>