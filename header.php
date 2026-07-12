<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
                theme: {
                    extend: {
                        colors: {
                            avena: '#FAFAFA',
                            carbon: '#333333',
                            frambuesa: '#D9385E',
                            menta: '#81C784',
                        },
                        fontFamily: {
                            sans: ['Inter', 'sans-serif'],
                        }
                    }
                }
        }
    </script>
    <title>Sabores Naturales</title>
</head>

<body class="bg-avena text-carbon font-sans antialiased">
    <header class="bg-white shadow-sm">
        <div class="bg-frambuesa text-white text-sm text-center py-2">
            <p class="font-medium">WhatsApp Ventas: <span class="font-bold">1130790385</span></p>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <div class="flex-shrink-0">
                    <a href="index.php">
                        <img class="h-12 w-auto" src="assets/logo.png" alt="Sabores Naturales">
                    </a>
                </div>

                <nav class="hidden md:flex space-x-8">
                    <a href="index.php" class="text-gray-600 hover:text-frambuesa transition-colors font-medium">Inicio</a>
                    <a href="contacto.php" class="text-gray-600 hover:text-frambuesa transition-colors font-medium">Contacto</a>
                    <a href="about.php" class="text-gray-600 hover:text-frambuesa transition-colors font-medium">Sobre Nosotros</a>
                </nav>
            </div>
        </div>
    </header>
