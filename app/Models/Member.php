<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Penjualan;

class Member extends Model
{
    use HasFactory;

    protected $table = 'member';
    protected $primaryKey = 'id_member';
    protected $guarded = [];
    // protected $fillable = [
    //     'kode','nama_member','alamat','notelp'
    // ];

    public function penjualan()
    {
        return $this->belongsTo(Penjualan::class);
    }
}
