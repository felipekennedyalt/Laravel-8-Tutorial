<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarModel extends Model
{
    use HasFactory;

    protected $table = 'car_models';

    protected $primaryKey = 'id';

    // um model de carro 'CarModel' pertence a um carro 'Car'
    public function car()
    {
        return $this->belongsTo(Car::class);
    }
}
