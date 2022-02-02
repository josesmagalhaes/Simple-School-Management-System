@extends('layouts.main')

@section('title', 'Controle Escolar | Editar Estudantes')

@section('content')
<div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5 class="card-title">Analise os dados abaixo:</h5>
              </div>
              <div class="card-body">
                <form action="/admin/update/{{ $estudante->id }}" method="POST">
                @csrf
                @method('PUT')
                  <div class="row">
                    <div class="col-md-5 pr-1">
                      <div class="form-group">
                        <label>Nome Completo</label>
                        <input type="text" class="form-control" placeholder="Insira o nome do estudante" id="nome" name="nome" value="{{ $estudante->nome }}">
                      </div>
                    </div>
                    <div class="col-md-3 px-1">
                      <div class="form-group">
                        <label>Matrícula</label>
                        <input type="text" class="form-control" placeholder="Insira a matrícula do estudante" id="matricula" name="matricula" value="{{ $estudante->matricula }}">
                      </div>
                    </div>
                    <div class="col-md-4 pl-1">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Turma</label>
                        <input type="text" class="form-control" placeholder="Insira a turma do estudante" id="turma" name="turma" value="{{ $estudante->turma }}">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>Nome do Pai</label>
                        <input type="text" class="form-control" placeholder="Insira o nome do pai completo" id="pai" name="pai" value="{{ $estudante->pai }}">
                      </div>
                    </div>
                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label>Nome da Mãe</label>
                        <input type="text" class="form-control" placeholder="Insira o nome da mãe completo" id="mae" name="mae" value=" {{ $estudante->mae }} ">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4 pr-1">
                      <div class="form-group">
                        <label>Data de Nascimento</label>
                        <input type="date" class="form-control" id="data_nascimento" name="data_nascimento" value="{{ $estudante->data_nascimento }}">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 pl-1">
                      <div class="form-group">
                        <label>Idade</label>
                        <input type="text" class="form-control" placeholder="Insira a idade (Apenas números)" id="idade" name="idade" value="{{ $estudante->idade }}">
                      </div>
                    </div>
                  </div>                  
                  <div class="row">
                    <div class="update ml-auto mr-auto">
                      <button type="submit" class="btn btn-primary btn-round">Atualizar Estudante</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>


</div>
</div>
@endsection