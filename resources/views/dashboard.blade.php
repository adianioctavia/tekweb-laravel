<x-admin-layout>
    <x-slot name="header">
            {{ __('Dashboard') }}
    </x-slot>
<div class="grid grid-cols-2">
    <a href="{{route("akun")}}" class="{{(request()->routeIs('akun'))? 'active-nav-link' :''}} flex items-center justify-start">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-32 w-32" viewBox="0 0 20 20" fill="currentColor">
            <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z" />
        </svg>
        <div class="pl-12">
            <p class="text-5xl">20</p>
            <h2 class="text-5xl">Akun</h2>
        </div>
    </a>
    <a href="{{route("akun")}}" class="{{(request()->routeIs('akun'))? 'active-nav-link' :''}} flex items-center justify-start">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-32 w-32" viewBox="0 0 20 20" fill="currentColor">
            <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z" />
          </svg>
        <div class="pl-12">
            <p class="text-5xl">10</p>
            <h2 class="text-5xl">Pelanggan</h2>
        </div>
    </a>
    <a href="{{route("akun")}}" class="{{(request()->routeIs('akun'))? 'active-nav-link' :''}} mt-12 flex items-center justify-start">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-32 w-32" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z" clip-rule="evenodd" />
          </svg>
        <div class="pl-12">
            <p class="text-5xl">30</p>
            <h2 class="text-5xl">Pembelian</h2>
        </div>
    </a>
    <a href="{{route("akun")}}" class="{{(request()->routeIs('akun'))? 'active-nav-link' :''}} mt-12 flex items-center justify-start">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-32 w-32" viewBox="0 0 20 20" fill="currentColor">
            <path d="M11 17a1 1 0 001.447.894l4-2A1 1 0 0017 15V9.236a1 1 0 00-1.447-.894l-4 2a1 1 0 00-.553.894V17zM15.211 6.276a1 1 0 000-1.788l-4.764-2.382a1 1 0 00-.894 0L4.789 4.488a1 1 0 000 1.788l4.764 2.382a1 1 0 00.894 0l4.764-2.382zM4.447 8.342A1 1 0 003 9.236V15a1 1 0 00.553.894l4 2A1 1 0 009 17v-5.764a1 1 0 00-.553-.894l-4-2z" />
          </svg>
        <div class="pl-12">
            <p class="text-5xl">20</p>
            <h2 class="text-5xl">Produk</h2>
        </div>
    </a>
</div>
</x-admin-layout>
