<?php

namespace App\Http\Controllers;

use App\Models\Mov;
use Illuminate\Http\Request;

/**
 * Class MovController
 * @package App\Http\Controllers
 */
class MovController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movs = Mov::paginate();

        return view('mov.index', compact('movs'))
            ->with('i', (request()->input('page', 1) - 1) * $movs->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mov = new Mov();
        return view('mov.create', compact('mov'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Mov::$rules);

        $mov = Mov::create($request->all());

        return redirect()->route('movs.index')
            ->with('success', 'Mov created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mov = Mov::find($id);

        return view('mov.show', compact('mov'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mov = Mov::find($id);

        return view('mov.edit', compact('mov'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Mov $mov
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mov $mov)
    {
        request()->validate(Mov::$rules);

        $mov->update($request->all());

        return redirect()->route('movs.index')
            ->with('success', 'Mov updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $mov = Mov::find($id)->delete();

        return redirect()->route('movs.index')
            ->with('success', 'Mov deleted successfully');
    }

    public function __invoke(Request $request)
    {
        return "Welcome to our homepage";
    }
}
