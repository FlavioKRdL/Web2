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
    
    <?php 
        $inicio = filter_input(INPUT_POST, "inicio", FILTER_SANITIZE_NUMBER_INT);
        $final = filter_input(INPUT_POST, "final", FILTER_SANITIZE_NUMBER_INT);
        $inc = filter_input(INPUT_POST, "inc", FILTER_SANITIZE_NUMBER_INT);

        echo("<br><br>");
        echo("Início: $inicio");
        echo("<br>");
        echo("Final: $final");
        echo("<br>");
        echo("Incremento: $inc");
        echo("<br><br>");

        if($inicio>$final){
            for($x=$inicio;$x>=$final;$x=$x-$inc){
                echo("$x ");
            }
        }
        else{
            for($x=$inicio; $x<=$final; $x=$x+$inc){
                echo("$x ");
            }
        }
    ?>
</body>
</html>