<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estudantes;
use App\Models\Professore;
use App\Models\Funcionario;

class AdminController extends Controller
{
    public function dashboard() {

        $count_estudantes = Estudantes::all()->count();
        $count_professores = Professore::all()->count();
        $count_funcionarios = Funcionario::all()->count();
        return view('admin.dashboard', ['count_estudantes'=>$count_estudantes,
        'count_professores'=>$count_professores,
         'count_funcionarios'=>$count_funcionarios]);

    }

    public function estudantes() {
        $estudantes = Estudantes::all();
        return view('admin.estudantes', ['estudantes'=>$estudantes]);
    }

    public function create(){
        return view('admin.create');
    }

    public function store(Request $request){
        $estudante = new Estudantes;

        $estudante->nome = $request->nome;
        $estudante->matricula = $request->matricula;
        $estudante->turma = $request->turma;
        $estudante->pai = $request->pai;
        $estudante->mae = $request->mae;
        $estudante->data_nascimento = $request->data_nascimento;
        $estudante->idade = $request->idade;

        $estudante->save();
        return redirect('/admin/estudantes')->with('msg', 'Estudante inserido com sucesso!');

    }
    public function destroy($id) {

        Estudantes::findOrFail($id)->delete();

        return redirect('/admin/estudantes')->with('msg', 'Estudante excluído com sucesso!');

    }
    public function edit($id) {

        $estudante = Estudantes::findOrFail($id);

        return view('admin.edit', ['estudante' => $estudante]);

    }    
    public function update(Request $request) {

        $data = $request->all();

        Estudantes::findOrFail($request->id)->update($data);

        return redirect('/admin/estudantes')->with('msg', 'Estudante editado com sucesso!');

    } 
    public function professores() {

        $professores = Professore::all();

        return view('admin.professores', ['professores'=> $professores]);

    } 
    public function create_professor() {

        return view('admin.create_professor');

    } 

    public function store_professor(Request $request){

        $professor = new Professore;

        $professor->nome = $request->nome;
        $professor->cpf = $request->cpf;
        $professor->data_nascimento = $request->data_nascimento;
        $professor->formacao = $request->formacao;

        $professor->save();

        return redirect('/admin/professores')->with('msg', 'Professor inserido com sucesso!');

    }  

    public function destroy_professor($id) {

        Professore::findOrFail($id)->delete();

        return redirect('/admin/professores')->with('msg', 'Professor excluído com sucesso!');

    }  
    
    public function edit_professor($id) {

        $professores = Professore::findOrFail($id);

        return view('admin.edit_professor', ['professor' => $professores]);

    }  

    public function update_professor(Request $request) {

        $data = $request->all();

        Professore::findOrFail($request->id)->update($data);

        return redirect('/admin/professores')->with('msg', 'Professor editado com sucesso!');

    }      

    public function funcionarios() {

        $funcionarios = Funcionario::all();

        return view('admin.funcionarios', ['funcionarios'=> $funcionarios]);

    }  
    public function create_funcionario() {

        return view('admin.create_funcionario');

    } 
    public function store_funcionario(Request $request){

        $funcionario = new Funcionario;

        $funcionario->nome = $request->nome;
        $funcionario->cpf = $request->cpf;
        $funcionario->data_nascimento = $request->data_nascimento;

        $funcionario->save();

        return redirect('/admin/funcionarios')->with('msg', 'Funcionário inserido com sucesso!');

    } 
    public function destroy_funcionario($id) {

        Funcionario::findOrFail($id)->delete();

        return redirect('/admin/funcionarios')->with('msg', 'Funcionário excluído com sucesso!');

    }
    public function edit_funcionario($id) {

        $funcionarios = Funcionario::findOrFail($id);

        return view('admin.edit_funcionario', ['funcionario' => $funcionarios]);

    } 
    public function update_funcionario(Request $request) {

        $data = $request->all();

        Funcionario::findOrFail($request->id)->update($data);

        return redirect('/admin/funcionarios')->with('msg', 'Funcionário editado com sucesso!');

    }  


}
