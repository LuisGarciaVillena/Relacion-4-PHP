<?php

include 'funciones.php';

echo "Números capicúaos entre 1 y 99999: ";

for ($i = 1; $i <= 99999; $i++) {
    if (esCapicua($i)) {
        echo $i . " ";
    }
}
?>