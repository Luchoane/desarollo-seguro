<?php
// Datos proporcionados por el usuario
$nombre_usuario = $_GET['nombre'];

$conexion = mysqli_connect("localhost", "usuario", "contraseña", "basededatos");
$consulta = "SELECT * FROM usuarios WHERE nombre = '$nombre_usuario'";

// Ejecutar la consulta
$resultado = mysqli_query($conexion, $consulta);

// Comprobar si la consulta fue exitosa
if ($resultado) {
    // Procesar los resultados
    while ($fila = mysqli_fetch_assoc($resultado)) {
        echo "Nombre: " . $fila['nombre'] . "<br>";
        echo "Correo: " . $fila['correo'] . "<br>";
		echo "DNI: " . $fila['dni'] . "<br>";
    }
} else {
    // Mostrar un error si la consulta falla
    echo "Error en la consulta: " . mysqli_error($conexion);
}

// Cerrar la conexión
mysqli_close($conexion);
?>
