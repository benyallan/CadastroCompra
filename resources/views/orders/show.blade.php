@extends('adminlte::page')

@section('title', 'Pedido')

@section('content_header')
    <h1><strong>Pedido: </strong>{{$order->number}}</h1>
@stop

@section('content')
    <div class="d-flex flex-row-reverse bd-highlight">
        <a class="btn btn-primary btn-sm "
            href="{{route('order.index')}}" role="button">
            Voltar
        </a>
    </div>
    <div class="container">
        <div class="row">
            <label class="col-sm-1-12 col-form-label">
                <strong>Número: </strong>{{$order->number}}
            </label>
        </div>
        <div class="row">
            <label class="col-sm-1-12 col-form-label">
                <strong>Cliente: </strong>{{$order->client->name}}
            </label>
        </div>
        <div class="row">
            <label class="col-sm-1-12 col-form-label">
                <strong>Email do Cliente: </strong>{{$order->client->email}}
            </label>
        </div>
        <div class="row">
            <label class="col-sm-1-12 col-form-label">
                <strong>Produto: </strong>{{$order->product->description}}
            </label>
        </div>
        <div class="row">
            <label class="col-sm-1-12 col-form-label">
                <strong>Valor Unitário do produto: </strong>
                {{$order->product->unitaryValue}}
            </label>
        </div>
        <div class="row">
            <label class="col-sm-1-12 col-form-label">
                <strong>Quantidade: </strong>{{$order->amount}}
            </label>
        </div>
        <div class="row">
            <label class="col-sm-1-12 col-form-label">
                <strong>Valor do pedido: </strong>
                {{$order->amount * $order->product->unitaryValue}}
            </label>
        </div>
        <div class="row">
            <label class="col-sm-1-12 col-form-label">
                <strong>Data do pedido: </strong>
                {{$order->amount * $order->created_at}}
            </label>
        </div>
        <a class="btn btn-primary"
            href="{{route('order.edit', $order->number)}}" role="button">
            Editar
        </a>
    </div>
@stop

