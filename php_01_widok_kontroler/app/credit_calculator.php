<?php

$x = $_REQUEST ['amount'] ?? '';
$y = $_REQUEST ['months'] ?? '';
$z = $_REQUEST ['percent'] ?? '';

if ( ! (isset($x) && isset($y) && isset($z))) {
    $messages_calc [] = 'Błędne wywołanie aplikacji. Brak jednego z parametrów.';
}

if ($x == "" || $x == 0) {
    $messages_calc [] = 'Nie podano kwoty lub wynosi 0';
}
if ($y == "" || $y == 0) {
    $messages_calc [] = 'Nie podano ilości lat lub wynosi 0';
}
if ($z == "" || $z < 0) {
    $messages_calc [] = 'Nie podano wartości oprocentowania lub jest mniejsze od 0%';
}

if (empty( $messages_calc )) {
    if (! is_numeric( $x )) {
        $messages_calc [] = 'Pierwsza wartość nie jest liczbą całkowitą';
    }

    if (! is_numeric( $y )) {
        $messages_calc [] = 'Druga wartość nie jest liczbą całkowitą lub wynosi 0';
    }

    if (! is_numeric( $z )) {
        $messages_calc [] = 'Trzecia wartość nie jest liczbą całkowitą';
    }
}

if (empty ( $messages_calc )) {
    $x = intval($x);
    $y = intval($y);
    $z = intval($z) / 100;

    if ($z <= 0) {
        $result_calc = $x / ($y * 12);
    } else {
        $result_calc = ($x * (($z / 100) / 12) * ((1 + (($z / 100) / 12)) ** ($y * 12))) / (((( 1 + ($z / 12 / 100)) ** ($y * 12))) - 1);
    }
    $result_calc = round($result_calc, 2);
}

include 'calc_view.php';