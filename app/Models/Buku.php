<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    // use HasFactory;
    protected $fillable = ['judul','kategori', 'pengarang', 'penerbit'];
    public function anggotas()
    {
        return $this->hasMany(Anggota::class)->withPivot('tgl_pinjam', 'tgl_kembali');
    }
}
