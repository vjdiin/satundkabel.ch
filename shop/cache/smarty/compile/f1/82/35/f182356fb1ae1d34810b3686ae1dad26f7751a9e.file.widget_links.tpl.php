<?php /* Smarty version Smarty-3.1.19, created on 2023-12-10 17:58:37
         compiled from "/var/www/html/modules/leomanagewidgets/views/widgets/widget_links.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8253885446575ee3d05fe98-32812358%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f182356fb1ae1d34810b3686ae1dad26f7751a9e' => 
    array (
      0 => '/var/www/html/modules/leomanagewidgets/views/widgets/widget_links.tpl',
      1 => 1702225853,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8253885446575ee3d05fe98-32812358',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'links' => 0,
    'widget_heading' => 0,
    'id' => 0,
    'ac' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_6575ee3d0732e9_35942954',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6575ee3d0732e9_35942954')) {function content_6575ee3d0732e9_35942954($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['links']->value)&&$_smarty_tpl->tpl_vars['links']->value) {?>
<div class="widget-links block">
	<?php if (isset($_smarty_tpl->tpl_vars['widget_heading']->value)&&!empty($_smarty_tpl->tpl_vars['widget_heading']->value)) {?>
	<h4 class="title_block">
		<?php echo $_smarty_tpl->tpl_vars['widget_heading']->value;?>

	</h4>
	<?php }?>
	<div class="block_content">	
		<div id="tabs<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" class="panel-group">
			<ul class="nav-links">
			  <?php  $_smarty_tpl->tpl_vars['ac'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ac']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['links']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ac']->key => $_smarty_tpl->tpl_vars['ac']->value) {
$_smarty_tpl->tpl_vars['ac']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['ac']->key;
?>  
			  <li ><a href="<?php echo $_smarty_tpl->tpl_vars['ac']->value['link'];?>
" ><?php echo $_smarty_tpl->tpl_vars['ac']->value['text'];?>
</a></li>
			  <?php } ?>
			</ul>
		</div>
	</div>
</div>
<?php }?>


<?php }} ?>
