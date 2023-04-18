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
                            <button type="submit" class="btn btn-fill btn-primary" onclick="event.preventDefault(); newUser('{{route('newUser')}}');">Nuevo Usuario</button>
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
                                        <button class="btn btn-round btn-simple btn-primary" onclick="event.preventDefault(); buttonDetail('{{route('user.detailUser', $usuario->id)}}');" style="margin-right: 10px;" title="Detalles"><i class="tim-icons icon-alert-circle-exc"></i></button>
                                        <button class="btn btn-round btn-simple btn-primary" onclick="event.preventDefault(); buttonUpdate('{{route('user.editUser', $usuario->id)}}');" style="border-color: #0dcaf0; margin-right: 10px;" title="Actualizar"><i style="color: #0dcaf0" class="tim-icons icon-refresh-02"></i></button>
                                        <button class="btn btn-round btn-simple btn-warning" onclick="event.preventDefault(); buttonDelete('{{route('user.delete', $usuario->id)}}');" title="Eliminar"><i class="tim-icons icon-trash-simple"></i></button>
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

        function newUser(url) {
            Swal.fire({
                title: '¿Quieres registrar un nuevo usuario?',
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

        function buttonDetail(url) {
            Swal.fire({
                title: '¿Ver detalles del usuario?',
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
                title: '¿Quieres editar este usuario?',
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
                title: '¿Quieres eliminar este usuario?',
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
