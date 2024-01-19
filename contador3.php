<?php

$contador = 0;

// Intenta obrir el fitxer en mode lectura
if ($fd = fopen('counter.txt', 'r')) {
    $contador = intval(fgets($fd)); // Converteix la cadena a un enter
    fclose($fd);
}

// Intenta obrir el fitxer en mode escriptura
$fd2 = fopen('counter.txt', 'w');
$contador = $contador + 1; // Incrementa el contador en 1

fwrite($fd2, $contador);
fclose($fd2);

echo $contador;
?>
