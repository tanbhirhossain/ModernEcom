<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'title' => 'DELL OptiPlex 7010 Core i5 13th Gen Tower Desktop PC',
            'price' => 79750.50,
            'quantity' => 3,
            'category_id'=> 1,
            'brand_id'=>1,
            'description'=>'DELL OptiPlex 7010 comes with 13th Generation Intel Core i5-13500 processor with Intel Q670 Chipset. It has 14 cores and 20 threads, so it can handle multiple tasks and applications simultaneously. The OptiPlex 7010 has a base frequency of 2.50 GHz and a maximum turbo frequency of 4.80 GHz, 24 MB of Intel Smart Cache which is very fast and stores frequently used data and instructions for faster access. The Desktop PC features 8GB of DDR4 RAM and 256GB of SSD storage, so it can work and store your files and programs in a fast and secure way. DELL OptiPlex 7010 has an integrated Intel UHD Graphics 770, which can support up to four displays and various resolutions and refresh rates. It has a 180W Bronze Power Supply so it can provide enough power for the device and its components. It also has a high-efficiency rating of at least 82% at all loads. This Desktop PC a mouse, and a keyboard included'
        ]);
    }
}
