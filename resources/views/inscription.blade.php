@extends('layouts.base')
@section('content')

    @if(!is_null ($winner))
        <h1>Felicidades al ganador</h1>
        
        <div>En esta ocacion el afortunado ganador es: {{$client->name}} quien e inscribio el dia {{$client->created_at}}</div>
    @else
    <h1>Bienvenido</h1>
    <!--<a type="button" class="btn btn-primary" href="/client/create">register Client </a>-->
    <div class = "row">
        <div class="col">
            @if($errors->any())
                <div class= 'alert alert-danger'></div>
                <ul>
                    @foreach($errors->all() as $error)
                        
                        @if(strcmp ( $error, "The cedula must be at least 100000." ))
                            <li>{{$error}}</li>
                        @else
                            <li>Invalid phone number</li>
                        @endif
                    @endforeach
                    
                    
                </ul>
            @endif
            <form accion="/inscripcion" method="POST">
                <div class="form-group">
                    @csrf
                    <input type="text" class= "form-control" id="name" name="name" placeholder="Name" value= "{{old('name')}}">
                    <input type="text" class= "form-control" id="last_name" name="last_name" placeholder="Apellido" value= "{{old('last_name')}}">
                    <input type="text" class= "form-control" id="cedula" name="cedula" placeholder="Cedula" value= "{{old('cedula')}}">
                    <input type="text" class= "form-control" id="department" name="department" placeholder="Departamento" value= "{{old('department')}}">
                    <input type="text" class= "form-control" id="city" name="city" placeholder="City" value= "{{old('city')}}">
                    <input type="text" class= "form-control" id="phone" name="phone" placeholder="Celular" value= "{{old('phone')}}">
                    <input type="text" class= "form-control" id="email" name="email" placeholder="Email" value= "{{old('email')}}">
                    <input type="text" class= "form-control" id="habeas_data" name="habeas_data" placeholder="Habeas data">
                </div>

                <button class="btn btn-primary" type="submit" >Submit</button>
            </form>
        </div>
    </div>
    @endif

   
    
@endsection