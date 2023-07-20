<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Perfil</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="styles/perfil.css">
    </head>    

    <?php 
      header('Content-Type: text/html; charset=utf-8');

      if (isset($_GET['id'])) {
          $id = (int) $_GET['id'];
      } else {
          $id = 6;
          $nombreneg = "";
          $imagen =""; 
          $alias ="";
          $telefono = "";
          $correo = "";
          $caracteristica1 ="";
          $caracteristica2 ="";
          $caracteristica3 ="";
          $caracteristica4 ="";
          $caracteristica5 ="";
          $descripcion = "";
          $categoria = "";


      }

      if ($id > 0) {
        try 
          {                
            include 'functions/coneccion.php';
            $conn = sqlsrv_connect($serverName, $connectionOptions);
            $tsql = "SELECT * FROM formulario2 WHERE id = ".$id;
            $getUser = sqlsrv_query($conn, $tsql);
            $userName = '';
            if ($getUser == FALSE)
            die(FormatErrors(sqlsrv_errors()));                
             while($row = sqlsrv_fetch_array($getUser, SQLSRV_FETCH_ASSOC))
            {
                $nombreneg = $row['nombreNeg']; 
                $imagen = $row['image_uno'];
                $alias = $row['alias'];
                $descripcion = $row ['descripcion'];
                $caracteristica1 = $row['caracteritica1'];
                $caracteristica2 = $row['caracteritica2'];
                $caracteristica3 = $row['caracteritica3'];
                $caracteristica4 = $row['caracteritica4'];
                $telefono = $row['telefono'];
                $correo = $row['correo'];


            }                
            sqlsrv_free_stmt($getUser);
            sqlsrv_close($conn);
          } catch (Exception $e) {
            echo("Error!");
          }
         
          } else {

        }
        ?>

        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <!---<h1>Nombre de la Persona</h1>-->
                    <h1><?php echo $nombreneg; ?></h1>

                </div>
                <div class="col-md-6">
                    <img src="<?php echo $imagen?>" alt="Imagen de la persona"class="img-fluid">
                </div>
            </div>
        </div>

        <div class="container" id="datos">
            <div class="row custom-row">
                <div class="col-md-5">
                    <h1><?php echo $alias;?></h1>
                </div>
                <div class="col-md-7">
                    <h2>
                      <?php
                        echo $descripcion;
                      ?>
                    </h2>
                </div>
            </div>
            <div class="row custom-row">
                <div class="col-md-4">
                    <h2>✓ <?php echo $caracteristica1; ?></h2>
                    <h2>✓ <?php echo $caracteristica3; ?></h2>                
                </div>
                <div class="col-md-4">
                <h2>✓ <?php echo $caracteristica2; ?></h2>
                <h2>✓ <?php echo $caracteristica4; ?></h2>
                </div>
                <div class="col-md-4">
                  <h2>Contacto</h2>
                  <h3><?php echo $telefono; ?></h3>
                  <h3><?php echo $correo; ?></h3>
                </div>
            </div>
        </div>



        <div class="container" id="tabla">
            <div class="table-responsive">
              <table class="table">
                <tbody>
                  <tr>
                    <td class="col-md-6">
                      <h1>Título 1</h1>
                      <h2>Subtítulo 1</h2>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </td>
                    <td class="col-md-6">
                      <h1>Título 2</h1>
                      <h2>Subtítulo 2</h2>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </td>
                  </tr>
                  <tr>
                    <td class="col-md-6">
                      <h1>Título 3</h1>
                      <h2>Subtítulo 3</h2>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </td>
                    <td class="col-md-6">
                      <h1>Título 4</h1>
                      <h2>Subtítulo 4</h2>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>


          <div class="container">
            <div class="row">
              <div class="col-md-6 offset-md-3">
                <div class="custom-section">
                  <img src="img/logo-titulo-universitario.png" alt="Imagen" onclick="showImage(this)">
                  <h1 style="color: white;">Garantía</h1>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
              </div>
            </div>
          </div>
        
          <!-- Modal para mostrar la imagen en grande -->
          <div class="modal fade" id="imageModal" tabindex="-1" role="dialog" aria-labelledby="imageModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-body">
                  <img id="modalImage" src="" alt="Imagen en grande">
                </div>
              </div>
            </div>
          </div>
        
          <!-- Scripts de Bootstrap -->
          <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
          <script>
            function showImage(element) {
              var imageUrl = element.src;
              var modalImage = document.getElementById("modalImage");
              modalImage.src = imageUrl;
        
              $('#imageModal').modal('show'); // Abre el modal
            }
          </script>
        <!-- Scripts de Bootstrap -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script
            src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script
            src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </body>
</html>
