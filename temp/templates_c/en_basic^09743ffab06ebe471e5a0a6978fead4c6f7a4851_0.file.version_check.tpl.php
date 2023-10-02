<?php
/* Smarty version 3.1.48, created on 2023-09-29 11:17:39
  from '/home/teddieme/tedd1eme/templates/admin/version_check.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6516a443afe541_99464811',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '09743ffab06ebe471e5a0a6978fead4c6f7a4851' => 
    array (
      0 => '/home/teddieme/tedd1eme/templates/admin/version_check.tpl',
      1 => 1689085248,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6516a443afe541_99464811 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/block.remarksbox.php','function'=>'smarty_block_remarksbox',),1=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/function.svn_lastup.php','function'=>'smarty_function_svn_lastup',),2=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/function.svn_rev.php','function'=>'smarty_function_svn_rev',),3=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/modifier.tiki_long_datetime.php','function'=>'smarty_modifier_tiki_long_datetime',),4=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/function.preference.php','function'=>'smarty_function_preference',),));
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>"info",'title'=>"Tiki version",'close'=>"n"));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>"info",'title'=>"Tiki version",'close'=>"n"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "lastup", null);
echo smarty_function_svn_lastup(array(),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "svnrev", null);
echo smarty_function_svn_rev(array(),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
    <?php if (!empty($_smarty_tpl->tpl_vars['lastup']->value)) {?>
        Last update from SVN (<?php echo $_smarty_tpl->tpl_vars['tiki_version']->value;?>
): <?php echo smarty_modifier_tiki_long_datetime($_smarty_tpl->tpl_vars['lastup']->value);?>

    <?php } else { ?>
        <?php echo $_smarty_tpl->tpl_vars['tiki_version']->value;?>

    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['svnrev']->value) {?>
        - REV <?php echo $_smarty_tpl->tpl_vars['svnrev']->value;?>

    <?php }?>
    (<?php echo $_smarty_tpl->tpl_vars['db_engine_type']->value;?>
)
<?php $_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>"info",'title'=>"Tiki version",'close'=>"n"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
<div class="adminoptionbox">
    <?php echo smarty_function_preference(array('name'=>'tiki_release_cycle'),$_smarty_tpl);?>

    <?php echo smarty_function_preference(array('name'=>'feature_version_checks'),$_smarty_tpl);?>

    <div id="feature_version_checks_childcontainer">
        <?php echo smarty_function_preference(array('name'=>'tiki_version_check_frequency'),$_smarty_tpl);?>

    </div>
</div>
<?php }
}
