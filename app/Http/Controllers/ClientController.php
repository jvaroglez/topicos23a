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
        $clients = Client::all();
        return view('client.client', compact('clients'));
    }

    public function detail($id)
    {
        $client = Client::findOrFail($id);
        return view('client.detailClient', compact('client'));
    }

    public function newClient()
    {
        return view('client.newClient');
    }

    public function save(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'telefono' => 'required|numeric',
            'direccion' => 'required|string|max:255',
        ]);

        $data = $request->all();
        $client = new Client();
        $client->name = $data['name'];
        $client->email = $data['email'];
        $client->telefono = $data['telefono'];
        $client->direccion = $data['direccion'];
        $client->save();
        return redirect('client');
    }

    public function editClient($id)
    {
        $client = Client::findOrFail($id);
        return view('client.editClient', compact('client'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'telefono' => 'required|numeric',
            'direccion' => 'required|string|max:255',
        ]);
        //Actualizar datos
        $client = Client::findOrFail($id);
        $client->name = $request->input('name');
        $client->email = $request->input('email');
        $client->telefono = $request->input('telefono');
        $client->direccion = $request->input('direccion');
        $client->save();
        return redirect('client');
    }

    public function delete($id)
    {
        $client = Client::findOrFail($id);
        $client->delete();
        return redirect('client');
    }
}
