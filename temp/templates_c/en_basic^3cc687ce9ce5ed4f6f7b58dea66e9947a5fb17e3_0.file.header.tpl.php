<?php
/* Smarty version 3.1.48, created on 2023-09-29 11:16:29
  from '/home/teddieme/tedd1eme/templates/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6516a3fd58fb76_55823698',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3cc687ce9ce5ed4f6f7b58dea66e9947a5fb17e3' => 
    array (
      0 => '/home/teddieme/tedd1eme/templates/header.tpl',
      1 => 1689085248,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:canonical.tpl' => 1,
  ),
),false)) {
function content_6516a3fd58fb76_55823698 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/modifier.truncate.php','function'=>'smarty_modifier_truncate',),1=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/modifier.tr_if.php','function'=>'smarty_modifier_tr_if',),2=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/function.breadcrumbs.php','function'=>'smarty_function_breadcrumbs',),3=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/modifier.username.php','function'=>'smarty_modifier_username',),4=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/modifier.stringfix.php','function'=>'smarty_modifier_stringfix',),));
?>

<?php if ($_smarty_tpl->tpl_vars['base_uri']->value && ($_smarty_tpl->tpl_vars['dir_level']->value > 0 || $_smarty_tpl->tpl_vars['prefs']->value['feature_html_head_base_tag'] == 'y')) {?>
    <base href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['base_uri']->value ));?>
">
<?php }?>
<!--Latest IE Compatibility-->
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="generator" content="Tiki Wiki CMS Groupware - https://tiki.org">

<meta content="<?php echo $_smarty_tpl->tpl_vars['base_url_canonical']->value;?>
" name="twitter:domain"> 

<?php $_smarty_tpl->_subTemplateRender("file:canonical.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php if (!empty($_smarty_tpl->tpl_vars['forum_info']->value['name'])&$_smarty_tpl->tpl_vars['prefs']->value['metatag_threadtitle'] == 'y') {?>
    <meta name="keywords" content="Forum <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['forum_info']->value['name'] ));?>
 <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['thread_info']->value['title'] ));?>
 <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_freetags'] == 'y') {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['freetags']->value['data'], 'taginfo');
$_smarty_tpl->tpl_vars['taginfo']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['taginfo']->value) {
$_smarty_tpl->tpl_vars['taginfo']->do_else = false;
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['taginfo']->value['tag'] ));?>
 <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?>">
<?php } elseif ($_smarty_tpl->tpl_vars['prefs']->value['metatag_keywords'] != '' || !empty($_smarty_tpl->tpl_vars['metatag_local_keywords']->value)) {?>
    <meta name="keywords" content="<?php if (!empty($_smarty_tpl->tpl_vars['prefs']->value['metatag_keywords_translated'])) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['prefs']->value['metatag_keywords_translated'] ));
} else {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['prefs']->value['metatag_keywords'] ));
}?> <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_freetags'] == 'y') {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['freetags']->value['data'], 'taginfo');
$_smarty_tpl->tpl_vars['taginfo']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['taginfo']->value) {
$_smarty_tpl->tpl_vars['taginfo']->do_else = false;
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['taginfo']->value['tag'] ));?>
 <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?> <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['metatag_local_keywords']->value ));?>
">
<?php }
if ($_smarty_tpl->tpl_vars['prefs']->value['metatag_author'] != '') {?>
    <meta name="author" content="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['prefs']->value['metatag_author'] ));?>
">
<?php }?>

<?php if ((isset($_smarty_tpl->tpl_vars['section']->value)) && $_smarty_tpl->tpl_vars['section']->value == "blogs") {?>
    <?php if (!empty($_smarty_tpl->tpl_vars['post_info']->value['parsed_excerpt'])) {?>
        <?php $_smarty_tpl->_assignInScope('metatag_description', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( smarty_modifier_truncate(strip_tags($_smarty_tpl->tpl_vars['post_info']->value['parsed_excerpt']),200) )));?>
    <?php } elseif (!empty(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['post_info']->value['parsed_data']))) {?>
        <?php $_smarty_tpl->_assignInScope('metatag_description', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( smarty_modifier_truncate(strip_tags($_smarty_tpl->tpl_vars['post_info']->value['parsed_data']),200) )));?>
    <?php } else { ?>
        <?php $_smarty_tpl->_assignInScope('metatag_description', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( (($_smarty_tpl->tpl_vars['post_info']->value['title']).(' - ')).($_smarty_tpl->tpl_vars['blog_data']->value['title']) )));?>
    <?php }?>

<?php } elseif ((isset($_smarty_tpl->tpl_vars['section']->value)) && $_smarty_tpl->tpl_vars['section']->value == "cms") {?>
    <?php if (!empty($_smarty_tpl->tpl_vars['heading']->value)) {?>
        <?php $_smarty_tpl->_assignInScope('metatag_description', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( smarty_modifier_truncate(strip_tags($_smarty_tpl->tpl_vars['parsed_heading']->value),200) )));?>
    <?php } elseif (!empty($_smarty_tpl->tpl_vars['body']->value)) {?>
        <?php $_smarty_tpl->_assignInScope('metatag_description', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( smarty_modifier_truncate(strip_tags($_smarty_tpl->tpl_vars['parsed_body']->value),200) )));?>
    <?php }?>

<?php } elseif ((isset($_smarty_tpl->tpl_vars['section']->value)) && $_smarty_tpl->tpl_vars['section']->value == "file_galleries") {?>
    <?php if (!empty($_smarty_tpl->tpl_vars['gal_info']->value['description'])) {?>
        <?php $_smarty_tpl->_assignInScope('metatag_description', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( smarty_modifier_truncate(strip_tags($_smarty_tpl->tpl_vars['gal_info']->value['description']),200) )));?>
    <?php }?>

<?php } elseif ($_smarty_tpl->tpl_vars['prefs']->value['metatag_pagedesc'] == 'y' && !empty($_smarty_tpl->tpl_vars['description']->value)) {?>
    <?php $_smarty_tpl->_assignInScope('metatag_description', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['description']->value )));
} elseif (!empty($_smarty_tpl->tpl_vars['prefs']->value['metatag_description_translated'])) {?>
    <?php $_smarty_tpl->_assignInScope('metatag_description', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['prefs']->value['metatag_description_translated'] )));
} elseif (!empty($_smarty_tpl->tpl_vars['prefs']->value['metatag_description'])) {?>
    <?php $_smarty_tpl->_assignInScope('metatag_description', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['prefs']->value['metatag_description'] )));
}
if (!empty($_smarty_tpl->tpl_vars['metatag_description']->value) && !empty(trim($_smarty_tpl->tpl_vars['metatag_description']->value))) {?>
    <meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['metatag_description']->value;?>
">
    <meta content="<?php echo $_smarty_tpl->tpl_vars['metatag_description']->value;?>
" property="og:description">
    <meta name="twitter:description" content="<?php echo $_smarty_tpl->tpl_vars['metatag_description']->value;?>
">
<?php } else { ?>
    <meta name="description" content="<?php if (!empty($_smarty_tpl->tpl_vars['prefs']->value['browsertitle_translated'])) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( smarty_modifier_tr_if($_smarty_tpl->tpl_vars['prefs']->value['browsertitle_translated']) ));
} else {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( smarty_modifier_tr_if($_smarty_tpl->tpl_vars['prefs']->value['browsertitle']) ));
}
if ((isset($_smarty_tpl->tpl_vars['title']->value))) {?> <?php echo $_smarty_tpl->tpl_vars['prefs']->value['site_nav_seper'];?>
 <?php echo $_smarty_tpl->tpl_vars['title']->value;
}?>">
    <meta content="<?php if (!empty($_smarty_tpl->tpl_vars['prefs']->value['browsertitle_translated'])) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( smarty_modifier_tr_if($_smarty_tpl->tpl_vars['prefs']->value['browsertitle_translated']) ));
} else {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( smarty_modifier_tr_if($_smarty_tpl->tpl_vars['prefs']->value['browsertitle']) ));
}
if ((isset($_smarty_tpl->tpl_vars['title']->value))) {?> <?php echo $_smarty_tpl->tpl_vars['prefs']->value['site_nav_seper'];?>
 <?php echo $_smarty_tpl->tpl_vars['title']->value;
}?>" property="og:description">
    <meta name="twitter:description" content="<?php if (!empty($_smarty_tpl->tpl_vars['prefs']->value['browsertitle_translated'])) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( smarty_modifier_tr_if($_smarty_tpl->tpl_vars['prefs']->value['browsertitle_translated']) ));
} else {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( smarty_modifier_tr_if($_smarty_tpl->tpl_vars['prefs']->value['browsertitle']) ));
}
if ((isset($_smarty_tpl->tpl_vars['title']->value))) {?> <?php echo $_smarty_tpl->tpl_vars['prefs']->value['site_nav_seper'];?>
 <?php echo $_smarty_tpl->tpl_vars['title']->value;
}?>">
<?php }
if ($_smarty_tpl->tpl_vars['prefs']->value['metatag_geoposition'] != '') {?>
    <meta name="geo.position" content="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['prefs']->value['metatag_geoposition'] ));?>
">
<?php }
if ($_smarty_tpl->tpl_vars['prefs']->value['metatag_georegion'] != '') {?>
    <meta name="geo.region" content="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['prefs']->value['metatag_georegion'] ));?>
">
<?php }
if ($_smarty_tpl->tpl_vars['prefs']->value['metatag_geoplacename'] != '') {?>
    <meta name="geo.placename" content="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['prefs']->value['metatag_geoplacename'] ));?>
">
<?php }
if (((isset($_smarty_tpl->tpl_vars['prefs']->value['metatag_robots'])) && $_smarty_tpl->tpl_vars['prefs']->value['metatag_robots'] != '') && (!(isset($_smarty_tpl->tpl_vars['metatag_robots']->value)) || $_smarty_tpl->tpl_vars['metatag_robots']->value == '')) {?>
    <meta name="robots" content="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['prefs']->value['metatag_robots'] ));?>
">
<?php }
if ((!(isset($_smarty_tpl->tpl_vars['prefs']->value['metatag_robots'])) || $_smarty_tpl->tpl_vars['prefs']->value['metatag_robots'] == '') && ((isset($_smarty_tpl->tpl_vars['metatag_robots']->value)) && $_smarty_tpl->tpl_vars['metatag_robots']->value != '')) {?>
    <meta name="robots" content="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['metatag_robots']->value ));?>
">
<?php }
if (((isset($_smarty_tpl->tpl_vars['prefs']->value['metatag_robots'])) && $_smarty_tpl->tpl_vars['prefs']->value['metatag_robots'] != '') && ((isset($_smarty_tpl->tpl_vars['metatag_robots']->value)) && $_smarty_tpl->tpl_vars['metatag_robots']->value != '')) {?>
    <meta name="robots" content="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['prefs']->value['metatag_robots'] ));?>
, <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['metatag_robots']->value ));?>
">
<?php }
if ($_smarty_tpl->tpl_vars['prefs']->value['metatag_revisitafter'] != '') {?>
    <meta name="revisit-after" content="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['prefs']->value['metatag_revisitafter'] ));?>
">
<?php }?>

<meta content="<?php if (!empty($_smarty_tpl->tpl_vars['prefs']->value['socialnetworks_facebook_site_name'])) {
echo $_smarty_tpl->tpl_vars['prefs']->value['socialnetworks_facebook_site_name'];
} elseif (!empty($_smarty_tpl->tpl_vars['prefs']->value['browsertitle_translated'])) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( smarty_modifier_tr_if($_smarty_tpl->tpl_vars['prefs']->value['browsertitle_translated']) ));
} else {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( smarty_modifier_tr_if($_smarty_tpl->tpl_vars['prefs']->value['browsertitle']) ));
}?>" property="og:site_name">
<meta content="<?php if (!empty($_smarty_tpl->tpl_vars['prefs']->value['socialnetworks_twitter_site'])) {
echo $_smarty_tpl->tpl_vars['prefs']->value['socialnetworks_twitter_site'];
} elseif (!empty($_smarty_tpl->tpl_vars['prefs']->value['browsertitle_translated'])) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( smarty_modifier_tr_if($_smarty_tpl->tpl_vars['prefs']->value['browsertitle_translated']) ));
} else {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( smarty_modifier_tr_if($_smarty_tpl->tpl_vars['prefs']->value['browsertitle']) ));
}?>" name="twitter:site">

<?php if (!empty($_smarty_tpl->tpl_vars['prefs']->value['socialnetworks_facebook_application_id'])) {?><meta content="<?php echo $_smarty_tpl->tpl_vars['prefs']->value['socialnetworks_facebook_application_id'];?>
" property="fb:app_id"><?php }?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', 'header_title', null);
if (!empty($_smarty_tpl->tpl_vars['sswindowtitle']->value)) {
if ($_smarty_tpl->tpl_vars['sswindowtitle']->value == 'none') {?>&nbsp;<?php } else {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['sswindowtitle']->value ));
}
} else {
if ($_smarty_tpl->tpl_vars['prefs']->value['site_title_location'] == 'before') {
if (!empty($_smarty_tpl->tpl_vars['prefs']->value['browsertitle_translated'])) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( smarty_modifier_tr_if($_smarty_tpl->tpl_vars['prefs']->value['browsertitle_translated']) ));
} else {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( smarty_modifier_tr_if($_smarty_tpl->tpl_vars['prefs']->value['browsertitle']) ));
}?> <?php echo $_smarty_tpl->tpl_vars['prefs']->value['site_nav_seper'];?>
 <?php }
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "page_description_title", null);
if (($_smarty_tpl->tpl_vars['prefs']->value['feature_breadcrumbs'] == 'y' || $_smarty_tpl->tpl_vars['prefs']->value['site_title_breadcrumb'] == "desc") && (isset($_smarty_tpl->tpl_vars['trail']->value))) {
echo smarty_function_breadcrumbs(array('type'=>$_smarty_tpl->tpl_vars['prefs']->value['site_title_breadcrumb'],'loc'=>"head",'crumbs'=>$_smarty_tpl->tpl_vars['trail']->value),$_smarty_tpl);
}
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if ((isset($_smarty_tpl->tpl_vars['structure']->value)) && $_smarty_tpl->tpl_vars['structure']->value == 'y') {
$__section_ix_6_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['structure_path']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_ix_6_total = $__section_ix_6_loop;
$_smarty_tpl->tpl_vars['__smarty_section_ix'] = new Smarty_Variable(array());
if ($__section_ix_6_total !== 0) {
for ($__section_ix_6_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] = 0; $__section_ix_6_iteration <= $__section_ix_6_total; $__section_ix_6_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']++){
ob_start();
echo $_smarty_tpl->tpl_vars['structure_path']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['page_alias'];
$_prefixVariable2 = ob_get_clean();
$_smarty_tpl->_assignInScope('aliasname', $_prefixVariable2);
}
}
}
if ($_smarty_tpl->tpl_vars['prefs']->value['site_title_location'] == 'only') {
if (!empty($_smarty_tpl->tpl_vars['prefs']->value['browsertitle_translated'])) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( smarty_modifier_tr_if($_smarty_tpl->tpl_vars['prefs']->value['browsertitle_translated']) ));
} else {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( smarty_modifier_tr_if($_smarty_tpl->tpl_vars['prefs']->value['browsertitle']) ));
}
} else {
if (!empty($_smarty_tpl->tpl_vars['page_description_title']->value)) {
echo $_smarty_tpl->tpl_vars['page_description_title']->value;
} else {
if (!empty($_smarty_tpl->tpl_vars['tracker_item_main_value']->value)) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( smarty_modifier_truncate($_smarty_tpl->tpl_vars['tracker_item_main_value']->value,255) ));
} elseif (!empty($_smarty_tpl->tpl_vars['title']->value) && !is_array($_smarty_tpl->tpl_vars['title']->value)) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['title']->value ));
} elseif (!empty($_smarty_tpl->tpl_vars['aliasname']->value)) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['aliasname']->value ));
} elseif (!empty($_smarty_tpl->tpl_vars['arttitle']->value)) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['arttitle']->value ));
} elseif (!empty($_smarty_tpl->tpl_vars['thread_info']->value['title'])) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['thread_info']->value['title'] ));
} elseif (!empty($_smarty_tpl->tpl_vars['forum_info']->value['name'])) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['forum_info']->value['name'] ));
} elseif (!empty($_smarty_tpl->tpl_vars['categ_info']->value['name'])) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['categ_info']->value['name'] ));
} elseif (!empty($_smarty_tpl->tpl_vars['userinfo']->value['login'])) {
echo smarty_modifier_username($_smarty_tpl->tpl_vars['userinfo']->value['login']);
} elseif (!empty($_smarty_tpl->tpl_vars['tracker_info']->value['pagetitle'])) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['tracker_info']->value['pagetitle'] ));
} elseif (!empty($_smarty_tpl->tpl_vars['tracker_info']->value['name'])) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['tracker_info']->value['name'] ));
} elseif (!empty($_smarty_tpl->tpl_vars['description']->value)) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['description']->value ));
} elseif (!empty($_smarty_tpl->tpl_vars['page']->value)) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['page']->value ));
} elseif (!empty($_smarty_tpl->tpl_vars['headtitle']->value)) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( smarty_modifier_stringfix($_smarty_tpl->tpl_vars['headtitle']->value,"&nbsp;") ));
}
}
}
if ($_smarty_tpl->tpl_vars['prefs']->value['site_title_location'] == 'after') {?> <?php echo $_smarty_tpl->tpl_vars['prefs']->value['site_nav_seper'];?>
 <?php if (!empty($_smarty_tpl->tpl_vars['prefs']->value['browsertitle_translated'])) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( smarty_modifier_tr_if($_smarty_tpl->tpl_vars['prefs']->value['browsertitle_translated']) ));
} else {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( smarty_modifier_tr_if($_smarty_tpl->tpl_vars['prefs']->value['browsertitle']) ));
}
}
}
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<title><?php echo $_smarty_tpl->tpl_vars['header_title']->value;?>
</title>


<meta property="og:title" content="<?php echo $_smarty_tpl->tpl_vars['header_title']->value;?>
">

<meta name="twitter:title" content="<?php echo $_smarty_tpl->tpl_vars['header_title']->value;?>
">

<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_canonical_url'] == 'y' && (isset($_smarty_tpl->tpl_vars['mid']->value))) {?>
    <?php if ($_smarty_tpl->tpl_vars['mid']->value == 'tiki-view_blog.tpl' || $_smarty_tpl->tpl_vars['mid']->value == 'tiki-view_blog_post.tpl' || $_smarty_tpl->tpl_vars['mid']->value == 'tiki-read_article.tpl') {?>
        <meta content="article" property="og:type">
    <?php } else { ?>
        <meta content="website" property="og:type">
    <?php }
}?>


<meta name="twitter:card" content="summary">


<?php if (!empty($_smarty_tpl->tpl_vars['header_featured_images']->value)) {?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['header_featured_images']->value, 'header_featured_image');
$_smarty_tpl->tpl_vars['header_featured_image']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['header_featured_image']->value) {
$_smarty_tpl->tpl_vars['header_featured_image']->do_else = false;
?>
        <meta content="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['header_featured_image']->value ));?>
" property="og:image">
        <meta content="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['header_featured_image']->value ));?>
" property="twitter:image">
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
} elseif ($_smarty_tpl->tpl_vars['prefs']->value['feature_canonical_url'] == 'y' && (isset($_smarty_tpl->tpl_vars['mid']->value))) {?>
    <?php if ($_smarty_tpl->tpl_vars['mid']->value == 'tiki-view_blog.tpl') {?>
    <?php } elseif ($_smarty_tpl->tpl_vars['mid']->value == 'tiki-view_blog_post.tpl') {?>
    
    
    <?php } elseif (($_smarty_tpl->tpl_vars['mid']->value == 'tiki-read_article.tpl') && ($_smarty_tpl->tpl_vars['hasImage']->value == 'y') || (!empty($_smarty_tpl->tpl_vars['topics']->value['image_name']))) {?>
        <meta content="<?php echo $_smarty_tpl->tpl_vars['base_url_canonical']->value;
if ($_smarty_tpl->tpl_vars['hasImage']->value == 'y') {?>article_image.php?image_type=article&id=<?php echo $_smarty_tpl->tpl_vars['articleId']->value;
} elseif (!empty($_smarty_tpl->tpl_vars['topics']->value['image_name'])) {?>article_image.php?image_type=topic&id=<?php echo $_smarty_tpl->tpl_vars['topicId']->value;
}?>" property="og:image">
        <meta content="<?php echo $_smarty_tpl->tpl_vars['base_url_canonical']->value;
if ($_smarty_tpl->tpl_vars['hasImage']->value == 'y') {?>article_image.php?image_type=article&id=<?php echo $_smarty_tpl->tpl_vars['articleId']->value;
} elseif (!empty($_smarty_tpl->tpl_vars['topics']->value['image_name'])) {?>article_image.php?image_type=topic&id=<?php echo $_smarty_tpl->tpl_vars['topicId']->value;
}?>" property="twitter:image">
    
    <?php } else { ?>
        <?php if ($_smarty_tpl->tpl_vars['prefs']->value['socialnetworks_facebook_site_image']) {?><meta content="<?php echo $_smarty_tpl->tpl_vars['prefs']->value['socialnetworks_facebook_site_image'];?>
" property="og:image"><?php }?>
        <?php if ($_smarty_tpl->tpl_vars['prefs']->value['socialnetworks_twitter_site_image']) {?><meta content="<?php echo $_smarty_tpl->tpl_vars['prefs']->value['socialnetworks_twitter_site_image'];?>
" property="twitter:image"><?php }?>
    <?php }
}?>

<?php if (((isset($_smarty_tpl->tpl_vars['editable']->value)) && $_smarty_tpl->tpl_vars['editable']->value) && ($_smarty_tpl->tpl_vars['tiki_p_edit']->value == 'y' || mb_strtolower($_smarty_tpl->tpl_vars['page']->value, 'UTF-8') == 'sandbox' || $_smarty_tpl->tpl_vars['tiki_p_admin_wiki']->value == 'y')) {?>
    <link rel="alternate" type="application/x-wiki" title="Edit this page!" href="tiki-editpage.php?page=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['page']->value,'url' ));?>
">
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki'] == 'y' && $_smarty_tpl->tpl_vars['prefs']->value['feed_wiki'] == 'y' && $_smarty_tpl->tpl_vars['tiki_p_view']->value == 'y') {?>
    <link rel="alternate" type="application/rss+xml" title='<?php echo (($tmp = @call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['prefs']->value['feed_wiki_title'] )))===null||$tmp==='' ? "RSS Wiki" : $tmp);?>
' href="tiki-wiki_rss.php?ver=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['prefs']->value['feed_default_version'],'url' ));?>
">
<?php }
if ($_smarty_tpl->tpl_vars['prefs']->value['feature_blogs'] == 'y' && $_smarty_tpl->tpl_vars['prefs']->value['feed_blogs'] == 'y' && $_smarty_tpl->tpl_vars['tiki_p_read_blog']->value == 'y') {?>
    <link rel="alternate" type="application/rss+xml" title='<?php echo (($tmp = @call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['prefs']->value['feed_blogs_title'] )))===null||$tmp==='' ? "RSS Blogs" : $tmp);?>
' href="tiki-blogs_rss.php?ver=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['prefs']->value['feed_default_version'],'url' ));?>
">
<?php }
if ($_smarty_tpl->tpl_vars['prefs']->value['feature_articles'] == 'y' && $_smarty_tpl->tpl_vars['prefs']->value['feed_articles'] == 'y' && $_smarty_tpl->tpl_vars['tiki_p_read_article']->value == 'y') {?>
    <link rel="alternate" type="application/rss+xml" title='<?php echo (($tmp = @call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['prefs']->value['feed_articles_title'] )))===null||$tmp==='' ? "RSS Articles" : $tmp);?>
' href="tiki-articles_rss.php?ver=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['prefs']->value['feed_default_version'],'url' ));?>
">
<?php }
if ($_smarty_tpl->tpl_vars['prefs']->value['feature_file_galleries'] == 'y' && $_smarty_tpl->tpl_vars['prefs']->value['feed_file_galleries'] == 'y' && $_smarty_tpl->tpl_vars['tiki_p_view_file_gallery']->value == 'y') {?>
    <link rel="alternate" type="application/rss+xml" title='<?php echo (($tmp = @call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['prefs']->value['feed_file_galleries_title'] )))===null||$tmp==='' ? "RSS File Galleries" : $tmp);?>
' href="tiki-file_galleries_rss.php?ver=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['prefs']->value['feed_default_version'],'url' ));?>
">
<?php }
if ($_smarty_tpl->tpl_vars['prefs']->value['feature_forums'] == 'y' && $_smarty_tpl->tpl_vars['prefs']->value['feed_forums'] == 'y' && $_smarty_tpl->tpl_vars['tiki_p_forum_read']->value == 'y') {?>
    <link rel="alternate" type="application/rss+xml" title='<?php echo (($tmp = @call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['prefs']->value['feed_forums_title'] )))===null||$tmp==='' ? "RSS Forums" : $tmp);?>
' href="tiki-forums_rss.php?ver=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['prefs']->value['feed_default_version'],'url' ));?>
">
<?php }
if ($_smarty_tpl->tpl_vars['prefs']->value['feature_directory'] == 'y' && $_smarty_tpl->tpl_vars['prefs']->value['feed_directories'] == 'y' && $_smarty_tpl->tpl_vars['tiki_p_view_directory']->value == 'y') {?>
    <link rel="alternate" type="application/rss+xml" title='<?php echo (($tmp = @call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['prefs']->value['feed_directories_title'] )))===null||$tmp==='' ? "RSS Directories" : $tmp);?>
' href="tiki-directories_rss.php?ver=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['prefs']->value['feed_default_version'],'url' ));?>
">
<?php }
if ($_smarty_tpl->tpl_vars['prefs']->value['feature_calendar'] == 'y' && $_smarty_tpl->tpl_vars['prefs']->value['feed_calendar'] == 'y' && $_smarty_tpl->tpl_vars['tiki_p_view_calendar']->value == 'y') {?>
    <link rel="alternate" type="application/rss+xml" title='<?php echo (($tmp = @call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['prefs']->value['feed_calendar_title'] )))===null||$tmp==='' ? "RSS Calendars" : $tmp);?>
' href="tiki-calendars_rss.php?ver=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['prefs']->value['feed_default_version'],'url' ));?>
">
<?php }
if ($_smarty_tpl->tpl_vars['prefs']->value['feature_trackers'] == 'y' && $_smarty_tpl->tpl_vars['prefs']->value['feed_tracker'] == 'y') {?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsslist_trackers']->value, 'tracker');
$_smarty_tpl->tpl_vars['tracker']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tracker']->value) {
$_smarty_tpl->tpl_vars['tracker']->do_else = false;
?>
        <link rel="alternate" type="application/rss+xml"
            title='<?php echo (($tmp = @call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( (($_smarty_tpl->tpl_vars['prefs']->value['feed_tracker_title']).(" - ")).($_smarty_tpl->tpl_vars['tracker']->value['name']) )))===null||$tmp==='' ? "RSS Tracker" : $tmp);?>
'
            href="tiki-tracker_rss.php?ver=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['prefs']->value['feed_default_version'],'url' ));?>
&trackerId=<?php echo $_smarty_tpl->tpl_vars['tracker']->value['trackerId'];?>
">
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?>

<?php if ($_smarty_tpl->tpl_vars['prefs']->value['tiki_monitor_performance'] == 'y') {?>
	<?php echo '<script'; ?>
 type="text/javascript" src="vendor_bundled/vendor/npm-asset/boomerangjs/boomerang.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="vendor_bundled/vendor/npm-asset/boomerangjs/plugins/rt.js"><?php echo '</script'; ?>
>
<?php }?>

<?php if (($_smarty_tpl->tpl_vars['prefs']->value['feature_blogs'] == 'y' && $_smarty_tpl->tpl_vars['prefs']->value['feature_blog_sharethis'] == 'y') || ($_smarty_tpl->tpl_vars['prefs']->value['feature_articles'] == 'y' && $_smarty_tpl->tpl_vars['prefs']->value['feature_cms_sharethis'] == 'y') || ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki'] == 'y' && $_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_sharethis'] == 'y')) {?>
    <?php if ($_smarty_tpl->tpl_vars['prefs']->value['blog_sharethis_publisher'] != '' && $_smarty_tpl->tpl_vars['prefs']->value['article_sharethis_publisher'] != '') {?>
        <?php echo '<script'; ?>
 type="text/javascript" src="https://ws.sharethis.com/button/sharethis.js#publisher=<?php echo $_smarty_tpl->tpl_vars['prefs']->value['blog_sharethis_publisher'];?>
&amp;type=website&amp;buttonText=&amp;onmouseover=false&amp;send_services=aim"><?php echo '</script'; ?>
>
    <?php } elseif ($_smarty_tpl->tpl_vars['prefs']->value['blog_sharethis_publisher'] != '' && $_smarty_tpl->tpl_vars['prefs']->value['article_sharethis_publisher'] == '') {?>
        <?php echo '<script'; ?>
 type="text/javascript" src="https://ws.sharethis.com/button/sharethis.js#publisher=<?php echo $_smarty_tpl->tpl_vars['prefs']->value['blog_sharethis_publisher'];?>
&amp;type=website&amp;buttonText=&amp;onmouseover=false&amp;send_services=aim"><?php echo '</script'; ?>
>
    <?php } elseif ($_smarty_tpl->tpl_vars['prefs']->value['blog_sharethis_publisher'] == '' && $_smarty_tpl->tpl_vars['prefs']->value['article_sharethis_publisher'] != '') {?>
        <?php echo '<script'; ?>
 type="text/javascript" src="https://ws.sharethis.com/button/sharethis.js#publisher=<?php echo $_smarty_tpl->tpl_vars['prefs']->value['article_sharethis_publisher'];?>
&amp;type=website&amp;buttonText=&amp;onmouseover=false&amp;send_services=aim"><?php echo '</script'; ?>
>
    <?php } elseif ($_smarty_tpl->tpl_vars['prefs']->value['blog_sharethis_publisher'] == '' && $_smarty_tpl->tpl_vars['prefs']->value['article_sharethis_publisher'] == '') {?>
        <?php echo '<script'; ?>
 type="text/javascript" src="https://ws.sharethis.com/button/sharethis.js#type=website&amp;buttonText=&amp;onmouseover=false&amp;send_services=aim"><?php echo '</script'; ?>
>
    <?php }
}
if ($_smarty_tpl->tpl_vars['prefs']->value['vuejs_enable'] == 'y') {?>
    <meta name="importmap-type" content="systemjs-importmap" />
    <?php echo '<script'; ?>
 type="systemjs-importmap">
        {
            "imports": {
                "vue": "<?php echo $_smarty_tpl->tpl_vars['tikiroot']->value;?>
lib/vue/lib/vue.runtime.global.prod.js",
                "@vue-mf/styleguide": "<?php echo $_smarty_tpl->tpl_vars['tikiroot']->value;?>
storage/public/vue-mf/styleguide/vue-mf-styleguide.min.js",
                "@vue-mf/root-config": "<?php echo $_smarty_tpl->tpl_vars['tikiroot']->value;?>
storage/public/vue-mf/root-config/vue-mf-root-config.min.js",
                "@vue-mf/kanban": "<?php echo $_smarty_tpl->tpl_vars['tikiroot']->value;?>
storage/public/vue-mf/kanban/vue-mf-kanban.min.js"
            }
        }
    <?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="vendor_bundled/vendor/npm-asset/import-map-overrides/dist/import-map-overrides.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="vendor_bundled/vendor/npm-asset/systemjs/dist/system.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="lib/vue/lib/vue.runtime.global.prod.js"><?php echo '</script'; ?>
>
    
    <?php echo '<script'; ?>
>
        System.set(System.resolve('vue'), window.Vue);
        System.import("@vue-mf/root-config");
        window.Vue = undefined;
    <?php echo '</script'; ?>
>
<?php }?>
<!--[if lt IE 9]>
    <?php echo '<script'; ?>
 src="vendor_bundled/vendor/afarkas/html5shiv/dist/html5shiv.min.js" type="text/javascript"><?php echo '</script'; ?>
>
<![endif]-->
<?php if ($_smarty_tpl->tpl_vars['headerlib']->value) {?>        <?php echo $_smarty_tpl->tpl_vars['headerlib']->value->output_headers();
}
if ($_smarty_tpl->tpl_vars['prefs']->value['feature_custom_html_head_content']) {?>
    <?php $_template = new Smarty_Internal_Template('eval:'.$_smarty_tpl->tpl_vars['prefs']->value['feature_custom_html_head_content'], $_smarty_tpl->smarty, $_smarty_tpl);echo $_template->fetch();
}?>

<?php }
}
