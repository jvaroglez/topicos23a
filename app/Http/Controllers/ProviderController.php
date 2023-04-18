<?php

namespace App\Http\Controllers;

use App\Models\Provider;
use Illuminate\Http\Request;

class ProviderController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index()
    {
        $providers = Provider::all();
        return view('provider.provider', compact('providers'));
    }

    public function detail($id)
    {
        $provider = Provider::findOrFail($id);
        return view('provider.detailProvider', compact('provider'));
    }

    public function newProvider()
    {
        return view('provider.newProvider');
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
        $provider = new Provider();
        $provider->name = $data['name'];
        $provider->email = $data['email'];
        $provider->telefono = $data['telefono'];
        $provider->direccion = $data['direccion'];
        $provider->save();
        return redirect('provider');
    }

    public function editProvider($id)
    {
        $provider = Provider::findOrFail($id);
        return view('provider.editProvider', compact('provider'));
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
        $provider = Provider::findOrFail($id);
        $provider->name = $request->input('name');
        $provider->email = $request->input('email');
        $provider->telefono = $request->input('telefono');
        $provider->direccion = $request->input('direccion');
        $provider->save();
        return redirect('provider');
    }

    public function delete($id)
    {
        $providers = Provider::findOrFail($id);
        $providers->delete();
        return redirect('provider');
    }
}
