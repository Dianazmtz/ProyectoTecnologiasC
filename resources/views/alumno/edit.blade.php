@extends('tema.app')

@section('title', "Editar alumno")

@section('contenido')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="border-color: #a86199;">
                <div class="card-header text-white " style="background-color: #a86199;">
                    <h5 class="card-title m-0 text-white">Editar registro alumno {{ $alumno->primerNombre }}</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('alumno.update', $alumno) }}" method="POST">
                        @method('put')
                        @csrf
                        <x-alumno-form-body :alumno="$alumno"/>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @if ($errors->any())
    <div class="row justify-content-center mt-4">
        <div class="col-md-8">
            <div class="alert alert-danger">
                <ul class="m-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    @endif
</div>
@endsection
