<?php
/* Smarty version 4.2.1, created on 2022-10-18 15:03:57
  from 'C:\xampp\htdocs\php_04_uproszczony\app\calc.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634ea43d713605_12800729',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '90fdadeeea73693ad269bf51ebe1ba2677fa4f01' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_04_uproszczony\\app\\calc.tpl',
      1 => 1666098236,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_634ea43d713605_12800729 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>





<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1857341499634ea43d6fa242_59159292', 'footer');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_195939468634ea43d701b91_34458411', 'footer_desc');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_499309959634ea43d702aa2_16512189', 'messages');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_903980908634ea43d70b755_85357209', 'infos');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1244649275634ea43d70df85_14165474', 'result');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_821037570634ea43d70fce9_77213523', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/header.tpl");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/main.tpl");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/messages.tpl");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/footer.tpl");
}
/* {block 'footer'} */
class Block_1857341499634ea43d6fa242_59159292 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_1857341499634ea43d6fa242_59159292',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php echo (($tmp = $_smarty_tpl->tpl_vars['footer_1']->value ?? null)===null||$tmp==='' ? "Wartość stopki 1" ?? null : $tmp);?>
 <?php
}
}
/* {/block 'footer'} */
/* {block 'footer_desc'} */
class Block_195939468634ea43d701b91_34458411 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer_desc' => 
  array (
    0 => 'Block_195939468634ea43d701b91_34458411',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php echo (($tmp = $_smarty_tpl->tpl_vars['footer_2']->value ?? null)===null||$tmp==='' ? "Wartość stopki 2" ?? null : $tmp);?>
 <?php
}
}
/* {/block 'footer_desc'} */
/* {block 'messages'} */
class Block_499309959634ea43d702aa2_16512189 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'messages' => 
  array (
    0 => 'Block_499309959634ea43d702aa2_16512189',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php if ((isset($_smarty_tpl->tpl_vars['messages_calc']->value))) {?>
		<?php if (count($_smarty_tpl->tpl_vars['messages_calc']->value) > 0) {?>
			<h4><?php echo (($tmp = $_smarty_tpl->tpl_vars['errors']->value ?? null)===null||$tmp==='' ? "Błędy" ?? null : $tmp);?>
</h4>
			<ol class="err">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages_calc']->value, 'msg');
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
	<?php }
}
}
/* {/block 'messages'} */
/* {block 'infos'} */
class Block_903980908634ea43d70b755_85357209 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'infos' => 
  array (
    0 => 'Block_903980908634ea43d70b755_85357209',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php if ((isset($_smarty_tpl->tpl_vars['infos']->value))) {?>
		<?php if (count($_smarty_tpl->tpl_vars['infos']->value) > 0) {?>
			<h4><?php echo (($tmp = $_smarty_tpl->tpl_vars['info']->value ?? null)===null||$tmp==='' ? "Info" ?? null : $tmp);?>
 </h4>
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
	<?php }
}
}
/* {/block 'infos'} */
/* {block 'result'} */
class Block_1244649275634ea43d70df85_14165474 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'result' => 
  array (
    0 => 'Block_1244649275634ea43d70df85_14165474',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php if ((isset($_smarty_tpl->tpl_vars['result_calc']->value))) {?>
		<h4><?php echo (($tmp = $_smarty_tpl->tpl_vars['calc_here']->value ?? null)===null||$tmp==='' ? "Wynik" ?? null : $tmp);?>
</h4>
		<p class="res">
			<?php echo $_smarty_tpl->tpl_vars['result_calc']->value;?>
 <?php echo (($tmp = $_smarty_tpl->tpl_vars['amount_curr']->value ?? null)===null||$tmp==='' ? "zł" ?? null : $tmp);?>

		</p>
	<?php }
}
}
/* {/block 'result'} */
/* {block 'content'} */
class Block_821037570634ea43d70fce9_77213523 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_821037570634ea43d70fce9_77213523',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<h3><?php echo (($tmp = $_smarty_tpl->tpl_vars['form_heading']->value ?? null)===null||$tmp==='' ? "Prosty kalkulator" ?? null : $tmp);?>
</h3>
	<form class="credit_form" action="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/calc.php" method="post">
		<label for="id_x"> <?php echo (($tmp = $_smarty_tpl->tpl_vars['loan_amount']->value ?? null)===null||$tmp==='' ? "Kwota" ?? null : $tmp);?>
 </label>
		<input id="id_x" onfocus="this.value=''" type="text" name="amount" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['amount'];?>
 "/><br />
		<label for="id_y"> <?php echo (($tmp = $_smarty_tpl->tpl_vars['number_of_years']->value ?? null)===null||$tmp==='' ? "Lata" ?? null : $tmp);?>
 </label>
		<input id="id_y" onfocus="this.value=''" type="text" name="months" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['months'];?>
 "/><br />
		<label for="id_z"> <?php echo (($tmp = $_smarty_tpl->tpl_vars['percent_desc']->value ?? null)===null||$tmp==='' ? "Oprocentowanie" ?? null : $tmp);?>
 </label>
		<input id="id_z" onfocus="this.value=''" type="text" name="percent" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['percent'];?>
 "/><br />
		<input type="submit" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['count']->value ?? null)===null||$tmp==='' ? "X" ?? null : $tmp);?>
" />
	</form>
<?php
}
}
/* {/block 'content'} */
}
