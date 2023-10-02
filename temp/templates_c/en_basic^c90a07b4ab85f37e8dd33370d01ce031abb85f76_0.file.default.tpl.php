<?php
/* Smarty version 3.1.48, created on 2023-09-29 11:16:29
  from '/home/teddieme/tedd1eme/templates/feedback/default.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6516a3fd6c2ad8_07212005',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c90a07b4ab85f37e8dd33370d01ce031abb85f76' => 
    array (
      0 => '/home/teddieme/tedd1eme/templates/feedback/default.tpl',
      1 => 1689085248,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6516a3fd6c2ad8_07212005 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/block.remarksbox.php','function'=>'smarty_block_remarksbox',),));
?>


<div id="tikifeedback">
    <?php if (!empty($_smarty_tpl->tpl_vars['tikifeedback']->value)) {?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tikifeedback']->value, 'fb', false, 'tpl');
$_smarty_tpl->tpl_vars['fb']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tpl']->value => $_smarty_tpl->tpl_vars['fb']->value) {
$_smarty_tpl->tpl_vars['fb']->do_else = false;
?>
            <?php if ($_smarty_tpl->tpl_vars['tpl']->value === 'default') {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fb']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>$_smarty_tpl->tpl_vars['item']->value['type'],'title'=>$_smarty_tpl->tpl_vars['item']->value['title'],'icon'=>$_smarty_tpl->tpl_vars['item']->value['icon']));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>$_smarty_tpl->tpl_vars['item']->value['type'],'title'=>$_smarty_tpl->tpl_vars['item']->value['title'],'icon'=>$_smarty_tpl->tpl_vars['item']->value['icon']), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                        <?php if (count($_smarty_tpl->tpl_vars['item']->value['mes']) == 1) {?>
                            <ul class="list-unstyled">
                        <?php } else { ?>
                            <ul>
                        <?php }?>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value['mes'], 'mes');
$_smarty_tpl->tpl_vars['mes']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['mes']->value) {
$_smarty_tpl->tpl_vars['mes']->do_else = false;
?>
                                <li>
                                    <?php echo $_smarty_tpl->tpl_vars['mes']->value;?>

                                </li>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </ul>
                    <?php $_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>$_smarty_tpl->tpl_vars['item']->value['type'],'title'=>$_smarty_tpl->tpl_vars['item']->value['title'],'icon'=>$_smarty_tpl->tpl_vars['item']->value['icon']), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php } elseif ($_smarty_tpl->tpl_vars['tpl']->value) {?>
                <?php $_smarty_tpl->_subTemplateRender((('feedback/').($_smarty_tpl->tpl_vars['tpl']->value)).('.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
            <?php }?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php }?>
</div>
<?php }
}
