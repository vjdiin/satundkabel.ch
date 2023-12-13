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
  'variables' => 
  array (
    'link' => 0,
    'search_query' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_6575ee3bc53560_75076516',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6575ee3bc53560_75076516')) {function content_6575ee3bc53560_75076516($_smarty_tpl) {?><script type="text/javascript">/* <![CDATA[ */;$(document).ready(function(){$("#search_block_top").each(function(){var content=$(".groupe");$(".groupe-btn",this).click(function(){content.toggleClass("show");});});});/* ]]> */</script> <div id="search_block_top" class="pull-right clearfix"> <a class="groupe-btn dropdown hidden-md hidden-lg" title="Search" href="#"><i class="icon-search"></i></a><form id="searchbox" method="get" action="http://shop.satundkabel.ch/suche" class="groupe" > <input type="hidden" name="controller" value="search" /> <input type="hidden" name="orderby" value="position" /> <input type="hidden" name="orderway" value="desc" /> <input class="search_query form-control" type="text" id="search_query_top" name="search_query" placeholder="Suche" value="" /> <button type="submit" name="submit_search" class="btn btn-default button-search"> <span>Suche</span> </button></form></div><?php }} ?>
