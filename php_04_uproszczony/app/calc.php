<?php
require_once dirname(__FILE__).'/../config.php';
require_once _ROOT_PATH.'/lib/smarty/Smarty.class.php';

function getParams(&$form) {
    $form['amount'] = $_REQUEST ['amount'] ?? null;
    $form['months'] = $_REQUEST ['months'] ?? null;
    $form['percent'] = $_REQUEST ['percent'] ?? null;
}

function validate(&$form,&$infos,&$messages_calc): bool {
    if ( ! (isset($form['amount']) && isset($form['months']) && isset($form['percent']) ))	return false;

    $infos [] = 'Przekazano parametry.';

	if ( $form['amount'] == "") $messages_calc [] = 'Nie podano kwoty';
	if ( $form['months'] == "") $messages_calc [] = 'Nie podano ilości lat';
    if ( $form['percent'] == "") $messages_calc [] = 'Nie podano oprocentowania';

    if ( count($messages_calc) == 0 ) {
		if (! is_numeric( $form['amount'] )) $messages_calc [] = 'Kwota nie jest liczbą';
		if (! is_numeric( $form['months'] )) $messages_calc [] = 'Lata nie jest liczbą';
        if (! is_numeric( $form['percent'] )) $messages_calc [] = 'Procenty nie są liczbą';
	}

    if (count($messages_calc)>0) return false;
	else return true;
}

function process(&$form,&$infos,&$messages_calc,&$result_calc) {
    $infos [] = 'Parametry poprawne. Wykonuję obliczenia.';

    if (empty ( $messages_calc )) {
        $amount= floatval($form['amount']);
        $months = floatval($form['months']);
        $percent = floatval($form['percent']) / 100;

        if ($percent <= 0) {
            $result_calc = $amount / ($months * 12);
        } else {
            $result_calc = ($amount * (($percent / 100) / 12) * ((1 + (($percent / 100) / 12)) ** ($months * 12))) / ((((1 + ($percent / 12 / 100)) ** ($months * 12))) - 1);
        }
        $result_calc = round($result_calc, 2);
    }
}

$amount = null;
$months = null;
$percent = null;

$form = null;
$result_calc = null;
$messages_calc = array();
$infos = array();

getParams($form);
if ( validate($form,$infos,$messages_calc) ){
	process($form,$infos,$messages_calc,$result_calc);
}

$smarty = new Smarty();

$smarty->assign('app_url',_APP_URL);
$smarty->assign('root_path',_ROOT_PATH);
$smarty->assign('page_title','Kalkulator Kredytowy');
$smarty->assign('page_description','Prosty przykład implementacji biblioteki Smarty');
$smarty->assign('page_header','Szablony Smarty');
$smarty->assign('default','Domyślna zawartość');

$smarty->assign('amount_curr','zł miesięcznie');
$smarty->assign('loan_amount','Kwota kredytu: ');
$smarty->assign('number_of_years','Ilość lat: ');
$smarty->assign('percent_desc','Oprocentowanie (liczba całkowita np. 1): ');

$smarty->assign('errors','Wystąpiły błędy:');
$smarty->assign('info','Informacje:');
$smarty->assign('calc_here','Wynik:');
$smarty->assign('form_heading','Kalkulator Kredytowy');
$smarty->assign('count','Oblicz jedną ratę');

$smarty->assign('footer_1','Kalkulator kredytowy prosty widok ');
$smarty->assign('footer_2','Z wykorzystaniem technologii php/smart/css');

$smarty->assign('form',$form);
$smarty->assign('result_calc',$result_calc);
$smarty->assign('messages_calc',$messages_calc);
$smarty->assign('infos',$infos);

try {
    $smarty->display(_ROOT_PATH . '/app/calc.tpl');
} catch (SmartyException|Exception $e) {
}