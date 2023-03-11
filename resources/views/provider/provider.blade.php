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
                            <h5 class="card-category">CRUD</h5>
                            <h2 class="card-title">Proveedores</h2>
                        </div>
                        <div class="col-sm-5">
                            <a href="{{route('newProvider')}}"><button type="submit" class="btn btn-fill btn-primary">Nuevo Proveedor</button></a>
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
                                <th class="text-center">
                                    Acciones
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach( $providers as $provider)
                                <tr>
                                    <td>{{$provider->name}}</td>
                                    <td>{{$provider->email}}</td>
                                    <td>{{$provider->telefono}}</td>
                                    <td>{{$provider->direccion}}</td>
                                    <td class="text-center">
                                        <a href="{{route('provider.editProvider', $provider->id) }}"><button class="btn btn-round btn-simple btn-primary" style="border-color: #0dcaf0; margin-right: 10px;" title="Actualizar"><i style="color: #0dcaf0" class="tim-icons icon-refresh-02"></i></button></a>
                                        <a href="{{route('provider.delete', ['id' => $provider->id])}}"><button class="btn btn-round btn-simple btn-warning" title="Eliminar"><i class="tim-icons icon-trash-simple"></i></button></a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script src="{{ asset('black') }}/js/plugins/chartjs.min.js"></script>
    <script>
        $(document).ready(function() {
            demo.initDashboardPageCharts();
        });
    </script>
@endpush
