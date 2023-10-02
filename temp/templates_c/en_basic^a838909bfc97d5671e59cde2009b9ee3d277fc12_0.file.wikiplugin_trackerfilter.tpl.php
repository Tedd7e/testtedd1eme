<?php
/* Smarty version 3.1.48, created on 2023-09-29 11:16:29
  from '/home/teddieme/tedd1eme/templates/wiki-plugins/wikiplugin_trackerfilter.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6516a3fd3dae86_19518707',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a838909bfc97d5671e59cde2009b9ee3d277fc12' => 
    array (
      0 => '/home/teddieme/tedd1eme/templates/wiki-plugins/wikiplugin_trackerfilter.tpl',
      1 => 1689085248,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:tracker_sort_input.tpl' => 1,
  ),
),false)) {
function content_6516a3fd3dae86_19518707 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/function.button.php','function'=>'smarty_function_button',),1=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/function.query.php','function'=>'smarty_function_query',),2=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/block.jq.php','function'=>'smarty_block_jq',),3=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/modifier.tr_if.php','function'=>'smarty_modifier_tr_if',),4=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/block.remarksbox.php','function'=>'smarty_block_remarksbox',),5=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/function.trackerinput.php','function'=>'smarty_function_trackerinput',),6=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/function.initials_filter_links.php','function'=>'smarty_function_initials_filter_links',),7=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/function.bootstrap_modal.php','function'=>'smarty_function_bootstrap_modal',),8=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/function.icon.php','function'=>'smarty_function_icon',),9=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/function.object_selector_multi.php','function'=>'smarty_function_object_selector_multi',),10=>array('file'=>'/home/teddieme/tedd1eme/vendor_bundled/vendor/smarty/smarty/libs/plugins/modifier.regex_replace.php','function'=>'smarty_modifier_regex_replace',),11=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/block.tr.php','function'=>'smarty_block_tr',),12=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/function.js_insert_icon.php','function'=>'smarty_function_js_insert_icon',),));
?>

<div class="trackerfilter_loader"></div>

<?php if ((isset($_smarty_tpl->tpl_vars['msgTrackerFilter']->value)) && $_smarty_tpl->tpl_vars['msgTrackerFilter']->value) {?><div class="alert alert-danger"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['msgTrackerFilter']->value ));?>
</div><?php }
if ((!(isset($_smarty_tpl->tpl_vars['line']->value)) || $_smarty_tpl->tpl_vars['line']->value != 'y') && $_smarty_tpl->tpl_vars['prefs']->value['javascript_enabled'] == 'y' && $_smarty_tpl->tpl_vars['noflipflop']->value != 'y') {
echo smarty_function_button(array('_text'=>"Filters",'_flip_id'=>"trackerFilter".((string)$_smarty_tpl->tpl_vars['iTrackerFilter']->value)),$_smarty_tpl);
}?><div id="trackerFilter<?php echo $_smarty_tpl->tpl_vars['iTrackerFilter']->value;?>
" class="trackerfilter" style="display:<?php if ((isset($_smarty_tpl->tpl_vars['open']->value)) && $_smarty_tpl->tpl_vars['open']->value == 'y') {?>block<?php } else { ?>none<?php }?>"><?php if (empty($_smarty_tpl->tpl_vars['inForm']->value)) {
if (empty($_smarty_tpl->tpl_vars['export_action']->value)) {?><form action="<?php echo $_SERVER['SCRIPT_NAME'];?>
?<?php echo smarty_function_query(array(),$_smarty_tpl);?>
#trackerFilter<?php echo $_smarty_tpl->tpl_vars['iTrackerFilter']->value;?>
-result" method="post" id="form-filter"><?php } else {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('jq', array('notonready'=>true));
$_block_repeat=true;
echo smarty_block_jq(array('notonready'=>true), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    function tf_export_submit(fm) {
                        $("input[name=export_filter]").attr("disabled", "disabled").css("opacity", 0.5);
                        setTimeout(function(){
                            $("input[name=export_filter]").attr("disabled", false).css("opacity", 1);
                        }, 2000);
                        return true;
                    }
                <?php $_block_repeat=false;
echo smarty_block_jq(array('notonready'=>true), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?><form action="tiki-export_tracker.php" method="post" onsubmit="tf_export_submit(this);"><?php echo smarty_function_query(array('_type'=>'form_input','listfields'=>$_smarty_tpl->tpl_vars['export_fields']->value,'showItemId'=>$_smarty_tpl->tpl_vars['export_itemid']->value,'showStatus'=>$_smarty_tpl->tpl_vars['export_status']->value,'showCreated'=>$_smarty_tpl->tpl_vars['export_created']->value,'showLastModif'=>$_smarty_tpl->tpl_vars['export_modif']->value,'encoding'=>$_smarty_tpl->tpl_vars['export_charset']->value),$_smarty_tpl);
if (!empty($_smarty_tpl->tpl_vars['export_itemId']->value)) {?><input type="hidden" name="itemId" value="<?php echo $_smarty_tpl->tpl_vars['export_itemId']->value;?>
"><?php }
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['f_fields']->value, 'f_v', false, 'f_k');
$_smarty_tpl->tpl_vars['f_v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['f_k']->value => $_smarty_tpl->tpl_vars['f_v']->value) {
$_smarty_tpl->tpl_vars['f_v']->do_else = false;
?><input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['f_k']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['f_v']->value;?>
"><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
if ((isset($_smarty_tpl->tpl_vars['mapview']->value)) && $_smarty_tpl->tpl_vars['mapview']->value) {?><input type="hidden" name="mapview" value="y"><?php } else { ?><input type="hidden" name="mapview" value="n"><?php }?><input type="hidden" name="trackerId" value="<?php echo $_smarty_tpl->tpl_vars['trackerId']->value;?>
"><input type="hidden" name="iTrackerFilter" value="<?php echo $_smarty_tpl->tpl_vars['iTrackerFilter']->value;?>
"><?php if (!empty($_smarty_tpl->tpl_vars['count_item']->value)) {?><input type="hidden" name="count_item" value="<?php echo $_smarty_tpl->tpl_vars['count_item']->value;?>
"><?php }?><div class="table-responsive"><table class="table"><?php if ((isset($_smarty_tpl->tpl_vars['line']->value)) && $_smarty_tpl->tpl_vars['line']->value == 'y') {?><tr><?php }
$_smarty_tpl->_assignInScope('jscal', 0);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['filters']->value, 'filter');
$_smarty_tpl->tpl_vars['filter']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['filter']->value) {
$_smarty_tpl->tpl_vars['filter']->do_else = false;
if (!(isset($_smarty_tpl->tpl_vars['line']->value)) || $_smarty_tpl->tpl_vars['line']->value != 'y') {?><tr><?php }?><td class="tracker_filter_label"><?php if ($_smarty_tpl->tpl_vars['indrop']->value != 'y' || ($_smarty_tpl->tpl_vars['filter']->value['format'] != 'd' && $_smarty_tpl->tpl_vars['filter']->value['format'] != 'm')) {?><label for="f_<?php echo $_smarty_tpl->tpl_vars['filter']->value['fieldId'];?>
"><?php echo smarty_modifier_tr_if($_smarty_tpl->tpl_vars['filter']->value['name']);?>
:&nbsp;</label><?php }
if ($_smarty_tpl->tpl_vars['showFieldId']->value == 'y') {?> -- <?php echo $_smarty_tpl->tpl_vars['filter']->value['fieldId'];
}
if (!(isset($_smarty_tpl->tpl_vars['line']->value)) || $_smarty_tpl->tpl_vars['line']->value != 'y') {?></td><td class="tracker_filter_input tracker_field<?php echo $_smarty_tpl->tpl_vars['filter']->value['fieldId'];?>
"><?php } elseif ($_smarty_tpl->tpl_vars['indrop']->value != 'y' || ($_smarty_tpl->tpl_vars['filter']->value['format'] != 'd' && $_smarty_tpl->tpl_vars['filter']->value['format'] != 'm')) {
}
if ($_smarty_tpl->tpl_vars['filter']->value['format'] == 'd' || $_smarty_tpl->tpl_vars['filter']->value['format'] == 'm') {?><select id="f_<?php echo $_smarty_tpl->tpl_vars['filter']->value['fieldId'];?>
" name="f_<?php echo $_smarty_tpl->tpl_vars['filter']->value['fieldId'];
if ($_smarty_tpl->tpl_vars['filter']->value['format'] == "m") {?>[]<?php }?>" <?php if ($_smarty_tpl->tpl_vars['filter']->value['format'] == "m") {?> size="5" multiple="multiple"<?php }?> class="form-control"><?php if ($_smarty_tpl->tpl_vars['indrop']->value == 'y') {?><option value="">--<?php echo smarty_modifier_tr_if($_smarty_tpl->tpl_vars['filter']->value['name']);?>
--</option><?php }?><option value="">Any</option><?php $_smarty_tpl->_assignInScope('last', '');
$__section_io_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['filter']->value['opts']) ? count($_loop) : max(0, (int) $_loop));
$__section_io_1_total = $__section_io_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_io'] = new Smarty_Variable(array());
if ($__section_io_1_total !== 0) {
for ($__section_io_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_io']->value['index'] = 0; $__section_io_1_iteration <= $__section_io_1_total; $__section_io_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_io']->value['index']++){
if ($_smarty_tpl->tpl_vars['last']->value != $_smarty_tpl->tpl_vars['filter']->value['opts'][(isset($_smarty_tpl->tpl_vars['__smarty_section_io']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_io']->value['index'] : null)]['name'] || $_smarty_tpl->tpl_vars['filter']->value['field']['type'] != 'd') {?><option value="<?php echo $_smarty_tpl->tpl_vars['filter']->value['opts'][(isset($_smarty_tpl->tpl_vars['__smarty_section_io']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_io']->value['index'] : null)]['id'];?>
"<?php if ($_smarty_tpl->tpl_vars['filter']->value['opts'][(isset($_smarty_tpl->tpl_vars['__smarty_section_io']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_io']->value['index'] : null)]['selected'] == "y") {?> selected="selected"<?php }?>><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( smarty_modifier_tr_if($_smarty_tpl->tpl_vars['filter']->value['opts'][(isset($_smarty_tpl->tpl_vars['__smarty_section_io']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_io']->value['index'] : null)]['name']) ));?>
</option><?php }
$_smarty_tpl->_assignInScope('last', $_smarty_tpl->tpl_vars['filter']->value['opts'][(isset($_smarty_tpl->tpl_vars['__smarty_section_io']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_io']->value['index'] : null)]['name']);
}
}
?></select><?php if ($_smarty_tpl->tpl_vars['filter']->value['format'] == 'm' && $_smarty_tpl->tpl_vars['prefs']->value['jquery_select2'] != 'y') {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>'tip','title'=>"Tip"));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>'tip','title'=>"Tip"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Use Ctrl+Click to select multiple options<?php $_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>'tip','title'=>"Tip"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
} elseif ($_smarty_tpl->tpl_vars['filter']->value['format'] == '<' || $_smarty_tpl->tpl_vars['filter']->value['format'] == '>' || $_smarty_tpl->tpl_vars['filter']->value['format'] == '<=' || $_smarty_tpl->tpl_vars['filter']->value['format'] == '>=' || $_smarty_tpl->tpl_vars['filter']->value['format'] == 'f' || $_smarty_tpl->tpl_vars['filter']->value['format'] == 'j') {
if ($_smarty_tpl->tpl_vars['filter']->value['field']['type'] == 'f' || $_smarty_tpl->tpl_vars['filter']->value['field']['type'] == 'j') {
if ($_smarty_tpl->tpl_vars['filter']->value['format'] == '<' || $_smarty_tpl->tpl_vars['filter']->value['format'] == '<=') {?>Before:&nbsp;<?php } elseif ($_smarty_tpl->tpl_vars['filter']->value['format'] == '>' || $_smarty_tpl->tpl_vars['filter']->value['format'] == '>=') {?>After:&nbsp;<?php }
}
echo smarty_function_trackerinput(array('field'=>$_smarty_tpl->tpl_vars['filter']->value['field'],'inForm'=>"y"),$_smarty_tpl);
} elseif ($_smarty_tpl->tpl_vars['filter']->value['format'] == 'range') {?>From:&nbsp;<?php echo smarty_function_trackerinput(array('field'=>$_smarty_tpl->tpl_vars['filter']->value['opts']['from'],'inForm'=>"y"),$_smarty_tpl);?>
To:&nbsp;<?php echo smarty_function_trackerinput(array('field'=>$_smarty_tpl->tpl_vars['filter']->value['opts']['to'],'inForm'=>"y"),$_smarty_tpl);
} elseif ($_smarty_tpl->tpl_vars['filter']->value['format'] == 't' || $_smarty_tpl->tpl_vars['filter']->value['format'] == 'T' || $_smarty_tpl->tpl_vars['filter']->value['format'] == 'i') {
if ($_smarty_tpl->tpl_vars['filter']->value['format'] == 'i') {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'i_f', null, null);?>f_<?php echo $_smarty_tpl->tpl_vars['filter']->value['fieldId'];
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_function_initials_filter_links(array('_initial'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'i_f')),$_smarty_tpl);
}?><input id="f_<?php echo $_smarty_tpl->tpl_vars['filter']->value['fieldId'];?>
" type="text" name="f_<?php echo $_smarty_tpl->tpl_vars['filter']->value['fieldId'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['filter']->value['selected'];?>
" class="form-control"><?php } elseif ($_smarty_tpl->tpl_vars['filter']->value['format'] == 'sqlsearch') {?><input id="f_<?php echo $_smarty_tpl->tpl_vars['filter']->value['fieldId'];?>
" type="text" name="f_<?php echo $_smarty_tpl->tpl_vars['filter']->value['fieldId'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['filter']->value['selected'];?>
" class="form-control"><a href="<?php echo smarty_function_bootstrap_modal(array('controller'=>'tracker','action'=>'search_help'),$_smarty_tpl);?>
"><?php echo smarty_function_icon(array('name'=>'help'),$_smarty_tpl);?>
</a><?php } elseif ($_smarty_tpl->tpl_vars['filter']->value['format'] == '*') {?><select id="f_<?php echo $_smarty_tpl->tpl_vars['filter']->value['fieldId'];?>
" name="f_<?php echo $_smarty_tpl->tpl_vars['filter']->value['fieldId'];?>
" class="form-control"><option value="">Any</option><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['filter']->value['opts'], 'option');
$_smarty_tpl->tpl_vars['option']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->do_else = false;
?><option value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['option']->value['id'] ));?>
"<?php if ($_smarty_tpl->tpl_vars['option']->value['selected'] == 'y') {?> selected="selected"<?php }?>><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['option']->value['name'] ));?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select><?php } elseif ($_smarty_tpl->tpl_vars['filter']->value['format'] == 'REL') {?><textarea name="f_<?php echo $_smarty_tpl->tpl_vars['filter']->value['fieldId'];?>
" class="d-none"><?php echo $_smarty_tpl->tpl_vars['filter']->value['opts']['field_selection'];?>
</textarea><?php echo smarty_function_object_selector_multi(array('_id'=>"object_filter_".((string)$_smarty_tpl->tpl_vars['filter']->value['fieldId']),'_name'=>"object_filter_".((string)$_smarty_tpl->tpl_vars['filter']->value['fieldId']),'_filter'=>$_smarty_tpl->tpl_vars['filter']->value['opts']['field_filter'],'_value'=>$_smarty_tpl->tpl_vars['filter']->value['opts']['field_selection'],'_format'=>$_smarty_tpl->tpl_vars['filter']->value['opts']['field_format']),$_smarty_tpl);?>
<div class="text-center mt-3 mb-3">Or</div><select name="other_filter_<?php echo $_smarty_tpl->tpl_vars['filter']->value['fieldId'];?>
" class="form-control"><option value=''>-- Choose an option --</option><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['filter']->value['opts']['other_options'], 'option');
$_smarty_tpl->tpl_vars['option']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->do_else = false;
?><option value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['option']->value['id'] ));?>
"<?php if ($_smarty_tpl->tpl_vars['option']->value['selected'] == 'y') {?> selected="selected"<?php }?>><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['option']->value['name'] ));?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('jq', array());
$_block_repeat=true;
echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                $('select[name="other_filter_<?php echo $_smarty_tpl->tpl_vars['filter']->value['fieldId'];?>
"]').on('change', function() {

                                    var $container = $('#object_filter_<?php echo $_smarty_tpl->tpl_vars['filter']->value['fieldId'];?>
').parent();
                                    // Reset Object Selector values
                                    $('textarea[name^="object_filter_<?php echo $_smarty_tpl->tpl_vars['filter']->value['fieldId'];?>
"]').val('');
                                    $container.find('.results :checked').each(function(){
                                        $(this).prop('checked', false);
                                    });
                                    $container.find('option:selected').each(function(){
                                        $(this).prop('selected', false);
                                    });
                                    $container.find('select').trigger("change.select2");

                                    var val = $(this).val();
                                    $target = $('[name="f_<?php echo $_smarty_tpl->tpl_vars['filter']->value['fieldId'];?>
"]').val(val);
                                });


                                $('textarea[name="object_filter_<?php echo $_smarty_tpl->tpl_vars['filter']->value['fieldId'];?>
"]').on('change', function() {
                                    // Reset other values
                                    var $select = $('select[name="other_filter_<?php echo $_smarty_tpl->tpl_vars['filter']->value['fieldId'];?>
"]')
                                    $select.val('');
                                    $select.trigger("change.select2");

                                    var val = $(this).val();
                                    $target = $('[name="f_<?php echo $_smarty_tpl->tpl_vars['filter']->value['fieldId'];?>
"]').val(val);
                                });
                            <?php $_block_repeat=false;
echo smarty_block_jq(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
} else { ?><div class="form-check <?php if ((isset($_smarty_tpl->tpl_vars['line']->value)) && $_smarty_tpl->tpl_vars['line']->value == 'y') {?>form-check-inline<?php }?>"><input class="form-check-input" id="f_<?php echo $_smarty_tpl->tpl_vars['filter']->value['fieldId'];?>
"type="<?php if ($_smarty_tpl->tpl_vars['filter']->value['format'] == "c") {?>checkbox<?php } else { ?>radio<?php }?>"name="f_<?php echo $_smarty_tpl->tpl_vars['filter']->value['fieldId'];
if ($_smarty_tpl->tpl_vars['filter']->value['format'] == "c") {?>[]<?php }?>"value="" <?php if (!$_smarty_tpl->tpl_vars['filter']->value['selected']) {?> checked="checked"<?php }?>><label class="form-check-label" for="f_<?php echo $_smarty_tpl->tpl_vars['filter']->value['fieldId'];?>
">Any</label></div><?php
$__section_io_2_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['filter']->value['opts']) ? count($_loop) : max(0, (int) $_loop));
$__section_io_2_total = $__section_io_2_loop;
$_smarty_tpl->tpl_vars['__smarty_section_io'] = new Smarty_Variable(array());
if ($__section_io_2_total !== 0) {
for ($__section_io_2_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_io']->value['index'] = 0; $__section_io_2_iteration <= $__section_io_2_total; $__section_io_2_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_io']->value['index']++){
?><div class="form-check <?php if ((isset($_smarty_tpl->tpl_vars['line']->value)) && $_smarty_tpl->tpl_vars['line']->value == 'y') {?>form-check-inline<?php }?>"><input class="form-check-input" id="f_<?php echo $_smarty_tpl->tpl_vars['filter']->value['fieldId'];?>
_<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_io']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_io']->value['index'] : null);?>
"type="<?php if ($_smarty_tpl->tpl_vars['filter']->value['format'] == "c") {?>checkbox<?php } else { ?>radio<?php }?>"name="f_<?php echo $_smarty_tpl->tpl_vars['filter']->value['fieldId'];
if ($_smarty_tpl->tpl_vars['filter']->value['format'] == "c") {?>[]<?php }?>"value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['filter']->value['opts'][(isset($_smarty_tpl->tpl_vars['__smarty_section_io']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_io']->value['index'] : null)]['id'],"/=.*/",''),'url' ));?>
"<?php if ($_smarty_tpl->tpl_vars['filter']->value['opts'][(isset($_smarty_tpl->tpl_vars['__smarty_section_io']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_io']->value['index'] : null)]['selected'] == "y") {?> checked="checked"<?php }?>><label class="form-check-label" for="f_<?php echo $_smarty_tpl->tpl_vars['filter']->value['fieldId'];?>
_<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_io']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_io']->value['index'] : null);?>
"><?php echo smarty_modifier_tr_if(smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['filter']->value['opts'][(isset($_smarty_tpl->tpl_vars['__smarty_section_io']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_io']->value['index'] : null)]['name'],"/^[^=]*=/",''));?>
</label></div><?php
}
}
}?></td><?php if (!(isset($_smarty_tpl->tpl_vars['line']->value)) || $_smarty_tpl->tpl_vars['line']->value != 'y') {?></tr><?php } else { ?> <?php }
if ($_smarty_tpl->tpl_vars['filter']->value['format'] == 'j') {
$_smarty_tpl->_assignInScope('jscal', 1);
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
if ((!(isset($_smarty_tpl->tpl_vars['line']->value)) || $_smarty_tpl->tpl_vars['line']->value != 'y') && (!(isset($_smarty_tpl->tpl_vars['action']->value)) || $_smarty_tpl->tpl_vars['action']->value != " ")) {?><tr><?php }
if ((!(isset($_smarty_tpl->tpl_vars['action']->value)) || $_smarty_tpl->tpl_vars['action']->value != " ") || !empty($_smarty_tpl->tpl_vars['export_action']->value)) {?><td>&nbsp;</td><td><div id="trackerFilter<?php echo $_smarty_tpl->tpl_vars['iTrackerFilter']->value;?>
-result"></div><?php if (!empty($_smarty_tpl->tpl_vars['export_action']->value)) {?><input class="button submit btn btn-primary" type="submit" name="export_filter" value="<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tr', array());
$_block_repeat=true;
echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo $_smarty_tpl->tpl_vars['export_action']->value;
$_block_repeat=false;
echo smarty_block_tr(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>"><?php } elseif ($_smarty_tpl->tpl_vars['action']->value && $_smarty_tpl->tpl_vars['action']->value != " ") {?><input class="button submit btn btn-primary mr-1 mb-1" type="submit" name="filter" value="<?php if (empty($_smarty_tpl->tpl_vars['action']->value)) {?>Filter<?php } else {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tr', array());
$_block_repeat=true;
echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo $_smarty_tpl->tpl_vars['action']->value;
$_block_repeat=false;
echo smarty_block_tr(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}?>"><input class="button submit btn btn-primary mr-1 mb-1" type="submit" name="reset_filter" value="Reset"><?php } else { ?>&nbsp;<?php }
if ($_smarty_tpl->tpl_vars['mapButtons']->value && $_smarty_tpl->tpl_vars['mapButtons']->value == 'y') {
if ((isset($_smarty_tpl->tpl_vars['mapview']->value)) && $_smarty_tpl->tpl_vars['mapview']->value) {?><br><input class="button submit btn btn-primary" type="submit" name="searchlist" value="List View"><?php } else { ?><br><input class="button submit btn btn-primary" type="submit" name="searchmap" value="Map View"><?php }
}?></td><?php }
if (!empty($_smarty_tpl->tpl_vars['sortchoice']->value)) {
if ($_smarty_tpl->tpl_vars['line']->value != 'y') {?><tr><?php }?><td>Sort</td><td><?php $_smarty_tpl->_subTemplateRender('file:tracker_sort_input.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('iTRACKERLIST'=>$_smarty_tpl->tpl_vars['iTrackerFilter']->value), 0, false);
if (!(isset($_smarty_tpl->tpl_vars['line']->value)) || $_smarty_tpl->tpl_vars['line']->value != 'y') {?></tr><?php }
}
if ((!(isset($_smarty_tpl->tpl_vars['line']->value)) || $_smarty_tpl->tpl_vars['line']->value != 'y') && $_smarty_tpl->tpl_vars['action']->value) {?></tr><?php }?></table></div><?php if (empty($_smarty_tpl->tpl_vars['inForm']->value)) {?></form><?php }?></div><?php if (!empty($_smarty_tpl->tpl_vars['dataRes']->value)) {?><div class="trackerfilter-result"><?php echo $_smarty_tpl->tpl_vars['dataRes']->value;?>
</div><?php }
if ($_smarty_tpl->tpl_vars['jscal']->value) {?>
    <?php echo smarty_function_js_insert_icon(array('type'=>"jscalendar"),$_smarty_tpl);?>

<?php }
}
}
