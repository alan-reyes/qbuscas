<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>Qbuscas</title>
  <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
  <!-- Font Awesome icons (free version)-->
  <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
  <!-- Google fonts-->
  <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
  <link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet" />
  <!-- Core theme CSS (includes Bootstrap)-->
  <link href="css/styles.css" rel="stylesheet" />
</head>

<body id="page-top">

  <?php 

if (isset($_GET['id'])) {
    $id = (int) $_GET['id'];
} else {
    $id = 0;
    $userName = '';
}
if ($id > 0) {
    try 
            {                
                include 'functions/coneccion.php';
                $conn = sqlsrv_connect($serverName, $connectionOptions);
                $tsql = "SELECT nombre_usuario FROM Usuarios WHERE id = ".$id;
                $getUser = sqlsrv_query($conn, $tsql);
                $userName = '';
                if ($getUser == FALSE)
                die(FormatErrors(sqlsrv_errors()));                
                while($row = sqlsrv_fetch_array($getUser, SQLSRV_FETCH_ASSOC))
                {
                    $userName = $row['nombre_usuario'];                     
                }                
                sqlsrv_free_stmt($getUser);
                sqlsrv_close($conn);
            } catch (Exception $e) {
                echo("Error!");
            }

            echo 
            '<script>
              var navUsuario = document.getElementById("navUsuario");
              navUsuario.style.display = "inline";
              var navIniciarSesion = document.getElementById("navIniciarSesion");;
              navIniciarSesion.style.display = "none";
            </script>';
} else {
    echo '<script>';

            echo 'var navUsuario = document.getElementById("navUsuario");';
            echo 'navUsuario.style.display = "none"';            

            echo '</script>';
}
?>    

  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container px-4 px-lg-5">
      <a class="navbar-brand" href="index.php">Qbuscas.com</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse"
        data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
        aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link" href="Formulario.php" id="navSerVendedor">Ser Vendedor</a></li>
          <li class="nav-item"><a class="nav-link" href="profile.php" id="navMiPerfil">Mi perfil</a></li>
          <li class="nav-item"><a class="nav-link" href="Login.php" id="navIniciarSesion">Iniciar sesión</a></li>
          <li class="nav-item">
            <p class="nav-link" href="Login.php" id="navUsuario">
              <?php echo $userName; ?>
            </p>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Masthead-->
  <main class="masthead">
    <div class="container px-4 px-lg-5 d-flex h-20 align-items-center justify-content-center">
      <div class="d-flex justify-content-center search-container">
        <div class="text-center">
          <form action="">
            <div class="group mx-auto my-0 ">
              <input id="search" type="search" class="input" placeholder="Restaurante, taxista, doctor...">
            </div>
            <button class="btn btn-primary"  id="Buscar" type="submit">Buscar</button>
          </form>
        </div>
      </div>
    </div>
    <div class="gallery-section">      
      <!-- <nav>
        <ul class="navbar-secciones">
          <li class="item__navbar"><a href="">Todos</a></li>
          <li class="item__navbar"><a href="">Servicios</a></li>
          <li class="item__navbar"><a href="">Comida</a></li>
          <li class="item__navbar"><a href="">Belleza</a></li>
          <li class="item__navbar"><a href="">Salud</a></li>
          <li class="item__navbar"><a href="">Turismo</a></li>
        </ul>
      </nav> -->        

      <!-- Cards -->
      <ul class="cards">
      <?php
// llenado de galeria

      $idItem = "";
      $nombreneg = "";
      $imagen ="";               
      $categoria = "";
      $descripcion = "";      

try 
    {                
      include 'functions/coneccion.php';
      $conn = sqlsrv_connect($serverName, $connectionOptions);
      $tsql = "SELECT * FROM formulario2";
      $getUser = sqlsrv_query($conn, $tsql);
      $userName = '';
      if ($getUser == FALSE)
      die(FormatErrors(sqlsrv_errors()));                
       while($row = sqlsrv_fetch_array($getUser, SQLSRV_FETCH_ASSOC))
      {          
          $nombreneg = $row['nombreNeg']; 
          $imagen = $row['image_uno'];          
          $descripcion = $row['descripcion'];    
          $idItem = $row['id']   
          
          if($idItem == 15) {
            break;
          }

          echo 
        '<li class="cards__item">
          <div class="card">
            <img class="card__image" src="'.$imagen.'">
            <div class="card__content">
              <p class="card__category"></p>
              <p class="card__title">'.$nombreneg.'</p>
              <p class="card__text">'.$descripcion.'</p>
              <div class="card__tags__section">
                <button class="btn btn--block card__btn">Restuarant</button>
                <button class="btn btn--block card__btn">Comida</button>
                <button class="btn btn--block card__btn">Café</button>
              </div>
            </div>
          </div>
        </li>'; 
      }                
      sqlsrv_free_stmt($getUser);
      sqlsrv_close($conn);
    } catch (Exception $e) {
      echo("Error!");
    }   

?>  
               
      </ul>
    </div>
  </main>
  <!-- Footer-->
  <footer class="footer bg-black small text-center text-white-50">
    <div class="container px-4 px-lg-5">Copyright &copy; QBuscas.com</div>
  </footer>
  <!-- Bootstrap core JS-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Core theme JS-->
  <script src="js/scripts.js"></script>
  <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>