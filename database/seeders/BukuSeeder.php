<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $buku = [
            [
                'judul'=>'Belajar PHP', 
                'kategori'=>'Ilmu Komputer', 
                'pengarang'=>'Candra', 
                'penerbit'=>'Media Baca', 
                'status'=>'Dipinjam',
            ],

            [
                'judul'=>'Belajar HTML', 
                'kategori'=>'Ilmu Komputer', 
                'pengarang'=>'Rahmat Hakim', 
                'penerbit'=>'Media Baca', 
                'status'=>'Dipinjam',
            ],

            [
                'judul'=>'Kumpulan Puisi', 
                'kategori'=>'Karya Sastra', 
                'pengarang'=>'Bejo', 
                'penerbit'=>'Media Kita', 
                'status'=>'Tersedia',
            ],

            [
                'judul'=>'Sejarah Islam', 
                'kategori'=>'Ilmu Agama', 
                'pengarang'=>'Sutejo', 
                'penerbit'=>'Media Kita', 
                'status'=>'Dipinjam',
            ],

            // [
            //     'judul'=>'Pintar CSS', 'Ilmu Komputer', 'Anton', 'Graha Buku', 'Tersedia'],
            // [
            //     'judul'=>'Kumpulan Cerpen', 'Karya Sastra', 'Rudi', 'Media Aksara', 'Dipinjam'],
            // [
            //     'judul'=>'Keamanan Data', 'Ilmu Komputer', 'Nusron', 'Media Cipta', 'Dipinjam'],
            // [
            //     'judul'=>'Dasar-Dasar Database', 'Ilmu Komputer', 'Andi', 'Graha Media', 'Tersedia'],
            // [
            //     'judul'=>'Kumpulan Cerpen 2', 'Karya Sastra', 'Sutejo', 'Media Cipta', 'Tersedia'],
            // [
            //     'judul'=>'Peradaban Islam', 'Ilmu Agama', 'Aminnudin', 'Media Baca', 'Tersedia'],
            // [
            //     'judul'=>'Kumpulan Cerpen 3', 'Karya Sastra', 'Rudi', 'Media Baca', 'Tersedia'],
            // [
            //     'judul'=>'Teknologi Informasi', 'Ilmu Komputer', 'Andi A', 'Media Baca', 'Tersedia'],
            // [
            //     'judul'=>'Dermaga Biru', 'Karya Sastra', 'Sutejo', 'Media Cipta', 'Tersedia'],
        ];
        DB::table('bukus')->insert($buku);
    }
}
