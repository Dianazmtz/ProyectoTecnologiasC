@extends('tema.app')

@section('title', "Alumno")

@section('contenido')
<div class="container mt-4">
    <h3 class="mb-4">Editar Registro del Alumno <i>{{ $alumno->primerNombre }}</i></h3>
    <ul class="list-group mb-4">
        <li class="list-group-item">
            <span class="fw-bold">Primer apellido:</span> {{ $alumno->primerApellido }}
        </li>
        <li class="list-group-item">
            <span class="fw-bold">Segundo apellido:</span> {{ $alumno->segundoApellido }}
        </li>
        <li class="list-group-item">
            <span class="fw-bold">Correo:</span> {{ $alumno->correo }}
        </li>
        <li class="list-group-item">
            <span class="fw-bold">No. cuenta:</span> {{ $alumno->noCuenta }}
        </li>
        <li class="list-group-item">
            <span class="fw-bold">Estado:</span> {{ $alumno->estadoAlumno() }}
        </li>
        <li class="list-group-item">
            <span class="fw-bold">Fecha de registro:</span> {{ $alumno->fecha_registro }}
        </li>
    </ul>

    <div class="row">
        <div class="col-sm-12 mb-2">
            <form action="{{ route('alumno.destroy', $alumno) }}" method="POST">
                @csrf
                @method('delete')
                <button class="btn btn-danger btn-sm" type="submit">Borrar</button>
            </form>
        </div>
    </div>
</div>
@endsection
