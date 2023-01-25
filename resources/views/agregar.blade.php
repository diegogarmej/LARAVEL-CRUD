@extends('layout/plantilla')

@section('tituloPagina', "Nuevo Registro")

@section('contenido')
<div class="card">
    <h5 class="card-header">Nuevo Registro</h5>
    <div class="card-body">

        <p class="card-text">
            <form action="{{route('persona.store')}}" method="POST">
                @csrf
                <label for="">Primer Apellido</label>
                <input type="text" name="primer_apellido" class="form-control" required>
                <label for="">Segundo Apellido</label>
                <input type="text" name="segundo_apellido" class="form-control" required>
                <label for="">Nombre</label>
                <input type="text" name="nombre"class="form-control" required>
                <label for="">Fecha Nacimiento</label>
                <input type="date" name="fecha_nacimiento" class="form-control" required>
                <br>
                <a href="{{route('persona.index')}}" class="btn btn-info">Regresar
                    <span class="fa-solid fa-rotate-left" ></span>
                </a>
                <button class="btn btn-primary"> 
                    <span class= "fa-solid fa-user-pen"></span> Registrar
                </button>
            </form>    
        </p>
        
    </div>
</div>  


@endsection

