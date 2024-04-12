<?php
include("conexion.php");

// Verifica si el formulario ha sido enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Verifica que se envíen todos los datos requeridos
    if (!empty($_POST['name']) && !empty($_POST['phone']) && !empty($_POST['email']) && !empty($_POST['message'])) {
        // Recibe los datos del formulario
        $name = trim($_POST['name']);
        $phone = trim($_POST['phone']);
        $email = trim($_POST['email']);
        $message = trim($_POST['message']);

        // Inserta los datos en la base de datos
        $consulta = "INSERT INTO datos (nombre, telefono, email, mensaje) VALUES ('$name', '$phone', '$email', '$message')";
        
        if (mysqli_query($conex, $consulta)) {
            // Envía una respuesta exitosa al cliente
            http_response_code(200);
            echo "Gracias, tu mensaje ha sido enviado correctamente.";
        } else {
            // Envía una respuesta de error al cliente
            http_response_code(500);
            echo "Hubo un problema al enviar tu mensaje. Por favor, intenta nuevamente.";
        }

        // Cierra la conexión
        mysqli_close($conex);
    } else {
        // Envía una respuesta de error al cliente si los datos no son válidos
        http_response_code(400);
        echo "Por favor, completa todos los campos obligatorios.";
    }
}
?>