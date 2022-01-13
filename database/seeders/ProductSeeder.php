<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Product::insert([
            [
                'admin_id' => '1',
                'name' => 'シャツ',
                'price' => '1000',
                'image_path' => 'Tシャツ.jpeg',
                'size' => 'S',
                'category' => 'test',
                'gender' => 'mens_and_womens'
            ],
            [
                'admin_id' => '1',
                'name' => 'シャツ',
                'price' => '1000',
                'image_path' => 'Tシャツ.jpeg',
                'size' => 'M',
                'category' => 'test',
                'gender' => 'mens_and_womens'
            ],
            [
                'admin_id' => '1',
                'name' => 'シャツ',
                'price' => '1000',
                'image_path' => 'Tシャツ.jpeg',
                'size' => 'L',
                'category' => 'test',
                'gender' => 'mens_and_womens'
            ],
            [
                'admin_id' => '1',
                'name' => 'ジャケット',
                'price' => '9800',
                'image_path' => 'ジャケット.jpg',
                'size' => 'S',
                'category' => 'test',
                'gender' => 'mens'
            ],
            [
                'admin_id' => '1',
                'name' => 'ジャケット',
                'price' => '9800',
                'image_path' => 'ジャケット.jpg',
                'size' => 'M',
                'category' => 'test',
                'gender' => 'mens'
            ],
            [
                'admin_id' => '1',
                'name' => 'ジャケット',
                'price' => '9800',
                'image_path' => 'ジャケット.jpg',
                'size' => 'L',
                'category' => 'test',
                'gender' => 'mens'
            ],
            [
                'admin_id' => '1',
                'name' => 'スキニーパンツ',
                'price' => '3000',
                'image_path' => 'スキニー.jpeg',
                'size' => 'S',
                'category' => 'test',
                'gender' => 'mens'
            ],
            [
                'admin_id' => '1',
                'name' => 'スキニーパンツ',
                'price' => '3000',
                'image_path' => 'スキニー.jpeg',
                'size' => 'M',
                'category' => 'test',
                'gender' => 'mens'
            ],
            [
                'admin_id' => '1',
                'name' => 'スキニーパンツ',
                'price' => '3000',
                'image_path' => 'スキニー.jpeg',
                'size' => 'L',
                'category' => 'test',
                'gender' => 'mens'
            ],
            [
                'admin_id' => '1',
                'name' => 'チノパン',
                'price' => '3000',
                'image_path' => 'チノパン.jpeg',
                'size' => 'S',
                'category' => 'test',
                'gender' => 'mens_and_womens'
            ],
            [
                'admin_id' => '1',
                'name' => 'チノパン',
                'price' => '3000',
                'image_path' => 'チノパン.jpeg',
                'size' => 'M',
                'category' => 'test',
                'gender' => 'mens_and_womens'
            ],
            [
                'admin_id' => '1',
                'name' => 'チノパン',
                'price' => '3000',
                'image_path' => 'チノパン.jpeg',
                'size' => 'L',
                'category' => 'test',
                'gender' => 'mens_and_womens'
            ],
            [
                'admin_id' => '1',
                'name' => 'ワンピース',
                'price' => '3000',
                'image_path' => 'ワンピース.jpeg',
                'size' => 'S',
                'category' => 'test',
                'gender' => 'womens'
            ],
            [
                'admin_id' => '1',
                'name' => 'ワンピース',
                'price' => '3000',
                'image_path' => 'ワンピース.jpeg',
                'size' => 'M',
                'category' => 'test',
                'gender' => 'womens'
            ],
            [
                'admin_id' => '1',
                'name' => 'ワンピース',
                'price' => '3000',
                'image_path' => 'ワンピース.jpeg',
                'size' => 'L',
                'category' => 'test',
                'gender' => 'womens'
            ],
        ]);
    }
}