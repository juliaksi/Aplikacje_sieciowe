<!doctype html>
<html lang="pl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="{$page_description|default:'Opis domyślny'}">
    <title>{$page_title|default:"Tytuł domyślny"}</title>
    <link rel="stylesheet" href="{$app_url}/assets/styles/styles.css">
    <link rel="icon" type="image/x-icon" href="{$app_url}/assets/img/favicon.ico">
    <script src="{$app_url}/assets/js/index.js"></script>
    <meta name="author" content="Julia Ksiezyk">
</head>

<body>
    <div class="header">
        {block name=header}
            <h1>{$page_title|default:"Tytuł domyślny"}</h1>
            <h2>{$page_header|default:"Tytuł domyślny"}</h2>
            <p>{$page_description|default:"Opis domyślny"}</p>
        {/block}
    </div>