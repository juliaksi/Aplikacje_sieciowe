<?php
/* Smarty version 3.1.30, created on 2022-10-19 12:27:27
  from "C:\xampp\htdocs\php_05_uproszczony\templates\main.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_634fd10f833ee5_06407064',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '094244381ab1f70ec56de8c7ced807fef48182d1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_05_uproszczony\\templates\\main.tpl',
      1 => 1666170643,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_634fd10f833ee5_06407064 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!doctype html>
<html lang="pl">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['page_description']->value)===null||$tmp==='' ? 'Opis domyślny' : $tmp);?>
">
	<title><?php echo (($tmp = @$_smarty_tpl->tpl_vars['page_title']->value)===null||$tmp==='' ? "Tytuł domyślny" : $tmp);?>
</title>
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/styles/styles.css">
	<link rel="icon" type="image/x-icon" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/img/favicon.ico">
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/js/index.js"><?php echo '</script'; ?>
>
	<meta name="author" content="Tomasz Bracik">
</head>
<body>
	<div class="header">
		<h1><?php echo (($tmp = @$_smarty_tpl->tpl_vars['page_title']->value)===null||$tmp==='' ? "Tytuł domyślny" : $tmp);?>
</h1>
		<h2><?php echo (($tmp = @$_smarty_tpl->tpl_vars['page_header']->value)===null||$tmp==='' ? "Tytuł domyślny" : $tmp);?>
</h2>
		<p><?php echo (($tmp = @$_smarty_tpl->tpl_vars['page_description']->value)===null||$tmp==='' ? "Opis domyślny" : $tmp);?>
</p>
	</div>

	<div class="content">
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1696863080634fd10f832d74_61872116', 'content');
?>

	</div>

	<div class="footer">
		<p>
			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_854628903634fd10f8334d5_57030638', 'footer');
?>

		</p>
		<p>
			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_743489643634fd10f833b72_70649951', 'footer_desc');
?>

		</p>
	</div>
</body>
</html><?php }
/* {block 'content'} */
class Block_1696863080634fd10f832d74_61872116 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść zawartości .... <?php
}
}
/* {/block 'content'} */
/* {block 'footer'} */
class Block_854628903634fd10f8334d5_57030638 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść stopki .... <?php
}
}
/* {/block 'footer'} */
/* {block 'footer_desc'} */
class Block_743489643634fd10f833b72_70649951 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Dodatkowy tekst stopki <?php
}
}
/* {/block 'footer_desc'} */
}
