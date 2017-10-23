

<header role="banner">
	<?php if (!empty($secondary_menu) || !empty($icon_area)): ?>
		<div class="col-md-12">
			<div class="row utility-nav hidden-xm hidden-xs">
				<div id="utility-nav" class="col-md-9">
					<?php print render($secondary_menu); ?>
				</div>
				<div id="social-media" class="col-md-3">
		        	<?php print render($icon_area); ?>
		      </div>
		    </div>
		  </div>
		</div>
	<?php endif; ?>
<!-- /utility-links & /icon-area-->
	
	<div class="row logo-name-nav">
        <?php if ($logo): ?>
          <div class="col-xs-3 col-sm-3 col-md-2">
	        <a class="logo navbar-btn pull-left" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>">
	          <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
	        </a>
        </div>
		<?php endif; ?>
		
		<?php if ($site_name): ?>
	      <div class="col-xs-6 col-sm-6 col-md-6">
		    <h1><?php print $site_name; ?></h1>
 		  </div>
		<?php endif; ?>
		
        <div class="col-md-3">
	      <div class="pull-right text-right">	
	        <div class="page">
		      <a href="#menu" id="site-menu-button">MENU <i class="fa fa-bars" aria-hidden="true"></i></a> 
		    </div>
	     </div>
        </div>
      </div> <!-- /logo & /nav-w-search  -->
	
<!-- /logo -->
	
<!-- /site-name -->
	
<!-- /menu-and-search -->
	
	
</header>
<!-- /header -->


<main role="main">


<!-- /optional-region-1 -->

<!-- /optional-region-2 -->

<!-- /main-content -->

<!-- /optional-region-3 -->

<!-- /optional-region-4 -->

</main>
<!-- /main -->


<footer role="contentinfo">
	
	
	
</footer>
<!-- /footer -->

