<?php
/* Smarty version 3.1.48, created on 2023-09-29 11:17:29
  from '/home/teddieme/tedd1eme/templates/admin/include_anchors.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6516a439c06c76_21900136',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7efea9bb772397a5eea8a14a3892c19e67d7da6c' => 
    array (
      0 => '/home/teddieme/tedd1eme/templates/admin/include_anchors.tpl',
      1 => 1689085248,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6516a439c06c76_21900136 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/function.icon.php','function'=>'smarty_function_icon',),));
if ($_smarty_tpl->tpl_vars['prefs']->value['theme_unified_admin_backend'] == 'y') {?>
    <nav class="navbar-<?php echo $_smarty_tpl->tpl_vars['navbar_color_variant']->value;?>
 bg-<?php echo $_smarty_tpl->tpl_vars['navbar_color_variant']->value;?>

             d-flex align-items-start flex-column<?php if (!empty($_COOKIE['sidebar_collapsed'])) {?> narrow<?php }?>" role="navigation">
        <ul class="nav navbar-nav mb-auto" id="admin-menu">
            <li class="nav-item">
                <form method="post" class="form-inline my-2 my-md-0 ml-auto" role="form">
                    <div class="form-group row mx-0">
                        <input type="hidden" name="filters">
                        <div class="input-group">
                            <input type="text" name="lm_criteria" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['lm_criteria']->value ));?>
" class="form-control form-control-sm" placeholder="Search preferences...">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-primary btn-sm"<?php if ($_smarty_tpl->tpl_vars['indexNeedsRebuilding']->value) {?> class="tips" title="Configuration search|Note: The search index needs rebuilding, this will take a few minutes."<?php }?>><?php echo smarty_function_icon(array('name'=>"search"),$_smarty_tpl);?>
</button>
                            </div>
                        </div>
                    </div>
                </form>
            </li>
            <?php if (!empty($_REQUEST['page'])) {?>
                <li class="nav-item sections-header mt-2">
                    <a href="tiki-admin.php" class="tips right nav-link" title="Control Panels|Go back to or reload the Control Panels / Administration Dashboard">
                        <?php echo smarty_function_icon(array('name'=>'home','iclass'=>'fa-fw'),$_smarty_tpl);?>

                        <span>Admin Dashboard</span>
                    </a>
                </li>
            <?php }?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['admin_icons']->value, 'secInfo', false, 'section');
$_smarty_tpl->tpl_vars['secInfo']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['section']->value => $_smarty_tpl->tpl_vars['secInfo']->value) {
$_smarty_tpl->tpl_vars['secInfo']->do_else = false;
?>
                <li class="nav-item">
                    <a href="#" class="tips right nav-link icon collapse-toggle" data-toggle="collapse" data-target="#collapse<?php echo $_smarty_tpl->tpl_vars['section']->value;?>
"
                            title="<?php echo $_smarty_tpl->tpl_vars['secInfo']->value['title'];?>
|<?php echo $_smarty_tpl->tpl_vars['secInfo']->value['description'];?>
">
                        <?php echo smarty_function_icon(array('name'=>$_smarty_tpl->tpl_vars['secInfo']->value['icon'],'iclass'=>'fa-fw'),$_smarty_tpl);?>

                        <span><?php echo $_smarty_tpl->tpl_vars['secInfo']->value['title'];?>
</span>
                    </a>
                    <div class="collapse <?php if (!empty($_smarty_tpl->tpl_vars['secInfo']->value['selected'])) {?>show<?php }?>" id="collapse<?php echo $_smarty_tpl->tpl_vars['section']->value;?>
" data-parent="#admin-menu">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['secInfo']->value['children'], 'info', false, 'page');
$_smarty_tpl->tpl_vars['info']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['page']->value => $_smarty_tpl->tpl_vars['info']->value) {
$_smarty_tpl->tpl_vars['info']->do_else = false;
?>

                                <a href="<?php if (!empty($_smarty_tpl->tpl_vars['info']->value['url'])) {
echo $_smarty_tpl->tpl_vars['info']->value['url'];
} else { ?>tiki-admin.php?page=<?php echo $_smarty_tpl->tpl_vars['page']->value;
}?>"
                                        class="tips right icon dropdown-item<?php if (!empty($_smarty_tpl->tpl_vars['info']->value['selected'])) {?> active<?php }
if ($_smarty_tpl->tpl_vars['info']->value['disabled']) {?> item-disabled text-muted<?php }?>"
                                        data-alt="<?php echo $_smarty_tpl->tpl_vars['info']->value['title'];?>
 <?php echo $_smarty_tpl->tpl_vars['info']->value['description'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['info']->value['title'];?>
|<?php echo $_smarty_tpl->tpl_vars['info']->value['description'];?>
">
                                    <?php echo smarty_function_icon(array('name'=>"admin_".((string)$_smarty_tpl->tpl_vars['page']->value),'iclass'=>'fa-fw'),$_smarty_tpl);?>

                                    <span><?php echo $_smarty_tpl->tpl_vars['info']->value['title'];?>
</span>
                                </a>

                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </div>
                </li>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
        <div class="admin-menu-collapser">
            <?php if (!empty($_COOKIE['sidebar_collapsed'])) {?>
                <?php echo smarty_function_icon(array('name'=>'angle-double-right','title'=>'Collapse/expand this sidebar'),$_smarty_tpl);?>

            <?php } else { ?>
                <?php echo smarty_function_icon(array('name'=>'angle-double-left','title'=>'Collapse/expand this sidebar'),$_smarty_tpl);?>

            <?php }?>
        </div>
    </nav>
<?php } else { ?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['admin_icons']->value, 'info', false, 'page');
$_smarty_tpl->tpl_vars['info']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['page']->value => $_smarty_tpl->tpl_vars['info']->value) {
$_smarty_tpl->tpl_vars['info']->do_else = false;
?>
        <?php if (!$_smarty_tpl->tpl_vars['info']->value['disabled']) {?>
            <li>
                <a href="<?php if (!empty($_smarty_tpl->tpl_vars['info']->value['url'])) {
echo $_smarty_tpl->tpl_vars['info']->value['url'];
} else { ?>tiki-admin.php?page=<?php echo $_smarty_tpl->tpl_vars['page']->value;
}?>"
                        data-alt="<?php echo $_smarty_tpl->tpl_vars['info']->value['title'];?>
 <?php echo $_smarty_tpl->tpl_vars['info']->value['description'];?>
" class="tips bottom slow icon nav-link" title="<?php echo $_smarty_tpl->tpl_vars['info']->value['title'];?>
|<?php echo $_smarty_tpl->tpl_vars['info']->value['description'];?>
">
                    <?php echo smarty_function_icon(array('name'=>"admin_".((string)$_smarty_tpl->tpl_vars['page']->value)),$_smarty_tpl);?>

                    <?php echo $_smarty_tpl->tpl_vars['info']->value['title'];?>

                </a>
            </li>
        <?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
}
