<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clientes;

class ClienteController extends Controller
{

    public function create(){
        return view('cadastrarClientes');
    }

    public function store(Request $request){
        $cliente = new Clientes();

        $cliente->nome = $request-> nome;
        $cliente->email = $request-> email;
        $cliente->endereco = $request-> endereco;
        $cliente->datanasc = $request-> datanasc;
        $cliente->cep = $request-> cep;
        $cliente->telefone = $request-> telefone;

        $cliente->save();

        return redirect('/')-> with('msg', 'Usuário cadastrado com sucesso!');

    }
}
