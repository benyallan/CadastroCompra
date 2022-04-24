@extends('adminlte::page')

@section('title', 'Produtos')

@section('content_header')
    <h1>Produtos</h1>
    <a name="" id="" class="btn btn-primary"
        href="{{route('product.create')}}" role="button">
        Novo
    </a>
@stop

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th>id</th>
                <th>Descrição</th>
                <th>Valor Unitário</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
            <tr>
                <td scope="row">{{$product->id}}</td>
                <td>{{$product->description}}</td>
                <td>{{$product->unitaryValue}}</td>
                <td>
                    <form action="{{route('product.destroy', $product->id)}}"
                        method="POST">
                        @csrf @method('delete')
                        <a name="" id="" class="btn btn-sm btn-primary"
                            href="{{route('product.show', $product->id)}}"
                            role="button">
                            Ver
                        </a>
                        <a name="" id="" class="btn btn-sm btn-primary"
                            href="{{route('product.edit', $product->id)}}"
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
