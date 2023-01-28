<?php
?>

<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<?php include 'heading.php';?>
<body>

<div style="width:90%; margin: 2em auto;">
	<a href="<?php print(_APP_ROOT); ?>/app/credit_calc_view.php" class="pure-button">Kalkulator kredytowy</a>
	<a href="<?php print(_APP_ROOT); ?>/app/security/logout.php" class="pure-button pure-button-active">Wyloguj</a>
</div>

<div class="container">

    <form action="<?php print(_APP_ROOT); ?>/app/calc.php" method="post" class="credit_form">
        <h3 class="heading">Kalkulator</h3>
            <label for="id_x">Liczba 1: </label>
            <input id="id_x" type="text" name="x" value="<?php out($x) ?>" />
            <label for="id_op">Operacja: </label>
            <select name="op">
                <option value="plus">+</option>
                <option value="minus">-</option>
                <option value="times">*</option>
                <option value="div">/</option>
            </select>
            <label for="id_y">Liczba 2: </label>
            <input id="id_y" type="text" name="y" value="<?php out($y) ?>" />
        <input type="submit" value="Oblicz" class="pure-button pure-button-primary" />
    </form>

    <?php
    if (isset($messages)) {
        if (count ( $messages ) > 0) {
            echo '<ol class="message">';
            foreach ( $messages as $key => $msg ) {
                echo '<li>'.$msg.'</li>';
            }
            echo '</ol>';
        }
    }
    ?>

    <?php if (isset($result)){ ?>
    <div style="margin-top: 1em; padding: 1em; border-radius: 0.5em; background-color: #ff0; width:25em;">
    <?php echo 'Wynik: '.$result; ?>
    </div>
    <?php } ?>

</div>

</body>
</html>