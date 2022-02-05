<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Professore extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'nome', 'cpf', 'data_nascimento', 'formacao', 'created_at', 'updated_at'];
}
