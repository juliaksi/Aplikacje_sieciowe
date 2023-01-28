<?php
/* Smarty version 4.2.1, created on 2022-10-18 13:15:55
  from 'C:\xampp\htdocs\php_04_uproszczony\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634e8aeb899ce5_22445839',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ed34227dbe7decb59b95f8c1ccd6756fff68cf0c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_04_uproszczony\\templates\\main.tpl',
      1 => 1666091575,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_634e8aeb899ce5_22445839 (Smarty_Internal_Template $_smarty_tpl) {
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
	<link rel="stylesheet" href="https://unpkg.com/purecss@0.6.2/build/pure-min.css" integrity="sha384-UQiGfs9ICog+LwheBSRCt1o5cbyKIHbwjWscjemyBMT9YCUMZffs6UqUTd0hObXD" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/css/style.css">
</head>
<body>

<div class="header">
	<h1><?php echo (($tmp = $_smarty_tpl->tpl_vars['page_title']->value ?? null)===null||$tmp==='' ? "Tytuł domyślny" ?? null : $tmp);?>
</h1>
	<h2><?php echo (($tmp = $_smarty_tpl->tpl_vars['page_header']->value ?? null)===null||$tmp==='' ? "Tytuł domyślny" ?? null : $tmp);?>
</h2>
	<p><?php echo (($tmp = $_smarty_tpl->tpl_vars['page_description']->value ?? null)===null||$tmp==='' ? "Opis domyślny" ?? null : $tmp);?>
</p>
</div>

<div class="content">
	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1948902692634e8aeb899148_17917593', 'content');
?>

</div>

<div class="footer">
	<p><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2034924218634e8aeb8997b0_84079687', 'footer');
?>
</p>
	<p>Widok oparty na stylach <a href="http://purecss.io/" target="_blank">Pure CSS Yahoo!</a>. (autor przykładu: Przemysław Kudłacik)</p>
</div>

</body>
</html><?php }
/* {block 'content'} */
class Block_1948902692634e8aeb899148_17917593 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1948902692634e8aeb899148_17917593',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść zawartości .... <?php
}
}
/* {/block 'content'} */
/* {block 'footer'} */
class Block_2034924218634e8aeb8997b0_84079687 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_2034924218634e8aeb8997b0_84079687',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść stopki .... <?php
}
}
/* {/block 'footer'} */
}
