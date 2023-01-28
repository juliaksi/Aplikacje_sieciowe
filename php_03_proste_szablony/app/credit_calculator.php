<?php

$hide_intro = false;

function getParams(&$x,&$y,&$z) {
    $x = isset($_REQUEST ['amount']) ? $_REQUEST ['amount'] : null;
    $y = isset($_REQUEST ['months']) ? $_REQUEST ['months'] : null;
    $z = isset($_REQUEST ['percent']) ? $_REQUEST ['percent'] : null;
}

function validate(&$x,&$y,&$z,&$messages_calc) {

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

    if (count ( $messages_calc ) != 0) return false;
    else return true;
}

function process(&$x,&$y,&$z,&$result_calc) {
    if (empty ( $messages_calc )) {
        $x = intval($x);
        $y = intval($y);
        $z = intval($z) / 100;

        if ($z <= 0) {
            $result_calc = $x / ($y * 12);
        } else {
            $result_calc = ($x * (($z / 100) / 12) * ((1 + (($z / 100) / 12)) ** ($y * 12))) / ((((1 + ($z / 12 / 100)) ** ($y * 12))) - 1);
        }
        $result_calc = round($result_calc, 2);
    }
}

$x = null;
$y = null;
$z = null;
$result_calc = null;
$messages_calc = array();

getParams($x,$y,$z);
if ( validate($x,$y,$z,$messages_calc) ) {
    $infos [] = 'Przekazano parametry.';
    $hide_intro = true;
    process($x,$y,$operation,$result_calc);
    $infos [] = 'Parametry poprawne. Wykonuję obliczenia.';
}

// 4. Wywołanie widoku, wcześniej ustalenie zawartości zmiennych elementów szablonu

$page_title = 'Kalkulator kredytowy';
$page_description = 'Szablon polegający na rozbiciu plików php na templatki';
$page_header = 'Kalkulator kredytowy';
$page_footer = 'Kalkulator kredytowy do obliczania wartości raty kredytowej';

include 'main_view.php';