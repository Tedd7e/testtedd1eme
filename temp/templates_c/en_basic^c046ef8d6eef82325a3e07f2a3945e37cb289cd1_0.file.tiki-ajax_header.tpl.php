<?php
/* Smarty version 3.1.48, created on 2023-09-29 11:16:29
  from '/home/teddieme/tedd1eme/templates/tiki-ajax_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6516a3fd5c37b9_19784899',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c046ef8d6eef82325a3e07f2a3945e37cb289cd1' => 
    array (
      0 => '/home/teddieme/tedd1eme/templates/tiki-ajax_header.tpl',
      1 => 1689085248,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6516a3fd5c37b9_19784899 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['prefs']->value['feature_ajax'] == 'y') {?>
<div id="ajaxLoading">Loading...</div>
<div id="ajaxLoadingBG">&nbsp;</div>
<div id="ajaxDebug"></div>
<?php }
}
}
