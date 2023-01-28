<?php
require_once dirname(__FILE__).'/../config.php';
include _ROOT_PATH.'/app/security/check.php';
?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<meta name="author" content="Tomasz Bracik">
<?php include 'heading.php';?>
<body>

<div style="width:90%; margin: 2em auto;">
	<a href="<?php print(_APP_ROOT); ?>/app/calc.php" class="pure-button">Powrót do kalkulatora</a>
	<a href="<?php print(_APP_ROOT); ?>/app/security/logout.php" class="pure-button pure-button-active">Wyloguj</a>
</div>

<div class="container">
    <h3 class="heading">Kalkulator kredytowy</h3>

    <form class="credit_form" action="<?php print(_APP_URL);?>/app/credit_calculator.php" method="post">
        <label for="id_x">Kwota kredytu: </label>
        <input id="id_x" type="text" name="amount" value="0" /><br />
        <label for="id_y">Ilość lat: </label>
        <input id="id_y" type="text" name="months" value="1" /><br />
        <label for="id_z">Oprocentowanie (liczba całkowita np. 1 = '1%'): </label>
        <input id="id_z" type="text" name="percent" value="0" /><br />
        <input type="submit" value="Oblicz" />
    </form>

    <?php if (isset($result_calc)) { ?>
        <div class="alert">
            <?php echo 'Wysokość jednej raty wyniesie: '.$result_calc; ?> zł
        </div>
    <?php } ?>

    <?php
    if (isset($messages_calc)) {
        if (count ( $messages_calc ) > 0) {
            echo '<ol class="message">';
            foreach ( $messages_calc as $key => $msg ) {
                echo '<li>'.$msg.'</li>';
            }
            echo '</ol>';
        }
    }
    ?>
</div>

</body>
</html>