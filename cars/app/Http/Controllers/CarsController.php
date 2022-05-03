<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\Product;
use App\Rules\Uppercase;
use App\Http\Requests\CreateValidationRequest;

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

        // $cars = Car::all();
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

        // retorna uma coleção
        // $cars = Car::all(); 

        //toArray retorna como array ao invez de coleção
        // $cars = Car::all()->toArray();


        //toJson retorna como Json ao invez de coleção. geralmente não se converte coleções para Json e sim para array, Json é mais usado para API.
        // $cars = Car::all()->toJson();
        // para exibir o json eu precido fazer o decode
        // $cars =json_decode($cars);

        // $cars = Car::all()->toJson();
        // $cars =json_decode($cars);

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
    public function store(CreateValidationRequest $request)
    {
        // public function store(Request $request) <- antes de fazer a validação atravez dos requests


        //um jeito de fazer
        // $car = new Car();
        // $car->name = $request->input('name');
        // $car->founded = $request->input('founded');
        // $car->description = $request->input('description');
        // $car->save();

        //outro jeito de fazer, da pra usar tambem o método make alem do create, se usar o metodo make ao invez do create tem que usar o metodo save() no final




        //Validação, metodo validate vai checar os dados vindo do request e checar se são true ou não, se for true vai sair do $request->validate e proseguir para o create.

        //se não for valido vai de dar uma ValidationException e te jogar pra pagina anterior com todos os erros de validação

        //no codigo pode ser só assim ('founded' => 'required') mas da pra colocar outras regras, como ele deve ser único e estar na tabela cars desse jeito ('name' => 'required|unique:cars')

        //regras de validação: https://laravel.com/docs/9.x/validation#available-validation-rules
        // $request->validate([
        //     'name' => new Uppercase,
        //     'founded' => 'required|integer|min:0|max:2021',
        //     'description' => 'required'
        // ]);




        $request->validated();

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
        // $car = Car::find($id); acha tudo daquela ID específica
        $car = Car::find($id);

        // var_dump($car->products);

        // $products = Product::find($id);
        // print_r($products);

        // retornar a view e passar como objeto e não como array
        return view('cars.show')->with('car', $car);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        //só com o método find() eu precisaria fazer um loop, usando o first() ele retorna um objeto então não precisa mais fazer o loop.
        $car = Car::find($id)->first();

        //O with() serve pra não passar como um array e sim como um objeto $car
        return view('cars.edit')->with('car', $car);

        //o que aconteceu aqui no edit foi que encontramos o nosso carro e retornamos pra view
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CreateValidationRequest $request, $id)
    {
        // public function update(Request $request, $id) <- antes de fazer a validação atravez dos requests

        $request->validated();


        $car = Car::where('id', $id)
            ->update([
                'name' => $request->input('name'),
                'founded' => $request->input('founded'),
                'description' => $request->input('description')
            ]);

        return redirect('/cars');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Car $car)
    {
        //outro jeito de fazer
        //public function destroy($id)
        // $car = Car::find($id)->first();

        $car->delete();

        return redirect('/cars');
    }
}
