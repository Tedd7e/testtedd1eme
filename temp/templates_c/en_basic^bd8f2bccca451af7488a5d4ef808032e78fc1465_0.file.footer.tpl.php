<?php
/* Smarty version 3.1.48, created on 2023-09-29 11:16:29
  from '/home/teddieme/tedd1eme/templates/footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6516a3fd7fc0e6_72621567',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bd8f2bccca451af7488a5d4ef808032e78fc1465' => 
    array (
      0 => '/home/teddieme/tedd1eme/templates/footer.tpl',
      1 => 1689085248,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:tiki-tracker_force_fill.tpl' => 1,
    'file:tiki-socialnetworks_firstlogin_launcher.tpl' => 1,
  ),
),false)) {
function content_6516a3fd7fc0e6_72621567 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/block.remarksbox.php','function'=>'smarty_block_remarksbox',),1=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/function.ticket.php','function'=>'smarty_function_ticket',),2=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/function.preference.php','function'=>'smarty_function_preference',),3=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/function.button.php','function'=>'smarty_function_button',),4=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/function.listfilter.php','function'=>'smarty_function_listfilter',),5=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/function.debugger.php','function'=>'smarty_function_debugger',),6=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/block.wikiplugin.php','function'=>'smarty_block_wikiplugin',),7=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/function.interactivetranslation.php','function'=>'smarty_function_interactivetranslation',),8=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/function.service.php','function'=>'smarty_function_service',),));
?>


<div id="bootstrap-modal" class="modal fade footer-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel"></h4>
            </div>
        </div>
    </div>
</div>
<div id="bootstrap-modal-2" class="modal fade footer-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        </div>
    </div>
</div>
<div id="bootstrap-modal-3" class="modal fade footer-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        </div>
    </div>
</div>
<?php if ((isset($_smarty_tpl->tpl_vars['force_fill_action']->value))) {?>
    <?php $_smarty_tpl->_subTemplateRender("file:tiki-tracker_force_fill.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
if ((($tmp = @$_smarty_tpl->tpl_vars['module_pref_errors']->value)===null||$tmp==='' ? null : $tmp)) {?>
    <div class="container<?php if ((isset($_SESSION['fullscreen'])) && $_SESSION['fullscreen'] == 'y') {?>-fluid<?php }?> modules">
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>"warning",'title'=>"Module errors"));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Module errors"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            The following modules could not be loaded
            <form method="post" action="tiki-admin.php">
                <?php echo smarty_function_ticket(array(),$_smarty_tpl);?>

                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['module_pref_errors']->value, 'pref_error', false, 'index');
$_smarty_tpl->tpl_vars['pref_error']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['pref_error']->value) {
$_smarty_tpl->tpl_vars['pref_error']->do_else = false;
?>
                    <p><?php echo $_smarty_tpl->tpl_vars['pref_error']->value['mod_name'];?>
:</p>
                    <?php echo smarty_function_preference(array('name'=>$_smarty_tpl->tpl_vars['pref_error']->value['pref_name']),$_smarty_tpl);?>

                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <div class="submit">
                    <input type="submit" class="btn btn-primary" value="Change"/>
                </div>
            </form>
        <?php $_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Module errors"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    </div>
<?php }
if ((!(isset($_smarty_tpl->tpl_vars['display']->value)) || $_smarty_tpl->tpl_vars['display']->value == '')) {?>
    <?php if (count($_smarty_tpl->tpl_vars['phpErrors']->value)) {?>
        <?php if (($_smarty_tpl->tpl_vars['prefs']->value['error_reporting_adminonly'] == 'y' && $_smarty_tpl->tpl_vars['tiki_p_admin']->value == 'y') || $_smarty_tpl->tpl_vars['prefs']->value['error_reporting_adminonly'] == 'n') {?>
    <div class="container<?php if ((isset($_SESSION['fullscreen'])) && $_SESSION['fullscreen'] == 'y') {?>-fluid<?php }?> my-3">
        <?php echo smarty_function_button(array('_ajax'=>"n",'_id'=>"show-errors-button",'_onclick'=>"flip('errors');return false;",'_text'=>"Show PHP error messages"),$_smarty_tpl);?>

        <div id="errors" class="alert alert-warning" style="display: <?php if (((isset($_SESSION['tiki_cookie_jar']['show_errors'])) && $_SESSION['tiki_cookie_jar']['show_errors'] == 'y') || $_smarty_tpl->tpl_vars['prefs']->value['javascript_enabled'] != 'y') {?>block<?php } else { ?>none<?php }?>;">
            &nbsp;<?php echo smarty_function_listfilter(array('selectors'=>'#errors>div.rbox-data'),$_smarty_tpl);?>

            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['phpErrors']->value, 'err');
$_smarty_tpl->tpl_vars['err']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['err']->value) {
$_smarty_tpl->tpl_vars['err']->do_else = false;
?>
                <?php echo $_smarty_tpl->tpl_vars['err']->value;?>

            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    </div>
        <?php }?>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['tiki_p_admin']->value == 'y' && $_smarty_tpl->tpl_vars['prefs']->value['feature_debug_console'] == 'y') {?>
        
        <?php echo smarty_function_debugger(array(),$_smarty_tpl);?>

    <?php }?>

<?php }?>

<?php if ((isset($_smarty_tpl->tpl_vars['prefs']->value['socialnetworks_user_firstlogin'])) && $_smarty_tpl->tpl_vars['prefs']->value['socialnetworks_user_firstlogin'] == 'y') {?>
    <?php $_smarty_tpl->_subTemplateRender('file:tiki-socialnetworks_firstlogin_launcher.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}?>

<?php if ($_smarty_tpl->tpl_vars['prefs']->value['site_google_analytics_account']) {?>
    <?php ob_start();
echo implode(',',$_smarty_tpl->tpl_vars['prefs']->value['site_google_analytics_groups']);
$_prefixVariable8 = ob_get_clean();
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('wikiplugin', array('_name'=>'googleanalytics','account'=>$_smarty_tpl->tpl_vars['prefs']->value['site_google_analytics_account'],'group_option'=>$_smarty_tpl->tpl_vars['prefs']->value['site_google_analytics_group_option'],'groups'=>$_prefixVariable8));
$_block_repeat=true;
echo smarty_block_wikiplugin(array('_name'=>'googleanalytics','account'=>$_smarty_tpl->tpl_vars['prefs']->value['site_google_analytics_account'],'group_option'=>$_smarty_tpl->tpl_vars['prefs']->value['site_google_analytics_group_option'],'groups'=>$_prefixVariable8), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_wikiplugin(array('_name'=>'googleanalytics','account'=>$_smarty_tpl->tpl_vars['prefs']->value['site_google_analytics_account'],'group_option'=>$_smarty_tpl->tpl_vars['prefs']->value['site_google_analytics_group_option'],'groups'=>$_prefixVariable8), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
echo smarty_function_interactivetranslation(array(),$_smarty_tpl);?>

<!-- Put JS at the end -->
<?php if ($_smarty_tpl->tpl_vars['headerlib']->value) {?>
    <?php echo $_smarty_tpl->tpl_vars['headerlib']->value->output_js_config();?>

    <?php echo $_smarty_tpl->tpl_vars['headerlib']->value->output_js_files();?>

    <?php echo $_smarty_tpl->tpl_vars['headerlib']->value->output_js();?>

    
    <?php if (empty($_COOKIE['javascript_enabled_detect']) && $_smarty_tpl->tpl_vars['prefs']->value['javascript_enabled'] == 'n' && $_smarty_tpl->tpl_vars['prefs']->value['disableJavascript'] == 'n' && strpos($_SERVER['SCRIPT_NAME'],'tiki-install.php') === false) {
echo '<script'; ?>
 type="text/javascript">
<!--//--><![CDATA[//><!--
if (confirm("A problem occurred while detecting JavaScript on this page, click ok to retry.")) {
    document.cookie = "javascript_enabled_detect=";
    location = location.href;
}
//--><!]]>
<?php echo '</script'; ?>
>
    <?php }
}
if ($_smarty_tpl->tpl_vars['prefs']->value['feature_endbody_code']) {?>
    <?php $_template = new Smarty_Internal_Template('eval:'.$_smarty_tpl->tpl_vars['prefs']->value['feature_endbody_code'], $_smarty_tpl->smarty, $_smarty_tpl);echo $_template->fetch();
}
if ($_smarty_tpl->tpl_vars['prefs']->value['site_piwik_code']) {?>
    <?php ob_start();
echo implode(',',$_smarty_tpl->tpl_vars['prefs']->value['site_piwik_groups']);
$_prefixVariable9 = ob_get_clean();
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('wikiplugin', array('_name'=>'piwik','code'=>$_smarty_tpl->tpl_vars['prefs']->value['site_piwik_code'],'group_option'=>$_smarty_tpl->tpl_vars['prefs']->value['site_piwik_group_option'],'groups'=>$_prefixVariable9));
$_block_repeat=true;
echo smarty_block_wikiplugin(array('_name'=>'piwik','code'=>$_smarty_tpl->tpl_vars['prefs']->value['site_piwik_code'],'group_option'=>$_smarty_tpl->tpl_vars['prefs']->value['site_piwik_group_option'],'groups'=>$_prefixVariable9), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_wikiplugin(array('_name'=>'piwik','code'=>$_smarty_tpl->tpl_vars['prefs']->value['site_piwik_code'],'group_option'=>$_smarty_tpl->tpl_vars['prefs']->value['site_piwik_group_option'],'groups'=>$_prefixVariable9), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
if ($_smarty_tpl->tpl_vars['prefs']->value['feature_scheduler'] == "y" && $_smarty_tpl->tpl_vars['prefs']->value['webcron_enabled'] == 'y' && $_smarty_tpl->tpl_vars['prefs']->value['webcron_type'] != 'url') {?>
    <?php echo '<script'; ?>
 type="text/javascript">
        $(window).on('load', function () {
            function cron() {
                $.get("cron.php?token=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['prefs']->value['webcron_token'],'url' ));?>
");
            }
            setTimeout(cron, 500);
            setInterval(cron, 60000);
        });
    <?php echo '</script'; ?>
>
<?php }?>

<?php if (!empty($_smarty_tpl->tpl_vars['print_page']->value) && $_smarty_tpl->tpl_vars['print_page']->value == "y") {?>
    <?php echo '<script'; ?>
 type="text/javascript">
        $(document).ready(function(){
            print();
        });
    <?php echo '</script'; ?>
>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['prefs']->value['tiki_monitor_performance'] == 'y') {?>
	<?php echo '<script'; ?>
 type="text/javascript">
		BOOMR.init({
			beacon_url: "<?php echo smarty_function_service(array('controller'=>'performance','action'=>'beacon'),$_smarty_tpl);?>
"
		});
	<?php echo '</script'; ?>
>
<?php }
}
}
