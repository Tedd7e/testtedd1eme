<?php
/* Smarty version 3.1.48, created on 2023-09-29 11:17:39
  from '/home/teddieme/tedd1eme/templates/admin/include_general.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6516a443aeb0f3_91510423',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c75c82335cf307cd18d4a0aea511b545ab1da144' => 
    array (
      0 => '/home/teddieme/tedd1eme/templates/admin/include_general.tpl',
      1 => 1689085248,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/include_apply_top.tpl' => 1,
    'file:admin/version_check.tpl' => 1,
    'file:admin/include_apply_bottom.tpl' => 1,
  ),
),false)) {
function content_6516a443aeb0f3_91510423 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/function.ticket.php','function'=>'smarty_function_ticket',),1=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/function.button.php','function'=>'smarty_function_button',),2=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/block.tabset.php','function'=>'smarty_block_tabset',),3=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/block.tab.php','function'=>'smarty_block_tab',),4=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/function.preference.php','function'=>'smarty_function_preference',),5=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/block.remarksbox.php','function'=>'smarty_block_remarksbox',),6=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/function.help.php','function'=>'smarty_function_help',),7=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/modifier.tiki_long_date.php','function'=>'smarty_modifier_tiki_long_date',),8=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/modifier.tiki_short_date.php','function'=>'smarty_modifier_tiki_short_date',),9=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/modifier.tiki_long_time.php','function'=>'smarty_modifier_tiki_long_time',),10=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/modifier.tiki_short_time.php','function'=>'smarty_modifier_tiki_short_time',),));
?>

<form action="tiki-admin.php?page=general" class="admin" method="post">
    <?php echo smarty_function_ticket(array(),$_smarty_tpl);?>

    <div class="t_navbar mb-4 clearfix">
        <?php echo smarty_function_button(array('_class'=>"btn btn-link tips",'_type'=>"text",'href'=>"tiki-install.php",'_icon_name'=>"database",'_text'=>"Tiki Installer",'_title'=>"Reset or upgrade your database"),$_smarty_tpl);?>

        <?php echo smarty_function_button(array('_class'=>"btn btn-link tips",'_type'=>"text",'href'=>"tiki-admin_menus.php",'_icon_name'=>"menu",'_text'=>"Menus",'_title'=>"Create and edit menus"),$_smarty_tpl);?>

        <?php echo smarty_function_button(array('_class'=>"btn btn-link tips",'_type'=>"text",'href'=>"tiki-check.php",'_icon_name'=>"heartbeat",'_text'=>"Server Fitness",'_title'=>"Check if your server meets the requirements for running Tiki"),$_smarty_tpl);?>

        <?php echo smarty_function_button(array('_class'=>"btn-sm tips",'_type'=>"secondary",'href'=>"tiki-admin.php?page=general&amp;forcecheck=1",'_icon_name'=>"search",'_text'=>"Check for Updates Now",'_title'=>"|Check if a new Tiki version is available"),$_smarty_tpl);?>

        <?php $_smarty_tpl->_subTemplateRender('file:admin/include_apply_top.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tabset', array('name'=>"admin_general"));
$_block_repeat=true;
echo smarty_block_tabset(array('name'=>"admin_general"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tab', array('name'=>"General Preferences"));
$_block_repeat=true;
echo smarty_block_tab(array('name'=>"General Preferences"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <br>
            <fieldset>
                <legend>Release check</legend>
                <?php $_smarty_tpl->_subTemplateRender('file:admin/version_check.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            </fieldset>
            <fieldset>
                <legend>Site identity</legend>
                <?php echo smarty_function_preference(array('name'=>'server_domain'),$_smarty_tpl);?>

                <?php echo smarty_function_preference(array('name'=>'browsertitle'),$_smarty_tpl);?>

                <?php echo smarty_function_preference(array('name'=>'fallbackBaseUrl'),$_smarty_tpl);?>

                <?php echo smarty_function_preference(array('name'=>'site_title_location'),$_smarty_tpl);?>

                <?php echo smarty_function_preference(array('name'=>'site_title_breadcrumb'),$_smarty_tpl);?>

                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>"info",'title'=>"Themes"));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>"info",'title'=>"Themes"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    Go to the <a href="tiki-admin.php?page=look" class="alert-link">Look & Feel</a> section for additional site customization preferences.
                <?php $_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>"info",'title'=>"Themes"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            </fieldset>
            <fieldset>
                <legend>Mail</legend>
                <?php echo smarty_function_preference(array('name'=>'sender_email'),$_smarty_tpl);?>

                <?php echo smarty_function_preference(array('name'=>'sender_name'),$_smarty_tpl);?>

                <?php echo smarty_function_preference(array('name'=>'default_mail_charset'),$_smarty_tpl);?>

                <?php echo smarty_function_preference(array('name'=>'mail_crlf'),$_smarty_tpl);?>

                <?php echo smarty_function_preference(array('name'=>'mail_apply_css'),$_smarty_tpl);?>

                <?php echo smarty_function_preference(array('name'=>'zend_mail_handler'),$_smarty_tpl);?>

                <div class="adminoptionboxchild zend_mail_handler_childcontainer amazonSes">
                    <?php echo smarty_function_preference(array('name'=>'zend_mail_amazon_ses_key'),$_smarty_tpl);?>

                    <?php echo smarty_function_preference(array('name'=>'zend_mail_amazon_ses_secret'),$_smarty_tpl);?>

                    <?php echo smarty_function_preference(array('name'=>'zend_mail_amazon_ses_region'),$_smarty_tpl);?>

                    <?php echo smarty_function_preference(array('name'=>'zend_mail_amazon_ses_version'),$_smarty_tpl);?>

                </div>
                <div class="adminoptionboxchild zend_mail_handler_childcontainer elasticEmail">
                    <?php echo smarty_function_preference(array('name'=>'zend_mail_elastic_email_username'),$_smarty_tpl);?>

                    <?php echo smarty_function_preference(array('name'=>'zend_mail_elastic_email_key'),$_smarty_tpl);?>

                </div>
                <div class="adminoptionboxchild zend_mail_handler_childcontainer mailgun">
                    <?php echo smarty_function_preference(array('name'=>'zend_mail_mailgun_domain'),$_smarty_tpl);?>

                    <?php echo smarty_function_preference(array('name'=>'zend_mail_mailgun_key'),$_smarty_tpl);?>

                    <?php echo smarty_function_preference(array('name'=>'zend_mail_mailgun_api_endpoint'),$_smarty_tpl);?>

                </div>
                <div class="adminoptionboxchild zend_mail_handler_childcontainer mandrill">
                    <?php echo smarty_function_preference(array('name'=>'zend_mail_mandrill_key'),$_smarty_tpl);?>

                </div>
                <div class="adminoptionboxchild zend_mail_handler_childcontainer postage">
                    <?php echo smarty_function_preference(array('name'=>'zend_mail_postage_key'),$_smarty_tpl);?>

                </div>
                <div class="adminoptionboxchild zend_mail_handler_childcontainer postmark">
                    <?php echo smarty_function_preference(array('name'=>'zend_mail_postmark_key'),$_smarty_tpl);?>

                </div>
                <div class="adminoptionboxchild zend_mail_handler_childcontainer sendGrid">
                    <?php echo smarty_function_preference(array('name'=>'zend_mail_send_grid_username'),$_smarty_tpl);?>

                    <?php echo smarty_function_preference(array('name'=>'zend_mail_send_grid_key'),$_smarty_tpl);?>

                </div>
                <div class="adminoptionboxchild zend_mail_handler_childcontainer sparkPost">
                    <?php echo smarty_function_preference(array('name'=>'zend_mail_spark_post_key'),$_smarty_tpl);?>

                </div>
                <div class="adminoptionboxchild zend_mail_handler_childcontainer smtp">
                    <?php echo smarty_function_preference(array('name'=>'zend_mail_smtp_server'),$_smarty_tpl);?>

                    <?php echo smarty_function_preference(array('name'=>'zend_mail_smtp_auth'),$_smarty_tpl);?>

                    <div class="adminoptionboxchild zend_mail_smtp_auth_childcontainer login plain crammd5">
                        <p>These values will be stored in plain text in the database:</p>
                        <?php echo smarty_function_preference(array('name'=>'zend_mail_smtp_user'),$_smarty_tpl);?>

                        <?php echo smarty_function_preference(array('name'=>'zend_mail_smtp_pass'),$_smarty_tpl);?>

                    </div>
                    <?php echo smarty_function_preference(array('name'=>'zend_mail_smtp_port'),$_smarty_tpl);?>

                    <?php echo smarty_function_preference(array('name'=>'zend_mail_smtp_security'),$_smarty_tpl);?>

                    <?php echo smarty_function_preference(array('name'=>'zend_http_sslverifypeer'),$_smarty_tpl);?>

                    <?php echo smarty_function_preference(array('name'=>'zend_mail_smtp_helo'),$_smarty_tpl);?>

                    <?php echo smarty_function_preference(array('name'=>'zend_mail_queue'),$_smarty_tpl);?>

                    <?php echo smarty_function_preference(array('name'=>'zend_mail_redirect'),$_smarty_tpl);?>

                </div>
                <div class="adminoptionbox form-group row clearfix">
                    <label for="testMail" class="col-md-4 col-form-label">Email to send a test mail</label>
                    <div class="col-md-8">
                        <input type="text" name="testMail" id="testMail" class="form-control">
                    </div>
                </div>
                <?php echo smarty_function_preference(array('name'=>'email_footer'),$_smarty_tpl);?>

                <?php echo smarty_function_preference(array('name'=>'mail_template_custom_text'),$_smarty_tpl);?>

            </fieldset>
            <fieldset>
                <legend>Newsletter</legend>
                <?php echo smarty_function_preference(array('name'=>'newsletter_throttle'),$_smarty_tpl);?>

                <div class="adminoptionboxchild" id="newsletter_throttle_childcontainer">
                    <?php echo smarty_function_preference(array('name'=>'newsletter_pause_length'),$_smarty_tpl);?>

                    <?php echo smarty_function_preference(array('name'=>'newsletter_batch_size'),$_smarty_tpl);?>

                </div>
                <?php echo smarty_function_preference(array('name'=>'newsletter_external_client'),$_smarty_tpl);?>

            </fieldset>
            <fieldset>
                <legend>Logging and reporting</legend>
                <div class="adminoptionbox">
                    <?php echo smarty_function_preference(array('name'=>'error_reporting_level'),$_smarty_tpl);?>

                    <div class="adminoptionboxchild">
                        <?php echo smarty_function_preference(array('name'=>'error_reporting_adminonly','label'=>"Visible to admin only"),$_smarty_tpl);?>

                        <?php echo smarty_function_preference(array('name'=>'smarty_notice_reporting','label'=>"Include Smarty notices"),$_smarty_tpl);?>

                    </div>
                </div>
                <?php echo smarty_function_preference(array('name'=>'disableJavascript'),$_smarty_tpl);?>

                <?php echo smarty_function_preference(array('name'=>'log_mail'),$_smarty_tpl);?>

                <?php echo smarty_function_preference(array('name'=>'log_sql'),$_smarty_tpl);?>

                <div class="adminoptionboxchild" id="log_sql_childcontainer">
                    <?php echo smarty_function_preference(array('name'=>'log_sql_perf_min'),$_smarty_tpl);?>

                </div>
            </fieldset>
            <fieldset>
                <legend>Error Tracking</legend>
                <div class="adminoptionbox">
                    <?php echo smarty_function_preference(array('name'=>'error_tracking_dsn'),$_smarty_tpl);?>

                    <div class="adminoptionboxchild">
                        <?php echo smarty_function_preference(array('name'=>'error_tracking_enabled_php'),$_smarty_tpl);?>

                        <?php echo smarty_function_preference(array('name'=>'error_tracking_enabled_js'),$_smarty_tpl);?>

                    </div>
                </div>
            </fieldset>
            <fieldset>
                <legend>Web Cron</legend>
                <div class="adminoptionbox">
                    <?php echo smarty_function_preference(array('name'=>'webcron_enabled'),$_smarty_tpl);?>

                    <div class="adminoptionboxchild" id="webcron_enabled_childcontainer">
                        <?php echo smarty_function_preference(array('name'=>'webcron_type'),$_smarty_tpl);?>

                        <?php echo smarty_function_preference(array('name'=>'webcron_run_interval'),$_smarty_tpl);?>

                        <?php echo smarty_function_preference(array('name'=>'webcron_token'),$_smarty_tpl);?>

                        <?php if ($_smarty_tpl->tpl_vars['prefs']->value['webcron_type'] != 'js') {?>
                            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>"note",'title'=>"Call Web Cron URL"));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>"note",'title'=>"Call Web Cron URL"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                            <?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
cron.php?token=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['prefs']->value['webcron_token'],'url' ));?>

                            <?php $_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>"note",'title'=>"Call Web Cron URL"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                        <?php }?>
                    </div>
                </div>
            </fieldset>
            <fieldset id="Scheduler">
                <legend>Scheduler Settings</legend>
                <?php echo smarty_function_preference(array('name'=>'feature_scheduler'),$_smarty_tpl);?>

                <?php echo smarty_function_preference(array('name'=>'scheduler_delay'),$_smarty_tpl);?>

                <?php echo smarty_function_preference(array('name'=>'scheduler_stalled_timeout'),$_smarty_tpl);?>

                <?php echo smarty_function_preference(array('name'=>'scheduler_notify_on_stalled'),$_smarty_tpl);?>

                <div class="adminoptionboxchild" id="scheduler_notify_on_stalled_childcontainer">
                    <?php echo smarty_function_preference(array('name'=>'scheduler_users_to_notify_on_stalled'),$_smarty_tpl);?>

                </div>
                <?php echo smarty_function_preference(array('name'=>'scheduler_healing_timeout'),$_smarty_tpl);?>

                <?php echo smarty_function_preference(array('name'=>'scheduler_notify_on_healing'),$_smarty_tpl);?>

                <div class="adminoptionboxchild" id="scheduler_notify_on_healing_childcontainer">
                    <?php echo smarty_function_preference(array('name'=>'scheduler_users_to_notify_on_healed'),$_smarty_tpl);?>

                </div>
                <?php echo smarty_function_preference(array('name'=>'scheduler_keep_logs'),$_smarty_tpl);?>

            </fieldset>
        <?php $_block_repeat=false;
echo smarty_block_tab(array('name'=>"General Preferences"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tab', array('name'=>"General Settings"));
$_block_repeat=true;
echo smarty_block_tab(array('name'=>"General Settings"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <br>
            <fieldset>
                <legend>Server</legend>
                <?php echo smarty_function_preference(array('name'=>'tmpDir'),$_smarty_tpl);?>

                <?php echo smarty_function_preference(array('name'=>'use_proxy'),$_smarty_tpl);?>

                <div class="adminoptionboxchild" id="use_proxy_childcontainer">
                    <?php echo smarty_function_preference(array('name'=>'proxy_host'),$_smarty_tpl);?>

                    <?php echo smarty_function_preference(array('name'=>'proxy_port'),$_smarty_tpl);?>

                    <?php echo smarty_function_preference(array('name'=>'proxy_user'),$_smarty_tpl);?>

                    <?php echo smarty_function_preference(array('name'=>'proxy_pass'),$_smarty_tpl);?>

                </div>
                <?php echo smarty_function_preference(array('name'=>'http_skip_frameset'),$_smarty_tpl);?>

                <?php echo smarty_function_preference(array('name'=>'feature_loadbalancer'),$_smarty_tpl);?>

                <?php echo smarty_function_preference(array('name'=>'feature_port_rewriting'),$_smarty_tpl);?>

                <?php echo smarty_function_preference(array('name'=>'access_control_allow_origin'),$_smarty_tpl);?>

                <?php echo smarty_function_preference(array('name'=>'zend_http_use_curl'),$_smarty_tpl);?>

            </fieldset>
            <fieldset>
                <legend>Multi-domain</legend>
                <?php echo smarty_function_preference(array('name'=>'multidomain_active'),$_smarty_tpl);?>

                <?php echo smarty_function_preference(array('name'=>'multidomain_switchdomain'),$_smarty_tpl);?>

                <div class="adminoptionboxchild" id="multidomain_switchdomain_childcontainer">
                    <?php echo smarty_function_preference(array('name'=>'multidomain_default_not_categorized'),$_smarty_tpl);?>

                </div>
                <div class="adminoptionboxchild" id="multidomain_active_childcontainer">
                    <?php echo smarty_function_preference(array('name'=>'multidomain_config'),$_smarty_tpl);?>

                </div>
            </fieldset>
            <fieldset>
                <legend>Sessions</legend>
                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>"note",'title'=>"Advanced configuration"));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>"note",'title'=>"Advanced configuration"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    Note that storing session data in the database is an advanced systems administration option, and is for admins who have comprehensive access and understanding of the database, in order to deal with any unexpected effects.
                <?php $_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>"note",'title'=>"Advanced configuration"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>"warning",'title'=>"Warning",'close'=>"n"));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Warning",'close'=>"n"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    Changing this feature will immediately log you out when you save this preference. <?php if ($_smarty_tpl->tpl_vars['prefs']->value['forgotPass'] != 'y') {?>If there is a chance you have forgotten your password, enable "Forget password" feature.<a href="tiki-admin.php?page=features" title="Features" class="alert-link">Enable now</a>.<?php }?>
                <?php $_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Warning",'close'=>"n"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <?php echo smarty_function_preference(array('name'=>'session_storage'),$_smarty_tpl);?>

                <?php echo smarty_function_preference(array('name'=>'session_lifetime'),$_smarty_tpl);?>

                <?php echo smarty_function_preference(array('name'=>'session_cookie_name'),$_smarty_tpl);?>

            </fieldset>
            <fieldset>
                <legend>Site terminal</legend>
                <?php echo smarty_function_preference(array('name'=>'site_terminal_active'),$_smarty_tpl);?>

                <div class="adminoptionboxchild" id="site_terminal_active_childcontainer">
                    <?php echo smarty_function_preference(array('name'=>'site_terminal_config'),$_smarty_tpl);?>

                </div>
            </fieldset>
            <fieldset>
                <legend>Contact</legend>
                <?php echo smarty_function_preference(array('name'=>'feature_contact'),$_smarty_tpl);?>

                <div class="adminoptionboxchild" id="feature_contact_childcontainer">
                    <?php echo smarty_function_preference(array('name'=>'contact_anon'),$_smarty_tpl);?>

                    <?php echo smarty_function_preference(array('name'=>'contact_priority_onoff'),$_smarty_tpl);?>

                    <?php echo smarty_function_preference(array('name'=>'contact_user'),$_smarty_tpl);?>

                </div>
            </fieldset>
            <fieldset>
                <legend>Stats</legend>
                <?php echo smarty_function_preference(array('name'=>'feature_stats'),$_smarty_tpl);?>

                <?php echo smarty_function_preference(array('name'=>'feature_referer_stats'),$_smarty_tpl);?>

                <?php echo smarty_function_preference(array('name'=>'count_admin_pvs'),$_smarty_tpl);?>

            </fieldset>
            <fieldset>
                <legend>Terms and conditions</legend>
                <?php echo smarty_function_preference(array('name'=>'conditions_enabled'),$_smarty_tpl);?>

                <div class="adminoptionboxchild" id="conditions_enabled_childcontainer">
                    <?php echo smarty_function_preference(array('name'=>'conditions_page_name'),$_smarty_tpl);?>

                    <?php echo smarty_function_preference(array('name'=>'conditions_minimum_age'),$_smarty_tpl);?>

                </div>
            </fieldset>
            <fieldset>
                <legend>Help</legend>
                <?php echo smarty_function_preference(array('name'=>'feature_help'),$_smarty_tpl);?>

                <div class="adminoptionboxchild" id="feature_help_childcontainer">
                    <?php echo smarty_function_preference(array('name'=>'helpurl'),$_smarty_tpl);?>

                </div>
            </fieldset>
        <?php $_block_repeat=false;
echo smarty_block_tab(array('name'=>"General Settings"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tab', array('name'=>"Navigation"));
$_block_repeat=true;
echo smarty_block_tab(array('name'=>"Navigation"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <br>
            <fieldset id="Menus">
                <legend>Menus</legend>
                <div class="adminoptionbox">
                    <?php echo smarty_function_preference(array('name'=>'jquery_smartmenus_enable'),$_smarty_tpl);?>

                    <?php echo smarty_function_preference(array('name'=>'feature_cssmenus'),$_smarty_tpl);?>

                    <?php echo smarty_function_preference(array('name'=>'feature_jquery_superfish'),$_smarty_tpl);?>

                    <?php echo smarty_function_preference(array('name'=>'feature_userlevels'),$_smarty_tpl);?>

                    <?php echo smarty_function_preference(array('name'=>'feature_featuredLinks'),$_smarty_tpl);?>

                    <?php echo smarty_function_preference(array('name'=>'feature_menusfolderstyle'),$_smarty_tpl);?>

                    <?php echo smarty_function_preference(array('name'=>'menus_items_icons'),$_smarty_tpl);?>

                    <div id="menus_items_icons_childcontainer">
                        <?php echo smarty_function_preference(array('name'=>'menus_items_icons_path'),$_smarty_tpl);?>

                    </div>
                    <?php echo smarty_function_preference(array('name'=>'menus_edit_icon'),$_smarty_tpl);?>

                </div>
            </fieldset>
            <fieldset>
                <legend>Home page</legend>
                <div class="adminoptionbox">
                    <?php echo smarty_function_preference(array('name'=>'useGroupHome'),$_smarty_tpl);?>

                    <div id="useGroupHome_childcontainer">
                        <?php echo smarty_function_preference(array('name'=>'limitedGoGroupHome'),$_smarty_tpl);?>

                    </div>
                </div>
                <?php echo smarty_function_preference(array('name'=>'tikiIndex','defaul'=>$_smarty_tpl->tpl_vars['prefs']->value['site_tikiIndex']),$_smarty_tpl);?>

                <?php echo smarty_function_preference(array('name'=>'useUrlIndex'),$_smarty_tpl);?>

                <div class="adminoptionboxchild" id="useUrlIndex_childcontainer">
                    <?php echo smarty_function_preference(array('name'=>'urlIndex'),$_smarty_tpl);?>

                    <?php echo smarty_function_preference(array('name'=>'urlIndexBrowserTitle'),$_smarty_tpl);?>

                </div>
                <?php echo smarty_function_preference(array('name'=>'wikiHomePage'),$_smarty_tpl);?>

                <?php echo smarty_function_preference(array('name'=>'home_blog'),$_smarty_tpl);?>

                <?php echo smarty_function_preference(array('name'=>'home_forum'),$_smarty_tpl);?>

                <?php echo smarty_function_preference(array('name'=>'home_file_gallery'),$_smarty_tpl);?>

                <?php echo smarty_function_preference(array('name'=>'home_gallery'),$_smarty_tpl);?>

            </fieldset>
            <fieldset>
                <legend>Redirects</legend>
                <?php echo smarty_function_preference(array('name'=>'tiki_domain_prefix'),$_smarty_tpl);?>

                <?php echo smarty_function_preference(array('name'=>'tiki_domain_redirects'),$_smarty_tpl);?>

                <?php echo smarty_function_preference(array('name'=>'feature_redirect_on_error'),$_smarty_tpl);?>

                <?php echo smarty_function_preference(array('name'=>'feature_wiki_1like_redirection'),$_smarty_tpl);?>

                <hr>
                <?php echo smarty_function_preference(array('name'=>'permission_denied_login_box','mode'=>'invert'),$_smarty_tpl);?>

                <div class="adminoptionboxchild" id="permission_denied_login_box_childcontainer">
                    <div style="text-indent: 28%">
                        <strong>or</strong>
                    </div>
                    <?php echo smarty_function_preference(array('name'=>'permission_denied_url'),$_smarty_tpl);?>

                </div>
                <hr>
                <?php echo smarty_function_preference(array('name'=>'url_anonymous_page_not_found'),$_smarty_tpl);?>

                <?php echo smarty_function_preference(array('name'=>'url_after_validation'),$_smarty_tpl);?>

                <?php echo smarty_function_preference(array('name'=>'feature_alternate_registration_page'),$_smarty_tpl);?>

            </fieldset>
            <fieldset>
                <legend>User</legend>
                <?php echo smarty_function_preference(array('name'=>'urlOnUsername'),$_smarty_tpl);?>

            </fieldset>

            <fieldset>
                <legend>Sitemap protocol</legend>
                <?php echo smarty_function_preference(array('name'=>'sitemap_enable'),$_smarty_tpl);?>

            </fieldset>

            <fieldset>
                <legend>Site access</legend>
                <?php echo smarty_function_preference(array('name'=>'site_closed'),$_smarty_tpl);?>

                <div class="adminoptionboxchild" id="site_closed_childcontainer">
                    <?php echo smarty_function_preference(array('name'=>'site_closed_title'),$_smarty_tpl);?>

                    <?php echo smarty_function_preference(array('name'=>'site_closed_msg'),$_smarty_tpl);?>

                    <div class="col-sm-8 offset-sm-4">
                        <?php echo smarty_function_button(array('_text'=>'Test site closed message','href'=>("tiki-error_simple.php?title=".((string)$_smarty_tpl->tpl_vars['prefs']->value['site_closed_title'])."&error=").($_smarty_tpl->tpl_vars['prefs']->value['site_closed_msg']),'_class'=>'btn-sm','_type'=>'info'),$_smarty_tpl);?>

                    </div>
                </div>
                <?php echo smarty_function_preference(array('name'=>'use_load_threshold'),$_smarty_tpl);?>

                <div class="adminoptionboxchild" id="use_load_threshold_childcontainer">
                    <?php echo smarty_function_preference(array('name'=>'load_threshold'),$_smarty_tpl);?>

                    <?php echo smarty_function_preference(array('name'=>'site_busy_title'),$_smarty_tpl);?>

                    <?php echo smarty_function_preference(array('name'=>'site_busy_msg'),$_smarty_tpl);?>

                </div>
            </fieldset>
            <fieldset>
                <legend class="heading">Breadcrumbs</legend>
                <?php echo smarty_function_preference(array('name'=>'feature_breadcrumbs'),$_smarty_tpl);?>

                <div class="adminoptionboxchild" id="feature_breadcrumbs_childcontainer">
                    <?php echo smarty_function_preference(array('name'=>'feature_siteloclabel'),$_smarty_tpl);?>

                    <?php echo smarty_function_preference(array('name'=>'feature_siteloc'),$_smarty_tpl);?>

                    <?php echo smarty_function_preference(array('name'=>'feature_sitetitle'),$_smarty_tpl);?>

                    <?php echo smarty_function_preference(array('name'=>'feature_sitedesc'),$_smarty_tpl);?>

                </div>
            </fieldset>
            <fieldset>
                <legend class="heading">Namespace</legend>
                <?php echo smarty_function_preference(array('name'=>'namespace_enabled'),$_smarty_tpl);?>

                <div class="adminoptionboxchild" id="namespace_enabled_childcontainer">
                    <?php echo smarty_function_preference(array('name'=>'namespace_separator'),$_smarty_tpl);?>

                    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>"warning",'title'=>"Warning",'close'=>"n"));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Warning",'close'=>"n"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                        The namespace separator should not
                        <ul>
                            <li>contain any of the characters not allowed in wiki page names, typically /?#[]@$&amp;+;=&lt;&gt;</li>
                            <li>conflict with wiki syntax tagging</li>
                        </ul>
                    <?php $_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Warning",'close'=>"n"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                    <?php echo smarty_function_preference(array('name'=>'namespace_indicator_in_structure'),$_smarty_tpl);?>

                    <?php echo smarty_function_preference(array('name'=>'feature_use_three_colon_centertag'),$_smarty_tpl);?>

                    <?php echo smarty_function_preference(array('name'=>'wiki_pagename_strip'),$_smarty_tpl);?>

                    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>"note",'title'=>"Information"));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>"note",'title'=>"Information"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                        To use :: as a separator, you should also use ::: as the wiki center tag syntax.<br/>
                        Note: a conversion of :: to ::: for existing pages must be done manually.<br/>
                        If the page name display stripper conflicts with the namespace separator, the namespace is used and the page name display is not stripped.
                    <?php $_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>"note",'title'=>"Information"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                </div>
            </fieldset>
        <?php $_block_repeat=false;
echo smarty_block_tab(array('name'=>"Navigation"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tab', array('name'=>"Date and Time"));
$_block_repeat=true;
echo smarty_block_tab(array('name'=>"Date and Time"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>"info",'title'=>"php.net"));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>"info",'title'=>"php.net"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <a class="alert-link" href="http://www.php.net/manual/en/function.strftime.php">
                    Date and Time Format Help
                </a>
            <?php $_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>"info",'title'=>"php.net"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            <fieldset>
                <legend>Time zone and format<?php echo smarty_function_help(array('url'=>"Date+and+Time"),$_smarty_tpl);?>
</legend>
                <?php echo smarty_function_preference(array('name'=>'server_timezone'),$_smarty_tpl);?>

                <?php echo smarty_function_preference(array('name'=>'users_prefs_display_timezone'),$_smarty_tpl);?>

                <div class="clearfix">
                    <span class="form-text col-sm-8 offset-sm-4 mt-4">
                        Sample: <?php echo smarty_modifier_tiki_long_date($_smarty_tpl->tpl_vars['now']->value);?>

                    </span>
                    <?php echo smarty_function_preference(array('name'=>'long_date_format'),$_smarty_tpl);?>

                </div>
                <div class="clearfix">
                    <span class="form-text col-sm-8 offset-sm-4 mt-4">
                        Sample: <?php echo smarty_modifier_tiki_short_date($_smarty_tpl->tpl_vars['now']->value,'n');?>

                    </span>
                    <?php echo smarty_function_preference(array('name'=>'short_date_format'),$_smarty_tpl);?>

                </div>
                <div class="clearfix">
                    <span class="form-text col-sm-8 offset-sm-4 mt-4">
                        Sample: <?php echo smarty_modifier_tiki_long_time($_smarty_tpl->tpl_vars['now']->value);?>

                    </span>
                    <?php echo smarty_function_preference(array('name'=>'long_time_format'),$_smarty_tpl);?>

                </div>
                <div class="clearfix">
                    <span class="form-text col-sm-8 offset-sm-4 mt-4">
                        Sample: <?php echo smarty_modifier_tiki_short_time($_smarty_tpl->tpl_vars['now']->value);?>

                    </span>
                    <?php echo smarty_function_preference(array('name'=>'short_time_format'),$_smarty_tpl);?>

                </div>
                <?php echo smarty_function_preference(array('name'=>'short_date_format_js'),$_smarty_tpl);?>

                <?php echo smarty_function_preference(array('name'=>'short_time_format_js'),$_smarty_tpl);?>

            </fieldset>
            <fieldset>
                <legend>Date/time selectors</legend>
                <?php echo smarty_function_preference(array('name'=>'display_field_order'),$_smarty_tpl);?>

                <?php echo smarty_function_preference(array('name'=>'display_start_year'),$_smarty_tpl);?>

                <?php echo smarty_function_preference(array('name'=>'display_end_year'),$_smarty_tpl);?>

                <?php echo smarty_function_preference(array('name'=>'change_month'),$_smarty_tpl);?>

                <?php echo smarty_function_preference(array('name'=>'change_year'),$_smarty_tpl);?>

                <?php echo smarty_function_preference(array('name'=>'users_prefs_display_12hr_clock'),$_smarty_tpl);?>

            </fieldset>
            <?php echo smarty_function_preference(array('name'=>'tiki_same_day_time_only'),$_smarty_tpl);?>

            <?php echo smarty_function_preference(array('name'=>'jquery_timeago'),$_smarty_tpl);?>

            <?php echo smarty_function_preference(array('name'=>'wikiplugin_now'),$_smarty_tpl);?>

            <?php echo smarty_function_preference(array('name'=>'wikiplugin_countdown'),$_smarty_tpl);?>

            <?php echo smarty_function_preference(array('name'=>'wikiplugin_convene'),$_smarty_tpl);?>

        <?php $_block_repeat=false;
echo smarty_block_tab(array('name'=>"Date and Time"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    <?php $_block_repeat=false;
echo smarty_block_tabset(array('name'=>"admin_general"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    <?php $_smarty_tpl->_subTemplateRender('file:admin/include_apply_bottom.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</form>
<?php }
}
