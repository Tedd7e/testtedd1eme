<?php
/* Smarty version 3.1.48, created on 2023-09-29 11:16:29
  from '/home/teddieme/tedd1eme/templates/trackerinput/text.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6516a3fd41a9f4_18736361',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8ff4d26d4b797024deca9b45c6704fc7473ff4a8' => 
    array (
      0 => '/home/teddieme/tedd1eme/templates/trackerinput/text.tpl',
      1 => 1689085248,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6516a3fd41a9f4_18736361 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/teddieme/tedd1eme/vendor_bundled/vendor/smarty/smarty/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),1=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/function.icon.php','function'=>'smarty_function_icon',),2=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/function.autocomplete.php','function'=>'smarty_function_autocomplete',),3=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/modifier.langname.php','function'=>'smarty_modifier_langname',),4=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/block.tr.php','function'=>'smarty_block_tr',),));
if ($_smarty_tpl->tpl_vars['field']->value['isMultilingual'] != 'y') {?>
    <div<?php if ($_smarty_tpl->tpl_vars['field']->value['options_map']['prepend'] || $_smarty_tpl->tpl_vars['field']->value['options_map']['append'] || $_smarty_tpl->tpl_vars['field']->value['options_map']['labelasplaceholder']) {?> class="input-group"<?php }?>>
        <?php if ($_smarty_tpl->tpl_vars['field']->value['options_map']['prepend']) {?>
            <span class="input-group-append">
                <span class="input-group-text"><?php echo $_smarty_tpl->tpl_vars['field']->value['options_map']['prepend'];?>
</span>
            </span>
        <?php }?>
        <input type="text" class="form-control <?php if ($_smarty_tpl->tpl_vars['field']->value['options_map']['labelasplaceholder']) {?>labelasplaceholder<?php }?>"
                id="<?php echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['field']->value['ins_id'],'[','_'),']','');?>
" name="<?php echo $_smarty_tpl->tpl_vars['field']->value['ins_id'];?>
"
                value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( (($tmp = @$_smarty_tpl->tpl_vars['field']->value['value'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['field']->value['defaultvalue'] : $tmp) ));?>
"
                <?php if ($_smarty_tpl->tpl_vars['field']->value['options_map']['labelasplaceholder']) {?>placeholder="<?php echo $_smarty_tpl->tpl_vars['field']->value['name'];?>
"<?php }?>
                <?php if ($_smarty_tpl->tpl_vars['field']->value['options_map']['size']) {?>size="<?php echo $_smarty_tpl->tpl_vars['field']->value['options_map']['size'];?>
"<?php }?>
                <?php if ($_smarty_tpl->tpl_vars['field']->value['options_map']['max']) {?>maxlength="<?php echo $_smarty_tpl->tpl_vars['field']->value['options_map']['max'];?>
"<?php }?>
        >
        <?php if ($_smarty_tpl->tpl_vars['field']->value['options_map']['labelasplaceholder'] && $_smarty_tpl->tpl_vars['field']->value['isMandatory'] == 'y') {?>
            <span class="input-group-append">
                <span class="input-group-text">
                    <strong class='mandatory_star text-danger tips' title=":This field is mandatory" style="font-size: 100%"><?php echo smarty_function_icon(array('name'=>'asterisk'),$_smarty_tpl);?>
</strong>
                </span>
            </span>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['field']->value['options_map']['append']) {?>
            <span class="input-group-append">
                <span class="input-group-text"><?php echo $_smarty_tpl->tpl_vars['field']->value['options_map']['append'];?>
</span>
            </span>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['field']->value['options_map']['autocomplete'] == 'y' && $_smarty_tpl->tpl_vars['prefs']->value['feature_jquery_autocomplete'] == 'y') {?>
            <?php echo smarty_function_autocomplete(array('element'=>smarty_modifier_replace(smarty_modifier_replace(("#").($_smarty_tpl->tpl_vars['field']->value['ins_id']),"[","_"),"]",''),'type'=>"trackervalue",'options'=>((("trackerId:").($_smarty_tpl->tpl_vars['field']->value['trackerId'])).(",fieldId:")).($_smarty_tpl->tpl_vars['field']->value['fieldId'])),$_smarty_tpl);?>

        <?php }?>
    </div>
<?php } else { ?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['field']->value['lingualvalue'], 'ling', false, NULL, 'multi', array (
));
$_smarty_tpl->tpl_vars['ling']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ling']->value) {
$_smarty_tpl->tpl_vars['ling']->do_else = false;
?>
        <?php if (!$_smarty_tpl->tpl_vars['field']->value['options_map']['labelasplaceholder']) {?><label for="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['ling']->value['id'] ));?>
"><?php echo smarty_modifier_langname($_smarty_tpl->tpl_vars['ling']->value['lang']);?>
</label><?php }?>
        <div<?php if ($_smarty_tpl->tpl_vars['field']->value['options_map']['prepend'] || $_smarty_tpl->tpl_vars['field']->value['options_map']['append']) {?> class="input-group"<?php }?>>
            <?php if (!empty($_smarty_tpl->tpl_vars['field']->value['options_map']['prepend'])) {?>
                <span class="input-group-append">
                    <span class="input-group-text"><?php echo $_smarty_tpl->tpl_vars['field']->value['options_map']['prepend'];?>
</span>
                </span>
            <?php }?>

            <input type="text" id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['ling']->value['id'] ));?>
" name="<?php echo $_smarty_tpl->tpl_vars['field']->value['ins_id'];?>
[<?php echo $_smarty_tpl->tpl_vars['ling']->value['lang'];?>
]" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['ling']->value['value'] ));?>
"
                class="form-control<?php if ($_smarty_tpl->tpl_vars['field']->value['options_map']['labelasplaceholder']) {?> labelasplaceholder mb-2<?php }?>"
                <?php if ($_smarty_tpl->tpl_vars['field']->value['options_map']['labelasplaceholder']) {?> placeholder="<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tr', array());
$_block_repeat=true;
echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo $_smarty_tpl->tpl_vars['field']->value['name'];
$_block_repeat=false;
echo smarty_block_tr(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?> - <?php echo smarty_modifier_langname($_smarty_tpl->tpl_vars['ling']->value['lang']);?>
"<?php }?>
                <?php if ($_smarty_tpl->tpl_vars['field']->value['options_map']['size']) {?>size="<?php echo $_smarty_tpl->tpl_vars['field']->value['options_map']['size'];?>
"<?php }?>
                <?php if ($_smarty_tpl->tpl_vars['field']->value['options_map']['max']) {?>maxlength="<?php echo $_smarty_tpl->tpl_vars['field']->value['options_map']['max'];?>
"<?php }?>
            >

            <?php if ($_smarty_tpl->tpl_vars['field']->value['options_map']['append']) {?>
                <span class="input-group-append">
                    <span class="input-group-text"><?php echo $_smarty_tpl->tpl_vars['field']->value['options_map']['append'];?>
</span>
                </span>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['field']->value['options_map']['autocomplete'] == 'y' && $_smarty_tpl->tpl_vars['prefs']->value['feature_jquery_autocomplete'] == 'y') {?>
                <?php echo smarty_function_autocomplete(array('element'=>"#".((string)$_smarty_tpl->tpl_vars['ling']->value['id']),'type'=>"trackervalue",'options'=>"trackerId:".((string)$_smarty_tpl->tpl_vars['field']->value['trackerId']).",fieldId:".((string)$_smarty_tpl->tpl_vars['field']->value['fieldId'])),$_smarty_tpl);?>

            <?php }?>
        </div>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
}
