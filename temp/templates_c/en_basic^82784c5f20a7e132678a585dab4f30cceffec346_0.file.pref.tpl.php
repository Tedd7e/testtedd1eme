<?php
/* Smarty version 3.1.48, created on 2023-09-29 11:18:38
  from '/home/teddieme/tedd1eme/templates/feedback/pref.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6516a47ec2d2b8_39636252',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '82784c5f20a7e132678a585dab4f30cceffec346' => 
    array (
      0 => '/home/teddieme/tedd1eme/templates/feedback/pref.tpl',
      1 => 1689085248,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6516a47ec2d2b8_39636252 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/block.remarksbox.php','function'=>'smarty_block_remarksbox',),1=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/function.icon.php','function'=>'smarty_function_icon',),2=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/block.tr.php','function'=>'smarty_block_tr',),3=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/modifier.stringfix.php','function'=>'smarty_modifier_stringfix',),));
?>

<?php if (count($_smarty_tpl->tpl_vars['fb']->value) > 0) {?>
    <?php if (count($_smarty_tpl->tpl_vars['fb']->value) == 1) {?>
        <?php $_smarty_tpl->_assignInScope('title', "The following change has been applied");?>
    <?php } else { ?>
        <?php $_smarty_tpl->_assignInScope('title', "The following changes have been applied");?>
    <?php }?>

    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>'feedback','title'=>((string)$_smarty_tpl->tpl_vars['title']->value)));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>'feedback','title'=>((string)$_smarty_tpl->tpl_vars['title']->value)), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <ul class="list-unstyled">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fb']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                <li>
                    <?php if ($_smarty_tpl->tpl_vars['item']->value['st'] == 0) {?>
                        <?php echo smarty_function_icon(array('name'=>'disable'),$_smarty_tpl);?>

                    <?php } elseif ($_smarty_tpl->tpl_vars['item']->value['st'] == 1) {?>
                        <?php echo smarty_function_icon(array('name'=>'ok'),$_smarty_tpl);?>

                    <?php } elseif ($_smarty_tpl->tpl_vars['item']->value['st'] == 2) {?>
                        <?php echo smarty_function_icon(array('name'=>'edit'),$_smarty_tpl);?>

                    <?php } elseif ($_smarty_tpl->tpl_vars['item']->value['st'] == 4) {?>
                        <?php echo smarty_function_icon(array('name'=>'undo'),$_smarty_tpl);?>

                    <?php } else { ?>
                        <?php echo smarty_function_icon(array('name'=>'information'),$_smarty_tpl);?>

                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['item']->value['st'] != 3) {?>Preference <?php }?><strong><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tr', array());
$_block_repeat=true;
echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo smarty_modifier_stringfix($_smarty_tpl->tpl_vars['item']->value['mes'][0]);
$_block_repeat=false;
echo smarty_block_tr(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></strong>
                    <?php if ($_smarty_tpl->tpl_vars['item']->value['st'] != 3) {?><small>(Preference name: <?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
)</small><?php }?>
                </li>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
    <?php $_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>'feedback','title'=>((string)$_smarty_tpl->tpl_vars['title']->value)), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
}
