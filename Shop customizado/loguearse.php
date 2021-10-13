<?php

error_reporting(E_ALL);
ini_set ('display_errors', 1);

$data = $_POST;

//Conexión Base de Datos
$enlace = mysqli_connect("localhost", "root", "", "curso backend");
if (!$enlace) {
    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
    echo "error de depuración: " . mysqli_connect_errno() . PHP_EOL;
    echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
    exit; 
  }
//Validación de usuario y la contraseña
$sql = "SELECT * FROM usuarios WHERE dni= '".$data["dni"]."'"; 
$result = mysqli_query($enlace, $sql);

if (mysqli_num_rows($result) > 0) {
        // output data of each row
while($usuario = mysqli_fetch_assoc($result)) {
    echo "Dni: " . $usuario["dni"]. " - Nombre: " . $usuario["nombre"]. " " . $usuario["apellido"]. "<br>";
    $hash = $usuario['password'];

    if (password_verify($data['password'], $hash)) {
      echo '¡La contraseña es válida!';
  } else {
      echo 'La contraseña no es válida :/';
  }

  }
} else {
  echo 'Su usuario no se encuentra registrado.';
}






?>