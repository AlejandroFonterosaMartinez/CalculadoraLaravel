<!-- resources/views/calculadora/index.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>

<body>
    <!-- Tu formulario y contenido aquí -->
    <form action="{{ route('calcular') }}" method="post">
        @csrf
        <label for="numero1">Número 1:</label>
        <input type="number" name="numero1" required>
        <br>

        <label for="numero2">Número 2:</label>
        <input type="number" name="numero2" required>
        <br>

        <label for="operacion">Operación:</label>
        <select name="operacion" required>
            <option value="suma">Suma</option>
            <option value="resta">Resta</option>
            <option value="multiplicacion">Multiplicación</option>
            <option value="division">División</option>
        </select>
        <br>

        <button type="submit">Calcular</button>
    </form>
</body>

</html>
