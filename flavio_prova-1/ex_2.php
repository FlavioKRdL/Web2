<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Exercício 2</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <style>
        form{
            display: flex;
            
            justify-content: center;
        }
        .div2{
            width: 30vw;
            height: 20vh;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }
        .div1{
            width: 40vw;

            display: flex;
        }
    </style>
</head>
<body>
<?php 
require("header1.html");
?>
    <div class="navbar-header">
        <p class="navbar-brand">Exercício 2 - Calculadora de média</p>
    </div>
<?php
require("header2.html");
?>
<br><br><br><br><br><br><br>

<form action="ex_2.php" method="get">
    <div class="div2">

        <div class="div1">
            <label for="ava">Notas de avaliações(Peso 5.0): </label>
            <input type="number" name="ava" id="ava" step="0.1">
        </div>

        <div class="div1">
            <label for="tra">Notas de trabalhos(Peso 2.0): </label>
            <input type="number" name="tra" id="tra" step="0.1">
        </div>

        <div class="div1">
            <label for="pra">Notas de praticandos(Peso 3.0): </label>
            <input type="number" name="pra" id="pra" step="0.1">
        </div>
        
        <div class="div1">
        <input type="submit" value="submit">
        <input type="reset" value="reset">
        </div>

    </div>

    <div class="div2">
        <?php
            if(isset($_GET["ava"]) and isset($_GET["tra"]) and isset($_GET["pra"])){
                $notas = array($_GET["tra"], $_GET["pra"], $_GET["ava"]);
                rsort($notas);

                $media = ($_GET["ava"]*5 + $_GET["tra"]*2 + $_GET["pra"]*3)/10;
                ?>
                <h1>Notas informadas:</h1>
                <p>Avaliações: <?php echo($_GET["ava"]); ?></p>
                <p>Praticandos: <?php echo($_GET["pra"]); ?></p>
                <p>Trabalhos: <?php echo($_GET["tra"]); ?></p>
                <br>
                <p>Média final: <?php echo($media); ?></p>

                <?php
            }
        ?>
    </div>
</form>

</body>
</html>