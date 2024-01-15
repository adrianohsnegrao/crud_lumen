<?php

namespace App\Http\Controllers;
use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /*
     * Retorna todos os produtos
     */
    public function index(){
        $produtos = Produto::all();
        return response()->json($produtos);
    }

    /*
     * Retorna um produto específico
     */
    public function show($id){
        $produto = Produto::find($id);
        return response()->json($produto);
    }

    /*
     * Cria um novo produto
     */
    public function store(Request $request){
        $produto = new Produto();
        $produto->fill($request->all());
        $produto->save();
        return response()->json($produto);
    }

    /*
     * Atualiza um produto
     */
    public function update(Request $request, $id){
        $produto = Produto::find($id);
        $produto->fill($request->all());
        $produto->save();
        return response()->json($produto);
    }

    /*
     * Remove um produto
     */
    public function destroy($id){
        $produto = Produto::find($id);
        $produto->delete();
        return response()->json($produto);
    }


}
