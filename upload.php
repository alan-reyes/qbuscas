<?php
include 'functions/coneccion.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombreImagen = $_FILES["imagen"]["name"];
    $imagenTemp = $_FILES["imagen"]["tmp_name"];

    // Verificar si se seleccionó una imagen
    if ($nombreImagen != "") {
        // Leer el contenido del archivo temporal
        $imagenContenido = file_get_contents($imagenTemp);

        // Establecer conexión con la base de datos
        $conn = sqlsrv_connect($serverName, $connectionOptions);

        if ($conn === false) {
            die(print_r(sqlsrv_errors(), true));
        }

        // Preparar la consulta SQL con la función CONVERT
        $sql = "INSERT INTO imagen (nombre, imagen) VALUES (?, CONVERT(varbinary(max), ?))";
        $params = array($nombreImagen, $imagenContenido);

        // Ejecutar la consulta
        $stmt = sqlsrv_query($conn, $sql, $params);

        if ($stmt === false) {
            die(print_r(sqlsrv_errors(), true));
        }

        sqlsrv_free_stmt($stmt);
        sqlsrv_close($conn);

        echo "Imagen subida exitosamente a la base de datos.";
    } else {
        echo "Por favor, selecciona una imagen.";
    }
}
?>

