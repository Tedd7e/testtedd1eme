<?php
/* Smarty version 3.1.48, created on 2023-09-29 11:16:29
  from '/home/teddieme/tedd1eme/templates/remarksbox.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6516a3fd6cd751_36748509',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b4a00ef3e80bd1ac94ccb8d7734922ae27883040' => 
    array (
      0 => '/home/teddieme/tedd1eme/templates/remarksbox.tpl',
      1 => 1689085248,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6516a3fd6cd751_36748509 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/function.icon.php','function'=>'smarty_function_icon',),1=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/block.tr.php','function'=>'smarty_block_tr',),2=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/block.jq.php','function'=>'smarty_block_jq',),));
?>

<div <?php if ($_smarty_tpl->tpl_vars['remarksbox_id']->value) {?>id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['remarksbox_id']->value ));?>
"<?php }?> class="alert <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['remarksbox_class']->value ));
if ($_smarty_tpl->tpl_vars['remarksbox_close']->value) {?> alert-dismissable<?php }
if ($_smarty_tpl->tpl_vars['remarksbox_highlight']->value) {?> <?php echo $_smarty_tpl->tpl_vars['remarksbox_highlight']->value;
}
if ($_smarty_tpl->tpl_vars['remarksbox_hidden']->value) {?> d-none<?php }?>"><?php if ($_smarty_tpl->tpl_vars['remarksbox_close']->value) {?><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><?php }
if (!empty($_smarty_tpl->tpl_vars['remarksbox_title']->value)) {?><<?php echo $_smarty_tpl->tpl_vars['remarksbox_title_tag']->value;?>
 class="<?php echo $_smarty_tpl->tpl_vars['remarksbox_title_class']->value;?>
"><?php if (!empty($_smarty_tpl->tpl_vars['remarksbox_icon']->value)) {
echo smarty_function_icon(array('name'=>$_smarty_tpl->tpl_vars['remarksbox_icon']->value),$_smarty_tpl);?>
&nbsp;<?php }?><span class="rboxtitle"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tr', array());
$_block_repeat=true;
echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['remarksbox_title']->value ));
$_block_repeat=false;
echo smarty_block_tr(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></span></<?php echo $_smarty_tpl->tpl_vars['remarksbox_title_tag']->value;?>
><?php } else {
if (!empty($_smarty_tpl->tpl_vars['remarksbox_icon']->value)) {
echo smarty_function_icon(array('name'=>$_smarty_tpl->tpl_vars['remarksbox_icon']->value),$_smarty_tpl);
}
}?><div class="rboxcontent" style="display: inline"><?php echo $_smarty_tpl->tpl_vars['remarksbox_content']->value;?>
</div></div>

<?php if ($_smarty_tpl->tpl_vars['remarksbox_cookie']->value) {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('jq', array());
$_block_repeat=true;
echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
$("button.close", "#<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['remarksbox_id']->value ));?>
").click(function() {
    setCookie("<?php echo $_smarty_tpl->tpl_vars['remarksbox_cookiehash']->value;?>
", "1", "rbox");
});
<?php $_block_repeat=false;
echo smarty_block_jq(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
}
