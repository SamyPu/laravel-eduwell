<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
		DB::table("banners")->insert([
			'titre' => 'Welcome to our school',
			'soustitre' => 'Best Place To Learn Graphic (Design!)',
			'button' => 'Join Us Now!',
			'image' => 'images/banner-right-image.png',
		]);
    }
}
