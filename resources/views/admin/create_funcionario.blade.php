@extends('layouts.main')

@section('title', 'Controle Escolar | Inserir Funcionários')

@section('content')
<div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5 class="card-title">Preencha os dados abaixo:</h5>
              </div>
              <div class="card-body">
                <form action="/admin" method="POST">
                @csrf
                  <div class="row">
                    <div class="col-md-5 pr-1">
                      <div class="form-group">
                        <label>Nome Completo</label>
                        <input type="text" class="form-control" placeholder="Insira o nome do funcionário" id="nome" name="nome">
                      </div>
                    </div>
                    <div class="col-md-3 px-1">
                      <div class="form-group">
                        <label>CPF</label>
                        <input type="text" class="form-control" placeholder="Insira a matrícula do funcionário" id="cpf" name="cpf">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4 pr-1">
                      <div class="form-group">
                        <label>Data de Nascimento</label>
                        <input type="date" class="form-control" id="data_nascimento" name="data_nascimento">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="update ml-auto mr-auto">
                      <button type="submit" class="btn btn-primary btn-round">Inserir Funcionário</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
</div>
</div>
@endsection