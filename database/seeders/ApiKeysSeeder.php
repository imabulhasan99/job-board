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
            '5cb3c7afc2msh7db74459d40200dp10a06djsn5d11aba4149f',
            '1b79ea7b03msh89386a22560445ap17ab39jsn66cc6fcd850a',
            '8664686ba6mshc9b058aa6514d29p14e9bdjsn15650dd00804',
            'ec1a8ebe02msh5e97ffea02bb966p108f8bjsnadf23a64ebef',
            '101e4d4b9amsh2d4168897cbd54bp175a3ejsn380ae9ec1dc9',
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
