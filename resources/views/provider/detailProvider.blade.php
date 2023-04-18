@extends('layouts.app', ['pageSlug' => 'dashboard'])

@section('content')
    <div class="row">
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card ">
                <div class="card-header ">
                    <div class="row">
                        <div class="col-sm-6 text-left">
                            <h5 class="card-category">Detalle de</h5>
                            <h2 class="card-title">Proveedor</h2>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table tablesorter">
                            <thead class="text-primary">
                            <tr>
                                <th>
                                    Nombre
                                </th>
                                <th>
                                    Email
                                </th>
                                <th>
                                    Teléfono
                                </th>
                                <th>
                                    Dirección
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{$provider->name}}</td>
                                    <td>{{$provider->email}}</td>
                                    <td>{{$provider->telefono}}</td>
                                    <td>{{$provider->direccion}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="{{route('viewProviders')}}"><button class="btn btn-fill btn-primary" title="Volver a Proveedores"><i class="tim-icons icon-double-left"></i></button></a>
                </div>
            </div>
        </div>
    </div>
@endsection