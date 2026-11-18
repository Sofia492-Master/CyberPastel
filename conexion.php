<?php
// Datos de conexión a tu base de datos local
$host = "localhost";
    $user = "root";          // Usuario por defecto en XAMPP
    $password = "";          // Contraseña por defecto en XAMPP (usualmente vacía)
    $dbname = "CyberPastel_Local_Xampp"; // Reemplaza esto con el nombre exacto de tu base de datos en MySQL

try {
    // Creando la conexión con PDO
    $conexion = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $password);
    
    // Configurar el modo de error de PDO para detectar fallos fácilmente
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Descomenta la siguiente línea solo para probar que conectó con éxito
    // echo "¡Conexión exitosa a la base de datos!";

} catch (PDOException $e) {
    // Si hay un error en la conexión, se detiene la ejecución y se muestra el mensaje
    die("Error de conexión a la base de datos: " . $e->getMessage());
}
?>