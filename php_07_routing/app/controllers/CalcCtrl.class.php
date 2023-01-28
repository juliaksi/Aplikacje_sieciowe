<?php

namespace app\controllers;

use app\forms\CreditForm;
use app\transfer\CreditResult;

class CalcCtrl {

    private $form;
    private $result_calc;

    public function __construct(){
        $this->form = new CreditForm();
        $this->result_calc = new CreditResult();
    }

    public function getParams(){
        $this->form->amount = $_REQUEST ['amount'] ?? null;
        $this->form->months = $_REQUEST ['months'] ?? null;
        $this->form->percent = $_REQUEST ['percent'] ?? 0;
    }

    public function validate(): bool {
        if (! (isset ( $this->form->amount ) && isset ( $this->form->months ) && isset ( $this->form->percent ))) {
            return false;
        }

        if ($this->form->amount == "" || $this->form->amount <= 0) {
            getMessages()->addError('Nie podano kwoty');
        }
        if ($this->form->months == "" || $this->form->months <= 0 ) {
            getMessages()->addError('Nie podano ilości lat');
        }

        if (! getMessages()->isError()) {
            if ( is_int ( $this->form->amount )) {
                getMessages()->addError('Kwota nie jest liczbą');
            }

            if ( is_int ( $this->form->months )) {
                getMessages()->addError('Lata nie jest liczbą');
            }

            if (!($this->form->percent == '') && !is_numeric($this->form->percent)) {
                getMessages()->addError('Procenty nie są liczbą');
            }
        }

        return ! getMessages()->isError();
    }

    public function action_process() {

        $this->getparams();
        $this->result_calc = 0;

        if ($this->validate()) {
            $this->form->amount = intval($this->form->amount);
            $this->form->months = intval($this->form->months);
            $this->form->percent = intval($this->form->percent) / 100;
            getMessages()-> addInfo('Parametry poprawne.');

            if ($this->form->percent <= 0) {
                $this->result_calc = $this->form->amount / ($this->form->months * 12);
            } else {
                $this->result_calc = ($this->form->amount * (($this->form->percent / 100) / 12) * ((1 + (($this->form->percent / 100) / 12)) ** ($this->form->months * 12))) / ((((1 + ($this->form->percent  / 12 / 100)) ** ($this->form->months* 12))) - 1);
            }

            $this->result_calc = round($this->result_calc, 2);
            getMessages()-> addInfo('Wykonano obliczenia.');
        }

        $this->generateView();
    }

    public function action_calcShow(){
        getMessages()->addInfo('Witaj w kalkulatorze kredytowym');
        $this->generateView();
    }

    public function generateView() {
        getSmarty()->assign('page_title','Kontroler główny & autoloader klas');
        getSmarty()->assign('page_description','Kontroler główny (jeden punkt wejścia) -> Nowa struktura  -> Przestrzenie nazw i automatyczne ładowanie klas');
        getSmarty()->assign('page_header','Początek organizacji frameworka');

        getSmarty()->assign('user',unserialize($_SESSION['user']));
        getSmarty()->assign('page_title','Kalkulator kredytowy');

        getSmarty()->assign('amount_curr','zł miesięcznie');
        getSmarty()->assign('loan_amount','Kwota kredytu: ');
        getSmarty()->assign('number_of_years','Ilość lat: ');
        getSmarty()->assign('percent_desc','Oprocentowanie (liczba całkowita np. 1): ');

        getSmarty()->assign('errors','Wystąpiły błędy:');
        getSmarty()->assign('info','Informacje:');
        getSmarty()->assign('calc_here','Wynik:');
        getSmarty()->assign('form_heading','Kalkulator Kredytowy');
        getSmarty()->assign('count','Oblicz jedną ratę');

        getSmarty()->assign('footer_1','Kalkulator kredytowy prosty widok Tomasz Bracik');
        getSmarty()->assign('footer_2','Z wykorzystaniem technologii php/smart/css');

        getSmarty()->assign('form',$this->form);

        if ($this->result_calc instanceof CreditResult) {
            getSmarty()->assign('res','');
        } else {
            getSmarty()->assign('res',$this->result_calc);
        }

        getSmarty()->display('CalcView.tpl');
    }
}

