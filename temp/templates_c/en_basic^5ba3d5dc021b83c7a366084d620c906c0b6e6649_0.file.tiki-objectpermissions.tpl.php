<?php
/* Smarty version 3.1.48, created on 2023-09-29 11:20:31
  from '/home/teddieme/tedd1eme/templates/tiki-objectpermissions.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6516a4efc643c2_97008648',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5ba3d5dc021b83c7a366084d620c906c0b6e6649' => 
    array (
      0 => '/home/teddieme/tedd1eme/templates/tiki-objectpermissions.tpl',
      1 => 1689085248,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6516a4efc643c2_97008648 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/block.title.php','function'=>'smarty_block_title',),1=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/function.button.php','function'=>'smarty_function_button',),2=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/block.tabset.php','function'=>'smarty_block_tabset',),3=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/block.tab.php','function'=>'smarty_block_tab',),4=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/function.query.php','function'=>'smarty_function_query',),5=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/function.ticket.php','function'=>'smarty_function_ticket',),6=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/block.remarksbox.php','function'=>'smarty_block_remarksbox',),7=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/block.self_link.php','function'=>'smarty_block_self_link',),8=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/function.icon.php','function'=>'smarty_function_icon',),9=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/block.jq.php','function'=>'smarty_block_jq',),10=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/function.treetable.php','function'=>'smarty_function_treetable',),));
?>


<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('title', array('help'=>"Permissions"));
$_block_repeat=true;
echo smarty_block_title(array('help'=>"Permissions"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
if ($_smarty_tpl->tpl_vars['objectType']->value == 'global') {?>Assign global permissions<?php } else { ?>Assign permissions to <?php echo $_smarty_tpl->tpl_vars['objectType']->value;?>
: <?php echo $_smarty_tpl->tpl_vars['objectName']->value;
}
$_block_repeat=false;
echo smarty_block_title(array('help'=>"Permissions"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<div class="t_navbar mb-4">
    <?php if (!empty($_smarty_tpl->tpl_vars['referer']->value)) {
echo smarty_function_button(array('href'=>((string)$_smarty_tpl->tpl_vars['referer']->value),'_class'=>"btn btn-link",'_type'=>"link",'_icon_name'=>"back",'_text'=>"Back"),$_smarty_tpl);
}?>
    <?php if ($_smarty_tpl->tpl_vars['tiki_p_admin']->value == 'y') {?> 
        <?php echo smarty_function_button(array('href'=>"tiki-admingroups.php",'class'=>"btn btn-link",'_type'=>"link",'_icon_name'=>"group",'_text'=>"Admin Groups"),$_smarty_tpl);?>

    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['tiki_p_admin_users']->value == 'y') {?>
        <?php echo smarty_function_button(array('href'=>"tiki-adminusers.php",'class'=>"btn btn-link",'_type'=>"link",'_icon_name'=>"user",'_text'=>"Admin users"),$_smarty_tpl);?>

    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['tiki_p_admin_categories']->value == 'y') {?>
        <?php echo smarty_function_button(array('href'=>"tiki-admin_categories.php",'class'=>"btn btn-link",'_type'=>"link",'_icon_name'=>"admin_category",'_text'=>"Admin Categories"),$_smarty_tpl);?>

    <?php }?>
    <?php echo smarty_function_button(array('href'=>"tiki-list_object_permissions.php",'class'=>"btn btn-link",'_type'=>"link",'_icon_name'=>"permission",'_text'=>"Object Permissions List"),$_smarty_tpl);?>

</div>

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tabset', array('name'=>'tabs_objectpermissions'));
$_block_repeat=true;
echo smarty_block_tabset(array('name'=>'tabs_objectpermissions'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>

    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tab', array('name'=>"Assign Permissions"));
$_block_repeat=true;
echo smarty_block_tab(array('name'=>"Assign Permissions"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>

        <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_tabs'] != 'y') {?>
            <h2>Edit Permissions</h2>
        <?php }?>
        <form method="post" action="<?php echo $_SERVER['SCRIPT_NAME'];?>
?<?php echo smarty_function_query(array(),$_smarty_tpl);?>
">
            <?php echo smarty_function_ticket(array(),$_smarty_tpl);?>

            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "notices", null, null);?>
                <?php if (empty($_smarty_tpl->tpl_vars['filegals_manager']->value)) {?>
                    <?php if ($_smarty_tpl->tpl_vars['objectType']->value == 'global') {?>
                        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>"note",'title'=>"Note"));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>"note",'title'=>"Note"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                            Currently editing Global permissions.
                        <?php $_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>"note",'title'=>"Note"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                    <?php } elseif ($_smarty_tpl->tpl_vars['permissions_displayed']->value == 'direct') {?>
                        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>"warning",'title'=>"Warning"));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Warning"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                            <?php if ($_smarty_tpl->tpl_vars['objectType']->value != 'category') {?>
                                This object's direct permissions override any global permissions or category permissions affecting this object.
                            <?php } else { ?>
                                This category's direct permissions override any global permissions affecting objects in it.
                            <?php }?>
                            <br>
                            To edit global permissions <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('self_link', array('objectType'=>'global','objectId'=>'','objectName'=>'','permType'=>$_smarty_tpl->tpl_vars['permType']->value,'_class'=>'alert-link'));
$_block_repeat=true;
echo smarty_block_self_link(array('objectType'=>'global','objectId'=>'','objectName'=>'','permType'=>$_smarty_tpl->tpl_vars['permType']->value,'_class'=>'alert-link'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>click here<?php $_block_repeat=false;
echo smarty_block_self_link(array('objectType'=>'global','objectId'=>'','objectName'=>'','permType'=>$_smarty_tpl->tpl_vars['permType']->value,'_class'=>'alert-link'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>.
                        <?php $_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Warning"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                    <?php } elseif ($_smarty_tpl->tpl_vars['permissions_displayed']->value == 'category') {?>
                        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>"warning",'title'=>"Warning"));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Warning"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                            No permissions yet applied to this object but category permissions affect this object and are displayed below.<br>
                            <?php if ($_smarty_tpl->tpl_vars['tiki_p_admin']->value == 'y') {?>To edit category permissions <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('self_link', array('_script'=>'tiki-admin_categories.php','_class'=>'alert-link'));
$_block_repeat=true;
echo smarty_block_self_link(array('_script'=>'tiki-admin_categories.php','_class'=>'alert-link'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>click here<?php $_block_repeat=false;
echo smarty_block_self_link(array('_script'=>'tiki-admin_categories.php','_class'=>'alert-link'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>.<?php }?>
                        <?php $_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Warning"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                    <?php } elseif ($_smarty_tpl->tpl_vars['permissions_displayed']->value == 'parent') {?>
                        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>"warning",'title'=>"Warning"));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Warning"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                            No permissions yet applied to this object but parent object's permissions affect this object and are displayed below.<br>
                            <?php if ($_smarty_tpl->tpl_vars['tiki_p_admin']->value == 'y') {?>To edit parent object's permissions <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('self_link', array('objectType'=>$_smarty_tpl->tpl_vars['permissions_parent_type']->value,'objectId'=>$_smarty_tpl->tpl_vars['permissions_parent_id']->value,'objectName'=>$_smarty_tpl->tpl_vars['permissions_parent_name']->value,'_class'=>'alert-link'));
$_block_repeat=true;
echo smarty_block_self_link(array('objectType'=>$_smarty_tpl->tpl_vars['permissions_parent_type']->value,'objectId'=>$_smarty_tpl->tpl_vars['permissions_parent_id']->value,'objectName'=>$_smarty_tpl->tpl_vars['permissions_parent_name']->value,'_class'=>'alert-link'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>click here<?php $_block_repeat=false;
echo smarty_block_self_link(array('objectType'=>$_smarty_tpl->tpl_vars['permissions_parent_type']->value,'objectId'=>$_smarty_tpl->tpl_vars['permissions_parent_id']->value,'objectName'=>$_smarty_tpl->tpl_vars['permissions_parent_name']->value,'_class'=>'alert-link'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>.<?php }?>
                        <?php $_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Warning"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                    <?php } elseif ($_smarty_tpl->tpl_vars['permissions_displayed']->value == 'global') {?>
                        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>"warning",'title'=>"Warning",'highlight'=>"y"));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Warning",'highlight'=>"y"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                            No direct permissions yet applied to this object. Global permissions apply.<br>
                            <?php if ($_smarty_tpl->tpl_vars['tiki_p_admin']->value == 'y') {?>To edit global permissions <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('self_link', array('objectType'=>'global','permType'=>$_smarty_tpl->tpl_vars['permType']->value,'_class'=>'alert-link'));
$_block_repeat=true;
echo smarty_block_self_link(array('objectType'=>'global','permType'=>$_smarty_tpl->tpl_vars['permType']->value,'_class'=>'alert-link'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>click here<?php $_block_repeat=false;
echo smarty_block_self_link(array('objectType'=>'global','permType'=>$_smarty_tpl->tpl_vars['permType']->value,'_class'=>'alert-link'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>.<?php }?>
                            <br><br>
                            Currently inherited permissions displayed.
                        <?php $_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Warning",'highlight'=>"y"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                    <?php }?>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['objectType']->value == 'category' && $_smarty_tpl->tpl_vars['groupRole']->value) {?>
                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>"warning",'title'=>"Warning"));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Warning"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                This category's permissions are being managed by a Group Role.<br>
                <?php $_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Warning"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <?php }?>
            <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
            <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'notices');?>

            <br/>

            <label for="show_disabled_features2">Show permissions for disabled features</label>
            <input type="checkbox" name="show_disabled_features" id="show_disabled_features2" <?php if ((isset($_smarty_tpl->tpl_vars['show_disabled_features']->value)) && $_smarty_tpl->tpl_vars['show_disabled_features']->value == 'y') {?>checked="checked"<?php }?> onchange="this.form.submit();">

            <hr>
            <h2><?php if ($_smarty_tpl->tpl_vars['objectType']->value == 'global') {?>Assign global permissions<?php } elseif ($_smarty_tpl->tpl_vars['objectType']->value == 'category') {?>Assign permissions to this category<?php } else { ?>Assign permissions to this object<?php }?> <?php echo smarty_function_icon(array('name'=>"cog",'id'=>"perms_busy",'style'=>"vertical-align:top; display:none;"),$_smarty_tpl);?>
</h2>

            <div>
                <input type="hidden" name="referer" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['referer']->value ));?>
">
                <input type="hidden" name="objectName" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['objectName']->value ));?>
">
                <input type="hidden" name="objectType" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['objectType']->value ));?>
">
                <input type="hidden" name="objectId" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['objectId']->value ));?>
">
                <input type="hidden" name="permType" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['permType']->value ));?>
">

                <div class="input_submit_container" style="text-align: center">
                    <input
                        type="submit"
                        class="btn btn-primary btn-sm"
                        name="assign"
                        value="Assign"
                        onclick="confirmPopup('Modify permissions?')"
                    >
                    <?php if ($_smarty_tpl->tpl_vars['permissions_displayed']->value == 'direct' && $_smarty_tpl->tpl_vars['objectType']->value != 'global') {?>
                        <?php if ($_smarty_tpl->tpl_vars['objectType']->value == 'category') {?>
                            <?php $_smarty_tpl->_assignInScope('value', "Delete category permissions");?>
                            <?php $_smarty_tpl->_assignInScope('title', "This will remove all the settings here and permissions will be reset to inherit the global sitewide permissions.");?>
                            <?php $_smarty_tpl->_assignInScope('confirm', "Delete category permissions?");?>
                        <?php } else { ?>
                            <?php $_smarty_tpl->_assignInScope('value', "Delete object permissions");?>
                            <?php $_smarty_tpl->_assignInScope('title', "This will remove all the settings here and permissions will be reset to inherit any category permissions that are set, or the global sitewide permissions.");?>
                            <?php $_smarty_tpl->_assignInScope('confirm', "Delete object permissions?");?>
                        <?php }?>
                        <input
                            type="submit"
                            class="btn btn-danger btn-sm"
                            name="remove"
                            value="<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
"
                            class="tips"
                            title="Reset Perms:<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
"
                    <?php }?>
                    <input type="submit" class="btn btn-secondary btn-sm" name="copy" value="Copy" class="tips" title="Permissions Clipboard|Copy the permissions set here">
                    <?php if (!empty($_smarty_tpl->tpl_vars['perms_clipboard_source']->value)) {?><input type="submit" class="btn btn-primary btn-sm" name="paste" value="Paste" class="tips" title="Permissions Clipboard|Paste copied permissions from <em><?php echo $_smarty_tpl->tpl_vars['perms_clipboard_source']->value;?>
</em>" /><?php }?>
                </div>

                <?php if ($_smarty_tpl->tpl_vars['objectType']->value == 'category') {?>
                    <p>
                        <input type="checkbox" id="propagate_category" name="propagate_category" value="1">
                        <label for="propagate_category">Assign or remove permissions on <em>all</em> child categories</label>
                    </p>
                    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('jq', array());
$_block_repeat=true;
echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                        $("input[name='assign'],input[name='remove']").click(function(){
                            if ($("#propagate_category").prop("checked")) {
                                return confirm("Are you sure you want to affect all child categories?\nThere is no undo.");
                            }
                        });
                    <?php $_block_repeat=false;
echo smarty_block_jq(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <?php }?>

                <?php if (($_smarty_tpl->tpl_vars['objectType']->value == 'wiki' || $_smarty_tpl->tpl_vars['objectType']->value == 'wiki page') && !empty($_smarty_tpl->tpl_vars['inStructure']->value)) {?>
                    <input name="assignstructure" id="assignstructure" type="checkbox">
                    <label for="assignstructure">Assign or remove permissions on all pages of the sub-structure</label>
                    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('jq', array());
$_block_repeat=true;
echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                        $("input[name='assign'],input[name='remove']").click(function(){
                            if ($("#assignstructure").prop("checked")) {
                                return confirm("Are you sure you want to affect all pages in this sub-structure?\nThere is no undo.");
                            }
                        });
                    <?php $_block_repeat=false;
echo smarty_block_jq(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <?php }?>

            </div>
            <h3>Permissions</h3>

                <div class="permission_table table-responsive">
                    <?php echo smarty_function_treetable(array('_data'=>$_smarty_tpl->tpl_vars['perms']->value,'_checkbox'=>$_smarty_tpl->tpl_vars['permGroups']->value,'_checkboxTitles'=>$_smarty_tpl->tpl_vars['groupNames']->value,'_checkboxTooltips'=>array('_checkboxTitles','permDesc','permName'),'_checkboxTooltipFormat'=>'%0: %1 [%2]','_checkboxColumnIndex'=>$_smarty_tpl->tpl_vars['permGroupCols']->value,'_valueColumnIndex'=>"permName",'_columns'=>"\"label\"=\"Permission\"",'_groupColumn'=>'type','_openall'=>'y','_showSelected'=>'y','_columnsContainHtml'=>'y','class'=>'table objectperms'),$_smarty_tpl);?>

                </div>

            <?php if ((count($_smarty_tpl->tpl_vars['perms']->value)) == '0') {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>"warning",'title'=>"Warning"));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Warning"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>You must select at least one feature.<?php $_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Warning"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}?>

            <div class="input_submit_container" style="text-align: center">
                <input
                    type="submit"
                    class="btn btn-primary btn-sm"
                    name="assign"
                    value="Assign"
                    onclick="confirmPopup('Modify permissions?')"
                >
                <?php if ($_smarty_tpl->tpl_vars['permissions_displayed']->value == 'direct' && $_smarty_tpl->tpl_vars['objectType']->value != 'global') {?>
                    <input type="submit" class="btn btn-danger btn-sm" name="remove" value="<?php if ($_smarty_tpl->tpl_vars['objectType']->value == 'category') {?>Delete category permissions<?php } else { ?>Delete object permissions<?php }?>" class="tips" title="Reset Perms|This will remove all the settings here and permissions will be reset to inherit the global sitewide permissions.">
                <?php }?>
            </div>
        </form>

    <?php $_block_repeat=false;
echo smarty_block_tab(array('name'=>"Assign Permissions"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

    <?php if (!empty($_smarty_tpl->tpl_vars['permissions_added']->value) || !empty($_smarty_tpl->tpl_vars['permissions_removed']->value)) {?>
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tab', array('name'=>"View Differences"));
$_block_repeat=true;
echo smarty_block_tab(array('name'=>"View Differences"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <?php if (!empty($_smarty_tpl->tpl_vars['permissions_added']->value)) {?>
                <h3>Permissions added:</h3>
                <blockquote><?php echo $_smarty_tpl->tpl_vars['permissions_added']->value;?>
</blockquote>
            <?php }?>
            <?php if (!empty($_smarty_tpl->tpl_vars['permissions_removed']->value)) {?>
                <h3>Permissions removed:</h3>
                <blockquote><?php echo $_smarty_tpl->tpl_vars['permissions_removed']->value;?>
</blockquote>
            <?php }?>
        <?php $_block_repeat=false;
echo smarty_block_tab(array('name'=>"View Differences"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    <?php }?>

    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tab', array('name'=>"Select groups"));
$_block_repeat=true;
echo smarty_block_tab(array('name'=>"Select groups"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <form method="post" action="<?php echo $_SERVER['SCRIPT_NAME'];?>
?<?php echo smarty_function_query(array(),$_smarty_tpl);?>
">
        <div>
            <input type="hidden" name="referer" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['referer']->value ));?>
">
            <?php if ((isset($_smarty_tpl->tpl_vars['groupsFiltered']->value))) {?>
                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>"warning",'title'=>"Note"));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Note"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    Some of your groups have been automatically hidden.<br> Select the groups below to assign permissions for.
                    These groups are not the groups that have permissions on the object. It is only the groups you can see in the columns of the first tab.
                <?php $_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Note"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            <?php } else { ?>
                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>"note",'title'=>"Note"));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>"note",'title'=>"Note"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    These groups are not the groups that have permissions on the object. It is only the groups you can see in the columns of the first tab.
                <?php $_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>"note",'title'=>"Note"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['objectId']->value) {?>
            <div class="t_navbar">
                <input type="submit" class="btn btn-primary btn-sm" name="used_groups" value="Select only groups that have a perm with the object">
            </div>
            <?php }?>

            <h2>Groups</h2>

            <div>
            <?php echo smarty_function_treetable(array('_data'=>$_smarty_tpl->tpl_vars['groups']->value,'_checkbox'=>"group_filter",'_checkboxTitles'=>"Select all",'_checkboxColumnIndex'=>"in_group_filter",'_valueColumnIndex'=>"id",'_columns'=>'"groupName"="Group name","groupDesc"="Description"','_sortColumn'=>'parents','_collapseMaxSections'=>20,'_sortColumnDelimiter'=>',','_selectAllHiddenToo'=>'y'),$_smarty_tpl);?>

            </div>

            <div class="input_submit_container" style="text-align: center">
                <input type="submit" class="btn btn-primary btn-sm" name="group_select" value="Select">
            </div>
        </div>
        </form>
    <?php $_block_repeat=false;
echo smarty_block_tab(array('name'=>"Select groups"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tab', array('name'=>"Select features"));
$_block_repeat=true;
echo smarty_block_tab(array('name'=>"Select features"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <form method="post" action="<?php echo $_SERVER['SCRIPT_NAME'];?>
?<?php echo smarty_function_query(array(),$_smarty_tpl);?>
">
        <div>
            <input type="hidden" name="referer" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['referer']->value ));?>
">
            <?php if ((isset($_smarty_tpl->tpl_vars['featuresFiltered']->value))) {?>
                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>"warning",'title'=>"Warning"));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Warning"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    Some of your features have been automatically hidden.<br> Select the features below to assign permissions for.
                <?php $_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Warning"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            <?php }?>

            <label for="show_disabled_features2">Show permissions for disabled features</label>
            <input type="checkbox" name="show_disabled_features" id="show_disabled_features2" <?php if ((isset($_smarty_tpl->tpl_vars['show_disabled_features']->value)) && $_smarty_tpl->tpl_vars['show_disabled_features']->value == 'y') {?>checked="checked"<?php }?> onchange="this.form.submit();">

            <h2>Features</h2>

            <div>
            <?php echo smarty_function_treetable(array('_data'=>$_smarty_tpl->tpl_vars['features']->value,'_checkbox'=>"feature_filter",'_checkboxTitles'=>"Select all",'_checkboxColumnIndex'=>"in_feature_filter",'_valueColumnIndex'=>"featureName",'_columns'=>'"featureName"="Feature name"','_sortColumn'=>"featureName",'_sortColumnDelimiter'=>'*','_collapseMaxSections'=>20,'_listFilter'=>'n'),$_smarty_tpl);?>

            </div>

            <div class="input_submit_container" style="text-align: center">
                <input type="submit" class="btn btn-primary btn-sm" name="feature_select" value="Select">
            </div>
        </div>
        </form>
    <?php $_block_repeat=false;
echo smarty_block_tab(array('name'=>"Select features"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

    

    <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_quick_object_perms'] == 'y') {?>
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tab', array('name'=>"Quick Permissions"));
$_block_repeat=true;
echo smarty_block_tab(array('name'=>"Quick Permissions"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <form name="allperms" method="post" action="<?php echo $_SERVER['SCRIPT_NAME'];?>
?<?php echo smarty_function_query(array(),$_smarty_tpl);?>
">
        <div>
        <input type="hidden" name="quick_perms" value="true">


        <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_tabs'] != 'y') {?>
            <h2>Quick Permissions</h2>
        <?php }?>

        <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'notices');?>


        <h2>Assign Quick-Permissions to this object</h2>

        <table class="table">
            <tr>
                <th>Groups</th>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['quickperms']->value, 'permgroup');
$_smarty_tpl->tpl_vars['permgroup']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['permgroup']->value) {
$_smarty_tpl->tpl_vars['permgroup']->do_else = false;
?>
                <th><?php echo $_smarty_tpl->tpl_vars['permgroup']->value['name'];?>
</th>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <th class="tips" title="|Individual permissions are currently assigned (See tab Assign Permissions)">Advanced</th>
            </tr>

            <?php
$__section_grp_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['groups']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_grp_0_total = $__section_grp_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_grp'] = new Smarty_Variable(array());
if ($__section_grp_0_total !== 0) {
for ($__section_grp_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_grp']->value['index'] = 0; $__section_grp_0_iteration <= $__section_grp_0_total; $__section_grp_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_grp']->value['index']++){
?>
                <?php if ($_smarty_tpl->tpl_vars['groups']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_grp']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_grp']->value['index'] : null)]['groupName'] != 'Admins') {?>
                    <tr>
                        <td>
                        <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['groups']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_grp']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_grp']->value['index'] : null)]['groupName'] ));?>

                        </td>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['quickperms']->value, 'permgroup');
$_smarty_tpl->tpl_vars['permgroup']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['permgroup']->value) {
$_smarty_tpl->tpl_vars['permgroup']->do_else = false;
?>
                        <td>
                            <input type="radio" name="perm_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['groups']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_grp']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_grp']->value['index'] : null)]['groupName'],'url' ));?>
" value="<?php echo $_smarty_tpl->tpl_vars['permgroup']->value['name'];?>
" <?php if ($_smarty_tpl->tpl_vars['groups']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_grp']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_grp']->value['index'] : null)]['groupSumm'] == $_smarty_tpl->tpl_vars['permgroup']->value['name']) {?>checked<?php }?>>
                        </td>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        <td>
                            <input type="radio" name="perm_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['groups']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_grp']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_grp']->value['index'] : null)]['groupName'],'url' ));?>
" value="userdefined" <?php if ($_smarty_tpl->tpl_vars['groups']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_grp']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_grp']->value['index'] : null)]['groupSumm'] == 'userdefined') {?>checked<?php }?> onclick="return false;">
                        </td>
                    </tr>
                <?php }?>
            <?php
}
}
?>
        </table>

        <?php echo smarty_function_ticket(array(),$_smarty_tpl);?>

        <input type="hidden" name="referer" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['referer']->value ));?>
">
        <input type="hidden" name="objectName" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['objectName']->value ));?>
">
        <input type="hidden" name="objectType" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['objectType']->value ));?>
">
        <input type="hidden" name="objectId" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['objectId']->value ));?>
">
        <input type="hidden" name="permType" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['permType']->value ));?>
">
        <input type="hidden" name="show_disabled_features" value="<?php echo $_smarty_tpl->tpl_vars['show_disabled_features']->value;?>
">
        <label for="show_disabled_features3">Set permissions for disabled features</label>
        <input type="checkbox" name="show_disabled_features" id="show_disabled_features3" <?php if ((isset($_smarty_tpl->tpl_vars['show_disabled_features']->value)) && $_smarty_tpl->tpl_vars['show_disabled_features']->value == 'y') {?>checked="checked"<?php }?>>
        <div class="input_submit_container" style="text-align: center">
            <input type="submit" class="btn btn-primary btn-sm" name="assign" value="Assign">
        </div>

        <?php if (empty($_smarty_tpl->tpl_vars['filegals_manager']->value)) {?>
            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>"note",'icon'=>"bricks",'title'=>"Experimental"));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>"note",'icon'=>"bricks",'title'=>"Experimental"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <em>Quick permissions</em> should be considered as an experimental feature.<br/>
                Although permissions will be set as expected using this form, it doesn't necessarily show the current permissions reliably.<br><br>
                There is also no undo - <strong>Use with care!</strong>
            <?php $_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>"note",'icon'=>"bricks",'title'=>"Experimental"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <?php }?>
        </div>
    </form>
    <?php $_block_repeat=false;
echo smarty_block_tab(array('name'=>"Quick Permissions"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    <?php }?>

    

<?php $_block_repeat=false;
echo smarty_block_tabset(array('name'=>'tabs_objectpermissions'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
