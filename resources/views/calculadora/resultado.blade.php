<!-- resources/views/calculadora/resultado.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <div class="result-container">
        <h1>Resultado</h1>
        <p>El resultado de la operación es: {{ $resultado }}</p>
        <a href="/">Volver a la Calculadora</a>
    </div>
</body>
</html>
