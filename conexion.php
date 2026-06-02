<?php
// 1. Definimos las credenciales de tu servidor local
$servidor = "127.0.0.1";
$usuario = "root";
$contrasena = "";
$base_de_datos = "tasaciones";
$puerto = 3307;

// 2. Creamos la conexión usando la clase mysqli
$conexion = new mysqli($servidor, $usuario, $contrasena, $base_de_datos, $puerto);

// 3. Verificamos si hubo algún error en la conexión
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

// Nota: Si quieres probar que funciona, puedes quitar las dos barras (//) de la línea de abajo. 
echo "¡Conexión exitosa a la base de datos!";
?>