<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Moves extends Model
{
    use HasFactory;

    protected $table = 'moves';

    protected $primaryKey = 'id';

    protected $fillable = ['cliente', 'numContainer', 'tipo', 'status', 'categoria'];

    $Movimentacao = Movimentacao::find(1)->Movimentacao;

    public function Movimentacaos(){

        return $this->hasMany(Movimentacao::class);
    }
}
