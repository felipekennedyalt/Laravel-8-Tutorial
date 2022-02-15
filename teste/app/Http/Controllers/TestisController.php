<?php

namespace App\Http\Controllers;

use App\Models\Testis;
use Illuminate\Http\Request;

/**
 * Class TestisController
 * @package App\Http\Controllers
 */
class TestisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testes = Testis::paginate();

        return view('testis.index', compact('testes'))
            ->with('i', (request()->input('page', 1) - 1) * $testes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $testis = new Testis();
        return view('testis.create', compact('testis'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Testis::$rules);

        $testis = Testis::create($request->all());

        return redirect()->route('testes.index')
            ->with('success', 'Testis created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $testis = Testis::find($id);

        return view('testis.show', compact('testis'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $testis = Testis::find($id);

        return view('testis.edit', compact('testis'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Testis $testis
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Testis $testis)
    {
        request()->validate(Testis::$rules);

        $testis->update($request->all());

        return redirect()->route('testes.index')
            ->with('success', 'Testis updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $testis = Testis::find($id)->delete();

        return redirect()->route('testes.index')
            ->with('success', 'Testis deleted successfully');
    }
}
