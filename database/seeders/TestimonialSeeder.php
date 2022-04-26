<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
		DB::table("testimonials")->insert([
			'nom' => 'Catherine Walk',
			'poste' => 'CEO & Founder',
			'quote' => 'just think about TemplateMo if you need free CSS templates for your website',
			'user_id' => 1,
		]);
        DB::table("testimonials")->insert([
			'nom' => 'David Martin',
			'poste' => 'CTO of Tech Company',
			'quote' => 'just think about TemplateMo if you need free CSS templates for your website',
			'user_id' => 4,
		]);
        DB::table("testimonials")->insert([
			'nom' => 'Sophia Whity',
			'poste' => 'CEO and Co-Founder',
			'quote' => 'just think about TemplateMo if you need free CSS templates for your website',
			'user_id' => 1,
		]);
        DB::table("testimonials")->insert([
			'nom' => 'Helen Shiny',
			'poste' => 'Tech Officer',
			'quote' => 'just think about TemplateMo if you need free CSS templates for your website',
			'user_id' => 1,
		]);
        DB::table("testimonials")->insert([
			'nom' => 'George Soft',
			'poste' => 'Gadget Reviewer',
			'quote' => 'just think about TemplateMo if you need free CSS templates for your website',
			'user_id' => 4,
		]);
        DB::table("testimonials")->insert([
			'nom' => 'Andrew Hall',
			'poste' => 'Marketing Manager',
			'quote' => 'just think about TemplateMo if you need free CSS templates for your website',
			'user_id' => 1,
		]);
        DB::table("testimonials")->insert([
			'nom' => 'Maxi Power',
			'poste' => 'Fashion Designer',
			'quote' => 'just think about TemplateMo if you need free CSS templates for your website',
			'user_id' => 3,
		]);
        DB::table("testimonials")->insert([
			'nom' => 'Olivia Too',
			'poste' => 'Creative Designer',
			'quote' => 'just think about TemplateMo if you need free CSS templates for your website',
			'user_id' => 2,
		]);
    }
}
