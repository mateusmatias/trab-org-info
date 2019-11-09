<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Municipio extends Model
{
    protected $table = 'municipios';

    public function estado(){
        return $this->belongsTo(Estado::class);
    }

    public function desflorestamento(){
        return $this->hasOne(Desflorestamento::class);
    }

    public function modelo(){
        return $this->hasOne(ModeloLinear::class);
    }
}