<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro de Libros</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        /* Fondo general */
        body {
            background-color: #cbb4f5; /* morado claro */
        }

        /* Contenedor principal */
        .card-custom {
            background: white;
            border-radius: 15px;
            padding: 25px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.2);
        }

        /* Botón personalizado */
        .btn-purple {
            background-color: #6f42c1;
            color: white;
            border-radius: 10px;
        }

        .btn-purple:hover {
            background-color: #5a35a3;
        }

        /* Footer */
        .footer {
            background-color: #2c1a4d; /* morado oscuro */
            color: white;
            text-align: center;
            padding: 10px;
            position: fixed;
            bottom: 0;
            width: 100%;
            font-size: 14px;
        }
    </style>
</head>
<body>

<div class="container d-flex justify-content-center align-items-center" style="min-height: 90vh;">
    
    <div class="col-md-8 card-custom">
        
        <h2 class="text-center mb-4">📚 Registro de Libros</h2>

        <!-- FORMULARIO -->
        <form action="{{ route('libros.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <input type="text" name="titulo" class="form-control" placeholder="Título" required>
            </div>

            <div class="mb-3">
                <input type="text" name="autor" class="form-control" placeholder="Autor" required>
            </div>

            <div class="mb-3">
                <input type="number" name="anio" class="form-control" placeholder="Año (4 dígitos)" required>
            </div>

            <div class="d-grid">
                <button type="submit" class="btn btn-purple">Guardar Libro</button>
            </div>
        </form>

        <hr>

        <h4 class="text-center mt-4">📖 Lista de Libros</h4>

        <!-- TABLA -->
        <table class="table table-striped mt-3">
            <thead class="table-dark">
                <tr>
                    <th>Título</th>
                    <th>Autor</th>
                    <th>Año</th>
                </tr>
            </thead>
            <tbody>
                @foreach($libros as $libro)
                <tr>
                    <td>{{ $libro->titulo }}</td>
                    <td>{{ $libro->autor }}</td>
                    <td>{{ $libro->anio }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>

</div>

<!-- FOOTER -->
<div class="footer">
    Bloque 2 - Actividad 1 - Registro y Listado de Libros - Bloque 2 - Actividad 1 - Registro y Listado de Libros
</div>

</body>
</html>