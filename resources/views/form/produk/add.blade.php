<x-admin-layout>
    <x-slot name="header">
            {{ __('Tambah Produk') }}
    </x-slot>
        
    <div class="bg-gray-300 w-1/2 p-5 rounded-lg">
        <form method="POST" enctype="multipart/form-data" class="w-full">
            @csrf
            <div class="mt-3" >
                <input type="text" name="nama" placeholder="Nama" class="w-full rounded-lg">
                @error('nama')
                    <p class="text-sm text-red-500">{{$message}}</p>
                @enderror
            </div>
            <div class="mt-3" >
                <input type="number" name="stok" placeholder="Stok"  class="w-full rounded-lg">
                @error('stok')
                    <p class="text-sm text-red-500">{{$message}}</p>
                @enderror
            </div>
            <select  class="mt-3" name="kategori_id" class="w-full rounded-lg">
                @foreach ($kategori as $item)
                <option value="{{$item->id}}">{{$item->nama_kategori}}</option>
                @endforeach
            </select>
            <div class="mt-3" >
                <input type="number" name="harga" placeholder="Harga" class="w-full rounded-lg">
                @error('harga')
                    <p class="text-sm text-red-500">{{$message}}</p>
                @enderror
            </div>
            <div class="mt-3" >
                <input type="file" name="filename" class="w-full rounded-lg">
                @error('filename')
                    <p class="text-sm text-red-500">{{$message}}</p>
                @enderror
            </div>
            <div class="mt-3" >
                <button class="px-2 py-1 text-black bg-gray-300 border border-black hover:bg-yellow-500 rounded-lg" type="submit">
                    Save
                </button>
            </div>
        </form>
    </div>
    
</x-admin-layout>