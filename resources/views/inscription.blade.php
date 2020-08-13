@extends('layouts.base')
@section('content')
    <h1>Bienvenido</h1>
    <!--<a type="button" class="btn btn-primary" href="/client/create">register Client </a>-->
    <div class = "row">
        <div class="col">
            <form accion="/client" method="POST">
                <div class="form-group">
                    @csrf
                    <input type="text" class= "form-control" id="name" name="name" placeholder="Name">
                    <input type="text" class= "form-control" id="last_name" name="last_name" placeholder="Apellido">
                    <input type="text" class= "form-control" id="cedula" name="cedula" placeholder="Cedula">
                    <input type="text" class= "form-control" id="department" name="department" placeholder="Departamento">
                    <input type="text" class= "form-control" id="city" name="city" placeholder="City">
                    <input type="text" class= "form-control" id="phone" name="phone" placeholder="Celular">
                    <input type="text" class= "form-control" id="email" name="email" placeholder="Email">
                    <input type="text" class= "form-control" id="habeas_data" name="habeas_data" placeholder="Habeas data">


                    
                </div>

                <button class="btn btn-primary" type="submit" >Submit</button>
            </form>
        </div>
    </div>   
    
@endsection