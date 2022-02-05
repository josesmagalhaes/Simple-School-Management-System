@extends('layouts.main')

@section('title', 'Controle Escolar | Editar Professor')

@section('content')
<div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5 class="card-title">Analise os dados abaixo:</h5>
              </div>
              <div class="card-body">
                <form action="/admin/update_professor/{{ $professor->id }}" method="POST">
                @csrf
                @method('PUT')
                  <div class="row">
                    <div class="col-md-5 pr-1">
                      <div class="form-group">
                        <label>Nome Completo</label>
                        <input type="text" class="form-control" placeholder="Insira o nome do professor" id="nome" name="nome" value="{{ $professor->nome }}">
                      </div>
                    </div>
                    <div class="col-md-3 px-1">
                      <div class="form-group">
                        <label>CPF</label>
                        <input type="text" class="form-control" placeholder="Insira a matrícula do professor" id="cpf" name="cpf" value="{{ $professor->cpf }}">
                      </div>
                    </div>
                    <div class="col-md-4 pl-1">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Formação</label>
                        <input type="text" class="form-control" placeholder="Insira a turma do professor" id="formacao" name="formacao" value="{{ $professor->formacao }}">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4 pr-1">
                      <div class="form-group">
                        <label>Data de Nascimento</label>
                        <input type="date" class="form-control" id="data_nascimento" name="data_nascimento" value="{{ $professor->data_nascimento }}">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="update ml-auto mr-auto">
                      <button type="submit" class="btn btn-primary btn-round">Atualizar Professor</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>





</div>
</div>
@endsection