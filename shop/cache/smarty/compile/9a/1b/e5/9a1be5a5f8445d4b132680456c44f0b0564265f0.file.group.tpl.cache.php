<?php /* Smarty version Smarty-3.1.19, created on 2023-12-10 17:58:36
         compiled from "/var/www/html/modules/leomanagewidgets/views/widgets/group.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3933405156575ee3c876cc3-05453730%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9a1be5a5f8445d4b132680456c44f0b0564265f0' => 
    array (
      0 => '/var/www/html/modules/leomanagewidgets/views/widgets/group.tpl',
      1 => 1702225852,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3933405156575ee3c876cc3-05453730',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'leoGroup' => 0,
    'group' => 0,
    'column' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_6575ee3c8cdc95_34406819',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6575ee3c8cdc95_34406819')) {function content_6575ee3c8cdc95_34406819($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['leoGroup']->value)&&$_smarty_tpl->tpl_vars['leoGroup']->value) {?>
    <?php  $_smarty_tpl->tpl_vars['group'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['group']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['leoGroup']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['group']->key => $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->_loop = true;
?>
       
        <div <?php if (isset($_smarty_tpl->tpl_vars['group']->value['class'])&&$_smarty_tpl->tpl_vars['group']->value['class']) {?>class="<?php echo $_smarty_tpl->tpl_vars['group']->value['class'];?>
"<?php }?> <?php if (isset($_smarty_tpl->tpl_vars['group']->value['background'])&&$_smarty_tpl->tpl_vars['group']->value['background']) {?>style="background-color: <?php echo $_smarty_tpl->tpl_vars['group']->value['background'];?>
"<?php }?>>
        <?php if (isset($_smarty_tpl->tpl_vars['group']->value['title'])&&$_smarty_tpl->tpl_vars['group']->value['title']) {?>
		<h4 class="title_block"><?php echo $_smarty_tpl->tpl_vars['group']->value['title'];?>
</h4>
        <?php }?>
        <?php if (isset($_smarty_tpl->tpl_vars['group']->value['columns'])&&$_smarty_tpl->tpl_vars['group']->value['columns']) {?>
            <?php  $_smarty_tpl->tpl_vars['column'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['column']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['group']->value['columns']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['column']->key => $_smarty_tpl->tpl_vars['column']->value) {
$_smarty_tpl->tpl_vars['column']->_loop = true;
?>
                <?php if ($_smarty_tpl->tpl_vars['column']->value['active']) {?>
                     <div class="widget<?php echo $_smarty_tpl->tpl_vars['column']->value['col_value'];?>
<?php if (isset($_smarty_tpl->tpl_vars['column']->value['class'])&&$_smarty_tpl->tpl_vars['column']->value['class']) {?> <?php echo $_smarty_tpl->tpl_vars['column']->value['class'];?>
<?php }?>" <?php if (isset($_smarty_tpl->tpl_vars['column']->value['background'])&&$_smarty_tpl->tpl_vars['column']->value['background']) {?>style="background-color: <?php echo $_smarty_tpl->tpl_vars['column']->value['background'];?>
"<?php }?>>
                <?php if (isset($_smarty_tpl->tpl_vars['column']->value['rows'])) {?>
                    <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['column']->value['rows']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                        <?php if (isset($_smarty_tpl->tpl_vars['row']->value['content'])) {?><?php echo $_smarty_tpl->tpl_vars['row']->value['content'];?>
<?php }?>
                    <?php } ?>
                <?php }?>
                    </div>
                <?php }?>
            <?php } ?>
        <?php }?>
        </div>
    <?php } ?>

<?php }?><?php }} ?>
