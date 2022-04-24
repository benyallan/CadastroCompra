@extends('adminlte::page')

@section('title', 'Produtos')

@section('content_header')
    <h1><strong>Produto</strong></h1>
@stop

@section('content')
    <div class="d-flex flex-row-reverse bd-highlight">
        <a class="btn btn-primary btn-sm "
            href="{{route('product.index')}}" role="button">
            Voltar
        </a>
    </div>
    <div class="container">
        <div class="row">
            <label class="col-sm-1-12 col-form-label">
                <strong>ID: </strong>{{$product->id}}
            </label>
        </div>
        <div class="row">
            <label class="col-sm-1-12 col-form-label">
                <strong>Descrição: </strong>{{$product->description}}
            </label>
        </div>
        <div class="row">
            <label class="col-sm-1-12 col-form-label">
                <strong>Valor Unitário: </strong>{{$product->unitaryValue}}
            </label>
        </div>
        <a class="btn btn-primary"
            href="{{route('product.edit', $product->id)}}" role="button">
            Editar
        </a>
    </div>
@stop

