<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Praticando: Calculadora de Média</h1>
    <br><br><br>

    <?php 
        print_r($_POST);
        echo("<br><br>");

        $nota1 = filter_input(INPUT_POST, "nota1", FILTER_SANITIZE_NUMBER_FLOAT);
        $nota2 = filter_input(INPUT_POST, "nota2", FILTER_SANITIZE_NUMBER_FLOAT);
        $nota3 = filter_input(INPUT_POST, "nota3", FILTER_SANITIZE_NUMBER_FLOAT);

        $media = ($nota1+$nota2+$nota3)/3;
        echo("Média sem tratamento: ".var_dump($media));
        echo("<br>");
        $media_string = number_format((float)$media, 2, '.', '');
        echo("Média com tratamento(string): ".var_dump($media_string));
        echo("<br>");
        $media = floatval($media_string);
        echo("Média após tratamento e reconversão em float: ".var_dump($media));
        echo("<br>");

        echo("<p>O/A aluno(a) com notas $nota1, $nota2, e $nota3 tem média igual a $media</p>");
        echo("<br>");

        switch($media){
            case $media<4.0:
                $estado = "reprovado";
                $cor = "red";
                break;

            case $media<6.0:
                $estado = "recuperação";
                $cor = "yellow";
                break;

            case $media>=6.0:
                $estado = "aprovado";
                $cor = "green";
        }
    ?>

    <style>
        .p1{
            color: <?php echo($cor); ?>;
            font:bold;
        }
    </style>

    <?php 
        echo("<p>Com essa media, o aluno está <span class=p1>$estado</span></p>");
    ?>
</body>
</html>