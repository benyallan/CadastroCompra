@extends('adminlte::page')

@section('title', 'Pedido')

@section('content_header')
    <h1>Novo pedido</h1>
@stop

@section('content')
    <div class="d-flex flex-row-reverse bd-highlight">
        <a class="btn btn-primary btn-sm "
            href="{{route('order.index')}}" role="button">
            Voltar
        </a>
    </div>
    @if ($errors->any())
        <ul class="list-group">
            @foreach ($errors->all() as $error)
            <li class="list-group-item list-group-item-warning">
                {{ $error }}
            </li>
            @endforeach
        </ul>
    @endif
    <div class="container">
        <form action="{{route('order.store')}}" method="POST">
            @csrf
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <label class="input-group-text" for="client">Cliente</label>
                </div>
                <select class="custom-select" id="client_id" name="client_id">
                    <option selected>Escolher...</option>
                    @foreach ($clients as $client)
                        <option value="{{$client->id}}">
                            {{$client->name}}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <label class="input-group-text" for="product">Produto</label>
                </div>
                <select class="custom-select" id="product_id" name="product_id">
                    <option selected>Escolher...</option>
                    @foreach ($products as $product)
                        <option value="{{$product->id}}">
                            {{$product->description}}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group row">
                <label for="amount" class="col-sm-1-12 col-form-label">
                    Quantidade:
                </label>
                <div class="col-sm-1-12">
                    <input type="number" class="form-control" name="amount"
                        value="1" min="1" id="amount" placeholder="quantidade">
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-sm-2 col-sm-10">
                    <button type="submit" class="btn btn-primary">Salvar</button>
                </div>
            </div>
        </form>
    </div>
@stop

