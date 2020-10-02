<?php

namespace App\Http\Controllers;

use App\Models\Produto;
//use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produtos = Produto::orderBy('nome')->get();
        return view('produtos.index', ['produtos' => $produtos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() // method="post" action="store"
    {
        return view('produtos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);

        // $estado = new Estado;
        // $estado->nome = $request->nome;
        // $estado->sigla = $request->sigla;
        // $estado->save();

        //Estado::create($request->all());
        //session()->flash('mensagem', 'Estado cadastrado com sucesso!');
        //return redirect()->route('estados.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Estado  $estado
     * @return \Illuminate\Http\Response
     */
    public function show(Produto $produto)
    {
        return view('produtos.show', [ 'produto' => $produto]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Estado  $estado
     * @return \Illuminate\Http\Response
     */
    public function edit(Produto $produto) // exibir o form -> action: update
    {
        return view('produtos.edit', [ 'produto' => $produto ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Estado  $estado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Produto $produto)
    {
        // dd($request->all());
        $produto->fill($request->all());
        $produto->save();

        session()->flash('mensagem', 'Produto atualizado com sucesso!');
        return redirect()->route('produto.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Estado  $estado
     * @return \Illuminate\Http\Response
     */
    /* public function destroy(Produto $produto)
    {
        // dd($estado);

        // Validação:
        if ( $produto->cidades->count() > 0 ) {
            session()->flash('mensagem', 'Exclusão não permitida! Existem cidades associadas.');
        } else {
            $estado->delete();
            session()->flash('mensagem', 'Estado excluído com sucesso!');
        }
        return redirect()->route('estados.index');
    } */
}