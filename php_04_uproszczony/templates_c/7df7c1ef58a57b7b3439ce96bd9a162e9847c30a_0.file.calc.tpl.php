<?php
/* Smarty version 4.2.1, created on 2022-10-18 13:15:55
  from 'C:\xampp\htdocs\php_04_uproszczony\app\calc.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634e8aeb82da31_02685948',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7df7c1ef58a57b7b3439ce96bd9a162e9847c30a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_04_uproszczony\\app\\calc.tpl',
      1 => 1666091752,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_634e8aeb82da31_02685948 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1821731241634e8aeb827635_25986437', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_370946417634e8aeb827fa9_03508858', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/main.tpl");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/messages.tpl");
}
/* {block 'footer'} */
class Block_1821731241634e8aeb827635_25986437 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_1821731241634e8aeb827635_25986437',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
przykładowa tresć stopki wpisana do szablonu głównego z szablonu kalkulatora<?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_370946417634e8aeb827fa9_03508858 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_370946417634e8aeb827fa9_03508858',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<h3>Prosty kalkulator</h2>


<form class="pure-form pure-form-stacked" action="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/calc.php" method="post">
	<fieldset>
		<label for="x">Pierwsza liczba</label>
		<input id="x" type="text" placeholder="wartość x" name="x" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['x'];?>
">
		<label for="op">Operacja</label>
		<select id="op" name="op">

			<?php if ((isset($_smarty_tpl->tpl_vars['form']->value['op_name']))) {?>
				<option value="<?php echo $_smarty_tpl->tpl_vars['form']->value['op'];?>
">ponownie: <?php echo $_smarty_tpl->tpl_vars['form']->value['op_name'];?>
</option>
				<option value="" disabled="true">---</option>
			<?php }?>
			<option value="plus">(+) dodaj</option>
			<option value="minus">(-) odejmij </option>
			<option value="times">(*) pomnóż</option>
			<option value="div">(/) podziel</option>
	</select>
					
		<label for="y">Druga liczba</label>
		<input id="y" type="text" placeholder="wartość y" name="y" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['y'];?>
">
	</fieldset>
	<button type="submit" class="pure-button pure-button-primary">Oblicz</button>
</form>



<?php
}
}
/* {/block 'content'} */
}
