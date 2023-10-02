<?php
/* Smarty version 3.1.48, created on 2023-09-29 11:16:29
  from '/home/teddieme/tedd1eme/templates/modules/mod-rsslist.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6516a3fd7d4087_38612000',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e247e6b2a4a2d72d502d47dd2dc9174c4a426307' => 
    array (
      0 => '/home/teddieme/tedd1eme/templates/modules/mod-rsslist.tpl',
      1 => 1689085248,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6516a3fd7d4087_38612000 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/block.tikimodule.php','function'=>'smarty_block_tikimodule',),1=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/function.icon.php','function'=>'smarty_function_icon',),2=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/block.tr.php','function'=>'smarty_block_tr',),));
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tikimodule', array('error'=>$_smarty_tpl->tpl_vars['module_params']->value['error'],'title'=>$_smarty_tpl->tpl_vars['tpl_module_title']->value,'name'=>"rsslist",'flip'=>$_smarty_tpl->tpl_vars['module_params']->value['flip'],'decorations'=>$_smarty_tpl->tpl_vars['module_params']->value['decorations'],'nobox'=>$_smarty_tpl->tpl_vars['module_params']->value['nobox'],'notitle'=>$_smarty_tpl->tpl_vars['module_params']->value['notitle']));
$_block_repeat=true;
echo smarty_block_tikimodule(array('error'=>$_smarty_tpl->tpl_vars['module_params']->value['error'],'title'=>$_smarty_tpl->tpl_vars['tpl_module_title']->value,'name'=>"rsslist",'flip'=>$_smarty_tpl->tpl_vars['module_params']->value['flip'],'decorations'=>$_smarty_tpl->tpl_vars['module_params']->value['decorations'],'nobox'=>$_smarty_tpl->tpl_vars['module_params']->value['nobox'],'notitle'=>$_smarty_tpl->tpl_vars['module_params']->value['notitle']), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    <div id="rss">
        <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki'] == 'y' && $_smarty_tpl->tpl_vars['prefs']->value['feed_wiki'] == 'y' && $_smarty_tpl->tpl_vars['tiki_p_view']->value == 'y') {?>
            <a class="linkmodule tips" title=":Wiki feed" href="tiki-wiki_rss.php?ver=<?php echo $_smarty_tpl->tpl_vars['prefs']->value['feed_default_version'];?>
">
                <?php echo smarty_function_icon(array('name'=>"rss"),$_smarty_tpl);?>
 Wiki
            </a>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_blogs'] == 'y' && $_smarty_tpl->tpl_vars['prefs']->value['feed_blogs'] == 'y' && $_smarty_tpl->tpl_vars['tiki_p_read_blog']->value == 'y') {?>
            <a class="linkmodule tips" title=":Blogs feed" href="tiki-blogs_rss.php?ver=<?php echo $_smarty_tpl->tpl_vars['prefs']->value['feed_default_version'];?>
">
                <?php echo smarty_function_icon(array('name'=>"rss"),$_smarty_tpl);?>
 Blogs
            </a>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_articles'] == 'y' && $_smarty_tpl->tpl_vars['prefs']->value['feed_articles'] == 'y' && $_smarty_tpl->tpl_vars['tiki_p_read_article']->value == 'y') {?>
            <a class="linkmodule tips" title=":Articles feed" href="tiki-articles_rss.php?ver=<?php echo $_smarty_tpl->tpl_vars['prefs']->value['feed_default_version'];?>
">
                <?php echo smarty_function_icon(array('name'=>"rss"),$_smarty_tpl);?>
 Articles
            </a>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_file_galleries'] == 'y' && $_smarty_tpl->tpl_vars['prefs']->value['feed_file_galleries'] == 'y' && $_smarty_tpl->tpl_vars['tiki_p_view_file_gallery']->value == 'y') {?>
            <a class="linkmodule tips" title=":File Galleries feed" href="tiki-file_galleries_rss.php?ver=<?php echo $_smarty_tpl->tpl_vars['prefs']->value['feed_default_version'];?>
">
                <?php echo smarty_function_icon(array('name'=>"rss"),$_smarty_tpl);?>
 File Galleries
            </a>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_forums'] == 'y' && $_smarty_tpl->tpl_vars['prefs']->value['feed_forums'] == 'y' && $_smarty_tpl->tpl_vars['tiki_p_forum_read']->value == 'y') {?>
            <a class="linkmodule tips" title=":Forums feed" href="tiki-forums_rss.php?ver=<?php echo $_smarty_tpl->tpl_vars['prefs']->value['feed_default_version'];?>
">
                <?php echo smarty_function_icon(array('name'=>"rss"),$_smarty_tpl);?>
 Forums
            </a>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_directory'] == 'y' && $_smarty_tpl->tpl_vars['prefs']->value['feed_directories'] == 'y' && $_smarty_tpl->tpl_vars['tiki_p_view_directory']->value == 'y') {?>
            <a class="linkmodule tips" title=":Directory feed" href="tiki-directories_rss.php?ver=<?php echo $_smarty_tpl->tpl_vars['prefs']->value['feed_default_version'];?>
">
                <?php echo smarty_function_icon(array('name'=>"rss"),$_smarty_tpl);?>
 Directories
            </a>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_calendar'] == 'y' && $_smarty_tpl->tpl_vars['prefs']->value['feed_calendar'] == 'y' && $_smarty_tpl->tpl_vars['tiki_p_view_calendar']->value == 'y') {?>
            <a class="linkmodule tips" title=":Calendar feed" href="tiki-calendars_rss.php?ver=<?php echo $_smarty_tpl->tpl_vars['prefs']->value['feed_default_version'];?>
">
                <?php echo smarty_function_icon(array('name'=>"rss"),$_smarty_tpl);?>
 Calendars
            </a>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_trackers'] == 'y' && $_smarty_tpl->tpl_vars['prefs']->value['feed_tracker'] == 'y') {?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsslist_trackers']->value, 'tracker');
$_smarty_tpl->tpl_vars['tracker']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tracker']->value) {
$_smarty_tpl->tpl_vars['tracker']->do_else = false;
?>
                <a class="linkmodule" href="tiki-tracker_rss.php?ver=<?php echo $_smarty_tpl->tpl_vars['prefs']->value['feed_default_version'];?>
&trackerId=<?php echo $_smarty_tpl->tpl_vars['tracker']->value['trackerId'];?>
">
                    <?php echo smarty_function_icon(array('name'=>"rss"),$_smarty_tpl);?>
 <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tr', array());
$_block_repeat=true;
echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo $_smarty_tpl->tpl_vars['tracker']->value['name'];
$_block_repeat=false;
echo smarty_block_tr(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                </a>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php }?>
    </div>
<?php $_block_repeat=false;
echo smarty_block_tikimodule(array('error'=>$_smarty_tpl->tpl_vars['module_params']->value['error'],'title'=>$_smarty_tpl->tpl_vars['tpl_module_title']->value,'name'=>"rsslist",'flip'=>$_smarty_tpl->tpl_vars['module_params']->value['flip'],'decorations'=>$_smarty_tpl->tpl_vars['module_params']->value['decorations'],'nobox'=>$_smarty_tpl->tpl_vars['module_params']->value['nobox'],'notitle'=>$_smarty_tpl->tpl_vars['module_params']->value['notitle']), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<?php }
}
