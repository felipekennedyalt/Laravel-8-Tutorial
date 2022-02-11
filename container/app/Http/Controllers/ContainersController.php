<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\Container;

class ContainersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $containers = Container::all();

        return view('containers.index', [
            'containers' => $containers
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('containers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $car = Container::create([
            'cliente' => $request->input('cliente'),
            'numContainer' => $request->input('numContainer'),
            'tipo' => $request->input('tipo'),
            'status' => $request->input('status'),
            'categoria' => $request->input('categoria')
        ]);


        return redirect('/containers');
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
        $container = Container::find($id)->first();

        return view('containers.edit')->with('container', $container);
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

        $car = Container::where('id', $id)->update([
            'cliente' => $request->input('cliente'),
            'numContainer' => $request->input('numContainer'),
            'tipo' => $request->input('tipo'),
            'status' => $request->input('status'),
            'categoria' => $request->input('categoria')
        ]);

        return redirect('/containers');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Container $container)
    {
        $container->delete();

        return redirect('/containers');
    }
}
