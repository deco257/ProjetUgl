<?php
require("bdd.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="boutsrap/jquery.min.js"></script>
       <script src="boutsrap/jquery.dataTables.min.js"></script>
       <script src="boutsrap/dataTables.bootstrap.min.js"></script>
</head>
<body>
<div class="derick">
    <input type="text" placeholder="recherchere"  name="myInput" id="myInput" >
    
  </div>
<?php
    //la selection des utilisateurs dans la base de de donne
    $requser=$bdd->prepare("SELECT  id_emp,matricule,nom,prenom,tel,email,fonction,nom_grade,nom_titre FROM employees,grade,titre
    WHERE grade.id_grade= employees.id_grade  AND titre.id_titre= employees.id_titre");
    $requser->execute([]);
    $dec=$requser->fetchAll();

    ?>
    <table class="table table-borded " id="tble" >
       <thead>
    
    
    <tr>
        <th >matricule</th>
        <th >nom</th>
        <th c>prenom</th>
        <th >telephone</th>
        <th >email</th>
        <th >fonction</th>
        <th >grade</th>
        <th >titre</th>
        <th  colspan="3">action</th>
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
    
    <td><a href="employee.php?edit=<?=$deco['id_emp']?>" class=" btn btn-success"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">
  <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z"/>
</svg></a></td>
    <td><a href="employee.php?delete=<?=$deco['id_emp']?>" class=" btn btn-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
  <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
  <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
</svg></a></td>

<tr>
</tbody>
    <?php endforeach?>
    
    
     </table>
     <footer>
    
    <p>Université des Grands Lacs :site officiel <a href="www.ugli.bi">www.ugli.bi</a><br>
Bujumbura-Burundi-email: <font color="bleu">ugl@gmail.com</font>
</p>

     </footer>
     <script>
       $(document).ready(function(){
         $("#myInput").on("keyup",function(){
var value= $(this).val().toLowerCase();
              $("#table tr").filter(function(){
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
              });
         });
       });
     </script>
</body>
</html>