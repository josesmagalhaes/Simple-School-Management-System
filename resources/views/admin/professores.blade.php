@extends('layouts.main')

@section('title', 'Professores | Painel de Controle')

@section('content')
<div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Professores</h4>
                <a href="/admin/create_professor" class="btn btn-info"><ion-icon name="add-outline"></ion-icon> Inserir Professor</a>
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
                        Formação
                      </th> 
                      <th>
                        Ações
                      </th>                                                                                                           
                    </thead>
                    <tbody>
                        @foreach($professores as $professor)
                      <tr>
                        <td>
                        {{ $professor->id }}
                        </td>
                        <td>
                        {{ $professor->nome }}
                        </td>
                        <td>
                        {{ $professor->cpf }}
                        </td>
                        <td>
                        {{ date('d/m/Y', strtotime($professor->data_nascimento)) }}
                        </td>
                        <td>
                        {{ $professor->formacao }}
                        </td>
                        <td>
                        <a href="/admin/edit_professor/{{ $professor->id }}" class="btn btn-info"><ion-icon name="create-outline"></ion-icon> Editar</a> 
                        <form action="/admin/professores/{{ $professor->id }}" method="POST">
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