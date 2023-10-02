<?php
/* Smarty version 3.1.48, created on 2023-09-29 11:21:26
  from '/home/teddieme/tedd1eme/templates/wizard/profiles_featured_site_confs.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6516a526db5783_22200701',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3a0408d488c9f2622f6edf58f448c943bf77952b' => 
    array (
      0 => '/home/teddieme/tedd1eme/templates/wizard/profiles_featured_site_confs.tpl',
      1 => 1689085248,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6516a526db5783_22200701 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/function.ticket.php','function'=>'smarty_function_ticket',),1=>array('file'=>'/home/teddieme/tedd1eme/lib/smarty_tiki/function.icon.php','function'=>'smarty_function_icon',),));
?>


<div class="media"><div class="mr-4">
        <span class="fa-stack fa-lg" style="width: 100px;" title="Configuration Profiles Wizard" >
            <i class="fas fa-cubes fa-stack-2x"></i>
            <i class="fas fa-flip-horizontal fa-magic fa-stack-1x ml-4 mt-4"></i>
        </span>
    </div>
    <div class="media-body">
        <h4 class="mt-0 mb-4">Initialize Tiki as an application, e.g. a blog., by means of applying one of the 4 featured configuration profiles.</h4>
        <h3>Profiles:</h3>
            <div class="row">
                <div class="col-md-6">
                    <h4>Collaborative Community</h4>
                    (<a href="tiki-admin.php?ticket=<?php echo smarty_function_ticket(array('mode'=>'get'),$_smarty_tpl);?>
&profile=Collaborative_Community_21&show_details_for=Collaborative_Community_21&categories%5B%5D=<?php echo $_smarty_tpl->tpl_vars['tikiMajorVersion']->value;?>
.x&categories%5B%5D=Featured+profiles&repository=http%3a%2f%2fprofiles.tiki.org%2fprofiles&page=profiles&preloadlist=y&list=List#step2" target="_blank">apply profile now</a>)
                    <br>
                    <p>Setup to help subject experts and enthusiasts work together to build a Knowledge Base
                        <a target="tikihelp" class="tikihelp" title="Collaborative Community:
                            Uses:
                            <ul>
                                <li>Wiki Editing</li>
                                <li>Personal Member Spaces</li>
                                <li>Forums</li>
                                <li>Blogs</li>
                            </ul>"
                        >
                            <?php echo smarty_function_icon(array('name'=>"help"),$_smarty_tpl);?>

                        </a>
                    </p>
                    <div class="row">
                        <div class="col-md-8 offset-md-2">
                            <a href="http://tiki.org/display524" class="thumbnail internal" data-box="box" title="Click to expand">
                                <img src="img/profiles/profile_thumb_collaborative_community.png" alt="Click to expand" class="regImage pluginImg" title="Click to expand" />
                            </a>
                            <div class="small text-center">
                                Click to expand
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <h4>Company Intranet</h4>
                    (<a href="tiki-admin.php?ticket=<?php echo smarty_function_ticket(array('mode'=>'get'),$_smarty_tpl);?>
&profile=Company_Intranet_21&show_details_for=Company_Intranet_21&categories%5B%5D=<?php echo $_smarty_tpl->tpl_vars['tikiMajorVersion']->value;?>
.x&categories%5B%5D=Featured+profiles&repository=http%3a%2f%2fprofiles.tiki.org%2fprofiles&page=profiles&preloadlist=y&list=List#step2" target="_blank">apply profile now</a>)
                    <br>
                    <p>
                        Setup for a Corporate Intranet of a typical medium-sized business.
                        <a target="tikihelp" class="tikihelp" title="Company Intranet:
                            Uses:
                            <ul>
                                <li>Company News Articles</li>
                                <li>Executive Blog</li>
                                <li>File Repository & Management</li>
                                <li>Collaborative Wiki </li>
                            </ul>"
                        >
                            <?php echo smarty_function_icon(array('name'=>"help"),$_smarty_tpl);?>

                        </a>
                    </p>
                    <div class="row">
                        <div class="col-md-8 offset-md-2">
                            <a href="http://tiki.org/display525" class="thumbnail internal" data-box="box" title="Click to expand">
                                <img src="img/profiles/profile_thumb_company_intranet.png" alt="Click to expand" class="regImage pluginImg" title="Click to expand" />
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
                    <h4>Personal Blog and Profile</h4>
                    (<a href="tiki-admin.php?ticket=<?php echo smarty_function_ticket(array('mode'=>'get'),$_smarty_tpl);?>
&profile=Personal_Blog_and_Profile_21plus&show_details_for=Personal_Blog_and_Profile_21plus&categories%5B%5D=<?php echo $_smarty_tpl->tpl_vars['tikiMajorVersion']->value;?>
.x&categories%5B%5D=Featured+profiles&repository=http%3a%2f%2fprofiles.tiki.org%2fprofiles&page=profiles&preloadlist=y&list=List#step2" target="_blank">apply profile now</a>)
                    <br>
                    <p>
                        Setup with many cool features to help you integrate the Social Web and establish a strong presence in the Blogosphere
                        <a target="tikihelp" class="tikihelp" title="Personal Blog and Profile:
                            Uses:
                            <ul>
                                <li>Blog (Full set of blog related features)</li>
                                <li>Image Gallery</li>
                                <li>RSS Integration</li>
                                <li>Video Log</li>
                            </ul>"
                        >
                            <?php echo smarty_function_icon(array('name'=>"help"),$_smarty_tpl);?>

                        </a>
                    </p>
                    <div class="row">
                        <div class="col-md-8 offset-md-2">
                            <a href="http://tiki.org/display526" class="thumbnail internal" data-box="box" title="Click to expand">
                                <img src="img/profiles/profile_thumb_personal_blog_and_profile.png" alt="Click to expand" class="regImage pluginImg" title="Click to expand" />
                            </a>
                            <div class="small text-center">
                                Click to expand
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <h4>Small Organization Web Presence</h4>
                    (<a href="tiki-admin.php?ticket=<?php echo smarty_function_ticket(array('mode'=>'get'),$_smarty_tpl);?>
&profile=Small_Organization_Web_Presence_21&show_details_for=Small_Organization_Web_Presence_21&categories%5B%5D=<?php echo $_smarty_tpl->tpl_vars['tikiMajorVersion']->value;?>
.x&categories%5B%5D=Featured+profiles&repository=http%3a%2f%2fprofiles.tiki.org%2fprofiles&page=profiles&preloadlist=y&list=List#step2" target="_blank">apply profile now</a>)
                    <br>
                    <p>
                        Setup for a Web Presence of a typical small business or non-profit.
                        <a target="tikihelp" class="tikihelp" title="Small Organization Web Presence:
                            Uses:
                            <ul>
                                <li>Company News & Updates</li>
                                <li>Highlight Company's Products and Services</li>
                                <li>File Gallery (great for Media Kit)</li>
                                <li>Contact Form </li>
                            </ul>"
                        >
                            <?php echo smarty_function_icon(array('name'=>"help"),$_smarty_tpl);?>

                        </a>
                    </p>
                    <div class="row">
                        <div class="col-md-8 offset-md-2">
                            <a href="http://tiki.org/display527" class="thumbnail internal" data-box="box" title="Click to expand">
                                <img src="img/profiles/profile_thumb_small_org_web_presence.png" alt="Click to expand" class="regImage pluginImg" title="Click to expand" />
                            </a>
                            <div class="small text-center">
                                Click to expand
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <em>See also <a href="tiki-admin.php?page=profiles&amp;alt=Profiles" target="_blank">Profiles admin card</a></em>
    </div>
</div>
<?php }
}
