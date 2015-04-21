

<div class=" row no-gutters" id="header_pad" >
	<div class="header cell-md-12 no-gutters">
		<div class="cell-xs-10 cell-sm-10 cell-md-8" id="logo">
			<a href="/landing.php" target="_self"><h3 class="header_logo">Paul Love Fine Art</h3></a>
		</div><!-- /header -->
		<div id="menu">
			<a href="#" class="cell-xs-2 cell-sm-2 cell-md-4" data-slide="slide" data-target="#navigation-panel">
			<i class="fa fa-bars fa-lg" id="nav-toggle"></i>
		</a>
		</div>
	</div>
</div><!-- row -->
<!-- SLIDE PANEL -->
		<div class="slide-panel-parent">
				<div class="slide-panel" id="navigation-panel">
				<div class="container">
					<div class="row">
						<div class="cell-md-12 close_panel_container">
							<i class="fa fa-remove fa-2x close " id="color_rbutton" data-slide="slide"></i>
						</div>
					</div>
					<div class="row">
							
						<div class="cell-md-6 cell-lg-8">
							<nav id="nav" role="navigation">
								<ul id="menuOptions">
									<li><a href="/about.php" target="self">About the artist</a></li>
									<li><a href="/articles.php" target="_self">Articles</a></li>
									<li><a data-slide="slide" data-target="#contact-panel" href="#">Contact </a></li>
									<li><a data-slide="slide" data-target="#galleries-panel" href="#">Galleries</a></li>
									<li><a href="/blogfront.php" target="_self">Blog</a></li>
									<li><a href="/workshops.php" target="_self">Events</a></li>
									<li><a href="/collections.php" target="_self">Recent Works</a></li>
								</ul>

							</nav>
						</div>
					</div><!-- /row -->
			</div> <!-- /container -->
			</div><!-- /navigation slide-panel  -->
			<!-- Contact Panel -->
			<?php include('contact_form.php'); ?>
			<!-- end contact panel  -->
			<!-- EMAIL NEWSLETTER PANEL -->
			<?php include('en.php') ?>
			<!-- GALLERIES PANEL -->
			<?php include('galleries.php') ?>
			<!-- END GALLERIES PANEL -->
		</div> <!-- end slide panel parent-->
