<?php
/* Smarty version 3.1.48, created on 2023-09-29 11:17:25
  from '/home/teddieme/tedd1eme/templates/admin/admin_navbar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6516a435e59010_82113207',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8dbff7481e808e5896a23aec93f337ed7e5982a9' => 
    array (
      0 => '/home/teddieme/tedd1eme/templates/admin/admin_navbar.tpl',
      1 => 1689085248,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/admin_navbar_menu.tpl' => 1,
    'file:admin/include_anchors.tpl' => 1,
  ),
),false)) {
function content_6516a435e59010_82113207 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/function.ticket.php','function'=>'smarty_function_ticket',),1=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/function.icon.php','function'=>'smarty_function_icon',),2=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/block.jq.php','function'=>'smarty_block_jq',),3=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/function.preference.php','function'=>'smarty_function_preference',),4=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/block.remarksbox.php','function'=>'smarty_block_remarksbox',),5=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/block.tr.php','function'=>'smarty_block_tr',),));
?>
<nav class="navbar-expand-md navbar-<?php echo $_smarty_tpl->tpl_vars['navbar_color_variant']->value;?>
 bg-<?php echo $_smarty_tpl->tpl_vars['navbar_color_variant']->value;?>
 admin-navbar mb-4" role="navigation">
    <?php if ($_smarty_tpl->tpl_vars['prefs']->value['theme_unified_admin_backend'] == 'y') {?>
        <a class="navbar-brand" href="./" title="Back to the home page">
            <?php if ($_smarty_tpl->tpl_vars['prefs']->value['sitelogo_icon']) {?>
                <img src="<?php echo $_smarty_tpl->tpl_vars['prefs']->value['sitelogo_icon'];?>
" alt="<?php if ($_smarty_tpl->tpl_vars['prefs']->value['sitetitle']) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['prefs']->value['sitetitle'] ));
} else { ?>Site logo<?php }?>">
            <?php } elseif ($_smarty_tpl->tpl_vars['navbar_color_variant']->value == 'light') {?>
                <img src="img/tiki/tiki-icon-flat-black.png" alt="Tiki logo" height="24">
            <?php } else { ?>
                <img src="img/tiki/tiki-icon-flat-white.png" alt="Tiki logo" height="24">
            <?php }?>
        </a>
    <?php }?>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#admin-navbar-collapse-1" aria-controls="admin-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="admin-navbar-collapse-1">
        <form method="post" class="form form-inline my-2 my-md-0" role="form" style="min-height: 60px; width: 165px;">
            <div class="form-check">
                <?php echo smarty_function_ticket(array(),$_smarty_tpl);?>

                <input type="checkbox" id="preffilter-toggle-1" class="preffilter-toggle preffilter-toggle-round form-check-input <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['pref_filters']->value['advanced']['type'] ));?>
" value="advanced"<?php if ($_smarty_tpl->tpl_vars['pref_filters']->value['advanced']['selected']) {?> checked="checked"<?php }?>>
                <label for="preffilter-toggle-1"></label>
            </div>

            <ul class="nav navbar-nav filter-menu"<?php if (!$_smarty_tpl->tpl_vars['pref_filters']->value['advanced']['selected']) {?> style="display: none;"<?php }?>>
                <li class="nav-item dropdown mr-0" style="padding-top: 6px;">
                    <a href="#" class="nav-link dropdown-toggle pr-0" data-toggle="dropdown" title="Settings" style="width: 48px;">
                        <?php echo smarty_function_icon(array('name'=>"filter"),$_smarty_tpl);?>

                    </a>
                    <ul class="dropdown-menu" role="menu">
                        <li class="dropdown-item">
                            <span class="dropdown-title">Preference Filters</span>
                            <input type="hidden" name="pref_filters[]" value="basic">
                        </li>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pref_filters']->value, 'info', false, 'name');
$_smarty_tpl->tpl_vars['info']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['name']->value => $_smarty_tpl->tpl_vars['info']->value) {
$_smarty_tpl->tpl_vars['info']->do_else = false;
?>
                            <li class="dropdown-item">
                                <div class="form-check justify-content-start">
                                    <label>
                                        <input type="checkbox" class="form-check-input preffilter <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['info']->value['type'] ));?>
" name="pref_filters[]" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['name']->value ));?>
"<?php if ($_smarty_tpl->tpl_vars['info']->value['selected']) {?> checked="checked"<?php }
if ($_smarty_tpl->tpl_vars['name']->value == 'basic') {?> disabled="disabled"<?php }?>><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['info']->value['label'] ));?>

                                    </label>
                                </div>
                            </li>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        <li class="dropdown-item">
                            <div class="text-center">
                                <input type="submit" value="Set as my default" class="btn btn-primary btn-sm">
                            </div>
                        </li>
                        <?php if ($_smarty_tpl->tpl_vars['prefs']->value['connect_feature'] == "y") {?>
                            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'likeicon', null, null);
echo smarty_function_icon(array('name'=>"thumbs-up"),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" id="connect_feedback_cbx" class="form-check-input"<?php if (!empty($_smarty_tpl->tpl_vars['connect_feedback_showing']->value)) {?> checked="checked"<?php }?>>
                                    Provide Feedback
                                    <a href="https://doc.tiki.org/Connect" target="tikihelp" class="tikihelp" title="Provide Feedback:
                                        Once selected, some icon/s will be shown next to all features so that you can provide some on-site feedback about them.
                                        <br/><br/>
                                        <ul>
                                            <li>Icon for 'Like' <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'likeicon') ));?>
</li>
    <!--                                            <li>Icon for 'Fix me' <img src=img/icons/connect_fix.png></li> -->
    <!--                                            <li>Icon for 'What is this for?' <img src=img/icons/connect_wtf.png></li> -->
                                        </ul>
                                        <br>
                                        Your votes will be sent when you connect with mother.tiki.org (currently only by clicking the 'Connect > <strong>Send Info</strong>' button)
                                        <br/><br/>
                                        Click to read more
                                    ">
                                        <?php echo smarty_function_icon(array('name'=>"help"),$_smarty_tpl);?>

                                    </a>
                                </label>
                            </div>
                            <?php echo $_smarty_tpl->tpl_vars['headerlib']->value->add_jsfile("lib/jquery_tiki/tiki-connect.js");?>

                        <?php }?>
                        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('jq', array());
$_block_repeat=true;
echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                            var updateVisible = function() {
                            var show = function (selector) {
                            selector.show();
                            selector.parents('fieldset:not(.tabcontent)').show();
                            selector.closest('fieldset.tabcontent').addClass('filled');
                            };
                            var hide = function (selector) {
                            selector.hide();
                            };

                            var filters = [];
                            var prefs = $('#col1 .adminoptionbox.preference, .admbox').hide();
                            prefs.parents('fieldset:not(.tabcontent)').hide();
                            prefs.closest('fieldset.tabcontent').removeClass('filled');
                            $('.preffilter').each(function () {
                            var targets = $('.adminoptionbox.preference.' + $(this).val() + ',.admbox.' + $(this).val());
                            if ($(this).is(':checked')) {
                            filters.push($(this).val());
                            show(targets);
                            } else if ($(this).is('.negative:not(:checked)')) {
                            hide(targets);
                            }
                            });

                            show($('.adminoptionbox.preference.modified'));

                            $('input[name="filters"]').val(filters.join(' '));
                            $('.tabset .tabmark a').each(function () {
                            var selector = 'fieldset.tabcontent.' + $(this).attr('href').substring(1);
                            var content = $(this).closest('.tabset').find(selector);

                            $(this).parent().toggle(content.is('.filled') || content.find('.preference').length === 0);
                            });
                            };

                            updateVisible();
                            $('.preffilter').change(updateVisible);
                            $('.preffilter-toggle').change(function () {
                            var checked = $(this).is(":checked");
                            $("input.preffilter[value=advanced]").prop("checked", checked);
                            $(".filter-menu.nav").css("display", checked ? "block" : "none");
                            updateVisible();
                            });
                        <?php $_block_repeat=false;
echo smarty_block_jq(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                        <li class="dropdown-divider"></li>
                        <li class="dropdown-item">
                            <a href="tiki-admin.php?prefrebuild">
                                Rebuild Admin Index
                            </a>
                        </li>
                        <li class="dropdown-item">
                            <a href="tiki-admin.php">
                                Control Panels
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </form>
        <?php $_smarty_tpl->_subTemplateRender("file:admin/admin_navbar_menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php if ($_smarty_tpl->tpl_vars['prefs']->value['theme_unified_admin_backend'] != 'y') {?>
            <ul class="navbar-nav flex-row d-md-flex mr-2">
                <li class="nav-item">
                    <form method="post" class="form-inline my-2 my-md-0 ml-auto" role="form">
                        <div class="form-group row mx-0">
                            <input type="hidden" name="filters">
                            <div class="input-group">
                                <input type="text" name="lm_criteria" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['lm_criteria']->value ));?>
" class="form-control form-control-sm" placeholder="Search preferences...">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-info btn-sm"<?php if ($_smarty_tpl->tpl_vars['indexNeedsRebuilding']->value) {?> class="tips" title="Configuration search|Note: The search index needs rebuilding, this will take a few minutes."<?php }?>><?php echo smarty_function_icon(array('name'=>"search"),$_smarty_tpl);?>
</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </li>
            </ul>
        <?php }?>
    </div>
    <?php if ($_smarty_tpl->tpl_vars['include']->value != "list_sections" && $_smarty_tpl->tpl_vars['prefs']->value['theme_unified_admin_backend'] != 'y') {?>
        <div class="adminanchors card"><div class="card-body navbar-<?php echo $_smarty_tpl->tpl_vars['navbar_color_variant']->value;?>
 bg-<?php echo $_smarty_tpl->tpl_vars['navbar_color_variant']->value;?>
"><ul class="nav navbar-nav"><?php $_smarty_tpl->_subTemplateRender('file:admin/include_anchors.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?></ul></div></div>
    <?php }?>
</nav>

<?php if ($_smarty_tpl->tpl_vars['lm_searchresults']->value) {?>
    <div class="card card-primary" id="pref_searchresults">
        <div class="card-header">
            <h3 class="card-title">Preference Search Results<button type="button" id="pref_searchresults-close" class="close" aria-hidden="true">&times;</button></h3>
        </div>
        <form method="post" href="tiki-admin.php" class="table" role="form">
            <div class="pref_search_results card-body">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lm_searchresults']->value, 'prefName');
$_smarty_tpl->tpl_vars['prefName']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['prefName']->value) {
$_smarty_tpl->tpl_vars['prefName']->do_else = false;
?>
                    <?php echo smarty_function_preference(array('name'=>$_smarty_tpl->tpl_vars['prefName']->value,'get_pages'=>'y','visible'=>'always'),$_smarty_tpl);?>

                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
            <div class="card-footer text-center">
                <input class="btn btn-primary" type="submit" title="Apply Changes" value="Apply">
            </div>
            <input type="hidden" name="lm_criteria" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['lm_criteria']->value ));?>
">
            <?php echo smarty_function_ticket(array(),$_smarty_tpl);?>

        </form>
    </div>
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('jq', array());
$_block_repeat=true;
echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        $( "#pref_searchresults-close" ).click(function() {
            $( "#pref_searchresults" ).hide();
        });
    <?php $_block_repeat=false;
echo smarty_block_jq(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
} elseif ($_smarty_tpl->tpl_vars['lm_criteria']->value) {?>
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>"note",'title'=>"No results",'icon'=>"magnifier"));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>"note",'title'=>"No results",'icon'=>"magnifier"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        No preferences were found for your search query.<br>
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tr', array('_0'=>'<a class="alert-link" href="tiki-admin.php?prefrebuild">','_1'=>'</a>'));
$_block_repeat=true;
echo smarty_block_tr(array('_0'=>'<a class="alert-link" href="tiki-admin.php?prefrebuild">','_1'=>'</a>'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Not what you expected? Try %0rebuilding%1 the preferences search index.<?php $_block_repeat=false;
echo smarty_block_tr(array('_0'=>'<a class="alert-link" href="tiki-admin.php?prefrebuild">','_1'=>'</a>'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    <?php $_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>"note",'title'=>"No results",'icon'=>"magnifier"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
}
