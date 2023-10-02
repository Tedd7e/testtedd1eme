<?php
/* Smarty version 3.1.48, created on 2023-09-29 11:17:16
  from '/home/teddieme/tedd1eme/templates/tiki-user_preferences.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6516a42c4db394_06176829',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd75ea47bf78bfe786125857de619c7dad430836d' => 
    array (
      0 => '/home/teddieme/tedd1eme/templates/tiki-user_preferences.tpl',
      1 => 1689085248,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:tiki-mytiki_bar.tpl' => 1,
  ),
),false)) {
function content_6516a42c4db394_06176829 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/block.title.php','function'=>'smarty_block_title',),1=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/function.button.php','function'=>'smarty_function_button',),2=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/block.tabset.php','function'=>'smarty_block_tabset',),3=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/block.tab.php','function'=>'smarty_block_tab',),4=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/function.ticket.php','function'=>'smarty_function_ticket',),5=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/modifier.tiki_long_datetime.php','function'=>'smarty_modifier_tiki_long_datetime',),6=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/modifier.stringfix.php','function'=>'smarty_modifier_stringfix',),7=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/function.defaultmapcenter.php','function'=>'smarty_function_defaultmapcenter',),8=>array('file'=>'/home/teddieme/tedd1eme/vendor_bundled/vendor/smarty/smarty/libs/plugins/function.math.php','function'=>'smarty_function_math',),9=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/block.tr.php','function'=>'smarty_block_tr',),10=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/block.remarksbox.php','function'=>'smarty_block_remarksbox',),));
?>

<?php if ($_smarty_tpl->tpl_vars['userwatch']->value != $_smarty_tpl->tpl_vars['user']->value) {?>
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('title', array('help'=>"User Preferences"));
$_block_repeat=true;
echo smarty_block_title(array('help'=>"User Preferences"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>User Preferences: <?php echo $_smarty_tpl->tpl_vars['userwatch']->value;
$_block_repeat=false;
echo smarty_block_title(array('help'=>"User Preferences"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
} else { ?>
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('title', array('help'=>"User Preferences"));
$_block_repeat=true;
echo smarty_block_title(array('help'=>"User Preferences"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>User Preferences<?php $_block_repeat=false;
echo smarty_block_title(array('help'=>"User Preferences"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
if ($_smarty_tpl->tpl_vars['userwatch']->value == $_smarty_tpl->tpl_vars['user']->value || $_smarty_tpl->tpl_vars['userwatch']->value == '') {?>
    <?php $_smarty_tpl->_subTemplateRender('file:tiki-mytiki_bar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
if ($_smarty_tpl->tpl_vars['tiki_p_admin_users']->value == 'y') {?>
    <div class="t_navbar btn-group form-group row">
        <?php $_smarty_tpl->_assignInScope('thisuser', $_smarty_tpl->tpl_vars['userinfo']->value['login']);?>
        <?php echo smarty_function_button(array('href'=>"tiki-assignuser.php?assign_user=".((string)$_smarty_tpl->tpl_vars['thisuser']->value),'_type'=>"link",'_text'=>"Assign Group"),$_smarty_tpl);?>

        <?php echo smarty_function_button(array('href'=>"tiki-user_information.php?view_user=".((string)$_smarty_tpl->tpl_vars['thisuser']->value),'_type'=>"link",'_text'=>"User Information"),$_smarty_tpl);?>

    </div>
<?php }
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tabset', array('name'=>"mytiki_user_preference"));
$_block_repeat=true;
echo smarty_block_tabset(array('name'=>"mytiki_user_preference"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_userPreferences'] == 'y') {?>
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tab', array('name'=>"Personal Information"));
$_block_repeat=true;
echo smarty_block_tab(array('name'=>"Personal Information"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <h2>Personal Information</h2>
            <form role="form" action="tiki-user_preferences.php" method="post" class="form-horizontal">
                <?php echo smarty_function_ticket(array(),$_smarty_tpl);?>

                <input type="hidden" name="view_user" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['userwatch']->value ));?>
">
                <div class="form-group row">
                    <label class="col-form-label col-md-4" for="userIn">
                        User
                    </label>
                    <div class="col-md-8">
                        <input class="form-control" disabled value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['userinfo']->value['login'] ));?>
">
                        <span class="form-text">
                            Last login: <?php echo smarty_modifier_tiki_long_datetime($_smarty_tpl->tpl_vars['userinfo']->value['lastLogin']);?>

                        </span>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-form-label col-md-4" for="realName">
                        Real Name
                    </label>
                    <div class="col-md-8">
                        <input class="form-control" type="text" name="realName" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['user_prefs']->value['realName'] ));?>
"
                        <?php if ($_smarty_tpl->tpl_vars['prefs']->value['auth_ldap_nameattr'] == '' || $_smarty_tpl->tpl_vars['prefs']->value['auth_method'] != 'ldap') {
} else { ?>disabled<?php }?>>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-form-label col-md-4">
                        Profile picture
                    </label>
                    <div class="col-md-8">
                        <?php echo $_smarty_tpl->tpl_vars['avatar']->value;?>

                        <?php if ($_smarty_tpl->tpl_vars['prefs']->value['user_use_gravatar'] == 'y') {?>
                            <a class="link" href="http://www.gravatar.com" target="_blank">Pick user profile picture</a>
                        <?php } else { ?>
                            <a class="link" href="tiki-pick_avatar.php<?php if ($_smarty_tpl->tpl_vars['userwatch']->value != $_smarty_tpl->tpl_vars['user']->value) {?>?view_user=<?php echo $_smarty_tpl->tpl_vars['userwatch']->value;
}?>">Pick user profile picture</a>
                        <?php }?>
                    </div>
                </div>
                <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_community_gender'] == 'y') {?>
                    <div class="form-group row">
                        <label class="col-form-label col-md-4" for="gender">
                            Gender
                        </label>
                        <div class="col-md-8">
                            <label>
                                <input type="radio" name="gender" value="Male" <?php if ($_smarty_tpl->tpl_vars['user_prefs']->value['gender'] == 'Male') {?>checked="checked"<?php }?>> Male
                            </label>
                            <label>
                                <input type="radio" name="gender" value="Female" <?php if ($_smarty_tpl->tpl_vars['user_prefs']->value['gender'] == 'Female') {?>checked="checked"<?php }?>> Female
                            </label>
                            <label>
                                <input type="radio" name="gender" value="Hidden" <?php if ($_smarty_tpl->tpl_vars['user_prefs']->value['gender'] == 'Hidden') {?>checked="checked"<?php }?>> Hidden
                            </label>
                        </div>
                    </div>
                <?php }?>
                <div class="form-group row">
                    <label class="col-form-label col-md-4" for="country">
                        Country
                    </label>
                    
                        
                    
                    <div class="col-md-8">
                        <select name="country" id="country" class="form-control">
                            <option value="Other" <?php if ($_smarty_tpl->tpl_vars['user_prefs']->value['country'] == "Other") {?>selected="selected"<?php }?>>
                                Other
                            </option>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['flags']->value, 'flag', false, 'fval');
$_smarty_tpl->tpl_vars['flag']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['fval']->value => $_smarty_tpl->tpl_vars['flag']->value) {
$_smarty_tpl->tpl_vars['flag']->do_else = false;
if ($_smarty_tpl->tpl_vars['fval']->value != "Other") {?><option value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['fval']->value ));?>
" <?php if ($_smarty_tpl->tpl_vars['user_prefs']->value['country'] == $_smarty_tpl->tpl_vars['fval']->value) {?>selected="selected"<?php }?>><?php echo smarty_modifier_stringfix($_smarty_tpl->tpl_vars['flag']->value);?>
</option><?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-form-label col-md-4" for="location">
                        Location
                    </label>
                    <div class="col-md-8 mb-5" style="height: 250px;" data-geo-center="<?php echo smarty_function_defaultmapcenter(array(),$_smarty_tpl);?>
" data-target-field="location">
                        <div class="map-container" style="height: 250px;" data-geo-center="<?php echo smarty_function_defaultmapcenter(array(),$_smarty_tpl);?>
" data-target-field="location"></div>
                    </div>
                    <input type="hidden" name="location" id="location" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['location']->value ));?>
">
                </div>
                <div class="form-group row">
                    <label class="col-form-label col-md-4" for="homePage">
                        Homepage URL
                    </label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" name="homePage" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['user_prefs']->value['homePage'] ));?>
">
                    </div>
                </div>
                <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki'] == 'y' && $_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_userpage'] == 'y') {?>
                    <div class="form-group row">
                        <label class="col-form-label col-md-4">
                            Your Personal Wiki Page
                        </label>
                        <div class="col-md-8">
                            <?php if ($_smarty_tpl->tpl_vars['userPageExists']->value == 'y') {?>
                                <a class="link" href="tiki-index.php?page=<?php echo $_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_userpage_prefix'];
echo $_smarty_tpl->tpl_vars['userinfo']->value['login'];?>
" title="View">
                                    <?php echo $_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_userpage_prefix'];
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['userinfo']->value['login'] ));?>

                                </a>
                                (<a class="link" href="tiki-editpage.php?page=<?php echo $_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_userpage_prefix'];
echo $_smarty_tpl->tpl_vars['userinfo']->value['login'];?>
">
                                    Edit
                                </a>)
                            <?php } else { ?>
                                <?php echo $_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_userpage_prefix'];
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['userinfo']->value['login'] ));?>

                                (<a class="link" href="tiki-editpage.php?page=<?php echo $_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_userpage_prefix'];
echo $_smarty_tpl->tpl_vars['userinfo']->value['login'];?>
">
                                Create
                            </a>)
                            <?php }?>
                        </div>
                    </div>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['prefs']->value['userTracker'] == 'y' && $_smarty_tpl->tpl_vars['usertrackerId']->value) {?>
                    <div class="form-group row">
                        <?php if ($_smarty_tpl->tpl_vars['tiki_p_admin']->value == 'y' && !empty($_smarty_tpl->tpl_vars['userwatch']->value) && $_smarty_tpl->tpl_vars['userwatch']->value != $_smarty_tpl->tpl_vars['user']->value) {?>
                            <label class="col-form-label col-md-4">User's personal tracker information</label>
                            <div class="col-md-8">
                                <a class="link" href="tiki-view_tracker_item.php?trackerId=<?php echo $_smarty_tpl->tpl_vars['usertrackerId']->value;?>
&user=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['userwatch']->value,'url' ));?>
&view=+user">
                                    View extra information
                                </a>
                            </div>
                        <?php } else { ?>
                            <label class="col-form-label col-md-4">Your personal tracker information</label>
                            <div class="col-md-8">
                                <a class="link" href="tiki-view_tracker_item.php?view=+user">
                                    View extra information
                                </a>
                            </div>
                        <?php }?>
                    </div>
                <?php }?>
                
                <?php
$__section_ir_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['customfields']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_ir_0_total = $__section_ir_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_ir'] = new Smarty_Variable(array());
if ($__section_ir_0_total !== 0) {
for ($__section_ir_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_ir']->value['index'] = 0; $__section_ir_0_iteration <= $__section_ir_0_total; $__section_ir_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_ir']->value['index']++){
?>
                    <?php if ($_smarty_tpl->tpl_vars['customfields']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ir']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ir']->value['index'] : null)]['show']) {?>
                        <label><?php echo $_smarty_tpl->tpl_vars['customfields']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ir']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ir']->value['index'] : null)]['label'];?>
:
                        <input type="<?php echo $_smarty_tpl->tpl_vars['customfields']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ir']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ir']->value['index'] : null)]['type'];?>
" name="<?php echo $_smarty_tpl->tpl_vars['customfields']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ir']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ir']->value['index'] : null)]['prefName'];?>
"
                            value="<?php echo $_smarty_tpl->tpl_vars['customfields']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ir']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ir']->value['index'] : null)]['value'];?>
" size="<?php echo $_smarty_tpl->tpl_vars['customfields']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ir']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ir']->value['index'] : null)]['size'];?>
"></label>
                    <?php }?>
                <?php
}
}
?>
                <div class="form-group row">
                    <label class="col-form-label col-md-4" for="user_information">
                        User Information
                    </label>
                    <div class="col-md-8">
                        <select class="form-control" id="user_information" name="user_information">
                            <option value='private' <?php if ($_smarty_tpl->tpl_vars['user_prefs']->value['user_information'] == 'private') {?>selected="selected"<?php }?>>
                                Private
                            </option>
                            <option value='public' <?php if ($_smarty_tpl->tpl_vars['user_prefs']->value['user_information'] == 'public') {?>selected="selected"<?php }?>>
                                Public
                            </option>
                        </select>
                    </div>
                </div>
                <div class="submit text-center">
                    <input type="submit" class="btn btn-primary" name="new_info" value="Save changes">
                </div>
            </form>
        <?php $_block_repeat=false;
echo smarty_block_tab(array('name'=>"Personal Information"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tab', array('name'=>"Preferences"));
$_block_repeat=true;
echo smarty_block_tab(array('name'=>"Preferences"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <h2>Preferences</h2>
            <legend>General settings</legend>
            <form role="form" action="tiki-user_preferences.php" method="post" class="form-horizontal">
                <?php echo smarty_function_ticket(array(),$_smarty_tpl);?>

                <input type="hidden" name="view_user" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['userwatch']->value ));?>
">
                <div class="form-group row">
                    <label class="col-form-label col-md-4" for="email_isPublic">
                        Is email public?
                    </label>
                    <div class="col-md-8">
                        <?php if ($_smarty_tpl->tpl_vars['userinfo']->value['email']) {?>
                            <select id="email_isPublic" name="email_isPublic" class="form-control">
                                <?php
$__section_ix_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['scramblingMethods']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_ix_1_total = $__section_ix_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_ix'] = new Smarty_Variable(array());
if ($__section_ix_1_total !== 0) {
for ($__section_ix_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] = 0; $__section_ix_1_iteration <= $__section_ix_1_total; $__section_ix_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']++){
?>
                                    <option value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['scramblingMethods']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)] ));?>
" <?php if ($_smarty_tpl->tpl_vars['user_prefs']->value['email_isPublic'] == $_smarty_tpl->tpl_vars['scramblingMethods']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]) {?>selected="selected"<?php }?>>
                                        <?php echo $_smarty_tpl->tpl_vars['scramblingEmails']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)];?>

                                    </option>
                                <?php
}
}
?>
                            </select>
                            <span class="form-text">If email is public, select a scrambling method to prevent spam</span>
                        <?php } else { ?>
                            <p class="form-control-plaintext">Unavailable - please set your email below</p>
                        <?php }?>
                    </div>
                </div>
                <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_perspective'] == 'y' && count($_smarty_tpl->tpl_vars['perspectives']->value) > 0) {?>
                <div class="form-group row">
                    <label class="col-form-label col-md-4" for="perspective_preferred">
                        Preferred perspective
                    </label>
                    <div class="col-md-8">
                        <select id="perspective_preferred" name="perspective_preferred" class="form-control">
                            <option value="">----</option>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['perspectives']->value, 'persp');
$_smarty_tpl->tpl_vars['persp']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['persp']->value) {
$_smarty_tpl->tpl_vars['persp']->do_else = false;
?>
                                <option value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['persp']->value['perspectiveId'] ));?>
"<?php if ($_smarty_tpl->tpl_vars['persp']->value['perspectiveId'] == $_smarty_tpl->tpl_vars['user_prefs']->value['perspective_preferred']) {?> selected="selected"<?php }?>><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['persp']->value['name'] ));?>
</option>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </select>
                    </div>
                </div>
                <?php }?>
                <div class="form-group row">
                    <label class="col-form-label col-md-4" for="mailCharset">
                        Email character set
                    </label>
                    <div class="col-md-8">
                        <select id="mailCharset" name="mailCharset" class="form-control">
                            <?php
$__section_ix_2_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['mailCharsets']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_ix_2_total = $__section_ix_2_loop;
$_smarty_tpl->tpl_vars['__smarty_section_ix'] = new Smarty_Variable(array());
if ($__section_ix_2_total !== 0) {
for ($__section_ix_2_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] = 0; $__section_ix_2_iteration <= $__section_ix_2_total; $__section_ix_2_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']++){
?>
                                <option value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['mailCharsets']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)] ));?>
" <?php if ($_smarty_tpl->tpl_vars['user_prefs']->value['mailCharset'] == $_smarty_tpl->tpl_vars['mailCharsets']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]) {?>selected="selected"<?php }?>>
                                    <?php echo $_smarty_tpl->tpl_vars['mailCharsets']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)];?>

                                </option>
                            <?php
}
}
?>
                        </select>
                        <span class="form-text">Special character set for your email application</span>
                    </div>
                </div>
                <?php if ($_smarty_tpl->tpl_vars['prefs']->value['change_theme'] == 'y' && empty($_smarty_tpl->tpl_vars['group_theme']->value)) {?>
                    <div class="form-group row">
                        <label class="col-form-label col-md-4" for="mytheme">
                            Theme
                        </label>
                        <div class="col-md-8">
                            <select id="mytheme" name="mytheme" class="form-control">
                                <?php ob_start();
if ($_smarty_tpl->tpl_vars['userwatch_themeOption']->value) {
echo "/";
echo (string)$_smarty_tpl->tpl_vars['userwatch_themeOption']->value;
}
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->_assignInScope('userwatch_themeoption', ((string)$_smarty_tpl->tpl_vars['userwatch_theme']->value).$_prefixVariable1);?>
                                <option value="" class="text-muted bg-info">Site theme (<?php echo $_smarty_tpl->tpl_vars['prefs']->value['theme'];
if (!empty($_smarty_tpl->tpl_vars['prefs']->value['theme_option'])) {?>/<?php echo $_smarty_tpl->tpl_vars['prefs']->value['theme_option'];
}?>)</option>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['available_themesandoptions']->value, 'theme_name', false, 'theme');
$_smarty_tpl->tpl_vars['theme_name']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['theme']->value => $_smarty_tpl->tpl_vars['theme_name']->value) {
$_smarty_tpl->tpl_vars['theme_name']->do_else = false;
?>
                                    <option value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['theme']->value ));?>
" <?php if ($_smarty_tpl->tpl_vars['userwatch_themeoption']->value == $_smarty_tpl->tpl_vars['theme']->value) {?>selected="selected"<?php }?>><?php echo ucwords($_smarty_tpl->tpl_vars['theme_name']->value);?>
</option>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </select>
                        </div>
                    </div>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['prefs']->value['change_language'] == 'y') {?>
                    <div class="form-group row clearfix">
                        <label class="col-form-label col-md-4" for="language">
                            Language
                        </label>
                        <div class="col-md-8">
                            <select id="language" name="language" class="form-control">
                                <?php
$__section_ix_3_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['languages']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_ix_3_total = $__section_ix_3_loop;
$_smarty_tpl->tpl_vars['__smarty_section_ix'] = new Smarty_Variable(array());
if ($__section_ix_3_total !== 0) {
for ($__section_ix_3_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] = 0; $__section_ix_3_iteration <= $__section_ix_3_total; $__section_ix_3_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']++){
?>
                                    <option value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['languages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['value'] ));?>
" <?php if ($_smarty_tpl->tpl_vars['user_prefs']->value['language'] == $_smarty_tpl->tpl_vars['languages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['value']) {?>selected="selected"<?php }?>>
                                        <?php echo $_smarty_tpl->tpl_vars['languages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['name'];?>

                                    </option>
                                <?php
}
}
?>
                                <option value='' <?php if (!$_smarty_tpl->tpl_vars['user_prefs']->value['language']) {?>selected="selected"<?php }?>>
                                    Site default
                                </option>
                            </select>
                        </div>
                    </div>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['tiki_p_admin']->value == 'y') {?>
                    <div class="form-group row clearfix">
                        <label class="col-form-label col-md-4" for="languageAdmin">
                            Admin Language
                        </label>
                        <div class="col-md-8">
                            <select id="languageAdmin" name="languageAdmin" class="form-control">
                                <?php
$__section_ix_4_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['languages']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_ix_4_total = $__section_ix_4_loop;
$_smarty_tpl->tpl_vars['__smarty_section_ix'] = new Smarty_Variable(array());
if ($__section_ix_4_total !== 0) {
for ($__section_ix_4_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] = 0; $__section_ix_4_iteration <= $__section_ix_4_total; $__section_ix_4_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']++){
?>
                                    <option value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['languages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['value'] ));?>
" <?php if ($_smarty_tpl->tpl_vars['user_prefs']->value['language_admin'] == $_smarty_tpl->tpl_vars['languages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['value']) {?>selected="selected"<?php }?>>
                                        <?php echo $_smarty_tpl->tpl_vars['languages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['name'];?>

                                    </option>
                                <?php
}
}
?>
                                <option value='' <?php if (!$_smarty_tpl->tpl_vars['user_prefs']->value['language_admin']) {?>selected="selected"<?php }?>>
                                    Site default
                                </option>
                            </select>
                        </div>
                    </div>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_multilingual'] == 'y') {?>
                    <?php if ($_smarty_tpl->tpl_vars['user_prefs']->value['read_language']) {?>
                        <div id="read-lang-div" class="form-group row clearfix">
                    <?php } else { ?>
                        <div class="form-group row clearfix">
                            <div class="col-md-8 offset-md-4">
                                <a href="javascript:void(0)" onclick="document.getElementById('read-lang-div').style.display='block';this.style.display='none';">
                                    Can you read more languages?
                                </a>
                            </div>
                        </div>
                        <div id="read-lang-div" style="display: none" class="form-group row clearfix">
                    <?php }?>
                    <label class="col-form-label col-md-4" for="read-language">Other languages you can read</label>
                    <div class="col-md-8">
                        <select class="form-control" id="read-language" name="_blank" onchange="document.getElementById('read-language-input').value+=' '+this.options[this.selectedIndex].value+' '">
                            <option value="">Select language...</option>
                            <?php
$__section_ix_5_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['languages']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_ix_5_total = $__section_ix_5_loop;
$_smarty_tpl->tpl_vars['__smarty_section_ix'] = new Smarty_Variable(array());
if ($__section_ix_5_total !== 0) {
for ($__section_ix_5_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] = 0; $__section_ix_5_iteration <= $__section_ix_5_total; $__section_ix_5_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']++){
?>
                                <option value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['languages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['value'] ));?>
">
                                    <?php echo $_smarty_tpl->tpl_vars['languages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['name'];?>

                                </option>
                            <?php
}
}
?>
                        </select>
                        <div class="form-text">Select from the dropdown to add automatically to the list below</div>
                    </div>
                    <label for="read-language-input" class="col-md-8 offset-md-4">
                        <input class="form-control" id="read-language-input" type="text" name="read_language" value="<?php echo $_smarty_tpl->tpl_vars['user_prefs']->value['read_language'];?>
">
                    </label>
                    </div>
                <?php }?>
                <div class="form-group row clearfix">
                    <label class="col-form-label col-md-4" for="userbreadCrumb">
                        Number of visited pages to remember
                    </label>
                    <div class="col-md-8">
                        <select id="userbreadCrumb" name="userbreadCrumb" class="form-control">
                            <option value="1" <?php if ($_smarty_tpl->tpl_vars['user_prefs']->value['userbreadCrumb'] == 1) {?>selected="selected"<?php }?>>1</option>
                            <option value="2" <?php if ($_smarty_tpl->tpl_vars['user_prefs']->value['userbreadCrumb'] == 2) {?>selected="selected"<?php }?>>2</option>
                            <option value="3" <?php if ($_smarty_tpl->tpl_vars['user_prefs']->value['userbreadCrumb'] == 3) {?>selected="selected"<?php }?>>3</option>
                            <option value="4" <?php if ($_smarty_tpl->tpl_vars['user_prefs']->value['userbreadCrumb'] == 4) {?>selected="selected"<?php }?>>4</option>
                            <option value="5" <?php if ($_smarty_tpl->tpl_vars['user_prefs']->value['userbreadCrumb'] == 5) {?>selected="selected"<?php }?>>5</option>
                            <option value="10" <?php if ($_smarty_tpl->tpl_vars['user_prefs']->value['userbreadCrumb'] == 10) {?>selected="selected"<?php }?>>10</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row clearfix">
                    <label class="col-form-label col-md-4" for="display_timezone">
                        Displayed timezone
                    </label>
                    <div class="col-md-8">
                        <select name="display_timezone" class="form-control" id="display_timezone"<?php if ($_smarty_tpl->tpl_vars['warning_site_timezone_set']->value == 'y') {?> disabled<?php }?>>
                            <option value="" style="font-style:italic;">
                                Detect user time zone if browser allows, otherwise site default
                            </option>
                            <option value="Site" style="font-style:italic;border-bottom:1px dashed #666;"
                                    <?php if ((isset($_smarty_tpl->tpl_vars['user_prefs']->value['display_timezone'])) && $_smarty_tpl->tpl_vars['user_prefs']->value['display_timezone'] == 'Site') {?> selected="selected"<?php }?>>
                                Site default
                            </option>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['timezones']->value, 'tzinfo', false, 'tz');
$_smarty_tpl->tpl_vars['tzinfo']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tz']->value => $_smarty_tpl->tpl_vars['tzinfo']->value) {
$_smarty_tpl->tpl_vars['tzinfo']->do_else = false;
?>
                                <?php echo smarty_function_math(array('equation'=>"floor(x / (3600000))",'x'=>$_smarty_tpl->tpl_vars['tzinfo']->value['offset'],'assign'=>'offset'),$_smarty_tpl);?>

                                <?php echo smarty_function_math(array('equation'=>"(x - (y*3600000)) / 60000",'y'=>$_smarty_tpl->tpl_vars['offset']->value,'x'=>$_smarty_tpl->tpl_vars['tzinfo']->value['offset'],'assign'=>'offset_min','format'=>"%02d"),$_smarty_tpl);?>

                                <option value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['tz']->value ));?>
"<?php if ((isset($_smarty_tpl->tpl_vars['user_prefs']->value['display_timezone'])) && $_smarty_tpl->tpl_vars['user_prefs']->value['display_timezone'] == $_smarty_tpl->tpl_vars['tz']->value) {?> selected="selected"<?php }?>>
                                    <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['tz']->value ));?>
 (UTC<?php if ($_smarty_tpl->tpl_vars['offset']->value >= 0) {?>+<?php }
echo $_smarty_tpl->tpl_vars['offset']->value;?>
h<?php if ($_smarty_tpl->tpl_vars['offset_min']->value > 0) {
echo $_smarty_tpl->tpl_vars['offset_min']->value;
}?>)
                                </option>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </select>
                        <?php if ($_smarty_tpl->tpl_vars['warning_site_timezone_set']->value == 'y') {?>
                            <br/><strong>Warning:</strong> <i><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tr', array('_0'=>$_smarty_tpl->tpl_vars['display_timezone']->value));
$_block_repeat=true;
echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['display_timezone']->value), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Site time zone <strong>%0</strong> is enforced and overrides user preferences<?php $_block_repeat=false;
echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['display_timezone']->value), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></i>
                        <?php }?>
                    </div>
                </div>

                <div class="form-check">
                    <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="display_12hr_clock" <?php if ($_smarty_tpl->tpl_vars['user_prefs']->value['display_12hr_clock'] == 'y') {?>checked="checked"<?php }?>>Use 12-hour clock in time selectors
                    </label>
                </div>
                <?php if (1 == 1 || $_smarty_tpl->tpl_vars['prefs']->value['feature_community_mouseover'] == 'y') {?>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" name="show_mouseover_user_info" <?php if ($_smarty_tpl->tpl_vars['show_mouseover_user_info']->value == 'y') {?>checked="checked"<?php }?>>Display info tooltip on mouseover for every user who allows his/her information to be public
                        </label>
                    </div>
                <?php }?>

                <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_messages'] == 'y' && $_smarty_tpl->tpl_vars['tiki_p_messages']->value == 'y') {?>
                    <legend>User Messages</legend>
                    <div class="form-group row clearfix">
                        <label class="col-form-label col-md-4" for="mess_maxRecords">
                            Messages per page
                        </label>
                        <div class="col-md-8">
                            <select id="mess_maxRecords" name="mess_maxRecords" class="form-control">
                                <option value="2" <?php if ($_smarty_tpl->tpl_vars['user_prefs']->value['mess_maxRecords'] == 2) {?>selected="selected"<?php }?>>2</option>
                                <option value="5" <?php if ($_smarty_tpl->tpl_vars['user_prefs']->value['mess_maxRecords'] == 5) {?>selected="selected"<?php }?>>5</option>
                                <option value="10" <?php if (empty($_smarty_tpl->tpl_vars['user_prefs']->value['mess_maxRecords']) || $_smarty_tpl->tpl_vars['user_prefs']->value['mess_maxRecords'] == 10) {?>selected="selected"<?php }?>>10</option>
                                <option value="20" <?php if ($_smarty_tpl->tpl_vars['user_prefs']->value['mess_maxRecords'] == 20) {?>selected="selected"<?php }?>>20</option>
                                <option value="30" <?php if ($_smarty_tpl->tpl_vars['user_prefs']->value['mess_maxRecords'] == 30) {?>selected="selected"<?php }?>>30</option>
                                <option value="40" <?php if ($_smarty_tpl->tpl_vars['user_prefs']->value['mess_maxRecords'] == 40) {?>selected="selected"<?php }?>>40</option>
                                <option value="50" <?php if ($_smarty_tpl->tpl_vars['user_prefs']->value['mess_maxRecords'] == 50) {?>selected="selected"<?php }?>>50</option>
                            </select>
                        </div>
                    </div>
                    <div class="clearfix">
                        <?php if (1 == 1 || $_smarty_tpl->tpl_vars['prefs']->value['allowmsg_is_optional'] == 'y') {?>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" name="allowMsgs" <?php if ($_smarty_tpl->tpl_vars['user_prefs']->value['allowMsgs'] == 'y') {?>checked="checked"<?php }?>>
                                    Allow messages from other users
                                </label>
                            </div>
                        <?php }?>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" name="mess_sendReadStatus" <?php if ($_smarty_tpl->tpl_vars['user_prefs']->value['mess_sendReadStatus'] == 'y') {?>checked="checked"<?php }?>>
                                Notify sender when reading his mail
                            </label>
                        </div>
                    </div>
                    <div class="form-group row clearfix">
                        <label class="col-form-label col-md-4" for="minPrio">
                            Message priority notification
                        </label>
                        <div class="col-md-8">
                            <select class="form-control" id="minPrio" name="minPrio">
                                <option value="1" <?php if ($_smarty_tpl->tpl_vars['user_prefs']->value['minPrio'] == 1) {?>selected="selected"<?php }?>>1 -Lowest-</option>
                                <option value="2" <?php if ($_smarty_tpl->tpl_vars['user_prefs']->value['minPrio'] == 2) {?>selected="selected"<?php }?>>2 -Low-</option>
                                <option value="3" <?php if ($_smarty_tpl->tpl_vars['user_prefs']->value['minPrio'] == 3) {?>selected="selected"<?php }?>>3 -Normal-</option>
                                <option value="4" <?php if ($_smarty_tpl->tpl_vars['user_prefs']->value['minPrio'] == 4) {?>selected="selected"<?php }?>>4 -High-</option>
                                <option value="5" <?php if ($_smarty_tpl->tpl_vars['user_prefs']->value['minPrio'] == 5) {?>selected="selected"<?php }?>>5 -Very High-</option>
                                <option value="6" <?php if ($_smarty_tpl->tpl_vars['user_prefs']->value['minPrio'] == 6) {?>selected="selected"<?php }?>>none</option>
                            </select>
                            <span class="form-text">Send me an email for messages with priority equal to or greater than</span>
                        </div>
                    </div>
                    <div class="form-group row clearfix">
                        <label class="col-form-label col-md-4" for="mess_archiveAfter" >
                            Read message auto-archiving
                        </label>
                        <div class="col-md-8">
                            <select id="mess_archiveAfter" name="mess_archiveAfter" class="form-control">
                                <option value="0" <?php if ($_smarty_tpl->tpl_vars['user_prefs']->value['mess_archiveAfter'] == 0) {?>selected="selected"<?php }?>>never</option>
                                <option value="1" <?php if ($_smarty_tpl->tpl_vars['user_prefs']->value['mess_archiveAfter'] == 1) {?>selected="selected"<?php }?>>1</option>
                                <option value="2" <?php if ($_smarty_tpl->tpl_vars['user_prefs']->value['mess_archiveAfter'] == 2) {?>selected="selected"<?php }?>>2</option>
                                <option value="5" <?php if ($_smarty_tpl->tpl_vars['user_prefs']->value['mess_archiveAfter'] == 5) {?>selected="selected"<?php }?>>5</option>
                                <option value="10" <?php if ($_smarty_tpl->tpl_vars['user_prefs']->value['mess_archiveAfter'] == 10) {?>selected="selected"<?php }?>>10</option>
                                <option value="20" <?php if ($_smarty_tpl->tpl_vars['user_prefs']->value['mess_archiveAfter'] == 20) {?>selected="selected"<?php }?>>20</option>
                                <option value="30" <?php if ($_smarty_tpl->tpl_vars['user_prefs']->value['mess_archiveAfter'] == 30) {?>selected="selected"<?php }?>>30</option>
                                <option value="40" <?php if ($_smarty_tpl->tpl_vars['user_prefs']->value['mess_archiveAfter'] == 40) {?>selected="selected"<?php }?>>40</option>
                                <option value="50" <?php if ($_smarty_tpl->tpl_vars['user_prefs']->value['mess_archiveAfter'] == 50) {?>selected="selected"<?php }?>>50</option>
                                <option value="60" <?php if ($_smarty_tpl->tpl_vars['user_prefs']->value['mess_archiveAfter'] == 60) {?>selected="selected"<?php }?>>60</option>
                            </select>
                            <span class="form-text">Auto-archive read messages after selected days</span>
                        </div>
                    </div>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_tasks'] == 'y' && $_smarty_tpl->tpl_vars['tiki_p_tasks']->value == 'y') {?>
                    <legend>User Tasks</legend>
                    <div class="form-group row">
                        <label class="col-form-label col-md-4" for="tasks_maxRecords">
                            Tasks per page
                        </label>
                        <div class="col-md-8">
                            <select class="form-control" id="tasks_maxRecords" name="tasks_maxRecords">
                                <option value="2" <?php if ($_smarty_tpl->tpl_vars['user_prefs']->value['tasks_maxRecords'] == 2) {?>selected="selected"<?php }?>>2</option>
                                <option value="5" <?php if ($_smarty_tpl->tpl_vars['user_prefs']->value['tasks_maxRecords'] == 5) {?>selected="selected"<?php }?>>5</option>
                                <option value="10" <?php if ($_smarty_tpl->tpl_vars['user_prefs']->value['tasks_maxRecords'] == 10) {?>selected="selected"<?php }?>>10</option>
                                <option value="20" <?php if ($_smarty_tpl->tpl_vars['user_prefs']->value['tasks_maxRecords'] == 20) {?>selected="selected"<?php }?>>20</option>
                                <option value="30" <?php if ($_smarty_tpl->tpl_vars['user_prefs']->value['tasks_maxRecords'] == 30) {?>selected="selected"<?php }?>>30</option>
                                <option value="40" <?php if ($_smarty_tpl->tpl_vars['user_prefs']->value['tasks_maxRecords'] == 40) {?>selected="selected"<?php }?>>40</option>
                                <option value="50" <?php if ($_smarty_tpl->tpl_vars['user_prefs']->value['tasks_maxRecords'] == 50) {?>selected="selected"<?php }?>>50</option>
                            </select>
                        </div>
                    </div>
                <?php }?>
                <legend>My Account</legend>
                <?php if ($_smarty_tpl->tpl_vars['prefs']->value['xmpp_feature'] == 'y') {?>
                    <div class="form-group row mb-2">
                        <label class="col-form-label col-md-4" for="xmpp_username">
                            XMPP account JID
                        </label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="xmpp_jid" id="xmpp_jid" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['user_prefs']->value['xmpp_jid'] ));?>
">
                            <p><small>If empty, Tiki will provide default value</small></p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-md-4" for="xmpp_password">
                            XMPP account password
                        </label>
                        <div class="col-md-8">
                            <input type="password" class="form-control" name="xmpp_password" id="xmpp_password" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['user_prefs']->value['xmpp_password'] ));?>
" autocomplete="new-password">
                            <p><small>This password will be stored in database</small></p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-md-4" for="xmpp_server_http_bind">
                            XMPP http-bind URL
                        </label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="xmpp_custom_server_http_bind" id="xmpp_custom_server_http_bind" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['user_prefs']->value['xmpp_custom_server_http_bind'] ));?>
">
                            <p><small>You have to provide this when using custom XMPP server</small></p>
                        </div>
                    </div>
                <?php }?>

                <div class="row justify-content-end mb-2">
                    <div class="col-md-8">
                    <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki'] == 'y') {?>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" name="mytiki_pages" <?php if ($_smarty_tpl->tpl_vars['user_prefs']->value['mytiki_pages'] == 'y') {?>checked="checked"<?php }?>>My pages
                            </label>
                        </div>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_blogs'] == 'y') {?>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" name="mytiki_blogs" <?php if ($_smarty_tpl->tpl_vars['user_prefs']->value['mytiki_blogs'] == 'y') {?>checked="checked"<?php }?>>My blogs
                            </label>
                        </div>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_messages'] == 'y' && $_smarty_tpl->tpl_vars['tiki_p_messages']->value == 'y') {?>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" name="mytiki_msgs" <?php if ($_smarty_tpl->tpl_vars['user_prefs']->value['mytiki_msgs'] == 'y') {?>checked="checked"<?php }?>>My messages
                            </label>
                        </div>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_tasks'] == 'y' && $_smarty_tpl->tpl_vars['tiki_p_tasks']->value == 'y') {?>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" name="mytiki_tasks" <?php if ($_smarty_tpl->tpl_vars['user_prefs']->value['mytiki_tasks'] == 'y') {?>checked="checked"<?php }?>>My tasks
                            </label>
                        </div>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_forums'] == 'y' && $_smarty_tpl->tpl_vars['tiki_p_forum_read']->value == 'y') {?>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" name="mytiki_forum_topics" <?php if ($_smarty_tpl->tpl_vars['user_prefs']->value['mytiki_forum_topics'] == 'y') {?>checked="checked"<?php }?>>My forum topics
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" name="mytiki_forum_replies" <?php if ($_smarty_tpl->tpl_vars['user_prefs']->value['mytiki_forum_replies'] == 'y') {?>checked="checked"<?php }?>>My forum replies
                            </label>
                        </div>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_trackers'] == 'y') {?>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" name="mytiki_items" <?php if ($_smarty_tpl->tpl_vars['user_prefs']->value['mytiki_items'] == 'y') {?>checked="checked"<?php }?>>My user items
                            </label>
                        </div>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_articles'] == 'y') {?>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" name="mytiki_articles" <?php if ($_smarty_tpl->tpl_vars['user_prefs']->value['mytiki_articles'] == 'y') {?>checked="checked"<?php }?>>My articles
                            </label>
                        </div>
                    <?php }?>
                </div>
                </div>
                <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_userlevels'] == 'y') {?>
                    <div class="form-group row clearfix">
                        <label class="col-form-label col-md-4" for="mylevel">
                            My level
                        </label>
                        <div class="col-md-8">
                            <select class="form-control" name="mylevel" id="mylevel">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['prefs']->value['userlevels'], 'lev', false, 'levn');
$_smarty_tpl->tpl_vars['lev']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['levn']->value => $_smarty_tpl->tpl_vars['lev']->value) {
$_smarty_tpl->tpl_vars['lev']->do_else = false;
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['levn']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['user_prefs']->value['mylevel'] == $_smarty_tpl->tpl_vars['levn']->value) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['lev']->value;?>
</option>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </select>
                        </div>
                    </div>
                <?php }?>
                <div class="form-group row">
                        <label class="col-form-label col-md-4" for="remember_closed_rboxes">
                            Keep closed remarksbox hidden
                        </label>
                        <div class="col-md-8">
                            <input type="checkbox" name="remember_closed_rboxes" id="remember_closed_rboxes" <?php if ($_smarty_tpl->tpl_vars['user_prefs']->value['remember_closed_rboxes'] == 'y') {?>checked="checked"<?php }?>>
                            <p class="text-info">
                                Remember which remarksbox (alert box) you have closed and don't show them again.<br>
                            </p>
                        </div>
                    <label class="col-form-label col-md-4">
                        Reset remark boxes visibility
                    </label>
                    <div class="col-md-8">
                        <?php ob_start();?>{<?php $_prefixVariable2=ob_get_clean();
ob_start();?>}<?php $_prefixVariable3=ob_get_clean();
echo smarty_function_button(array('_text'=>"Reset",'_onclick'=>"if (confirm('This will reset the visibility of all the tips, notices and warning remarks boxes you have closed.')) ".$_prefixVariable2."deleteCookie('rbox');".$_prefixVariable3."return false;",'_class'=>'btn-sm'),$_smarty_tpl);?>

                    </div>
                </div>

                <?php if ($_smarty_tpl->tpl_vars['prefs']->value['webmonetization_enabled'] == 'y') {?>
                    <legend>Web Monetization</legend>
                    <div class="form-group row clearfix">
                        <label class="col-form-label col-md-4" for="webmonetization_payment_pointer">
                            Payment pointer
                        </label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="webmonetization_payment_pointer" id="webmonetization_payment_pointer" value="<?php echo $_smarty_tpl->tpl_vars['user_prefs']->value['webmonetization_payment_pointer'];?>
">
                        </div>
                    </div>
                    <div class="form-group row clearfix">
                        <label class="col-form-label col-md-4" for="webmonetization_paywall_text">
                            Default paywall text
                        </label>
                        <div class="col-md-8">
                            <textarea id='webmonetization_paywall_text' type="text" rows="5" name="webmonetization_paywall_text" class="form-control"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['user_prefs']->value['webmonetization_paywall_text'] ));?>
</textarea>
                        </div>
                    </div>
                <?php }?>

                <div class="submit text-center">
                    <input type="submit" class="btn btn-primary" name="new_prefs" value="Save changes">
                </div>
            </form>
        <?php $_block_repeat=false;
echo smarty_block_tab(array('name'=>"Preferences"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['prefs']->value['change_password'] != 'n' || !($_smarty_tpl->tpl_vars['prefs']->value['login_is_email'] == 'y' && $_smarty_tpl->tpl_vars['userinfo']->value['login'] != 'admin')) {?>
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tab', array('name'=>"Account Information"));
$_block_repeat=true;
echo smarty_block_tab(array('name'=>"Account Information"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <h2>Account Information</h2>
            <form action="tiki-user_preferences.php" method="post" class="form-horizontal">
                <?php echo smarty_function_ticket(array(),$_smarty_tpl);?>

                <input type="hidden" name="view_user" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['userwatch']->value ));?>
">
                    <?php if ($_smarty_tpl->tpl_vars['prefs']->value['auth_method'] != 'cas' || ($_smarty_tpl->tpl_vars['prefs']->value['cas_skip_admin'] == 'y' && $_smarty_tpl->tpl_vars['user']->value == 'admin')) {?>
                        <?php if ($_smarty_tpl->tpl_vars['prefs']->value['change_password'] != 'n' && ($_smarty_tpl->tpl_vars['prefs']->value['login_is_email'] != 'y' || $_smarty_tpl->tpl_vars['userinfo']->value['login'] == 'admin')) {?>
                            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>"tip",'title'=>"Information",'close'=>"n"));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Information",'close'=>"n"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                Leave "New password" and "Confirm new password" fields blank to keep current password
                            <?php $_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Information",'close'=>"n"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                        <?php }?>
                    <?php }?>
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label" for="username-autocomplete">
                            Username:
                        </label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="username-autocomplete" id="username-autocomplete" disabled="disabled" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['userinfo']->value['login'] ));?>
" autocomplete="username">
                        </div>
                    </div>
                    <?php if ($_smarty_tpl->tpl_vars['prefs']->value['login_is_email'] == 'y' && $_smarty_tpl->tpl_vars['userinfo']->value['login'] != 'admin') {?>
                        <input type="hidden" name="email" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['userinfo']->value['email'] ));?>
">
                    <?php } else { ?>
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label" for="email">
                                Email address:
                            </label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="email" id="email" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['userinfo']->value['email'] ));?>
" autocomplete="email">
                            </div>
                        </div>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['prefs']->value['auth_method'] != 'cas' || ($_smarty_tpl->tpl_vars['prefs']->value['cas_skip_admin'] == 'y' && $_smarty_tpl->tpl_vars['user']->value == 'admin')) {?>
                        <?php if ($_smarty_tpl->tpl_vars['prefs']->value['change_password'] != 'n') {?>
                            <div class="form-group row">
                                <label class="col-md-4 col-form-label" for="pass1">
                                    New password:
                                </label>
                                <div class="col-md-8">
                                    <input class="form-control" type="password" name="pass1" id="pass1" autocomplete="new-password">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-4 col-form-label" for="pass2">
                                    Confirm new password:
                                </label>
                                <div class="col-md-8">
                                    <input class="form-control" type="password" name="pass2" id="pass2" autocomplete="new-password">
                                </div>
                            </div>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['tiki_p_admin']->value != 'y' || $_smarty_tpl->tpl_vars['userwatch']->value == $_smarty_tpl->tpl_vars['user']->value) {?>
                            <div class="form-group row">
                                <label class="col-md-4 col-form-label" for="pass">
                                    Current password (required):
                                </label>
                                <div class="col-md-8">
                                    <input class="form-control" type="password" name="pass" id="pass" autocomplete="current-password">
                                </div>
                            </div>
                        <?php }?>
                    <?php }?>
                    <div class="submit text-center">
                        <input type="submit" class="btn btn-primary btn-sm" name="chgadmin" value="Save changes">
                    </div>
            </form>
        <?php $_block_repeat=false;
echo smarty_block_tab(array('name'=>"Account Information"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['prefs']->value['twoFactorAuth'] == 'y' && ($_smarty_tpl->tpl_vars['tiki_p_admin']->value != 'y' || $_smarty_tpl->tpl_vars['userwatch']->value == $_smarty_tpl->tpl_vars['user']->value)) {?>
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tab', array('name'=>"Security"));
$_block_repeat=true;
echo smarty_block_tab(array('name'=>"Security"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <h2>Two-Factor Authentication</h2>
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>"tip"));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>"tip"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        Two-factor authentication is a security measure that requires an extra code when you log in. When enabled,
            Tiki will require a code from your mobile phone during login. This code is created by the Google Authenticator®.
        <?php $_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>"tip"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <?php if ($_smarty_tpl->tpl_vars['tfaSecret']->value) {?>
            <form action="tiki-user_preferences.php" method="post" class="form-horizontal">
                <?php echo smarty_function_ticket(array(),$_smarty_tpl);?>

                <div class="form-group row">
                    <div class="col-md-5">
                        <img class="responsive" src="data:image/<?php echo $_smarty_tpl->tpl_vars['imageType']->value;?>
;base64,<?php echo $_smarty_tpl->tpl_vars['tfaSecretQR']->value;?>
"/>
                    </div>
                    <div class="col-md-7 align-content-center">
                        <div class="d-flex align-items-center" style="height: 100%">
                            <div class="well">
                                Install a soft token authenticator like FreeOTP or Google Authenticator from your application repository and use that app to scan this QR code. More information is available in the documentation.
                                <div style="margin-top: 20px" class="form-group">
                                    <label for="exampleInputEmail1">Pin Code</label>
                                    <input type="text" class="form-control" name="tfaPin">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['tfaSecret']->value;?>
" hidden name="tfaSecret">
                <div class="submit text-center">
                    <input type="submit" class="btn btn-secondary btn-sm" name="twofactor" value="Enable Two-Factor Auth">
                </div>
            </form>
        <?php } else { ?>
            <form action="tiki-user_preferences.php" method="post" class="form-horizontal">
                <?php echo smarty_function_ticket(array(),$_smarty_tpl);?>

                <div class="submit text-center">
                    <input type="submit" class="btn btn-danger btn-sm" name="removetwofactor" value="Disable Two-Factor Auth">
                    <a href="tiki-user_preferences.php?tfagenerate=true" class="btn btn-secondary btn-sm">Regenerate Two-Factor Auth</a>
                </div>
            </form>
        <?php }?>
        <?php $_block_repeat=false;
echo smarty_block_tab(array('name'=>"Security"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['tiki_p_delete_account']->value == 'y' && $_smarty_tpl->tpl_vars['userinfo']->value['login'] != 'admin') {?>
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tab', array('name'=>"Account Deletion"));
$_block_repeat=true;
echo smarty_block_tab(array('name'=>"Account Deletion"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <div class="jumbotron text-center">
                <h2>Account Deletion</h2>
                <form role="form" class="form-horizontal" action="tiki-user_preferences.php" method="post">
                    <?php echo smarty_function_ticket(array(),$_smarty_tpl);?>

                    <?php if (!empty($_smarty_tpl->tpl_vars['userwatch']->value)) {?><input type="hidden" name="view_user" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['userwatch']->value ));?>
"><?php }?>
                    <p>
                        <div class="form-check">
                        <label for="deleteaccountconfirm" class="form-check-label">
                            <input type='checkbox' class="form-check-input" name='deleteaccountconfirm' id="deleteaccountconfirm" value='1'> Check this box if you really want to delete the account
                        </label>
                        </div>
                    </p>
                    <p>
                        <input type="submit" class="btn btn-danger btn-lg" name="deleteaccount" value="<?php if (!empty($_smarty_tpl->tpl_vars['userwatch']->value)) {?>Delete the account: <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['userwatch']->value ));
} else { ?>Delete my account<?php }?>" onclick="confirmPopup('<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tr', array('_0'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['userwatch']->value ))));
$_block_repeat=true;
echo smarty_block_tr(array('_0'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['userwatch']->value ))), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Delete account for %0?<?php $_block_repeat=false;
echo smarty_block_tr(array('_0'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['userwatch']->value ))), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>')">
                    </p>
                </form>
            </div>
        <?php $_block_repeat=false;
echo smarty_block_tab(array('name'=>"Account Deletion"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    <?php }
$_block_repeat=false;
echo smarty_block_tabset(array('name'=>"mytiki_user_preference"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
