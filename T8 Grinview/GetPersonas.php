<?php
$hostname='localhost';
$database='login';
$username='root';
$password='';

try {
    $con = new PDO("mysql:host=$hostname;dbname=$database",$username,$password);
} catch(PDOException $e) {
    $row['resultado']  = '1';
    $row['informacion']= 'Error DB';
    $row['mensaje']    = 'Error de conexión a la base de datos';
    $row['detalle']    = $e->getMessage();
}

$con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

try {
    $consultaSql = "select idUser,nombre,apellidoPaterno,apellidoMaterno,login from usuarios";
    $consulta = $con -> prepare($consultaSql);
    $consulta -> execute();
    $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);
    $consulta->closeCursor();

    $row['resultado']  = '0';
    $row['informacion']= 'OK';
    $row['mensaje']    = 'Se leyeron datos';
    $row['detalle']    = $resultado;

} catch(PDOException $e) {
    $row['resultado']  = '2';
    $row['informacion']= 'Error DB';
    $row['mensaje']    = 'Error de consulta a la base de datos';
    $row['detalle']    = $e->getMessage();
}

// echo json_encode($resultado);
echo json_encode($row);
?>
