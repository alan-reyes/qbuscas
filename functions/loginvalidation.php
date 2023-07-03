<?php
$Correo = $_POST['Correo'];
include 'coneccion.php';
$conn = sqlsrv_connect($serverName, $connectionOptions);


if (!$conn) {
    die("Error de conexión: " . print_r(sqlsrv_errors(), true));
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener el valor del correo enviado desde el formulario
    $Correo = $_POST["Correo"];

    // Realizar la consulta para verificar si el correo existe en la tabla Usuarios
    $query = "SELECT COUNT(*) AS count FROM Usuarios WHERE Correo = '$Correo'";
    $params = array($Correo);
    $stmt = sqlsrv_query($conn, $query, $params);

    if ($stmt === false) {
        die("Error en la consulta: " . print_r(sqlsrv_errors(), true));
    }

    $row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC);
    $count = $row['count'];
    echo $count;
    // Cerrar la conexión
    sqlsrv_close($conn);

    if ($count > 0) {
        header("Location: ../index.php");
        exit();
    } else {
        header("Location: ../Login.php");
        exit();

    }
}
?>