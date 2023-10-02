<?php
/* Smarty version 3.1.48, created on 2023-09-29 11:16:29
  from '/home/teddieme/tedd1eme/templates/modules/mod-logo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6516a3fd5d40b0_58662229',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e5fe566833c305e31a7c18634961a17ed0a94b06' => 
    array (
      0 => '/home/teddieme/tedd1eme/templates/modules/mod-logo.tpl',
      1 => 1689085248,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6516a3fd5d40b0_58662229 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/block.tikimodule.php','function'=>'smarty_block_tikimodule',),1=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/function.icon.php','function'=>'smarty_function_icon',),2=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/block.tr.php','function'=>'smarty_block_tr',),));
?>

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tikimodule', array('error'=>$_smarty_tpl->tpl_vars['module_params']->value['error'],'title'=>$_smarty_tpl->tpl_vars['tpl_module_title']->value,'name'=>"logo",'flip'=>$_smarty_tpl->tpl_vars['module_params']->value['flip'],'decorations'=>$_smarty_tpl->tpl_vars['module_params']->value['decorations'],'nobox'=>$_smarty_tpl->tpl_vars['module_params']->value['nobox'],'notitle'=>$_smarty_tpl->tpl_vars['module_params']->value['notitle']));
$_block_repeat=true;
echo smarty_block_tikimodule(array('error'=>$_smarty_tpl->tpl_vars['module_params']->value['error'],'title'=>$_smarty_tpl->tpl_vars['tpl_module_title']->value,'name'=>"logo",'flip'=>$_smarty_tpl->tpl_vars['module_params']->value['flip'],'decorations'=>$_smarty_tpl->tpl_vars['module_params']->value['decorations'],'nobox'=>$_smarty_tpl->tpl_vars['module_params']->value['nobox'],'notitle'=>$_smarty_tpl->tpl_vars['module_params']->value['notitle']), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
if ($_smarty_tpl->tpl_vars['module_params']->value['src']) {?><div <?php if ($_smarty_tpl->tpl_vars['module_params']->value['bgcolor'] != '') {?> style="background-color: <?php echo $_smarty_tpl->tpl_vars['module_params']->value['bgcolor'];?>
;"<?php }?> class="position-relative float-left <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module_params']->value['class_image'] ));?>
"><a href="<?php echo $_smarty_tpl->tpl_vars['module_params']->value['link'];?>
" title="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module_params']->value['title_attr'] ));?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['module_params']->value['src'];?>
" alt="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module_params']->value['alt_attr'] ));?>
" style="max-width: 100%; height: auto"></a><?php if ($_smarty_tpl->tpl_vars['tiki_p_admin']->value == "y") {?><a class="btn btn-primary btn-sm bottom mb-3 ml-1 mr-1 mt-3 position-absolute opacity50 tips" href="tiki-admin.php?page=look&cookietab=2&highlight=sitelogo_src#feature_sitelogo_childcontainer" style="top: 0; right: 0" title="Change the logo: Click to change or upload new logo"><?php echo smarty_function_icon(array('name'=>"image"),$_smarty_tpl);?>
</a><?php }?></div><?php }
if (!empty($_smarty_tpl->tpl_vars['module_params']->value['sitetitle']) || !empty($_smarty_tpl->tpl_vars['module_params']->value['sitesubtitle'])) {?><div class="float-left <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module_params']->value['class_titles'] ));?>
"><?php if (!empty($_smarty_tpl->tpl_vars['module_params']->value['sitetitle'])) {?><h1 class="sitetitle"><a href="<?php echo $_smarty_tpl->tpl_vars['module_params']->value['link'];?>
"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tr', array());
$_block_repeat=true;
echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module_params']->value['sitetitle'] ));
$_block_repeat=false;
echo smarty_block_tr(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></a></h1><?php }
if (!empty($_smarty_tpl->tpl_vars['module_params']->value['sitesubtitle'])) {?><h2 class="sitesubtitle"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tr', array());
$_block_repeat=true;
echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module_params']->value['sitesubtitle'] ));
$_block_repeat=false;
echo smarty_block_tr(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></h2><?php }?></div><?php }
$_block_repeat=false;
echo smarty_block_tikimodule(array('error'=>$_smarty_tpl->tpl_vars['module_params']->value['error'],'title'=>$_smarty_tpl->tpl_vars['tpl_module_title']->value,'name'=>"logo",'flip'=>$_smarty_tpl->tpl_vars['module_params']->value['flip'],'decorations'=>$_smarty_tpl->tpl_vars['module_params']->value['decorations'],'nobox'=>$_smarty_tpl->tpl_vars['module_params']->value['nobox'],'notitle'=>$_smarty_tpl->tpl_vars['module_params']->value['notitle']), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
