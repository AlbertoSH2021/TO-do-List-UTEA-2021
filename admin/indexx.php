<?php
  require '../scripts/funciones.php';
  if(! haIniciadoSesion() || ! esAdmin() )
  {
    header('Location: index.html');
  }

  conectar();
  $usuarios = getUsuarios();
  desconectar();
?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Panel de Administración</title>

    <!-- Bootstrap core CSS -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <!-- <link rel="stylesheet" href="../css/intranetInterfaz.css"> -->
    <!-- Custom styles for this template -->
    
  </head>

  <body >
    
    <div class="container-fluid">
      <div class="row">
        <h4 class="sub-header">Sistema To Do List UTEA 2021-1.</h4><hr>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header" >Hola usuario <strong class="usuario" ><?= $_SESSION['usuario'] ?></strong>! bienvenido.</h1><hr>

          
          <p>Puedes agregar, eliminar o modificar una tarea. <strong> Comienza ya!.</strong></p>
        </div>
      </div>
    </div>



    <!-- butones ash -->
 <section id="figura">
 
                <div class="rectangulo"></div>
                </section>
               
               <style>
                            body{
                        background: rgba(232, 235, 226, 0.568);
                        display: flex;
                        justify-content: center;
                        align-items: center;
                        min-height: 100vh;
                        flex-direction: column;
                        }
                        .button_atras{
                            color: rgba(244, 241, 246, 0.808);
                            text-decoration: none;
                            font-size: 1.3rem;
                            font-weight: bold;
                            position: fixed;
                            z-index: 10;
                            top: 30px;
                            right: 30px;
                            background:rgb(236, 236, 236) ;
                            height: 40px;
                            width: 40px;
                            cursor: pointer;
                            border-radius: 10px;
                            box-shadow: 0 0 6px rgba(0,0,0,1);
                            
                        }
                        .button_refresh{
                            color: rgba(241, 246, 241, 0.808);
                            text-decoration: none;
                            font-size: 1.3rem;
                            font-weight: bold;
                            position: fixed;
                            z-index: 10;
                            top: 30px;
                            right: 90px;
                            background:rgb(236, 236, 236) ;
                            height: 40px;
                            width: 40px;
                            cursor: pointer;
                            border-radius: 10px;
                            box-shadow: 0 0 6px rgba(0,0,0,1);
                            
                        }
                        .button_refresh0{
                            color: rgba(241, 246, 241, 0.808);
                            text-decoration: none;
                            font-size: 1.3rem;
                            font-weight: bold;
                            position: fixed;
                            z-index: 10;
                            top: 30px;
                            right: 150px;
                            background:rgb(236, 236, 236) ;
                            height: 40px;
                            width: 40px;
                            cursor: pointer;
                            border-radius: 10px;
                            box-shadow: 0 0 6px rgba(0,0,0,1);
                            
                        }
                        .usuario{
                          font-family: 'Times New Roman', Times, serif;
                          font-weight: bold;
                          font-size: 3.3rem;
                          cursor: pointer;
                          color: rgba(241, 246, 241, 0.808);
                        }
              </style>
                
                
                <!--<button type="radius" class="button_atras" pha><a href="/galeria lodges con chat bot y whatsapp/index.html" class="back-button"><i class='bx bx-arrow-back'></i></a></button>-->
                <button type="radius" class="button_refresh"><a href="index.php" class="back-button"><i class='bx bx-refresh'></i></i></a></button>
                <button type="radius" class="button_refresh0"><a href="../scripts/cerrar-sesion.php"><i class='bx bx-power-off'></i></a></li> </a></button>
                
              
            <!-- <li><a href="scripts/cerrar-sesion.php">Cerrar sesión</a></li> -->
                </nav> 
        <!-- fin botones ash -->
    <!-- Bootstrap core JavaScript
    
    ================================================== -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <style> 
            body{
                        background: rgba(232, 235, 226, 0.568);
                        display: flex;
                        justify-content: center;
                        align-items: center;
                        min-height: 100vh;
                        flex-direction: column;
            }
            body{
                            
                            background-image: linear-gradient(to top, hsla(22, 50%, 20%, 0.789) 0%, rgba(118, 116, 121, 0.932)100%),url(gift.gif);
                            background-repeat: no-repeat;
                            background-size: cover;
                            background-attachment: fixed;                        
                            color:rgb(0, 0, 0);                     
                            font-weight: bold;
                            }
                            .sidebar{
          background-color:  rgba(255, 255, 255, 0.541);
          }
      </style>
  </body>
</html>
