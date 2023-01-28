<?php require_once dirname(__FILE__) .'/../config.php';?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">

<head>
<meta charset="utf-8" />
<title>Kalkulator kredytowy</title>
<link rel="icon" type="image/x-icon" href="<?php echo _APP_ROOT?>/app/assets/favicon.ico">
<meta name="author" content="Tomasz Bracik">
<link rel="stylesheet" href="<?php echo _APP_ROOT?>/app/assets/styles.css">
</head>
<body>

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