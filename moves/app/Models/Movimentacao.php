<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movimentacao extends Model
{
    use HasFactory;

    protected $table = 'movimentacaos';

    protected $primaryKey = 'id';

    protected $fillable = ['moves_id', 'tipoMov', 'inicio', 'fim'];

    public function Move(){

        return $this->belongsTo(Moves::class);
    }
}
