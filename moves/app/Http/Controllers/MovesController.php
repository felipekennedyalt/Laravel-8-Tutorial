<?php

namespace App\Http\Controllers;

use App\Models\Moves;
use Illuminate\Http\Request;

class MovesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $moves = Moves::paginate(5);

        return view('moves.index')->with('moves', $moves);

        // $moves = Moves::all();

        // return view('moves.index', ['moves' => $moves]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('moves.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $moves = Moves::create([
            'cliente' => $request->input('cliente'),
            'numContainer' => $request->input('numContainer'),
            'tipo' => $request->input('tipo'),
            'status' => $request->input('status'),
            'categoria' => $request->input('categoria')
        ]);

        return redirect('/moves');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Moves  $moves
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $moves = Moves::findOrFail($id);

        return view('moves.show')->with('moves', $moves);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Moves  $moves
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $moves = Moves::find($id);

        return view('moves.edit')->with('moves', $moves);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Moves  $moves
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $moves = Moves::where('id', $id)
            ->update([
                'cliente' => $request->input('cliente'),
                'numContainer' => $request->input('numContainer'),
                'tipo' => $request->input('tipo'),
                'status' => $request->input('status'),
                'categoria' => $request->input('categoria')
            ]);

        return redirect('/moves');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Moves  $moves
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $moves = Moves::find($id)->delete();

        return redirect('/moves');
    }
}
