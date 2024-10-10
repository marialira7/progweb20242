<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Ecercício 2 - comandos de condição</title>
</head>
<body>
    <?php
        $datetime = new DateTime("now", new DateTimeZone("America/Sao_Paulo"))
        $hora = $datetime->format('H')

        if ($hora)>=0 && $hora<=12){
            echo "<h1>BOM DIA!<h1>"
            echo "<img src= 'https://br.pinterest.com/pin/854276623113834065/'>";
        }elseif($hora>12 && $hora<=24){
            echo "<h1>BOA TARDE!<h1>"
            echo "<img src= 'https://br.pinterest.com/pin/25684660370511739/'>";
        }elseif($hora>12 && $hora<=24){
            echo "<h1>BOA NOITE!<h1>"
            echo "<img src= 'https://br.pinterest.com/pin/855824735463633663/'>";
        }
    ?>
</body>
</html>