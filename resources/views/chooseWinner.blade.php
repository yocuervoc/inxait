@extends('layouts.base')
@section('content')
    

<h1>Bienvenido</h1>
    <!--<a type="button" class="btn btn-primary" href="/client/create">register Client </a>-->
    <div class = "row">
        <div class="col">
            <form accion="/seleccionar_ganador" method="POST">
                <div class="form-group">
                    @csrf
                    <a class="btn btn-primary" href="/client">Descargar excel</a>
                    <td><button class="btn btn-primary" type="submit" name="name" value="choose_winner">Seleccionar Gandor</button></td>
                    <td><button class="btn btn-danger" type="submit" name="name" value="delete_winner">eliminar ganador</button></td>
                </div>
            </form>
            
        </div>
    </div>   
    

    
@endsection