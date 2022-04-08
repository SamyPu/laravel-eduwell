<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TitreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table("titres")->insert([
            'nom' => 'Our Services',
			'description' => 'Provided (Services)',
		]);
        DB::table("titres")->insert([
            'nom' => 'Our Courses',
            'description' => 'What You Can (Learn)',
        ]);
        DB::table("titres")->insert([
            'nom' => 'Testimonials',
            'description' => 'What They (Think)',
        ]);
        DB::table("titres")->insert([
            'nom' => 'Contact us',
            'description' => 'Say (Hello)',
        ]);
    }
}
