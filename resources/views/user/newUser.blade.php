@extends('layouts.app', ['page' => __('Nuevo Ususario'), 'pageSlug' => 'profile'])

@section('content')
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="col-sm-6 text-left">
                        <h3 class="title">{{ __('Nuevo Usuario') }}</h3>
                    </div>
                </div>
                <form method="post" action="{{ route('user.save') }}" autocomplete="off">
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

                        <div class="input-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="tim-icons icon-lock-circle"></i>
                                </div>
                            </div>
                            <input type="password" name="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="{{ __('Password') }}">
                            @include('alerts.feedback', ['field' => 'password'])
                        </div>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="tim-icons icon-lock-circle"></i>
                                </div>
                            </div>
                            <input type="password" name="password_confirmation" class="form-control" placeholder="{{ __('Confirmar Password') }}">
                        </div>

                        <button type="submit" class="btn btn-fill btn-primary" style="margin-left: 250px">{{ __('Registrar') }}</button>

                    </div>
                </form>

                    <div class="card-footer">
                        <a href="{{route('viewUsers')}}"><button class="btn btn-fill btn-primary" title="Volver a Usuarios"><i class="tim-icons icon-double-left"></i></button></a>
                    </div>
            </div>
        </div>
    </div>
@endsection
