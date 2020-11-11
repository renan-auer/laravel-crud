<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;   
use App\Cliente;

class ClienteController extends Controller
{

    public function index(){
        $clientes = Cliente::paginate(10);
        return view('cliente.index', compact('clientes'));
    }

    public function create(){
        return view('cliente.create');  
    }

    public function store(Request $request){
        Cliente::create([
            'nome' => $request->nome,
            'cpfCnpj' => $request->cpfCnpj
        ]);

        return redirect()->route('cliente.index');
    }

    public function show($id){ 
        $cliente = Cliente::findOrFail($id);
        return $cliente;
        return view('cliente.show', ['cliente' => $cliente]);
    }

    public function edit(Request $request,Cliente $cliente){
        $cliente->update([
            'nome' => $request->nome,
            'cpfCnpj' => $request->cpfCnpj
        ]);
        return "Cliente atualizado com sucesso!";
    }
}
