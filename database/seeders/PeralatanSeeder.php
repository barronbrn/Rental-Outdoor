<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PeralatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('peralatans')->insert([
            [
                'namaPeralatan' => 'Pangrango Set',
                'jenis' => 'Camping',
                'deskripsi' => json_encode(['Tenda Kapasitas 4-6','Carrier 60L','Sleeping Bag','Headlamp', '1 Set Alat Masak', 'Matras 1','Kompor Portabel 1']),
                'ketersediaan' => 2,
                'harga' => 350000.00,
                'foto' => 'img/pangrango-set.webp',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'namaPeralatan' => 'Ciremai Set',
                'jenis' => 'Camping',
                'deskripsi' => json_encode(['Tenda Kapasitas 4 Orang', 'Sleeping Bag 2', 'Matras 2']),
                'ketersediaan' => 2,
                'harga' => 250000.00,
                'foto' => 'img/ciremai-set.webp',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [

                'namaPeralatan' => 'Matras',
                'jenis' => 'Camping',
                'deskripsi' => json_encode(['Matras']),
                'ketersediaan' => 2,
                'harga' => 5000.00,
                'foto' => url('https://down-id.img.susercontent.com/file/id-11134207-7rasc-m39qn0n5u2a7e7@resize_w450_nl.webp'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'namaPeralatan' => 'Burangrang Set',
                'jenis' => 'Camping',
                'deskripsi' => json_encode(['Carrier 60L', 'Sleeping Bag 1', 'Matras 1','Trekking Pole 1','Headlamp 1']),
                'ketersediaan' => 2,
                'harga' => 100000.00,
                'foto' => url('https://down-id.img.susercontent.com/file/sg-11134201-7ra3r-m4oaza7crjes91@resize_w450_nl.webp'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'namaPeralatan' => 'Paket Hemat Pendaki 1',
                'jenis' => 'Camping',
                'deskripsi' => json_encode(['Carrier 60L', 'Tenda Kapasitas 4 orang', 'Kompor Portable','Coocking Set','Matras','Headlamp']),
                'ketersediaan' => 2,
                'harga' => 300000.00,
                'foto' => url('https://down-id.img.susercontent.com/file/id-11134207-7ras9-m60mf9zqjli084@resize_w450_nl.webp'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'namaPeralatan' => 'Carrier 45L',
                'jenis' => 'Camping',
                'deskripsi' => json_encode(['Carrie Eiger 45L']),
                'ketersediaan' => 2,
                'harga' => 45000.00,
                'foto' => url('https://down-id.img.susercontent.com/file/id-11134207-7r98t-lre1yi6wlnct45@resize_w450_nl.webp'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'namaPeralatan' => 'Hammock',
                'jenis' => 'Camping',
                'deskripsi' => json_encode(['Hammock Ukuran 230 x 145']),
                'ketersediaan' => 2,
                'harga' => 800000.00,
                'foto' => url('https://down-id.img.susercontent.com/file/sg-11134201-7rfgu-m3zwg8d5ibg00c@resize_w450_nl.webp'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'namaPeralatan' => 'Dapur Hemat',
                'jenis' => 'Alat Masak',
                'deskripsi' => json_encode(['1 Kompor Portabel 2in1', 'Frying Pan', 'Panci Kecil 2', 'Spons/Busa','Sendok Nasi']),
                'ketersediaan' => 2,
                'harga' => 90000.00,
                'foto' => url('https://down-id.img.susercontent.com/file/id-11134207-7r98o-lpitog72y2uwca.webp'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'namaPeralatan' => 'Set Alat Memasak',
                'jenis' => 'Alat Masak',
                'deskripsi' => json_encode(['1 Kompor Portabel', 'Teko', 'Panci Kecil 2', 'Mangkok','Sendok Nasi']),
                'ketersediaan' => 3,
                'harga' => 80000.00,
                'foto' => url('https://down-id.img.susercontent.com/file/id-11134207-7r98p-lt6jxnig3tise5@resize_w450_nl.webp'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
