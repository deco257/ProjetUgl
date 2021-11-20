<?php
session_start();
require('bdd.php');


if(isset($_POST['send'])){
  $mail=htmlentities($_POST['mail']);
$motdepasse=sha1($_POST['mdp']);

    //ici on veut recuperer les informations de l'utilisateur ,
    //une fois les trouvevez dans bdd il va se connectez
  $req= $bdd->prepare("SELECT * FROM user WHERE username=? AND motdepasse=?");
  $req->execute(array($_POST['mail'],$_POST['mdp']));
  $userexist= $req->rowCount();
  
  if($userexist==1){
      $userinfo= $req->fetch();
      $_SESSION['id_user']= $userinfo['id_user'];
      $_SESSION['username']= $userinfo['username'];
      $_SESSION['mdp']= $userinfo['mdp'];
      $_SESSION['rolees']= $userinfo['rolees'];
    
      header("location:table.php?id=".$_SESSION['id_user']);
      
  }
}  

//insertion des info dans la bdd

if(isset($_POST['save'])){

$nom=htmlspecialchars($_POST['nom']);
$prenom=htmlspecialchars($_POST['prenom']);
$username=htmlspecialchars($_POST['username']);
$motdepasse=htmlspecialchars($_POST['mdp']);
$etat=htmlspecialchars($_POST['etat']);
$role=htmlspecialchars($_POST['role']);
 
$requser=$bdd->prepare("INSERT INTO user(nom,prenom,username,motdepasse,etat,rolees) VALUES(?,?,?,?,?,?)");
$requser->execute(array($nom,$prenom,$username,$motdepasse,$etat,$role));




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
    <script src="bootstrap-5.1.0-dist/bootstrap-5.1.0-dist/js/bootstrap.js"></script>
    <title>Authentification</title>
    <link rel="icon" href="ugl.jpg" type="image/jpg">
    <style>
  
 
    body{
        font-family:cursive;
        margin: 0;
        padding: 0;
        top: 0;
     background:#ddd;
    }
.card{
    width: 50%;
    margin-top: -70px;
    margin-left: 26%;
    background: transparent;

    opacity: 0.9;
    color: white;

}

   footer{
     margin-left: 100px;
     margin-top:250px;
     text-align: center;
     font-size: 20px;
   }
   label{
     margin-right: 540px;
   }
header {
  position: relative;
  background-color: black;
  height: 95vh;
  min-height: 25rem;
  width: 100%;
  overflow: hidden;
}


header video {
  position: absolute;
  top: 50%;
  left: 50%;
  min-width: 100%;
  min-height: 100%;
  width: auto;
  height: auto;
  z-index: 0;
  -ms-transform: translateX(-50%) translateY(-50%);
  -moz-transform: translateX(-50%) translateY(-50%);
  -webkit-transform: translateX(-50%) translateY(-50%);
  transform: translateX(-50%) translateY(-50%);
}
.card input{
  border: none;
  border-bottom: 1px solid yellow;
  background:transparent;
  outline: none;
  

}
.card input:focus{
  border: none;
  outline:none;
  background:transparent;
  color:white;
  

}

header .container {
  position: relative;
  z-index: 2;
}

header .overlay {
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  width: 100%;
  background-color: black;
  opacity: 0.5;
  z-index: 1;
}

/* Media Query for devices withi coarse pointers and no hover functionality */

/* This will use a fallback image instead of a video for devices that commonly do not support the HTML5 video element */

@media (pointer: coarse) and (hover: none) {
  header {
    background: url('video') black no-repeat center center scroll;
  }

  header video {
    display: none;
  }
}

@media screen and (min-width:700px)  {

}
</style>
<script>

</script>
</head>
<body>

<header>

  <!-- This div is  intentionally blank. It creates the transparent black overlay over the video which you can modify in the CSS -->
  <div class="overlay"></div>

  <!-- The HTML5 video element that will create the background video on the header -->
  <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
    <source src="video/Mt_Baker.mp4" type="video/mp4">
  </video>

  <!-- The header content -->
  <div class="container h-100">
    <div class="d-flex h-100 text-center align-items-center">
      <div class="w-100 text-white">
        <p class="lead mb-0">
        <div class="container">
        <div class="card col-sm-12  row-14">
    
    <div class="card-body">
    
                     <!--icon personal-->
            <h1>login</h1>

                                      <form method="POST" action="">
                                      <div class="mb-3">
                                        <label for="username" class="form-label">username</label>
                                        <input type="" class="form-control" id="username" autocomplete ="off" maxlenght="255" title="ne depassez pas 255 caracteres" aria-describedby="usernamelHelp" name="mail" required>
                                        <div id="usernameHelp" class="form-text">We'll never share your email with anyone else.</div>
                                      </div>
                                      <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Password</label>
                                        <input type="password" class="form-control" id="exampleInputPassword1"  maxlenght="255" title="ne depassez pas 255 caracteres" autocomplete ="off" name="mdp" required>
                                      </div>
                                      
                                      
                                      <button type="submit" class="btn btn-primary" name="send">Login</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <button type="button" class=" btn btn-danger" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                      creez un compte?
                                    </button>
                                        </form>
                                    </div>
                                        </div>
     
  <!-- Modal -->
  
</header>
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">creez votre compte</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <!--icon key for password-->
         
      <form method="POST" action="">
          
              <label  class="label-control">nom</label>
              <input  class="form-control"type="" placeholder="votre nom.." name="nom" required>
          
              <label class="label-control">prenom</label>
              <input class="form-control" type="" placeholder="votre prenom.." name="prenom" required>
          
      
          <label class="label-control">username</label>
          <input class="form-control"  type="" placeholder="votre username.." name="username" required>
          
          <label class="label-control">password</label>
  
          <input  class="form-control"type="password" placeholder="votre mot de passe.." name="mdp" required>
          <label class="label-control">etat</label>
          <input  class="form-control"type="" placeholder="votre etat.." name="etat" required>
          
      
      <label class="label-control">role</label>
          <input  class="form-control"type="" placeholder="votre role.." name="role" required>
          
  
        </div>
        <div class="modal-footer">
        <button type="submit"  class="btn btn-primary" name=" save">inscription</button>
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">fermez</button>
          
        </div>
      </div>
    </div>
    </form>
    </div>
        
        </p>
      </div>
    </div>
  </div>
<!-- Page section example for content below the video header -->
<section class="my-5">
  <div class="container">
    <div class="row">
      <div class="col-md-8 mx-auto">

      
      </div>
    </div>
  </div>
</section>

 

  </div>
  <div class="footer">
    <div class="nav">
    
  </div>

</body>

</html>