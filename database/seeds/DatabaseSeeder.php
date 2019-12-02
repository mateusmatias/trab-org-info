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
        $this->call(EstadosSeeder::class);
        $this->call(MunicipiosSeeder::class);
        $this->call(DesflorestamentosSeeder::class);
        $this->call(RelationsSeeder::class);
        $this->call(ModelosLinearesSeeder::class);
        set_time_limit ( 300 );
    }
}
