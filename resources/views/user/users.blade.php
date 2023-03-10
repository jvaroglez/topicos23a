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
                            <h2 class="card-title">Usuarios</h2>
                        </div>
                        <div class="col-sm-5">
                            <a href="{{route('newUser')}}"><button type="submit" class="btn btn-fill btn-primary">Nuevo Usuario</button></a>
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
                                <th class="text-center">
                                    Acciones
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach( $usuarios as $usuario )
                                <tr>
                                    <td>{{$usuario->name}}</td>
                                    <td>{{$usuario->email}}</td>
                                    <td class="text-center">
                                        <a href="{{route('user.editUser', $usuario->id) }}"><button class="btn btn-round btn-simple btn-primary" style="border-color: #0dcaf0; margin-right: 10px;" title="Actualizar"><i style="color: #0dcaf0" class="tim-icons icon-refresh-02"></i></button></a>
                                        <a href="{{route('user.delete', ['id' => $usuario->id])}}"><button class="btn btn-round btn-simple btn-warning" title="Eliminar"><i class="tim-icons icon-trash-simple"></i></button></a>
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
