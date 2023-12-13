<?php /* Smarty version Smarty-3.1.19, created on 2023-12-10 17:58:43
         compiled from "/var/www/html/themes/leomobi/modules/blockuserinfo/nav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15147141876575ee43c98dc1-91728754%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '99d88adcd19fe50965554b01cff5675fbd402ca6' => 
    array (
      0 => '/var/www/html/themes/leomobi/modules/blockuserinfo/nav.tpl',
      1 => 1702225816,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15147141876575ee43c98dc1-91728754',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'logged' => 0,
    'link' => 0,
    'cookie' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_6575ee43d0fde3_21690112',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6575ee43d0fde3_21690112')) {function content_6575ee43d0fde3_21690112($_smarty_tpl) {?><script type="text/javascript">
/* Blockusreinfo */
	
$(document).ready( function(){
	$(".leo-groupe").each( function(){
		var content = $(".groupe-content");
		$(".groupe-btn", this ).click( function(){
			content.toggleClass("eshow");
		}) ;
	} );
	
	$(window).resize(function() {
		if( $(window).width() > 600 ){
			 $(".groupe-content").removeClass('eshow');
		}
	});
});
</script>

<!-- Block user information module NAV  -->
<div class="leo-groupe g-dropdown">
	<a class="groupe-btn visible-xs"><?php echo smartyTranslate(array('s'=>'Quick link','mod'=>'blockuserinfo'),$_smarty_tpl);?>
 <span class="caret"></span></a>
	<div id="header_user_info" class="pull-left groupe-content hidden-xs">
		<ul class="links">
			<?php if ($_smarty_tpl->tpl_vars['logged']->value) {?>
				<li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'View my customer account','mod'=>'blockuserinfo'),$_smarty_tpl);?>
" class="name-customer" rel="nofollow"><?php echo smartyTranslate(array('s'=>'Welcome'),$_smarty_tpl);?>
 <span><?php echo $_smarty_tpl->tpl_vars['cookie']->value->customer_firstname;?>
 <?php echo $_smarty_tpl->tpl_vars['cookie']->value->customer_lastname;?>
</span></a></li>
				<li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('index',true,null,"mylogout"), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Log me out','mod'=>'blockuserinfo'),$_smarty_tpl);?>
" class="logout" rel="nofollow"><i class="icon-power-off"></i> <?php echo smartyTranslate(array('s'=>'Sign out','mod'=>'blockuserinfo'),$_smarty_tpl);?>
</a></li>
				<li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'View my customer account','mod'=>'blockuserinfo'),$_smarty_tpl);?>
" rel="nofollow"><i class="icon-user"></i> <?php echo smartyTranslate(array('s'=>'Your Account','mod'=>'blockuserinfo'),$_smarty_tpl);?>
</a></li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getModuleLink('blockwishlist','mywishlist');?>
" title="<?php echo smartyTranslate(array('s'=>'My wishlists','mod'=>'blockuserinfo'),$_smarty_tpl);?>
"><i class="icon-list-alt"></i> <?php echo smartyTranslate(array('s'=>'My wishlists','mod'=>'blockuserinfo'),$_smarty_tpl);?>
</a></li>
			<?php } else { ?>
				<li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'View my customer account','mod'=>'blockuserinfo'),$_smarty_tpl);?>
" rel="nofollow"><i class="icon-user"></i> <?php echo smartyTranslate(array('s'=>'Your Account','mod'=>'blockuserinfo'),$_smarty_tpl);?>
</a></li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getModuleLink('blockwishlist','mywishlist');?>
" title="<?php echo smartyTranslate(array('s'=>'My wishlists','mod'=>'blockuserinfo'),$_smarty_tpl);?>
"><i class="icon-list-alt"></i> <?php echo smartyTranslate(array('s'=>'My wishlists','mod'=>'blockuserinfo'),$_smarty_tpl);?>
</a></li>
				<li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Login to your customer account','mod'=>'blockuserinfo'),$_smarty_tpl);?>
" class="login" rel="nofollow"><i class="icon-key"></i> <?php echo smartyTranslate(array('s'=>'Sign in','mod'=>'blockuserinfo'),$_smarty_tpl);?>
</a></li>
				<li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Register account','mod'=>'blockuserinfo'),$_smarty_tpl);?>
" class="register" rel="nofollow"><i class="icon-edit"></i> <?php echo smartyTranslate(array('s'=>'Register','mod'=>'blockuserinfo'),$_smarty_tpl);?>
</a></li>
			<?php }?>
		</ul>
	</div>
</div>
<!-- /Block usmodule NAV --><?php }} ?>
