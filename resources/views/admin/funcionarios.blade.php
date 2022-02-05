@extends('layouts.main')

@section('title', 'Funcionárioss | Painel de Controle')

@section('content')
<div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Funcionários</h4>
                <a href="/admin/create_funcionario" class="btn btn-info"><ion-icon name="add-outline"></ion-icon> Inserir Funcionário</a>
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
                        CPF
                      </th>
                      <th>
                        Data de Nascimento
                      </th>
                      <th>
                        Ações
                      </th>                                                                                                           
                    </thead>
                    <tbody>
                        @foreach($funcionarios as $funcionario)
                      <tr>
                        <td>
                        {{ $funcionario->id }}
                        </td>
                        <td>
                        {{ $funcionario->nome }}
                        </td>
                        <td>
                        {{ $funcionario->cpf }}
                        </td>
                        <td>
                        {{ date('d/m/Y', strtotime($funcionario->data_nascimento)) }}
                        </td>
                        <td>
                        <a href="/admin/edit_funcionario/{{ $funcionario->id }}" class="btn btn-info"><ion-icon name="create-outline"></ion-icon> Editar</a> 
                        <form action="/admin/funcionarios/{{ $funcionario->id }}" method="POST">
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