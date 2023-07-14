<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class pinjamjenisseeder extends Seeder
{
    /**
     * Run the database seeds.
     * 
     * @return void
     */
    public function run()
    {
        DB::table('jenis')->insert([
            'jenis_buku' =>'Horor8'
        ]);

        DB::table('jenis')->insert([
            'jenis_buku' =>'Animasi'
        ]);

        DB::table('jenis')->insert([
            'jenis_buku' =>'Cerita'
        ]);


        DB::table('pinjam')->insert(
            [
                'nama' => 'keyza',
                'jenis_buku' =>'1',
                'jumlah_buku' => '3',
                'tanggal_pinjam' => '2023-07-05',
        ]);  
        DB::table('pinjam')->insert(
            [
                'nama' => 'dhafa',
                'jenis_buku' =>'2',
                'jumlah_buku' => '7',
                'tanggal_pinjam' => '2023-07-05',
        ]);
        DB::table('pinjam')->insert(
            [
                'nama' => 'azzam',
                'jenis_buku' =>'2',
                'jumlah_buku' => '5',
                'tanggal_pinjam' => '2023-07-05',
        ]);
    }
}