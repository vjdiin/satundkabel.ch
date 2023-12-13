<?php /* Smarty version Smarty-3.1.19, created on 2023-12-10 17:58:45
         compiled from "/var/www/html/themes/leomobi/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6492116796575ee455c3874-13871137%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0c21b5de408d6e896b799cd1db034607b23f371d' => 
    array (
      0 => '/var/www/html/themes/leomobi/footer.tpl',
      1 => 1702225794,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6492116796575ee455c3874-13871137',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content_only' => 0,
    'LEO_LAYOUT_DIRECTION' => 0,
    'HOOK_BOTTOM' => 0,
    'HOOK_FOOTERTOP' => 0,
    'HOOK_FOOTER' => 0,
    'HOOK_FOOTERBOTTOM' => 0,
    'ENABLE_COPYRIGHT' => 0,
    'CUSTOM_COPYRIGHT' => 0,
    'HOOK_FOOTNAV' => 0,
    'LEO_PANELTOOL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_6575ee456454a4_37719695',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6575ee456454a4_37719695')) {function content_6575ee456454a4_37719695($_smarty_tpl) {?>
<?php if (!isset($_smarty_tpl->tpl_vars['content_only']->value)||!$_smarty_tpl->tpl_vars['content_only']->value) {?>
						<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./layout/".((string)$_smarty_tpl->tpl_vars['LEO_LAYOUT_DIRECTION']->value)."/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                	</div>
				</div>
            </section>
<!-- Footer -->
            <?php if (isset($_smarty_tpl->tpl_vars['HOOK_BOTTOM']->value)&&!empty($_smarty_tpl->tpl_vars['HOOK_BOTTOM']->value)) {?>
			
				<section id="bottom">
					<div class="container">
							<?php echo $_smarty_tpl->tpl_vars['HOOK_BOTTOM']->value;?>

					</div>
				</section>
			<?php }?>
			<footer id="footer" class="footer-container">
                <?php if (isset($_smarty_tpl->tpl_vars['HOOK_FOOTERTOP']->value)&&!empty($_smarty_tpl->tpl_vars['HOOK_FOOTERTOP']->value)) {?>
					<section id="footertop" class="footer-top"> 
						<div class="container">    
								<?php echo $_smarty_tpl->tpl_vars['HOOK_FOOTERTOP']->value;?>

						</div> 
					</section><!-- #footertop -->
                <?php }?>
                <section id="footercenter" class="footer-center">
					<div class="container"> 
						<div class="col-md-12 clearfix">
							<?php echo $_smarty_tpl->tpl_vars['HOOK_FOOTER']->value;?>

						</div> 
					</div>
				</section><!-- #footercenter -->
                <?php if (isset($_smarty_tpl->tpl_vars['HOOK_FOOTERBOTTOM']->value)&&!empty($_smarty_tpl->tpl_vars['HOOK_FOOTERBOTTOM']->value)) {?>
					<section id="footerbottom" class="footer-bottom">
						<div class="container">
							<div class="row">
								<?php echo $_smarty_tpl->tpl_vars['HOOK_FOOTERBOTTOM']->value;?>

							</div>
						</div>
					</section><!-- #footerbottom -->
                <?php }?>
				<section id="footernav" class="footer-nav">
					<div class="container">
						<div class="inner">
							<div class="row">
								<?php if (isset($_smarty_tpl->tpl_vars['ENABLE_COPYRIGHT']->value)&&$_smarty_tpl->tpl_vars['ENABLE_COPYRIGHT']->value==1) {?>
									<div id="poweredby" class="col-md-6 col-xs-12">
										<?php if (isset($_smarty_tpl->tpl_vars['CUSTOM_COPYRIGHT']->value)&&!empty($_smarty_tpl->tpl_vars['CUSTOM_COPYRIGHT']->value)) {?>
											<?php echo $_smarty_tpl->tpl_vars['CUSTOM_COPYRIGHT']->value;?>

										<?php } else { ?>
											&copy; 2014 <?php echo smartyTranslate(array('s'=>'Powered by PrestaShop. All Rights Reserved.'),$_smarty_tpl);?>
 
										<?php }?>
											<br/>Designed By <span>LeoTheme</span>
									</div><!-- #poweredby -->
								<?php }?>
								<?php if (isset($_smarty_tpl->tpl_vars['HOOK_FOOTNAV']->value)&&!empty($_smarty_tpl->tpl_vars['HOOK_FOOTNAV']->value)) {?>
									<div id="footnav" class="col-md-6 col-xs-12 pull-right">
											<?php echo $_smarty_tpl->tpl_vars['HOOK_FOOTNAV']->value;?>

									</div>
								<?php }?>
							</div>
						</div>
					</div>
				</section>
            </footer><!-- .footer-container -->
		</section><!-- #page -->
<?php }?>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./global.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php if (isset($_smarty_tpl->tpl_vars['LEO_PANELTOOL']->value)&&$_smarty_tpl->tpl_vars['LEO_PANELTOOL']->value) {?>
    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./info/paneltool.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?>
	</body>
</html><?php }} ?>
