<?php
/* Smarty version 3.1.48, created on 2023-09-29 11:19:08
  from '/home/teddieme/tedd1eme/templates/prefs/multilist.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6516a49c503db1_05658227',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '98ce03df475d4edd9dd55b29dd5e578532b051ee' => 
    array (
      0 => '/home/teddieme/tedd1eme/templates/prefs/multilist.tpl',
      1 => 1689085248,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:prefs/shared.tpl' => 1,
  ),
),false)) {
function content_6516a49c503db1_05658227 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/block.remarksbox.php','function'=>'smarty_block_remarksbox',),));
?>
<div class="adminoptionbox preference clearfix form-group row <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['p']->value['tagstring'] ));
if ((isset($_REQUEST['highlight'])) && $_REQUEST['highlight'] == $_smarty_tpl->tpl_vars['p']->value['preference']) {?> highlight<?php }?>" style="text-align: left;">
    <label class="col-sm-4 col-form-label" for="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['p']->value['id'] ));?>
"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['p']->value['name'] ));?>
</label>
    <div class="col-sm-8">
        <select class="form-control resize-vertical" name="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['p']->value['preference'] ));?>
[]" id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['p']->value['id'] ));?>
" multiple="multiple" >
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['p']->value['options'], 'label', false, 'value');
$_smarty_tpl->tpl_vars['label']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['value']->value => $_smarty_tpl->tpl_vars['label']->value) {
$_smarty_tpl->tpl_vars['label']->do_else = false;
?>
                <option value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['value']->value ));?>
"<?php if (is_array($_smarty_tpl->tpl_vars['p']->value['value']) && in_array($_smarty_tpl->tpl_vars['value']->value,$_smarty_tpl->tpl_vars['p']->value['value'])) {?> selected="selected"<?php }?> <?php echo $_smarty_tpl->tpl_vars['p']->value['params'];?>
><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['label']->value ));?>
</option>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>
        <?php $_smarty_tpl->_subTemplateRender("file:prefs/shared.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php if ($_smarty_tpl->tpl_vars['prefs']->value['jquery_select2'] != 'y') {?>
            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>"tip",'title'=>"Tip"));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Tip"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Use Ctrl+Click to select multiple options<?php $_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Tip"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <?php }?>
    </div>
</div>
<?php }
}
