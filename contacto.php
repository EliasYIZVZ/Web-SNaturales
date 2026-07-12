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
<?php include 'header.php'; ?>
<main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">

    <div class="bg-white rounded-2xl shadow-sm overflow-hidden flex flex-col md:flex-row">

        <section class="bg-frambuesa text-white p-10 md:w-2/5 flex flex-col justify-center">
            <h2 class="text-3xl font-bold mb-4">Comunicate con nosotros</h2>
            <p class="text-white text-opacity-90 mb-8 leading-relaxed">
                Estamos para responder todas tus dudas y tomar tus pedidos.
                Combiná nuestras opciones y armá los pedidos que mejor se adapten a tus necesidades.
            </p>

            <div class="space-y-6">
                <div>
                    <p class="text-sm text-white text-opacity-70 uppercase tracking-wider font-semibold">Teléfono / WhatsApp</p>
                    <p class="text-xl font-medium mt-1">+54 1130790385</p>
                </div>
                <div>
                    <p class="text-sm text-white text-opacity-70 uppercase tracking-wider font-semibold">Email</p>
                    <p class="text-xl font-medium mt-1">info@saboresnaturales.com</p>
                </div>
            </div>
        </section>

        <section class="p-10 md:w-3/5">

            <?php echo $mensaje_estado; ?>

            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" id="formContacto" class="space-y-6">

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                    <div>
                        <label for="nombre" class="block text-sm font-medium text-carbon mb-1">Nombre</label>
                        <input type="text" id="nombre" name="nombre" required placeholder="Tu nombre"
                            class="w-full px-4 py-2 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-frambuesa focus:border-transparent transition-all">
                    </div>
                    <div>
                        <label for="apellido" class="block text-sm font-medium text-carbon mb-1">Apellido</label>
                        <input type="text" id="apellido" name="apellido" required placeholder="Tu apellido"
                            class="w-full px-4 py-2 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-frambuesa focus:border-transparent transition-all">
                    </div>
                </div>

                <div>
                    <label for="telefono" class="block text-sm font-medium text-carbon mb-1">Número de Teléfono</label>
                    <input type="tel" id="telefono" name="telefono" required placeholder="Ej: 1123456789"
                        class="w-full px-4 py-2 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-frambuesa focus:border-transparent transition-all">
                </div>

                <div>
                    <label for="email" class="block text-sm font-medium text-carbon mb-1">Correo Electrónico</label>
                    <input type="email" id="email" name="email" required placeholder="tuemail@ejemplo.com"
                        class="w-full px-4 py-2 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-frambuesa focus:border-transparent transition-all">
                </div>

                <div>
                    <label for="mensaje" class="block text-sm font-medium text-carbon mb-1">Mensaje de consulta</label>
                    <textarea style="resize: none;" id="mensaje" name="mensaje" rows="4" required placeholder="Escribe tu consulta aquí..."
                        class="w-full px-4 py-2 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-frambuesa focus:border-transparent transition-all"></textarea>
                </div>

                <button type="submit" class="w-full bg-carbon hover:bg-black text-white font-bold py-3 px-4 rounded-lg transition-colors shadow-md">
                    Enviar Mensaje
                </button>

            </form>
        </section>
    </div>
</main>

<script>
    // Valida length de telefono
    document.getElementById('formContacto').addEventListener('submit', function(evento) {
        let telefono = document.getElementById('telefono').value;
        if (telefono.length != 10) {
            alert("Por favor, ingresa un número de teléfono válido (10 dígitos).");
            evento.preventDefault();
        }
    });
</script>
</body>

</html>