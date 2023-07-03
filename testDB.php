<?php
    function OpenConnection()
    {
    $serverName = "qbuscas.database.windows.net";
    $connectionOptions = array("Database"=>"qbuscas",
    "Uid"=>"qbuscas", "PWD"=>"f#23.bq00");
    $conn = sqlsrv_connect($serverName, $connectionOptions);
    if($conn == false)
    die(FormatErrors(sqlsrv_errors()));
    
    return $conn;
    }
    
    function ReadData()
    {
    try
    {
    $conn = OpenConnection();
    $tsql = "SELECT * FROM Usuarios";
    $getProducts = sqlsrv_query($conn, $tsql);
    if ($getProducts == FALSE)
    die(FormatErrors(sqlsrv_errors()));
    $productCount = 0;
    while($row = sqlsrv_fetch_array($getProducts, SQLSRV_FETCH_ASSOC))
    {
    echo($row['nombre']);
    echo("<br />");
    $productCount++;
    }
    sqlsrv_free_stmt($getProducts);
    sqlsrv_close($conn);
    }
    catch(Exception $e)
    {
    echo("Error!");
    }
    }

    ReadData();
?>