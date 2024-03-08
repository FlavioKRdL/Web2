<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        .sect1{
            width : 50vw ;
            height: 12vh;
            display:flex;
            justify-content:space-between;
        }
        .sq-red{
            background-color: red;
            height: 10vh;
            width: 10vh;
        }
        .sq-green{
            background-color: green;
            height: 10vh;
            width: 10vh;
        }
        .sq-blue{
            background-color: blue;
            height: 10vh;
            width: 10vh;
        }
    </style>
</head>
<body>
    <h1>Destino</h1>
    <hr>

    <?php

        if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')   
            $url = "https://";   
        else  
            $url = "http://";   
        // Append the host(domain name, ip) to the URL.   
        $url.= $_SERVER['HTTP_HOST'];
        echo $url; 
        echo "<br>";

        // Append the requested resource location to the URL   
        $url.= $_SERVER['REQUEST_URI'];    

        echo $url;  

        echo "<br><br>";
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

        if(!empty($nome)){
            echo("<p>Nome informado: $nome </p>");
            echo(var_dump($nome));
        }
        if(!empty($email)){
            echo("<p>E-mail informado: $email</p>");
        }

        if($nome=="Jose Louro"){
            $nome_url="Jose%20Louro";
        }
        else{
            $nome_url=$nome;
        }
    ?>

    <style>
        body{
            background-color: <?php echo($cor);?>;
        }
    </style>

    <br><br>

    <a href="https://localhost/aula4/destino-get.php?nome=Flavio&email=flavio@email.com&cor=blue">[Nome = Flavio, email = flavio@email.com, cor = blue]</a>
    <br>
    <a href="https://localhost/aula4/destino-get.php?nome=Jose%20Louro&email=jose@email.com&cor=green">[Nome = Jose Louro, email = jose@email.com, cor = green]</a>
    <br><br>

    <section class="sect1">
        <a href=<?php echo("https://localhost/aula4/destino-get.php?nome=$nome_url&email=$email&cor=red"); ?>>
            <div class="sq-red"></div>
        </a>

        <a href=<?php echo("https://localhost/aula4/destino-get.php?nome=$nome_url&email=$email&cor=green"); ?>>
            <div class="sq-green"></div>
        </a>

        <a href=<?php echo("https://localhost/aula4/destino-get.php?nome=$nome_url&email=$email&cor=blue"); ?>>
            <div class="sq-blue"></div>
        </a>
    </section>

    <br>
    <a href="https://localhost/aula4/destino-get.php">Limpar tudo</a>
</body>
</html>