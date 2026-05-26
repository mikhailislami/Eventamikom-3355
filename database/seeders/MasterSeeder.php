<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MasterSeeder extends Seeder
{
    public function run(): void
    {
        // Masukkan data JSON kamu di bawah ini
        $json = '[{"type":"table","name":"event_categories","data":[{"id":"1","name":"Entertainment"},{"id":"2","name":"Seminar IT"},{"id":"3","name":"Workshop & Career"},{"id":"4","name":"Edukasi"},{"id":"5","name":"Film"}]},{"type":"table","name":"event_partners","data":[{"id":"1","name":"Dicoding","logo_url":"https://tinyurl.com/dicoding-logo"},{"id":"2","name":"Midtrans","logo_url":"https://tinyurl.com/midtrans-logo"}]},{"type":"table","name":"events","data":[{"id":"5","category_id":"2","title":"Cyber Security Awareness","price":"45000","stock":"40"},{"id":"6","category_id":"1","title":"Amikom Movie Screening","price":"15000","stock":"120"},{"id":"7","category_id":"3","title":"Digital Marketing Strategy","price":"35000","stock":"50"},{"id":"8","category_id":"2","title":"AI & FUTURE TECH SUMMIT 2026","price":"50000","stock":"100"},{"id":"9","category_id":"2","title":"Hackaton - Unleash Your Inner Developer","price":"50000","stock":"100"},{"id":"10","category_id":"1","title":"Jazz Night 2025","price":"50000","stock":"100"}]}]';

        $data = json_decode($json, true);

        foreach ($data as $table) {
            $tableName = $table['name'];
            $rows = $table['data'];
            
            foreach ($rows as $row) {
                // updateOrInsert: Kalau ID sama sudah ada, dia update. Kalau belum, dia tambah.
                DB::table($tableName)->updateOrInsert(['id' => $row['id']], $row);
            }
        }
    }
}