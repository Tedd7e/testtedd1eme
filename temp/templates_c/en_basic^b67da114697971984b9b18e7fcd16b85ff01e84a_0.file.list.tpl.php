<?php
/* Smarty version 3.1.48, created on 2023-09-29 11:17:29
  from '/home/teddieme/tedd1eme/templates/prefs/list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6516a439d0f8a5_01099711',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b67da114697971984b9b18e7fcd16b85ff01e84a' => 
    array (
      0 => '/home/teddieme/tedd1eme/templates/prefs/list.tpl',
      1 => 1689085248,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:prefs/shared.tpl' => 1,
  ),
),false)) {
function content_6516a439d0f8a5_01099711 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/modifier.breakline.php','function'=>'smarty_modifier_breakline',),));
?>

<div class="adminoptionbox preference form-group row clearfix <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['p']->value['tagstring'] ));
if ((isset($_REQUEST['highlight'])) && $_REQUEST['highlight'] == $_smarty_tpl->tpl_vars['p']->value['preference']) {?> highlight<?php }?>" style="text-align: left;">
    <label class="col-sm-4 col-form-label" for="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['p']->value['id'] ));?>
"><?php echo smarty_modifier_breakline(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['p']->value['name'] )));?>
</label>
    <div class="col-sm-8">
        <?php if (!empty($_smarty_tpl->tpl_vars['p']->value['units'])) {?>
            <div class="input-group">
        <?php }?>
        <select
            class="form-control"
            name="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['p']->value['preference'] ));?>
"
            id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['p']->value['id'] ));?>
"
            data-tiki-admin-child-block=".<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['p']->value['preference'] ));?>
_childcontainer"
            data-tiki-admin-child-mode="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['mode']->value ));?>
"
        >
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['p']->value['options'], 'label', false, 'value');
$_smarty_tpl->tpl_vars['label']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['value']->value => $_smarty_tpl->tpl_vars['label']->value) {
$_smarty_tpl->tpl_vars['label']->do_else = false;
?>
                <option value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['value']->value ));?>
"<?php if ($_smarty_tpl->tpl_vars['value']->value == $_smarty_tpl->tpl_vars['p']->value['value']) {?> selected="selected"<?php }?> <?php echo $_smarty_tpl->tpl_vars['p']->value['params'];?>
>
                    <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['label']->value ));?>

                </option>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>
        <?php if (!empty($_smarty_tpl->tpl_vars['p']->value['units'])) {?>
                <div class="input-group-append">
                    <span class="input-group-text"><?php echo $_smarty_tpl->tpl_vars['p']->value['units'];?>
</span>
                </div>
            </div>
        <?php }?>
        <?php $_smarty_tpl->_subTemplateRender("file:prefs/shared.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>
</div>
<?php }
}
