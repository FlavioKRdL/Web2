<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Destino</h1>
    <hr>

    <?php
        print_r($_GET);
        echo("<br><br>");
        /*
        Para recuperar valores do array $_POST podemos chamar cada campo enviado manualmente
        
        $nome = $_POST["nome"];
        $email=$_POST["email"];

        Porém fazer isso diretamente não é adequado, pois podem ser enviados caracteres que podem quebrar o código ou até
        realizar SQL injection.

        Para resolver isso, usamos a função filter_input:
        */
        $nome = filter_input(INPUT_GET, "nome", FILTER_SANITIZE_SPECIAL_CHARS);
        $email = filter_input(INPUT_GET, "email", FILTER_SANITIZE_EMAIL);
        $cor = filter_input(INPUT_GET,"cor", FILTER_SANITIZE_SPECIAL_CHARS);

        echo("<p>Nome informado: $nome <br>E-mail: $email</p>");
    ?>

    <style>
        body{
            background-color: <?php echo($cor);?>;
        }
    </style>

    <br><br>

    <a href="https://localhost/aula5/destino-get.php?nome=Flavio&email=flavio@email.com&cor=blue">[Nome = Flavio, email = flavio@email.com, cor = blue]</a>
    <br>
    <a href="https://localhost/aula5/destino-get.php?nome=Jose%20Louro&email=jose@email.com&cor=green">[Nome = Jose Louro, email = jose@email.com, cor = green]</a>
    <br>

    

    <br>
    <a href="https://localhost/aula5/destino-get.php">Limpar tudo</a>
</body>
</html>