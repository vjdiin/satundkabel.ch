<?php /* Smarty version Smarty-3.1.19, created on 2023-12-10 17:58:45
         compiled from "/var/www/html/themes/leomobi/layout/default/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3069727726575ee45c5a500-35640246%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b0195d239ea9de2526582c7d1414b00d231e7a83' => 
    array (
      0 => '/var/www/html/themes/leomobi/layout/default/footer.tpl',
      1 => 1702225804,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3069727726575ee45c5a500-35640246',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'HOOK_CONTENTBOTTOM' => 0,
    'page_name' => 0,
    'LAYOUT_COLUMN_SPANS' => 0,
    'HOOK_RIGHT_COLUMN' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_6575ee45cb3cb4_74766955',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6575ee45cb3cb4_74766955')) {function content_6575ee45cb3cb4_74766955($_smarty_tpl) {?>		<?php if ($_smarty_tpl->tpl_vars['HOOK_CONTENTBOTTOM']->value&&in_array($_smarty_tpl->tpl_vars['page_name']->value,array('index'))) {?>
			<div id="contentbottom" class="no-border clearfix block">
				<?php echo $_smarty_tpl->tpl_vars['HOOK_CONTENTBOTTOM']->value;?>

			</div>
		<?php }?>
</section>
<?php if (isset($_smarty_tpl->tpl_vars['LAYOUT_COLUMN_SPANS']->value[2])&&$_smarty_tpl->tpl_vars['LAYOUT_COLUMN_SPANS']->value[2]) {?> 
<!-- Right -->
<section id="right_column" class="column sidebar col-md-<?php echo $_smarty_tpl->tpl_vars['LAYOUT_COLUMN_SPANS']->value[2];?>
" role="navigation">
		<?php echo $_smarty_tpl->tpl_vars['HOOK_RIGHT_COLUMN']->value;?>

</section>
<?php }?>

<?php }} ?>
