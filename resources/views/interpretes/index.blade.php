@extends('layouts.app')

@section('container')
<h1 class="h1">Interpretes</h1>

<a class="btn btn-success" href="{{route('interprete.create')}}">Novo interprete</a>

<table class="table table-hover">
    <thead>
        <tr>
            <th scope="col">Nome</th>
            <th scope="col">Tipo</th>
            <th scope="col">Ações</th>
        </tr>
    </thead>
    <tbody>
    @forelse ($interpretes as $interprete)
        <tr>
            <td>{{$interprete->nome}}</td>
            <td>{{$interprete->tipo}}</td>
            <td>
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#alterar_{{$interprete->id}}">Alterar</button>
                  <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#excluir_{{$interprete->id}}">Excluir</button>
                  
                  <div class="modal" id="excluir_{{$interprete->id}}">
                      <div class="modal-dialog">
                        <div class="modal-content">
                    
                          <!-- Modal Cabeçalho -->
                          <div class="modal-header">
                            <h4 class="modal-title">Excluir</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                          </div>
                    
                          <!-- Modal Corpo -->
                          <div class="modal-body">
                            Confirma exclusão de {{$interprete->nome}}?
                          </div>
                    
                          <!-- Modal Rodapé -->
                          <div class="modal-footer">
                            <form action="{{route('interprete.destroy', $interprete->id)}}" method="POST">
                              @csrf
                              @method('DELETE')
                              <button type="submit-button" class="btn btn-danger btn-sm">Excluir</button>
                            </form>
                          </div>
                    
                        </div>
                      </div>
                  </div>

                  <div class="modal" id="alterar_{{$interprete->id}}">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <form action="{{route('interprete.update', $interprete->id)}}" method="POST">
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
                                    <input class="form-control" value="{{$interprete->nome}}" type="text" id="nome" name="nome" placeholder="Nome do interprete" required>
                                </div>
                                <div class="col-6">
                                    <label class="form-label" for="tipo">Ano</label>
                                    <input class="form-control" value="{{$interprete->tipo}}" type="text" id="tipo" name="tipo" placeholder="Tipo do interprete" required>
                                </div>
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
            <td colspan="3">Nenhum interprete cadastrado.</td>
        </tr>
    @endforelse
    </tbody>
</table>
@endsection