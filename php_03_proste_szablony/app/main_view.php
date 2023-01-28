<?php require_once dirname(__FILE__) .'/../config.php';?>

<?php
include _ROOT_PATH.'/templates/header.php';
?>

<?php
include _ROOT_PATH.'/templates/top.php';
?>

<?php
include _ROOT_PATH.'/templates/splash_container.php';
?>

<div class="content-wrapper">
    <div id="app_content" class="content">
        <h2 class="content-head is-center">Kalkulator Kredytowy</h2>
        <div class="pure-g">
            <div class="l-box-lrg pure-u-1 pure-u-med-2-5">
                <form class="pure-form pure-form-stacked" action="<?php print(_APP_ROOT);?>/app/credit_calculator.php" method="post">
                    <label for="id_x">Kwota kredytu: </label>
                    <input id="id_x" type="text" name="amount" value="<?php out($x); ?>" /><br />
                    <label for="id_y">Ilość lat: </label>
                    <input id="id_y" type="text" name="months" value="<?php out($y); ?>" /><br />
                    <label for="id_z">Oprocentowanie (liczba całkowita np. 1 = '1%'): </label>
                    <input id="id_z" type="text" name="percent" value="<?php out($z); ?>" /><br />
                    <input type="submit" value="Oblicz" />
                </form>
            </div>

            <div class="l-box-lrg pure-u-1 pure-u-med-3-5">

                <?php
                    if (isset($hide_intro)) {
                        if ($hide_intro) {
                            include _ROOT_PATH . '/templates/messages.php';
                            include _ROOT_PATH.'/templates/infos.php';
                            include _ROOT_PATH.'/templates/result.php';
                        }
                    }
                ?>

            </div>
        </div>
    </div>

    <?php
    include _ROOT_PATH.'/templates/bottom.php';
    ?>

</div>

</body>
</html>