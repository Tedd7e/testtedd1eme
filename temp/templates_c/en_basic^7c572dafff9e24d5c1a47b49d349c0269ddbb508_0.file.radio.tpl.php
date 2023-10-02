<?php
/* Smarty version 3.1.48, created on 2023-09-29 11:17:30
  from '/home/teddieme/tedd1eme/templates/prefs/radio.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6516a43a2f81b7_43355776',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7c572dafff9e24d5c1a47b49d349c0269ddbb508' => 
    array (
      0 => '/home/teddieme/tedd1eme/templates/prefs/radio.tpl',
      1 => 1689085248,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:prefs/shared.tpl' => 1,
  ),
),false)) {
function content_6516a43a2f81b7_43355776 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="adminoptionbox preference clearfix form-group row <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['p']->value['tagstring'] ));
if ((isset($_REQUEST['highlight'])) && $_REQUEST['highlight'] == $_smarty_tpl->tpl_vars['p']->value['preference']) {?> highlight<?php }?>">
    <?php if ($_smarty_tpl->tpl_vars['p']->value['name']) {?>
        <label for="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['p']->value['id'] ));?>
" class="col-form-label col-sm-4"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['p']->value['name'] ));?>
</label>
    <?php }?>
    <div class="col-sm-8">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['p']->value['options'], 'label', false, 'value', 'loop', array (
  'index' => true,
));
$_smarty_tpl->tpl_vars['label']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['value']->value => $_smarty_tpl->tpl_vars['label']->value) {
$_smarty_tpl->tpl_vars['label']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_loop']->value['index']++;
?>
            <div class="adminoptionlabel form-check">
                <input class="form-check-input" id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( (($_smarty_tpl->tpl_vars['p']->value['id']).('_')).((isset($_smarty_tpl->tpl_vars['__smarty_foreach_loop']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_loop']->value['index'] : null)) ));?>
" type="radio" name="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['p']->value['preference'] ));?>
"
                    value="<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['p']->value['value'] == $_smarty_tpl->tpl_vars['value']->value) {?> checked="checked"<?php }?> <?php echo $_smarty_tpl->tpl_vars['p']->value['params'];?>

                    data-tiki-admin-child-block="#<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['p']->value['preference'] ));?>
_childcontainer_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( (isset($_smarty_tpl->tpl_vars['__smarty_foreach_loop']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_loop']->value['index'] : null) ));?>
"
                >
                <label class="form-check-label" for="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( (($_smarty_tpl->tpl_vars['p']->value['id']).('_')).((isset($_smarty_tpl->tpl_vars['__smarty_foreach_loop']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_loop']->value['index'] : null)) ));?>
"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['label']->value ));?>
</label>
            </div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php $_smarty_tpl->_subTemplateRender("file:prefs/shared.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>
</div>
<?php }
}
