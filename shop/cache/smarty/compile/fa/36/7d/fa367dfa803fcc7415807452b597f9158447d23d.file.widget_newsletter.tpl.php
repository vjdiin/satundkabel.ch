<?php /* Smarty version Smarty-3.1.19, created on 2023-12-10 17:58:37
         compiled from "/var/www/html/modules/leomanagewidgets/views/widgets/widget_newsletter.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10952376366575ee3d22ce35-53836312%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fa367dfa803fcc7415807452b597f9158447d23d' => 
    array (
      0 => '/var/www/html/modules/leomanagewidgets/views/widgets/widget_newsletter.tpl',
      1 => 1702225853,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10952376366575ee3d22ce35-53836312',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'widget_heading' => 0,
    'link' => 0,
    'information' => 0,
    'msg' => 0,
    'nw_error' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_6575ee3d29cbf3_72206869',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6575ee3d29cbf3_72206869')) {function content_6575ee3d29cbf3_72206869($_smarty_tpl) {?>

<!-- Block Newsletter module-->

<div id="newsletter_block_left" class="block">
	<?php if (isset($_smarty_tpl->tpl_vars['widget_heading']->value)&&!empty($_smarty_tpl->tpl_vars['widget_heading']->value)) {?>
    <h4 class="title_block">
        <?php echo $_smarty_tpl->tpl_vars['widget_heading']->value;?>

    </h4>
    <?php }?>
	<div class="block_content">
 
		<form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('index'), ENT_QUOTES, 'UTF-8', true);?>
" method="post">
             <?php if ($_smarty_tpl->tpl_vars['information']->value) {?>
             <div class="newsletter-info"><?php echo $_smarty_tpl->tpl_vars['information']->value;?>
</div>
             <?php }?>
			<div class="form-group<?php if (isset($_smarty_tpl->tpl_vars['msg']->value)&&$_smarty_tpl->tpl_vars['msg']->value) {?> <?php if ($_smarty_tpl->tpl_vars['nw_error']->value) {?>form-error<?php } else { ?>form-ok<?php }?><?php }?>" >
				<input class="inputNew form-control grey newsletter-input" id="leonewsletter-input" type="text" name="email" size="18" value="<?php if (isset($_smarty_tpl->tpl_vars['msg']->value)&&$_smarty_tpl->tpl_vars['msg']->value) {?><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
<?php } elseif (isset($_smarty_tpl->tpl_vars['value']->value)&&$_smarty_tpl->tpl_vars['value']->value) {?><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'Enter your e-mail','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
<?php }?>" />
                <button type="submit" name="submitNewsletter" class="btn btn-default button button-small">
                    <span><?php echo smartyTranslate(array('s'=>'Ok','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
</span>
                </button>
				<input type="hidden" name="action" value="0" />

			</div>
		</form>
	</div>
</div>

<script type="text/javascript">
    
        $(document).ready(function() {
    $('#leonewsletter-input').on({
                focus: function() {
            if ($(this).val() == placeholder_leomanagewidgets || $(this).val() == msg_newsl)
                        $(this).val('');
                },
                blur: function() {
            if ($(this).val() == '')
                $(this).val(placeholder_leomanagewidgets);
                    }
            });
	var cssClass = 'alert alert-danger';
    if (typeof nw_error != 'undefined' && !nw_error)
		cssClass = 'alert alert-success';
    if (typeof msg_newsl != 'undefined' && msg_newsl)
	{
        $('#columns').prepend('<div class="clearfix"></div><p class="' + cssClass + '"> ' + alert_leomanagewidgets + '</p>');
		$('html, body').animate({scrollTop: $('#columns').offset().top}, 'slow');
                }
            } );

    
</script>
<!-- /Block Newsletter module-->
<?php if (isset($_smarty_tpl->tpl_vars['msg']->value)&&$_smarty_tpl->tpl_vars['msg']->value) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('msg_newsl'=>addcslashes($_smarty_tpl->tpl_vars['msg']->value,'\'')),$_smarty_tpl);?>
<?php }?><?php if (isset($_smarty_tpl->tpl_vars['nw_error']->value)) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('nw_error'=>$_smarty_tpl->tpl_vars['nw_error']->value),$_smarty_tpl);?>
<?php }?><?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'placeholder_leomanagewidgets')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'placeholder_leomanagewidgets'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'Enter your e-mail','mod'=>'leomanagewidgets','js'=>1),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'placeholder_leomanagewidgets'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php if (isset($_smarty_tpl->tpl_vars['msg']->value)&&$_smarty_tpl->tpl_vars['msg']->value) {?><?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'alert_leomanagewidgets')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'alert_leomanagewidgets'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'Newsletter : %1$s','sprintf'=>$_smarty_tpl->tpl_vars['msg']->value,'js'=>1,'mod'=>"leomanagewidgets"),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'alert_leomanagewidgets'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }?><?php }} ?>
