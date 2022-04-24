@extends('adminlte::page')

@section('title', 'Pedidos')

@section('content_header')
    <h1>Pedidos</h1>
    <a name="" id="" class="btn btn-primary"
        href="{{route('order.create')}}" role="button">
        Novo
    </a>
@stop

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th>Número</th>
                <th>Data</th>
                <th>Quantidade</th>
                <th>Valor do pedido</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($orders as $order)
            <tr>
                <td scope="row">{{$order->number}}</td>
                <td>{{$order->created_at}}</td>
                <td>{{$order->amount}}</td>
                <td>{{$order->product->unitaryValue * $order->amount}}</td>
                <td>
                    <form action="{{route('order.destroy', $order->number)}}"
                        method="POST">
                        @csrf @method('delete')

                        <a class="btn btn-sm btn-primary"
                            href="{{route('order.show', $order->number)}}"
                            role="button">
                            Ver
                        </a>
                        <a class="btn btn-sm btn-primary"
                            href="{{route('order.edit', $order->number)}}"
                            role="button">
                            Editar
                        </a>
                        <button type="submit" class="btn btn-sm btn-danger">
                            Apagar
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@stop
