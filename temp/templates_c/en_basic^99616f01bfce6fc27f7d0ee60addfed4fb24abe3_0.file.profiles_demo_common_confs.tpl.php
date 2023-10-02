<?php
/* Smarty version 3.1.48, created on 2023-09-29 11:18:58
  from '/home/teddieme/tedd1eme/templates/wizard/profiles_demo_common_confs.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6516a492985828_03435245',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '99616f01bfce6fc27f7d0ee60addfed4fb24abe3' => 
    array (
      0 => '/home/teddieme/tedd1eme/templates/wizard/profiles_demo_common_confs.tpl',
      1 => 1689085248,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6516a492985828_03435245 (Smarty_Internal_Template $_smarty_tpl) {
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
        <h4 class="mt-0 mb-4">Check out some commonly used configurations in Tiki sites.</h4>
        <h3>Profiles:</h3>
            <div class="row">
                <div class="col-md-6">
                    <h4>User & Registration Tracker</h4>
                    (<a href="tiki-admin.php?ticket=<?php echo smarty_function_ticket(array('mode'=>'get'),$_smarty_tpl);?>
&profile=User_Trackers&show_details_for=User_Trackers&categories%5B%5D=<?php echo $_smarty_tpl->tpl_vars['tikiMajorVersion']->value;?>
.x&repository=http%3a%2f%2fprofiles.tiki.org%2fprofiles&page=profiles&preloadlist=y&list=List#step2" target="_blank">apply profile now</a>)
                    <br>
                    This profile allows you to request more details in the registration process or in the User Wizard, as well as to provide more custom information to your users.
                    <br/>
                    <a href="https://doc.tiki.org/User-Tracker" target="tikihelp" class="tikihelp" title="User & Registration Tracker:
                        It includes:
                        <ul>
                            <li>A long list of predefined usual fields, to choose from</li>
                            <li>Some fields already prepared to display custom information from your specific site</li>
                            <li>The chance to easily customize it with the power of Trackers</li>
                        </ul>
                        Click to read more"
                    >
                        <?php echo smarty_function_icon(array('name'=>"help"),$_smarty_tpl);?>

                    </a>
                    <div class="row">
                        <div class="col-md-8 offset-md-2">
                            <a href="http://tiki.org/display542" class="thumbnail internal" data-box="box" title="Click to expand">
                                <img src="img/profiles/profile_thumb_user_and_registration_tracker.png" alt="Click to expand" class="regImage pluginImg" title="Click to expand" />
                            </a>
                            <div class="small text-center">
                                Click to expand
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <h4>Custom Contact Form</h4>
                    (<a href="tiki-admin.php?ticket=<?php echo smarty_function_ticket(array('mode'=>'get'),$_smarty_tpl);?>
&profile=Custom_Contact_Form_12x&show_details_for=Custom_Contact_Form_12x&categories%5B%5D=<?php echo $_smarty_tpl->tpl_vars['tikiMajorVersion']->value;?>
.x&repository=http%3a%2f%2fprofiles.tiki.org%2fprofiles&page=profiles&preloadlist=y&list=List#step2" target="_blank">apply profile now</a>)
                    <br>
                    This profile eases the task to create a custom contact form adapted to the specific case of that site.
                    <br/>
                    <a href="https://doc.tiki.org/Trackers" target="tikihelp" class="tikihelp" title="Custom Contact Form:
                        More details:
                        <ul>
                            <li>Enables Trackers and sets up a few fields to create a basic 'contact us' form as a starting point</li>
                            <li>New fields can be added asking questions specific for the site</li>
                            <li>You decide where and when to display the link to the contact us form in your Tiki menus and pages</li>
                        </ul>
                        Click to read more"
                    >
                        <?php echo smarty_function_icon(array('name'=>"help"),$_smarty_tpl);?>

                    </a>
                    <div class="row">
                        <div class="col-md-8 offset-md-2">
                            <a href="http://tiki.org/display543" class="thumbnail internal" data-box="box" title="Click to expand">
                                <img src="img/profiles/profile_thumb_custom_contact_form.png" alt="Click to expand" class="regImage pluginImg" title="Click to expand" />
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
                    <h4>Dynamic Items List</h4>
                    (<a href="tiki-admin.php?ticket=<?php echo smarty_function_ticket(array('mode'=>'get'),$_smarty_tpl);?>
&profile=Dynamic_items_list_demo&show_details_for=Dynamic_items_list_demo&categories%5B%5D=<?php echo $_smarty_tpl->tpl_vars['tikiMajorVersion']->value;?>
.x&repository=http%3a%2f%2fprofiles.tiki.org%2fprofiles&page=profiles&preloadlist=y&list=List#step2" target="_blank">apply profile now</a>)
                    <br>
                    This profile creates two linked trackers. One that allow pre-selecting the items in a drop down list based on the items in a previous drop down field. And a second tracker that holds the options displayed in the drop down fields.
                    <br/>
                    <a href="https://doc.tiki.org/Dynamic-items-list" target="tikihelp" class="tikihelp" title="Dynamic Items List:
                        More details:
                        <ul>
                            <li>Useful for Geographic data (State, Country/Province, ...)</li>
                            <li>Useful for Types and Subtypes</li>
                            <li>Useful for Program Names and Versions</li>
                            <li>Easily manage the options in the second tracker without editing the dropdown in the first tracker </li>
                        </ul>
                        Click to read more"
                    >
                        <?php echo smarty_function_icon(array('name'=>"help"),$_smarty_tpl);?>

                    </a>
                    <div class="row">
                        <div class="col-md-8 offset-md-2">
                            <a href="http://tiki.org/display521" class="thumbnail internal" data-box="box" title="Click to expand">
                                <img src="img/profiles/profile_thumb_dynamic_items_list.png" alt="Click to expand" class="regImage pluginImg" title="Click to expand" />
                            </a>
                            <div class="small text-center">
                                Click to expand
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <h4>Sortable Tables</h4>
                    (<a href="tiki-admin.php?ticket=<?php echo smarty_function_ticket(array('mode'=>'get'),$_smarty_tpl);?>
&profile=Sortable+Tables&show_details_for=Sortable+Tables&categories%5B%5D=<?php echo $_smarty_tpl->tpl_vars['tikiMajorVersion']->value;?>
.x&repository=http%3a%2f%2fprofiles.tiki.org%2fprofiles&page=profiles&preloadlist=y&list=List#step2" target="_blank">apply profile now</a>)
                    <br/>
                    This profile creates a few examples of tables with data that can be sorted and filtered interactively in real time, using the JQuery Sortable Tables feature.
                    <br/>
                    <a href="https://doc.tiki.org/PluginFancyTable" target="tikihelp" class="tikihelp" title="Sortable Tables:
                        More details:
                        <ul>
                            <li>Useful to sort and filter data in real time</li>
                            <li>Same approach for FancyTable and TrackerList Plugins</li>
                            <li>Sorting can be server-side or client-side based </li>
                        </ul>
                        Click to read more"
                    >
                        <?php echo smarty_function_icon(array('name'=>"help"),$_smarty_tpl);?>

                    </a>
                    <div class="row">
                        <div class="col-md-8 offset-md-2">
                            <a href="http://tiki.org/display548" class="thumbnail internal" data-box="box" title="Click to expand">
                                <img src="img/profiles/profile_thumb_sortable_tables.png" alt="Click to expand" class="regImage pluginImg" title="Click to expand" />
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
