<?php

namespace App\Http\Controllers;

use App\Models\Interprete;
use Illuminate\Http\Request;

class InterpretesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('interprete.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('interprete.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $interprete = new Interprete();
        $interprete->nome = $request->nome;
        $interprete->tipo = $request->tipo;

        $interprete->save();
        return redirect()->route('interprete.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Interpretes  $interpretes
     * @return \Illuminate\Http\Response
     */
    public function show(Interprete $interprete)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Interpretes  $interpretes
     * @return \Illuminate\Http\Response
     */
    public function edit(Interprete $interprete)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Interpretes  $interpretes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Interprete $interprete)
    {
        $interprete->nome = $request->nome;
        $interprete->tipo = $request->tipo;

        $interprete->save();
        return redirect()->route('interprete.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Interpretes  $interpretes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Interprete $interprete)
    {
        $interprete->delete();
        return redirect()->route('interprete.index');
    }
}
