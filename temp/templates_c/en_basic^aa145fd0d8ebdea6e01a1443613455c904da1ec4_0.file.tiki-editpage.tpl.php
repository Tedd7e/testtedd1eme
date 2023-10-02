<?php
/* Smarty version 3.1.48, created on 2023-09-29 11:17:04
  from '/home/teddieme/tedd1eme/templates/tiki-editpage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6516a420642204_63128659',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aa145fd0d8ebdea6e01a1443613455c904da1ec4' => 
    array (
      0 => '/home/teddieme/tedd1eme/templates/tiki-editpage.tpl',
      1 => 1689085248,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:tiki-edit-page-included_by.tpl' => 1,
    'file:tiki-preview.tpl' => 1,
    'file:pagehistory.tpl' => 1,
    'file:tiki-edit-page-include-prompt_for_edit_or_translate.tpl' => 1,
    'file:wiki_edit_actions.tpl' => 2,
    'file:freetag.tpl' => 3,
    'file:contribution.tpl' => 1,
    'file:categorize.tpl' => 1,
    'file:addreference.tpl' => 1,
    'file:antibot.tpl' => 1,
    'file:tiki-page_bar.tpl' => 1,
  ),
),false)) {
function content_6516a420642204_63128659 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2602732666516a42056a115_58770581', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11012410966516a420575f89_51980546', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout_edit.tpl');
}
/* {block 'title'} */
class Block_2602732666516a42056a115_58770581 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_2602732666516a42056a115_58770581',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/modifier.sefurl.php','function'=>'smarty_modifier_sefurl',),1=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/block.tr.php','function'=>'smarty_block_tr',),2=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/block.title.php','function'=>'smarty_block_title',),));
?>

    <?php if ($_smarty_tpl->tpl_vars['translation_mode']->value == 'n') {?>
        <h1 class="pagetitle">
            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "pageDescription", null, null);?>
                <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['page']->value ));
if ($_smarty_tpl->tpl_vars['pageAlias']->value != '') {?> (<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['pageAlias']->value ));?>
)<?php }?>
            <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
            <?php if ((isset($_smarty_tpl->tpl_vars['hdr']->value)) && $_smarty_tpl->tpl_vars['prefs']->value['wiki_edit_section'] == 'y') {?>
                Edit Section: <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'pageDescription');?>

            <?php } else { ?>
                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tr', array('_0'=>(((('<a class="edit_pagetitle" href="').((smarty_modifier_sefurl($_smarty_tpl->tpl_vars['page']->value)))).('">')).($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'pageDescription'))).('</a>')));
$_block_repeat=true;
echo smarty_block_tr(array('_0'=>(((('<a class="edit_pagetitle" href="').((smarty_modifier_sefurl($_smarty_tpl->tpl_vars['page']->value)))).('">')).($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'pageDescription'))).('</a>')), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Edit %0<?php $_block_repeat=false;
echo smarty_block_tr(array('_0'=>(((('<a class="edit_pagetitle" href="').((smarty_modifier_sefurl($_smarty_tpl->tpl_vars['page']->value)))).('">')).($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'pageDescription'))).('</a>')), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            <?php }?>
        </h1>
    <?php } else { ?>
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('title', array());
$_block_repeat=true;
echo smarty_block_title(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tr', array());
$_block_repeat=true;
echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Update '<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
'<?php $_block_repeat=false;
echo smarty_block_tr(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_repeat=false;
echo smarty_block_title(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    <?php }
}
}
/* {/block 'title'} */
/* {block 'content'} */
class Block_11012410966516a420575f89_51980546 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_11012410966516a420575f89_51980546',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/block.remarksbox.php','function'=>'smarty_block_remarksbox',),1=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/block.tr.php','function'=>'smarty_block_tr',),2=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/block.self_link.php','function'=>'smarty_block_self_link',),3=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/block.jq.php','function'=>'smarty_block_jq',),4=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/modifier.tiki_long_time.php','function'=>'smarty_modifier_tiki_long_time',),5=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/modifier.sefurl.php','function'=>'smarty_modifier_sefurl',),6=>array('file'=>'/home/teddieme/tedd1eme/vendor_bundled/vendor/smarty/smarty/libs/plugins/function.cycle.php','function'=>'smarty_function_cycle',),7=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/function.icon.php','function'=>'smarty_function_icon',),8=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/function.button.php','function'=>'smarty_function_button',),9=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/block.tabset.php','function'=>'smarty_block_tabset',),10=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/block.tab.php','function'=>'smarty_block_tab',),11=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/block.textarea.php','function'=>'smarty_block_textarea',),12=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/function.help.php','function'=>'smarty_function_help',),13=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/function.permission_link.php','function'=>'smarty_function_permission_link',),14=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/function.defaultmapcenter.php','function'=>'smarty_function_defaultmapcenter',),15=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/function.object_selector_multi.php','function'=>'smarty_function_object_selector_multi',),));
?>

    <?php if (mb_strtolower($_smarty_tpl->tpl_vars['page']->value, 'UTF-8') != 'sandbox' && $_smarty_tpl->tpl_vars['prefs']->value['feature_contribution'] == 'y' && $_smarty_tpl->tpl_vars['prefs']->value['feature_contribution_mandatory'] == 'y') {?>
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>'tip','title'=>"Tip"));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>'tip','title'=>"Tip"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <strong class='mandatory_note'>Fields marked with an * are mandatory.</strong>
        <?php $_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>'tip','title'=>"Tip"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    <?php }?>
    <?php if ((isset($_smarty_tpl->tpl_vars['customTip']->value))) {?>
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>'tip','title'=>$_smarty_tpl->tpl_vars['customTipTitle']->value));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>'tip','title'=>$_smarty_tpl->tpl_vars['customTipTitle']->value), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tr', array());
$_block_repeat=true;
echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['customTip']->value ));
$_block_repeat=false;
echo smarty_block_tr(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <?php $_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>'tip','title'=>$_smarty_tpl->tpl_vars['customTipTitle']->value), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    <?php }?>
    <?php if ((isset($_smarty_tpl->tpl_vars['wikiHeaderTpl']->value))) {?>
        <?php echo $_smarty_tpl->tpl_vars['wikiHeaderTpl']->value;?>

    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['prefs']->value['ajax_autosave'] == "y") {?>
        <div class="float-right">
            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('self_link', array('_icon_name'=>"view",'_class'=>"previewBtn tips",'_ajax'=>"n",'_title'=>":Preview your changes"));
$_block_repeat=true;
echo smarty_block_self_link(array('_icon_name'=>"view",'_class'=>"previewBtn tips",'_ajax'=>"n",'_title'=>":Preview your changes"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <?php $_block_repeat=false;
echo smarty_block_self_link(array('_icon_name'=>"view",'_class'=>"previewBtn tips",'_ajax'=>"n",'_title'=>":Preview your changes"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        </div>
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('jq', array());
$_block_repeat=true;
echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?> $(".previewBtn").click(function(){
            auto_save('editwiki', autoSaveId);
            if ($('#autosave_preview:visible').length === 0) {
                if (!ajaxPreviewWindow) {
                    setCookie("preview_diff_style", "", "preview", "session");
                    $("#preview_diff_style").val("").trigger("change.select2");
                    $('#autosave_preview').slideDown('slow', function(){ ajax_preview( 'editwiki', autoSaveId, true );});
                }
            } else {
                ajax_preview( 'editwiki', autoSaveId, true );
            }
            return false;
        });<?php $_block_repeat=false;
echo smarty_block_jq(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    <?php }?>
    <?php if ((isset($_smarty_tpl->tpl_vars['data']->value['draft']))) {?>
        Draft written on <?php echo smarty_modifier_tiki_long_time($_smarty_tpl->tpl_vars['data']->value['draft']['lastModif']);?>
<br/>
        <?php if ($_smarty_tpl->tpl_vars['data']->value['draft']['lastModif'] < $_smarty_tpl->tpl_vars['data']->value['lastModif']) {?>
            <b>Warning: new versions of this page have been made after this draft</b>
        <?php }?>
    <?php }?>
    <?php if (mb_strtolower($_smarty_tpl->tpl_vars['page']->value, 'UTF-8') == 'sandbox') {?>
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>'tip','title'=>"Tip"));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>'tip','title'=>"Tip"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            The Sandbox is a page where you can practice editing, etc. and use the preview feature to check the appearance of the page. No versions are stored for this page.
        <?php $_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>'tip','title'=>"Tip"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    <?php }?>
        <?php if ((isset($_smarty_tpl->tpl_vars['included_by']->value))) {?>
                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>'Warning','title'=>"Warning"));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>'Warning','title'=>"Warning"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                        The following item(s) include this one with Plugin Include and might be affected by these changes. Renaming sections can break related item(s).
                <?php $_smarty_tpl->_subTemplateRender('file:tiki-edit-page-included_by.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                <?php $_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>'Warning','title'=>"Warning"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['category_needed']->value == 'y') {?>
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>'Warning','title'=>"Warning"));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>'Warning','title'=>"Warning"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <div class="alert alert-warning alert-dismissible"><em class=''>A category is mandatory</em></div>
        <?php $_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>'Warning','title'=>"Warning"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['contribution_needed']->value == 'y') {?>
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>'Warning','title'=>"Warning"));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>'Warning','title'=>"Warning"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <div class="alert alert-warning alert-dismissible"><em class=''>A contribution is mandatory </em></div>
        <?php $_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>'Warning','title'=>"Warning"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    <?php }?>
    <?php if ((isset($_smarty_tpl->tpl_vars['summary_needed']->value)) && $_smarty_tpl->tpl_vars['summary_needed']->value == 'y') {?>
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>'Warning','title'=>"Warning"));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>'Warning','title'=>"Warning"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <div class="alert alert-warning alert-dismissible"><em class=''>An edit summary is mandatory </em></div>
        <?php $_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>'Warning','title'=>"Warning"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['likepages']->value) {?>
        <div>
            Perhaps you are looking for:
            <?php if (count($_smarty_tpl->tpl_vars['likepages']->value) < 0) {?>
                <ul>
                    <?php
$__section_back_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['likepages']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_back_0_total = $__section_back_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_back'] = new Smarty_Variable(array());
if ($__section_back_0_total !== 0) {
for ($__section_back_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_back']->value['index'] = 0; $__section_back_0_iteration <= $__section_back_0_total; $__section_back_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_back']->value['index']++){
?>
                        <li>
                            <a href="<?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['likepages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_back']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_back']->value['index'] : null)]);?>
" class="wiki"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['likepages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_back']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_back']->value['index'] : null)] ));?>
</a>
                        </li>
                    <?php
}
}
?>
                </ul>
            <?php } else { ?>
                <div class="table-responsive">
                    <table class="table">
                        <tr>
                            <?php echo smarty_function_cycle(array('name'=>'table','values'=>',,,,</tr><tr>','print'=>false,'advance'=>false),$_smarty_tpl);?>

                            <?php
$__section_back_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['likepages']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_back_1_total = $__section_back_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_back'] = new Smarty_Variable(array());
if ($__section_back_1_total !== 0) {
for ($__section_back_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_back']->value['index'] = 0; $__section_back_1_iteration <= $__section_back_1_total; $__section_back_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_back']->value['index']++){
?>
                                <td><a href="<?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['likepages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_back']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_back']->value['index'] : null)]);?>
" class="wiki"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['likepages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_back']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_back']->value['index'] : null)] ));?>
</a></td>
                                <?php echo smarty_function_cycle(array('name'=>'table'),$_smarty_tpl);?>

                            <?php
}
}
?>
                        </tr>
                    </table>
                </div>
            <?php }?>
        </div>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['preview']->value || $_smarty_tpl->tpl_vars['prefs']->value['ajax_autosave'] == "y") {?>
        <?php $_smarty_tpl->_subTemplateRender('file:tiki-preview.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php }?>
    <?php if ((isset($_smarty_tpl->tpl_vars['diff_style']->value))) {?>
        <div id="diff_outer">
            <?php if ($_smarty_tpl->tpl_vars['translation_mode']->value == 'y') {?>
                <div class="translation_message">
                    <h2><?php echo smarty_function_icon(array('name'=>"language"),$_smarty_tpl);?>
 Translate from: <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['source_page']->value ));?>
</h2>
                    Changes that need to be translated are highlighted below.
                </div>
            <?php }?>
            <div id="diff_history">
                <?php $_smarty_tpl->_subTemplateRender('file:pagehistory.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cant'=>0), 0, false);
?>
                <?php if ($_smarty_tpl->tpl_vars['diff_summaries']->value) {?>
                    <div class="wikitext" id="diff_versions">
                        <ul>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['diff_summaries']->value, 'diff');
$_smarty_tpl->tpl_vars['diff']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['diff']->value) {
$_smarty_tpl->tpl_vars['diff']->do_else = false;
?>
                                <li>
                                    Version: <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['diff']->value['version'] ));?>
 - <?php echo (($tmp = @call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['diff']->value['comment'] )))===null||$tmp==='' ? "<em>No comment</em>" : $tmp);?>

                                    <?php if (count($_smarty_tpl->tpl_vars['diff_summaries']->value) > 1) {?>
                                        <?php $_smarty_tpl->_assignInScope('diff_version', $_smarty_tpl->tpl_vars['diff']->value['version']);?>
                                        <?php echo smarty_function_icon(array('name'=>"next",'onclick'=>"\$('input[name=oldver]').val(".((string)$_smarty_tpl->tpl_vars['diff_version']->value).");\$('#editpageform').submit();return false;",'title'=>":View",'style'=>"cursor: pointer"),$_smarty_tpl);?>

                                    <?php }?>
                                </li>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            <?php echo smarty_function_button(array('_onclick'=>"\$('input[name=oldver]').val(1);\$('#editpageform').submit();return false;",'_text'=>"All Versions",'_ajax'=>"n"),$_smarty_tpl);?>

                        </ul>
                    </div>
                <?php }?>
            </div>
        </div>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['prompt_for_edit_or_translate']->value == 'y') {?>
        <?php $_smarty_tpl->_subTemplateRender('file:tiki-edit-page-include-prompt_for_edit_or_translate.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php }?>
    <form enctype="multipart/form-data" method="post" action="tiki-editpage.php?page=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['page']->value,'url' ));?>
" class="form-horizontal" id='editpageform' name='editpageform'>
        <input type="hidden" name="no_bl" value="y">
        <?php if (!empty($_REQUEST['returnto'])) {?><input type="hidden" name="returnto" value="<?php echo $_REQUEST['returnto'];?>
"><?php }?>
        <?php if ((isset($_smarty_tpl->tpl_vars['diff_style']->value))) {?>
            <select name="diff_style" class="wikiaction"title="Edit wiki page|Select the style used to display differences to be translated.">
                <option value="htmldiff"<?php if ((isset($_smarty_tpl->tpl_vars['diff_style']->value)) && $_smarty_tpl->tpl_vars['diff_style']->value == "htmldiff") {?> selected="selected"<?php }?>>html</option>
                <option value="inlinediff"<?php if ((isset($_smarty_tpl->tpl_vars['diff_style']->value)) && $_smarty_tpl->tpl_vars['diff_style']->value == "inlinediff") {?> selected="selected"<?php }?> >text</option>
                <option value="inlinediff-full"<?php if ((isset($_smarty_tpl->tpl_vars['diff_style']->value)) && $_smarty_tpl->tpl_vars['diff_style']->value == "inlinediff-full") {?> selected="selected"<?php }?> >text full</option>
            </select>
            <input type="submit" class="wikiaction tips btn btn-primary" title="Edit wiki page|Change the style used to display differences to be translated." name="preview" value="Change diff styles" onclick="needToConfirm=false;">
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['page_ref_id']->value) {?><input type="hidden" name="page_ref_id" value="<?php echo $_smarty_tpl->tpl_vars['page_ref_id']->value;?>
"><?php }?>
        <?php if ((isset($_smarty_tpl->tpl_vars['hdr']->value))) {?><input type="hidden" name="hdr" value="<?php echo $_smarty_tpl->tpl_vars['hdr']->value;?>
"><?php }?>
        <?php if ((isset($_smarty_tpl->tpl_vars['cell']->value))) {?><input type="hidden" name="cell" value="<?php echo $_smarty_tpl->tpl_vars['cell']->value;?>
"><?php }?>
        <?php if ((isset($_smarty_tpl->tpl_vars['pos']->value))) {?><input type="hidden" name="pos" value="<?php echo $_smarty_tpl->tpl_vars['pos']->value;?>
"><?php }?>
        <?php if ($_smarty_tpl->tpl_vars['current_page_id']->value) {?><input type="hidden" name="current_page_id" value="<?php echo $_smarty_tpl->tpl_vars['current_page_id']->value;?>
"><?php }?>
        <?php if ($_smarty_tpl->tpl_vars['add_child']->value) {?><input type="hidden" name="add_child" value="true"><?php }?>
        <?php if ($_smarty_tpl->tpl_vars['preview']->value || $_smarty_tpl->tpl_vars['prefs']->value['wiki_actions_bar'] == 'top' || $_smarty_tpl->tpl_vars['prefs']->value['wiki_actions_bar'] == 'both') {?>
            <div class='top_actions'>
                <?php $_smarty_tpl->_subTemplateRender('file:wiki_edit_actions.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('wysiwyg'=>$_smarty_tpl->tpl_vars['wysiwyg']->value), 0, false);
?>
            </div>
        <?php }?>
        <div class="form-group mx-0">
            <?php if ((isset($_smarty_tpl->tpl_vars['page_badchars_display']->value))) {?>
                <?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_badchar_prevent'] == 'y') {?>
                    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>'errors','title'=>"Invalid page name"));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>'errors','title'=>"Invalid page name"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tr', array('_0'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['page_badchars_display']->value ))));
$_block_repeat=true;
echo smarty_block_tr(array('_0'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['page_badchars_display']->value ))), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>The page name specified contains unallowed characters. It will not be possible to save the page until those are removed: <strong>%0</strong><?php $_block_repeat=false;
echo smarty_block_tr(array('_0'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['page_badchars_display']->value ))), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                    <?php $_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>'errors','title'=>"Invalid page name"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <?php } else { ?>
                    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>'tip','title'=>"Tip"));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>'tip','title'=>"Tip"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tr', array('_0'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['page_badchars_display']->value ))));
$_block_repeat=true;
echo smarty_block_tr(array('_0'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['page_badchars_display']->value ))), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>The page name specified contains characters that may render the page hard to access. You may want to consider removing those: <strong>%0</strong><?php $_block_repeat=false;
echo smarty_block_tr(array('_0'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['page_badchars_display']->value ))), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                    <?php $_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>'tip','title'=>"Tip"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <?php }?>
                    <p>Page name: <input type="text" name="page" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['page']->value ));?>
">
                        <input type="submit" class="btn btn-primary btn-sm" name="rename" value="Rename">
                    </p>
            <?php } else { ?>
                <input type="hidden" name="page" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['page']->value ));?>
">
                
            <?php }?>
            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tabset', array('name'=>'tabs_editpage','cookietab'=>1));
$_block_repeat=true;
echo smarty_block_tabset(array('name'=>'tabs_editpage','cookietab'=>1), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tab', array('name'=>"Edit page"));
$_block_repeat=true;
echo smarty_block_tab(array('name'=>"Edit page"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <?php if ($_smarty_tpl->tpl_vars['translation_mode']->value == 'y') {?>
                        <div class="translation_message">
                            <h2>Translate to: <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['target_page']->value ));?>
</h2>
                            Reproduce the changes highlighted on the left using the editor below.
                        </div>
                    <?php }?>
                    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('textarea', array('codemirror'=>'true','syntax'=>'tiki'));
$_block_repeat=true;
echo smarty_block_textarea(array('codemirror'=>'true','syntax'=>'tiki'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo $_smarty_tpl->tpl_vars['pagedata']->value;
$_block_repeat=false;
echo smarty_block_textarea(array('codemirror'=>'true','syntax'=>'tiki'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                        <?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_freetags_edit_position'] == 'edit') {?>
                            <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_freetags'] == 'y' && $_smarty_tpl->tpl_vars['tiki_p_freetags_tag']->value == 'y') {?>
                                <fieldset>
                                    <legend>Tags</legend>
                                    <table>
                                        <?php $_smarty_tpl->_subTemplateRender('file:freetag.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                                    </table>
                                </fieldset>
                            <?php }?>
                    <?php }?>
                    <?php if (mb_strtolower($_smarty_tpl->tpl_vars['page']->value, 'UTF-8') != 'sandbox') {?>
                        <fieldset class="edit-zone-footer my-3">
                            <label for="comment">Describe the change you made <?php echo smarty_function_help(array('url'=>'Editing-Wiki-Pages','desc'=>"Edit comment: Enter some text to describe the changes you are currently making"),$_smarty_tpl);?>
</label>
                            <input class="form-control wikiedit" type="text" id="comment" name="comment" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['commentdata']->value ));?>
" maxlength="255">
                            <?php if ((isset($_smarty_tpl->tpl_vars['show_watch']->value)) && $_smarty_tpl->tpl_vars['show_watch']->value == 'y') {?>
                                <div class="form-check mt-2">
                                    <input class="form-check-input" type="checkbox" id="watch" name="watch" value="1"<?php if ($_smarty_tpl->tpl_vars['watch_checked']->value == 'y') {?> checked="checked"<?php }?>>
                                    <label class="form-check-label" for="watch">Monitor this page</label>
                                </div>
                            <?php }?>
                        </fieldset>
                        <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_contribution'] == 'y') {?>
                            <fieldset>
                                <legend>Contributions</legend>
                                <?php $_smarty_tpl->_subTemplateRender('file:contribution.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                            </fieldset>
                        <?php }?>
                        <?php if ((!(isset($_smarty_tpl->tpl_vars['wysiwyg']->value)) || $_smarty_tpl->tpl_vars['wysiwyg']->value != 'y') && $_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_pictures'] == 'y' && $_smarty_tpl->tpl_vars['tiki_p_upload_picture']->value == 'y' && $_smarty_tpl->tpl_vars['prefs']->value['feature_filegals_manager'] != 'y') {?>
                            <fieldset>
                                <legend>Upload picture</legend>
                                <input type="hidden" name="MAX_FILE_SIZE" value="1000000000">
                                <input type="hidden" name="hasAlreadyInserted" value="">
                                <input type="hidden" name="prefix" value="/img/wiki_up/<?php if ($_smarty_tpl->tpl_vars['tikidomain']->value) {
echo $_smarty_tpl->tpl_vars['tikidomain']->value;?>
/<?php }?>">
                                <input name="picfile1" type="file" class="form-control" onchange="javascript:insertImgFile('editwiki','picfile1','hasAlreadyInserted','img')">
                                <div id="new_img_form"></div>
                                <a href="javascript:addImgForm()" onclick="needToConfirm = false;">Add another image</a>
                            </fieldset>
                        <?php }?>
                    <?php }?>
                <?php $_block_repeat=false;
echo smarty_block_tab(array('name'=>"Edit page"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_categories'] == 'y' && $_smarty_tpl->tpl_vars['tiki_p_modify_object_categories']->value == 'y' && count($_smarty_tpl->tpl_vars['categories']->value) > 0) {?>
                    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tab', array('name'=>"Categories"));
$_block_repeat=true;
echo smarty_block_tab(array('name'=>"Categories"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                        <?php if ($_smarty_tpl->tpl_vars['categIds']->value) {?>
                            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>"note",'title'=>"Note:"));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>"note",'title'=>"Note:"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                <strong>Categorization has been preset for this edit</strong>
                            <?php $_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>"note",'title'=>"Note:"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                            <?php
$__section_o_2_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['categIds']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_o_2_total = $__section_o_2_loop;
$_smarty_tpl->tpl_vars['__smarty_section_o'] = new Smarty_Variable(array());
if ($__section_o_2_total !== 0) {
for ($__section_o_2_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_o']->value['index'] = 0; $__section_o_2_iteration <= $__section_o_2_total; $__section_o_2_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_o']->value['index']++){
?>
                                <input type="hidden" name="cat_categories[]" value="<?php echo $_smarty_tpl->tpl_vars['categIds']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_o']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_o']->value['index'] : null)];?>
">
                            <?php
}
}
?>
                            <input type="hidden" name="cat_categorize" value="on">
                            <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_categorize_structure'] == 'y') {?>
                                Categories will be inherited from the structure top page
                            <?php }?>
                        <?php } else { ?>
                            <?php if (mb_strtolower($_smarty_tpl->tpl_vars['page']->value, 'UTF-8') != 'sandbox') {?>
                                <?php $_smarty_tpl->_subTemplateRender('file:categorize.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('notable'=>'y'), 0, false);
?>
                            <?php }?>
                        <?php }?>
                    <?php $_block_repeat=false;
echo smarty_block_tab(array('name'=>"Categories"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_freetags_edit_position'] == 'freetagstab') {?>
                    <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_freetags'] == 'y' && $_smarty_tpl->tpl_vars['tiki_p_freetags_tag']->value == 'y') {?>
                        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tab', array('name'=>"Tags"));
$_block_repeat=true;
echo smarty_block_tab(array('name'=>"Tags"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                            <?php $_smarty_tpl->_subTemplateRender('file:freetag.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                        <?php $_block_repeat=false;
echo smarty_block_tab(array('name'=>"Tags"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                    <?php }?>
                <?php }?>
                <?php if (!empty($_smarty_tpl->tpl_vars['showPropertiesTab']->value)) {?>
                    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tab', array('name'=>"Properties"));
$_block_repeat=true;
echo smarty_block_tab(array('name'=>"Properties"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                        <div class="t_navbar mb-4 clearfix">
                            <?php if ($_smarty_tpl->tpl_vars['tiki_p_admin_wiki']->value == "y") {?>
                                <a href="tiki-admin.php?page=wiki" class="btn btn-link" title="Leave page and go to....">
                                    <?php echo smarty_function_icon(array('name'=>"cog"),$_smarty_tpl);?>
 Wiki Preferences
                                </a>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['tiki_p_admin_wiki']->value == 'y' || $_smarty_tpl->tpl_vars['tiki_p_assign_perm_wiki_page']->value == 'y') {?>
                                <?php echo smarty_function_permission_link(array('mode'=>'link','type'=>"wiki page",'id'=>$_smarty_tpl->tpl_vars['page']->value,'permType'=>'wiki','title'=>$_smarty_tpl->tpl_vars['page']->value),$_smarty_tpl);?>

                            <?php }?>
                            <?php if ((isset($_smarty_tpl->tpl_vars['tiki_p_edit_content_templates']->value)) && 'tiki_p_edit_content_templates' == 'y') {?>
                                <a href="tiki-admin_content_templates.php" class="btn btn-link"  title="Leave page and go to...." onclick="needToConfirm = true;">
                                    <?php echo smarty_function_icon(array('name'=>"content-template"),$_smarty_tpl);?>
 Content Templates
                                </a>
                            <?php }?>
                            <?php if ((isset($_smarty_tpl->tpl_vars['tiki_p_edit_structures']->value)) && $_smarty_tpl->tpl_vars['tiki_p_edit_structures']->value == 'y') {?>
                                <a href="tiki-admin_structures.php" class="btn btn-link" title="Leave page and go to....">
                                    <?php echo smarty_function_icon(array('name'=>"structure"),$_smarty_tpl);?>
 Structures
                                </a>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_copyright'] == 'y' && $_smarty_tpl->tpl_vars['prefs']->value['wiki_feature_copyrights'] == 'y') {?>
                                <?php if (!empty($_smarty_tpl->tpl_vars['copyrights']->value)) {?>
                                    <a href="copyrights.php?page=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['page']->value ));?>
" class="btn btn-link" title="Leave page and go to...."><?php echo smarty_function_icon(array('name'=>"copyright"),$_smarty_tpl);?>
 Copyright notices</a>
                                <?php }?>
                                <a href="<?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['prefs']->value['wikiLicensePage']);?>
" class="btn btn-link" title="Leave page and go to...."><?php echo smarty_function_icon(array('name'=>"wiki"),$_smarty_tpl);?>
 Copyright page</a>
                            <?php }?>
                        </div>
                        <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_templates'] == 'y' && $_smarty_tpl->tpl_vars['tiki_p_use_content_templates']->value == 'y') {?>
                            <div class="form-group row">
                                <label for="templateId" class="col-md-4 col-form-label">Apply content template</label>
                                <div class="col-md-8">
                                    <select class="form-control" id="templateId" name="templateId" onchange="needToConfirm=false;$('#editpageform').submit();">
                                        <option value="0">none</option>
                                            <?php
$__section_ix_3_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['templates']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_ix_3_total = $__section_ix_3_loop;
$_smarty_tpl->tpl_vars['__smarty_section_ix'] = new Smarty_Variable(array());
if ($__section_ix_3_total !== 0) {
for ($__section_ix_3_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] = 0; $__section_ix_3_iteration <= $__section_ix_3_total; $__section_ix_3_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']++){
?>
                                                <option value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['templates']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['templateId'] ));?>
" <?php if ($_smarty_tpl->tpl_vars['templateId']->value == $_smarty_tpl->tpl_vars['templates']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['templateId']) {?>selected="selected"<?php }?>><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tr', array());
$_block_repeat=true;
echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['templates']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['name'] ));
$_block_repeat=false;
echo smarty_block_tr(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></option>
                                            <?php
}
}
?>
                                    </select>
                                </div>
                            </div>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_usrlock'] == 'y' && ($_smarty_tpl->tpl_vars['tiki_p_lock']->value == 'y' || $_smarty_tpl->tpl_vars['tiki_p_admin_wiki']->value == 'y')) {?>
                            <div class="form-group row">
                                <label for="lock_it" class="col-md-4 col-form-label">Lock this page</label>
                                <div class="col-md-8">
                                    <input type="checkbox" id="lock_it" name="lock_it" <?php if ($_smarty_tpl->tpl_vars['lock_it']->value == 'y') {?>checked="checked"<?php }?>>
                                </div>
                            </div>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_comments_allow_per_page'] != 'n') {?>
                            <div class="form-group row">
                                <label for="comments_enabled" class="col-md-4 col-form-label">Allow comments on this page</label>
                                <div class="col-md-8">
                                    <input type="checkbox" id="comments_enabled" name="comments_enabled" <?php if ($_smarty_tpl->tpl_vars['comments_enabled']->value == 'y') {?>checked="checked"<?php }?>>
                                </div>
                            </div>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_allowhtml'] == 'y' && $_smarty_tpl->tpl_vars['tiki_p_use_HTML']->value == 'y' && ($_smarty_tpl->tpl_vars['wysiwyg']->value != 'y' || $_smarty_tpl->tpl_vars['prefs']->value['wysiwyg_htmltowiki'] == 'y')) {?>
                            <div class="form-group row">
                                <label class="col-md-4 col-form-label" for="allowhtml">Allow HTML</label>
                                <div class="col-md-8">
                                    <input type="checkbox" name="allowhtml" <?php if ($_smarty_tpl->tpl_vars['allowhtml']->value == 'y') {?>checked="checked"<?php }?>>
                                    <span class="form-text">
                                        HTML tags are used to create elements of the wiki page, instead of being displayed as code.
                                    </span>
                                </div>
                            </div>
                            <?php if ($_smarty_tpl->tpl_vars['prefs']->value['ajax_autosave'] == "y") {?>
                                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('jq', array());
$_block_repeat=true;
echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    $("input[name=allowhtml]").change(function() {
    auto_save( "editwiki", autoSaveId );
    });
                                <?php $_block_repeat=false;
echo smarty_block_jq(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                            <?php }?>
                        <?php } else { ?>
                            <input type="hidden" name="allowhtml" value="<?php if ($_smarty_tpl->tpl_vars['allowhtml']->value == 'y') {?>on<?php }?>">
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_import_html'] == 'y') {?>
                            <div class="form-group row">
                                <label for="suck_url" class="col-md-4 col-form-label">Import HTML</label>
                                <div class="col-md-8 form-inline">
                                    <input class="form-control wikiedit mr-2" type="text" id="suck_url" name="suck_url" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['suck_url']->value ));?>
">
                                    <input type="submit" class="wikiaction btn btn-primary mr-2" name="do_suck" value="Import" onclick="needToConfirm=false;">
                                    <label><input type="checkbox" name="parsehtml" <?php if ($_smarty_tpl->tpl_vars['parsehtml']->value == 'y') {?>checked="checked"<?php }?>>&nbsp;
                                    Try to convert HTML to wiki</label>
                                </div>
                            </div>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_import_page'] == 'y') {?>
                            <div class="form-group row clearfix">
                                <label for="userfile1" class="col-md-4 col-form-label">Import page</label>
                                <div class="col-md-8 form-inline">
                                    <input type="hidden" name="MAX_FILE_SIZE" value="1000000000">
                                    <input class="form-control mr-2" id="userfile1" name="userfile1" type="file">
                                    <input type="submit" class="wikiaction btn btn-primary" name="attach" value="Import" onclick="javascript:needToConfirm=false;insertImgFile('editwiki','userfile2','hasAlreadyInserted2','file', 'page2', 'attach_comment'); return true;">
                                </div>
                            </div>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_export'] == 'y' && $_smarty_tpl->tpl_vars['tiki_p_export_wiki']->value == 'y') {?>
                            <div class="form-group row">
                                <label for="" class="col-md-4 col-form-label">Export page</label>
                                <div class="col-md-8">
                                    <a href="tiki-export_wiki_pages.php?page=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['page']->value,"url" ));?>
&amp;all=1" class="btn btn-primary"><?php echo smarty_function_icon(array('name'=>"export"),$_smarty_tpl);?>
 Export all versions</a>
                                </div>
                            </div>
                        <?php }?>
                        <?php if (!(isset($_smarty_tpl->tpl_vars['wysiwyg']->value)) || $_smarty_tpl->tpl_vars['wysiwyg']->value != 'y') {?>
                            <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_attachments'] == 'y' && ($_smarty_tpl->tpl_vars['tiki_p_wiki_attach_files']->value == 'y' || $_smarty_tpl->tpl_vars['tiki_p_wiki_admin_attachments']->value == 'y')) {?>
                                <input type="hidden" name="MAX_FILE_SIZE" value="1000000000">
                                <input type="hidden" name="hasAlreadyInserted2" value="">
                                <input type="hidden" id="page2" name="page2" value="<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
">
                                <div class="form-group row align-items-left">
                                    <label for="attach-upload" class="col-sm-4 col-form-label">Attach file</label>
                                    <div class="col-sm-8 mb-2">
                                        <input name="userfile2" type="file" id="attach-upload" class="form-control">
                                    </div>
                                    <div class="col-sm-8 offset-sm-4 form-inline">
                                        <input type="text" name="attach_comment" class="col-sm-10 form-control mr-2" maxlength="250" id="attach-comment" placeholder="Comment">
                                        <input type="submit" class="wikiaction btn btn-primary" name="attach" value="Attach" onclick="javascript:needToConfirm=false;insertImgFile('editwiki','userfile2','hasAlreadyInserted2','file', 'page2', 'attach_comment'); return true;">
                                    </div>
                                </div>
                            <?php }?>
                        <?php }?>
                        
                        <?php if (mb_strtolower($_smarty_tpl->tpl_vars['page']->value, 'UTF-8') != 'sandbox') {?>
                            <?php if ($_smarty_tpl->tpl_vars['prefs']->value['wikiplugin_addreference'] == 'y' && $_smarty_tpl->tpl_vars['showBiblioSection']->value) {?>
                                <div class="form-group row">
                                    <label for="" class="col-md-4 col-form-label">Bibliography</label>
                                    <div class="col-md-8">
                                        <?php $_smarty_tpl->_subTemplateRender('file:addreference.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                                    </div>
                                </div>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_freetags_edit_position'] == 'properties' || $_smarty_tpl->tpl_vars['prefs']->value['wiki_freetags_edit_position'] == '') {?>
                                <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_freetags'] == 'y' && $_smarty_tpl->tpl_vars['tiki_p_freetags_tag']->value == 'y') {?>
                                    <?php $_smarty_tpl->_subTemplateRender('file:freetag.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                                <?php }?>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_icache'] == 'y') {?>
                                <div class="form-group row">
                                    <label for="wiki_cache" class="col-form-label col-md-4">Cache</label>
                                    <div class="col-md-8">
                                        <select id="wiki_cache" name="wiki_cache" class="form-control">
                                            <option value="0" <?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_cache'] == 0) {?>selected="selected"<?php }?>>0 (no cache)</option>
                                            <option value="60" <?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_cache'] == 60) {?>selected="selected"<?php }?>>1 minute</option>
                                            <option value="300" <?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_cache'] == 300) {?>selected="selected"<?php }?>>5 minutes</option>
                                            <option value="600" <?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_cache'] == 600) {?>selected="selected"<?php }?>>10 minute</option>
                                            <option value="900" <?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_cache'] == 900) {?>selected="selected"<?php }?>>15 minutes</option>
                                            <option value="1800" <?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_cache'] == 1800) {?>selected="selected"<?php }?>>30 minute</option>
                                            <option value="3600" <?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_cache'] == 3600) {?>selected="selected"<?php }?>>1 hour</option>
                                            <option value="7200" <?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_cache'] == 7200) {?>selected="selected"<?php }?>>2 hours</option>
                                        </select>
                                        <?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_cache'] == 0) {?>
                                            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>"warning",'title'=>"Warning",'close'=>"n"));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Warning",'close'=>"n"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Only cache a page if it should look the same to all groups authorized to see it.<?php $_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Warning",'close'=>"n"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                        <?php }?>
                                    </div>
                                </div>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_structure'] == 'y' && count($_smarty_tpl->tpl_vars['showstructs']->value) > 0) {?>
                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label">Structures</label>
                                    <div class="col-md-8" id="showstructs">
                                        <ul>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['showstructs']->value, 'page_info');
$_smarty_tpl->tpl_vars['page_info']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['page_info']->value) {
$_smarty_tpl->tpl_vars['page_info']->do_else = false;
?>
                                                <li><?php echo $_smarty_tpl->tpl_vars['page_info']->value['pageName'];
if (!empty($_smarty_tpl->tpl_vars[''.($_smarty_tpl->tpl_vars['page_info']->value['outputType'])]->value['page_alias'])) {?>(<?php echo $_smarty_tpl->tpl_vars['page_info']->value['page_alias'];?>
)<?php }?></li>
                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        </ul>
                                    </div>
                                </div>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_copyright'] == 'y' && $_smarty_tpl->tpl_vars['prefs']->value['wiki_feature_copyrights'] == 'y') {?>
                                <div class="form-group row clearfix">
                                    <label for="" class="col-md-4 col-form-label">Copyright</label>
                                    <div class="col-md-8">
                                        <div class="form-group row">
                                            <label class="col-md-4 col-form-label" for="copyrightTitle">Title</label>
                                            <div class="col-md-8">
                                                <input class="form-control wikiedit" type="text" id="copyrightTitle" name="copyrightTitle" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['copyrightTitle']->value ));?>
">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-4 col-form-label" for="copyrightYear">Year</label>
                                            <div class="col-md-8">
                                                <input size="4" class="form-control wikiedit" type="text" id="copyrightYear" name="copyrightYear" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['copyrightYear']->value ));?>
">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-4 col-form-label" for="copyrightAuthors">Authors</label>
                                            <div class="col-md-8">
                                                <input class="form-control wikiedit" id="copyrightAuthors" name="copyrightAuthors" type="text" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['copyrightAuthors']->value ));?>
">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-4 col-form-label" for="copyrightHolder">Copyright Holder</label>
                                            <div class="col-md-8">
                                                <input class="form-control wikiedit" id="copyrightHolder" name="copyrightHolder" type="text" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['copyrightHolder']->value ));?>
">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <?php if ($_smarty_tpl->tpl_vars['prefs']->value['wikiSubmitNotice'] != '') {?>
                                                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>"note",'title'=>"Important:"));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>"note",'title'=>"Important:"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tr', array());
$_block_repeat=true;
echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo $_smarty_tpl->tpl_vars['prefs']->value['wikiSubmitNotice'];
$_block_repeat=false;
echo smarty_block_tr(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                                <?php $_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>"note",'title'=>"Important:"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                            <?php }?>
                                        </div>
                                    </div>
                                </div>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['tiki_p_admin_wiki']->value == 'y' && $_smarty_tpl->tpl_vars['prefs']->value['wiki_authors_style_by_page'] == 'y') {?>
                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label">Authors</label>
                                    <div class="col-md-8">
                                        <select name="wiki_authors_style" id="wiki_authors_style" class="form-control">
                                            <option value="" style="font-style:italic;border-bottom:1px dashed #666;"<?php if ($_smarty_tpl->tpl_vars['wiki_authors_style']->value == '') {?> selected="selected"<?php }?>>Site default</option>
                                            <option value="classic"<?php if ($_smarty_tpl->tpl_vars['wiki_authors_style']->value == 'classic') {?> selected="selected"<?php }?>>as Creator &amp; Last Editor</option>
                                            <option value="business"<?php if ($_smarty_tpl->tpl_vars['wiki_authors_style']->value == 'business') {?> selected="selected"<?php }?>>Business style</option>
                                            <option value="collaborative"<?php if ($_smarty_tpl->tpl_vars['wiki_authors_style']->value == 'collaborative') {?> selected="selected"<?php }?>>Collaborative style</option>
                                            <option value="lastmodif"<?php if ($_smarty_tpl->tpl_vars['wiki_authors_style']->value == 'lastmodif') {?> selected="selected"<?php }?>>Page last modified on</option>
                                            <option value="none"<?php if ($_smarty_tpl->tpl_vars['wiki_authors_style']->value == 'none') {?> selected="selected"<?php }?>>no (disabled)</option>
                                        </select>
                                    </div>
                                </div>
                            <?php }?>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_description'] == 'y' || $_smarty_tpl->tpl_vars['prefs']->value['metatag_pagedesc'] == 'y') {?>
                            <div class="form-group row">
                                <?php if ($_smarty_tpl->tpl_vars['prefs']->value['metatag_pagedesc'] == 'y') {?>
                                    <label for="" class="col-md-4 col-form-label">Description (used for metatags)</label>
                                <?php } else { ?>
                                    <label for="" class="col-md-4 col-form-label">Description</label>
                                <?php }?>
                                <div class="col-md-8">
                                    <input class="form-control" type="text" id="description" name="description" maxlength="200" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['description']->value ));?>
">
                                    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('jq', array());
$_block_repeat=true;
echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                        $("#description").keyup(function () {
                                            var length = $(this).val().length;
                                            if(length == 200) {
                                                alert("You have reached the number of characters allowed (200 max) for the description field");
                                            }
                                        });
                                    <?php $_block_repeat=false;
echo smarty_block_jq(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                </div>
                            </div>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_footnotes'] == 'y') {?>
                            <?php if ($_smarty_tpl->tpl_vars['user']->value) {?>
                                <div class="form-group row">
                                    <label for="footnote" class="col-md-4 col-form-label">My Footnotes</label>
                                    <div class="col-md-8">
                                        <textarea id="footnote" name="footnote" class="form-control" rows="8"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['footnote']->value ));?>
</textarea>
                                    </div>
                                </div>
                            <?php }?>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_ratings'] == 'y' && $_smarty_tpl->tpl_vars['tiki_p_wiki_admin_ratings']->value == 'y') {?>
                            <div class="form-group row">
                                <label for="" class="col-md-4 col-form-label">Rating</label>
                                <div class="col-md-8">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['poll_rated']->value, 'rating');
$_smarty_tpl->tpl_vars['rating']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['rating']->value) {
$_smarty_tpl->tpl_vars['rating']->do_else = false;
?>
                                        <div>
                                            <a href="tiki-admin_poll_options.php?pollId=<?php echo $_smarty_tpl->tpl_vars['rating']->value['info']['pollId'];?>
"><?php echo $_smarty_tpl->tpl_vars['rating']->value['info']['title'];?>
</a>
                                            <?php $_smarty_tpl->_assignInScope('thispage', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['page']->value,"url" )));?>
                                            <?php $_smarty_tpl->_assignInScope('thispoll_rated', $_smarty_tpl->tpl_vars['rating']->value['info']['pollId']);?>
                                            <?php echo smarty_function_button(array('href'=>"?page=".((string)$_smarty_tpl->tpl_vars['thispage']->value)."&amp;removepoll=".((string)$_smarty_tpl->tpl_vars['thispoll_rated']->value),'_text'=>"Disable"),$_smarty_tpl);?>

                                        </div>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    <?php if ($_smarty_tpl->tpl_vars['tiki_p_admin_poll']->value == 'y') {?>
                                        <?php echo smarty_function_button(array('href'=>"tiki-admin_polls.php",'_text'=>"Admin Polls"),$_smarty_tpl);?>

                                    <?php }?>
                                    <?php if (count($_smarty_tpl->tpl_vars['poll_rated']->value) <= 1 || $_smarty_tpl->tpl_vars['prefs']->value['poll_multiple_per_object'] == 'y') {?>
                                        <div class="form-group row mb-0">
                                            <?php if (count($_smarty_tpl->tpl_vars['polls_templates']->value)) {?>
                                                <label class="col-sm-2 col-form-label">Type</label>
                                                <div class="col-sm-10 mb-2">
                                                    <select name="poll_template" class="form-control">
                                                        <option value="0">none</option>
                                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['polls_templates']->value, 'template');
$_smarty_tpl->tpl_vars['template']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['template']->value) {
$_smarty_tpl->tpl_vars['template']->do_else = false;
?>
                                                            <option value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['template']->value['pollId'] ));?>
"<?php if ($_smarty_tpl->tpl_vars['template']->value['pollId'] == $_smarty_tpl->tpl_vars['poll_template']->value) {?> selected="selected"<?php }?>><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tr', array());
$_block_repeat=true;
echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['template']->value['title'] ));
$_block_repeat=false;
echo smarty_block_tr(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></option>
                                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                    </select>
                                                </div>
                                                <label class="col-sm-2 col-form-label">Title</label>
                                                <div class="col-sm-10 mb-2">
                                                    <input type="text" name="poll_title" class="form-control">
                                                </div>
                                            <?php } else { ?>
                                                <div class="col-sm-12">
                                                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>"info",'title'=>"Information",'close'=>"n"));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>"info",'title'=>"Information",'close'=>"n"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                    There is no available poll template.
                                                    <?php if ($_smarty_tpl->tpl_vars['tiki_p_admin_polls']->value != 'y') {?>
                                                        Please ask an administrator to create one.
                                                    <?php }?>
                                                <?php $_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>"info",'title'=>"Information",'close'=>"n"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                                </div>
                                            <?php }?>
                                        </div>
                                    <?php }?>
                                </div>
                            </div>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_multilingual'] == 'y') {?>
                            <fieldset>
                                <div class="form-group row clearfix">
                                    <label for="" class="col-md-4 col-form-label">Language</label>
                                    <div class="col-md-8">
                                        <select name="lang" id="lang" class="form-control mb-3">
                                            <option value=""<?php if (empty($_smarty_tpl->tpl_vars['lang']->value)) {?> selected="selected"<?php }?>>Unknown</option>
                                            <?php
$__section_ix_4_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['languages']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_ix_4_total = $__section_ix_4_loop;
$_smarty_tpl->tpl_vars['__smarty_section_ix'] = new Smarty_Variable(array());
if ($__section_ix_4_total !== 0) {
for ($__section_ix_4_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] = 0; $__section_ix_4_iteration <= $__section_ix_4_total; $__section_ix_4_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']++){
?>
                                                <option value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['languages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['value'] ));?>
"<?php if ($_smarty_tpl->tpl_vars['lang']->value == $_smarty_tpl->tpl_vars['languages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['value']) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['languages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['name'];?>
</option>
                                            <?php
}
}
?>
                                        </select>
                                        <span class="form-text">
                                            <?php ob_start();
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['page']->value,'url' ));
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tr', array('_0'=>"tiki-edit_translation.php?no_bl=y&amp;page=".$_prefixVariable1));
$_block_repeat=true;
echo smarty_block_tr(array('_0'=>"tiki-edit_translation.php?no_bl=y&amp;page=".$_prefixVariable1), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>To translate, do not change the language and the content. Instead, <a class="alert-link" href="%0">create a new translation</a> in the new language.<?php $_block_repeat=false;
echo smarty_block_tr(array('_0'=>"tiki-edit_translation.php?no_bl=y&amp;page=".$_prefixVariable1), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                            <?php if ($_smarty_tpl->tpl_vars['translationOf']->value) {?>
                                                <input type="hidden" name="translationOf" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['translationOf']->value ));?>
">
                                            <?php }?>
                                        </span>
                                    </div>
                                </div>
                            </fieldset>
                            <?php if (count($_smarty_tpl->tpl_vars['trads']->value) > 1 && $_smarty_tpl->tpl_vars['urgent_allowed']->value) {?>
                                <div class="form-group row">
                                    <label for="" class="col-md-4 col-form-label">Translation</label>
                                    <div class="col-md-8">
                                        <fieldset <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_urgent_translation'] != 'y' || $_smarty_tpl->tpl_vars['diff_style']->value) {?> style="display:none;"<?php }?>>
                                            <legend>Translation request:</legend>
                                            <input type="hidden" name="lang" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['lang']->value ));?>
">
                                            <input type="checkbox" id="translation_critical" name="translation_critical" id="translation_critical"<?php if ($_smarty_tpl->tpl_vars['translation_critical']->value) {?> checked="checked"<?php }?>>
                                            <label for="translation_critical">Send urgent translation request.</label>
                                            <?php if ($_smarty_tpl->tpl_vars['diff_style']->value) {?>
                                                <input type="hidden" name="oldver" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['diff_oldver']->value ));?>
">
                                                <input type="hidden" name="newver" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['diff_newver']->value ));?>
">
                                            <?php }?>
                                        </fieldset>
                                    </div>
                                </div>
                            <?php }?>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['prefs']->value['geo_locate_wiki'] == 'y') {?>
                            <?php echo $_smarty_tpl->tpl_vars['headerlib']->value->add_map();?>

                            <div class="form-group row">
                                <label for="" class="col-md-4 col-form-label">Geolocation</label>
                                <div class="col-md-8">
                                    <div class="map-container form-control" data-geo-center="<?php echo smarty_function_defaultmapcenter(array(),$_smarty_tpl);?>
" data-target-field="geolocation" style="height: 250px;"></div>
                                    <input type="hidden" name="geolocation" value="<?php echo $_smarty_tpl->tpl_vars['geolocation_string']->value;?>
">
                                </div>
                            </div>
                        <?php }?>
                        
                        <?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_auto_toc'] == 'y' && $_smarty_tpl->tpl_vars['prefs']->value['wiki_page_hide_title'] == 'y') {?>
                            <div class="form-group row clearfix">
                                <label for="pageAutoToc" class="col-md-4 col-form-label">Automatic table of contents</label>
                                <div class="col-md-8">
                                    <select name="pageAutoToc" class="form-control">
                                        <option value="0" <?php if ($_smarty_tpl->tpl_vars['pageAutoToc']->value == 0) {?>selected<?php }?>>Default (<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_toc_default'] == 'off') {?>Off<?php } else { ?>On<?php }?>)</option>
                                        <option value="1" <?php if ($_smarty_tpl->tpl_vars['pageAutoToc']->value == 1) {?>selected<?php }?>>On</option>
                                        <option value="-1" <?php if ($_smarty_tpl->tpl_vars['pageAutoToc']->value == -1) {?>selected<?php }?>>Off</option>
                                    </select>
                                </div>
                            </div>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_page_hide_title'] == 'y' && ($_smarty_tpl->tpl_vars['prefs']->value['wiki_page_name_above'] == 'y' || $_smarty_tpl->tpl_vars['prefs']->value['feature_page_title'] == 'y' || $_smarty_tpl->tpl_vars['prefs']->value['wiki_page_name_inside'] == 'y')) {?>
                            <div class="form-group row clearfix">
                                <label for="page_hide_title" class="col-md-4 col-form-label">Show page title</label>
                                <div class="col-md-8">
                                    <select name="page_hide_title" class="form-control">
                                        <option value="0" <?php if ($_smarty_tpl->tpl_vars['page_hide_title']->value == 0) {?>selected<?php }?>>Default</option>
                                        
                                        <option value="-1" <?php if ($_smarty_tpl->tpl_vars['page_hide_title']->value == -1) {?>selected<?php }?>>Off</option>
                                    </select>
                                </div>
                            </div>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['prefs']->value['namespace_enabled'] == 'y') {?>
                            <div class="form-group row clearfix">
                                <label for="explicit_namespace" class="col-md-4 col-form-label">Namespace</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="explicit_namespace" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['explicit_namespace']->value ));?>
" placeholder="Explicit Namespace">
                                    <span class="form-text">
                                        The namespace for a page is guessed automatically from the page name. However, some exceptions may arise. This option allows to override the namespace.
                                    </span>
                                </div>
                            </div>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['prefs']->value['site_layout_per_object'] == 'y') {?>
                            <fieldset>
                                <div class="form-group row">
                                    <label for="object_layout" class="col-md-4 col-form-label">Page layout</label>
                                    <div class="col-md-8">
                                        <select name="object_layout" class="form-control">
                                            <option value="">Site Default</option>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['object_layout']->value['available'], 'label', false, 'key');
$_smarty_tpl->tpl_vars['label']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['label']->value) {
$_smarty_tpl->tpl_vars['label']->do_else = false;
?>
                                                <option value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['key']->value ));?>
"<?php if ($_smarty_tpl->tpl_vars['object_layout']->value['current'] == $_smarty_tpl->tpl_vars['key']->value) {?> selected<?php }?>><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['label']->value ));?>
</option>
                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        </select>
                                    </div>
                                </div>
                            </fieldset>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['prefs']->value['object_maintainers_enable'] == 'y') {?>
                            <fieldset>
                                <div class="form-group row">
                                    <label for="object_layout" class="col-md-4 col-form-label">Page Maintainers</label>
                                    <div class="col-sm-8 mb-2">
                                        <?php echo smarty_function_object_selector_multi(array('_simplename'=>'maintainers','_simplevalue'=>$_smarty_tpl->tpl_vars['object_maintainers']->value,'type'=>'user','_threshold'=>-1,'_class'=>"user-selector",'_separator'=>";",'_placeholder'=>"Name"),$_smarty_tpl);?>

                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="object_layout" class="col-md-4 col-form-label">Update Frequency</label>
                                    <div class="col-sm-8 mb-2">
                                        <div class="input-group">
                                            <input type="text" name="update_frequency" class="col-sm-10 form-control mr-2" maxlength="4" id="update_frequency" value="<?php echo $_smarty_tpl->tpl_vars['update_frequency']->value;?>
" placeholder="Days">
                                            <div class="input-group-append">
                                                <span class="input-group-text">days</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        <?php }?>
                    <?php $_block_repeat=false;
echo smarty_block_tab(array('name'=>"Properties"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <?php } else { ?>
                    <?php if ($_smarty_tpl->tpl_vars['wysiwyg']->value == 'y') {?>
                        <input type="hidden" name="allowhtml" value="<?php if ($_smarty_tpl->tpl_vars['allowhtml']->value == 'y') {?>on<?php }?>">
                    <?php }?>
                <?php }?>
            <?php $_block_repeat=false;
echo smarty_block_tabset(array('name'=>'tabs_editpage','cookietab'=>1), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        </div>
        <div class="row d-flex justify-content-center">
            <?php if (mb_strtolower($_smarty_tpl->tpl_vars['page']->value, 'UTF-8') != 'sandbox') {?>
                <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_antibot'] == 'y' && ((isset($_smarty_tpl->tpl_vars['anon_user']->value)) && $_smarty_tpl->tpl_vars['anon_user']->value == 'y')) {?>
                    <?php $_smarty_tpl->_subTemplateRender('file:antibot.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('tr_style'=>"formcolor"), 0, false);
?>
                <?php }?>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_actions_bar'] != 'top') {?>
                <?php $_smarty_tpl->_subTemplateRender('file:wiki_edit_actions.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('wysiwyg'=>$_smarty_tpl->tpl_vars['wysiwyg']->value,'page_info'=>$_smarty_tpl->tpl_vars['page_info']->value), 0, true);
?>
            <?php }?>
        </div>
    </form>
    <?php $_smarty_tpl->_subTemplateRender('file:tiki-page_bar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'content'} */
}
