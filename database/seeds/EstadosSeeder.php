<?php


use Flynsarmy\CsvSeeder\CsvSeeder;

class EstadosSeeder extends CsvSeeder {

    public function __construct()
    {
        $this->table = 'estados';
        $this->filename = base_path().'/database/seeds/csvs/estados.csv';
        $this->offset_rows = 1;
        $this->mapping = [
            1 => 'nome',
            2 => 'sigla',
        ];
        $this->should_trim = true;
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