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
    
}
