<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Produk;

class Kategori extends Model
{
    use HasFactory;

    protected $table = 'kategori';
    protected $primarKey = 'id';
    protected $guarded = [];
    protected $fillable = [
        'id','nama_kategori','deskripsi'
    ];
    

    public function produk(){
        return $this->hasOne(Produk::class);
    }
}
