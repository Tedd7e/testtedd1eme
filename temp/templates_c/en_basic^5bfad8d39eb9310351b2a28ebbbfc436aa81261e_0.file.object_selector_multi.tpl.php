<?php
/* Smarty version 3.1.48, created on 2023-09-29 11:17:30
  from '/home/teddieme/tedd1eme/templates/object_selector_multi.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6516a43a2a7063_62038989',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5bfad8d39eb9310351b2a28ebbbfc436aa81261e' => 
    array (
      0 => '/home/teddieme/tedd1eme/templates/object_selector_multi.tpl',
      1 => 1689085248,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6516a43a2a7063_62038989 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/function.icon.php','function'=>'smarty_function_icon',),1=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/modifier.substring.php','function'=>'smarty_modifier_substring',),2=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/function.tracker_item_status_icon.php','function'=>'smarty_function_tracker_item_status_icon',),3=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/block.jq.php','function'=>'smarty_block_jq',),));
?>
<div class="object-selector-multi">
<?php if ($_smarty_tpl->tpl_vars['object_selector_multi']->value['separator']) {?>
    <input
        data-separator="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['object_selector_multi']->value['separator'] ));?>
"
        type="text"
        <?php if ($_smarty_tpl->tpl_vars['prefs']->value['javascript_enabled'] == 'y') {?>style="display: none"<?php }?>
        id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['object_selector_multi']->value['simpleid'] ));?>
"
        <?php if ($_smarty_tpl->tpl_vars['object_selector_multi']->value['simpleclass']) {?>class="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['object_selector_multi']->value['simpleclass'] ));?>
"<?php }?>
        <?php if ($_smarty_tpl->tpl_vars['object_selector_multi']->value['simplename']) {?>name="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['object_selector_multi']->value['simplename'] ));?>
"<?php }?>
        value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( implode($_smarty_tpl->tpl_vars['object_selector_multi']->value['separator'],$_smarty_tpl->tpl_vars['object_selector_multi']->value['current_selection_simple']) ));?>
"
    >
<?php }?>
<textarea
    id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['object_selector_multi']->value['id'] ));?>
"
    <?php if ($_smarty_tpl->tpl_vars['prefs']->value['javascript_enabled'] == 'y') {?>style="display: none"<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['object_selector_multi']->value['name']) {?>name="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['object_selector_multi']->value['name'] ));?>
"<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['object_selector_multi']->value['class']) {?>class="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['object_selector_multi']->value['class'] ));?>
"<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['object_selector_multi']->value['title']) {?>data-label="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['object_selector_multi']->value['title'] ));?>
"<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['object_selector_multi']->value['parent']) {?>data-parent="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['object_selector_multi']->value['parent'] ));?>
"<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['object_selector_multi']->value['parentkey']) {?>data-parentkey="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['object_selector_multi']->value['parentkey'] ));?>
"<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['object_selector_multi']->value['format']) {?>data-format="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['object_selector_multi']->value['format'] ));?>
"<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['object_selector_multi']->value['sort']) {?>data-sort="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['object_selector_multi']->value['sort'] ));?>
"<?php }?>
    data-wildcard="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['object_selector_multi']->value['wildcard'] ));?>
"
    data-filters="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['object_selector_multi']->value['filter'] ));?>
"
    data-threshold="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( (($tmp = @$_smarty_tpl->tpl_vars['object_selector_multi']->value['threshold'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['prefs']->value['tiki_object_selector_threshold'] : $tmp) ));?>
"
    data-searchfield="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['object_selector_multi']->value['searchfield'] ));?>
"
><?php echo implode("\n",$_smarty_tpl->tpl_vars['object_selector_multi']->value['current_selection']);?>
</textarea>
    <div class="basic-selector d-none">
        <select class="form-control" multiple>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['object_selector_multi']->value['current_selection'], 'object');
$_smarty_tpl->tpl_vars['object']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['object']->value) {
$_smarty_tpl->tpl_vars['object']->do_else = false;
?>
                <option value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['object']->value ));?>
" selected="selected"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['object']->value['title'] ));?>
</option>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>
    </div>

    <div class="card d-none">
        <div class="card-header">
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <?php echo smarty_function_icon(array('name'=>'search'),$_smarty_tpl);?>

                    </span>
                </div>
                <input type="text" placeholder="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['object_selector_multi']->value['placeholder'] ));?>
..." value="" class="filter form-control" autocomplete="off">
                <div class="input-group-append">
                    <input type="button" class="btn btn-info search" value="Find">
                </div>
            </div>
        </div>
        <div class="card-body">
            <p class="too-many">Search and select what you are looking for from the options that appear.</p>
            <div class="results">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['object_selector_multi']->value['current_selection'], 'object', false, NULL, 'ix', array (
  'index' => true,
));
$_smarty_tpl->tpl_vars['object']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['object']->value) {
$_smarty_tpl->tpl_vars['object']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_ix']->value['index']++;
?>
                    <div class="form-check">
                        <input id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['object_selector_multi']->value['id'] ));?>
_selected_<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_ix']->value['index'] : null);?>
" class="form-check-input" type="checkbox" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['object']->value ));?>
" checked>
                        <label class="form-check-label" for="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['object_selector_multi']->value['id'] ));?>
_selected_<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_ix']->value['index'] : null);?>
">
                            <?php if (smarty_modifier_substring($_smarty_tpl->tpl_vars['object']->value,0,11) == 'trackeritem') {?>
                                <?php echo smarty_function_tracker_item_status_icon(array('item'=>smarty_modifier_substring($_smarty_tpl->tpl_vars['object']->value,12)),$_smarty_tpl);?>

                            <?php }?>
                            <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['object']->value['title'] ));?>

                        </label>
                    </div>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
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
$('#<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['object_selector_multi']->value['id'] ));?>
')
    .object_selector_multi();
<?php $_block_repeat=false;
echo smarty_block_jq(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
