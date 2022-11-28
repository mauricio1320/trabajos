<?php 
/* Importar la base de datos */
require 'includes/app.php';
$db = conectar();


$email = "admin@admin.com";
$password = "1234";

$passwordHash = password_hash($password,PASSWORD_BCRYPT);
echo $passwordHash;

//Consulta
$query = "INSERT INTO usuario (email,password) VALUES ('$email', '$passwordHash')";
echo $query;

$resultado = mysqli_query($db,$query);
exit();

