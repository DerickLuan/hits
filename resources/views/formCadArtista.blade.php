@extends('layouts.app')

@section('container')

<h3 class="h3">Cadastro de Artista</h3>

<form action="{{route('artista.store')}}" method="POST">
    @csrf
    <div class="m-3 row">
        <div class="col-6">
            <label class="form-label" for="nome">Nome</label>
            <input class="form-control" type="text" id="nome" name="nome" placeholder="Nome do artista" required>
        </div>
        <div class="col-6">
            <label class="form-label" for="nomeArtistico">Nome Artistico</label>
            <input class="form-control" type="text" id="nomeArtistica" name="nome_artistico" placeholder="Nome Artistico" required>
        </div>
    </div>
    <div class="m-3 row">
        <div class="col-6">
            <label class="form-label" for="dataNascimento">Nascimento</label>
            <input class="form-control" type="date" id="dataNascimento" name="data_nascimento" required>
        </div>
        <div class="col-6">
            <label class="form-label" for="dataFalecimento">Falecimento</label>
            <input class="form-control" type="date" id="dataFalecimento" name="data_falecimento">
        </div>    
    </div>
    <div class="m-3 row">
        <div class="col-6">
            <label class="form-label" for="localNascimento">Local Nascimento</label>
            <input class="form-control" type="text" id="localNascimento" name="local_nascimento" required>
        </div>
        <div class="col-6">
            <label class="form-label" for="localFalecimento">Local Falecimento</label>
            <input class="form-control" type="text" id="localFalecimento" name="local_falecimento">
        </div>    
    </div>
    <div class="m-3">
        <label class="form-label" for="nacionalidade">Nacionalidade</label>
        <input class="form-control" type="text" id="nacionalidade" name="nacionalidade">
    </div>
        <input class="btn btn-primary" type="submit" value="Cadastrar">
    </fieldset>

</form>
@endsection