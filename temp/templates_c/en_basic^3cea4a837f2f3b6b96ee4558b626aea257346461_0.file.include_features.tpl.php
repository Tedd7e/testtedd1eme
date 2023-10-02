<?php
/* Smarty version 3.1.48, created on 2023-09-29 11:17:38
  from '/home/teddieme/tedd1eme/templates/admin/include_features.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6516a442932ba3_28031924',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3cea4a837f2f3b6b96ee4558b626aea257346461' => 
    array (
      0 => '/home/teddieme/tedd1eme/templates/admin/include_features.tpl',
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
function content_6516a442932ba3_28031924 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/block.remarksbox.php','function'=>'smarty_block_remarksbox',),1=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/function.ticket.php','function'=>'smarty_function_ticket',),2=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/block.tabset.php','function'=>'smarty_block_tabset',),3=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/block.tab.php','function'=>'smarty_block_tab',),4=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/function.preference.php','function'=>'smarty_function_preference',),5=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/function.service.php','function'=>'smarty_function_service',),));
?>


<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>"tip",'title'=>"Tip"));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Tip"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    Please see the <a class='alert-link' target='tikihelp' href='http://doc.tiki.org/Features'>evaluation of each feature</a> on Tiki's developer site.
<?php $_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Tip"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<form class="admin" id="features" name="features" action="tiki-admin.php?page=features" method="post">
    <?php echo smarty_function_ticket(array(),$_smarty_tpl);?>

    <div class="row">
        <div class="form-group col-lg-12 clearfix">
            <?php $_smarty_tpl->_subTemplateRender('file:admin/include_apply_top.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        </div>
    </div>


    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tabset', array('name'=>"admin_features"));
$_block_repeat=true;
echo smarty_block_tabset(array('name'=>"admin_features"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        
        
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tab', array('name'=>"Global features",'key'=>'global'));
$_block_repeat=true;
echo smarty_block_tab(array('name'=>"Global features",'key'=>'global'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <br>

            <fieldset>
                <legend><h4 class="showhide_heading" id="Main_features">  Main features<a href="#Main_features" class="heading-link"><span class="icon icon-link fas fa-link "></span></a></h4> </legend>
                <div class="admin clearfix form-group featurelist">
                    <?php echo smarty_function_preference(array('name'=>'feature_wiki'),$_smarty_tpl);?>

                    <?php echo smarty_function_preference(array('name'=>'feature_file_galleries'),$_smarty_tpl);?>

                    <?php echo smarty_function_preference(array('name'=>'feature_blogs'),$_smarty_tpl);?>

                    <?php echo smarty_function_preference(array('name'=>'feature_articles'),$_smarty_tpl);?>

                    <?php echo smarty_function_preference(array('name'=>'feature_forums'),$_smarty_tpl);?>

                    <?php echo smarty_function_preference(array('name'=>'feature_trackers'),$_smarty_tpl);?>

                    <?php echo smarty_function_preference(array('name'=>'feature_calendar'),$_smarty_tpl);?>

                    <?php echo smarty_function_preference(array('name'=>'feature_search'),$_smarty_tpl);?>

                </div>
            </fieldset>

            <fieldset>
                <legend><h4 class="showhide_heading" id="Secondary_features">Secondary features <a href="#Secondary_features" class="heading-link"><span class="icon icon-link fas fa-link "></span></a></h4></legend>
                <div class="admin clearfix form-group featurelist">
                    <?php echo smarty_function_preference(array('name'=>'feature_categories'),$_smarty_tpl);?>

                    <?php echo smarty_function_preference(array('name'=>'feature_freetags'),$_smarty_tpl);?>

                    <?php echo smarty_function_preference(array('name'=>'feature_polls'),$_smarty_tpl);?>

                    <?php echo smarty_function_preference(array('name'=>'feature_quizzes'),$_smarty_tpl);?>

                    <?php echo smarty_function_preference(array('name'=>'feature_surveys'),$_smarty_tpl);?>

                    <?php echo smarty_function_preference(array('name'=>'feature_newsletters'),$_smarty_tpl);?>

                    <?php echo smarty_function_preference(array('name'=>'feature_shoutbox'),$_smarty_tpl);?>

                    <?php echo smarty_function_preference(array('name'=>'feature_minichat'),$_smarty_tpl);?>

                    <?php echo smarty_function_preference(array('name'=>'feature_live_support'),$_smarty_tpl);?>

                    <?php echo smarty_function_preference(array('name'=>'feature_machine_learning'),$_smarty_tpl);?>

                </div>
            </fieldset>

            <fieldset>
                <legend><h4 class="showhide_heading" id="Administrative_features">Administrative features <a href="#Administrative_features" class="heading-link"><span class="icon icon-link fas fa-link "></span></a></h4></legend>
                <div class="admin clearfix form-group featurelist">
                    <?php echo smarty_function_preference(array('name'=>'feature_stats'),$_smarty_tpl);?>

                    <?php echo smarty_function_preference(array('name'=>'feature_actionlog'),$_smarty_tpl);?>

                    <?php echo smarty_function_preference(array('name'=>'feature_scheduler'),$_smarty_tpl);?>

                    <?php echo smarty_function_preference(array('name'=>'feature_banners'),$_smarty_tpl);?>

                    <?php echo smarty_function_preference(array('name'=>'feature_contribution'),$_smarty_tpl);?>

                    <?php echo smarty_function_preference(array('name'=>'feature_copyright'),$_smarty_tpl);?>

                    <?php echo smarty_function_preference(array('name'=>'feature_comm'),$_smarty_tpl);?>

                    <?php echo smarty_function_preference(array('name'=>'feature_dynamic_content'),$_smarty_tpl);?>

                    <?php echo smarty_function_preference(array('name'=>'feature_perspective'),$_smarty_tpl);?>

                    <?php echo smarty_function_preference(array('name'=>'feature_sefurl'),$_smarty_tpl);?>

                    <?php echo smarty_function_preference(array('name'=>'feature_html_pages'),$_smarty_tpl);?>

                    <?php echo smarty_function_preference(array('name'=>'feature_htmlfeed'),$_smarty_tpl);?>

                    <?php echo smarty_function_preference(array('name'=>'feature_areas'),$_smarty_tpl);?>

                    <?php echo smarty_function_preference(array('name'=>'feature_system_suggestions'),$_smarty_tpl);?>

                    <?php echo smarty_function_preference(array('name'=>'feature_templated_groups'),$_smarty_tpl);?>

                    <legend><h4 class="showhide_heading" id="Watches">Watches <a href="#Watches" class="heading-link"><span class="icon icon-link fas fa-link "></span></a></h4></legend>
                    <div class="adminoptionboxchild">
                        <fieldset>
                            <?php echo smarty_function_preference(array('name'=>'feature_user_watches'),$_smarty_tpl);?>

                            <?php echo smarty_function_preference(array('name'=>'feature_group_watches'),$_smarty_tpl);?>

                            <?php echo smarty_function_preference(array('name'=>'feature_daily_report_watches'),$_smarty_tpl);?>

                            <div class="adminoptionboxchild" id="feature_daily_report_watches_childcontainer">
                                <?php echo smarty_function_preference(array('name'=>'dailyreports_enabled_for_new_users'),$_smarty_tpl);?>

                            </div>
                            <?php echo smarty_function_preference(array('name'=>'feature_user_watches_translations'),$_smarty_tpl);?>

                            <?php echo smarty_function_preference(array('name'=>'feature_user_watches_languages'),$_smarty_tpl);?>

                            <?php echo smarty_function_preference(array('name'=>'feature_groupalert'),$_smarty_tpl);?>

                        </fieldset>
                    </div>
                    <legend><h4 class="showhide_heading" id="Object_Maintainers_and_Freshness">Object Maintainers and Freshness <a href="#Object_Maintainers_and_Freshness" class="heading-link"><span class="icon icon-link fas fa-link "></span></a></h4></legend>
                    <div class="adminoptionboxchild">
                        <fieldset>
                            <?php echo smarty_function_preference(array('name'=>'object_maintainers_enable'),$_smarty_tpl);?>

                            <div class="adminoptionboxchild" id="object_maintainers_enable_childcontainer">
                                <?php echo smarty_function_preference(array('name'=>'object_maintainers_default_update_frequency'),$_smarty_tpl);?>

                            </div>
                        </fieldset>
                    </div>
                </div>
            </fieldset>

            <fieldset>
                <legend><h4 class="showhide_heading" id="Additional_features">Additional features <a href="#Additional_features" class="heading-link"><span class="icon icon-link fas fa-link "></span></a></h4></legend>
                <div class="admin clearfix form-group featurelist">
                    <?php echo smarty_function_preference(array('name'=>'feature_sheet'),$_smarty_tpl);?>

                    <?php echo smarty_function_preference(array('name'=>'feature_directory'),$_smarty_tpl);?>

                    <?php echo smarty_function_preference(array('name'=>'feature_draw'),$_smarty_tpl);?>

                    <div class="adminoptionboxchild" id="feature_draw_childcontainer">
                        <?php echo smarty_function_preference(array('name'=>'feature_draw_hide_buttons'),$_smarty_tpl);?>

                        <?php echo smarty_function_preference(array('name'=>'feature_draw_separate_base_image'),$_smarty_tpl);?>

                        <div class="adminoptionboxchild" id="feature_draw_separate_base_image_childcontainer">
                            <?php echo smarty_function_preference(array('name'=>'feature_draw_in_userfiles'),$_smarty_tpl);?>

                        </div>
                    </div>
                    <div class="adminoptionboxchild">
                        <fieldset>
                            <legend><h4 class="showhide_heading" id="Payment_and_Accounting">Payment and Accounting <a href="#Payment_and_Accounting" class="heading-link"><span class="icon icon-link fas fa-link "></span></a></h4></legend>
                            <?php echo smarty_function_preference(array('name'=>'feature_credits'),$_smarty_tpl);?>

                            <?php echo smarty_function_preference(array('name'=>'feature_accounting'),$_smarty_tpl);?>

                            <?php echo smarty_function_preference(array('name'=>'payment_feature'),$_smarty_tpl);?>

                        </fieldset>
                    </div>
                    <div class="adminoptionboxchild">
                        <fieldset>
                            <legend><h4 class="showhide_heading" id="Mail_and_Sharing">Mail and Sharing <a href="#Mail_and_Sharing" class="heading-link"><span class="icon icon-link fas fa-link "></span></a></h4></legend>
                            <?php echo smarty_function_preference(array('name'=>'feature_socialnetworks'),$_smarty_tpl);?>

                            <?php echo smarty_function_preference(array('name'=>'feature_share'),$_smarty_tpl);?>

                            <?php echo smarty_function_preference(array('name'=>'feature_webmail'),$_smarty_tpl);?>

                            <?php echo smarty_function_preference(array('name'=>'feature_mailin'),$_smarty_tpl);?>

                        </fieldset>
                    </div>
                    <?php echo smarty_function_preference(array('name'=>'feature_docs'),$_smarty_tpl);?>

                    <?php echo smarty_function_preference(array('name'=>'feature_slideshow'),$_smarty_tpl);?>

                    <?php echo smarty_function_preference(array('name'=>'feature_slideshow_pdfexport'),$_smarty_tpl);?>

                    <?php echo smarty_function_preference(array('name'=>'feature_faqs'),$_smarty_tpl);?>

                </div>
                <fieldset class="mb-3 w-100 clearfix featurelist">
                    <legend><h4 class="showhide_heading" id="Progressive_Web_App"> Progressive Web App  <a href="#Progressive_Web_App" class="heading-link"><span class="icon icon-link fas fa-link "></span></a></h4></legend>
                    <?php echo smarty_function_preference(array('name'=>'pwa_feature'),$_smarty_tpl);?>

                    <?php echo smarty_function_preference(array('name'=>'pwa_cache_links'),$_smarty_tpl);?>

                    <div class="adminoptionboxchild" id="pwa_feature_childcontainer">
                        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>"warning",'title'=>"Warning",'close'=>"n"));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Warning",'close'=>"n"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                            <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_sefurl'] == 'y') {?>
                                Search Engine Friendly URL feature needs to be disabled.<br/>
                            <?php }?>
                            PWA feature requires bypassing CSRF Tokens, this represents a security issue.
                        <?php $_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Warning",'close'=>"n"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                    </div>
                </fieldset>
            </fieldset>

            <fieldset>
                <legend><h4 class="showhide_heading" id="Interaction_with_online_services_or_other_software">Interaction with online services or other software <a href="#Interaction_with_online_services_or_other_software" class="heading-link"><span class="icon icon-link fas fa-link "></span></a></h4></legend>
                <div class="admin clearfix featurelist">
                    <?php echo smarty_function_preference(array('name'=>'connect_feature'),$_smarty_tpl);?>

                    <?php echo smarty_function_preference(array('name'=>'feature_kaltura'),$_smarty_tpl);?>

                    <?php echo smarty_function_preference(array('name'=>'zotero_enabled'),$_smarty_tpl);?>

                    <div class="adminoptionboxchild" id="zotero_enabled_childcontainer">
                        <?php if ($_smarty_tpl->tpl_vars['prefs']->value['zotero_client_key'] && $_smarty_tpl->tpl_vars['prefs']->value['zotero_client_secret'] && $_smarty_tpl->tpl_vars['prefs']->value['zotero_group_id']) {?>
                            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>'info','title'=>"Configuration completed"));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>'info','title'=>"Configuration completed"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?><a href="<?php echo smarty_function_service(array('controller'=>'oauth','action'=>'request','provider'=>'zotero'),$_smarty_tpl);?>
">Authenticate with Zotero</a><?php $_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>'info','title'=>"Configuration completed"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                        <?php }?>
                        <?php echo smarty_function_preference(array('name'=>'zotero_client_key'),$_smarty_tpl);?>

                        <?php echo smarty_function_preference(array('name'=>'zotero_client_secret'),$_smarty_tpl);?>

                        <?php echo smarty_function_preference(array('name'=>'zotero_group_id'),$_smarty_tpl);?>

                        <?php echo smarty_function_preference(array('name'=>'zotero_style'),$_smarty_tpl);?>

                    </div>
                    <?php echo smarty_function_preference(array('name'=>'webmonetization_enabled'),$_smarty_tpl);?>

                    <div class="adminoptionboxchild" id="webmonetization_enabled_childcontainer">
                        <?php echo smarty_function_preference(array('name'=>'webmonetization_default_payment_pointer'),$_smarty_tpl);?>

                        <?php echo smarty_function_preference(array('name'=>'webmonetization_all_website'),$_smarty_tpl);?>

                        <?php echo smarty_function_preference(array('name'=>'webmonetization_always_default'),$_smarty_tpl);?>

                        <?php echo smarty_function_preference(array('name'=>'webmonetization_default_paywall_text'),$_smarty_tpl);?>

                    </div>
                </div>
            </fieldset>
        <?php $_block_repeat=false;
echo smarty_block_tab(array('name'=>"Global features",'key'=>'global'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tab', array('name'=>"Interface",'key'=>'interface'));
$_block_repeat=true;
echo smarty_block_tab(array('name'=>"Interface",'key'=>'interface'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <br>
            <fieldset class="mb-3 w-100 clearfix featurelist">
                <legend><h4 class="showhide_heading" id="Ajax"> Ajax  <a href="#Ajax" class="heading-link"><span class="icon icon-link fas fa-link "></span></a></h4></legend>
                <?php echo smarty_function_preference(array('name'=>'feature_ajax'),$_smarty_tpl);?>

                <div class="adminoptionboxchild" id="feature_ajax_childcontainer">
                    <?php echo smarty_function_preference(array('name'=>'ajax_autosave'),$_smarty_tpl);?>

                </div>
            </fieldset>
            <fieldset class="mb-3 w-100 clearfix featurelist">
                <legend><h4 class="showhide_heading" id="jQuery_plugins_and_add-ons"> jQuery plugins and add-ons  <a href="#jQuery_plugins_and_add" class="heading-link"><span class="icon icon-link fas fa-link "></span></a></h4></legend>
                <?php echo smarty_function_preference(array('name'=>'feature_jquery_autocomplete'),$_smarty_tpl);?>

                <?php echo smarty_function_preference(array('name'=>'feature_jquery_media'),$_smarty_tpl);?>

                <?php echo smarty_function_preference(array('name'=>'feature_jquery_reflection'),$_smarty_tpl);?>

                <?php echo smarty_function_preference(array('name'=>'feature_jquery_superfish'),$_smarty_tpl);?>

                <div class="adminoptionbox">
                    <?php echo smarty_function_preference(array('name'=>'jquery_smartmenus_enable'),$_smarty_tpl);?>

                    <div class="adminoptionboxchild" id="jquery_smartmenus_enable_childcontainer">
                        <?php echo smarty_function_preference(array('name'=>'jquery_smartmenus_collapsible_behavior'),$_smarty_tpl);?>

                        <?php echo smarty_function_preference(array('name'=>'jquery_smartmenus_open_close_click'),$_smarty_tpl);?>

                    </div>
                </div>
                <?php echo smarty_function_preference(array('name'=>'feature_jquery_tooltips'),$_smarty_tpl);?>

                <?php echo smarty_function_preference(array('name'=>'feature_jquery_tagcanvas'),$_smarty_tpl);?>

                <?php echo smarty_function_preference(array('name'=>'feature_jquery_ui_theme'),$_smarty_tpl);?>

                <?php echo smarty_function_preference(array('name'=>'feature_jquery_ui'),$_smarty_tpl);?>

                <?php echo smarty_function_preference(array('name'=>'feature_jquery_validation'),$_smarty_tpl);?>

                <?php echo smarty_function_preference(array('name'=>'feature_jquery_zoom'),$_smarty_tpl);?>

                <div class="adminoptionbox">
                    <?php echo smarty_function_preference(array('name'=>'jquery_select2'),$_smarty_tpl);?>

                    <div class="adminoptionboxchild">
                        <?php echo smarty_function_preference(array('name'=>'jquery_select2_sortable','label'=>"Select2 Sortable Multiselect"),$_smarty_tpl);?>

                    </div>
                </div>
                <?php echo smarty_function_preference(array('name'=>'jquery_fitvidjs'),$_smarty_tpl);?>

                <div class="adminoptionboxchild" id="jquery_fitvidjs_childcontainer">
                    <?php echo smarty_function_preference(array('name'=>'jquery_fitvidjs_additional_domains'),$_smarty_tpl);?>

                </div>
                <?php echo smarty_function_preference(array('name'=>'jquery_timeago'),$_smarty_tpl);?>

                <?php echo smarty_function_preference(array('name'=>'jquery_jqdoublescroll'),$_smarty_tpl);?>

                <?php echo smarty_function_preference(array('name'=>'allowImageLazyLoad'),$_smarty_tpl);?>

                <?php echo smarty_function_preference(array('name'=>'tiki_prefix_css'),$_smarty_tpl);?>

                <div class="adminoptionboxchild">
                    <fieldset>
                        <legend><h4 class="showhide_heading" id="Experimental">Experimental <a href="#Experimental" class="heading-link"><span class="icon icon-link fas fa-link "></span></a></h4></legend>
                        <?php echo smarty_function_preference(array('name'=>'feature_jquery_carousel'),$_smarty_tpl);?>

                        <?php echo smarty_function_preference(array('name'=>'feature_jquery_tablesorter'),$_smarty_tpl);?>

                        <?php echo smarty_function_preference(array('name'=>'vuejs_enable'),$_smarty_tpl);?>

                        <div class="adminoptionboxchild" id="vuejs_enable_childcontainer">
                            <?php echo smarty_function_preference(array('name'=>'vuejs_always_load'),$_smarty_tpl);?>

                            <?php echo smarty_function_preference(array('name'=>'vuejs_build_mode'),$_smarty_tpl);?>

                            <?php echo smarty_function_preference(array('name'=>'tracker_field_rules'),$_smarty_tpl);?>

                        </div>
                    </fieldset>
                </div>
            </fieldset>

            <fieldset class="mb-3 w-100 clearfix featurelist">
                <legend><h4 class="showhide_heading" id="Mobile"> Mobile  <a href="#Mobile" class="heading-link"><span class="icon icon-link fas fa-link "></span></a></h4></legend>
                <?php echo smarty_function_preference(array('name'=>'mobile_feature'),$_smarty_tpl);?>


                    <div class="adminoptionboxchild" id="mobile_feature_childcontainer">
                        <?php echo smarty_function_preference(array('name'=>'mobile_perspectives'),$_smarty_tpl);?>

                    </div>
            </fieldset>

        <?php $_block_repeat=false;
echo smarty_block_tab(array('name'=>"Interface",'key'=>'interface'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tab', array('name'=>"Programmer",'key'=>'programmer'));
$_block_repeat=true;
echo smarty_block_tab(array('name'=>"Programmer",'key'=>'programmer'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <br>
            <div class="admin clearfix featurelist">
                <?php echo smarty_function_preference(array('name'=>'feature_integrator'),$_smarty_tpl);?>

                <?php echo smarty_function_preference(array('name'=>'feature_xmlrpc'),$_smarty_tpl);?>

                <?php echo smarty_function_preference(array('name'=>'feature_debug_console'),$_smarty_tpl);?>

                <?php echo smarty_function_preference(array('name'=>'feature_tikitests'),$_smarty_tpl);?>

                <?php echo smarty_function_preference(array('name'=>'disableJavascript'),$_smarty_tpl);?>

                <?php echo smarty_function_preference(array('name'=>'javascript_assume_enabled'),$_smarty_tpl);?>

                <?php echo smarty_function_preference(array('name'=>'smarty_compilation'),$_smarty_tpl);?>

                <?php echo smarty_function_preference(array('name'=>'feature_webservices'),$_smarty_tpl);?>

                <?php echo smarty_function_preference(array('name'=>'feature_dummy'),$_smarty_tpl);?>

            </div>

            <div class="admin clearfix featurelist">
                <fieldset>
                    <legend><h4 class="showhide_heading" id="Logging_and_Reporting">Logging and Reporting <a href="#Logging_and_Reporting" class="heading-link"><span class="icon icon-link fas fa-link "></span></a></h4></legend>
                    <div class="adminoptionbox">
                        <?php echo smarty_function_preference(array('name'=>'error_reporting_level'),$_smarty_tpl);?>

                        <div class="adminoptionboxchild">
                            <?php echo smarty_function_preference(array('name'=>'error_reporting_adminonly','label'=>"Visible to admin only"),$_smarty_tpl);?>

                            <?php echo smarty_function_preference(array('name'=>'smarty_notice_reporting','label'=>"Include Smarty notices"),$_smarty_tpl);?>

                        </div>
                    </div>

                    <?php echo smarty_function_preference(array('name'=>'log_mail'),$_smarty_tpl);?>

                    <?php echo smarty_function_preference(array('name'=>'log_sql'),$_smarty_tpl);?>

                    <div class="adminoptionboxchild" id="log_sql_childcontainer">
                        <?php echo smarty_function_preference(array('name'=>'log_sql_perf_min'),$_smarty_tpl);?>

                    </div>
                    <?php echo smarty_function_preference(array('name'=>'log_tpl'),$_smarty_tpl);?>

                </fieldset>
            </div>

            <div class="table">
                <fieldset>
                    <legend><h4 class="showhide_heading" id="Custom_Code">Custom Code <a href="#Custom_Code" class="heading-link"><span class="icon icon-link fas fa-link "></span></a></h4></legend>
                    <?php echo smarty_function_preference(array('name'=>"header_custom_js"),$_smarty_tpl);?>

                    <?php echo smarty_function_preference(array('name'=>'smarty_security'),$_smarty_tpl);?>

                </fieldset>
            </div>
        <?php $_block_repeat=false;
echo smarty_block_tab(array('name'=>"Programmer",'key'=>'programmer'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    <?php $_block_repeat=false;
echo smarty_block_tabset(array('name'=>"admin_features"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    <?php $_smarty_tpl->_subTemplateRender('file:admin/include_apply_bottom.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</form>
<?php }
}
