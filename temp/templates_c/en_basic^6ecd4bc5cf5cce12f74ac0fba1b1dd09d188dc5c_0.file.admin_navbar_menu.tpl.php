<?php
/* Smarty version 3.1.48, created on 2023-09-29 11:17:25
  from '/home/teddieme/tedd1eme/templates/admin/admin_navbar_menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6516a435ea6056_76626611',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6ecd4bc5cf5cce12f74ac0fba1b1dd09d188dc5c' => 
    array (
      0 => '/home/teddieme/tedd1eme/templates/admin/admin_navbar_menu.tpl',
      1 => 1689085248,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6516a435ea6056_76626611 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/function.service.php','function'=>'smarty_function_service',),1=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/function.bootstrap_modal.php','function'=>'smarty_function_bootstrap_modal',),));
?>

<ul class="nav navbar-nav mr-auto">
    <li class="nav-item dropdown  mr-1">
        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Access</a>
        <ul class="dropdown-menu">
            <?php if ($_smarty_tpl->tpl_vars['tiki_p_admin']->value == "y" && $_smarty_tpl->tpl_vars['tiki_p_admin_users']->value == "y") {?>
                <a class="dropdown-item" href="tiki-adminusers.php">Users</a>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['tiki_p_admin']->value == "y") {?>
                <a class="dropdown-item" href="tiki-admingroups.php">Groups</a>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['tiki_p_admin']->value == "y") {?>
                <a class="dropdown-item" href="tiki-objectpermissions.php">Permissions</a>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_banning'] == "y" && $_smarty_tpl->tpl_vars['tiki_p_admin_banning']->value == "y") {?>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="tiki-admin_banning.php">Banning</a>
            <?php }?>
        </ul>
    </li>
    <li class="nav-item dropdown mr-1">
        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Content</a>
        <ul class="dropdown-menu">
            <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_articles'] == "y") {?>
                <a class="dropdown-item" href="tiki-list_articles.php">Articles</a>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_banners'] == "y" && $_smarty_tpl->tpl_vars['tiki_p_admin_banners']->value == "y") {?>
                <a class="dropdown-item" href="tiki-list_banners.php">Banners</a>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_blogs'] == "y") {?>
                <a class="dropdown-item" href="tiki-list_blogs.php">Blogs</a>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_calendar'] == "y") {?>
                <a class="dropdown-item" href="tiki-admin_calendars.php">Calendars</a>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_categories'] == "y") {?>
                <a class="dropdown-item" href="tiki-admin_categories.php">Categories</a>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['tiki_p_admin_comments']->value == "y") {?>
                <a class="dropdown-item" href="tiki-list_comments.php">Comments</a>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_directory'] == "y" && $_smarty_tpl->tpl_vars['tiki_p_admin_directory_cats']->value == "y") {?>
                <a class="dropdown-item" href="tiki-directory_admin.php">Directories</a>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['tiki_p_admin_rssmodules']->value == "y") {?>
                <a class="dropdown-item" href="tiki-admin_rssmodules.php">External Feeds</a>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_file_galleries'] == "y") {?>
                <a class="dropdown-item" href="tiki-list_file_gallery.php">Files</a>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_faqs'] == "y" && $_smarty_tpl->tpl_vars['tiki_p_view_faqs']->value == "y") {?>
                <a class="dropdown-item" href="tiki-list_faqs.php">FAQs</a>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_forums'] == "y") {?>
                <a class="dropdown-item" href="tiki-admin_forums.php">Forums</a>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_html_pages'] == "y" && $_smarty_tpl->tpl_vars['tiki_p_edit_html_pages']->value == "y") {?>
                <a class="dropdown-item" href="tiki-admin_html_pages.php">HTML Pages</a>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_newsletters'] == "y" && $_smarty_tpl->tpl_vars['tiki_p_admin_newsletters']->value == "y") {?>
                <a class="dropdown-item" href="tiki-admin_newsletters.php">Newsletters</a>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_polls'] == "y" && $_smarty_tpl->tpl_vars['tiki_p_admin_polls']->value == "y") {?>
                <a class="dropdown-item" href="tiki-admin_polls.php">Polls</a>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_quizzes'] == "y" && $_smarty_tpl->tpl_vars['tiki_p_admin_quizzes']->value == "y") {?>
                <a class="dropdown-item" href="tiki-edit_quiz.php">Quizzes</a>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_sheet'] == "y" && $_smarty_tpl->tpl_vars['tiki_p_view_sheet']->value == "y") {?>
                <a class="dropdown-item" href="tiki-sheets.php">Spreadsheets</a>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_surveys'] == "y" && $_smarty_tpl->tpl_vars['tiki_p_admin_surveys']->value == "y") {?>
                <a class="dropdown-item" href="tiki-admin_surveys.php">Surveys</a>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_freetags'] == "y") {?>
                <a class="dropdown-item" href="tiki-browse_freetags.php">Tags</a>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_trackers'] == "y" && $_smarty_tpl->tpl_vars['tiki_p_list_trackers']->value == "y") {?>
                <a class="dropdown-item" href="tiki-list_trackers.php">Trackers</a>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki'] == "y") {?>
                <a class="dropdown-item" href="tiki-listpages.php">Wiki Pages</a>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki'] == "y" && $_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_structure'] == "y" && $_smarty_tpl->tpl_vars['tiki_p_view']->value == "y") {?>
                <a class="dropdown-item" href="tiki-admin_structures.php">Wiki Structures</a>
            <?php }?>
        </ul>
    </li>
    <li class="nav-item dropdown mr-1">
        <a href="#" class="nav-link dropdown-toggle mr-2" data-toggle="dropdown">System</a>
        <ul class="dropdown-menu">
            <?php if ($_smarty_tpl->tpl_vars['tiki_p_admin']->value == "y") {?>
                <a class="dropdown-item" href="<?php echo smarty_function_service(array('controller'=>'managestream','action'=>'list'),$_smarty_tpl);?>
">Activity Rules</a>
            <?php }?>
            <?php if (($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_templates'] == "y" || $_smarty_tpl->tpl_vars['prefs']->value['feature_cms_templates'] == "y" || $_smarty_tpl->tpl_vars['prefs']->value['feature_file_galleries_templates'] == 'y') && $_smarty_tpl->tpl_vars['tiki_p_edit_content_templates']->value == "y") {?>
                <a class="dropdown-item" href="tiki-admin_content_templates.php ">Content Templates</a>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_contribution'] == "y" && $_smarty_tpl->tpl_vars['tiki_p_admin_contribution']->value == "y") {?>
                <a class="dropdown-item" href="tiki-admin_contribution.php">Contributions</a>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_dynamic_content'] == "y" && $_smarty_tpl->tpl_vars['tiki_p_admin_dynamic']->value == "y") {?>
                <a class="dropdown-item" href="tiki-list_contents.php">Dynamic Content</a>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_hotwords'] == "y") {?>
                <a class="dropdown-item" href="tiki-admin_hotwords.php">Hotwords</a>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['prefs']->value['lang_use_db'] == "y" && $_smarty_tpl->tpl_vars['tiki_p_edit_languages']->value == "y") {?>
                <a class="dropdown-item" href="tiki-edit_languages.php">Languages</a>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_live_support'] == "y" && $_smarty_tpl->tpl_vars['tiki_p_live_support_admin']->value == "y") {?>
                <a class="dropdown-item" href="tiki-live_support_admin.php">Live Support</a>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_mailin'] == "y" && $_smarty_tpl->tpl_vars['tiki_p_admin_mailin']->value == "y") {?>
                <a class="dropdown-item" href="tiki-admin_mailin.php">Mail-in</a>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['tiki_p_admin_notifications']->value == "y") {?>
                <a class="dropdown-item" href="tiki-admin_notifications.php">Mail Notifications</a>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['tiki_p_edit_menu']->value == "y") {?>
                <a class="dropdown-item" href="tiki-admin_menus.php">Menus</a>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['tiki_p_admin_modules']->value == "y") {?>
                <a class="dropdown-item" href="tiki-admin_modules.php">Modules</a>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_perspective'] == "y") {?>
                <a class="dropdown-item" href="tiki-edit_perspective.php">Perspectives</a>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_shoutbox'] == "y" && $_smarty_tpl->tpl_vars['tiki_p_admin_shoutbox']->value == "y") {?>
                <a class="dropdown-item" href="tiki-shoutbox.php">Shoutbox</a>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['prefs']->value['payment_feature'] == "y") {?>
                <a class="dropdown-item" href="tiki-admin_credits.php">User Credits</a>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_theme_control'] == "y" && $_smarty_tpl->tpl_vars['tiki_p_admin']->value == "y") {?>
                <a class="dropdown-item" href="tiki-theme_control.php">Theme Control</a>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['tiki_p_admin_toolbars']->value == "y") {?>
                <a class="dropdown-item" href="tiki-admin_toolbars.php">Toolbars</a>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['tiki_p_admin']->value == "y") {?>
                <a class="dropdown-item" href="tiki-admin_transitions.php">Transitions</a>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['prefs']->value['workspace_ui'] == "y" && $_smarty_tpl->tpl_vars['tiki_p_admin']->value == "y") {?>
                <a class="dropdown-item" href="tiki-ajax_services.php?controller=workspace&action=list_templates">Workspace Templates</a>
            <?php }?>
            <div class="dropdown-divider"></div>
            <?php if ($_smarty_tpl->tpl_vars['tiki_p_plugin_approve']->value == "y") {?>
                <a class="dropdown-item" href="tiki-plugins.php">Plugin Approval</a>
            <?php }?>
        </ul>
    </li>
    <li class="nav-item dropdown mr-1">
        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Tools</a>
        <ul class="dropdown-menu">
            <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_actionlog'] == "y" && $_smarty_tpl->tpl_vars['tiki_p_view_actionlog']->value) {?>
                <a class="dropdown-item" href="tiki-admin_actionlog.php">Action Log</a>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['tiki_p_edit_cookies']->value == "y") {?>
                <a class="dropdown-item" href="tiki-admin_cookies.php">Cookies</a>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_sefurl_routes'] == "y" && $_smarty_tpl->tpl_vars['tiki_p_admin']->value) {?>
                <a class="dropdown-item" href="tiki-admin_routes.php">Custom Routes</a>
            <?php }?>
            <a class="dropdown-item" href="tiki-admin_dsn.php">DSN/Content Authentication</a>
            <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_editcss'] == "y" && $_smarty_tpl->tpl_vars['tiki_p_create_css']->value == "y") {?>
                <a class="dropdown-item" href="tiki-edit_css.php">Edit CSS</a>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_view_tpl'] == "y" && $_smarty_tpl->tpl_vars['prefs']->value['feature_edit_templates'] == "y" && $_smarty_tpl->tpl_vars['tiki_p_edit_templates']->value == "y") {?>
                <a class="dropdown-item" href="tiki-edit_templates.php">Edit TPL</a>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['prefs']->value['cachepages'] == "y" && $_smarty_tpl->tpl_vars['tiki_p_admin']->value == "y") {?>
                <a class="dropdown-item" href="tiki-list_cache.php">External Pages Cache</a>
            <?php }?>
            <a class="dropdown-item" href="tiki-admin_external_wikis.php">External Wikis</a>
            <?php if ($_smarty_tpl->tpl_vars['tiki_p_admin_importer']->value == "y") {?>
                <a class="dropdown-item" href="tiki-importer.php">Importer</a>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_integrator'] == "y" && $_smarty_tpl->tpl_vars['tiki_p_admin_integrator']->value == "y") {?>
                <a class="dropdown-item" href="tiki-admin_integrator.php">Integrator</a>
            <?php }?>
            <a class="dropdown-item" href="tiki-phpinfo.php">PhpInfo</a>
            <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_referer_stats'] == "y" && $_smarty_tpl->tpl_vars['tiki_p_view_referer_stats']->value == "y") {?>
                <a class="dropdown-item" href="tiki-referer_stats.php">Referer Statistics</a>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_trackers'] == "y" && $_smarty_tpl->tpl_vars['tiki_p_admin']->value == "y") {?>
                <a class="dropdown-item" href="tiki-admin_orphaned.php">Orphaned Field Names</a>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_trackers'] == "y" && $_smarty_tpl->tpl_vars['tiki_p_admin']->value == "y") {?>
                <a class="dropdown-item" href="tiki-pluginlist_experiment.php">Plugin List Test</a>
            <?php }?>
            <a role="link" class="dropdown-item" href="<?php echo smarty_function_bootstrap_modal(array('controller'=>'search','action'=>'rebuild'),$_smarty_tpl);?>
">Rebuild Index</a>
            <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_search_stats'] == "y" && $_smarty_tpl->tpl_vars['tiki_p_admin']->value == "y") {?>
                <a class="dropdown-item" href="tiki-search_stats.php">Search Statistics</a>
            <?php }?>
            <a class="dropdown-item" href="tiki-admin_security.php">Security Admin</a>
            <a class="dropdown-item" href="tiki-check.php">Server Check</a>
            <a class="dropdown-item" href="tiki-admin_sync.php">Synchronize Dev</a>
            <?php if ($_smarty_tpl->tpl_vars['tiki_p_clean_cache']->value == "y") {?>
                <a class="dropdown-item" href="tiki-admin_system.php">System Cache</a>
            <?php }?>
            <a class="dropdown-item" href="tiki-syslog.php">System Logs</a>
            <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_scheduler'] == "y" && $_smarty_tpl->tpl_vars['tiki_p_admin']->value) {?>
                <a class="dropdown-item" href="tiki-admin_schedulers.php">Scheduler</a>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['prefs']->value['tiki_monitor_performance'] == 'y') {?>
                <a class="dropdown-item" href="tiki-performance_stats.php">Performance</a>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['prefs']->value['sitemap_enable'] == "y" && $_smarty_tpl->tpl_vars['tiki_p_admin']->value) {?>
                <a class="dropdown-item" href="tiki-admin_sitemap.php">Sitemap</a>
            <?php }?>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="tiki-wizard_admin.php">Wizards</a>
        </ul>
    </li>
</ul>
<?php }
}
