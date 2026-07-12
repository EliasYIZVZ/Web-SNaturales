<?php
include 'conexion.php';
include 'header.php';
?>

<main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
    
    <div class="text-center mb-12">
        <h1 class="text-4xl font-bold text-carbon mb-4">Nuestros Productos</h1>
        <p class="text-lg text-gray-500">Frescura y calidad directa a tu mesa</p>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
        
        <?php
        // preparar consulta
        $stmt = $pdo->query("SELECT * FROM PRODUCTOS WHERE ESTADO_DISPONIBLE = 1");
        $productos = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // recorrer resultados
        foreach ($productos as $producto):
        ?>
            <div class="bg-white rounded-2xl shadow-sm hover:shadow-xl transition-shadow duration-300 overflow-hidden group flex flex-col border border-gray-100">
                
                <div class="w-full overflow-hidden bg-gray-100 relative">
                    <img src="<?php echo htmlspecialchars($producto['imagen_url']); ?>" 
                         alt="<?php echo htmlspecialchars($producto['nombre']); ?>" 
                         class="h-64 w-full object-cover group-hover:scale-105 transition-transform duration-500 ease-in-out">
                </div>
                
                <div class="p-6 text-center flex-grow flex flex-col justify-between">
                    <div>
                        <h3 class="text-lg font-semibold text-carbon mb-1">
                            <?php echo htmlspecialchars($producto['nombre']); ?>
                            <p class="text-sm text-gray-500 mb-3 h-10 overflow-hidden">
                                <?php echo htmlspecialchars($producto['descripcion']); ?>
                            </p>
                        </h3>
                    </div>

                    
                    <div class="mt-4">
                        <p class="text-2xl font-bold text-frambuesa mb-4">
                            $<?php echo number_format($producto['precio'], 2, ',', '.'); ?>
                        </p>
                        
                        <a href="contacto.php" class="inline-block w-full bg-avena hover:bg-menta hover:text-white text-carbon font-medium py-2 px-4 rounded-xl transition-colors border border-gray-200 hover:border-transparent">
                            Consultar
                        </a>
                    </div>
                </div>
                
            </div>
        <?php endforeach; ?>
        
    </div>
</main>

<footer class="bg-white border-t border-gray-200 mt-12 py-8 text-center text-gray-500 text-sm">
    <p>&copy; <?php echo date('Y'); ?> Sabores Naturales. Todos los derechos reservados.</p>
</footer>

</body>
</html>