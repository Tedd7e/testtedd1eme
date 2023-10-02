<?php
/* Smarty version 3.1.48, created on 2023-09-29 11:17:29
  from '/home/teddieme/tedd1eme/templates/admin/include_apply_top.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6516a439c4e832_52427014',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'df650a8b8d5aeae4f1900d7eccfb326a2feeabc6' => 
    array (
      0 => '/home/teddieme/tedd1eme/templates/admin/include_apply_top.tpl',
      1 => 1689085248,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6516a439c4e832_52427014 (Smarty_Internal_Template $_smarty_tpl) {
if (empty($_smarty_tpl->tpl_vars['applyTitle']->value)) {?>
    <?php $_smarty_tpl->_assignInScope('applyTitle', "Apply changes");
}
if (empty($_smarty_tpl->tpl_vars['applyValue']->value)) {?>
    <?php $_smarty_tpl->_assignInScope('applyValue', "Apply");
}?>
<div class="float-right">
    <input
        type="submit"
        <?php if (!empty($_smarty_tpl->tpl_vars['applyForm']->value)) {?>form="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['applyForm']->value,'attr' ));?>
"<?php }?>
        class="btn btn-primary tips"
        title=":<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['applyTitle']->value,'attr' ));?>
"
        value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['applyValue']->value,'attr' ));?>
"
    >
</div>
<?php }
}
