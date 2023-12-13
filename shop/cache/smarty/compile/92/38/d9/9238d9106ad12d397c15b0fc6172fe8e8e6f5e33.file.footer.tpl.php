<?php /* Smarty version Smarty-3.1.19, created on 2023-12-10 17:58:41
         compiled from "/var/www/html/modules/leocustomajax/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9556071276575ee417858e7-09160294%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9238d9106ad12d397c15b0fc6172fe8e8e6f5e33' => 
    array (
      0 => '/var/www/html/modules/leocustomajax/footer.tpl',
      1 => 1702225847,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9556071276575ee417858e7-09160294',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'leo_customajax_pn' => 0,
    'leo_customajax_img' => 0,
    'leo_customajax_tran' => 0,
    'leo_customajax_count' => 0,
    'leo_customajax_acolor' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_6575ee417b20a1_06793546',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6575ee417b20a1_06793546')) {function content_6575ee417b20a1_06793546($_smarty_tpl) {?><script type="text/javascript">
	var leoOption = {
		productNumber:<?php if ($_smarty_tpl->tpl_vars['leo_customajax_pn']->value) {?><?php echo $_smarty_tpl->tpl_vars['leo_customajax_pn']->value;?>
<?php } else { ?>0<?php }?>,
		productInfo:<?php if ($_smarty_tpl->tpl_vars['leo_customajax_img']->value) {?><?php echo $_smarty_tpl->tpl_vars['leo_customajax_img']->value;?>
<?php } else { ?>0<?php }?>,
		productTran:<?php if ($_smarty_tpl->tpl_vars['leo_customajax_tran']->value) {?><?php echo $_smarty_tpl->tpl_vars['leo_customajax_tran']->value;?>
<?php } else { ?>0<?php }?>,
		productCdown: <?php if ($_smarty_tpl->tpl_vars['leo_customajax_count']->value) {?><?php echo $_smarty_tpl->tpl_vars['leo_customajax_count']->value;?>
<?php } else { ?>0<?php }?>,
		productColor: <?php if ($_smarty_tpl->tpl_vars['leo_customajax_acolor']->value) {?><?php echo $_smarty_tpl->tpl_vars['leo_customajax_acolor']->value;?>
<?php } else { ?>0<?php }?>,
	}
    $(document).ready(function(){	
		var leoCustomAjax = new $.LeoCustomAjax();
        leoCustomAjax.processAjax();
    });
</script><?php }} ?>
