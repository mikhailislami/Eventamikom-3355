<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MasterSeeder extends Seeder
{
    public function run(): void
    {
        DB::statement('PRAGMA foreign_keys = OFF');
        
        DB::table('events')->truncate();
        DB::table('event_categories')->truncate();
        DB::table('event_partners')->truncate();

        // 1. ISI KATEGORI (HANYA ID & NAME, TANPA SLUG)
        DB::table('event_categories')->insert([
            ['id' => 1, 'name' => 'Entertainment'],
            ['id' => 2, 'name' => 'Seminar IT'],
            ['id' => 3, 'name' => 'Workshop & Career'],
            ['id' => 4, 'name' => 'Edukasi'],
            ['id' => 5, 'name' => 'Film'],
        ]);

        // 2. ISI EVENT (DATA LENGKAP)
        DB::table('events')->insert([
            ['id' => 5, 'category_id' => 2, 'title' => 'Cyber Security Awareness', 'description' => 'Cyber Security', 'date' => '2026-08-15 01:47:00', 'location' => 'Online', 'price' => 45000, 'stock' => 40],
            ['id' => 6, 'category_id' => 1, 'title' => 'Amikom Movie Screening', 'description' => 'Movie Screening', 'date' => '2026-07-20 01:55:00', 'location' => 'Amikom', 'price' => 15000, 'stock' => 120],
            ['id' => 7, 'category_id' => 3, 'title' => 'Digital Marketing Strategy', 'description' => 'Marketing Strategy', 'date' => '2026-06-12 01:57:00', 'location' => 'Online', 'price' => 35000, 'stock' => 50],
            ['id' => 8, 'category_id' => 2, 'title' => 'AI & FUTURE TECH SUMMIT 2026', 'description' => 'Tech Summit', 'date' => '2026-05-01 01:58:00', 'location' => 'Amikom', 'price' => 50000, 'stock' => 100],
            ['id' => 9, 'category_id' => 2, 'title' => 'Hackaton - Unleash Your Inner Developer', 'description' => 'Hackaton', 'date' => '2026-05-05 01:59:00', 'location' => 'Amikom', 'price' => 50000, 'stock' => 100],
            ['id' => 10, 'category_id' => 1, 'title' => 'Jazz Night 2025', 'description' => 'Jazz Concert', 'date' => '2026-05-10 01:59:00', 'location' => 'Amikom', 'price' => 50000, 'stock' => 100],
        ]);

        DB::statement('PRAGMA foreign_keys = ON');
    }
}