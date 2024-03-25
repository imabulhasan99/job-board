<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ApiKeysSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $apiKeys = [
            'ebc33caf94msh3c6170c53ebd4b0p1435e3jsn4a7fd98af219',
            'ae58fe5e2amshb704d0855b08615p15692djsn631b88e76434',
            '4f0d6ab85emsh8e518a3ca23be4bp1fea37jsn61e81932bd06',
            '62ed064f9fmsh3bd3f850278b097p133700jsnca750b9876a0',
            '04755c4a8emsh0fb9f072d2f63d8p144946jsn69982f76904b',
            'b56b8baf1fmsh53c54a8dc4d4224p19eca5jsna1b394b4d1ae',
            '363364987dmsh14de760fee9f1dfp1d1f8ejsn631c7219bd43',
        ];
        foreach ($apiKeys as $apiKey) {
            DB::table('api_keys')->insert([
                'api_key' => $apiKey,
                'request_count' => 150,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ]);
        }
    }
}
