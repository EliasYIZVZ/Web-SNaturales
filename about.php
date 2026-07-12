<?php include 'header.php' ?>

    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 md:py-16">

        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-carbon mb-4">Nuestra Filosofía</h1>
            <p class="text-xl text-gray-500">Conocé quiénes somos y cómo trabajamos</p>
        </div>

        <div class="w-full mb-16 rounded-3xl overflow-hidden shadow-lg border border-gray-100">
            <img src="assets/heroImage.png" alt="Frutos de Sabores Naturales" class="w-full h-64 md:h-96 object-cover transform hover:scale-105 transition-transform duration-700">
        </div>

        <section class="grid grid-cols-1 md:grid-cols-2 gap-8 md:gap-12 mb-16">
            
            <div class="bg-white p-8 rounded-2xl shadow-sm border border-gray-100 hover:shadow-md transition-shadow">
                <div class="w-12 h-12 bg-frambuesa text-white rounded-xl flex items-center justify-center mb-6 shadow-md">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg>
                </div>
                
                <h2 class="text-2xl font-bold text-carbon mb-4">Calidad y Frescura en tu día a día</h2>
                <p class="text-gray-600 leading-relaxed text-lg">
                    En Sabores Naturales creemos que alimentarse bien no debería ser complicado.
                    Nacimos con el objetivo de acercar a nuestra comunidad opciones prácticas que se adapten a un estilo de vida equilibrado.
                    Seleccionamos cuidadosamente nuestros frutos y los congelamos en su punto justo para conservar todos sus nutrientes y frescura.
                </p>
            </div>

            <div class="bg-white p-8 rounded-2xl shadow-sm border border-gray-100 hover:shadow-md transition-shadow">
                <div class="w-12 h-12 bg-menta text-white rounded-xl flex items-center justify-center mb-6 shadow-md">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                </div>
                
                <h2 class="text-2xl font-bold text-carbon mb-4">¿Cómo trabajamos?</h2>
                <p class="text-gray-600 leading-relaxed text-lg">
                    Somos un proyecto radicado en <strong class="text-frambuesa">Moreno, La Reja, Francisco Álvarez y Merlo (Zona Oeste)</strong>. 
                    Para nosotros, la calidad del producto final lo es todo. 
                    Por eso, para garantizar que la cadena de frío se mantenga intacta desde nuestro freezer hasta tu mesa, 
                    trabajamos con una política exclusiva de <strong class="text-frambuesa">retiro en persona</strong>. 
                    No realizamos envíos, lo que nos permite asegurarnos de que te lleves el producto en perfectas condiciones.
                </p>
            </div>

        </section>

        <section class="bg-carbon rounded-3xl p-10 text-center text-white shadow-xl">
            <h3 class="text-3xl font-bold mb-4">¿Listo para probar nuestros sabores?</h3>
            <p class="text-gray-300 mb-8 text-lg">Conocé nuestra variedad de productos o consultanos para armar tu pedido ideal.</p>
            
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="index.php" class="bg-frambuesa hover:bg-red-700 text-white font-bold py-3 px-8 rounded-xl transition-colors shadow-md">Ver Productos</a>
                <a href="contacto.php" class="bg-white hover:bg-gray-100 text-carbon font-bold py-3 px-8 rounded-xl transition-colors shadow-md">Hacer una Consulta</a>
            </div>
        </section>

    </main>

    <footer class="bg-white border-t border-gray-200 mt-12 py-8 text-center text-gray-500 text-sm">
        <p>&copy; <?php echo date('Y'); ?> Sabores Naturales. Todos los derechos reservados.</p>
    </footer>

</body>
</html>