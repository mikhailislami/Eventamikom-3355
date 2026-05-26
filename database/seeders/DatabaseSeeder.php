<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Event;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Admin Amikom',
            'email' => 'admin@amikom.ac.id',
            'password' => bcrypt('password'),
            'role' => 'admin',
        ]);

        $catIT = Category::create([
            'name' => 'Seminar IT',
            'slug' => 'seminar-it',
        ]);

        $catEnt = Category::create([
            'name' => 'Entertainment',
            'slug' => 'entertainment',
        ]);

        $catWorkshop = Category::create([
            'name' => 'Workshop & Career',
            'slug' => 'workshop-career',
        ]);

    
        Event::create([
            'category_id' => $catEnt->id,
            'title' => 'Jazz Night 2025',
            'description' => 'Nikmati malam yang indah dengan alunan musik jazz yang merdu.',
            'date' => '2026-05-10 19:00:00',
            'location' => 'Amikom Baru',
            'price' => 50000,
            'stock' => 100,
            'poster_path' => 'posters/event-1.png',
        ]);

        Event::create([
            'category_id' => $catIT->id,
            'title' => 'Hackaton - Unleash Your Inner Developer',
            'description' => 'Ayo asah skill coding kamu dan ciptakan solusi inovatif!',
            'date' => '2026-05-05 10:00:00',
            'location' => 'Inkubator Amikom',
            'price' => 50000,
            'stock' => 100,
            'poster_path' => 'posters/event-2.png',
        ]);

        Event::create([
            'category_id' => $catIT->id,
            'title' => 'AI & FUTURE TECH SUMMIT 2026',
            'description' => 'Jelajahi tren terkini dalam kecerdasan buatan.',
            'date' => '2026-05-01 13:00:00',
            'location' => 'Cinema Unit 6',
            'price' => 50000,
            'stock' => 100,
            'poster_path' => 'posters/event-3.png',
        ]);

        Event::create([
            'category_id' => $catWorkshop->id,
            'title' => 'Digital Marketing Strategy',
            'description' => 'Belajar cara memasarkan produk di era digital.',
            'date' => '2026-06-12 09:00:00',
            'location' => 'Ruang Seminar Gedung 4',
            'price' => 35000,
            'stock' => 50,
            'poster_path' => 'posters/event-4.png',
        ]);

        Event::create([
            'category_id' => $catEnt->id,
            'title' => 'Amikom Movie Screening',
            'description' => 'Nonton bareng karya film terbaik mahasiswa SI.',
            'date' => '2026-07-20 18:30:00',
            'location' => 'Cinema Amikom',
            'price' => 15000,
            'stock' => 120,
            'poster_path' => 'posters/event-5.png',
        ]);

        Event::create([
            'category_id' => $catIT->id,
            'title' => 'Cyber Security Awareness',
            'description' => 'Mengenal bahaya dunia maya dan cara memproteksi data.',
            'date' => '2026-08-15 10:00:00',
            'location' => 'Lab ICT',
            'price' => 45000,
            'stock' => 40,
            'poster_path' => 'posters/event-6.png',
        ]);
    }
}