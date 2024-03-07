<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Praticando 5 - Checkbox</h1>
    <br><br><br>

    <?php 
    var_dump($_POST);
    $hobbies = $_POST["hobby"];
    sort($hobbies, SORT_STRING);
    echo("<br><br>");
    var_dump($hobbies);
    echo("<br>");
    
    $size = count($hobbies);
    if($size>3){
        echo("<ul>");
        echo("<li>$hobbies[0]</li>");
        echo("<li>$hobbies[1]</li>");
        echo("<li>$hobbies[2]</li>");
        echo("<li>...</li>");
        echo("</ul>");
    }
    else{
        echo("<ul>");
        for($i=0;$i<$size;$i++){
            echo("<li>$hobbies[$i]</li>");
        }
        echo("</ul>");
    }
    ?>
</body>
</html>