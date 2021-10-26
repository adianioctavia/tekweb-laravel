<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected $table = 'tb_pelanggan';

    public function pembelian()
    {
        return $this->hasMany(Pembelian::class);
    }

    public function produk()
    {
        return $this->hasMany(Produk::class);
    }
}
