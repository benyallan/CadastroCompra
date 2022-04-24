@extends('adminlte::page')

@section('title', 'Clientes')

@section('content_header')
    <h1><strong>{{$client->name}}</strong></h1>
@stop

@section('content')
    <div class="d-flex flex-row-reverse bd-highlight">
        <a class="btn btn-primary btn-sm "
            href="{{route('client.index')}}" role="button">
            Voltar
        </a>
    </div>
    <div class="container">
        <div class="row">
            <label for="inputName" class="col-sm-1-12 col-form-label">
                <strong>ID: </strong>{{$client->id}}
            </label>
        </div>
        <div class="row">
            <label for="name" class="col-sm-1-12 col-form-label">
                <strong>CPF: </strong>{{$client->cpf}}
            </label>
        </div>
        <div class="row">
            <label for="cpf" class="col-sm-1-12 col-form-label">
                <strong>E-mail: </strong>{{$client->email}}
            </label>
        </div>
        <a class="btn btn-primary"
            href="{{route('client.edit', $client->id)}}" role="button">
            Editar
        </a>
    </div>
@stop

