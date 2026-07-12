<?php
include 'conexion.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    
    <title>Inicio - Sabores Naturales</title>
</head>
<body>
    <?php include 'header.php'?>

    <main id="main_content">
        <h1 class="titulo">Nuestros Productos</h1>

        <div id="galeria-grid">
            <?php 
                //preparar consulta
                $stmt = $pdo->query("SELECT * FROM PRODUCTOS WHERE ESTADO_DISPONIBLE = 1");
                $productos = $stmt->fetchAll(PDO::FETCH_ASSOC);

                //recorrer resultados
                foreach($productos as $producto):
            ?>
                <div class="image-container">
                    <img src="<?php echo htmlspecialchars($producto['imagen_url']);?>" alt="<?php echo htmlspecialchars($producto['nombre']);?>" width="200">
                    <div class="overlay">
                        <p><?php echo htmlspecialchars($producto['nombre']);?></p>
                        <p><?php echo number_format($producto['precio'], 2, ',', '.');?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </main>
</body>
</html>