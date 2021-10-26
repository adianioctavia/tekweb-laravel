<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Produk;
use Database\Seeders\KategoriSeeder;
use Illuminate\Auth\Events\Validated;
use Illuminate\Contracts\Support\ValidatedData;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produk = Produk::paginate(5);
        return view('admin.produk', [
            'produk' => $produk,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = Kategori::all();
        return view('form.produk.add', [
            'kategori' => $kategori,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data = $request->validate([
            'nama' => ['required', 'max:255'],
            'stok' => ['required', 'numeric'],
            'kategori_id' => ['required'],
            'harga' => ['required', 'numeric'],
            'filename' => ['required', 'image', 'file', 'max:2048'],
        ]);

        $data['filename'] = $request->file('filename')->store('pic');

        Produk::create($data);
        return redirect('/produk');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kategori = Kategori::all();
        $produk  = Produk::find($id);
        return view('form.produk.edit', [
            'produk' => $produk,
            'kategori' => $kategori,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $produk = Produk::find($id);

        $produk->nama = $request->nama;
        $produk->kategori_id = $request->kategori_id;
        $produk->stok = $request->stok;
        $produk->harga = $request->harga;

        $produk->save();
        return redirect('/produk');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produk = Produk::find($id);
        $produk->delete();
        return back();
    }
}
