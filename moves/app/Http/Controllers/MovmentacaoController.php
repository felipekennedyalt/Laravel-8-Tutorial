<?php

namespace App\Http\Controllers;


use App\Models\Movimentacao;
use App\Models\movimentacoes;
use Illuminate\Http\Request;

class MovmentacaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movimentacaos = Movimentacao::all();

        return view('movin.index', ['movimentacaos' => $movimentacaos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $movimentacaos = Movimentacao::all();

        return view('movin.create', ['movimentacaos' => $movimentacaos]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $movimentacaos = Movimentacao::create([
            'moves_id' => $request->input('cliente'),
            'tipoMov' => $request->input('tipoMMov'),
            'inicio' => $request->input('inicio'),
            'fim' => $request->input('fim')
        ]);

        return redirect('movin.index');
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
