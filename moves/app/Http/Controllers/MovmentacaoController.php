<?php

namespace App\Http\Controllers;

use App\Models\Moves;
use App\Models\Movimentacao;
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
        $movimentacaos = Movimentacao::paginate(5);
        $moves = Moves::paginate(5);

        return view('movin.index', ['movimentacaos' => $movimentacaos])->with('moves', $moves);
    }

    public function orderByMov(Request $request){

        $movimentacaos = Movimentacao::all();

        $moves = Moves::all();

        $ordem = $request->session()->get('ordem', 'desc');

        $movimentacaos = Movimentacao::orderBy('inicio', $ordem)->paginate(5);

        $ordem = $ordem == 'desc' ? 'asc' : 'desc';

        $request = session()->put('ordem', $ordem);

        return view('movin.index', ['movimentacaos' => $movimentacaos])->with('moves', $moves);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $movimentacaos = Movimentacao::all();
        $moves = Moves::all();

        return view('movin.create', ['movimentacaos' => $movimentacaos])->with('moves', $moves);
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
            'moves_id' => $request->input('moves_id'),
            'tipoMov' => $request->input('tipoMov'),
            'inicio' => $request->input('inicio'),
            'fim' => $request->input('fim')
        ]);

        
        return redirect('movin');
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
        $movimentacaos = Movimentacao::find($id);

        return view('movin.edit')->with('movi', $movimentacaos);
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
        $movimentacaos = Movimentacao::where('id', $id)->update([
            'tipoMov' => $request->input('tipoMov'),
            'inicio' => $request->input('inicio'),
            'fim' => $request->input('fim')
        ]);

        return redirect('/movin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $movimentacaos = Movimentacao::find($id)->delete();

        

        return redirect('/movin');

    }
}
