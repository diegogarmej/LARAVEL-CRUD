@extends('layout/plantilla')

@section('tituloPagina', 'Crud Laravel 9')

@section('contenido')
<div class="card">
    <div class="card-header">CRUD LAVAREL 8 - MSQL</div>
    <div class="card-body">
        <div class="row">
            <div class= "col-sm-12">
                @if ($mensaje = Session::get('success'))
                    
                <div class="alert alert-success" role="alert">
                    {{ $mensaje }}
                </div>
                @endif
            </div>

        </div>
        <h5 class="card-title text-center" >Listado de personas</h5>
        <p>
            <a href="{{route("persona.create")}}" class= "btn btn-primary">
                <span class="fa-solid fa-user-plus"></span> Agregar nueva registro
            </a>

        </p>
        <hr>
        @php
        
        @endphp
        <p class="card text">
            <div class="table table-responsive">
                <table class="table table-sm table-bordered">
                    <thead>
                        <th>Primer Apellido</th>
                        <th>Segundo Apellido</th>
                        <th>Nombre</th>
                        <th>Fecha de Nacimiento</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </thead>    
                    <tbody>
                        @foreach ($datos as $item)
                        <tr>
                            <td>{{$item->primer_apellido}}</td>
                            <td>{{$item->segundo_apellido}}</td>
                            <td>{{$item->nombre}}</td>
                            <td>{{$item->fecha_nacimiento}}</td>
                            <td>
                                <form action="">
                                    <button class = "btn btn-warning btn-sm">
                                        <span class= "fa-solid fa-user-pen"></span>
                                    </button>

                                </form>
                            </td>
                            <td>
                                <form action="">
                                    <button class = "btn btn-danger btn-sm">
                                        <span class= "fa-solid fa-user-xmark"></span>
                                    </button>
                                </form>
                            </td>
                            
                        </tr>
                        @endforeach
                    </tbody>


                </table>





            </div>
        </p>

    </div>
    </div>
    </div>

    

@endsection
    
