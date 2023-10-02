<?php
/* Smarty version 3.1.48, created on 2023-09-29 11:17:04
  from '/home/teddieme/tedd1eme/templates/wiki_edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6516a4206bb088_90265636',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '152b1edafd183f97d98b2695822c45b5a46a2cd0' => 
    array (
      0 => '/home/teddieme/tedd1eme/templates/wiki_edit.tpl',
      1 => 1689085248,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6516a4206bb088_90265636 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/function.toolbars.php','function'=>'smarty_function_toolbars',),));
?>


<div class='edit-zone clearfix'> 
    <?php if ($_smarty_tpl->tpl_vars['textarea__toolbars']->value != 'n') {?>
        <div class='textarea-toolbar nav-justified' id='<?php echo (($tmp = @$_smarty_tpl->tpl_vars['textarea_id']->value)===null||$tmp==='' ? 'editwiki' : $tmp);?>
_toolbar'>
            <?php echo smarty_function_toolbars(array('area_id'=>(($tmp = @$_smarty_tpl->tpl_vars['textarea_id']->value)===null||$tmp==='' ? 'editwiki' : $tmp),'comments'=>$_smarty_tpl->tpl_vars['comments']->value,'switcheditor'=>$_smarty_tpl->tpl_vars['switcheditor']->value,'section'=>$_smarty_tpl->tpl_vars['toolbar_section']->value),$_smarty_tpl);?>

        </div>
    <?php }?>
    <textarea <?php echo $_smarty_tpl->tpl_vars['textarea_attributes']->value;?>
><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['textareadata']->value ));?>
</textarea>
</div>

<?php if ((isset($_smarty_tpl->tpl_vars['diff_style']->value)) && $_smarty_tpl->tpl_vars['diff_style']->value) {?>
    <input type="hidden" name="oldver" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['diff_oldver']->value ));?>
">
    <input type="hidden" name="newver" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['diff_newver']->value ));?>
">
    <input type="hidden" name="source_page" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['source_page']->value ));?>
">
<?php }?>

<?php }
}
