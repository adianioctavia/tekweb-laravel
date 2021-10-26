<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembelian extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected $table = 'tb_pembelian';

    public function pelanggan()
    {
        return $this->hasMany(Pelanggan::class);
    }
}
