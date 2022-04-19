<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
		DB::table("services")->insert([
			'icone' => 'service-icon-01.png',
			'nom' => 'Useful Tricks',
			'description' => 'EduWell is the professional HTML5 template for your school or university websites.',
		]);
        DB::table("services")->insert([
			'icone' => 'service-icon-02.png',
			'nom' => 'Creative Ideas',
			'description' => 'You can download and use this EduWell Template for your teaching and learning stuffs.',
		]);
        DB::table("services")->insert([
			'icone' => 'service-icon-03.png',
			'nom' => 'Ready Target',
			'description' => 'Please tell your friends about the best CSS template website that is TemplateMo.',
		]);
        DB::table("services")->insert([
			'icone' => 'service-icon-04.png',
			'nom' => 'Technology',
			'description' => 'Aenean bibendum consectetur ex eu porttitor. Pellentesque id ultrices metus.',
		]);
        DB::table("services")->insert([
			'icone' => 'service-icon-01.png',
			'nom' => 'Useful Tricks',
			'description' => 'EduWell is the professional HTML5 template for your school or university websites.',
		]);
        DB::table("services")->insert([
			'icone' => 'service-icon-02.png',
			'nom' => 'Creative Ideas',
			'description' => 'You can download and use this EduWell Template for your teaching and learning stuffs.',
		]);
        DB::table("services")->insert([
			'icone' => 'service-icon-03.png',
			'nom' => 'Ready Target',
			'description' => 'Please tell your friends about the best CSS template website that is TemplateMo.',
		]);
        DB::table("services")->insert([
			'icone' => 'service-icon-04.png',
			'nom' => 'Technology',
			'description' => 'Aenean bibendum consectetur ex eu porttitor. Pellentesque id ultrices metus.',
		]);
        DB::table("services")->insert([
			'icone' => 'service-icon-01.png',
			'nom' => 'Useful Tricks',
			'description' => 'EduWell is the professional HTML5 template for your school or university websites.',
		]);
        DB::table("services")->insert([
			'icone' => 'service-icon-02.png',
			'nom' => 'Creative Ideas',
			'description' => 'You can download and use this EduWell Template for your teaching and learning stuffs.',
		]);
        DB::table("services")->insert([
			'icone' => 'service-icon-03.png',
			'nom' => 'Ready Target',
			'description' => 'Please tell your friends about the best CSS template website that is TemplateMo.',
		]);
        DB::table("services")->insert([
			'icone' => 'service-icon-04.png',
			'nom' => 'Technology',
			'description' => 'Aenean bibendum consectetur ex eu porttitor. Pellentesque id ultrices metus.',
		]);    
    }
}
