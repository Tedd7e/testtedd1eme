<?php
/* Smarty version 3.1.48, created on 2023-09-29 11:17:29
  from '/home/teddieme/tedd1eme/templates/prefs/selector.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6516a439cd1c84_70512514',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c5cd17056ebcf7533722385472075d0ec0a2bee3' => 
    array (
      0 => '/home/teddieme/tedd1eme/templates/prefs/selector.tpl',
      1 => 1689085248,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:prefs/shared.tpl' => 1,
  ),
),false)) {
function content_6516a439cd1c84_70512514 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/function.object_selector.php','function'=>'smarty_function_object_selector',),));
?>
<div class="adminoptionbox preference clearfix form-group row <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['p']->value['tagstring'] ));
if ((isset($_REQUEST['highlight'])) && $_REQUEST['highlight'] == $_smarty_tpl->tpl_vars['p']->value['preference']) {?> highlight<?php }?>">
    <label class="col-form-label col-sm-4" for="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['p']->value['id'] ));?>
"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['p']->value['name'] ));?>
</label>
    <div class="col-sm-8">
        <?php echo smarty_function_object_selector(array('_simplename'=>$_smarty_tpl->tpl_vars['p']->value['preference'],'_simpleid'=>$_smarty_tpl->tpl_vars['p']->value['id'],'_simplevalue'=>$_smarty_tpl->tpl_vars['p']->value['value'],'type'=>$_smarty_tpl->tpl_vars['p']->value['selector_type'],'_format'=>(($tmp = @$_smarty_tpl->tpl_vars['p']->value['format'])===null||$tmp==='' ? null : $tmp),'_parent'=>(($tmp = @$_smarty_tpl->tpl_vars['p']->value['parent'])===null||$tmp==='' ? null : $tmp),'_parentkey'=>(($tmp = @$_smarty_tpl->tpl_vars['p']->value['parentkey'])===null||$tmp==='' ? null : $tmp)),$_smarty_tpl);?>

        <?php $_smarty_tpl->_subTemplateRender("file:prefs/shared.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>
</div>
<?php }
}
