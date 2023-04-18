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
                            <h2 class="card-title">Productos</h2>
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
                                    Descripción
                                </th>
                                <th>
                                    Stock
                                </th>
                                <th>
                                    Precio
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{$product->name}}</td>
                                    <td>{{$product->description}}</td>
                                    <td>{{$product->stock}}</td>
                                    <td>$ {{$product->precio}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer">
                        <a href="{{route('viewProducts')}}"><button class="btn btn-fill btn-primary" title="Volver a Productos"><i class="tim-icons icon-double-left"></i></button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection