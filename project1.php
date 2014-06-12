<?php include("inc/project1.php");
?>


<?php 
include("inc/header.php");
include("inc/project-nav.php"); ?>

	<!-- Begin Hero -->
	<div class="jumbotron hero1 clearfix" data-top-bottom="background-position: 50% -200px;" data-bottom-top="background-position: 50% 100px;" data-anchor-target=".ticker h1">

		<!-- Content -->
		<div class="container center-vertically heading">
			<img src="img/logo/logo1.png">
			<div>
				<h2>Project 1</h2>
			</div>
			<hr>
			<a href="#" data-id="section2" class="btn btn-default bolt-button-light scroll-link" style="margin-top:10px;">
				Gallery &nbsp;&nbsp;<span class="ion-ios7-arrow-down"></span>
			</a>
		</div>

	</div>
	<!-- End Hero -->

	<!-- Begin Summary -->
	<section id="section1">
	
		<div class="summary">

			<div class="container">

				<!-- Content -->
				<div class="row">
					<div class="col-lg-10 col-lg-offset-1" >
						<h3 data-scroll-reveal="enter left and move 50px over 1.2s">Project 1</h3>
						<hr data-scroll-reveal>
						<p data-scroll-reveal>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer a elit turpis. Phasellus non varius mi. Nam bibendum mauris at sollicitudin lacinia. Vestibulum blandit nibh neque, id consequat mi vestibulum eu. Suspendisse potenti. Ut ac consequat nulla. Praesent tristique eleifend tincidunt.</p>
					</div>
				</div>

			</div>

		</div>

	</section>
	<!-- End Summary -->



	<!-- Begin Portfolio -->
	<section id="section2">

		<div class="container portfolio">

			<!-- Page Title -->
			<div class="row page-title-2">
				<div class="col-lg-12">
					<h3>Project 1</h3>
					<hr>
					<p><?php echo $location; ?></p>
				</div>
			</div>

			<!-- Portfolio Items -->
			<div class="container port-holder">
			  <ul id="myPortfolio" class="no-padding">

			  	<?php foreach($images as $image) { ; ?>

				    <li class="item col-xs-4 no-padding">
				    	<a href='<?php echo $image["link"]; ?>'>
							<img src='<?php echo $image["img"]; ?>' alt='<?php echo $image["name"]; ?>' />
							<span class="portfolio-hover">
							  <span>
							  	<span class="portfolio-title"><?php echo $image["name"]; ?></span><br>
							  	<span class="portfolio-category"><?php echo $image["location"]; ?></span>
							  </span>
							</span>
						</a>
				    </li>

			    <?php } ?>

			  </ul>
			</div>

		</div>

	</section>
	<!-- End Portfolio -->








<?php include("inc/footer.php"); ?>