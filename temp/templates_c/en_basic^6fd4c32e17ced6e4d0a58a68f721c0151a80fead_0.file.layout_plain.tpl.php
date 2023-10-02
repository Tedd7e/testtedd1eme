<?php
/* Smarty version 3.1.48, created on 2023-09-29 11:18:58
  from '/home/teddieme/tedd1eme/templates/layouts/layout_plain.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6516a4929a09a9_43846758',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6fd4c32e17ced6e4d0a58a68f721c0151a80fead' => 
    array (
      0 => '/home/teddieme/tedd1eme/templates/layouts/layout_plain.tpl',
      1 => 1689085248,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:layout_fullscreen_check.tpl' => 1,
    'file:tiki-ajax_header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6516a4929a09a9_43846758 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/function.html_body_attributes.php','function'=>'smarty_function_html_body_attributes',),1=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/function.modulelist.php','function'=>'smarty_function_modulelist',),2=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/function.feedback.php','function'=>'smarty_function_feedback',),));
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="<?php if (!empty($_smarty_tpl->tpl_vars['pageLang']->value)) {
echo $_smarty_tpl->tpl_vars['pageLang']->value;
} else {
echo $_smarty_tpl->tpl_vars['prefs']->value['language'];
}?>"<?php if (!empty($_smarty_tpl->tpl_vars['page_id']->value)) {?> id="page_<?php echo $_smarty_tpl->tpl_vars['page_id']->value;?>
"<?php }?>>
    <head>
        <?php $_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body<?php echo smarty_function_html_body_attributes(array(),$_smarty_tpl);?>
>
        <?php echo $_smarty_tpl->tpl_vars['cookie_consent_html']->value;?>


        <?php $_smarty_tpl->_subTemplateRender("file:layout_fullscreen_check.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_ajax'] == 'y') {?>
            <?php $_smarty_tpl->_subTemplateRender('file:tiki-ajax_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php }?>

        <div class="container<?php if ($_SESSION['fullscreen'] == 'y') {?>-fluid<?php }?> container-std middle" id="middle">
<?php if (!(isset($_SESSION['fullscreen'])) || $_SESSION['fullscreen'] != 'y') {?>
            <div class="row">
                <header class="page-header w-100" id="page-header">
                    <?php echo smarty_function_modulelist(array('zone'=>'top','class'=>'top_modules d-flex justify-content-between'),$_smarty_tpl);?>

                </header>
            </div>
<?php }?>
            <div class="row">
                <div class="col-md-12">
                    <?php echo smarty_function_modulelist(array('zone'=>'topbar'),$_smarty_tpl);?>

                </div>
            </div>

            <div class="row">
                <div class="col-md-12" id="col1">
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10784323776516a49299c835_21270612', 'title');
?>

                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1380857846516a49299cff9_31967351', 'navigation');
?>

                    <?php echo smarty_function_feedback(array(),$_smarty_tpl);?>

                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2365694446516a49299dc28_84893368', 'content');
?>

                </div>
            </div>

            <div class="row">
                <div class="col-md-12 well">
                    <?php echo smarty_function_modulelist(array('zone'=>'bottom'),$_smarty_tpl);?>

                </div>
            </div>
        </div>

        <?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </body>
</html>
<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_debug_console'] == 'y' && !empty($_REQUEST['show_smarty_debug'])) {?>
    <?php $_smarty_debug = new Smarty_Internal_Debug;
 $_smarty_debug->display_debug($_smarty_tpl);
unset($_smarty_debug);
}
}
/* {block 'title'} */
class Block_10784323776516a49299c835_21270612 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_10784323776516a49299c835_21270612',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'title'} */
/* {block 'navigation'} */
class Block_1380857846516a49299cff9_31967351 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'navigation' => 
  array (
    0 => 'Block_1380857846516a49299cff9_31967351',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'navigation'} */
/* {block 'content'} */
class Block_2365694446516a49299dc28_84893368 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_2365694446516a49299dc28_84893368',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'content'} */
}
