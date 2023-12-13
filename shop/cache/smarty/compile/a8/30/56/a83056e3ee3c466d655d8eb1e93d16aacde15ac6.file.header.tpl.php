<?php /* Smarty version Smarty-3.1.19, created on 2023-12-10 17:58:45
         compiled from "/var/www/html/themes/leomobi/layout/default/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14948903246575ee450b0485-96902782%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a83056e3ee3c466d655d8eb1e93d16aacde15ac6' => 
    array (
      0 => '/var/www/html/themes/leomobi/layout/default/header.tpl',
      1 => 1702225804,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14948903246575ee450b0485-96902782',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'HOOK_RIGHT_COLUMN' => 0,
    'HOOK_LEFT_COLUMN' => 0,
    'LAYOUT_COLUMN_SPANS' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_6575ee45117dc2_08713043',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6575ee45117dc2_08713043')) {function content_6575ee45117dc2_08713043($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['HOOK_RIGHT_COLUMN'] = new Smarty_variable(trim($_smarty_tpl->tpl_vars['HOOK_RIGHT_COLUMN']->value), null, 0);?>
<?php $_smarty_tpl->tpl_vars['HOOK_LEFT_COLUMN'] = new Smarty_variable(trim($_smarty_tpl->tpl_vars['HOOK_LEFT_COLUMN']->value), null, 0);?>
<?php if (!empty($_smarty_tpl->tpl_vars['HOOK_LEFT_COLUMN']->value)&&empty($_smarty_tpl->tpl_vars['HOOK_RIGHT_COLUMN']->value)) {?>
<?php $_smarty_tpl->tpl_vars['LAYOUT_COLUMN_SPANS'] = new Smarty_variable(array(3,9,0), null, 3);
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars['LAYOUT_COLUMN_SPANS'] = clone $_smarty_tpl->tpl_vars['LAYOUT_COLUMN_SPANS']; $_ptr = $_ptr->parent; }
Smarty::$global_tpl_vars['LAYOUT_COLUMN_SPANS'] = clone $_smarty_tpl->tpl_vars['LAYOUT_COLUMN_SPANS'];?>
<?php } elseif (empty($_smarty_tpl->tpl_vars['HOOK_LEFT_COLUMN']->value)&&!empty($_smarty_tpl->tpl_vars['HOOK_RIGHT_COLUMN']->value)) {?>
<?php $_smarty_tpl->tpl_vars['LAYOUT_COLUMN_SPANS'] = new Smarty_variable(array(0,9,3), null, 3);
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars['LAYOUT_COLUMN_SPANS'] = clone $_smarty_tpl->tpl_vars['LAYOUT_COLUMN_SPANS']; $_ptr = $_ptr->parent; }
Smarty::$global_tpl_vars['LAYOUT_COLUMN_SPANS'] = clone $_smarty_tpl->tpl_vars['LAYOUT_COLUMN_SPANS'];?>
<?php } elseif (empty($_smarty_tpl->tpl_vars['HOOK_LEFT_COLUMN']->value)&&empty($_smarty_tpl->tpl_vars['HOOK_RIGHT_COLUMN']->value)) {?>
<?php $_smarty_tpl->tpl_vars['LAYOUT_COLUMN_SPANS'] = new Smarty_variable(array(0,12,0), null, 3);
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars['LAYOUT_COLUMN_SPANS'] = clone $_smarty_tpl->tpl_vars['LAYOUT_COLUMN_SPANS']; $_ptr = $_ptr->parent; }
Smarty::$global_tpl_vars['LAYOUT_COLUMN_SPANS'] = clone $_smarty_tpl->tpl_vars['LAYOUT_COLUMN_SPANS'];?>
<?php } else { ?>
<?php $_smarty_tpl->tpl_vars['LAYOUT_COLUMN_SPANS'] = new Smarty_variable(array(3,6,3), null, 3);
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars['LAYOUT_COLUMN_SPANS'] = clone $_smarty_tpl->tpl_vars['LAYOUT_COLUMN_SPANS']; $_ptr = $_ptr->parent; }
Smarty::$global_tpl_vars['LAYOUT_COLUMN_SPANS'] = clone $_smarty_tpl->tpl_vars['LAYOUT_COLUMN_SPANS'];?>
<?php }?>


<?php if ($_smarty_tpl->tpl_vars['LAYOUT_COLUMN_SPANS']->value[0]) {?>
<!-- Left -->
<section id="left_column" class="column sidebar col-md-<?php echo $_smarty_tpl->tpl_vars['LAYOUT_COLUMN_SPANS']->value[0];?>
" role="navigation">
		<?php echo $_smarty_tpl->tpl_vars['HOOK_LEFT_COLUMN']->value;?>

</section>
<?php }?>
<!-- Center -->
<section id="center_column" class="col-md-<?php echo $_smarty_tpl->tpl_vars['LAYOUT_COLUMN_SPANS']->value[1];?>
">
<?php }} ?>
