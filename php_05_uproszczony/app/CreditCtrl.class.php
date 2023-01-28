<?php
require_once $conf->root_path.'/lib/smarty/Smarty.class.php';
require_once $conf->root_path.'/app/Messages.class.php';
require_once $conf->root_path.'/app/CreditForm.php';
require_once $conf->root_path.'/app/CreditResult.php';

class creditCalculator {
    private $messages_calc;
    private $form;
    private $result_calc;

    public function __construct(){
        $this->messages_calc = new Messages();
        $this->form = new CreditForm();
        $this->result_calc = new CreditResult();
    }

    public function getParams(){
        $this->form->amount = $_REQUEST ['amount'] ?? null;
        $this->form->months = $_REQUEST ['months'] ?? null;
        $this->form->percent = $_REQUEST ['percent'] ?? null;
    }

    public function validate(): bool {
        if (! (isset ( $this->form->amount ) && isset ( $this->form->months ) && isset ( $this->form->percent ))) {
            return false;
        }

        if ($this->form->amount == "" || $this->form->amount <= 0) {
            $this->messages_calc->addError('Nie podano kwoty');
        }
        if ($this->form->months == "" || $this->form->months <= 0 ) {
            $this->messages_calc->addError('Nie podano ilości lat');
        }
        if ($this->form->percent == "") {
            $this->messages_calc->addError('Nie podano oprocentowania');
        }

        if (! $this->messages_calc->isError()) {
            if ( is_int ( $this->form->amount )) {
                $this->messages_calc->addError('Kwota nie jest liczbą');
            }

            if ( is_int ( $this->form->months )) {
                $this->messages_calc->addError('Lata nie jest liczbą');
            }

            if (! is_numeric ( $this->form->percent )) {
                $this->messages_calc->addError('Procenty nie są liczbą');
            }
        }

        return ! $this->messages_calc->isError();
    }

    public function process() {

        $this->getparams();
        $this->result_calc = null;

        if ($this->validate()) {
            $this->form->amount = intval($this->form->amount);
            $this->form->months = intval($this->form->months);
            $this->form->percent = intval($this->form->percent) / 100;
            $this->messages_calc-> addInfo('Parametry poprawne.');

            if ($this->form->percent <= 0) {
                $this->result_calc = $this->form->amount / ($this->form->months * 12);
            } else {
                $this->result_calc = ($this->form->amount * (($this->form->percent / 100) / 12) * ((1 + (($this->form->percent / 100) / 12)) ** ($this->form->months * 12))) / ((((1 + ($this->form->percent  / 12 / 100)) ** ($this->form->months* 12))) - 1);
            }

            $this->result_calc = round($this->result_calc, 2);
            $this->messages_calc-> addInfo('Wykonano obliczenia.');
        }

        $this->generateView();
    }

    public function generateView() {
        global $conf;

        $smarty = new Smarty();
        $smarty->assign('conf',$conf);

        $smarty->assign('page_title','Obiektowe programowanie PHP');
        $smarty->assign('page_description','Klasy -> Metody -> Credit.php');
        $smarty->assign('page_header','Obiekty w PHP');

        $smarty->assign('amount_curr','zł miesięcznie');
        $smarty->assign('loan_amount','Kwota kredytu: ');
        $smarty->assign('number_of_years','Ilość lat: ');
        $smarty->assign('percent_desc','Oprocentowanie (liczba całkowita np. 1): ');

        $smarty->assign('errors','Wystąpiły błędy:');
        $smarty->assign('info','Informacje:');
        $smarty->assign('calc_here','Wynik:');
        $smarty->assign('form_heading','Kalkulator Kredytowy');
        $smarty->assign('count','Oblicz jedną ratę');

        $smarty->assign('footer_1','Kalkulator kredytowy prosty widok Tomasz Bracik');
        $smarty->assign('footer_2','Z wykorzystaniem technologii php/smart/css');


        $smarty->assign('messages_calc',$this->messages_calc);
        $smarty->assign('form',$this->form);
        $smarty->assign('result_calc',$this->result_calc);

        $smarty->display($conf->root_path.'/app/CreditView.tpl');
    }
}
