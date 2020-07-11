<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    <h1> Projeto Calculadora </h1>
    <form method="post" action="calc.php">
        Valor 1: <input type="text" name="txtv1"><br>
        Valor 2: <input type="number" name="txtv2"><br>
        <br>
        <select name="operacao">
            <option>Soma</option>
            <option>Subtração</option>
            <option>Multiplicação</option>
            <option>Divisão</option>
        </select>
        <br> <input type="submit" value="Calcular">
    </form>
</body>
</html>