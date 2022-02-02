<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estudantes;

class AdminController extends Controller
{
    public function dashboard() {

        return view('admin.dashboard');

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

}
