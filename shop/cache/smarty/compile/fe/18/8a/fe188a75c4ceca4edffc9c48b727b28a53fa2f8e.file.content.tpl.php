<?php /* Smarty version Smarty-3.1.19, created on 2023-12-10 16:26:28
         compiled from "/var/www/html/admin4577/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21128647896575e6b44efdc9-51068478%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fe188a75c4ceca4edffc9c48b727b28a53fa2f8e' => 
    array (
      0 => '/var/www/html/admin4577/themes/default/template/content.tpl',
      1 => 1556642532,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21128647896575e6b44efdc9-51068478',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_6575e6b44ff746_49080691',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6575e6b44ff746_49080691')) {function content_6575e6b44ff746_49080691($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }} ?>
