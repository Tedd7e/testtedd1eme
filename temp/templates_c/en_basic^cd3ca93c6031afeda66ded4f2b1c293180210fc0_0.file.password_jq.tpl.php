<?php
/* Smarty version 3.1.48, created on 2023-09-29 11:20:11
  from '/home/teddieme/tedd1eme/templates/password_jq.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6516a4db3f7e97_43137271',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cd3ca93c6031afeda66ded4f2b1c293180210fc0' => 
    array (
      0 => '/home/teddieme/tedd1eme/templates/password_jq.tpl',
      1 => 1689085248,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6516a4db3f7e97_43137271 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/block.jq.php','function'=>'smarty_block_jq',),));
?>

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('jq', array('notonready'=>true));
$_block_repeat=true;
echo smarty_block_jq(array('notonready'=>true), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    
    var divRegCapson = $('#divRegCapson');
    function regCapsLock(e){
        kc = e.keyCode?e.keyCode:e.which;
        sk = e.shiftKey?e.shiftKey:((kc == 16)?true:false);
        if(((kc >= 65 && kc <= 90) && !sk)||((kc >= 97 && kc <= 122) && sk)) {
            divRegCapson.show();
        } else {
            divRegCapson.hide();
        }
    }
<?php $_block_repeat=false;
echo smarty_block_jq(array('notonready'=>true), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('jq', array());
$_block_repeat=true;
echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    
    $('#oldpass, #pass1, #pass2').on('keypress', function () {
        regCapsLock(event);
    });
    
    $('#pass1').on('keyup', function () {
        runPassword(this.value, 'mypassword');
    });
<?php $_block_repeat=false;
echo smarty_block_jq(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
if (((isset($_smarty_tpl->tpl_vars['ignorejq']->value)) && $_smarty_tpl->tpl_vars['ignorejq']->value === 'y') || $_smarty_tpl->tpl_vars['prefs']->value['feature_jquery_validation'] != 'y') {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('jq', array());
$_block_repeat=true;
echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    
    $('#pass1, #pass2').on('keyup', function () {
        checkPasswordsMatch('#pass2', '#pass1', '#mypassword2_text')
    });
<?php $_block_repeat=false;
echo smarty_block_jq(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}?>

<?php if ($_smarty_tpl->tpl_vars['prefs']->value['generate_password'] == 'y') {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('jq', array());
$_block_repeat=true;
echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    
    $('#genPass').click(function () {
        genPass('genepass');
        $('#genepass').show().select();
        return false;
    });
<?php $_block_repeat=false;
echo smarty_block_jq(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
}
