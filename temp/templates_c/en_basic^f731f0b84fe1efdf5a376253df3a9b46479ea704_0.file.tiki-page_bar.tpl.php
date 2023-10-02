<?php
/* Smarty version 3.1.48, created on 2023-09-29 11:16:29
  from '/home/teddieme/tedd1eme/templates/tiki-page_bar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6516a3fd79fe45_89124592',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f731f0b84fe1efdf5a376253df3a9b46479ea704' => 
    array (
      0 => '/home/teddieme/tedd1eme/templates/tiki-page_bar.tpl',
      1 => 1689085248,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:wiki-discussion.tpl' => 1,
    'file:discussinforum.tpl' => 1,
    'file:attachments.tpl' => 1,
  ),
),false)) {
function content_6516a3fd79fe45_89124592 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/function.bootstrap_modal.php','function'=>'smarty_function_bootstrap_modal',),1=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/function.permission_link.php','function'=>'smarty_function_permission_link',),2=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/function.button.php','function'=>'smarty_function_button',),3=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/modifier.sefurl.php','function'=>'smarty_modifier_sefurl',),4=>array('file'=>'/home/teddieme/tedd1eme/vendor_bundled/vendor/smarty/smarty/libs/plugins/modifier.regex_replace.php','function'=>'smarty_modifier_regex_replace',),5=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/block.self_link.php','function'=>'smarty_block_self_link',),6=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/block.jq.php','function'=>'smarty_block_jq',),7=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/function.service.php','function'=>'smarty_function_service',),8=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/function.attachments.php','function'=>'smarty_function_attachments',),));
?>

<?php if (!(isset($_smarty_tpl->tpl_vars['versioned']->value)) || !$_smarty_tpl->tpl_vars['versioned']->value) {?>
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', 'more_section', null);?>
        <?php if (mb_strtolower($_smarty_tpl->tpl_vars['page']->value, 'UTF-8') != 'sandbox') {?>
            <?php if ($_smarty_tpl->tpl_vars['tiki_p_remove']->value == 'y' && ((isset($_smarty_tpl->tpl_vars['editable']->value)) && $_smarty_tpl->tpl_vars['editable']->value)) {?>
                <a class="dropdown-item btn text-danger btn-link" href="<?php echo smarty_function_bootstrap_modal(array('controller'=>'wiki','action'=>'remove_pages','checked'=>$_smarty_tpl->tpl_vars['page']->value,'version'=>'last'),$_smarty_tpl);?>
">
                    Remove
                </a>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['tiki_p_admin_wiki']->value == 'y' || $_smarty_tpl->tpl_vars['tiki_p_assign_perm_wiki_page']->value == 'y') {?>
                <?php echo smarty_function_permission_link(array('mode'=>'link','type'=>"wiki page",'addclass'=>"dropdown-item",'id'=>$_smarty_tpl->tpl_vars['page']->value,'permType'=>'wiki','title'=>$_smarty_tpl->tpl_vars['page']->value),$_smarty_tpl);?>

            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_page_contribution'] == 'y' && $_smarty_tpl->tpl_vars['tiki_p_page_contribution_view']->value == 'y') {?>
                <?php echo smarty_function_button(array('_keepall'=>'y','href'=>"tiki-page_contribution.php",'page'=>$_smarty_tpl->tpl_vars['page']->value,'_type'=>"link",'_class'=>"dropdown-item",'_text'=>"Contributions by author"),$_smarty_tpl);?>

            <?php }?>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_likePages'] == 'y' && $_smarty_tpl->tpl_vars['tiki_p_wiki_view_similar']->value == 'y') {?>
            <?php echo smarty_function_button(array('_keepall'=>'y','href'=>"tiki-likepages.php",'page'=>$_smarty_tpl->tpl_vars['page']->value,'_type'=>"link",'_class'=>"dropdown-item",'_text'=>"Similar"),$_smarty_tpl);?>

        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_undo'] == 'y' && $_smarty_tpl->tpl_vars['canundo']->value == 'y') {?>
            <?php echo smarty_function_button(array('_keepall'=>'y','href'=>"tiki-index.php",'page'=>$_smarty_tpl->tpl_vars['page']->value,'undo'=>"1",'_type'=>"link",'_class'=>"dropdown-item",'_text'=>"Undo"),$_smarty_tpl);?>

        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_make_structure'] == 'y' && $_smarty_tpl->tpl_vars['tiki_p_edit_structures']->value == 'y' && ((isset($_smarty_tpl->tpl_vars['editable']->value)) && $_smarty_tpl->tpl_vars['editable']->value) && $_smarty_tpl->tpl_vars['structure']->value == 'n' && count($_smarty_tpl->tpl_vars['showstructs']->value) == 0) {?>
            <?php echo smarty_function_button(array('_keepall'=>'y','href'=>"tiki-index.php",'page'=>$_smarty_tpl->tpl_vars['page']->value,'convertstructure'=>"1",'_type'=>"link",'_class'=>"dropdown-item",'_text'=>"Make Structure"),$_smarty_tpl);?>

        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_slideshow'] == 'y' && $_smarty_tpl->tpl_vars['prefs']->value['wiki_uses_slides'] == 'y') {?>
            <?php if ($_smarty_tpl->tpl_vars['show_slideshow']->value == 'y') {?>
                <?php echo smarty_function_button(array('_keepall'=>'y','href'=>"./tiki-slideshow.php",'page'=>$_smarty_tpl->tpl_vars['page']->value,'_type'=>"link",'_class'=>"dropdown-item",'_text'=>"Slideshow"),$_smarty_tpl);?>

            <?php } elseif ($_smarty_tpl->tpl_vars['structure']->value == 'y') {?>
                <?php echo smarty_function_button(array('_keepall'=>'y','href'=>"tiki-slideshow2.php",'page_ref_id'=>$_smarty_tpl->tpl_vars['page_info']->value['page_ref_id'],'_type'=>"link",'_class'=>"dropdown-item",'_text'=>"Slideshow"),$_smarty_tpl);?>

            <?php }?>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_export'] == 'y' && ($_smarty_tpl->tpl_vars['tiki_p_admin_wiki']->value == 'y' || $_smarty_tpl->tpl_vars['tiki_p_export_wiki']->value == 'y')) {?>
            <?php echo smarty_function_button(array('_keepall'=>'y','href'=>"tiki-export_wiki_pages.php",'page'=>$_smarty_tpl->tpl_vars['page']->value,'_type'=>"link",'_class'=>"dropdown-item",'_text'=>"Export"),$_smarty_tpl);?>

        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_discuss'] == 'y' && $_smarty_tpl->tpl_vars['show_page']->value == 'y' && $_smarty_tpl->tpl_vars['tiki_p_forum_post']->value == 'y' && (empty($_smarty_tpl->tpl_vars['prefs']->value['wiki_discuss_visibility']) || $_smarty_tpl->tpl_vars['prefs']->value['wiki_discuss_visibility'] == 'button')) {?>
            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', 'wiki_discussion_string', null);?>
                <?php $_smarty_tpl->_subTemplateRender('file:wiki-discussion.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> [tiki-index.php?page=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['page']->value,'url' ));?>
|<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
]
            <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
            <?php echo smarty_function_button(array('_keepall'=>'y','href'=>"tiki-view_forum.php",'forumId'=>$_smarty_tpl->tpl_vars['prefs']->value['wiki_forum_id'],'comments_postComment'=>"post",'comments_title'=>$_smarty_tpl->tpl_vars['page']->value,'comments_data'=>$_smarty_tpl->tpl_vars['wiki_discussion_string']->value,'comment_topictype'=>"n",'_type'=>"link",'_class'=>"dropdown-item",'_text'=>"Discuss"),$_smarty_tpl);?>

        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_multilingual'] == 'y' && ($_smarty_tpl->tpl_vars['tiki_p_edit']->value == 'y' || (!$_smarty_tpl->tpl_vars['user']->value && $_smarty_tpl->tpl_vars['prefs']->value['wiki_encourage_contribution'] == 'y')) && !$_smarty_tpl->tpl_vars['lock']->value) {?>
            <?php echo smarty_function_button(array('_keepall'=>'y','href'=>"tiki-edit_translation.php",'page'=>$_smarty_tpl->tpl_vars['page']->value,'_type'=>"link",'_class'=>"dropdown-item",'_text'=>"Translate"),$_smarty_tpl);?>

        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['tiki_p_admin_wiki']->value == 'y' && $_smarty_tpl->tpl_vars['prefs']->value['wiki_keywords'] == 'y') {?>
            <?php echo smarty_function_button(array('_keepall'=>'y','href'=>"tiki-admin_keywords.php",'page'=>$_smarty_tpl->tpl_vars['page']->value,'_type'=>"link",'_class'=>"dropdown-item",'_text'=>"Keywords"),$_smarty_tpl);?>

        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['user']->value && ((isset($_smarty_tpl->tpl_vars['tiki_p_create_bookmarks']->value)) && $_smarty_tpl->tpl_vars['tiki_p_create_bookmarks']->value == 'y') && $_smarty_tpl->tpl_vars['prefs']->value['feature_user_bookmarks'] == 'y') {?>
            <?php ob_start();
echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['page']->value);
$_prefixVariable5=ob_get_clean();
ob_start();
echo smarty_modifier_regex_replace(smarty_modifier_regex_replace($_SERVER['REQUEST_URI'],'/^[^\?\&]*/',''),'/(\?page=[^\&]+)/','');
$_prefixVariable6=ob_get_clean();
$_smarty_tpl->_assignInScope('urlurl', $_prefixVariable5.$_prefixVariable6);
echo smarty_function_button(array('_script'=>"tiki-user_bookmarks.php",'urlname'=>$_smarty_tpl->tpl_vars['page']->value,'urlurl'=>$_smarty_tpl->tpl_vars['urlurl']->value,'addurl'=>"Add",'_type'=>"link",'_class'=>"dropdown-item",'_text'=>"Bookmark",'_auto_args'=>"urlname,urlurl,addurl"),$_smarty_tpl);?>

        <?php }?>

        
        <?php if (!empty($_smarty_tpl->tpl_vars['tiki_page_bar_more_items']->value)) {?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tiki_page_bar_more_items']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                <?php echo $_smarty_tpl->tpl_vars['item']->value;?>

            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php }?>
    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', 'page_bar', null);?>
        <?php if ($_smarty_tpl->tpl_vars['edit_page']->value != 'y') {?>
            
            <?php if ((((isset($_smarty_tpl->tpl_vars['editable']->value)) && $_smarty_tpl->tpl_vars['editable']->value) && ($_smarty_tpl->tpl_vars['tiki_p_edit']->value == 'y' || mb_strtolower($_smarty_tpl->tpl_vars['page']->value, 'UTF-8') == 'sandbox') || (!$_smarty_tpl->tpl_vars['user']->value && $_smarty_tpl->tpl_vars['prefs']->value['wiki_encourage_contribution'] == 'y')) || $_smarty_tpl->tpl_vars['tiki_p_admin_wiki']->value == 'y') {?>
                <?php if ((isset($_smarty_tpl->tpl_vars['beingEdited']->value)) && $_smarty_tpl->tpl_vars['beingEdited']->value == 'y') {?>
                    <?php $_smarty_tpl->_assignInScope('thisPageClass', '+highlight');?>
                <?php } else { ?>
                    <?php $_smarty_tpl->_assignInScope('thisPageClass', '');?>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['prefs']->value['flaggedrev_approval'] != 'y' || !$_smarty_tpl->tpl_vars['revision_approval']->value || $_smarty_tpl->tpl_vars['lastVersion']->value == $_smarty_tpl->tpl_vars['revision_displayed']->value) {?>
                    <?php if ((isset($_smarty_tpl->tpl_vars['page_ref_id']->value))) {?>
                        <?php echo smarty_function_button(array('_keepall'=>'y','href'=>"tiki-editpage.php",'page'=>$_smarty_tpl->tpl_vars['page']->value,'page_ref_id'=>$_smarty_tpl->tpl_vars['page_ref_id']->value,'_class'=>((string)$_smarty_tpl->tpl_vars['thisPageClass']->value)." mb-2",'_text'=>"Edit",'_title'=>"Edit this page"),$_smarty_tpl);?>

                    <?php } else { ?>
                        <?php echo smarty_function_button(array('_keepall'=>'y','href'=>"tiki-editpage.php",'page'=>$_smarty_tpl->tpl_vars['page']->value,'_class'=>((string)$_smarty_tpl->tpl_vars['thisPageClass']->value)." mb-2",'_text'=>"Edit",'_title'=>"Edit this page"),$_smarty_tpl);?>

                    <?php }?>
                <?php } elseif ($_smarty_tpl->tpl_vars['tiki_p_wiki_view_latest']->value == 'y') {?>
                    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('self_link', array('latest'=>1,'_class'=>"btn btn-warning"));
$_block_repeat=true;
echo smarty_block_self_link(array('latest'=>1,'_class'=>"btn btn-warning"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                        View latest version before editing
                    <?php $_block_repeat=false;
echo smarty_block_self_link(array('latest'=>1,'_class'=>"btn btn-warning"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <?php }?>
            <?php }?>

            <?php if (mb_strtolower($_smarty_tpl->tpl_vars['page']->value, 'UTF-8') != 'sandbox') {?>
                <?php if ($_smarty_tpl->tpl_vars['tiki_p_rename']->value == 'y' && ((isset($_smarty_tpl->tpl_vars['editable']->value)) && $_smarty_tpl->tpl_vars['editable']->value)) {?>
                    <?php echo smarty_function_button(array('_keepall'=>'y','_class'=>"mb-2",'href'=>"tiki-rename_page.php",'page'=>$_smarty_tpl->tpl_vars['page']->value,'_text'=>"Rename"),$_smarty_tpl);?>

                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_usrlock'] == 'y' && $_smarty_tpl->tpl_vars['user']->value && $_smarty_tpl->tpl_vars['tiki_p_lock']->value == 'y') {?>
                    <?php if (!$_smarty_tpl->tpl_vars['lock']->value) {?>
                        <a class="btn btn-primary mb-2" href="<?php echo smarty_function_bootstrap_modal(array('controller'=>'wiki','action'=>'lock_pages','checked'=>$_smarty_tpl->tpl_vars['page']->value),$_smarty_tpl);?>
">
                            Lock
                        </a>
                    <?php } elseif ($_smarty_tpl->tpl_vars['tiki_p_admin_wiki']->value == 'y' || $_smarty_tpl->tpl_vars['user']->value == $_smarty_tpl->tpl_vars['page_user']->value) {?>
                        <a class="btn btn-primary mb-2" href="<?php echo smarty_function_bootstrap_modal(array('controller'=>'wiki','action'=>'unlock_pages','checked'=>$_smarty_tpl->tpl_vars['page']->value),$_smarty_tpl);?>
">
                            Unlock
                        </a>
                    <?php }?>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_history'] == 'y' && $_smarty_tpl->tpl_vars['tiki_p_wiki_view_history']->value == 'y') {?>
                    <?php echo smarty_function_button(array('_keepall'=>'y','_type'=>"info mb-2",'href'=>"tiki-pagehistory.php",'page'=>$_smarty_tpl->tpl_vars['page']->value,'_text'=>"History"),$_smarty_tpl);?>

                <?php }?>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_source'] == 'y' && $_smarty_tpl->tpl_vars['tiki_p_wiki_view_source']->value == 'y') {?>
                <?php echo smarty_function_button(array('_keepall'=>'y','_type'=>"info mb-2",'href'=>"tiki-pagehistory.php",'page'=>$_smarty_tpl->tpl_vars['page']->value,'source'=>"0",'_text'=>"Source"),$_smarty_tpl);?>

            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_comments'] == 'y' && ($_smarty_tpl->tpl_vars['prefs']->value['wiki_comments_allow_per_page'] == 'n' || $_smarty_tpl->tpl_vars['info']->value['comments_enabled'] == 'y') && $_smarty_tpl->tpl_vars['tiki_p_wiki_view_comments']->value == 'y' && $_smarty_tpl->tpl_vars['tiki_p_read_comments']->value == 'y') {?>

                        
                        <?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_comments_displayed_default'] == 'y' && $_smarty_tpl->tpl_vars['show_slideshow']->value == 'n') {?>
                        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('jq', array());
$_block_repeat=true;
echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                            var id = '#comment-container';
                            $(id).comment_load('tiki-ajax_services.php?controller=comment&action=list&type=wiki+page&objectId=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['page']->value,'url' ));?>
#comment-container');
                            $(document).ajaxComplete(function(){$(id).tiki_popover();});
                            
                        <?php $_block_repeat=false;
echo smarty_block_jq(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                        <?php }?>

                        <a class="btn btn-secondary mb-2" id="comment-toggle" href="<?php echo smarty_function_service(array('controller'=>'comment','action'=>'list','type'=>"wiki page",'objectId'=>$_smarty_tpl->tpl_vars['page']->value),$_smarty_tpl);?>
#comment-container">
                            Comments
                            <?php if ($_smarty_tpl->tpl_vars['count_comments']->value) {?>
                                &nbsp;<span class="count_comments badge badge-secondary"><?php echo $_smarty_tpl->tpl_vars['count_comments']->value;?>
</span>
                            <?php }?>
                        </a>
                        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('jq', array());
$_block_repeat=true;
echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                            $('#comment-toggle').comment_toggle();
                        <?php $_block_repeat=false;
echo smarty_block_jq(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            <?php }?>


            <?php if ((isset($_smarty_tpl->tpl_vars['show_page']->value)) && $_smarty_tpl->tpl_vars['show_page']->value == 'y') {?>
                

                <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_attachments'] == 'y' && ($_smarty_tpl->tpl_vars['tiki_p_wiki_view_attachments']->value == 'y' && ((isset($_smarty_tpl->tpl_vars['atts']->value)) && count($_smarty_tpl->tpl_vars['atts']->value) > 0) || $_smarty_tpl->tpl_vars['tiki_p_wiki_attach_files']->value == 'y' || $_smarty_tpl->tpl_vars['tiki_p_wiki_admin_attachments']->value == 'y')) {?>

                    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', 'thistext', null);?>
                        <?php if ((!(isset($_smarty_tpl->tpl_vars['atts']->value)) || count($_smarty_tpl->tpl_vars['atts']->value) == 0) || $_smarty_tpl->tpl_vars['tiki_p_wiki_attach_files']->value == 'y' && $_smarty_tpl->tpl_vars['tiki_p_wiki_view_attachments']->value == 'n' && $_smarty_tpl->tpl_vars['tiki_p_wiki_admin_attachments']->value == 'n') {?>Files<?php } else { ?>Files&nbsp;<span class="atts_count badge badge-info"><?php echo count($_smarty_tpl->tpl_vars['atts']->value);?>
</span><?php }?>
                    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

                    <?php if (((isset($_smarty_tpl->tpl_vars['atts']->value)) && count($_smarty_tpl->tpl_vars['atts']->value) > 0) || $_smarty_tpl->tpl_vars['editable']->value) {?>
                        <?php ob_start();
if ((isset($_smarty_tpl->tpl_vars['pagemd5']->value))) {
echo (string)$_smarty_tpl->tpl_vars['pagemd5']->value;
}
$_prefixVariable7=ob_get_clean();
echo smarty_function_button(array('href'=>"#attachments",'_flip_id'=>"attzone".$_prefixVariable7,'_type'=>"secondary mb-2",'_text'=>$_smarty_tpl->tpl_vars['thistext']->value,'_flip_default_open'=>$_smarty_tpl->tpl_vars['prefs']->value['w_displayed_default'],'_flip_hide_text'=>"n"),$_smarty_tpl);?>

                    <?php }?>
                <?php }?>

            <?php }?>
            <?php if (trim($_smarty_tpl->tpl_vars['more_section']->value) != '') {?>
                <div class="btn-group dropup mb-2">
                    <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown">More</button>
                    <div class="dropdown-menu" role="menu">
                        <?php echo $_smarty_tpl->tpl_vars['more_section']->value;?>

                    </div>
                </div>
            <?php }?>
        <?php }?>
    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

    <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_discuss'] == 'y' && $_smarty_tpl->tpl_vars['show_page']->value == 'y' && $_smarty_tpl->tpl_vars['tiki_p_forum_post']->value == 'y' && $_smarty_tpl->tpl_vars['prefs']->value['wiki_discuss_visibility'] == 'above') {?>
            <?php $_smarty_tpl->_subTemplateRender('file:discussinforum.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php }?>

    <?php if (trim($_smarty_tpl->tpl_vars['page_bar']->value) != '') {?>
        <div class="form-group row mx-0 my-3" id="page-bar">
            <div class="btn-bar">
                <?php echo $_smarty_tpl->tpl_vars['page_bar']->value;?>

            </div>
        </div>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['wiki_extras']->value == 'y' && $_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_attachments'] == 'y' && $_smarty_tpl->tpl_vars['tiki_p_wiki_view_attachments']->value == 'y') {
if ($_smarty_tpl->tpl_vars['prefs']->value['feature_use_fgal_for_wiki_attachments'] == 'y') {
echo smarty_function_attachments(array('_id'=>$_smarty_tpl->tpl_vars['page']->value,'_type'=>'wiki page'),$_smarty_tpl);
} else {
$_smarty_tpl->_subTemplateRender('file:attachments.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_comments'] == 'y' && $_smarty_tpl->tpl_vars['tiki_p_wiki_view_comments']->value == 'y' && $_smarty_tpl->tpl_vars['edit_page']->value != 'y') {?><div id="comment-container"></div><?php }
}?>

<?php }
}
