@extends('tema.app')

@section('title', 'Nuevo alumno')

@section('contenido')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="border-color: #a86199;">
                <div class="card-header" style="background-color: #a86199;">
                    <h5 class="card-title m-0 text-white">Registrar alumno</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('alumno.store') }}" method="POST">
                        @csrf
                        <x-alumno-form-body/>
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
