<?php
/* Smarty version 3.1.48, created on 2023-09-29 11:20:11
  from '/home/teddieme/tedd1eme/templates/tiki-adminusers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6516a4db390323_39763805',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ae45333447a194e5461c10e9728f8bf2f249c387' => 
    array (
      0 => '/home/teddieme/tedd1eme/templates/tiki-adminusers.tpl',
      1 => 1689085248,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:password_jq.tpl' => 1,
    'file:password_help.tpl' => 1,
  ),
),false)) {
function content_6516a4db390323_39763805 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/block.title.php','function'=>'smarty_block_title',),1=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/function.button.php','function'=>'smarty_function_button',),2=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/function.permission_link.php','function'=>'smarty_function_permission_link',),3=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/block.remarksbox.php','function'=>'smarty_block_remarksbox',),4=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/block.tabset.php','function'=>'smarty_block_tabset',),5=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/block.tab.php','function'=>'smarty_block_tab',),6=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/function.icon.php','function'=>'smarty_function_icon',),7=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/function.autocomplete.php','function'=>'smarty_function_autocomplete',),8=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/function.initials_filter_links.php','function'=>'smarty_function_initials_filter_links',),9=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/function.select_all.php','function'=>'smarty_function_select_all',),10=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/block.self_link.php','function'=>'smarty_block_self_link',),11=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/modifier.username.php','function'=>'smarty_modifier_username',),12=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/modifier.duration_short.php','function'=>'smarty_modifier_duration_short',),13=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/block.tr.php','function'=>'smarty_block_tr',),14=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/modifier.tiki_short_datetime.php','function'=>'smarty_modifier_tiki_short_datetime',),15=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/function.bootstrap_modal.php','function'=>'smarty_function_bootstrap_modal',),16=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/block.actions.php','function'=>'smarty_block_actions',),17=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/function.query.php','function'=>'smarty_function_query',),18=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/function.ticket.php','function'=>'smarty_function_ticket',),19=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/function.norecords.php','function'=>'smarty_function_norecords',),20=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/block.jq.php','function'=>'smarty_block_jq',),21=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/block.pagination_links.php','function'=>'smarty_block_pagination_links',),22=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/modifier.tiki_long_datetime.php','function'=>'smarty_modifier_tiki_long_datetime',),23=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/function.help.php','function'=>'smarty_function_help',),24=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/function.service.php','function'=>'smarty_function_service',),));
?>

<?php if (!$_smarty_tpl->tpl_vars['ts']->value['ajax']) {?>
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('title', array('help'=>"Users Management",'admpage'=>"login",'url'=>"tiki-adminusers.php"));
$_block_repeat=true;
echo smarty_block_title(array('help'=>"Users Management",'admpage'=>"login",'url'=>"tiki-adminusers.php"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Admin Users<?php $_block_repeat=false;
echo smarty_block_title(array('help'=>"Users Management",'admpage'=>"login",'url'=>"tiki-adminusers.php"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

    <div class="t_navbar mb-4">
        <?php if ($_smarty_tpl->tpl_vars['tiki_p_admin']->value == 'y') {?> 
            <?php echo smarty_function_button(array('href'=>"tiki-admingroups.php",'class'=>"btn btn-primary",'_type'=>"link",'_icon_name'=>"group",'_text'=>"Admin Groups"),$_smarty_tpl);?>

        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['tiki_p_admin']->value == 'y') {?>
            <?php echo smarty_function_permission_link(array('mode'=>'button_link'),$_smarty_tpl);?>

        <?php }?>
        <?php if ((isset($_smarty_tpl->tpl_vars['userinfo']->value['userId']))) {?>
            <?php echo smarty_function_button(array('href'=>"?add=1",'class'=>"btn btn-primary",'_text'=>"Add a New User"),$_smarty_tpl);?>

        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_invite'] == 'y' && $_smarty_tpl->tpl_vars['tiki_p_invite']->value == 'y') {?>
            <?php echo smarty_function_button(array('href'=>"tiki-list_invite.php",'_type'=>"link",'_icon_name'=>"thumbs-up",'_text'=>"Invitation List"),$_smarty_tpl);?>

        <?php }?>
    </div>

    <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_intertiki'] == 'y' && ($_smarty_tpl->tpl_vars['prefs']->value['feature_intertiki_import_groups'] == 'y' || $_smarty_tpl->tpl_vars['prefs']->value['feature_intertiki_import_preferences'] == 'y')) {?>
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>"warning",'title'=>"Warning"));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Warning"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_intertiki_import_groups'] == 'y') {?>Since this Tiki site is in slave mode and imports groups, the master groups will be automatically reimported at each login<?php }?>
            <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_intertiki_import_preferences'] == 'y') {?>Since this Tiki site is in slave mode and imports preferences, the master user preferences will be automatically reimported at each login<?php }?>
        <?php $_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Warning"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    <?php }
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tabset', array('name'=>'tabs_adminusers'));
$_block_repeat=true;
echo smarty_block_tabset(array('name'=>'tabs_adminusers'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>

    
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tab', array('name'=>"Users"));
$_block_repeat=true;
echo smarty_block_tab(array('name'=>"Users"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <?php if (!$_smarty_tpl->tpl_vars['ts']->value['ajax']) {?>
            <h2>Users</h2>
            <?php if (!$_smarty_tpl->tpl_vars['ts']->value['enabled']) {?>
                <form method="get" action="tiki-adminusers.php">
                    <div class="form-group row">
                        <label class="col-form-label col-sm-5" for="find">Find</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control form-control-sm" id="find" name="find" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['find']->value ));?>
">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-sm-5" for="numrows">Number of displayed rows</label>
                        <div class="col-sm-7">
                            <input class="form-control form-control-sm" type="number" id="numrows" name="numrows" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['numrows']->value ));?>
">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-7 offset-sm-5">
                            <a href="javascript:toggleBlock('search')" class="link">
                                <?php echo smarty_function_icon(array('name'=>'add','alt'=>"more"),$_smarty_tpl);?>
&nbsp;More Criteria
                            </a>
                        </div>
                    </div>
                    <?php echo smarty_function_autocomplete(array('element'=>'#find','type'=>'username'),$_smarty_tpl);?>

                    <div class="col-sm-12" id="search" <?php if ($_smarty_tpl->tpl_vars['filterGroup']->value || $_smarty_tpl->tpl_vars['filterEmail']->value) {?>style="display:block;"<?php } else { ?>style="display:none;"<?php }?>>
                        <div class="form-group row">
                            <label class="col-form-label col-sm-5" for="filterGroup">Group (direct)</label>
                            <div class="col-sm-7">
                                <select class="form-control form-control-sm" name="filterGroup" id="filterGroup">
                                    <option value=""></option>
                                    <?php
$__section_ix_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['all_groups']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_ix_0_total = $__section_ix_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_ix'] = new Smarty_Variable(array());
if ($__section_ix_0_total !== 0) {
for ($__section_ix_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] = 0; $__section_ix_0_iteration <= $__section_ix_0_total; $__section_ix_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']++){
?>
                                        <?php if ($_smarty_tpl->tpl_vars['all_groups']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)] != 'Registered' && $_smarty_tpl->tpl_vars['all_groups']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)] != 'Anonymous') {?>
                                            <option value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['all_groups']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)] ));?>
" <?php if ($_smarty_tpl->tpl_vars['filterGroup']->value == $_smarty_tpl->tpl_vars['all_groups']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]) {?>selected<?php }?>><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['all_groups']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)] ));?>
</option>
                                        <?php }?>
                                    <?php
}
}
?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="offset-sm-5 col-sm-7">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input id="filterEmailNotConfirmed" class="form-check-input" name="filterEmailNotConfirmed" type="checkbox"<?php if (!empty($_REQUEST['filterEmailNotConfirmed'])) {?> checked="checked"<?php }?>>Email not confirmed
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="offset-sm-5 col-sm-7">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="form-check-input" id="filterNeverLoggedIn" name="filterNeverLoggedIn" type="checkbox"<?php if (!empty($_REQUEST['filterNeverLoggedIn'])) {?> checked="checked"<?php }?>>Never logged in
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="offset-sm-5 col-sm-7">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="form-check-input" id="filterNotValidated" name="filterNotValidated" type="checkbox"<?php if (!empty($_REQUEST['filterNotValidated'])) {?> checked="checked"<?php }?>>User not validated
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-7 offset-sm-5">
                            <input type="hidden" name="sort_mode" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['sort_mode']->value ));?>
">
                            <input type="submit" class="btn btn-primary btn-sm" value="Find" name="search">
                        </div>
                    </div>
                </form>
            <?php }?>
            <?php if (($_smarty_tpl->tpl_vars['cant']->value > $_smarty_tpl->tpl_vars['numrows']->value || !empty($_smarty_tpl->tpl_vars['initial']->value)) && !$_smarty_tpl->tpl_vars['ts']->value['enabled']) {?>
                <?php echo smarty_function_initials_filter_links(array(),$_smarty_tpl);?>

            <?php }?>
            <form name="checkform" id="checkform" method="post">
                <div id="<?php echo $_smarty_tpl->tpl_vars['ts']->value['tableid'];?>
-div" <?php if ($_smarty_tpl->tpl_vars['ts']->value['enabled']) {?>style="visibility:hidden;"<?php }?>>
                    <div class="<?php if ($_smarty_tpl->tpl_vars['js']->value) {?>table-responsive<?php }?> user-table ts-wrapperdiv">
        <?php }?>
                        
                        <table id="<?php echo $_smarty_tpl->tpl_vars['ts']->value['tableid'];?>
" class="table normal table-striped table-hover" data-count="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cant']->value ));?>
">
                            
                            <?php if (!$_smarty_tpl->tpl_vars['ts']->value['ajax']) {?>
                                <thead>
                                    <tr>
                                        <th id="checkbox">
                                            <?php if ($_smarty_tpl->tpl_vars['users']->value) {?>
                                                <?php echo smarty_function_select_all(array('checkbox_names'=>'checked[]','tablesorter'=>((string)$_smarty_tpl->tpl_vars['ts']->value['enabled'])),$_smarty_tpl);?>

                                            <?php }?>
                                        </th>
                                        <th id="user"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('self_link', array('_sort_arg'=>'sort_mode','_sort_field'=>'login'));
$_block_repeat=true;
echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'login'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>User<?php $_block_repeat=false;
echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'login'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></th>
                                        <?php if ($_smarty_tpl->tpl_vars['prefs']->value['login_is_email'] != 'y') {?>
                                            <th id="email"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('self_link', array('_sort_arg'=>'sort_mode','_sort_field'=>'email'));
$_block_repeat=true;
echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'email'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Email<?php $_block_repeat=false;
echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'email'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></th>
                                        <?php }?>
                                        <?php if ($_smarty_tpl->tpl_vars['prefs']->value['auth_method'] == 'openid') {?>
                                            <th id="openid"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('self_link', array('_sort_arg'=>'sort_mode','_sort_field'=>'openID'));
$_block_repeat=true;
echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'openID'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>OpenID<?php $_block_repeat=false;
echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'openID'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></th>
                                        <?php }?>
                                        <th id="lastlogin"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('self_link', array('_sort_arg'=>'sort_mode','_sort_field'=>'currentLogin'));
$_block_repeat=true;
echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'currentLogin'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Last login<?php $_block_repeat=false;
echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'currentLogin'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></th>
                                        <th id="registered"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('self_link', array('_sort_arg'=>'sort_mode','_sort_field'=>'created'));
$_block_repeat=true;
echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'created'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Registered<?php $_block_repeat=false;
echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'created'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></th>
                                        <th id="groups">Groups</th>
                                        <th id="actions"></th>
                                    </tr>
                                </thead>
                            <?php }?>
                            <tbody>
                            <?php
$__section_user_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['users']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_user_1_total = $__section_user_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_user'] = new Smarty_Variable(array());
if ($__section_user_1_total !== 0) {
for ($__section_user_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] = 0; $__section_user_1_iteration <= $__section_user_1_total; $__section_user_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']++){
?>
                                <?php if ($_smarty_tpl->tpl_vars['users']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['editable']) {?>
                                    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', 'username', null);
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['users']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['user'] ));
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                                        <tr>
                                            <td class="checkbox-cell">
                                                <div class="form-check">
                                                    <?php if ($_smarty_tpl->tpl_vars['users']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['user'] != 'admin') {?>
                                                        <input type="checkbox" name="checked[]" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['users']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['user'] ));?>
" <?php if ((isset($_smarty_tpl->tpl_vars['users']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['checked'])) && $_smarty_tpl->tpl_vars['users']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['checked'] == 'y') {?>checked="checked" <?php }?>>
                                                    <?php }?>
                                                </div>
                                            </td>

                                            <td class="username">
                                                <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'username', null, null);
echo smarty_modifier_username($_smarty_tpl->tpl_vars['users']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['user']);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                                                <a
                                                    class="link tips"
                                                    href="tiki-adminusers.php?offset=<?php echo $_smarty_tpl->tpl_vars['offset']->value;?>
&amp;numrows=<?php echo $_smarty_tpl->tpl_vars['numrows']->value;?>
&amp;sort_mode=<?php echo $_smarty_tpl->tpl_vars['sort_mode']->value;?>
&amp;user=<?php echo $_smarty_tpl->tpl_vars['users']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['userId'];
if ($_smarty_tpl->tpl_vars['prefs']->value['feature_tabs'] != 'y') {?>#2<?php }?>"
                                                    title="<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
:Edit account settings" <?php if ($_smarty_tpl->tpl_vars['users']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['itemId']) {?>data-itemid="<?php echo $_smarty_tpl->tpl_vars['users']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['itemId'];?>
"<?php }?>>
                                                        <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['users']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['user'] ));?>

                                                </a>
                                                <?php if ($_smarty_tpl->tpl_vars['prefs']->value['user_show_realnames'] == 'y' && $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'username') != $_smarty_tpl->tpl_vars['users']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['user']) {?>
                                                    <div class="subcomment">
                                                        <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'username') ));?>

                                                    </div>
                                                <?php }?>
                                            </td>

                                            <?php if ($_smarty_tpl->tpl_vars['prefs']->value['login_is_email'] != 'y') {?>
                                                <td class="email"><?php echo $_smarty_tpl->tpl_vars['users']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['email'];?>
</td>
                                            <?php }?>
                                            <?php if ($_smarty_tpl->tpl_vars['prefs']->value['auth_method'] == 'openid') {?>
                                                <td class="text"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['users']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['openid_url'])===null||$tmp==='' ? "N" : $tmp);?>
</td>
                                            <?php }?>
                                            <td class="text">
                                                <?php if ($_smarty_tpl->tpl_vars['users']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['currentLogin'] == '') {?>
                                                    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'when', null, null);
echo smarty_modifier_duration_short($_smarty_tpl->tpl_vars['users']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['age']);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                                                    Never <em>(<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tr', array('_0'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'when')));
$_block_repeat=true;
echo smarty_block_tr(array('_0'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'when')), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Registered %0 ago<?php $_block_repeat=false;
echo smarty_block_tr(array('_0'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'when')), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>)</em>
                                                <?php } else { ?>
                                                    <?php echo smarty_modifier_tiki_short_datetime($_smarty_tpl->tpl_vars['users']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['currentLogin']);?>

                                                <?php }?>

                                                <?php if ($_smarty_tpl->tpl_vars['users']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['waiting'] == 'u') {?>
                                                    <br>
                                                    Need to validate email
                                                <?php }?>
                                            </td>
                                            <td class="text">
                                                <?php echo smarty_modifier_tiki_short_datetime($_smarty_tpl->tpl_vars['users']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['registrationDate']);?>

                                            </td>

                                            <td class="text">
                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['groups'], 'what', false, 'grs', 'gr', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['what']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['grs']->value => $_smarty_tpl->tpl_vars['what']->value) {
$_smarty_tpl->tpl_vars['what']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_gr']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_gr']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_gr']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_gr']->value['total'];
?>
                                                    <div style="white-space:nowrap">
                                                        <?php if ($_smarty_tpl->tpl_vars['grs']->value != "Anonymous" && ($_smarty_tpl->tpl_vars['tiki_p_admin']->value == 'y' || in_array($_smarty_tpl->tpl_vars['grs']->value,$_smarty_tpl->tpl_vars['all_groups']->value))) {?>
                                                            <?php if ($_smarty_tpl->tpl_vars['tiki_p_admin']->value == 'y') {?>
                                                                <a
                                                                    class="link tips" <?php if ((isset($_smarty_tpl->tpl_vars['link_style']->value))) {
echo $_smarty_tpl->tpl_vars['link_style']->value;
}?>
                                                                    href="tiki-admingroups.php?group=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['grs']->value,"url" ));?>
"
                                                                    title="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['grs']->value ));?>
:<?php if ($_smarty_tpl->tpl_vars['what']->value == 'included') {?>Edit this included group"<?php } else { ?>Edit group"<?php }?>>
                                                                        <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['grs']->value ));?>

                                                                </a>
                                                            <?php } else { ?>
                                                                <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['grs']->value ));?>

                                                            <?php }?>
                                                            <?php if ($_smarty_tpl->tpl_vars['what']->value == 'included') {?><span class="label label-info">Included</span><?php }?>
                                                            <?php if ($_smarty_tpl->tpl_vars['grs']->value == $_smarty_tpl->tpl_vars['users']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['default_group']) {?><small>(default)</small><?php }?>
                                                            <?php if ($_smarty_tpl->tpl_vars['what']->value != 'included' && $_smarty_tpl->tpl_vars['grs']->value != "Registered") {?>
                                                                
                                                                <a href="<?php echo smarty_function_bootstrap_modal(array('controller'=>'user','action'=>'manage_groups','checked'=>$_smarty_tpl->tpl_vars['username']->value,'groupremove'=>$_smarty_tpl->tpl_vars['grs']->value,'offset'=>$_smarty_tpl->tpl_vars['offset']->value,'sort_mode'=>$_smarty_tpl->tpl_vars['sort_mode']->value,'numrows'=>$_smarty_tpl->tpl_vars['numrows']->value),$_smarty_tpl);?>
"><?php echo smarty_function_icon(array('name'=>"remove"),$_smarty_tpl);?>
</a>
                                                            <?php }?>
                                                            <?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_gr']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_gr']->value['last'] : null)) {?><br><?php }?>
                                                        <?php }?>
                                                    </div>
                                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                            </td>

                                            <td class="action">
                                                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('actions', array());
$_block_repeat=true;
echo smarty_block_actions(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                    <action><a href="<?php echo smarty_function_bootstrap_modal(array('controller'=>'user','action'=>'manage_groups','checked'=>$_smarty_tpl->tpl_vars['username']->value,'offset'=>$_smarty_tpl->tpl_vars['offset']->value,'sort_mode'=>$_smarty_tpl->tpl_vars['sort_mode']->value,'numrows'=>$_smarty_tpl->tpl_vars['numrows']->value),$_smarty_tpl);?>
"><?php echo smarty_function_icon(array('name'=>"group",'_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Add or remove from a group"),$_smarty_tpl);?>
</a></action><action><a class="link" href="tiki-assignuser.php?assign_user=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['users']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['user'],'url' ));?>
" title="Edit group expiry"><?php echo smarty_function_icon(array('name'=>'time','_menu_text'=>'y','_menu_icon'=>'y','alt'=>'Edit group expiry'),$_smarty_tpl);?>
</a></action><action><a href="<?php echo smarty_function_query(array('_type'=>'relative','user'=>$_smarty_tpl->tpl_vars['users']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['userId']),$_smarty_tpl);?>
"><?php echo smarty_function_icon(array('name'=>"edit",'_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Edit account settings"),$_smarty_tpl);?>
</a></action><?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_userPreferences'] == 'y' || $_smarty_tpl->tpl_vars['user']->value == 'admin') {?><action><a href="tiki-user_preferences.php?userId=<?php echo $_smarty_tpl->tpl_vars['users']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['userId'];?>
"><?php echo smarty_function_icon(array('name'=>"settings",'_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Change user preferences"),$_smarty_tpl);?>
</a></action><?php }
if ($_smarty_tpl->tpl_vars['users']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['user'] == $_smarty_tpl->tpl_vars['user']->value || $_smarty_tpl->tpl_vars['users']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['user_information'] != 'private' || $_smarty_tpl->tpl_vars['tiki_p_admin']->value == 'y') {?><action><a href="tiki-user_information.php?userId=<?php echo $_smarty_tpl->tpl_vars['users']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['userId'];?>
"<?php if ($_smarty_tpl->tpl_vars['users']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['user_information'] == 'private') {?>style="opacity:0.5;"<?php }?>><?php echo smarty_function_icon(array('name'=>"help",'_menu_text'=>'y','_menu_icon'=>'y','alt'=>"User information"),$_smarty_tpl);?>
</a></action><?php }
if ($_smarty_tpl->tpl_vars['users']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['user'] != 'admin' && $_smarty_tpl->tpl_vars['users']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['user'] != $_smarty_tpl->tpl_vars['user']->value && $_smarty_tpl->tpl_vars['tiki_p_admin']->value == 'y') {?><action><a href='#' onClick="$('#login-switchuser_1').val('<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( smarty_modifier_username($_smarty_tpl->tpl_vars['users']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['user']),'javascript' ));?>
'); $('#form_switch_user').submit(); return false;"><?php echo smarty_function_icon(array('name'=>"user",'_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Switch to this user"),$_smarty_tpl);?>
</a></action><?php }
if ($_smarty_tpl->tpl_vars['users']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['user'] != 'admin') {
if ($_smarty_tpl->tpl_vars['users']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['waiting'] == 'a') {?><action><form action="tiki-login_validate.php" method="post"><?php echo smarty_function_ticket(array(),$_smarty_tpl);?>
<input type="hidden" name="user" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['users']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['user'],'attr' ));?>
"><input type="hidden" name="pass" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['users']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['valid'],'attr' ));?>
"><button type="submit" class="btn btn-link link-list"><?php echo smarty_function_icon(array('name'=>"ok"),$_smarty_tpl);?>
 Validate user</button></form></action><?php }
if ($_smarty_tpl->tpl_vars['users']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['waiting'] == 'u') {?><action><form action="tiki-confirm_user_email.php" method="post"><?php echo smarty_function_ticket(array(),$_smarty_tpl);?>
<input type="hidden" name="user" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['users']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['user'],'attr' ));?>
"><input type="hidden" name="pass" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( md5($_smarty_tpl->tpl_vars['users']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['provpass']),'attr' ));?>
"><button type="submit" class="btn btn-link link-list"><?php echo smarty_function_icon(array('name'=>"thumbs-up"),$_smarty_tpl);?>
 Validate user</button></form></action><?php }
if ($_smarty_tpl->tpl_vars['prefs']->value['email_due'] > 0 && $_smarty_tpl->tpl_vars['users']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['waiting'] != 'u' && $_smarty_tpl->tpl_vars['users']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['waiting'] != 'a') {?><action><form action="tiki-adminusers.php" method="post"><?php echo smarty_function_ticket(array(),$_smarty_tpl);?>
<input type="hidden" name="user" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['users']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['user'],'attr' ));?>
"><button type="submit" name="action" value="email_due" class="btn btn-link link-list"><?php echo smarty_function_icon(array('name'=>"thumbs-down"),$_smarty_tpl);?>
 Invalidate user</button></form></action><?php }?><action><a href="<?php echo smarty_function_bootstrap_modal(array('controller'=>'user','action'=>'remove_users','checked'=>$_smarty_tpl->tpl_vars['username']->value,'offset'=>$_smarty_tpl->tpl_vars['offset']->value,'sort_mode'=>$_smarty_tpl->tpl_vars['sort_mode']->value,'numrows'=>$_smarty_tpl->tpl_vars['numrows']->value),$_smarty_tpl);?>
"><?php echo smarty_function_icon(array('name'=>"remove",'_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Delete"),$_smarty_tpl);?>
</a></action><?php }
if (!empty($_smarty_tpl->tpl_vars['users']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['openid_url'])) {?><action><a href="tiki-adminusers.php?userId=<?php $_smarty_tpl->_assignInScope('userId', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['users']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['userId'],'url' )));?>&amp;action=remove_openid" onclick="confirmPopup('Remove link with OpenID for this user?', '<?php echo smarty_function_ticket(array('mode'=>'get'),$_smarty_tpl);?>
')"><?php echo smarty_function_icon(array('name'=>"link",'_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Remove link with OpenID account"),$_smarty_tpl);?>
</a></action><?php }?>
                                                <?php $_block_repeat=false;
echo smarty_block_actions(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                        </tr>
                                    <?php }?>
                                <?php }} else {
 ?>
                                    <?php echo smarty_function_norecords(array('_colspan'=>8,'_text'=>"No user records found"),$_smarty_tpl);?>

                                <?php
}
?>
                            </tbody>
                        </table>
                        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('jq', array());
$_block_repeat=true;
echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                            $document.on("show.bs.popover", function ( e ) {
                                var itemId = $(e.target).data("itemid");
                                if (itemId) {
                                    $.get($.service("tracker", "view", {id: itemId}), function (data) {
                                        data = data.replace(/<h[\s\S]*?<\/h.*<?php echo '?>'; ?>
/mgi, "");    // remove headings
                                        $(".popover-body", ".popover.show").empty().append(data);
                                        $(".popover").popover("update");
                                    });
                                }
                            });
                        <?php $_block_repeat=false;
echo smarty_block_jq(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                    <?php if (!$_smarty_tpl->tpl_vars['ts']->value['ajax']) {?>
                    </div>
                    <?php if ($_smarty_tpl->tpl_vars['users']->value) {?>
                        <div class="input-group col-sm-8">
                            <select class="form-control" name="action">
                                <option value="no_action" selected="selected">
                                    Select action to perform with checked...
                                </option>
                                <option value="remove_users">
                                    Remove users...
                                </option>
                                <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_banning'] == 'y') {?>
                                    <option value="ban_ips">
                                        Ban IPs
                                    </option>
                                <?php }?>
                                <option value="manage_groups">
                                    Change group assignments
                                </option>
                                <option value="default_groups">
                                    Set default groups
                                </option>
                                <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki'] == 'y') {?>
                                    <option value="email_wikipage">
                                        Send wiki page content by email
                                    </option>
                                <?php }?>
                            </select>
                            <span class="input-group-append">
                                <button
                                    type="submit"
                                    formaction="<?php echo smarty_function_bootstrap_modal(array('controller'=>'user'),$_smarty_tpl);?>
"
                                    class="btn btn-primary"
                                    onclick="confirmPopup()"
                                >
                                    OK
                                </button>
                            </span>
                        </div>
                    <?php }?>
                </div>
                <input type="hidden" name="find" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['find']->value ));?>
">
                <input type="hidden" name="numrows" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['numrows']->value ));?>
">
                <input type="hidden" name="sort_mode" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['sort_mode']->value ));?>
">
            </form>

            <form id='form_switch_user' action='tiki-login.php' method='post'>
                <?php echo smarty_function_ticket(array(),$_smarty_tpl);?>

                <input type="hidden" name="su" value="1" class="form-control" />
                <input type="hidden" name="username" id="login-switchuser_1" value="" class="form-control" />
            </form>


        <?php if (!$_smarty_tpl->tpl_vars['ts']->value['enabled']) {?>
            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('pagination_links', array('cant'=>$_smarty_tpl->tpl_vars['cant']->value,'step'=>$_smarty_tpl->tpl_vars['numrows']->value,'offset'=>$_smarty_tpl->tpl_vars['offset']->value));
$_block_repeat=true;
echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['cant']->value,'step'=>$_smarty_tpl->tpl_vars['numrows']->value,'offset'=>$_smarty_tpl->tpl_vars['offset']->value), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['cant']->value,'step'=>$_smarty_tpl->tpl_vars['numrows']->value,'offset'=>$_smarty_tpl->tpl_vars['offset']->value), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <?php }?>
    <?php }?>
        <?php $_block_repeat=false;
echo smarty_block_tab(array('name'=>"Users"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    <?php if (!$_smarty_tpl->tpl_vars['ts']->value['ajax']) {?>

        
        <a id="tab2" ></a>
        <?php if ((isset($_smarty_tpl->tpl_vars['userinfo']->value['userId'])) && $_smarty_tpl->tpl_vars['userinfo']->value['userId']) {?>
            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', 'add_edit_user_tablabel', null);?>Edit user <i><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['userinfo']->value['login'] ));?>
</i><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
        <?php } else { ?>
            <?php $_smarty_tpl->_assignInScope('add_edit_user_tablabel', "Add a New User");?>
        <?php }?>

        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tab', array('name'=>((string)$_smarty_tpl->tpl_vars['add_edit_user_tablabel']->value)));
$_block_repeat=true;
echo smarty_block_tab(array('name'=>((string)$_smarty_tpl->tpl_vars['add_edit_user_tablabel']->value)), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_user_encryption'] == 'y') {?>
                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>"warning",'title'=>"Warning: User Encryption is Active"));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Warning: User Encryption is Active"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                The feature User Encryption stores encrypted user information, such as password used to connect to externalsystems.
                    If the password is changed, it will destroy the user's decryption key, and make the data unreadable.
                    The user will be forced to re-enter the passwords and other data that may be encrypted.</a>.
                <?php $_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Warning: User Encryption is Active"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            <?php }?>
            <?php if ((isset($_smarty_tpl->tpl_vars['userinfo']->value['userId'])) && $_smarty_tpl->tpl_vars['userinfo']->value['userId']) {?>
                <h2>Edit user <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['userinfo']->value['login'] ));?>
</h2>
                <?php $_smarty_tpl->_assignInScope('thisloginescaped', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['userinfo']->value['login'],'url' )));?>
                <?php if ($_smarty_tpl->tpl_vars['userinfo']->value['login'] != 'admin' && $_smarty_tpl->tpl_vars['userinfo']->value['editable']) {?>
                    <?php echo smarty_function_button(array('href'=>"tiki-assignuser.php?assign_user=".((string)$_smarty_tpl->tpl_vars['thisloginescaped']->value),'_text'=>"Assign user to Groups",'_icon_name'=>'group'),$_smarty_tpl);?>

                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['userinfo']->value['waiting'] == 'a') {?>
                    <?php $_smarty_tpl->_assignInScope('thispassescaped', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['userinfo']->value['valid'],'url' )));?>
                    <?php if (empty($_smarty_tpl->tpl_vars['thispassescaped']->value)) {
$_smarty_tpl->_assignInScope('thispassescaped', 0);
}?>
                    <?php echo smarty_function_button(array('href'=>((('tiki-login_validate.php?user=').($_smarty_tpl->tpl_vars['thisloginescaped']->value)).('&pass=')).($_smarty_tpl->tpl_vars['thispassescaped']->value),'_text'=>"Validate user",'_icon_name'=>'ok'),$_smarty_tpl);?>

                <?php }?>
            <?php } else { ?>
                <h2>Add a New User</h2>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_intertiki'] == 'y' && !empty($_smarty_tpl->tpl_vars['prefs']->value['feature_intertiki_mymaster'])) {?>
                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>"info",'title'=>"Intertiki Enabled"));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>"info",'title'=>"Intertiki Enabled"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tr', array('_0'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['prefs']->value['feature_intertiki_mymaster'] ))));
$_block_repeat=true;
echo smarty_block_tr(array('_0'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['prefs']->value['feature_intertiki_mymaster'] ))), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>This Tiki is an Intertiki Client so user information must be edited on the Intertiki Master "%0"<?php $_block_repeat=false;
echo smarty_block_tr(array('_0'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['prefs']->value['feature_intertiki_mymaster'] ))), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></a>.
                <?php $_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>"info",'title'=>"Intertiki Enabled"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            <?php } elseif ($_smarty_tpl->tpl_vars['userinfo']->value['editable']) {?>
                <form action="tiki-adminusers.php" method="post" enctype="multipart/form-data" name="RegForm" autocomplete="off">
                    <?php echo smarty_function_ticket(array(),$_smarty_tpl);?>

                    <div class="form-group row">
                        <label class="col-sm-3 col-md-2 col-form-label" for="login"><?php if ($_smarty_tpl->tpl_vars['prefs']->value['login_is_email'] == 'y') {?>Email<?php } else { ?>User<?php }?></label>
                        <div class="col-sm-7 col-md-6">
                            <?php if ($_smarty_tpl->tpl_vars['userinfo']->value['login'] != 'admin') {?>
                                <input type="text" id='login' class="form-control" name='login' value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['userinfo']->value['login'] ));?>
">
                                <?php if ($_smarty_tpl->tpl_vars['prefs']->value['login_is_email'] == 'y') {?>
                                    <br>
                                    <em>Use the email as username.</em>
                                <?php } elseif ($_smarty_tpl->tpl_vars['prefs']->value['lowercase_username'] == 'y') {?>
                                    <br>
                                    <em>Lowercase only</em>.
                                <?php } elseif ($_smarty_tpl->tpl_vars['prefs']->value['login_autogenerate'] == 'y') {?>
                                    <br>

                                    <?php echo smarty_function_icon(array('name'=>'warning','alt'=>"Warning",'style'=>"vertical-align:middle"),$_smarty_tpl);?>

                                    <em>The username will be an autogenerated number based on the user ID if no actual username is provided when the user is created. Do not change these numeric usernames.</em>
                                <?php }?>
                                <?php if (!empty($_smarty_tpl->tpl_vars['userinfo']->value['userId']) && $_smarty_tpl->tpl_vars['prefs']->value['feature_intertiki'] == 'y') {?>
                                    <p>
                                        <?php echo smarty_function_icon(array('name'=>'warning','alt'=>"Warning",'style'=>"vertical-align:middle"),$_smarty_tpl);?>

                                        <em>Changing username is disabled for Intertiki sites</em>
                                    </p>
                                <?php }?>
                            <?php } else { ?>
                                <input type="hidden" class="form-control" name='login' value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['userinfo']->value['login'] ));?>
"><?php echo $_smarty_tpl->tpl_vars['userinfo']->value['login'];?>

                            <?php }?>
                        </div>
                    </div>

                    
                    <?php if ($_smarty_tpl->tpl_vars['prefs']->value['auth_method'] == 'ldap' && ($_smarty_tpl->tpl_vars['prefs']->value['ldap_create_user_tiki'] == 'n' || $_smarty_tpl->tpl_vars['prefs']->value['ldap_skip_admin'] == 'y') && $_smarty_tpl->tpl_vars['prefs']->value['ldap_create_user_ldap'] == 'n' && $_smarty_tpl->tpl_vars['userinfo']->value['login'] != 'admin' && $_smarty_tpl->tpl_vars['auth_ldap_permit_tiki_users']->value == 'n') {?>
                        <div class="form-group row">
                            <div class="offset-sm-2">
                                <b>No password is required</b>
                                <br>
                                <i>Tiki is configured to delegate the password managment to LDAP.</i>
                            </div>
                        </div>
                    <?php } else { ?>
                        <?php $_smarty_tpl->_subTemplateRender('file:password_jq.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('ignorejq'=>'y'), 0, false);
?>
                        <div class="form-group row">
                            <label class="col-sm-3 col-md-2 col-form-label" for="pass1"><?php if ((isset($_smarty_tpl->tpl_vars['userinfo']->value['userId']))) {?>New password<?php } else { ?>Password<?php }?></label>
                            <div class="col-sm-7 col-md-6">
                                <input type="password" class="form-control" placeholder="Password" name="pass" id="pass1" autocomplete="new-password">
                                <div style="margin-left:5px;">
                                    <div id="mypassword_text"><?php echo smarty_function_icon(array('name'=>'ok','istyle'=>'display:none'),$_smarty_tpl);
echo smarty_function_icon(array('name'=>'error','istyle'=>'display:none'),$_smarty_tpl);?>
 <span id="mypassword_text_inner"></span></div>
                                    <div id="mypassword_bar" style="font-size: 5px; height: 2px; width: 0px;"></div>
                                </div>
                                <div style="margin-top:5px">
                                    <?php $_smarty_tpl->_subTemplateRender('file:password_help.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-md-2 col-form-label" for="pass2"><?php if ((isset($_smarty_tpl->tpl_vars['userinfo']->value['userId']))) {?>Confirm new password<?php } else { ?>Confirm password<?php }?></label>
                            <div class="col-sm-7 col-md-6">
                                <input type="password" class="form-control" name="passAgain" id="pass2" placeholder="Password" autocomplete="new-password">
                                <div id="mypassword2_text">
                                    <div id="match" style="display:none">
                                        <?php echo smarty_function_icon(array('name'=>'ok','istyle'=>'color:#0ca908'),$_smarty_tpl);?>
 Passwords match
                                    </div>
                                    <div id="nomatch" style="display:none">
                                        <?php echo smarty_function_icon(array('name'=>'error','istyle'=>'color:#ff0000'),$_smarty_tpl);?>
 Passwords do not match
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php if ($_smarty_tpl->tpl_vars['prefs']->value['generate_password'] == 'y' && !($_smarty_tpl->tpl_vars['prefs']->value['auth_method'] == 'ldap' && ($_smarty_tpl->tpl_vars['prefs']->value['ldap_create_user_tiki'] == 'n' || $_smarty_tpl->tpl_vars['prefs']->value['ldap_skip_admin'] == 'y') && $_smarty_tpl->tpl_vars['prefs']->value['ldap_create_user_ldap'] == 'n')) {?>
                            <div class="form-group row">
                                <div class="col-sm-3 offset-sm-3 col-md-3 offset-md-2">
                                    <span id="genPass"><?php echo smarty_function_button(array('href'=>"#",'_text'=>"Generate a password"),$_smarty_tpl);?>
</span>
                                </div>
                                <div class="col-sm-3 col-md-3">
                                    <input id='genepass' class="form-control" name="genepass" type="text" tabindex="0" style="display:none">
                                </div>
                            </div>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['userinfo']->value['login'] != 'admin' && $_smarty_tpl->tpl_vars['prefs']->value['change_password'] != 'n') {?>
                            <div class="form-group row">
                                <div class="col-sm-9 offset-sm-3 col-md-10 offset-md-2">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="checkbox" name="pass_first_login"
                                                <?php if ((isset($_smarty_tpl->tpl_vars['userinfo']->value['pass_confirm'])) && $_smarty_tpl->tpl_vars['userinfo']->value['pass_confirm'] == '0' || !empty($_REQUEST['pass_first_login'])) {?>
                                                    checked="checked"
                                                <?php }?>>
                                            User must change password at next login
                                        </label>
                                    </div>
                                </div>
                            </div>
                        <?php }?>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['prefs']->value['login_is_email'] != 'y') {?>
                        <div class="form-group row">
                            <label class="col-sm-3 col-md-2 col-form-label" for="pass1">Email</label>
                            <div class="col-sm-7 col-md-6">
                                <input type="text" class="form-control" id="email" name="email" size="30" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['userinfo']->value['email'] ));?>
">
                            </div>
                        </div>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['userinfo']->value['login'] != 'admin' && ($_smarty_tpl->tpl_vars['prefs']->value['validateUsers'] == 'y' || $_smarty_tpl->tpl_vars['prefs']->value['validateRegistration'] == 'y')) {?>
                        <div class="form-group row">
                            <div class="col-sm-9 offset-sm-3 col-md-10 offset-md-2">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox" name="need_email_validation"
                                            <?php if (($_smarty_tpl->tpl_vars['userinfo']->value['login'] == '' && ($_smarty_tpl->tpl_vars['prefs']->value['validateUsers'] == 'y' || $_smarty_tpl->tpl_vars['prefs']->value['validateRegistration'] == 'y')) || $_smarty_tpl->tpl_vars['userinfo']->value['provpass'] != '' || $_smarty_tpl->tpl_vars['userinfo']->value['valid'] != '' || !empty($_REQUEST['need_email_validation'])) {?>
                                                checked="checked"
                                            <?php }?>>
                                        Send an email to the user to enable him or her to validate their account.
                                    </label>
                                    <?php if (empty($_smarty_tpl->tpl_vars['prefs']->value['sender_email'])) {?>
                                        <div class="alert alert-warning highlight">You need to set <a href="tiki-admin.php?page=general" class="alert-link">Sender Email</a></div>
                                    <?php }?>
                                </div>
                            </div>
                        </div>
                    <?php }?>

                    <?php if ($_smarty_tpl->tpl_vars['prefs']->value['userTracker'] == 'y' && ($_smarty_tpl->tpl_vars['userinfo']->value['login'] == '' || !empty($_REQUEST['insert_user_tracker_item']))) {?>
                        <div class="mb-3 row">
                            <div class="col-sm-9 offset-sm-3 col-md-10 offset-md-2">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox" name="insert_user_tracker_item"
                                               <?php if (!empty($_REQUEST['insert_user_tracker_item'])) {?>checked="checked"<?php }?>>
                                        Add a user tracker item for this user
                                    </label>
                                </div>
                            </div>
                        </div>
                    <?php }?>

                    <?php if ($_smarty_tpl->tpl_vars['prefs']->value['userTracker'] == 'y' && $_smarty_tpl->tpl_vars['userstrackerid']->value) {?>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">
                                User tracker
                            </label>

                            <div class="col-md-10">
                                <?php if ($_smarty_tpl->tpl_vars['usersitemid']->value) {?>
                                    <a href="<?php echo smarty_function_bootstrap_modal(array('controller'=>'tracker','action'=>'update_item','trackerId'=>$_smarty_tpl->tpl_vars['userstrackerid']->value,'itemId'=>$_smarty_tpl->tpl_vars['usersitemid']->value),$_smarty_tpl);?>
" onclick="$('[data-toggle=popover]').popover('hide');" class="btn btn-primary edit-usertracker">
                                        Edit Item
                                    </a>
                                    <a href="<?php echo smarty_function_bootstrap_modal(array('controller'=>'tracker','action'=>'view','id'=>$_smarty_tpl->tpl_vars['usersitemid']->value),$_smarty_tpl);?>
" class="btn btn-info">
                                        View item
                                    </a>
                                <?php } else { ?>
                                    <a href="<?php echo smarty_function_bootstrap_modal(array('controller'=>'tracker','action'=>'insert_item','trackerId'=>$_smarty_tpl->tpl_vars['userstrackerid']->value,'forced'=>$_smarty_tpl->tpl_vars['usersTrackerForced']->value),$_smarty_tpl);?>
"
                                            class="btn btn-primary insert-usertracker">
                                        Create Item
                                    </a>
                                <?php }?>
                            </div>
                        </div>
                    <?php }?>

                    <div class="form-group row">
                        <div class="col-sm-9 offset-sm-3 col-md-10 offset-md-2">
                            <?php if ((isset($_smarty_tpl->tpl_vars['userinfo']->value['userId'])) && $_smarty_tpl->tpl_vars['userinfo']->value['userId']) {?>
                                <input type="hidden" name="user" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['userinfo']->value['userId'] ));?>
">
                                <input type="hidden" name="edituser" value="1">
                                <input
                                    type="submit"
                                    class="btn btn-primary"
                                    name="save"
                                    value="Save"
                                    onclick="confirmPopup('Modify this user\'s data?')"
                                >
                            <?php } else { ?>
                                <input
                                    type="submit"
                                    class="btn btn-primary"
                                    name="newuser"
                                    value="Add"
                                >
                            <?php }?>
                        </div>
                    </div>
                    <?php if ((isset($_smarty_tpl->tpl_vars['userinfo']->value['userId'])) && $_smarty_tpl->tpl_vars['userinfo']->value['userId'] != 0) {?>
                        <table class="table table-striped table-condensed small">

                            <?php if ($_smarty_tpl->tpl_vars['userinfo']->value['created'] != $_smarty_tpl->tpl_vars['userinfo']->value['registrationDate']) {?>
                                <tr>
                                    <td>Created</td>
                                    <td><?php echo smarty_modifier_tiki_long_datetime($_smarty_tpl->tpl_vars['userinfo']->value['created']);?>
</td>
                                </tr>
                            <?php }?>
                            <tr>
                                <td>Registered</td><td><?php if ($_smarty_tpl->tpl_vars['userinfo']->value['registrationDate']) {
echo smarty_modifier_tiki_long_datetime($_smarty_tpl->tpl_vars['userinfo']->value['registrationDate']);
}?></td>
                            </tr>
                            <tr>
                                <td>Pass confirmed</td><td><?php if ((isset($_smarty_tpl->tpl_vars['userinfo']->value['pass_confirm'])) && $_smarty_tpl->tpl_vars['userinfo']->value['pass_confirm']) {
echo (($tmp = @smarty_modifier_tiki_long_datetime($_smarty_tpl->tpl_vars['userinfo']->value['pass_confirm']))===null||$tmp==='' ? 'Never' : $tmp);
}?></td>
                            </tr>

                            <?php if ($_smarty_tpl->tpl_vars['prefs']->value['email_due'] > 0) {?>
                                <tr>
                                    <td style="white-space: nowrap;">Email confirmed</td>
                                    <td>
                                        <?php if ($_smarty_tpl->tpl_vars['userinfo']->value['email_confirm']) {?>
                                            (<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tr', array('_0'=>$_smarty_tpl->tpl_vars['userinfo']->value['daysSinceEmailConfirm']));
$_block_repeat=true;
echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['userinfo']->value['daysSinceEmailConfirm']), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>%0 days ago<?php $_block_repeat=false;
echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['userinfo']->value['daysSinceEmailConfirm']), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>)
                                        <?php } else { ?>
                                            Never
                                        <?php }?>
                                    </td>
                                </tr>
                            <?php }?>
                            <tr>
                                <td>Current Login</td>
                                <td><?php if ($_smarty_tpl->tpl_vars['userinfo']->value['currentLogin']) {
echo (($tmp = @smarty_modifier_tiki_long_datetime($_smarty_tpl->tpl_vars['userinfo']->value['currentLogin']))===null||$tmp==='' ? 'Never' : $tmp);
}?></td>
                            </tr>
                            <tr>
                                <td>Last Login</td>
                                <td><?php if ($_smarty_tpl->tpl_vars['userinfo']->value['lastLogin']) {
echo (($tmp = @smarty_modifier_tiki_long_datetime($_smarty_tpl->tpl_vars['userinfo']->value['lastLogin']))===null||$tmp==='' ? 'Never' : $tmp);
}?></td>
                            </tr>
                        </table>
                    <?php }?>

                </form>
            <?php } else { ?>
                You do not have permission to edit this user
            <?php }?>
        <?php $_block_repeat=false;
echo smarty_block_tab(array('name'=>((string)$_smarty_tpl->tpl_vars['add_edit_user_tablabel']->value)), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

        
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tab', array('name'=>"Import"));
$_block_repeat=true;
echo smarty_block_tab(array('name'=>"Import"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <h2>Batch upload (CSV file)<?php echo smarty_function_help(array('url'=>"Users"),$_smarty_tpl);?>
</h2>

            <form action="tiki-adminusers.php" method="post" enctype="multipart/form-data">
                <?php echo smarty_function_ticket(array(),$_smarty_tpl);?>

                <div class="form-group row">
                    <label for="csvlist" class="col-form-label col-md-3">CSV File</label>
                    <div class="col-md-9">
                        <input type="file" id="csvlist" name="csvlist" class="form-control">
                        <small class="form-text">
                            Your file should contain in the first row (first entry) the following fields:
                            <span class="font-weight-bold">login</span>, <span class="font-weight-bold">password</span>, <span class="font-weight-bold">email</span>, groups, default_group,realName.<br><br>
                            <span class="font-italic">Example:</span><br>
                            login,password,email,groups,default_group,realName<br>
                            user1,pass1,email1,group1,group1<br>
                            user2,pass2,email2,"group1,group2",group1<br><br>
                            Only login, password, email are mandatory. Use an empty password for automatic password generation. Use same login and email if the login use email. Groups are separated by comma. With group name with comma, double the comma.<br>
                            On most server with default setting importing 250 users should be fine. If you have a long list you can split it or change the server settings to allow longer execution time.
                            Please also note that the data should match your Tiki setting. IE: if special characters or space are not permit for the username of your Tiki then your data in the CSV file for username should not contain any.
                        </small>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-3 col-form-label">Existing Users</label>
                    <div class="col-md-9">
                        <label>
                            <input type="radio" name="overwrite" value="y">
                            Overwrite
                        </label>
                        <label>
                            <input type="radio" name="overwrite" value="n" checked>
                            Don't overwrite
                        </label>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-9 offset-md-3">
                        <div class="form-check">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" name="overwriteGroup">
                                Overwrite groups<?php echo smarty_function_help(array('url'=>"Users",'desc'=>"Select this if you want the groups to be overwritten"),$_smarty_tpl);?>

                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-9 offset-md-3">
                        <div class="form-check">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" name="createGroup">
                                Create groups<?php echo smarty_function_help(array('url'=>"Users",'desc'=>"Select this if you want the new groups indicated in the csv file to be created"),$_smarty_tpl);?>

                            </label>
                        </div>
                    </div>
                </div>
                <?php if ($_smarty_tpl->tpl_vars['prefs']->value['change_password'] != 'n') {?>
                    <div class="form-group row">
                        <div class="col-md-9 offset-md-3">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" name="forcePasswordChange">
                                    The user must change his or her password the first time they log in<?php echo smarty_function_help(array('url'=>"Users",'desc'=>"Select this if you want to force the user to change their passwords the first time that they log in to Tiki site"),$_smarty_tpl);?>

                                </label>
                            </div>
                        </div>
                    </div>
                <?php }?>
                <div class="form-group row">
                    <div class="col-md-9 offset-md-3">
                        <div class="form-check">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" name="notification">
                                Send an email to the user to enable him or her to validate their account.<?php echo smarty_function_help(array('url'=>"Users",'desc'=>"Select this if you want to require users to validate first their email account prior to their first login."),$_smarty_tpl);?>

                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-9 offset-md-3">
                        <input type="submit" class="btn btn-secondary" name="batch" value="Add">
                    </div>
                </div>
            </form>
            <?php if ($_smarty_tpl->tpl_vars['tiki_p_admin']->value == 'y') {?> 
                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>"tip",'title'=>"Tip"));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Tip"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>You can export users of a group by clicking on that group at <a href="tiki-admingroups.php" class="alert-link">admin->groups</a><?php $_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Tip"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            <?php }?>
        <?php $_block_repeat=false;
echo smarty_block_tab(array('name'=>"Import"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tab', array('name'=>"Temporary Users"));
$_block_repeat=true;
echo smarty_block_tab(array('name'=>"Temporary Users"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <h2>Invite new temporary user(s)</h2>
            <?php $_smarty_tpl->_assignInScope('temp_users_enabled', true);?>
            <?php if ($_smarty_tpl->tpl_vars['prefs']->value['auth_token_access'] != 'y') {?>
                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>"warning",'title'=>"Token Access Feature Dependency"));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Token Access Feature Dependency"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    The token access feature is needed for Temporary Users to login.
                    <a href="tiki-admin.php?lm_criteria=auth_token_access&exact" class="alert-link">Turn it on here.</a>
                <?php $_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Token Access Feature Dependency"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <?php $_smarty_tpl->_assignInScope('temp_users_enabled', false);?>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['prefs']->value['login_is_email'] === 'y') {?>
                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>"warning",'title'=>"Feature Conflict"));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Feature Conflict"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    This feature currently is incompatible with the "Use email as username" feature
                    <a href="tiki-admin.php?lm_criteria=login_is_email&exact" class="alert-link">Turn it off here.</a>
                <?php $_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Feature Conflict"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <?php $_smarty_tpl->_assignInScope('temp_users_enabled', false);?>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['prefs']->value['user_unique_email'] === 'y') {?>
                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>"warning",'title'=>"Feature Conflict"));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Feature Conflict"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    This feature currently is incompatible with the "The email address of each user must be unique." feature
                    <a href="tiki-admin.php?lm_criteria=user_unique_email&exact" class="alert-link">Turn it off here.</a>
                <?php $_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Feature Conflict"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <?php $_smarty_tpl->_assignInScope('temp_users_enabled', false);?>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['temp_users_enabled']->value) {?>
                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>"info",'title'=>"Temporary Users"));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>"info",'title'=>"Temporary Users"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <p>Temporary users cannot login the usual way but instead do so via an autologin URL that is associated with a token. An email will be sent out to invited users containing this URL. You will receive a copy of the email yourself.</p>
                    <p>These temporary users will be deleted (but can be set to be preserved in Admin Tokens) once the validity period is over. Normally, these users should have read-only access. Nevertheless, if you are allowing these users to submit information, e.g. fill in a tracker form, make sure to ask for their information again in those forms.</p>
                    <p>Please do not assign temporary users to Groups that can access any security sensitive information, since access to these accounts is relatively easy to obtain, for example by intercepting or otherwise getting access to these emails.</p>
                <?php $_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>"info",'title'=>"Temporary Users"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>"info",'title'=>"Revoking Access"));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>"info",'title'=>"Revoking Access"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    To revoke access before validity expires or to review who has access, please see: <a href="tiki-admin_tokens.php" class="alert-link">Admin Tokens</a>
                <?php $_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>"info",'title'=>"Revoking Access"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <form name="tempuser" id="tempuser" method="post" action="<?php echo smarty_function_service(array('controller'=>'user','action'=>'invite_tempuser'),$_smarty_tpl);?>
">
                    <div class="form-group row">
                        <label class="col-sm-4 col-md-4 col-form-label" for="tempuser_emails">Email addresses (comma-separated)</label>
                        <div class="col-sm-8 col-md-8">
                            <input type="text" class="form-control" name="tempuser_emails" id="tempuser_emails" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-md-4 col-form-label" for="tempuser_groups">Groups (comma-separated)</label>
                        <div class="col-sm-8 col-md-8">
                            <input type="text" class="form-control" name="tempuser_groups" id="tempuser_groups" />
                            <?php echo smarty_function_autocomplete(array('element'=>'#tempuser_groups','type'=>'groupname'),$_smarty_tpl);?>

                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-md-4 col-form-label" for="tempuser_expiry">Valid for days (use -1 for forever)</label>
                        <div class="col-sm-8 col-md-8">
                            <input type="text" class="form-control" name="tempuser_expiry" id="tempuser_expiry" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-md-4 col-form-label" for="tempuser_prefix">Username prefix</label>
                        <div class="col-sm-8 col-md-8">
                            <input type="text" class="form-control" name="tempuser_prefix" id="tempuser_prefix" placeholder="guest"/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-md-4 col-form-label" for="tempuser_path">Autologin (non-SEFURL) path</label>
                        <div class="col-sm-8 col-md-8">
                            <input type="text" class="form-control" name="tempuser_path" id="tempuser_path" placeholder="index.php"/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-10 offset-sm-4 col-md-10 offset-md-4">
                            <input
                                type="submit"
                                class="btn btn-secondary"
                                value="Invite"
                                onclick="postForm()"
                            >
                        </div>
                    </div>
                </form>
            <?php }?>
        <?php $_block_repeat=false;
echo smarty_block_tab(array('name'=>"Temporary Users"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    <?php }
$_block_repeat=false;
echo smarty_block_tabset(array('name'=>'tabs_adminusers'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
