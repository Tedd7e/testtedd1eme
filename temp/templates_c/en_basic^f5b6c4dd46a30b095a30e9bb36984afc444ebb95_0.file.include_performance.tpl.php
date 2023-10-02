<?php
/* Smarty version 3.1.48, created on 2023-09-29 11:22:39
  from '/home/teddieme/tedd1eme/templates/admin/include_performance.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6516a56f78bdd5_98688666',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f5b6c4dd46a30b095a30e9bb36984afc444ebb95' => 
    array (
      0 => '/home/teddieme/tedd1eme/templates/admin/include_performance.tpl',
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
function content_6516a56f78bdd5_98688666 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/block.remarksbox.php','function'=>'smarty_block_remarksbox',),1=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/function.ticket.php','function'=>'smarty_function_ticket',),2=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/block.tabset.php','function'=>'smarty_block_tabset',),3=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/block.tab.php','function'=>'smarty_block_tab',),4=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/function.preference.php','function'=>'smarty_function_preference',),5=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/block.tr.php','function'=>'smarty_block_tr',),6=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/function.help.php','function'=>'smarty_function_help',),7=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/block.wikiplugin.php','function'=>'smarty_block_wikiplugin',),8=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/block.self_link.php','function'=>'smarty_block_self_link',),));
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>"tip",'title'=>"Tip"));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Tip"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Please see the <a class='alert-link' target='tikihelp' href='http://dev.tiki.org/Performance'>Performance page</a> on Tiki's developer site.<?php $_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Tip"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<form class="admin" id="performance" name="performance" action="tiki-admin.php?page=performance" method="post">
    <?php echo smarty_function_ticket(array(),$_smarty_tpl);?>

    <div class="row">
        <div class="form-group col-lg-12 clearfix">
            <?php $_smarty_tpl->_subTemplateRender('file:admin/include_apply_top.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        </div>
    </div>

    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tabset', array());
$_block_repeat=true;
echo smarty_block_tabset(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>

        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tab', array('name'=>"Performance"));
$_block_repeat=true;
echo smarty_block_tab(array('name'=>"Performance"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <br>
            <?php echo smarty_function_preference(array('name'=>'tiki_monitor_performance'),$_smarty_tpl);?>

            <?php echo smarty_function_preference(array('name'=>'tiki_minify_javascript'),$_smarty_tpl);?>

            <div class="adminoptionboxchild" id="tiki_minify_javascript_childcontainer">
                <?php echo smarty_function_preference(array('name'=>'tiki_minify_late_js_files'),$_smarty_tpl);?>

            </div>
            <?php echo smarty_function_preference(array('name'=>'javascript_cdn'),$_smarty_tpl);?>

            <?php echo smarty_function_preference(array('name'=>'tiki_cdn'),$_smarty_tpl);?>

            <?php echo smarty_function_preference(array('name'=>'tiki_cdn_ssl'),$_smarty_tpl);?>

            <?php echo smarty_function_preference(array('name'=>'tiki_cdn_check'),$_smarty_tpl);?>

            <?php echo smarty_function_preference(array('name'=>'tiki_prefix_css'),$_smarty_tpl);?>

            <?php echo smarty_function_preference(array('name'=>'tiki_minify_css'),$_smarty_tpl);?>

            <div class="adminoptionboxchild" id="tiki_minify_css_childcontainer">
                <?php echo smarty_function_preference(array('name'=>'tiki_minify_css_single_file'),$_smarty_tpl);?>

            </div>
            <?php echo smarty_function_preference(array('name'=>'feature_obzip'),$_smarty_tpl);?>

            <div class="adminoptionboxchild">
                <?php if ($_smarty_tpl->tpl_vars['gzip_handler']->value != 'none') {?>
                    <div class="highlight" style="margin-left:30px;">
                        Output compression is active.
                        <br>
                        Compression is handled by: <?php echo $_smarty_tpl->tpl_vars['gzip_handler']->value;?>
.
                    </div>
                <?php }?>
            </div>
            <?php echo smarty_function_preference(array('name'=>'tiki_cachecontrol_session'),$_smarty_tpl);?>

            <?php echo smarty_function_preference(array('name'=>'smarty_compilation'),$_smarty_tpl);?>

            <?php echo smarty_function_preference(array('name'=>'users_serve_avatar_static'),$_smarty_tpl);?>

            <?php echo smarty_function_preference(array('name'=>'allowImageLazyLoad'),$_smarty_tpl);?>


            <fieldset>
                <legend>PHP settings</legend>
                <p>Some PHP.INI settings that can increase performance</p>
                <div class="adminoptionboxchild">
                    <p>
                        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tr', array('_0'=>$_smarty_tpl->tpl_vars['realpath_cache_size_ini']->value));
$_block_repeat=true;
echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['realpath_cache_size_ini']->value), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>'realpath_cache_size setting': %0<?php $_block_repeat=false;
echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['realpath_cache_size_ini']->value), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tr', array('_0'=>$_smarty_tpl->tpl_vars['realpath_cache_size_percent']->value));
$_block_repeat=true;
echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['realpath_cache_size_percent']->value), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>(percentage used %0 %<?php $_block_repeat=false;
echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['realpath_cache_size_percent']->value), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>)
                        <?php echo smarty_function_help(array('url'=>"php.ini#Performance",'desc'=>"realpath_cache_size : Determines the size of the realpath cache to be used by PHP."),$_smarty_tpl);?>

                    </p>
                    <p><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tr', array('_0'=>$_smarty_tpl->tpl_vars['realpath_cache_ttl']->value));
$_block_repeat=true;
echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['realpath_cache_ttl']->value), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>'realpath_cache_ttl setting': %0 seconds<?php $_block_repeat=false;
echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['realpath_cache_ttl']->value), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                    <?php echo smarty_function_help(array('url'=>"php.ini#Performance",'desc'=>"realpath_cache_ttl : Duration of time (in seconds) for which to cache realpath information for a given file or directory."),$_smarty_tpl);?>

                </div>
            </fieldset>
        <?php $_block_repeat=false;
echo smarty_block_tab(array('name'=>"Performance"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tab', array('name'=>"Bytecode Cache"));
$_block_repeat=true;
echo smarty_block_tab(array('name'=>"Bytecode Cache"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <br>
            <?php if ($_smarty_tpl->tpl_vars['opcode_cache']->value) {?>

                <?php if (!$_smarty_tpl->tpl_vars['opcode_compatible']->value) {?>
                    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>"warning",'title'=>"Warning"));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Warning"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    Some PHP versions may exhibit randomly issues with the OpCache leading to the server starting to fail to serve all PHP requests, your PHP version seems to
                        be affected, despite the performance penalty, we would recommend disabling the OpCache if you experience random crashes.
                    <?php $_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Warning"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <?php }?>

                <p><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tr', array('_0'=>$_smarty_tpl->tpl_vars['opcode_cache']->value));
$_block_repeat=true;
echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['opcode_cache']->value), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Using <strong>%0</strong>. These stats affect all PHP applications running on the server.<?php $_block_repeat=false;
echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['opcode_cache']->value), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></p>

                <?php if ($_smarty_tpl->tpl_vars['opcode_stats']->value['warning_xcache_blocked']) {?>
                    <p>Configuration setting <em>xcache.admin.enable_auth</em> prevents from accessing statistics. This will also prevent the cache from being cleared when clearing template cache.</p>
                <?php }?>

                <div class="table-responsive">
                    <table class="table">
                        <tr>
                            <td>
                                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('wikiplugin', array('_name'=>'chartjs','type'=>'pie','id'=>'MemoryGraph','width'=>250,'height'=>100,'values'=>$_smarty_tpl->tpl_vars['memory_graph']->value['data'],'data_labels'=>$_smarty_tpl->tpl_vars['memory_graph']->value['data'],'debug'=>1));
$_block_repeat=true;
echo smarty_block_wikiplugin(array('_name'=>'chartjs','type'=>'pie','id'=>'MemoryGraph','width'=>250,'height'=>100,'values'=>$_smarty_tpl->tpl_vars['memory_graph']->value['data'],'data_labels'=>$_smarty_tpl->tpl_vars['memory_graph']->value['data'],'debug'=>1), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                <?php $_block_repeat=false;
echo smarty_block_wikiplugin(array('_name'=>'chartjs','type'=>'pie','id'=>'MemoryGraph','width'=>250,'height'=>100,'values'=>$_smarty_tpl->tpl_vars['memory_graph']->value['data'],'data_labels'=>$_smarty_tpl->tpl_vars['memory_graph']->value['data'],'debug'=>1), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                            </td>
                            <td>
                                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('wikiplugin', array('_name'=>'chartjs','type'=>'pie','id'=>'CacheGraph','width'=>250,'height'=>100,'values'=>$_smarty_tpl->tpl_vars['hits_graph']->value['data'],'data_labels'=>$_smarty_tpl->tpl_vars['hits_graph']->value['data'],'debug'=>1));
$_block_repeat=true;
echo smarty_block_wikiplugin(array('_name'=>'chartjs','type'=>'pie','id'=>'CacheGraph','width'=>250,'height'=>100,'values'=>$_smarty_tpl->tpl_vars['hits_graph']->value['data'],'data_labels'=>$_smarty_tpl->tpl_vars['hits_graph']->value['data'],'debug'=>1), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                <?php $_block_repeat=false;
echo smarty_block_wikiplugin(array('_name'=>'chartjs','type'=>'pie','id'=>'CacheGraph','width'=>250,'height'=>100,'values'=>$_smarty_tpl->tpl_vars['hits_graph']->value['data'],'data_labels'=>$_smarty_tpl->tpl_vars['hits_graph']->value['data'],'debug'=>1), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Memory Used: <?php echo $_smarty_tpl->tpl_vars['opcode_stats']->value['memory_used']*100;?>
% - Available: <?php echo $_smarty_tpl->tpl_vars['opcode_stats']->value['memory_avail']*100;?>
%
                            </td>
                            <td>
                                Cache Hits: <?php echo $_smarty_tpl->tpl_vars['opcode_stats']->value['hit_hit']*100;?>
% - Misses: <?php echo $_smarty_tpl->tpl_vars['opcode_stats']->value['hit_miss']*100;?>
%
                            </td>
                        </tr>
                    </table>
                </div>

                <?php if ($_smarty_tpl->tpl_vars['opcode_stats']->value['warning_fresh']) {?>
                    <p>Few hits recorded. Statistics may not be representative.</p>
                <?php }?>

                <?php if ($_smarty_tpl->tpl_vars['opcode_stats']->value['warning_ratio']) {?>
                    <p><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tr', array('_0'=>$_smarty_tpl->tpl_vars['opcode_cache']->value));
$_block_repeat=true;
echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['opcode_cache']->value), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Low hit ratio. %0 may be misconfigured and not used.<?php $_block_repeat=false;
echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['opcode_cache']->value), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></p>
                <?php }?>

                <?php if ($_smarty_tpl->tpl_vars['opcode_stats']->value['warning_starve']) {?>
                    <p>Little memory available. Thrashing likely to occur. The values to increase are apc.shm_size (for APC), xcache.size (for XCache) or opcache.memory_consumption (for OPcache).</p>
                <?php }?>

                <?php if ($_smarty_tpl->tpl_vars['opcode_stats']->value['warning_low']) {?>
                    <p><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tr', array('_0'=>$_smarty_tpl->tpl_vars['opcode_cache']->value));
$_block_repeat=true;
echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['opcode_cache']->value), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Small amount of memory allocated to %0. Verify the configuration.<?php $_block_repeat=false;
echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['opcode_cache']->value), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?> The values to increase are apc.shm_size (for APC), xcache.size (for XCache) or opcache.memory_consumption (for OPcache).</p>
                <?php }?>

                <?php if ($_smarty_tpl->tpl_vars['opcode_stats']->value['warning_check']) {?>
                    <p>
                        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tr', array('_0'=>$_smarty_tpl->tpl_vars['stat_flag']->value));
$_block_repeat=true;
echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['stat_flag']->value), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Configuration <em>%0</em> is enabled. Disabling modification checks can improve performance, but will require manual clear on file updates.<?php $_block_repeat=false;
echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['stat_flag']->value), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                        <?php if ($_smarty_tpl->tpl_vars['opcode_stats']->value['warning_xcache_blocked']) {?>
                            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tr', array('_0'=>$_smarty_tpl->tpl_vars['stat_flag']->value));
$_block_repeat=true;
echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['stat_flag']->value), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?><em>%0</em> should not be disabled due to authentication on XCache.<?php $_block_repeat=false;
echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['stat_flag']->value), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                        <?php }?>
                    </p>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['opcode_stats']->value['warning_check']) {?>
                    <p>Clear all APC caches: <?php ob_start();
echo smarty_function_ticket(array('mode'=>'get'),$_smarty_tpl);
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('self_link', array('apc_clear'=>true,'_onclick'=>"confirmPopup('Clear APC caches?', '".$_prefixVariable1."')"));
$_block_repeat=true;
echo smarty_block_self_link(array('apc_clear'=>true,'_onclick'=>"confirmPopup('Clear APC caches?', '".$_prefixVariable1."')"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Clear Caches<?php $_block_repeat=false;
echo smarty_block_self_link(array('apc_clear'=>true,'_onclick'=>"confirmPopup('Clear APC caches?', '".$_prefixVariable1."')"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></p>
                <?php }?>
            <?php } else { ?>
                Bytecode cache is not used. Using a bytecode cache (OPcache, APC, XCache, WinCache) is highly recommended for production environments.
            <?php }?>
        <?php $_block_repeat=false;
echo smarty_block_tab(array('name'=>"Bytecode Cache"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tab', array('name'=>"Wiki"));
$_block_repeat=true;
echo smarty_block_tab(array('name'=>"Wiki"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <br>
            <?php echo smarty_function_preference(array('name'=>'wiki_cache'),$_smarty_tpl);?>

            <?php echo smarty_function_preference(array('name'=>'feature_wiki_icache'),$_smarty_tpl);?>

            <?php echo smarty_function_preference(array('name'=>'wiki_ranking_reload_probability'),$_smarty_tpl);?>

        <?php $_block_repeat=false;
echo smarty_block_tab(array('name'=>"Wiki"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tab', array('name'=>"Database"));
$_block_repeat=true;
echo smarty_block_tab(array('name'=>"Database"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <br>
            <?php echo smarty_function_preference(array('name'=>'log_sql'),$_smarty_tpl);?>

            <div class="adminoptionboxchild" id="log_sql_childcontainer">
                <?php echo smarty_function_preference(array('name'=>'log_sql_perf_min'),$_smarty_tpl);?>

            </div>
            <?php echo smarty_function_preference(array('name'=>'feature_search_show_forbidden_obj'),$_smarty_tpl);?>

            <?php echo smarty_function_preference(array('name'=>'feature_search_show_forbidden_cat'),$_smarty_tpl);?>

        <?php $_block_repeat=false;
echo smarty_block_tab(array('name'=>"Database"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tab', array('name'=>"Memcache"));
$_block_repeat=true;
echo smarty_block_tab(array('name'=>"Memcache"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <br>
            <?php echo smarty_function_preference(array('name'=>'memcache_enabled'),$_smarty_tpl);?>

            <div class="adminoptionboxchild" id="memcache_enabled_childcontainer">
                <?php echo smarty_function_preference(array('name'=>'memcache_prefix'),$_smarty_tpl);?>

                <?php echo smarty_function_preference(array('name'=>'memcache_expiration'),$_smarty_tpl);?>

                <?php echo smarty_function_preference(array('name'=>'memcache_servers'),$_smarty_tpl);?>

                <?php echo smarty_function_preference(array('name'=>'memcache_wiki_data'),$_smarty_tpl);?>

                <?php echo smarty_function_preference(array('name'=>'memcache_wiki_output'),$_smarty_tpl);?>

                <?php echo smarty_function_preference(array('name'=>'memcache_forum_output'),$_smarty_tpl);?>

            </div>
        <?php $_block_repeat=false;
echo smarty_block_tab(array('name'=>"Memcache"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tab', array('name'=>"Redis"));
$_block_repeat=true;
echo smarty_block_tab(array('name'=>"Redis"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <?php echo smarty_function_preference(array('name'=>"redis_enabled"),$_smarty_tpl);?>

            <div class="adminoptionboxchild" id="redis_enabled_childcontainer">
                <?php echo smarty_function_preference(array('name'=>"redis_host"),$_smarty_tpl);?>

                <?php echo smarty_function_preference(array('name'=>"redis_port"),$_smarty_tpl);?>

                <?php echo smarty_function_preference(array('name'=>"redis_timeout"),$_smarty_tpl);?>

                <?php echo smarty_function_preference(array('name'=>"redis_prefix"),$_smarty_tpl);?>

                <?php echo smarty_function_preference(array('name'=>"redis_expiry"),$_smarty_tpl);?>

            </div>
        <?php $_block_repeat=false;
echo smarty_block_tab(array('name'=>"Redis"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tab', array('name'=>"Plugins"));
$_block_repeat=true;
echo smarty_block_tab(array('name'=>"Plugins"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <br>
            <?php echo smarty_function_preference(array('name'=>'wikiplugin_snarf_cache'),$_smarty_tpl);?>

        <?php $_block_repeat=false;
echo smarty_block_tab(array('name'=>"Plugins"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tab', array('name'=>"Major Slowdown"));
$_block_repeat=true;
echo smarty_block_tab(array('name'=>"Major Slowdown"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <br>
            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>"note",'title'=>"Major slowdown"));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>"note",'title'=>"Major slowdown"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                These are reported to slow down Tiki. If you have a high-volume site, you may want to deactivate them
            <?php $_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>"note",'title'=>"Major slowdown"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            <?php echo smarty_function_preference(array('name'=>'wikiplugin_sharethis'),$_smarty_tpl);?>

            <?php echo smarty_function_preference(array('name'=>'log_sql'),$_smarty_tpl);?>

            <?php echo smarty_function_preference(array('name'=>'log_mail'),$_smarty_tpl);?>

            <?php echo smarty_function_preference(array('name'=>'log_tpl'),$_smarty_tpl);?>

            <?php echo smarty_function_preference(array('name'=>'category_browse_count_objects'),$_smarty_tpl);?>

            <?php echo smarty_function_preference(array('name'=>'categories_cache_refresh_on_object_cat'),$_smarty_tpl);?>

            <?php echo smarty_function_preference(array('name'=>'feature_actionlog_bytes'),$_smarty_tpl);?>

            <?php echo smarty_function_preference(array('name'=>'search_parsed_snippet'),$_smarty_tpl);?>

            <?php echo smarty_function_preference(array('name'=>'feature_blog_heading'),$_smarty_tpl);?>

            <?php echo smarty_function_preference(array('name'=>'error_reporting_level'),$_smarty_tpl);?>

            <?php echo smarty_function_preference(array('name'=>'feature_typo_enable'),$_smarty_tpl);?>

            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>"tip",'title'=>"Tip"));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Tip"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                Many search options impact performance. Please see <a href="tiki-admin.php?page=search" class="alert-link">Search admin panel</a>.
            <?php $_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Tip"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <?php $_block_repeat=false;
echo smarty_block_tab(array('name'=>"Major Slowdown"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tab', array('name'=>"Sessions"));
$_block_repeat=true;
echo smarty_block_tab(array('name'=>"Sessions"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <br>
            <?php echo smarty_function_preference(array('name'=>'session_silent'),$_smarty_tpl);?>

            <?php echo smarty_function_preference(array('name'=>'tiki_cachecontrol_nosession'),$_smarty_tpl);?>

        <?php $_block_repeat=false;
echo smarty_block_tab(array('name'=>"Sessions"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tab', array('name'=>"Newsletter"));
$_block_repeat=true;
echo smarty_block_tab(array('name'=>"Newsletter"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <br>
            <?php echo smarty_function_preference(array('name'=>'newsletter_throttle'),$_smarty_tpl);?>

            <div class="adminoptionboxchild" id="newsletter_throttle_childcontainer">
                <?php echo smarty_function_preference(array('name'=>'newsletter_pause_length'),$_smarty_tpl);?>

                <?php echo smarty_function_preference(array('name'=>'newsletter_batch_size'),$_smarty_tpl);?>

            </div>
        <?php $_block_repeat=false;
echo smarty_block_tab(array('name'=>"Newsletter"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tab', array('name'=>"Time and Memory Limits"));
$_block_repeat=true;
echo smarty_block_tab(array('name'=>"Time and Memory Limits"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <br>
            <?php echo smarty_function_preference(array('name'=>'allocate_memory_php_execution'),$_smarty_tpl);?>

            <?php echo smarty_function_preference(array('name'=>'allocate_time_php_execution'),$_smarty_tpl);?>

            <?php echo smarty_function_preference(array('name'=>'allocate_memory_tracker_export_items'),$_smarty_tpl);?>

            <?php echo smarty_function_preference(array('name'=>'allocate_time_tracker_export_items'),$_smarty_tpl);?>

            <?php echo smarty_function_preference(array('name'=>'allocate_time_tracker_clear_items'),$_smarty_tpl);?>

            <?php echo smarty_function_preference(array('name'=>'allocate_memory_print_pdf'),$_smarty_tpl);?>

            <?php echo smarty_function_preference(array('name'=>'allocate_time_print_pdf'),$_smarty_tpl);?>

            <?php echo smarty_function_preference(array('name'=>"allocate_memory_unified_rebuild"),$_smarty_tpl);?>

            <?php echo smarty_function_preference(array('name'=>"allocate_time_unified_rebuild"),$_smarty_tpl);?>

        <?php $_block_repeat=false;
echo smarty_block_tab(array('name'=>"Time and Memory Limits"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

    <?php $_block_repeat=false;
echo smarty_block_tabset(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    <?php $_smarty_tpl->_subTemplateRender('file:admin/include_apply_bottom.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</form>
<?php }
}
