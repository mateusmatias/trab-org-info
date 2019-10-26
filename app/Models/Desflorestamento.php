<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Desflorestamento extends Model
{
    protected $table = 'desflorestamentos';

    public function municipio(){
        return $this->belongsTo(Municipio::class);
    }
}