<!DOCTYPE html>
<html>
<head>
    <title>Mostrar Imágenes</title>
</head>
<body>
    <h1>Mostrar Imágenes</h1>

    <?php
    include 'functions/coneccion.php';

    // Establecer conexión con la base de datos
    $conn = sqlsrv_connect($serverName, $connectionOptions);

    if ($conn === false) {
        die(print_r(sqlsrv_errors(), true));
    }

    // Consultar las imágenes en la base de datos
    $sql = "SELECT nombre, imagen FROM imagen";
    $stmt = sqlsrv_query($conn, $sql);

    if ($stmt === false) {
        die(print_r(sqlsrv_errors(), true));
    }

    // Mostrar las imágenes
    while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
        $nombreImagen = $row['nombre'];
        $imagenBase64 = base64_encode($row['imagen']);
        echo '<h3>' . $nombreImagen . '</h3>';
        echo '<img src="data:image/jpeg;base64,' . $imagenBase64 . '"/>';
        echo '<br/><br/>';
    }

    sqlsrv_free_stmt($stmt);
    sqlsrv_close($conn);
    ?>

    <a href="index.html">Volver</a>
</body>
</html>
