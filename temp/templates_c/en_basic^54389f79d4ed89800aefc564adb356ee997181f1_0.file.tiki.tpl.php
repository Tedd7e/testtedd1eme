<?php
/* Smarty version 3.1.48, created on 2023-09-29 11:17:10
  from '/home/teddieme/tedd1eme/templates/tiki.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6516a4265cc677_46982369',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '54389f79d4ed89800aefc564adb356ee997181f1' => 
    array (
      0 => '/home/teddieme/tedd1eme/templates/tiki.tpl',
      1 => 1689085248,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6516a4265cc677_46982369 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2570460516516a4265cb320_26474576', 'title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20733821796516a4265cbe55_95605998', 'content');
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout_view.tpl');
}
/* {block 'title'} */
class Block_2570460516516a4265cb320_26474576 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_2570460516516a4265cb320_26474576',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <!-- Legacy template, no support for title block -->
<?php
}
}
/* {/block 'title'} */
/* {block 'content'} */
class Block_20733821796516a4265cbe55_95605998 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_20733821796516a4265cbe55_95605998',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo $_smarty_tpl->tpl_vars['mid_data']->value;?>

<?php
}
}
/* {/block 'content'} */
}
