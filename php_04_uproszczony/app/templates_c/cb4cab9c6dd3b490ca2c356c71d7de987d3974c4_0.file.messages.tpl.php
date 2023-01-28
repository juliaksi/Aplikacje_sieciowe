<?php
/* Smarty version 4.2.1, created on 2023-01-28 13:21:13
  from 'C:\xampp\htdocs\php_04_uproszczony\templates\messages.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63d513394f6552_55076189',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cb4cab9c6dd3b490ca2c356c71d7de987d3974c4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_04_uproszczony\\templates\\messages.tpl',
      1 => 1674906761,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63d513394f6552_55076189 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div class="messages">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_97893673063d513394f4769_53688508', 'messages');
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_79439172063d513394f5452_64757186', 'infos');
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_129377801663d513394f5d77_10483119', 'result');
?>

</div><?php }
/* {block 'messages'} */
class Block_97893673063d513394f4769_53688508 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'messages' => 
  array (
    0 => 'Block_97893673063d513394f4769_53688508',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php echo (($tmp = $_smarty_tpl->tpl_vars['default']->value ?? null)===null||$tmp==='' ? "..." ?? null : $tmp);?>

    <?php
}
}
/* {/block 'messages'} */
/* {block 'infos'} */
class Block_79439172063d513394f5452_64757186 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'infos' => 
  array (
    0 => 'Block_79439172063d513394f5452_64757186',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php echo (($tmp = $_smarty_tpl->tpl_vars['default']->value ?? null)===null||$tmp==='' ? "..." ?? null : $tmp);?>

    <?php
}
}
/* {/block 'infos'} */
/* {block 'result'} */
class Block_129377801663d513394f5d77_10483119 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'result' => 
  array (
    0 => 'Block_129377801663d513394f5d77_10483119',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php echo (($tmp = $_smarty_tpl->tpl_vars['default']->value ?? null)===null||$tmp==='' ? "..." ?? null : $tmp);?>

    <?php
}
}
/* {/block 'result'} */
}
