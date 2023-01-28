<?php

if (isset($messages_calc)) {
    if (count($messages_calc) > 0) {
        echo '<ol class="message">';
        foreach ($messages_calc as $key => $msg) {
            echo '<li>' . $msg . '</li>';
        }
        echo '</ol>';
    }
}
