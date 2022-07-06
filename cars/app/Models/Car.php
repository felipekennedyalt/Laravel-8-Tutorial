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
    protected $fillable = ['name', 'founded', 'description', 'image_path', 'user_id'];



    // Ambos o Hidden e o Visible funcionam tanto para o ARRAY quanto para o JSON

    //fazer com que o Json não mande todos os dados do banco de uma vez, escondendo somente os necessários com elloquent.
    protected $hidden = ['password', 'updated_at'];

    // faz com que os dados selecionados fiquem visiveis, só vai mostrar o que adicionei dentro do $visible.
    protected $visible = ['name', 'founded', 'description'];

    // One to many Elloquent
    public function carModels()
    {
        return $this->hasMany(CarModel::class);
    }

    // Has many through Elloquent

    public function engines()
    {
        return $this->hasManyThrough(
            Engine::class,
            CarModel::class,
            'car_id', //foreign key na tabela CarModel
            'model_id' //foreign key na tabela Engine
        );
    }

    // Has One through Elloquent
    public function productionDate(){
        return $this->hasOneThrough(CarProductionDate::class, CarModel::class, 'car_id', 'model_id');
    }

    public function products(){

        return $this->belongsToMany(Product::class);
    }
}
