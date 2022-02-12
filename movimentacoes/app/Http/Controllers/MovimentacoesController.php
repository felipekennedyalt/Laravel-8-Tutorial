<?php

namespace App\Http\Controllers;

use App\Models\movimentacoes;
use Illuminate\Http\Request;

class MovimentacoesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movimentacoes = Movimentacoes::all();

        return view('movimentacoes.index', [
            'movimentacoes' => $movimentacoes
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('movimentacoes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $movimentacoes = movimentacoes::create([
            'tipoMov' => $request->input('tipoMov'),
            'horaInicio' => $request->input('horaInicio'),
            'horaFim' => $request->input('horaFim')
        ]);

        return redirect('/movimentacoes');
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
        $movimentacao = Movimentacoes::find($id);
        

        return view('/movimentacoes.edit')->with('movimentacoes', $movimentacao);
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
        $movimentacao = Movimentacoes::where('id', $id)->update([
            'tipoMov' => $request->input('tipoMov'),
            'horaInicio' => $request->input('horaInicio'),
            'horaFim' => $request->input('horaFim')
        ]);

        return redirect('/movimentacoes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $movimentacoes = Movimentacoes::find($id);

        $movimentacoes->delete();

        return redirect('/movimentacoes');
    }
}
