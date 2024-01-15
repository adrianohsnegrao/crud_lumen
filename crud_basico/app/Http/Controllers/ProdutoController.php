<?php

namespace App\Http\Controllers;
use App\Models\Produto;

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

    public function index(){
        $produtos = Produto::all();
        return response()->json($produtos);
    }

    public function show($id){
        $produto = Produto::find($id);
        return response()->json($produto);
    }

    public function store(Request $request){
        $produto = new Produto();
        $produto->fill($request->all());
        $produto->save();
        return response()->json($produto);
    }

    public function update(Request $request, $id){
        $produto = Produto::find($id);
        $produto->fill($request->all());
        $produto->save();
        return response()->json($produto);
    }

    public function destroy($id){
        $produto = Produto::find($id);
        $produto->delete();
        return response()->json($produto);
    }


}
