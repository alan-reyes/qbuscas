<?php
include 'coneccion.php';
$conn = sqlsrv_connect($serverName, $connectionOptions);

if (!$conn) {
    die("Error de conexión: " . print_r(sqlsrv_errors(), true));
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombreNegocio = $_POST["nombreNegocio"];
    $alias = $_POST["alias"];
    $telefono = $_POST["telefono"];
    $correo = $_POST["correo"];
    $Caracteristica1 = $_POST["Caracteristica1"];
    $Caracteristica2 = $_POST["Caracteristica2"];
    $Caracteristica3 = $_POST["Caracteristica3"];
    $Caracteristica4 = $_POST["Caracteristica4"];
    $Caracteristica5 = $_POST["Caracteristica5"];
    $Descripcion = $_POST["Descripcion"];
    $categoria = $_POST["categoria"];
    //$query3= "INSERT into formulario2 (nombreNeg,alias,telefono,correo,caracteritica1,caracteritica2,caracteritica3,caracteritica4,caracteritica5,descripcion,categoria) values ('jair','halojair','2331054684','halojair117@gmial.com','color rojo','1 kilo','10 x 30','plastico', 'acero inoxidable', 'juguete bonito', 'turismo');";
    // 
    // Realizar la consulta para verificar si el correo existe en la tabla Usuarios
    $query2 = "INSERT into formulario2 (nombreNeg,alias,telefono,correo,caracteritica1,caracteritica2,caracteritica3,caracteritica4,caracteritica5,descripcion,categoria) values ('$nombreNegocio','$alias','$telefono','$correo','$Caracteristica1','$Caracteristica2','$Caracteristica3','$Caracteristica4', '$Caracteristica5', '$Descripcion', '$categoria')";
    //$query = "INSERT INTO Usuarios (nombre, apellido_materno, apellido_paterno, correo, nombre_usuario, clave, rol) VALUES ('$Nombre', '$apellido_materno', '$apellido_paterno', '$Correo', '$nombre_usuario', '$Contra', '$rol')";
    $stmt = sqlsrv_query($conn, $query2);


    
    //echo "registro exitoso limpieza de buffer 3";
    //header("Location: ../Login.php");
    //header("Location: ../Login.php?Correo=" . urlencode($Correo));

    //$redireccion = "../Login.php?Correo=" . urlencode($Correo) . "&Contra=" . urlencode($Contra);
    //header("Location: ../Login.php" . $redireccion);
    
    //$redireccion = "../Login.php?Correo=" . urlencode($Correo) . "&Contra=" . urlencode($Contra);
    //header("Location: " . $redireccion);
    //exit();
    
    //$redireccion = "../Login.php?Correo=" . urlencode($Correo) . "&Contra=" . urlencode($Contra);
    //ob_clean(); // Limpia el búfer de salida
    //header("Location: " . $redireccion);
    //exit();

    //$redireccion = $_SERVER['DOCUMENT_ROOT'] . "qbuscas.azurewebsites.net/Login.php?Correo=" . urlencode($Correo) . "&Contra=" . urlencode($Contra);
    //header("Location: " . $redireccion);
    //exit();

 



// Impresión de la línea de código JavaScript en la página
  
echo '<script>';
    echo 'alert("registro insertado");';
  //echo'alert(redireccion);';
  //echo 'window.location.href = '.$redireccion.';';
  echo 'var redireccion = "../Formulario.php";';


  //echo'alert(redireccion);';
  //echo 'window.location.href = '.$redireccion.';';
  echo 'window.location.href = redireccion;';
echo '</script>';


}
sqlsrv_close($conn);

