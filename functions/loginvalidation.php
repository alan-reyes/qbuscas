<?php
include 'coneccion.php';
$conn = sqlsrv_connect($serverName, $connectionOptions);


if (!$conn) {
    die("Error de conexión: " . print_r(sqlsrv_errors(), true));
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener el valor del correo enviado desde el formulario
    $Correo = $_POST["Correo"];
    $Contra = $_POST["contra"];

    // Realizar la consulta para verificar si el correo existe en la tabla Usuarios
    $query = "SELECT COUNT(*) AS count FROM Usuarios WHERE Correo = '$Correo' and clave = '$Contra'";
    $query2= "SELECT ID from Usuarios WHERE Correo = '$Correo' and clave = '$Contra'";
    $params = array($Correo);
    $stmt = sqlsrv_query($conn, $query, $params);    
    if ($stmt === false) {
        die("Error en la consulta: " . print_r(sqlsrv_errors(), true));
    }
   // $id = sqlsrv_get_field($stmt, 0);
    $getID = sqlsrv_query($conn, $query2);
    $id = 0;

    if ($getID == FALSE)
    die(FormatErrors(sqlsrv_errors()));                
    while($row = sqlsrv_fetch_array($getID, SQLSRV_FETCH_ASSOC)){
        $id = $row['id'];                     
    }                
    sqlsrv_free_stmt($getID);




    $row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC);
    $count = $row['count'];
    echo $count;
    // Cerrar la conexión
    sqlsrv_close($conn);

    if ($count > 0) {
        echo '<script>';
        echo 'var id = "'.$id.'";';
        echo 'alert(id)';
        echo 'var idCodificado = encodeURIComponent(id);';
        echo 'var redireccion = "../index.php?id=" + idCodificado;';
        echo 'window.location.href = redireccion;';
        //echo 'window.location.href = "../index.php";';
        echo '</script>';

//desde aca es nuevo
        
        
        
        
          //echo'alert(redireccion);';
          //echo 'window.location.href = '.$redireccion.';';
         // echo 'window.location.href = redireccion;';





    } else {
        echo '<script>';
        echo 'window.location.href = "../Login.php";';
        echo '</script>';
    }
}
sqlsrv_close($conn);
?>