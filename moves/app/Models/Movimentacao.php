<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movimentacao extends Model
{
    use HasFactory;

    protected $table = 'Movimentacaos';

    protected $primarykey = 'id';

    protected $fillable = ['cliente', 'tipoMov', 'inicio', 'fim'];

    public function Movimentacao()
    {

        return $this->belongsTo(Moves::class);
    }
}
