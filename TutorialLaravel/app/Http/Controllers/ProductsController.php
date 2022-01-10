<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        //$title = "Welcome to my laravel 8 tutorial.";
       // $description = "Created by Kennedy.";

        // $data = [
        //   'Oneplus' => 'Oneplus',
        //    'Samsung' => 'Samsung'
        //];

        //compact method (Mais facil)
        //return view('products/index', compact('title', 'description', 'data'));

        //With method (bom pra passar só 1 dado, não passa mais que isso)
        //return view('products/index')->with('title', $title);
        //return view('products/index')->with('data', $data);

        //Directly in the view
        //return view('products/index', ['data' => $data]);

        print_r(route('products'));

        
        return view('products.index');
    }

    public function about()
    {
        return 'About us page';
    }

    public function showID($id)
    {
        return $id;
    }

    public function showName($name)
    {
        $data = [
            'Oneplus' => 'Oneplus',
            'Samsung' => 'Samsung'
        ];

        //o ponto ao invez do / é a mesma coisa
        return view('products.index', [
            'products' => $data[$name] ?? 'Product ' . $name . ' does not exist'
        ]);
    }
}
