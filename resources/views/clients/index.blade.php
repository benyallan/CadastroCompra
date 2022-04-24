@extends('adminlte::page')

@section('title', 'Clientes')

@section('content_header')
    <h1>Clientes</h1>
    <a name="" id="" class="btn btn-primary"
        href="{{route('client.create')}}" role="button">
        Novo
    </a>
@stop

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th>id</th>
                <th>Nome</th>
                <th>CPF</th>
                <th>E-mail</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($clients as $client)
            <tr>
                <td scope="row">{{$client->id}}</td>
                <td>{{$client->name}}</td>
                <td>{{$client->cpf}}</td>
                <td>{{$client->email}}</td>
                <td>
                    <form action="{{route('client.destroy', $client->id)}}"
                        method="POST">
                        @csrf @method('delete')
                        <a name="" id="" class="btn btn-sm btn-primary"
                            href="{{route('client.show', $client->id)}}"
                            role="button">
                            Ver
                        </a>
                        <a name="" id="" class="btn btn-sm btn-primary"
                            href="{{route('client.edit', $client->id)}}"
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
