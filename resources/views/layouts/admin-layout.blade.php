<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tailwind Admin Template</title>
    <meta name="author" content="David Grzyb">
    <meta name="description" content="">

    <!-- Tailwind -->
    <link href="https://unpkg.com/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Karla:400,700&display=swap');
        .font-family-karla { font-family: karla; }
        .bg-sidebar { background: #FFD400; }
        .cta-btn { color: black; }
        .upgrade-btn { background: #1947ee; }
        .upgrade-btn:hover { background: #0038fd; }
        .active-nav-link { background :white}
        .nav-item:hover { background: white }
        .account-link:hover { background: #3d68ff; }
    </style>
</head>
<body class="bg-gray-100 font-family-karla flex">

    <aside class="relative bg-sidebar h-screen w-64 hidden sm:block shadow-xl">
        <div class="p-6">
            <a href="{{route("dashboard")}}" class="text-black text-3xl font-semibold uppercase hover:text-white">Admin</a>
            
        </div>
        <nav class="text-black text-base font-semibold pt-3">
            <a href="{{route("dashboard")}}" class="{{(request()->routeIs('dashboard'))? 'active-nav-link' :''}} rounded-l-full flex items-center text-black py-4 pl-6 nav-item">
                <i class="fas fa-tachometer-alt mr-3"></i>
                Dashboard
            </a>
            <a href="{{route("akun")}}" class="{{(request()->routeIs('akun'))? 'active-nav-link' :''}} rounded-l-full flex items-center text-black py-4 pl-6 nav-item">
                <i class="fas fa-users mr-3"></i>
                Akun
            </a>
            <a href="{{route("pelanggan")}}" class="{{(request()->routeIs('pelanggan'))? 'active-nav-link' :''}} rounded-l-full flex items-center text-black py-4 pl-6 nav-item">
                <i class="fas fa-user-tag mr-3"></i>
                Pelanggan
            </a>
            <a href="{{route("pembelian")}}" class="{{(request()->routeIs('pembelian'))? 'active-nav-link' :''}} rounded-l-full flex items-center text-black py-4 pl-6 nav-item">
                <i class="fas fa-shopping-bag mr-3"></i>
                Pembelian
            </a>
            <a href="{{route("produk")}}" class="{{(request()->routeIs('produk'))? 'active-nav-link' :''}} rounded-l-full flex items-center text-black py-4 pl-6 nav-item">
                <i class="fas fa-tablet-alt mr-3"></i>
                Produk
            </a>
        </nav>
    </aside>

    <div class="relative w-full flex flex-col h-screen overflow-y-hidden">
        <!-- Desktop Header -->
        <header class="w-full items-center bg-white py-2 px-6 hidden sm:flex">
            <div class="w-1/2"></div>
            <div x-data="{ isOpen: false }" class="relative w-1/2 flex justify-end">
                <button @click="isOpen = !isOpen" class="realtive z-10 w-12 h-12 rounded-full overflow-hidden border-4 border-gray-400 hover:border-gray-300 focus:border-gray-300 focus:outline-none">
                    <img src="https://source.unsplash.com/uJ8LNVCBjFQ/400x400">
                </button>
                <button x-show="isOpen" @click="isOpen = false" class="h-full w-full fixed inset-0 cursor-default"></button>
                <form method="POST" action="{{route('logout')}}" x-show="isOpen" class="absolute w-32 bg-white rounded-lg shadow-lg py-2 mt-16">
                    @csrf
                    <button type="submit" class="block px-4 py-2 account-link hover:text-white">Sign Out</button>
                </form>
            </div>
        </header>

        <!-- Mobile Header & Nav -->
        <header x-data="{ isOpen: false }" class="w-full bg-sidebar py-5 px-6 sm:hidden">
            <div class="flex items-center justify-between">
                <a href="index.html" class="text-white text-3xl font-semibold uppercase hover:text-gray-300">Admin</a>
                <button @click="isOpen = !isOpen" class="text-white text-3xl focus:outline-none">
                    <i x-show="!isOpen" class="fas fa-bars"></i>
                    <i x-show="isOpen" class="fas fa-times"></i>
                </button>
            </div>

            <!-- Dropdown Nav -->
        <nav class="text-black text-base font-semibold pt-3">
            <a href="{{route("dashboard")}}" class="{{(request()->routeIs('dashboard'))? 'active-nav-link' :''}} rounded-l-full flex items-center text-black py-4 pl-6 nav-item">
                <i class="fas fa-tachometer-alt mr-3"></i>
                Dashboard
            </a>
            <a href="{{route("akun")}}" class="{{(request()->routeIs('akun'))? 'active-nav-link' :''}} rounded-l-full flex items-center active-nav-link text-black py-4 pl-6 nav-item">
                <i class="fas fa-users mr-3"></i>
                Akun
            </a>
            <a href="{{route("pelanggan")}}" class="{{(request()->routeIs('pelanggan'))? 'active-nav-link' :''}} rounded-l-full flex items-center text-black py-4 pl-6 nav-item">
                <i class="fas fa-user-tag mr-3"></i>
                Pelanggan
            </a>
            <a href="{{route("pembelian")}}" class="{{(request()->routeIs('pembelian'))? 'active-nav-link' :''}} rounded-l-full flex items-center text-black py-4 pl-6 nav-item">
                <i class="fas fa-shopping-bag mr-3"></i>
                Pembelian
            </a>
            <a href="{{route("produk")}}" class="{{(request()->routeIs('produk'))? 'active-nav-link' :''}} rounded-l-full flex items-center text-black py-4 pl-6 nav-item">
                <i class="fas fa-tablet-alt mr-3"></i>
                Produk
            </a>
        </nav>
            <!-- <button class="w-full bg-white cta-btn font-semibold py-2 mt-5 rounded-br-lg rounded-bl-lg rounded-tr-lg shadow-lg hover:shadow-xl hover:bg-gray-300 flex items-center justify-center">
                <i class="fas fa-plus mr-3"></i> New Report
            </button> -->
        </header>
    
        <div class="w-full h-screen overflow-x-hidden border-t flex flex-col">
            <main class="w-full flex-grow p-6">
                <h1 class="text-3xl text-black pb-6">{{$header}}</h1>
             {{$slot}}
            </main>
        </div>
        
    </div>

    <!-- AlpineJS -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>
</body>
</html>