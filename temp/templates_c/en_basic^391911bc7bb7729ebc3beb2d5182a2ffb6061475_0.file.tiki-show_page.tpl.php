<?php
/* Smarty version 3.1.48, created on 2023-09-29 11:16:29
  from '/home/teddieme/tedd1eme/templates/tiki-show_page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6516a3fd4b8480_80038752',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '391911bc7bb7729ebc3beb2d5182a2ffb6061475' => 
    array (
      0 => '/home/teddieme/tedd1eme/templates/tiki-show_page.tpl',
      1 => 1689085248,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:tiki-wiki_topline.tpl' => 2,
    'file:tiki-flaggedrev_approval_header.tpl' => 1,
    'file:tiki-page_bar.tpl' => 2,
    'file:freetag_list.tpl' => 1,
    'file:tiki-wiki_structure_bar.tpl' => 2,
    'file:poll.tpl' => 1,
    'file:wiki_authors.tpl' => 1,
    'file:show_copyright.tpl' => 1,
    'file:category_related_objects.tpl' => 1,
  ),
),false)) {
function content_6516a3fd4b8480_80038752 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>




<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10988100416516a3fd45e7a7_79238112', 'title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1472665546516a3fd468e25_05255122', "quicknav");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2203041426516a3fd46b649_97053767', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout_view.tpl');
}
/* {block 'title'} */
class Block_10988100416516a3fd45e7a7_79238112 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_10988100416516a3fd45e7a7_79238112',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/function.breadcrumbs.php','function'=>'smarty_function_breadcrumbs',),));
?>

    <?php if (!(isset($_smarty_tpl->tpl_vars['pageLang']->value))) {?>
        <?php if ((isset($_smarty_tpl->tpl_vars['info']->value['lang']))) {?>
            <?php $_smarty_tpl->_assignInScope('pageLang', $_smarty_tpl->tpl_vars['info']->value['lang']);?>
        <?php } else { ?>
            <?php $_smarty_tpl->_assignInScope('pageLang', '');?>
        <?php }?>
    <?php }?>
    <?php if (!(isset($_smarty_tpl->tpl_vars['hide_page_header']->value)) || !$_smarty_tpl->tpl_vars['hide_page_header']->value) {?>
        <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_siteloc'] == 'page' && $_smarty_tpl->tpl_vars['prefs']->value['feature_breadcrumbs'] == 'y') {?>
            <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_siteloclabel'] == 'y') {?>Location : <?php }?>
            <?php echo smarty_function_breadcrumbs(array('type'=>"trail",'loc'=>"page",'crumbs'=>$_smarty_tpl->tpl_vars['crumbs']->value),$_smarty_tpl);?>

            <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_page_title'] == 'y') {?>
                <?php echo smarty_function_breadcrumbs(array('type'=>"pagetitle",'loc'=>"page",'crumbs'=>$_smarty_tpl->tpl_vars['crumbs']->value,'machine_translate'=>$_smarty_tpl->tpl_vars['machine_translate_to_lang']->value,'source_lang'=>$_smarty_tpl->tpl_vars['pageLang']->value,'target_lang'=>$_smarty_tpl->tpl_vars['machine_translate_to_lang']->value),$_smarty_tpl);?>

            <?php }?>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_page_title'] == 'y') {?>
            <h1 class="pagetitle"><?php echo smarty_function_breadcrumbs(array('type'=>"pagetitle",'loc'=>"page",'crumbs'=>$_smarty_tpl->tpl_vars['crumbs']->value,'machine_translate'=>$_smarty_tpl->tpl_vars['machine_translate_to_lang']->value,'source_lang'=>$_smarty_tpl->tpl_vars['pageLang']->value,'target_lang'=>$_smarty_tpl->tpl_vars['machine_translate_to_lang']->value),$_smarty_tpl);?>
</h1>
        <?php }?>

    <?php }
}
}
/* {/block 'title'} */
/* {block "quicknav"} */
class Block_1472665546516a3fd468e25_05255122 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'quicknav' => 
  array (
    0 => 'Block_1472665546516a3fd468e25_05255122',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if (!$_smarty_tpl->tpl_vars['prefs']->value['wiki_topline_position'] || $_smarty_tpl->tpl_vars['prefs']->value['wiki_topline_position'] == 'top' || $_smarty_tpl->tpl_vars['prefs']->value['wiki_topline_position'] == 'both') {?>
        <?php $_smarty_tpl->_subTemplateRender('file:tiki-wiki_topline.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php }
}
}
/* {/block "quicknav"} */
/* {block 'content'} */
class Block_2203041426516a3fd46b649_97053767 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_2203041426516a3fd46b649_97053767',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/modifier.sefurl.php','function'=>'smarty_modifier_sefurl',),1=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/function.icon.php','function'=>'smarty_function_icon',),2=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/block.tr.php','function'=>'smarty_block_tr',),3=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/block.remarksbox.php','function'=>'smarty_block_remarksbox',),4=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/function.breadcrumbs.php','function'=>'smarty_function_breadcrumbs',),5=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/function.rating.php','function'=>'smarty_function_rating',),));
?>

    <?php if (!(isset($_smarty_tpl->tpl_vars['hide_page_header']->value)) || !$_smarty_tpl->tpl_vars['hide_page_header']->value) {?>
        <?php $_smarty_tpl->_subTemplateRender('file:tiki-flaggedrev_approval_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['print_page']->value != 'y') {?>
        <?php if ($_smarty_tpl->tpl_vars['prefs']->value['page_bar_position'] == 'top') {?>
            <?php $_smarty_tpl->_subTemplateRender('file:tiki-page_bar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php }?>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['user']->value && $_smarty_tpl->tpl_vars['prefs']->value['feature_user_watches'] == 'y' && ((isset($_smarty_tpl->tpl_vars['category_watched']->value)) && $_smarty_tpl->tpl_vars['category_watched']->value == 'y')) {?>
        <div class="categbar" style="clear: both; text-align: right">
            Watched by categories:
            <?php
$__section_i_3_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['watching_categories']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_3_total = $__section_i_3_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_3_total !== 0) {
for ($__section_i_3_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_3_iteration <= $__section_i_3_total; $__section_i_3_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                <a href="tiki-browse_categories.php?parentId=<?php echo $_smarty_tpl->tpl_vars['watching_categories']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['categId'];?>
"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['watching_categories']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['name'] ));?>
</a>&nbsp;
            <?php
}
}
?>
        </div>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_urgent_translation'] == 'y') {?>
        <?php
$__section_i_4_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['translation_alert']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_4_total = $__section_i_4_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_4_total !== 0) {
for ($__section_i_4_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_4_iteration <= $__section_i_4_total; $__section_i_4_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
            <div class="card panel-warning">
                <div class="card-header">
                    Content may be out of date
                </div>
                <div class="card-body">
                    An urgent request for translation has been sent. Until this page is updated, you can see a corrected version in the following pages:
                    <ul>
                        <?php
$__section_j_5_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['translation_alert']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]) ? count($_loop) : max(0, (int) $_loop));
$__section_j_5_total = $__section_j_5_loop;
$_smarty_tpl->tpl_vars['__smarty_section_j'] = new Smarty_Variable(array());
if ($__section_j_5_total !== 0) {
for ($__section_j_5_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] = 0; $__section_j_5_iteration <= $__section_j_5_total; $__section_j_5_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']++){
?>
                            <li>
                                <a href="<?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['translation_alert']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)][(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]['page'],'wiki','with_next');?>
no_bl=y">
                                    <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['translation_alert']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)][(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]['page'] ));?>

                                </a>
                                (<?php echo $_smarty_tpl->tpl_vars['translation_alert']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)][(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]['lang'];?>
)
                                <?php if ($_smarty_tpl->tpl_vars['editable']->value && ($_smarty_tpl->tpl_vars['tiki_p_edit']->value == 'y' || mb_strtolower($_smarty_tpl->tpl_vars['page']->value, 'UTF-8') == 'sandbox') && $_smarty_tpl->tpl_vars['beingEdited']->value != 'y') {?>
                                    <a href="tiki-editpage.php?page=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['page']->value,'url' ));?>
&amp;source_page=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['translation_alert']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)][(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]['page'],'url' ));?>
&amp;oldver=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['translation_alert']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)][(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]['last_update'],'url' ));?>
&amp;newver=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['translation_alert']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)][(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]['current_version'],'url' ));?>
&amp;diff_style=htmldiff" class="tips" title=":Update from it">
                                        <?php echo smarty_function_icon(array('name'=>'refresh','style'=>"vertical-align:middle"),$_smarty_tpl);?>

                                    </a>
                                <?php }?>
                            </li>
                        <?php
}
}
?>
                    </ul>
                </div>
            </div>
        <?php
}
}
?>
    <?php }?>

    <article id="top" class="wikitext clearfix<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_page_title'] != 'y') {?> nopagetitle<?php }?>">
        <?php if (!(isset($_smarty_tpl->tpl_vars['hide_page_header']->value)) || !$_smarty_tpl->tpl_vars['hide_page_header']->value) {?>
            <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_freetags'] == 'y' && $_smarty_tpl->tpl_vars['tiki_p_view_freetags']->value == 'y' && (isset($_smarty_tpl->tpl_vars['freetags']->value['data'][0])) && $_smarty_tpl->tpl_vars['prefs']->value['freetags_show_middle'] == 'y') {?>
                <?php $_smarty_tpl->_subTemplateRender('file:freetag_list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['pages']->value > 1 && $_smarty_tpl->tpl_vars['prefs']->value['wiki_page_navigation_bar'] != 'bottom') {?>
                <div class="text-center navigation_bar pagination pagination-sm position_top">
                    <a href="tiki-index.php?<?php if ($_smarty_tpl->tpl_vars['page_info']->value) {?>page_ref_id=<?php echo $_smarty_tpl->tpl_vars['page_info']->value['page_ref_id'];
} else { ?>page=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['page']->value,"url" ));
}?>&amp;pagenum=<?php echo $_smarty_tpl->tpl_vars['first_page']->value;?>
" class="page-link tips" title=":First">
                        <?php echo smarty_function_icon(array('name'=>'backward_step'),$_smarty_tpl);?>

                    </a>

                    <a href="tiki-index.php?<?php if ($_smarty_tpl->tpl_vars['page_info']->value) {?>page_ref_id=<?php echo $_smarty_tpl->tpl_vars['page_info']->value['page_ref_id'];
} else { ?>page=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['page']->value,"url" ));
}?>&amp;pagenum=<?php echo $_smarty_tpl->tpl_vars['prev_page']->value;?>
" class="page-link tips" title=":Previous">
                        <?php echo smarty_function_icon(array('name'=>'backward'),$_smarty_tpl);?>

                    </a>

                    <div class="page-item disabled"><small class="page-link"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tr', array('_0'=>$_smarty_tpl->tpl_vars['pagenum']->value,'_1'=>$_smarty_tpl->tpl_vars['pages']->value));
$_block_repeat=true;
echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['pagenum']->value,'_1'=>$_smarty_tpl->tpl_vars['pages']->value), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>page: %0/%1<?php $_block_repeat=false;
echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['pagenum']->value,'_1'=>$_smarty_tpl->tpl_vars['pages']->value), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></small></div>

                    <a href="tiki-index.php?<?php if ($_smarty_tpl->tpl_vars['page_info']->value) {?>page_ref_id=<?php echo $_smarty_tpl->tpl_vars['page_info']->value['page_ref_id'];
} else { ?>page=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['page']->value,"url" ));
}?>&amp;pagenum=<?php echo $_smarty_tpl->tpl_vars['next_page']->value;?>
" class="page-link tips" title=":Next">
                        <?php echo smarty_function_icon(array('name'=>'forward'),$_smarty_tpl);?>

                    </a>

                    <a href="tiki-index.php?<?php if ($_smarty_tpl->tpl_vars['page_info']->value) {?>page_ref_id=<?php echo $_smarty_tpl->tpl_vars['page_info']->value['page_ref_id'];
} else { ?>page=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['page']->value,"url" ));
}?>&amp;pagenum=<?php echo $_smarty_tpl->tpl_vars['last_page']->value;?>
" class="page-link tips" title=":Last">
                        <?php echo smarty_function_icon(array('name'=>'forward_step'),$_smarty_tpl);?>

                    </a>
                </div>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['structure']->value == 'y' && (($_smarty_tpl->tpl_vars['prefs']->value['wiki_structure_bar_position'] != 'bottom') && ($_smarty_tpl->tpl_vars['prefs']->value['wiki_structure_bar_position'] != 'none'))) {?>
                <?php $_smarty_tpl->_subTemplateRender('file:tiki-wiki_structure_bar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_ratings'] == 'y') {?>
                <?php $_smarty_tpl->_subTemplateRender('file:poll.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php }?>
        <?php }?> 

        <?php if ($_smarty_tpl->tpl_vars['machine_translate_to_lang']->value != '') {?>
            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>"warning",'title'=>"Warning",'highlight'=>"y"));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Warning",'highlight'=>"y"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                This text was automatically translated by Google Translate from the following page: <a href="tiki-index.php?page=<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
" class="alert-link"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</a>
            <?php $_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Warning",'highlight'=>"y"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <?php }?>

        <div id="page-data" class="clearfix">
            <?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_page_name_inside'] == 'y') {?>
                <h1 class="pagetitle"><?php echo smarty_function_breadcrumbs(array('type'=>"pagetitle",'loc'=>"page",'crumbs'=>$_smarty_tpl->tpl_vars['crumbs']->value,'machine_translate'=>$_smarty_tpl->tpl_vars['machine_translate_to_lang']->value,'source_lang'=>$_smarty_tpl->tpl_vars['pageLang']->value,'target_lang'=>$_smarty_tpl->tpl_vars['machine_translate_to_lang']->value),$_smarty_tpl);?>
</h1>
            <?php }?>
            <?php if ((isset($_smarty_tpl->tpl_vars['pageLang']->value)) && ($_smarty_tpl->tpl_vars['pageLang']->value == 'ar' || $_smarty_tpl->tpl_vars['pageLang']->value == 'he')) {?>
                <div style="direction:RTL; unicode-bidi:embed; text-align: right; <?php if ($_smarty_tpl->tpl_vars['pageLang']->value == 'ar') {?>font-size: large;<?php }?>">
                    <?php echo $_smarty_tpl->tpl_vars['parsed']->value;?>

                </div>
            <?php } else { ?>
                <?php echo $_smarty_tpl->tpl_vars['parsed']->value;?>

            <?php }?>
        </div>

        <?php if ($_smarty_tpl->tpl_vars['structure']->value == 'y' && (($_smarty_tpl->tpl_vars['prefs']->value['wiki_structure_bar_position'] == 'bottom') || ($_smarty_tpl->tpl_vars['prefs']->value['wiki_structure_bar_position'] == 'both'))) {?>
            <?php $_smarty_tpl->_subTemplateRender('file:tiki-wiki_structure_bar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['pages']->value > 1 && $_smarty_tpl->tpl_vars['prefs']->value['wiki_page_navigation_bar'] != 'top') {?>
            <br>
            <div class="text-center navigation_bar pagination pagination-sm position_bottom">
                <a href="tiki-index.php?<?php if ($_smarty_tpl->tpl_vars['page_info']->value) {?>page_ref_id=<?php echo $_smarty_tpl->tpl_vars['page_info']->value['page_ref_id'];
} else { ?>page=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['page']->value,"url" ));
}?>&amp;pagenum=<?php echo $_smarty_tpl->tpl_vars['first_page']->value;?>
" class="page-link tips" title=":First">
                    <?php echo smarty_function_icon(array('name'=>'backward_step'),$_smarty_tpl);?>

                </a>

                <a href="tiki-index.php?<?php if ($_smarty_tpl->tpl_vars['page_info']->value) {?>page_ref_id=<?php echo $_smarty_tpl->tpl_vars['page_info']->value['page_ref_id'];
} else { ?>page=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['page']->value,"url" ));
}?>&amp;pagenum=<?php echo $_smarty_tpl->tpl_vars['prev_page']->value;?>
" class="page-link tips" title=":Previous">
                    <?php echo smarty_function_icon(array('name'=>'backward'),$_smarty_tpl);?>

                </a>

                <div class="page-item disabled"><small class="page-link"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tr', array('_0'=>$_smarty_tpl->tpl_vars['pagenum']->value,'_1'=>$_smarty_tpl->tpl_vars['pages']->value));
$_block_repeat=true;
echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['pagenum']->value,'_1'=>$_smarty_tpl->tpl_vars['pages']->value), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>page: %0/%1<?php $_block_repeat=false;
echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['pagenum']->value,'_1'=>$_smarty_tpl->tpl_vars['pages']->value), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></small></div>

                <a href="tiki-index.php?<?php if ($_smarty_tpl->tpl_vars['page_info']->value) {?>page_ref_id=<?php echo $_smarty_tpl->tpl_vars['page_info']->value['page_ref_id'];
} else { ?>page=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['page']->value,"url" ));
}?>&amp;pagenum=<?php echo $_smarty_tpl->tpl_vars['next_page']->value;?>
" class="page-link tips" title=":Next">
                    <?php echo smarty_function_icon(array('name'=>'forward'),$_smarty_tpl);?>

                </a>

                <a href="tiki-index.php?<?php if ($_smarty_tpl->tpl_vars['page_info']->value) {?>page_ref_id=<?php echo $_smarty_tpl->tpl_vars['page_info']->value['page_ref_id'];
} else { ?>page=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['page']->value,"url" ));
}?>&amp;pagenum=<?php echo $_smarty_tpl->tpl_vars['last_page']->value;?>
" class="page-link tips" title=":Last">
                    <?php echo smarty_function_icon(array('name'=>'forward_step'),$_smarty_tpl);?>

                </a>
            </div>
        <?php }?>
    </article> 

    <?php if ($_smarty_tpl->tpl_vars['has_footnote']->value == 'y') {?>
        <div class="wikitext" id="wikifootnote"><?php echo $_smarty_tpl->tpl_vars['footnote']->value;?>
</div>
    <?php }?>

    <footer class="form-text">
        <?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_simple_ratings'] == 'y' && $_smarty_tpl->tpl_vars['tiki_p_wiki_vote_ratings']->value == 'y') {?>
            Rate this page:
            <form method="post" action="">
                <?php echo smarty_function_rating(array('type'=>"wiki page",'id'=>$_smarty_tpl->tpl_vars['page_id']->value),$_smarty_tpl);?>

            </form>
        <?php }?>

        <?php if ((isset($_smarty_tpl->tpl_vars['wiki_authors_style']->value)) && $_smarty_tpl->tpl_vars['wiki_authors_style']->value != 'none') {?>
            <?php $_smarty_tpl->_subTemplateRender('file:wiki_authors.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php }?>

        <?php $_smarty_tpl->_subTemplateRender('file:show_copyright.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('copyright_context'=>"wiki"), 0, false);
?>

        <?php if ($_smarty_tpl->tpl_vars['print_page']->value == 'y' && $_smarty_tpl->tpl_vars['prefs']->value['print_original_url_wiki'] == 'y') {?>
            <br>
            The original document is available at <a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['base_url']->value ));
echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['page']->value);?>
"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['base_url']->value ));
echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['page']->value);?>
</a>
        <?php }?>
    </footer>

    <?php if ($_smarty_tpl->tpl_vars['is_categorized']->value == 'y' && $_smarty_tpl->tpl_vars['prefs']->value['feature_categories'] == 'y' && $_smarty_tpl->tpl_vars['prefs']->value['feature_categoryobjects'] == 'y') {?>
        <?php echo $_smarty_tpl->tpl_vars['display_catobjects']->value;?>

    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['is_categorized']->value == 'y' && $_smarty_tpl->tpl_vars['prefs']->value['feature_categories'] == 'y' && $_smarty_tpl->tpl_vars['prefs']->value['category_morelikethis_algorithm'] != '') {?>
        <?php $_smarty_tpl->_subTemplateRender('file:category_related_objects.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_topline_position'] == 'bottom' || $_smarty_tpl->tpl_vars['prefs']->value['wiki_topline_position'] == 'both') {?>
        <?php $_smarty_tpl->_subTemplateRender('file:tiki-wiki_topline.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['print_page']->value != 'y') {?>
        <?php if ((!$_smarty_tpl->tpl_vars['prefs']->value['page_bar_position'] || $_smarty_tpl->tpl_vars['prefs']->value['page_bar_position'] == 'bottom' || $_smarty_tpl->tpl_vars['prefs']->value['page_bar_position'] == 'both') && $_smarty_tpl->tpl_vars['machine_translate_to_lang']->value == '') {?>
            <?php $_smarty_tpl->_subTemplateRender('file:tiki-page_bar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
        <?php }?>
    <?php }
}
}
/* {/block 'content'} */
}
