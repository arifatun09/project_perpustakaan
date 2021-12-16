<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    //use HasFactory;
    protected $fillable = ['anggota_id','buku_id', 'tgl_pinjam', 'tgl_kembali', 'status'];
}
