<!DOCTYPE html>
<html lang="it-IT" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Boolfolio - Base</title>

    <!-- Usando Vite -->
    @vite(['resources/js/app.js'])
</head>
<body>
    <div class="container py-5 text-center">
        <h1>Laravel Boolfolio</h1>
        
        <button class="btn btn-primary mt-5"><a class="text-decoration-none " href="{{route('admin.index')}}">Gestisci i progetti</a></button>
    </div>
</body>
</html>