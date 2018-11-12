<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Livro;

class LivroController extends Controller
{
    public function index(){
    	$livros = Livro::all();
    	$total = Livro::all()->count();
    	return view('List-livros', compact('livros', 'total'));
    }

    public function creat(){
    	return view('include-produtos');
    }

    public function store(Request $resquest){
    	$livros = new Livro;
    	$livros ->titulo = $resquest->titulo;
    	$livros ->edicao = $resquest->edicao;
    	$livros ->editora = $resquest->editora;
    	$livros ->autor = $resquest->autor;
    	$livros ->genero = $resquest->genero;
    	$livros ->ano = $resquest->ano;
    	$livros ->save();
    	return redirect()->route('livros.index')->with('message', 'Livro cadastrado com sucesso!') 
    }

    public function show($id) {
        //
    }

    public function edit($id) {
        $product = Livro::findOrFail($id);
        return view('alter-livro', compact('livros'));
    }

    public function update(Request $request, $id) {
        $livros = Livro::findOrFail($id); 
    	$livros ->titulo = $resquest->titulo;
    	$livros ->edicao = $resquest->edicao;
    	$livros ->editora = $resquest->editora;
    	$livros ->autor = $resquest->autor;
    	$livros ->genero = $resquest->genero;
    	$livros ->ano = $resquest->ano;
    	$livros ->save();
        return redirect()->route('livros.index')->with('message', 'Livro alterado com sucesso!');
    }

    public function destroy($id) {
        $livros = Produto::findOrFail($id);
        $livros->delete();
        return redirect()->route('livros.index')->with('message', 'Livro deletado com sucesso!');
    }



}
