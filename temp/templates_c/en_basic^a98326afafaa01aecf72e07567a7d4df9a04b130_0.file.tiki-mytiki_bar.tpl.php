<?php
/* Smarty version 3.1.48, created on 2023-09-29 11:17:10
  from '/home/teddieme/tedd1eme/templates/tiki-mytiki_bar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6516a4265c0c24_62624216',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a98326afafaa01aecf72e07567a7d4df9a04b130' => 
    array (
      0 => '/home/teddieme/tedd1eme/templates/tiki-mytiki_bar.tpl',
      1 => 1689085248,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6516a4265c0c24_62624216 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/function.button.php','function'=>'smarty_function_button',),1=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/function.icon.php','function'=>'smarty_function_icon',),));
?>
<div class="t_navbar btn-block mb-4">

    <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_userPreferences'] == 'y') {?>
        <?php echo smarty_function_button(array('_icon_name'=>"home",'_type'=>"link",'_text'=>"My Account",'href'=>"tiki-my_tiki.php"),$_smarty_tpl);?>

    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_userPreferences'] == 'y' || $_smarty_tpl->tpl_vars['prefs']->value['change_password'] == 'y') {?>
        <?php echo smarty_function_button(array('_icon_name'=>"cog",'_type'=>"link",'_text'=>"Preferences",'href'=>"tiki-user_preferences.php"),$_smarty_tpl);?>

    <?php }?>

    <?php echo smarty_function_button(array('_icon_name'=>"information",'_type'=>"link",'_text'=>"My Info",'href'=>"tiki-user_information.php"),$_smarty_tpl);?>


    <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_user_watches'] == 'y') {?>
        <?php echo smarty_function_button(array('_icon_name'=>"watch",'_type'=>"link",'_text'=>"My Watches",'href'=>"tiki-user_watches.php"),$_smarty_tpl);?>

    <?php }?>

    <div class="btn-group">
        <button type="button" class="btn btn-link dropdown-toggle" data-toggle="dropdown">
                More
        </button>
        <div class="dropdown-menu" role="menu">
            <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_messages'] == 'y' && $_smarty_tpl->tpl_vars['tiki_p_messages']->value == 'y') {?>
                <?php if ($_smarty_tpl->tpl_vars['unread']->value) {?>
                    <a class="dropdown-item" href="messu-mailbox.php"> <?php echo smarty_function_icon(array('name'=>"admin_messages"),$_smarty_tpl);?>
 Messages ($unread)</a>
                <?php } else { ?>
                    <a class="dropdown-item" href="messu-mailbox.php"> <?php echo smarty_function_icon(array('name'=>"admin_messages"),$_smarty_tpl);?>
 Messages</a>
                <?php }?>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_tasks'] == 'y' && $_smarty_tpl->tpl_vars['tiki_p_tasks']->value == 'y') {?>
                <a class="dropdown-item" href="tiki-user_tasks.php"> <?php echo smarty_function_icon(array('name'=>"tasks"),$_smarty_tpl);?>
 Tasks</a>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_user_bookmarks'] == 'y' && $_smarty_tpl->tpl_vars['tiki_p_create_bookmarks']->value == 'y') {?>
                <a class="dropdown-item" href="tiki-user_bookmarks.php"> <?php echo smarty_function_icon(array('name'=>"book"),$_smarty_tpl);?>
 Bookmarks</a>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['prefs']->value['user_assigned_modules'] == 'y' && $_smarty_tpl->tpl_vars['tiki_p_configure_modules']->value == 'y') {?>
                <a class="dropdown-item" href="tiki-user_assigned_modules.php"> <?php echo smarty_function_icon(array('name'=>"admin_module"),$_smarty_tpl);?>
 Modules</a>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_webmail'] == 'y' && $_smarty_tpl->tpl_vars['tiki_p_use_webmail']->value == 'y') {?>
                <a class="dropdown-item" href="tiki-webmail.php"> <?php echo smarty_function_icon(array('name'=>"admin_webmail"),$_smarty_tpl);?>
 Webmail</a>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_contacts'] == 'y') {?>
                <a class="dropdown-item" href="tiki-user_contacts_prefs.php"> <?php echo smarty_function_icon(array('name'=>"user"),$_smarty_tpl);?>
 Contacts Preferences</a>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_notepad'] == 'y' && $_smarty_tpl->tpl_vars['tiki_p_notepad']->value == 'y') {?>
                <a class="dropdown-item" href="tiki-notepad_list.php"> <?php echo smarty_function_icon(array('name'=>"notepad"),$_smarty_tpl);?>
 Notepad</a>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_userfiles'] == 'y' && $_smarty_tpl->tpl_vars['tiki_p_userfiles']->value == 'y') {?>
                <a class="dropdown-item" href="tiki-userfiles.php"> <?php echo smarty_function_icon(array('name'=>"files"),$_smarty_tpl);?>
 MyFiles</a>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_minical'] == 'y' && $_smarty_tpl->tpl_vars['tiki_p_minical']->value == 'y') {?>
                <a class="dropdown-item" href="tiki-minical.php"> <?php echo smarty_function_icon(array('name'=>"calendar"),$_smarty_tpl);?>
 Mini Calendar</a>
            <?php }?>


            <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_actionlog'] == 'y' && !empty($_smarty_tpl->tpl_vars['user']->value) && ($_smarty_tpl->tpl_vars['tiki_p_view_actionlog']->value == 'y' || $_smarty_tpl->tpl_vars['tiki_p_view_actionlog_owngroups']->value == 'y')) {?>
                <a class="dropdown-item" href="tiki-admin_actionlog.php?selectedUsers[]=$user"> <?php echo smarty_function_icon(array('name'=>"calendar"),$_smarty_tpl);?>
 Action Log</a>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_socialnetworks'] == 'y' && !empty($_smarty_tpl->tpl_vars['user']->value) && ($_smarty_tpl->tpl_vars['tiki_p_socialnetworks']->value == 'y' || $_smarty_tpl->tpl_vars['tiki_p_admin_socialnetworks']->value == 'y')) {?>
                <a class="dropdown-item" href="tiki-socialnetworks.php"> <?php echo smarty_function_icon(array('name'=>"admin_socialnetworks"),$_smarty_tpl);?>
 Social networks</a>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_mailin'] == 'y' && !empty($_smarty_tpl->tpl_vars['user']->value) && ($_smarty_tpl->tpl_vars['tiki_p_send_mailin']->value == 'y' || $_smarty_tpl->tpl_vars['tiki_p_admin_mailin']->value == 'y')) {?>
                <a class="dropdown-item" href="tiki-user_mailin.php"> <?php echo smarty_function_icon(array('name'=>"reply"),$_smarty_tpl);?>
 Mail-in</a>
            <?php }?>
        </div>
    </div>
</div>
<?php }
}
