<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class MasterSeeder extends Seeder
{
    public function run(): void
    {
        // Matikan proteksi foreign key sementara (Wajib untuk SQLite)
        DB::statement('PRAGMA foreign_keys = OFF');
        
        DB::table('events')->truncate();
        DB::table('event_categories')->truncate();
        DB::table('event_partners')->truncate();

        // 1. ISI KATEGORI (Lengkap dengan Slug agar tidak error lagi)
        DB::table('event_categories')->insert([
            ['id' => 1, 'name' => 'Entertainment', 'slug' => 'entertainment'],
            ['id' => 2, 'name' => 'Seminar IT', 'slug' => 'seminar-it'],
            ['id' => 3, 'name' => 'Workshop & Career', 'slug' => 'workshop-career'],
            ['id' => 4, 'name' => 'Edukasi', 'slug' => 'edukasi'],
            ['id' => 5, 'name' => 'Film', 'slug' => 'film'],
        ]);

        // 2. ISI EVENT (Saya isikan data dummy untuk yang NULL agar tidak Error NOT NULL)
        DB::table('events')->insert([
            ['id' => 5, 'category_id' => 2, 'title' => 'Cyber Security Awareness', 'description' => 'Cyber Security Awareness Seminar', 'date' => '2026-08-15 01:47:00', 'location' => 'Online', 'price' => 45000, 'stock' => 40],
            ['id' => 6, 'category_id' => 1, 'title' => 'Amikom Movie Screening', 'description' => 'Movie screening at Amikom', 'date' => '2026-07-20 01:55:00', 'location' => 'Cinema Amikom', 'price' => 15000, 'stock' => 120],
            ['id' => 7, 'category_id' => 3, 'title' => 'Digital Marketing Strategy', 'description' => 'Learn digital marketing strategy', 'date' => '2026-06-12 01:57:00', 'location' => 'Zoom Meeting', 'price' => 35000, 'stock' => 50],
            ['id' => 8, 'category_id' => 2, 'title' => 'AI & FUTURE TECH SUMMIT 2026', 'description' => 'Tech summit event', 'date' => '2026-05-01 01:58:00', 'location' => 'Auditorium Amikom', 'price' => 50000, 'stock' => 100],
            ['id' => 9, 'category_id' => 2, 'title' => 'Hackaton - Unleash Your Inner Developer', 'description' => 'Developer Hackaton', 'date' => '2026-05-05 01:59:00', 'location' => 'Lab ICT', 'price' => 50000, 'stock' => 100],
            ['id' => 10, 'category_id' => 1, 'title' => 'Jazz Night 2025', 'description' => 'Jazz concert night', 'date' => '2026-05-10 01:59:00', 'location' => 'Amikom Plaza', 'price' => 50000, 'stock' => 100],
        ]);

        // 3. ISI PARTNER
        DB::table('event_partners')->insert([
            ['id' => 1, 'name' => 'Dicoding', 'logo_url' => 'https://tinyurl.com/dicoding-logo'],
            ['id' => 2, 'name' => 'Midtrans', 'logo_url' => 'https://tinyurl.com/midtrans-logo'],
        ]);

        DB::statement('PRAGMA foreign_keys = ON');
    }
}