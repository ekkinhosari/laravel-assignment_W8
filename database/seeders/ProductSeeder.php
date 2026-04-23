<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        // category_id mengacu ke tabel product_categories
        // 1 = Electronics, 2 = Clothing, 3 = Books
        DB::table('products')->insert([
            [
                'name'        => 'Logitech MX Master 3',
                'description' => 'Wireless ergonomic mouse',
                'price'       => 850000,
                'category_id' => 1,
                'stock'       => 20,
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
            [
                'name'        => 'Mechanical Keyboard Keychron K2',
                'description' => 'Compact TKL mechanical keyboard',
                'price'       => 1200000,
                'category_id' => 1,
                'stock'       => 15,
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
            [
                'name'        => 'Samsung Monitor 27 inch',
                'description' => 'IPS panel Full HD monitor',
                'price'       => 3500000,
                'category_id' => 1,
                'stock'       => 8,
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
            [
                'name'        => 'Anker USB-C Hub',
                'description' => '7-in-1 USB-C hub for laptop',
                'price'       => 450000,
                'category_id' => 1,
                'stock'       => 30,
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
            [
                'name'        => 'Kaos Polos Oversize',
                'description' => 'Bahan cotton combed 30s',
                'price'       => 120000,
                'category_id' => 2,
                'stock'       => 100,
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
            [
                'name'        => 'Celana Jogger Panjang',
                'description' => 'Bahan fleece tebal, nyaman dipakai harian',
                'price'       => 175000,
                'category_id' => 2,
                'stock'       => 50,
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
            [
                'name'        => 'Jaket Hoodie Polos',
                'description' => 'Hoodie unisex bahan fleece',
                'price'       => 280000,
                'category_id' => 2,
                'stock'       => 40,
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
            [
                'name'        => 'Atomic Habits - James Clear',
                'description' => 'Buku self-improvement tentang kebiasaan kecil',
                'price'       => 98000,
                'category_id' => 3,
                'stock'       => 25,
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
            [
                'name'        => 'Rich Dad Poor Dad - Robert Kiyosaki',
                'description' => 'Buku finansial klasik wajib baca',
                'price'       => 85000,
                'category_id' => 3,
                'stock'       => 20,
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
            [
                'name'        => 'The Psychology of Money - Morgan Housel',
                'description' => 'Cara berpikir tentang uang dan investasi',
                'price'       => 95000,
                'category_id' => 3,
                'stock'       => 18,
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
        ]);
    }
}