<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudantes extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'nome', 'matricula', 'pai', 'mae', 'data_nascimento', 'idade', 'turma', 'created_at', 'updated_at'];
}
