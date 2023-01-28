<div class="splash-container">
    <div class="splash">
        <h1 class="splash-head"><?php out($page_header); if (!isset($page_header)) {  ?> Tytuł domyślny ... <?php } ?></h1>
        <p class="splash-subhead">
            <?php out($page_description); if (!isset($page_description)) {  ?> Opis domyślny ... <?php } ?>
        </p>
        <p>
            <a href="#app_content" class="pure-button pure-button-primary">Idź do formularza</a>
        </p>
    </div>
</div>
