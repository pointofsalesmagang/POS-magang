<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Supplier;

class Pembelian extends Model
{
    use HasFactory;

    protected $table = 'pembelians';

    protected $primaryKey = 'id_pembelian';
    // protected $fillable = [
    //     'tanggal','supplier','total_item','total_harga','diskon','total_bayar'
    // ];
    protected $guarded = [];


    public function supplier()
    {
        return $this->belongsTo(Supplier::class, 'id_supplier','id_pembelian');
    }
}
