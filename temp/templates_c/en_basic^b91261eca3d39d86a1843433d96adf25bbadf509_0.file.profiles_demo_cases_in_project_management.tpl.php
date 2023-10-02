<?php
/* Smarty version 3.1.48, created on 2023-09-29 11:21:00
  from '/home/teddieme/tedd1eme/templates/wizard/profiles_demo_cases_in_project_management.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6516a50c14d488_03632455',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b91261eca3d39d86a1843433d96adf25bbadf509' => 
    array (
      0 => '/home/teddieme/tedd1eme/templates/wizard/profiles_demo_cases_in_project_management.tpl',
      1 => 1689085248,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6516a50c14d488_03632455 (Smarty_Internal_Template $_smarty_tpl) {
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
        <h4 class="mt-0 mb-4">Some profiles were created for use cases of project management.</h4>
        <h3>Profiles:</h3>
        <div class="row">
            <div class="col-md-6">

                <h4>Gantt Chart</h4>
                (<a href="tiki-admin.php?ticket=<?php echo smarty_function_ticket(array('mode'=>'get'),$_smarty_tpl);?>
&profile=GanttChart&show_details_for=GanttChart&categories%5B%5D=<?php echo $_smarty_tpl->tpl_vars['tikiMajorVersion']->value;?>
.x&repository=http%3a%2f%2fprofiles.tiki.org%2fprofiles&page=profiles&preloadlist=y&list=List#step2" target="_blank">apply profile now</a>)
                <br/>
                This profile show cases the use of Gantt Charts in Tiki for Project Management. You can visually edit task details through the Gantt Chart UI and tracker items get updated accordingly
                <br/>
                <a href="https://profiles.tiki.org/GanttChart" target="tikihelp" class="tikihelp" title="Gantt Chart:
    It creates:
                        <ul>
                            <li>a sample tracker that will hold the tasks</li>
                            <li>a sample wiki page linked to that tracker to display the tasks</li>
                            <li>Some demo data to help you get started</li>
                        </ul>
                        Click to read more"
                >
                    <?php echo smarty_function_icon(array('name'=>"help"),$_smarty_tpl);?>

                </a>
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <a href="https://profiles.tiki.org/display7" class="thumbnail internal" data-box="box" title="Click to expand">
                            <img src="img/profiles/profile_thumb_ganttchart.png" alt="Click to expand" class="regImage pluginImg" title="Click to expand" />
                        </a>
                        <div class="small text-center">
                            Click to expand
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <h4>Work custom pricing</h4>
                (<a href="tiki-admin.php?ticket=<?php echo smarty_function_ticket(array('mode'=>'get'),$_smarty_tpl);?>
&profile=Work_Custom_Pricing&show_details_for=Work_Custom_Pricing&categories%5B%5D=<?php echo $_smarty_tpl->tpl_vars['tikiMajorVersion']->value;?>
.x&repository=http%3a%2f%2fprofiles.tiki.org%2fprofiles&page=profiles&preloadlist=y&list=List#step2" target="_blank">apply profile now</a>)
                <br/>
                This profile is a showcase of how to setup trackers to allow defining work orders in one tracker, and linked them to billable tasks from another one.
                <br/>
                <a href="https://profiles.tiki.org/Work_Custom_Pricing" target="tikihelp" class="tikihelp" title="Work Custom Pricing:
                        This allows to define a custom price aside of the guide and get some of the items selected summed in another field of tracker1. The tracker also demonstrates how item link field currently allows to create and link items in a second tracker on the fly and get them stored while adding the new item in the first tracker. Objects created by this profile:
                        <ul>
                            <li>...</li>
                            <li>...</li>
                            <li>...</li>
                        </ul>
                        Click to read more"
                >
                    <?php echo smarty_function_icon(array('name'=>"help"),$_smarty_tpl);?>

                </a>
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <a href="https://profiles.tiki.org/display5" class="thumbnail internal" data-box="box" title="Click to expand">
                            <img src="img/profiles/profile_thumb_work_custom_pricing.png" alt="Click to expand" class="regImage pluginImg" title="Click to expand" />
                        </a>
                        <div class="small text-center">
                            Click to expand
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h4>Wildcard items</h4>
                (<a href="tiki-admin.php?ticket=<?php echo smarty_function_ticket(array('mode'=>'get'),$_smarty_tpl);?>
&profile=Wildcard_items&show_details_for=Wildcard_items&categories%5B%5D=<?php echo $_smarty_tpl->tpl_vars['tikiMajorVersion']->value;?>
.x&repository=http%3a%2f%2fprofiles.tiki.org%2fprofiles&page=profiles&preloadlist=y&list=List#step2" target="_blank">apply profile now</a>)
                <br/>
                This profile adds a way to provide reusable items in a tracker coming from another one working as templates.
                <br/>
                <a href="https://profiles.tiki.org/Wildcard_items" target="tikihelp" class="tikihelp" title="Wildcard items:
                        This profile provides some tracker items to work as template items that you can include in other trackers when needed. Objects created are:
                        <ul>
                            <li>A couple of trackers. One for current items, and another one for the reusable items working ass templates</li>
                            <li>A few wiki pages to list, view and edit items</li>
                            <li>Some example items in both trackers to help you get started</li>
                        </ul>
                        Click to read more"
                >
                    <?php echo smarty_function_icon(array('name'=>"help"),$_smarty_tpl);?>

                </a>
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <a href="https://doc.tiki.org/display1340" class="thumbnail internal" data-box="box" title="Click to expand">
                            <img src="img/profiles/profile_thumb_wildcard_items.png" alt="Click to expand" class="regImage pluginImg" title="Click to expand" />
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
