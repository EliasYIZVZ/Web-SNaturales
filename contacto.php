<?php
include 'conexion.php';

//variable para mostrar mensajes de exito o error al usuario
$mensaje_estado = "";

//comprobar el envio de formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = htmlspecialchars(trim($_POST['nombre']));
    $apellido = htmlspecialchars(trim($_POST['apellido']));
    $telefono = htmlspecialchars(trim($_POST['telefono']));
    $email = htmlspecialchars(trim($_POST['email']));
    $mensaje = htmlspecialchars(trim($_POST['mensaje']));

    if (!empty($nombre) && !empty($apellido) && !empty($telefono) && !empty($email) && !empty($mensaje)) {
        try {
            $sql = "INSERT INTO contactos (nombre, apellido, telefono, email, mensaje)
                    VALUES (:nombre, :apellido, :telefono, :email, :mensaje)";

            $stmt = $pdo->prepare($sql);

            $stmt->execute([
                ':nombre' => $nombre,
                ':apellido' => $apellido,
                ':telefono' => $telefono,
                ':email' => $email,
                ':mensaje' => $mensaje
            ]);

            $mensaje_estado = "<div class=alerta exito>¡Gracias $nombre! Tu mensaje fue enviado y guardado correctamente. Te contactaremos pronto.</div>";
        } catch (PDOException  $e) {
            $mensaje_estado = "<div class='alerta error'>Hubo un problema al guardar el mensaje. Intenta nuevamente.</div>";
        } 
    } else {
            $mensaje_estado = "<div class='alerta error'>Por favor, completa todos los campos obligatorios.</div>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto - Sabores Naturales</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="header">
        <a href="index.php"><img src='assets/logo.png' alt="Sabores Naturales" width="200"></a>
        <nav class="menu-principal">
            <a href="index.php">Inicio</a>
            <a href="contacto.php">Contacto</a>
            <a href="about.php">Sobre nosotros</a>
        </nav>
    </header>

    <main class="contenedor-contacto">
        <section class="info-empresa">
            <h2>Comunicate con nosotros</h2>
            <p>Estamos para responder todas tus dudas y tomar tus pedidos.</p>
            <div class="contacto-directo">
                <p><strong>Telefono / WhatsApp:</strong> +54 1130790385</p>
                <p><strong>Email:</strong> info@saboresnaturales.com</p>
            </div>
        </section>

        <section class="formulario-seccion">
            <?php echo $mensaje_estado; ?>
            <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"])?>" method="POST" id="formContacto" class="form-contacto">
                <div class="grupo-input">
                    <label for="nombre">Nombre</label>
                    <input type="text" id="nombre" name="nombre" required placeholder="Tu nombre">
                </div>
                <div class="grupo-input">
                    <label for="apellido">Apellido</label>
                    <input type="text" id="apellido" name="apellido" required placeholder="Tu apellido">
                </div>

                <div class="grupo-input">
                    <label for="telefono">Número de Teléfono</label>
                    <input type="tel" id="telefono" name="telefono" required placeholder="Ej: 11 2345 6789">
                </div>

                <div class="grupo-input">
                    <label for="email">Correo Electrónico</label>
                    <input type="email" id="email" name="email" required placeholder="tuemail@ejemplo.com">
                </div>

                <div class="grupo-input">
                    <label for="mensaje">Mensaje de consulta</label>
                    <textarea style="resize: none;" id="mensaje" name="mensaje" rows="5" required placeholder="Escribe tu consulta aquí..."></textarea>
                </div>

                <button type="submit" class="btn-enviar">Enviar Mensaje</button>

            </form>
        </section>
    </main>
    
    <script>
        //valida length de telefono
        document.getElementById('formContacto').addEventListener('submit', function(evento){
            let telefono = document.getElementById('telefono').value;
            if(telefono.length != 10 ){
                alert("Por favor, ingresa un número de teléfono válido.");
                evento.preventDefault();
            }
        });
            

    </script>
</body>
</html>