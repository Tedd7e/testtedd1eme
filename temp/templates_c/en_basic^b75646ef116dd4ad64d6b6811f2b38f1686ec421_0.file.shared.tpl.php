<?php
/* Smarty version 3.1.48, created on 2023-09-29 11:17:29
  from '/home/teddieme/tedd1eme/templates/prefs/shared.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6516a439cb9765_60761584',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b75646ef116dd4ad64d6b6811f2b38f1686ec421' => 
    array (
      0 => '/home/teddieme/tedd1eme/templates/prefs/shared.tpl',
      1 => 1689085248,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6516a439cb9765_60761584 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/block.tr.php','function'=>'smarty_block_tr',),1=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/function.icon.php','function'=>'smarty_function_icon',),2=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/function.popup.php','function'=>'smarty_function_popup',),3=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/modifier.parse.php','function'=>'smarty_modifier_parse',),4=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/function.button.php','function'=>'smarty_function_button',),));
if ($_smarty_tpl->tpl_vars['p']->value['helpurl']) {?>
    <?php $_smarty_tpl->_assignInScope('icon', "help");
} elseif ($_smarty_tpl->tpl_vars['p']->value['description']) {?>
    <?php $_smarty_tpl->_assignInScope('icon', "information");
}
if ((isset($_smarty_tpl->tpl_vars['icon']->value))) {?>
    <a <?php if ($_smarty_tpl->tpl_vars['p']->value['helpurl']) {?> href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['p']->value['helpurl'] ));?>
" target="tikihelp"<?php }?>
         class="tikihelp text-info" title="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['p']->value['name'] ));?>
: <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['p']->value['description'] ));?>
 <?php if ($_smarty_tpl->tpl_vars['p']->value['separator'] && $_smarty_tpl->tpl_vars['p']->value['type'] != 'multiselector') {?><br><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tr', array('_0'=>$_smarty_tpl->tpl_vars['p']->value['separator']));
$_block_repeat=true;
echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['p']->value['separator']), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Use &quot;%0&quot; to separate values.<?php $_block_repeat=false;
echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['p']->value['separator']), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}?>">
        <?php echo smarty_function_icon(array('name'=>$_smarty_tpl->tpl_vars['icon']->value),$_smarty_tpl);?>

    </a>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['p']->value['warning']) {?>
    <a href="#" target="tikihelp" class="tikihelp text-warning" title="Warning: <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['p']->value['warning'] ));?>
">
        <?php echo smarty_function_icon(array('name'=>"warning"),$_smarty_tpl);?>

    </a>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['p']->value['modified'] && $_smarty_tpl->tpl_vars['p']->value['available']) {?>
    <span class="pref-reset-wrapper">
        <input class="pref-reset system" type="checkbox" name="lm_reset[]" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['p']->value['preference'] ));?>
" style="display:none" data-preference-default="<?php if ($_smarty_tpl->tpl_vars['p']->value['separator'] && is_array($_smarty_tpl->tpl_vars['p']->value['default'])) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( implode($_smarty_tpl->tpl_vars['p']->value['separator'],$_smarty_tpl->tpl_vars['p']->value['default']) ));
} else {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['p']->value['default'] ));
}?>" />
        <a href="#" class="pref-reset-undo tips" title="Reset|Reset to default value"><?php echo smarty_function_icon(array('name'=>"undo"),$_smarty_tpl);?>
</a>
        <a href="#" class="pref-reset-redo tips" title="Restore|Restore current value" style="display:none"><?php echo smarty_function_icon(array('name'=>"repeat"),$_smarty_tpl);?>
</a>
    </span>
<?php }?>

<?php if (!empty($_smarty_tpl->tpl_vars['p']->value['popup_html'])) {?>
    <a class="tips" title="Actions" href="#" style="padding:0; margin:0; border:0" <?php echo smarty_function_popup(array('fullhtml'=>1,'center'=>"true",'text'=>$_smarty_tpl->tpl_vars['p']->value['popup_html'],'trigger'=>"click"),$_smarty_tpl);?>
>
        <?php echo smarty_function_icon(array('name'=>"actions"),$_smarty_tpl);?>

    </a>
<?php }
if (!empty($_smarty_tpl->tpl_vars['p']->value['voting_html'])) {?>
    <?php echo $_smarty_tpl->tpl_vars['p']->value['voting_html'];?>

<?php }?>

<?php echo $_smarty_tpl->tpl_vars['p']->value['pages'];?>


<?php if ((isset($_smarty_tpl->tpl_vars['pref_filters']->value)) && !$_smarty_tpl->tpl_vars['pref_filters']->value['advanced']['selected'] && in_array('advanced',$_smarty_tpl->tpl_vars['p']->value['tags'])) {?>
    <label class="label label-warning tips" title=":Change your preference filter settings in order to view advanced preferences by default">
        advanced
    </label>
<?php }
if ((isset($_smarty_tpl->tpl_vars['pref_filters']->value)) && !$_smarty_tpl->tpl_vars['pref_filters']->value['experimental']['selected'] && in_array('experimental',$_smarty_tpl->tpl_vars['p']->value['tags'])) {?>
    <label class="label label-danger tips" title=":Change your preference filter settings in order to view experimental preferences by default">
        experimental
    </label>
<?php }
if ($_smarty_tpl->tpl_vars['p']->value['dependencies']) {?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['p']->value['dependencies'], 'dep');
$_smarty_tpl->tpl_vars['dep']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['dep']->value) {
$_smarty_tpl->tpl_vars['dep']->do_else = false;
?>
        <?php if ($_smarty_tpl->tpl_vars['dep']->value['met']) {?>
            <?php echo smarty_function_icon(array('name'=>"ok",'class'=>"pref_dependency tips text-success",'title'=>(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( ("Requires: ").($_smarty_tpl->tpl_vars['dep']->value['label']) ))).(" (OK)")),$_smarty_tpl);?>

        <?php } elseif ($_smarty_tpl->tpl_vars['dep']->value['type'] == 'profile') {?>
            <div class="alert alert-warning pref_dependency highlight"<?php if (!$_smarty_tpl->tpl_vars['p']->value['modified']) {?> style="display:none;"<?php }?>>You need apply profile <a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['dep']->value['link'] ));?>
" class="alert-link"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['dep']->value['label'] ));?>
</a></div>
        <?php } else { ?>
            <div class="alert alert-warning pref_dependency highlight"<?php if (!$_smarty_tpl->tpl_vars['p']->value['modified']) {?> style="display:none;"<?php }?>>You need to set <a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['dep']->value['link'] ));?>
" class="alert-link"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['dep']->value['label'] ));?>
</a></div>
        <?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?>


<?php if ($_smarty_tpl->tpl_vars['p']->value['shorthint']) {?>
    <div class="form-text"><?php echo smarty_modifier_parse($_smarty_tpl->tpl_vars['p']->value['shorthint'],true);?>
</div>
<?php }
if ($_smarty_tpl->tpl_vars['p']->value['detail']) {?>
    <div class="form-text"><?php echo smarty_modifier_parse($_smarty_tpl->tpl_vars['p']->value['detail'],true);?>
</div>
<?php }
if ($_smarty_tpl->tpl_vars['p']->value['hint']) {?>
    <div class="form-text"><?php echo smarty_modifier_parse($_smarty_tpl->tpl_vars['p']->value['hint'],true);?>
</div>
<?php }?>


<?php if ($_smarty_tpl->tpl_vars['p']->value['translatable'] == 'y') {?>
    <?php ob_start();
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['p']->value['preference'] ));
$_prefixVariable5=ob_get_clean();
ob_start();
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['p']->value['name'] ));
$_prefixVariable6=ob_get_clean();
echo smarty_function_button(array('_class'=>"btn btn-link tips",'_type'=>"link",'href'=>"tiki-preference_translate.php?pref=".$_prefixVariable5,'_icon_name'=>"language",'_text'=>'','_title'=>":Translate ".$_prefixVariable6),$_smarty_tpl);?>

<?php }?>

<input class="system" type="hidden" name="lm_preference[]" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['p']->value['preference'] ));?>
">
<?php if ($_smarty_tpl->tpl_vars['p']->value['packages_required']) {?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['p']->value['packages_required'], 'dep');
$_smarty_tpl->tpl_vars['dep']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['dep']->value) {
$_smarty_tpl->tpl_vars['dep']->do_else = false;
?>
        <?php if ($_smarty_tpl->tpl_vars['dep']->value['met']) {?>
            <?php echo smarty_function_icon(array('name'=>"ok",'class'=>"pref_dependency tips text-success",'title'=>(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( ("Requires package: ").($_smarty_tpl->tpl_vars['dep']->value['label']) ))).(" (OK)")),$_smarty_tpl);?>

        <?php } else { ?>
            <div class="alert alert-warning pref_dependency highlight"<?php if (!$_smarty_tpl->tpl_vars['p']->value['modified'] && !$_smarty_tpl->tpl_vars['p']->value['value']) {?> style="display:none;"<?php }?>>
                <a href="tiki-admin.php?page=packages" target="_blank" >Missing tiki package:</a> <a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['dep']->value['link'] ));?>
" class="alert-link"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['dep']->value['label'] ));?>
</a>
            </div>
        <?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['p']->value['notes'], 'note');
$_smarty_tpl->tpl_vars['note']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['note']->value) {
$_smarty_tpl->tpl_vars['note']->do_else = false;
?>
    <div class="form-text pref_note"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['note']->value ));?>
</div>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
