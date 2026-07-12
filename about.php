<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Sobre Nosotros - Sabores Naturales</title>
</head>

<body>

    <?php include 'header.php' ?>

    <main class="contenedor-info">

        <div class="hero-imagen-info">
            <img src="assets/heroImage.png" alt="Frutos de Sabores Naturales">
        </div>

        <section class="texto-institucional">
            <h1 class="titulo">Nuestra Filosofía</h1>

            <div class="bloque-texto">
                <h2>Calidad y Frescura en tu día a día</h2>
                <p>
                    En Sabores Naturales creemos que alimentarse bien no debería ser complicado.
                    Nacimos con el objetivo de acercar a nuestra comunidad opciones prácticas que se adapten a un estilo de vida equilibrado.
                    Seleccionamos cuidadosamente nuestros frutos y los congelamos en su punto justo para conservar todos sus nutrientes y frescura.
                </p>
            </div>

            <div class="bloque-texto">
                <h2>¿Cómo trabajamos?</h2>
                <p>
                    Somos un proyecto radicado en <strong> Moreno, Zona Oeste | La reja, Francisco Alvarez | Merlo, Zona Oeste </strong>. 
                    Para nosotros, la calidad del producto final lo es todo. 
                    Por eso, para garantizar que la cadena de frío se mantenga intacta desde nuestro freezer hasta tu mesa, 
                    trabajamos con una política exclusiva de <strong>retiro en persona</strong>. 
                    No realizamos envíos, lo que nos permite asegurarnos de que te lleves el producto en perfectas condiciones.
                </p>
            </div>
        </section>

        <section class="llamado-accion">
            <h3>¿Listo para probar nuestros sabores?</h3>
            <div class="botones-accion">
                <a href="index.php" class="btn-primario">Ver Productos</a>
                <a href="contacto.php" class="btn-secundario">Hacer una Consulta</a>
            </div>
        </section>
    </main>

    <footer class="footer-moderno">
        <p>&copy; <?php echo date('Y'); ?> Sabores Naturales. Todos los derechos reservados.</p>
    </footer>

</body>
</html>