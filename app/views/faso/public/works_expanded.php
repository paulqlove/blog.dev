<!DOCTYPE html>
<html>
<head>
	<title>Faso Template</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="/css/style.css">
</head>
<body id="allPages">
	<div class="container" id="main" data-role="page">
			<?php include("header.php"); ?>
			<i class="fa fa-arrow-circle-o-up fa-3x" id="go-to-top"></i>
			<div class="single_work_expanded row">
				<div class="cell-md-4 purchase_button_desktop">
					<div class="hidden-sm hidden-xs row no-gutters">
						<div class=" cell-md-12 single_work_purchase">
							<ul>
								<li>
									<h3>Purchase</h3>
								</li>
								<li><a data-slide="slide" data-target="#contact-panel" href="#"><h3>Contact</h3></a></li>
							</ul>
						</div> <!-- single work purchase -->
					</div> <!-- row no-gutters -->
				</div>
				<div class=" cell-md-8">
					<div class="image_info cell-sm-4 cell-md-5 we_div_height">
						<div class="row">
							<div class="cell-md-12 no-gutters">
								<div  class="cell-xs-6 cell-sm-6 cell-md-12">
									<h3>Title</h3>
									<p>Mother Beast</p>
								</div>
								<div  class="cell-xs-6 cell-sm-6 cell-md-12">
									<h3>Medium</h3>
									<p>Oil on Canvas</p>
								</div>
								<div  class="cell-xs-6 cell-sm-6 cell-md-12">
									<h3>Size</h3>
									<p>20 X 16 inches</p>
								</div>
								<div class="cell-xs-6 cell-sm-6 cell-md-12">
									<h3>price</h3>
									<p>$2000</p>
								</div>
								<div  class="cell-xs-8 cell-sm-12 cell-md-12">
									<h3>Description</h3>
									<p>This piece is a commision from my clients photograph. Both cows have what I look for in my own photos, personality!</p>
								</div>
							</div>
						</div> <!-- row -->
					</div> <!-- image info -->
					<div class="cell-sm-8 cell-md-7">
						<div id="image_container we_div_height">
							<img class="singleImage " src="/images/1184544w900.jpg">
							<i class="fa fa-angle-right fa-5x" id="next_image_button"></i>
							<i class="fa fa-angle-down fa-5x" id="scroll_down_arrow"></i>
						</div>
					</div>
				</div><!-- /content -->
				<div class="hidden-md hidden-lg row no-gutters">
					<div class=" cell-md-12 single_work_purchase">
						<ul>
							<li>
								<h3>Purchase</h3>
							</li>
							<li><a data-slide="slide" data-target="#contact-panel" href="#"><h3>Contact</h3></a></li>
						</ul>
					</div>
				</div>
			</div><!-- row -->
	</div><!-- /container -->
	<?php include("footer.php"); ?><!-- FOOTER -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		<script type="text/javascript" src="/js/jquery.materialripple.js"></script>
		<script type="text/javascript" src="/js/mobiledetect.js"></script>	
		<script type="text/javascript" src="/js/main.js"></script>
</body>
</html>




