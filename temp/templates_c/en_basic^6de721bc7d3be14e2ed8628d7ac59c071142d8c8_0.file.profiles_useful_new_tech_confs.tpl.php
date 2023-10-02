<?php
/* Smarty version 3.1.48, created on 2023-09-29 11:21:05
  from '/home/teddieme/tedd1eme/templates/wizard/profiles_useful_new_tech_confs.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6516a5117a0333_28830575',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6de721bc7d3be14e2ed8628d7ac59c071142d8c8' => 
    array (
      0 => '/home/teddieme/tedd1eme/templates/wizard/profiles_useful_new_tech_confs.tpl',
      1 => 1689085248,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6516a5117a0333_28830575 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/function.ticket.php','function'=>'smarty_function_ticket',),1=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/function.icon.php','function'=>'smarty_function_icon',),));
?>


<div class="media">
    <div class="mr-4">
        <span class="fa-stack fa-lg" style="width: 100px;" title="Configuration Profiles Wizard" >
            <i class="fas fa-cubes fa-stack-2x"></i>
            <i class="fas fa-flip-horizontal fa-magic fa-stack-1x ml-4 mt-4"></i>
        </span>
    </div>
    <div class="media-body">
        <h4 class="mt-0 mb-4">Check out this set of useful configurations that involve using some new technology for your site. </h4>
        <h3>Profiles:</h3>
        <div class="row">
            <div class="col-md-6">
                <h4>Write Together</h4>
                (<a href="tiki-admin.php?ticket=<?php echo smarty_function_ticket(array('mode'=>'get'),$_smarty_tpl);?>
&profile=Together_15&show_details_for=Together_15&categories%5B%5D=<?php echo $_smarty_tpl->tpl_vars['tikiMajorVersion']->value;?>
.x&repository=http%3a%2f%2fprofiles.tiki.org%2fprofiles&page=profiles&preloadlist=y&list=List#step2" target="_blank">apply profile now</a>)
                <br/>
                This profile adds a simple wiki page on a side module (using the Module menupage), showing the button to start co-writing with TogetherJS.
                <br/>
                <a href="https://doc.tiki.org/PluginTogether" target="tikihelp" class="tikihelp" title="Write Together:
                        More details:
                        <ul>
                            <li>Allows cowriting documents in real time</li>
                            <li>Allows voice communication in real time while editing</li>
                            <li>Uses the TogetherJS Mozilla widget</li>
                        </ul>
                        Click to read more"
                >
                    <?php echo smarty_function_icon(array('name'=>"help"),$_smarty_tpl);?>

                </a>
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <a href="http://doc.tiki.org/display842" class="thumbnail internal" data-box="box" title="Click to expand">
                            <img src="img/profiles/profile_thumb_write_together.png" alt="Click to expand" class="regImage pluginImg" title="Click to expand" />
                        </a>
                        <div class="text-center">
                            <div class="small">Click to expand</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <h4>Post-it Sticky Note</h4>
                (<a href="tiki-admin.php?ticket=<?php echo smarty_function_ticket(array('mode'=>'get'),$_smarty_tpl);?>
&profile=Post-it_Sticky_Note_15&show_details_for=Post-it_Sticky_Note_15&categories%5B%5D=<?php echo $_smarty_tpl->tpl_vars['tikiMajorVersion']->value;?>
.x&repository=http%3a%2f%2fprofiles.tiki.org%2fprofiles&page=profiles&preloadlist=y&list=List#step2" target="_blank">apply profile now</a>)
                <br>
                This profile allows to display a sticky note (a "post-it") in your tiki site.
                <br/>
                <a href="http://doc.tiki.org/Custom-Code-HowTo-Post-It-Notes" target="tikihelp" class="tikihelp" title="Post-it Sticky Note:
                        More details:
                        <ul>
                            <li>You can move it to another location</li>
                            <li>You can customize the contents and which groups of users will see it (by default, only to Admins)</li>
                            <li>It will be shown for each user of that group until manually closed.</li>
                        </ul>
                        Click to read more"
                >
                    <?php echo smarty_function_icon(array('name'=>"help"),$_smarty_tpl);?>

                </a>
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <a href="http://tiki.org/display515" class="thumbnail internal" data-box="box" title="Click to expand">
                            <img src="img/profiles/profile_thumb_post_it_sticky_note.png" alt="Click to expand" class="regImage pluginImg" title="Click to expand" />
                        </a>
                        <div class="text-center small">
                            Click to expand
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h4>Groupmail</h4>
                (<a href="tiki-admin.php?ticket=<?php echo smarty_function_ticket(array('mode'=>'get'),$_smarty_tpl);?>
&profile=Groupmail_20&show_details_for=Groupmail_20&categories%5B%5D=<?php echo $_smarty_tpl->tpl_vars['tikiMajorVersion']->value;?>
.x&repository=http%3a%2f%2fprofiles.tiki.org%2fprofiles&page=profiles&preloadlist=y&list=List#step2" target="_blank">apply profile now</a>)
                <br/>
                This profile allows to provide a way for a team (a Tiki group) to process email contact requests, save them in contact lists and act on them and record the process in wiki pages.
                <br/>
                <a href="https://profiles.tiki.org/Groupmail_20" target="tikihelp" class="tikihelp" title="Groupmail:
    It creates:
                        <ul>
                            <li>A tracker for email messages received and store addresses in the Contacts feature</li>
                            <li>Webmail configuration to use an account for groupmail</li>
                            <li>A side module with markers to indicate who took which message</li>
                            <li>A system to review communication logs from that group mail account</li>
                        </ul>
                        Click to read more"
                >
                    <?php echo smarty_function_icon(array('name'=>"help"),$_smarty_tpl);?>

                </a>
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <a href="https://profiles.tiki.org/display6" class="thumbnail internal" data-box="box" title="Click to expand">
                            <img src="img/profiles/profile_thumb_groupmail_20.png" alt="Click to expand" class="regImage pluginImg" title="Click to expand" />
                        </a>
                        <div class="small text-center">
                            Click to expand
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <!--    <b>Profile X</b> (<a href="tiki-admin.php?ticket=<?php echo smarty_function_ticket(array('mode'=>'get'),$_smarty_tpl);?>
&profile=Profile_X&show_details_for=Profile_X&categories%5B%5D=<?php echo $_smarty_tpl->tpl_vars['tikiMajorVersion']->value;?>
.x&repository=http%3a%2f%2fprofiles.tiki.org%2fprofiles&page=profiles&preloadlist=y&list=List#step2" target="_blank">apply profile now</a>)<br/>
                    <br>
                    This profile allows to 
                    <ul>
                        <li>...</li>
                        <li>...</li>
                        <li>...</li>
                        <br/><em>See also <a href="https://doc.tiki.org/Feature_X" target="_blank">Feature_X in doc.tiki.org</a></em>
                    </ul>
                    -->
            </div>
            <div class="col-md-6">
                <!--    <b>Profile X</b> (<a href="tiki-admin.php?ticket=<?php echo smarty_function_ticket(array('mode'=>'get'),$_smarty_tpl);?>
&profile=Profile_X&show_details_for=Profile_X&categories%5B%5D=<?php echo $_smarty_tpl->tpl_vars['tikiMajorVersion']->value;?>
.x&repository=http%3a%2f%2fprofiles.tiki.org%2fprofiles&page=profiles&preloadlist=y&list=List#step2" target="_blank">apply profile now</a>)<br/>
                    <br>
                    This profile allows to 
                    <ul>
                        <li>...</li>
                        <li>...</li>
                        <li>...</li>
                        <br/><em>See also <a href="https://doc.tiki.org/Feature_X" target="_blank">Feature_X in doc.tiki.org</a></em>
                    </ul>
                    -->
            </div>
        </div>
    </div>
</div>
<?php }
}
