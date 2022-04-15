<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Kategori;
use App\Models\PembelianDetail;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Produk extends Model
{
    use HasFactory;

    protected $table = 'produks';
    protected $primaryKey = 'id_produk';
    
    protected $fillable = [
        'kode','nama_produk','id_kategori','merk','harga_beli','harga_jual','diskon','stok'
    ];
    protected $guarded = [];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'id_kategori', 'id');
    }

    public function pembelianDetail(){
        return $this->BelongsTo(PembelianDetail::class, 'id_produk', 'id_produk');
    }
}
