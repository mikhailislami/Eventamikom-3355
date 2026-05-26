<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MasterSeeder extends Seeder
{
    public function run(): void
    {
        $json = '[
{"type":"header","version":"5.2.2","comment":"Export to JSON plugin for PHPMyAdmin"},
{"type":"database","name":"eventtiket_3355"},
{"type":"table","name":"cache","database":"eventtiket_3355","data":
[

]
}
,{"type":"table","name":"cache_locks","database":"eventtiket_3355","data":
[

]
}
,{"type":"table","name":"categories","database":"eventtiket_3355","data":
[

]
}
,{"type":"table","name":"events","database":"eventtiket_3355","data":
[
{"id":"5","category_id":"2","title":"Cyber Security Awareness","description":"Cyber Security","date":"2026-08-15 01:47:00","location":"Online","price":"45000","stock":"40","poster_path":null,"created_at":"2026-05-25 18:48:00","updated_at":"2026-05-25 18:48:00"},
{"id":"6","category_id":"1","title":"Amikom Movie Screening","description":null,"date":"2026-07-20 01:55:00","location":null,"price":"15000","stock":"120","poster_path":null,"created_at":"2026-05-25 18:55:29","updated_at":"2026-05-25 18:56:56"},
{"id":"7","category_id":"3","title":"Digital Marketing Strategy","description":null,"date":"2026-06-12 01:57:00","location":null,"price":"35000","stock":"50","poster_path":null,"created_at":"2026-05-25 18:57:50","updated_at":"2026-05-25 18:57:50"},
{"id":"8","category_id":"2","title":"AI & FUTURE TECH SUMMIT 2026","description":null,"date":"2026-05-01 01:58:00","location":null,"price":"50000","stock":"100","poster_path":null,"created_at":"2026-05-25 18:58:35","updated_at":"2026-05-25 18:58:35"},
{"id":"9","category_id":"2","title":"Hackaton - Unleash Your Inner Developer","description":null,"date":"2026-05-05 01:59:00","location":null,"price":"50000","stock":"100","poster_path":null,"created_at":"2026-05-25 18:59:19","updated_at":"2026-05-25 18:59:19"},
{"id":"10","category_id":"1","title":"Jazz Night 2025","description":null,"date":"2026-05-10 01:59:00","location":null,"price":"50000","stock":"100","poster_path":null,"created_at":"2026-05-25 18:59:50","updated_at":"2026-05-25 18:59:50"}
]
}
,{"type":"table","name":"event_categories","database":"eventtiket_3355","data":
[
{"id":"1","name":"Entertainment","created_at":"2026-05-25 17:22:12","updated_at":"2026-05-25 17:22:12"},
{"id":"2","name":"Seminar IT","created_at":"2026-05-25 17:27:29","updated_at":"2026-05-25 17:27:29"},
{"id":"3","name":"Workshop & Career","created_at":"2026-05-25 17:28:15","updated_at":"2026-05-25 17:28:15"},
{"id":"4","name":"Edukasi","created_at":"2026-05-25 17:38:01","updated_at":"2026-05-25 17:38:01"},
{"id":"5","name":"Film","created_at":"2026-05-25 17:38:08","updated_at":"2026-05-25 17:41:03"}
]
}
,{"type":"table","name":"event_partners","database":"eventtiket_3355","data":
[
{"id":"1","name":"Dicoding","logo_url":"https:\/\/thfvnext.bing.com\/th\/id\/OIP.OiDje6UOTLLzEH159TN9FAHaHa?w=133&h=180&c=7&r=0&o=7&cb=thfvnextfalcon&dpr=1.5&pid=1.7&rm=3","created_at":"2026-05-25 20:22:11","updated_at":"2026-05-25 20:22:43"},
{"id":"2","name":"Midtrans","logo_url":"https:\/\/iconlogovector.com\/uploads\/images\/2025\/10\/lg-690484c37e3cd-Midtrans.webp","created_at":"2026-05-25 20:22:29","updated_at":"2026-05-25 20:22:29"}
]
}
,{"type":"table","name":"failed_jobs","database":"eventtiket_3355","data":
[

]
}
,{"type":"table","name":"jobs","database":"eventtiket_3355","data":
[

]
}
,{"type":"table","name":"job_batches","database":"eventtiket_3355","data":
[

]
}
,{"type":"table","name":"migrations","database":"eventtiket_3355","data":
[
{"id":"1","migration":"0001_01_01_000000_create_users_table","batch":"1"},
{"id":"2","migration":"0001_01_01_000001_create_cache_table","batch":"1"},
{"id":"3","migration":"0001_01_01_000002_create_jobs_table","batch":"1"},
{"id":"4","migration":"2026_04_24_022817_create_categories_table","batch":"1"},
{"id":"5","migration":"2026_04_24_022818_create_events_table","batch":"1"},
{"id":"6","migration":"2026_04_24_022819_create_transactions_table","batch":"1"},
{"id":"7","migration":"2026_05_25_162208_create_event_categories_table","batch":"1"},
{"id":"8","migration":"2026_05_25_162231_create_event_partners_table","batch":"1"}
]
}
,{"type":"table","name":"password_reset_tokens","database":"eventtiket_3355","data":
[

]
}
,{"type":"table","name":"sessions","database":"eventtiket_3355","data":
[
{"id":"hQDQHqR68DZwJpxUXjV8weozXasQnHxUarNwlYuM","user_id":null,"ip_address":"127.0.0.1","user_agent":"Mozilla\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\/537.36 (KHTML, like Gecko) Code\/1.121.0 Chrome\/142.0.7444.265 Electron\/39.8.8 Safari\/537.36","payload":"eyJfdG9rZW4iOiJMdm5GbVQzZWZXcDhFb0RvQk01c0dHMlBDdWhYbDdhZXBocHZoZlVrIiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHA6XC9cLzEyNy4wLjAuMTo4MDAwIiwicm91dGUiOm51bGx9LCJfZmxhc2giOnsib2xkIjpbXSwibmV3IjpbXX19","last_activity":"1779764697"},
{"id":"jxeKgiS79yBwCUW1G8qRjtHSiLfGoBGQdzkYkfZO","user_id":null,"ip_address":"127.0.0.1","user_agent":"Mozilla\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\/537.36 (KHTML, like Gecko) Chrome\/148.0.0.0 Safari\/537.36 Edg\/148.0.0.0","payload":"eyJfdG9rZW4iOiJzTFloeHp5bVUySHNPZlhiRjc0WFBGSlRkdEZaakduRHFNN1hpRFZ0IiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHA6XC9cLzEyNy4wLjAuMTo4MDAwXC9hZG1pblwvZXZlbnRzIiwicm91dGUiOiJhZG1pbi5ldmVudHMuaW5kZXgifSwiX2ZsYXNoIjp7Im9sZCI6W10sIm5ldyI6W119fQ==","last_activity":"1779769052"}
]
}
,{"type":"table","name":"transactions","database":"eventtiket_3355","data":
[

]
}
,{"type":"table","name":"users","database":"eventtiket_3355","data":
[

]
}
]
';

        $data = json_decode($json, true);

        foreach ($data as $entry) {
            $tableName = $entry['type'];
            $rows = $entry['data'];

            foreach ($rows as $row) {
                DB::table($tableName)->updateOrInsert($row);
            }
        }
    }
}