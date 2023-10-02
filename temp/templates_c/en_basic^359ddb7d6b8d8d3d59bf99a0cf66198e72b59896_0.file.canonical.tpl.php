<?php
/* Smarty version 3.1.48, created on 2023-09-29 11:16:29
  from '/home/teddieme/tedd1eme/templates/canonical.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6516a3fd5af812_82721223',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '359ddb7d6b8d8d3d59bf99a0cf66198e72b59896' => 
    array (
      0 => '/home/teddieme/tedd1eme/templates/canonical.tpl',
      1 => 1689085248,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6516a3fd5af812_82721223 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/modifier.sefurl.php','function'=>'smarty_modifier_sefurl',),));
?>

<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_canonical_url'] == 'y' && (isset($_smarty_tpl->tpl_vars['mid']->value))) {?>
    <?php if ($_smarty_tpl->tpl_vars['mid']->value == 'tiki-show_page.tpl' || $_smarty_tpl->tpl_vars['mid']->value == 'tiki-index_p.tpl' || $_smarty_tpl->tpl_vars['mid']->value == 'tiki-show_page_raw.tpl' || $_smarty_tpl->tpl_vars['mid']->value == 'tiki-all_languages.tpl' || $_smarty_tpl->tpl_vars['mid']->value == 'tiki-show_content.tpl') {?>
        <link rel="canonical" href="<?php echo $_smarty_tpl->tpl_vars['base_url_canonical']->value;
echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['page']->value);
if (!empty($_smarty_tpl->tpl_vars['canonical_ending']->value)) {
echo $_smarty_tpl->tpl_vars['canonical_ending']->value;
}?>">
        <meta content="<?php echo $_smarty_tpl->tpl_vars['base_url_canonical']->value;
echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['page']->value);
if (!empty($_smarty_tpl->tpl_vars['canonical_ending']->value)) {
echo $_smarty_tpl->tpl_vars['canonical_ending']->value;
}?>" property="og:url">
    <?php } elseif ($_smarty_tpl->tpl_vars['mid']->value == 'extends:layouts/internal/layout_view.tpl|tiki-show_page.tpl') {?>
        <link rel="canonical" href="<?php echo $_smarty_tpl->tpl_vars['base_url_canonical']->value;
echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['page']->value);
if (!empty($_smarty_tpl->tpl_vars['canonical_ending']->value)) {
echo $_smarty_tpl->tpl_vars['canonical_ending']->value;
}?>">
        <meta content="<?php echo $_smarty_tpl->tpl_vars['base_url_canonical']->value;
echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['page']->value);
if (!empty($_smarty_tpl->tpl_vars['canonical_ending']->value)) {
echo $_smarty_tpl->tpl_vars['canonical_ending']->value;
}?>" property="og:url">
    <?php } elseif ($_smarty_tpl->tpl_vars['mid']->value == 'tiki-view_tracker_item.tpl') {?>
        <link rel="canonical" href="<?php echo $_smarty_tpl->tpl_vars['base_url_canonical']->value;
echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['itemId']->value,'trackeritem');?>
">
        <meta content="<?php echo $_smarty_tpl->tpl_vars['base_url_canonical']->value;
echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['itemId']->value,'trackeritem');?>
" property="og:url">
    <?php } elseif ($_smarty_tpl->tpl_vars['mid']->value == 'tiki-view_forum.tpl') {?>
        <link rel="canonical" href="<?php echo $_smarty_tpl->tpl_vars['base_url_canonical']->value;
echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['forumId']->value,'forum');?>
">
        <meta content="<?php echo $_smarty_tpl->tpl_vars['base_url_canonical']->value;
echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['forumId']->value,'forum');?>
" property="og:url">
    <?php } elseif ($_smarty_tpl->tpl_vars['mid']->value == 'tiki-view_forum_thread.tpl') {?>
        <link rel="canonical" href="<?php echo $_smarty_tpl->tpl_vars['base_url_canonical']->value;
echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['comments_parentId']->value,'forumthread');?>
">
        <meta content="<?php echo $_smarty_tpl->tpl_vars['base_url_canonical']->value;
echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['comments_parentId']->value,'forumthread');?>
" property="og:url">
    <?php } elseif ($_smarty_tpl->tpl_vars['mid']->value == 'tiki-print_forum_thread.tpl') {?>
        <link rel="canonical" href="<?php echo $_smarty_tpl->tpl_vars['base_url_canonical']->value;
echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['comments_parentId']->value,'forumthread');?>
">
        <meta content="<?php echo $_smarty_tpl->tpl_vars['base_url_canonical']->value;
echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['comments_parentId']->value,'forumthread');?>
" property="og:url">
    <?php } elseif ($_smarty_tpl->tpl_vars['mid']->value == 'tiki-view_blog.tpl') {?>
        <link rel="canonical" href="<?php echo $_smarty_tpl->tpl_vars['base_url_canonical']->value;
echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['blogId']->value,'blog');?>
">
        <meta content="<?php echo $_smarty_tpl->tpl_vars['base_url_canonical']->value;
echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['blogId']->value,'blog');?>
" property="og:url">
    <?php } elseif ($_smarty_tpl->tpl_vars['mid']->value == 'tiki-view_blog_post.tpl') {?>
        <link rel="canonical" href="<?php echo $_smarty_tpl->tpl_vars['base_url_canonical']->value;
echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['postId']->value,'blogpost');?>
">
        <meta content="<?php echo $_smarty_tpl->tpl_vars['base_url_canonical']->value;
echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['postId']->value,'blogpost');?>
" property="og:url">
    <?php } elseif ($_smarty_tpl->tpl_vars['mid']->value == 'tiki-read_article.tpl') {?>
        <link rel="canonical" href="<?php echo $_smarty_tpl->tpl_vars['base_url_canonical']->value;
echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['articleId']->value,'article');?>
">
        <meta content="<?php echo $_smarty_tpl->tpl_vars['base_url_canonical']->value;
echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['articleId']->value,'article');?>
" property="og:url">
    <?php } elseif ($_smarty_tpl->tpl_vars['mid']->value == 'tiki-browse_categories.tpl') {?>
        <link rel="canonical" href="<?php echo $_smarty_tpl->tpl_vars['base_url_canonical']->value;
echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['parentId']->value,'category');?>
">
        <meta content="<?php echo $_smarty_tpl->tpl_vars['base_url_canonical']->value;
echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['parentId']->value,'category');?>
" property="og:url">
    <?php } elseif ($_smarty_tpl->tpl_vars['mid']->value == 'tiki-list_file_gallery.tpl') {?>
        <link rel="canonical" href="<?php echo $_smarty_tpl->tpl_vars['base_url_canonical']->value;?>
file<?php echo $_smarty_tpl->tpl_vars['galleryId']->value;?>
">
        <meta content="<?php echo $_smarty_tpl->tpl_vars['base_url_canonical']->value;?>
file<?php echo $_smarty_tpl->tpl_vars['galleryId']->value;?>
" property="og:url">
    <?php }
}
}
}
