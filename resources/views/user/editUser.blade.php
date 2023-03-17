@extends('layouts.app', ['page' => __('Editar Ususario'), 'pageSlug' => 'profile'])

@section('content')
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="col-sm-6 text-left">
                        <h3 class="title">{{ __('Editar Usuario') }}</h3>
                    </div>
                </div>
                <form method="post" action="{{ route('user.update', $usuario->id) }}" autocomplete="off">
                    <div class="card-body">
                        @csrf
                        @method('PUT')
                        <div class="input-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="tim-icons icon-single-02"></i>
                                </div>
                            </div>
                            <input type="text" name="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" value="{{$usuario->name}}" placeholder="{{ __('Nombre') }}">
                            @include('alerts.feedback', ['field' => 'name'])
                        </div>

                        <div class="input-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="tim-icons icon-email-85"></i>
                                </div>
                            </div>
                            <input type="email" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" value="{{$usuario->email}}" placeholder="{{ __('Email') }}">
                            @include('alerts.feedback', ['field' => 'email'])
                        </div>
                            <button type="submit" class="btn btn-fill btn-primary" style="margin-left: 250px">{{ __('Actualizar') }}</button>
                    </div>
                </form>

                <div class="col-sm-6 text-left">
                    <h3 class="title">{{ __('Editar Password') }}</h3>
                </div>
                <form method="post" action="{{ route('profile.password') }}" autocomplete="off">
                    <div class="card-body">
                        @csrf
                        @method('put')

                        @include('alerts.success', ['key' => 'password_status'])

                        <div class="form-group{{ $errors->has('old_password') ? ' has-danger' : '' }}">
                            <label>{{ __('Current Password') }}</label>
                            <input type="password" name="old_password" class="form-control{{ $errors->has('old_password') ? ' is-invalid' : '' }}" placeholder="{{ __('Current Password') }}" value="" required>
                            @include('alerts.feedback', ['field' => 'old_password'])
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                            <label>{{ __('New Password') }}</label>
                            <input type="password" name="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="{{ __('New Password') }}" value="" required>
                            @include('alerts.feedback', ['field' => 'password'])
                        </div>
                        <div class="form-group">
                            <label>{{ __('Confirm New Password') }}</label>
                            <input type="password" name="password_confirmation" class="form-control" placeholder="{{ __('Confirm New Password') }}" value="" required>
                        </div>
                        <button type="submit" class="btn btn-fill btn-primary" style="margin-left: 250px">{{ __('Actualizar password') }}</button>
                    </div>
                </form>
                    <div class="card-footer">
                        <a href="{{route('viewUsers')}}"><button class="btn btn-fill btn-primary" title="Volver a Usuarios"><i class="tim-icons icon-double-left"></i></button></a>
                    </div>
            </div>
        </div>
    </div>
@endsection
