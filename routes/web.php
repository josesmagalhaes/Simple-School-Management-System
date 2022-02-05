<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Rota Principal
Route::get('/dashboard', [AdminController::class, 'dashboard'])->middleware('auth');
//Rotas Estudantes
//Visualizar
Route::get('/admin/estudantes', [AdminController::class, 'estudantes'])->middleware('auth');
//Criar
Route::get('/admin/create', [AdminController::class, 'create'])->middleware('auth');
Route::post('/admin', [AdminController::class, 'store']);
//Excluir
Route::delete('/admin/estudantes/{id}', [AdminController::class, 'destroy'])->middleware('auth');
//Editar
Route::get('/admin/edit/{id}', [AdminController::class, 'edit'])->middleware('auth');
Route::put('/admin/update/{id}', [AdminController::class, 'update'])->middleware('auth');

//Rotas Professores
//Visualizar
Route::get('/admin/professores', [AdminController::class, 'professores'])->middleware('auth');
//Criar
Route::get('/admin/create_professor', [AdminController::class, 'create_professor'])->middleware('auth');
Route::post('/admin', [AdminController::class, 'store_professor']);
//Excluir
Route::delete('/admin/professores/{id}', [AdminController::class, 'destroy_professor'])->middleware('auth');
//Editar
Route::get('/admin/edit_professor/{id}', [AdminController::class, 'edit_professor'])->middleware('auth');
Route::put('/admin/update_professor/{id}', [AdminController::class, 'update_professor'])->middleware('auth');
