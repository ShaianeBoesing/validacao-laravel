<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Cliente;

class ClienteControlador extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            $clientes = Cliente::all();
            return view('cliente',compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('novocliente');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
        {
        $regras = [
            'nome'=>'required|min:5',
            'idade'=>'required|min:2|max:3',
            'endereco'=>'required',
            'email'=>'required|email|unique:clientes' //tabela que deve ser verificada
        ];
        $mensagens = [
            'required' => 'O campo :attribute é obrigatório',
            'nome.min'=> 'O nome precisa ter no mínimo 5 caracteres',
            'idade.min' => 'A idade precisa ter no mínimo 2 dígitos',
            'idade.max' => 'A idade não pode ultrapassar 3 dígitos',
            'email.email' => 'Digite um endereço de e-mail válido',
            'email.unique' => 'Este e-mail já foi cadastrado'
        ];

        $request->validate($regras, $mensagens);

        $clientes = new Cliente();
        $clientes->nome = $request->input('nome');
        $clientes->idade = $request->input('idade');
        $clientes->endereco = $request->input('endereco');
        $clientes->email = $request->input('email');
        $clientes->save();
        return(redirect(route('clientes.index')));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
