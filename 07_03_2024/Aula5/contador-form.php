<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Praticando 2 - Contador</h1>
    <br><br><br>
    <form action="https://localhost/aula5/contador-post.php" method="post">
        <label for="inicio">Inicio: </label>
        <input type="number" name="inicio" id="inicio">
        <br><br>

        <label for="final">Final: </label>
        <input type="number" name="final" id="final">
        <br><br>

        <label for="inc">Incremento: </label>
        <input type="number" name="inc" id="inc">
        <br><br>

        <input type="submit" value="Manda!">
        <input type="reset" value="Esquece">
    </form>
</body>
</html>