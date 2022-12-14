<?php

namespace App\Http\Controllers;

use App\Models\Artista;
use Illuminate\Http\Request;

class ArtistaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('artistas', ['artistas' => Artista::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('formCadArtista');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $artista = new Artista();
        $artista->nome = $request->nome;
        $artista->nome_artistico = $request->nome_artistico;
        $artista->data_nascimento = $request->data_nascimento;
        $artista->local_nascimento = $request->local_nascimento;
        $artista->data_falecimento = $request->data_falecimento;
        $artista->local_falecimento = $request->local_falecimento;
        $artista->nacionalidade = $request->nacionalidade;

        $artista->save();
        return redirect()->route('artista.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Artista $artistum)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Artista $artistum)
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
    public function update(Request $request, Artista $artistum)
    {
        $artistum->nome = $request->nome;
        $artistum->nome_artistico = $request->nome_artistico;
        $artistum->data_nascimento = $request->data_nascimento;
        $artistum->local_nascimento = $request->local_nascimento;
        $artistum->data_falecimento = $request->data_falecimento;
        $artistum->local_falecimento = $request->local_falecimento;
        $artistum->nacionalidade = $request->nacionalidade;

        $artistum->save();
        return redirect()->route('artista.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Artista $artistum)
    {
        $artistum->delete();
        return redirect()->route('artista.index');
    }

}
