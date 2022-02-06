<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $table = 'cars';

    protected $primaryKey = 'id';

    //public $timestamps = true;

   // protected $dateFormat = 'h:m:s';

   //aceitar o array do carModel pra salvar os dados
   protected $fillable = ['name', 'founded', 'description'];
}
