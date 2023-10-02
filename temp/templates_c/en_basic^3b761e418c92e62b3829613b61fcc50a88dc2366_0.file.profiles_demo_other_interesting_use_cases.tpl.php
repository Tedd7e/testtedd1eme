<?php
/* Smarty version 3.1.48, created on 2023-09-29 11:20:53
  from '/home/teddieme/tedd1eme/templates/wizard/profiles_demo_other_interesting_use_cases.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6516a50552af28_27048819',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3b761e418c92e62b3829613b61fcc50a88dc2366' => 
    array (
      0 => '/home/teddieme/tedd1eme/templates/wizard/profiles_demo_other_interesting_use_cases.tpl',
      1 => 1689085248,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6516a50552af28_27048819 (Smarty_Internal_Template $_smarty_tpl) {
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
        <h4 class="mt-0 mb-4">Each of these profiles create a working instance of some features, such as wiki structures, forums, trackers and wiki pages, customized for specific purposes.</h4>
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
                    <h4>Structured Master Documents</h4>
                    (<a href="tiki-admin.php?ticket=<?php echo smarty_function_ticket(array('mode'=>'get'),$_smarty_tpl);?>
&profile=Structured+Master+Documents&show_details_for=Structured+Master+Documents&categories%5B%5D=<?php echo $_smarty_tpl->tpl_vars['tikiMajorVersion']->value;?>
.x&repository=http%3a%2f%2fprofiles.tiki.org%2fprofiles&page=profiles&preloadlist=y&list=List#step2" target="_blank">apply profile now</a>)
                    <br>
                    This profile will get you started with Wiki Structures, containing multiple wiki pages with a hierarchical order, like master documents from office suites, and more.
                    <br/>
                    <a href="https://doc.tiki.org/Structures" target="tikihelp" class="tikihelp" title="Structured Master Documents:
                        More details:
                        <ul>
                            <li>Many pages are pre-created to let you easily set up several wiki structures</li>
                            <li>A common navigation menu is created and shown at the top of pages in the structure</li>
                            <li>You can easily print (export) them all together in a single html</li>
                            <li>Permissions or Monitoring can be applied in bulk to the whole structure or substructures</li>
                        </ul>
                        Click to read more"
                    >
                        <?php echo smarty_function_icon(array('name'=>"help"),$_smarty_tpl);?>

                    </a>
                    <div class="row">
                        <div class="col-md-8 offset-md-2">
                            <a href="http://tiki.org/display588" class="thumbnail internal" data-box="box" title="Click to expand">
                                <img src="img/profiles/profile_thumb_structured_master_documents.png" alt="Click to expand" class="regImage pluginImg" title="Click to expand" />
                            </a>
                            <div class="mini text-center">
                                <div class="thumbcaption text-center">Click to expand</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <h4>Consensus Forums</h4>
                    (<a href="tiki-admin.php?ticket=<?php echo smarty_function_ticket(array('mode'=>'get'),$_smarty_tpl);?>
&profile=Consensus+Forums&show_details_for=Consensus+Forums&categories%5B%5D=<?php echo $_smarty_tpl->tpl_vars['tikiMajorVersion']->value;?>
.x&repository=http%3a%2f%2fprofiles.tiki.org%2fprofiles&page=profiles&preloadlist=y&list=List#step2" target="_blank">apply profile now</a>)
                    <br>
                    This profile sets up the configuration needed to facilitate forums that help their users to seek consensus on the discussion topics held.
                    <br/>
                    <a href="https://doc.tiki.org/Rating#Users_ratings_in_Forums" target="tikihelp" class="tikihelp" title="Users ratings in Forums:
                        More details:
                        <ul>
                            <li>Topics with less agreement can be easily identified from the topic list</li>
                            <li>The current rating of each user to the thread topic is shown each time, so that further attention and explanations can be given where needed to help reaching a higher degree of consensus</li>
                            <li>Replies can also be rated, but without affecting the topic rating average</li>
                            <li>Profile instructions are translated to several languages. Therefore, some settings related to internationalization of wiki pages are enabled by the profile</li>
                        </ul>
                        Click to read more"
                    >
                        <?php echo smarty_function_icon(array('name'=>"help"),$_smarty_tpl);?>

                    </a>
                    <div class="row">
                        <div class="col-md-8 offset-md-2">
                            <a href="http://tiki.org/display587" class="thumbnail internal" data-box="box" title="Click to expand">
                                <img src="img/profiles/profile_thumb_consensus_forums.png" alt="Click to expand" class="regImage pluginImg" title="Click to expand" />
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
                    <h4>Barter Market</h4>
                    (<a href="tiki-admin.php?ticket=<?php echo smarty_function_ticket(array('mode'=>'get'),$_smarty_tpl);?>
&profile=Barter_Market&show_details_for=Barter_Market&categories%5B%5D=<?php echo $_smarty_tpl->tpl_vars['tikiMajorVersion']->value;?>
.x&repository=http%3a%2f%2fprofiles.tiki.org%2fprofiles&page=profiles&preloadlist=y&list=List#step2" target="_blank">apply profile now</a>)
                    <br>
                    This profile creates three trackers with some demo data to showcase a basic setup for a barter market of linked offers and wants of goods, services and knowledge.
                    <br/>
                    <a href="http://profiles.tiki.org/Barter_Market" target="tikihelp" class="tikihelp" title="Barter Market:
                        More details:
                        <ul>
                                <li>minimal number of fields in these trackers, which can be extended</li>
                                <li>tracker items are categorized</li>
                                <li>a few modules added, including a wiki page menu</li>
                                <li>best display if using just one column (right, for instance)</li>
                        </ul>
                        Click to read more"
                    >
                        <?php echo smarty_function_icon(array('name'=>"help"),$_smarty_tpl);?>

                    </a>
                    <div class="row">
                        <div class="col-md-8 offset-md-2">
                            <a href="http://tiki.org/display586" class="thumbnail internal" data-box="box" title="Click to expand">
                                <img src="img/profiles/profile_thumb_barter_market.png" alt="Click to expand" class="regImage pluginImg" title="Click to expand" />
                            </a>
                            <div class="small text-center">
                                Click to expand
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <h4>Revision Approval (ISO9001)</h4>
                    (<a href="tiki-admin.php?ticket=<?php echo smarty_function_ticket(array('mode'=>'get'),$_smarty_tpl);?>
&profile=Revision+Approval+%28ISO9001%29&show_details_for=Revision+Approval+%28ISO9001%29&categories%5B%5D=<?php echo $_smarty_tpl->tpl_vars['tikiMajorVersion']->value;?>
.x&repository=http%3a%2f%2fprofiles.tiki.org%2fprofiles&page=profiles&preloadlist=y&list=List#step2" target="_blank">apply profile now</a>)
                    <br>
                    This profile sets up the configuration needed to facilitate the handling of document revision approval for quality certification systems (such as ISO9001).
                    <br/>
                    <a href="https://doc.tiki.org/Flagged+Revisions" target="tikihelp" class="tikihelp" title="Revision Approval (ISO9001):
                        More details:
                        <ul>
                            <li>Additions: 1 group, 2 users, 2 wiki pages, 3 categories</li>
                            <li>Revision approval is set for homepage and 'official document'</li>
                            <li>Wiki Argument Variables are used in the 'official document'</li>
                        </ul>
                        Click to read more"
                    >
                        <?php echo smarty_function_icon(array('name'=>"help"),$_smarty_tpl);?>

                    </a>
                    <div class="row">
                        <div class="col-md-8 offset-md-2">
                            <a href="http://tiki.org/display615" class="thumbnail internal" data-box="box" title="Click to expand">
                                <img src="img/profiles/profile_thumb_revision_approval_iso9001.png" alt="Click to expand" class="regImage pluginImg" title="Click to expand" />
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
