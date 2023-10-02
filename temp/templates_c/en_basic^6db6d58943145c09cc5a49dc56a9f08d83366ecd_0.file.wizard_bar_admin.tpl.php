<?php
/* Smarty version 3.1.48, created on 2023-09-29 11:18:58
  from '/home/teddieme/tedd1eme/templates/wizard/wizard_bar_admin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6516a4929bbf47_57585520',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6db6d58943145c09cc5a49dc56a9f08d83366ecd' => 
    array (
      0 => '/home/teddieme/tedd1eme/templates/wizard/wizard_bar_admin.tpl',
      1 => 1689085248,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6516a4929bbf47_57585520 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/function.icon.php','function'=>'smarty_function_icon',),));
?>

<?php if ($_smarty_tpl->tpl_vars['prefs']->value['connect_feature'] == "y") {?>
<div class="form-row provide-feedback">
    <div class="col">
        <?php if (!(isset($_smarty_tpl->tpl_vars['provideFeedback']->value)) || $_smarty_tpl->tpl_vars['provideFeedback']->value != 'y') {?>
        <div class="form-check">
            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'likeicon', null, null);
echo smarty_function_icon(array('name'=>"thumbs-up"),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
            <label>
                <input type="checkbox" class="form-check-input" id="connect_feedback_cbx" <?php if (!empty($_smarty_tpl->tpl_vars['connect_feedback_showing']->value)) {?>checked="checked"<?php }?>>
                Provide Feedback
                <a href="http://doc.tiki.org/Connect" target="tikihelp" class="tikihelp" title="Provide Feedback:
                    Once selected, some icon/s will be shown next to all features so that you can provide some on-site feedback about them.
                    <br/><br/>
                    <ul>
                        <li>Icon for 'Like' <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'likeicon') ));?>
</li>
<!--                    <li>Icon for 'Fix me' <img src=img/icons/connect_fix.png></li> -->
<!--                    <li>Icon for 'What is this for?' <img src=img/icons/connect_wtf.png></li> -->
                    </ul>
                    <br/>
                    Your votes will be sent when you connect with mother.tiki.org (currently only by clicking the 'Connect > <strong>Send Info</strong>' button).
                    <br/><br/>
                    Click to read more
                ">
                    <?php echo smarty_function_icon(array('name'=>'help'),$_smarty_tpl);?>

                </a> </label>
            <?php echo $_smarty_tpl->tpl_vars['headerlib']->value->add_jsfile("lib/jquery_tiki/tiki-connect.js");?>


            <?php $_smarty_tpl->_assignInScope('provideFeedback', "y" ,false ,8);?>
        </div>
        <?php }?>
    </div>
</div>
<?php }?>
<div class="form-group form-row<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_bidi'] == 'y') {?> text-left<?php } else { ?> text-right<?php }?>">
    <div class="col">
        <input type="hidden" name="url" value="<?php echo $_smarty_tpl->tpl_vars['homepageUrl']->value;?>
">
        <input type="hidden" name="wizard_step" value="<?php echo $_smarty_tpl->tpl_vars['wizard_step']->value;?>
">
        <?php if ((isset($_smarty_tpl->tpl_vars['useDefaultPrefs']->value))) {?>
            <input type="hidden" name="use-default-prefs" value="<?php echo $_smarty_tpl->tpl_vars['useDefaultPrefs']->value;?>
">
        <?php }?>
        <?php if ((isset($_smarty_tpl->tpl_vars['useChangesWizard']->value))) {?>
            <input type="hidden" name="use-changes-wizard" value="<?php echo $_smarty_tpl->tpl_vars['useChangesWizard']->value;?>
">
        <?php }?>
        <?php if (!(isset($_smarty_tpl->tpl_vars['showOnLoginDisplayed']->value)) || $_smarty_tpl->tpl_vars['showOnLoginDisplayed']->value != 'y') {?>
        <div class="form-check">
            <input type="checkbox" class="form-check-input" id="showOnLogin" name="showOnLogin" <?php if ((isset($_smarty_tpl->tpl_vars['showOnLogin']->value)) && $_smarty_tpl->tpl_vars['showOnLogin']->value == true) {?>checked="checked"<?php }?> />
            <label class="form-check-label" for="showOnLogin">Show on admin log-in</label>
            <?php $_smarty_tpl->_assignInScope('showOnLoginDisplayed', "y" ,false ,8);?>
        </div>
        <?php }?>
        <div class="btn-group">
        <?php if (!(isset($_smarty_tpl->tpl_vars['firstWizardPage']->value))) {?>
            <input type="submit" class="btn btn-outline-dark" name="back" value="Back" />
        <?php }?>
            <input type="submit" class="btn btn-dark" name="<?php if ((isset($_smarty_tpl->tpl_vars['firstWizardPage']->value))) {?>use-default-prefs<?php } else { ?>continue<?php }?>" value="<?php if ((isset($_smarty_tpl->tpl_vars['lastWizardPage']->value))) {?>Finish<?php } elseif ((isset($_smarty_tpl->tpl_vars['firstWizardPage']->value))) {?>Start the Wizardry<?php } else {
if ($_smarty_tpl->tpl_vars['isEditable']->value == true) {?>Save and Continue<?php } else { ?>Next<?php }
}?>"/>
        </div>
            <input type="submit" class="btn btn-outline-danger btn-sm" name="close" value="Close"/>
    </div>
</div>
<div class="row">
    <div class="col-sm-12 text-center">
        <?php if (!(isset($_smarty_tpl->tpl_vars['showWizardPageTitle']->value)) || $_smarty_tpl->tpl_vars['showWizardPageTitle']->value != 'y') {?>
            <h1 class="adminWizardPageTitle"><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</h1>
            <?php $_smarty_tpl->_assignInScope('showWizardPageTitle', "y" ,false ,8);?>
        <?php }?>
    </div>
</div>
<?php }
}
