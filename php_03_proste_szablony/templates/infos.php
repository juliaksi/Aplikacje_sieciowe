<?php

if (isset($infos)) {
    if (count($infos) > 0) {
        echo '<h4>Informacje: </h4>';
        echo '<ol class="inf">';
        foreach ($infos as $key => $msg) {
            echo '<li>' . $msg . '</li>';
        }
        echo '</ol>';
    }
}
