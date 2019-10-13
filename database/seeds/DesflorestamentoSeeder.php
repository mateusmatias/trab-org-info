<?php


use Flynsarmy\CsvSeeder\CsvSeeder;

class DesflorestamentoSeeder extends CsvSeeder {

    public function __construct()
    {
        $this->table = 'desflorestamentos';
        $this->filename = base_path().'/database/seeds/csvs/desflorestamentos.csv';
        $this->offset_rows = 1;
        $this->mapping = [
            8 => 'area',
            9 => 'desflorestamento',
        ];
    }

    public function run()
    {
        // Recommended when importing larger CSVs
        DB::disableQueryLog();

        // Uncomment the below to wipe the table clean before populating
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table($this->table)->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        parent::run();
    }
}