<?php /* Smarty version Smarty-3.1.19, created on 2023-12-10 17:58:42
         compiled from "/var/www/html/themes/leomobi/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4164071436575ee42f08784-95404946%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1a24dd0f7c1f856aae2e89674f36fac571305759' => 
    array (
      0 => '/var/www/html/themes/leomobi/header.tpl',
      1 => 1702225794,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4164071436575ee42f08784-95404946',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang_iso' => 0,
    'IS_RTL' => 0,
    'LEO_DEFAULT_SKIN' => 0,
    'meta_title' => 0,
    'meta_description' => 0,
    'meta_keywords' => 0,
    'nobots' => 0,
    'nofollow' => 0,
    'ENABLE_RESPONSIVE' => 0,
    'favicon_url' => 0,
    'img_update_time' => 0,
    'css_files' => 0,
    'css_uri' => 0,
    'media' => 0,
    'js_defer' => 0,
    'js_files' => 0,
    'js_def' => 0,
    'js_uri' => 0,
    'content_dir' => 0,
    'LEO_THEMENAME' => 0,
    'HOOK_HEADER' => 0,
    'LEO_CSS' => 0,
    'CUSTOM_FONT' => 0,
    'LAYOUT_WIDTH' => 0,
    'page_name' => 0,
    'body_classes' => 0,
    'hide_left_column' => 0,
    'hide_right_column' => 0,
    'content_only' => 0,
    'LEO_LAYOUT_MODE' => 0,
    'USE_FHEADER' => 0,
    'restricted_country_mode' => 0,
    'geolocation_country' => 0,
    'colValue' => 0,
    'LISTING_GRIG_MODE' => 0,
    'base_dir' => 0,
    'shop_name' => 0,
    'logo_url' => 0,
    'logo_image_width' => 0,
    'logo_image_height' => 0,
    'HOOK_TOP' => 0,
    'HOOK_TOPNAVIGATION' => 0,
    'HOOK_SLIDESHOW' => 0,
    'LEO_LAYOUT_DIRECTION' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_6575ee431366d8_91087307',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6575ee431366d8_91087307')) {function content_6575ee431366d8_91087307($_smarty_tpl) {?><?php if (!is_callable('smarty_function_implode')) include '/var/www/html/tools/smarty/plugins/function.implode.php';
?>
<!DOCTYPE HTML>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7 " lang="<?php echo $_smarty_tpl->tpl_vars['lang_iso']->value;?>
"><![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8 ie7" lang="<?php echo $_smarty_tpl->tpl_vars['lang_iso']->value;?>
"><![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9 ie8" lang="<?php echo $_smarty_tpl->tpl_vars['lang_iso']->value;?>
"><![endif]-->
<!--[if gt IE 8]> <html class="no-js ie9" lang="<?php echo $_smarty_tpl->tpl_vars['lang_iso']->value;?>
"><![endif]-->
<html lang="<?php echo $_smarty_tpl->tpl_vars['lang_iso']->value;?>
" <?php if (isset($_smarty_tpl->tpl_vars['IS_RTL']->value)&&$_smarty_tpl->tpl_vars['IS_RTL']->value) {?> dir="rtl" class="rtl<?php if (isset($_smarty_tpl->tpl_vars['LEO_DEFAULT_SKIN']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['LEO_DEFAULT_SKIN']->value;?>
<?php }?>" <?php } else { ?> class="<?php if (isset($_smarty_tpl->tpl_vars['LEO_DEFAULT_SKIN']->value)) {?><?php echo $_smarty_tpl->tpl_vars['LEO_DEFAULT_SKIN']->value;?>
<?php }?>" <?php }?>>
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./layout/setting.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<head>
		<meta charset="utf-8" />
		<title><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta_title']->value, ENT_QUOTES, 'UTF-8', true);?>
</title>
<?php if (isset($_smarty_tpl->tpl_vars['meta_description']->value)&&$_smarty_tpl->tpl_vars['meta_description']->value) {?>
		<meta name="description" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta_description']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['meta_keywords']->value)&&$_smarty_tpl->tpl_vars['meta_keywords']->value) {?>
		<meta name="keywords" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta_keywords']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
<?php }?>
		<meta name="generator" content="PrestaShop" />
		<meta name="robots" content="<?php if (isset($_smarty_tpl->tpl_vars['nobots']->value)) {?>no<?php }?>index,<?php if (isset($_smarty_tpl->tpl_vars['nofollow']->value)&&$_smarty_tpl->tpl_vars['nofollow']->value) {?>no<?php }?>follow" />
<?php if ($_smarty_tpl->tpl_vars['ENABLE_RESPONSIVE']->value) {?><meta name="viewport" content="width=device-width, minimum-scale=0.25, maximum-scale=1.6, initial-scale=1.0" /><?php }?>
		<meta name="apple-mobile-web-app-capable" content="yes" /> 
		<link rel="icon" type="image/vnd.microsoft.icon" href="<?php echo $_smarty_tpl->tpl_vars['favicon_url']->value;?>
?<?php echo $_smarty_tpl->tpl_vars['img_update_time']->value;?>
" />
		<link rel="shortcut icon" type="image/x-icon" href="<?php echo $_smarty_tpl->tpl_vars['favicon_url']->value;?>
?<?php echo $_smarty_tpl->tpl_vars['img_update_time']->value;?>
" />
            
<?php if (isset($_smarty_tpl->tpl_vars['css_files']->value)) {?>
		<?php  $_smarty_tpl->tpl_vars['media'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['media']->_loop = false;
 $_smarty_tpl->tpl_vars['css_uri'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['css_files']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['media']->key => $_smarty_tpl->tpl_vars['media']->value) {
$_smarty_tpl->tpl_vars['media']->_loop = true;
 $_smarty_tpl->tpl_vars['css_uri']->value = $_smarty_tpl->tpl_vars['media']->key;
?>
		<link rel="stylesheet" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['css_uri']->value, ENT_QUOTES, 'UTF-8', true);?>
" type="text/css" media="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['media']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
			<?php } ?>
<?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['js_defer']->value)&&!$_smarty_tpl->tpl_vars['js_defer']->value&&isset($_smarty_tpl->tpl_vars['js_files']->value)&&isset($_smarty_tpl->tpl_vars['js_def']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['js_def']->value;?>

			<?php  $_smarty_tpl->tpl_vars['js_uri'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['js_uri']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['js_files']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['js_uri']->key => $_smarty_tpl->tpl_vars['js_uri']->value) {
$_smarty_tpl->tpl_vars['js_uri']->_loop = true;
?>
			<script type="text/javascript" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['js_uri']->value, ENT_QUOTES, 'UTF-8', true);?>
"></script>
			<?php } ?>
<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['ENABLE_RESPONSIVE']->value) {?>
		<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['content_dir']->value;?>
themes/<?php echo $_smarty_tpl->tpl_vars['LEO_THEMENAME']->value;?>
/css/responsive.css"/>
		<?php } else { ?>
		<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['content_dir']->value;?>
themes/<?php echo $_smarty_tpl->tpl_vars['LEO_THEMENAME']->value;?>
/css/non-responsive.css"/>
		<?php }?>
		
		
		<?php echo $_smarty_tpl->tpl_vars['HOOK_HEADER']->value;?>

                <?php if (isset($_smarty_tpl->tpl_vars['LEO_CSS']->value)) {?><?php  $_smarty_tpl->tpl_vars['media'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['media']->_loop = false;
 $_smarty_tpl->tpl_vars['css_uri'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['LEO_CSS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['media']->key => $_smarty_tpl->tpl_vars['media']->value) {
$_smarty_tpl->tpl_vars['media']->_loop = true;
 $_smarty_tpl->tpl_vars['css_uri']->value = $_smarty_tpl->tpl_vars['media']->key;
?>
                <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['css_uri']->value;?>
" type="text/css" media="<?php echo $_smarty_tpl->tpl_vars['media']->value;?>
" />
                <?php } ?><?php }?>
		<?php if (isset($_smarty_tpl->tpl_vars['CUSTOM_FONT']->value)) {?>
                <?php echo $_smarty_tpl->tpl_vars['CUSTOM_FONT']->value;?>

		<?php }?>
		<?php if (isset($_smarty_tpl->tpl_vars['LAYOUT_WIDTH']->value)) {?>
                <?php echo $_smarty_tpl->tpl_vars['LAYOUT_WIDTH']->value;?>

		<?php }?>
		<link rel="stylesheet" href="http<?php if (Tools::usingSecureMode()) {?>s<?php }?>://fonts.googleapis.com/css?family=Roboto:400italic,400,700,700italic,300,300italic" type="text/css" media="all" />
		<!--[if IE 8]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
		<![endif]-->
	</head>
	<body<?php if (isset($_smarty_tpl->tpl_vars['page_name']->value)) {?> id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page_name']->value, ENT_QUOTES, 'UTF-8', true);?>
"<?php }?> class="<?php if (isset($_smarty_tpl->tpl_vars['page_name']->value)) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page_name']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php }?><?php if (isset($_smarty_tpl->tpl_vars['body_classes']->value)&&count($_smarty_tpl->tpl_vars['body_classes']->value)) {?> <?php echo smarty_function_implode(array('value'=>$_smarty_tpl->tpl_vars['body_classes']->value,'separator'=>' '),$_smarty_tpl);?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['hide_left_column']->value) {?> hide-left-column<?php }?><?php if ($_smarty_tpl->tpl_vars['hide_right_column']->value) {?> hide-right-column<?php }?><?php if (isset($_smarty_tpl->tpl_vars['content_only']->value)&&$_smarty_tpl->tpl_vars['content_only']->value) {?> content_only<?php }?> lang_<?php echo $_smarty_tpl->tpl_vars['lang_iso']->value;?>
 <?php if (isset($_smarty_tpl->tpl_vars['LEO_LAYOUT_MODE']->value)) {?><?php echo $_smarty_tpl->tpl_vars['LEO_LAYOUT_MODE']->value;?>
<?php }?><?php if (isset($_smarty_tpl->tpl_vars['USE_FHEADER']->value)&&$_smarty_tpl->tpl_vars['USE_FHEADER']->value) {?> keep-header<?php }?>">
	<?php if (!isset($_smarty_tpl->tpl_vars['content_only']->value)||!$_smarty_tpl->tpl_vars['content_only']->value) {?>
		<?php if (isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)&&$_smarty_tpl->tpl_vars['restricted_country_mode']->value) {?>
			<section id="restricted-country">
				<p><?php echo smartyTranslate(array('s'=>'You cannot place a new order from your country.'),$_smarty_tpl);?>
 <span class="bold"><?php echo $_smarty_tpl->tpl_vars['geolocation_country']->value;?>
</span></p>
			</section>
		<?php }?>
		<section id="page" data-column="<?php echo $_smarty_tpl->tpl_vars['colValue']->value;?>
" data-type="<?php echo $_smarty_tpl->tpl_vars['LISTING_GRIG_MODE']->value;?>
">
			<!-- Header -->
			<header id="header">
				<section class="header-container">
					<div id="topbar">
						<div class="banner">
							<div class="container">
								<div class="row">
									<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayBanner"),$_smarty_tpl);?>

								</div>
							</div>
						</div>
						<div class="nav">
							<div class="container">
								<div class="row">
									<nav><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayNav"),$_smarty_tpl);?>
</nav>
								</div>
							</div>
						</div>
					</div>
					<div id="header-main">
						<div class="container">
							<div class="row">
								<div id="header_logo" class="pull-left">
									<a href="<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop_name']->value, ENT_QUOTES, 'UTF-8', true);?>
">
										<img class="logo img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['logo_url']->value;?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop_name']->value, ENT_QUOTES, 'UTF-8', true);?>
"<?php if ($_smarty_tpl->tpl_vars['logo_image_width']->value) {?> width="<?php echo $_smarty_tpl->tpl_vars['logo_image_width']->value;?>
"<?php }?><?php if ($_smarty_tpl->tpl_vars['logo_image_height']->value) {?> height="<?php echo $_smarty_tpl->tpl_vars['logo_image_height']->value;?>
"<?php }?>/>
									</a>
								</div>
								<div id="header_right">
									<?php if (isset($_smarty_tpl->tpl_vars['HOOK_TOP']->value)) {?><?php echo $_smarty_tpl->tpl_vars['HOOK_TOP']->value;?>
<?php }?>
								</div>
							</div>
						</div>
					</div>
				</section>
			</header>
			
			<?php if (isset($_smarty_tpl->tpl_vars['HOOK_TOPNAVIGATION']->value)&&!empty($_smarty_tpl->tpl_vars['HOOK_TOPNAVIGATION']->value)) {?>
				<div id="topnavigation" class="clearfix">
					<div class="container">
							<?php echo $_smarty_tpl->tpl_vars['HOOK_TOPNAVIGATION']->value;?>

					</div>
				</div>
			<?php }?>
			
            <?php if (isset($_smarty_tpl->tpl_vars['HOOK_SLIDESHOW']->value)&&!empty($_smarty_tpl->tpl_vars['HOOK_SLIDESHOW']->value)&&in_array($_smarty_tpl->tpl_vars['page_name']->value,array('index'))) {?>
				<section id="slideshow" class="clearfix">
					<div class="container">
						<div class="row">
							<?php echo $_smarty_tpl->tpl_vars['HOOK_SLIDESHOW']->value;?>

						</div>
					</div>
				</section>
            <?php }?>
			            
			<?php if ($_smarty_tpl->tpl_vars['page_name']->value!='index'&&$_smarty_tpl->tpl_vars['page_name']->value!='pagenotfound') {?>
				<section id="breadcrumb" class="clearfix">
					<div class="container">
						<div class="row">
						<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./breadcrumb.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

						</div>
					</div>
				</section>
			<?php }?>
			
			<!-- Content -->
			<section id="columns" class="columns-container">
				<div class="container">
					<div class="row">
						<div id="top_column" class="center_column col-xs-12 col-sm-12 col-md-12">
							<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayTopColumn"),$_smarty_tpl);?>

						</div>
					</div>
					<div class="row">
                                                <?php if (!isset($_smarty_tpl->tpl_vars['LEO_LAYOUT_DIRECTION']->value)) {?> <?php $_smarty_tpl->tpl_vars["LEO_LAYOUT_DIRECTION"] = new Smarty_variable("default", null, 3);
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars["LEO_LAYOUT_DIRECTION"] = clone $_smarty_tpl->tpl_vars["LEO_LAYOUT_DIRECTION"]; $_ptr = $_ptr->parent; }
Smarty::$global_tpl_vars["LEO_LAYOUT_DIRECTION"] = clone $_smarty_tpl->tpl_vars["LEO_LAYOUT_DIRECTION"];?> <?php }?>
						<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./layout/".((string)$_smarty_tpl->tpl_vars['LEO_LAYOUT_DIRECTION']->value)."/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
  
	<?php }?>
<?php }} ?>
