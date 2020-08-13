@extends('layouts.base')
@section('content')
    <h1>Clientes</h1>
        @foreach($clients as $client)
            <tr>
                <td>{{$client->id }}</td>
                <td>{{ $client->name}} </td>
            </tr>
        @endforeach   
    
@endsection