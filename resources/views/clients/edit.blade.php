@extends('adminlte::page')

@section('title', 'Clientes')

@section('content_header')
    <h1><strong>Editando: </strong>{{$client->name}}</h1>
@stop

@section('content')
    <div class="d-flex flex-row-reverse bd-highlight">
        <a class="btn btn-primary btn-sm "
            href="{{route('client.index')}}" role="button">
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
        <form action="{{route('client.update', $client->id)}}" method="POST">
            @csrf @method('PUT')
            <div class="form-group row">
                <label class="col-sm-1-12 col-form-label">
                    {{$client->id}}
                </label>
            </div>
            <div class="form-group row">
                <label for="name" class="col-sm-1-12 col-form-label">
                    Nome:
                </label>
                <div class="col-sm-1-12">
                    <input type="text" class="form-control" name="name"
                        id="name" placeholder="nome"
                        value="{{$client->name}}">
                </div>
            </div>

            <div class="form-group row">
                <label for="cpf" class="col-sm-1-12 col-form-label">
                    CPF:
                </label>
                <div class="col-sm-1-12">
                    <input type="text" class="form-control" name="cpf"
                        id="cpf" placeholder="CPF"
                        value="{{$client->cpf}}">
                </div>
            </div>
            <div class="form-group row">
                <label for="email" class="col-sm-1-12 col-form-label">
                    E-mail:
                </label>
                <div class="col-sm-1-12">
                    <input type="text" class="form-control" name="email"
                        id="email" placeholder="email"
                        value="{{$client->email}}">
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

