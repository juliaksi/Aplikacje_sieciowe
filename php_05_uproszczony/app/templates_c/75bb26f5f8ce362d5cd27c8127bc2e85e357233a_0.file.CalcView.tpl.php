<?php
/* Smarty version 3.1.30, created on 2022-10-19 12:26:27
  from "C:\xampp\htdocs\php_05_uproszczony\app\CreditView.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_634fd0d376ceb5_02370609',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '75bb26f5f8ce362d5cd27c8127bc2e85e357233a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_05_uproszczony\\app\\CreditView.tpl',
      1 => 1666175186,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../templates/main.tpl' => 1,
  ),
),false)) {
function content_634fd0d376ceb5_02370609 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_844501380634fd0d37585f8_85010655', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_827202687634fd0d376c753_12643315', 'content');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:../templates/main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'footer'} */
class Block_844501380634fd0d37585f8_85010655 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Przykładowa treść stopki <?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_827202687634fd0d376c753_12643315 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<h3>Prosty kalkulator</h3>
	<form class="credit_form" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/app/calc.php" method="post">
		<label for="id_x"> <?php echo (($tmp = @$_smarty_tpl->tpl_vars['loan_amount']->value)===null||$tmp==='' ? "Kwota" : $tmp);?>
 </label>
		<input id="id_x" onfocus="this.value=''" type="text" name="amount" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->amount;?>
 "/><br />
		<label for="id_y"> <?php echo (($tmp = @$_smarty_tpl->tpl_vars['number_of_years']->value)===null||$tmp==='' ? "Lata" : $tmp);?>
 </label>
		<input id="id_y" onfocus="this.value=''" type="text" name="months" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->months;?>
 "/><br />
		<label for="id_z"> <?php echo (($tmp = @$_smarty_tpl->tpl_vars['percent_desc']->value)===null||$tmp==='' ? "Oprocentowanie" : $tmp);?>
 </label>
		<input id="id_z" onfocus="this.value=''" type="text" name="percent" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->percent;?>
 "/><br />
		<input type="submit" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['count']->value)===null||$tmp==='' ? "X" : $tmp);?>
" />
	</form>

	<div class="messages">
		<?php if ($_smarty_tpl->tpl_vars['messages_calc']->value->isError()) {?>
			<h4>Wystąpiły błędy: </h4>
			<ol class="err">
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages_calc']->value->getErrors(), 'err');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['err']->value) {
?>
			<li><?php echo $_smarty_tpl->tpl_vars['err']->value;?>
</li>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

			</ol>
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['messages_calc']->value->isInfo()) {?>
			<h4>Informacje: </h4>
			<ol class="inf">
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages_calc']->value->getInfos(), 'inf');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['inf']->value) {
?>
			<li><?php echo $_smarty_tpl->tpl_vars['inf']->value;?>
</li>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

			</ol>
		<?php }?>

		<?php if (isset($_smarty_tpl->tpl_vars['res']->value->result_calc)) {?>
			<h4>Wynik</h4>
			<p class="res">
				<?php echo $_smarty_tpl->tpl_vars['res']->value->result_calc;?>

			</p>
		<?php }?>
	</div>
<?php
}
}
/* {/block 'content'} */
}
