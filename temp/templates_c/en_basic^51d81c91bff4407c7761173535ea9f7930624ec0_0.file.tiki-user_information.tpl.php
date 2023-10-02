<?php
/* Smarty version 3.1.48, created on 2023-09-29 11:17:10
  from '/home/teddieme/tedd1eme/templates/tiki-user_information.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6516a4265a4133_82133063',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '51d81c91bff4407c7761173535ea9f7930624ec0' => 
    array (
      0 => '/home/teddieme/tedd1eme/templates/tiki-user_information.tpl',
      1 => 1689085248,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:tiki-mytiki_bar.tpl' => 1,
  ),
),false)) {
function content_6516a4265a4133_82133063 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/block.title.php','function'=>'smarty_block_title',),1=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/function.button.php','function'=>'smarty_function_button',),2=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/block.tabset.php','function'=>'smarty_block_tabset',),3=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/block.tab.php','function'=>'smarty_block_tab',),4=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/function.icon.php','function'=>'smarty_function_icon',),5=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/block.wikiplugin.php','function'=>'smarty_block_wikiplugin',),6=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/block.tr.php','function'=>'smarty_block_tr',),7=>array('file'=>'/home/teddieme/tedd1eme/vendor_bundled/vendor/smarty/smarty/libs/plugins/function.mailto.php','function'=>'smarty_function_mailto',),8=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/modifier.countryflag.php','function'=>'smarty_modifier_countryflag',),9=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/modifier.stringfix.php','function'=>'smarty_modifier_stringfix',),10=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/modifier.star.php','function'=>'smarty_modifier_star',),11=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/modifier.tiki_short_datetime.php','function'=>'smarty_modifier_tiki_short_datetime',),12=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/function.module.php','function'=>'smarty_function_module',),13=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/block.jq.php','function'=>'smarty_block_jq',),14=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/block.remarksbox.php','function'=>'smarty_block_remarksbox',),15=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/function.trackeroutput.php','function'=>'smarty_function_trackeroutput',),16=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/modifier.userlink.php','function'=>'smarty_modifier_userlink',),17=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/modifier.truncate.php','function'=>'smarty_modifier_truncate',),18=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/modifier.sefurl.php','function'=>'smarty_modifier_sefurl',),19=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/function.ticket.php','function'=>'smarty_function_ticket',),20=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/function.help.php','function'=>'smarty_function_help',),));
?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "viewuser", null);
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['userwatch']->value,"url" ));
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('title', array('url'=>"tiki-user_information.php?view_user=".((string)$_smarty_tpl->tpl_vars['viewuser']->value)));
$_block_repeat=true;
echo smarty_block_title(array('url'=>"tiki-user_information.php?view_user=".((string)$_smarty_tpl->tpl_vars['viewuser']->value)), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>User Information<?php $_block_repeat=false;
echo smarty_block_title(array('url'=>"tiki-user_information.php?view_user=".((string)$_smarty_tpl->tpl_vars['viewuser']->value)), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<?php if (((string)$_smarty_tpl->tpl_vars['userwatch']->value) == ((string)$_smarty_tpl->tpl_vars['user']->value)) {?>
    <?php $_smarty_tpl->_subTemplateRender('file:tiki-mytiki_bar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}?>

<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_tabs'] != 'y' && $_smarty_tpl->tpl_vars['user']->value && $_smarty_tpl->tpl_vars['prefs']->value['feature_messages'] == 'y' && $_smarty_tpl->tpl_vars['tiki_p_messages']->value == 'y' && $_smarty_tpl->tpl_vars['allowMsgs']->value == 'y') {?>
    <div class="t_navbar">
        <?php echo smarty_function_button(array('href'=>"#message",'class'=>"btn btn-primary",'_text'=>"Send a message"),$_smarty_tpl);?>

    </div>
<?php }?>

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tabset', array('name'=>"user_information"));
$_block_repeat=true;
echo smarty_block_tabset(array('name'=>"user_information"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tab', array('name'=>"Basic Data"));
$_block_repeat=true;
echo smarty_block_tab(array('name'=>"Basic Data"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <?php if ($_smarty_tpl->tpl_vars['infoPublic']->value == 'y') {?>
            <h2><?php echo $_smarty_tpl->tpl_vars['userinfo']->value['login'];?>

                <span class="float-right">
                <?php if ($_smarty_tpl->tpl_vars['tiki_p_admin']->value == 'y' || $_smarty_tpl->tpl_vars['userinfo']->value['login'] == $_smarty_tpl->tpl_vars['user']->value) {?>
                    <?php if ($_smarty_tpl->tpl_vars['tiki_p_admin']->value == 'y') {?>
                        <a class="link tips small" href="tiki-assignuser.php?assign_user=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['userinfo']->value['login'],"url" ));?>
" title=":Assign group">
                            <?php echo smarty_function_icon(array('name'=>'group','align'=>"right",'alt'=>"Assign Group"),$_smarty_tpl);?>

                        </a>
                    <?php }?>
                    <a class="link tips small" href="tiki-user_preferences.php?userId=<?php echo $_smarty_tpl->tpl_vars['userinfo']->value['userId'];?>
" title=":Change user preferences">
                        <?php echo smarty_function_icon(array('name'=>'wrench','align'=>"right",'alt'=>"Change user preferences"),$_smarty_tpl);?>

                    </a>
                <?php }?>
                </span>
            </h2>

            <div class="row">
                <div class="col-sm-9">
                    <div class="card">
                        <div class="card-body">
                            <?php if ($_smarty_tpl->tpl_vars['avatar']->value) {?>
                                <div class="row mb-3">
                                    <div class="col-sm-4">Profile picture (User Icon):</div>
                                    <div class="col-sm-8">
                                        <div class="col-sm-3">
                                            <?php if ($_smarty_tpl->tpl_vars['userinfo']->value['login'] == $_smarty_tpl->tpl_vars['user']->value) {?><a href="tiki-pick_avatar.php"><?php }?>
                                                <?php echo $_smarty_tpl->tpl_vars['avatar']->value;?>

                                            <?php if ($_smarty_tpl->tpl_vars['userinfo']->value['login'] == $_smarty_tpl->tpl_vars['user']->value) {?></a><?php }?>
                                        </div>
                                        <div class="col-sm-9">
                                            <?php if ((isset($_smarty_tpl->tpl_vars['user_picture_id']->value))) {?>
                                                <div class="userpicture">
                                                    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('wikiplugin', array('_name'=>"img",'fileId'=>((string)$_smarty_tpl->tpl_vars['user_picture_id']->value)));
$_block_repeat=true;
echo smarty_block_wikiplugin(array('_name'=>"img",'fileId'=>((string)$_smarty_tpl->tpl_vars['user_picture_id']->value)), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_wikiplugin(array('_name'=>"img",'fileId'=>((string)$_smarty_tpl->tpl_vars['user_picture_id']->value)), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                                </div>
                                            <?php }?>
                                        </div>
                                    </div>
                                </div>
                            <?php }?>

                            <?php if ($_smarty_tpl->tpl_vars['realName']->value) {?>
                                <div class="row mb-3">
                                    <div class="col-sm-4">Real Name:</div>
                                    <div class="col-sm-8"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['realName']->value ));?>
</div>
                                </div>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_community_gender'] == 'y' && $_smarty_tpl->tpl_vars['gender']->value != 'Hidden' && $_smarty_tpl->tpl_vars['gender']->value) {?>
                                <div class="row mb-3">
                                    <div class="col-sm-4">Gender:</div>
                                    <div class="col-sm-8"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tr', array());
$_block_repeat=true;
echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo $_smarty_tpl->tpl_vars['gender']->value;
$_block_repeat=false;
echo smarty_block_tr(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></div>
                                </div>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['email_isPublic']->value != 'n' && $_smarty_tpl->tpl_vars['userinfo']->value['email'] != '') {?>
                                <div class="row mb-3">
                                    <div class="col-sm-4">Email:</div>
                                    <div class="col-sm-8"><?php echo smarty_function_mailto(array('address'=>$_smarty_tpl->tpl_vars['userinfo']->value['email'],'text'=>$_smarty_tpl->tpl_vars['scrambledEmail']->value,'encode'=>"javascript"),$_smarty_tpl);?>
</div>
                                </div>
                            <?php } elseif ($_smarty_tpl->tpl_vars['email_isPublic']->value == 'n' && $_smarty_tpl->tpl_vars['userinfo']->value['email'] != '' && $_smarty_tpl->tpl_vars['tiki_p_admin']->value == 'y') {?>
                                <div class="row mb-3">
                                    <div class="col-sm-4">Email:</div>
                                    <div class="col-sm-8">
                                        <?php echo smarty_function_mailto(array('address'=>$_smarty_tpl->tpl_vars['userinfo']->value['email'],'encode'=>"javascript"),$_smarty_tpl);?>

                                        <i>(non public)</i>
                                    </div>
                                </div>
                            <?php }?>
                            <?php if (!empty($_smarty_tpl->tpl_vars['country']->value) && $_smarty_tpl->tpl_vars['country']->value != 'Other') {?>
                                <div class="row mb-3">
                                    <div class="col-sm-4">Country:</div>
                                    <div class="col-sm-8"><?php echo smarty_modifier_countryflag($_smarty_tpl->tpl_vars['userinfo']->value['login']);?>
 <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tr', array());
$_block_repeat=true;
echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo smarty_modifier_stringfix($_smarty_tpl->tpl_vars['country']->value);
$_block_repeat=false;
echo smarty_block_tr(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></div>
                                </div>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['prefs']->value['change_theme'] != 'n') {?>
                                <div class="row mb-3">
                                    <div class="col-sm-4">Theme:</div>
                                    <div class="col-sm-8"><?php echo $_smarty_tpl->tpl_vars['user_style']->value;?>
</div>
                                </div>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['prefs']->value['change_language'] == 'y') {?>
                                <div class="row mb-3">
                                    <div class="col-sm-4">Language:</div>
                                    <div class="col-sm-8"><?php echo $_smarty_tpl->tpl_vars['user_language']->value;?>
</div>
                                </div>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['homePage']->value) {?>
                                <div class="row mb-3">
                                    <div class="col-sm-4">Homepage:</div>
                                    <div class="col-sm-8">
                                        <a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['homePage']->value ));?>
" class="link" title="User's homepage">
                                            <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['homePage']->value ));?>

                                        </a>
                                    </div>
                                </div>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_score'] == 'y') {?>
                                <div class="row mb-3">
                                    <div class="col-sm-4">Score:</div>
                                    <div class="col-sm-8"><?php echo smarty_modifier_star($_smarty_tpl->tpl_vars['userinfo']->value['score']);
echo $_smarty_tpl->tpl_vars['userinfo']->value['score'];?>
</div>
                                </div>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki'] == 'y' && $_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_userpage'] == 'y' && ($_smarty_tpl->tpl_vars['userPage_exists']->value || $_smarty_tpl->tpl_vars['user']->value == $_smarty_tpl->tpl_vars['userinfo']->value['login'])) {?>
                                <div class="row mb-3">
                                    <div class="col-sm-4">Personal Wiki Page:</div>
                                    <div class="col-sm-8">
                                        <?php if ($_smarty_tpl->tpl_vars['userPage_exists']->value) {?>
                                            <a class="link" href="tiki-index.php?page=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_userpage_prefix'],'url' ));
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['userinfo']->value['login'],'url' ));?>
">
                                                <?php echo $_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_userpage_prefix'];
echo $_smarty_tpl->tpl_vars['userinfo']->value['login'];?>

                                            </a>
                                        <?php } elseif ($_smarty_tpl->tpl_vars['user']->value == $_smarty_tpl->tpl_vars['userinfo']->value['login']) {?>
                                            <?php echo $_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_userpage_prefix'];
echo $_smarty_tpl->tpl_vars['userinfo']->value['login'];?>

                                            <a class="link" href="tiki-editpage.php?page=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_userpage_prefix'],'url' ));
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['userinfo']->value['login'],'url' ));?>
"
                                                    title="Create Page">?</a>
                                        <?php } else { ?>&nbsp;<?php }?>
                                    </div>
                                </div>
                            <?php }?>

                            <div class="row mb-3">
                                <div class="col-sm-4">Last login:</div>
                                <div class="col-sm-8"><?php echo smarty_modifier_tiki_short_datetime($_smarty_tpl->tpl_vars['userinfo']->value['lastLogin']);?>
</div>
                            </div>

                            
                            <?php
$__section_ir_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['customfields']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_ir_0_total = $__section_ir_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_ir'] = new Smarty_Variable(array());
if ($__section_ir_0_total !== 0) {
for ($__section_ir_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_ir']->value['index'] = 0; $__section_ir_0_iteration <= $__section_ir_0_total; $__section_ir_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_ir']->value['index']++){
?>

                                <?php if ($_smarty_tpl->tpl_vars['customfields']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ir']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ir']->value['index'] : null)]['show']) {?>
                                    <div class="row mb-3">
                                        <div class="col-sm-4"><?php echo $_smarty_tpl->tpl_vars['customfields']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ir']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ir']->value['index'] : null)]['label'];?>
:</div>
                                        <div class="col-sm-8"><?php echo $_smarty_tpl->tpl_vars['customfields']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ir']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ir']->value['index'] : null)]['value'];?>
</div>
                                    </div>
                                <?php }?>
                            <?php
}
}
?>
                        </div>
                    </div>
                </div>
            </div>
            <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_friends'] == 'y') {?>
            <h3>Friendship Network</h3>
                <?php if ($_smarty_tpl->tpl_vars['user']->value == $_smarty_tpl->tpl_vars['userinfo']->value['login']) {?>
            <h4>Your relationship with other users</h4>
                    <?php echo smarty_function_module(array('module'=>'friend_list','nobox'=>'y'),$_smarty_tpl);?>

                <?php } else { ?>
            <h4>Relationship of this user to you</h4>
            <div id="friendship"></div>
            <div id="addfriend"></div>
                    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('jq', array());
$_block_repeat=true;
echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                        $('#friendship').load("tiki-user-info?username=<?php echo $_smarty_tpl->tpl_vars['userinfo']->value['login'];?>
 .friendship");
                        $('#addfriend').load("tiki-user-info?username=<?php echo $_smarty_tpl->tpl_vars['userinfo']->value['login'];?>
 .add-friend");
                    <?php $_block_repeat=false;
echo smarty_block_jq(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <?php }?>
            <?php }?>

        <?php } else { ?>
            <div>
                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>"info",'title'=>"Private"));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>"info",'title'=>"Private"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>The user has chosen to make his information private<?php $_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>"info",'title'=>"Private"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            </div>
        <?php }?>
    <?php $_block_repeat=false;
echo smarty_block_tab(array('name'=>"Basic Data"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

    <?php if ($_smarty_tpl->tpl_vars['prefs']->value['user_tracker_infos'] && $_smarty_tpl->tpl_vars['infoPublic']->value == "y") {?>
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tab', array('name'=>"Additional Information"));
$_block_repeat=true;
echo smarty_block_tab(array('name'=>"Additional Information"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <h2>Additional Information – <?php echo $_smarty_tpl->tpl_vars['userinfo']->value['login'];?>
</h2>
            <div class="card">
                <div class="card-body">

                    <div class="clearfix">
                        <div class="col-sm-8">
                            <?php if ($_smarty_tpl->tpl_vars['userinfo']->value['login'] == $_smarty_tpl->tpl_vars['user']->value) {?>
                                <a class="link tips" href="tiki-view_tracker_item.php?view=+user&amp;cookietab=2" title=":Change user information">
                                    <?php echo smarty_function_icon(array('name'=>'wrench','align'=>"right",'alt'=>"Change user information"),$_smarty_tpl);?>

                                </a>
                            <?php }?>
                        </div>
                    </div>

                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['userItem']->value['field_values'], 'itemField');
$_smarty_tpl->tpl_vars['itemField']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['itemField']->value) {
$_smarty_tpl->tpl_vars['itemField']->do_else = false;
?>
                        <?php if ($_smarty_tpl->tpl_vars['itemField']->value['value'] != '' || !empty($_smarty_tpl->tpl_vars['itemField']->value['categs']) || !empty($_smarty_tpl->tpl_vars['itemField']->value['links'])) {?>
                            <div class="row">
                                <div class="col-sm-4" style="width: 25%"><?php echo $_smarty_tpl->tpl_vars['itemField']->value['name'];?>
:</div>
                                <div class="col-sm-8" style="width: 75%"><?php echo smarty_function_trackeroutput(array('field'=>$_smarty_tpl->tpl_vars['itemField']->value,'item'=>$_smarty_tpl->tpl_vars['itemField']->value),$_smarty_tpl);?>
</div>
                            </div>
                        <?php }?>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                </div>
            </div>
        <?php $_block_repeat=false;
echo smarty_block_tab(array('name'=>"Additional Information"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_display_my_to_others'] == 'y' && $_smarty_tpl->tpl_vars['infoPublic']->value == "y") {?>
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tab', array('name'=>"User Contribution"));
$_block_repeat=true;
echo smarty_block_tab(array('name'=>"User Contribution"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <div class="card">
                <div class="card-body">
                    <?php if ((count($_smarty_tpl->tpl_vars['user_pages']->value) > 0) || (count($_smarty_tpl->tpl_vars['user_blogs']->value) > 0) || (count($_smarty_tpl->tpl_vars['user_blog_posts']->value) > 0) || (count($_smarty_tpl->tpl_vars['user_articles']->value) > 0) || (count($_smarty_tpl->tpl_vars['user_forum_comments']->value) > 0) || (count($_smarty_tpl->tpl_vars['user_forum_topics']->value) > 0) || (count($_smarty_tpl->tpl_vars['user_items']->value) > 0)) {?>
                        <h2 class="text-center">User <?php echo smarty_modifier_userlink($_smarty_tpl->tpl_vars['userinfo']->value['login']);?>
</h2>
                        <p><em>has contributed to the following content…</em></p>
                    <?php } else { ?>
                        <h2 class="text-center">User <?php echo smarty_modifier_userlink($_smarty_tpl->tpl_vars['userinfo']->value['login']);?>
</h2>
                        <p><em>has not contributed to any content yet</em></p>
                    <?php }?>

                    <?php if (count($_smarty_tpl->tpl_vars['user_pages']->value) > 0) {?>
                        <h3>Wiki Pages</h3>
                        <div class="table normal">
                            <?php
$__section_ix_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['user_pages']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_ix_1_total = $__section_ix_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_ix'] = new Smarty_Variable(array());
if ($__section_ix_1_total !== 0) {
for ($__section_ix_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] = 0; $__section_ix_1_iteration <= $__section_ix_1_total; $__section_ix_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']++){
?>
                                <div>
                                    <div>
                                        <a class="link" title="View: <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['user_pages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['pageName'] ));?>
" href="tiki-index.php?page=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['user_pages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['pageName'],"url" ));?>
">
                                            <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( smarty_modifier_truncate($_smarty_tpl->tpl_vars['user_pages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['pageName'],40,"(...)") ));?>

                                        </a>
                                    </div>
                                </div>
                            <?php
}
}
?>
                        </div>
                    <?php }?>
                    <?php if (count($_smarty_tpl->tpl_vars['user_blogs']->value) > 0) {?>
                        <h3>Blogs</h3>
                        <div class="table normal">

                            <?php
$__section_ix_2_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['user_blogs']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_ix_2_total = $__section_ix_2_loop;
$_smarty_tpl->tpl_vars['__smarty_section_ix'] = new Smarty_Variable(array());
if ($__section_ix_2_total !== 0) {
for ($__section_ix_2_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] = 0; $__section_ix_2_iteration <= $__section_ix_2_total; $__section_ix_2_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']++){
?>
                                <div>
                                    <div>
                                        <a class="link" title="View" href="<?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['user_blogs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['blogId'],'blog');?>
">
                                            <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['user_blogs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['title'] ));?>

                                        </a>
                                    </div>
                                </div>
                            <?php
}
}
?>
                        </div>
                    <?php }?>
                    <?php if (count($_smarty_tpl->tpl_vars['user_blog_posts']->value) > 0) {?>
                        <h3>Blogs Posts</h3>

                        <div class="table normal">
                            <?php
$__section_ix_3_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['user_blog_posts']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_ix_3_total = $__section_ix_3_loop;
$_smarty_tpl->tpl_vars['__smarty_section_ix'] = new Smarty_Variable(array());
if ($__section_ix_3_total !== 0) {
for ($__section_ix_3_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] = 0; $__section_ix_3_iteration <= $__section_ix_3_total; $__section_ix_3_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']++){
?>
                                <div>
                                    <div>
                                        <a class="link" title="View" href="<?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['user_blog_posts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['postId'],'blogpost');?>
">
                                            <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['user_blog_posts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['title'] ));?>

                                        </a>
                                    </div>
                                </div>
                            <?php
}
}
?>
                        </div>
                    <?php }?>
                    <?php if (count($_smarty_tpl->tpl_vars['user_articles']->value) > 0) {?>
                        <h3>Articles</h3>
                        <div class="table normal">

                            <?php
$__section_ix_4_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['user_articles']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_ix_4_total = $__section_ix_4_loop;
$_smarty_tpl->tpl_vars['__smarty_section_ix'] = new Smarty_Variable(array());
if ($__section_ix_4_total !== 0) {
for ($__section_ix_4_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] = 0; $__section_ix_4_iteration <= $__section_ix_4_total; $__section_ix_4_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']++){
?>
                                <div>
                                    <div>
                                        <a class="link" title="View" href="<?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['user_articles']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['articleId'],'article');?>
">
                                            <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['user_articles']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['title'] ));?>

                                        </a>
                                    </div>
                                </div>
                            <?php
}
}
?>
                        </div>
                    <?php }?>
                    <?php if (count($_smarty_tpl->tpl_vars['user_forum_comments']->value) > 0) {?>
                        <h3>Forum comments</h3>
                        <div class="table normal">

                            <?php
$__section_ix_5_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['user_forum_comments']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_ix_5_total = $__section_ix_5_loop;
$_smarty_tpl->tpl_vars['__smarty_section_ix'] = new Smarty_Variable(array());
if ($__section_ix_5_total !== 0) {
for ($__section_ix_5_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] = 0; $__section_ix_5_iteration <= $__section_ix_5_total; $__section_ix_5_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']++){
?>
                                <div>
                                    <div>
                                        <a class="link" title="View" href="tiki-view_forum_thread.php?comments_parentId=<?php echo $_smarty_tpl->tpl_vars['user_forum_comments']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['threadId'];?>
">
                                            <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['user_forum_comments']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['title'] ));?>

                                        </a>
                                    </div>
                                </div>
                            <?php
}
}
?>
                        </div>
                    <?php }?>
                    <?php if (count($_smarty_tpl->tpl_vars['user_forum_topics']->value) > 0) {?>
                        <h3>Forum topics</h3>
                        <div class="table normal">

                            <?php
$__section_ix_6_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['user_forum_topics']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_ix_6_total = $__section_ix_6_loop;
$_smarty_tpl->tpl_vars['__smarty_section_ix'] = new Smarty_Variable(array());
if ($__section_ix_6_total !== 0) {
for ($__section_ix_6_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] = 0; $__section_ix_6_iteration <= $__section_ix_6_total; $__section_ix_6_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']++){
?>
                                <div>
                                    <div>
                                        <a class="link" title="View" href="tiki-view_forum_thread.php?comments_parentId=<?php echo $_smarty_tpl->tpl_vars['user_forum_topics']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['threadId'];?>
">
                                            <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['user_forum_topics']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['title'] ));?>

                                        </a>
                                    </div>
                                </div>
                            <?php
}
}
?>
                        </div>
                    <?php }?>
                    <?php if (count($_smarty_tpl->tpl_vars['user_items']->value) > 0) {?>
                        <h3>User Items</h3>
                        <div class="table normal">

                            <?php
$__section_ix_7_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['user_items']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_ix_7_total = $__section_ix_7_loop;
$_smarty_tpl->tpl_vars['__smarty_section_ix'] = new Smarty_Variable(array());
if ($__section_ix_7_total !== 0) {
for ($__section_ix_7_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] = 0; $__section_ix_7_iteration <= $__section_ix_7_total; $__section_ix_7_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']++){
?>
                                <div>
                                    <div>
                                        <a class="link" title="View" href="tiki-view_tracker_item.php?trackerId=<?php echo $_smarty_tpl->tpl_vars['user_items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['trackerId'];?>
&amp;itemId=<?php echo $_smarty_tpl->tpl_vars['user_items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['itemId'];?>
">
                                            <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['user_items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['name'] ));?>
 : <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['user_items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['value'] ));?>

                                        </a>
                                    </div>
                                </div>
                            <?php
}
}
?>
                        </div>
                    <?php }?>

                </div>
            </div>
        <?php $_block_repeat=false;
echo smarty_block_tab(array('name'=>"User Contribution"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    <?php }?>


    <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_actionlog'] == 'y' && $_smarty_tpl->tpl_vars['prefs']->value['user_who_viewed_my_stuff'] == 'y' && !empty($_smarty_tpl->tpl_vars['user']->value) && ($_smarty_tpl->tpl_vars['prefs']->value['user_who_viewed_my_stuff_show_others'] == 'y' || $_smarty_tpl->tpl_vars['user']->value == $_smarty_tpl->tpl_vars['userinfo']->value['login'] || $_smarty_tpl->tpl_vars['tiki_p_admin']->value == "y") && $_smarty_tpl->tpl_vars['infoPublic']->value == "y") {?>
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tab', array('name'=>"Who Looks at Items?"));
$_block_repeat=true;
echo smarty_block_tab(array('name'=>"Who Looks at Items?"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <div class="card">
                <div class="card-body">
                    <h2 class="text-center"><?php if ($_smarty_tpl->tpl_vars['user']->value == $_smarty_tpl->tpl_vars['userinfo']->value['login']) {?>Who Looks at Your Items?<?php } else { ?>Who Looks at His or Her Items?<?php }?></h2>

                    <?php
$__section_ix_8_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['whoviewed']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_ix_8_total = $__section_ix_8_loop;
$_smarty_tpl->tpl_vars['__smarty_section_ix'] = new Smarty_Variable(array());
if ($__section_ix_8_total !== 0) {
for ($__section_ix_8_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] = 0; $__section_ix_8_iteration <= $__section_ix_8_total; $__section_ix_8_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']++){
?>
                        <div class="row">
                            <div class="form col-sm-4">
                                <?php echo smarty_modifier_userlink($_smarty_tpl->tpl_vars['whoviewed']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['user']);?>
 - <?php echo smarty_modifier_tiki_short_datetime($_smarty_tpl->tpl_vars['whoviewed']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['lastViewed']);?>

                            </div>
                            <div class="form col-sm-8">
                                <a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['whoviewed']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['link'] ));?>
">
                                    <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['whoviewed']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['object'] ));?>
 (<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['whoviewed']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['objectType'] ));?>
)
                                </a>
                            </div>
                        </div>
                    <?php
}
}
?>
                </div>
            </div>
        <?php $_block_repeat=false;
echo smarty_block_tab(array('name'=>"Who Looks at Items?"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['user']->value && $_smarty_tpl->tpl_vars['prefs']->value['feature_messages'] == 'y' && $_smarty_tpl->tpl_vars['tiki_p_messages']->value == 'y' && $_smarty_tpl->tpl_vars['allowMsgs']->value == 'y') {?>
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tab', array('name'=>"Send a message"));
$_block_repeat=true;
echo smarty_block_tab(array('name'=>"Send a message"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <div id="message">
                <?php if ($_smarty_tpl->tpl_vars['sent']->value) {?>
                    <?php echo $_smarty_tpl->tpl_vars['message']->value;?>

                <?php } else { ?>
                    <h2 class="text-center">Send a message! </h2>
                    <form method="post" action="tiki-user_information.php" name="f">
                        <?php echo smarty_function_ticket(array(),$_smarty_tpl);?>

                        <input type="hidden" name="to" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['userwatch']->value ));?>
">
                        <input type="hidden" name="view_user" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['userwatch']->value ));?>
">

                        <p>The following message will be sent to user <?php echo smarty_modifier_userlink($_smarty_tpl->tpl_vars['userinfo']->value['login']);?>
…</p>



                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label" for="priority">Priority</label>
                            <div class="col-sm-10">
                                <select name="priority" id="priority" class="form-control">
                                    <option value="1" <?php if ($_smarty_tpl->tpl_vars['priority']->value == 1) {?>selected="selected"<?php }?>>1: Lowest</option>
                                    <option value="2" <?php if ($_smarty_tpl->tpl_vars['priority']->value == 2) {?>selected="selected"<?php }?>>2: Low</option>
                                    <option value="3" <?php if ($_smarty_tpl->tpl_vars['priority']->value == 3) {?>selected="selected"<?php }?>>3: Normal</option>
                                    <option value="4" <?php if ($_smarty_tpl->tpl_vars['priority']->value == 4) {?>selected="selected"<?php }?>>4: High</option>
                                    <option value="5" <?php if ($_smarty_tpl->tpl_vars['priority']->value == 5) {?>selected="selected"<?php }?>>5: Very High</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label" for="subject">Subject</label>
                            <div class="col-sm-10">
                                <input type="text" name="subject" id="subject" value="" maxlength="255" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label" for="message">Message Body</label>
                            <div class="col-sm-10">
                                <textarea rows="20" class="form-control" name="body" id="message"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-10 offset-sm-2">
                                <label for="replytome" class="ml-2">
                                    <input type="checkbox" name="replytome" id="replytome">
                                    Reply-to my email
                                    <?php echo smarty_function_help(array('url'=>"User-Information",'desc'=>"Reply-to my email:The user will be able to reply to you directly via email."),$_smarty_tpl);?>

                                </label>
                                <label for="bccme" class="ml-2">
                                    <input type="checkbox" name="bccme" id="bccme">
                                    Send me a copy
                                    <?php echo smarty_function_help(array('url'=>"User-Information",'desc'=>"Send me a copy:You will be sent a copy of this email."),$_smarty_tpl);?>

                                </label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-10 offset-sm-2">
                                <input type="submit" class="btn btn-secondary" name="send" value="Send">
                            </div>
                        </div>
                    </form>
                <?php }?>
            </div>
        <?php $_block_repeat=false;
echo smarty_block_tab(array('name'=>"Send a message"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    <?php }
$_block_repeat=false;
echo smarty_block_tabset(array('name'=>"user_information"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<?php }
}
