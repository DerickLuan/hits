@extends('layouts.app')
@section('container')

<h1 class="h1">Artistas</h1>

<a class="btn btn-success" href="{{route('artista.create')}}">Novo Artista</a>

<table class="table table-hover">
    <thead>
        <tr>
            <th scope="col">Nome</th>
            <th scope="col">Nascimento</th>
            <th scope="col">Falecimento</th>
            <th scope="col">Composições</th>
            <th scope="col">Ações</th>
        </tr>
    </thead>
    <tbody>
    @forelse ($artistas as $artista)
        <tr>
            <td>{{$artista->nome}}</td>
            <td>{{$artista->local_nascimento}} - {{$artista->data_nascimento}}</td>
            <td>{{$artista->local_falecimento}} - {{$artista->data_falecimento}}</td>
            <td><a href="#">{{count($artista->musicas)}}</a></td>
            <td>
                <div class="btn-group">
                <button type="button" class="btn btn-sm btn-dark">Musicas</button>
                <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#excluir_{{$artista->id}}">Excluir</button>
                <button type="button" class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#alterar_{{$artista->id}}">Alterar</button>
                
                
                <div class="modal" id="excluir_{{$artista->id}}">
                    <div class="modal-dialog">
                      <div class="modal-content">
                  
                        <!-- Modal Cabeçalho -->
                        <div class="modal-header">
                          <h4 class="modal-title">Excluir</h4>
                          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                  
                        <!-- Modal Corpo -->
                        <div class="modal-body">
                          Confirma exclusão de {{$artista->nome}}?
                        </div>
                  
                        <!-- Modal Rodapé -->
                        <div class="modal-footer">
                          <form action="{{route('artista.destroy', $artista->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit-button" class="btn btn-danger btn-sm">Excluir</button>
                          </form>
                        </div>
                  
                      </div>
                    </div>
                </div>

                <div class="modal" id="alterar_{{$artista->id}}">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <form action="{{route('artista.update', $artista->id)}}" method="POST">
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
                              <label class="form-label" for="nome">Nome</label>
                              <input class="form-control" value="{{$artista->nome}}" type="text" id="nome" name="nome" placeholder="Nome do artista" required>
                          </div>
                          <div class="col-6">
                              <label class="form-label" for="nomeArtistico">Nome Artistico</label>
                              <input class="form-control" type="text" value="{{$artista->nome_artistico}}" id="nomeArtistica" name="nome_artistico" placeholder="Nome Artistico" required>
                          </div>
                      </div>
                      <div class="m-3 row">
                          <div class="col-6">
                              <label class="form-label" for="dataNascimento">Nascimento</label>
                              <input class="form-control" value="{{$artista->data_nascimento}}" type="date" id="dataNascimento" name="data_nascimento" required>
                          </div>
                          <div class="col-6">
                              <label class="form-label" for="dataFalecimento">Falecimento</label>
                              <input class="form-control" value="{{$artista->data_falecimento}}" type="date" id="dataFalecimento" name="data_falecimento">
                          </div>    
                      </div>
                      <div class="m-3 row">
                          <div class="col-6">
                              <label class="form-label" for="localNascimento">Local Nascimento</label>
                              <input class="form-control" value="{{$artista->local_nascimento}}" type="text" id="localNascimento" name="local_nascimento" required>
                          </div>
                          <div class="col-6">
                              <label class="form-label" for="localFalecimento">Local Falecimento</label>
                              <input class="form-control" value="{{$artista->local_falecimento}}" type="text" id="localFalecimento" name="local_falecimento">
                          </div>    
                      </div>
                      <div class="m-3">
                          <label class="form-label" for="nacionalidade">Nacionalidade</label>
                          <input class="form-control" value="{{$artista->nacionalidade}}" type="text" id="nacionalidade" name="nacionalidade">
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
            <td colspan="5">Nenhum artista cadastrado.</td>
        </tr>
    @endforelse
    </tbody>
</table>
@endsection