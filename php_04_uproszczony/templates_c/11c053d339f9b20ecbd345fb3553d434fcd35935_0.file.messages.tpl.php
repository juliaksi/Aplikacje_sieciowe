<?php
/* Smarty version 4.2.1, created on 2022-10-18 13:15:55
  from 'C:\xampp\htdocs\php_04_uproszczony\templates\messages.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634e8aeb91da97_19509827',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '11c053d339f9b20ecbd345fb3553d434fcd35935' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_04_uproszczony\\templates\\messages.tpl',
      1 => 1666091735,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_634e8aeb91da97_19509827 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_160308245634e8aeb915b17_74760830', 'messages');
}
/* {block 'messages'} */
class Block_160308245634e8aeb915b17_74760830 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'messages' => 
  array (
    0 => 'Block_160308245634e8aeb915b17_74760830',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="messages">
        <?php if ((isset($_smarty_tpl->tpl_vars['messages']->value))) {?>
            <?php if (count($_smarty_tpl->tpl_vars['messages']->value) > 0) {?>
                <h4>Wystąpiły błędy: </h4>
                <ol class="err">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value, 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
                        <li><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</li>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </ol>
            <?php }?>
        <?php }?>

                <?php if ((isset($_smarty_tpl->tpl_vars['infos']->value))) {?>
            <?php if (count($_smarty_tpl->tpl_vars['infos']->value) > 0) {?>
                <h4>Informacje: </h4>
                <ol class="inf">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['infos']->value, 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
                        <li><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</li>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </ol>
            <?php }?>
        <?php }?>

        <?php if ((isset($_smarty_tpl->tpl_vars['result']->value))) {?>
            <h4>Wynik</h4>
            <p class="res">
                <?php echo $_smarty_tpl->tpl_vars['result']->value;?>

            </p>
        <?php }?>
    </div>
<?php
}
}
/* {/block 'messages'} */
}
