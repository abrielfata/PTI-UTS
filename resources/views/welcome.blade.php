<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kepstore</title>
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Font Awesome CDN for icons -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

    <style>
        .card {
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease-in-out;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>
<body class="bg-gray-100 dark:bg-gray-900 text-gray-900 dark:text-gray-100 antialiased">
    <div class="relative min-h-screen flex flex-col justify-center items-center hero-bg">

        @if (Route::has('login'))
            <div class="absolute top-6 right-6 space-x-4">
                @auth
                    <a href="{{ url('/dashboard') }}" class="px-6 py-3 bg-blue-600 text-white rounded-full hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 transition duration-300">
                        Dashboard
                    </a>
                @else
                    <a href="{{ route('login') }}" class="px-6 py-3 bg-gray-800 text-white rounded-full hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-gray-500 transition duration-300">
                        Log in
                    </a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 px-6 py-3 bg-green-600 text-white rounded-full hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500 transition duration-300">
                            Register
                        </a>
                    @endif
                @endauth
            </div>
        @endif

        <!-- Main Content -->
        <div class="text-center text-white px-6 py-12 rounded-xl backdrop-blur-lg bg-black/30 card">
            <h1 class="text-5xl font-bold mb-6">KEPSTORE</h1>
            <p class="text-xl mb-8 opacity-80 container mx-auto">
                Kami adalah kelompok dinamis yang penuh semangat dengan apa yang kami kerjakan dan 
                berdedikasi untuk memberikan hasil terbaik bagi klien kami.
            </p>
            
            <!-- Social Media Links -->
            <div class="flex justify-center space-x-6 mb-8">
                <a href="https://shopee.co.id/kepstore?entryPoint=ShopBySearch&searchKeyword=kepstore" target="_blank" class="text-white hover:text-blue-500">
                    <i class="fab fa-shopify text-3xl"></i> Shopee
                </a>
                <a href="https://www.tiktok.com/@kepstore" target="_blank" class="text-white hover:text-blue-500">
                    <i class="fab fa-tiktok text-3xl"></i> TikTok
                </a>
                <a href="https://www.instagram.com/kepstore/" target="_blank" class="text-white hover:text-blue-500">
                    <i class="fab fa-instagram text-3xl"></i> Instagram
                </a>
            </div>
        </div>

        <!-- Footer -->
        <footer class="absolute bottom-6 text-center text-white text-sm opacity-70">
            <h2 class="bold">NIM : 10122219 | Nama : Abriel Fata Saptaji | IF-6</h2>
            &copy; {{ date('Y') }} Kepstore. All rights reserved.
        </footer>
    </div>
</body>
</html>
