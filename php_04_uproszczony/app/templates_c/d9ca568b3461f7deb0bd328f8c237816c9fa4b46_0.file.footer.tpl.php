<?php
/* Smarty version 4.2.1, created on 2023-01-28 13:21:13
  from 'C:\xampp\htdocs\php_04_uproszczony\templates\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63d51339566c69_27043504',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd9ca568b3461f7deb0bd328f8c237816c9fa4b46' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_04_uproszczony\\templates\\footer.tpl',
      1 => 1674906761,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63d51339566c69_27043504 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
    <div class="footer">
        <p><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_178353828563d51339565111_08436928', 'footer');
?>
</p>
        <p><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_32700294863d513395662f8_56229826', 'footer_desc');
?>
</p>
    </div>
</html><?php }
/* {block 'footer'} */
class Block_178353828563d51339565111_08436928 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_178353828563d51339565111_08436928',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php echo (($tmp = $_smarty_tpl->tpl_vars['default']->value ?? null)===null||$tmp==='' ? "..." ?? null : $tmp);?>
 <?php
}
}
/* {/block 'footer'} */
/* {block 'footer_desc'} */
class Block_32700294863d513395662f8_56229826 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer_desc' => 
  array (
    0 => 'Block_32700294863d513395662f8_56229826',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php echo (($tmp = $_smarty_tpl->tpl_vars['default']->value ?? null)===null||$tmp==='' ? "..." ?? null : $tmp);?>
 <?php
}
}
/* {/block 'footer_desc'} */
}
