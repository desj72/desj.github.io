<?php
// Incluye el código de conexión a la base de datos
include("conexion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $asunto = $_POST['asunto'];
    $mensaje = $_POST['mensaje'];

    $sqlgrabar = "INSERT INTO contacto (nombre, correo, asunto, mensaje) VALUES ('$nombre', '$correo', '$asunto', '$mensaje')";

    if (mysqli_query($conexion, $sqlgrabar)) {
        echo "<script>alert('Mensaje enviado con éxito: $nombre'); window.location='index.php'</script>";
    } else {
        echo "Error al insertar el registro: " . mysqli_error($conexion);
    }
}
?>
