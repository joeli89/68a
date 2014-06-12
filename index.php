<?php include('inc/projects.php'); ?>
<?php 
$pageTitle = "Home";
include("inc/header.php");
include("inc/index-nav.php"); ?>

	<!-- Begin Hero -->
	<div class="jumbotron hero clearfix" data-top-bottom="background-position: 50% -200px;" data-bottom-top="background-position: 50% 100px;" data-anchor-target=".ticker h1">

		<!-- Content -->
		<div class="container center-vertically heading">
			<img src="img/logo/logo1.png">
			<div>
				<h2>Beautifully Functional</h2>
			</div>
			<hr>
			<a href="#" data-id="section2" class="btn btn-default bolt-button-light scroll-link" style="margin-top:10px;">
				Projects Gallery &nbsp;&nbsp;<span class="ion-ios7-arrow-down"></span>
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
						<h3 data-scroll-reveal="enter left and move 50px over 1.2s">Beautifully Functional</h3>
						<hr data-scroll-reveal>
						<p data-scroll-reveal>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer a elit turpis. Phasellus non varius mi. Nam bibendum mauris at sollicitudin lacinia. Vestibulum blandit nibh neque, id consequat mi vestibulum eu. Suspendisse potenti. Ut ac consequat nulla. Praesent tristique eleifend tincidunt.</p>
						<a data-scroll-reveal="enter right and move 50px over 1.2s" href="#" data-id="section3" class="btn btn-default bolt-button-dark scroll-link">
							About us &nbsp;&nbsp;<span class="ion-ios7-arrow-down"></span>
						</a>
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
					<h3>Projects</h3>
					<hr>
					<p>Lorum ipsum, blah blah blah.</p>
				</div>
			</div>

			<!-- Portfolio Filter -->
			<div data-scroll-reveal="enter left and move 50px over 1s" class="container text-center">
			  <ul class="nav nav-pills">
			    <li class="filter" data-filter="all">All</li>
			    <li class="filter" data-filter="Kitchen">Kitchens</li>
			    <li class="filter" data-filter="Bedroom">Bedrooms</li>
			    <li class="filter" data-filter="Office">Offices</li>
			  </ul>
			</div>

			<!-- Portfolio Items -->
			<div class="container port-holder">
			  <ul id="myPortfolio" class="no-padding">

			  	<?php foreach($projects as $id =>  $project) {; ?>

				    <li class='item col-xs-4 no-padding <?php echo $project["category"]; ?>'>
				    	<a href='<?php echo $project["link"]; ?>' >
							<img src='<?php echo $project["main-image"]; ?>' alt='<?php echo $project["name"]; ?>' />
							<span class="portfolio-hover">
							  <span>
							  	<span class="portfolio-title"><?php echo $project["name"]; ?></span><br>
							  	<span class="portfolio-category"><?php echo $project["category"]; ?></span>
							  </span>
							</span>
						</a>
				    </li>

			    <?php } ?>

			    
<!-- 			  	<?php foreach($projects as $project_id => $project) {

				    echo '<li class="item col-xs-4 no-padding' . $project["category"] . '" >';
				    echo '<a href="project.php?id=' . $project_id . '">';
					echo '<img src="' . $project["main-image"] . '" alt="' . $project["name"] . '" />';
					echo '<span class="portfolio-hover">';
					echo "<span>";
					echo '<span class="portfolio-title">' . $project["name"] . "</span><br>";
					echo '<span class="portfolio-category">' . $project["category"] . "</span>";
					echo "</span>";
					echo "</span>";
					echo "</a>";
				   	echo "</li>";

			    } ?> -->

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

	<!-- Begin Call to Action -->
	<div class="cta">

		<div class="container">

			<div class="row">
				<div class="col-lg-4 col-lg-offset-1">
					<p>
						Interested in working with us?
					</p>
				</div>
				<div class="col-lg-2">
					<a href="#" data-id="section6" class="btn btn-default bolt-button-cta scroll-link">
						Contact
					</a>
				</div>
				<div class="col-lg-4">
					<p>
						Ready when you are.
					</p>
				</div>
			</div>

		</div>

	</div>
	<!-- End Call to Action -->

	<!-- Begin About Us -->
	<section id="section3">

		<div class="about">

			<div class="container">

				<div class="row">

					<!-- Page Title -->
					<div class="col-lg-10 col-lg-offset-1 page-title-2">
						<h3>About</h3>
						<hr>
						<p>A passionate team of creative &amp; innovative minds.</p>
					</div>

					<!-- Who We Are-->
					<div data-scroll-reveal="enter top and move 50px over 1.2s" class="col-sm-4 col-sm-offset-1">
						<h5>Who We Are</h5>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer a elit turpis. Phasellus non varius mi.</p>
					</div> 

					<!-- Goals -->
					<div data-scroll-reveal="enter bottom and move 50px over 1.2s" class="col-sm-6">
						<h5>Goals</h5>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer a elit turpis. Phasellus non varius mi. Nam bibendum mauris at sollicitudin lacinia. </p>
					</div>

					<!-- The Team -->
					<div data-scroll-reveal="enter bottom and move 50px over 1.2s" class="col-sm-10 col-sm-offset-1">
						<h5>The Team</h5>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer a elit turpis. Phasellus non varius mi. Nam bibendum mauris at sollicitudin lacinia. Vestibulum blandit nibh neque, id consequat mi vestibulum eu. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer a elit turpis. </p>
					</div>

				</div>

			</div>

		</div>

	</section>
	<!-- End About Us -->

	<!-- Begin Team -->
	<section id="section4">

		<div class="team">

			<div class="container">

				<div class="row">

					<!-- Page Title -->
					<div class="col-lg-10 col-lg-offset-1 page-title">
						<h3>The Team</h3>
						<hr>
						<p>Small, but an <b>effective weapon</b>.</p>
					</div>

					<div id="content-holder">

						<!-- Team Member 1 -->
						<div data-scroll-reveal="enter top and move 50px over 1s" class="col-sm-3 team-member-holder">
							<img src="img/team-member-1.jpg" alt="...">
							<div class="team-info-holder">
								<h3 class="team-name">Johnathan Adams</h3>
								<p class="team-job">Developer</p>
							</div>
							<div class="team-about">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integerelit zyzz alovea.
								<div style="padding-top:15px;">
									<div class="social-icon-holder">
						                <a href="#"><span class="ion-social-twitter social-icon"></span></a>
						            </div>
						            <div class="social-icon-holder">
						                <a href="#"><span class="ion-social-facebook social-icon"></span></a>
						            </div>
						            <div class="social-icon-holder">
						                <a href="#"><span class="ion-social-dribbble social-icon"></span></a>
						            </div>
					 			</div>
							</div>
						</div>

						<!-- Team Member 2 -->
						<div data-scroll-reveal="enter bottom and move 50px over 1s" class="col-sm-3 team-member-holder">
							<img src="img/team-member-2.jpg" alt="...">
							<div class="team-info-holder">
								<h3 class="team-name">Steven Adams</h3>
								<p class="team-job">Designer</p>
							</div>
							<div class="team-about">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integerelit zyzz alovea.
								<div style="padding-top:15px;">
									<div class="social-icon-holder">
						                <a href="#"><span class="ion-social-twitter social-icon"></span></a>
						            </div>
						            <div class="social-icon-holder">
						                <a href="#"><span class="ion-social-facebook social-icon"></span></a>
						            </div>
						            <div class="social-icon-holder">
						                <a href="#"><span class="ion-social-dribbble social-icon"></span></a>
					            	</div>
					 			</div>
							</div>
						</div>

						<!-- Team Member 3 -->
						<div data-scroll-reveal="enter top and move 50px over 1s" class="col-sm-3 team-member-holder">
							<img src="img/team-member-3.jpg" alt="...">
							<div class="team-info-holder">
								<h3 class="team-name">Adam Lean</h3>
								<p class="team-job">Developer</p>
							</div>
							<div class="team-about">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integerelit zyzz alovea.
								<div style="padding-top:15px;">
									<div class="social-icon-holder">
						                <a href="#"><span class="ion-social-twitter social-icon"></span></a>
						            </div>
						            <div class="social-icon-holder">
						                <a href="#"><span class="ion-social-facebook social-icon"></span></a>
						            </div>
						            <div class="social-icon-holder">
						                <a href="#"><span class="ion-social-dribbble social-icon"></span></a>
						            </div>
					 			</div>
							</div>
						</div>

						<!-- Team Member 4 -->
						<div data-scroll-reveal="enter bottom and move 50px over 1s" class="col-sm-3 team-member-holder">
							<img src="img/team-member-4.jpg" alt="...">
							<div class="team-info-holder">
								<h3 class="team-name">Christine Love</h3>
								<p class="team-job">Accounting</p>
							</div>
							<div class="team-about">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integerelit zyzz alovea.
								<div style="padding-top:15px;">
									<div class="social-icon-holder">
						                <a href="#"><span class="ion-social-twitter social-icon"></span></a>
						            </div>
						            <div class="social-icon-holder">
						                <a href="#"><span class="ion-social-facebook social-icon"></span></a>
						            </div>
						            <div class="social-icon-holder">
						                <a href="#"><span class="ion-social-dribbble social-icon"></span></a>
					            	</div>
					 			</div>
							</div>
						</div>

					</div>

				</div>

			</div>

		</div>

	</section>
	<!-- End Team -->

	<!-- Begin Services -->
	<section id="section5">

		<div class="services">

			<div class="container">

				<div class="row">

					<!-- Page Title -->
					<div class="col-lg-10 col-lg-offset-1 page-title-2">
						<h3>Services</h3>
						<hr>
						<p>We can help you with a variety of projects.</p>
					</div>

					<div class="col-lg-6 col-lg-offset-3" style="text-align: center;">

						<!-- Nav --> 
						<ul class="nav nav-tabs" style="display:inline-block;">
						  <li class="active">
							  	<a href="#design" data-toggle="tab">
							  		<div class="services-icon-holder">
							  			<span class="ion-ios7-browsers-outline services-icon"></span>
							  			<p>Design</p>
							  		</div>
							  	</a>
						  </li>
						  <li>
							  	<a href="#eshop" data-toggle="tab">
							  		<div class="services-icon-holder">
							  			<span class="ion-ios7-cart-outline services-icon"></span>
							  			<p>eShop</p>
							  		</div>
							  	</a>
						  </li>
						  <li>
							  	<a href="#social" data-toggle="tab">
							  		<div class="services-icon-holder">
							  			<span class="ion-ios7-chatbubble-outline services-icon"></span>
							  			<p>Social</p>
							  		</div>
							  	</a>
						  </li>
						  <li>
							  	<a href="#stats" data-toggle="tab">
							  		<div class="services-icon-holder">
							  			<span class="ion-arrow-graph-up-right services-icon"></span>
							  			<p>Stats</p>
							  		</div>
							  	</a>
						  </li>
						  <li>
							  	<a href="#photo" data-toggle="tab">
							  		<div class="services-icon-holder">
							  			<span class="ion-ios7-camera-outline services-icon"></span>
							  			<p>Photo</p>
							  		</div>
							  	</a>
						  </li>
						  <li>
							 	<a href="#cloud" data-toggle="tab">
							 		<div class="services-icon-holder">
							 			<span class="ion-ios7-cloud-outline services-icon"></span>
							 			<p>Cloud</p>
							  		</div>
							 	</a>
						  </li>
						</ul>

					</div>

					<!-- Content -->
					<div class="col-lg-8 col-lg-offset-2">
						<div class="tab-content">
						  <div class="tab-pane fade active in" id="design">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer a elit turpis. Phasellus non varius mi. Nam bibendum in mauris at sollicitudin lacinia. Vestibulum blandit nibh neque, id consequat mi vestibulum eu. Lorem ipsum dolor sit zyzz.</div>
						  <div class="tab-pane fade" id="eshop">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eros velit, lobortis id odio sed, elementum vestibulum justo. Praesent nec leo leo. Nulla vel volutpat nunc, eget lobortis velit. Nunc facilisis augue risus, eget tristique lorem vehicula vel.</div>
						  <div class="tab-pane fade" id="social">Maecenas id enim at mauris aliquet aliquet. Nunc gravida venenatis urna quis mollis. Integer eget eros condimentum augue dapibus faucibus. Donec placerat nulla nec nisi sodales, nec ullamcorper nunc luctus. Aliquam erat volutpat.</div>
						  <div class="tab-pane fade" id="stats">Nunc rhoncus gravida turpis nec scelerisque. Cras hendrerit vitae diam eget pharetra. Nam quam lacus, dignissim sed metus non, egestas gravida magna. Vivamus mattis vulputate lectus non faucibus. Pellentesque interdum nisza.</div>
						  <div class="tab-pane fade" id="photo">Nullam hendrerit tellus vitae nisi pulvinar, eu faucibus ligula sollicitudin. Aenean lacinia imperdiet orci eu posuere. Quisque volutpat lacus vitae sollicitudin volutpat. Nunc pharetra quis lorem elementum mattis. Nulla nibh nunc.</div>
						  <div class="tab-pane fade" id="cloud">Integer ultricies convallis blandit. Ut in volutpat velit. Nam ac tempor turpis. Donec at leo dignissim, tincidunt urna nec, aliquet est. Vivamus mi odio, adipiscing vel aliquam in, viverra vitae sapien. Integer sagittis nisl quis purus matti.</div>
						</div> 
					</div>

				</div>

			</div>

		</div>

	</section>
	<!-- End Services -->

	<!-- Begin Quote -->
	<div class="quote" data-top-bottom="background-position: 50% -200px;" data-bottom-top="background-position: 50% 100px;" data-anchor-target=".quote-content">

		<div class="container">

			<div class="row">

				<div class="col-lg-12">
					<p data-scroll-reveal="enter top and move 50px over 1s" class="quote-content">
						It takes 20 years to build a reputation and five minutes to ruin it. If you think about that, you'll do things differently.
					</p>
					<a data-scroll-reveal="enter bottom and move 50px over 1s" href="#" data-id="section3" class="btn btn-default bolt-quote-name">- Warren Buffett</a>
				</div>

			</div>

		</div>

	</div>
	<!-- End Quote -->

	<!-- Begin Contact -->
	<section id="section6">

		<div class="contact">

			<div class="container">

				<!-- Page Title -->
				<div class="col-lg-10 col-lg-offset-1 page-title">
					<h3>Contact</h3>
					<hr>
					<p>Get in touch with us, for business or a quick hello!</p>
				</div>

				<!-- Address -->
				<div class="col-md-5 col-md-offset-1">
					<p class="contact-info">
						<a href="https://www.google.com/maps/@36.125,-115.175,11z" target="_blank"><em>400 N. 3rd Street, New York, NY, 10003 USA</em></a>
					</p>
				</div>

				<!-- Phone Number -->
				<div class="col-md-2">
					<p class="contact-info">+17004234215</p>
				</div>

				<!-- Email -->
				<div class="col-md-3">
					<p class="contact-info-email"><a href="mailto:ineedtotalktoyou@bolt.com"><em>ineedtotalktoyou@bolt.com</em></a></p>
				</div>

				<!-- Form -->
				<form name="contactform" method="post" action="php/mailer.php" class="form-horizontal" role="form">

					<div data-scroll-reveal="enter top and move 50px over 1.5s" class="col-md-5">
						<div class="form-group">
							<div class="col-md-12">
								<input type="text" class="form-control" id="inputName" name="inputName" placeholder="Name">
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-12">
								<input type="text" class="form-control" id="inputEmail" name="inputEmail" placeholder="Email">
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-12">
								<input type="text" class="form-control" id="inputSubject" name="inputSubject" placeholder="Subject">
							</div>
						</div>
					</div>
					
					<div data-scroll-reveal="enter bottom and move 50px over 1.5s" class="col-md-7" >
						<div class="form-group">
							<div class="col-md-12">
								<textarea class="form-control form-control-message" rows="5" id="inputMessage" name="inputMessage" placeholder="Message"></textarea>
							</div>
						</div>
						<div data-scroll-reveal="enter bottom and move 50px over 1.7s" class="form-group">
							<div class="col-md-12">
								<button type="submit" class="btn btn-default bolt-button-send">
									Send
								</button>
							</div>
						</div>
					</div>

				</form>

			</div>

		</div>

	</section>
	<!-- End Contact -->

<?php include('inc/footer.php'); ?>