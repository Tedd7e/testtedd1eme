<?php
/* Smarty version 3.1.48, created on 2023-09-29 11:16:29
  from '/home/teddieme/tedd1eme/templates/tiki-flaggedrev_approval_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6516a3fd7466b5_52949540',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '52dd4a07501dbcb8d010eac38112d576f9a48aac' => 
    array (
      0 => '/home/teddieme/tedd1eme/templates/tiki-flaggedrev_approval_header.tpl',
      1 => 1689085248,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6516a3fd7466b5_52949540 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/block.remarksbox.php','function'=>'smarty_block_remarksbox',),1=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/block.self_link.php','function'=>'smarty_block_self_link',),2=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/modifier.sefurl.php','function'=>'smarty_modifier_sefurl',),));
?>

<?php if ($_smarty_tpl->tpl_vars['prefs']->value['flaggedrev_approval'] == 'y' && $_smarty_tpl->tpl_vars['revision_approval']->value) {?>
    <?php if (($_smarty_tpl->tpl_vars['revision_approved']->value || $_smarty_tpl->tpl_vars['revision_displayed']->value) && $_smarty_tpl->tpl_vars['revision_approved']->value != $_smarty_tpl->tpl_vars['lastVersion']->value && ($_smarty_tpl->tpl_vars['tiki_p_wiki_view_latest']->value == 'y' || $_smarty_tpl->tpl_vars['tiki_p_edit']->value == 'y')) {?>
        <?php if ($_smarty_tpl->tpl_vars['lastVersion']->value == $_smarty_tpl->tpl_vars['revision_displayed']->value) {?>
            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>'warning','title'=>"Content waiting for approval"));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>'warning','title'=>"Content waiting for approval"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <p>
                    You are currently viewing the latest version of the page.
                    <?php if ($_smarty_tpl->tpl_vars['revision_approved']->value) {?>
                        You can also view the <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('self_link', array());
$_block_repeat=true;
echo smarty_block_self_link(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>latest approved version<?php $_block_repeat=false;
echo smarty_block_self_link(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>.
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['tiki_p_wiki_approve']->value == 'y') {?>
                        You can approve this revision and make it available to a wider audience. Make sure you review all the changes before approving.
                    <?php }?>
                </p>
                <?php if ($_smarty_tpl->tpl_vars['tiki_p_wiki_approve']->value == 'y') {?>
                    <form method="post" action="<?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['page']->value);?>
">
                        <?php if ($_smarty_tpl->tpl_vars['revision_approved']->value) {?>
                            <p><a href="tiki-pagehistory.php?page=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['page']->value,'url' ));?>
&compare&oldver=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['revision_approved']->value,'url' ));?>
&diff_style=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['prefs']->value['default_wiki_diff_style'],'url' ));?>
" class="alert-link">Show changes since last approved revision</a></p>
                        <?php } else { ?>
                            <p>This page has no prior approved revision. <strong>All of the content must be reviewed.</strong></p>
                        <?php }?>
                        <div class="submit row">
                          <input type="hidden" name="revision" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['revision_displayed']->value ));?>
">
                          <div class="col-md-6">
                            <input type="submit" class="btn btn-primary btn-sm" name="approve" value="Approve current revision">
                          </div>
                            <!-- TODO work on layout here -->
                            <div class="col-md-6">
                              <input type="text" name="reason" placeholder="Why is this not approved?">
                              <input type="submit" class="btn btn-primary btn-sm" name="reject" value="Reject current revision">
                              <br/>
                              <input type="checkbox" class="form-check-input" name="delete_revision" value="on"> <label for="delete_version">Permanently delete this revision</label>
                            </div>
                        </div>
                    </form>
                <?php }?>
            <?php $_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>'warning','title'=>"Content waiting for approval"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <?php } else { ?>
            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>'comment','title'=>"Content waiting for approval"));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>'comment','title'=>"Content waiting for approval"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <p>
                    You are currently viewing the approved version of the page.
                    <?php if ($_smarty_tpl->tpl_vars['revision_approved']->value && $_smarty_tpl->tpl_vars['tiki_p_wiki_view_latest']->value == 'y') {?>
                        You can also view the <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('self_link', array('latest'=>1));
$_block_repeat=true;
echo smarty_block_self_link(array('latest'=>1), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>latest version<?php $_block_repeat=false;
echo smarty_block_self_link(array('latest'=>1), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>.
                    <?php }?>
                </p>
            <?php $_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>'comment','title'=>"Content waiting for approval"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <?php }?>
    <?php } elseif (!$_smarty_tpl->tpl_vars['revision_approved']->value && $_smarty_tpl->tpl_vars['tiki_p_wiki_view_latest']->value == 'y') {?>
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>'comment','title'=>"Content waiting for approval"));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>'comment','title'=>"Content waiting for approval"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <p>
                View the <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('self_link', array('latest'=>1));
$_block_repeat=true;
echo smarty_block_self_link(array('latest'=>1), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>latest version<?php $_block_repeat=false;
echo smarty_block_self_link(array('latest'=>1), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>.
            </p>
        <?php $_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>'comment','title'=>"Content waiting for approval"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    <?php }
}
}
}
