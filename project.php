<?php include("inc/projects.php"); 

if(isset($_GET["id"])) {
	$product_id = $_GET["id"];
	if(isset($projects[$product_id])) {
		$product = $projects["$product_id"];

	} 
} if(!isset ($product)) {
	header("Location: index.php");
	exit();
}



$pageTitle = $product["name"];
include("inc/header.php");
include("inc/project-nav.php"); 
?>


	<!-- Begin Hero -->
	<div class='jumbotron <?php echo $product["headImage"]; ?> clearfix' data-top-bottom="background-position: 50% -200px;" data-bottom-top="background-position: 50% 100px;" data-anchor-target=".ticker h1">

		<!-- Content -->
		<div class="container center-vertically heading">
			<div class="ticker">
				<h1><?php echo $product["name"]; ?></h1>
				
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

				
				<div class="row">
					<div class="col-lg-10 col-lg-offset-1" >
						<h3 data-scroll-reveal="enter left and move 50px over 1.2s"><?php echo $product["name"]; ?></h3>
						<p><?php echo $product["location"]; ?></p>
						<hr data-scroll-reveal>
						<p data-scroll-reveal><?php echo $product["description"]; ?></p>
					</div>
				</div>

			</div>

		</div>

	</section>
	<!-- End Summary -->



	<!-- Begin Portfolio -->
	<section id="section2">

		<div class="container portfolio">

			
			<div class="row page-title-2">
				<div class="col-lg-12">
					<h3>Gallery</h3>
					<hr>
				</div>
			</div>

			
			<div class="container port-holder">
			  <ul id="myPortfolio" class="no-padding">

			  	<?php foreach($product["images"] as $image) { ; ?>

				    <li class="item col-xs-4 no-padding">
				    	<a data-toggle="modal" href='<?php echo $image; ?>' data-target="#myModal">
							<img src='<?php echo $image; ?>' alt='' />
							<span class="portfolio-hover">
							  <span>
							  	<span class="portfolio-title"><i class="ion-plus-circled"></i></span><br>
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

	<!-- Modal -->
	<div class="modal fade" id="myModal" role="dialog" aria-hidden="true">
	    <div class="modal-dialog">
	        <div class="modal-content">
	            <div class="modal-body"></div>
	        </div> <!-- /.modal-content -->
	    </div> <!-- /.modal-dialog -->
	</div> <!-- /.modal -->
<!-- 
				<li class="item web illustrations col-xs-4 no-padding">
			    	<a data-toggle="modal" href="projects/project-9.html" data-target="#myModal">
						<img src="img/projects/thumbs/web3.jpg" alt="..." />
						<span class="portfolio-hover">
						  <span>
						  	<span class="portfolio-title">Eary</span><br>
						  	<span class="portfolio-category">Web + Illustrations</span>
						  </span>
						</span>
					</a>
			    </li> -->








<?php include("inc/footer.php"); ?>