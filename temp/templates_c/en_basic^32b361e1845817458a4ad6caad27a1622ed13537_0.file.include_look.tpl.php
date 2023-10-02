<?php
/* Smarty version 3.1.48, created on 2023-09-29 11:19:08
  from '/home/teddieme/tedd1eme/templates/admin/include_look.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6516a49c4c22c5_16159166',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '32b361e1845817458a4ad6caad27a1622ed13537' => 
    array (
      0 => '/home/teddieme/tedd1eme/templates/admin/include_look.tpl',
      1 => 1689085248,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/include_apply_top.tpl' => 1,
    'file:admin/include_apply_bottom.tpl' => 1,
  ),
),false)) {
function content_6516a49c4c22c5_16159166 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/function.ticket.php','function'=>'smarty_function_ticket',),1=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/function.button.php','function'=>'smarty_function_button',),2=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/block.tabset.php','function'=>'smarty_block_tabset',),3=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/block.tab.php','function'=>'smarty_block_tab',),4=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/function.preference.php','function'=>'smarty_function_preference',),5=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/function.icon.php','function'=>'smarty_function_icon',),6=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/block.jq.php','function'=>'smarty_block_jq',),7=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/block.tr.php','function'=>'smarty_block_tr',),));
?>

<form action="tiki-admin.php?page=look" id="look" name="look" class="labelColumns admin" method="post">
    <?php echo smarty_function_ticket(array(),$_smarty_tpl);?>

    <div class="t_navbar mb-4 clearfix">
        <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_theme_control'] == 'y') {?>
            <?php echo smarty_function_button(array('_text'=>"Theme Control",'href'=>"tiki-theme_control.php",'_class'=>"btn-sm btn-link tikihelp",'_icon_name'=>"file-image-o"),$_smarty_tpl);?>

        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_editcss'] == 'y' && $_smarty_tpl->tpl_vars['tiki_p_create_css']->value == 'y') {?>
            <?php echo smarty_function_button(array('_text'=>"Edit CSS",'_class'=>"btn-sm",'href'=>"tiki-edit_css.php"),$_smarty_tpl);?>

        <?php }?>
        <?php $_smarty_tpl->_subTemplateRender('file:admin/include_apply_top.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tabset', array('name'=>"admin_look"));
$_block_repeat=true;
echo smarty_block_tabset(array('name'=>"admin_look"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tab', array('name'=>"Theme"));
$_block_repeat=true;
echo smarty_block_tab(array('name'=>"Theme"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <br>
            <legend>Main theme</legend>
            <div class="row">
                <div class="col-md-8 adminoptionbox">
                    <?php echo smarty_function_preference(array('name'=>'theme'),$_smarty_tpl);?>

                    <div class="adminoptionbox theme_childcontainer custom_url">
                        <?php echo smarty_function_preference(array('name'=>'theme_custom_url'),$_smarty_tpl);?>

                    </div>
                    <?php echo smarty_function_preference(array('name'=>'theme_option'),$_smarty_tpl);?>

                    <?php echo smarty_function_preference(array('name'=>'theme_option_includes_main'),$_smarty_tpl);?>

                    <?php echo smarty_function_preference(array('name'=>'theme_navbar_color_variant'),$_smarty_tpl);?>

                    <?php echo smarty_function_preference(array('name'=>'theme_navbar_fixed_topbar_offset'),$_smarty_tpl);?>

                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body text-center">
                        <?php if ($_smarty_tpl->tpl_vars['thumbfile']->value) {?>
                            <img src="<?php echo $_smarty_tpl->tpl_vars['thumbfile']->value;?>
" class="img-fluid" alt="Theme Screenshot" id="theme_thumb">
                        <?php } else { ?>
                            <span><?php echo smarty_function_icon(array('name'=>"image"),$_smarty_tpl);?>
</span>
                        <?php }?>
                        </div>
                    </div>
                </div>
            </div>
            <?php echo smarty_function_preference(array('name'=>'change_theme'),$_smarty_tpl);?>

            <div class="adminoptionboxchild" id="change_theme_childcontainer">
                <?php echo smarty_function_preference(array('name'=>'available_themes'),$_smarty_tpl);?>

            </div>

            
            <div class="adminoptionbox preference clearfix basic feature_fixed_width all" style="">
                <div class="adminoption form-group row">
                    <label class="col-sm-4">
                        Fixed width
                    </label>
                    <div class="col-sm-8">
                        <div class="form-check">
                            <input id="dummy_pref-25" class="form-check-input" type="checkbox" name="dummy_feature_fixed_width" <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_fixed_width'] == 'y') {?> checked="checked"<?php }?> >
                            <a class="tikihelp text-info" title="Fixed width:Restrict the width of the site content area, in contrast to a liquid (full-width) layout." >
                                <span class="icon icon-information fas fa-info-circle "></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('jq', array());
$_block_repeat=true;
echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                $('input[name=dummy_feature_fixed_width]').click(function(){
                    /* get value of dummy_feature_fixed_width */
                    var dummy = $(this).is(":checked");
                    /* Synchronize with dummy checkbox and trigger display of child option */
                    $('input[name=feature_fixed_width]').prop('checked', dummy).change();
                });

                $('input[name=feature_fixed_width]').click(function(){
                    /* get value of feature_fixed_width */
                    var real = $(this).is(":checked");
                    /* Synchronize with dummy checkbox display */
                    $('input[name=dummy_feature_fixed_width]').prop('checked', real);
                });
            <?php $_block_repeat=false;
echo smarty_block_jq(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            <?php echo smarty_function_preference(array('name'=>'useGroupTheme'),$_smarty_tpl);?>

            <hr>

            <legend>Admin theme</legend>
            <div class="adminoptionbox">
                <?php echo smarty_function_preference(array('name'=>'theme_unified_admin_backend'),$_smarty_tpl);?>

                <?php echo smarty_function_preference(array('name'=>'theme_admin'),$_smarty_tpl);?>

                <?php echo smarty_function_preference(array('name'=>'theme_option_admin'),$_smarty_tpl);?>

                <?php echo smarty_function_preference(array('name'=>'theme_navbar_color_variant_admin'),$_smarty_tpl);?>

            </div>
            <hr>

            <legend>Other</legend>
            <?php echo smarty_function_preference(array('name'=>'theme_iconset'),$_smarty_tpl);?>

            <?php if ($_smarty_tpl->tpl_vars['prefs']->value['javascript_enabled'] == 'n' || $_smarty_tpl->tpl_vars['prefs']->value['feature_jquery'] == 'n') {?>
                
                <input type="submit" class="btn btn-primary btn-sm" name="changestyle" value="Go">
            <?php }?>
            <div class="adminoptionbox">
                <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_jquery_ui'] == 'y') {?>
                    <?php echo smarty_function_preference(array('name'=>'feature_jquery_ui_theme'),$_smarty_tpl);?>

                <?php }?>
            </div>
            <?php echo smarty_function_preference(array('name'=>'feature_theme_control'),$_smarty_tpl);?>

            <div class="adminoptionboxchild" id="feature_theme_control_childcontainer">
                <?php echo smarty_function_preference(array('name'=>'feature_theme_control_savesession'),$_smarty_tpl);?>

                <?php echo smarty_function_preference(array('name'=>'feature_theme_control_parentcategory'),$_smarty_tpl);?>

                <?php echo smarty_function_preference(array('name'=>'feature_theme_control_autocategorize'),$_smarty_tpl);?>

            </div>
            <hr>
            <legend>Theme Preferences</legend>
            <div class="adminoptionboxchild">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['themePrefs']->value, 'preferences', false, 'theme');
$_smarty_tpl->tpl_vars['preferences']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['theme']->value => $_smarty_tpl->tpl_vars['preferences']->value) {
$_smarty_tpl->tpl_vars['preferences']->do_else = false;
?>
                    <fieldset>
                        <legend><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tr', array());
$_block_repeat=true;
echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
ob_start();
echo ucfirst(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['theme']->value )));
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;
$_block_repeat=false;
echo smarty_block_tr(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></legend>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['preferences']->value, 'pref');
$_smarty_tpl->tpl_vars['pref']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['pref']->value) {
$_smarty_tpl->tpl_vars['pref']->do_else = false;
?>
                            <?php ob_start();
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['pref']->value ));
$_prefixVariable2=ob_get_clean();
echo smarty_function_preference(array('name'=>$_prefixVariable2),$_smarty_tpl);?>

                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </fieldset>
                <?php
}
if ($_smarty_tpl->tpl_vars['preferences']->do_else) {
?>
                    No theme preferences found.
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
            <hr>
        <?php $_block_repeat=false;
echo smarty_block_tab(array('name'=>"Theme"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tab', array('name'=>"Layout"));
$_block_repeat=true;
echo smarty_block_tab(array('name'=>"Layout"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <br>
            <legend>General layout</legend>
            <?php echo smarty_function_preference(array('name'=>'feature_fixed_width'),$_smarty_tpl);?>

            <div class="adminoptionboxchild" id="feature_fixed_width_childcontainer">
                <?php echo smarty_function_preference(array('name'=>'layout_fixed_width'),$_smarty_tpl);?>

            </div>
            <?php echo smarty_function_preference(array('name'=>'site_layout'),$_smarty_tpl);?>

            <?php echo smarty_function_preference(array('name'=>'site_layout_per_object'),$_smarty_tpl);?>


            <legend>Admin pages layout (<small>Admin theme must be selected first</small>)</legend>
            <?php echo smarty_function_preference(array('name'=>'site_layout_admin'),$_smarty_tpl);?>


            <!--legend>Fixed vs full width layout</legend-->
            <hr>

            <legend>Logo and Title</legend>
            <?php echo smarty_function_preference(array('name'=>'feature_sitelogo'),$_smarty_tpl);?>

            <div class="adminoptionboxchild" id="feature_sitelogo_childcontainer">
                <fieldset>
                    <legend>Logo</legend>
                    <?php echo smarty_function_preference(array('name'=>'sitelogo_src'),$_smarty_tpl);?>

                    <?php echo smarty_function_preference(array('name'=>'sitelogo_icon'),$_smarty_tpl);?>

                    <?php echo smarty_function_preference(array('name'=>'sitelogo_bgcolor'),$_smarty_tpl);?>

                    <?php echo smarty_function_preference(array('name'=>'sitelogo_title'),$_smarty_tpl);?>

                    <?php echo smarty_function_preference(array('name'=>'sitelogo_alt'),$_smarty_tpl);?>

                </fieldset>
                <fieldset>
                    <legend>Title</legend>
                    <?php echo smarty_function_preference(array('name'=>'sitetitle'),$_smarty_tpl);?>

                    <?php echo smarty_function_preference(array('name'=>'sitesubtitle'),$_smarty_tpl);?>

                </fieldset>
            </div>
            <hr>

            <div class="adminoptionbox">
                <fieldset>
                    <legend>Module zone visibility</legend>
                    <?php echo smarty_function_preference(array('name'=>'module_zones_top'),$_smarty_tpl);?>

                    <?php echo smarty_function_preference(array('name'=>'module_zones_topbar'),$_smarty_tpl);?>

                    <?php echo smarty_function_preference(array('name'=>'module_zones_pagetop'),$_smarty_tpl);?>

                    <?php echo smarty_function_preference(array('name'=>'feature_left_column'),$_smarty_tpl);?>

                    <?php echo smarty_function_preference(array('name'=>'feature_right_column'),$_smarty_tpl);?>

                    <?php echo smarty_function_preference(array('name'=>'module_zones_pagebottom'),$_smarty_tpl);?>

                    <?php echo smarty_function_preference(array('name'=>'module_zones_bottom'),$_smarty_tpl);?>

                    <br>
                    <?php echo smarty_function_preference(array('name'=>'module_file'),$_smarty_tpl);?>

                    <?php echo smarty_function_preference(array('name'=>'module_zone_available_extra'),$_smarty_tpl);?>

                </fieldset>
            </div>
            <hr>

            <div class="adminoptionbox">
                <fieldset>
                    <legend>Site report bar</legend>
                    <?php echo smarty_function_preference(array('name'=>'feature_site_report'),$_smarty_tpl);?>

                    <?php echo smarty_function_preference(array('name'=>'feature_site_report_email'),$_smarty_tpl);?>

                </fieldset>
            </div>
            <hr>
        <?php $_block_repeat=false;
echo smarty_block_tab(array('name'=>"Layout"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <?php if ($_smarty_tpl->tpl_vars['prefs']->value['site_layout'] == 'classic') {?>
            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tab', array('name'=>"Shadow layer"));
$_block_repeat=true;
echo smarty_block_tab(array('name'=>"Shadow layer"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <br>
                <legend>Shadow layer</legend>
                <?php echo smarty_function_preference(array('name'=>'feature_layoutshadows'),$_smarty_tpl);?>

                <div class="adminoptionboxchild" id="feature_layoutshadows_childcontainer">
                    <?php echo smarty_function_preference(array('name'=>'main_shadow_start'),$_smarty_tpl);?>

                    <?php echo smarty_function_preference(array('name'=>'main_shadow_end'),$_smarty_tpl);?>

                    <?php echo smarty_function_preference(array('name'=>'header_shadow_start'),$_smarty_tpl);?>

                    <?php echo smarty_function_preference(array('name'=>'header_shadow_end'),$_smarty_tpl);?>

                    <?php echo smarty_function_preference(array('name'=>'middle_shadow_start'),$_smarty_tpl);?>

                    <?php echo smarty_function_preference(array('name'=>'middle_shadow_end'),$_smarty_tpl);?>

                    <?php echo smarty_function_preference(array('name'=>'center_shadow_start'),$_smarty_tpl);?>

                    <?php echo smarty_function_preference(array('name'=>'center_shadow_end'),$_smarty_tpl);?>

                    <?php echo smarty_function_preference(array('name'=>'footer_shadow_start'),$_smarty_tpl);?>

                    <?php echo smarty_function_preference(array('name'=>'footer_shadow_end'),$_smarty_tpl);?>

                    <?php echo smarty_function_preference(array('name'=>'box_shadow_start'),$_smarty_tpl);?>

                    <?php echo smarty_function_preference(array('name'=>'box_shadow_end'),$_smarty_tpl);?>

                </div>
                <hr>
            <?php $_block_repeat=false;
echo smarty_block_tab(array('name'=>"Shadow layer"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <?php }?>
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tab', array('name'=>"Pagination"));
$_block_repeat=true;
echo smarty_block_tab(array('name'=>"Pagination"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <br>
            <legend>Pagination</legend>
            <?php echo smarty_function_preference(array('name'=>'nextprev_pagination'),$_smarty_tpl);?>

            <?php echo smarty_function_preference(array('name'=>'direct_pagination'),$_smarty_tpl);?>

            <div class="adminoptionboxchild" id="direct_pagination_childcontainer">
                <?php echo smarty_function_preference(array('name'=>'direct_pagination_max_middle_links'),$_smarty_tpl);?>

                <?php echo smarty_function_preference(array('name'=>'direct_pagination_max_ending_links'),$_smarty_tpl);?>

            </div>
            <?php echo smarty_function_preference(array('name'=>'pagination_firstlast'),$_smarty_tpl);?>

            <?php echo smarty_function_preference(array('name'=>'pagination_fastmove_links'),$_smarty_tpl);?>

            <?php echo smarty_function_preference(array('name'=>'pagination_hide_if_one_page'),$_smarty_tpl);?>

            <?php echo smarty_function_preference(array('name'=>'pagination_icons'),$_smarty_tpl);?>


            <legend>Limits</legend>
            <?php echo smarty_function_preference(array('name'=>'user_selector_threshold'),$_smarty_tpl);?>

            <?php echo smarty_function_preference(array('name'=>'maxRecords'),$_smarty_tpl);?>

            <?php echo smarty_function_preference(array('name'=>'tiki_object_selector_threshold'),$_smarty_tpl);?>

            <?php echo smarty_function_preference(array('name'=>'tiki_object_selector_searchfield'),$_smarty_tpl);?>

            <?php echo smarty_function_preference(array('name'=>'comments_per_page'),$_smarty_tpl);?>

            <hr>
        <?php $_block_repeat=false;
echo smarty_block_tab(array('name'=>"Pagination"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tab', array('name'=>"UI Effects"));
$_block_repeat=true;
echo smarty_block_tab(array('name'=>"UI Effects"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <br>
            <div class="adminoptionbox">
                <fieldset class="mb-3 w-100">
                    <legend>Standard UI effects</legend>
                    <?php echo smarty_function_preference(array('name'=>'jquery_effect'),$_smarty_tpl);?>

                    <?php echo smarty_function_preference(array('name'=>'jquery_effect_speed'),$_smarty_tpl);?>

                    <?php echo smarty_function_preference(array('name'=>'jquery_effect_direction'),$_smarty_tpl);?>

                </fieldset>
            </div>
            <div class="adminoptionbox">
                <fieldset class="mb-3 w-100">
                    <legend>Tab UI effects</legend>
                    <?php echo smarty_function_preference(array('name'=>'jquery_effect_tabs'),$_smarty_tpl);?>

                    <?php echo smarty_function_preference(array('name'=>'jquery_effect_tabs_speed'),$_smarty_tpl);?>

                    <?php echo smarty_function_preference(array('name'=>'jquery_effect_tabs_direction'),$_smarty_tpl);?>

                </fieldset>
            </div>
            <hr>

            <fieldset>
                <legend>Other</legend>
                <div class="admin featurelist">
                    <?php echo smarty_function_preference(array('name'=>'feature_shadowbox'),$_smarty_tpl);?>

                    <?php echo smarty_function_preference(array('name'=>'allowImageLazyLoad'),$_smarty_tpl);?>

                    <div class="adminoptionboxchild" id="feature_shadowbox_childcontainer">
                        <?php echo smarty_function_preference(array('name'=>'jquery_colorbox_theme'),$_smarty_tpl);?>

                    </div>
                    <?php echo smarty_function_preference(array('name'=>'feature_jscalendar'),$_smarty_tpl);?>

                    <?php echo smarty_function_preference(array('name'=>'wiki_heading_links'),$_smarty_tpl);?>

                    <?php echo smarty_function_preference(array('name'=>'feature_equal_height_rows_js'),$_smarty_tpl);?>

                    <?php echo smarty_function_preference(array('name'=>'feature_conditional_formatting'),$_smarty_tpl);?>

                    <?php echo smarty_function_preference(array('name'=>'jquery_ui_modals_draggable'),$_smarty_tpl);?>

                    <?php echo smarty_function_preference(array('name'=>'jquery_ui_modals_resizable'),$_smarty_tpl);?>

                </div>
            </fieldset>
            <hr>
        <?php $_block_repeat=false;
echo smarty_block_tab(array('name'=>"UI Effects"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tab', array('name'=>"Customization"));
$_block_repeat=true;
echo smarty_block_tab(array('name'=>"Customization"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <br>
            <fieldset>
                <legend>Custom codes</legend>
                <?php echo smarty_function_preference(array('name'=>"header_custom_css",'syntax'=>"css"),$_smarty_tpl);?>

                <?php echo smarty_function_preference(array('name'=>"header_custom_less",'syntax'=>"css"),$_smarty_tpl);?>

                <?php echo smarty_function_preference(array('name'=>'feature_custom_html_head_content','syntax'=>"htmlmixed"),$_smarty_tpl);?>

                <?php echo smarty_function_preference(array('name'=>'feature_endbody_code','syntax'=>"tiki"),$_smarty_tpl);?>

                <?php echo smarty_function_preference(array('name'=>'site_google_analytics_account'),$_smarty_tpl);?>

                <?php echo smarty_function_preference(array('name'=>"header_custom_js",'syntax'=>"javascript"),$_smarty_tpl);?>

                <?php echo smarty_function_preference(array('name'=>"layout_add_body_group_class"),$_smarty_tpl);?>

                <?php echo smarty_function_preference(array('name'=>'categories_add_class_to_body_tag'),$_smarty_tpl);?>

            </fieldset>
            <hr>

            <fieldset>
                <legend>Editing</legend>
                <?php echo smarty_function_preference(array('name'=>'theme_customizer'),$_smarty_tpl);?>

                <?php echo smarty_function_preference(array('name'=>'feature_editcss'),$_smarty_tpl);?>

                <?php echo smarty_function_preference(array('name'=>'feature_view_tpl'),$_smarty_tpl);?>

                <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_view_tpl'] == 'y') {?>
                    <div class="adminoptionboxchild">
                        <?php echo smarty_function_button(array('href'=>"tiki-edit_templates.php",'_text'=>"View Templates"),$_smarty_tpl);?>

                    </div>
                <?php }?>
                <?php echo smarty_function_preference(array('name'=>'feature_edit_templates'),$_smarty_tpl);?>

                <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_edit_templates'] == 'y') {?>
                    <div class="adminoptionboxchild">
                        <?php echo smarty_function_button(array('href'=>"tiki-edit_templates.php",'_text'=>"Edit Templates"),$_smarty_tpl);?>

                    </div>
                <?php }?>
            </fieldset>
            <hr>
        <?php $_block_repeat=false;
echo smarty_block_tab(array('name'=>"Customization"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tab', array('name'=>"Miscellaneous"));
$_block_repeat=true;
echo smarty_block_tab(array('name'=>"Miscellaneous"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <br>
            <fieldset class="adminoptionbox">
                <legend>Tabs</legend>
                <?php echo smarty_function_preference(array('name'=>'feature_tabs'),$_smarty_tpl);?>

                <div class="adminoptionboxchild" id="feature_tabs_childcontainer">
                    <?php echo smarty_function_preference(array('name'=>'layout_tabs_optional'),$_smarty_tpl);?>

                </div>
            </fieldset>
            <hr>

            <fieldset class="adminoptionbox">
                <legend>Favicons</legend>
                <?php echo smarty_function_preference(array('name'=>'site_favicon_enable'),$_smarty_tpl);?>

            </fieldset>
            <hr>

            <fieldset class="adminoptionbox">
                <legend>Responsive images</legend>
                <?php echo smarty_function_preference(array('name'=>'image_responsive_class'),$_smarty_tpl);?>

            </fieldset>
            <hr>

            <div class="adminoptionbox">
                <fieldset class="mb-3 w-100">
                    <legend>Context menus (<small>currently used in file galleries only</small>)</legend>
                    <?php echo smarty_function_preference(array('name'=>'use_context_menu_icon'),$_smarty_tpl);?>

                    <?php echo smarty_function_preference(array('name'=>'use_context_menu_text'),$_smarty_tpl);?>

                </fieldset>
            </div>
            <hr>

            <fieldset>
                <legend>Separators</legend>
                <?php echo smarty_function_preference(array('name'=>'site_crumb_seper'),$_smarty_tpl);?>

                <div class="adminoptionboxchild clearfix">
                    <span class="col-md-8 offset-md-4 form-text">Examples: &nbsp; » &nbsp; / &nbsp; &gt; &nbsp; : &nbsp; -> &nbsp; →</span>
                </div>
                <?php echo smarty_function_preference(array('name'=>'site_nav_seper'),$_smarty_tpl);?>

                <div class="adminoptionboxchild clearfix">
                    <span class="col-md-8 offset-md-4 form-text">Examples: &nbsp; | &nbsp; / &nbsp; ¦ &nbsp; :</span>
                </div>
            </fieldset>
            <hr>

            <legend>Smarty templates (TPL files)</legend>
            <?php echo smarty_function_preference(array('name'=>'log_tpl'),$_smarty_tpl);?>

            <?php echo smarty_function_preference(array('name'=>'smarty_compilation'),$_smarty_tpl);?>

            <?php echo smarty_function_preference(array('name'=>'smarty_cache_perms'),$_smarty_tpl);?>

            <?php echo smarty_function_preference(array('name'=>'categories_used_in_tpl'),$_smarty_tpl);?>

            <?php echo smarty_function_preference(array('name'=>'feature_html_head_base_tag'),$_smarty_tpl);?>

            <hr>
        <?php $_block_repeat=false;
echo smarty_block_tab(array('name'=>"Miscellaneous"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    <?php $_block_repeat=false;
echo smarty_block_tabset(array('name'=>"admin_look"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    <?php $_smarty_tpl->_subTemplateRender('file:admin/include_apply_bottom.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</form>
<?php }
}
