<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MasterSeeder extends Seeder
{
    public function run(): void
    {
        // DATA EVENT LENGKAP (Agar tidak error NOT NULL constraint failed)
        $events = [
            ['id' => 5, 'category_id' => 2, 'title' => 'Cyber Security Awareness', 'date' => '2026-08-15 01:47:00', 'price' => 45000, 'stock' => 40, 'description' => 'Cyber Security'],
            ['id' => 6, 'category_id' => 1, 'title' => 'Amikom Movie Screening', 'date' => '2026-07-20 01:55:00', 'price' => 15000, 'stock' => 120, 'description' => 'Movie Screening'],
            ['id' => 7, 'category_id' => 3, 'title' => 'Digital Marketing Strategy', 'date' => '2026-06-12 01:57:00', 'price' => 35000, 'stock' => 50, 'description' => 'Marketing Strategy'],
            ['id' => 8, 'category_id' => 2, 'title' => 'AI & FUTURE TECH SUMMIT 2026', 'date' => '2026-05-01 01:58:00', 'price' => 50000, 'stock' => 100, 'description' => 'Tech Summit'],
            ['id' => 9, 'category_id' => 2, 'title' => 'Hackaton - Unleash Your Inner Developer', 'date' => '2026-05-05 01:59:00', 'price' => 50000, 'stock' => 100, 'description' => 'Hackaton'],
            ['id' => 10, 'category_id' => 1, 'title' => 'Jazz Night 2025', 'date' => '2026-05-10 01:59:00', 'price' => 50000, 'stock' => 100, 'description' => 'Jazz Concert'],
        ];

        $categories = [
            ['id' => 1, 'name' => 'Entertainment', 'slug' => 'entertainment'],
            ['id' => 2, 'name' => 'Seminar IT', 'slug' => 'seminar-it'],
            ['id' => 3, 'name' => 'Workshop & Career', 'slug' => 'workshop-career'],
            ['id' => 4, 'name' => 'Edukasi', 'slug' => 'edukasi'],
            ['id' => 5, 'name' => 'Film', 'slug' => 'film'],
        ];

        // Masukkan Kategori
        foreach ($categories as $cat) {
            DB::table('event_categories')->updateOrInsert(['id' => $cat['id']], $cat);
        }

        // Masukkan Event
        foreach ($events as $event) {
            DB::table('events')->updateOrInsert(['id' => $event['id']], $event);
        }
        
        // Masukkan Partner (Opsional)
        DB::table('event_partners')->updateOrInsert(['id' => 1], ['name' => 'Dicoding', 'logo_url' => 'https://tinyurl.com/dicoding-logo']);
        DB::table('event_partners')->updateOrInsert(['id' => 2], ['name' => 'Midtrans', 'logo_url' => 'https://tinyurl.com/midtrans-logo']);
    }
}