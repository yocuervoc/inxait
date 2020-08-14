@extends('layouts.base')
@section('content')
    

<h1>Bienvenido</h1>
    <h3> A tener en cuenta</h3>
    <ul>No se podra generar un ganador si la lista de clientes es menor a 5 </ul>
    <ul>Un vez generado un gandor no sera posible realizar nuevas incripcions. En caso de querer hacerlo debe borrar el ganador directamente en la base de datos</ul>
    <div class = "row">
        <div class="col">
            <form accion="/seleccionar_ganador" method="POST">
                <div class="form-group">
                    @csrf
                    <a class="btn btn-primary" href="/reporte">Descargar reporte clientes</a>
                    <a class="btn btn-primary" href="/inscripcion">Agregar nuevo cliente</a>
                    <td><button class="btn btn-primary" type="submit" name="name" value="choose_winner">Generar Ganador Aleatorio</button></td>
                    <td><button class="btn btn-danger" type="submit" name="name" value="delete_winner">eliminar ganador</button></td>
                </div>
            </form>
            
        </div>
    </div>   
    

    
@endsection