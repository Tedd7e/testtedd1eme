<?php
/* Smarty version 3.1.48, created on 2023-09-29 11:17:23
  from '/home/teddieme/tedd1eme/templates/tiki-admin_actionlog.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6516a43394c1a3_44712709',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eb18276262bdae8cfcc56270fd3f8e6436f43e7c' => 
    array (
      0 => '/home/teddieme/tedd1eme/templates/tiki-admin_actionlog.tpl',
      1 => 1689085248,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:contribution.tpl' => 1,
    'file:categorize.tpl' => 1,
  ),
),false)) {
function content_6516a43394c1a3_44712709 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/block.title.php','function'=>'smarty_block_title',),1=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/block.tabset.php','function'=>'smarty_block_tabset',),2=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/block.tab.php','function'=>'smarty_block_tab',),3=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/function.button.php','function'=>'smarty_function_button',),4=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/function.html_select_date.php','function'=>'smarty_function_html_select_date',),5=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/function.html_select_time.php','function'=>'smarty_function_html_select_time',),6=>array('file'=>'/home/teddieme/tedd1eme/vendor_bundled/vendor/smarty/smarty/libs/plugins/function.math.php','function'=>'smarty_function_math',),7=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/modifier.username.php','function'=>'smarty_modifier_username',),8=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/block.tr.php','function'=>'smarty_block_tr',),9=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/block.self_link.php','function'=>'smarty_block_self_link',),10=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/block.pagination_links.php','function'=>'smarty_block_pagination_links',),11=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/function.ticket.php','function'=>'smarty_function_ticket',),12=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/function.query.php','function'=>'smarty_function_query',),13=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/function.select_all.php','function'=>'smarty_function_select_all',),14=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/modifier.tiki_short_datetime.php','function'=>'smarty_modifier_tiki_short_datetime',),15=>array('file'=>'/home/teddieme/tedd1eme/vendor_bundled/vendor/smarty/smarty/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),16=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/block.actions.php','function'=>'smarty_block_actions',),17=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/function.icon.php','function'=>'smarty_function_icon',),18=>array('file'=>'/home/teddieme/tedd1eme/vendor_bundled/vendor/smarty/smarty/libs/plugins/function.cycle.php','function'=>'smarty_function_cycle',),19=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/block.remarksbox.php','function'=>'smarty_block_remarksbox',),));
?>


<?php echo $_smarty_tpl->tpl_vars['headerlib']->value->add_jsfile("lib/jquery_tiki/tiki-admin_actionlog.js");?>


<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('title', array('help'=>"Action log"));
$_block_repeat=true;
echo smarty_block_title(array('help'=>"Action log"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Action Log<?php $_block_repeat=false;
echo smarty_block_title(array('help'=>"Action log"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tabset', array('name'=>"admin_actionlog"));
$_block_repeat=true;
echo smarty_block_tabset(array('name'=>"admin_actionlog"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>

    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tab', array('name'=>"Report"));
$_block_repeat=true;
echo smarty_block_tab(array('name'=>"Report"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <h2>Report</h2>
        <form method="get" action="tiki-admin_actionlog.php#List">
            
            <h2>Filter</h2>
            <?php if (empty($_smarty_tpl->tpl_vars['nbViewedConfs']->value)) {?>
                <?php echo smarty_function_button(array('_text'=>"Please select some actions to be reported.",'href'=>"#",'_onclick'=>"showTab(2); return true;"),$_smarty_tpl);?>

            <?php } else { ?>
                <fieldset>
                    <legend>Date</legend>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label" for="">Start</label>

                        <div class="col-sm-8">
                            <div class="">
                                <?php echo smarty_function_html_select_date(array('time'=>$_smarty_tpl->tpl_vars['startDate']->value,'prefix'=>"startDate_",'start_year'=>"-10",'field_order'=>$_smarty_tpl->tpl_vars['prefs']->value['display_field_order']),$_smarty_tpl);?>
 <?php echo smarty_function_html_select_time(array('use_24_hours'=>true,'time'=>$_smarty_tpl->tpl_vars['startDate']->value),$_smarty_tpl);?>

                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label" for="">End</label>

                        <div class="col-sm-8">
                            <div class="">
                                <?php echo smarty_function_html_select_date(array('time'=>$_smarty_tpl->tpl_vars['endDate']->value,'prefix'=>"endDate_",'start_year'=>"-10",'field_order'=>$_smarty_tpl->tpl_vars['prefs']->value['display_field_order']),$_smarty_tpl);?>
 <?php echo smarty_function_html_select_time(array('use_24_hours'=>true,'time'=>$_smarty_tpl->tpl_vars['endDate']->value,'prefix'=>"end_"),$_smarty_tpl);?>

                            </div>
                        </div>
                    </div>
                </fieldset>
                <fieldset>
                    <legend>Users and Groups</legend>
                    <?php if ($_smarty_tpl->tpl_vars['tiki_p_list_users']->value == 'y') {?>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label" for="selectedUsers">User</label>

                            <div class="col-sm-6">
                                <select multiple="multiple"
                                        size="<?php if (count($_smarty_tpl->tpl_vars['users']->value) > 5) {?>5<?php } else {
echo smarty_function_math(array('equation'=>'x'+'y','x'=>count($_smarty_tpl->tpl_vars['users']->value),'y'=>2),$_smarty_tpl);
}?>"
                                        name="selectedUsers[]" id="selectedUsers" class="form-control">
                                    <option value="">All</option>
                                    <option value="Anonymous">Anonymous</option>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'auser', false, 'ix');
$_smarty_tpl->tpl_vars['auser']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ix']->value => $_smarty_tpl->tpl_vars['auser']->value) {
$_smarty_tpl->tpl_vars['auser']->do_else = false;
?>
                                        <option value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['auser']->value ));?>
"
                                                <?php if ($_smarty_tpl->tpl_vars['selectedUsers']->value[$_smarty_tpl->tpl_vars['ix']->value] == 'y') {?>selected="selected"<?php }?>><?php echo smarty_modifier_username($_smarty_tpl->tpl_vars['auser']->value);?>
</option>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </select>
                            </div>
                        </div>
                    <?php } else { ?>
                        <input type="hidden" name="selectedUsers[]" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['auser']->value ));?>
">
                    <?php }?>

                    <?php if (count($_smarty_tpl->tpl_vars['groups']->value) >= 1) {?>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label" for="selectedGroups">Group</label>

                            <div class="col-sm-6">
                                <select multiple="multiple"
                                        size="<?php if (count($_smarty_tpl->tpl_vars['groups']->value) > 5) {?>5<?php } else {
echo smarty_function_math(array('equation'=>'x'+'y','x'=>count($_smarty_tpl->tpl_vars['groups']->value),'y'=>1),$_smarty_tpl);
}?>"
                                        name="selectedGroups[]" id="selectedGroups" class="form-control">
                                    <option value="">All</option>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['groups']->value, 'group', false, 'ix');
$_smarty_tpl->tpl_vars['group']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ix']->value => $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->do_else = false;
?>
                                        <option value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['group']->value ));?>
"
                                                <?php if ($_smarty_tpl->tpl_vars['selectedGroups']->value[$_smarty_tpl->tpl_vars['group']->value] == 'y') {?>selected="selected"<?php }?>><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['group']->value ));?>
</option>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </select>
                            </div>
                        </div>
                    <?php }?>
                </fieldset>
                <fieldset>
                    <legend>Category</legend>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label" for="categId">Category</label>

                        <div class="col-sm-6">
                            <select name="categId" id="categId" class="form-control">
                                <option value="" <?php if ($_smarty_tpl->tpl_vars['reportCateg']->value == '' || $_smarty_tpl->tpl_vars['reportCateg']->value == 0) {?>selected="selected"<?php }?>>
                                    * All *
                                </option>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
                                    <option value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['category']->value['categId'] ));?>
"
                                            <?php if ($_smarty_tpl->tpl_vars['reportCateg']->value == $_smarty_tpl->tpl_vars['category']->value['name']) {?>selected="selected"<?php }?>><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['category']->value['name'] ));?>
</option>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </select>
                        </div>
                    </div>
                </fieldset>
                <fieldset>
                    <legend>Misc.</legend>

                    <div class="col-sm-11 offset-sm-1 form-inline">
                        <div class="form-group col-sm-10">
                            <div class="col-sm-4">
                                <label>Units</label>
                            </div>
                            <div class="form-group col-sm-4 offset-sm-1">
                                <label>bytes</label>
                                <input class="radio" type="radio" name="unit"
                                    value="bytes"<?php if ($_smarty_tpl->tpl_vars['unit']->value != 'kb') {?> checked="checked"<?php }?>>
                                <label>kb</label>
                                <input type="radio" name="unit" value="kb"<?php if ($_smarty_tpl->tpl_vars['unit']->value == 'kb') {?> checked="checked"<?php }?>>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-11 offset-sm-1 form-inline">
                        <div class="form-group col-sm-10">
                            <div class="col-sm-4">
                                <label>Contribution Time</label>
                            </div>
                            <div class="form-group col-sm-4 offset-sm-1">
                                <label>Week</label>
                                <input type="radio" name="contribTime" value="w"<?php if ($_smarty_tpl->tpl_vars['contribTime']->value != 'd') {?> checked="checked"<?php }?>>
                                <label>Day</label>
                                <input type="radio" name="contribTime" value="d"<?php if ($_smarty_tpl->tpl_vars['contribTime']->value == 'd') {?> checked="checked"<?php }?>>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label" for="">Search</label>

                        <div class="col-sm-4">
                            <input class="form-control" type="text" name="find" value="<?php echo $_smarty_tpl->tpl_vars['find']->value;?>
">
                        </div>
                    </div>

                    <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_contribution'] == 'y') {?>
                        <div class="form-group row">
                            <input type="submit" class="btn btn-primary btn-sm" name="graph"
                                value="Graph Contributions">
                            <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_jpgraph'] == 'y') {?>
                                <br>
                                Group Bar Plot:
                                <input type="radio" name="barPlot" value="group">
                                Accumulated Bar Plot:
                                <input type="radio" name="barPlot" value="acc" checked="checked">
                                <br>
                                Background color:
                                <select name="bgcolor">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['bgcolors']->value, 'color');
$_smarty_tpl->tpl_vars['color']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['color']->value) {
$_smarty_tpl->tpl_vars['color']->do_else = false;
?>
                                        <option value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color']->value ));?>
"<?php if ($_smarty_tpl->tpl_vars['defaultBgcolor']->value == $_smarty_tpl->tpl_vars['color']->value) {?> selected="selected"<?php }?>><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tr', array());
$_block_repeat=true;
echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo $_smarty_tpl->tpl_vars['color']->value;
$_block_repeat=false;
echo smarty_block_tr(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></option>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </select>
                                Legend background color:
                                <select name="legendBgcolor">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['bgcolors']->value, 'color');
$_smarty_tpl->tpl_vars['color']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['color']->value) {
$_smarty_tpl->tpl_vars['color']->do_else = false;
?>
                                        <option value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color']->value ));?>
"<?php if ($_smarty_tpl->tpl_vars['defaultLegendBgcolor']->value == $_smarty_tpl->tpl_vars['color']->value) {?> selected="selected"<?php }?>><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tr', array());
$_block_repeat=true;
echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo $_smarty_tpl->tpl_vars['color']->value;
$_block_repeat=false;
echo smarty_block_tr(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></option>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </select>
                                <br>
                                
                                

                            <?php }?>
                        </div>
                    <?php }?>

                </fieldset>
                <input type="hidden" name="max" value="<?php echo $_smarty_tpl->tpl_vars['maxRecords']->value;?>
">
                <span class="input_submit_container">
                    <input type="submit" class="btn btn-primary btn-sm" name="list" value="Report">
                </span>
                <?php if ($_smarty_tpl->tpl_vars['tiki_p_admin']->value == 'y') {?>
                    <span class="input_submit_container">
                        <input type="submit" class="btn btn-primary btn-sm" name="export" value="Export">
                    </span>
                <?php }?>

            <?php }?>
        </form>

        <?php if ((isset($_smarty_tpl->tpl_vars['actionlogs']->value))) {?>
            <h2 id="List">List</h2>
            <?php if ($_smarty_tpl->tpl_vars['selectedUsers']->value) {?>
                &nbsp;&mdash;&nbsp;
                User:
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'auser', false, 'ix');
$_smarty_tpl->tpl_vars['auser']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ix']->value => $_smarty_tpl->tpl_vars['auser']->value) {
$_smarty_tpl->tpl_vars['auser']->do_else = false;
?>
                    <?php if ($_smarty_tpl->tpl_vars['selectedUsers']->value[$_smarty_tpl->tpl_vars['ix']->value] == 'y') {?> <?php echo smarty_modifier_username($_smarty_tpl->tpl_vars['auser']->value);
}?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['selectedGroups']->value) {?>
                &nbsp;&mdash;&nbsp;
                Group:
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['groups']->value, 'group', false, 'ix');
$_smarty_tpl->tpl_vars['group']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ix']->value => $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->do_else = false;
?>
                    <?php if ($_smarty_tpl->tpl_vars['selectedGroups']->value[$_smarty_tpl->tpl_vars['group']->value] == 'y') {?> <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['group']->value ));
}?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['reportCategory']->value) {?>
                &nbsp;&mdash;&nbsp;Category: <?php echo $_smarty_tpl->tpl_vars['reportCateg']->value;?>

            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['maxRecords']->value > 0) {?>
                <?php if ($_smarty_tpl->tpl_vars['cant']->value > $_smarty_tpl->tpl_vars['maxRecords']->value) {?>
                    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('self_link', array('max'=>-1));
$_block_repeat=true;
echo smarty_block_self_link(array('max'=>-1), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>All<?php $_block_repeat=false;
echo smarty_block_self_link(array('max'=>-1), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <?php }?>
            <?php } else { ?>
                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('self_link', array('max'=>$_smarty_tpl->tpl_vars['prefs']->value['maxRecords']));
$_block_repeat=true;
echo smarty_block_self_link(array('max'=>$_smarty_tpl->tpl_vars['prefs']->value['maxRecords']), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Pagination<?php $_block_repeat=false;
echo smarty_block_self_link(array('max'=>$_smarty_tpl->tpl_vars['prefs']->value['maxRecords']), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            <?php }?>
            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('pagination_links', array('cant'=>$_smarty_tpl->tpl_vars['cant']->value,'step'=>$_smarty_tpl->tpl_vars['maxRecords']->value,'offset'=>$_smarty_tpl->tpl_vars['offset']->value));
$_block_repeat=true;
echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['cant']->value,'step'=>$_smarty_tpl->tpl_vars['maxRecords']->value,'offset'=>$_smarty_tpl->tpl_vars['offset']->value), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['cant']->value,'step'=>$_smarty_tpl->tpl_vars['maxRecords']->value,'offset'=>$_smarty_tpl->tpl_vars['offset']->value), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            Records: <?php echo $_smarty_tpl->tpl_vars['cant']->value;?>

            <?php if (!empty($_smarty_tpl->tpl_vars['actionlogs']->value)) {?>
                <a href="#Statistics">See Statistics</a><br/>
            <?php }?>
            <form name="checkboxes_on" method="post" action="tiki-admin_actionlog.php">
                <?php echo smarty_function_ticket(array(),$_smarty_tpl);?>

                <?php echo smarty_function_query(array('_type'=>'form_input'),$_smarty_tpl);?>

                <div class="<?php if ($_smarty_tpl->tpl_vars['js']->value) {?>table-responsive<?php }?>"> 
                    <table class="table table-striped table-hover">
                        <tr>
                            <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_banning'] == 'y') {?>
                                <th>
                                    <?php echo smarty_function_select_all(array('checkbox_names'=>'checked[]'),$_smarty_tpl);?>

                                    <?php $_smarty_tpl->_assignInScope('numbercol', $_smarty_tpl->tpl_vars['numbercol']->value+1);?>
                                </th>
                            <?php }?>
                            <th>
                                <a href="tiki-admin_actionlog.php?startDate=<?php echo $_smarty_tpl->tpl_vars['startDate']->value;?>
&amp;endDate=<?php echo $_smarty_tpl->tpl_vars['endDate']->value;?>
&amp;sort_mode=user_<?php if ($_smarty_tpl->tpl_vars['sort_mode']->value == 'user_desc') {?>asc<?php } else { ?>desc<?php }
echo $_smarty_tpl->tpl_vars['url']->value;?>
">User</a>
                            </th>
                            <th>
                                <a href="tiki-admin_actionlog.php?startDate=<?php echo $_smarty_tpl->tpl_vars['startDate']->value;?>
&amp;endDate=<?php echo $_smarty_tpl->tpl_vars['endDate']->value;?>
&amp;sort_mode=lastModif_<?php if ($_smarty_tpl->tpl_vars['sort_mode']->value == 'lastModif_desc') {?>asc<?php } else { ?>desc<?php }
echo $_smarty_tpl->tpl_vars['url']->value;?>
">Date</a>
                            </th>
                            <th>
                                <a href="tiki-admin_actionlog.php?startDate=<?php echo $_smarty_tpl->tpl_vars['startDate']->value;?>
&amp;endDate=<?php echo $_smarty_tpl->tpl_vars['endDate']->value;?>
&amp;sort_mode=action_<?php if ($_smarty_tpl->tpl_vars['sort_mode']->value == 'action_desc') {?>asc<?php } else { ?>desc<?php }
echo $_smarty_tpl->tpl_vars['url']->value;?>
">Action</a>
                            </th>
                            <th>
                                <a href="tiki-admin_actionlog.php?startDate=<?php echo $_smarty_tpl->tpl_vars['startDate']->value;?>
&amp;endDate=<?php echo $_smarty_tpl->tpl_vars['endDate']->value;?>
&amp;sort_mode=objectType_<?php if ($_smarty_tpl->tpl_vars['sort_mode']->value == 'objectType_desc') {?>asc<?php } else { ?>desc<?php }
echo $_smarty_tpl->tpl_vars['url']->value;?>
">Type</a>
                            </th>
                            <th>
                                <a href="tiki-admin_actionlog.php?startDate=<?php echo $_smarty_tpl->tpl_vars['startDate']->value;?>
&amp;endDate=<?php echo $_smarty_tpl->tpl_vars['endDate']->value;?>
&amp;sort_mode=object_<?php if ($_smarty_tpl->tpl_vars['sort_mode']->value == 'object_desc') {?>asc<?php } else { ?>desc<?php }
echo $_smarty_tpl->tpl_vars['url']->value;?>
">Object</a>
                            </th>
                            <?php if (!$_smarty_tpl->tpl_vars['reportCateg']->value && $_smarty_tpl->tpl_vars['showCateg']->value == 'y') {?>
                                <th>
                                    <a href="tiki-admin_actionlog.php?startDate=<?php echo $_smarty_tpl->tpl_vars['startDate']->value;?>
&amp;endDate=<?php echo $_smarty_tpl->tpl_vars['endDate']->value;?>
&amp;sort_mode=categName_<?php if ($_smarty_tpl->tpl_vars['sort_mode']->value == 'categName_desc') {?>asc<?php } else { ?>desc<?php }
echo $_smarty_tpl->tpl_vars['url']->value;?>
">Category</a>
                                </th>
                            <?php }?>
                            <th>IP</th>
                            <th>
                                <a href="tiki-admin_actionlog.php?startDate=<?php echo $_smarty_tpl->tpl_vars['startDate']->value;?>
&amp;endDate=<?php echo $_smarty_tpl->tpl_vars['endDate']->value;?>
&amp;sort_mode=add_<?php if ($_smarty_tpl->tpl_vars['sort_mode']->value == 'add_desc') {?>asc<?php } else { ?>desc<?php }
echo $_smarty_tpl->tpl_vars['url']->value;?>
">+<?php if ($_smarty_tpl->tpl_vars['unit']->value == 'kb') {?>kb<?php } else { ?>bytes<?php }?></a>
                            </th>
                            <th>
                                <a href="tiki-admin_actionlog.php?startDate=<?php echo $_smarty_tpl->tpl_vars['startDate']->value;?>
&amp;endDate=<?php echo $_smarty_tpl->tpl_vars['endDate']->value;?>
&amp;sort_mode=del_<?php if ($_smarty_tpl->tpl_vars['sort_mode']->value == 'del_desc') {?>asc<?php } else { ?>desc<?php }
echo $_smarty_tpl->tpl_vars['url']->value;?>
">-<?php if ($_smarty_tpl->tpl_vars['unit']->value == 'kb') {?>kb<?php } else { ?>bytes<?php }?></a>
                            </th>
                            <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_contribution'] == 'y') {?>
                                <th>contribution</th>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_contributor_wiki'] == 'y') {?>
                                <th>contributor</th>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['tiki_p_admin']->value == 'y' && ($_smarty_tpl->tpl_vars['prefs']->value['feature_contribution'] == 'y' || $_smarty_tpl->tpl_vars['prefs']->value['feature_categories'] == 'y')) {?>
                                <th></th>
                            <?php }?>
                        </tr>

                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['actionlogs']->value, 'actionlog');
$_smarty_tpl->tpl_vars['actionlog']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['actionlog']->value) {
$_smarty_tpl->tpl_vars['actionlog']->do_else = false;
?>
                            <tr>
                                <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_banning'] == 'y') {?>
                                    <td class="checkbox-cell">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" name="checked[]" value="<?php echo $_smarty_tpl->tpl_vars['actionlog']->value['actionId'];?>
">
                                        </div>
                                    </td>
                                <?php }?>
                                <td class="username"><?php if ($_smarty_tpl->tpl_vars['actionlog']->value['user']) {
echo smarty_modifier_username($_smarty_tpl->tpl_vars['actionlog']->value['user']);
} else { ?>Anonymous<?php }?></td>
                                <td class="date"><?php echo smarty_modifier_tiki_short_datetime($_smarty_tpl->tpl_vars['actionlog']->value['lastModif']);?>
</td>
                                <td class="text">
                                    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tr', array());
$_block_repeat=true;
echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['actionlog']->value['action'] ));
$_block_repeat=false;
echo smarty_block_tr(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                    <?php if ($_smarty_tpl->tpl_vars['actionlog']->value['action'] == 'Categorized' || $_smarty_tpl->tpl_vars['actionlog']->value['action'] == 'Uncategorized') {?>/<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['actionlog']->value['comment'],"categId=",'');
}?>
                                </td>
                                <td class="text"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tr', array());
$_block_repeat=true;
echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo $_smarty_tpl->tpl_vars['actionlog']->value['objectType'];
$_block_repeat=false;
echo smarty_block_tr(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></td>
                                <td class="text">
                                    <?php if ($_smarty_tpl->tpl_vars['actionlog']->value['link']) {?>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['actionlog']->value['link'];?>
" target="_blank" title="View"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['actionlog']->value['object'] ));?>
</a>
                                    <?php } else { ?>
                                        <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['actionlog']->value['object'] ));?>

                                    <?php }?>
                                </td>
                                <?php if (!$_smarty_tpl->tpl_vars['reportCateg']->value && $_smarty_tpl->tpl_vars['showCateg']->value == 'y') {?>
                                    <td><?php $_smarty_tpl->_assignInScope('ic', $_smarty_tpl->tpl_vars['actionlog']->value['categId']);
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['categNames']->value[$_smarty_tpl->tpl_vars['ic']->value] ));?>
</td>
                                <?php }?>
                                <td class="text"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tr', array());
$_block_repeat=true;
echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo $_smarty_tpl->tpl_vars['actionlog']->value['ip'];
$_block_repeat=false;
echo smarty_block_tr(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></td>
                                <td class="<?php if ($_smarty_tpl->tpl_vars['actionlog']->value['add']) {?> diffadded<?php }?>"><?php if ($_smarty_tpl->tpl_vars['actionlog']->value['add'] || $_smarty_tpl->tpl_vars['actionlog']->value['add'] == '0') {
echo $_smarty_tpl->tpl_vars['actionlog']->value['add'];
} else { ?>&nbsp;<?php }?></td>
                                <td class="<?php if ($_smarty_tpl->tpl_vars['actionlog']->value['del']) {?> diffdeleted<?php }?>"><?php if ($_smarty_tpl->tpl_vars['actionlog']->value['del'] || $_smarty_tpl->tpl_vars['actionlog']->value['del'] == '0') {
echo $_smarty_tpl->tpl_vars['actionlog']->value['del'];
} else { ?>&nbsp;<?php }?></td>
                                <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_contribution'] == 'y') {?>
                                    <td>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['actionlog']->value['contributions'], 'contribution', false, NULL, 'contribution', array (
  'first' => true,
  'index' => true,
));
$_smarty_tpl->tpl_vars['contribution']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['contribution']->value) {
$_smarty_tpl->tpl_vars['contribution']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_contribution']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_contribution']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_contribution']->value['index'];
?>
                                            <?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_contribution']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_contribution']->value['first'] : null)) {?>, <?php }?>
                                            <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['contribution']->value['name'] ));?>

                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </td>
                                    <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_contributor_wiki'] == 'y') {?>
                                        <td>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['actionlog']->value['contributors'], 'contributor', false, NULL, 'contributor', array (
  'first' => true,
  'index' => true,
));
$_smarty_tpl->tpl_vars['contributor']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['contributor']->value) {
$_smarty_tpl->tpl_vars['contributor']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_contributor']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_contributor']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_contributor']->value['index'];
?>
                                                <?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_contributor']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_contributor']->value['first'] : null)) {?>, <?php }?>
                                                <?php echo $_smarty_tpl->tpl_vars['contributor']->value['login'];?>

                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        </td>
                                    <?php }?>
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['tiki_p_admin']->value == 'y' && ($_smarty_tpl->tpl_vars['prefs']->value['feature_contribution'] == 'y' || $_smarty_tpl->tpl_vars['prefs']->value['feature_categories'] == 'y')) {?>
                                    <td class="action">
                                        <?php if ($_smarty_tpl->tpl_vars['actionlog']->value['actionId']) {?>
                                            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('actions', array());
$_block_repeat=true;
echo smarty_block_actions(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                <action><a href="tiki-admin_actionlog.php?actionId=<?php echo $_smarty_tpl->tpl_vars['actionlog']->value['actionId'];?>
&amp;startDate=<?php echo $_smarty_tpl->tpl_vars['startDate']->value;?>
&amp;endDate=<?php echo $_smarty_tpl->tpl_vars['endDate']->value;?>
#action"><?php echo smarty_function_icon(array('name'=>'edit','_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Edit"),$_smarty_tpl);?>
</a></action><action><a href="tiki-admin_actionlog.php?checked=<?php echo $_smarty_tpl->tpl_vars['actionlog']->value['actionId'];?>
&amp;action=remove" onclick="confirmPopup('Delete action from log?', '<?php echo smarty_function_ticket(array('mode'=>'get'),$_smarty_tpl);?>
')"><?php echo smarty_function_icon(array('name'=>'delete','_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Remove"),$_smarty_tpl);?>
</a></action>
                                            <?php $_block_repeat=false;
echo smarty_block_actions(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                        <?php }?>
                                    </td>
                                <?php }?>
                            </tr>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </table>
                </div>
                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('pagination_links', array('cant'=>$_smarty_tpl->tpl_vars['cant']->value,'step'=>$_smarty_tpl->tpl_vars['maxRecords']->value,'offset'=>$_smarty_tpl->tpl_vars['offset']->value));
$_block_repeat=true;
echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['cant']->value,'step'=>$_smarty_tpl->tpl_vars['maxRecords']->value,'offset'=>$_smarty_tpl->tpl_vars['offset']->value), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['cant']->value,'step'=>$_smarty_tpl->tpl_vars['maxRecords']->value,'offset'=>$_smarty_tpl->tpl_vars['offset']->value), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_banning'] == 'y') {?>
                    <div class="input-group col-sm-8">
                        <select class="form-control" name="action">
                            <option value="no_action" selected="selected">
                                Select action to perform with checked...
                            </option>
                            <option value="ban">
                                Ban
                            </option>
                            <option
                                value="remove"
                                class="confirm-popup"
                                data-confirm-text="Delete selected actions from log?"
                            >
                                Remove
                            </option>
                        </select>
                        <span class="input-group-append">
                            <button
                                type="submit"
                                class="btn btn-primary"
                                onclick="confirmPopup()"
                            >
                                OK
                            </button>
                        </span>
                    </div>
                <?php }?>
            </form>
        <?php }?> 

        <?php if ($_smarty_tpl->tpl_vars['action']->value) {?>
            <a id="action">
            <h2>Edit Action</h2>

            <form method="post" action="tiki-admin_actionlog.php">
                <?php echo smarty_function_ticket(array(),$_smarty_tpl);?>

                <input type="hidden" name="actionId" value="<?php echo $_smarty_tpl->tpl_vars['action']->value['actionId'];?>
">
                <input type="hidden" name="list" value="y">
                <?php if ($_smarty_tpl->tpl_vars['selectedUsers']->value) {?><input type="hidden" name="selectedUsers" value="<?php echo $_smarty_tpl->tpl_vars['selectedUsers']->value;?>
"><?php }?>
                <?php if ($_smarty_tpl->tpl_vars['selectedGroups']->value) {?><input type="hidden" name="selectedGroups" value="<?php echo $_smarty_tpl->tpl_vars['selectedGroups']->value;?>
"><?php }?>
                <?php if ($_smarty_tpl->tpl_vars['startDate']->value) {?><input type="hidden" name="startDate" value="<?php echo $_smarty_tpl->tpl_vars['startDate']->value;?>
"><?php }?>
                <?php if ($_smarty_tpl->tpl_vars['endDate']->value) {?><input type="hidden" name="endDate" value="<?php echo $_smarty_tpl->tpl_vars['endDate']->value;?>
"><?php }?>
                <?php echo $_smarty_tpl->tpl_vars['action']->value['action'];?>
 / <?php echo $_smarty_tpl->tpl_vars['action']->value['objectType'];?>
 / <?php echo $_smarty_tpl->tpl_vars['action']->value['object'];?>

                <div class="table-responsive">
                    <table class="table">
                        <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_contribution'] == 'y') {?>
                            <?php $_smarty_tpl->_subTemplateRender('file:contribution.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('section'=>$_smarty_tpl->tpl_vars['action']->value['objectType']), 0, false);
?>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_categories'] == 'y') {?>
                            <?php $_smarty_tpl->_subTemplateRender('file:categorize.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                        <?php }?>
                        <tr>
                            <td>&nbsp;</td>
                            <td>
                                <input type="submit" class="btn btn-primary btn-sm" name="saveAction"
                                    value="Save Action">
                            </td>
                        </tr>
                    </table>
                </div>
            </form>
        <?php }?>

        <?php if ((isset($_smarty_tpl->tpl_vars['userActions']->value))) {?>
            <h2 id="Statistics">Statistics
                <?php if ($_smarty_tpl->tpl_vars['selectedUsers']->value) {?>
                    &nbsp;&mdash;&nbsp;
                    User:
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'auser', false, 'ix');
$_smarty_tpl->tpl_vars['auser']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ix']->value => $_smarty_tpl->tpl_vars['auser']->value) {
$_smarty_tpl->tpl_vars['auser']->do_else = false;
?>
                        <?php if ($_smarty_tpl->tpl_vars['selectedUsers']->value[$_smarty_tpl->tpl_vars['ix']->value] == 'y') {?>
                            <?php echo smarty_modifier_username($_smarty_tpl->tpl_vars['auser']->value);?>

                        <?php }?>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['selectedGroups']->value) {?>
                    &nbsp;&mdash;&nbsp;
                    Group:
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['groups']->value, 'group', false, 'ix');
$_smarty_tpl->tpl_vars['group']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ix']->value => $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->do_else = false;
?>
                        <?php if ($_smarty_tpl->tpl_vars['selectedGroups']->value[$_smarty_tpl->tpl_vars['group']->value] == 'y') {?>
                            <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['group']->value ));?>

                        <?php }?>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['reportCategory']->value) {?>
                    &nbsp;&mdash;&nbsp;
                    Category:
                    <?php echo $_smarty_tpl->tpl_vars['reportCateg']->value;?>

                <?php }?>
            </h2>
            <i>Volumes are equally distributed on each contributors/author</i>

            <?php if ($_smarty_tpl->tpl_vars['showLogin']->value == 'y' && count($_smarty_tpl->tpl_vars['logTimes']->value) != 0) {?>
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <caption>Log in</caption>
                        <tr>
                            <?php if (count($_smarty_tpl->tpl_vars['selectedUsers']->value) > 0) {?>
                                <th>User</th>
                            <?php }?>
                            <th>connection time</th>
                            <th>connection seconds</th>
                            <th>Log in</th>
                        </tr>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['logTimes']->value, 'time', false, 'auser');
$_smarty_tpl->tpl_vars['time']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['auser']->value => $_smarty_tpl->tpl_vars['time']->value) {
$_smarty_tpl->tpl_vars['time']->do_else = false;
?>
                            <tr>
                                <?php if (count($_smarty_tpl->tpl_vars['selectedUsers']->value) > 0) {?>
                                    <td><?php echo smarty_modifier_username($_smarty_tpl->tpl_vars['auser']->value);?>
</td>
                                <?php }?>
                                <td>
                                    <?php echo $_smarty_tpl->tpl_vars['time']->value['days'];?>
 days <?php echo $_smarty_tpl->tpl_vars['time']->value['hours'];?>
 hours <?php echo $_smarty_tpl->tpl_vars['time']->value['mins'];?>
 mns
                                </td>
                                <td><?php echo $_smarty_tpl->tpl_vars['time']->value['time'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['time']->value['nbLogins'];?>
</td>
                            </tr>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </table>
                </div>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['showCateg']->value == 'y' && count($_smarty_tpl->tpl_vars['volCateg']->value) != 0 && $_smarty_tpl->tpl_vars['tiki_p_admin']->value == 'y') {?>
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <caption>Volume per category</caption>
                        <tr>
                            <th>Category</th>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['typeVol']->value, 'type');
$_smarty_tpl->tpl_vars['type']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['type']->value) {
$_smarty_tpl->tpl_vars['type']->do_else = false;
?>
                                <th><?php echo $_smarty_tpl->tpl_vars['type']->value;?>
 (+<?php if ($_smarty_tpl->tpl_vars['unit']->value == 'kb') {?>kb<?php } else { ?>bytes<?php }?>)</th>
                                <th><?php echo $_smarty_tpl->tpl_vars['type']->value;?>
 (-<?php if ($_smarty_tpl->tpl_vars['unit']->value == 'kb') {?>kb<?php } else { ?>bytes<?php }?>)</th>
                                <th><?php echo $_smarty_tpl->tpl_vars['type']->value;?>
 (<?php if ($_smarty_tpl->tpl_vars['unit']->value == 'kb') {?>kb<?php } else { ?>bytes<?php }?>)</th>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </tr>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['volCateg']->value, 'vol', false, 'categId');
$_smarty_tpl->tpl_vars['vol']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['categId']->value => $_smarty_tpl->tpl_vars['vol']->value) {
$_smarty_tpl->tpl_vars['vol']->do_else = false;
?>
                            <tr>
                                <td><?php echo $_smarty_tpl->tpl_vars['vol']->value['category'];?>
</td>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['typeVol']->value, 'type');
$_smarty_tpl->tpl_vars['type']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['type']->value) {
$_smarty_tpl->tpl_vars['type']->do_else = false;
?>
                                    <td class="<?php if ($_smarty_tpl->tpl_vars['vol']->value[$_smarty_tpl->tpl_vars['type']->value]['add']) {?> diffadded<?php }?>"><?php if ($_smarty_tpl->tpl_vars['vol']->value[$_smarty_tpl->tpl_vars['type']->value]['add']) {
echo $_smarty_tpl->tpl_vars['vol']->value[$_smarty_tpl->tpl_vars['type']->value]['add'];
} else { ?>0<?php }?></td>
                                    <td class="<?php if ($_smarty_tpl->tpl_vars['vol']->value[$_smarty_tpl->tpl_vars['type']->value]['del']) {?> diffdeleted<?php }?>"><?php if ($_smarty_tpl->tpl_vars['vol']->value[$_smarty_tpl->tpl_vars['type']->value]['del']) {
echo $_smarty_tpl->tpl_vars['vol']->value[$_smarty_tpl->tpl_vars['type']->value]['del'];
} else { ?>0<?php }?></td>
                                    <td class="<?php if ($_smarty_tpl->tpl_vars['vol']->value[$_smarty_tpl->tpl_vars['type']->value]['dif'] > 0) {?> diffadded<?php } elseif ($_smarty_tpl->tpl_vars['vol']->value[$_smarty_tpl->tpl_vars['type']->value]['dif'] < 0) {?> diffdeleted<?php }?>"><?php if ($_smarty_tpl->tpl_vars['vol']->value[$_smarty_tpl->tpl_vars['type']->value]['dif']) {
echo $_smarty_tpl->tpl_vars['vol']->value[$_smarty_tpl->tpl_vars['type']->value]['dif'];
} else { ?>0<?php }?></td>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </tr>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </table>
                </div>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['showCateg']->value == 'y' && count($_smarty_tpl->tpl_vars['volUserCateg']->value) != 0) {?>
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <caption>Volume per category and per user</caption>
                        <tr>
                            <th>Category</th>
                            <th>User</th>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['typeVol']->value, 'type');
$_smarty_tpl->tpl_vars['type']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['type']->value) {
$_smarty_tpl->tpl_vars['type']->do_else = false;
?>
                                <th><?php echo $_smarty_tpl->tpl_vars['type']->value;?>
 (+<?php if ($_smarty_tpl->tpl_vars['unit']->value == 'kb') {?>kb<?php } else { ?>bytes<?php }?>)</th>
                                <th><?php echo $_smarty_tpl->tpl_vars['type']->value;?>
 (-<?php if ($_smarty_tpl->tpl_vars['unit']->value == 'kb') {?>kb<?php } else { ?>bytes<?php }?>)</th>
                                <th><?php echo $_smarty_tpl->tpl_vars['type']->value;?>
 (<?php if ($_smarty_tpl->tpl_vars['unit']->value == 'kb') {?>kb<?php } else { ?>bytes<?php }?>)</th>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </tr>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['volUserCateg']->value, 'vol', false, 'categId');
$_smarty_tpl->tpl_vars['vol']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['categId']->value => $_smarty_tpl->tpl_vars['vol']->value) {
$_smarty_tpl->tpl_vars['vol']->do_else = false;
?>
                            <tr>
                                <td><?php echo $_smarty_tpl->tpl_vars['vol']->value['category'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['vol']->value['user'];?>
</td>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['typeVol']->value, 'type');
$_smarty_tpl->tpl_vars['type']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['type']->value) {
$_smarty_tpl->tpl_vars['type']->do_else = false;
?>
                                    <td class="<?php if ($_smarty_tpl->tpl_vars['vol']->value[$_smarty_tpl->tpl_vars['type']->value]['add']) {?> diffadded<?php }?>"><?php if ($_smarty_tpl->tpl_vars['vol']->value[$_smarty_tpl->tpl_vars['type']->value]['add']) {
echo $_smarty_tpl->tpl_vars['vol']->value[$_smarty_tpl->tpl_vars['type']->value]['add'];
} else { ?>0<?php }?></td>
                                    <td class="<?php if ($_smarty_tpl->tpl_vars['vol']->value[$_smarty_tpl->tpl_vars['type']->value]['del']) {?> diffdeleted<?php }?>"><?php if ($_smarty_tpl->tpl_vars['vol']->value[$_smarty_tpl->tpl_vars['type']->value]['del']) {
echo $_smarty_tpl->tpl_vars['vol']->value[$_smarty_tpl->tpl_vars['type']->value]['del'];
} else { ?>0<?php }?></td>
                                    <td class="<?php if ($_smarty_tpl->tpl_vars['vol']->value[$_smarty_tpl->tpl_vars['type']->value]['dif'] > 0) {?> diffadded<?php } elseif ($_smarty_tpl->tpl_vars['vol']->value[$_smarty_tpl->tpl_vars['type']->value]['dif'] < 0) {?> diffdeleted<?php }?>"><?php if ($_smarty_tpl->tpl_vars['vol']->value[$_smarty_tpl->tpl_vars['type']->value]['dif']) {
echo $_smarty_tpl->tpl_vars['vol']->value[$_smarty_tpl->tpl_vars['type']->value]['dif'];
} else { ?>0<?php }?></td>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </tr>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </table>
                </div>
            <?php }?>

            <?php if (count($_smarty_tpl->tpl_vars['userActions']->value) != 0) {?>
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <caption>Number of actions per user</caption>
                        <tr>
                            <th>User</th>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['userActions']->value[0], 'nb', false, 'title');
$_smarty_tpl->tpl_vars['nb']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['title']->value => $_smarty_tpl->tpl_vars['nb']->value) {
$_smarty_tpl->tpl_vars['nb']->do_else = false;
?>
                                <?php if ($_smarty_tpl->tpl_vars['title']->value != 'user') {?>
                                    <th><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( smarty_modifier_replace($_smarty_tpl->tpl_vars['title']->value,"/"," ") ));?>
</th>
                                <?php }?>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </tr>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['userActions']->value, 'stat', false, NULL, 'userActions', array (
  'total' => true,
));
$_smarty_tpl->tpl_vars['stat']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['stat']->value) {
$_smarty_tpl->tpl_vars['stat']->do_else = false;
?>
                            <tr>
                                <td class="username"><?php echo smarty_modifier_username($_smarty_tpl->tpl_vars['stat']->value['user']);?>
</td>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['stat']->value, 'nb', false, 'a');
$_smarty_tpl->tpl_vars['nb']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['a']->value => $_smarty_tpl->tpl_vars['nb']->value) {
$_smarty_tpl->tpl_vars['nb']->do_else = false;
?>
                                    <?php if ($_smarty_tpl->tpl_vars['a']->value != 'user') {?>
                                        <td class="integer"><?php echo $_smarty_tpl->tpl_vars['nb']->value;?>
</td>
                                    <?php }?>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </tr>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </table>
                </div>
                Total number of users: <?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_userActions']->value['total']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_userActions']->value['total'] : null);?>

            <?php }?>

            <?php if (count($_smarty_tpl->tpl_vars['objectActions']->value) != 0) {?>
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <caption>Number of actions per object</caption>
                        <tr>
                            <th>Object</th>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['objectActions']->value[0], 'nb', false, 'title');
$_smarty_tpl->tpl_vars['nb']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['title']->value => $_smarty_tpl->tpl_vars['nb']->value) {
$_smarty_tpl->tpl_vars['nb']->do_else = false;
?>
                                <?php if ($_smarty_tpl->tpl_vars['title']->value != 'object' && $_smarty_tpl->tpl_vars['title']->value != 'link') {?>
                                    <th><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( smarty_modifier_replace($_smarty_tpl->tpl_vars['title']->value,"/"," ") ));?>
</th><?php }?>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </tr>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['objectActions']->value, 'stat', false, NULL, 'objectActions', array (
  'total' => true,
));
$_smarty_tpl->tpl_vars['stat']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['stat']->value) {
$_smarty_tpl->tpl_vars['stat']->do_else = false;
?>
                            <tr>
                                <td class="text">
                                    <?php if ($_smarty_tpl->tpl_vars['stat']->value['link']) {?>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['stat']->value['link'];?>
" target="_blank" title="View"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['stat']->value['object'] ));?>
</a>
                                    <?php } else { ?>
                                        <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['stat']->value['object'] ));?>

                                    <?php }?>
                                </td>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['stat']->value, 'nb', false, 'a');
$_smarty_tpl->tpl_vars['nb']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['a']->value => $_smarty_tpl->tpl_vars['nb']->value) {
$_smarty_tpl->tpl_vars['nb']->do_else = false;
?>
                                    <?php if ($_smarty_tpl->tpl_vars['a']->value != 'object' && $_smarty_tpl->tpl_vars['a']->value != 'link') {?>
                                        <td class="integer"><?php echo $_smarty_tpl->tpl_vars['nb']->value;?>
</td>
                                    <?php }?>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </tr>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </table>
                </div>
                Total number of objects: <?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_objectActions']->value['total']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_objectActions']->value['total'] : null);?>

            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['showbigbluebutton']->value == 'y' && count($_smarty_tpl->tpl_vars['stay_in_big_Times']->value) != 0) {?>
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <caption>Bigbluebutton</caption>
                        <tr>
                            <th>User</th>
                            <th>Object</th>
                            <th>Time in bigbluebutton (in minutes)</th>
                        </tr>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['stay_in_big_Times']->value, 'room', false, 'user');
$_smarty_tpl->tpl_vars['room']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['user']->value => $_smarty_tpl->tpl_vars['room']->value) {
$_smarty_tpl->tpl_vars['room']->do_else = false;
?>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['room']->value, 'values', false, 'room_name');
$_smarty_tpl->tpl_vars['values']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['room_name']->value => $_smarty_tpl->tpl_vars['values']->value) {
$_smarty_tpl->tpl_vars['values']->do_else = false;
?>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['values']->value, 'value', false, 'inc');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['inc']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
                                    <tr>
                                        <td><?php echo $_smarty_tpl->tpl_vars['user']->value;?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['room_name']->value;?>
</td>
                                        <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['value']->value)===null||$tmp==='' ? '0' : $tmp);?>
</td>
                                    </tr>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        <tr>
                            <td>
                                <?php if ($_smarty_tpl->tpl_vars['tiki_p_admin']->value == 'y') {?>
                                    <form method="post" action="<?php echo $_SERVER['SCRIPT_NAME'];?>
?<?php echo $_SERVER['QUERY_STRING'];?>
"/>
                                        <span class="input_submit_container">
                                        <input type="submit" class="btn btn-primary btn-sm" name="export_bbb" value="Export" />
                                        </span>
                                    </form>
                                <?php }?>
                            </td>
                            <td></td>
                            <td></td>
                        </tr>
                    </table>
                </div>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['showCateg']->value == 'y' && $_smarty_tpl->tpl_vars['tiki_p_admin']->value == 'y') {?>
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <caption>Number of actions per category</caption>
                        <tr>
                            <th>Category</th>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['statCateg']->value[0], 'nb', false, 'title');
$_smarty_tpl->tpl_vars['nb']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['title']->value => $_smarty_tpl->tpl_vars['nb']->value) {
$_smarty_tpl->tpl_vars['nb']->do_else = false;
?>
                                <?php if ($_smarty_tpl->tpl_vars['title']->value != 'category') {?>
                                    <th><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( smarty_modifier_replace($_smarty_tpl->tpl_vars['title']->value,"/"," ") ));?>
</th>
                                <?php }?>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </tr>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['statCateg']->value, 'stat', false, 'categId');
$_smarty_tpl->tpl_vars['stat']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['categId']->value => $_smarty_tpl->tpl_vars['stat']->value) {
$_smarty_tpl->tpl_vars['stat']->do_else = false;
?>
                            <tr>
                                <td class="text"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['stat']->value['category'] ));?>
</td>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['statCateg']->value[$_smarty_tpl->tpl_vars['categId']->value], 'nb', false, 'a');
$_smarty_tpl->tpl_vars['nb']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['a']->value => $_smarty_tpl->tpl_vars['nb']->value) {
$_smarty_tpl->tpl_vars['nb']->do_else = false;
?>
                                    <?php if ($_smarty_tpl->tpl_vars['a']->value != 'category') {?>
                                        <td class="integer"><?php echo $_smarty_tpl->tpl_vars['nb']->value;?>
</td>
                                    <?php }?>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                <!-- <?php echo smarty_function_cycle(array(),$_smarty_tpl);?>
 -->
                            </tr>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </table>
                </div>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['showCateg']->value == 'y' && count($_smarty_tpl->tpl_vars['statUserCateg']->value) != 0) {?>
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <caption>Number of actions per category and per user</caption>
                        <tr>
                            <th>Category</th>
                            <th>User</th>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['userActions']->value[0], 'nb', false, 'title');
$_smarty_tpl->tpl_vars['nb']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['title']->value => $_smarty_tpl->tpl_vars['nb']->value) {
$_smarty_tpl->tpl_vars['nb']->do_else = false;
?>
                                <?php if ($_smarty_tpl->tpl_vars['title']->value != 'user') {?>
                                    <th><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['title']->value,"/"," ");?>
</th>
                                <?php }?>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </tr>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['statUserCateg']->value, 'stat', false, 'categUser');
$_smarty_tpl->tpl_vars['stat']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['categUser']->value => $_smarty_tpl->tpl_vars['stat']->value) {
$_smarty_tpl->tpl_vars['stat']->do_else = false;
?>
                            <tr>
                                <td class="text"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['stat']->value['category'] ));?>
</td>
                                <td class="username"><?php echo smarty_modifier_username($_smarty_tpl->tpl_vars['stat']->value['user']);?>
</td>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['stat']->value, 'nb', false, 'a');
$_smarty_tpl->tpl_vars['nb']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['a']->value => $_smarty_tpl->tpl_vars['nb']->value) {
$_smarty_tpl->tpl_vars['nb']->do_else = false;
?>
                                    <?php if ($_smarty_tpl->tpl_vars['a']->value != 'category' && $_smarty_tpl->tpl_vars['a']->value != 'user') {?>
                                        <td class="integer"><?php echo $_smarty_tpl->tpl_vars['nb']->value;?>
</td>
                                    <?php }?>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </tr>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </table>
                </div>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_contribution'] == 'y' && (isset($_smarty_tpl->tpl_vars['groupContributions']->value)) && count($_smarty_tpl->tpl_vars['groupContributions']->value) >= 1) {?>
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <caption>
                            <?php if ($_smarty_tpl->tpl_vars['selectedUsers']->value) {?>
                                Volume per the users' group and per contribution
                            <?php } else { ?>
                                Volume per group and per contribution
                            <?php }?>
                        </caption>
                        <tr>
                            <th>Group</th>
                            <th>Contribution</th>
                            <th>+<?php if ($_smarty_tpl->tpl_vars['unit']->value == 'kb') {?>kb<?php } else { ?>bytes<?php }?></th>
                            <th>-<?php if ($_smarty_tpl->tpl_vars['unit']->value == 'kb') {?>kb<?php } else { ?>bytes<?php }?></th>
                        </tr>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['groupContributions']->value, 'contributions', false, 'group');
$_smarty_tpl->tpl_vars['contributions']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['group']->value => $_smarty_tpl->tpl_vars['contributions']->value) {
$_smarty_tpl->tpl_vars['contributions']->do_else = false;
?>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['contributions']->value, 'stat', false, 'contribution');
$_smarty_tpl->tpl_vars['stat']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['contribution']->value => $_smarty_tpl->tpl_vars['stat']->value) {
$_smarty_tpl->tpl_vars['stat']->do_else = false;
?>
                                <tr>
                                    <td class="text"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['group']->value ));?>
</td>
                                    <td class="text"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['contribution']->value ));?>
</td>
                                    <td class="integer"><?php echo $_smarty_tpl->tpl_vars['stat']->value['add'];?>
</td>
                                    <td class="integer"><?php echo $_smarty_tpl->tpl_vars['stat']->value['del'];?>
</td>
                                </tr>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </table>
                </div>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_contribution'] == 'y' && (isset($_smarty_tpl->tpl_vars['userContributions']->value)) && count($_smarty_tpl->tpl_vars['userContributions']->value) >= 1) {?>
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <caption>Volume per user and per contribution</caption>
                        <tr>
                            <th>User</th>
                            <th>Contribution</th>
                            <th>+<?php if ($_smarty_tpl->tpl_vars['unit']->value == 'kb') {?>kb<?php } else { ?>bytes<?php }?></th>
                            <th>-<?php if ($_smarty_tpl->tpl_vars['unit']->value == 'kb') {?>kb<?php } else { ?>bytes<?php }?></th>
                        </tr>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['userContributions']->value, 'contributions', false, 'user');
$_smarty_tpl->tpl_vars['contributions']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['user']->value => $_smarty_tpl->tpl_vars['contributions']->value) {
$_smarty_tpl->tpl_vars['contributions']->do_else = false;
?>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['contributions']->value, 'stat', false, 'contribution');
$_smarty_tpl->tpl_vars['stat']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['contribution']->value => $_smarty_tpl->tpl_vars['stat']->value) {
$_smarty_tpl->tpl_vars['stat']->do_else = false;
?>
                                <tr>
                                    <td class="username"><?php echo smarty_modifier_username($_smarty_tpl->tpl_vars['user']->value);?>
</td>
                                    <td class="text"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['stat']->value['name'] ));?>
</td>
                                    <td class="integer"><?php echo $_smarty_tpl->tpl_vars['stat']->value['stat']['add'];?>
</td>
                                    <td class="integer"><?php echo $_smarty_tpl->tpl_vars['stat']->value['stat']['del'];?>
</td>
                                </tr>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </table>
                </div>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_contribution'] == 'y' && (isset($_smarty_tpl->tpl_vars['contributionStat']->value))) {?>
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <caption><?php if ($_smarty_tpl->tpl_vars['selectedUsers']->value) {?>Volume per users' contribution and time<?php } else { ?>Volume per contribution and time<?php }?></caption>
                        <tr>
                            <th>Contribution</th>
                            <th colspan="<?php echo $_smarty_tpl->tpl_vars['contributionNbCols']->value;?>
"><?php if ($_smarty_tpl->tpl_vars['contribTime']->value == 'd') {?>Days<?php } else { ?>Weeks<?php }?></th>
                        </tr>
                        <tr>
                            <th></th>
                            <?php
$__section_foo_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['contributionNbCols']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_foo_0_start = min(0, $__section_foo_0_loop);
$__section_foo_0_total = min(($__section_foo_0_loop - $__section_foo_0_start), $__section_foo_0_loop);
$_smarty_tpl->tpl_vars['__smarty_section_foo'] = new Smarty_Variable(array());
if ($__section_foo_0_total !== 0) {
for ($__section_foo_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_foo']->value['index'] = $__section_foo_0_start; $__section_foo_0_iteration <= $__section_foo_0_total; $__section_foo_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_foo']->value['index']++){
?>
                                <th><?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_foo']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_foo']->value['index'] : null)+1;?>
</th>
                            <?php
}
}
?>
                        </tr>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['contributionStat']->value, 'contribution', false, 'contributionId');
$_smarty_tpl->tpl_vars['contribution']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['contributionId']->value => $_smarty_tpl->tpl_vars['contribution']->value) {
$_smarty_tpl->tpl_vars['contribution']->do_else = false;
?>
                            <tr>
                                <td><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['contribution']->value['name'] ));?>
</td>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['contribution']->value['stat'], 'stat');
$_smarty_tpl->tpl_vars['stat']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['stat']->value) {
$_smarty_tpl->tpl_vars['stat']->do_else = false;
?>
                                    <td>
                                        <?php if (!empty($_smarty_tpl->tpl_vars['stat']->value['add'])) {?><span class="diffadded"><?php echo $_smarty_tpl->tpl_vars['stat']->value['add'];?>
</span><?php }?>
                                        <br>
                                        <?php if (!empty($_smarty_tpl->tpl_vars['stat']->value['del'])) {?><span class="diffdeleted"><?php echo $_smarty_tpl->tpl_vars['stat']->value['del'];?>
</span><?php }?>
                                        <br>
                                        <?php if (!empty($_smarty_tpl->tpl_vars['stat']->value['del']) || !empty($_smarty_tpl->tpl_vars['stat']->value['add'])) {
echo smarty_function_math(array('equation'=>'x'-'y','x'=>$_smarty_tpl->tpl_vars['stat']->value['add'],'y'=>$_smarty_tpl->tpl_vars['stat']->value['del']),$_smarty_tpl);
}?>
                                        <br>
                                    </td>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </tr>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </table>
                </div>
            <?php }?>

        <?php }?> 

    <?php $_block_repeat=false;
echo smarty_block_tab(array('name'=>"Report"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>


    
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tab', array('name'=>"Settings"));
$_block_repeat=true;
echo smarty_block_tab(array('name'=>"Settings"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <a id="Setting"></a>
        <h2>Settings</h2>
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>"tip",'title'=>"How"));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"How"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        You need to check out the recorded box for each action type we may be interested to have some report later. To see a report of some action types, select the reported checkboxes of these action types, goto the Report tab and select additional filters. The report will only contains the actions that occurred since the action type has been set to recorded. Wiki page actions except viewed will always be recorded but can be not reported.
        <?php $_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"How"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <form method="post" action="tiki-admin_actionlog.php">
            <?php echo smarty_function_ticket(array(),$_smarty_tpl);?>

            <?php if (!empty($_smarty_tpl->tpl_vars['sort_mode']->value)) {?><input type="hidden" name="sort_mode" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['sort_mode']->value ));?>
"><?php }?>
            <fieldset>
                <legend>Filter</legend>
                <div class="form-group row">
                    <div class="col-sm-5">
                        <label for="action_log_type">Type</label>
                        <select id="action_log_type" name="action_log_type" class="form-control">
                            <option value="" <?php if (empty($_smarty_tpl->tpl_vars['action_log_type']->value)) {?> selected="selected" <?php }?>>All</option>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['action_log_types']->value, 'type');
$_smarty_tpl->tpl_vars['type']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['type']->value) {
$_smarty_tpl->tpl_vars['type']->do_else = false;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
" <?php if (!empty($_smarty_tpl->tpl_vars['action_log_type']->value) && $_smarty_tpl->tpl_vars['type']->value == $_smarty_tpl->tpl_vars['action_log_type']->value) {?> selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['type']->value;?>
</option>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </select>
                    </div>

                    <div class="col-sm-5">
                        <label for="action_log_action">Action</label>
                        <select id="action_log_action" name="action_log_action" class="form-control">
                            <option value="" <?php if (empty($_smarty_tpl->tpl_vars['action_log_action']->value)) {?> selected="selected" <?php }?>>All</option>
                            <option value="\%" <?php if (!empty($_smarty_tpl->tpl_vars['action_log_action']->value) && $_smarty_tpl->tpl_vars['action_log_action']->value == '\%') {?> selected="selected" <?php }?>>
                                *
                            </option>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['action_log_actions']->value, 'action');
$_smarty_tpl->tpl_vars['action']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['action']->value) {
$_smarty_tpl->tpl_vars['action']->do_else = false;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['type']->value == $_smarty_tpl->tpl_vars['action_log_action']->value) {?> selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['action']->value;?>
</option>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </select>
                    </div>
                </div>

                <div class="col-sm-12">
                    <span class="input_submit_container">
                        <input type="submit" class="btn btn-primary btn-sm" name="search" value="Search">
                    </span>
                </div>
            </fieldset>
            <br class="clearfix"/>

            <div class="form-group row">
                <div class="col-sm-1 offset-sm-11">
                    <input type="submit" class="btn btn-primary btn-sm" name="save" value="Set">
                </div>
            </div>
            <div class="form-group row">
                
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <?php if ($_smarty_tpl->tpl_vars['tiki_p_admin']->value == 'y') {?>
                                    <th class="text-center">Recorded</th>
                                <?php }?>
                                <th class="text-center">Reported</th>
                                <th class="text-center">Action</th>
                                <th class="text-center">Type</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <?php if ($_smarty_tpl->tpl_vars['tiki_p_admin']->value == 'y') {?>
                                    <td class="checkbox-cell">
                                        <div class="form-check all_recorded">
                                            <input type="checkbox" class="form-check-input" id="select_all_recorded" />
                                        </div>
                                    </td>
                                <?php }?>
                                <td class="checkbox-cell">
                                    <div class="form-check ">
                                        <input type="checkbox" class="form-check-input" id="select_all_reported" >
                                    </div>
                                </td>
                                <td class="text-center">All</td>
                                <td class="text-center">All</td>
                            </tr>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['action_log_conf_selected']->value, 'actionlog');
$_smarty_tpl->tpl_vars['actionlog']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['actionlog']->value) {
$_smarty_tpl->tpl_vars['actionlog']->do_else = false;
?>
                                <tr>
                                    <?php if ($_smarty_tpl->tpl_vars['tiki_p_admin']->value == 'y') {?>
                                        <td class="checkbox-cell " id>
                                            <div class="form-check all_recorded">
                                                <input type="checkbox" class="form-check-input" name="<?php echo $_smarty_tpl->tpl_vars['actionlog']->value['code'];?>
"
                                                <?php if ($_smarty_tpl->tpl_vars['actionlog']->value['status'] == 'y' || $_smarty_tpl->tpl_vars['actionlog']->value['status'] == 'v') {?>checked="checked"<?php }?>>
                                            </div>
                                        </td>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['tiki_p_admin']->value == 'y' || $_smarty_tpl->tpl_vars['actionlog']->value['status'] == 'y' || $_smarty_tpl->tpl_vars['actionlog']->value['status'] == 'v') {?>
                                        <td class="checkbox-cell">
                                            <div class="form-check all_reported">
                                                <input type="checkbox" class="form-check-input" name="v_<?php echo $_smarty_tpl->tpl_vars['actionlog']->value['code'];?>
"
                                                <?php if ($_smarty_tpl->tpl_vars['actionlog']->value['status'] == 'v') {?>checked="checked"<?php }?>>
                                            </div>
                                        </td>
                                        <td class="text text-center"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tr', array());
$_block_repeat=true;
echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo $_smarty_tpl->tpl_vars['actionlog']->value['action'];
$_block_repeat=false;
echo smarty_block_tr(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></td>
                                        <td class="text text-center"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tr', array());
$_block_repeat=true;
echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo $_smarty_tpl->tpl_vars['actionlog']->value['objectType'];
$_block_repeat=false;
echo smarty_block_tr(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></td>
                                    <?php }?>
                                </tr>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </tbody>
                    </table>
                </div>
                
            </div>
            <div class="form-group row">
                <div class="col-sm-1 offset-sm-11">
                    <input type="submit" class="btn btn-primary btn-sm" name="save" value="Set"\>
                </div>
            </div>
        </form>
    <?php $_block_repeat=false;
echo smarty_block_tab(array('name'=>"Settings"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_repeat=false;
echo smarty_block_tabset(array('name'=>"admin_actionlog"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
