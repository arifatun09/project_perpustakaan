<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    //use HasFactory;
    protected $fillable = ['name', 'jenis_kelamin', 'alamat'];
    public function bukus()
    {
        return $this->hasMany(Buku::class);
    }
}
