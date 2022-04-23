@extends('adminlte::page')

@section('title', 'Clientes')

@section('content_header')
    <h1>Cientes</h1>
@stop

@section('content')
@foreach ($clients as $client)
<pre>
    {{$client}}
</pre>
@endforeach
@stop


