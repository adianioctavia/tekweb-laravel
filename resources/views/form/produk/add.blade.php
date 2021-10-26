<x-admin-layout>
    <x-slot name="header">
            {{ __('Tambah Produk') }}
    </x-slot>
        
    <form action="" method="POST">
        @csrf
        <div class="mt-3" >
            <input type="text" name="nama" placeholder="Nama">
            @error('nama')
                <p class="text-sm text-red-500">{{$message}}</p>
            @enderror
        </div>
        <div class="mt-3" >
            <input type="number" name="stok" placeholder="Stok">
            @error('stok')
                <p class="text-sm text-red-500">{{$message}}</p>
            @enderror
        </div>
        <select  class="mt-3" name="kategori_id">
            @foreach ($kategori as $item)
            <option value="{{$item->id}}">{{$item->nama_kategori}}</option>
            @endforeach
        </select>
        <div class="mt-3" >
            <input type="number" name="harga" placeholder="Harga">
            @error('harga')
                <p class="text-sm text-red-500">{{$message}}</p>
            @enderror
        </div>
        <div class="mt-3" >
            <button type="submit">
                Save
            </button>
        </div>
    </form>
    
</x-admin-layout>