<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\clientes;


class ClientesController extends Controller
{
    private int $qtd_por_pagina = 5;
    public function __construct(){ // ao estanciar executa automaticamente

        $this->middleware('permission:cliente-list|cliente-create|cliente-edit|cliente-delete',
        ['only'=>['index', 'store']]);

        $this->middleware('permission:cliente-create',
        ['only'=>['create', 'store']]);

        $this->middleware ('permission:cliente-edit',
        ['only'=>['edit','update']]);

        $this->middleware ('permission:cliente-delete',
        ['only'=>['destroy']]);


        //para so usuarios logados poderem acessar
        //$this->middleware('auth');

    }

        public function index(Request $request)
        {
            $clientes = Clientes::orderBy('id','DESC')->paginate($this->qtd_por_pagina);

            return view('clientes.index',compact('clientes'))
                        ->with('i', ($request->input('page',1)-1)* $this->qtd_por_pagina);
        }

        public function create()
        {

        }


        public function store(Request $request)
        {
            $this->validate($request, ['nome' =>'required',
                                    'email' => 'required|email|unique:users,email',
                                    'endereco' => 'required',
                                    'telefone' => 'required']);

            $input =$request->all();

            $cliente= Cliente::create($input);

        if(!$cliente){

            return redirect()->route('clients.index')->with('success', 'Erro ao criar cliente');
        }

        return redirect()->route('clients.index')->with('success', 'Clientes criado com sucesso');

    }

        public function show($id)
    {
            $cliente = Clientes::find($id);

            return view('clientes.show', compact('cliente'));

    }

        public function edit($id)
    {
            $cliente = Cliente::find($id);

             return view('clientes.edit', compact('cliente'));
    }

        public function update(Request $request, $id)
    {
            $this->validate($request, ['nome' =>'required',
                                        'email' => 'required',
                                            'endereco' => 'required',
                                                'telefone' => 'required']);

        $cliente = Clientes:: find($id);
        $input = $request->all();
        $cliente->update($input);

        return redirect()->route('clients.index')->with('success','Cliente atualizado');

    }

    public function destroy($id)
    {
        Clientes::find($id)->delete();

        return redirect()->route('clients.index')->with('success', 'Cliente apagado');
    }

}
