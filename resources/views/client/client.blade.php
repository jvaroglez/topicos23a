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
                            <h2 class="card-title">Clientes</h2>
                        </div>
                        <div class="col-sm-5">
                            <div class="btn-group btn-group-toggle float-right" data-toggle="buttons">

                                <label class="btn btn-sm btn-primary btn-simple active">
                                    <input type="radio" name="options" checked>
                                    <span class="d-none d-sm-block d-md-block d-lg-block d-xl-block">Nuevo Cliente</span>
                                    <span class="d-block d-sm-none">
                                    <i class="tim-icons icon-single-02"></i>
                                </span>
                                </label>

                            </div>
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
                            @foreach( $clientes as $cliente)
                                <tr>
                                    <td>{{$cliente->name}}</td>
                                    <td>{{$cliente->email}}</td>
                                    <td>{{$cliente->telefono}}</td>
                                    <td>{{$cliente->direccion}}</td>
                                    <td class="text-center">
                                        <a href="#"><button class="btn btn-round btn-simple btn-primary" style="border-color: #0dcaf0"><i style="color: #0dcaf0" class="tim-icons icon-refresh-02"></i></button></a>
                                        <a href="{{route('client.delete', ['id' => $cliente->id])}}"><button class="btn btn-round btn-simple btn-warning"><i class="tim-icons icon-trash-simple"></i></button></a>
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
