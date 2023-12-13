<?php /* Smarty version Smarty-3.1.19, created on 2023-12-10 17:58:36
         compiled from "/var/www/html/themes/leomobi/modules/leomanagewidgets/views/widgets/widget_manucarousel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14691648856575ee3c5f7f11-33136923%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '510108587aee6637f8191a76aae8a95ef5984bad' => 
    array (
      0 => '/var/www/html/themes/leomobi/modules/leomanagewidgets/views/widgets/widget_manucarousel.tpl',
      1 => 1702225825,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14691648856575ee3c5f7f11-33136923',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'manufacturers' => 0,
    'widget_heading' => 0,
    'itemsperpage' => 0,
    'mmanufacturers' => 0,
    'columnspage' => 0,
    'scolumn' => 0,
    'manufacturer' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_6575ee3c68f180_28094858',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6575ee3c68f180_28094858')) {function content_6575ee3c68f180_28094858($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['manufacturers']->value) {?>
 <div class="widget-manufacture block">
	<?php if (isset($_smarty_tpl->tpl_vars['widget_heading']->value)&&!empty($_smarty_tpl->tpl_vars['widget_heading']->value)) {?>
	<h4 class="title_block">
		<?php echo $_smarty_tpl->tpl_vars['widget_heading']->value;?>

	</h4>
	<?php }?>
	<div class="block_content">
		<div class="carousel slide" id="manucarousel">
			<?php if (count($_smarty_tpl->tpl_vars['manufacturers']->value)>$_smarty_tpl->tpl_vars['itemsperpage']->value) {?>	 
				<a class="carousel-control left" href="#manucarousel" data-slide="prev">&lsaquo;</a>
				<a class="carousel-control right" href="#manucarousel" data-slide="next">&rsaquo;</a>
			<?php }?>
			<div class="carousel-inner">
				<?php $_smarty_tpl->tpl_vars['mmanufacturers'] = new Smarty_variable(array_chunk($_smarty_tpl->tpl_vars['manufacturers']->value,$_smarty_tpl->tpl_vars['itemsperpage']->value), null, 0);?>
				<?php  $_smarty_tpl->tpl_vars['manufacturers'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['manufacturers']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mmanufacturers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['manufacturers']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['manufacturers']->key => $_smarty_tpl->tpl_vars['manufacturers']->value) {
$_smarty_tpl->tpl_vars['manufacturers']->_loop = true;
 $_smarty_tpl->tpl_vars['manufacturers']->index++;
 $_smarty_tpl->tpl_vars['manufacturers']->first = $_smarty_tpl->tpl_vars['manufacturers']->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['mypLoop']['first'] = $_smarty_tpl->tpl_vars['manufacturers']->first;
?>
					<div class="item <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['mypLoop']['first']) {?>active<?php }?>">
						<?php  $_smarty_tpl->tpl_vars['manufacturer'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['manufacturer']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['manufacturers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['manufacturer']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['manufacturer']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['manufacturer']->key => $_smarty_tpl->tpl_vars['manufacturer']->value) {
$_smarty_tpl->tpl_vars['manufacturer']->_loop = true;
 $_smarty_tpl->tpl_vars['manufacturer']->iteration++;
 $_smarty_tpl->tpl_vars['manufacturer']->last = $_smarty_tpl->tpl_vars['manufacturer']->iteration === $_smarty_tpl->tpl_vars['manufacturer']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['manufacturers']['last'] = $_smarty_tpl->tpl_vars['manufacturer']->last;
?>
							<?php if ($_smarty_tpl->tpl_vars['manufacturer']->iteration%$_smarty_tpl->tpl_vars['columnspage']->value==1&&$_smarty_tpl->tpl_vars['columnspage']->value>1) {?>
								<div class="row">
							<?php }?>
							<div class="logo-manu <?php if ($_smarty_tpl->tpl_vars['columnspage']->value==5) {?>col-md-2-4 col-lg-2-4<?php } else { ?>col-md-<?php echo $_smarty_tpl->tpl_vars['scolumn']->value;?>
<?php }?> col-xs-12">
								<a href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getmanufacturerLink($_smarty_tpl->tpl_vars['manufacturer']->value['id_manufacturer'],$_smarty_tpl->tpl_vars['manufacturer']->value['link_rewrite']), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" title="<?php echo smartyTranslate(array('s'=>'view products','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
">
								<img src="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['manufacturer']->value['image'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" alt=""> </a>
							</div>
							<?php if (($_smarty_tpl->tpl_vars['manufacturer']->iteration%$_smarty_tpl->tpl_vars['columnspage']->value==0||$_smarty_tpl->getVariable('smarty')->value['foreach']['manufacturers']['last'])&&$_smarty_tpl->tpl_vars['columnspage']->value>1) {?>
								</div>
							<?php }?>
						<?php } ?>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>
</div>
<?php }?><?php }} ?>
