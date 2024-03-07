<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Playing with variables</h1>
    <?php
        #echo("<br>");
        echo("Arrays: Lista de variáveis.");
        echo("<br>");
        echo('Criação: $nome=array(valor1,valor2,valor3);');
        echo("<br><br>");
        echo('Exemplo: $cars = array("Volvo","Toyota","Fiat");');

        echo("<br>");
        $cars = array("Volvo","Toyota","Fiat");
        var_dump($cars);

        echo("<br><br>");
        echo('Deve-se indicar uma posição de ìndice para acessar um array.');
        echo("<br>");
        echo('Pode-se usar var_dump($array)(feito acima) ou print_r($array) para ver o array de forma legível sem passar um índice.');
        echo("<br>");
        print_r($cars);
    
        echo("<br><br>");
        $box = array("Moedas",34.05,12,True);
        var_dump($box);
        echo("<br>");
        print_r($box);
        echo("<br><br><br>");


        echo("Também é possíve criar constantes em php. Elas não mudam durante a execução do programa.");
        echo("<br>");
        echo("Constantes seguem as mesmas regras de nomenclatura de criáveis normais, porém não comçam");
        echo("<br>");
        echo('com cifrão $, e seu nome é inteiro em CAIXA GRANDE.');
        echo("<br>");
        echo('Para isso, usa-se a função define: define("NOME",valor da constante);');
    ?>
</body>
</html>