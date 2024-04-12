<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa; /* Color de fondo */
        }
        .container {
            margin-top: 50px; /* Espacio en la parte superior */
        }
        h1 {
            margin-bottom: 20px; /* Espacio inferior */
            font-weight: bold; /* Texto en negrita */
            font-size: 24px; /* Tamaño de fuente */
            color: #4e5153; /* Color del texto */
        }
        .barra-horizontal {
            width: 100%;
            border-bottom: 2px solid #7d7e80; /* Color de la barra */
            margin-bottom: 20px; /* Espacio inferior */
        }
        .btn-primary {
            background-color: #a86199; /* Color de fondo del botón */
            border-color: #a86199; /* Color del borde del botón */
            font-weight: italic; /* Texto en negrita */
        }
        .btn-primary:hover {
            background-color: #b6b9bd; /* Color de fondo del botón al pasar el cursor */
            border-color: #b6b9bd; /* Color del borde del botón al pasar el cursor */
        }

    
        .btn-secondary{
            background-color: #b6b9bd; /* Color de fondo del botón al pasar el cursor */
            border-color: #b6b9bd; /* Color del borde del botón al pasar el cursor */
            background-color: #a86199; /* Color de fondo del botón */
            border-color: #a86199; /* Color del borde del botón */
            padding: 0.375rem 0.75rem; /* Ajustar el padding para reducir el espacio alrededor del texto */
            font-size: 14px; /* Reducir el tamaño de la fuente */
            font-weight: normal; /* Desactivar el texto en negrita */
        }


    </style>
</head>
<body>
    <div class="container shadow rounded bg-white">
        <div class="row">
            <div class="col-12">
                <h1>Sistema de Registro de Alumnos</h1>
                <div class="barra-horizontal"></div>
            </div>
            <div class="col-md-6">
                <a href="{{route('alumno.create')}}" class="btn btn-primary mb-3">Crear nuevo registro</a>
                <a href="{{route('alumno.index')}}" class="btn btn-primary mb-3">Listar registros</a>
                <form action="{{ route('alumno.buscar') }}" method="GET" class="d-flex flex-md-row">
                    <input type="text" name="query" class="form-control me-2" placeholder="Buscar...">
                    <button class="btn btn-primary" type="submit">
                        <i class="fas fa-search"></i> <!-- Icono de búsqueda -->
                    </button>
                </form>
            </div>
            <div class="col-sm-12">
                @yield('contenido')
            </div>
        </div>
    </div>
</body>
</html>
