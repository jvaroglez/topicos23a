<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index()
    {
        $clientes = Client::all();
        return view('client.client', compact('clientes'));
    }


    public function create()
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }


    public function delete($id)
    {
        $cliente = Client::findOrFail($id);
        $cliente->delete();
        return redirect('client');
    }
}
