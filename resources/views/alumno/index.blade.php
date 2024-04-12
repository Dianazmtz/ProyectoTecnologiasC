@extends('tema.app')

@section('title', 'Inicio')

@section('contenido')
<div class="container mt-4">
    <h6 class="text-center mb-4">Alumnos Registrados</h6>
    <div class="table-responsive">
        <table class="table table-bordered table-hover custom-table"> 
            <thead class="bg-light text-dark text-center">
                <tr >
                    <th scope="col">Primer Nombre</th>
                    <th scope="col">Segundo Nombre</th>
                    <th scope="col">Primer Apellido</th>
                    <th scope="col">Segundo Apellido</th>
                    <th scope="col">Correo</th>
                    <th scope="col">No. Cuenta</th>
                    <th scope="col">Estado</th>
                    <th scope="col">Fecha de Registro</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($alumnos as $alumno)
                <tr class="text-center">
                    <td>{{ $alumno->primerNombre }}</td>
                    <td>{{ $alumno->segundoNombre }}</td>
                    <td>{{ $alumno->primerApellido }}</td>
                    <td>{{ $alumno->segundoApellido }}</td>
                    <td>{{ $alumno->correo }}</td>
                    <td>{{ $alumno->noCuenta }}</td>
                    <td>{{ $alumno->estadoAlumno() }}</td>
                    <td>{{ $alumno->fecha_registro }}</td>
                    <td>
                        <a href="{{ route('alumno.edit', $alumno) }}" class="btn btn-secondary">
                            <i class="fas fa-edit"></i> 
                        </a>
                        <a href="{{ route('alumno.show', $alumno) }}" class="btn btn-secondary">
                            <i class="fas fa-eye"></i> 
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
