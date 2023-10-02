<?php
/* Smarty version 3.1.48, created on 2023-09-29 11:17:29
  from '/home/teddieme/tedd1eme/templates/object_selector.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6516a439cf5dd8_04562589',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2c3158deade773e479ad7a37530671716b2a8a16' => 
    array (
      0 => '/home/teddieme/tedd1eme/templates/object_selector.tpl',
      1 => 1689085248,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6516a439cf5dd8_04562589 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/function.icon.php','function'=>'smarty_function_icon',),1=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/block.jq.php','function'=>'smarty_block_jq',),));
?>
<div class="object-selector">
<input
    type="text"
    id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['object_selector']->value['simpleid'] ));?>
"
    <?php if ($_smarty_tpl->tpl_vars['prefs']->value['javascript_enabled'] == 'y') {?>style="display: none"<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['object_selector']->value['simpleclass']) {?>class="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['object_selector']->value['simpleclass'] ));?>
"<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['object_selector']->value['simplename']) {?>name="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['object_selector']->value['simplename'] ));?>
"<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['object_selector']->value['simplevalue']) {?>value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['object_selector']->value['current_selection']['id'] ));?>
"<?php }?>
>
<input
    type="text"
    id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['object_selector']->value['id'] ));?>
"
    <?php if ($_smarty_tpl->tpl_vars['prefs']->value['javascript_enabled'] == 'y') {?>style="display: none"<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['object_selector']->value['name']) {?>name="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['object_selector']->value['name'] ));?>
"<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['object_selector']->value['class']) {?>class="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['object_selector']->value['class'] ));?>
"<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['object_selector']->value['current_selection']) {?>
        value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['object_selector']->value['current_selection'] ));?>
"
        data-label="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['object_selector']->value['current_selection']['title'] ));?>
"
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['object_selector']->value['parent']) {?>data-parent="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['object_selector']->value['parent'] ));?>
"<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['object_selector']->value['parentkey']) {?>data-parentkey="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['object_selector']->value['parentkey'] ));?>
"<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['object_selector']->value['format']) {?>data-format="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['object_selector']->value['format'] ));?>
"<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['object_selector']->value['format']) {?>data-format="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['object_selector']->value['format'] ));?>
"<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['object_selector']->value['sort']) {?>data-sort="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['object_selector']->value['sort'] ));?>
"<?php }?>
    data-filters="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['object_selector']->value['filter'] ));?>
"
    data-threshold="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( (($tmp = @$_smarty_tpl->tpl_vars['object_selector']->value['threshold'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['prefs']->value['tiki_object_selector_threshold'] : $tmp) ));?>
"
    data-searchfield="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['object_selector']->value['searchfield'] ));?>
"
>
    <div class="basic-selector d-none mb-3">
        <select class="form-control">
            <option value="" class="protected">&mdash;</option>
            <?php if ($_smarty_tpl->tpl_vars['object_selector']->value['current_selection']) {?>
                <option value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['object_selector']->value['current_selection'] ));?>
" selected="selected"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['object_selector']->value['current_selection']['title'] ));?>
</option>
            <?php }?>
        </select>
    </div>

    <div class="card d-none">
        <div class="card-header">
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <?php echo smarty_function_icon(array('name'=>"search"),$_smarty_tpl);?>

                    </div>
                </div>
                <input type="text" placeholder="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['object_selector']->value['placeholder'] ));?>
..." value="" class="filter form-control" autocomplete="off">
                <div class="input-group-append">
                    <input type="button" class="btn btn-info search" value="Find">
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="results">
                <p class="too-many">Search and select what you are looking for from the options that appear.</p>
                <div class="form-check">
                    <input name="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['object_selector']->value['id'] ));?>
_sel" class="form-check-input protected" type="radio" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['object']->value ));?>
" <?php if (!$_smarty_tpl->tpl_vars['object_selector']->value['current_selection']) {?> checked="checked" <?php }?> value="" id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['object_selector']->value['id'] ));?>
_sel_empty">
                    <label class="form-check-label" for="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['object_selector']->value['id'] ));?>
_sel_empty">&mdash;</label>
                </div>
                <?php if ($_smarty_tpl->tpl_vars['object_selector']->value['current_selection']) {?>
                    <div class="form-check">
                        <input type="radio" checked="checked" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['object_selector']->value['current_selection'] ));?>
" name="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['object_selector']->value['id'] ));?>
_sel" name="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['object_selector']->value['id'] ));?>
_sel_selected">
                        <label class="form-check-label" for="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['object_selector']->value['id'] ));?>
_sel_selected"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['object_selector']->value['current_selection']['title'] ));?>
</label>
                    </div>
                <?php }?>
            </div>
            <p class="no-results d-none">
                No matching results.
            </p>
        </div>
    </div>
</div>

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('jq', array());
$_block_repeat=true;
echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
$('#<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['object_selector']->value['id'] ));?>
')
    .object_selector();
<?php $_block_repeat=false;
echo smarty_block_jq(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
