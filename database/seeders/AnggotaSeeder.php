<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnggotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $anggota = [
            [
                'nama'=>'Riki Subekti', 
                'jenis_kelamin'=>'Pria', 
                'alamat'=>'Jl.Semangka No 3',
            ],

            [
                'nama'=>'Aini Rahmawati', 
                'jenis_kelamin'=>'Wanita', 
                'alamat'=>'Jl.Anggrek No 45'
            ],

            [
                'nama'=> 'Rudi Hartono', 
                'jenis_kelamin'=>'Pria', 
                'alamat'=>'Jl.Manggis 98',
            ],

            [
                'nama'=>'Dino Riano', 
                'jenis_kelamin'=>'Pria', 
                'alamat'=>'Jl.Melon No 33',
            ],

            [
                'nama'=>'Agus Wardoyo', 
                'jenis_kelamin'=>'Pria', 
                'alamat'=>'Jl.Cempedak No 88',
            ],

            [
                'nama'=>'Shinta Riani', 
                'jenis_kelamin'=>'Wanita', 
                'alamat'=>'JL.Jeruk No 1',
            ],

            [
                'nama'=>'Irwan Hakim', 
                'jenis_kelamin'=>'Pria', 
                'alamat'=>'Jl.Salak No 34',
            ],

            [
                'nama'=>'Indah Dian', 
                'jenis_kelamin'=>'Wanita', 
                'alamat'=>'Jl.Semangka No 23',
            ],

            [
                'nama'=>'Rina Auliah', 
                'jenis_kelamin'=>'Wanita', 
                'alamat'=>'Jl.Merpati No 44',
            ],

            [
                'nama'=>'Septi Putri', 
                'jenis_kelamin'=>'Wanita', 
                'alamat'=>'Jl.Beringin No 2',
            ],

            [
                'nama'=>'Rangga', 
                'jenis_kelamin'=>'Pria', 
                'alamat'=>'Jl.Manggis No 41',
            ],
        ];
        DB::table('anggotas')->insert($anggota);
    }
}
