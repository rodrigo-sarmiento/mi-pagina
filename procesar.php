<?php
// 1. Llamamos a tu archivo de conexión para abrir el puente a la base de datos
include 'conexion.php';

// 2. Verificamos que el formulario se haya enviado correctamente
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // 3. Capturamos los datos que escribió el usuario en el formulario
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $mail = $_POST['mail'];
    $telefono = $_POST['telefono'];
    $tipo = $_POST['tipo'];
    $operacion = $_POST['operacion'];
    $ambientes = $_POST['ambientes'];
    $localidad = $_POST['localidad'];
    $barrio = $_POST['barrio'];
    $direccion = $_POST['direccion'];
    $superficie_total = $_POST['superficie_total'];
    $superficie_cubierta = $_POST['superficie_cubierta'];

    // 4. Armamos la instrucción SQL para insertar estos datos en la tabla "tasaciones"
    $sql = "INSERT INTO tasaciones (nombre, apellido, mail, telefono, tipo, operacion, ambientes, localidad, barrio, direccion, superficie_total, superficie_cubierta) 
            VALUES ('$nombre', '$apellido', '$mail', '$telefono', '$tipo', '$operacion', '$ambientes', '$localidad', '$barrio', '$direccion', $superficie_total, $superficie_cubierta)";

    // 5. Ejecutamos la instrucción y comprobamos si fue un éxito
    if ($conexion->query($sql) === TRUE) {
        echo "<h2>¡Excelente! La solicitud de tasación se ha guardado correctamente.</h2>";
        echo "<a href='index.html'>← Volver al formulario</a>";
    } else {
        echo "Hubo un error al guardar los datos: " . $conexion->error;
    }

    // 6. Cerramos la conexión por prolijidad
    $conexion->close();
}
?>
