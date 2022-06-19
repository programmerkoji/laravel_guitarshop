<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shops')->insert([
            [
                'owner_id' => 1,
                'name' => '桶川店',
                'information' => '駐車場あり（150台）',
                'filename' => '',
                'is_selling' => true,
            ],
            [
                'owner_id' => 2,
                'name' => '上尾店',
                'information' => '上尾駅から徒歩3分',
                'filename' => '',
                'is_selling' => true,
            ],
        ]);
    }
}
