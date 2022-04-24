@extends('adminlte::page')

@section('title', 'Produtos')

@section('content_header')
    <h1><strong>Editando</strong></h1>
@stop

@section('content')
    <div class="d-flex flex-row-reverse bd-highlight">
        <a class="btn btn-primary btn-sm "
            href="{{route('product.index')}}" role="button">
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
        <form action="{{route('product.update', $product->id)}}" method="POST">
            @csrf @method('PUT')
            <div class="form-group row">
                <label class="col-sm-1-12 col-form-label">
                    {{$product->id}}
                </label>
            </div>
            <div class="form-group row">
                <label for="description" class="col-sm-1-12 col-form-label">
                    Descrição:
                </label>
                <div class="col-sm-1-12">
                    <input type="text" class="form-control" name="description"
                        id="description" placeholder="descrição"
                        value="{{$product->description}}">
                </div>
            </div>

            <div class="form-group row">
                <label for="unitaryValue" class="col-sm-1-12 col-form-label">
                    Valor Unitário:
                </label>
                <div class="col-sm-1-12">
                    <input type="text" class="form-control" name="unitaryValue"
                        id="unitaryValue" placeholder="valor unitário"
                        value="{{$product->unitaryValue}}">
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

