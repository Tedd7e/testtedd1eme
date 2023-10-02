<?php
/* Smarty version 3.1.48, created on 2023-09-29 11:16:29
  from '/home/teddieme/tedd1eme/templates/modules/mod-login_box.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6516a3fd651c52_26561607',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eb41d399f6e6eaf69eac6e0463cbd384270af2f4' => 
    array (
      0 => '/home/teddieme/tedd1eme/templates/modules/mod-login_box.tpl',
      1 => 1689085248,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6516a3fd651c52_26561607 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/block.jq.php','function'=>'smarty_block_jq',),1=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/block.tikimodule.php','function'=>'smarty_block_tikimodule',),2=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/modifier.userlink.php','function'=>'smarty_modifier_userlink',),3=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/function.button.php','function'=>'smarty_function_button',),4=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/function.ticket.php','function'=>'smarty_function_ticket',),5=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/function.help.php','function'=>'smarty_function_help',),6=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/function.user_selector.php','function'=>'smarty_function_user_selector',),7=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/modifier.avatarize.php','function'=>'smarty_modifier_avatarize',),8=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/modifier.username.php','function'=>'smarty_modifier_username',),9=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/block.tr.php','function'=>'smarty_block_tr',),10=>array('file'=>'/home/teddieme/tedd1eme/vendor_bundled/vendor/smarty/smarty/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),11=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/function.menu.php','function'=>'smarty_function_menu',),12=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/block.remarksbox.php','function'=>'smarty_block_remarksbox',),13=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/function.icon.php','function'=>'smarty_function_icon',),));
?>

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('jq', array('notonready'=>true));
$_block_repeat=true;
echo smarty_block_jq(array('notonready'=>true), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
function capLock(e, el){
    kc = e.keyCode ? e.keyCode : e.which;
    sk = e.shiftKey ? e.shiftKey : (kc == 16 ? true : false);
    if ((kc >= 65 && kc <= 90 && !sk) || (kc >= 97 && kc <= 122 && sk)) {
        $('.divCapson', $(el).parents('div:first')).show();
    } else {
        $('.divCapson', $(el).parents('div:first')).hide();
    }
}
<?php $_block_repeat=false;
echo smarty_block_jq(array('notonready'=>true), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('jq', array());
$_block_repeat=true;
echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
$("#loginbox-<?php echo $_smarty_tpl->tpl_vars['module_logo_instance']->value;?>
").submit( function () {
    if ($("#login-user_<?php echo $_smarty_tpl->tpl_vars['module_logo_instance']->value;?>
").val() && $("#login-pass_<?php echo $_smarty_tpl->tpl_vars['module_logo_instance']->value;?>
").val()) {
        return true;
    } else {
        $("#login-user_<?php echo $_smarty_tpl->tpl_vars['module_logo_instance']->value;?>
").focus();
        return false;
    }
});
if (jqueryTiki.no_cookie) {
    $('.box-login_box input').each(function(){
        $(this).change(function() {
            if (jqueryTiki.no_cookie && ! jqueryTiki.cookie_consent_alerted && $(this).val()) {
                alert(jqueryTiki.cookie_consent_alert);
                jqueryTiki.cookie_consent_alerted = true;
            }
        });
    });
}
$("#switchbox-<?php echo $_smarty_tpl->tpl_vars['module_logo_instance']->value;?>
 .submit").click( function () {
    if ($("#login-switchuser_<?php echo $_smarty_tpl->tpl_vars['module_logo_instance']->value;?>
").val()) {
        confirmPopup('Switch user?')
        return true;
    } else {
        $("#login-switchuser_<?php echo $_smarty_tpl->tpl_vars['module_logo_instance']->value;?>
").focus();
        return false;
    }
});
<?php $_block_repeat=false;
echo smarty_block_jq(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
if (!(isset($_smarty_tpl->tpl_vars['tpl_module_title']->value))) {?>
    <?php $_smarty_tpl->_assignInScope('tpl_module_title', "Log in");?>
    <?php if (!(isset($_smarty_tpl->tpl_vars['module_params']->value))) {
$_smarty_tpl->_assignInScope('module_params', ' ');
}?>
    <?php if ((isset($_smarty_tpl->tpl_vars['nobox']->value))) {
$_tmp_array = isset($_smarty_tpl->tpl_vars['module_params']) ? $_smarty_tpl->tpl_vars['module_params']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['nobox'] = $_smarty_tpl->tpl_vars['nobox']->value;
$_smarty_tpl->_assignInScope('module_params', $_tmp_array);
}?>
    <?php if ((isset($_smarty_tpl->tpl_vars['style']->value))) {
$_tmp_array = isset($_smarty_tpl->tpl_vars['module_params']) ? $_smarty_tpl->tpl_vars['module_params']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['style'] = $_smarty_tpl->tpl_vars['style']->value;
$_smarty_tpl->_assignInScope('module_params', $_tmp_array);
}
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tikimodule', array('error'=>$_smarty_tpl->tpl_vars['module_params']->value['error'],'title'=>$_smarty_tpl->tpl_vars['tpl_module_title']->value,'name'=>"login_box",'flip'=>$_smarty_tpl->tpl_vars['module_params']->value['flip'],'decorations'=>$_smarty_tpl->tpl_vars['module_params']->value['decorations'],'nobox'=>$_smarty_tpl->tpl_vars['module_params']->value['nobox'],'notitle'=>$_smarty_tpl->tpl_vars['module_params']->value['notitle'],'style'=>$_smarty_tpl->tpl_vars['module_params']->value['style']));
$_block_repeat=true;
echo smarty_block_tikimodule(array('error'=>$_smarty_tpl->tpl_vars['module_params']->value['error'],'title'=>$_smarty_tpl->tpl_vars['tpl_module_title']->value,'name'=>"login_box",'flip'=>$_smarty_tpl->tpl_vars['module_params']->value['flip'],'decorations'=>$_smarty_tpl->tpl_vars['module_params']->value['decorations'],'nobox'=>$_smarty_tpl->tpl_vars['module_params']->value['nobox'],'notitle'=>$_smarty_tpl->tpl_vars['module_params']->value['notitle'],'style'=>$_smarty_tpl->tpl_vars['module_params']->value['style']), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    <?php if ($_smarty_tpl->tpl_vars['mode']->value == "header") {?><div class="siteloginbar<?php if ($_smarty_tpl->tpl_vars['user']->value) {?> logged-in<?php }?>"><?php }?>
    <?php if ($_smarty_tpl->tpl_vars['user']->value) {?>
        <?php if (empty($_smarty_tpl->tpl_vars['mode']->value) || $_smarty_tpl->tpl_vars['mode']->value == "module") {?>
            <div class="form-group row mx-0">Logged in as: <span class="d-inline-block col-12 text-truncate">&nbsp;<?php echo smarty_modifier_userlink($_smarty_tpl->tpl_vars['user']->value);?>
</span></div>
            <div class="text-center">
                <?php echo smarty_function_button(array('href'=>"tiki-logout.php",'_text'=>"Log out"),$_smarty_tpl);?>

            </div>
            <?php if ($_smarty_tpl->tpl_vars['login_module']->value['can_revert']) {?>
                <form action="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['login_module']->value['login_url'] ));?>
" method="post">
                    <?php echo smarty_function_ticket(array(),$_smarty_tpl);?>

                    <fieldset>
                        <legend>Return to Main User</legend>
                        <input type="hidden" name="su" value="revert" />
                        <input type="hidden" name="username" value="auto" />
                        <div class="text-center">
                            <button
                                type="submit"
                                class="btn btn-primary"
                                name="actsu"
                                onclick="confirmPopup('Return to main user?')"
                            >
                                Switch
                            </button>
                        </div>
                    </fieldset>
                </form>
            <?php } elseif ($_smarty_tpl->tpl_vars['tiki_p_admin']->value == 'y') {?>
                <form action="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['login_module']->value['login_url'] ));?>
" method="post"<?php if ($_smarty_tpl->tpl_vars['prefs']->value['desactive_login_autocomplete'] == 'y') {?> autocomplete="off"<?php }?> id="switchbox-<?php echo $_smarty_tpl->tpl_vars['module_logo_instance']->value;?>
">
                    <?php echo smarty_function_ticket(array(),$_smarty_tpl);?>

                    <fieldset>
                        <legend>Switch User</legend>
                        <div class="form-group row mx-0">
                            <label class="col-form-label" for="login-switchuser_<?php echo $_smarty_tpl->tpl_vars['module_logo_instance']->value;?>
">
                                <?php if ($_smarty_tpl->tpl_vars['prefs']->value['login_is_email'] == 'y') {?>
                                    <?php if ($_smarty_tpl->tpl_vars['prefs']->value['login_is_email_obscure'] == 'n') {?>
                                        Email:
                                    <?php } else { ?>
                                        Name:
                                    <?php }?>
                                <?php } else { ?>
                                    <?php if ($_smarty_tpl->tpl_vars['prefs']->value['login_allow_email'] == 'y') {?>
                                        Email address or 
                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['prefs']->value['login_autogenerate'] == 'y') {?>
                                        User account ID:
                                    <?php } else { ?>
                                        Username:
                                    <?php }?>
                                <?php }?>
                            </label>
                            <input type="hidden" name="su" value="1" class="form-control" />
                            <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_help'] == 'y') {?>
                                <?php echo smarty_function_help(array('url'=>"Switch+User",'desc'=>"Switch User:Enter a username and click 'Switch'.<br>Useful for testing permissions."),$_smarty_tpl);?>

                            <?php }?>
                            <?php echo smarty_function_user_selector(array('groupIds'=>$_smarty_tpl->tpl_vars['module_params']->value['groups'],'id'=>("login-switchuser_").($_smarty_tpl->tpl_vars['module_logo_instance']->value),'name'=>'username','user'=>'','editable'=>$_smarty_tpl->tpl_vars['tiki_p_admin']->value,'class'=>'form-control'),$_smarty_tpl);?>

                        </div>
                        <div class="text-center">
                            <button
                                type="submit"
                                class="btn btn-primary submit"
                                name="actsu"
                            >
                                Switch
                            </button>
                        </div>
                    </fieldset>
                </form>
            <?php }?>
        <?php } elseif ($_smarty_tpl->tpl_vars['mode']->value == "header") {?>
            <span style="white-space: nowrap"><?php echo smarty_modifier_userlink($_smarty_tpl->tpl_vars['user']->value);?>
</span> <a href="tiki-logout.php" title="Log out">Log out</a>
        <?php } elseif ($_smarty_tpl->tpl_vars['mode']->value == "popup") {?>
            <div class="siteloginbar_popup dropdown float-sm-right mr-auto" role="group">
                <button type="button" class="dropdown-toggle login_link btn btn-link" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <?php if ((isset($_smarty_tpl->tpl_vars['module_params']->value['show_user_avatar'])) && $_smarty_tpl->tpl_vars['module_params']->value['show_user_avatar'] == 'y') {
echo smarty_modifier_avatarize($_smarty_tpl->tpl_vars['user']->value,'n','n','n','n');
}?>
                    <?php if ((isset($_smarty_tpl->tpl_vars['module_params']->value['show_user_name'])) && $_smarty_tpl->tpl_vars['module_params']->value['show_user_name'] == 'y') {
echo smarty_modifier_username($_smarty_tpl->tpl_vars['user']->value,'n','n','n');
}?>
                    <?php if ((!(isset($_smarty_tpl->tpl_vars['module_params']->value['show_user_avatar'])) || $_smarty_tpl->tpl_vars['module_params']->value['show_user_avatar'] != 'y') && (!(isset($_smarty_tpl->tpl_vars['module_params']->value['show_user_name'])) || $_smarty_tpl->tpl_vars['module_params']->value['show_user_name'] != 'y')) {?>Log out<?php }?>
                    <span class="sr-only">Toggle Dropdown</span>
                </button>
                <?php if (empty($_smarty_tpl->tpl_vars['module_params']->value['menu_id'])) {?>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="tiki-user_information.php" title="My Account">
                            <?php if ((isset($_smarty_tpl->tpl_vars['module_params']->value['show_user_name'])) && $_smarty_tpl->tpl_vars['module_params']->value['show_user_name'] == 'y') {?>My Account<?php } else {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tr', array());
$_block_repeat=true;
echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo smarty_modifier_replace(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( smarty_modifier_username($_smarty_tpl->tpl_vars['user']->value) )),'&amp;','&');
$_block_repeat=false;
echo smarty_block_tr(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}?>
                        </a>
                        <a class="dropdown-item" href="tiki-logout.php" title="Log out">
                            Log out
                        </a>
                    </div>
                <?php } else { ?>
                    <?php echo smarty_function_menu(array('id'=>$_smarty_tpl->tpl_vars['module_params']->value['menu_id'],'bootstrap'=>'y','bs_menu_class'=>'dropdown-menu'),$_smarty_tpl);?>

                    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('jq', array());
$_block_repeat=true;
echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
// prevent clicks on menu items with child options from closing the "parent" dropdown
$(".collapse-toggle", ".siteloginbar_popup .dropdown-menu").click(function () {
    $(this).parents(".dropdown").one("hide.bs.dropdown", function () {
        return false;
    });
});
                    <?php $_block_repeat=false;
echo smarty_block_jq(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <?php }?>
            </div>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['prefs']->value['auth_method'] == 'openid' && count($_smarty_tpl->tpl_vars['openid_userlist']->value) > 1) {?>
            <form method="get" action="tiki-login_openid.php">
                <fieldset>
                    <legend>Switch user</legend>
                    <select name="select">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['openid_userlist']->value, 'username');
$_smarty_tpl->tpl_vars['username']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['username']->value) {
$_smarty_tpl->tpl_vars['username']->do_else = false;
?>
                        <option<?php if ($_smarty_tpl->tpl_vars['username']->value == $_smarty_tpl->tpl_vars['user']->value) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</option>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </select>
                    <input type="hidden" name="action" value="select"/>
                    <input type="submit" class="btn btn-primary" value="Go"/>
                </fieldset>
            </form>
        <?php }?>
    <?php } elseif ($_smarty_tpl->tpl_vars['prefs']->value['auth_method'] == 'cas' && $_smarty_tpl->tpl_vars['showloginboxes']->value != 'y') {?>
        <b><a class="linkmodule" href="tiki-login.php?cas=y">Log in through CAS</a></b>
        <?php if ($_smarty_tpl->tpl_vars['prefs']->value['cas_skip_admin'] == 'y') {?>
            <br><a class="linkmodule" href="tiki-login_scr.php?user=admin">Log in as admin</a>
        <?php }?>
    <?php } elseif ($_smarty_tpl->tpl_vars['prefs']->value['auth_method'] == 'shib' && $_smarty_tpl->tpl_vars['showloginboxes']->value != 'y') {?>
        <b><a class="linkmodule" href="tiki-login.php">Log in through Shibboleth</a></b>
        <?php if ($_smarty_tpl->tpl_vars['prefs']->value['shib_skip_admin'] == 'y') {?>
            <br><a class="linkmodule" href="tiki-login_scr.php?user=admin">Log in as admin</a>
        <?php }?>
    <?php } elseif ($_smarty_tpl->tpl_vars['prefs']->value['auth_method'] == 'saml' && $_smarty_tpl->tpl_vars['showloginboxes']->value != 'y') {?>
        <b><a class="linkmodule" href="tiki-login.php?auth=saml"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tr', array());
$_block_repeat=true;
echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <?php if ($_smarty_tpl->tpl_vars['prefs']->value['saml_option_login_link_text'] == '') {?>
            Log in through SAML2 IdP
        <?php } else { ?>
            <?php echo $_smarty_tpl->tpl_vars['prefs']->value['saml_option_login_link_text'];?>

        <?php }?>
        <?php $_block_repeat=false;
echo smarty_block_tr(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></a></b>
        <?php if ($_smarty_tpl->tpl_vars['prefs']->value['saml_options_skip_admin'] == 'y') {?>
            <br /><a class="linkmodule" href="tiki-login_scr.php?user=admin">Log in as admin</a>
        <?php }?>
    <?php } else { ?>
        <?php $_smarty_tpl->_assignInScope('close_tags', '');?>
        <?php if ($_smarty_tpl->tpl_vars['mode']->value == "popup") {?>
            <div class="siteloginbar_popup dropdown btn-group float-sm-right drop-left">
                <button type="button" class="btn btn-link dropdown-toggle" data-toggle="dropdown">
                    Log in
                </button>
                <div class="siteloginbar_poppedup dropdown-menu dropdown-menu-right float-sm-right modal-sm"><div class="card-body">
                    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "close_tags", null);?></div></div></div><?php echo $_smarty_tpl->tpl_vars['close_tags']->value;
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
        <?php }?>

        <form name="loginbox" class="form<?php if ($_smarty_tpl->tpl_vars['mode']->value == "header") {?> form-inline<?php }?>" id="loginbox-<?php echo $_smarty_tpl->tpl_vars['module_logo_instance']->value;?>
" action="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['login_module']->value['login_url'] ));?>
"
                method="post"
                <?php if ($_smarty_tpl->tpl_vars['prefs']->value['desactive_login_autocomplete'] == 'y') {?> autocomplete="off"<?php }?>
        >
        <?php echo smarty_function_ticket(array(),$_smarty_tpl);?>

        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "close_tags", null);?></form><?php echo $_smarty_tpl->tpl_vars['close_tags']->value;
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>


        <?php if (!empty($_smarty_tpl->tpl_vars['urllogin']->value)) {?><input type="hidden" name="url" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['urllogin']->value ));?>
" /><?php }?>
        <?php if ($_smarty_tpl->tpl_vars['module_params']->value['nobox'] != 'y') {?>
            <fieldset>
                <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "close_tags", null);?></fieldset><?php echo $_smarty_tpl->tpl_vars['close_tags']->value;
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
        <?php }?>
        <?php if (!empty($_smarty_tpl->tpl_vars['error_login']->value)) {?>
            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>'errors','title'=>"Error"));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>'errors','title'=>"Error"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <?php if ($_smarty_tpl->tpl_vars['error_login']->value == -5) {?>Invalid username or password
                <?php } elseif ($_smarty_tpl->tpl_vars['error_login']->value == -3) {?>Invalid username or password
                <?php } else {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['error_login']->value ));
}?>
            <?php $_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>'errors','title'=>"Error"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <?php }?>
        <div class="user form-group row mx-0 clearfix">
            <?php if (!(isset($_smarty_tpl->tpl_vars['module_logo_instance']->value))) {
$_smarty_tpl->_assignInScope('module_logo_instance', ' ');
}?>
            <label for="login-user_<?php echo $_smarty_tpl->tpl_vars['module_logo_instance']->value;?>
">
                <?php if ($_smarty_tpl->tpl_vars['prefs']->value['login_is_email'] == 'y') {?>
                    Email:
                <?php } else { ?>
                    <?php if ($_smarty_tpl->tpl_vars['prefs']->value['login_allow_email'] == 'y') {?>
                        Email address or 
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['prefs']->value['login_autogenerate'] == 'y') {?>
                        User account ID:
                    <?php } else { ?>
                        Username:
                    <?php }?>
                <?php }?>
            </label>
            <?php if (!(isset($_smarty_tpl->tpl_vars['loginuser']->value)) || $_smarty_tpl->tpl_vars['loginuser']->value == '') {?>
                    <input class="form-control" type="text" name="user" id="login-user_<?php echo $_smarty_tpl->tpl_vars['module_logo_instance']->value;?>
" <?php if (!empty($_smarty_tpl->tpl_vars['error_login']->value)) {?> value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['error_user']->value ));?>
"<?php } elseif (!empty($_smarty_tpl->tpl_vars['adminuser']->value)) {?> value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['adminuser']->value ));?>
"<?php }?> <?php if ($_smarty_tpl->tpl_vars['prefs']->value['desactive_login_autocomplete'] != 'y') {?>autocomplete="username"<?php }?>/>
                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('jq', array());
$_block_repeat=true;
echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>if ($('#login-user_<?php echo $_smarty_tpl->tpl_vars['module_logo_instance']->value;?>
:visible').length) {if ($("#login-user_<?php echo $_smarty_tpl->tpl_vars['module_logo_instance']->value;?>
").offset().top < $(window).height()) {$('#login-user_<?php echo $_smarty_tpl->tpl_vars['module_logo_instance']->value;?>
')[0].focus();} }<?php $_block_repeat=false;
echo smarty_block_jq(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            <?php } else { ?>
                <input class="form-control" type="hidden" name="user" id="login-user_<?php echo $_smarty_tpl->tpl_vars['module_logo_instance']->value;?>
" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['loginuser']->value ));?>
" /><b><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['loginuser']->value ));?>
</b>
            <?php }?>
        </div>
        <div class="pass form-group row mx-0 clearfix">
            <label for="login-pass_<?php echo $_smarty_tpl->tpl_vars['module_logo_instance']->value;?>
">Password:</label>
            <input onkeypress="capLock(event, this)" type="password" name="pass" class="form-control" id="login-pass_<?php echo $_smarty_tpl->tpl_vars['module_logo_instance']->value;?>
" autocomplete="<?php if ($_smarty_tpl->tpl_vars['prefs']->value['desactive_login_autocomplete'] == 'y') {?>new-password<?php } else { ?>current-password<?php }?>">
            <?php if ($_smarty_tpl->tpl_vars['module_params']->value['show_forgot'] == 'y' && $_smarty_tpl->tpl_vars['prefs']->value['forgotPass'] == 'y') {?>
                <br><a class="mt-1" href="tiki-remind_password.php" title="Click here if you've forgotten your password">I forgot my password</a>
            <?php }?>
            <div class="divCapson" style="display:none;">
                <?php echo smarty_function_icon(array('name'=>'error','istyle'=>"vertical-align:middle"),$_smarty_tpl);?>
 CapsLock is on.
            </div>
        </div>
        <?php if ($_smarty_tpl->tpl_vars['module_params']->value['show_two_factor_auth'] == 'y' && $_smarty_tpl->tpl_vars['prefs']->value['twoFactorAuth'] == 'y') {?>
        <div class="pass form-group row mx-0 clearfix">
            <label for="login-2fa_<?php echo $_smarty_tpl->tpl_vars['module_logo_instance']->value;?>
">Two-factor Authenticator Code:</label>
            <input type="text" name="twoFactorAuthCode" autocomplete="off" class="form-control" id="login-2fa_<?php echo $_smarty_tpl->tpl_vars['module_logo_instance']->value;?>
">
        </div>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['prefs']->value['rememberme'] != 'disabled' && (empty($_smarty_tpl->tpl_vars['module_params']->value['remember']) || $_smarty_tpl->tpl_vars['module_params']->value['remember'] != 'n')) {?>
            <?php if ($_smarty_tpl->tpl_vars['prefs']->value['rememberme'] == 'always') {?>
                <input type="hidden" name="rme" id="login-remember-module-input_<?php echo $_smarty_tpl->tpl_vars['module_logo_instance']->value;?>
" value="on" />
            <?php } else { ?>
                <div class="form-check">
                    <div class="checkbox rme">
                        <label for="login-remember-module_<?php echo $_smarty_tpl->tpl_vars['module_logo_instance']->value;?>
"><input type="checkbox" class="form-check-input" name="rme" id="login-remember-module_<?php echo $_smarty_tpl->tpl_vars['module_logo_instance']->value;?>
" value="on" />
                            Remember me
                            (for
                            <?php if ($_smarty_tpl->tpl_vars['prefs']->value['remembertime'] == 300) {?>
                                5 minutes)
                            <?php } elseif ($_smarty_tpl->tpl_vars['prefs']->value['remembertime'] == 900) {?>
                                15 minutes)
                            <?php } elseif ($_smarty_tpl->tpl_vars['prefs']->value['remembertime'] == 1800) {?>
                                30 minutes)
                            <?php } elseif ($_smarty_tpl->tpl_vars['prefs']->value['remembertime'] == 3600) {?>
                                1 hour)
                            <?php } elseif ($_smarty_tpl->tpl_vars['prefs']->value['remembertime'] == 7200) {?>
                                2 hours)
                            <?php } elseif ($_smarty_tpl->tpl_vars['prefs']->value['remembertime'] == 36000) {?>
                                10 hours)
                            <?php } elseif ($_smarty_tpl->tpl_vars['prefs']->value['remembertime'] == 72000) {?>
                                20 hours)
                            <?php } elseif ($_smarty_tpl->tpl_vars['prefs']->value['remembertime'] == 86400) {?>
                                1 day)
                            <?php } elseif ($_smarty_tpl->tpl_vars['prefs']->value['remembertime'] == 604800) {?>
                                1 week)
                            <?php } elseif ($_smarty_tpl->tpl_vars['prefs']->value['remembertime'] == 2629743) {?>
                                1 month)
                            <?php } elseif ($_smarty_tpl->tpl_vars['prefs']->value['remembertime'] == 31556926) {?>
                                1 year)
                            <?php }?>
                        </label>
                    </div>
                </div>
            <?php }?>
        <?php }?>

        <div class="form-group text-center">
            <button class="btn btn-primary button submit" type="submit" name="login">Log in <!--i class="fa fa-arrow-circle-right"></i--></button>
        </div>
        <?php if ($_smarty_tpl->tpl_vars['module_params']->value['show_register'] == 'y' || $_smarty_tpl->tpl_vars['module_params']->value['show_two_factor_auth']) {?>
            <div <?php if ($_smarty_tpl->tpl_vars['mode']->value == 'header') {?>class="text-right" style="display:inline;"<?php }?>>
                <div <?php if ($_smarty_tpl->tpl_vars['mode']->value == 'header') {?>style="display: inline-block"<?php }?>><ul class="<?php if ($_smarty_tpl->tpl_vars['mode']->value != 'header') {?>list-unstyled"<?php } else { ?>list-inline"<?php }?>><?php if ($_smarty_tpl->tpl_vars['module_params']->value['show_register'] == 'y' && $_smarty_tpl->tpl_vars['prefs']->value['allowRegister'] == 'y') {?><li class="register<?php if ($_smarty_tpl->tpl_vars['mode']->value == 'popup') {?> dropdown-item<?php }?> list-item"><a href="tiki-register.php<?php if (!empty($_smarty_tpl->tpl_vars['prefs']->value['registerKey'])) {?>?key=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['prefs']->value['registerKey'],'url' ));
}?>" class="dropdown-item" title="Click here to register"<?php if (!empty($_smarty_tpl->tpl_vars['prefs']->value['registerKey'])) {?> rel="nofollow"<?php }?>>Register</a></li><?php }
if ($_smarty_tpl->tpl_vars['prefs']->value['twoFactorAuth'] == 'y' && $_smarty_tpl->tpl_vars['module_params']->value['show_two_factor_auth'] != 'y') {
if ($_smarty_tpl->tpl_vars['mode']->value == 'header' && $_smarty_tpl->tpl_vars['module_params']->value['show_forgot'] == 'y' && $_smarty_tpl->tpl_vars['prefs']->value['forgotPass'] == 'y') {?>&nbsp;|&nbsp;<?php }?><li class="pass<?php if ($_smarty_tpl->tpl_vars['mode']->value == 'popup') {?> dropdown-item<?php }?> list-item"><a href="tiki-login_scr.php?twoFactorForm" title="Login with two-factor authenticator"><?php if ($_smarty_tpl->tpl_vars['mode']->value == 'popup') {?> Login with 2FA<?php } else { ?>Login with two-factor authenticator<?php }?></a></li><?php }?></ul></div>
            </div>
        <?php } else { ?>
            &nbsp;
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_switch_ssl_mode'] == 'y' && ($_smarty_tpl->tpl_vars['prefs']->value['https_login'] == 'allowed' || $_smarty_tpl->tpl_vars['prefs']->value['https_login'] == 'encouraged')) {?>
            <div>
                <a class="linkmodule" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['base_url_http']->value ));
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['prefs']->value['login_url'] ));?>
" title="Click here to log in using the default security protocol">Standard</a>
                <a class="linkmodule" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['base_url_https']->value ));
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['prefs']->value['login_url'] ));?>
" title="Click here to log in using a secure protocol">Secure</a>
            </div>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_show_stay_in_ssl_mode'] == 'y' && $_smarty_tpl->tpl_vars['show_stay_in_ssl_mode']->value == 'y') {?>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" name="stay_in_ssl_mode" id="login-stayssl_<?php echo $_smarty_tpl->tpl_vars['module_logo_instance']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['stay_in_ssl_mode']->value == 'y') {?>checked="checked"<?php }?> />
                <label class="form-check-label" for="login-stayssl_<?php echo $_smarty_tpl->tpl_vars['module_logo_instance']->value;?>
">Stay in SSL mode</label>
            </div>
        <?php }?>
        
        <input type="hidden" name="stay_in_ssl_mode_present" value="y" />
        <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_show_stay_in_ssl_mode'] != 'y' || $_smarty_tpl->tpl_vars['show_stay_in_ssl_mode']->value != 'y') {?>
            <input type="hidden" name="stay_in_ssl_mode" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['stay_in_ssl_mode']->value ));?>
" />
        <?php }?>


        <?php if ((isset($_smarty_tpl->tpl_vars['use_intertiki_auth']->value)) && $_smarty_tpl->tpl_vars['use_intertiki_auth']->value == 'y') {?>
            <select name='intertiki'>
                <option value="">local account</option>
                <option value="">-----------</option>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['intertiki']->value, 'i', false, 'k');
$_smarty_tpl->tpl_vars['i']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->do_else = false;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['k']->value;?>
</option>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['prefs']->value['auth_method'] == 'openid_connect' && (isset($_smarty_tpl->tpl_vars['openidconnect_redirect_url']->value)) && $_smarty_tpl->tpl_vars['showloginboxes']->value != 'y') {?>
            <div class="form-group text-center" style="margin-top: 1rem">
                <a href="<?php echo $_smarty_tpl->tpl_vars['openidconnect_redirect_url']->value;?>
" class="btn btn-primary">
                    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tr', array('_0'=>$_smarty_tpl->tpl_vars['prefs']->value['openidconnect_name']));
$_block_repeat=true;
echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['prefs']->value['openidconnect_name']), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Log in via %0<?php $_block_repeat=false;
echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['prefs']->value['openidconnect_name']), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                </a>
            </div>
        <?php }?>
        <div class="social-buttons">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['prefs']->value['socnets_enabledProviders'], 'pNum', false, 'k');
$_smarty_tpl->tpl_vars['pNum']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['pNum']->value) {
$_smarty_tpl->tpl_vars['pNum']->do_else = false;
?>
                <?php $_smarty_tpl->_assignInScope('providerName', $_smarty_tpl->tpl_vars['socnetsAll']->value[$_smarty_tpl->tpl_vars['pNum']->value]);?>
                <?php if ($_smarty_tpl->tpl_vars['prefs']->value["socnets_".((string)$_smarty_tpl->tpl_vars['providerName']->value)."_loginEnabled"] == 'y' && $_smarty_tpl->tpl_vars['mode']->value != "header" && empty($_smarty_tpl->tpl_vars['user']->value)) {?>
                <?php ob_start();
echo mb_strtolower($_smarty_tpl->tpl_vars['providerName']->value, 'UTF-8');
$_prefixVariable3=ob_get_clean();
ob_start();
echo mb_strtolower($_smarty_tpl->tpl_vars['providerName']->value, 'UTF-8');
$_prefixVariable4=ob_get_clean();
echo smarty_function_button(array('_icon_name'=>$_prefixVariable3,'_text'=>"Log in via ".((string)$_smarty_tpl->tpl_vars['providerName']->value),'_class'=>"btn btn-social btn-".$_prefixVariable4,'_script'=>"tiki-login_hybridauth.php",'_auto_args'=>'provider','provider'=>((string)$_smarty_tpl->tpl_vars['providerName']->value),'_title'=>"Log in via ".((string)$_smarty_tpl->tpl_vars['providerName']->value)),$_smarty_tpl);?>

                <?php }?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
        <?php echo $_smarty_tpl->tpl_vars['close_tags']->value;?>

        <?php if ($_smarty_tpl->tpl_vars['prefs']->value['auth_method'] == 'openid' && !$_smarty_tpl->tpl_vars['user']->value && (!(isset($_smarty_tpl->tpl_vars['registration']->value)) || $_smarty_tpl->tpl_vars['registration']->value != 'y')) {?>
            <form method="get" action="tiki-login_openid.php">
                <fieldset>
                    <legend>OpenID Log in</legend>
                    <div class="form-group row mx-0">
                        <div class="input-group input-group-sm">
                            <input class="form-control" type="text" name="openid_url"/>
                            <span class="input-group-append"><button type="submit" class="btn btn-primary" title="Go"><img alt="OpenID Login" class="img-circle" src="img/icons/login-OpenID-bg.gif"></button></span>
                        </div>
                        <span class="form-text"><a class="linkmodule tikihelp" target="_blank" href="http://doc.tiki.org/OpenID">What is OpenID?</a></span>
                    </div>
                </fieldset>
            </form>
        <?php }?>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['mode']->value == "header") {?></div><?php }
$_block_repeat=false;
echo smarty_block_tikimodule(array('error'=>$_smarty_tpl->tpl_vars['module_params']->value['error'],'title'=>$_smarty_tpl->tpl_vars['tpl_module_title']->value,'name'=>"login_box",'flip'=>$_smarty_tpl->tpl_vars['module_params']->value['flip'],'decorations'=>$_smarty_tpl->tpl_vars['module_params']->value['decorations'],'nobox'=>$_smarty_tpl->tpl_vars['module_params']->value['nobox'],'notitle'=>$_smarty_tpl->tpl_vars['module_params']->value['notitle'],'style'=>$_smarty_tpl->tpl_vars['module_params']->value['style']), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
