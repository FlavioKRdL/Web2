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

    <?php 
        $linhas = filter_input(INPUT_POST, "linhas", FILTER_SANITIZE_NUMBER_INT);
        $cols = filter_input(INPUT_POST, "cols", FILTER_SANITIZE_NUMBER_INT);
        $estilo = filter_input(INPUT_POST, "estilo", FILTER_SANITIZE_SPECIAL_CHARS);

    ?>

    <table class= "table table-<?php echo("$estilo");?> table-bordered">
        <?php for($i=0;$i<$linhas;$i++){
            echo("<tr>");
            for($j=0;$j<$cols; $j++){
                echo("<td> - </td>");
            }
            echo("</tr>");
        } 
        ?>
    </table>

</body>
</html>