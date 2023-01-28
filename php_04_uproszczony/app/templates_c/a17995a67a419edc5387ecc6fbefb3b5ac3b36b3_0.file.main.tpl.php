<?php
/* Smarty version 4.2.1, created on 2023-01-28 13:21:13
  from 'C:\xampp\htdocs\php_04_uproszczony\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63d513394b6673_07871297',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a17995a67a419edc5387ecc6fbefb3b5ac3b36b3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_04_uproszczony\\templates\\main.tpl',
      1 => 1674906761,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63d513394b6673_07871297 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
    <div class="content">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_33392702663d513394b5992_89653238', 'content');
?>

    </div>
</body>
<?php }
/* {block 'content'} */
class Block_33392702663d513394b5992_89653238 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_33392702663d513394b5992_89653238',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php echo (($tmp = $_smarty_tpl->tpl_vars['default']->value ?? null)===null||$tmp==='' ? "..." ?? null : $tmp);?>
 <?php
}
}
/* {/block 'content'} */
}
