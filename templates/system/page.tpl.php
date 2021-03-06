<?php
/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.tpl.php template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 *
 * @see bootstrap_preprocess_page()
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see bootstrap_process_page()
 * @see template_process()
 * @see html.tpl.php
 *
 * @ingroup templates
 */
?>
<div id="page">
<section class="bg-image">
<header id="header">
	<div id="utility-nav-and-icons">
		<?php if (!empty($page['utility_nav']) || !empty($page['icon_area'])): ?>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="row">
							 <?php if (!empty($page['utility_nav'])): ?>
				              <div id="utility-nav" class="col-md-9">
				                  <?php print render($page['utility_nav']); ?>
				              </div>
							  <?php endif; ?>
							  <?php if (!empty($page['icon_area'])): ?>
				              <div id="social-media" class="col-md-3 pull-right text-right">
					              <?php print render($page['icon_area']); ?>
				              </div>
							  <?php endif; ?>
						</div>
					</div>
				</div>
			</div>
		<?php endif; ?>
	</div>
<div id="logo-name-nav">
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="row logo-name-nav">
        <?php if ($logo): ?>
          <div class="col-xs-3 col-sm-2">
	        <a class="logo navbar-btn pull-left" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>">
	          <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
	        </a>
          </div>
	<?php endif; ?>
		
	<?php if (!drupal_is_front_page()):  ?>
                <?php if ($site_name): ?>
                  <div id="site-name" class="col-xs-4 col-sm-8 col-sm-offset-0">
                      <h1><?php print $site_name; ?></h1>
                      <?php if ($site_slogan): ?>
                        <div id="site-slogan" class="hidden-xs">
                          OPPORTUNITIES IN <strong><em>DENTISTRY</em></strong>
                          <?php //print $site_slogan; ?>
                        </div>
                      <?php endif; ?>
                  </div>
                <?php endif; ?>
         <?php endif; ?>
         <div class="visible-xs visible-sm visible-md hidden-lg hidden-xl">
	 <?php if (drupal_is_front_page()): ?>
	         <?php if ($site_name): ?>
                  <div id="site-name" class="col-xs-4 col-sm-8 col-sm-offset-0">
                      <h1><?php print $site_name; ?></h1>
                      <?php if ($site_slogan): ?>
                        <div id="site-slogan" class="hidden-xs">
                          OPPORTUNITIES IN <strong><em>DENTISTRY</em></strong>
                          <?php //print $site_slogan; ?>
                        </div>
                      <?php endif; ?>
                  </div>
                <?php endif; ?>	
	 <?php endif; ?>
         </div>

 	 <?php if (!drupal_is_front_page()):  ?>
            <div class="col-xs-2 col-xs-offset-2 col-sm-offset-0">
              <div>
                <div class="page">
                  <a href="#menu" id="site-menu-button">
                    <button class="hamburger hamburger--collapse" type="button">
                      <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                      </span>
                      <span class="menu-title">MENU</span>
                    </button>
                  </a>
                </div>
              </div>
            </div>
        <?php endif; ?>
         <?php if (drupal_is_front_page()):  ?>
            <div class="col-xs-5 col-sm-2 col-md-2 col-lg-10">
              <div>
                <div class="page">
                  <a href="#menu" id="site-menu-button">
                    <button class="hamburger hamburger--collapse" type="button">
                      <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                      </span>
                      <span class="menu-title">MENU</span>
                    </button>
                  </a>
                </div>
              </div>
            </div>
	<?php endif; ?>

        


      </div> <!-- /logo and nav row  -->

    <?php if (!empty($page['integrated_header'])): ?>
      <div class="row integrated-header">
          <?php print render($page['integrated_header']); ?>
      </div> <!-- /integrated_header region  -->
    <?php endif; ?>

    </div>
</div>
  </div> <!-- /head row -->
</div>
</section>
</header><!-- /#header  -->	

<?php if (!empty($page['optional_region_1'])): ?>
<div id="section-1" role="complementary">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<?php print render($page['optional_region_1']); ?>	
			</div>
		</div>
	</div>
</div><!-- /#  -->
<?php endif; ?>


<?php if (!empty($page['optional_region_2'])): ?>
<div id="section-2">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<?php print render($page['optional_region_2']); ?>
			</div>
		</div>
	</div>
</div><!-- /#  -->
<?php endif; ?>


<section id="content-section">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
			    	<?php if (!empty($page['navigation'])): ?>
			            <?php print render($page['navigation']); ?>
			          <?php endif; ?>

					<div class="row">

					    <?php if (!empty($page['sidebar_first'])): ?>
					      <aside class="col-sm-3" role="complementary">
					        <?php print render($page['sidebar_first']); ?>
					      </aside>  <!-- /#sidebar-first -->
					    <?php endif; ?>

					    <section<?php print $content_column_class; ?>>
					      <?php if (!empty($page['highlighted'])): ?>
					        <div class="highlighted jumbotron"><?php print render($page['highlighted']); ?></div>
					      <?php endif; ?>
					      <?php if (!empty($breadcrumb)): print $breadcrumb; endif;?>
					      <a id="main-content"></a>
					      <?php print render($title_prefix); ?>
					      <!-- hide default title / using views to create node assembly -->
					      <?php if (!empty($title)): ?>
					        <h1 class="page-header"><?php print $title; ?></h1>
					      <?php endif; ?>
					      <?php print render($title_suffix); ?>
					      <?php print $messages; ?>
					      <?php if (!empty($tabs)): ?>
					        <?php print render($tabs); ?>
					      <?php endif; ?>
					      <?php if (!empty($page['help'])): ?>
					        <?php print render($page['help']); ?>
					      <?php endif; ?>
					      <?php if (!empty($action_links)): ?>
					        <ul class="action-links"><?php print render($action_links); ?></ul>

					      <?php endif; ?>
					      <?php print render($page['content']); ?>
					    </section>

					    <?php if (!empty($page['sidebar_second'])): ?>
					      <aside class="col-sm-3" role="complementary">
					        <?php print render($page['sidebar_second']); ?>
					      </aside>  <!-- /#sidebar-second -->
					    <?php endif; ?>

					  </div>	
			</div>
		</div>
	</div>
</section><!-- /#  -->
<?php if (!empty($page['optional_region_3'])): ?>
<div id="optinoal-region-3">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<?php print render($page['optional_region_3']); ?>
			</div>
		</div>
	</div>
</div><!-- /#  -->
<?php endif; ?>

<?php if (!empty($page['optional_region_4'])): ?>
<div id="optional-region-4">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<?php print render($page['optional_region_4']); ?>
			</div>
		</div>
	</div>
</div><!-- /#  -->
<?php endif; ?>
<?php if (!empty($page['footer'])): ?>
<div id="footer">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="row">
				<?php print render($page['footer']); ?>
				</div>
			</div>
		</div>
	</div>
</div><!-- /#footer  -->
<?php endif; ?>


<nav id="menu" role="navigation">
         <?php if (!empty($page['site_menu'])): ?>
          <?php print render($page['site_menu']); ?>
        <?php endif; ?>
</nav>
