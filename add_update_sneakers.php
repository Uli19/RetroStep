<?php
$host = "localhost";
$usuario = "root";
$contraseña = "psyduck56";
$base_de_datos = "retrostepdb";

// Establecer conexión a la base de datos
$conexion = new mysqli($host, $usuario, $contraseña, $base_de_datos);

// Verificar la conexión
if ($conexion->connect_error) {
    die("Error de conexión a la base de datos: " . $conexion->connect_error);
}

// Recibir datos del formulario
$modelo = $_POST["Modelo"];
$marca = $_POST["Marca"];
$precio = $_POST["Precio"];
$stock = $_POST["Stock"];
$size = $_POST["Size"];

// Preparar la consulta SQL
$sql = "INSERT INTO sneakers (Marca, Modelo, Precio, Stock, Size) VALUES (?, ?, ?, ?, ?)";

if ($stmt = $conexion->prepare($sql)) {
    // Vincular los parámetros
    $stmt->bind_param("ssdii", $marca, $modelo, $precio, $stock, $size);

    // Ejecutar la consulta
    if ($stmt->execute()) {
        echo "Los datos se han agregado correctamente.";
    } else {
        echo "Error al agregar los datos: " . $stmt->error;
    }

    // Cerrar la consulta
    $stmt->close();
} else {
    echo "Error en la preparación de la consulta: " . $conexion->error;
}

// Cerrar la conexión a la base de datos
$conexion->close();
?>
