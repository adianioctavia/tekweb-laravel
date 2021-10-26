<x-admin-layout>
    <x-slot name="header">
            {{ __('Dashboard') }}
    </x-slot>
<div class="grid grid-cols-2">
    <a href="" class="flex items-center justify-start">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-32 w-32" viewBox="0 0 20 20" fill="currentColor">
            <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z" />
          </svg>
        <div class="pl-12">
            <p class="text-5xl">{{ Auth::user()->count() }}</p>
            <h2 class="text-5xl">Pelanggan</h2>
        </div>
    </a>
    <a href="" class="mt-12 flex items-center justify-start">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-32 w-32" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z" clip-rule="evenodd" />
          </svg>
        <div class="pl-12">
          <p class="text-5xl">{{ App\models\Pembelian::all()->count() }}</p>
            <h2 class="text-5xl">Pembelian</h2>
        </div>
    </a>
    <a href="" class="mt-12 flex items-center justify-start">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-32 w-32" viewBox="0 0 20 20" fill="currentColor">
            <path d="M11 17a1 1 0 001.447.894l4-2A1 1 0 0017 15V9.236a1 1 0 00-1.447-.894l-4 2a1 1 0 00-.553.894V17zM15.211 6.276a1 1 0 000-1.788l-4.764-2.382a1 1 0 00-.894 0L4.789 4.488a1 1 0 000 1.788l4.764 2.382a1 1 0 00.894 0l4.764-2.382zM4.447 8.342A1 1 0 003 9.236V15a1 1 0 00.553.894l4 2A1 1 0 009 17v-5.764a1 1 0 00-.553-.894l-4-2z" />
          </svg>
        <div class="pl-12">
            <p class="text-5xl">{{ App\models\Produk::all()->count() }}</p>
            <h2 class="text-5xl">Produk</h2>
        </div>
    </a>
</div>
</x-admin-layout>
