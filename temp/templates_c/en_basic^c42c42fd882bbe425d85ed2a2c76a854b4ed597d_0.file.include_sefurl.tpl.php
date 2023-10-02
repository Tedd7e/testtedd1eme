<?php
/* Smarty version 3.1.48, created on 2023-09-29 11:22:34
  from '/home/teddieme/tedd1eme/templates/admin/include_sefurl.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6516a56a7364b2_01817626',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c42c42fd882bbe425d85ed2a2c76a854b4ed597d' => 
    array (
      0 => '/home/teddieme/tedd1eme/templates/admin/include_sefurl.tpl',
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
function content_6516a56a7364b2_01817626 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/block.remarksbox.php','function'=>'smarty_block_remarksbox',),1=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/function.ticket.php','function'=>'smarty_function_ticket',),2=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/function.preference.php','function'=>'smarty_function_preference',),3=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/block.tr.php','function'=>'smarty_block_tr',),));
?>

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>"tip",'title'=>"Tip"));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Tip"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    See also <a class="alert-link" href="tiki-admin.php?page=metatags">Meta tags</a>.
<?php $_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Tip"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
<form class="admin" method="post" action="tiki-admin.php?page=sefurl" role="form" class="form">
    <?php echo smarty_function_ticket(array(),$_smarty_tpl);?>

    <div class="t_navbar mb-4 clearfix">
        <?php $_smarty_tpl->_subTemplateRender('file:admin/include_apply_top.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>
    <fieldset>
        <legend>Activate the feature</legend>
        <?php echo smarty_function_preference(array('name'=>'feature_sefurl','visible'=>"always"),$_smarty_tpl);?>

        <?php if ($_smarty_tpl->tpl_vars['httpd']->value == 'IIS' && !$_smarty_tpl->tpl_vars['IIS_UrlRewriteModule']->value) {?>
            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>"warning",'title'=>"Warning"));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Warning"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                SEFURL requires the <strong>URL Rewrite module</strong> for IIS. You do not seem to have this module installed.
                Please see <a class="alert-link" href="http://doc.tiki.org/Windows-Server-Install">Windows Server Install</a> on tiki.org for more information.
            <?php $_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Warning"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <?php } else { ?>
            <?php if ($_smarty_tpl->tpl_vars['configurationFile']->value == 'missing') {?>
                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>"warning",'title'=>"Warning"));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Warning"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tr', array('_0'=>$_smarty_tpl->tpl_vars['enabledFileName']->value));
$_block_repeat=true;
echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['enabledFileName']->value), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>SEFURL will not work unless Tiki specific directives are deployed to the %0 file.<?php $_block_repeat=false;
echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['enabledFileName']->value), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tr', array('_0'=>"<strong>".((string)$_smarty_tpl->tpl_vars['referenceFileName']->value)."</strong>",'_1'=>"<strong>".((string)$_smarty_tpl->tpl_vars['enabledFileName']->value)."</strong>"));
$_block_repeat=true;
echo smarty_block_tr(array('_0'=>"<strong>".((string)$_smarty_tpl->tpl_vars['referenceFileName']->value)."</strong>",'_1'=>"<strong>".((string)$_smarty_tpl->tpl_vars['enabledFileName']->value)."</strong>"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>To enable this file, simply copy the %0 file (located in the main directory of your Tiki installation) to %1.<?php $_block_repeat=false;
echo smarty_block_tr(array('_0'=>"<strong>".((string)$_smarty_tpl->tpl_vars['referenceFileName']->value)."</strong>",'_1'=>"<strong>".((string)$_smarty_tpl->tpl_vars['enabledFileName']->value)."</strong>"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tr', array('_0'=>$_smarty_tpl->tpl_vars['enabledFileName']->value));
$_block_repeat=true;
echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['enabledFileName']->value), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>If you need to keep an existing (non Tiki) %0 file, just add Tiki directives to it.<?php $_block_repeat=false;
echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['enabledFileName']->value), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                    When you upgrade Tiki (e.g. from version 7 to version 8), make sure to make use of the new URL rewriting configuration file.
                <?php $_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Warning"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            <?php } elseif ($_smarty_tpl->tpl_vars['configurationFile']->value == 'no reference') {?>
                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>"warning",'title'=>"Warning"));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Warning"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tr', array('_0'=>$_smarty_tpl->tpl_vars['referenceFileName']->value));
$_block_repeat=true;
echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['referenceFileName']->value), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>%0 file is missing.<?php $_block_repeat=false;
echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['referenceFileName']->value), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?> Unable to verify that your URL rewriting configuration is up to date. SEFURL may not work completely or correctly if Tiki URL rewriting configuration is not current.
                <?php $_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Warning"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            <?php } elseif ($_smarty_tpl->tpl_vars['configurationFile']->value == 'unexpected reference' || $_smarty_tpl->tpl_vars['configurationFile']->value == 'unexpected enabled') {?>
                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>"warning",'title'=>"Warning"));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Warning"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tr', array('_0'=>$_smarty_tpl->tpl_vars['enabledFileName']->value));
$_block_repeat=true;
echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['enabledFileName']->value), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>%0 is not in the expected format.<?php $_block_repeat=false;
echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['enabledFileName']->value), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?> Unable to verify that your URL rewriting configuration is up to date. SEFURL may not work completely or correctly if Tiki URL rewriting configuration is not current.<br>
                    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tr', array('_0'=>$_smarty_tpl->tpl_vars['enabledFileName']->value));
$_block_repeat=true;
echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['enabledFileName']->value), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>%0 may simply be outdated.<?php $_block_repeat=false;
echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['enabledFileName']->value), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tr', array('_0'=>"<strong>".((string)$_smarty_tpl->tpl_vars['referenceFileName']->value)."</strong>",'_1'=>"<strong>".((string)$_smarty_tpl->tpl_vars['enabledFileName']->value)."</strong>"));
$_block_repeat=true;
echo smarty_block_tr(array('_0'=>"<strong>".((string)$_smarty_tpl->tpl_vars['referenceFileName']->value)."</strong>",'_1'=>"<strong>".((string)$_smarty_tpl->tpl_vars['enabledFileName']->value)."</strong>"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>To update this file, if it was not customized, copy the %0 file (located in the main directory of your Tiki installation) to %1, overwriting the latter.<?php $_block_repeat=false;
echo smarty_block_tr(array('_0'=>"<strong>".((string)$_smarty_tpl->tpl_vars['referenceFileName']->value)."</strong>",'_1'=>"<strong>".((string)$_smarty_tpl->tpl_vars['enabledFileName']->value)."</strong>"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <?php $_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Warning"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            <?php } elseif ($_smarty_tpl->tpl_vars['configurationFile']->value == 'outdated') {?>
                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>"warning",'title'=>"Warning"));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Warning"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tr', array('_0'=>$_smarty_tpl->tpl_vars['enabledFileName']->value));
$_block_repeat=true;
echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['enabledFileName']->value), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>%0 file is out of date.<?php $_block_repeat=false;
echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['enabledFileName']->value), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?> SEFURL may not work completely or correctly if Tiki URL rewriting configuration is not current.
                    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tr', array('_0'=>"<strong>".((string)$_smarty_tpl->tpl_vars['referenceFileName']->value)."</strong>",'_1'=>"<strong>".((string)$_smarty_tpl->tpl_vars['enabledFileName']->value)."</strong>"));
$_block_repeat=true;
echo smarty_block_tr(array('_0'=>"<strong>".((string)$_smarty_tpl->tpl_vars['referenceFileName']->value)."</strong>",'_1'=>"<strong>".((string)$_smarty_tpl->tpl_vars['enabledFileName']->value)."</strong>"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>To update this file, if it was not customized, copy the %0 file (located in the main directory of your Tiki installation) to %1, overwriting the latter.<?php $_block_repeat=false;
echo smarty_block_tr(array('_0'=>"<strong>".((string)$_smarty_tpl->tpl_vars['referenceFileName']->value)."</strong>",'_1'=>"<strong>".((string)$_smarty_tpl->tpl_vars['enabledFileName']->value)."</strong>"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <?php $_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Warning"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            <?php }?>
            <?php if (!empty($_smarty_tpl->tpl_vars['rewritebaseSetting']->value)) {?>
                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>"warning",'title'=>"Warning"));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Warning"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    The RewriteBase directive seems not to be set up correctly. This is required for sefurl to function correctly.<br>
                    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tr', array('_0'=>$_smarty_tpl->tpl_vars['enabledFileName']->value,'_1'=>$_smarty_tpl->tpl_vars['rewritebaseSetting']->value,'_2'=>$_smarty_tpl->tpl_vars['url_path']->value));
$_block_repeat=true;
echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['enabledFileName']->value,'_1'=>$_smarty_tpl->tpl_vars['rewritebaseSetting']->value,'_2'=>$_smarty_tpl->tpl_vars['url_path']->value), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>The current value in %0 is %1 but the base url for this site is %2<?php $_block_repeat=false;
echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['enabledFileName']->value,'_1'=>$_smarty_tpl->tpl_vars['rewritebaseSetting']->value,'_2'=>$_smarty_tpl->tpl_vars['url_path']->value), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <?php $_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Warning"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            <?php }?>
        <?php }?>
        <?php echo smarty_function_preference(array('name'=>'feature_canonical_url'),$_smarty_tpl);?>

        <div id="feature_canonical_url_childcontainer" class="clearfix">
            <?php echo smarty_function_preference(array('name'=>'https_external_links_for_users'),$_smarty_tpl);?>

            <?php echo smarty_function_preference(array('name'=>'feature_canonical_domain'),$_smarty_tpl);?>

            <span class="form-text col-md-8 offset-md-4">
                For example, if the field is left blank, the canonical URL domain is: <?php echo $_smarty_tpl->tpl_vars['base_url_canonical_default']->value;?>

            </span>
        </div>
        <?php echo smarty_function_preference(array('name'=>'wiki_url_scheme'),$_smarty_tpl);?>


        <?php echo smarty_function_preference(array('name'=>'feature_sefurl_routes'),$_smarty_tpl);?>

        <?php echo smarty_function_preference(array('name'=>'sefurl_short_url'),$_smarty_tpl);?>

        <div class="adminoptionboxchild" id="sefurl_short_url_childcontainer">
            <?php echo smarty_function_preference(array('name'=>'sefurl_short_url_base_url'),$_smarty_tpl);?>

        </div>
    </fieldset>
    <fieldset>
        <legend>Settings</legend>
        <?php echo smarty_function_preference(array('name'=>'feature_sefurl_filter'),$_smarty_tpl);?>

        <div class="adminoptionbox clearfix">
            <div class="adminoption form-group row">
                <label for="feature_sefurl_paths" class="col-form-label col-md-4">
                    URL parameters
                </label>
                <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'paths', null, null);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['prefs']->value['feature_sefurl_paths'], 'path', false, NULL, 'loop', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['path']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['path']->value) {
$_smarty_tpl->tpl_vars['path']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_loop']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_loop']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_loop']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_loop']->value['total'];
echo $_smarty_tpl->tpl_vars['path']->value;
if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_loop']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_loop']->value['last'] : null)) {?>/<?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                <div class="col-md-8">
                    <input type="text" class="form-control" id="feature_sefurl_paths" name="feature_sefurl_paths" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'paths') ));?>
" />
                    <span class="form-text">
                        List of Url Parameters that should go in the path
                    </span>
                </div>
            </div>
        </div>
        <?php echo smarty_function_preference(array('name'=>'feature_sefurl_title_max_size'),$_smarty_tpl);?>

        <?php echo smarty_function_preference(array('name'=>'feature_sefurl_title_article'),$_smarty_tpl);?>

        <?php echo smarty_function_preference(array('name'=>'feature_sefurl_title_blog'),$_smarty_tpl);?>

        <?php echo smarty_function_preference(array('name'=>'feature_sefurl_title_forumthread'),$_smarty_tpl);?>

        <?php echo smarty_function_preference(array('name'=>'feature_sefurl_title_trackeritem'),$_smarty_tpl);?>

        <?php echo smarty_function_preference(array('name'=>'feature_sefurl_tracker_prefixalias'),$_smarty_tpl);?>

        <?php echo smarty_function_preference(array('name'=>'url_only_ascii'),$_smarty_tpl);?>

    </fieldset>
    <?php $_smarty_tpl->_subTemplateRender('file:admin/include_apply_bottom.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</form>
<?php }
}
