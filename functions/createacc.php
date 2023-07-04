<?php
include 'coneccion.php';
$conn = sqlsrv_connect($serverName, $connectionOptions);

if (!$conn) {
    die("Error de conexión: " . print_r(sqlsrv_errors(), true));
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener el valor del correo enviado desde el formulario
    $Nombre = $_POST["Nombre"];
    $apellido_materno = $_POST["apellido_materno"];
    $apellido_paterno = $_POST["apellido_paterno"];
    $Correo = $_POST["Correo"];
    $nombre_usuario = $_POST["nombre_usuario"];
    $Contra = $_POST["contra"];
    $rol = $_POST["rol"];


    // Realizar la consulta para verificar si el correo existe en la tabla Usuarios
    $query = "INSERT INTO Usuarios (nombre, apellido_materno, apellido_paterno, correo, nombre_usuario, clave, rol) VALUES ('$Nombre', '$apellido_materno', '$apellido_paterno', '$Correo', '$nombre_usuario', '$Contra', '$rol')";
    $stmt = sqlsrv_query($conn, $query);


    
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


   

  

}
sqlsrv_close($conn);
?>
