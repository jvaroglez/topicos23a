@extends('layouts.app', ['page' => __('Nuevo Ususario'), 'pageSlug' => 'profile'])

@section('content')
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="col-sm-6 text-left">
                        <h3 class="title">{{ __('Editar Producto') }}</h3>
                    </div>
                </div>
                <form method="post" action="{{ route('product.update', $product->id) }}" autocomplete="off">
                    <div class="card-body">
                        @csrf
                        @method('PUT')
                        <div class="input-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="tim-icons icon-bag-16"></i>
                                </div>
                            </div>
                            <input type="text" name="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" value="{{$product->name}}" placeholder="{{ __('Producto') }}">
                            @include('alerts.feedback', ['field' => 'name'])
                        </div>

                        <div class="input-group{{ $errors->has('description') ? ' has-danger' : '' }}">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="tim-icons icon-paper"></i>
                                </div>
                            </div>
                            <input type="text" name="description" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" value="{{$product->description}}" placeholder="{{ __('Descripción') }}">
                            @include('alerts.feedback', ['field' => 'description'])
                        </div>

                        <div class="input-group{{ $errors->has('stock') ? ' has-danger' : '' }}">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="tim-icons icon-book-bookmark"></i>
                                </div>
                            </div>
                            <input type="text" name="stock" class="form-control{{ $errors->has('stock') ? ' is-invalid' : '' }}" value="{{$product->stock}}" placeholder="{{ __('Stock') }}">
                            @include('alerts.feedback', ['field' => 'stock'])
                        </div>

                        <div class="input-group{{ $errors->has('precio') ? ' has-danger' : '' }}">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="tim-icons icon-money-coins"></i>
                                </div>
                            </div>
                            <input type="text" name="precio" class="form-control{{ $errors->has('precio') ? ' is-invalid' : '' }}" value="{{$product->precio}}" placeholder="{{ __('Precio') }}">
                            @include('alerts.feedback', ['field' => 'precio'])
                        </div>

                        <button type="submit" class="btn btn-fill btn-primary" style="margin-left: 250px">{{ __('Actualizar') }}</button>

                    </div>
                </form>

                <div class="card-footer">
                    <a href="{{route('viewProducts')}}"><button class="btn btn-fill btn-primary" title="Volver a Productos"><i class="tim-icons icon-double-left"></i></button></a>
                </div>
            </div>
        </div>
    </div>
@endsection
