<?php
/* Smarty version 3.1.48, created on 2023-09-29 11:21:10
  from '/home/teddieme/tedd1eme/templates/wizard/profiles_useful_micro_confs.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6516a51618dab9_91505033',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '534cbce0e961e2d5b7586e4a81a9dc4f553fbb4b' => 
    array (
      0 => '/home/teddieme/tedd1eme/templates/wizard/profiles_useful_micro_confs.tpl',
      1 => 1689085248,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6516a51618dab9_91505033 (Smarty_Internal_Template $_smarty_tpl) {
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
        <h4 class="mt-0 mb-4">Check out this set of potentially useful profiles for your site which involve small amount of changes in your site configuration.</h4>
        <h3>Profiles:</h3>
            <div class="row">
                <div class="col-md-6">
                    <h4>Menu on Wiki page</h4>
                    (<a href="tiki-admin.php?ticket=<?php echo smarty_function_ticket(array('mode'=>'get'),$_smarty_tpl);?>
&profile=Collaborative_Community_Wiki_menupage&show_details_for=Collaborative_Community_Wiki_menupage&categories%5B%5D=<?php echo $_smarty_tpl->tpl_vars['tikiMajorVersion']->value;?>
.x&repository=http%3a%2f%2fprofiles.tiki.org%2fprofiles&page=profiles&preloadlist=y&list=List#step2" target="_blank">apply profile now</a>)
                    <br/>
                    This profile sets up a side module with a menu based on a wiki page in the right hand-side column.
                    <br/>
                    <a href="https://doc.tiki.org/Module-menupage" target="tikihelp" class="tikihelp" title="Menu on Wiki page:
                        With this profile you can:
                        <ul>
                            <li>use wiki syntax to edit it</li>
                            <li>delegate its edition with wiki page permissions</li>
                            <li>use plugins to manage conditional display of sections</li>
                        </ul>
                        Click to read more"
                    >
                        <?php echo smarty_function_icon(array('name'=>"help"),$_smarty_tpl);?>

                    </a>
                    <div class="row">
                        <div class="col-md-8 offset-md-2">
                            <a href="http://tiki.org/display538" class="thumbnail internal" data-box="box" title="Click to expand">
                                <img src="img/profiles/profile_thumb_menu_on_wiki_page.png" class="image-responsive regImage pluginImg" alt="Click to expand" title="Click to expand" />
                            </a>
                            <div class="mini text-center">
                                <div class="thumbcaption text-center">Click to expand</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <h4>Random header images</h4>
                    (<a href="tiki-admin.php?ticket=<?php echo smarty_function_ticket(array('mode'=>'get'),$_smarty_tpl);?>
&profile=Random_header_images_14&show_details_for=Random_header_images_14&categories%5B%5D=<?php echo $_smarty_tpl->tpl_vars['tikiMajorVersion']->value;?>
.x&repository=http%3a%2f%2fprofiles.tiki.org%2fprofiles&page=profiles&preloadlist=y&list=List#step2" target="_blank">apply profile now</a>)
                    <br/>
                    This profile adds a module in the top zone that displays a random image from a File Gallery.
                    <br/>
                    <a href="https://doc.tiki.org/PluginImg" target="tikihelp" class="tikihelp" title="Random header images:
                        Some sample images to fit the default configuration are also provided as a starting point:
                        <ul>
                            <li>default configuration uses images at 800x150px resized by the top module parameters to match the header default size</li>
                            <li>a different random image is shown at each page load</li>
                            <li>elFinder modern file galery manager (with drag & drop capabilities!) is used by default
                            <li>you can tweak the module and file gallery defaults as needed for your needs</li>
                        </ul>
                        Click to read more"
                    >
                        <?php echo smarty_function_icon(array('name'=>"help"),$_smarty_tpl);?>

                    </a>
                    <div class="row">
                        <div class="col-md-8 offset-md-2">
                            <a href="http://tiki.org/display539" class="thumbnail internal" data-box="box" title="Click to expand">
                                <img src="img/profiles/profile_thumb_random_header_images.png" alt="Click to expand" class="regImage pluginImg" title="Click to expand" />
                            </a>
                            <div class="mini text-center">
                                <div class="thumbcaption text-center">Click to expand</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <h4>Multilingual Wiki</h4>
                    (<a href="tiki-admin.php?ticket=<?php echo smarty_function_ticket(array('mode'=>'get'),$_smarty_tpl);?>
&profile=Multilingual_Wiki_12x&show_details_for=Multilingual_Wiki_12x&categories%5B%5D=<?php echo $_smarty_tpl->tpl_vars['tikiMajorVersion']->value;?>
.x&repository=http%3a%2f%2fprofiles.tiki.org%2fprofiles&page=profiles&preloadlist=y&list=List#step2" target="_blank">apply profile now</a>)
                    <br/>
                    This profile allows Tiki content translation, and sets up modules to change language and to display links to page translations with their percentage of completion.
                    <br/>
                    <a href="https://doc.tiki.org/Multilingual-Wiki" target="tikihelp" class="tikihelp" title="Multilingual Wiki:
                        The enabled features comprise:
                        <ul>
                            <li>Multilingual, Translation assistant, Urgent translation notifications</li>
                            <li>Multilingual structures, Quantify change size, Multilingual freetags</li>
                            <li>Show pages in user's preferred language, Detect browser language</li>
                        </ul>
                        Click to read more"
                    >
                        <?php echo smarty_function_icon(array('name'=>"help"),$_smarty_tpl);?>

                    </a>
                    <div class="row">
                        <div class="col-md-8 offset-md-2">
                            <a href="http://tiki.org/display516" class="thumbnail internal" data-box="box" title="Click to expand">
                                <img src="img/profiles/profile_thumb_multilingual_wiki.png" alt="Click to expand" class="regImage pluginImg" title="Click to expand" />
                            </a>
                            <div class="mini text-center">
                                <div class="thumbcaption text-center">Click to expand</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <h4>Countries By Region</h4>
                    (<a href="tiki-admin.php?ticket=<?php echo smarty_function_ticket(array('mode'=>'get'),$_smarty_tpl);?>
&profile=Countries_By_Region&show_details_for=Countries_By_Region&categories%5B%5D=<?php echo $_smarty_tpl->tpl_vars['tikiMajorVersion']->value;?>
.x&repository=http%3a%2f%2fprofiles.tiki.org%2fprofiles&page=profiles&preloadlist=y&list=List#step2" target="_blank">apply profile now</a>)
                    <br>
                    This profile will create a set of categories and subcategories in your site with the names of countries grouped by regions.
                    <br/>
                    <a href="https://profiles.tiki.org/Countries+By+Region" target="tikihelp" class="tikihelp" title="Countries By Region:
                        The regions listed with their countries are:
                        <ul>
                            <li>Saharan, Sub-Saharan Africa</li>
                            <li>Middle East, North Africa</li>
                            <li>Asia</li>
                            <li>Europe</li>
                            <li>North, Central America</li>
                            <li>Oceania</li>
                            <li>South America</li>
                        </ul>
                        Click to read more"
                    >
                        <?php echo smarty_function_icon(array('name'=>"help"),$_smarty_tpl);?>

                    </a>
                    <div class="row">
                        <div class="col-md-8 offset-md-2">
                            <a href="http://tiki.org/display540" class="thumbnail internal" data-box="box" title="Click to expand">
                                <img src="img/profiles/profile_thumb_countries_by_region.png" alt="Click to expand" class="regImage pluginImg" title="Click to expand" />
                            </a>
                            <div class="mini text-center">
                                <div class="thumbcaption text-center">Click to expand</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>
<?php }
}
