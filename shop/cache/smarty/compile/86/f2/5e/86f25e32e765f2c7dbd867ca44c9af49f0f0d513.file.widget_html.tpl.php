<?php /* Smarty version Smarty-3.1.19, created on 2023-12-10 17:58:36
         compiled from "/var/www/html/modules/leomanagewidgets/views/widgets/widget_html.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6605697466575ee3ce1e7c4-70533760%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '86f25e32e765f2c7dbd867ca44c9af49f0f0d513' => 
    array (
      0 => '/var/www/html/modules/leomanagewidgets/views/widgets/widget_html.tpl',
      1 => 1702225853,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6605697466575ee3ce1e7c4-70533760',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'html' => 0,
    'widget_heading' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_6575ee3ce30086_40913783',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6575ee3ce30086_40913783')) {function content_6575ee3ce30086_40913783($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['html']->value)) {?>
<div class="widget-html block">
	<?php if (isset($_smarty_tpl->tpl_vars['widget_heading']->value)&&!empty($_smarty_tpl->tpl_vars['widget_heading']->value)) {?>
	<h4 class="title_block">
		<?php echo $_smarty_tpl->tpl_vars['widget_heading']->value;?>

	</h4>
	<?php }?>
	<div class="block_content">
		<?php echo $_smarty_tpl->tpl_vars['html']->value;?>

	</div>
</div>
<?php }?><?php }} ?>
