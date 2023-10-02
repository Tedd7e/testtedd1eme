<?php
/* Smarty version 3.1.48, created on 2023-09-29 11:21:08
  from '/home/teddieme/tedd1eme/templates/wizard/profiles_useful_changes_in_display.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6516a514a66a65_00025349',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'db42a26f8bee37463fd1f9588f2ffa17e403ff7f' => 
    array (
      0 => '/home/teddieme/tedd1eme/templates/wizard/profiles_useful_changes_in_display.tpl',
      1 => 1689085248,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6516a514a66a65_00025349 (Smarty_Internal_Template $_smarty_tpl) {
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
        <h4 class="mt-0 mb-4">Check out some useful profiles that involve changing the display mode of content in your site.</h4>
        <h3>Profiles:</h3>
            <div class="row">
                <div class="col-md-6">
                    <h4>Slideshow demo</h4>
                    (<a href="tiki-admin.php?ticket=<?php echo smarty_function_ticket(array('mode'=>'get'),$_smarty_tpl);?>
&profile=Slideshow_demo&show_details_for=Slideshow_demo_19&categories%5B%5D=<?php echo $_smarty_tpl->tpl_vars['tikiMajorVersion']->value;?>
.x&repository=http%3a%2f%2fprofiles.tiki.org%2fprofiles&page=profiles&preloadlist=y&list=List#step2" target="_blank">apply profile now</a>)
                    <br/>
                    This profile sets up a slideshow from a simple wiki page, which you can use to learn the basics of how easily the slideshow system in Tiki works.
                    <br/>
                    <a href="https://doc.tiki.org/Slideshow" target="tikihelp" class="tikihelp" title="Slideshow demo:
                        More details:
                        <ul>
                            <li>All content is in a wiki page, which can be printed to your audience in just a few sheets of paper</li>
                            <li>Headers of different levels are used as markers of 'new slide' and used as titles</li>
                            <li>Many settings can be predefined as parameters of a call to PluginSlideshow</li>
                            <li>Allows slide notes in a separate window for dual monitor setups, slide numbers in footer, timer, style with background images, navigation bar with all slides listed to jump to</li>
                        </ul>
                        Click to read more"
                    >
                        <?php echo smarty_function_icon(array('name'=>"help"),$_smarty_tpl);?>

                    </a>
                    <div class="row">
                        <div class="col-md-8 offset-md-2">
                            <a href="http://tiki.org/display541" class="thumbnail internal" data-box="box" title="Click to expand">
                                <img src="img/profiles/profile_thumb_slideshow_demo.png" alt="Click to expand" class="regImage pluginImg" title="Click to expand" />
                            </a>
                            <div class="mini text-center">
                                <div class="thumbcaption text-center">Click to expand</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">

                    <h4>Hide Fixed Top Navigation Bar on scroll</h4>
                    (<a href="tiki-admin.php?ticket=<?php echo smarty_function_ticket(array('mode'=>'get'),$_smarty_tpl);?>
&profile=Hide+Fixed+Top+Nav+Bar+on+Scroll+19&show_details_for=Hide+Fixed+Top+Nav+Bar+on+Scroll+19&categories%5B%5D=<?php echo $_smarty_tpl->tpl_vars['tikiMajorVersion']->value;?>
.x&repository=http%3a%2f%2fprofiles.tiki.org%2fprofiles&page=profiles&preloadlist=y&list=List#step2" target="_blank">apply profile now</a>)
                    <br/>
                    This profile hides the fixed top navigation bar (in the top section of modules) on page scroll, while displaying the topbar module in a sticky position at the top afterwards.
                    <br/>
                    <a href="https://doc.tiki.org/Navigation+Bar" target="tikihelp" class="tikihelp" title="Hide Fixed Top Navi Bar on Scroll:
                        More details:
                        <ul>
                            <li>Site layout (in Control Panels > Look and Feel > General layout) will be set to 'Classic Bootstrap (fixed top navbar)'</li>
                            <li>Preference Site logo (feature_sitelogo) will be disabled so that logos and site title are not shown twice</li>
                            <li>After scrolling down a bit, the fixed top bar will disappear and the topbar zone (if any) will become sticky</li>
                            <li>This profile is best demonstrated after applying the Collaborative Community profile which include site title and topbar module with menus</li>
                        </ul>
                        Click to read more"
                    >
                        <?php echo smarty_function_icon(array('name'=>"help"),$_smarty_tpl);?>

                    </a>
                    <div class="row">
                        <div class="col-md-8 offset-md-2">
                            <a href="http://tiki.org/display1227" class="thumbnail internal" data-box="box" title="Click to expand">
                                <img src="img/profiles/profile_thumb_hidable_top_navbar.png" alt="Click to expand" class="regImage pluginImg" title="Click to expand" />
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
                    &nbsp;
                </div>
                <div class="col-md-6">
                    &nbsp;
                </div>
            </div>
    </div>
</div>
<?php }
}
