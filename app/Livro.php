<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Livro extends Model
{
    protected $fillable = ['titulo', 'edicao', 'editora', 'autor', 'genero', 'ano'];
    protected $guarded = ['id', 'created_at', 'updated_at'];
    protected $table = 'livros';
}
