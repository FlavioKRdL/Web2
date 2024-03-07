<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    <h1>Praticando 4 - Gerador de Tabela</h1>
    <br><br>
    <form action="https://localhost/aula5/tabela-post.php" method="post">
        <label for="linhas" class="form-label">Linhas:</label>
        <br>
        <input type="number" name="linhas" id="linhas">

        <br><br>

        <label for="cols">Colunas:</label>
        <br>
        <input type="number" name="cols" id="cols">

        <br><br>

        <label for="estilo">Estilo:</label>
        <br>
        <select name="estilo" id="estilo">
            <option value="default">Default</option>
            <option value="primary">Primary</option>
            <option value="secondary">Secondary</option>
            <option value="success">Success</option>
            <option value="danger">Danger</option>
            <option value="warning">Warning</option>
            <option value="dark">Dark</option>
        </select>

        <br><br>

        <input type="submit" value="Manda!">
        <input type="reset" value="Limpa!">
    </form>
</body>
</html>