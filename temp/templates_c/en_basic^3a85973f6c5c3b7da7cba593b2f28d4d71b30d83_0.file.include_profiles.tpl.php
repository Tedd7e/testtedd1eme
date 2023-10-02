<?php
/* Smarty version 3.1.48, created on 2023-09-29 11:21:49
  from '/home/teddieme/tedd1eme/templates/admin/include_profiles.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6516a53dbb4a37_90295560',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3a85973f6c5c3b7da7cba593b2f28d4d71b30d83' => 
    array (
      0 => '/home/teddieme/tedd1eme/templates/admin/include_profiles.tpl',
      1 => 1689085248,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6516a53dbb4a37_90295560 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/block.remarksbox.php','function'=>'smarty_block_remarksbox',),1=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/block.tabset.php','function'=>'smarty_block_tabset',),2=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/block.tab.php','function'=>'smarty_block_tab',),3=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/function.ticket.php','function'=>'smarty_function_ticket',),4=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/block.jq.php','function'=>'smarty_block_jq',),5=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/function.listfilter.php','function'=>'smarty_function_listfilter',),6=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/modifier.truncate.php','function'=>'smarty_modifier_truncate',),7=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/function.icon.php','function'=>'smarty_function_icon',),8=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/function.preference.php','function'=>'smarty_function_preference',),));
?>

<?php $_smarty_tpl->_assignInScope('baseURI', ((string)$_SERVER['REQUEST_URI']));
echo $_smarty_tpl->tpl_vars['headerlib']->value->add_jsfile("lib/jquery_tiki/tiki-profile.js");?>


<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>"tip",'title'=>"Tip"));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Tip"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    <a class="alert-link" href="http://profiles.tiki.org">Tiki Configuration Profiles</a>.
    You can revert a profile you applied through the <a href="tiki-syslog.php">Tiki logs</a>.
<?php $_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Tip"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<?php if ((isset($_smarty_tpl->tpl_vars['profilefeedback']->value))) {?>
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>"note",'title'=>"Note"));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>"note",'title'=>"Note"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>

        The following list of changes has been applied:
        <ul>
        <?php
$__section_n_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['profilefeedback']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_n_0_total = $__section_n_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_n'] = new Smarty_Variable(array());
if ($__section_n_0_total !== 0) {
for ($__section_n_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_n']->value['index'] = 0; $__section_n_0_iteration <= $__section_n_0_total; $__section_n_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_n']->value['index']++){
?>
            <li>
                <p><?php echo $_smarty_tpl->tpl_vars['profilefeedback']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_n']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_n']->value['index'] : null)];?>
</p>
            </li>
        <?php
}
}
?>
        </ul>
    <?php $_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>"note",'title'=>"Note"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}?>

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tabset', array('name'=>'tabs_admin-profiles'));
$_block_repeat=true;
echo smarty_block_tabset(array('name'=>'tabs_admin-profiles'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>

    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tab', array('name'=>"Apply"));
$_block_repeat=true;
echo smarty_block_tab(array('name'=>"Apply"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <?php if ($_smarty_tpl->tpl_vars['prefs']->value['javascript_enabled'] == 'y') {?>
            <?php if ($_smarty_tpl->tpl_vars['openSources']->value == 'some') {?>
                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>"warning",'title'=>"Warning"));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Warning"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    Some of your Profiles Repositories are not connecting. This may prevent you from applying certain profiles
                <?php $_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Warning"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            <?php }?>
            <form method="get" action="tiki-admin.php?page=profiles">
                <h4>Find profiles <small>Search by name, types and repository</small></h4>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group row">
                            <label class="col-form-label" for="profile">Profile name </label>
                            <input type="text" class="form-control" name="profile" placeholder="Find..." id="profile" value="<?php if ((isset($_smarty_tpl->tpl_vars['profile']->value))) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['profile']->value ));
}?>" />
                        </div>
                        <?php if ((isset($_smarty_tpl->tpl_vars['category_list']->value)) && count($_smarty_tpl->tpl_vars['category_list']->value) > 0) {?>
                            <div class="form-group row">
                                <label class="col-form-label" for="categories">Profile types</label>
                                    <select multiple="multiple" name="categories[]" id="categories" class="form-control" style="min-height: 8em; max-height: 15em">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['category_list']->value, 'cat');
$_smarty_tpl->tpl_vars['cat']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cat']->value) {
$_smarty_tpl->tpl_vars['cat']->do_else = false;
?>
                                            <option value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cat']->value ));?>
"<?php if (!empty($_smarty_tpl->tpl_vars['categories']->value) && in_array($_smarty_tpl->tpl_vars['cat']->value,$_smarty_tpl->tpl_vars['categories']->value)) {?> selected="selected"<?php }?>><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cat']->value ));?>
</option>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </select>
                            </div>
                        <?php }?>
                        <div class="form-group row">
                            <label class="col-form-label" for="repository">Profile repository</label>
                            <select name="repository" id="repository" class="form-control">
                                <option value="">All</option>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sources']->value, 'source');
$_smarty_tpl->tpl_vars['source']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['source']->value) {
$_smarty_tpl->tpl_vars['source']->do_else = false;
?>
                                    <option value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['source']->value['url'] ));?>
"<?php if ((isset($_smarty_tpl->tpl_vars['repository']->value)) && $_smarty_tpl->tpl_vars['repository']->value == $_smarty_tpl->tpl_vars['source']->value['url']) {?> selected="selected"<?php }?>><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['source']->value['short'] ));?>
</option>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </select>
                        </div>
                        <input type="hidden" name="page" value="profiles">
                        <input type="hidden" name="redirect" value=0>
                        <div class="form-group text-center">
                            <input type="submit" class="btn btn-secondary" name="list" value="Find" />
                        </div>
                    </div>
                    <div class="col-sm-6">
                            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>"info",'title'=>"Suggested Profiles",'close'=>"n"));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>"info",'title'=>"Suggested Profiles",'close'=>"n"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                <?php $_smarty_tpl->_assignInScope('profilesFilterUrlStart', "tiki-admin.php?categories%5B%5D=");?>
                                <?php $_smarty_tpl->_assignInScope('profilesFilterUrlMid', '.x&categories%5B%5D=');?>
                                <?php $_smarty_tpl->_assignInScope('profilesFilterUrlEnd', '&repository=http%3A%2F%2Fprofiles.tiki.org%2Fprofiles&page=profiles&preloadlist=y&list=List#step2');?>

                                <p>
                                    <?php $_smarty_tpl->_assignInScope('profilesFilterUrlFeaturedProfiles', 'Featured+profiles');?>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['profilesFilterUrlStart']->value;
echo $_smarty_tpl->tpl_vars['tikiMajorVersion']->value;
echo $_smarty_tpl->tpl_vars['profilesFilterUrlMid']->value;
echo $_smarty_tpl->tpl_vars['profilesFilterUrlFeaturedProfiles']->value;
echo $_smarty_tpl->tpl_vars['profilesFilterUrlEnd']->value;?>
" class="alert-link">Featured Site Profiles</a>
                                    <br>Featured Site Profiles is a list of applications that are maintained by the Tiki community and are a great way to get started.
                                </p>

                                <p>
                                    <?php $_smarty_tpl->_assignInScope('profilesFilterUrlFullProfiles', 'Full+profile+(out+of+the+box+%26+ready+to+go)');?>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['profilesFilterUrlStart']->value;
echo $_smarty_tpl->tpl_vars['tikiMajorVersion']->value;
echo $_smarty_tpl->tpl_vars['profilesFilterUrlMid']->value;
echo $_smarty_tpl->tpl_vars['profilesFilterUrlFullProfiles']->value;
echo $_smarty_tpl->tpl_vars['profilesFilterUrlEnd']->value;?>
" class="alert-link">Full Profiles</a>
                                    <br>Full Profiles are full featured out of the box solutions.
                                </p>

                                <p>
                                    <?php $_smarty_tpl->_assignInScope('profilesFilterUrlMiniProfiles', 'Mini-profile+(can+be+included+in+other)');?>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['profilesFilterUrlStart']->value;
echo $_smarty_tpl->tpl_vars['tikiMajorVersion']->value;
echo $_smarty_tpl->tpl_vars['profilesFilterUrlMid']->value;
echo $_smarty_tpl->tpl_vars['profilesFilterUrlMiniProfiles']->value;
echo $_smarty_tpl->tpl_vars['profilesFilterUrlEnd']->value;?>
" class="alert-link">Mini Profiles</a>
                                    <br>Mini Profiles will configure specific features and are a great way to add more functionality to an existing configuration.
                                </p>

                                <p>
                                    <?php $_smarty_tpl->_assignInScope('profilesFilterUrlLearningProfiles', 'Learning+profile+(just+to+show+off+feature)');?>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['profilesFilterUrlStart']->value;
echo $_smarty_tpl->tpl_vars['tikiMajorVersion']->value;
echo $_smarty_tpl->tpl_vars['profilesFilterUrlMid']->value;
echo $_smarty_tpl->tpl_vars['profilesFilterUrlLearningProfiles']->value;
echo $_smarty_tpl->tpl_vars['profilesFilterUrlEnd']->value;?>
" class="alert-link">Learning Profiles</a>
                                    <br>Learning Profiles will allow you to quickly evaluate specific features in Tiki.
                                </p>
                            <?php $_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>"info",'title'=>"Suggested Profiles",'close'=>"n"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                    </div>

                </div>
            </form>
            <a id="step2"></a>
            <?php if ((isset($_smarty_tpl->tpl_vars['result']->value))) {?>
                <h4>Select and apply profile <small>Click on a configuration profile name below to review it and apply it on your site</small></h4>
                <div class="table-responsive">
                    <table class="table table-condensed table-hover table-striped">
                        <tr>
                            <th>Profile name</th>
                            <th>Repository</th>
                            <th>Profile type</th>
                        </tr>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result']->value, 'profile', false, 'k');
$_smarty_tpl->tpl_vars['profile']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['profile']->value) {
$_smarty_tpl->tpl_vars['profile']->do_else = false;
?>
                            <tr id="profile-<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
">
                                <?php if ($_smarty_tpl->tpl_vars['profile']->value['name'] == $_smarty_tpl->tpl_vars['show_details_for']->value) {?>
                                    <?php $_smarty_tpl->_assignInScope('show_details_for_profile_num', ((string)$_smarty_tpl->tpl_vars['k']->value));?>
                                    <?php $_smarty_tpl->_assignInScope('show_details_for_fullname', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['profile']->value['name'] )));?>
                                    <?php $_smarty_tpl->_assignInScope('show_details_for_domain', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['profile']->value['domain'] )));?>
                                    <?php ob_start();
echo smarty_function_ticket(array('mode'=>'get'),$_smarty_tpl);
$_prefixVariable1 = ob_get_clean();
$_smarty_tpl->_assignInScope('show_details_for_event', $_prefixVariable1);?>
                                    <?php $_smarty_tpl->_assignInScope('show', true);?>
                                    <td><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['profile']->value['name'] ));?>
: See profile info below (may take a few seconds to load).</td>
                                <?php } else { ?>
                                    <td><a href="#" onclick="$.profilesShowDetails( '<?php echo $_smarty_tpl->tpl_vars['baseURI']->value;?>
', 'profile-<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
', '<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['profile']->value['domain'] ));?>
', '<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['profile']->value['name'] ));?>
', event, '<?php echo $_smarty_tpl->tpl_vars['show']->value;?>
'); return false"
                                           data-ticket="<?php echo smarty_function_ticket(array('mode'=>'get'),$_smarty_tpl);?>
"
                                        >
                                            <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['profile']->value['name'] ));?>

                                        </a><?php if ($_smarty_tpl->tpl_vars['profile']->value['installed']) {?> <em>applied</em><?php }?>
                                    </td>
                                <?php }?>

                                <td><?php echo $_smarty_tpl->tpl_vars['profile']->value['domain'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['profile']->value['categoriesString'];?>
</td>
                            </tr>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        <?php if (count($_smarty_tpl->tpl_vars['result']->value) == '0') {?>
                            <tr><td colspan="3" class="odd">No results</td></tr>
                        <?php }?>
                    </table>
                    <?php if ((isset($_smarty_tpl->tpl_vars['show_details_for_profile_num']->value)) && $_smarty_tpl->tpl_vars['show_details_for_profile_num']->value != '') {?>
                        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('jq', array());
$_block_repeat=true;
echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>$.profilesShowDetails('<?php echo $_smarty_tpl->tpl_vars['baseURI']->value;?>
', 'profile-<?php echo $_smarty_tpl->tpl_vars['show_details_for_profile_num']->value;?>
', '<?php echo $_smarty_tpl->tpl_vars['show_details_for_domain']->value;?>
', '<?php echo $_smarty_tpl->tpl_vars['show_details_for_fullname']->value;?>
', '<?php echo $_smarty_tpl->tpl_vars['show_details_for_event']->value;?>
', '<?php echo $_smarty_tpl->tpl_vars['show']->value;?>
');<?php $_block_repeat=false;
echo smarty_block_jq(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                    <?php }?>
                </div>
            <?php }?>
        <?php } else { ?>
            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>"warning",'title'=>"Warning"));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Warning"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                JavaScript must be turned <strong>ON</strong> in order to apply Profiles. Please enable your JavaScript and try again.
            <?php $_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Warning"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <?php }?>
    <?php $_block_repeat=false;
echo smarty_block_tab(array('name'=>"Apply"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tab', array('name'=>"Export"));
$_block_repeat=true;
echo smarty_block_tab(array('name'=>"Export"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <form action="tiki-admin.php?page=profiles" method="post" role="form">
            <input type="hidden" name="redirect" value=0>
            <fieldset id="export_to_yaml">
                <legend>Export YAML</legend>
                <?php if (!empty('exported_content')) {?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['exported_content']->value, 'export');
$_smarty_tpl->tpl_vars['export']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['export']->value) {
$_smarty_tpl->tpl_vars['export']->do_else = false;
?>
                        <div class="wikitext"><?php echo $_smarty_tpl->tpl_vars['export']->value;?>
</div>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <?php }?>
                <div class="form-group row">
                    <label class="col-form-label col-sm-2" for="export_type">Object type</label>
                    <div class="col-sm-5">
                    <select name="export_type" id="export_type" class="form-control">
                        <option value="prefs"<?php if (!empty($_smarty_tpl->tpl_vars['export_type']->value) && $_smarty_tpl->tpl_vars['export_type']->value == "prefs") {?> selected="selected"<?php }?>>
                            Preferences
                        </option>
                        <option value="modules"<?php if (!empty($_smarty_tpl->tpl_vars['export_type']->value) && $_smarty_tpl->tpl_vars['export_type']->value == "modules") {?> selected="selected"<?php }?>>
                            Modules
                        </option>
                        <option value="pages"<?php if (!empty($_smarty_tpl->tpl_vars['export_type']->value) && $_smarty_tpl->tpl_vars['export_type']->value == "pages") {?> selected="selected"<?php }?>>
                            Pages
                        </option>
                        <?php if ($_smarty_tpl->tpl_vars['tiki_p_admin_trackers']->value == 'y') {?>
                            <option value="trackers"<?php if (!empty($_smarty_tpl->tpl_vars['export_type']->value) && $_smarty_tpl->tpl_vars['export_type']->value == "trackers") {?> selected="selected"<?php }?>>
                                Trackers
                            </option>
                        <?php }?>
                    </select>
                    </div>
                </div>
                <fieldset>
                    <legend>Export modified preferences as YAML</legend>
                    <div class="t_navbar">
                        <?php echo smarty_function_listfilter(array('selectors'=>".profile_export_list > li"),$_smarty_tpl);?>

                        <label for="select_all_prefs_to_export">Toggle Visible</label>
                        <input type="checkbox" id="select_all_prefs_to_export" />
                        <label for="export_show_added">Show added preferences</label>
                        <input type="checkbox" name="export_show_added" id="export_show_added" <?php if (!empty($_REQUEST['export_show_added'])) {?> checked="checked"<?php }?> >
                    </div>
                    <div id="export_options_container">
                        <ul id="prefs_to_export_list" class="profile_export_list"<?php if (!empty($_smarty_tpl->tpl_vars['export_type']->value) && $_smarty_tpl->tpl_vars['export_type']->value != "prefs") {?> style=display:none;"<?php }?>>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['modified_list']->value, 'data', false, 'name');
$_smarty_tpl->tpl_vars['data']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['name']->value => $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->do_else = false;
?>
                                <li class="form-check">
                                    <?php if (is_array($_smarty_tpl->tpl_vars['data']->value['current']['expanded'])) {?>
                                        <?php $_smarty_tpl->_assignInScope('current', implode($_smarty_tpl->tpl_vars['data']->value['current']['expanded'],", "));?>
                                        <?php $_smarty_tpl->_assignInScope('current', "[".((string)$_smarty_tpl->tpl_vars['current']->value)."]");?>
                                    <?php } else { ?>
                                        <?php $_smarty_tpl->_assignInScope('current', $_smarty_tpl->tpl_vars['data']->value['current']['expanded']);?>
                                    <?php }?>
                                    <input type="checkbox" class="form-check-input" name="prefs_to_export[<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
]" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['current']->value ));?>
"
                                           id="checkbox_<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
"<?php if ((isset($_smarty_tpl->tpl_vars['prefs_to_export']->value[$_smarty_tpl->tpl_vars['name']->value]))) {?> checked="checked"<?php }?>
                                    >
                                    <label for="checkbox_<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" class="form-check-label">
                                        <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
 = '<strong><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( smarty_modifier_truncate($_smarty_tpl->tpl_vars['current']->value,40,"...",true) ));?>
</strong>'
                                        <em>
                                            &nbsp;&nbsp;
                                            <?php if ((isset($_smarty_tpl->tpl_vars['data']->value['default']))) {?>
                                                <?php if (empty($_smarty_tpl->tpl_vars['data']->value['default'])) {?>
                                                    ('')
                                                <?php } else { ?>
                                                    <?php if (is_array($_smarty_tpl->tpl_vars['data']->value['default'])) {
$_smarty_tpl->_assignInScope('default', implode($_smarty_tpl->tpl_vars['data']->value['default'],", "));
} else {
$_smarty_tpl->_assignInScope('default', $_smarty_tpl->tpl_vars['data']->value['default']);
}?>
                                                    ('<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( smarty_modifier_truncate($_smarty_tpl->tpl_vars['default']->value,20,"...",true) ));?>
')
                                                <?php }?>
                                            <?php } else { ?>
                                                (no default)
                                            <?php }?>
                                        </em>
                                    </label>
                                </li>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </ul>
                        <ul id="modules_to_export_list" class="profile_export_list"<?php if ($_smarty_tpl->tpl_vars['export_type']->value != "modules") {?> style=display:none;"<?php }?>>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['modules_for_export']->value, 'data', false, 'name');
$_smarty_tpl->tpl_vars['data']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['name']->value => $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->do_else = false;
?>
                                <li class="form-check">
                                    <input type="checkbox" class="form-check-input" name="modules_to_export[<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
]" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['data']->value['name'] ));?>
"
                                           id="modcheckbox_<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
"<?php if ((isset($_smarty_tpl->tpl_vars['modules_to_export']->value[$_smarty_tpl->tpl_vars['name']->value]))) {?> checked="checked"<?php }?> />
                                    <label for="modcheckbox_<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" class="form-check-label">
                                        <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['data']->value['data']['name'] ));?>
 :
                                        <em>
                                            &nbsp;&nbsp;
                                            <?php echo $_smarty_tpl->tpl_vars['data']->value['data']['position'];?>

                                            <?php echo $_smarty_tpl->tpl_vars['data']->value['data']['order'];?>

                                        </em>
                                    </label>
                                </li>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </ul>
                        <ul id="pages_to_export_list" class="profile_export_list"<?php if ($_smarty_tpl->tpl_vars['export_type']->value != "pages") {?> style=display:none;"<?php }?>>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pages_for_export']->value, 'page');
$_smarty_tpl->tpl_vars['page']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['page']->value) {
$_smarty_tpl->tpl_vars['page']->do_else = false;
?>
                                <li class="form-check">
                                    <input type="checkbox" class="form-check-input" name="pages_to_export[<?php echo $_smarty_tpl->tpl_vars['page']->value['page_id'];?>
]" value="<?php echo $_smarty_tpl->tpl_vars['page']->value['page_id'];?>
"
                                           id="pages_checkbox_<?php echo $_smarty_tpl->tpl_vars['page']->value['page_id'];?>
"<?php if ((isset($_smarty_tpl->tpl_vars['pages_to_export']->value[$_smarty_tpl->tpl_vars['page']->value['page_id']]))) {?> checked="checked"<?php }?> />
                                    <label for="pages_checkbox_<?php echo $_smarty_tpl->tpl_vars['page']->value['page_id'];?>
" class="form-check-label">
                                        <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['page']->value['pageName'] ));?>

                                    </label>
                                </li>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </ul>
                        <?php if ($_smarty_tpl->tpl_vars['tiki_p_admin_trackers']->value == 'y') {?>
                            <ul id="trackers_to_export_list" class="profile_export_list"<?php if ($_smarty_tpl->tpl_vars['export_type']->value != "trackers") {?> style=display:none;"<?php }?>>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['trackers_for_export']->value, 'tracker');
$_smarty_tpl->tpl_vars['tracker']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tracker']->value) {
$_smarty_tpl->tpl_vars['tracker']->do_else = false;
?>
                                    <li class="form-check">
                                        <input type="checkbox" class="form-check-input" name="trackers_to_export[<?php echo $_smarty_tpl->tpl_vars['tracker']->value['trackerId'];?>
]" value="<?php echo $_smarty_tpl->tpl_vars['tracker']->value['trackerId'];?>
"
                                               id="trackers_checkbox_<?php echo $_smarty_tpl->tpl_vars['tracker']->value['trackerId'];?>
"<?php if ((isset($_smarty_tpl->tpl_vars['trackers_to_export']->value[$_smarty_tpl->tpl_vars['tracker']->value['trackerId']]))) {?> checked="checked"<?php }?> />
                                        <label for="trackers_checkbox_<?php echo $_smarty_tpl->tpl_vars['tracker']->value['trackerId'];?>
" class="form-check-label">
                                            <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['tracker']->value['name'] ));?>

                                        </label>
                                    </li>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </ul>
                        <?php }?>
                    </div>
                    <div class="text-center submit input_submit_container">
                        <input type="submit" class="btn btn-primary" name="export" value="Export" />
                    </div>
                </fieldset>
            </fieldset>
        </form>
    <?php $_block_repeat=false;
echo smarty_block_tab(array('name'=>"Export"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tab', array('name'=>"Advanced"));
$_block_repeat=true;
echo smarty_block_tab(array('name'=>"Advanced"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <br>
        <fieldset>
            <h4>Repository status <small>status of the registered profile repositories</small></h4>
            <table class="table">
                <tr>
                    <th>Profile repository</th>
                    <th>Status</th>
                    <th>Last update</th>
                </tr>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sources']->value, 'entry', false, 'k');
$_smarty_tpl->tpl_vars['entry']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->do_else = false;
?>
                    <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['entry']->value['short'];?>
</td>
                        <td id="profile-status-<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
">
                            <?php if ($_smarty_tpl->tpl_vars['entry']->value['status'] == 'open') {?>
                                <?php echo smarty_function_icon(array('name'=>'status-open','iclass'=>'tips','ititle'=>"Status:Open"),$_smarty_tpl);?>

                                <?php echo smarty_function_icon(array('name'=>'status-pending','istyle'=>'display:none','iclass'=>'tips','ititle'=>"Status:Pending"),$_smarty_tpl);?>

                                <?php echo smarty_function_icon(array('name'=>'status-closed','istyle'=>'display:none','iclass'=>'tips','ititle'=>"Status:Closed"),$_smarty_tpl);?>

                            <?php } elseif ($_smarty_tpl->tpl_vars['entry']->value['status'] == 'closed') {?>
                                <?php echo smarty_function_icon(array('name'=>'status-open','istyle'=>'display:none','iclass'=>'tips','ititle'=>"Status:Open"),$_smarty_tpl);?>

                                <?php echo smarty_function_icon(array('name'=>'status-pending','istyle'=>'display:none','iclass'=>'tips','ititle'=>"Status:Pending"),$_smarty_tpl);?>

                                <?php echo smarty_function_icon(array('name'=>'status-closed','iclass'=>'tips','ititle'=>"Status:Closed"),$_smarty_tpl);?>

                            <?php } else { ?>
                                <?php echo smarty_function_icon(array('name'=>'status-open','istyle'=>'display:none','iclass'=>'tips','ititle'=>"Status:Open"),$_smarty_tpl);?>

                                <?php echo smarty_function_icon(array('name'=>'status-pending','iclass'=>'tips','ititle'=>"Status:Pending"),$_smarty_tpl);?>

                                <?php echo smarty_function_icon(array('name'=>'status-closed','istyle'=>'display:none','iclass'=>'tips','ititle'=>"Status:Closed"),$_smarty_tpl);?>

                            <?php }?>
                        </td>
                        <td><span id="profile-date-<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['entry']->value['formatted'];?>
</span> <a href='javascript:$.profilesRefreshCache("<?php echo $_smarty_tpl->tpl_vars['baseURI']->value;?>
", "<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
")' title="Refresh"><?php echo smarty_function_icon(array('name'=>"refresh",'iclass'=>'tips','ititle'=>":Refresh"),$_smarty_tpl);?>
</a></td>
                    </tr>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </table>
            <form action="tiki-admin.php?page=profiles" method="post">
                <?php echo smarty_function_ticket(array(),$_smarty_tpl);?>

                <?php echo smarty_function_preference(array('name'=>'profile_autoapprove_wikiplugins'),$_smarty_tpl);?>

                <?php echo smarty_function_preference(array('name'=>'profile_unapproved'),$_smarty_tpl);?>

                <?php echo smarty_function_preference(array('name'=>'profile_sources'),$_smarty_tpl);?>

                <?php echo smarty_function_preference(array('name'=>'profile_channels'),$_smarty_tpl);?>

                <div class="text-center submit">
                    <input type="submit" class="btn btn-primary" name="config" value="Save"/>
                </div>
            </form>
        </fieldset>
        <fieldset><legend>Profile tester</legend>
            <form action="tiki-admin.php?page=profiles" method="post">
                <?php echo smarty_function_ticket(array(),$_smarty_tpl);?>

                <input type="hidden" name="redirect" value=0>
                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>"warning",'title'=>"Warning"));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Warning"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    Paste or type wiki markup and YAML (with or without the {CODE} tags) into the text area below<br>
                    <em><strong>This will run the profile and make potentially unrecoverable changes in your database!</strong></em>
                <?php $_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Warning"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <div class="adminoptionbox">
                    <div class="adminoptionlabel form-group row">
                        <label for="profile_tester_name" class="col-form-label col-sm-4">Test profile name </label>
                        <div class="col-sm-4 mb-3">
                        <input class="form-control" type="text" name="profile_tester_name" id="profile_tester_name" value="<?php if ((isset($_smarty_tpl->tpl_vars['profile_tester_name']->value))) {
echo $_smarty_tpl->tpl_vars['profile_tester_name']->value;
} else { ?>Test<?php }?>" />
                        </div>
                        <div class="col-sm-4">
                            <select class="form-control" name="empty_cache" class="form-control">
                            <option value=""<?php if ((isset($_smarty_tpl->tpl_vars['empty_cache']->value)) && $_smarty_tpl->tpl_vars['empty_cache']->value == '') {?> checked="checked"<?php }?>>None</option>
                            <option value="all"<?php if ((isset($_smarty_tpl->tpl_vars['empty_cache']->value)) && $_smarty_tpl->tpl_vars['empty_cache']->value == 'all') {?> checked="checked"<?php }?>>All</option>
                            <option value="templates_c"<?php if ((isset($_smarty_tpl->tpl_vars['empty_cache']->value)) && $_smarty_tpl->tpl_vars['empty_cache']->value == 'templates_c') {?> checked="checked"<?php }?>>templates_c</option>
                            <option value="temp_cache"<?php if ((isset($_smarty_tpl->tpl_vars['empty_cache']->value)) && $_smarty_tpl->tpl_vars['empty_cache']->value == 'temp_cache') {?> checked="checked"<?php }?>>temp_cache</option>
                            <option value="temp_public"<?php if ((isset($_smarty_tpl->tpl_vars['empty_cache']->value)) && $_smarty_tpl->tpl_vars['empty_cache']->value == 'temp_public') {?> checked="checked"<?php }?>>temp_public</option>
                            <option value="modules_cache"<?php if ((isset($_smarty_tpl->tpl_vars['empty_cache']->value)) && $_smarty_tpl->tpl_vars['empty_cache']->value == 'modules_cache') {?> checked="checked"<?php }?>>modules_cache</option>
                            <option value="prefs"<?php if ((isset($_smarty_tpl->tpl_vars['empty_cache']->value)) && $_smarty_tpl->tpl_vars['empty_cache']->value == 'prefs') {?> checked="checked"<?php }?>>prefs</option>
                        </select><?php echo $_smarty_tpl->tpl_vars['empty_cache']->value;?>

                            </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12">
                            <textarea data-codemirror="true" data-syntax="yaml" id="profile_tester" name="profile_tester" class="form-control"><?php if ((isset($_smarty_tpl->tpl_vars['test_source']->value))) {
echo $_smarty_tpl->tpl_vars['test_source']->value;
}?></textarea>
                        </div>
                    </div>
                </div>
                <div align="center" style="padding:1em;">
                    <input type="submit" class="btn btn-primary" name="test" value="Test">
                </div>
            </form>
        </fieldset>
    <?php $_block_repeat=false;
echo smarty_block_tab(array('name'=>"Advanced"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<?php $_block_repeat=false;
echo smarty_block_tabset(array('name'=>'tabs_admin-profiles'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('jq', array());
$_block_repeat=true;
echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['oldSources']->value, 'k');
$_smarty_tpl->tpl_vars['k']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value) {
$_smarty_tpl->tpl_vars['k']->do_else = false;
?>
                $.profilesRefreshCache("<?php echo $_smarty_tpl->tpl_vars['baseURI']->value;?>
", "<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
");
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_block_repeat=false;
echo smarty_block_jq(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
