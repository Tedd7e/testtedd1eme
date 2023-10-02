<?php
/* Smarty version 3.1.48, created on 2023-09-29 11:16:29
  from '/home/teddieme/tedd1eme/templates/module.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6516a3fd5fa761_43322153',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c4ea730e2fb4b5d9156e51cda162394eaf7a58dd' => 
    array (
      0 => '/home/teddieme/tedd1eme/templates/module.tpl',
      1 => 1689085248,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6516a3fd5fa761_43322153 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/teddieme/tedd1eme/vendor_bundled/vendor/smarty/smarty/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),1=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/function.ticket.php','function'=>'smarty_function_ticket',),2=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/function.icon.php','function'=>'smarty_function_icon',),3=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/block.remarksbox.php','function'=>'smarty_block_remarksbox',),));
?>


<?php if (!(isset($_smarty_tpl->tpl_vars['module_position']->value))) {
$_smarty_tpl->_assignInScope('module_position', '');
}
if (!(isset($_smarty_tpl->tpl_vars['module_ord']->value))) {
$_smarty_tpl->_assignInScope('module_ord', '');
}
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'name', null, null);
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( ((smarty_modifier_replace($_smarty_tpl->tpl_vars['module_name']->value,"+","_")).($_smarty_tpl->tpl_vars['module_position']->value)).($_smarty_tpl->tpl_vars['module_ord']->value) ));
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php if (!empty($_smarty_tpl->tpl_vars['module_params']->value['topclass'])) {?><div class="<?php echo $_smarty_tpl->tpl_vars['module_params']->value['topclass'];?>
"><?php }?>

<?php if ($_smarty_tpl->tpl_vars['module_nobox']->value != 'y') {
if (!(isset($_smarty_tpl->tpl_vars['moduleId']->value))) {
$_smarty_tpl->_assignInScope('moduleId', ' ');
}?>
<div id="module_<?php echo $_smarty_tpl->tpl_vars['moduleId']->value;?>
"
    class="card box-<?php echo $_smarty_tpl->tpl_vars['module_name']->value;
if ($_smarty_tpl->tpl_vars['module_type']->value == 'cssmenu') {?> cssmenubox<?php }?> module"<?php if (!empty($_smarty_tpl->tpl_vars['tpl_module_style']->value)) {?> style="<?php echo $_smarty_tpl->tpl_vars['tpl_module_style']->value;?>
"<?php }?>>
    <?php if ($_smarty_tpl->tpl_vars['module_decorations']->value != 'n') {?>
        <div class="card-header" <?php if (!empty($_smarty_tpl->tpl_vars['module_params']->value['bgcolor'])) {?> style="background-color:<?php echo $_smarty_tpl->tpl_vars['module_params']->value['bgcolor'];?>
;"<?php }?>>
            <?php if (($_smarty_tpl->tpl_vars['module_notitle']->value != 'y' && !empty($_smarty_tpl->tpl_vars['module_title']->value)) || ($_smarty_tpl->tpl_vars['module_flip']->value == 'y' && $_smarty_tpl->tpl_vars['prefs']->value['javascript_enabled'] != 'n') || $_smarty_tpl->tpl_vars['prefs']->value['menus_items_icons'] == 'y') {?>
                <h3 class="card-title clearfix">
                    <?php if ($_smarty_tpl->tpl_vars['module_notitle']->value != 'y' && !empty($_smarty_tpl->tpl_vars['module_title']->value)) {?>
                        <span class="moduletitle"><?php echo $_smarty_tpl->tpl_vars['module_title']->value;?>
</span>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['module_flip']->value == 'y' && $_smarty_tpl->tpl_vars['prefs']->value['javascript_enabled'] != 'n') {?>
                        <div class="moduleflip" id="moduleflip-<?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'name');?>
">
                            
                            <?php if ($_SERVER['SCRIPT_NAME'] == ($_smarty_tpl->tpl_vars['url_path']->value).('tiki-admin_modules.php')) {?>
                                <form action="tiki-admin_modules.php" method="post">
                                    <?php echo smarty_function_ticket(array(),$_smarty_tpl);?>

                                    <input type="hidden" name="unassign" value="<?php echo $_smarty_tpl->tpl_vars['moduleId']->value;?>
">
                                    <button type="submit" class="btn btn-link close text-danger" title="Unassign module">
                                        <?php echo smarty_function_icon(array('name'=>"remove"),$_smarty_tpl);?>

                                    </button>
                                </form>
                                <a href="#" title="Edit module" class="close" style="font-size: 16px" onclick="$(this).parents('.module:first').dblclick();">
                                    <?php echo smarty_function_icon(array('name'=>"edit"),$_smarty_tpl);?>

                                </a>
                            <?php }?>
                            <a title="Toggle module contents" class="flipmodtitle close"
                                 href="javascript:icntoggle('mod-<?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'name');?>
','module.png');">
                                <?php echo smarty_function_icon(array('id'=>("icnmod-").($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'name')),'class'=>"flipmodimage",'name'=>"bars",'alt'=>"[Toggle]"),$_smarty_tpl);?>

                            </a>
                        </div>
                    <?php }?>
                </h3>
            <?php }?>
        </div>
    <?php } elseif ($_smarty_tpl->tpl_vars['module_notitle']->value != 'y') {?>
    <?php if ($_smarty_tpl->tpl_vars['module_flip']->value == 'y' && $_smarty_tpl->tpl_vars['prefs']->value['javascript_enabled'] != 'n') {?>
    <h3 class="card-title"
         ondblclick="javascript:icntoggle('mod-<?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'name');?>
','module.png');"<?php if (!empty($_smarty_tpl->tpl_vars['module_params']->value['color'])) {?> style="color:<?php echo $_smarty_tpl->tpl_vars['module_params']->value['color'];?>
;"<?php }?>>
        <?php } else { ?>
        <h3 class="card-title"<?php if (!empty($_smarty_tpl->tpl_vars['module_params']->value['color'])) {?> style="color:<?php echo $_smarty_tpl->tpl_vars['module_params']->value['color'];?>
;"<?php }?>>
            <?php }?>
            <?php echo $_smarty_tpl->tpl_vars['module_title']->value;?>

            <?php if ($_smarty_tpl->tpl_vars['module_flip']->value == 'y' && $_smarty_tpl->tpl_vars['prefs']->value['javascript_enabled'] != 'n') {?>
                <div class="moduleflip" id="moduleflip-<?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'name');?>
">
                    
                    <?php if ($_SERVER['SCRIPT_NAME'] == ($_smarty_tpl->tpl_vars['url_path']->value).('tiki-admin_modules.php')) {?>
                        <form action="tiki-admin_modules.php" method="post">
                            <?php echo smarty_function_ticket(array(),$_smarty_tpl);?>

                            <input type="hidden" name="unassign" value="<?php echo $_smarty_tpl->tpl_vars['moduleId']->value;?>
">
                            <button type="submit" class="btn btn-link close" title="Unassign module">
                                <?php echo smarty_function_icon(array('name'=>"remove"),$_smarty_tpl);?>

                            </button>
                        </form>
                        <a href="#" title="Edit module" class="close" style="font-size: 16px" onclick="$(this).parents('.module:first').dblclick();">
                            <?php echo smarty_function_icon(array('name'=>"edit"),$_smarty_tpl);?>

                        </a>
                    <?php }?>
                    <a title="Toggle module contents" class="flipmodtitle"
                         href="javascript:icntoggle('mod-<?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'name');?>
','module.png');">
                        <?php echo smarty_function_icon(array('id'=>("icnmod-").($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'name')),'class'=>"flipmodimage",'name'=>"module",'alt'=>"[Toggle]"),$_smarty_tpl);?>

                    </a>
                </div>
            <?php }?>
        </h3>
        <?php }?>
        <div id="mod-<?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'name');?>
"
             style="display: <?php if ((!(isset($_smarty_tpl->tpl_vars['module_display']->value)) || $_smarty_tpl->tpl_vars['module_display']->value) && (!(isset($_smarty_tpl->tpl_vars['module_dstate']->value)) || $_smarty_tpl->tpl_vars['module_dstate']->value == 'o')) {?>block<?php } else { ?>none<?php }?>;<?php echo $_smarty_tpl->tpl_vars['module_params']->value['style'];?>
"
             class="clearfix card-body<?php if (!empty($_smarty_tpl->tpl_vars['module_params']->value['class'])) {?> <?php echo $_smarty_tpl->tpl_vars['module_params']->value['class'];
}?>">
            <?php } else { ?>
            <div id="module_<?php echo $_smarty_tpl->tpl_vars['moduleId']->value;?>
" style="<?php echo $_smarty_tpl->tpl_vars['module_params']->value['style'];
echo $_smarty_tpl->tpl_vars['tpl_module_style']->value;?>
"
                 class="module<?php if (!empty($_smarty_tpl->tpl_vars['module_params']->value['class'])) {?> <?php echo $_smarty_tpl->tpl_vars['module_params']->value['class'];
}?> box-<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
">
                <div id="mod-<?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'name');?>
">
                    <?php }?>
                    <?php echo $_smarty_tpl->tpl_vars['module_content']->value;?>

                    <?php if ($_smarty_tpl->tpl_vars['module_error']->value) {?>
                        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>"warning",'title'=>"Error"));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Error"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                        <?php echo $_smarty_tpl->tpl_vars['module_error']->value;?>

                        <?php $_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Error"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['module_nobox']->value != 'y') {?>
                </div>
                
                <?php if ($_smarty_tpl->tpl_vars['user']->value && $_smarty_tpl->tpl_vars['prefs']->value['user_assigned_modules'] == 'y' && $_smarty_tpl->tpl_vars['prefs']->value['feature_modulecontrols'] == 'y' && ($_smarty_tpl->tpl_vars['module_position']->value === 'left' || $_smarty_tpl->tpl_vars['module_position']->value === 'right')) {?>
                    <form action="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['current_location']->value ));?>
" method="post" class="modcontrols">
                        <?php echo smarty_function_ticket(array(),$_smarty_tpl);?>

                        <input type="hidden" name="redirect" value="1">
                        <div>
                            <button
                                type="submit"
                                name="mc_up"
                                value="<?php echo $_smarty_tpl->tpl_vars['moduleId']->value;?>
"
                                class="tips btn btn-link"
                                title=":Move up"
                            >
                                <?php echo smarty_function_icon(array('name'=>"up"),$_smarty_tpl);?>

                            </button>
                            <button
                                type="submit"
                                name="mc_down"
                                value="<?php echo $_smarty_tpl->tpl_vars['moduleId']->value;?>
"
                                class="tips btn btn-link"
                                title=":Move down"
                            >
                                <?php echo smarty_function_icon(array('name'=>"down"),$_smarty_tpl);?>

                            </button>
                            <button
                                type="submit"
                                name="mc_move"
                                value="<?php echo $_smarty_tpl->tpl_vars['moduleId']->value;?>
"
                                class="tips btn btn-link"
                                title=":Move to opposite side"
                            >
                                <?php echo smarty_function_icon(array('name'=>"move"),$_smarty_tpl);?>

                            </button>
                            <button
                                type="submit"
                                name="mc_unassign"
                                value="<?php echo $_smarty_tpl->tpl_vars['moduleId']->value;?>
"
                                class="tips btn btn-link"
                                title=":Unassign"
                            >
                                <?php echo smarty_function_icon(array('name'=>"remove"),$_smarty_tpl);?>

                            </button>
                        </div>
                    </form>
                <?php }?>
                <div class="card-footer"></div> 
            </div>
            <?php } else { ?>
            
            <?php if ($_smarty_tpl->tpl_vars['user']->value && $_smarty_tpl->tpl_vars['prefs']->value['user_assigned_modules'] == 'y' && $_smarty_tpl->tpl_vars['prefs']->value['feature_modulecontrols'] == 'y' && ($_smarty_tpl->tpl_vars['module_position']->value === 'left' || $_smarty_tpl->tpl_vars['module_position']->value === 'right')) {?>
                <form action="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['current_location']->value ));?>
" method="post" class="modcontrols">
                    <input type="hidden" name="redirect" value="1">
                    <div>
                        <button
                            type="submit"
                            name="mc_up"
                            value="<?php echo $_smarty_tpl->tpl_vars['moduleId']->value;?>
"
                            class="tips btn btn-link"
                            title=":Move up"
                        >
                            <?php echo smarty_function_icon(array('name'=>"up"),$_smarty_tpl);?>

                        </button>
                        <button
                            type="submit"
                            name="mc_down"
                            value="<?php echo $_smarty_tpl->tpl_vars['moduleId']->value;?>
"
                            class="tips btn btn-link"
                            title=":Move down"
                        >
                            <?php echo smarty_function_icon(array('name'=>"down"),$_smarty_tpl);?>

                        </button>
                        <button
                            type="submit"
                            name="mc_move"
                            value="<?php echo $_smarty_tpl->tpl_vars['moduleId']->value;?>
"
                            class="tips btn btn-link"
                            title=":Move to opposite side"
                        >
                            <?php echo smarty_function_icon(array('name'=>"move"),$_smarty_tpl);?>

                        </button>
                        <button
                            type="submit"
                            name="mc_unassign"
                            value="<?php echo $_smarty_tpl->tpl_vars['moduleId']->value;?>
"
                            class="tips btn btn-link"
                            title=":Unassign"
                        >
                            <?php echo smarty_function_icon(array('name'=>"remove"),$_smarty_tpl);?>

                        </button>
                    </div>
                </form>
            <?php }?>
        </div>
</div>
<?php }?>

<?php if (!empty($_smarty_tpl->tpl_vars['module_params']->value['topclass'])) {?></div><?php }
}
}
