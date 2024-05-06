<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use App\Models\Sistema;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Produto $produto)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        
        $produto = Produto::find($id);
        $sistema = Sistema::find('1');

        return view('admin.produto.edit', ['produto'=> $produto, 'sistema' => $sistema]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id, Request $request)
    {

        $produto = Produto::find($id);

        $produto->nome = $request->nome;
        $produto->descricao = $request->descricao;
        $produto->preco = $request->preco;
        $produto->link = $request->link;

        $produto->save();

        $produtos = Produto::paginate(10);
        return view('admin.produto.index', compact('produtos'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $produto = Produto::find($id);
        $produto->delete();
        return response()->json(['eliminado' => 'true']);
    }
}
