<x-user-layout>
    <x-slot name="header">
        <div>
            <p class="bg-black bordder border-gray rounded text-white">Home</p>
        </div>
        <div class=" bg-my mt-4 rounded">
            <p>Produk Paw's Meubel</p>
        </div>
        <div class="grid grid-cols-4">
            @foreach ($produk as $item)
            <div class="mt-4 ml-4 ">
                <div class="w-full h-64 overflow-hidden">
                    <img src="{{ asset('storage/'. $item->filename) }}"  alt="">
                </div>
                <p class="text-center py-3">Meja Kayu</p>
                <div class="grid grid-cols-2 gap-4">
                  <a class="bg-black text-white rounded text-center py-2">Detail</a>
                  <a class="bg-my text-black rounded text-center py-2">Beli</a>
                </div>
            </div>
            @endforeach
        </div>

    </x-slot>
</x-user-layout>