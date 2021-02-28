<?php 

$edad = 17;

if ($edad >= 18) {
    echo "<h1>Bienvenido</h1>";
}else {
    echo "<h1>eres menos de edad</h1>";
}

#switch() condicional
$mes = 'enero';

switch ($mes) {
    case 'diciembre':
        echo 'feliz navidad';
        break;

    case 'enero':
        echo 'feliz año nuevo';
        break;
    
    default:
        echo 'en este mes no se celebra nada';
        break;
}


#ternarias

$edad = (isset($edad)) ? $edad : 'el usuario no establecio su edad';

echo "edad: $edad"

?>