<?php
/* Smarty version 3.1.48, created on 2023-09-29 11:21:02
  from '/home/teddieme/tedd1eme/templates/wizard/profiles_demo_highly_specialized_confs.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6516a50e1c2564_83648151',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7647bf0e6ca25e36fba1339f9a6e83763e346a08' => 
    array (
      0 => '/home/teddieme/tedd1eme/templates/wizard/profiles_demo_highly_specialized_confs.tpl',
      1 => 1689085248,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6516a50e1c2564_83648151 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/block.remarksbox.php','function'=>'smarty_block_remarksbox',),1=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/function.icon.php','function'=>'smarty_function_icon',),2=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/function.ticket.php','function'=>'smarty_function_ticket',),));
?>


<div class="media">
    <div class="mr-4">
        <span class="fa-stack fa-lg" style="width: 100px;" title="Configuration Profiles Wizard" >
            <i class="fas fa-cubes fa-stack-2x"></i>
            <i class="fas fa-flip-horizontal fa-magic fa-stack-1x ml-4 mt-4"></i>
        </span>
    </div>
    <div class="media-body">
        <h4 class="mt-0 mb-4">Some profiles are highly customized for very specialized use cases, and they are listed in this special category.</h4>
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
            These configuration profiles <strong>require extra software</strong> to be installed in your server to function as expected.
            See details in the instructions page shown in your site once each profile is applied.
        <?php $_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Warning"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <h3>Profiles:</h3>
        <div class="row">
        <!--
                <div class="col-md-6">
                    <h4>CartoGraf</h4>
                    (<a href="tiki-admin.php?ticket=<?php echo smarty_function_ticket(array('mode'=>'get'),$_smarty_tpl);?>
&profile=CartoGraf_15&show_details_for=CartoGraf_15&categories%5B%5D=<?php echo $_smarty_tpl->tpl_vars['tikiMajorVersion']->value;?>
.x&repository=http%3a%2f%2fprofiles.tiki.org%2fprofiles&page=profiles&preloadlist=y&list=List#step2" target="_blank">apply profile now</a>)
                    <br>
                    CartoGraf is an interactive web-based mapping application to enhance learning in history and geography classes in high schools.
                    CartoGraf is a great example of how to use profiles in a general purpose app (Tiki) to make a very specific application.
                    <br/>
                    <a href="https://tv.tiki.org/CartoGraf" target="tikihelp" class="tikihelp" title="CartoGraf:
                        This profile is using Tiki as Framework, with these details:
                        <ul>
                            <li>It is mainly based on Maps, Drawings, PluginAppFrame and Trackers</li>
                            <li>It uses its own Cartograf style (downloaded aside)</li>
                            <li>It allows custom markers for maps (placed in a file gallery)</li>
                            <li>It is used in production at http://cartograf.recitus.qc.ca (in French)</li>
                        </ul>
                        Click to read more"
                    >
                        <?php echo smarty_function_icon(array('name'=>"help"),$_smarty_tpl);?>

                    </a>
                    <div class="row">
                        <div class="col-md-8 offset-md-2">
                            <a href="http://tiki.org/display545" class="thumbnail internal" data-box="box" title="Click to expand">
                                <img src="img/profiles/profile_thumb_cartograf.png" alt="Click to expand" class="regImage pluginImg" title="Click to expand" />
                            </a>
                            <div class="small text-center">
                                Click to expand
                            </div>
                        </div>
                    </div>
                </div>
        -->
                <div class="col-md-6">
                    <h4>R demo</h4> (<a href="tiki-admin.php?ticket=<?php echo smarty_function_ticket(array('mode'=>'get'),$_smarty_tpl);?>
&profile=R_demo&show_details_for=R_demo&categories%5B%5D=<?php echo $_smarty_tpl->tpl_vars['tikiMajorVersion']->value;?>
.x&repository=http%3a%2f%2fprofiles.tiki.org%2fprofiles&page=profiles&preloadlist=y&list=List#step2" target="_blank">apply profile now</a>)
                    <br/>
                    This profile demonstrates common uses of R language for statistics to produce advanced and/or interactive graphs and reports in web 2.0 pages.
                    <br/>
                    <a href="https://doc.tiki.org/PluginR" target="tikihelp" class="tikihelp" title="R demo:
                        It uses the R Project for Statistical Computing software & PluginR in Tiki (both of which are not bundled within a default Tiki installation and they need to be installed in the same server as Tiki).
                        <br/><br/>
                        The profile creates many demo pages, which comprise:
                        <ul>
                            <li>Simple R syntax in wiki pages to produce interactive charts</li>
                            <li>Advanced usage to create full GUI for an R application</li>
                            <li>Many other examples of nice charts and reports that you can produce with this system</li>
                        </ul>
                        Click to read more"
                    >
                        <?php echo smarty_function_icon(array('name'=>"help"),$_smarty_tpl);?>

                    </a>
                    <a href="http://r.tiki.org" target="tikihelp" class="tikihelp" title="r.tiki.org site:
                        <em>See also r.tiki.org live site</em>
                        <br/><br/>
                        Click to read more"
                    >
                        <?php echo smarty_function_icon(array('name'=>"help"),$_smarty_tpl);?>

                    </a>
                    <div class="row">
                        <div class="col-md-8 offset-md-2">
                            <a href="http://r.tiki.org/tiki-download_file.php?fileId=23&display&max=800" class="thumbnail internal" data-box="box" title="Click to expand">
                                <img src="img/profiles/profile_thumb_r_demo.png" alt="Click to expand" class="regImage pluginImg" title="Click to expand" />
                            </a>
                            <div class="small text-center">
                                Click to expand
                            </div>
                        </div>
                    </div>
                </div>
    <div class="col-md-6">
        <h4>GeoCMS Maps</h4> (<a href="tiki-admin.php?ticket=<?php echo smarty_function_ticket(array('mode'=>'get'),$_smarty_tpl);?>
&profile=GeoCMS_Maps_22&show_details_for=GeoCMS_Maps_22&categories%5B%5D=<?php echo $_smarty_tpl->tpl_vars['tikiMajorVersion']->value;?>
.x&repository=http%3a%2f%2fprofiles.tiki.org%2fprofiles&page=profiles&preloadlist=y&list=List#step2" target="_blank">apply profile now</a>)
        <br/>
        This profile demonstrates common uses of geolocation of different tiki objects (wiki pages, blog posts, articles, tracker items and web services) to produce separated or combined maps.
        <br/>
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <a href="https://profiles.tiki.org/tiki-download_file.php?fileId=4&display&max=800" class="thumbnail internal" data-box="box" title="Click to expand">
                    <img src="img/profiles/profile_thumb_geocms_maps.png" alt="Click to expand" class="regImage pluginImg" title="Click to expand" />
                </a>
                <div class="small text-center">
                    Click to expand
                </div>
            </div>
        </div>
    </div>
</div>
<!--
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <h4>R Heatmaps</h4>
                    (<a href="tiki-admin.php?ticket=<?php echo smarty_function_ticket(array('mode'=>'get'),$_smarty_tpl);?>
&profile=R_Heatmaps&show_details_for=R_Heatmaps&categories%5B%5D=<?php echo $_smarty_tpl->tpl_vars['tikiMajorVersion']->value;?>
.x&repository=http%3a%2f%2fprofiles.tiki.org%2fprofiles&page=profiles&preloadlist=y&list=List#step2" target="_blank">apply profile now</a>)
                    <br/>
                    This profile adds a web interface for an R package called EasyHeatMap (link to package provided in the instructions page once the profile is applied).
                    This R package allows the creation and edition of HeatMap graphics (as used in Bioinformatics).
                    <br/>
                    <a href="http://ueb.vhir.org/tools/Heatmaps" target="tikihelp" class="tikihelp" title="R Heatmaps:
                        This profile creates:
                        <ul>
                            <li>A single wiki page where the whole heatmap generation can be run, to allow debugging your server installation of the required system and R packages if anything fails for you</li>
                            <li>A few wiki pages to list, view and edit analysis in R to produce HeatMaps for differential expression of gene sets</li>
                            <li>Example input files and default values provided as a happy path to produce your first Heatmaps</li>
                        </ul>
                        Click to read more"
                    >
                        <?php echo smarty_function_icon(array('name'=>"help"),$_smarty_tpl);?>

                    </a>
                    <a href="https://doc.tiki.org/PluginR" target="tikihelp" class="tikihelp" title="Plugin R:
                        <em>See also Plugin R in doc.tiki.org</em>
                        <br/><br/>
                        Click to read more"
                    >
                        <?php echo smarty_function_icon(array('name'=>"help"),$_smarty_tpl);?>

                    </a>
                    <div class="row">
                        <div class="col-md-8 offset-md-2">
                            <a href="http://tiki.org/display546" class="thumbnail internal" data-box="box" title="Click to expand">
                                <img src="img/profiles/profile_thumb_r_heatmaps.png" alt="Click to expand" class="regImage pluginImg" title="Click to expand" />
                            </a>
                            <div class="small text-center">
                                Click to expand
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            -->
    </div>
</div>
<?php }
}
