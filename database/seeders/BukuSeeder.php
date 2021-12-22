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
            // [
            //     'judul'=>'Belajar PHP', 
            //     'kategori'=>'Ilmu Komputer', 
            //     'pengarang'=>'Candra', 
            //     'penerbit'=>'Media Baca',
            // ],

            // [
            //     'judul'=>'Belajar HTML', 
            //     'kategori'=>'Ilmu Komputer', 
            //     'pengarang'=>'Rahmat Hakim', 
            //     'penerbit'=>'Media Baca',
            // ],

            // [
            //     'judul'=>'Kumpulan Puisi', 
            //     'kategori'=>'Karya Sastra', 
            //     'pengarang'=>'Bejo', 
            //     'penerbit'=>'Media Kita',
            // ],

            // [
            //     'judul'=>'Sejarah Islam', 
            //     'kategori'=>'Ilmu Agama', 
            //     'pengarang'=>'Sutejo', 
            //     'penerbit'=>'Media Kita',
            // ],

            [
                'judul'=>'Pintar CSS', 
                'kategori'=> 'Ilmu Komputer', 
                'pengarang'=> 'Anton', 
                'penerbit' =>'Graha Buku', 
            ],

            [
                'judul'=>'Kumpulan Cerpen', 
                'kategori'=> 'Karya Sastra', 
                'pengarang'=>'Rudi',
                'penerbit'=>'Media Aksara', 
            ],
            
            [
                'judul'=>'Keamanan Data', 
                'kategori'=> 'Ilmu Komputer', 
                'pengarang'=>'Nusron',
                'penerbit'=> 'Media Cipta', 
            ],
            
            [
                'judul'=>'Dasar-Dasar Database', 
                'kategori'=> 'Ilmu Komputer',
                'pengarang'=> 'Andi',
                'penerbit'=> 'Graha Media', 
            ],
            
            [
                'judul'=>'Kumpulan Cerpen 2', 
                'kategori'=> 'Karya Sastra', 
                'pengarang'=> 'Sutejo',
                'penerbit'=> 'Media Cipta', ],
            [
                'judul'=>'Peradaban Islam', 
                'kategori'=> 'Ilmu Agama',
                'pengarang'=> 'Aminnudin',
                'penerbit'=> 'Media Baca', 
            ],
            
            [
                'judul'=>'Kumpulan Cerpen 3', 
                'kategori'=> 'Karya Sastra',
                'pengarang'=> 'Rudi',
                'penerbit'=> 'Media Baca', 
            ],
            
            [
                'judul'=>'Teknologi Informasi', 
                'kategori'=> 'Ilmu Komputer',
                'pengarang'=> 'Andi A',
                'penerbit'=> 'Media Baca',
            ],
            
            [
                'judul'=>'Dermaga Biru', 
                'kategori'=> 'Karya Sastra',
                'pengarang'=> 'Sutejo',
                'penerbit'=> 'Media Cipta',
            ],
        ];
        DB::table('bukus')->insert($buku);
    }
}
