<?php
/* Smarty version 4.2.1, created on 2023-01-28 13:24:37
  from 'C:\xampp\htdocs\php_04_uproszczony\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63d51405bf0d75_56812480',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e5a313dca83c3d685316b594a2eca089b462fed9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_04_uproszczony\\templates\\header.tpl',
      1 => 1674908657,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63d51405bf0d75_56812480 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!doctype html>
<html lang="pl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo (($tmp = $_smarty_tpl->tpl_vars['page_description']->value ?? null)===null||$tmp==='' ? 'Opis domyślny' ?? null : $tmp);?>
">
    <title><?php echo (($tmp = $_smarty_tpl->tpl_vars['page_title']->value ?? null)===null||$tmp==='' ? "Tytuł domyślny" ?? null : $tmp);?>
</title>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/assets/styles/styles.css">
    <link rel="icon" type="image/x-icon" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/assets/img/favicon.ico">
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/assets/js/index.js"><?php echo '</script'; ?>
>
    <meta name="author" content="Julia Ksiezyk">
</head>

<body>
    <div class="header">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_129272445263d51405bef1e2_31030315', 'header');
?>

    </div><?php }
/* {block 'header'} */
class Block_129272445263d51405bef1e2_31030315 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_129272445263d51405bef1e2_31030315',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <h1><?php echo (($tmp = $_smarty_tpl->tpl_vars['page_title']->value ?? null)===null||$tmp==='' ? "Tytuł domyślny" ?? null : $tmp);?>
</h1>
            <h2><?php echo (($tmp = $_smarty_tpl->tpl_vars['page_header']->value ?? null)===null||$tmp==='' ? "Tytuł domyślny" ?? null : $tmp);?>
</h2>
            <p><?php echo (($tmp = $_smarty_tpl->tpl_vars['page_description']->value ?? null)===null||$tmp==='' ? "Opis domyślny" ?? null : $tmp);?>
</p>
        <?php
}
}
/* {/block 'header'} */
}
