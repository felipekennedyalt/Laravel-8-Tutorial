<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Testis
 *
 * @property $id
 * @property $cliente
 * @property $numContainer
 * @property $tipo
 * @property $status
 * @property $categoria
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Testis extends Model
{
    
    static $rules = [
		'cliente' => 'required',
		'numContainer' => 'required',
		'tipo' => 'required',
		'status' => 'required',
		'categoria' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['cliente','numContainer','tipo','status','categoria'];



}
