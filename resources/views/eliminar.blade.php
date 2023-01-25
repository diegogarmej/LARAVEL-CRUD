@extends('layout/plantilla')

@section('tituloPagina', "Nuevo Registro")

@section('contenido')
<div class="card">
    <h5 class="card-header">Eliminar Registro/h5>
    <div class="card-body">

        <p class="card-text">
            <div class="alert alert-danger" role="alert">
                Esta seguro de eliminar el registro ?
                <table class="table table-sm table-hover">
                    <thead>
                        <th>Primer Apellido</th>
                        <th>Segundo Apellido</th>
                        <th>Nombre</th>
                        <th>Fecha Nacimiento</th>

                    </thead>
                    <tbody>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tbody>
                </table>
                <hr>
                <form action="">
                    <a href="{{route("persona.index")}}" class="btn btn-info"> Regresar
                        <span class="fa-solid fa-rotate-left" ></span>
                    </a>
                    
                    <button class="btn btn-danger"> 
                        <span class = "fa-solid fa-user-xmark"></span> Eliminar
                    </button>        
                </form>    
            </div>
        </p>
        
    </div>
</div>


@endsection

