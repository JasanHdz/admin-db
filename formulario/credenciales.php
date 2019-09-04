<?php
// credenciales
$host = "localhost:3306";
$dbname = "prueba";
$user = "root";
$password = "hasanazael";

// Conexión a la base de datos
try {
  echo "Se hizo la conexion";
  // $pdo = new PDO("mysql:$host$dbname", $user, $password);
  $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(Exception $e ) {
  echo $e->getMessage();
}

// $pdo = new PDO(«mysql:host=localhost;dbname=database», ‘username’, ‘password’);
