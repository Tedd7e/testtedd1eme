<?php
/* Smarty version 3.1.48, created on 2023-09-29 11:16:29
  from '/home/teddieme/tedd1eme/templates/bootstrap_menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6516a3fd6b1811_05750854',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c22b81365a674dd265e650cbb9a727a057e9cc1c' => 
    array (
      0 => '/home/teddieme/tedd1eme/templates/bootstrap_menu.tpl',
      1 => 1689085248,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:bootstrap_smartmenu.tpl' => 1,
  ),
),false)) {
function content_6516a3fd6b1811_05750854 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/block.tr.php','function'=>'smarty_block_tr',),1=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/function.icon.php','function'=>'smarty_function_icon',),));
if ($_smarty_tpl->tpl_vars['prefs']->value['jquery_smartmenus_enable'] == 'y') {?>
    
    <ul class="<?php if ($_smarty_tpl->tpl_vars['bs_menu_class']->value) {
echo $_smarty_tpl->tpl_vars['bs_menu_class']->value;
} else { ?> navbar-nav mr-auto nav<?php }?> <?php if ((($tmp = @$_smarty_tpl->tpl_vars['module_params']->value['type'])===null||$tmp==='' ? null : $tmp) == 'vert') {?>sm-vertical<?php }?>">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
            <?php $_smarty_tpl->_subTemplateRender('file:bootstrap_smartmenu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('item'=>$_smarty_tpl->tpl_vars['item']->value), 0, true);
?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
<?php } else { ?>
    
    <ul class="<?php if ($_smarty_tpl->tpl_vars['bs_menu_class']->value) {
echo $_smarty_tpl->tpl_vars['bs_menu_class']->value;
} else { ?> navbar-nav mr-auto<?php }?>">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
            <?php if (!empty($_smarty_tpl->tpl_vars['item']->value['children'])) {?>
                <?php if ((($tmp = @$_smarty_tpl->tpl_vars['module_params']->value['type'])===null||$tmp==='' ? null : $tmp) == 'horiz') {?>
                    <li class="nav-item dropdown <?php echo (($tmp = @call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['item']->value['class'] )))===null||$tmp==='' ? null : $tmp);?>
 <?php if (!empty($_smarty_tpl->tpl_vars['item']->value['selected'])) {?>active<?php }?>">
                        <a class="nav-link dropdown-toggle" id="menu_option<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['item']->value['optionId'] ));?>
" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tr', array());
$_block_repeat=true;
echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo $_smarty_tpl->tpl_vars['item']->value['name'];
$_block_repeat=false;
echo smarty_block_tr(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                        </a>
                        <div class="dropdown-menu <?php if (!empty($_smarty_tpl->tpl_vars['item']->value['selected'])) {?>show<?php }?>" aria-labelledby="menu_option<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['item']->value['optionId'] ));?>
">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value['children'], 'sub');
$_smarty_tpl->tpl_vars['sub']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['sub']->value) {
$_smarty_tpl->tpl_vars['sub']->do_else = false;
?>
                                <a class="nav-item dropdown-item <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['sub']->value['class'] ));?>
 <?php if ((($tmp = @$_smarty_tpl->tpl_vars['sub']->value['selected'])===null||$tmp==='' ? null : $tmp)) {?>active<?php }?>" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['sub']->value['sefurl'] ));?>
">
                                    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tr', array());
$_block_repeat=true;
echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo $_smarty_tpl->tpl_vars['sub']->value['name'];
$_block_repeat=false;
echo smarty_block_tr(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                </a>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </div>
                    </li>
                <?php } else { ?>
                    <li class="nav-item <?php echo (($tmp = @call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['item']->value['class'] )))===null||$tmp==='' ? null : $tmp);?>
 <?php if (!empty($_smarty_tpl->tpl_vars['item']->value['selected'])) {?>active<?php }?>">
                        <a class="nav-link collapse-toggle" data-toggle="collapse" href="#menu_option<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['item']->value['optionId'] ));?>
" aria-expanded="false">
                            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tr', array());
$_block_repeat=true;
echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo $_smarty_tpl->tpl_vars['item']->value['name'];
$_block_repeat=false;
echo smarty_block_tr(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>&nbsp;<small><?php echo smarty_function_icon(array('name'=>"caret-down"),$_smarty_tpl);?>
</small>
                        </a>
                        <ul id="menu_option<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['item']->value['optionId'] ));?>
" class="nav flex-column collapse <?php if (!empty($_smarty_tpl->tpl_vars['item']->value['selected'])) {?>show<?php }?>" aria-labelledby="#menu_option<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['item']->value['optionId'] ));?>
">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value['children'], 'sub');
$_smarty_tpl->tpl_vars['sub']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['sub']->value) {
$_smarty_tpl->tpl_vars['sub']->do_else = false;
?>
                                <li class="nav-item <?php echo (($tmp = @call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['sub']->value['class'] )))===null||$tmp==='' ? null : $tmp);?>
 <?php if (!empty($_smarty_tpl->tpl_vars['sub']->value['selected'])) {?>active<?php }?>">
                                    <a class="nav-link <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['sub']->value['class'] ));?>
 <?php if ((($tmp = @$_smarty_tpl->tpl_vars['sub']->value['selected'])===null||$tmp==='' ? null : $tmp)) {?>active<?php }?>" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['sub']->value['sefurl'] ));?>
">
                                        <small><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tr', array());
$_block_repeat=true;
echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo $_smarty_tpl->tpl_vars['sub']->value['name'];
$_block_repeat=false;
echo smarty_block_tr(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></small>
                                    </a>
                                </li>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </ul>
                    </li>
                <?php }?>
            <?php } else { ?>
                <li class="nav-item <?php echo (($tmp = @call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['item']->value['class'] )))===null||$tmp==='' ? null : $tmp);?>
 <?php if (!empty($_smarty_tpl->tpl_vars['item']->value['selected'])) {?>active<?php }?>">
                    <a class="nav-link" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['item']->value['sefurl'] ));?>
"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tr', array());
$_block_repeat=true;
echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo $_smarty_tpl->tpl_vars['item']->value['name'];
$_block_repeat=false;
echo smarty_block_tr(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></a>
                </li>
            <?php }?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
<?php }
}
}
