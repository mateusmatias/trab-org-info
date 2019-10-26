<?php


use App\Models\Desflorestamento;
use App\Models\Estado;
use App\Models\Municipio;
use Flynsarmy\CsvSeeder\CsvSeeder;

class RelationsSeeder extends CsvSeeder
{
    public function __construct()
    {
        $this->table = 'desflorestamentos';
        $this->filename = base_path().'/database/seeds/csvs/desflorestamentos.csv';
        $this->offset_rows = 1;
        $this->mapping = [
            6 => 'codigo_ibge',
            7 => 'estado_sigla',
            8 => 'area',
            9 => 'desflorestamento',
            17 => 'ano',
        ];
        $this->should_trim = true;
        $this->insert_chunk_size = 100000;
    }

    /**
     * O objetivo desta função é completar campos que ficaram nulos na hora do seeding como, por exemplo, relações entre tabelas.
     */
    public function run()
    {
        set_time_limit(30000);

        $data = $this->seedFromCSV($this->filename);
        foreach ($data as $d){
            $municipio = Municipio::where('codigo_ibge', $d['codigo_ibge'])->first();
            if(!$municipio->area){
                $municipio->area = $d['area'];
                $estado = Estado::where('sigla', $d['estado_sigla'])->first();
                if($estado)
                    $municipio->estado()->associate($estado);
                $municipio->save();
            }
        }

        $desflorestamentos = Desflorestamento::all();
        foreach ($desflorestamentos as $desflorestamento) {
            $municipio = Municipio::where('codigo_ibge', $desflorestamento->codigo_ibge_municipio)->first();
            $desflorestamento->municipio()->associate($municipio);
            $desflorestamento->save();
        }

        set_time_limit(60);
    }
}