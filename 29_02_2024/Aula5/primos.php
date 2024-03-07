<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .div1{
            display: flex;
            justify-content: space-between;
        }
        .div2{
            height: 2vh;
            width: 4vw;
        }
    </style>
</head>
<body>
    <h1>Praticando 3 - Números Primos</h1>
    <br><br><br>

    <div class="div1">
        <div class="div2">
            <a href="https://localhost/aula5/primos.php?num=1">Número 1</a>
        </div>

        <div class="div2">
            <a href="https://localhost/aula5/primos.php?num=2">Número 2</a>
        </div>

        <div class="div2">
            <a href="https://localhost/aula5/primos.php?num=3">Número 3</a>
        </div>

        <div class="div2">
            <a href="https://localhost/aula5/primos.php?num=5">Número 5</a>
        </div>

        <div class="div2">
            <a href="https://localhost/aula5/primos.php?num=10">Número 10</a>
        </div>

        <div class="div2">
            <a href="https://localhost/aula5/primos.php?num=23">Número 23</a>
        </div>

        <div class="div2">
            <a href="https://localhost/aula5/primos.php?num=42">Número 42</a>
        </div>
    </div>

    <br>
    
    <?php 
        $num = filter_input(INPUT_GET, "num", FILTER_SANITIZE_NUMBER_INT);
        if($num%2==0){
            $par="par";
            $corPar = "red";
        }
        else{
            $par = "ímpar";
            $corPar = "green";
        }

        $divisores = 0;
        for($i=$num;$i>=1;$i--){
            if($num%$i==0){
                $divisores++;
            }
        }
        if($divisores<=2){
            $primo="é";
            $corPrimo = "green";
        }
        else{
            $primo = "não é";
            $corPrimo = "red";
        }
    ?>
    <style>
        .sp1{
            font-size: large;
            font: bold;
            background-color: <?php echo($corPrimo);?>;
        }
        .sp2{
            font-size: large;
            font: bold;
            background-color: <?php echo($corPar);?>;
        }
    </style>
    <?php

        echo("<br><br>");
        echo("O número <span class='sp1'>$num</span> <span class='sp1'>$primo</span> primo. Ele também é <span class='sp2'>$par</span>");
    ?>
</body>
</html>