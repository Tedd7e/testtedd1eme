<?php
/* Smarty version 3.1.48, created on 2023-09-29 11:17:25
  from '/home/teddieme/tedd1eme/templates/admin/include_list_sections.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6516a435ebd518_43301886',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '69106076361774704e4aa35e5dd93a2afa2b011d' => 
    array (
      0 => '/home/teddieme/tedd1eme/templates/admin/include_list_sections.tpl',
      1 => 1689085248,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/version_check.tpl' => 1,
  ),
),false)) {
function content_6516a435ebd518_43301886 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/block.remarksbox.php','function'=>'smarty_block_remarksbox',),1=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/function.icon.php','function'=>'smarty_function_icon',),2=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/function.modulelist.php','function'=>'smarty_function_modulelist',),3=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/function.ticket.php','function'=>'smarty_function_ticket',),));
?>


<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>"tip",'title'=>"Tip"));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Tip"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    Enable/disable Tiki features in <a class="alert-link" href="tiki-admin.php?page=features">Control Panels&nbsp;<?php echo $_smarty_tpl->tpl_vars['prefs']->value['site_crumb_seper'];?>
&nbsp;Features</a>, but configure them elsewhere.
    <br/>
    See <strong>more options</strong> after you enable more <a class='alert-link' target='tikihelp' href='https://doc.tiki.org/Preference+Filters'>Preference Filters</a> above (<?php echo smarty_function_icon(array('name'=>"filter"),$_smarty_tpl);?>
).
<?php $_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Tip"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<?php if ($_smarty_tpl->tpl_vars['show_system_configuration_warning']->value) {?>
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>"warning",'title'=>"Warning"));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Warning"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    Tiki detected system configuration files with <strong>.ini</strong> extension, under the root folder of Tiki. It is recommended to change it to <strong>.ini.php</strong>.<br/>Check <strong><a href="https://doc.tiki.org/System-Configuration">https://doc.tiki.org/System-Configuration</a></strong> for examples.
    <?php $_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Warning"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}?>

<?php if ($_smarty_tpl->tpl_vars['prefs']->value['theme_unified_admin_backend'] == 'y') {?>
    <?php echo smarty_function_modulelist(array('zone'=>'admin','id'=>'admin_modules','class'=>'mb-3 d-flex flex-wrap justify-content-between admin_modules'),$_smarty_tpl);?>


    <a href="tiki-admin.php?ticket=<?php echo smarty_function_ticket(array('mode'=>'get'),$_smarty_tpl);?>
&profile=Unified_Admin_Backend_Default_Dashboard_1&show_details_for=Unified_Admin_Backend_Default_Dashboard_1&repository=http%3a%2f%2fprofiles.tiki.org%2fprofiles&page=profiles&preloadlist=y&list=List#step2" target="_blank" class="btn btn-secondary mb-3">
        Add default modules
    </a>

    <?php $_smarty_tpl->_subTemplateRender('file:admin/version_check.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
} else { ?>
    <div class="d-flex align-content-start flex-wrap">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['admin_icons']->value, 'info', false, 'page');
$_smarty_tpl->tpl_vars['info']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['page']->value => $_smarty_tpl->tpl_vars['info']->value) {
$_smarty_tpl->tpl_vars['info']->do_else = false;
?>
                <?php if ($_smarty_tpl->tpl_vars['info']->value['disabled']) {?>
                    <?php $_smarty_tpl->_assignInScope('class', "admbox advanced btn btn-primary disabled");?>
                <?php } else { ?>
                    <?php $_smarty_tpl->_assignInScope('class', "admbox basic btn btn-primary");?>
                <?php }?>
                    
                    <a href="<?php if ($_smarty_tpl->tpl_vars['info']->value['url']) {
echo $_smarty_tpl->tpl_vars['info']->value['url'];
} else { ?>tiki-admin.php?page=<?php echo $_smarty_tpl->tpl_vars['page']->value;
}?>" data-alt="<?php echo $_smarty_tpl->tpl_vars['info']->value['title'];?>
 <?php echo $_smarty_tpl->tpl_vars['info']->value['description'];?>
" class="<?php echo $_smarty_tpl->tpl_vars['class']->value;?>
 tips bottom slow <?php if ($_smarty_tpl->tpl_vars['info']->value['disabled']) {?>disabled-clickable<?php }?>" title="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['info']->value['title'] ));
if ($_smarty_tpl->tpl_vars['info']->value['disabled']) {?> (Disabled)<?php }?>|<?php echo $_smarty_tpl->tpl_vars['info']->value['description'];?>
">
                        <?php echo smarty_function_icon(array('name'=>"admin_".((string)$_smarty_tpl->tpl_vars['page']->value)),$_smarty_tpl);?>

                        <span class="title"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['info']->value['title'] ));?>
</span>
                    </a>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
<?php }
}
}
