<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class ModeloLinear extends Model
{
    protected $table = 'modelos';

    public function municipio(){
        return $this->belongsTo(Municipio::class);
    }
}