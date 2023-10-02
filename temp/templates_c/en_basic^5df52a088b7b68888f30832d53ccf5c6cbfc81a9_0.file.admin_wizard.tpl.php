<?php
/* Smarty version 3.1.48, created on 2023-09-29 11:22:14
  from '/home/teddieme/tedd1eme/templates/wizard/admin_wizard.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6516a55631c296_44063338',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5df52a088b7b68888f30832d53ccf5c6cbfc81a9' => 
    array (
      0 => '/home/teddieme/tedd1eme/templates/wizard/admin_wizard.tpl',
      1 => 1689085248,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6516a55631c296_44063338 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/function.icon.php','function'=>'smarty_function_icon',),1=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/block.tr.php','function'=>'smarty_block_tr',),2=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/block.remarksbox.php','function'=>'smarty_block_remarksbox',),3=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/function.button.php','function'=>'smarty_function_button',),));
?>


<div class="col-lg-12">
    <fieldset>
        <legend><h2>Get Started</h2></legend>

        <div class="alert alert-light lead p-3 mb-3">
            <p class="text-success">
            <?php echo smarty_function_icon(array('name'=>"check",'size'=>1),$_smarty_tpl);?>
 <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tr', array('_0'=>$_smarty_tpl->tpl_vars['tiki_version']->value));
$_block_repeat=true;
echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['tiki_version']->value), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Congratulations! You now have a working instance of Tiki %0.<?php $_block_repeat=false;
echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['tiki_version']->value), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            You may <a href="tiki-index.php">start using it right away</a>, or you may configure it to better meet your needs, using one of the configuration helpers below.
            </p>
        </div>

        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>"tip",'title'=>"Tip"));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Tip"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            Mouse over the icons to know more about the features and preferences that are new for you.
            Example: 
            <a href="http://doc.tiki.org/Wizards" target="tikihelp" class="alert-link tikihelp" title="Help icon:
                You will get more information about the features and preferences whenever this icon is available and you pass your mouse over it.
                <br/><br/>Moreover, if you click on it, you'll be directed in a new window to the corresponding documentation page for further information on that feature or topic."
            >
                <?php echo smarty_function_icon(array('name'=>"help"),$_smarty_tpl);?>

            </a>
        <?php $_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Tip"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

        <div class="media mb-5">
            <span class="float-left fa-stack fa-lg mr-1" alt="Configuration Profiles Wizard" title="Configuration Profiles Wizard" >
                <i class="fas fa-cubes fa-stack-2x text-warning"></i>
                <i class="fas fa-flip-horizontal fa-magic fa-stack-1x ml-4 mt-4"></i>
            </span>
            <div class="media-body mx-4">
                <legend>Configuration Profiles Wizard</legend>
                <p>You may start by applying some of our configuration templates through the <b>Configuration Profiles Wizard</b>.
                    They are like the <b>Macros</b> from many computer languages.
                    It is best to apply them from the start and you can always preview and reverse the process.
                    <a href="http://doc.tiki.org/Profiles+Wizard" target="tikihelp" class="tikihelp text-warning" title="Configuration Profiles:
                        <p>Each of these provides a shrink-wrapped solution that meets most of the needs of a particular kind of community or site (Personal Blog space, Company Intranet, ...) or that extends basic setup with extra features configured for you.</p>
                        <p>If you are new to Tiki administration, we recommend that you start with this approach.</p>
                        <p>If the profile you selected does not quite meet your needs, you will still have the option of customizing it further with one of the approaches below.</p>"
                    >
                        <?php echo smarty_function_icon(array('name'=>"help"),$_smarty_tpl);?>

                    </a>
                </p>

                <input type="submit" class="btn btn-warning" name="use-default-prefs" value="Start Configuration Profiles Wizard (Macros)" />
            </div>
        </div>
        <div class="media mb-5">
            <span class="float-left fa-stack fa-lg mr-1" alt="Configuration Walkthrough" title="Configuration Walkthrough">
                <i class="fas fa-cog fa-stack-2x text-info"></i>
                <i class="fas fa-flip-horizontal fa-magic fa-stack-1x ml-4 mt-4"></i>
            </span>
            <div class="media-body mx-4">
                <legend>Configuration Wizard</legend>
                <p>
                    Alternatively, you may use the <b>Configuration Wizard</b>.
                    This will guide you through the most common preference settings in order to customize your site.
                    You will easily be able to configure options like: languages, date and time, user login, theme, website title and logo, etc.
                    <a href="http://doc.tiki.org/Admin-Wizard" target="tikihelp" class="tikihelp text-info" title="Configuration Wizard:
                        Use this wizard if none of the <b>Configuration Profiles</b> look like a good starting point, or if you need to customize your site further"
                    >
                        <?php echo smarty_function_icon(array('name'=>"help"),$_smarty_tpl);?>

                    </a>
                </p>
                <input type="submit" class="btn btn-info" name="continue" value="Start Configuration Wizard" />
            </div>
        </div>
        <div class="media mb-5">
            <span class="float-left fa-stack fa-lg mr-1" alt="Changes Wizard" title="Changes Wizard">
                <i class="fas fa-arrow-circle-up fa-stack-2x text-success"></i>
                <i class="fas fa-flip-horizontal fa-magic fa-stack-1x ml-4 mt-4"></i>
            </span>
            <div class="media-body mx-4">
                <legend>Changes Wizard</legend>
                <p>
                    Or you may use the <b>Changes Wizard</b>.
                    This will guide you through the most common new settings and informations in order to upgrade your site.
                    <a href="http://doc.tiki.org/Upgrade+Wizard" target="tikihelp" class="tikihelp text-success" title="Changes Wizard:
                        Use this wizard if you are upgrading from previous versions of Tiki, specially if you come from the previous Long-Term Support (LTS) version.</p>

                        <p>Some of these settings are also available through the Configuration Wizard, and all of them are available through Control Panels.
                        But this wizard will let you learn about them as well as enable/disable them easily according to your needs and interests for your site."
                    >
                        <?php echo smarty_function_icon(array('name'=>"help"),$_smarty_tpl);?>

                    </a>
                </p>

                    <input type="submit" class="btn btn-success" name="use-changes-wizard" value="Start Changes Wizard" />
            </div>
        </div>
        <hr>
        <div class="media mb-5">
            <span class="float-left fa-stack fa-lg mr-1" alt="Control Panels" title="Control Panels">
                <i class="fas fa-sliders-h fa-stack-2x text-primary"></i>
                <i class="fas fa-cogs fa-stack-1x ml-4 mt-4" style="margin-left: 20px"></i>
            </span>
            <div class="media-body mx-4">
                <legend>Control Panels</legend>
                <p>
                    Use the <b>Control Panels</b> to manually browse through the full list of preferences.
                    From the main administration page you'll be able to configure your Tiki, to enable features not set on by default and to change settings.
                    To Avoid Getting Overwhelmed by the impressive number of settings as a Startup Tiki Admin we set a preferences filters for Basic and Advanced features to start with.
                    <a href="https://doc.tiki.org/Admin-Home" target="tikihelp" class="tikihelp text-primary" title="Control Panels: Explore the control panels and configure your Tiki manually." ><?php echo smarty_function_icon(array('name'=>"help"),$_smarty_tpl);?>
</a>
                </p>

                <?php echo smarty_function_button(array('href'=>"tiki-admin.php",'_class'=>"btn-primary",'_text'=>"Go to the Control Panels"),$_smarty_tpl);?>

            </div>
        </div>
        <div class="media mb-5">
            <span class="float-left fa-stack fa-lg mr-1" alt="Control Panels" title="Control Panels">
                <i class="fas fa-heartbeat fa-stack-2x text-danger"></i>
                <i class="fas fa-server fa-stack-1x ml-4 mt-4"></i>
            </span>
            <div class="media-body mx-4">
        <legend>Server Fitness</legend>
                <p>
                    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tr', array('_0'=>$_smarty_tpl->tpl_vars['tiki_version']->value));
$_block_repeat=true;
echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['tiki_version']->value), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>You can check if your server meets the requirements for running Tiki version %0<?php $_block_repeat=false;
echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['tiki_version']->value), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>.
                    Using our home made standalone script for server environment settings diagnostics you can check that everything is ready to run your Tiki properly.
                    It is very useful for any PHP app, as it checks over 50 different things and provides contextual feedback.
                    <a href="https://doc.tiki.org/Server-Check" target="tikihelp" class="tikihelp text-danger" title="Server Fitness: Check your server fitness.">
                        <?php echo smarty_function_icon(array('name'=>"help"),$_smarty_tpl);?>

                    </a>
                </p>
                <?php echo smarty_function_button(array('href'=>"tiki-check.php",'_class'=>"btn-danger",'_text'=>"Go to the Tiki Server Compatibility Check"),$_smarty_tpl);?>

            </div>
        </div>
    </fieldset>
</div>
<?php }
}
