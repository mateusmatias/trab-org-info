<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        set_time_limit ( 10000 );
	$sql = base_path('database/seeds/trab_org_info.sql');
	DB::unprepared(file_get_contents($sql));
        set_time_limit ( 300 );
    }
}
