<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Exercício 1</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        .form1{
            position: center;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .div1{
            display: flex;
            width: 10vw;

            justify-content: space-evenly;
        }
        .div2{
            display: flex;
            width: 25vw;

            justify-content: center;
            justify-content: space-evenly;
        }
        .div3{
            display: flex;
            flex-direction: column;

            height: 2vh;
        }
    </style>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<?php 
require("header1.html");
?>
    <div class="navbar-header">
        <p class="navbar-brand">Exercício 1 - Gerador de Texto</p>
    </div>
<?php
require("header2.html");
?>
<br><br><br><br><br><br><br>

    <form action="ex_1_send.php" method="post" class="form1">

        <div class="div2">
        <label for="titulo">Título da página: </label>
        <input type="text" name="titulo" id="titulo" value='<?php echo($_COOKIE['titulocookie']); ?>'>

        <select name="alinhamento" id="alinhamento">
        <option value="left">Esquerda</option>
        <option value="center">Centralizado</option>
        <option value="right">Direita</option>
        </select>

        </div>
        
        <div class="div3"></div>

        <div class="div2">
        <label for="corpo">Corpo: </label>
        <textarea name="corpo" id="corpo" cols="30" rows="10"></textarea value='<?php echo($_COOKIE['corpocookie']); ?>'>
        </div>

        <div class="div3"></div>

        <div class="div2">
        <label for="img">Imagem: </label>
        <input type="url" name="img" id="img" value='<?php echo($_COOKIE['imgcookie']); ?>'>

        <select name="img_pos" id="img_pos">
        <option value="inline">No corpo</option>
        <option value="background">No fundo</option>
        </select>
        </div>
        
        <div class="div3"></div>

        <div class="div2">
        <label for="cor_texto">Cor do texto: </label>
        <input type="color" name="cor_texto" id="cor_texto" value='<?php echo($_COOKIE['cor_textocookie']); ?>'>
        </div>
        
        <div class="div3"></div>

        <div class="div1">
        <input type="submit" value="Submit">
        <input type="reset" value="Reset">
        </div>
        
    </form>
</body>
</html>