@extends('layouts.app', ['page' => __('Nuevo Proveedor'), 'pageSlug' => 'profile'])

@section('content')
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="col-sm-6 text-left">
                        <h3 class="title">{{ __('Nuevo Proveedor') }}</h3>
                    </div>
                </div>
                <form method="post" action="{{route('provider.save')}}" autocomplete="off">
                    <div class="card-body">
                        @csrf

                        <div class="input-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="tim-icons icon-single-02"></i>
                                </div>
                            </div>
                            <input type="text" name="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Nombre') }}">
                            @include('alerts.feedback', ['field' => 'name'])
                        </div>

                        <div class="input-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="tim-icons icon-email-85"></i>
                                </div>
                            </div>
                            <input type="email" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('Email') }}">
                            @include('alerts.feedback', ['field' => 'email'])
                        </div>

                        <div class="input-group{{ $errors->has('telefono') ? ' has-danger' : '' }}">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="tim-icons icon-mobile"></i>
                                </div>
                            </div>
                            <input type="text" name="telefono" class="form-control{{ $errors->has('telefono') ? ' is-invalid' : '' }}" placeholder="{{ __('Teléfono') }}">
                            @include('alerts.feedback', ['field' => 'telefono'])
                        </div>

                        <div class="input-group{{ $errors->has('direccion') ? ' has-danger' : '' }}">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="tim-icons icon-square-pin"></i>
                                </div>
                            </div>
                            <input type="text" name="direccion" class="form-control{{ $errors->has('direccion') ? ' is-invalid' : '' }}" placeholder="{{ __('Dirección') }}">
                            @include('alerts.feedback', ['field' => 'direccion'])
                        </div>
                        <button type="submit" class="btn btn-fill btn-primary" style="margin-left: 250px">{{ __('Registrar') }}</button>

                    </div>
                </form>

                    <div class="card-footer">
                        <a href="{{route('viewProviders')}}"><button class="btn btn-fill btn-primary" title="Volver a Proveedores"><i class="tim-icons icon-double-left"></i></button></a>
                    </div>
            </div>
        </div>
    </div>
@endsection
