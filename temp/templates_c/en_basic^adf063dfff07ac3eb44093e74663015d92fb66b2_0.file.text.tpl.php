<?php
/* Smarty version 3.1.48, created on 2023-09-29 11:17:29
  from '/home/teddieme/tedd1eme/templates/prefs/text.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6516a439d357a0_53770963',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'adf063dfff07ac3eb44093e74663015d92fb66b2' => 
    array (
      0 => '/home/teddieme/tedd1eme/templates/prefs/text.tpl',
      1 => 1689085248,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:prefs/shared.tpl' => 1,
  ),
),false)) {
function content_6516a439d357a0_53770963 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/modifier.sefurl.php','function'=>'smarty_modifier_sefurl',),1=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/function.icon.php','function'=>'smarty_function_icon',),));
?>
<div class="adminoptionbox preference clearfix form-group row <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['p']->value['tagstring'] ));
if ((isset($_REQUEST['highlight'])) && $_REQUEST['highlight'] == $_smarty_tpl->tpl_vars['p']->value['preference']) {?> highlight<?php }?>">
    <label class="col-form-label col-sm-4" for="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['p']->value['id'] ));?>
"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['p']->value['name'] ));?>
</label>
    <div class="col-sm-8">
        <?php if (!empty($_smarty_tpl->tpl_vars['p']->value['units']) || !empty($_smarty_tpl->tpl_vars['p']->value['fgal_picker'])) {?>
            <div class="input-group">
        <?php }?>
        <?php if (is_array($_smarty_tpl->tpl_vars['p']->value['value'])) {?>
            <input name="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['p']->value['preference'] ));?>
" id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['p']->value['id'] ));?>
" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( implode($_smarty_tpl->tpl_vars['p']->value['separator'],$_smarty_tpl->tpl_vars['p']->value['value']) ));?>
" class="form-control" size="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( (($tmp = @$_smarty_tpl->tpl_vars['p']->value['size'])===null||$tmp==='' ? 40 : $tmp) ));?>
"
                type="text" <?php echo $_smarty_tpl->tpl_vars['p']->value['params'];?>
>
        <?php } else { ?>
            <input name="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['p']->value['preference'] ));?>
" id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['p']->value['id'] ));?>
" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['p']->value['value'] ));?>
" class="form-control" size="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( (($tmp = @$_smarty_tpl->tpl_vars['p']->value['size'])===null||$tmp==='' ? 40 : $tmp) ));?>
"
                type="text" <?php echo $_smarty_tpl->tpl_vars['p']->value['params'];?>
>
        <?php }?>
        <?php if (!empty($_smarty_tpl->tpl_vars['p']->value['units'])) {?>
                <div class="input-group-append">
                    <span class="input-group-text"><?php echo $_smarty_tpl->tpl_vars['p']->value['units'];?>
</span>
                </div>
            </div>
        <?php }?>
        <?php if (!empty($_smarty_tpl->tpl_vars['p']->value['fgal_picker'])) {?>
            <?php ob_start();?>{<?php $_prefixVariable7 = ob_get_clean();
ob_start();?>}<?php $_prefixVariable8 = ob_get_clean();
$_smarty_tpl->_assignInScope('fileId', (($_prefixVariable7).('fileId')).($_prefixVariable8));?>
                <div class="input-group-append">
                    <a class="btn btn-primary" title="Upload image" href="#"
                        onclick="$('#<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['p']->value['id'] ));?>
').select(); openFgalsWindow('tiki-upload_file.php?filegals_manager=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['p']->value['id'] ));?>
&insertion_syntax=<?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['fileId']->value,'display');?>
', true);return false;">
                    <?php echo smarty_function_icon(array('name'=>'image'),$_smarty_tpl);?>
&nbsp;Upload image
                    </a>
                </div>
            </div>
        <?php }?>

        <?php $_smarty_tpl->_subTemplateRender("file:prefs/shared.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>
</div>
<?php }
}
