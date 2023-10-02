<?php
/* Smarty version 3.1.48, created on 2023-09-29 11:16:29
  from '/home/teddieme/tedd1eme/templates/show_copyright.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6516a3fd755247_07907458',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '928d2fc6b3fb43e3e09b9c9d5737800bde7d834b' => 
    array (
      0 => '/home/teddieme/tedd1eme/templates/show_copyright.tpl',
      1 => 1689085248,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6516a3fd755247_07907458 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/modifier.sefurl.php','function'=>'smarty_modifier_sefurl',),));
if ($_smarty_tpl->tpl_vars['prefs']->value['feature_copyright'] == 'y') {?>
    <?php if ($_smarty_tpl->tpl_vars['prefs']->value['wikiLicensePage']) {?>
        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'copyright_content', null, null);?>
            <div class="copyright">This content is licensed under the terms of the <a href="<?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['prefs']->value['wikiLicensePage'],'wiki','with_next');?>
copyrightpage=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['page']->value,"url" ));?>
"><?php echo $_smarty_tpl->tpl_vars['prefs']->value['wikiLicensePage'];?>
</a>.</div>
        <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
        <?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_feature_copyrights'] == 'y' && $_smarty_tpl->tpl_vars['copyright_context']->value == 'wiki') {?>
            <?php if ($_smarty_tpl->tpl_vars['prefs']->value['wikiLicensePage'] == $_smarty_tpl->tpl_vars['page']->value && $_smarty_tpl->tpl_vars['tiki_p_edit_copyrights']->value == 'y') {?>
                <div class="form-text">To edit the copyright notices <a href="copyrights.php?page=<?php echo $_smarty_tpl->tpl_vars['copyrightpage']->value;?>
">Click Here</a>.</div>
            <?php } else { ?>
                <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'copyright_content');?>

            <?php }?>
        <?php } elseif ($_smarty_tpl->tpl_vars['prefs']->value['blog_feature_copyrights'] == 'y' && $_smarty_tpl->tpl_vars['copyright_context']->value == 'blogpost') {?>
            <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'copyright_content');?>

        <?php } elseif ($_smarty_tpl->tpl_vars['prefs']->value['article_feature_copyrights'] == 'y' && $_smarty_tpl->tpl_vars['copyright_context']->value == 'article') {?>
            <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'copyright_content');?>

        <?php } elseif ($_smarty_tpl->tpl_vars['prefs']->value['faq_feature_copyrights'] == 'y' && $_smarty_tpl->tpl_vars['copyright_context']->value == 'faq') {?>
            <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'copyright_content');?>

        <?php }?>
    <?php }
}
}
}
