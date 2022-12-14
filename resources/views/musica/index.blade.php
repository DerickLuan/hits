@extends('layouts.app')

@section('container')
<h1 class="h1">Musicas</h1>

<a class="btn btn-success" href="{{route('musica.create')}}">Nova Musica</a>

<table class="table table-hover">
    <thead>
        <tr>
            <th scope="col">Titulo</th>
            <th scope="col">Ano de Lançamento</th>
            <th scope="col">Idioma</th>
            <th scope="col">Ações</th>
        </tr>
    </thead>
    <tbody>
    @forelse ($musicas as $musica)
        <tr>
            <td>{{$musica->titulo}}</td>
            <td>{{$musica->ano}}</td>
            <td>{{$musica->idioma}}</td>
            <td>
                <div class="btn-group">
                <button type="button" class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#alterar_{{$musica->id}}">Alterar</button>
                <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#modal_{{$musica->id}}">
                  Excluir
                </button>
                
                <div class="modal" id="modal_{{$musica->id}}">
                    <div class="modal-dialog">
                      <div class="modal-content">
                  
                        <!-- Modal Cabeçalho -->
                        <div class="modal-header">
                          <h4 class="modal-title">Excluir</h4>
                          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                  
                        <!-- Modal Corpo -->
                        <div class="modal-body">
                          Confirma exclusão de {{$musica->titulo}}?
                        </div>
                  
                        <!-- Modal Rodapé -->
                        <div class="modal-footer">
                          <form action="{{route('musica.destroy', $musica->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit-button" class="btn btn-danger btn-sm">Excluir</button>
                          </form>
                        </div>
                  
                      </div>
                    </div>
                  </div>

                </div>

                <div class="modal" id="alterar_{{$musica->id}}">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <form action="{{route('musica.update', $musica->id)}}" method="POST">
                            @csrf
                            @method('PUT')
                        <!-- Modal Cabeçalho -->
                        <div class="modal-header">
                          <h4 class="modal-title">Alterar</h4>
                          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                  
                        <!-- Modal Corpo -->
                        <div class="modal-body">

                            <div class="m-3 row">
                                <div class="col-6">
                                    <label class="form-label" for="titulo">Titulo</label>
                                    <input class="form-control" value="{{$musica->titulo}}" type="text" id="titulo" name="titulo" placeholder="Titulo da musica" required>
                                </div>
                                <div class="col-6">
                                    <label class="form-label" for="ano">Ano</label>
                                    <input class="form-control" value="{{$musica->ano}}" type="text" id="ano" name="ano" placeholder="Ano de lançamento" required>
                                </div>
                            </div>
                        
                            <div class="m-3 row">
                                <label class="form-label" for="idioma">Idioma</label>
                                <input class="form-control" value="{{$musica->idioma}}" type="text" id="idioma" name="idioma" placeholder="Idioma da musica">
                            </div> 
 
                        </div>
                  
                        <!-- Modal Rodapé -->
                        <div class="modal-footer">
                            <button type="submit-button" class="btn btn-danger btn-sm">Alterar</button>
                        </div>
                    </form>
                      </div>
                    </div>
                  </div>

                </div>
            </td>
        </tr>
    @empty
        <tr>
            <td colspan="4">Nenhuma musica cadastrada.</td>
        </tr>
    @endforelse
    </tbody>
</table>
@endsection
