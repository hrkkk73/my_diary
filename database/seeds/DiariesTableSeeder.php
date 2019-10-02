<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class DiariesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('diaries')->truncate();
        DB::table('diaries')->insert([
            [
                'user_id'    => 1,
                'title'      => 'Laravel',
                'contents'   => 'テスト',
                'created_at' => Carbon::create(2019, 10, 1),
                'updated_at' => Carbon::create(2019, 10, 2),
            ],
            [
                'user_id'    => 2,
                'title'      => '日記',
                'contents'   => 'テスト',
                'created_at' => Carbon::create(2019, 9, 10),
                'updated_at' => Carbon::create(2019, 9, 14),
            ],
        ]);
    }
}
