@extends('layouts.main')

@section('title', 'Estudantes | Painel de Controle')

@section('content')
<div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Estudantes</h4>
                <a href="/admin/create" class="btn btn-info"><ion-icon name="add-outline"></ion-icon> Inserir Aluno</a>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                      ID
                      </th>
                      <th>
                      Nome
                      </th>
                      <th>
                        Matricula
                      </th>
                      <th>
                        Pai
                      </th>
                      <th>
                        Mãe
                      </th> 
                      <th>
                        Data de Nascimento
                      </th>   
                      <th>
                        Idade
                      </th>  
                      <th>
                        Turma
                      </th>   
                      <th>
                        Ações
                      </th>                                                                                                           
                    </thead>
                    <tbody>
                        @foreach($estudantes as $estudante)
                      <tr>
                        <td>
                        {{ $estudante->id }}
                        </td>
                        <td>
                        {{ $estudante->nome }}
                        </td>
                        <td>
                        {{ $estudante->matricula }}
                        </td>
                        <td>
                        {{ $estudante->pai }}
                        </td>
                        <td>
                        {{ $estudante->mae }}
                        </td>
                        <td>
                        {{ date('d/m/Y', strtotime($estudante->data_nascimento)) }}
                        </td>
                        <td>
                        {{ $estudante->idade }}
                        </td>  
                        <td>
                        {{ $estudante->turma }}
                        </td>    
                        <td>
                        <a href="/admin/edit/{{ $estudante->id }}" class="btn btn-info"><ion-icon name="create-outline"></ion-icon> Editar</a> 
                        <form action="/admin/estudantes/{{ $estudante->id }}" method="POST">
                        @csrf
                            @method('DELETE')                           
                            <button type="submit" class="btn btn-danger">Excluir</button>
                        </form>
                        </td>                                                                                                                       
                      </tr>
                      @endforeach  
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>

</div>
</div>
@endsection