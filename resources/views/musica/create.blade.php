@extends('layouts.app')

@section('container')
<h3 class="h3">Cadastro de Musica</h3>

<form action="{{route('musica.store')}}" method="POST">
    @csrf
    <div class="m-3 row">
        <div class="col-6">
            <label class="form-label" for="titulo">Titulo</label>
            <input class="form-control" type="text" id="titulo" name="titulo" placeholder="Titulo da musica" required>
        </div>
        <div class="col-6">
            <label class="form-label" for="ano">Ano</label>
            <input class="form-control" type="text" id="ano" name="ano" placeholder="Ano de lançamento" required>
        </div>
    </div>

    <div class="m-3 row">
        <label class="form-label" for="idioma">Idioma</label>
        <input class="form-control" type="text" id="idioma" name="idioma" placeholder="Idioma da musica">
    </div>
        <input class="btn btn-primary" type="submit" value="Cadastrar">
    </fieldset>

</form>
@endsection