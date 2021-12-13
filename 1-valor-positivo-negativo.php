<?php

$numeroDigitado = 3;

if ($numeroDigitado > 0) {
    echo "valor positivo";
} elseif ($numeroDigitado < 0) {
    echo "valor negativo";
} elseif ($numeroDigitado === 0) {
    echo "valor igual a zero";
}