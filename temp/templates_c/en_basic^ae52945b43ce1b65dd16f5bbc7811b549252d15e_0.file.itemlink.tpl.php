<?php
/* Smarty version 3.1.48, created on 2023-09-29 11:16:29
  from '/home/teddieme/tedd1eme/templates/trackerinput/itemlink.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6516a3fd449230_40899673',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ae52945b43ce1b65dd16f5bbc7811b549252d15e' => 
    array (
      0 => '/home/teddieme/tedd1eme/templates/trackerinput/itemlink.tpl',
      1 => 1689085248,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6516a3fd449230_40899673 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/block.wikiplugin.php','function'=>'smarty_block_wikiplugin',),1=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/function.service.php','function'=>'smarty_function_service',),2=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/block.tr.php','function'=>'smarty_block_tr',),3=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/block.jq.php','function'=>'smarty_block_jq',),));
?>

<div class="item-link" id="il<?php echo $_smarty_tpl->tpl_vars['field']->value['ins_id'];?>
">
    <?php if ($_smarty_tpl->tpl_vars['data']->value['selectMultipleValues']) {?>
        <input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['field']->value['ins_id'];?>
_old" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['field']->value['value'] ));?>
" />
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['data']->value['displayFieldsListType'] === 'table') {?>
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('wikiplugin', array('_name'=>'trackerlist','_compactArguments_'=>$_smarty_tpl->tpl_vars['data']->value['trackerListOptions']));
$_block_repeat=true;
echo smarty_block_wikiplugin(array('_name'=>'trackerlist','_compactArguments_'=>$_smarty_tpl->tpl_vars['data']->value['trackerListOptions']), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_wikiplugin(array('_name'=>'trackerlist','_compactArguments_'=>$_smarty_tpl->tpl_vars['data']->value['trackerListOptions']), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <?php if ($_smarty_tpl->tpl_vars['field']->value['options_map']['addItems'] && $_smarty_tpl->tpl_vars['data']->value['createTrackerItems']) {?>
            <?php if ($_smarty_tpl->tpl_vars['data']->value['predefined']) {?>
                <div class="form-group row">
                    <div class="input-group col-sm-6">
                        <select name="addaction" class="form-control">
                            <option value=""><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['field']->value['options_map']['addItems'] ));?>
</option>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value['predefined'], 'label', false, 'itemId');
$_smarty_tpl->tpl_vars['label']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['itemId']->value => $_smarty_tpl->tpl_vars['label']->value) {
$_smarty_tpl->tpl_vars['label']->do_else = false;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['itemId']->value;?>
"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['label']->value ));?>
</option>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </select>
                        <span class="input-group-append">
                            <a class="btn btn-primary insert-tracker-item" href="<?php echo smarty_function_service(array('controller'=>'tracker','action'=>'insert_item','trackerId'=>$_smarty_tpl->tpl_vars['field']->value['options_map']['trackerId'],'next'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['data']->value['next'] ))),$_smarty_tpl);?>
">OK</a>
                        </span>
                    </div>
                </div>
            <?php } else { ?>
                <a class="btn btn-primary insert-tracker-item" href="<?php echo smarty_function_service(array('controller'=>'tracker','action'=>'insert_item','trackerId'=>$_smarty_tpl->tpl_vars['field']->value['options_map']['trackerId'],'next'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['data']->value['next'] ))),$_smarty_tpl);?>
"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tr', array());
$_block_repeat=true;
echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['field']->value['options_map']['addItems'] ));
$_block_repeat=false;
echo smarty_block_tr(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></a>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['field']->value['options_map']['preSelectFieldThere']) {?>
                <a class="btn btn-primary update-tracker-links" href="<?php echo smarty_function_service(array('controller'=>'tracker','action'=>'link_items','trackerId'=>$_smarty_tpl->tpl_vars['field']->value['options_map']['trackerId'],'next'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['data']->value['next'] ))),$_smarty_tpl);?>
">Update</a>
            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('jq', array());
$_block_repeat=true;
echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                var preselectedValue = function() {
                    var preselectedEl = $("#il<?php echo $_smarty_tpl->tpl_vars['field']->value['ins_id'];?>
").closest('form').find('[name=ins_<?php echo $_smarty_tpl->tpl_vars['field']->value['options_map']['preSelectFieldHere'];?>
]');
                    return preselectedEl.length > 0 ? preselectedEl.val() : $("#il<?php echo $_smarty_tpl->tpl_vars['field']->value['ins_id'];?>
").closest('form').find('#trackerinput_<?php echo $_smarty_tpl->tpl_vars['field']->value['options_map']['preSelectFieldHere'];?>
').text();
                }
                $("#il<?php echo $_smarty_tpl->tpl_vars['field']->value['ins_id'];?>
").find('.insert-tracker-item').on('click', function() {
                    var itemId = $('#il<?php echo $_smarty_tpl->tpl_vars['field']->value['ins_id'];?>
 select[name=addaction]').val();
                    if( itemId ) {
                        $(this).attr('href', "tiki-ajax_services.php?controller=tracker&action=clone_item&trackerId=<?php echo $_smarty_tpl->tpl_vars['field']->value['options_map']['trackerId'];?>
&next=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['data']->value['next'] ));?>
&itemId="+itemId+'&ins_<?php echo $_smarty_tpl->tpl_vars['field']->value['options_map']['preSelectFieldThere'];?>
='+tiki_encodeURIComponent(preselectedValue()));
                    } else {
                        $(this).attr('href', "tiki-ajax_services.php?controller=tracker&action=insert_item&trackerId=<?php echo $_smarty_tpl->tpl_vars['field']->value['options_map']['trackerId'];?>
&next=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['data']->value['next'] ));?>
&ins_<?php echo $_smarty_tpl->tpl_vars['field']->value['options_map']['preSelectFieldThere'];?>
="+tiki_encodeURIComponent(preselectedValue()));
                    }
                });
                $("#il<?php echo $_smarty_tpl->tpl_vars['field']->value['ins_id'];?>
").find('.update-tracker-links').on('click', function(e) {
                    e.preventDefault();
                    $.ajax({
                        url: this.href,
                        data: {
                            items: $('input[name="<?php echo $_smarty_tpl->tpl_vars['field']->value['ins_id'];?>
[]"]:checked').map(function(i, el){ return $(el).val(); }).toArray(),
                            linkField: <?php echo json_encode($_smarty_tpl->tpl_vars['field']->value['options_map']['preSelectFieldThere']);?>
,
                            linkValue: preselectedValue(),
                            trackerlistParams: <?php echo json_encode($_smarty_tpl->tpl_vars['data']->value['trackerListOptions']);?>

                        },
                        success: function(data) {
                            $('#il<?php echo $_smarty_tpl->tpl_vars['field']->value['ins_id'];?>
 .ts-wrapperdiv').replaceWith(JSON.parse(data));
                            $("#il<?php echo $_smarty_tpl->tpl_vars['field']->value['ins_id'];?>
 a[data-type=trackeritem]").clickModal({});
                        }
                    })
                });
            <?php $_block_repeat=false;
echo smarty_block_jq(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            <?php }?>
            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('jq', array());
$_block_repeat=true;
echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                $("#il<?php echo $_smarty_tpl->tpl_vars['field']->value['ins_id'];?>
")
                    .find('.insert-tracker-item')
                    .clickModal({
                        success: function (data) {
                            var displayed = <?php echo json_encode($_smarty_tpl->tpl_vars['data']->value['list']);?>
;
                            var row = '<tr>';
                            if( <?php echo json_encode($_smarty_tpl->tpl_vars['data']->value['trackerListOptions']['checkbox']);?>
 ) {
                                row += '<td><input type="checkbox" class="<?php echo $_smarty_tpl->tpl_vars['field']->value['ins_id'];?>
-checkbox" name="<?php echo $_smarty_tpl->tpl_vars['field']->value['ins_id'];?>
[]" value="'+( data.created ? data.created : data.itemId )+'" checked /></td>';
                            }
                            $.each(displayed, function(fieldId, permName) {
                                if( $('#il<?php echo $_smarty_tpl->tpl_vars['field']->value['ins_id'];?>
 th').filter(function(i, el){ return $(el).hasClass('field'+fieldId); }).length > 0 ) {
                                    row += '<td>'+data.processedFields[permName]+'</td>';
                                }
                            });
                            row += '</tr>';
                            $row = $(row);
                            $('#il<?php echo $_smarty_tpl->tpl_vars['field']->value['ins_id'];?>
 table')
                                .find('tbody').append($row)
                                .trigger('addRows', [$row, true]);
                            $.closeModal();
                        }
                    });
                $("#il<?php echo $_smarty_tpl->tpl_vars['field']->value['ins_id'];?>
 a[data-type=trackeritem]").clickModal({});
            <?php $_block_repeat=false;
echo smarty_block_jq(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <?php }?>
    <?php } else { ?>
        <select name="<?php echo $_smarty_tpl->tpl_vars['field']->value['ins_id'];
if ($_smarty_tpl->tpl_vars['data']->value['selectMultipleValues']) {?>[]<?php }?>" <?php if ($_smarty_tpl->tpl_vars['data']->value['preselection'] && $_smarty_tpl->tpl_vars['data']->value['crossSelect'] != 'y') {?>disabled="disabled"<?php }?> <?php if ($_smarty_tpl->tpl_vars['data']->value['selectMultipleValues']) {?>multiple="multiple"<?php }?> class="form-control">
            <?php if ($_smarty_tpl->tpl_vars['field']->value['isMandatory'] != 'y' || empty($_smarty_tpl->tpl_vars['field']->value['value'])) {?>
                <option value=""></option>
            <?php }?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value['list'], 'label', false, 'id');
$_smarty_tpl->tpl_vars['label']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['id']->value => $_smarty_tpl->tpl_vars['label']->value) {
$_smarty_tpl->tpl_vars['label']->do_else = false;
?>
                <option value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id']->value ));?>
" <?php if ($_smarty_tpl->tpl_vars['data']->value['preselection'] && !$_smarty_tpl->tpl_vars['field']->value['value'] && $_smarty_tpl->tpl_vars['data']->value['preselection'] == $_smarty_tpl->tpl_vars['id']->value || (($_smarty_tpl->tpl_vars['data']->value['selectMultipleValues'] && is_array($_smarty_tpl->tpl_vars['field']->value['value']) && in_array($_smarty_tpl->tpl_vars['id']->value,$_smarty_tpl->tpl_vars['field']->value['value']) || $_smarty_tpl->tpl_vars['field']->value['value'] == $_smarty_tpl->tpl_vars['id']->value))) {?>selected="selected"<?php }?>>
                    <?php echo $_smarty_tpl->tpl_vars['label']->value;?>

                </option>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>
        <?php if ($_smarty_tpl->tpl_vars['field']->value['options_map']['addItems'] && $_smarty_tpl->tpl_vars['data']->value['createTrackerItems']) {?>
            <a class="btn btn-primary insert-tracker-item" href="<?php echo smarty_function_service(array('controller'=>'tracker','action'=>'insert_item','trackerId'=>$_smarty_tpl->tpl_vars['field']->value['options_map']['trackerId'],'next'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['data']->value['next'] ))),$_smarty_tpl);?>
" data-href="<?php echo smarty_function_service(array('controller'=>'tracker','action'=>'insert_item','trackerId'=>$_smarty_tpl->tpl_vars['field']->value['options_map']['trackerId'],'next'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['data']->value['next'] ))),$_smarty_tpl);?>
"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tr', array());
$_block_repeat=true;
echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['field']->value['options_map']['addItems'] ));
$_block_repeat=false;
echo smarty_block_tr(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></a>
            <?php if ($_smarty_tpl->tpl_vars['field']->value['options_map']['preSelectFieldThere']) {?>
            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('jq', array());
$_block_repeat=true;
echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                $("#il<?php echo $_smarty_tpl->tpl_vars['field']->value['ins_id'];?>
").find('.insert-tracker-item').on('click', function() {
                    $(this).attr('href', $(this).data('href')+'&ins_<?php echo $_smarty_tpl->tpl_vars['field']->value['options_map']['preSelectFieldThere'];?>
='+$('#ins_<?php echo $_smarty_tpl->tpl_vars['field']->value['options_map']['preSelectFieldHere'];?>
').val());
                });
            <?php $_block_repeat=false;
echo smarty_block_jq(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            <?php }?>
            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('jq', array());
$_block_repeat=true;
echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                $("select[name='<?php echo $_smarty_tpl->tpl_vars['field']->value['ins_id'];
if ($_smarty_tpl->tpl_vars['data']->value['selectMultipleValues']) {?>[]<?php }?>']").parent().find(".insert-tracker-item").clickModal({
                    success: function (data) {
                        var $select = $("select[name='<?php echo $_smarty_tpl->tpl_vars['field']->value['ins_id'];
if ($_smarty_tpl->tpl_vars['data']->value['selectMultipleValues']) {?>[]<?php }?>']");
                        $('<option>')
                            .attr('value', data.itemId)
                            .text(data.<?php if (!empty($_smarty_tpl->tpl_vars['data']->value['otherFieldPermName'])) {?>fields.<?php echo $_smarty_tpl->tpl_vars['data']->value['otherFieldPermName'];
} else { ?>itemTitle<?php }?>)
                            .appendTo($select);
                        $select.val(data.itemId).trigger("change.select2").trigger("change");
                        $.closeModal();
                    }
                });
            <?php $_block_repeat=false;
echo smarty_block_jq(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <?php }?>
    <?php }?>
</div>
<?php }
}
