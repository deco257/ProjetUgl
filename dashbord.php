<?php
require('session/session.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 ,minimum-scale=0.25">
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/bootstrap-5.0.2-dist/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/bootstrap-5.0.2-dist/js/bootstrap.js">
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js">
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet">
    <script src="bootstrap-5.1.0-dist/bootstrap-5.1.0-dist/js/bootstrap.js"></script>
    <title>Tableau de bord</title>
                                                            <script src="jquery-3.6.0.js"></script>
                                                            <script>
                                                              $(document).ready(function(){
                                                                          $('.param').hide();
                                                                          $('.parag').hide();
                                                                          $('.paragr').hide();
                                                                          $('.paragra').hide();


                                                                          //affichage des du premier box
                                                                $('.imag').mouseenter(function(){
                                                                  $('.param').show().css("transition","0.005s","background","#008b8","width","400px");
                                                                $('.imag').hide();
                                              
                                                                })
                                                                //cette fonction dit que si la souris est declenche on va cacher le paragraphe puis affiche l'image
                                                                $('.imag').mouseleave(function(){
                                                                    $('.param').hide();
                                                                    $('.imag').show();
                                                                  })
                                                                  //dexieume image
                                                                  $('.imge1').mouseenter(function(){
                                                                  $('.parag').show().css("transition","0.005s","background","#008b8","width","400px");
                                                                $('.imge1').hide();
                                              
                                                                })
                                                                $('.imge1').mouseleave(function(){
                                                                    $('.parag').hide();
                                                                    $('.imge1').show();
                                                                  })
                                                                  
                                                                  $('.imge2').mouseenter(function(){
                                                                  $('.paragr').show().css("transition","0.005s","background","#008b8","width","400px");
                                                                $('.imge2').hide();
                                              
                                                                })
                                                                $('.imge2').mouseleave(function(){
                                                                    $('.paragr').hide();
                                                                    $('.imge2').show();
                                                                  })


                                                                  $('.imge3').mouseenter(function(){
                                                                  $('.paragra').show().css("transition","0.005s","background","#008b8","width","400px");
                                                                $('.imge3').hide();
                                              
                                                                })
                                                                $('.imge3').mouseleave(function(){
                                                                    $('.paragra').hide();
                                                                    $('.imge3').show();
                                                                  })

                                                              })
                                                            </script>
    <style>
    body{
      font-family:cursive;
      width: 100%;
    }
      .imag{
        height: 400px;
      }
      .imge1{
        
        height: 400px;
      }
      .imge2{
        
        height: 400px;
      }
      .imge3{
        
        height: 400px;
      }
     
      .box1 .param{
        margin-top: 1%;
        height: 400px;
        background: linear-gradient(orange, orange);;;
        color: white;
        text-align: center;
        font-size: 20px;
      }
  .idv2{
    margin-right: 5%;
  }
  .idv3{
    margin-right: 20%;
  }
  .nav li{
    list-style: none;
    font-size:20px;
    color: white;
  }
  .nav{
  
  justify-content: space-between;
  }
                                                     
  .card1{
    display: flex;
    justify-content: space-between;
  }
  .img1{
    margin-left: 13%;
color: white;
    padding: 2%;
    font-size: 20px;
  }
  .img2{
    margin-right: 3%;
    padding: 2%;
    color: white;
    font-size: 20px;
  }
  .img3{
    margin-right: 6%;
    padding: 2%;
color: white;
font-size: 20px;
  }
                .card2{
                  background: #E1E6FA;
                  width:100%;
                height: 600px;
               
                
                  
                }
                .card3{
                  background:   linear-gradient(to  bottom left, cyan 50%, orange 50%);;
                  width:100%;
                height: 80%;
                
                  
                }.card3 li{
                  color: black;
                }
                                .card{
                                  font-family:cursive;
        background: #D9EFF5;
                                  width:100%;
                                height: 400px;
                                }
                                                                  
                                          .card{                                    
                                     margin-top: 7%;
                                         /* background: #008b8b;*/
                                         background: linear-gradient(to  bottom left, cyan 50%, orange 50%);;
                                               width:100%;
                                                              height: 400px;
                                                                             }
                                                                                      .card-body .pp{
                                                                                margin-left: 30%;
                                                                                      font-size: 2rem;
                                                                              
                                                                                      color: white


                                                                                      }.parag{
                                                                                        text-align: center;
                                                                                        height: 400px;
                                                                                      font-size: 20px;
                                                                                      background:linear-gradient(orange, orange);;;
                                                                                      color: white;
                                                                                      }
                                                                                      .paragr{
                                                                                        text-align: center;
                                                                                        height: 400px;
                                                                                      font-size: 20px;
                                                                                      background: linear-gradient(orange, orange);;;
                                                                                      color: white;
                                                                                      }
                                                                                      .paragra{
                                                                                        text-align: center;
                                                                                        height: 400px;
                                                                                      font-size: 20px;
                                                                                      background:linear-gradient(orange, orange);;;
                                                                                      color: white;
                                                                                      }
                                                                                      
                                                                                      nav a:hover{
                                                                                          transition-delay: 0.005s;
                                                                                          transition-duration: 0.5s;
                                                                                            background-color: orange;
                                                                                            border-radius: 20px;
                                                                                            transition-property: background;
                                                                                            transition:0.5s;
                                                                                      }.box{
                                                                                        display: flex;
                                                                                      
                                                                                      
                                                                                      }
                                                                                      .box1{
                                                                                        width: 20%;
                                                                                        height: 400px;
                                                                                        box-shadow: 12px 0 21px 0 #008b8b;
                                                                                        margin: 20px;
                                                                                        box-shadow: 0 0 10px rgba(0,0,0,.2), 0 10px 80px rgba(0,0,0,0);
                                                                                        border-radius:20px;

                                                                                      }
                                                                                     /* .box1:hover{
                                                                                        transform: scale(1.05);
                                                                                        transition: 0.5s;
                                                                                        overflow: hidden;
                                                                                      }
                                     /*ici on veut mesurer la taille de l'ecran pour tous appareils que ca soit les android pc,tablette */
                                                                                      @media screen and (max-width:700px ){
                                                                                        .card{
                                                                                          background:linear-gradient(to top ,blue,red,red);;
                                                                                        }
                                                                              .card dec{
                                                                                font-size: 10px;
                                                                                font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, 
                                                                                Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
                                                                              }
                                                                              .card  .pp{
                                                                                font-size: 12px;
                                                                                margin-top: 25%;
                                                                                color: white;
                                                                                width: 200px;
                                                                              }
                                                                              .box .box1{
                                                                                          width: 150px;
                                                                                          height: 100px;
                                                                                        }
                                                                                        .box1:hover{
                                                                                          transform: scale(1.05);
                                                                                          transition: 1s;
                                                                                          overflow: hidden;
                                                                                        }
                                                                                        .box img{
                                                                                          width: 100px;
                                                                                          height: 100px;
                                                                                         
                                                                                        }.box1 p{
                                                                                          font-size: 8px;
                                                                                        }
                                                                                        .box .param{
                                                                                          font-size: 8px;
                                                                                          text-align: center;
                                                                                        }
                                                                                        .card3{
                                                                                        
                                                                                          width: 100%;
                                                                                          height: 300px;
                                                                                          background:linear-gradient(to top ,red,red,blue)
                                                                                      
                                                                                        }
                                                                                        .card3 li{
                                                                                          font-size: 12px;
                                                                                          color: white;
                                                                                          text-align:center;
                                                                                        }
                                                                                      
                                                                                      }
                                                                                      
</style>
</head>
<body >
  <!-- ce nav est le bar de navigation de notre application -->
                                                                     <div class="container">
                                           <nav class=" navigation navbar navbar-expand-lg navbar-light bg-light fixed-top">
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
                                                                                                                                                                                                            
                                                 <li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle " href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                                           infrastructure
                                                                                           </a>
                                                      <ul class="dropdown-menu bg-info" aria-labelledby="navbarDropdownMenuLink">
                                        <li><a class="dropdown-item" href="infrastructure.php">infrastructure</a></li>
                          <li><a class="dropdown-item" href="campus.php"><svg xmlns="http://www.w3.org/2000/svg" width="36" height="16" fill="currentColor" class="bi bi-bank2" viewBox="0 0 16 16">
                                       <path d="M8.277.084a.5.5 0 0 0-.554 0l-7.5 5A.5.5 0 0 0 .5 6h1.875v7H1.5a.5.5 0 0 0 0 1h13a.5.5 0 1 0 0-1h-.875V6H15.5a.5.5 0 0 0 .277-.916l-7.5-5zM12.375 6v7h-1.25V6h1.25zm-2.5 0v7h-1.25V6h1.25zm-2.5 0v7h-1.25V6h1.25zm-2.5 0v7h-1.25V6h1.25zM8 4a1 1 0 1 1 0-2 1 1 0 0 1 0 2zM.5 15a.5.5 0 0 0 0 1h15a.5.5 0 1 0 0-1H.5z"/>
                                                                    </svg>campus</a></li>
                                              <li><a class="dropdown-item" href="salles.php">
                          <svg xmlns="http://www.w3.org/2000/svg" width="36" height="16" fill="currentColor" class="bi bi-building" viewBox="0 0 16 16">
                                                                                                                          <path fill-rule="evenodd" d="M14.763.075A.5.5 0 0 1 15 .5v15a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5V14h-1v1.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V10a.5.5 0 0 1 .342-.474L6 7.64V4.5a.5.5 0 0 1 .276-.447l8-4a.5.5 0 0 1 .487.022zM6 8.694 1 10.36V15h5V8.694zM7 15h2v-1.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5V15h2V1.309l-7 3.5V15z"/>
                                                                                                                          <path d="M2 11h1v1H2v-1zm2 0h1v1H4v-1zm-2 2h1v1H2v-1zm2 0h1v1H4v-1zm4-4h1v1H8V9zm2 0h1v1h-1V9zm-2 2h1v1H8v-1zm2 0h1v1h-1v-1zm2-2h1v1h-1V9zm0 2h1v1h-1v-1zM8 7h1v1H8V7zm2 0h1v1h-1V7zm2 0h1v1h-1V7zM8 5h1v1H8V5zm2 0h1v1h-1V5zm2 0h1v1h-1V5zm0-2h1v1h-1V3z"/>
                                                                                                                                    </svg>salles</a></li>
                                                                                                                                    <li><a class="dropdown-item" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="36" height="16" fill="currentColor" class="bi bi-building" viewBox="0 0 16 16">
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
                                                        <div class="pull-right">
                                                        <i class="bi bi-download"><a href="#"></a></i>
        <svg xmlns="http://www.w3.org/2000/svg" width="76" height="46" fill="currentColor" class=" btn-success  bi bi-download" viewBox="0 0 16 16">
            <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
            <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>

        </svg><br>download
                                                        </div>
                                                            </nav>
                                                        </div>
<!-- ceci est l;a premiere partie que contient les services de l''ugl -->
                                                            <div class="card">
                                                        <div class="card-body">
                                                          <p class=" pp card-text  ">Universite des Grands lacs(U.G.L)</p>
                                                          <div class="card1">
                                                            <div class="img1">
                                                            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 245.827 245.827" style="enable-background:new 0 0 245.827 245.827;"   xml:space="preserve">
<g>
	<g>
	
			<path style="fill:#010002;" d="M223.336,148.384l-0.137-23.527l22.628-12.662L122.576,47.195L0,113.495l49.144,28.216
				l0.098,16.766l0.01,1.339l0.449-0.215c-0.518,0.703-0.85,1.426-0.84,2.149c0.039,8.246,33.326,14.772,74.41,14.548
				c41.064-0.215,74.302-7.122,74.273-15.349c0-0.723-0.381-1.426-0.889-2.149l0.449,0.215v-1.339l-0.088-16.834l21.309-13.258
				l0.117,20.83c-2.345,1.006-3.976,3.312-3.957,6.009c0.02,3.537,2.892,6.399,6.458,6.37c3.586-0.02,6.429-2.912,6.409-6.439
				C227.332,151.657,225.691,149.371,223.336,148.384z M123.241,170.621c-36.452,0.205-66.017-3.801-66.046-8.91
				c-0.029-5.11,29.496-9.399,65.949-9.585c36.462-0.205,66.017,3.781,66.037,8.881
				C189.209,166.098,159.703,170.426,123.241,170.621z M195.335,127.183c-4.934-5.188-22.618-18.886-72.426-18.602
				c-49.877,0.264-67.336,14.128-72.211,19.394l-0.029-4.963c0,0,14.147-21.524,72.202-21.827
				c58.025-0.313,72.436,21.045,72.436,21.045L195.335,127.183z M215.755,162.199l-2.511,36.433
				c7.767-12.203,14.255-7.66,14.255-7.66l-0.156-28.832C218.998,165.414,215.755,162.199,215.755,162.199z"/>
</svg>

              <dec>Super qualification</dec>

                                                            </div>
                                                                      <div class="img2">
                                                                      <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 512.438 512.438" style="enable-background:new 0 0 512.438 512.438;" xml:space="preserve" >
<g>
	<g>
		<path style="fill:#FF4F19;" d="M424,116.219h-40c-4.418,0-8,3.582-8,8v216h56v-216C432,119.801,428.418,116.219,424,116.219z"/>
	</g>
	<g>
		<path style="fill:#E3001E;" d="M404,116.219h-20c-4.418,0-8,3.582-8,8v216h28V116.219z"/>
	</g>
	<g>
		<path style="fill:#E3001E;" d="M168.219,84.219H120c-4.418,0-8,3.582-8,8v248h64.219v-248
			C176.219,87.801,172.637,84.219,168.219,84.219z"/>
	</g>
	<g>
		<path style="fill:#FF4F19;" d="M168.219,84.219H144v256h32.219v-248C176.219,87.801,172.637,84.219,168.219,84.219z"/>
	</g>
	<g>
		<g>
			<path style="fill:#868491;" d="M80,452.219c-2.977,0-5.781-1.668-7.156-4.422l-40-80c-1.977-3.953-0.375-8.758,3.578-10.734
				c3.945-1.969,8.758-0.375,10.734,3.578L72,410.332v-46.113c0-4.418,3.578-8,8-8s8,3.582,8,8v80c0,3.711-2.555,6.934-6.164,7.785
				C81.227,452.149,80.609,452.219,80,452.219z"/>
		</g>
	</g>
	<g>
		<g>
			<path style="fill:#868491;" d="M432.219,452.219c-0.609,0-1.227-0.07-1.836-0.215c-3.609-0.852-6.164-4.074-6.164-7.785v-80
				c0-4.418,3.578-8,8-8s8,3.582,8,8v46.113l24.844-49.691c1.984-3.953,6.781-5.547,10.734-3.578
				c3.953,1.977,5.555,6.781,3.578,10.734l-40,80C438,450.551,435.195,452.219,432.219,452.219z"/>
		</g>
	</g>
	<g>
		<path style="fill:#5D647F;" d="M248,84.219h-16c-4.418,0-8,3.582-8,8v248h32v-248C256,87.801,252.418,84.219,248,84.219z"/>
	</g>
	<g>
		<path style="fill:#4BB9EC;" d="M368,84.219h-16c-4.418,0-8,3.582-8,8v248h32v-248C376,87.801,372.418,84.219,368,84.219z"/>
	</g>
	<g>
		<path style="fill:#FF9100;" d="M104,108.219H88c-4.418,0-8,3.582-8,8v223.125c0,0.483,0.392,0.875,0.875,0.875H112v-224
			C112,111.801,108.418,108.219,104,108.219z"/>
	</g>
	<g>
		<path style="fill:#00C37A;" d="M72,132.219H48c-4.418,0-8,3.582-8,8v200h40v-200C80,135.801,76.418,132.219,72,132.219z"/>
	</g>
	<g>
		<path style="fill:#5D647F;" d="M464,100.219h-24c-4.418,0-8,3.582-8,8v232h40v-232C472,103.801,468.418,100.219,464,100.219z"/>
	</g>
	<g>
		<path style="fill:#FF9100;" d="M336,60.219h-40c-4.418,0-8,3.582-8,8v272h56v-272C344,63.801,340.418,60.219,336,60.219z"/>
	</g>
	<g>
		<path style="fill:#00C37A;" d="M280,116.219h-16c-4.418,0-8,3.582-8,8v216h32v-216C288,119.801,284.418,116.219,280,116.219z"/>
	</g>
	<g>
		<path style="fill:#4BB9EC;" d="M216,100.219h-32c-4.418,0-8,3.582-8,8v232h48v-232C224,103.801,220.418,100.219,216,100.219z"/>
	</g>
	<g>
		<path style="fill:#E6BE8A;" d="M504.438,372.219H8c-4.418,0-8-3.582-8-8v-16c0-4.418,3.582-8,8-8h496.438c4.418,0,8,3.582,8,8v16
			C512.438,368.637,508.856,372.219,504.438,372.219z"/>
	</g>
	<g>
		<rect x="112" y="108.219" style="fill:#5D647F;" width="32" height="16"/>
	</g>
	<g>
		<rect x="144" y="108.219" style="fill:#868491;" width="32" height="16"/>
	</g>
	<g>
		<rect x="112" y="300.219" style="fill:#5D647F;" width="32" height="16"/>
	</g>
	<g>
		<rect x="144" y="300.219" style="fill:#868491;" width="32" height="16"/>
	</g>
	<g>
		<g>
			<rect x="272.219" y="140.219" style="fill:#00A077;" width="16" height="16"/>
		</g>
	</g>
	<g>
		<g>
			<rect x="272.219" y="292.219" style="fill:#00A077;" width="16" height="16"/>
		</g>
	</g>
	<g>
		<g>
			<rect x="376" y="140.219" style="fill:#FF9100;" width="28" height="16"/>
		</g>
	</g>
	<g>
		<g>
			<rect x="376" y="292.219" style="fill:#FF9100;" width="28" height="16"/>
		</g>
	</g>
	<g>
		<g>
			<rect x="404" y="140.219" style="fill:#FFCD00;" width="28" height="16"/>
		</g>
	</g>
	<g>
		<g>
			<rect x="404" y="292.219" style="fill:#FFCD00;" width="28" height="16"/>
		</g>
	</g>
	<g>
		<path style="fill:#009BCA;" d="M176,108.219v232h24v-240h-16C179.582,100.219,176,103.801,176,108.219z"/>
	</g>
	<g>
		<path style="fill:#FF4F19;" d="M80,340.219h16v-232h-8c-4.418,0-8,3.582-8,8V340.219z"/>
	</g>
	<g>
		<path style="fill:#00A077;" d="M40,340.219h20v-208H46.998c-3.865,0-6.998,3.133-6.998,6.998V340.219z"/>
	</g>
	<g>
		<path style="fill:#5C546A;" d="M224,340.219h16v-256h-8c-4.418,0-8,3.582-8,8V340.219z"/>
	</g>
	<g>
		<path style="fill:#00A077;" d="M256,340.219h16v-224h-8c-4.418,0-8,3.582-8,8V340.219z"/>
	</g>
	<g>
		<g>
			<rect x="256" y="140.219" style="fill:#5D647F;" width="16" height="16"/>
		</g>
	</g>
	<g>
		<g>
			<rect x="256" y="292.219" style="fill:#5D647F;" width="16" height="16"/>
		</g>
	</g>
	<g>
		<path style="fill:#FF4F19;" d="M288,340.219h28v-280h-20c-4.418,0-8,3.582-8,8V340.219z"/>
	</g>
	<g>
		<path style="fill:#009BCA;" d="M360,84.219h-8c-4.418,0-8,3.582-8,8v248h16V84.219z"/>
	</g>
	<g>
		<path style="fill:#5C546A;" d="M452.22,100.219H440c-4.418,0-8,3.582-8,8v232h20.22V100.219z"/>
	</g>
	<g>
		<path style="fill:#C9A07C;" d="M0,356.219v8c0,4.418,3.582,8,8,8h496.438c4.418,0,8-3.582,8-8v-8H0z"/>
	</g>

</svg>

                                <dec><a href="#" style="color:white"> www.coursugl.edu</a></dec>
                                                                      </div>
                                                                                      <div class="img3">
          
<svg width="150px" height="100px"  viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path fill="#000" d="M120.998 40.998v37.943C136.22 89.471 146 109.278 146 131.001c0 13.71-3.901 26.65-10.598 36.985 3.465 1.35 7.106 2.85 10.15 4.172l122.352-22.783 5.918 54.842-111.748 23.219c-.862 16.261-2.45 32.262-5.289 51.566h336.217V40.998zM96 88.998c-16.595 0-32.002 17.747-32.002 42.004 0 24.257 15.407 42.002 32.002 42.002 16.595 0 32.002-17.745 32.002-42.002S112.595 88.998 96 88.998zm156.096 81.629l-108.592 20.22c-14.24-5.602-4.956-3.035-21.469-8.517-7.476 5.469-16.33 8.672-26.035 8.672-8.6 0-16.53-2.523-23.428-6.9-8.59 3.564-17.655 8.09-25.736 12.654-12.992 7.338-23.722 13.211-27.838 16.033v130.213h20.004V232h17.996v263.002h30.004V326h17.996v169.002h26.004v-171.84l.154-.824c9.514-50.64 12.588-77.384 13.461-109.656l109.56-22.766zm-98.153 126.375c-.952 5.682-1.991 11.64-3.146 17.996H478v-17.996zM208 344.998c-16.595 0-32.002 17.747-32.002 42.004 0 18.198 8.67 32.73 20.01 38.855 3.599-1.662 7.482-2.706 11.68-2.851 4.633-.16 8.98.767 13.052 2.42 10.968-6.352 19.262-20.63 19.262-38.424 0-24.257-15.407-42.004-32.002-42.004zm112 0c-16.595 0-32.002 17.747-32.002 42.004 0 18.198 8.67 32.73 20.01 38.855 3.599-1.662 7.482-2.706 11.68-2.851 4.633-.16 8.98.767 13.052 2.42 10.968-6.352 19.262-20.63 19.262-38.424 0-24.257-15.407-42.004-32.002-42.004zm112 0c-16.595 0-32.002 17.747-32.002 42.004 0 18.198 8.67 32.73 20.01 38.855 3.599-1.662 7.482-2.706 11.68-2.851 4.633-.16 8.98.767 13.052 2.42 10.968-6.352 19.262-20.63 19.262-38.424 0-24.257-15.407-42.004-32.002-42.004zm-223.688 95.996c-3.844.133-8.907 2.93-14.3 8.785-5.394 5.855-10.696 14.25-15.125 22.76-4.226 8.12-7.609 16.16-10.06 22.463h85.339c-3.04-6.436-7.138-14.549-12.133-22.711-5.298-8.658-11.511-17.138-17.668-22.957-6.157-5.819-11.8-8.487-16.053-8.34zm112 0c-3.844.133-8.907 2.93-14.3 8.785-5.394 5.855-10.696 14.25-15.125 22.76-4.226 8.12-7.609 16.16-10.06 22.463h85.339c-3.04-6.436-7.138-14.549-12.133-22.711-5.298-8.658-11.511-17.138-17.668-22.957-6.157-5.819-11.8-8.487-16.052-8.34zm112 0c-3.844.133-8.907 2.93-14.3 8.785-5.394 5.855-10.696 14.25-15.125 22.76-4.226 8.12-7.609 16.16-10.06 22.463h85.339c-3.04-6.436-7.138-14.549-12.133-22.711-5.298-8.658-11.511-17.138-17.668-22.957-6.157-5.819-11.8-8.487-16.052-8.34z"/>
</svg><br>
     <dec>des formations geniales ,decovrir<br> la facon de comprendre les formations</dec>
                                                                                      </div>
                                                      
                                                      </div>  
                                                        </div>
                                                        
                                                      </div>
                                                      </div>
  <!-- le card 3 c'est ou on va mettre les fotos de notre cher universite -->
              <div class="card2" >
                            <div class="card-body">
            
                                                                                      <div class="box">
                                                                                        <div class="box1">
                                                                                        <p class="param">campus Ngagara lieu:Bujumbura-burundi
                                                                                            address: quartier 10 ngangara
                                                                                          </P>
                                                                                          <img src="d.jpg"  class="imag"width="275px" alt="">
                                                                                        </div>
                                                                                        <div class="box1">
                                                                                          <p class="parag">campus saint michel lieu:Bujumbura-burundi
                                                                                            address:Tout pres de l'eglise Catholique
                                                                                          </P>
                                                                                          <img src="bd.jpg"  class="imge1"width="275px" alt=""></div>
                                                                                        <div class="box1">
                                                                                        <p class="paragr">campus saint michel lieu:Bujumbura-burundi
                                                                                            address:Tout pres de l'eglise Catholique
                                                                                          </P>
                                                                                          <img src="bururi.jpg"  class="imge2" width="275px"alt=""></div>
                                                                                        <div class="box1">
                                                                                          <p class="paragra">campus saint michel lieu:Bujumbura-burundi
                                                                                            address:Tout pres de l'eglise Catholique
                                                                                          </P>
                                                                                          <img src="saintmichel.jpg"  class="imge3" width="265px" alt=""></div>
                                                                                      </div>



                                    
                                        </div>
                                                      </div>
                                                      <!-- les textes defininissant notre compus -->
                                                      <div class="   position-relative lorem">
  <ba class="  position-absolute top-0 start-50 translate-middle    fixed  bg-warning ">What is Lorem Ipsum?</ba><br>
<p style=" background:#C4D7ED">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
 Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
 when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
 It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially 
 unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, 
 and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer feugiat ante mauris, in sodales augue vehicula sit amet. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ut leo vitae ipsum aliquet mollis vel quis libero. Donec molestie neque sit amet finibus egestas. Maecenas scelerisque lectus eu blandit efficitur. Aliquam varius iaculis fermentum.  
 Curabitur sed quam sit amet ligula eleifend tincidunt. Suspendisse ultrices dapibus erat, vitae tincidunt quam mattis eu. Mauris vel gravida sapien. Integer et maximus sapien. Vivamus elit nulla, convallis nec ante at, malesuada consectetur magna. Morbi malesuada enim est, vitae posuere orci rutrum ac. Donec nisl mi, faucibus ac lacus in, bibendum commodo neque. Sed ornare erat vestibulum bibendum scelerisque. Etiam porttitor felis at tellus vehicula volutpat.

Cras quis massa eleifend, elementum enim ut, condimentum turpis. Donec pellentesque enim enim, 
eget sodales velit congue vel. Nulla molestie sapien luctus elit aliquam, id laoreet magna porttitor. Nullam
 consectetur tempus varius. Fusce efficitur erat id velit volutpat vulputate. Pellentesque felis libero, euismod a
  turpis nec, tincidunt dictum orci. Ut dignissim semper quam, ac rhoncus enim tempor et. Proin fermentum lorem a 
  tortor tristique imperdiet. Nam ornare nibh malesuada ultricies dapibus. Donec venenatis felis luctus dignissim sollicitudin. 
  Pellentesque sagittis massa et orci vestibulum, sit amet ullamcorper elit lobortis. Donec mauris ipsum, sollicitudin nec sem 
  accumsan, venenatis condimentum diam. Sed sit amet mauris tellus. Class aptent taciti sociosqu ad litora torquent per conubia 
  ostra, per inceptos himenaeos. Pellentesque sit amet varius mi.

Sed mi leo, dignissim in justo a, volutpat iaculis massa. Etiam pretium vitae enim non condimentum. Sed eleifend neque sit 
amet tempor dignissim. Donec id gravida lorem. Sed facilisis elit nec dolor ultricies, vel lacinia ipsum luctus. Phasellus
 pulvinar libero sit amet faucibus finibus. Donec sed eros non quam lobortis aliquet.

Suspendisse luctus pretium orci. Proin pharetra magna a pellentesque luctus. Maecenas pharetra efficitur leo vel placerat. 
Interdum et malesuada fames ac ante ipsum primis in faucibus. Integer est enim, iaculis vitae congue eu, malesuada 
scelerisque dui. Aenean sed ante eu sem tincidunt dignissim. Quisque eu lacinia est, sed varius ipsum. Etiam vitae sapien
 est. Curabitur pretium, urna a molestie sagittis, justo turpis iaculis libero, sed molestie ex arcu id justo.

Maecenas ac tincidunt sem. Aenean maximus sodales rhoncus. Vestibulum dolor turpis, interdum et posuere 
sit amet, tincidunt sit amet purus. In ac mauris arcu. Nulla non venenatis risus. Mauris id mauris interdum mi 
consequat lobortis. Mauris luctus dui odio, ac placerat lectus sagittis eget. Sed scelerisque varius dolor ut scelerisque.
 Cras ornare commodo quam non blandit. Nam dictum ex lacus, ac malesuada nisl tempor ac.
</p>

<ba class=" position-absolute top-20 start-50 translate-middle  bg-info">Why do we use it?</ba><br>

<p style=" background:#EFFBFF">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. 

The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 
'Content here, content here', making it look like readable English. Many desktop publishing packages and web 
page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many 
web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on 
purpose (injected humour and the like).
Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
Ut vitae dui accumsan, auctor lectus eu, egestas sem. Integer 
dapibus commodo rhoncus. Fusce est orci, auctor porttitor neque ac, 
feugiat rhoncus lorem. Maecenas eget dolor augue. Aenean venenatis lectus neque, eget sollicitudin 
sem pretium id. Aenean dignissim metus quis pulvinar posuere. Fusce tincidunt ipsum ut ipsum congue, 
non lobortis nisl congue. Cras et purus sit amet dolor iaculis auctor ac vel risus. Nunc sit amet ullamcorper nulla. 
Quisque ultrices malesuada sapien, dapibus bibendum nulla posuere vitae. Nam a ante consequat, eleifend diam non, 
sollicitudin leo. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.

Vestibulum faucibus, sem quis luctus porta, metus tortor accumsan ipsum, et interdum massa mi non augue. 
Maecenas euismod ex ac erat ultricies, eu porta lectus vehicula. Nulla quis neque sit amet nibh commodo ullamcorper ac 
a urna. Vivamus sed consequat nunc. Maecenas porta, justo a porttitor pharetra, nunc arcu tempus nisl, at ullamcorper purus 
sem vitae ligula. Aliquam in nisi in libero facilisis dignissim. Cras ligula diam, gravida a augue sit amet, tincidunt iaculis dolor. 
Sed consectetur ornare tristique. Vestibulum at metus sit amet risus pulvinar vestibulum vel sit amet metus. Cras tellus diam, 
tincidunt ac diam eget, pharetra congue diam. Nullam eu metus sit amet mi congue pulvinar. In vel tellus ut purus aliquam
aliquam et sit amet turpis. Quisque rhoncus porttitor nulla eu blandit. Donec aliquam nisi quis mi lacinia, id feugiat urna 
gravida.

Phasellus tristique vitae sem ut pulvinar. Mauris efficitur egestas sodales. Proin convallis urna quis nibh pharetra, 
a interdum neque tincidunt. Suspendisse quis libero in urna tincidunt consequat vel eu est. Pellentesque non odio 
quis mauris ornare euismod ut et nisi. Phasellus metus turpis, blandit maximus luctus at, blandit quis dolor. Integer 
semper euismod urna ac elementum. Suspendisse orci ante, sagittis ut nisi eget, vestibulum vehicula mi. Curabitur 
vulputate nunc congue, tristique justo ornare, malesuada lectus. Ut ut condimentum ante.

Fusce id rutrum ligula. Cras commodo leo sit amet purus suscipit, tincidunt hendrerit ex dictum. Sed elementum, massa 
quis efficitur efficitur, enim risus hendrerit nulla, in suscipit velit dui et tellus. Proin mattis tellus sed risus dignissim bibendum. 
Aenean egestas auctor mollis. Quisque id pharetra leo. Praesent luctus nunc quis velit mattis, eu rhoncus augue volutpat. 
Nullam ante risus, porta non arcu venenatis, feugiat vehicula urna.

Nullam sed est quis nulla euismod dictum sit amet id ante. Mauris varius diam a ultrices tempus. Nullam varius dictum
 efficitur. Vestibulum pulvinar hendrerit molestie. Sed eleifend ligula eget eleifend gravida. Aliquam erat volutpat. Vivamus 
 varius lobortis nibh, sodales pretium ipsum consectetur in. Vestibulum bibendum sollicitudin elit. Pellentesque facilisis ante
  at velit bibendum, vitae scelerisque nunc blandit. Suspendisse eget lorem ut mi sagittis molestie quis sit amet lorem. Nam ut
   eleifend nulla, a lobortis ligula. Aenean nulla ex, placerat vitae turpis nec, tempor auctor neque. Vestibulum ullamcorper 
   lacus odio, id scelerisque quam mollis vel. Nunc rutrum libero quis tellus imperdiet tincidunt. Fusce mollis, eros quis 
   condimentum auctor, nulla orci ornare mi, non imperdiet turpis lacus sit amet elit. Donec tristique vel mi at volutpat.

Etiam mi dui, placerat quis metus non, gravida gravida ipsum. Mauris eleifend sollicitudin purus 
et laoreet. Aliquam quis egestas quam. Pellentesque ipsum risus, dignissim non congue nec, 
placerat vel nisi. Donec lacinia tristique aliquam. Praesent pharetra egestas suscipit. Curabitur a mauris lorem. 
Curabitur non scelerisque nibh, sit amet blandit metus. Sed tincidunt pulvinar auctor.

Ut nec fringilla elit. Duis ornare dictum dapibus. Vivamus finibus sagittis lacus ac euismod. Cras sit amet 
risus nec dui consectetur tempor. Nam scelerisque mi vitae enim placerat pretium. Quisque aliquet velit
 ut erat blandit elementum. Duis egestas pharetra dui id congue. Vestibulum ante ipsum primis in faucibus orci luctus 
 et ultrices posuere cubilia curae; Aliquam erat volutpat. Duis a elit sit amet ligula volutpat eleifend. Ut nulla nunc, 
 dignissim id mi at, laoreet lobortis odio. Ut porta, mi vitae tincidunt consequat, velit magna blandit urna, id bibendum 
 lectus enim nec orci. Nunc sed enim in augue lacinia efficitur. Curabitur sagittis ante auctor faucibus finibus. 
 Lorem ipsum dolor sit amet, consectetur adipiscing elit.

Aenean vel sapien quam. Duis magna dui, 
feugiat placerat arcu at, hendrerit fermentum nisi. 
Class aptent taciti sociosqu ad litora torquent per conubia nostra, 
per inceptos himenaeos. Etiam eleifend fringilla rhoncus. Lorem ipsum 
dolor sit amet, consectetur adipiscing elit. Cras vel lectus ultrices, finibus lacus non, 
finibus libero. Nulla volutpat, mi id ullamcorper laoreet, justo odio tempus dui, et faucibus
 tortor purus gravida justo. Proin sit amet neque semper, accumsan erat in, venenatis arcu. Quisque
  pulvinar, tortor et posuere feugiat, ipsum justo aliquam odio, faucibus accumsan mauris orci eu arcu. Donec 
  vel diam vitae tellus placerat euismod. Donec ornare dui ut leo aliquam, et iaculis purus bibendum. Donec eleifend, 
  ipsum non sodales dapibus, metus nulla convallis lacus, sed eleifend risus lectus at velit. Lorem ipsum dolor sit 
  amet, consectetur adipiscing elit.

Curabitur metus justo, hendrerit nec ligula ac, ultrices egestas erat. Mauris at libero tempor, porttitor 
odio ac, tristique justo. Fusce nec metus id purus aliquam cursus. Nullam ultricies condimentum ipsum 
non mattis. Maecenas faucibus luctus cursus. Maecenas faucibus luctus ipsum, volutpat vestibulum arcu 
commodo eget. Pellentesque consequat eleifend neque, ornare feugiat dui sodales et. Praesent vestibulum 
lacinia felis, ac tempus est efficitur sit amet. Sed eleifend ullamcorper purus, vel pharetra lectus vulputate
 vel. Sed congue ut metus ut egestas. Aliquam lobortis sed massa at tempor. Etiam maximus velit vitae 
 neque lobortis, in aliquam felis sollicitudin. Nulla at nibh eros.

Aenean blandit dui a nisl placerat, at semper libero aliquam. Cras at placerat urna. Integer nisl odio, lacinia 
non elit sit amet, vestibulum accumsan lectus. In nec dui porttitor, accumsan purus id, bibendum lorem. 
Vestibulum tempor urna non risus vehicula, vel aliquet augue pretium. Etiam pharetra quis massa eu molestie. 
Praesent venenatis magna nec nisl pretium dapibus. Nam sollicitudin mattis velit eget condimentum.

Nulla viverra nisi et ornare ullamcorper. Sed ac dictum lacus. Donec finibus erat sit amet luctus feugiat. 
Pellentesque quis posuere lectus. Mauris mattis tortor non sapien porta lobortis. Duis luctus ultrices 
velit, in rhoncus odio sodales nec. Sed malesuada sollicitudin varius. Curabitur ut hendrerit nibh, 
nec pulvinar arcu. Cras facilisis elementum metus in pharetra. Mauris hendrerit lectus orci, et placerat 
erat auctor vel. Integer nulla urna, fermentum in blandit non, pellentesque non erat. Aliquam ac dolor at 
arcu sodales placerat. Sed egestas libero magna, a tempor libero mattis at. Maecenas at ultrices justo, vitae 
scelerisque orci. Vestibulum et mi enim.

In sit amet neque convallis, luctus neque sed, rutrum massa. Mauris bibendum, 
sapien id vehicula vulputate, elit dolor ultricies lectus, at euismod sem velit ullamcorper
 odio. Curabitur lobortis, nunc id placerat auctor, ante quam gravida nulla, vitae finibus 
 dolor sem sollicitudin augue. Praesent bibendum molestie lacinia. Cras nulla lorem, tristique 
 sit amet elit a, pretium interdum purus. Quisque a porttitor augue. Cras dapibus lorem in blandit
  commodo. Nam hendrerit fringilla velit, eu sollicitudin erat scelerisque sit amet. Morbi interdum 
  pulvinar metus, quis fringilla erat sollicitudin vel.

Donec blandit, augue vitae feugiat pulvinar, tellus velit vulputate eros, et commodo massa dui vel nisi.
 Duis commodo est risus, eu suscipit ipsum finibus nec. Donec et magna posuere, dignissim ligula facilisis, f
 aucibus diam. Suspendisse porttitor, mi vitae lobortis sodales, libero erat ornare metus, id congue felis dolor 
 ac lectus. Morbi lobortis orci in euismod molestie. Aliquam sollicitudin tempor sagittis. Sed sollicitudin eget 
 lacus in efficitur. Mauris tincidunt aliquam dolor. Vivamus aliquet nulla nibh, sed rutrum lacus molestie faucibus.

Aenean bibendum sapien ut vulputate pharetra. Donec fermentum justo in faucibus luctus. Nunc dignissim metus sem, 
in viverra metus semper imperdiet. Phasellus feugiat sodales enim, et posuere tortor mollis vel. Donec velit augue, 
dictum non convallis eget, dictum id erat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere 
cubilia curae; Donec luctus enim dolor, et rhoncus ipsum semper nec. Maecenas eget libero gravida, 

auctor ante eget, egestas orci. Donec tincidunt nisl vehicula, ullamcorper elit at, malesuada tortor.
 Vivamus hendrerit, metus sit amet finibus scelerisque, mauris elit elementum mauris, 
 eget condimentum neque augue in leo. Nunc non mi enim. Donec a quam aliquam, consequat dui a, 
  convallis ex. Vestibulum rhoncus aliquet metus. Aliquam posuere eros neque, sed dapibus leo tempor vel.
   Integer commodo imperdiet leo, ac pulvinar quam semper vel. In semper nec odio quis bibendum.

</p>


<ba class=" position-absolute top-8 start-50 translate-middle  bg-danger">Where does it come from?</ba><br>

<p style=" background:#EFF0FF">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical 
Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at 
Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, 
from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered 
the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum 
et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory
 of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..",
  comes from a line in section 1.10.32

  Morbi suscipit ante malesuada elementum consectetur.
   Phasellus urna sem, lacinia nec faucibus vel, scelerisque at velit. 
   Praesent pellentesque est eget volutpat vulputate. Proin vitae ex ut libero volutpat ornare
    molestie at metus. Aenean placerat lacus a ornare tempus. In mattis, turpis ac dictum tempus, erat ante 
    fringilla libero, vitae tempor nibh lectus ut nibh. Integer auctor odio vulputate felis semper faucibus. Suspendisse 
    eu pulvinar augue. Phasellus pretium lorem eu nulla tempus dapibus. Mauris aliquam facilisis dapibus. Etiam
     malesuada nulla ut elit tempus, et imperdiet ligula mollis. Praesent elementum enim quis metus maximus scelerisque.

Nulla facilisi. Proin justo est, vestibulum ut magna quis, hendrerit rhoncus quam. Donec ultrices dictum mi at varius.
 Nullam odio metus, venenatis in turpis ac, tincidunt pellentesque lorem. Praesent at ex eget leo faucibus sagittis. Orci 
 varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Maecenas in ipsum non dui egestas 
 iaculis sed et dui. Vivamus venenatis, est in aliquam porttitor, tortor est ornare metus, vel faucibus arcu ipsum nec neque.
  Phasellus ut condimentum risus. Nulla felis odio, malesuada et elementum id, rhoncus at elit. Mauris nulla justo, vulputate 
  non purus nec, dignissim ultrices augue.

Etiam vel purus eu est vehicula vehicula. Sed suscipit lectus eget elit hendrerit, id imperdiet nunc dapibus. Aliquam a 
dui eros. Aenean fringilla ante ac sapien consectetur, in accumsan eros lacinia. Ut ut libero neque. Quisque aliquet aliquam 
augue sed volutpat. Cras volutpat mauris quis lacus ornare tincidunt. Fusce nec magna at odio tempus commodo ut nec odio.
 Nunc nec pulvinar nisi. Morbi in commodo velit. Sed id pharetra ex. Phasellus eu fringilla elit, interdum ornare magna. 
 Suspendisse at magna sit amet dolor aliquet pretium vel non tortor. Praesent sollicitudin, mi at commodo ultricies, nisi 
 lorem pharetra tortor, eget blandit ipsum urna vitae lorem. Donec volutpat nulla turpis, at lobortis arcu 
 eleifend eu. Nullam arcu massa, consectetur vel nulla a, consequat dignissim neque.

Nullam fermentum tempor turpis eget eleifend. Maecenas pulvinar ex sit amet nulla vestibulum iaculis.
 Proin blandit et sapien ac placerat. Fusce lacinia metus in accumsan pulvinar. Aliquam erat volutpat. Ut
  vel dui ac lorem vulputate placerat vitae sit amet velit. Sed varius eleifend velit, sed imperdiet enim facilisis vel. 
  Nullam vitae mattis sapien, iaculis hendrerit dui. Vestibulum imperdiet enim ut ex porta interdum. Donec vitae
   consequat sapien. Donec nec pharetra risus.

Vestibulum tincidunt mauris massa, mattis luctus lorem faucibus non. Nunc mattis, odio at ornare sodales,
 nunc ex cursus quam, nec sagittis magna enim eget justo. Nam non felis enim. Proin auctor felis ut lorem 
 fringilla, non ultricies eros maximus. Fusce rhoncus sagittis sem id convallis. In at turpis consectetur, bibendum 
 erat nec, vehicula mauris. Aliquam rutrum suscipit nibh, sed convallis sapien tempor at. Donec viverra risus eu
  neque facilisis, at dignissim urna elementum. Fusce nec turpis et orci porttitor pretium.

Vestibulum vulputate nisl sed tristique elementum. Ut vitae convallis lorem, vitae lacinia elit.
 Phasellus sit amet lacus ut sapien maximus tincidunt et eu nulla. Nulla ornare eget justo a
  porttitor. Sed ut volutpat leo. Mauris laoreet consequat risus eget bibendum. Integer dapibus 
  elit non tellus accumsan, vitae sollicitudin ligula congue. Orci varius natoque penatibus et magnis 
  dis parturient montes, nascetur ridiculus mus. Mauris sagittis fringilla elit laoreet interdum. Vestibulum massa 
  lectus, bibendum nec faucibus sit amet, ultrices ut ipsum. Pellentesque volutpat sapien vel mi bibendum dignissim.

</p>


                                                      </div> 
                                                  


                
                                                      <!-- ce card3 est apparue comme le footer -->
              <div class="card3" >

                            <div class="card-body">
                                                        
               <div class="nav">
      <div class="idv1">
      <ul>
                   <li >contacts:</li>
                      <li>email:ugl@gmail.com</li>
                              <li>site oficiel:ugl.bi</li>
                 </ul>
      </div>
                                    <div class="idv2">
                                      <ul>
                                        <li >copy light 2021</li>
                                                <li>developeur:derick el deco</li>
                                                <li>Partenariat avec U.G.L</li>
                                      </ul>
                                    </div>
                                                          <div class="idv3">
                                                            <ul>
                                                              <li>
                                                              <i class="bi bi-google"></i>
<svg xmlns="http://www.w3.org/2000/svg" width="66" height="46" fill="currentColor" class="  bi bi-google" viewBox="0 0 16 16">
  <path d="M15.545 6.558a9.42 9.42 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.689 7.689 0 0 1 5.352 2.082l-2.284 2.284A4.347 4.347 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.792 4.792 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.702 3.702 0 0 0 1.599-2.431H8v-3.08h7.545z"/>
</svg><ad >www.ugl/info.com</ad>
                                                              </li><br>
                                                              <li>
                                                              <i class="bi bi-house-door"></i>
          <svg xmlns="http://www.w3.org/2000/svg" width="66" height="46" fill="currentColor" class=" bi bi-house-door" viewBox="0 0 16 16">
            <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z"/>
          </svg><ad >location: Bujumbura/Burundi</ad>
                                                              </li>
                                                            </ul>
                                                          </div>
               </div>                                         

                                                      </div>
</body>

</html>