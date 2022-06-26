<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('primary_categories')->insert([
            [
                'name' => 'エレキギター',
                'sort_order' => 1,
            ],
            [
                'name' => 'アコースティックギター',
                'sort_order' => 2,
            ],
            [
                'name' => 'エフェクター・その他',
                'sort_order' => 3,
            ],
        ]);

        DB::table('secondary_categories')->insert([
            [
                'name' => 'Fender',
                'sort_order' => 1,
                'primary_category_id' => 1,
            ],
            [
                'name' => 'Gibson',
                'sort_order' => 2,
                'primary_category_id' => 1,
            ],
            [
                'name' => 'PRS',
                'sort_order' => 3,
                'primary_category_id' => 1,
            ],
            [
                'name' => 'YAMAHA',
                'sort_order' => 4,
                'primary_category_id' => 2,
            ],
            [
                'name' => 'Yairi',
                'sort_order' => 5,
                'primary_category_id' => 2,
            ],
            [
                'name' => 'Gibson',
                'sort_order' => 6,
                'primary_category_id' => 2,
            ],
            [
                'name' => 'BOSS',
                'sort_order' => 7,
                'primary_category_id' => 3,
            ],
            [
                'name' => 'LINE6',
                'sort_order' => 8,
                'primary_category_id' => 3,
            ],
            [
                'name' => 'Xotic',
                'sort_order' => 9,
                'primary_category_id' => 3,
            ],
        ]);
    }
}
