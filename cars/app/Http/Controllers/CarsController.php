<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

use function Ramsey\Uuid\v1;

class CarsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //SELECT * FROM cars
        //$cars = Car::all();
        //$cars = Car::where('name', '=', 'Audi')->get();

        //outro jeito de fazer colocando o query em uma variavel
        //$queryFounded = Car::where('founded', '=', '1916')->get();
        //$cars = $queryFounded;


        //processar grande quantidade de dados esse metodo do laravel quebra os dados em pedaços menores, dentro do chunk(numero de linhas, método) é o numero de linhas que você quer e o método
        //$cars = Car::chunk(2, function ($cars) {
        //    foreach ($cars as $car) {
        //        print_r($car);
        //     }
        //});

        //$cars = Car::where('name', '=', 'Tesla')->firstOrFail();

        //print_r(Car::where('name', '=', 'Audi')->count());
        //print_r(Car::all()->count());
        //print_r(Car::sum('founded'));
        //print_r(Car::avg('founded'));

        $cars = Car::all();

        return view('cars.index', [
            'cars' => $cars
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cars.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //um jeito de fazer
        //$car = new Car();
        // $car->name = $request->input('name');
        // $car->founded = $request->input('founded');
        // $car->description = $request->input('description');
        // $car->save();

        //outro jeito de fazer, da pra usar tambem o método make alem do create, se usar o metodo make ao invez do create tem que usar o metodo save() no final
        $car = Car::create([
        'name' => $request->input('name'),
        'founded' => $request->input('founded'),
        'description' => $request->input('description')
        ]);

        return redirect('/cars');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
