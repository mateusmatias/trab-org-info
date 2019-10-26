<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(EstadosSeeder::class);
        //$this->call(MunicipiosSeeder::class);
        //$this->call(DesflorestamentosSeeder::class);
        //$this->call(RelationsSeeder::class);
        $this->call(ModelosLinearesSeeder::class);
    }
}
