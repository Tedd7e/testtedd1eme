<?php
/* Smarty version 3.1.48, created on 2023-09-29 11:17:29
  from '/home/teddieme/tedd1eme/templates/admin/include_wiki.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6516a439c43a96_47412164',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '50024700349053f2db4ca5395a4f6c60948fab92' => 
    array (
      0 => '/home/teddieme/tedd1eme/templates/admin/include_wiki.tpl',
      1 => 1689085248,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/include_apply_top.tpl' => 1,
    'file:admin/include_apply_bottom.tpl' => 1,
  ),
),false)) {
function content_6516a439c43a96_47412164 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/block.remarksbox.php','function'=>'smarty_block_remarksbox',),1=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/function.icon.php','function'=>'smarty_function_icon',),2=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/function.ticket.php','function'=>'smarty_function_ticket',),3=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/function.button.php','function'=>'smarty_function_button',),4=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/block.tabset.php','function'=>'smarty_block_tabset',),5=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/block.tab.php','function'=>'smarty_block_tab',),6=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/function.preference.php','function'=>'smarty_function_preference',),7=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/function.help.php','function'=>'smarty_function_help',),));
?>


<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>"tip",'title'=>"Tip"));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Tip"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    Use the 'Quick Edit' module to easily create or edit wiki pages. <a class="btn btn-link alert-link" href="tiki-admin_modules.php"><?php echo smarty_function_icon(array('name'=>"module"),$_smarty_tpl);?>
 Modules</a>
<?php $_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Tip"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
<form action="tiki-admin.php?page=wiki" method="post" class="admin">
    <?php echo smarty_function_ticket(array(),$_smarty_tpl);?>

    <div class="heading input_submit_container text-right">
    </div>
    <div class="t_navbar mb-4 clearfix">
        <?php echo smarty_function_button(array('_icon_name'=>'admin_wiki','_text'=>"Pages",'_type'=>"link",'_class'=>'btn btn-link','_script'=>'tiki-listpages.php','_title'=>"List wiki pages"),$_smarty_tpl);?>

        <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_structure'] == "y" && $_smarty_tpl->tpl_vars['tiki_p_view']->value == "y") {?>
            <?php echo smarty_function_button(array('_icon_name'=>'structure','_text'=>"Structures",'_type'=>"link",'_class'=>'btn btn-link','_script'=>'tiki-admin_structures.php','_title'=>"List structures"),$_smarty_tpl);?>

        <?php }?>
        <?php $_smarty_tpl->_subTemplateRender('file:admin/include_apply_top.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tabset', array('name'=>"admin_wiki"));
$_block_repeat=true;
echo smarty_block_tabset(array('name'=>"admin_wiki"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tab', array('name'=>"General Preferences"));
$_block_repeat=true;
echo smarty_block_tab(array('name'=>"General Preferences"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <br>
            <div class="adminoptionbox clearfix">
                <fieldset class="mb-3 w-100">
                    <legend>Activate the feature</legend>
                    <?php echo smarty_function_preference(array('name'=>'feature_wiki','visible'=>"always"),$_smarty_tpl);?>

                    <?php echo smarty_function_preference(array('name'=>'wikiHomePage'),$_smarty_tpl);?>

                    <?php echo smarty_function_preference(array('name'=>'wiki_url_scheme'),$_smarty_tpl);?>

                </fieldset>
            </div>
            <div class="adminoptionbox clearfix">
            <fieldset class="mb-3 w-100">
                <legend>Page name</legend>
                <?php echo smarty_function_preference(array('name'=>'wiki_badchar_prevent'),$_smarty_tpl);?>

                <?php echo smarty_function_preference(array('name'=>'wiki_page_regex'),$_smarty_tpl);?>

                <?php echo smarty_function_preference(array('name'=>'wiki_pagename_strip'),$_smarty_tpl);?>

            </fieldset>
            </div>
            <div class="adminoptionbox clearfix">
                <fieldset class="mb-3 w-100">
                    <legend>Page display</legend>
                    <?php echo smarty_function_preference(array('name'=>'feature_page_title'),$_smarty_tpl);?>

                    <?php echo smarty_function_preference(array('name'=>'wiki_page_name_above'),$_smarty_tpl);?>

                    <?php echo smarty_function_preference(array('name'=>'wiki_page_name_inside'),$_smarty_tpl);?>

                    <?php echo smarty_function_preference(array('name'=>'wiki_page_hide_title'),$_smarty_tpl);?>

                    <?php echo smarty_function_preference(array('name'=>'wiki_heading_links'),$_smarty_tpl);?>

                    <?php echo smarty_function_preference(array('name'=>'feature_wiki_description'),$_smarty_tpl);?>

                    <?php echo smarty_function_preference(array('name'=>'feature_wiki_pageid'),$_smarty_tpl);?>

                    <?php echo smarty_function_preference(array('name'=>'wiki_show_version'),$_smarty_tpl);?>

                    <?php echo smarty_function_preference(array('name'=>'wiki_authors_style'),$_smarty_tpl);?>

                    <?php echo smarty_function_preference(array('name'=>'wiki_authors_style_by_page'),$_smarty_tpl);?>

                    <?php echo smarty_function_preference(array('name'=>'wiki_encourage_contribution'),$_smarty_tpl);?>

                    <?php echo smarty_function_preference(array('name'=>'feature_wiki_show_hide_before'),$_smarty_tpl);?>

                    <?php echo smarty_function_preference(array('name'=>'wiki_actions_bar'),$_smarty_tpl);?>

                    <?php echo smarty_function_preference(array('name'=>'wiki_page_navigation_bar'),$_smarty_tpl);?>

                    <?php echo smarty_function_preference(array('name'=>'wiki_topline_position'),$_smarty_tpl);?>

                    <?php echo smarty_function_preference(array('name'=>'page_bar_position'),$_smarty_tpl);?>

                </fieldset>
            </div>
            <div class="adminoptionbox clearfix">
                <fieldset class="mb-3 w-100">
                    <legend>Editing</legend>
                    <?php echo smarty_function_preference(array('name'=>'feature_wiki_undo'),$_smarty_tpl);?>

                    <?php echo smarty_function_preference(array('name'=>'wiki_edit_minor'),$_smarty_tpl);?>

                    <?php echo smarty_function_preference(array('name'=>'wiki_edit_plugin'),$_smarty_tpl);?>

                    <?php echo smarty_function_preference(array('name'=>'wiki_edit_section'),$_smarty_tpl);?>

                    <div class="adminoptionboxchild" id="wiki_edit_section_childcontainer">
                        <?php echo smarty_function_preference(array('name'=>'wiki_edit_icons_toggle'),$_smarty_tpl);?>

                        <?php echo smarty_function_preference(array('name'=>'wiki_edit_section_level'),$_smarty_tpl);?>

                    </div>
                    <?php echo smarty_function_preference(array('name'=>'feature_wiki_allowhtml'),$_smarty_tpl);?>

                    <?php echo smarty_function_preference(array('name'=>'wiki_mandatory_edit_summary'),$_smarty_tpl);?>

                    <?php echo smarty_function_preference(array('name'=>'feature_wiki_footnotes'),$_smarty_tpl);?>

                    <?php echo smarty_function_preference(array('name'=>'wiki_freetags_edit_position'),$_smarty_tpl);?>

                    <?php echo smarty_function_preference(array('name'=>'wiki_timeout_warning'),$_smarty_tpl);?>

                    <?php echo smarty_function_preference(array('name'=>'feature_warn_on_edit'),$_smarty_tpl);?>

                    <?php echo smarty_function_preference(array('name'=>'warn_on_edit_time'),$_smarty_tpl);?>

                    <div class="adminoptionboxchild" id="feature_wiki_allowhtml_childcontainer">
                        <?php echo smarty_function_preference(array('name'=>'wysiwyg_wiki_parsed'),$_smarty_tpl);?>

                    </div>
                    <?php echo smarty_function_preference(array('name'=>'feature_wysiwyg'),$_smarty_tpl);?>

                    <?php echo smarty_function_preference(array('name'=>'feature_wiki_mandatory_category'),$_smarty_tpl);?>

                    <?php echo smarty_function_preference(array('name'=>'feature_actionlog_bytes'),$_smarty_tpl);?>

                    <?php echo smarty_function_preference(array('name'=>'feature_wiki_templates'),$_smarty_tpl);?>

                    <div class="adminoptionboxchild" id="feature_wiki_templates_childcontainer">
                        <?php echo smarty_function_preference(array('name'=>'lock_content_templates'),$_smarty_tpl);?>

                    </div>
                </fieldset>
            </div>
            <div class="adminoptionbox clearfix">
                <fieldset class="mb-3 w-100">
                    <legend>Automatic table of contents</legend>
                    <?php echo smarty_function_preference(array('name'=>'wiki_auto_toc'),$_smarty_tpl);?>

                    <div class="adminoptionbox clearfix" id="wiki_auto_toc_childcontainer">
                        <?php echo smarty_function_preference(array('name'=>'wiki_toc_default'),$_smarty_tpl);?>

                        <?php echo smarty_function_preference(array('name'=>'wiki_inline_auto_toc'),$_smarty_tpl);?>

                        <?php echo smarty_function_preference(array('name'=>'wiki_toc_pos'),$_smarty_tpl);?>

                        <?php echo smarty_function_preference(array('name'=>'wiki_toc_offset'),$_smarty_tpl);?>

                    </div>
                </fieldset>
            </div>
            <div class="adminoptionbox clearfix">
                <fieldset class="mb-3 w-100">
                    <legend>Plugins</legend>
                    <?php echo smarty_function_preference(array('name'=>'wikiplugin_attach'),$_smarty_tpl);?>

                    <?php echo smarty_function_preference(array('name'=>'wikiplugin_author'),$_smarty_tpl);?>

                    <?php echo smarty_function_preference(array('name'=>'wikiplugin_backlinks'),$_smarty_tpl);?>

                    <?php echo smarty_function_preference(array('name'=>'wikiplugin_include'),$_smarty_tpl);?>

                    <div class="adminoptionboxchild" id="wikiplugin_include_childcontainer">
                      <?php echo smarty_function_preference(array('name'=>'wiki_plugin_include_link_original'),$_smarty_tpl);?>

                    </div>
                    <?php echo smarty_function_preference(array('name'=>'wikiplugin_listpages'),$_smarty_tpl);?>

                    <?php echo smarty_function_preference(array('name'=>'wikiplugin_randominclude'),$_smarty_tpl);?>

                    <?php echo smarty_function_preference(array('name'=>'wikiplugin_showpages'),$_smarty_tpl);?>

                    <?php echo smarty_function_preference(array('name'=>'wikiplugin_slideshow'),$_smarty_tpl);?>

                    <?php echo smarty_function_preference(array('name'=>'wikiplugin_titlesearch'),$_smarty_tpl);?>

                    <?php echo smarty_function_preference(array('name'=>'wikiplugin_transclude'),$_smarty_tpl);?>

                    <?php echo smarty_function_preference(array('name'=>'wikiplugin_wantedpages'),$_smarty_tpl);?>

                    <?php echo smarty_function_preference(array('name'=>'wikiplugin_footnote'),$_smarty_tpl);?>

                    <div class="adminoptionboxchild" id="wikiplugin_footnote_childcontainer">
                        <?php echo smarty_function_preference(array('name'=>'wikiplugin_footnotearea'),$_smarty_tpl);?>

                        <?php echo smarty_function_preference(array('name'=>'footnote_popovers'),$_smarty_tpl);?>

                    </div>
                </fieldset>
            </div>
        <?php $_block_repeat=false;
echo smarty_block_tab(array('name'=>"General Preferences"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tab', array('name'=>"Features"));
$_block_repeat=true;
echo smarty_block_tab(array('name'=>"Features"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <br>
            <div class="adminoptionbox clearfix">
                <fieldset class="mb-3 w-100">
                    <legend>General features</legend>
                    <?php echo smarty_function_preference(array('name'=>'wiki_uses_slides'),$_smarty_tpl);?>

                    <?php echo smarty_function_preference(array('name'=>'feature_backlinks'),$_smarty_tpl);?>

                            <div class="adminoptionboxchild" id="feature_backlinks_childcontainer">
                                <?php echo smarty_function_preference(array('name'=>'wiki_backlinks_name_len'),$_smarty_tpl);?>

                                <?php echo smarty_function_preference(array('name'=>'wiki_backlinks_show_article'),$_smarty_tpl);?>

                                <?php echo smarty_function_preference(array('name'=>'wiki_backlinks_show_post'),$_smarty_tpl);?>

                                <?php echo smarty_function_preference(array('name'=>'wiki_backlinks_show_calendar_event'),$_smarty_tpl);?>

                                <?php echo smarty_function_preference(array('name'=>'wiki_backlinks_show_comment'),$_smarty_tpl);?>

                                <?php echo smarty_function_preference(array('name'=>'wiki_backlinks_show_forum_post'),$_smarty_tpl);?>

                                <?php echo smarty_function_preference(array('name'=>'wiki_backlinks_show_trackeritem'),$_smarty_tpl);?>

                                <?php echo smarty_function_preference(array('name'=>'wiki_backlinks_show_tracker'),$_smarty_tpl);?>

                                <?php echo smarty_function_preference(array('name'=>'wiki_backlinks_show_trackerfield'),$_smarty_tpl);?>

                            </div>
                        <?php echo smarty_function_preference(array('name'=>'feature_wiki_discuss'),$_smarty_tpl);?>

                            <div class="adminoptionboxchild" id="feature_wiki_discuss_childcontainer">
                                <?php echo smarty_function_preference(array('name'=>'wiki_forum_id'),$_smarty_tpl);?>

                                <?php echo smarty_function_preference(array('name'=>'wiki_discuss_visibility'),$_smarty_tpl);?>

                            </div>
                        <?php echo smarty_function_preference(array('name'=>'feature_wiki_export'),$_smarty_tpl);?>

                            <div class="adminoptionboxchild col-md-8 offset-sm-4" id="feature_wiki_export_childcontainer">
                                <?php echo smarty_function_button(array('href'=>"tiki-export_wiki_pages.php",'_text'=>"Export Wiki Pages"),$_smarty_tpl);?>

                            </div>
                        <?php echo smarty_function_preference(array('name'=>'geo_locate_wiki'),$_smarty_tpl);?>

                        <?php echo smarty_function_preference(array('name'=>'feature_history'),$_smarty_tpl);?>

                            <div class="adminoptionboxchild" id="feature_history_childcontainer">
                                <?php echo smarty_function_preference(array('name'=>'maxVersions'),$_smarty_tpl);?>

                                <?php echo smarty_function_preference(array('name'=>'keep_versions'),$_smarty_tpl);?>

                                <?php echo smarty_function_preference(array('name'=>'feature_page_contribution'),$_smarty_tpl);?>

                                <?php echo smarty_function_preference(array('name'=>'feature_wiki_history_ip'),$_smarty_tpl);?>

                                <?php echo smarty_function_preference(array('name'=>'default_wiki_diff_style'),$_smarty_tpl);?>

                                <?php echo smarty_function_preference(array('name'=>'feature_wiki_history_full'),$_smarty_tpl);?>

                            </div>
                        <?php echo smarty_function_preference(array('name'=>'feature_wiki_import_html'),$_smarty_tpl);?>

                        <?php echo smarty_function_preference(array('name'=>'feature_wiki_import_page'),$_smarty_tpl);?>

                        <?php echo smarty_function_preference(array('name'=>'wiki_keywords'),$_smarty_tpl);?>

                        <?php echo smarty_function_preference(array('name'=>'wiki_creator_admin'),$_smarty_tpl);?>

                        <?php echo smarty_function_preference(array('name'=>'feature_wiki_mindmap'),$_smarty_tpl);?>

                        <?php echo smarty_function_preference(array('name'=>'feature_wiki_rankings'),$_smarty_tpl);?>

                        <?php echo smarty_function_preference(array('name'=>'feature_wiki_ratings'),$_smarty_tpl);?>

                        <?php echo smarty_function_preference(array('name'=>'feature_sandbox'),$_smarty_tpl);?>

                        <?php echo smarty_function_preference(array('name'=>'wiki_date_field'),$_smarty_tpl);?>

                        <?php echo smarty_function_preference(array('name'=>'feature_wiki_use_date'),$_smarty_tpl);?>

                        <div class="adminoptionboxchild" id="feature_wiki_use_date_childcontainer">
                            <?php echo smarty_function_preference(array('name'=>'feature_wiki_use_date_links'),$_smarty_tpl);?>

                        </div>
                        <?php echo smarty_function_preference(array('name'=>'feature_wiki_userpage'),$_smarty_tpl);?>

                        <div class="adminoptionboxchild" id="feature_wiki_userpage_childcontainer">
                            <?php echo smarty_function_preference(array('name'=>'feature_wiki_userpage_prefix'),$_smarty_tpl);?>

                        </div>
                        <?php echo smarty_function_preference(array('name'=>'feature_wiki_usrlock'),$_smarty_tpl);?>

                        <?php echo smarty_function_preference(array('name'=>'feature_source'),$_smarty_tpl);?>

                        <?php echo smarty_function_preference(array('name'=>'wiki_feature_copyrights'),$_smarty_tpl);?>

                        <?php echo smarty_function_preference(array('name'=>'wiki_pagination'),$_smarty_tpl);?>

                            <div class="adminoptionboxchild" id="wiki_pagination_childcontainer">
                                <?php echo smarty_function_preference(array('name'=>'wiki_page_separator'),$_smarty_tpl);?>

                            </div>
                        <?php echo smarty_function_preference(array('name'=>'feature_references'),$_smarty_tpl);?>

                            <div class="adminoptionboxchild" id="feature_references_childcontainer">
                                <?php echo smarty_function_preference(array('name'=>'feature_library_references'),$_smarty_tpl);?>

                                <?php echo smarty_function_preference(array('name'=>'feature_references_popover'),$_smarty_tpl);?>

                                <?php echo smarty_function_preference(array('name'=>'feature_references_style'),$_smarty_tpl);?>

                            </div>
                        <?php echo smarty_function_preference(array('name'=>'wiki_simple_ratings'),$_smarty_tpl);?>

                        <div class="adminoptionboxchild" id="wiki_simple_ratings_childcontainer">
                            <?php echo smarty_function_preference(array('name'=>'wiki_simple_ratings_options'),$_smarty_tpl);?>

                        </div>
                </fieldset>
            </div>
            <div class="adminoptionbox clearfix">
                <fieldset class="mb-3 w-100">
                    <legend>Redirect and Similar</legend>
                        <?php echo smarty_function_preference(array('name'=>'feature_wiki_1like_redirection'),$_smarty_tpl);?>

                        <?php echo smarty_function_preference(array('name'=>'wiki_prefixalias_tokens'),$_smarty_tpl);?>

                        <?php echo smarty_function_preference(array('name'=>'feature_semantic'),$_smarty_tpl);?>

                        <?php echo smarty_function_preference(array('name'=>'feature_likePages'),$_smarty_tpl);?>

                        <div class="adminoptionboxchild" id="wiki_likepages_samelang_only">
                            <?php echo smarty_function_preference(array('name'=>'wiki_likepages_samelang_only'),$_smarty_tpl);?>

                        </div>
                        <?php echo smarty_function_preference(array('name'=>'feature_wiki_pagealias'),$_smarty_tpl);?>

                        <?php echo smarty_function_preference(array('name'=>'wiki_pagealias_tokens'),$_smarty_tpl);?>

                </fieldset>
            </div>
            <div class="adminoptionbox clearfix">
                <fieldset class="mb-3 w-100">
                    <legend>Wikiwords Features</legend>
                    <?php echo smarty_function_preference(array('name'=>'feature_wikiwords'),$_smarty_tpl);?>

                    <?php echo smarty_function_preference(array('name'=>'feature_wikiwords_usedash'),$_smarty_tpl);?>

                    <?php echo smarty_function_preference(array('name'=>'feature_wiki_plurals'),$_smarty_tpl);?>

                </fieldset>
            </div>
            <div class="adminoptionbox clearfix">
                <fieldset class="mb-3 w-100">
                    <legend>Attachments</legend>
                    <?php echo smarty_function_preference(array('name'=>'feature_use_fgal_for_wiki_attachments'),$_smarty_tpl);?>

                    <?php echo smarty_function_preference(array('name'=>'feature_wiki_attachments'),$_smarty_tpl);?>

                    <div class="adminoptionboxchild" id="feature_wiki_attachments_childcontainer">
                        <?php echo smarty_function_preference(array('name'=>'w_displayed_default'),$_smarty_tpl);?>

                        <?php echo smarty_function_preference(array('name'=>'w_use_db'),$_smarty_tpl);?>

                        <div class="adminoptionboxchild w_use_db_childcontainer n">
                            <?php echo smarty_function_preference(array('name'=>'w_use_dir'),$_smarty_tpl);?>

                        </div>
                        <?php if (!empty($_smarty_tpl->tpl_vars['prefs']->value['w_use_dir'])) {?>
                            If you change storage, it is better to move all the files for easy backup...
                            <?php ob_start();
echo smarty_function_ticket(array('mode'=>'get'),$_smarty_tpl);
$_prefixVariable1=ob_get_clean();
echo smarty_function_button(array('href'=>"tiki-admin.php?page=wikiatt&all2db=1",'_text'=>"Change all to db",'_onclick'=>"confirmPopup('Move all attachments to database?', '".$_prefixVariable1."')"),$_smarty_tpl);?>

                            <?php ob_start();
echo smarty_function_ticket(array('mode'=>'get'),$_smarty_tpl);
$_prefixVariable2=ob_get_clean();
echo smarty_function_button(array('href'=>"tiki-admin.php?page=wikiatt&all2file=1",'_text'=>"Change all to file",'_onclick'=>"confirmPopup('Move all attachments to file system?', '".$_prefixVariable2."')"),$_smarty_tpl);?>

                        <?php }?>
                    </div>
                    <?php echo smarty_function_preference(array('name'=>'feature_wiki_pictures'),$_smarty_tpl);?>

                    <div class="adminoptionboxchild" id="feature_wiki_pictures_childcontainer">
                        <?php echo smarty_function_preference(array('name'=>'feature_filegals_manager'),$_smarty_tpl);?>

                        <div class="offset-sm-4 col-sm-8">
                            <?php ob_start();
echo smarty_function_ticket(array('mode'=>'get'),$_smarty_tpl);
$_prefixVariable3=ob_get_clean();
echo smarty_function_button(array('href'=>"tiki-admin.php?page=wiki&amp;rmvunusedpic=1",'_text'=>"Remove unused pictures",'_onclick'=>"confirmPopup('Remove unused pictures?', '".$_prefixVariable3."')"),$_smarty_tpl);?>

                            <?php ob_start();
echo smarty_function_ticket(array('mode'=>'get'),$_smarty_tpl);
$_prefixVariable4=ob_get_clean();
echo smarty_function_button(array('href'=>"tiki-admin.php?page=wiki&amp;moveWikiUp=1",'_text'=>"Move images from wiki_up to the home file gallery",'_onclick'=>"confirmPopup('Move images to home gallery?', '".$_prefixVariable4."')"),$_smarty_tpl);?>

                            <span class="form-text">
                                If you use these buttons please make sure to have a backup of the database and the directory wiki_up
                            </span>
                        </div>
                    </div>
                </fieldset>
            </div>
            <div class="adminoptionbox clearfix">
                <fieldset class="mb-3 w-100">
                    <legend>Comments</legend>
                    <?php echo smarty_function_preference(array('name'=>'feature_wiki_comments'),$_smarty_tpl);?>

                    <div class="adminoptionboxchild" id="feature_wiki_comments_childcontainer">
                        <?php echo smarty_function_preference(array('name'=>'wiki_comments_allow_per_page'),$_smarty_tpl);?>

                        <?php echo smarty_function_preference(array('name'=>'wiki_comments_displayed_default'),$_smarty_tpl);?>

                        <?php echo smarty_function_preference(array('name'=>'wiki_comments_default_ordering'),$_smarty_tpl);?>

                        <?php echo smarty_function_preference(array('name'=>'wiki_comments_form_displayed_default'),$_smarty_tpl);?>

                        <?php echo smarty_function_preference(array('name'=>'wiki_watch_comments'),$_smarty_tpl);?>

                        <?php echo smarty_function_preference(array('name'=>'wiki_comments_per_page'),$_smarty_tpl);?>

                    </div>
                </fieldset>
            </div>
            <div class="adminoptionbox clearfix">
                <fieldset class="mb-3 w-100">
                    <legend>Structures<?php echo smarty_function_help(array('url'=>"Structures"),$_smarty_tpl);?>
</legend>
                    <?php echo smarty_function_preference(array('name'=>'feature_wiki_structure'),$_smarty_tpl);?>

                    <div class="adminoptionboxchild" id="feature_wiki_structure_childcontainer">
                        <?php echo smarty_function_preference(array('name'=>'wiki_structure_bar_position'),$_smarty_tpl);?>

                        <?php echo smarty_function_preference(array('name'=>'feature_wiki_open_as_structure'),$_smarty_tpl);?>

                        <?php echo smarty_function_preference(array('name'=>'feature_wiki_make_structure'),$_smarty_tpl);?>

                        <?php echo smarty_function_preference(array('name'=>'feature_wiki_categorize_structure'),$_smarty_tpl);?>

                        <?php echo smarty_function_preference(array('name'=>'feature_wiki_structure_drilldownmenu'),$_smarty_tpl);?>

                        <?php echo smarty_function_preference(array('name'=>'lock_wiki_structures'),$_smarty_tpl);?>

                        <?php echo smarty_function_preference(array('name'=>'feature_create_webhelp'),$_smarty_tpl);?>

                        <?php echo smarty_function_preference(array('name'=>'page_n_times_in_a_structure'),$_smarty_tpl);?>

                        <?php echo smarty_function_preference(array('name'=>'feature_listorphanStructure'),$_smarty_tpl);?>

                        <?php echo smarty_function_preference(array('name'=>'feature_wiki_no_inherit_perms_structure'),$_smarty_tpl);?>

                        <?php echo smarty_function_preference(array('name'=>'wikiplugin_toc'),$_smarty_tpl);?>

                    </div>
                </fieldset>
            </div>
            <div class="adminoptionbox clearfix">
                <fieldset class="mb-3 w-100">
                    <legend>Wiki watch<?php echo smarty_function_help(array('url'=>"Watch"),$_smarty_tpl);?>
</legend>
                    <?php echo smarty_function_preference(array('name'=>'wiki_watch_author'),$_smarty_tpl);?>

                    <?php echo smarty_function_preference(array('name'=>'wiki_watch_editor'),$_smarty_tpl);?>

                    <?php echo smarty_function_preference(array('name'=>'wiki_watch_comments'),$_smarty_tpl);?>

                    <?php echo smarty_function_preference(array('name'=>'wiki_watch_minor'),$_smarty_tpl);?>

                </fieldset>
            </div>
            <div class="adminoptionbox clearfix">
                <fieldset class="mb-3 w-100">
                    <legend>Namespaces<?php echo smarty_function_help(array('url'=>"Namespaces"),$_smarty_tpl);?>
</legend>
                    <?php echo smarty_function_preference(array('name'=>'namespace_enabled'),$_smarty_tpl);?>

                    <div class="adminoptionboxchild" id="namespace_enabled_childcontainer">
                        <div class="offset-sm-4 colsm-8">
                            The namespace separator should not
                            <ul>
                                <li>contain any of the characters not allowed in wiki page names, typically /?#[]@$&amp;+;=&lt;&gt;</li>
                                <li>conflict with wiki syntax tagging</li>
                            </ul>
                        </div>
                        <?php echo smarty_function_preference(array('name'=>'namespace_separator'),$_smarty_tpl);?>

                        <?php echo smarty_function_preference(array('name'=>'namespace_indicator_in_structure'),$_smarty_tpl);?>

                        <?php echo smarty_function_preference(array('name'=>'namespace_indicator_in_page_title'),$_smarty_tpl);?>

                        <div class="offset-sm-4 colsm-8">
                            <p><strong>Settings that may be affected by the namespace separator</strong></p>
                            To use :: as a separator, you should also use ::: as the wiki center tag syntax.<br/>
                            Note: a conversion of :: to ::: for existing pages must be done manually.<br/>
                        </div>
                        <?php echo smarty_function_preference(array('name'=>'feature_use_three_colon_centertag'),$_smarty_tpl);?>

                        <div class="offset-sm-4 colsm-8">
                            If the page name display stripper conflicts with the namespace separator, the namespace is used and the page name display is not stripped.
                        </div>
                        <?php echo smarty_function_preference(array('name'=>'wiki_pagename_strip'),$_smarty_tpl);?>

                        <?php echo smarty_function_preference(array('name'=>'namespace_force_links'),$_smarty_tpl);?>

                    </div>
                </fieldset>
            </div>
        <?php $_block_repeat=false;
echo smarty_block_tab(array('name'=>"Features"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tab', array('name'=>"Flagged Revision"));
$_block_repeat=true;
echo smarty_block_tab(array('name'=>"Flagged Revision"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <br>
            <div class="adminoptionbox clearfix">
                <fieldset class="mb-3 w-100">
                    <?php echo smarty_function_preference(array('name'=>'flaggedrev_approval'),$_smarty_tpl);?>

                    <div id="flaggedrev_approval_childcontainer">
                        <?php echo smarty_function_preference(array('name'=>'flaggedrev_approval_categories'),$_smarty_tpl);?>

                    </div>
                </fieldset>
            </div>
        <?php $_block_repeat=false;
echo smarty_block_tab(array('name'=>"Flagged Revision"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tab', array('name'=>"Page Listings"));
$_block_repeat=true;
echo smarty_block_tab(array('name'=>"Page Listings"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <br>
            <div class="adminoptionbox clearfix">
                <fieldset class="mb-3 w-100">
                <legend>Options</legend>
                    <?php echo smarty_function_preference(array('name'=>'feature_lastChanges'),$_smarty_tpl);?>

                    <?php echo smarty_function_preference(array('name'=>'feature_listPages'),$_smarty_tpl);?>

                    <?php echo smarty_function_preference(array('name'=>'feature_listorphanPages'),$_smarty_tpl);?>

                    <?php echo smarty_function_preference(array('name'=>'feature_listorphanStructure'),$_smarty_tpl);?>

                    <?php echo smarty_function_preference(array('name'=>'gmap_page_list'),$_smarty_tpl);?>

                </fieldset>
            </div>
            <div class="adminoptionbox clearfix">
                <fieldset class="mb-3 w-100">
                <legend>Configuration</legend>
                    <?php echo smarty_function_preference(array('name'=>'wiki_list_backlinks'),$_smarty_tpl);?>

                    <?php echo smarty_function_preference(array('name'=>'wiki_list_categories'),$_smarty_tpl);?>

                    <?php echo smarty_function_preference(array('name'=>'wiki_list_categories_path'),$_smarty_tpl);?>

                    <?php echo smarty_function_preference(array('name'=>'wiki_list_comment'),$_smarty_tpl);?>

                    <?php echo smarty_function_preference(array('name'=>'wiki_list_creator'),$_smarty_tpl);?>

                    <?php echo smarty_function_preference(array('name'=>'wiki_list_description'),$_smarty_tpl);?>

                    <div class="adminoptionboxchild" id="wiki_list_description_childcontainer">
                        <?php echo smarty_function_preference(array('name'=>'wiki_list_description_len'),$_smarty_tpl);?>

                    </div>
                    <?php echo smarty_function_preference(array('name'=>'wiki_list_hits'),$_smarty_tpl);?>

                    <?php echo smarty_function_preference(array('name'=>'wiki_list_language'),$_smarty_tpl);?>

                    <?php echo smarty_function_preference(array('name'=>'wiki_list_lastmodif'),$_smarty_tpl);?>

                    <?php echo smarty_function_preference(array('name'=>'wiki_list_user'),$_smarty_tpl);?>

                    <?php echo smarty_function_preference(array('name'=>'wiki_list_links'),$_smarty_tpl);?>

                    <?php echo smarty_function_preference(array('name'=>'wiki_list_name'),$_smarty_tpl);?>

                    <?php echo smarty_function_preference(array('name'=>'wiki_list_id'),$_smarty_tpl);?>

                    <div class="adminoptionbox clearfix">
                        Select which items to display when listing pages and backlinks:
                    </div>
                    <?php echo smarty_function_preference(array('name'=>'wiki_list_sortorder'),$_smarty_tpl);?>

                    <div class="adminoptionboxchild">
                        <?php echo smarty_function_preference(array('name'=>'wiki_list_sortdirection'),$_smarty_tpl);?>

                    </div>
                    <div class="adminoptionboxchild" id="wiki_list_name_childcontainer">
                        <?php echo smarty_function_preference(array('name'=>'wiki_list_name_len'),$_smarty_tpl);?>

                    </div>
                    <div class="adminoptionboxchild" id="wiki_list_comment_childcontainer">
                        <?php echo smarty_function_preference(array('name'=>'wiki_list_comment_len'),$_smarty_tpl);?>

                    </div>
                    <?php echo smarty_function_preference(array('name'=>'wiki_list_size'),$_smarty_tpl);?>

                    <?php echo smarty_function_preference(array('name'=>'wiki_list_rating'),$_smarty_tpl);?>

                    <?php echo smarty_function_preference(array('name'=>'wiki_list_status'),$_smarty_tpl);?>

                    <?php echo smarty_function_preference(array('name'=>'wiki_list_lastver'),$_smarty_tpl);?>

                    <?php echo smarty_function_preference(array('name'=>'wiki_list_versions'),$_smarty_tpl);?>

                </fieldset>
            </div>
        <?php $_block_repeat=false;
echo smarty_block_tab(array('name'=>"Page Listings"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tab', array('name'=>"Tools"));
$_block_repeat=true;
echo smarty_block_tab(array('name'=>"Tools"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <br>
            <div class="adminoptionbox clearfix">
                <fieldset class="mb-3 w-100">
                    <legend>Database dumps and restores</legend>
                    Create database archives of wiki pages for restoring at a later date.
                    <div class="form-group row">
                        <label for="tagname" class="col-form-label col-sm-4">Name for dump</label>
                        <div class="col-sm-4">
                            <input maxlength="20" size="20" type="text" name="newtagname" id="newtagname" class="form-control">
                        </div>
                        <div class="col-sm-4">
                            <input type="submit" class="btn btn-primary" name="createtag" value="Create Database Dump">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="databasetag" class="col-form-label col-sm-4">Wiki database</label>
                        <div class="col-sm-4">
                            <select name="tagname" class="form-control" <?php if (count($_smarty_tpl->tpl_vars['tags']->value) == '0') {?> disabled="disabled"<?php }?>>
                                <?php
$__section_sel_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['tags']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_sel_0_total = $__section_sel_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_sel'] = new Smarty_Variable(array());
if ($__section_sel_0_total !== 0) {
for ($__section_sel_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_sel']->value['index'] = 0; $__section_sel_0_iteration <= $__section_sel_0_total; $__section_sel_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_sel']->value['index']++){
?>
                                    <option value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['tags']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sel']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sel']->value['index'] : null)] ));?>
"><?php echo $_smarty_tpl->tpl_vars['tags']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sel']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sel']->value['index'] : null)];?>
</option>
                                    <?php }} else {
 ?>
                                    <option value=''>None</option>
                                <?php
}
?>
                            </select>
                        </div>
                        <div class="col-sm-4">
                            <input type="submit" class="btn btn-primary" name="restoretag" value="Restore"<?php if (count($_smarty_tpl->tpl_vars['tags']->value) == '0') {?> disabled="disabled"<?php }?>>
                            <input type="submit" class="btn btn-danger" name="removetag" value="Remove"<?php if (count($_smarty_tpl->tpl_vars['tags']->value) == '0') {?> disabled="disabled"<?php }?>>
                        </div>
                    </div>
                </fieldset>
            </div>
            <div class="adminoptionbox clearfix">
                <fieldset class="mb-3 w-100">
                    <legend>Dump files</legend>
                    Dump files archive wiki pages for various usages such as off-line browsing or distribution on optical disks.
                    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>"warning",'title'=>"Warning"));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Warning"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    The HTML files generated may refer to files not included in the dump. Dumps do not include files attached to wiki pages.
                    <?php if ($_smarty_tpl->tpl_vars['isDump']->value) {?><li>Dumping will overwrite the preexisting dump.</li><?php }?>
                    <?php $_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Warning"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                    <input type="submit" class="btn btn-primary btn-sm" name="createdump" value="Create Dump File">
                    <input type="submit" class="btn btn-primary btn-sm" name="downloaddump" value="Download Dump File" <?php if (!$_smarty_tpl->tpl_vars['isDump']->value) {?> disabled="disabled"<?php }?>>
                    <input type="submit" class="btn btn-primary btn-sm" name="removedump" data-target="_blank" value="Remove Dump File" <?php if (!$_smarty_tpl->tpl_vars['isDump']->value) {?> disabled="disabled"<?php }?>>
            </fieldset>
            </div>
            <div class="adminoptionbox clearfix">
                <fieldset class="mb-3 w-100">
                    <legend>Mass replace and page permissions report</legend>
                    <div class="adminoptionbox clearfix">
                        <?php echo smarty_function_button(array('href'=>"tiki-search_replace.php",'_text'=>"Mass search and replace",'_icon_name'=>"exchange-alt",'_type'=>"primary"),$_smarty_tpl);?>

                        <?php echo smarty_function_button(array('href'=>"tiki-report_direct_object_perms.php",'_text'=>"Report wiki pages with direct object permissions",'_icon_name'=>"paperclip",'_type'=>"primary"),$_smarty_tpl);?>

                    </div>
                </fieldset>
            </div>
        <?php $_block_repeat=false;
echo smarty_block_tab(array('name'=>"Tools"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    <?php $_block_repeat=false;
echo smarty_block_tabset(array('name'=>"admin_wiki"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    <?php $_smarty_tpl->_subTemplateRender('file:admin/include_apply_bottom.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</form>
<?php }
}
