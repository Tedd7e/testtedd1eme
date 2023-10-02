<?php
/* Smarty version 3.1.48, created on 2023-09-29 11:18:58
  from '/home/teddieme/tedd1eme/templates/tiki-wizard_admin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6516a492992422_96070493',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5ec0a0d1fc4522b7cf3391d4a8816739d582dca1' => 
    array (
      0 => '/home/teddieme/tedd1eme/templates/tiki-wizard_admin.tpl',
      1 => 1689085248,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:wizard/wizard_bar_admin.tpl' => 2,
  ),
),false)) {
function content_6516a492992422_96070493 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17138625466516a49298d747_13570625', "title");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1107821916516a49298e1a6_50881997', "content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout_plain.tpl");
}
/* {block "title"} */
class Block_17138625466516a49298d747_13570625 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_17138625466516a49298d747_13570625',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    
<?php
}
}
/* {/block "title"} */
/* {block "content"} */
class Block_1107821916516a49298e1a6_50881997 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1107821916516a49298e1a6_50881997',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<form action="tiki-wizard_admin.php" method="post">
    <div class="col-sm-12">
        <?php $_smarty_tpl->_subTemplateRender("file:wizard/wizard_bar_admin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>
    <hr>
    <div id="wizardBody">
        <div class="row">
        <?php if (!empty($_smarty_tpl->tpl_vars['wizard_toc']->value)) {?>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-header font-weight-bold adminWizardTOCTitle"><?php if ($_smarty_tpl->tpl_vars['useDefaultPrefs']->value) {?>Profiles Wizard<?php } elseif ($_smarty_tpl->tpl_vars['useChangesWizard']->value) {?>Changes Wizard<?php } else { ?>Configuration Wizard<?php }?> - steps:</div>
                    <?php echo $_smarty_tpl->tpl_vars['wizard_toc']->value;?>

                </div>
            </div>
        <?php }?>
            <div class="<?php if (!empty($_smarty_tpl->tpl_vars['wizard_toc']->value)) {?>col-sm-8<?php } else { ?>col-sm-12<?php }?>">
            <?php echo $_smarty_tpl->tpl_vars['wizardBody']->value;?>

            </div>
        </div>
    </div>
    <hr>
    <?php $_smarty_tpl->_subTemplateRender("file:wizard/wizard_bar_admin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
</form>
<?php
}
}
/* {/block "content"} */
}
