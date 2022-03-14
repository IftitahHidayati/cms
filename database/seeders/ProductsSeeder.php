<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'nama_product' => 'PASTA CAPELLINI',
            'slug' => 'item',
            'image' => 'thumb1',
            'harga' => 50000,
            'deskripsi' => 'Ini adalah enis pasta Italia yang sangat tipis, dengan diameter antara 0,85 dan 0,92 milimeter. Seperti spageti, berbentuk batang, dalam bentuk untaian panjang. Seringkali dijual dalam bentuk seperti sarang. Capelli telah populer di Italia sejak setidaknya abad ke-14'

        ]);

        DB::table('products')->insert([
            'nama_product' => 'PASTA PILLUS',
            'slug' => 'item2',
            'image' => 'thumb2',
            'harga' => 80000,
            'deskripsi' => 'Pillus adalah berbagai pasta Italia tipis berbentuk pita yang disiapkan secara tradisional di Sardinia. Terbuat dari tepung gandum durum, garam, dan air hangat, pillus dipotong menjadi pita panjang dengan lebar sekitar 2 cm.'

        ]);

        DB::table('products')->insert([
            'nama_product' => 'PASTA FUSSILLI',
            'slug' => 'item3',
            'image' => 'thumb3',
            'harga' => 100000,
            'deskripsi' => 'Fusili merupakan salah satu pasta yang bentuknya spiral. Fusili biasanya diolah dengan saus krim dan kacang polong.'

        ]);

    }
}
