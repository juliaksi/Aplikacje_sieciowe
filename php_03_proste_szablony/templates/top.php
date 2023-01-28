<?php require_once dirname(__FILE__) .'/../config.php';?>
<!doctype html>

<html lang="pl">
<head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="<?php out($page_description); if (!isset($page_description)) {  ?> Opis domyślny ... <?php } ?>">
    <meta name="author" content="Tomasz Bracik">

    <title><?php out($page_title); if (!isset($page_title)) {  ?> Tytuł domyślny ... <?php } ?></title>

	<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.4.2/pure.css">
    <link rel="stylesheet" href="<?php print(_APP_URL); ?>/css/main-grid.css">
    <link rel="stylesheet" href="<?php print(_APP_URL); ?>/css/layouts/marketing-old-ie.css">
    <link rel="stylesheet" href="<?php print(_APP_URL); ?>/css/layouts/marketing.css">
    <link rel="stylesheet" href="<?php print(_APP_URL); ?>/assets/styles.css">

    <?php if (isset($hide_intro)) {
        if ($hide_intro) { ?>
            <link rel="stylesheet" href="<?php print(_APP_URL); ?>/css/style_hide_intro.css">
        <?php }
    } ?>

	<script src="<?php print(_APP_URL); ?>/js/jquery.min.js"></script>
	<script src="<?php print(_APP_URL); ?>/js/softscroll.js"></script>
</head>
<body>
