<?php
/* Smarty version 3.1.48, created on 2023-09-29 11:16:29
  from '/home/teddieme/tedd1eme/templates/tracker_validator.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6516a3fd3efb95_31378261',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '548909db2f747656e3613fe70ad799eb5af68325' => 
    array (
      0 => '/home/teddieme/tedd1eme/templates/tracker_validator.tpl',
      1 => 1689085248,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6516a3fd3efb95_31378261 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/block.jq.php','function'=>'smarty_block_jq',),));
?>

<?php if ((isset($_smarty_tpl->tpl_vars['validationjs']->value))) {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('jq', array());
$_block_repeat=true;
echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
$("#editItemForm<?php echo $_smarty_tpl->tpl_vars['trackerEditFormId']->value;?>
").validate({
    <?php echo $_smarty_tpl->tpl_vars['validationjs']->value;?>
,
    submitHandler: function(form, event){
        if( typeof nosubmitItemForm<?php echo $_smarty_tpl->tpl_vars['trackerEditFormId']->value;?>
 !== "undefined" && nosubmitItemForm<?php echo $_smarty_tpl->tpl_vars['trackerEditFormId']->value;?>
 == true ) {
            return false;
        } else {
            return process_submit(form, event);
        }
    }
});
<?php $_block_repeat=false;
echo smarty_block_jq(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
}
