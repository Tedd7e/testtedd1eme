<?php
/* Smarty version 3.1.48, created on 2023-09-29 11:16:29
  from '/home/teddieme/tedd1eme/templates/tiki-wiki_topline.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6516a3fd72eda2_20733020',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd2d8ed58847b80e96bca3d72cafd1d6efaba7c07' => 
    array (
      0 => '/home/teddieme/tedd1eme/templates/tiki-wiki_topline.tpl',
      1 => 1689085248,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:translated-lang.tpl' => 1,
  ),
),false)) {
function content_6516a3fd72eda2_20733020 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/function.breadcrumbs.php','function'=>'smarty_function_breadcrumbs',),1=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/function.icon.php','function'=>'smarty_function_icon',),2=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/function.object_title.php','function'=>'smarty_function_object_title',),3=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/modifier.sefurl.php','function'=>'smarty_modifier_sefurl',),4=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/modifier.truncate.php','function'=>'smarty_modifier_truncate',),5=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/function.query.php','function'=>'smarty_function_query',),6=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/block.jq.php','function'=>'smarty_block_jq',),7=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/block.ajax_href.php','function'=>'smarty_block_ajax_href',),8=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/function.monitor_link.php','function'=>'smarty_function_monitor_link',),9=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/modifier.virtual_path.php','function'=>'smarty_modifier_virtual_path',),10=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/function.favorite.php','function'=>'smarty_function_favorite',),));
?>

<div class="wikitopline clearfix" style="clear: both;">
    <div class="content">
        <?php if (!(isset($_smarty_tpl->tpl_vars['hide_page_header']->value)) || !$_smarty_tpl->tpl_vars['hide_page_header']->value) {?>
            <div class="wikiinfo float-left">
                <?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_page_name_above'] == 'y' && $_smarty_tpl->tpl_vars['print_page']->value != 'y') {?>
                    <a href="tiki-index.php?page=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['page']->value,"url" ));?>
" class="titletop" title="refresh"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['page']->value ));?>
</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <?php }?>

                <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_pageid'] == 'y' && $_smarty_tpl->tpl_vars['print_page']->value != 'y') {?>
                    <small><a class="link" href="tiki-index.php?page_id=<?php echo $_smarty_tpl->tpl_vars['page_id']->value;?>
">page id: <?php echo $_smarty_tpl->tpl_vars['page_id']->value;?>
</a></small>
                <?php }?>

                <?php echo smarty_function_breadcrumbs(array('type'=>"desc",'loc'=>"page",'crumbs'=>$_smarty_tpl->tpl_vars['crumbs']->value),$_smarty_tpl);?>


                <?php if ($_smarty_tpl->tpl_vars['cached_page']->value == 'y') {?><span class="cachedStatus">(Cached)</span><?php }?>
                <?php if ($_smarty_tpl->tpl_vars['is_categorized']->value == 'y' && $_smarty_tpl->tpl_vars['prefs']->value['feature_categories'] == 'y' && $_smarty_tpl->tpl_vars['prefs']->value['feature_categorypath'] == 'y' && $_smarty_tpl->tpl_vars['tiki_p_view_category']->value == 'y') {?>
                    <?php echo $_smarty_tpl->tpl_vars['display_catpath']->value;?>

                <?php }?>
            </div>
        <?php }?> 
        <?php if ($_smarty_tpl->tpl_vars['pdf_export']->value == 'y') {?>
            <div class="wikiinfo float-left" id="pdfinfo" style="display:none">
                <div class="alert alert-info" style="width:500px"><h4><span class="icon icon-information fas fa-info-circle fa-fw "></span>&nbsp;<span class="rboxtitle">Please wait</span></h4><div class="rboxcontent" style="display: inline"><span class="fas fa-circle-notch fa-spin" style="font-size:24px"></span> The PDF is being prepared, please wait...</div></div>
            </div>
        <?php }?>
    </div> 
</div> 

<?php if (!(isset($_smarty_tpl->tpl_vars['versioned']->value)) && $_smarty_tpl->tpl_vars['print_page']->value != 'y') {?>
    <div class="wikiactions_wrapper clearfix">
    <div class="wikiactions d-flex justify-content-end mb-2"><div class="btn-group ml-2"><?php if (($_smarty_tpl->tpl_vars['tiki_p_admin']->value == 'y' || $_smarty_tpl->tpl_vars['tiki_p_admin_wiki']->value == 'y' || $_smarty_tpl->tpl_vars['tiki_p_edit']->value == 'y' || $_smarty_tpl->tpl_vars['tiki_p_edit']->value == 'y' || $_smarty_tpl->tpl_vars['tiki_p_edit_inline']->value == 'y') || $_smarty_tpl->tpl_vars['translationsCount']->value > 1) {
if ($_smarty_tpl->tpl_vars['prefs']->value['feature_multilingual'] == 'y' && $_smarty_tpl->tpl_vars['prefs']->value['show_available_translations'] == 'y' && $_smarty_tpl->tpl_vars['machine_translate_to_lang']->value == '') {?><!--span class="btn-i18n" --><?php $_smarty_tpl->_subTemplateRender('file:translated-lang.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('object_type'=>'wiki page'), 0, false);
?><!--/span --><?php }
}
if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_sharethis'] == "y" && $_smarty_tpl->tpl_vars['prefs']->value['wiki_sharethis_encourage'] == "y") {?><div class="btn-group sharethis">
                        <?php echo '<script'; ?>
 type="text/javascript">
                            //Create your sharelet with desired properties and set button element to false
                            var object = SHARETHIS.addEntry({ title:'<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['page']->value,"url" ));?>
'}, {button:false});
                            //Output your customized button
                            document.write('<a class="btn btn-info btn-sm tips" id="share" href="#" title="ShareThis"><?php echo smarty_function_icon(array('name'=>"sharethis"),$_smarty_tpl);?>
</a>');
                            //Tie customized button to ShareThis button functionality.
                            var element = document.getElementById("share");
                            object.attachButton(element);
                        <?php echo '</script'; ?>
>
                        </div><?php }
if ($_smarty_tpl->tpl_vars['prefs']->value['feature_backlinks'] == 'y' && (($tmp = @$_smarty_tpl->tpl_vars['backlinks']->value)===null||$tmp==='' ? null : $tmp) && $_smarty_tpl->tpl_vars['tiki_p_view_backlink']->value == 'y') {?><div class="btn-group backlinks"><?php if (!$_smarty_tpl->tpl_vars['js']->value) {?><ul class="cssmenu_horiz"><li><?php }?><a href="#" role="button" data-toggle="dropdown" data-hover="dropdown" class="btn btn-info btn-sm dropdown-toggle" title="Backlinks"><?php echo smarty_function_icon(array('name'=>"backlink"),$_smarty_tpl);?>
</a><div class="dropdown-menu dropdown-menu-right" role="menu"><h6 class="dropdown-header">Backlinks</h6><div class="dropdown-divider"></div><?php
$__section_back_7_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['backlinks']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_back_7_total = $__section_back_7_loop;
$_smarty_tpl->tpl_vars['__smarty_section_back'] = new Smarty_Variable(array());
if ($__section_back_7_total !== 0) {
for ($__section_back_7_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_back']->value['index'] = 0; $__section_back_7_iteration <= $__section_back_7_total; $__section_back_7_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_back']->value['index']++){
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'backlink_title', null, null);
echo smarty_function_object_title(array('id'=>$_smarty_tpl->tpl_vars['backlinks']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_back']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_back']->value['index'] : null)]['objectId'],'type'=>$_smarty_tpl->tpl_vars['backlinks']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_back']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_back']->value['index'] : null)]['type']),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?><a class="dropdown-item" role="menuitem" tabindex="-1" href="<?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['backlinks']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_back']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_back']->value['index'] : null)]['objectId'],$_smarty_tpl->tpl_vars['backlinks']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_back']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_back']->value['index'] : null)]['type']);?>
" title="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'backlink_title') ));?>
"><?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_backlinks_name_len'] >= '1') {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( smarty_modifier_truncate($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'backlink_title'),$_smarty_tpl->tpl_vars['prefs']->value['wiki_backlinks_name_len'],"...",true) ));
} else {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'backlink_title') ));
}?></a><?php
}
}
?></div><?php if (!$_smarty_tpl->tpl_vars['js']->value) {?></li></ul><?php }?></div><?php }
if ($_smarty_tpl->tpl_vars['structure']->value == 'y' || ($_smarty_tpl->tpl_vars['structure']->value == 'n' && count($_smarty_tpl->tpl_vars['showstructs']->value) != 0)) {?><div class="btn-group structures"><?php if (!$_smarty_tpl->tpl_vars['js']->value) {?><ul class="cssmenu_horiz"><li><?php }?><a href="#" class="btn btn-info btn-sm dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" title="Structures"><?php echo smarty_function_icon(array('name'=>"structure"),$_smarty_tpl);?>
</a><div class="dropdown-menu dropdown-menu-right" role="menu"><h6 class="dropdown-header">Structures</h6><div class="dropdown-divider"></div><?php
$__section_struct_8_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['showstructs']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_struct_8_total = $__section_struct_8_loop;
$_smarty_tpl->tpl_vars['__smarty_section_struct'] = new Smarty_Variable(array());
if ($__section_struct_8_total !== 0) {
for ($__section_struct_8_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_struct']->value['index'] = 0; $__section_struct_8_iteration <= $__section_struct_8_total; $__section_struct_8_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_struct']->value['index']++){
?><a href="tiki-index.php?page=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['page']->value,'url' ));?>
&amp;structure=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['showstructs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_struct']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_struct']->value['index'] : null)]['pageName'],'url' ));?>
" <?php if ((isset($_smarty_tpl->tpl_vars['structure_path']->value[0]['pageName'])) && $_smarty_tpl->tpl_vars['showstructs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_struct']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_struct']->value['index'] : null)]['pageName'] == $_smarty_tpl->tpl_vars['structure_path']->value[0]['pageName']) {?> title="Current structure: <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['showstructs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_struct']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_struct']->value['index'] : null)]['pageName'] ));?>
" class="dropdown-item selected tips" <?php } else { ?> class="dropdown-item tips" title="Show structure: <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['showstructs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_struct']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_struct']->value['index'] : null)]['pageName'] ));?>
"<?php }?>><?php if ($_smarty_tpl->tpl_vars['showstructs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_struct']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_struct']->value['index'] : null)]['page_alias']) {
echo $_smarty_tpl->tpl_vars['showstructs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_struct']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_struct']->value['index'] : null)]['page_alias'];
} else {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['showstructs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_struct']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_struct']->value['index'] : null)]['pageName'] ));
}?></a><?php
}
}
if ((isset($_smarty_tpl->tpl_vars['structure_path']->value)) && $_smarty_tpl->tpl_vars['showstructs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_struct']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_struct']->value['index'] : null)]['pageName'] != $_smarty_tpl->tpl_vars['structure_path']->value[0]['pageName'] && $_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_open_as_structure'] != 'y') {?><div role="presentation" class="dropdown-divider"></div><a href="tiki-index.php?page=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['page']->value,'url' ));?>
" class="dropdown-item tips" title=":Hide structure bar and any toc">Hide structure</a><?php }?></div><?php if (!$_smarty_tpl->tpl_vars['js']->value) {?></li></ul><?php }?></div><?php }
$_smarty_tpl->_assignInScope('hasPageAction', "0");
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "pageActions", null, null);
if (!$_smarty_tpl->tpl_vars['js']->value) {?><ul class="cssmenu_horiz"><li><?php }?><a class="btn btn-info btn-sm dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" href="#" title="Page actions"><?php echo smarty_function_icon(array('name'=>"menu-extra"),$_smarty_tpl);?>
</a><div class="dropdown-menu dropdown-menu-right"><h6 class="dropdown-header">Page actions</h6><div class="dropdown-divider"></div><?php if ($_smarty_tpl->tpl_vars['pdf_export']->value == 'y' && $_smarty_tpl->tpl_vars['pdf_warning']->value == 'n') {?><a class="dropdown-item generate-pdf" href="tiki-print.php?<?php echo smarty_function_query(array('_keepall'=>'y','display'=>"pdf",'page'=>$_smarty_tpl->tpl_vars['page']->value),$_smarty_tpl);?>
"><?php echo smarty_function_icon(array('name'=>"pdf"),$_smarty_tpl);?>
  PDF<?php $_smarty_tpl->_assignInScope('hasPageAction', "1");?></a><?php } elseif ($_smarty_tpl->tpl_vars['tiki_p_admin']->value == "y" && $_smarty_tpl->tpl_vars['pdf_warning']->value == 'y') {?><a href="tiki-admin.php?page=packages" target="_blank" class="dropdown-item text-danger" title="Warning:mPDF Package Missing"><?php echo smarty_function_icon(array('name'=>"warning"),$_smarty_tpl);?>
  PDF<?php $_smarty_tpl->_assignInScope('hasPageAction', "1");?></a><?php }
if (!($_smarty_tpl->tpl_vars['prefs']->value['flaggedrev_approval'] != 'y' || !$_smarty_tpl->tpl_vars['revision_approval']->value || $_smarty_tpl->tpl_vars['lastVersion']->value == $_smarty_tpl->tpl_vars['revision_displayed']->value)) {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('jq', array());
$_block_repeat=true;
echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                $(".editplugin, .icon_edit_section").hide();
                            <?php $_block_repeat=false;
echo smarty_block_jq(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
if ($_smarty_tpl->tpl_vars['prefs']->value['flaggedrev_approval'] != 'y' || !$_smarty_tpl->tpl_vars['revision_approval']->value || $_smarty_tpl->tpl_vars['lastVersion']->value == $_smarty_tpl->tpl_vars['revision_displayed']->value) {
if ($_smarty_tpl->tpl_vars['editable']->value && ($_smarty_tpl->tpl_vars['tiki_p_edit']->value == 'y' || mb_strtolower($_smarty_tpl->tpl_vars['page']->value, 'UTF-8') == 'sandbox') && $_smarty_tpl->tpl_vars['beingEdited']->value != 'y' && $_smarty_tpl->tpl_vars['machine_translate_to_lang']->value == '') {?><a class="dropdown-item" <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('ajax_href', array('template'=>"tiki-editpage.tpl"));
$_block_repeat=true;
echo smarty_block_ajax_href(array('template'=>"tiki-editpage.tpl"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>tiki-editpage.php?page=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['page']->value,"url" ));
if (!empty($_smarty_tpl->tpl_vars['page_ref_id']->value) && (empty($_smarty_tpl->tpl_vars['needsStaging']->value) || $_smarty_tpl->tpl_vars['needsStaging']->value != 'y')) {?>&amp;page_ref_id=<?php echo $_smarty_tpl->tpl_vars['page_ref_id']->value;
}
$_block_repeat=false;
echo smarty_block_ajax_href(array('template'=>"tiki-editpage.tpl"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>><?php echo smarty_function_icon(array('name'=>"edit"),$_smarty_tpl);?>
 Edit<?php $_smarty_tpl->_assignInScope('hasPageAction', "1");?></a><?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_edit_icons_toggle'] == 'y' && ($_smarty_tpl->tpl_vars['prefs']->value['wiki_edit_plugin'] == 'y' || $_smarty_tpl->tpl_vars['prefs']->value['wiki_edit_section'] == 'y')) {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('jq', array());
$_block_repeat=true;
echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                        $("#wiki_plugin_edit_view").click( function () {
                                        var $icon = $("#wiki_plugin_edit_view");
                                        var $toggleOnIcon = '<?php echo smarty_function_icon(array('iclass'=>"toggle-icon",'name'=>"toggle-on"),$_smarty_tpl);?>
';
                                        var $toggleOffIcon = '<?php echo smarty_function_icon(array('iclass'=>"toggle-icon",'name'=>"toggle-off"),$_smarty_tpl);?>
';
                                        if (! $icon.hasClass("active highlight")) {
                                            $(".editplugin, .icon_edit_section").show();
                                            $icon.addClass("active highlight");
                                            setCookieBrowser("wiki_plugin_edit_view", true);
                                            $(".toggle-icon", this).replaceWith($toggleOnIcon);
                                        } else {
                                            $(".editplugin, .icon_edit_section").hide();
                                            $icon.removeClass("active highlight");
                                            deleteCookie("wiki_plugin_edit_view");
                                            $(".toggle-icon", this).replaceWith($toggleOffIcon);
                                        }
                                        return false;
                                        });
                                        if (!getCookie("wiki_plugin_edit_view")) {$(".editplugin, .icon_edit_section").hide(); } else { $("#wiki_plugin_edit_view").click(); }
                                    <?php $_block_repeat=false;
echo smarty_block_jq(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?><a class="dropdown-item" href="#" id="wiki_plugin_edit_view" title="Click to toggle on/off"><span class="d-flex align-items-center text-with-toggle"><span class="text flex-fill mr-3"><?php echo smarty_function_icon(array('name'=>'plugin'),$_smarty_tpl);?>
 Edit icons</span> <?php echo smarty_function_icon(array('iclass'=>"toggle-icon",'name'=>"toggle-off"),$_smarty_tpl);?>
</span><?php $_smarty_tpl->_assignInScope('hasPageAction', "1");?></a><?php }
}
if (($_smarty_tpl->tpl_vars['tiki_p_edit']->value == 'y' || $_smarty_tpl->tpl_vars['tiki_p_edit_inline']->value == 'y' || mb_strtolower($_smarty_tpl->tpl_vars['page']->value, 'UTF-8') == 'sandbox') && $_smarty_tpl->tpl_vars['beingEdited']->value != 'y' && $_smarty_tpl->tpl_vars['machine_translate_to_lang']->value == '') {
if ($_smarty_tpl->tpl_vars['prefs']->value['wysiwyg_inline_editing'] == 'y' && $_smarty_tpl->tpl_vars['prefs']->value['feature_wysiwyg'] == 'y') {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('jq', array());
$_block_repeat=true;
echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                        $("#wysiwyg_inline_edit").click( function () {
                                        var $icon = $("#wysiwyg_inline_edit");
                                        var $toggleOnIcon = '<?php echo smarty_function_icon(array('iclass'=>"toggle-icon",'name'=>"toggle-on"),$_smarty_tpl);?>
';
                                        var $toggleOffIcon = '<?php echo smarty_function_icon(array('iclass'=>"toggle-icon",'name'=>"toggle-off"),$_smarty_tpl);?>
';
                                        if (! $icon.hasClass("active highlight")) {
                                            if (enableWysiwygInlineEditing()) {
                                                $icon.addClass("active highlight");
                                                $(".toggle-icon", this).replaceWith($toggleOnIcon);
                                            }
                                        } else {
                                            if (disableWYSIWYGInlineEditing()) {
                                                $icon.removeClass("active highlight");
                                                $(".toggle-icon", this).replaceWith($toggleOffIcon);
                                            }
                                        }
                                        return false;
                                        });
                                        if (getCookie("wysiwyg_inline_edit", "preview")) { $("#wysiwyg_inline_edit").click(); }
                                    <?php $_block_repeat=false;
echo smarty_block_jq(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?><a class="dropdown-item" href="#" id="wysiwyg_inline_edit" title="Click to toggle on/off"><span class="d-flex align-items-center text-with-toggle"><span class="text flex-fill mr-3"><?php echo smarty_function_icon(array('name'=>'edit'),$_smarty_tpl);?>
 Inline edit (Wysiwyg)</span> <?php echo smarty_function_icon(array('iclass'=>"toggle-icon",'name'=>"toggle-off"),$_smarty_tpl);?>
</span><?php $_smarty_tpl->_assignInScope('hasPageAction', "1");?></a><?php }
}
}
if ($_smarty_tpl->tpl_vars['cached_page']->value == 'y') {?><a class="dropdown-item" href="<?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['page']->value,'wiki','with_next');?>
refresh=1"><?php echo smarty_function_icon(array('name'=>"refresh"),$_smarty_tpl);?>
 Refresh<?php $_smarty_tpl->_assignInScope('hasPageAction', "1");?></a><?php }
if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_print'] == 'y') {?><a class="dropdown-item" href="tiki-print.php?<?php echo smarty_function_query(array('_keepall'=>'y','page'=>$_smarty_tpl->tpl_vars['page']->value),$_smarty_tpl);?>
"><?php echo smarty_function_icon(array('name'=>"print"),$_smarty_tpl);?>
 Print<?php $_smarty_tpl->_assignInScope('hasPageAction', "1");?></a><?php }
if ($_smarty_tpl->tpl_vars['prefs']->value['feature_share'] == 'y' && $_smarty_tpl->tpl_vars['tiki_p_share']->value == 'y') {?><a class="dropdown-item" href="tiki-share.php?url=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_SERVER['REQUEST_URI'],'url' ));?>
"><?php echo smarty_function_icon(array('name'=>"share"),$_smarty_tpl);?>
 Share<?php $_smarty_tpl->_assignInScope('hasPageAction', "1");?></a><?php }
if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_sharethis'] == "y" && $_smarty_tpl->tpl_vars['prefs']->value['wiki_sharethis_encourage'] != "y") {?>
                                <?php echo '<script'; ?>
 type="text/javascript">
                                    //Create your sharelet with desired properties and set button element to false
                                    var object = SHARETHIS.addEntry({ title:'<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['page']->value,"url" ));?>
'}, {button:false});
                                    //Output your customized button
                                    document.write('<a class="dropdown-item" id="share" href="#" title="ShareThis"><?php echo smarty_function_icon(array('name'=>"sharethis"),$_smarty_tpl);?>
 ShareThis</a>');
                                    //Tie customized button to ShareThis button functionality.
                                    var element = document.getElementById("share");
                                    object.attachButton(element);
                                <?php echo '</script'; ?>
>
                            <?php }
if ($_smarty_tpl->tpl_vars['prefs']->value['sefurl_short_url'] == 'y') {?><a class="dropdown-item" id="short_url_link" href="#" onclick="(function() { $(document.activeElement).attr('href', 'tiki-short_url.php?url=' + encodeURIComponent(window.location.href) + '&title=' + encodeURIComponent(document.title)); })();"><?php echo smarty_function_icon(array('name'=>"link"),$_smarty_tpl);?>
 Get a short URL<?php $_smarty_tpl->_assignInScope('hasPageAction', "1");?></a><?php }
if (!empty($_smarty_tpl->tpl_vars['user']->value) && $_smarty_tpl->tpl_vars['prefs']->value['feature_notepad'] == 'y' && $_smarty_tpl->tpl_vars['tiki_p_notepad']->value == 'y') {?><a class="dropdown-item" href="tiki-index.php?page=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['page']->value,"url" ));?>
&amp;savenotepad=1<?php if (!empty($_smarty_tpl->tpl_vars['page_ref_id']->value)) {?>&amp;page_ref_id=<?php echo $_smarty_tpl->tpl_vars['page_ref_id']->value;
}?>"><?php echo smarty_function_icon(array('name'=>"notepad"),$_smarty_tpl);?>
 Save to notepad<?php $_smarty_tpl->_assignInScope('hasPageAction', "1");?></a><?php }
echo smarty_function_monitor_link(array('type'=>"wiki page",'object'=>$_smarty_tpl->tpl_vars['page']->value,'class'=>"dropdown-item",'linktext'=>"Notification"),$_smarty_tpl);
if (!empty($_smarty_tpl->tpl_vars['user']->value) && $_smarty_tpl->tpl_vars['prefs']->value['feature_user_watches'] == 'y') {
if ($_smarty_tpl->tpl_vars['user_watching_page']->value == 'n') {?><a class="dropdown-item" href="tiki-index.php?page=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['page']->value,"url" ));?>
&amp;watch_event=wiki_page_changed&amp;watch_object=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['page']->value,"url" ));?>
&amp;watch_action=add<?php if ($_smarty_tpl->tpl_vars['structure']->value == 'y') {?>&amp;structure=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['home_info']->value['pageName'],'url' ));
}?>" class="icon"><?php echo smarty_function_icon(array('name'=>"watch"),$_smarty_tpl);?>
 Monitor page<?php $_smarty_tpl->_assignInScope('hasPageAction', "1");?></a><?php } else { ?><a class="dropdown-item" href="tiki-index.php?page=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['page']->value,"url" ));?>
&amp;watch_event=wiki_page_changed&amp;watch_object=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['page']->value,"url" ));?>
&amp;watch_action=remove<?php if ($_smarty_tpl->tpl_vars['structure']->value == 'y') {?>&amp;structure=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['home_info']->value['pageName'],'url' ));
}?>" class="icon"><?php echo smarty_function_icon(array('name'=>"stop-watching"),$_smarty_tpl);?>
 Stop monitoring page<?php $_smarty_tpl->_assignInScope('hasPageAction', "1");?></a><?php }
if ($_smarty_tpl->tpl_vars['structure']->value == 'y' && $_smarty_tpl->tpl_vars['tiki_p_watch_structure']->value == 'y') {
if ($_smarty_tpl->tpl_vars['user_watching_structure']->value != 'y') {?><a class="dropdown-item" href="tiki-index.php?page=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['page']->value,"url" ));?>
&amp;watch_event=structure_changed&amp;watch_object=<?php echo $_smarty_tpl->tpl_vars['page_info']->value['page_ref_id'];?>
&amp;watch_action=add_desc&amp;structure=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['home_info']->value['pageName'],'url' ));?>
"><?php echo smarty_function_icon(array('name'=>"watch"),$_smarty_tpl);?>
 Monitor sub-structure<?php $_smarty_tpl->_assignInScope('hasPageAction', "1");?></a><?php } else { ?><a class="dropdown-item" href="tiki-index.php?page=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['page']->value,"url" ));?>
&amp;watch_event=structure_changed&amp;watch_object=<?php echo $_smarty_tpl->tpl_vars['page_info']->value['page_ref_id'];?>
&amp;watch_action=remove_desc&amp;structure=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['home_info']->value['pageName'],'url' ));?>
"><?php echo smarty_function_icon(array('name'=>"stop-watching"),$_smarty_tpl);?>
 Stop monitoring sub-structure<?php $_smarty_tpl->_assignInScope('hasPageAction', "1");?></a><?php }
}
}
if ($_smarty_tpl->tpl_vars['prefs']->value['feature_group_watches'] == 'y' && ($_smarty_tpl->tpl_vars['tiki_p_admin_users']->value == 'y' || $_smarty_tpl->tpl_vars['tiki_p_admin']->value == 'y')) {?><a href="tiki-object_watches.php?objectId=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['page']->value,"url" ));?>
&amp;watch_event=wiki_page_changed&amp;objectType=wiki+page&amp;objectName=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['page']->value,"url" ));?>
&amp;objectHref=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( ('tiki-index.php?page=').($_smarty_tpl->tpl_vars['page']->value),"url" ));?>
" class="dropdown-item"><?php echo smarty_function_icon(array('name'=>"watch-group"),$_smarty_tpl);?>
 Group monitor<?php $_smarty_tpl->_assignInScope('hasPageAction', "1");?></a><?php if ($_smarty_tpl->tpl_vars['structure']->value == 'y') {?><a class="dropdown-item" href="tiki-object_watches.php?objectId=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['page_info']->value['page_ref_id'],"url" ));?>
&amp;watch_event=structure_changed&amp;objectType=structure&amp;objectName=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['page']->value,"url" ));?>
&amp;objectHref=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( ('tiki-index.php?page_ref_id=').($_smarty_tpl->tpl_vars['page_ref_id']->value),"url" ));?>
" class="icon"><?php echo smarty_function_icon(array('name'=>"watch-group"),$_smarty_tpl);?>
 Group monitor structure<?php $_smarty_tpl->_assignInScope('hasPageAction', "1");?></a><?php }
}
if ($_smarty_tpl->tpl_vars['prefs']->value['feature_webdav'] == 'y') {?><a class="dropdown-item" href="javascript:open_webdav('<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( smarty_modifier_virtual_path($_smarty_tpl->tpl_vars['page']->value,'wiki page'),'javascript' )) ));?>
')" class="icon"><?php echo smarty_function_icon(array('name'=>"file-archive-open"),$_smarty_tpl);?>
 Open in WebDAV<?php $_smarty_tpl->_assignInScope('hasPageAction', "1");?></a><?php }
if ($_smarty_tpl->tpl_vars['user']->value && $_smarty_tpl->tpl_vars['prefs']->value['user_favorites'] == 'y') {
echo smarty_function_favorite(array('type'=>"wiki page",'object'=>$_smarty_tpl->tpl_vars['page']->value,'button_classes'=>"dropdown-item icon"),$_smarty_tpl);
$_smarty_tpl->_assignInScope('hasPageAction', "1");
}?></div><?php if (!$_smarty_tpl->tpl_vars['js']->value) {?></li></ul><?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if ($_smarty_tpl->tpl_vars['hasPageAction']->value == '1') {?><div class="btn-group page_actions" role="group"><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'pageActions');?>
</div><?php }?></div></div>
    </div>
<?php }
}
}
