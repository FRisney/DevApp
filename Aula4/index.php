<?php

$numero = $_GET['numero'];
if (count($numero) > 0) {
    if ($numero % 2 == 0) {
        echo 'O numero é par';
    } else {
        echo 'O numero é impar';
    }
} else {
    echo 'Digite "?numero=2" na url';
}
