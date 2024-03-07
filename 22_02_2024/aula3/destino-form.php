<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $titulo = filter_input(INPUT_POST,"titulo", FILTER_SANITIZE_SPECIAL_CHARS);
        $corpo = filter_input(INPUT_POST,"corpo",   FILTER_SANITIZE_SPECIAL_CHARS);
        $corTexto = filter_input(INPUT_POST,"corTexto", FILTER_SANITIZE_SPECIAL_CHARS);
        $corFundo = filter_input(INPUT_POST,"corFundo", FILTER_SANITIZE_SPECIAL_CHARS);
        $imagem = filter_input(INPUT_POST,"imagem", FILTER_SANITIZE_SPECIAL_CHARS);
        $link = filter_input(INPUT_POST,"link", FILTER_SANITIZE_SPECIAL_CHARS);
    ?>

    <style>
        body{
            background-color: <?php echo($corFundo); ?>;
            color: <?php echo($corTexto); ?>;
        }
    </style>

    <h1><?php echo($titulo); ?></h1>
    <br>
    <section>
        <p><?php echo($corpo); ?></p>
        <br>
    </section>

    <section>
        <figure>
            <img src=<?php echo($imagem); ?> alt="">
            <br>
            <figcaption><a href=<?php echo($link) ?> target="_blank"><?php echo($link) ?></a></figcaption>
        </figure>
    </section>
</body>
</html>