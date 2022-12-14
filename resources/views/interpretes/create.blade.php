@extends('layouts.app')

@section('container')
<h3 class="h3">Cadastro de Interpretes</h3>

<form action="{{route('interprete.store')}}" method="POST">
    @csrf
    <div class="m-3 row">
        <div class="col-6">
            <label class="form-label" for="nome">Nome</label>
            <input class="form-control" type="text" id="nome" name="nome" placeholder="Nome do interprete" required>
        </div>
        <div class="col-6">
            <label class="form-label" for="tipo">Tipo</label>
            <input class="form-control" type="text" id="tipo" name="tipo" placeholder="Tipo de interprete" required>
        </div>
    </div>
    <input class="btn btn-primary" type="submit" value="Cadastrar">


</form>
@endsection