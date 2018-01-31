<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Product([
            'imagePath' => 'http://buyersguide.caranddriver.com/media/assets/submodel/7482.jpg',
            'title' => 'Jaguar F-Type',
            'description' => 'Super fast... Super cool',
            'price' => 74995
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'http://www.hdcarwallpapers.com/walls/lamborghini_huracan_lp610_4_2014-wide.jpg',
            'title' => 'Lamborghini Huracan',
            'description' => 'Super fast... Super cool',
            'price' => 210599
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'http://buyersguide.caranddriver.com/media/assets/submodel/6873.jpg',
            'title' => 'Ferrari 488',
            'description' => 'Super fast... Super cool',
            'price' => 270345
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'https://media.ed.edmunds-media.com/maserati/granturismo/2016/oem/2016_maserati_granturismo_coupe_sport_fq_oem_2_1280.jpg',
            'title' => 'Maserati Granturismo',
            'description' => 'Super fast... Super cool',
            'price' => 82910
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'http://cars.mclaren.com/files/live/sites/mclaren/files/cars-mclaren-com-Main/McLaren%20Model%20Section/Sports%20Series%20new/Updated%20plates%202016/Open%20road%20570S%20new%20plates.jpg?t=w1440',
            'title' => 'McLaren 570s',
            'description' => 'Super fast... Super cool',
            'price' => 143250
        ]);
        $product->save();
    }
}
