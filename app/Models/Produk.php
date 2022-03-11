<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    protected $table = 'produks';

    protected $fillable = [
        'kode','nama_produk','kategori_produk','merk','harga_beli','harga_jual','diskon','stok'
    ];
}
