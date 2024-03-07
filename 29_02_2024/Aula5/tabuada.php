<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Praticando 1 - Tabuada</h1>
    <br><br>
    
    <form action="" method="get">
        <label for="valor">Valor:</label>
        <br>
        <input type="text" name="valor" id="valor">
        <br>
        <input type="submit" value="Manda!">
    </form>

    <?php 
        $valor = filter_input(INPUT_GET, "valor", FILTER_SANITIZE_NUMBER_INT);

        echo("<h3>Tabuada do $valor:<h3>");

        echo("<br>");

        for($x=0; $x<=10; $x++){
            echo "$valor X $x = ".$valor*$x;
            echo "<br>";
        }
    ?>
</body>
</html>