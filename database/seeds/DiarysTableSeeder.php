<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class DiarysTableSeeder extends Seeder
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
                'contents'   => 'test',
                'writing_time' => Carbon::create(2019, 10, 1),
                'created_at' => Carbon::create(2019, 10, 1),
                'updated_at' => Carbon::create(2019, 10, 2),
            ],
            [
                'user_id'    => 1,
                'title'      => 'dairy',
                'contents'   => 'test',
                'writing_time' => Carbon::create(2019, 10, 1),
                'created_at' => Carbon::create(2019, 9, 10),
                'updated_at' => Carbon::create(2019, 9, 14),
            ],
        ]);
    }
}
