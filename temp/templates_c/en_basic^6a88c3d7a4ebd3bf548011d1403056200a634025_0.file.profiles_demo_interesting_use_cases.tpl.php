<?php
/* Smarty version 3.1.48, created on 2023-09-29 11:20:49
  from '/home/teddieme/tedd1eme/templates/wizard/profiles_demo_interesting_use_cases.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6516a501db71f5_90878436',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6a88c3d7a4ebd3bf548011d1403056200a634025' => 
    array (
      0 => '/home/teddieme/tedd1eme/templates/wizard/profiles_demo_interesting_use_cases.tpl',
      1 => 1689085248,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6516a501db71f5_90878436 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/block.remarksbox.php','function'=>'smarty_block_remarksbox',),1=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/function.icon.php','function'=>'smarty_function_icon',),2=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/function.ticket.php','function'=>'smarty_function_ticket',),));
?>


<div class="media">
    <div class="mr-4">
        <span class="fa-stack fa-lg" style="width: 100px;" title="Configuration Profiles Wizard" >
            <i class="fas fa-cubes fa-stack-2x"></i>
            <i class="fas fa-flip-horizontal fa-magic fa-stack-1x ml-4 mt-4"></i>
        </span>
    </div>
    <div class="media-box">
        <h4 class="mt-0 mb-4">Each of these profiles create a working instance of some features, such as trackers and wiki pages customized for specific purposes, for example.</h4>
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>"warning",'title'=>"Warning"));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Warning"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <a target="tikihelp" class="alert-link tikihelp" style="float:right" title="Demo Profiles:
                They are initially intended for testing environments, so that, after you have played with the feature, you don't have to deal with removing the created objects, nor with restoring the potentially changed settings in your site.
                <br/><br/>
                Once you know what they do, you can also apply them in your production site, in order to have working templates of the underlying features, that you can further adapt to your site later on."
                >
                <?php echo smarty_function_icon(array('name'=>"help"),$_smarty_tpl);?>

            </a>
            They are not to be initially applied in production environments since they cannot be easily reverted and changes and new objects in your site are created for real
        <?php $_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Warning"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <h3>Profiles:</h3>
            <div class="row">
                <div class="col-md-6">
                    <h4>Bug Tracker</h4>
                    (<a href="tiki-admin.php?ticket=<?php echo smarty_function_ticket(array('mode'=>'get'),$_smarty_tpl);?>
&profile=Bug_Tracker_16&show_details_for=Bug_Tracker_16&categories%5B%5D=<?php echo $_smarty_tpl->tpl_vars['tikiMajorVersion']->value;?>
.x&repository=http%3a%2f%2fprofiles.tiki.org%2fprofiles&page=profiles&preloadlist=y&list=List#step2" target="_blank">apply profile now</a>)
                    <br>
                    This profile allows you to see a tracker in action with some demo data, and a custom interface in a wiki page to add new items, as well as having them listed for you below.
                    <br/>
                    <a href="https://doc.tiki.org/Trackers" target="tikihelp" class="tikihelp" title="Bug Tracker:
                        More details:
                        <ul>
                            <li>Uses PluginTracker in a wiki page to add items</li>
                            <li>Create some custom feedback for message to the user after item insertion</li>
                            <li>Uses PluginTrackerList to display inserted items</li>
                        </ul>
                        Click to read more"
                    >
                        <?php echo smarty_function_icon(array('name'=>"help"),$_smarty_tpl);?>

                    </a>
                    <div class="row">
                        <div class="col-md-8 offset-md-2">
                            <a href="http://tiki.org/display520" class="thumbnail internal" data-box="box" title="Click to expand">
                                <img src="img/profiles/profile_thumb_bug_tracker.png" alt="Click to expand" class="regImage pluginImg" title="Click to expand" />
                            </a>
                            <div class="mini text-center">
                                <div class="thumbcaption text-center">Click to expand</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <h4>Timesheet</h4>
                    (<a href="tiki-admin.php?ticket=<?php echo smarty_function_ticket(array('mode'=>'get'),$_smarty_tpl);?>
&profile=Time_Sheet&show_details_for=Time_Sheet&categories%5B%5D=<?php echo $_smarty_tpl->tpl_vars['tikiMajorVersion']->value;?>
.x&repository=http%3a%2f%2fprofiles.tiki.org%2fprofiles&page=profiles&preloadlist=y&list=List#step2" target="_blank">apply profile now</a>)
                    <br>
                    This profile allows recording time spent on projects. It creates two trackers: one to hold the time spent, and the other with the project names.
                    <br/>
                    <a href="https://doc.tiki.org/Timesheet" target="tikihelp" class="tikihelp" title="Timesheet:
                            More details:
                        <ul>
                            <li>Allows to track your time spent on projects</li>
                            <li>Customize your project categories</li>
                            <li>Add or edit your timesheet fields as desired </li>
                            <li>Both trackers are linked, so that project names can be chosen when entering items to the timesheet tracker</li>
                        </ul>
                        Click to read more"
                    >
                        <?php echo smarty_function_icon(array('name'=>"help"),$_smarty_tpl);?>

                    </a>
                    <a href="https://doc.tiki.org/PluginTimesheet" target="tikihelp" class="tikihelp" title="Plugin Timesheet:
                        <em>See also Plugin Timesheet in doc.tiki.org</em>"
                    >
                        <?php echo smarty_function_icon(array('name'=>"help"),$_smarty_tpl);?>

                    </a>
                    <div class="row">
                        <div class="col-md-8 offset-md-2">
                            <a href="http://tiki.org/display523" class="thumbnail internal" data-box="box" title="Click to expand">
                                <img src="img/profiles/profile_thumb_timesheet.png" alt="Click to expand" class="regImage pluginImg" title="Click to expand" />
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
                <h4>Tracker as Calendar</h4>
                (<a href="tiki-admin.php?ticket=<?php echo smarty_function_ticket(array('mode'=>'get'),$_smarty_tpl);?>
&profile=Tracker_as_Calendar_19&show_details_for=Tracker_as_Calendar_19&categories%5B%5D=<?php echo $_smarty_tpl->tpl_vars['tikiMajorVersion']->value;?>
.x&repository=http%3a%2f%2fprofiles.tiki.org%2fprofiles&page=profiles&preloadlist=y&list=List#step2" target="_blank">apply profile now</a>)
                <br>
                This profile creates a tracker with some demo data and wiki interface that will be used to display and manage a Calendar of events in a fancy visual way.
                <br/>
                <a href="http://doc.tiki.org/PluginTrackerCalendar" target="tikihelp" class="tikihelp" title="Tracker as Calendar:
                    More details:
                    <ul>
                        <li>Advanced use of Plugin TrackerList</li>
                        <li>Working example of Plugin TrackerCalendar</li>
                        <li>Drag & Drop to resize or move events</li>
                        <li>Several display modes, useful for Project & Resource Management</li>
                    </ul>
                    Click to read more"
                >
                    <?php echo smarty_function_icon(array('name'=>"help"),$_smarty_tpl);?>

                </a>
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <a href="http://doc.tiki.org/display722" class="thumbnail internal" data-box="box" title="Click to expand">
                            <img src="img/profiles/profile_thumb_tracker_as_calendar.png" alt="Click to expand" class="regImage pluginImg" title="Click to expand" />
                        </a>
                        <div class="small text-center">
                            Click to expand
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <h4>Voting System</h4>
                (<a href="tiki-admin.php?ticket=<?php echo smarty_function_ticket(array('mode'=>'get'),$_smarty_tpl);?>
&profile=Voting_System&show_details_for=Voting_System&categories%5B%5D=<?php echo $_smarty_tpl->tpl_vars['tikiMajorVersion']->value;?>
.x&repository=http%3a%2f%2fprofiles.tiki.org%2fprofiles&page=profiles&preloadlist=y&list=List#step2" target="_blank">apply profile now</a>)
                <br>
                This profile sets up a Voting system in which only members of a group will be able to vote. It creates a tracker, 2 groups of users, one user in each group and a custom wiki page as interface to vote.
                <br/>
                <a href="http://doc.tiki.org/E-Democracy+system" target="tikihelp" class="tikihelp" title="Voting System:
                    More details:
                    <ul>
                        <li>Group homepage set for the voting group</li>
                        <li>Only one vote per member is allowed</li>
                        <li>Results shown in real time (Plugin TrackerStat)</li>
                        <li>Other candidates can be voted beyond the proposed</li>
                    </ul>
                    Click to read more"
                >
                    <?php echo smarty_function_icon(array('name'=>"help"),$_smarty_tpl);?>

                </a>
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <a href="http://tiki.org/display522" class="thumbnail internal" data-box="box" title="Click to expand">
                            <img src="img/profiles/profile_thumb_voting_system.png" alt="Click to expand" class="regImage pluginImg" title="Click to expand" />
                        </a>
                        <div class="small text-center">
                            Click to expand
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php }
}
