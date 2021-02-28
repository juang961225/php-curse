<?php

$meses = array(
    'enero', 'febrero', 'marzo',
    'abril', 'mayo', 'junio',
    'julio', 'agosto', 'septiembre',
    'octubre', 'noviembre', 'diciembre'
);

sort($meses);
#rsort() esto es para ordenar a la inversa
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>meses del año</title>
</head>
<body>
    <h1>meses del año</h1>
    <ul>
        <?php
        
        foreach($meses as $mes){
            echo "<li>$mes</li>";
        }
        
        ?>
    </ul>
</body>
</html>