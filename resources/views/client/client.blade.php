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
                            <button type="submit" class="btn btn-fill btn-primary" onclick="event.preventDefault(); newClient('{{route('newClient')}}');">Nuevo Cliente</button>
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
                            @foreach( $clients as $client)
                                <tr>
                                    <td>{{$client->name}}</td>
                                    <td>{{$client->email}}</td>
                                    <td>{{$client->telefono}}</td>
                                    <td>{{$client->direccion}}</td>
                                    <td class="text-center">
                                        <button class="btn btn-round btn-simple btn-primary" onclick="event.preventDefault(); buttonUpdate('{{route('client.editClient', $client->id)}}');" style="border-color: #0dcaf0; margin-right: 10px;"><i style="color: #0dcaf0" class="tim-icons icon-refresh-02"></i></button>
                                        <button class="btn btn-round btn-simple btn-warning" onclick="event.preventDefault(); buttonDelete('{{route('client.delete', ['id' => $client->id])}}');"><i class="tim-icons icon-trash-simple"></i></button>
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



        function newClient(url) {
            Swal.fire({
                title: '¿Quieres registrar un nuevo cliente?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                cancelButtonText: 'Cancelar',
                confirmButtonText: 'Aceptar'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = url
                }
            });
        }

        function buttonUpdate(url) {
            Swal.fire({
                title: '¿Quieres editar este cliente?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                cancelButtonText: 'Cancelar',
                confirmButtonText: 'Aceptar'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = url
                }
            });
        }

        function buttonDelete(url) {
            Swal.fire({
                title: '¿Quieres eliminar este cliente?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                cancelButtonText: 'Cancelar',
                confirmButtonText: 'Aceptar'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = url
                }
            });
        }
    </script>
@endpush
