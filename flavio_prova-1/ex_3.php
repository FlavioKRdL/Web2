<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Exercício 3</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <style>
        .main-section{
            display: flex;
            width: 100vw;
            height: 20vh;
            justify-content: space-evenly;
        }
        .item-slot{
            display: flex;
            width: 15vw;
            height: 20vh;
            flex-direction: column;
        }
        .item-name{
            text-align: center;
        }
        .preco{
            text-align: center;
        }
        .item-image{
            display: flex;
            justify-content: center;
        }
        .pag{
            text-align: center;
        }
    </style>
</head>
<body>
<?php 
require("header1.html");
?>
    <div class="navbar-header">
        <p class="navbar-brand">Exercício 3 - Calculador de juros</p>
    </div>
<?php
require("header2.html");
?>
<br><br><br><br><br><br><br>

<div class="main-section">
        <div class="item-slot">
            <section class="item-name"><p>Item 1</p></section>
            <br>
            <section class="item-image"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/27/PHP-logo.svg/260px-PHP-logo.svg.png" alt="" width="100vw" height="100vh"></section>
            <section class="preco"><p>R$1.356,00</p></section>
            <br>
            <section class="pag"><a href="http://localhost/flavio_prova-1/ex_3.php?preco=1356">Formas de pagamento</a></section>
        </div>

        <div class="item-slot">
            <section class="item-name"><p>Item 1</p></section>
            <br>
            <section class="item-image"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/d5/CSS3_logo_and_wordmark.svg/120px-CSS3_logo_and_wordmark.svg.png" alt="" width="100vw" height="100vh"></section>
            <section class="preco"><p>R$4.878,00</p></section>
            <br>
            <section class="pag"><a href="http://localhost/flavio_prova-1/ex_3.php?preco=4878">Formas de pagamento</a></section>
        </div>

        <div class="item-slot">
            <section class="item-name"><p>Item 1</p></section>
            <br>
            <section class="item-image"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c3/Python-logo-notext.svg/121px-Python-logo-notext.svg.png" alt="" width="100vw" height="100vh"></section>
            <section class="preco"><p>R$2.235,00</p></section>
            <br>
            <section class="pag"><a href="http://localhost/flavio_prova-1/ex_3.php?preco=2235">Formas de pagamento</a></section>
        </div>
</div>

<?php
    if(isset($_GET["preco"])){
        $preco = $_GET["preco"];
        $vista = $preco*0.95;
        $em3 = $preco;
        $em3_parcela = $preco/3;

        $em5 = $preco * 1.05;
        $em5_parcela = $em5/5;

        $em12 = $preco*1.1;
        $em12_parcela = $em12/12;

        $em18 = $preco * 1.15;
        $em18_parcela = $em18/18;

        echo("O preço informado foi: R$".$preco);
        echo("<br>");
        echo("As condições de pagamento são: ");
        echo("<br>");

        ?>

        <ul>
            <li><?php echo("À vista: <b>$vista</b> (5% de desconto);") ?></li>
            <li><?php echo("Parcelado em 3x de <b>R$$em3_parcela</b>, totalizando <b>R$$em3</b> "); ?></li>
            <li><?php echo("Parcelado em 5x de <b>R$$em5_parcela</b>, totalizando <b>R$$em5</b> "); ?></li>
            <li><?php echo("Parcelado em 12x de <b>R$$em12_parcela</b>, totalizando <b>R$$em12</b> "); ?></li>
            <li><?php echo("Parcelado em 18x de <b>R$$em18_parcela</b>, totalizando <b>R$$em18</b> "); ?></li>
        </ul>

        <?php
    }
?>

</body>
</html>