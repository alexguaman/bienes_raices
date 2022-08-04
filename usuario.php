<?php 

require 'includes/config/database.php';

$db = conectarDB();

$email = 'correo@correo.com';
$password = "123456";

$passwordHash = password_hash($password, PASSWORD_BCRYPT);

$query = "INSERT INTO usuarios(email, password) values('${email}', '${passwordHash}')";

echo $query;

$resultado = mysqli_query($db, $query);

var_dump($resultado);

?>