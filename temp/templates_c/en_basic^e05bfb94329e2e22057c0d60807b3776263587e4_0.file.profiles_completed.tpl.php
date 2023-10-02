<?php
/* Smarty version 3.1.48, created on 2023-09-29 11:21:03
  from '/home/teddieme/tedd1eme/templates/wizard/profiles_completed.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6516a50fe36555_19798042',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e05bfb94329e2e22057c0d60807b3776263587e4' => 
    array (
      0 => '/home/teddieme/tedd1eme/templates/wizard/profiles_completed.tpl',
      1 => 1689085248,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6516a50fe36555_19798042 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/function.icon.php','function'=>'smarty_function_icon',),1=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/block.tr.php','function'=>'smarty_block_tr',),));
?>


<div class="media">
    <div class="mr-3">
        <?php echo smarty_function_icon(array('name'=>"check",'size'=>2),$_smarty_tpl);?>

    </div>
    <div class="media-body">
        <h4 class="mt-0 mb-4">Congratulations. You are done with the Configuration Profiles Wizard.</h4>
        <h3>Next?</h3>
        <div class="row">
            <div class="col-md-9">
            <ul>
                <li><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tr', array('_0'=>"tiki-wizard_admin.php?&stepNr=1&url=tiki-index.php"));
$_block_repeat=true;
echo smarty_block_tr(array('_0'=>"tiki-wizard_admin.php?&stepNr=1&url=tiki-index.php"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Visit the <a href="%0">Configuration Wizard</a> to continue configuring your site<?php $_block_repeat=false;
echo smarty_block_tr(array('_0'=>"tiki-wizard_admin.php?&stepNr=1&url=tiki-index.php"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>.</li>
                <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wizard_user'] == 'y') {?>
                    <li><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tr', array('_0'=>"tiki-wizard_user.php"));
$_block_repeat=true;
echo smarty_block_tr(array('_0'=>"tiki-wizard_user.php"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Visit the <a href="%0">User Wizard</a> to set some of your user preferences<?php $_block_repeat=false;
echo smarty_block_tr(array('_0'=>"tiki-wizard_user.php"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>.</li>
                <?php }?>
                <li>Or click at the button <strong>Finish</strong> to end the admin wizard and go back to the where you were.</li>
            </ul>
            </div>
        </div>
    </div>
</div>
<?php }
}
