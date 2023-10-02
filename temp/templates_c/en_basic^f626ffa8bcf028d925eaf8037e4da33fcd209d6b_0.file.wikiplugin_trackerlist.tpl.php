<?php
/* Smarty version 3.1.48, created on 2023-09-29 11:16:29
  from '/home/teddieme/tedd1eme/templates/wiki-plugins/wikiplugin_trackerlist.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6516a3fd371686_14866134',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f626ffa8bcf028d925eaf8037e4da33fcd209d6b' => 
    array (
      0 => '/home/teddieme/tedd1eme/templates/wiki-plugins/wikiplugin_trackerlist.tpl',
      1 => 1689085248,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:tracker_sort_input.tpl' => 1,
    'file:tablesorter/totals.tpl' => 1,
    'file:tracker_pretty_item.tpl' => 1,
  ),
),false)) {
function content_6516a3fd371686_14866134 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/block.wiki.php','function'=>'smarty_block_wiki',),1=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/block.remarksbox.php','function'=>'smarty_block_remarksbox',),2=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/block.jq.php','function'=>'smarty_block_jq',),3=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/function.icon.php','function'=>'smarty_function_icon',),4=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/function.initials_filter_links.php','function'=>'smarty_function_initials_filter_links',),5=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/block.wikiplugin.php','function'=>'smarty_block_wikiplugin',),6=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/block.self_link.php','function'=>'smarty_block_self_link',),7=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/modifier.replacei.php','function'=>'smarty_modifier_replacei',),8=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/function.trackeroutput.php','function'=>'smarty_function_trackeroutput',),9=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/block.tr.php','function'=>'smarty_block_tr',),10=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/function.button.php','function'=>'smarty_function_button',),11=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/block.pagination_links.php','function'=>'smarty_block_pagination_links',),12=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/function.object_link.php','function'=>'smarty_function_object_link',),13=>array('file'=>'/home/teddieme/tedd1eme/vendor_bundled/vendor/smarty/smarty/libs/plugins/function.cycle.php','function'=>'smarty_function_cycle',),14=>array('file'=>'/home/teddieme/tedd1eme/vendor_bundled/vendor/smarty/smarty/libs/plugins/function.math.php','function'=>'smarty_function_math',),15=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/modifier.tiki_date_format.php','function'=>'smarty_modifier_tiki_date_format',),16=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/modifier.tiki_short_datetime.php','function'=>'smarty_modifier_tiki_short_datetime',),17=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/modifier.tiki_short_date.php','function'=>'smarty_modifier_tiki_short_date',),18=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/function.trackerheader.php','function'=>'smarty_function_trackerheader',),));
?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', 'tdinstyle', null);?>overflow:hidden<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', 'tdstyle', null);?>style="<?php echo $_smarty_tpl->tpl_vars['tdinstyle']->value;?>
"<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', 'tdastyle', null);?>style="margin:-10em;padding:10em;display:block"<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', 'txturl', null);
if ((isset($_smarty_tpl->tpl_vars['showlinks']->value)) && $_smarty_tpl->tpl_vars['showlinks']->value == 'y') {
echo $_smarty_tpl->tpl_vars['url']->value;
}
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', 'rowurl', null);
if ((isset($_smarty_tpl->tpl_vars['showlinks']->value)) && $_smarty_tpl->tpl_vars['showlinks']->value == 'r') {
echo $_smarty_tpl->tpl_vars['url']->value;
}
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', 'showlinks', null);
if ((isset($_smarty_tpl->tpl_vars['showlinks']->value)) && $_smarty_tpl->tpl_vars['showlinks']->value == 'r') {?>n<?php } else {
echo $_smarty_tpl->tpl_vars['showlinks']->value;
}
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if ($_smarty_tpl->tpl_vars['showtitle']->value == 'y') {?><div class="pagetitle"><?php echo $_smarty_tpl->tpl_vars['tracker_info']->value['name'];?>
</div><?php }
if ($_smarty_tpl->tpl_vars['showdesc']->value == 'y') {?><div class="wikitext"><?php if ($_smarty_tpl->tpl_vars['tracker_info']->value['descriptionIsParsed'] == 'y') {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('wiki', array());
$_block_repeat=true;
echo smarty_block_wiki(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo $_smarty_tpl->tpl_vars['tracker_info']->value['description'];
$_block_repeat=false;
echo smarty_block_wiki(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
} else {
echo $_smarty_tpl->tpl_vars['tracker_info']->value['description'];
}?></div><?php }
if ($_smarty_tpl->tpl_vars['nonPublicFieldsWarning']->value) {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>'errors','title'=>"Field error"));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>'errors','title'=>"Field error"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo $_smarty_tpl->tpl_vars['nonPublicFieldsWarning']->value;
$_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>'errors','title'=>"Field error"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
if ($_smarty_tpl->tpl_vars['allowtableexpansion']->value == 'y') {?><button title="Expand table" class="btn btn-primary btn-sm table-expand-toggle" type="button" ><span class="icon far fa-caret-square-right fa-fw "></span></button><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('jq', array());
$_block_repeat=true;
echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            $(".table-expand-toggle").click(function(){
                var $this = $(this);
                if ( $this.data('expandStatus') != 'expanded' ) {
                    $this.data('expandStatus','expanded');
                    var $parentdiv = $(this).parent('div');
                    $parentdiv.find('div.table-responsive').each(function () {
                        $(this).removeClass('table-responsive').addClass('table');
                    }); // end each
                    $this.attr('title','Restore layout');
                    $this.children('span').removeClass('fa-caret-square-right').addClass('fa-caret-square-left');
                }else{
                    $this.data('expandStatus','responsive');
                    var $parentdiv = $(this).parent('div');
                    $parentdiv.find('div.table').each(function () {
                        $(this).addClass('table-responsive').removeClass('table');
                    }); // end each
                    $this.attr('title','Expand table');
                    $this.children('span').removeClass('fa-caret-square-left').addClass('fa-caret-square-right');
                }
            });
        <?php $_block_repeat=false;
echo smarty_block_jq(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
if ((isset($_smarty_tpl->tpl_vars['user_watching_tracker']->value))) {
if ($_smarty_tpl->tpl_vars['user_watching_tracker']->value == 'n') {?><a href="<?php echo $_SERVER['REQUEST_URI'];
if (strstr($_SERVER['REQUEST_URI'],'?')) {?>&amp;<?php } else { ?>?<?php }?>trackerId=<?php echo $_smarty_tpl->tpl_vars['listTrackerId']->value;?>
&amp;watch=add" title="Monitor" class="trackerlistwatch"><?php echo smarty_function_icon(array('name'=>'watch','align'=>"right",'hspace'=>"1",'class'=>'tips','title'=>":Monitor"),$_smarty_tpl);?>
</a><?php } elseif ($_smarty_tpl->tpl_vars['user_watching_tracker']->value == 'y') {?><a href="<?php echo $_SERVER['REQUEST_URI'];
if (strstr($_SERVER['REQUEST_URI'],'?')) {?>&amp;<?php } else { ?>?<?php }?>trackerId=<?php echo $_smarty_tpl->tpl_vars['listTrackerId']->value;?>
&amp;watch=stop" title="Stop Monitor" class="trackerlistwatch"><?php echo smarty_function_icon(array('name'=>'stop-watching','align'=>"right",'hspace'=>"1",'class'=>'tips','title'=>":Stop monitoring"),$_smarty_tpl);?>
</a><?php }
}
if ($_smarty_tpl->tpl_vars['showrss']->value == 'y') {?><a href="tiki-tracker_rss.php?trackerId=<?php echo $_smarty_tpl->tpl_vars['listTrackerId']->value;?>
"><?php echo smarty_function_icon(array('name'=>'rss','align'=>"right",'hspace'=>"1",'class'=>'tips','title'=>":RSS feed"),$_smarty_tpl);?>
</a><?php }
if (!empty($_smarty_tpl->tpl_vars['sortchoice']->value)) {?><div class="trackerlistsort"><form method="post"><?php $_smarty_tpl->_subTemplateRender('file:tracker_sort_input.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?><input type="submit" class="btn btn-primary btn-sm" name="sort" value="Sort"></form></div><?php }
if (!$_smarty_tpl->tpl_vars['tsOn']->value) {
if ($_smarty_tpl->tpl_vars['shownbitems']->value == 'y') {?><div class="nbitems">Items found: <span class='badge badge-secondary'><?php echo $_smarty_tpl->tpl_vars['count_item']->value;?>
</span></div><?php }
}
if (((isset($_smarty_tpl->tpl_vars['cant_pages']->value)) && $_smarty_tpl->tpl_vars['cant_pages']->value > 1 && !'tsOn') || $_smarty_tpl->tpl_vars['tr_initial']->value || $_smarty_tpl->tpl_vars['showinitials']->value == 'y') {
echo smarty_function_initials_filter_links(array('_initial'=>'tr_initial'),$_smarty_tpl);
}
if ((isset($_smarty_tpl->tpl_vars['checkbox']->value)) && $_smarty_tpl->tpl_vars['checkbox']->value && count($_smarty_tpl->tpl_vars['items']->value) > 0 && empty($_smarty_tpl->tpl_vars['tpl']->value) && !$_smarty_tpl->tpl_vars['checkbox']->value['embed']) {?><form method="post" action="<?php if (empty($_smarty_tpl->tpl_vars['checkbox']->value['action'])) {?>#<?php } else {
echo $_smarty_tpl->tpl_vars['checkbox']->value['action'];
}?>"><?php }
if ($_smarty_tpl->tpl_vars['trackerlistmapview']->value) {
ob_start();
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['trackerlistmapname']->value ));
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('wikiplugin', array('_name'=>"map",'scope'=>".trackerlist_".$_prefixVariable1."_geo .geolocated",'width'=>"400",'height'=>"400"));
$_block_repeat=true;
echo smarty_block_wikiplugin(array('_name'=>"map",'scope'=>".trackerlist_".$_prefixVariable1."_geo .geolocated",'width'=>"400",'height'=>"400"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_wikiplugin(array('_name'=>"map",'scope'=>".trackerlist_".$_prefixVariable1."_geo .geolocated",'width'=>"400",'height'=>"400"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
if (empty($_smarty_tpl->tpl_vars['tpl']->value)) {
if ((isset($_smarty_tpl->tpl_vars['displaysheet']->value)) && $_smarty_tpl->tpl_vars['displaysheet']->value == 'true') {?><div class='trackercontainer' style='height: 250px ! important;'><?php }?><div id="wptrackerlist<?php echo $_smarty_tpl->tpl_vars['listTrackerId']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['iTRACKERLIST']->value;?>
-div" <?php if ($_smarty_tpl->tpl_vars['tsOn']->value) {?>style="visibility:hidden"<?php }?> class="ts-wrapperdiv"><?php if ($_smarty_tpl->tpl_vars['prefs']->value['tracker_report_resize_button'] == 'y') {?><p class="tracker-resize" style="display:none;text-align:right"><button class="tracker-resize-expand btn btn-primary" title="Resize"><?php echo smarty_function_icon(array('name'=>'expand'),$_smarty_tpl);?>
</button><button class="tracker-resize-compress btn btn-primary" title="Resize" style="display:none"><?php echo smarty_function_icon(array('name'=>'compress'),$_smarty_tpl);?>
</button></p><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('jq', array());
$_block_repeat=true;
echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    $('[id^="wptrackerlist"].ts-wrapperdiv').each(function() {
                        if ($(this).width() < $(this).find('.table').width()) {
                            $(this).find('.tracker-resize').show();
                        }
                    });
                    $('.tracker-resize-expand').click(function() {
                        var selector = $(this).closest('.ts-wrapperdiv').find('.table-responsive');
                        selector.addClass('enlarge');
                        $(this).parent().find('.tracker-resize-compress').show();
                        $(this).hide();
                    });
                    $('.tracker-resize-compress').click(function() {
                        var selector = $(this).closest('.ts-wrapperdiv').find('.table-responsive');
                        selector.removeClass('enlarge');
                        $(this).parent().find('.tracker-resize-expand').show();
                        $(this).hide();
                    });
                <?php $_block_repeat=false;
echo smarty_block_jq(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}?><div class="table-responsive"><table class="table table-striped table-hover normal wikiplugin_trackerlist" id="wptrackerlist<?php echo $_smarty_tpl->tpl_vars['listTrackerId']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['iTRACKERLIST']->value;?>
"<?php if ((isset($_smarty_tpl->tpl_vars['displaysheet']->value)) && $_smarty_tpl->tpl_vars['displaysheet']->value == 'true') {?>title="<?php echo $_smarty_tpl->tpl_vars['tracker_info']->value['name'];?>
" readonly="true"<?php }
if ((isset($_smarty_tpl->tpl_vars['tableassheet']->value)) && $_smarty_tpl->tpl_vars['tableassheet']->value == 'true') {?>title="Tracker - <?php echo $_smarty_tpl->tpl_vars['tracker_info']->value['name'];?>
" readonly="true"<?php }?>data-count="<?php echo $_smarty_tpl->tpl_vars['count_item']->value;?>
"><?php if ($_smarty_tpl->tpl_vars['showfieldname']->value != 'n' && empty($_smarty_tpl->tpl_vars['tpl']->value)) {?><thead><tr><?php $_smarty_tpl->_assignInScope('precols', 0);
$_smarty_tpl->_assignInScope('fieldcount', 0);
$_smarty_tpl->_assignInScope('postcols', 0);
if ((isset($_smarty_tpl->tpl_vars['checkbox']->value)) && $_smarty_tpl->tpl_vars['checkbox']->value) {
$_smarty_tpl->_assignInScope('precols', $_smarty_tpl->tpl_vars['precols']->value+1);?><th><?php echo $_smarty_tpl->tpl_vars['checkbox']->value['title'];?>
</th><?php }
if (($_smarty_tpl->tpl_vars['showstatus']->value != 'n') && ($_smarty_tpl->tpl_vars['tracker_info']->value['showStatus'] == 'y' || ($_smarty_tpl->tpl_vars['tracker_info']->value['showStatusAdminOnly'] == 'y' && $_smarty_tpl->tpl_vars['perms']->value['tiki_p_admin_trackers'] == 'y'))) {
$_smarty_tpl->_assignInScope('precols', $_smarty_tpl->tpl_vars['precols']->value+1);?><th class="auto" style="width:20px;"></th><?php }
if ($_smarty_tpl->tpl_vars['showitemrank']->value == 'y') {
$_smarty_tpl->_assignInScope('precols', $_smarty_tpl->tpl_vars['precols']->value+1);?><th>Rank</th><?php }
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fields']->value, 'ix', false, 'jx');
$_smarty_tpl->tpl_vars['ix']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['jx']->value => $_smarty_tpl->tpl_vars['ix']->value) {
$_smarty_tpl->tpl_vars['ix']->do_else = false;
if ($_smarty_tpl->tpl_vars['ix']->value['isPublic'] == 'y' && ($_smarty_tpl->tpl_vars['ix']->value['isHidden'] == 'n' || $_smarty_tpl->tpl_vars['ix']->value['isHidden'] == 'c' || $_smarty_tpl->tpl_vars['ix']->value['isHidden'] == 'p' || $_smarty_tpl->tpl_vars['ix']->value['isHidden'] == 'a' || $_smarty_tpl->tpl_vars['perms']->value['tiki_p_admin_trackers'] == 'y') && $_smarty_tpl->tpl_vars['ix']->value['type'] != 'x' && $_smarty_tpl->tpl_vars['ix']->value['type'] != 'h' && in_array($_smarty_tpl->tpl_vars['ix']->value['fieldId'],$_smarty_tpl->tpl_vars['listfields']->value) && ($_smarty_tpl->tpl_vars['ix']->value['type'] != 'p' || $_smarty_tpl->tpl_vars['ix']->value['options_array'][0] != 'password') && (empty($_smarty_tpl->tpl_vars['ix']->value['visibleBy']) || in_array($_smarty_tpl->tpl_vars['default_group']->value,$_smarty_tpl->tpl_vars['ix']->value['visibleBy']) || $_smarty_tpl->tpl_vars['perms']->value['tiki_p_admin_trackers'] == 'y')) {
$_smarty_tpl->_assignInScope('fieldcount', $_smarty_tpl->tpl_vars['fieldcount']->value+1);
if ($_smarty_tpl->tpl_vars['ix']->value['type'] == 'l') {?><th class="auto field<?php echo $_smarty_tpl->tpl_vars['ix']->value['fieldId'];?>
"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['ix']->value['name'])===null||$tmp==='' ? "&nbsp;" : $tmp);?>
</th><?php } elseif ($_smarty_tpl->tpl_vars['ix']->value['type'] == 's' && $_smarty_tpl->tpl_vars['ix']->value['name'] == "Rating") {
if ($_smarty_tpl->tpl_vars['perms']->value['tiki_p_admin_trackers'] == 'y' || $_smarty_tpl->tpl_vars['perms']->value['tiki_p_tracker_view_ratings'] == 'y') {?><th class="auto field<?php echo $_smarty_tpl->tpl_vars['ix']->value['fieldId'];?>
"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('self_link', array('_sort_arg'=>('tr_sort_mode').($_smarty_tpl->tpl_vars['iTRACKERLIST']->value),'_sort_field'=>('f_').($_smarty_tpl->tpl_vars['ix']->value['fieldId'])));
$_block_repeat=true;
echo smarty_block_self_link(array('_sort_arg'=>('tr_sort_mode').($_smarty_tpl->tpl_vars['iTRACKERLIST']->value),'_sort_field'=>('f_').($_smarty_tpl->tpl_vars['ix']->value['fieldId'])), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo (($tmp = @$_smarty_tpl->tpl_vars['ix']->value['name'])===null||$tmp==='' ? "&nbsp;" : $tmp);
$_block_repeat=false;
echo smarty_block_self_link(array('_sort_arg'=>('tr_sort_mode').($_smarty_tpl->tpl_vars['iTRACKERLIST']->value),'_sort_field'=>('f_').($_smarty_tpl->tpl_vars['ix']->value['fieldId'])), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></th><?php }
} else { ?><th class="auto field<?php echo $_smarty_tpl->tpl_vars['ix']->value['fieldId'];?>
"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('self_link', array('_sort_arg'=>('tr_sort_mode').($_smarty_tpl->tpl_vars['iTRACKERLIST']->value),'_sort_field'=>('f_').($_smarty_tpl->tpl_vars['ix']->value['fieldId']),'session_filters'=>'y'));
$_block_repeat=true;
echo smarty_block_self_link(array('_sort_arg'=>('tr_sort_mode').($_smarty_tpl->tpl_vars['iTRACKERLIST']->value),'_sort_field'=>('f_').($_smarty_tpl->tpl_vars['ix']->value['fieldId']),'session_filters'=>'y'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo (($tmp = @$_smarty_tpl->tpl_vars['ix']->value['name'])===null||$tmp==='' ? "&nbsp;" : $tmp);
$_block_repeat=false;
echo smarty_block_self_link(array('_sort_arg'=>('tr_sort_mode').($_smarty_tpl->tpl_vars['iTRACKERLIST']->value),'_sort_field'=>('f_').($_smarty_tpl->tpl_vars['ix']->value['fieldId']),'session_filters'=>'y'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></th><?php }
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
if ($_smarty_tpl->tpl_vars['showcreated']->value == 'y') {
$_smarty_tpl->_assignInScope('postcols', $_smarty_tpl->tpl_vars['postcols']->value+1);?><th><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('self_link', array('_sort_arg'=>('tr_sort_mode').($_smarty_tpl->tpl_vars['iTRACKERLIST']->value),'_sort_field'=>'created','session_filters'=>'y'));
$_block_repeat=true;
echo smarty_block_self_link(array('_sort_arg'=>('tr_sort_mode').($_smarty_tpl->tpl_vars['iTRACKERLIST']->value),'_sort_field'=>'created','session_filters'=>'y'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Created<?php $_block_repeat=false;
echo smarty_block_self_link(array('_sort_arg'=>('tr_sort_mode').($_smarty_tpl->tpl_vars['iTRACKERLIST']->value),'_sort_field'=>'created','session_filters'=>'y'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></th><?php }
if ($_smarty_tpl->tpl_vars['showlastmodif']->value == 'y') {
$_smarty_tpl->_assignInScope('postcols', $_smarty_tpl->tpl_vars['postcols']->value+1);?><th><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('self_link', array('_sort_arg'=>('tr_sort_mode').($_smarty_tpl->tpl_vars['iTRACKERLIST']->value),'_sort_field'=>'lastModif','session_filters'=>'y'));
$_block_repeat=true;
echo smarty_block_self_link(array('_sort_arg'=>('tr_sort_mode').($_smarty_tpl->tpl_vars['iTRACKERLIST']->value),'_sort_field'=>'lastModif','session_filters'=>'y'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>LastModif<?php $_block_repeat=false;
echo smarty_block_self_link(array('_sort_arg'=>('tr_sort_mode').($_smarty_tpl->tpl_vars['iTRACKERLIST']->value),'_sort_field'=>'lastModif','session_filters'=>'y'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></th><?php }
if ($_smarty_tpl->tpl_vars['showlastmodifby']->value == 'y') {
$_smarty_tpl->_assignInScope('postcols', $_smarty_tpl->tpl_vars['postcols']->value+1);?><th><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('self_link', array('_sort_arg'=>('tr_sort_mode').($_smarty_tpl->tpl_vars['iTRACKERLIST']->value),'_sort_field'=>'lastModifBy','session_filters'=>'y'));
$_block_repeat=true;
echo smarty_block_self_link(array('_sort_arg'=>('tr_sort_mode').($_smarty_tpl->tpl_vars['iTRACKERLIST']->value),'_sort_field'=>'lastModifBy','session_filters'=>'y'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Last modified by<?php $_block_repeat=false;
echo smarty_block_self_link(array('_sort_arg'=>('tr_sort_mode').($_smarty_tpl->tpl_vars['iTRACKERLIST']->value),'_sort_field'=>'lastModifBy','session_filters'=>'y'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></th><?php }
if ($_smarty_tpl->tpl_vars['showcomments']->value != 'n' && $_smarty_tpl->tpl_vars['tracker_info']->value['useComments'] == 'y' && ($_smarty_tpl->tpl_vars['tracker_info']->value['showComments'] == 'y' || $_smarty_tpl->tpl_vars['tracker_info']->value['showLastComment'] == 'y') && $_smarty_tpl->tpl_vars['perms']->value['tiki_p_tracker_view_comments'] != 'n') {
$_smarty_tpl->_assignInScope('postcols', $_smarty_tpl->tpl_vars['postcols']->value+1);?><th<?php if ($_smarty_tpl->tpl_vars['tracker_info']->value['showLastComment'] != 'y') {?> style="width:5%"<?php }?>>Comments</th><?php }
if ($_smarty_tpl->tpl_vars['tracker_info']->value['useAttachments'] == 'y' && $_smarty_tpl->tpl_vars['tracker_info']->value['showAttachments'] == 'y') {
$_smarty_tpl->_assignInScope('postcols', $_smarty_tpl->tpl_vars['postcols']->value+1);?><th style="width:5%">atts</th><?php }
if (($_smarty_tpl->tpl_vars['showdelete']->value == 'y' || $_smarty_tpl->tpl_vars['showpenditem']->value == 'y' || $_smarty_tpl->tpl_vars['showopenitem']->value == 'y' || $_smarty_tpl->tpl_vars['showcloseitem']->value == 'y') && ($_smarty_tpl->tpl_vars['perms']->value['tiki_p_admin_trackers'] == 'y' || $_smarty_tpl->tpl_vars['perms']->value['tiki_p_remove_tracker_items'] == 'y' || $_smarty_tpl->tpl_vars['perms']->value['tiki_p_remove_tracker_items_pending'] == 'y' || $_smarty_tpl->tpl_vars['perms']->value['tiki_p_remove_tracker_items_closed'] == 'y')) {
$_smarty_tpl->_assignInScope('postcols', $_smarty_tpl->tpl_vars['postcols']->value+1);?><th>Action</th><?php }?></tr></thead><?php }
}
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "trackerlist_bottomstuff", null, null);
if (empty($_smarty_tpl->tpl_vars['tpl']->value)) {?></tbody><?php if ((!empty($_smarty_tpl->tpl_vars['computedFields']->value) || (isset($_smarty_tpl->tpl_vars['tstotals']->value))) && count($_smarty_tpl->tpl_vars['items']->value) > 0) {
$_smarty_tpl->_assignInScope('itemoff', 0);?><tfoot><?php if (($_smarty_tpl->tpl_vars['tstotals']->value) && $_smarty_tpl->tpl_vars['tsOn']->value) {
$_smarty_tpl->_subTemplateRender("file:tablesorter/totals.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('nofoot'=>"y",'fieldcount'=>((string)$_smarty_tpl->tpl_vars['fieldcount']->value),'precols'=>((string)$_smarty_tpl->tpl_vars['precols']->value),'postcols'=>((string)$_smarty_tpl->tpl_vars['postcols']->value)), 0, false);
}
if (!empty($_smarty_tpl->tpl_vars['computedFields']->value)) {?><tr class='compute'><?php if ((isset($_smarty_tpl->tpl_vars['checkbox']->value)) && $_smarty_tpl->tpl_vars['checkbox']->value) {?><td></td><?php }
if (($_smarty_tpl->tpl_vars['showstatus']->value != 'n') && ($_smarty_tpl->tpl_vars['tracker_info']->value['showStatus'] == 'y' || ($_smarty_tpl->tpl_vars['tracker_info']->value['showStatusAdminOnly'] == 'y' && $_smarty_tpl->tpl_vars['perms']->value['tiki_p_admin_trackers'] == 'y'))) {?><td></td><?php }
if ($_smarty_tpl->tpl_vars['showitemrank']->value == 'y') {?><td></td><?php }
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fields']->value, 'ix', false, 'jx');
$_smarty_tpl->tpl_vars['ix']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['jx']->value => $_smarty_tpl->tpl_vars['ix']->value) {
$_smarty_tpl->tpl_vars['ix']->do_else = false;
if ($_smarty_tpl->tpl_vars['ix']->value['isPublic'] == 'y' && ($_smarty_tpl->tpl_vars['ix']->value['isHidden'] == 'n' || $_smarty_tpl->tpl_vars['ix']->value['isHidden'] == 'c' || $_smarty_tpl->tpl_vars['ix']->value['isHidden'] == 'p' || $_smarty_tpl->tpl_vars['ix']->value['isHidden'] == 'a' || $_smarty_tpl->tpl_vars['perms']->value['tiki_p_admin_trackers'] == 'y') && $_smarty_tpl->tpl_vars['ix']->value['type'] != 'x' && $_smarty_tpl->tpl_vars['ix']->value['type'] != 'h' && in_array($_smarty_tpl->tpl_vars['ix']->value['fieldId'],$_smarty_tpl->tpl_vars['listfields']->value) && ($_smarty_tpl->tpl_vars['ix']->value['type'] != 'p' || $_smarty_tpl->tpl_vars['ix']->value['options_array'][0] != 'password') && (empty($_smarty_tpl->tpl_vars['ix']->value['visibleBy']) || in_array($_smarty_tpl->tpl_vars['default_group']->value,$_smarty_tpl->tpl_vars['ix']->value['visibleBy']) || $_smarty_tpl->tpl_vars['perms']->value['tiki_p_admin_trackers'] == 'y')) {
if ((isset($_smarty_tpl->tpl_vars['computedFields']->value[$_smarty_tpl->tpl_vars['ix']->value['fieldId']]))) {?><td class="numeric" style="padding-right:2px"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['computedFields']->value[$_smarty_tpl->tpl_vars['ix']->value['fieldId']], 'computedField', false, NULL, 'computedField', array (
));
$_smarty_tpl->tpl_vars['computedField']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['computedField']->value) {
$_smarty_tpl->tpl_vars['computedField']->do_else = false;
?><label><?php if ((isset($_smarty_tpl->tpl_vars['computedField']->value['operator'])) && $_smarty_tpl->tpl_vars['computedField']->value['operator'] == 'avg') {?>Average<?php } else { ?>Total</label><?php }?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php if ((isset($_smarty_tpl->tpl_vars['texturl']->value)) && (isset($_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['itemId']))) {
$_smarty_tpl->_assignInScope('url', smarty_modifier_replacei($_smarty_tpl->tpl_vars['txturl']->value,'#itemId',$_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['itemId']));
} elseif ((isset($_smarty_tpl->tpl_vars['texturl']->value))) {
$_smarty_tpl->_assignInScope('url', ((string)$_smarty_tpl->tpl_vars['txturl']->value));
}
if (!(isset($_smarty_tpl->tpl_vars['list_mode']->value))) {
$_smarty_tpl->_assignInScope('list_mode', '');
}
echo smarty_function_trackeroutput(array('field'=>$_smarty_tpl->tpl_vars['computedField']->value,'item'=>$_smarty_tpl->tpl_vars['items']->value['user'],'list_mode'=>$_smarty_tpl->tpl_vars['list_mode']->value,'url'=>$_smarty_tpl->tpl_vars['url']->value),$_smarty_tpl);?>
<br/><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></td><?php } else { ?><td></td><?php }
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
if ($_smarty_tpl->tpl_vars['showcreated']->value == 'y') {?><td></td><?php }
if ($_smarty_tpl->tpl_vars['showlastmodif']->value == 'y') {?><td></td><?php }
if ($_smarty_tpl->tpl_vars['showlastmodifby']->value == 'y') {?><td></td><?php }
if ($_smarty_tpl->tpl_vars['showcomments']->value != 'n' && $_smarty_tpl->tpl_vars['tracker_info']->value['useComments'] == 'y' && ($_smarty_tpl->tpl_vars['tracker_info']->value['showComments'] == 'y' || $_smarty_tpl->tpl_vars['tracker_info']->value['showLastComment'] == 'y') && $_smarty_tpl->tpl_vars['perms']->value['tiki_p_tracker_view_comments'] != 'n') {?><td></td><?php }
if ($_smarty_tpl->tpl_vars['tracker_info']->value['useAttachments'] == 'y' && $_smarty_tpl->tpl_vars['tracker_info']->value['showAttachments'] == 'y') {?><td></td><?php }
if (($_smarty_tpl->tpl_vars['showdelete']->value == 'y' || $_smarty_tpl->tpl_vars['showpenditem']->value == 'y' || $_smarty_tpl->tpl_vars['showopenitem']->value == 'y' || $_smarty_tpl->tpl_vars['showcloseitem']->value == 'y') && ($_smarty_tpl->tpl_vars['perms']->value['tiki_p_admin_trackers'] == 'y' || $_smarty_tpl->tpl_vars['perms']->value['tiki_p_remove_tracker_items'] == 'y' || $_smarty_tpl->tpl_vars['perms']->value['tiki_p_remove_tracker_items_pending'] == 'y' || $_smarty_tpl->tpl_vars['perms']->value['tiki_p_remove_tracker_items_closed'] == 'y')) {?><td></td><?php }?></tr><?php }?></tfoot><?php }?></table></div></div><?php if ((isset($_smarty_tpl->tpl_vars['displaysheet']->value)) && $_smarty_tpl->tpl_vars['displaysheet']->value == 'true') {?></div><?php }
if (count($_smarty_tpl->tpl_vars['items']->value) == 0 && !$_smarty_tpl->tpl_vars['tsOn']->value) {?><div class="tracker_error">No records found</div><?php } elseif ((isset($_smarty_tpl->tpl_vars['checkbox']->value)) && $_smarty_tpl->tpl_vars['checkbox']->value) {
if ($_smarty_tpl->tpl_vars['checkbox']->value['tpl']) {
$_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['checkbox']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
if (!empty($_smarty_tpl->tpl_vars['checkbox']->value['submit']) && !empty($_smarty_tpl->tpl_vars['checkbox']->value['title'])) {?><br><input type="submit" class="btn btn-primary btn-sm" name="<?php echo $_smarty_tpl->tpl_vars['checkbox']->value['submit'];?>
" value="<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tr', array());
$_block_repeat=true;
echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo $_smarty_tpl->tpl_vars['checkbox']->value['title'];
$_block_repeat=false;
echo smarty_block_tr(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>"><?php }
if (!$_smarty_tpl->tpl_vars['checkbox']->value['embed']) {?></form><?php }
}
} else {
if (count($_smarty_tpl->tpl_vars['items']->value) == 0 && !$_smarty_tpl->tpl_vars['tsOn']->value) {?><div class="tracker_error">No records found</div><?php }
}
if ($_smarty_tpl->tpl_vars['more']->value == 'y') {?><div class="more"><?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', 'moreUrl', null);
if ($_smarty_tpl->tpl_vars['moreurl']->value) {
echo $_smarty_tpl->tpl_vars['moreurl']->value;
} else { ?>tiki-view_tracker.php<?php }?>?trackerId=<?php echo $_smarty_tpl->tpl_vars['listTrackerId']->value;
if ((isset($_smarty_tpl->tpl_vars['tr_sort_mode']->value))) {?>&amp;sort_mode=<?php echo $_smarty_tpl->tpl_vars['tr_sort_mode']->value;
}
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_function_button(array('class'=>'more','href'=>((string)$_smarty_tpl->tpl_vars['moreUrl']->value),'_text'=>"More..."),$_smarty_tpl);?>
</div><?php } elseif ($_smarty_tpl->tpl_vars['showpagination']->value != 'n') {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('pagination_links', array('cant'=>$_smarty_tpl->tpl_vars['count_item']->value,'step'=>$_smarty_tpl->tpl_vars['max']->value,'offset'=>$_smarty_tpl->tpl_vars[''.($_smarty_tpl->tpl_vars['offset_arg']->value)]->value,'offset_arg'=>$_smarty_tpl->tpl_vars['offset_arg']->value));
$_block_repeat=true;
echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['count_item']->value,'step'=>$_smarty_tpl->tpl_vars['max']->value,'offset'=>$_smarty_tpl->tpl_vars[''.($_smarty_tpl->tpl_vars['offset_arg']->value)]->value,'offset_arg'=>$_smarty_tpl->tpl_vars['offset_arg']->value), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?> <?php $_block_repeat=false;
echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['count_item']->value,'step'=>$_smarty_tpl->tpl_vars['max']->value,'offset'=>$_smarty_tpl->tpl_vars[''.($_smarty_tpl->tpl_vars['offset_arg']->value)]->value,'offset_arg'=>$_smarty_tpl->tpl_vars['offset_arg']->value), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
if ($_smarty_tpl->tpl_vars['export']->value == 'y' && ($_smarty_tpl->tpl_vars['perms']->value['tiki_p_admin_trackers'] == 'y' || $_smarty_tpl->tpl_vars['perms']->value['tiki_p_export_tracker'] == 'y')) {
echo smarty_function_button(array('href'=>$_smarty_tpl->tpl_vars['exportUrl']->value,'_text'=>"Export",'_class'=>'exportButton'),$_smarty_tpl);
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('jq', array());
$_block_repeat=true;
echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            $('.exportButton a').click(function() {
                $(this).serviceDialog({
                    title: 'Export Tracker'
                });
                return false;
            });
        <?php $_block_repeat=false;
echo smarty_block_jq(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->_assignInScope('itemoff', 0);
if (empty($_smarty_tpl->tpl_vars['tpl']->value)) {?><tbody><?php }
$__section_user_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['items']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_user_0_total = $__section_user_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_user'] = new Smarty_Variable(array());
if ($__section_user_0_total !== 0) {
for ($__section_user_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] = 0; $__section_user_0_iteration <= $__section_user_0_total; $__section_user_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']++){
$_smarty_tpl->tpl_vars['__smarty_section_user']->value['rownum'] = $__section_user_0_iteration;
if ($_smarty_tpl->tpl_vars['trackerlistmapview']->value) {?><div class="trackerlist_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['trackerlistmapname']->value ));?>
_geo" style="display:none;"><?php echo smarty_function_object_link(array('type'=>"trackeritem",'id'=>((string)(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['itemId'] ))))),$_smarty_tpl);?>
</div><?php }
if (!empty($_smarty_tpl->tpl_vars['popupfields']->value)) {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'popup', null, null);?><div class="card"><table style="width:100%"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['field_values'], 'f');
$_smarty_tpl->tpl_vars['f']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['f']->value) {
$_smarty_tpl->tpl_vars['f']->do_else = false;
if (in_array($_smarty_tpl->tpl_vars['f']->value['fieldId'],$_smarty_tpl->tpl_vars['popupfields']->value)) {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'popupl', null, null);
echo smarty_function_trackeroutput(array('field'=>$_smarty_tpl->tpl_vars['f']->value,'item'=>$_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)],'url'=>smarty_modifier_replacei($_smarty_tpl->tpl_vars['txturl']->value,'#itemId',$_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['itemId']),'editable'=>in_array($_smarty_tpl->tpl_vars['f']->value['fieldId'],$_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['editableFields'])),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (!empty($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'popupl'))) {?><tr><?php if (count($_smarty_tpl->tpl_vars['popupfields']->value) > 1) {?><th class="<?php echo smarty_function_cycle(array('advance'=>false),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['f']->value['name'];?>
</th><?php }?><td><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'popupl');?>
</td></tr><?php }
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></table></div><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->_assignInScope('showpopup', 'y');
} else {
$_smarty_tpl->_assignInScope('showpopup', 'n');
}
if (empty($_smarty_tpl->tpl_vars['tpl']->value)) {?><tr><?php if (!empty($_smarty_tpl->tpl_vars['checkbox']->value)) {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', 'cbvalue', null);
if ($_smarty_tpl->tpl_vars['checkbox']->value['ix'] > -1) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['field_values'][$_smarty_tpl->tpl_vars['checkbox']->value['ix']]['value'] ));
} else {
echo $_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['itemId'];
}
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?><td><input type="<?php echo $_smarty_tpl->tpl_vars['checkbox']->value['type'];?>
" name="<?php echo $_smarty_tpl->tpl_vars['checkbox']->value['name'];?>
[]" value="<?php echo $_smarty_tpl->tpl_vars['cbvalue']->value;?>
" <?php if (in_array($_smarty_tpl->tpl_vars['cbvalue']->value,$_smarty_tpl->tpl_vars['checkbox']->value['checked'])) {?>checked<?php }?>></td><?php }
if (($_smarty_tpl->tpl_vars['showstatus']->value != 'n') && ($_smarty_tpl->tpl_vars['tracker_info']->value['showStatus'] == 'y' || ($_smarty_tpl->tpl_vars['tracker_info']->value['showStatusAdminOnly'] == 'y' && $_smarty_tpl->tpl_vars['perms']->value['tiki_p_admin_trackers'] == 'y'))) {?><td class="auto" style="width:20px;"><?php $_smarty_tpl->_assignInScope('ustatus', (($tmp = @$_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['status'])===null||$tmp==='' ? "c" : $tmp));
echo smarty_function_icon(array('name'=>$_smarty_tpl->tpl_vars['status_types']->value[$_smarty_tpl->tpl_vars['ustatus']->value]['iconname'],'iclass'=>'tips','ititle'=>":".((string)$_smarty_tpl->tpl_vars['status_types']->value[$_smarty_tpl->tpl_vars['ustatus']->value]['label'])),$_smarty_tpl);?>
</td><?php }
if ($_smarty_tpl->tpl_vars['showitemrank']->value == 'y') {?><td><?php echo smarty_function_math(array('equation'=>"x+y",'x'=>(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['rownum']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['rownum'] : null),'y'=>$_smarty_tpl->tpl_vars['tr_offset']->value),$_smarty_tpl);?>
</td><?php }
if (!(isset($_smarty_tpl->tpl_vars['list_mode']->value))) {
$_smarty_tpl->_assignInScope('list_mode', "y");
}
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['field_values'], 'field');
$_smarty_tpl->tpl_vars['field']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->do_else = false;
if ($_smarty_tpl->tpl_vars['field']->value['isPublic'] == 'y' && ($_smarty_tpl->tpl_vars['field']->value['isHidden'] == 'n' || $_smarty_tpl->tpl_vars['field']->value['isHidden'] == 'c' || $_smarty_tpl->tpl_vars['field']->value['isHidden'] == 'p' || $_smarty_tpl->tpl_vars['field']->value['isHidden'] == 'a' || $_smarty_tpl->tpl_vars['perms']->value['tiki_p_admin_trackers'] == 'y') && $_smarty_tpl->tpl_vars['field']->value['type'] != 'x' && $_smarty_tpl->tpl_vars['field']->value['type'] != 'h' && in_array($_smarty_tpl->tpl_vars['field']->value['fieldId'],$_smarty_tpl->tpl_vars['listfields']->value) && ($_smarty_tpl->tpl_vars['field']->value['type'] != 'p' || $_smarty_tpl->tpl_vars['field']->value['options_array'][0] != 'password') && (empty($_smarty_tpl->tpl_vars['field']->value['visibleBy']) || in_array($_smarty_tpl->tpl_vars['default_group']->value,$_smarty_tpl->tpl_vars['field']->value['visibleBy']) || $_smarty_tpl->tpl_vars['perms']->value['tiki_p_admin_trackers'] == 'y')) {?><td class=<?php if ($_smarty_tpl->tpl_vars['field']->value['type'] == 'n' || $_smarty_tpl->tpl_vars['field']->value['type'] == 'q' || $_smarty_tpl->tpl_vars['field']->value['type'] == 'b') {?>"numeric"<?php } else { ?>"auto"<?php }?> <?php if ($_smarty_tpl->tpl_vars['field']->value['type'] == 'b') {?> style="padding-right:5px;<?php echo $_smarty_tpl->tpl_vars['tdinstyle']->value;?>
"<?php } else {
echo $_smarty_tpl->tpl_vars['tdstyle']->value;
}?>><?php if ($_smarty_tpl->tpl_vars['rowurl']->value) {?><a href="<?php echo smarty_modifier_replacei($_smarty_tpl->tpl_vars['rowurl']->value,'#itemId',$_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['itemId']);?>
" <?php echo $_smarty_tpl->tpl_vars['tdastyle']->value;?>
><?php }
if ($_smarty_tpl->tpl_vars['field']->value['isHidden'] == 'c' && $_smarty_tpl->tpl_vars['fieldr']->value && $_smarty_tpl->tpl_vars['perms']->value['tiki_p_admin_trackers'] != 'y') {
} elseif ((isset($_smarty_tpl->tpl_vars['perms']->value))) {
echo smarty_function_trackeroutput(array('item'=>$_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)],'field'=>$_smarty_tpl->tpl_vars['field']->value,'list_mode'=>$_smarty_tpl->tpl_vars['list_mode']->value,'showlinks'=>$_smarty_tpl->tpl_vars['showlinks']->value,'showpopup'=>$_smarty_tpl->tpl_vars['showpopup']->value,'popupfields'=>$_smarty_tpl->tpl_vars['popupfields']->value,'url'=>$_smarty_tpl->tpl_vars['txturl']->value,'editable'=>in_array($_smarty_tpl->tpl_vars['field']->value['fieldId'],$_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['editableFields']),'tiki_p_view_trackers'=>$_smarty_tpl->tpl_vars['perms']->value['tiki_p_view_trackers'],'tiki_p_modify_tracker_items'=>$_smarty_tpl->tpl_vars['perms']->value['tiki_p_modify_tracker_items'],'tiki_p_modify_tracker_items_pending'=>$_smarty_tpl->tpl_vars['perms']->value['tiki_p_modify_tracker_items_pending'],'tiki_p_modify_tracker_items_closed'=>$_smarty_tpl->tpl_vars['perms']->value['tiki_p_modify_tracker_items_closed'],'tiki_p_comment_tracker_items'=>$_smarty_tpl->tpl_vars['perms']->value['tiki_p_comment_tracker_items'],'reloff'=>$_smarty_tpl->tpl_vars['itemoff']->value),$_smarty_tpl);
} else {
echo smarty_function_trackeroutput(array('item'=>$_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)],'field'=>$_smarty_tpl->tpl_vars['field']->value,'list_mode'=>$_smarty_tpl->tpl_vars['list_mode']->value,'reloff'=>$_smarty_tpl->tpl_vars['itemoff']->value,'showlinks'=>$_smarty_tpl->tpl_vars['showlinks']->value,'showpopup'=>$_smarty_tpl->tpl_vars['showpopup']->value,'popupfields'=>$_smarty_tpl->tpl_vars['popupfields']->value,'url'=>$_smarty_tpl->tpl_vars['txturl']->value,'editable'=>in_array($_smarty_tpl->tpl_vars['field']->value['fieldId'],$_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['editableFields'])),$_smarty_tpl);
}
if ($_smarty_tpl->tpl_vars['rowurl']->value) {?>&nbsp;</a><?php }?></td><?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
if ($_smarty_tpl->tpl_vars['showcreated']->value == 'y') {?><td <?php echo $_smarty_tpl->tpl_vars['tdstyle']->value;?>
><?php if ($_smarty_tpl->tpl_vars['rowurl']->value) {?><a href="<?php echo smarty_modifier_replacei($_smarty_tpl->tpl_vars['rowurl']->value,'#itemId',$_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['itemId']);?>
" <?php echo $_smarty_tpl->tpl_vars['tdastyle']->value;?>
><?php }
if ($_smarty_tpl->tpl_vars['tracker_info']->value['showCreatedFormat']) {
echo smarty_modifier_tiki_date_format($_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['created'],$_smarty_tpl->tpl_vars['tracker_info']->value['showCreatedFormat']);
} else {
echo smarty_modifier_tiki_short_datetime($_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['created']);
}
if ($_smarty_tpl->tpl_vars['rowurl']->value) {?></a><?php }?></td><?php }
if ($_smarty_tpl->tpl_vars['showlastmodif']->value == 'y') {?><td <?php echo $_smarty_tpl->tpl_vars['tdstyle']->value;?>
><?php if ($_smarty_tpl->tpl_vars['rowurl']->value) {?><a href="<?php echo smarty_modifier_replacei($_smarty_tpl->tpl_vars['rowurl']->value,'#itemId',$_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['itemId']);?>
" <?php echo $_smarty_tpl->tpl_vars['tdastyle']->value;?>
><?php }
if ($_smarty_tpl->tpl_vars['tracker_info']->value['showLastModifFormat']) {
echo smarty_modifier_tiki_date_format($_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['lastModif'],$_smarty_tpl->tpl_vars['tracker_info']->value['showLastModifFormat']);
} else {
echo smarty_modifier_tiki_short_datetime($_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['lastModif']);
}
if ($_smarty_tpl->tpl_vars['rowurl']->value) {?></a><?php }?></td><?php }
if ($_smarty_tpl->tpl_vars['showlastmodifby']->value == 'y') {?><td <?php echo $_smarty_tpl->tpl_vars['tdstyle']->value;?>
><?php if ($_smarty_tpl->tpl_vars['rowurl']->value) {?><a href="<?php echo smarty_modifier_replacei($_smarty_tpl->tpl_vars['rowurl']->value,'#itemId',$_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['itemId']);?>
" <?php echo $_smarty_tpl->tpl_vars['tdastyle']->value;?>
><?php }
echo $_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['lastModifBy'];
if ($_smarty_tpl->tpl_vars['rowurl']->value) {?></a><?php }?></td><?php }
if ($_smarty_tpl->tpl_vars['showcomments']->value != 'n' && $_smarty_tpl->tpl_vars['tracker_info']->value['useComments'] == 'y' && ($_smarty_tpl->tpl_vars['tracker_info']->value['showComments'] == 'y' || $_smarty_tpl->tpl_vars['tracker_info']->value['showLastComment'] == 'y') && $_smarty_tpl->tpl_vars['perms']->value['tiki_p_tracker_view_comments'] != 'n') {?><td style="text-align:center;<?php echo $_smarty_tpl->tpl_vars['tdinstyle']->value;?>
"><?php if ($_smarty_tpl->tpl_vars['rowurl']->value) {?><a href="<?php echo smarty_modifier_replacei($_smarty_tpl->tpl_vars['rowurl']->value,'#itemId',$_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['itemId']);?>
" <?php echo $_smarty_tpl->tpl_vars['tdastyle']->value;?>
><?php }
if ($_smarty_tpl->tpl_vars['tracker_info']->value['showComments'] == 'y') {
echo $_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['comments'];
}
if ($_smarty_tpl->tpl_vars['tracker_info']->value['showComments'] == 'y' && $_smarty_tpl->tpl_vars['tracker_info']->value['showLastComment'] == 'y') {?><br><?php }
if ($_smarty_tpl->tpl_vars['tracker_info']->value['showLastComment'] == 'y' && !empty($_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['lastComment'])) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['lastComment']['userName'] ));?>
-<?php echo smarty_modifier_tiki_short_date($_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['lastComment']['commentDate']);
}
if ($_smarty_tpl->tpl_vars['rowurl']->value) {?></a><?php }?></td><?php }
if ($_smarty_tpl->tpl_vars['tracker_info']->value['useAttachments'] == 'y' && $_smarty_tpl->tpl_vars['tracker_info']->value['showAttachments'] == 'y') {?><td style="text-align:center;"><a href="tiki-view_tracker_item.php?trackerId=<?php echo $_smarty_tpl->tpl_vars['listTrackerId']->value;?>
&amp;itemId=<?php echo $_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['itemId'];?>
&amp;show=att"link="List Attachments"><?php echo smarty_function_icon(array('name'=>"attach"),$_smarty_tpl);?>
</a><?php echo $_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['attachments'];?>
</td><?php }
if (($_smarty_tpl->tpl_vars['showdelete']->value == 'y' || $_smarty_tpl->tpl_vars['showpenditem']->value == 'y' || $_smarty_tpl->tpl_vars['showopenitem']->value == 'y' || $_smarty_tpl->tpl_vars['showcloseitem']->value == 'y') && ($_smarty_tpl->tpl_vars['perms']->value['tiki_p_admin_trackers'] == 'y' || $_smarty_tpl->tpl_vars['perms']->value['tiki_p_remove_tracker_items'] == 'y' || $_smarty_tpl->tpl_vars['perms']->value['tiki_p_remove_tracker_items_pending'] == 'y' || $_smarty_tpl->tpl_vars['perms']->value['tiki_p_remove_tracker_items_closed'] == 'y')) {?><td><?php if ($_smarty_tpl->tpl_vars['showdelete']->value == 'y' && ($_smarty_tpl->tpl_vars['perms']->value['tiki_p_admin_trackers'] == 'y' || ($_smarty_tpl->tpl_vars['perms']->value['tiki_p_remove_tracker_items'] == 'y' && $_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['status'] != 'p' && $_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['status'] != 'c') || ($_smarty_tpl->tpl_vars['perms']->value['tiki_p_remove_tracker_items_pending'] == 'y' && $_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['status'] == 'p') || ($_smarty_tpl->tpl_vars['perms']->value['tiki_p_remove_tracker_items_closed'] == 'y' && $_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['status'] == 'c'))) {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('self_link', array('delete'=>$_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['itemId'],'_class'=>'tips','_title'=>":Remove"));
$_block_repeat=true;
echo smarty_block_self_link(array('delete'=>$_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['itemId'],'_class'=>'tips','_title'=>":Remove"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo smarty_function_icon(array('name'=>'delete'),$_smarty_tpl);
$_block_repeat=false;
echo smarty_block_self_link(array('delete'=>$_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['itemId'],'_class'=>'tips','_title'=>":Remove"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
if ($_smarty_tpl->tpl_vars['showcloseitem']->value == 'y' && $_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['status'] != 'c' && ($_smarty_tpl->tpl_vars['perms']->value['tiki_p_admin_trackers'] == 'y' || ($_smarty_tpl->tpl_vars['perms']->value['tiki_p_modify_tracker_items'] == 'y' && $_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['status'] != 'p' && $_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['status'] != 'c') || ($_smarty_tpl->tpl_vars['perms']->value['tiki_p_modify_tracker_items_pending'] == 'y' && $_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['status'] == 'p') || ($_smarty_tpl->tpl_vars['perms']->value['tiki_p_modify_tracker_items_closed'] == 'y' && $_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['status'] == 'c'))) {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('self_link', array('closeitem'=>$_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['itemId'],'_style'=>'display:inline-block;','_class'=>'text-nowrap btn-sm btn-danger'));
$_block_repeat=true;
echo smarty_block_self_link(array('closeitem'=>$_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['itemId'],'_style'=>'display:inline-block;','_class'=>'text-nowrap btn-sm btn-danger'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Close item<?php $_block_repeat=false;
echo smarty_block_self_link(array('closeitem'=>$_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['itemId'],'_style'=>'display:inline-block;','_class'=>'text-nowrap btn-sm btn-danger'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
if ($_smarty_tpl->tpl_vars['showopenitem']->value == 'y' && $_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['status'] != 'o' && ($_smarty_tpl->tpl_vars['perms']->value['tiki_p_admin_trackers'] == 'y' || ($_smarty_tpl->tpl_vars['perms']->value['tiki_p_modify_tracker_items'] == 'y' && $_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['status'] != 'p' && $_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['status'] != 'c') || ($_smarty_tpl->tpl_vars['perms']->value['tiki_p_modify_tracker_items_pending'] == 'y' && $_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['status'] == 'p') || ($_smarty_tpl->tpl_vars['perms']->value['tiki_p_modify_tracker_items_closed'] == 'y' && $_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['status'] == 'c'))) {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('self_link', array('openitem'=>$_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['itemId'],'_style'=>'display:inline-block;','_class'=>'text-nowrap btn-sm btn-success'));
$_block_repeat=true;
echo smarty_block_self_link(array('openitem'=>$_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['itemId'],'_style'=>'display:inline-block;','_class'=>'text-nowrap btn-sm btn-success'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Open item<?php $_block_repeat=false;
echo smarty_block_self_link(array('openitem'=>$_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['itemId'],'_style'=>'display:inline-block;','_class'=>'text-nowrap btn-sm btn-success'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
if ($_smarty_tpl->tpl_vars['showpenditem']->value == 'y' && $_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['status'] != 'p' && ($_smarty_tpl->tpl_vars['perms']->value['tiki_p_admin_trackers'] == 'y' || ($_smarty_tpl->tpl_vars['perms']->value['tiki_p_modify_tracker_items'] == 'y' && $_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['status'] != 'p' && $_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['status'] != 'c') || ($_smarty_tpl->tpl_vars['perms']->value['tiki_p_modify_tracker_items_pending'] == 'y' && $_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['status'] == 'p') || ($_smarty_tpl->tpl_vars['perms']->value['tiki_p_modify_tracker_items_closed'] == 'y' && $_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['status'] == 'c'))) {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('self_link', array('penditem'=>$_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['itemId'],'_style'=>'display:inline-block;','_class'=>'text-nowrap btn-sm btn-warning'));
$_block_repeat=true;
echo smarty_block_self_link(array('penditem'=>$_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['itemId'],'_style'=>'display:inline-block;','_class'=>'text-nowrap btn-sm btn-warning'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Pend item<?php $_block_repeat=false;
echo smarty_block_self_link(array('penditem'=>$_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['itemId'],'_style'=>'display:inline-block;','_class'=>'text-nowrap btn-sm btn-warning'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}?></td><?php }?></tr><?php $_smarty_tpl->_assignInScope('itemoff', $_smarty_tpl->tpl_vars['itemoff']->value+1);
} else {
$_smarty_tpl->_assignInScope('itemoff', $_smarty_tpl->tpl_vars['itemoff']->value+1);
$_smarty_tpl->_subTemplateRender('file:tracker_pretty_item.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('fields'=>$_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['field_values'],'item'=>$_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)],'wiki'=>$_smarty_tpl->tpl_vars['tpl']->value), 0, true);
echo smarty_function_trackerheader(array('level'=>-1,'title'=>'','inTable'=>''),$_smarty_tpl);
}
}
}
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'trackerlist_bottomstuff');?>

<?php }
}
