<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class movimentacoes extends Model
{
    use HasFactory;

    protected $table = 'movimentacoes';

    protected $primaryKey = 'id';

    protected $fillable = ['tipoMov', 'horaInicio', 'horaFim'];
}
