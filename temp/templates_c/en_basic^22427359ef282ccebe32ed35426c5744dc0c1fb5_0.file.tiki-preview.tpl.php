<?php
/* Smarty version 3.1.48, created on 2023-09-29 11:17:04
  from '/home/teddieme/tedd1eme/templates/tiki-preview.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6516a4206a4ad4_02353569',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '22427359ef282ccebe32ed35426c5744dc0c1fb5' => 
    array (
      0 => '/home/teddieme/tedd1eme/templates/tiki-preview.tpl',
      1 => 1689085248,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6516a4206a4ad4_02353569 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/block.self_link.php','function'=>'smarty_block_self_link',),1=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/block.jq.php','function'=>'smarty_block_jq',),));
?>
<!-- templates/tiki-preview.tpl start -->
<div class="wikipreview" <?php if ($_smarty_tpl->tpl_vars['prefs']->value['ajax_autosave'] == "y") {?>style="display:none;" id="autosave_preview"><div<?php }?>>
    <?php if ($_smarty_tpl->tpl_vars['prefs']->value['ajax_autosave'] == "y") {?>
        <div class="form-group float-sm-right">
            <div class="float-sm-right" style="display:inline;margin-left: 10px;margin-top: 5px">
                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('self_link', array('_icon_name'=>"back",'_ajax'=>"n",'_class'=>"tips",'_title'=>":Popup preview",'_onclick'=>"ajax_preview( 'editwiki', autoSaveId );"."$"."('#autosave_preview').hide();return false;"));
$_block_repeat=true;
echo smarty_block_self_link(array('_icon_name'=>"back",'_ajax'=>"n",'_class'=>"tips",'_title'=>":Popup preview",'_onclick'=>"ajax_preview( 'editwiki', autoSaveId );"."$"."('#autosave_preview').hide();return false;"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <?php $_block_repeat=false;
echo smarty_block_self_link(array('_icon_name'=>"back",'_ajax'=>"n",'_class'=>"tips",'_title'=>":Popup preview",'_onclick'=>"ajax_preview( 'editwiki', autoSaveId );"."$"."('#autosave_preview').hide();return false;"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('self_link', array('_icon_name'=>"remove",'_ajax'=>"n",'_class'=>"tips",'_title'=>":Close preview",'_onclick'=>"$"."('#autosave_preview').hide();return false;"));
$_block_repeat=true;
echo smarty_block_self_link(array('_icon_name'=>"remove",'_ajax'=>"n",'_class'=>"tips",'_title'=>":Close preview",'_onclick'=>"$"."('#autosave_preview').hide();return false;"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <?php $_block_repeat=false;
echo smarty_block_self_link(array('_icon_name'=>"remove",'_ajax'=>"n",'_class'=>"tips",'_title'=>":Close preview",'_onclick'=>"$"."('#autosave_preview').hide();return false;"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            </div>
            <div class="pull-xs-right" style="display:inline">
                <select name="diff_style" id="preview_diff_style" class="form-control">
                    <option value="" <?php if (empty($_smarty_tpl->tpl_vars['diff_style']->value)) {?>selected="selected"<?php }?>>Preview</option>
                    <option value="htmldiff" <?php if ((isset($_smarty_tpl->tpl_vars['diff_style']->value)) && $_smarty_tpl->tpl_vars['diff_style']->value == "htmldiff") {?>selected="selected"<?php }?>>HTML diff</option>
                    <option value="sidediff" <?php if ((isset($_smarty_tpl->tpl_vars['diff_style']->value)) && $_smarty_tpl->tpl_vars['diff_style']->value == "sidediff") {?>selected="selected"<?php }?>>Side-by-side diff</option>
                </select>
            </div>
            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('jq', array());
$_block_repeat=true;
echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                $("#preview_diff_style").change(function(){
                    ajaxLoadingShow($("#autosave_preview .wikitext"));
                    setCookie("preview_diff_style", $(this).val(), "preview", "session");
                    $.get($.service("edit", "preview"), {
                        editor_id: 'editwiki',
                        autoSaveId: autoSaveId,
                        inPage: 1,
                        <?php if ((isset($_REQUEST['hdr']))) {?>hdr: <?php echo $_REQUEST['hdr'];?>
,<?php }?>
                        diff_style: $(this).val()
                    }, function(data) {
                        $("#autosave_preview .wikitext").html(data);
                        ajaxLoadingHide();
                    });
                });
            <?php $_block_repeat=false;
echo smarty_block_jq(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        </div>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_jquery_ui'] == "y") {?>
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('jq', array());
$_block_repeat=true;
echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            $('#autosave_preview').resizable({
                handles:{'s':'#autosave_preview_grippy'},
                alsoResize:'#autosave_preview>div',
                resize: function(event, ui) {
                    setCookie("wiki", $('#autosave_preview').height(), "preview", "session");
                }
            }).height(getCookie("wiki", "preview", ""));
            $("#autosave_preview>div").height(getCookie("wiki", "preview", ""));
        <?php $_block_repeat=false;
echo smarty_block_jq(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    <?php }?>
    <h2>Preview: <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['page']->value ));?>
</h2>
    <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_description'] == 'y') {?>
        <small><?php echo $_smarty_tpl->tpl_vars['description']->value;?>
</small>
    <?php }?>
    <div align="center" class="attention" style="font-weight:bold">
        Note: Remember that this is only a preview, and has not yet been saved!
    </div>
    <div class="preview_contents">
        <article class="wikitext">
            <?php echo $_smarty_tpl->tpl_vars['parsed']->value;?>

        </article>
        <?php if ($_smarty_tpl->tpl_vars['has_footnote']->value && (isset($_smarty_tpl->tpl_vars['parsed_footnote']->value))) {?>
            <div class="wikitext"><?php echo $_smarty_tpl->tpl_vars['parsed_footnote']->value;?>
</div>
        <?php }?>
    </div>
    <?php if ($_smarty_tpl->tpl_vars['prefs']->value['ajax_autosave'] == "y") {?>
        </div>
        <span id="autosave_preview_grippy" class="ui-resizable-handle ui-resizable-s"> </span>
    <?php }?>
</div>
<hr style="clear:both; height:0px;"/> 
<!-- templates/tiki-preview.tpl end -->
<?php }
}
