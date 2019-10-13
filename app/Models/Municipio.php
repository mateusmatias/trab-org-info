<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Municipio extends Model
{
    protected $table = 'municipios';

    public function estado(){
        return $this->belongsTo(Estado::class);
    }
}