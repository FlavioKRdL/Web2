<!DOCTYPE html>
<?php
setcookie("titulocookie", filter_input(INPUT_POST, "titulo", FILTER_SANITIZE_SPECIAL_CHARS));
setcookie("alinhamentocookie", filter_input(INPUT_POST, "alinhamento", FILTER_SANITIZE_SPECIAL_CHARS));
setcookie("corpocookie", filter_input(INPUT_POST, "corpo", FILTER_SANITIZE_SPECIAL_CHARS));
setcookie("imgcookie", filter_input(INPUT_POST, "img", FILTER_SANITIZE_SPECIAL_CHARS));
setcookie("img_poscookie", filter_input(INPUT_POST, "img_pos", FILTER_SANITIZE_SPECIAL_CHARS));
setcookie("cor_textocookie", filter_input(INPUT_POST, "cor_texto", FILTER_SANITIZE_SPECIAL_CHARS));
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if(isset($_POST["titulo"])){
        $titulo = filter_input(INPUT_POST, "titulo", FILTER_SANITIZE_SPECIAL_CHARS);
    }
    else{
        $titulo = $_COOKIE["titulocookie"];
    }
    
    if(isset($_POST["alinhamento"])){
        $alinhamento = filter_input(INPUT_POST, "alinhamento", FILTER_SANITIZE_SPECIAL_CHARS);
    }
    else{
        $alinhamento = $_COOKIE["alinhamentocookie"];
    }

    if(isset($_POST["corpo"])){
       $corpo = filter_input(INPUT_POST, "corpo", FILTER_SANITIZE_SPECIAL_CHARS);
    }
    else{
       $corpo = $_COOKIE["corpocookie"];
    }

    if(isset($_POST["img"])){
        $img = filter_input(INPUT_POST, "img", FILTER_DEFAULT);
    }
    else{
        $img = $_COOKIE["imgcookie"];
    }
    
    if(isset($_POST["img_pos"])){
        $img_pos = filter_input(INPUT_POST, "img_pos", FILTER_SANITIZE_SPECIAL_CHARS);
    }
    else{
        $img_pos = $_COOKIE["img_poscookie"];
    }
    
    if(isset($_POST["cor_texto"])){
        $cor_texto = filter_input(INPUT_POST, "cor_texto", FILTER_SANITIZE_SPECIAL_CHARS);
    }
    else{
        $cor_texto = $_COOKIE["cor_textocookie"];
    }

    if($img_pos == "inline"){
        $placeholder = "<img src= '$img' >";
    }
    else{
        $placeholder = "<style> body{ background-image: url('$img')};  </style>";
    }

    ?>

    <style>
        body{
            color: <?php echo("$cor_texto");?>;
        }
        h1{
            text-align: <?php echo("$alinhamento"); ?>;
        }
    </style>

    <h1> <?php echo("$titulo"); ?></h1>

    <br><br>

    <p> <?php echo("$corpo"); ?> </p>

    <?php echo("$placeholder"); ?>

</body>
</html>