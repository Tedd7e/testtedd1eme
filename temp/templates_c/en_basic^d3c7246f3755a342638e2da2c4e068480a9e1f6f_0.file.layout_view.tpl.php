<?php
/* Smarty version 3.1.48, created on 2023-09-29 11:16:29
  from '/home/teddieme/tedd1eme/templates/layouts/basic/layout_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6516a3fd4fa0b8_79190058',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd3c7246f3755a342638e2da2c4e068480a9e1f6f' => 
    array (
      0 => '/home/teddieme/tedd1eme/templates/layouts/basic/layout_view.tpl',
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
    'file:../../../templates/pwa/pwa.tpl' => 1,
  ),
),false)) {
function content_6516a3fd4fa0b8_79190058 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/function.html_body_attributes.php','function'=>'smarty_function_html_body_attributes',),1=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/function.modulelist.php','function'=>'smarty_function_modulelist',),2=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/function.feedback.php','function'=>'smarty_function_feedback',),3=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/function.icon.php','function'=>'smarty_function_icon',),));
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
}?>

<div class="container<?php if ((isset($_SESSION['fullscreen'])) && $_SESSION['fullscreen'] == 'y') {?>-fluid<?php }?> container-std">
<?php if (!(isset($_SESSION['fullscreen'])) || $_SESSION['fullscreen'] != 'y') {?>
    <div class="row">
    <header class="page-header w-100" id="page-header">
        <?php echo smarty_function_modulelist(array('zone'=>'top','class'=>"top_modules d-flex justify-content-between navbar-".((string)$_smarty_tpl->tpl_vars['navbar_color_variant']->value)."-parent bg-".((string)$_smarty_tpl->tpl_vars['navbar_color_variant']->value)."-parent"),$_smarty_tpl);?>

    </header>
    </div>
<?php }?>

    <div class="row row-middle" id="row-middle">
        <?php echo smarty_function_modulelist(array('zone'=>'topbar','class'=>"topbar_modules d-flex justify-content-between topbar navbar-".((string)$_smarty_tpl->tpl_vars['navbar_color_variant']->value)." bg-".((string)$_smarty_tpl->tpl_vars['navbar_color_variant']->value)." w-100 mb-sm"),$_smarty_tpl);?>


        <?php if ((zone_is_empty('left') || $_smarty_tpl->tpl_vars['prefs']->value['feature_left_column'] == 'n') && (zone_is_empty('right') || $_smarty_tpl->tpl_vars['prefs']->value['feature_right_column'] == 'n')) {?>
            <div class="col col1 col-md-12 pb-4" id="col1">
                <?php if ($_smarty_tpl->tpl_vars['prefs']->value['module_zones_pagetop'] == 'fixed' || ($_smarty_tpl->tpl_vars['prefs']->value['module_zones_pagetop'] != 'n' && !zone_is_empty('pagetop'))) {?>
                    <?php echo smarty_function_modulelist(array('zone'=>'pagetop'),$_smarty_tpl);?>

                <?php }?>
                <?php echo smarty_function_feedback(array(),$_smarty_tpl);?>

                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5114505426516a3fd4cfbd0_23314592', 'quicknav');
?>

                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19555918496516a3fd4d0433_06975003', 'title');
?>

                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13499376506516a3fd4d0b41_27106599', 'navigation');
?>

                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2429023376516a3fd4d11f1_53303373', 'content');
?>

                <?php if ($_smarty_tpl->tpl_vars['prefs']->value['module_zones_pagebottom'] == 'fixed' || ($_smarty_tpl->tpl_vars['prefs']->value['module_zones_pagebottom'] != 'n' && !zone_is_empty('pagebottom'))) {?>
                    <?php echo smarty_function_modulelist(array('zone'=>'pagebottom','class'=>'mt-3'),$_smarty_tpl);?>

                <?php }?>
            </div>
        <?php } elseif (zone_is_empty('left') || $_smarty_tpl->tpl_vars['prefs']->value['feature_left_column'] == 'n') {?>
            <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_right_column'] == 'user') {?>
                <div class="col-md-12 side-col-toggle-container justify-content-end">
                    <?php $_smarty_tpl->_assignInScope('icon_name', !empty($_COOKIE['hide_zone_right']) ? 'toggle-left' : 'toggle-right');?>
                    <?php echo smarty_function_icon(array('name'=>$_smarty_tpl->tpl_vars['icon_name']->value,'class'=>'toggle_zone right','href'=>'#','title'=>'Toggle right modules'),$_smarty_tpl);?>

                </div>
            <?php }?>
        <div class="d-flex w-100 flex-row flex-wrap">
            <div class="col col1 col-md-12 col-lg-9 <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_fixed_width'] != 'y') {?>col-xl-10<?php }?> pb-4" id="col1">
                <?php if ($_smarty_tpl->tpl_vars['prefs']->value['module_zones_pagetop'] == 'fixed' || ($_smarty_tpl->tpl_vars['prefs']->value['module_zones_pagetop'] != 'n' && !zone_is_empty('pagetop'))) {?>
                    <?php echo smarty_function_modulelist(array('zone'=>'pagetop'),$_smarty_tpl);?>

                <?php }?>
                <?php echo smarty_function_feedback(array(),$_smarty_tpl);?>

                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2723156186516a3fd4ddef6_77606650', 'quicknav');
?>

                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10554900006516a3fd4dea98_53430719', 'title');
?>

                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19450243016516a3fd4df408_46894459', 'navigation');
?>

                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10050475126516a3fd4dfbe8_08514091', 'content');
?>

                <?php if ($_smarty_tpl->tpl_vars['prefs']->value['module_zones_pagebottom'] == 'fixed' || ($_smarty_tpl->tpl_vars['prefs']->value['module_zones_pagebottom'] != 'n' && !zone_is_empty('pagebottom'))) {?>
                    <?php echo smarty_function_modulelist(array('zone'=>'pagebottom','class'=>'mt-3'),$_smarty_tpl);?>

                <?php }?>
            </div>
            <div class="col col3 col-md-12 col-lg-3 <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_fixed_width'] != 'y') {?>col-xl-2<?php }?>" id="col3">
                <?php echo smarty_function_modulelist(array('zone'=>'right'),$_smarty_tpl);?>

            </div>
        </div>
        <?php } elseif (zone_is_empty('right') || $_smarty_tpl->tpl_vars['prefs']->value['feature_right_column'] == 'n') {?>
            <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_left_column'] == 'user') {?>
                <div class="col-md-12 side-col-toggle-container justify-content-start">
                    <?php $_smarty_tpl->_assignInScope('icon_name', !empty($_COOKIE['hide_zone_left']) ? 'toggle-right' : 'toggle-left');?>
                    <?php echo smarty_function_icon(array('name'=>$_smarty_tpl->tpl_vars['icon_name']->value,'class'=>'toggle_zone left','href'=>'#','title'=>'Toggle left modules'),$_smarty_tpl);?>

                </div>
            <?php }?>
            <div class="col col1 col-md-12 col-lg-9 <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_fixed_width'] != 'y') {?>col-xl-10<?php }?> order-md-1 order-lg-2 pb-4" id="col1">
                <?php if ($_smarty_tpl->tpl_vars['prefs']->value['module_zones_pagetop'] == 'fixed' || ($_smarty_tpl->tpl_vars['prefs']->value['module_zones_pagetop'] != 'n' && !zone_is_empty('pagetop'))) {?>
                    <?php echo smarty_function_modulelist(array('zone'=>'pagetop'),$_smarty_tpl);?>

                <?php }?>
                <?php echo smarty_function_feedback(array(),$_smarty_tpl);?>

                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10104511756516a3fd4e7620_40857626', 'quicknav');
?>

                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3096699476516a3fd4e7c03_12180803', 'title');
?>

                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19363197896516a3fd4e8121_48447746', 'navigation');
?>

                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2287797286516a3fd4e8721_94594859', 'content');
?>

                <?php if ($_smarty_tpl->tpl_vars['prefs']->value['module_zones_pagebottom'] == 'fixed' || ($_smarty_tpl->tpl_vars['prefs']->value['module_zones_pagebottom'] != 'n' && !zone_is_empty('pagebottom'))) {?>
                    <?php echo smarty_function_modulelist(array('zone'=>'pagebottom','class'=>'mt-3'),$_smarty_tpl);?>

                <?php }?>
            </div>
            <div class="col col2 col-md-12 col-lg-3 <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_fixed_width'] != 'y') {?>col-xl-2<?php }?> order-sm-2 order-md-2 order-lg-1" id="col2">
                <?php echo smarty_function_modulelist(array('zone'=>'left'),$_smarty_tpl);?>

            </div>
        <?php } else { ?>
            <div class="col-sm-12 side-col-toggle-container d-flex">
            <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_left_column'] == 'user') {?>
                <div class="text-left side-col-toggle flex-fill">
                    <?php $_smarty_tpl->_assignInScope('icon_name', !empty($_COOKIE['hide_zone_left']) ? 'toggle-right' : 'toggle-left');?>
                    <?php echo smarty_function_icon(array('name'=>$_smarty_tpl->tpl_vars['icon_name']->value,'class'=>'toggle_zone left','href'=>'#','title'=>'Toggle left modules'),$_smarty_tpl);?>

                </div>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_right_column'] == 'user') {?>
                <div class="text-right side-col-toggle flex-fill">
                    <?php $_smarty_tpl->_assignInScope('icon_name', !empty($_COOKIE['hide_zone_right']) ? 'toggle-left' : 'toggle-right');?>
                    <?php echo smarty_function_icon(array('name'=>$_smarty_tpl->tpl_vars['icon_name']->value,'class'=>'toggle_zone right','href'=>'#','title'=>'Toggle right modules'),$_smarty_tpl);?>

                </div>
            <?php }?>
            </div>

            <div class="col col1 col-sm-12 col-lg-8 order-xs-1 order-lg-2 pb-4" id="col1">
                <?php if ($_smarty_tpl->tpl_vars['prefs']->value['module_zones_pagetop'] == 'fixed' || ($_smarty_tpl->tpl_vars['prefs']->value['module_zones_pagetop'] != 'n' && !zone_is_empty('pagetop'))) {?>
                    <?php echo smarty_function_modulelist(array('zone'=>'pagetop'),$_smarty_tpl);?>

                <?php }?>
                <?php echo smarty_function_feedback(array(),$_smarty_tpl);?>

                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4532771576516a3fd4f0a95_20334833', 'quicknav');
?>

                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19970694046516a3fd4f1073_35808911', 'title');
?>

                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7480645716516a3fd4f1589_88990186', 'navigation');
?>

                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2153757376516a3fd4f1a61_29070070', 'content');
?>

                <?php if ($_smarty_tpl->tpl_vars['prefs']->value['module_zones_pagebottom'] == 'fixed' || ($_smarty_tpl->tpl_vars['prefs']->value['module_zones_pagebottom'] != 'n' && !zone_is_empty('pagebottom'))) {?>
                    <?php echo smarty_function_modulelist(array('zone'=>'pagebottom','class'=>'mt-3'),$_smarty_tpl);?>

                <?php }?>
            </div>
            <div class="col col2 col-sm-6 col-lg-2 order-md-2 order-lg-1" id="col2">
                <?php echo smarty_function_modulelist(array('zone'=>'left'),$_smarty_tpl);?>

            </div>
            <div class="col col3 col-sm-6 col-lg-2 order-md-3" id="col3">
                <?php echo smarty_function_modulelist(array('zone'=>'right'),$_smarty_tpl);?>

            </div>
        <?php }?>
    </div>

<?php if (!(isset($_SESSION['fullscreen'])) || $_SESSION['fullscreen'] != 'y') {?>
    <footer class="row footer main-footer" id="footer">
        <div class="footer_liner w-100">
            <?php echo smarty_function_modulelist(array('zone'=>'bottom','class'=>'bottom_modules p-3 mx-0'),$_smarty_tpl);?>

        </div>
    </footer>
<?php }?>
</div>
<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php if (((isset($_smarty_tpl->tpl_vars['pagespwa']->value)))) {?>
    <?php $_smarty_tpl->_subTemplateRender('file:../../../templates/pwa/pwa.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}?>
</body>
</html>
<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_debug_console'] == 'y' && !empty($_REQUEST['show_smarty_debug'])) {?>
    <?php $_smarty_debug = new Smarty_Internal_Debug;
 $_smarty_debug->display_debug($_smarty_tpl);
unset($_smarty_debug);
}
}
/* {block 'quicknav'} */
class Block_5114505426516a3fd4cfbd0_23314592 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'quicknav' => 
  array (
    0 => 'Block_5114505426516a3fd4cfbd0_23314592',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'quicknav'} */
/* {block 'title'} */
class Block_19555918496516a3fd4d0433_06975003 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_19555918496516a3fd4d0433_06975003',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'title'} */
/* {block 'navigation'} */
class Block_13499376506516a3fd4d0b41_27106599 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'navigation' => 
  array (
    0 => 'Block_13499376506516a3fd4d0b41_27106599',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'navigation'} */
/* {block 'content'} */
class Block_2429023376516a3fd4d11f1_53303373 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_2429023376516a3fd4d11f1_53303373',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'content'} */
/* {block 'quicknav'} */
class Block_2723156186516a3fd4ddef6_77606650 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'quicknav' => 
  array (
    0 => 'Block_2723156186516a3fd4ddef6_77606650',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'quicknav'} */
/* {block 'title'} */
class Block_10554900006516a3fd4dea98_53430719 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_10554900006516a3fd4dea98_53430719',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'title'} */
/* {block 'navigation'} */
class Block_19450243016516a3fd4df408_46894459 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'navigation' => 
  array (
    0 => 'Block_19450243016516a3fd4df408_46894459',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'navigation'} */
/* {block 'content'} */
class Block_10050475126516a3fd4dfbe8_08514091 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_10050475126516a3fd4dfbe8_08514091',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'content'} */
/* {block 'quicknav'} */
class Block_10104511756516a3fd4e7620_40857626 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'quicknav' => 
  array (
    0 => 'Block_10104511756516a3fd4e7620_40857626',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'quicknav'} */
/* {block 'title'} */
class Block_3096699476516a3fd4e7c03_12180803 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_3096699476516a3fd4e7c03_12180803',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'title'} */
/* {block 'navigation'} */
class Block_19363197896516a3fd4e8121_48447746 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'navigation' => 
  array (
    0 => 'Block_19363197896516a3fd4e8121_48447746',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'navigation'} */
/* {block 'content'} */
class Block_2287797286516a3fd4e8721_94594859 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_2287797286516a3fd4e8721_94594859',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'content'} */
/* {block 'quicknav'} */
class Block_4532771576516a3fd4f0a95_20334833 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'quicknav' => 
  array (
    0 => 'Block_4532771576516a3fd4f0a95_20334833',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'quicknav'} */
/* {block 'title'} */
class Block_19970694046516a3fd4f1073_35808911 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_19970694046516a3fd4f1073_35808911',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'title'} */
/* {block 'navigation'} */
class Block_7480645716516a3fd4f1589_88990186 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'navigation' => 
  array (
    0 => 'Block_7480645716516a3fd4f1589_88990186',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'navigation'} */
/* {block 'content'} */
class Block_2153757376516a3fd4f1a61_29070070 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_2153757376516a3fd4f1a61_29070070',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'content'} */
}
