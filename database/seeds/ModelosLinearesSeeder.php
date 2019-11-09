<?php


use App\Models\Desflorestamento;
use App\Models\ModeloLinear;
use App\Models\Municipio;
use Illuminate\Database\Seeder;
use Phpml\Regression\LeastSquares;

class ModelosLinearesSeeder extends Seeder {

    public function run()
    {
        $data_by_municipio = Desflorestamento::all()->groupBy('municipio_id');

        foreach ($data_by_municipio as $municipio_id => $data){
            $x = [];
            $y = [];
            $area = Municipio::find($municipio_id)->area;
            foreach ($data as $data_by_year){
                if($data_by_year['ano'] > 2005){
                    $x[] = [$data_by_year['ano']];
                    $y[] = $data_by_year['desflorestamento'] / $area;
                }
            }

            $regression = new LeastSquares();
            $regression->train($x, $y);

            $a = $regression->getCoefficients()[0];
            $b = $regression->getIntercept();

            ModeloLinear::create([
                'a' => $a,
                'b' => $b,
                'municipio_id' => $municipio_id
            ]);
        }
    }
}