<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>eCommerce Home</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link rel="icon" href="https://www.svgrepo.com/show/36558/sell-product.svg">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <script src="https://cdn.tailwindcss.com"></script>
        <!-- FontAwesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    </head>

    <body class="font-sans antialiased dark:bg-gray-900 dark:text-white">
        <div class="bg-gray-50 text-black dark:bg-gray-900 dark:text-white">
            <div class="min-h-screen flex flex-col items-center justify-center">
                <div class="w-full max-w-7xl px-6 py-12">
                    <!-- Header -->
                    <header class="flex justify-between items-center py-6">
                        <div class="text-2xl font-bold text-[#FF2D20]">
                            <i class="fa fa-store"></i> My eCommerce
                        </div>

                        <nav class="flex space-x-4">
                            @if (Route::has('login'))
                                @auth
                                    <a href="{{ url('/dashboard') }}" class="px-4 py-2 text-white bg-[#FF2D20] rounded-md hover:bg-red-600">
                                        Dashboard
                                    </a>
                                @else
                                    <a href="{{ route('login') }}" class="px-4 py-2 text-white bg-[#FF2D20] rounded-md hover:bg-red-600">
                                        <i class="fas fa-sign-in-alt"></i> Log in
                                    </a>
                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}" class="px-4 py-2 text-white bg-gray-700 rounded-md hover:bg-gray-800">
                                            <i class="fas fa-user-plus"></i> Register
                                        </a>
                                    @endif
                                @endauth
                            @endif
                        </nav>
                    </header>

                    <!-- Main Content -->
                    <main class="text-center mt-10">
                        <h1 class="text-4xl font-bold mb-6">Bienvenido a mi Eccomerce con laravel!</h1>
                        <p class="text-lg mb-8 text-gray-500 dark:text-gray-300">
                            Descubre increibles productos 
                        </p>
                        <a href="{{ route('login') }}" class="px-6 py-3 text-white bg-[#FF2D20] rounded-md hover:bg-red-600">
                            Start Shopping <i class="fa fa-shopping-cart"></i>
                        </a>
                    </main>

                    <!-- Features -->
                    <section class="mt-16 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10">
                        <div class="text-center p-6 border rounded-lg">
                            <i class="fa fa-truck fa-3x mb-4 text-[#FF2D20]"></i>
                            <h3 class="text-xl font-semibold">Free Shipping</h3>
                            <p class="text-gray-500 dark:text-gray-300">On all orders over $50.</p>
                        </div>
                        <div class="text-center p-6 border rounded-lg">
                            <i class="fa fa-headset fa-3x mb-4 text-[#FF2D20]"></i>
                            <h3 class="text-xl font-semibold">24/7 Support</h3>
                            <p class="text-gray-500 dark:text-gray-300">We're here to help anytime.</p>
                        </div>
                        <div class="text-center p-6 border rounded-lg">
                            <i class="fa fa-money-bill-wave fa-3x mb-4 text-[#FF2D20]"></i>
                            <h3 class="text-xl font-semibold">Money Back Guarantee</h3>
                            <p class="text-gray-500 dark:text-gray-300">30 days to return your item.</p>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </body>
</html>
