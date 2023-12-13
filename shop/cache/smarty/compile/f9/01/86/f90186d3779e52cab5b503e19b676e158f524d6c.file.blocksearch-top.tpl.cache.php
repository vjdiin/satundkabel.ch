<?php /* Smarty version Smarty-3.1.19, created on 2023-12-10 17:58:35
         compiled from "/var/www/html/themes/leomobi/modules/blocksearch/blocksearch-top.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21276597856575ee3ba9cff8-99874152%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f90186d3779e52cab5b503e19b676e158f524d6c' => 
    array (
      0 => '/var/www/html/themes/leomobi/modules/blocksearch/blocksearch-top.tpl',
      1 => 1702225814,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21276597856575ee3ba9cff8-99874152',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'search_query' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_6575ee3bb1edb4_64798687',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6575ee3bb1edb4_64798687')) {function content_6575ee3bb1edb4_64798687($_smarty_tpl) {?>
<script type="text/javascript">
$(document).ready( function(){
//search 
		$("#search_block_top").each( function(){
		var content = $(".groupe");
		$(".groupe-btn", this ).click( function(){
				content.toggleClass("show");
			}) ;
		} );
	 
});
</script>
<!-- Block search module TOP -->
<div id="search_block_top" class="pull-right clearfix">
	<a  class="groupe-btn dropdown hidden-md hidden-lg" title="<?php echo smartyTranslate(array('s'=>'Search','mod'=>'blockuserinfo'),$_smarty_tpl);?>
" href="#"><i class="icon-search"></i></a>
	<form id="searchbox" method="get" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('search'), ENT_QUOTES, 'UTF-8', true);?>
" class="groupe" >
		<input type="hidden" name="controller" value="search" />
		<input type="hidden" name="orderby" value="position" />
		<input type="hidden" name="orderway" value="desc" />
		<input class="search_query form-control" type="text" id="search_query_top" name="search_query" placeholder="<?php echo smartyTranslate(array('s'=>'Search','mod'=>'blocksearch'),$_smarty_tpl);?>
" value="<?php echo stripslashes(mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['search_query']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8'));?>
" />
		<button type="submit" name="submit_search" class="btn btn-default button-search">
			<span><?php echo smartyTranslate(array('s'=>'Search','mod'=>'blocksearch'),$_smarty_tpl);?>
</span>
		</button>
	</form>
</div>
<!-- /Block search module TOP --><?php }} ?>
