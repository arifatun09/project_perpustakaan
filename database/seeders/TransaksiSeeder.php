<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransaksiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $transaksi = [
            [
                'anggota_id'=>2, 
                'buku_id'=>2, 
                'tgl_pinjam'=>'2021-11-03', 
                'tgl_kembali'=>'2021-11-10',
                'status'=>'Belum Dikembalikan',
                
            ],
        ];
        DB::table('transaksis')->insert($transaksi);
    }
}
