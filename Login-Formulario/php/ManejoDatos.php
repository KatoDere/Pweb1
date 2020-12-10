
<?php


$connect = new PDO("mysql:host=localhost;dbname=progweb", "root", "");

$method = $_SERVER['REQUEST_METHOD'];

if($method == 'GET')
{
 $data = array(
  ':nombre'   => "%" . $_GET['nombre'] . "%",
  ':apellido'     => "%" . $_GET['apellido'] . "%",
  ':usuario'    => "%" . $_GET['usuario'] . "%"
  ':contraseña'    => "%" . $_GET['contraseña'] . "%"
 );
 $query = "SELECT * FROM usuarios WHERE nombre LIKE :nombre AND apellido LIKE :apellido AND usuario LIKE :usuario AND contraseña LIKE :contraseña  ORDER BY id DESC";

 $statement = $connect->prepare($query);
 $statement->execute($data);
 $result = $statement->fetchAll();
 foreach($result as $row)
 {
  $output[] = array(
   'id'    => $row['id'],   
   'nombre'  => $row['nombre'],
   'apellido'   => $row['apellido'],
   'usuario'    => $row['usuario'],
   'contraseña'    => $row['contraseña']
     );
 }
 header("Content-Type: application/json");
 echo json_encode($output);
}

if($method == "POST")
{
 $data = array(
  ':nombre'  => $_POST['nombre'],
  ':apellido'  => $_POST["apellido"],
  ':usuario'    => $_POST["usuario"],
  'contraseña'    => $row['contraseña']
  
 );

 $query = "INSERT INTO usuarios (nombre, apellido, usuario,contraseña) VALUES (:nombre, :apellido, :usuario, :contraseña)";
 $statement = $connect->prepare($query);
 $statement->execute($data);
}

if($method == 'PUT')
{
 parse_str(file_get_contents("php://input"), $_PUT);
 $data = array(
  ':id'   => $_PUT['id'],
  ':nombre' => $_PUT['nombre'],
  ':apellido' => $_PUT['apellido'],
  ':usuario'   => $_PUT['usuario'],
  ':contraseña'   => $_PUT['contraseña']
 );
 $query = "
 UPDATE usuarios 
 SET nombre = :nombre, 
 apellido = :apellido, 
 usuario = :usuario, 
 contraseña = :contraseña,
 WHERE id = :id
 ";
 $statement = $connect->prepare($query);
 $statement->execute($data);
}

if($method == "DELETE")
{
 parse_str(file_get_contents("php://input"), $_DELETE);
 $query = "DELETE FROM usuarios WHERE id = '".$_DELETE["id"]."'";
 $statement = $connect->prepare($query);
 $statement->execute();
}

?>

