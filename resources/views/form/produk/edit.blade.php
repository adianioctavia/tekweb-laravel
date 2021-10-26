<x-admin-layout>
    <x-slot name="header">
            {{ __('Edit Produk') }}
    </x-slot>
        
    <form action="" method="POST">
        @csrf
        @method('put')
        <div class="mt-3" >
            <input type="text" name="nama" placeholder="Nama" value="{{$produk->nama}}">
            @error('nama')
                <p class="text-sm text-red-500">{{$message}}</p>
            @enderror
        </div>
        <div class="mt-3" >
            <input type="number" name="stok" placeholder="Stok" value="{{$produk->stok}}">
            @error('stok')
                <p class="text-sm text-red-500">{{$message}}</p>
            @enderror
        </div>
        <select  class="mt-3" name="kategori_id">
            @foreach ($kategori as $item)
            @if ($item->id == $produk->kategori_id)
            <option value="{{$item->id}}" selected>{{$item->nama_kategori}}</option>
            @else
            <option value="{{$item->id}}">{{$item->nama_kategori}}</option>
            @endif
            @endforeach
        </select>
        <div class="mt-3" >
            <input type="number" name="harga" placeholder="Harga" value="{{$produk->harga}}">
            @error('harga')
                <p class="text-sm text-red-500">{{$message}}</p>
            @enderror
        </div>
        <div class="mt-3" >
            <button type="submit">
                Update
            </button>
        </div>
    </form>
    
</x-admin-layout>