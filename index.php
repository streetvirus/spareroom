<?php include('includes/head.php'); ?>

		<div id="carousel" class="jumbotron carousel slide carousel-fade">
			<ol class="carousel-indicators nav align-center">
				<li data-target="#carousel" data-slide-to="0" class="active"></li>
				<li data-target="#carousel" data-slide-to="1"></li>
				<li data-target="#carousel" data-slide-to="2"></li>
				<li data-target="#carousel" data-slide-to="3"></li>
			</ol>
			<!-- Carousel items -->
			<div class="carousel-inner">
				<div class="active item"><img src="media/home_01.jpg"></div>
				<div class="item"><img src="media/home_02.jpg"></div>
				<div class="item"><img src="media/home_03.jpg"></div>
				<div class="item"><img src="media/home_04.jpg"></div>
			</div>
			<?php /* <!-- Carousel nav -->
			<a class="carousel-control left" href="#carousel" data-slide="prev">&lsaquo;</a>
			<a class="carousel-control right" href="#carousel" data-slide="next">&rsaquo;</a> */ ?>
		</div><!-- #carousel -->

		<div id="wrapper">
			<div id="wrap">
				<div class="container">

					<?php include('includes/header.php'); ?>

					<div class="row">
						<div class="span12" id="landing">
						</div><!-- #landing -->
					</div>
					<div class="row" id="main">
						<div class="span12">
							<a href="#main" class="arrow-down align-center"><img src="assets/img/arrow.png" alt="Navigate to Content"></a>
							<hr class="hr-short">
						</div>
					</div>
					<div class="row">
						<div class="span6 offset3 align-center biography">
							<p>The Spare Room is a gaming parlor and cocktail lounge located in the Hollywood Roosevelt Hotel.
							It is a place built on social interaction, that brings groups together by their appreciation and passion for
							innovative cocktails, music, design, and the camaraderie of gaming. A place where the attention to detail exudes
							a sense of authenticity, permanence and comfort. A place driven by the quality of the product and heightened by
							the service with which it is provided. A place built to endure as long as the games that are played in it. Enjoy... </p>
							<br>
							<div class="row">
								<div class="span6 address well">
									Nightly 8pm - 2am CLOSED TUESDAYS<br>
									HOLLYWOOD ROOSEVELT HOTEL<br>
									&#0151; MEZZANINE LEVEL &#0151;<br>
									<a href="&#109;&#097;&#105;&#108;&#116;&#111;:&#114;&#101;&#115;&#101;&#114;&#118;&#097;&#116;&#105;&#111;&#110;&#115;&#064;&#115;&#112;&#097;&#114;&#101;&#114;&#111;&#111;&#109;&#104;&#111;&#108;&#108;&#121;&#119;&#111;&#111;&#100;&#046;&#099;&#111;&#109;?&#083;&#117;&#098;&#106;&#101;&#099;&#116;=&#084;&#104;&#101;%&#050;&#048;&#083;&#112;&#097;&#114;&#101;%&#050;&#048;&#082;&#111;&#111;&#109;%&#051;&#065;%&#050;&#048;&#082;&#101;&#115;&#101;&#114;&#118;&#097;&#116;&#105;&#111;&#110;%&#050;&#048;&#082;&#101;&#113;&#117;&#101;&#115;&#116;&#038;&#066;&#111;&#100;&#121;=&#068;&#097;&#116;&#101;%&#051;&#065;%&#050;&#048;%&#048;&#065;&#084;&#105;&#109;&#101;%&#051;&#065;%&#050;&#048;%&#048;&#065;&#067;&#111;&#109;&#109;&#101;&#110;&#116;&#115;%&#051;&#065;%&#050;&#048;">
										&#082;&#101;&#115;&#101;&#114;&#118;&#097;&#116;&#105;&#111;&#110;&#115;&#064;&#083;&#112;&#097;&#114;&#101;&#082;&#111;&#111;&#109;&#072;&#111;&#108;&#108;&#121;&#119;&#111;&#111;&#100;&#046;&#099;&#111;&#109;
									</a><br>
									323 769 7296
								</div>
							</div>
						</div><!-- #main -->
					</div>
<?php

/*


					<div id="openTable" class="oTP">
						<style>
							.oTP {
								padding: 0px;
								position: absolute;
								top: 180px;
								left: 50%;
								width: 300px;
								margin-left: -170px;
								z-index: 100;
								background: url("assets/css/fancybox/fancybox_overlay.png") repeat 0 0;
								border-radius: 30px;
								padding: 20px;
								overflow: hidden;
							}

							@media screen and (max-width: 767px){
								.oTP {
									top: 355px;
								}
							}

							.oTP > h2,
							.oTP > h2 small {
								color: #333;
								line-height: 1;
								text-align: center;
								margin: 0;
								padding: 0;
								color: #FCF0CC;
								line-height: 1;
								text-align: center;
								margin: 0;
								padding: 0;
								text-shadow: 2px 2px 1px #333;
							}

							.oTP > h2 small {
								display: block;
								line-height: 16px;
								margin-bottom: 10px;
								margin-top: 6px;
								font-size: 14px;
							}

							.oTP h2 small {
								font-size: 14px;
							}

							.oTP #OT_form {
								margin: 0 auto 10px;
								width: 166px ! important;
							}

							.oTP .OT_ExtLink {
								text-align: center;
								margin: 0 auto;
								color: #FCF0CC ! important;
								text-shadow: 2px 2px 1px #333;
								width: 166px ! important;
							}

							.oTP input {
								padding: 1px 3px 0px 5px ! important;
								font-size: 12px;
								border: 1px solid #3B1C00;
								color: #42382c;
							}

							.OT_title,
							.OT_subtitle {
								line-height: 1;
								padding-bottom: 10px ! important;
							}

							h2 a {
								color: #FCF0CC;
								display: block;
								padding-top: 5px;
							}

							h2 a:hover {
								color: #9e0039;
							}
						</style>

						<h2>Guns & Butter<br />
							<small>Exclusive Pop-Up: 6 Course Tasting Experience<br />
							November 22 - 26<br />
							7PM or 9PM <br />
							$80 <br />
							<a href="/media/guns_butter_flyer.jpg" class="fancybox">{ View Flyer }</a></small></h2>

						<!-- #####################SEARCH WIDGET CODE FOR Guns & Butter at The Spare Room Hollywood#####################-->
						<script type="text/javascript" src="http://www.opentable.com/frontdoor/default.aspx?rid=116770&restref=116770&hover=1"></script>
						<a class="OT_ExtLink" href="http://www.opentable.com/single.aspx?rid=116770&restref=116770">Guns & Butter at The Spare Room Hollywood Reservations</a>
					</div>
					*/ ?>
					<div class="row card-holder">
						<div class="span12 align-center" id="links">
							<div class="row">
								<div class="span5 card card-reserve" id="reserve">
									<img src="media/reservations.jpg" alt="Book a Reservation">
									<!-- <h2>Reserve</h2> -->
									<div class="excerpt span5">
 										<a href="&#109;&#097;&#105;&#108;&#116;&#111;:&#114;&#101;&#115;&#101;&#114;&#118;&#097;&#116;&#105;&#111;&#110;&#115;&#064;&#115;&#112;&#097;&#114;&#101;&#114;&#111;&#111;&#109;&#104;&#111;&#108;&#108;&#121;&#119;&#111;&#111;&#100;&#046;&#099;&#111;&#109;?&#083;&#117;&#098;&#106;&#101;&#099;&#116;=&#084;&#104;&#101;%&#050;&#048;&#083;&#112;&#097;&#114;&#101;%&#050;&#048;&#082;&#111;&#111;&#109;%&#051;&#065;%&#050;&#048;&#082;&#101;&#115;&#101;&#114;&#118;&#097;&#116;&#105;&#111;&#110;%&#050;&#048;&#082;&#101;&#113;&#117;&#101;&#115;&#116;&#038;&#066;&#111;&#100;&#121;=&#068;&#097;&#116;&#101;%&#051;&#065;%&#050;&#048;%&#048;&#065;&#084;&#105;&#109;&#101;%&#051;&#065;%&#050;&#048;%&#048;&#065;&#067;&#111;&#109;&#109;&#101;&#110;&#116;&#115;%&#051;&#065;%&#050;&#048;"><?php /* data-fancybox-type="iframe" class="popup" href="http://streetvirusdev.com/tsr/reservations" */ ?>
											<h4>Click to E-Mail<br>&#082;&#101;&#115;&#101;&#114;&#118;&#097;&#116;&#105;&#111;&#110;&#115;&#064;&#083;&#112;&#097;&#114;&#101;&#082;&#111;&#111;&#109;&#072;&#111;&#108;&#108;&#121;&#119;&#111;&#111;&#100;&#046;&#099;&#111;&#109;</h4><?php /*<h4>Online Reservations</h4>*/ ?>
											<h2>Reserve</h2>
											<p>Call: 323 769 7296</p><?php /*Coming Soon</p>*/ ?>
										</a>
									</div>
								</div>
								<div class="span7 card card-menu" id="menu">
									<img src="media/menu-graphic.png" alt="Fall Menu">
									<!-- <h2>Menu</h2> -->
									<div class="excerpt span7">
										<a href="media/Menu_Main_Summer_Mechanical_WEB.pdf" target="_blank">
											<!-- <h4>View Our New Seasonal Items</h4> -->
											<h2>Menu</h2>
											<!-- <p>Winter 2015 Menu</p> -->
										</a>
									</div>
								</div>
							</div>
							<div class="row">
								<style type="text/css">
									.card-calendar {
										margin: 0 auto 30px;
										float: none;
										background-size: cover;
										background-color: black;
										background-position: center;
									}
								</style>
								<div class="span7 card card-calendar" id="calendar">
									<!--img src="media/August-2.jpg" alt="Calendar" -->
									<img src="media/TIKI_September_2016.jpg" alt="Calendar" />
									<!-- <h2>Calendar</h2> -->
									<div class="excerpt span7">
										<a href="media/TIKI_September_2016.jpg" class="fancybox" rel="calendar-flyers" style="cursor:pointer;">
											<h4>2016</h4>
											<h2>EVENTS</h2>
											<p>Click to View</p>
										</a>
									</div>
								</div>
								<?php /*
                <a href="media/TIKI_May2016.jpg" class="fancybox" rel="calendar-flyers" style="display:none;"></a>
                <a href="media/08-20-2015.jpeg" class="fancybox" rel="calendar-flyers" style="display:none;"></a>
                <a href="media/08-27-2015.jpeg" class="fancybox" rel="calendar-flyers" style="display:none;"></a>
                <a href="media/08-31-2015.jpeg" class="fancybox" rel="calendar-flyers" style="display:none;"></a>
                */ ?>
       					
       					<?php
       						/*
									<div class="span12 card card-goods" id="goods">
										<img src="media/fraggle_cards.jpg" alt="Fraggle Rock Cards for Sale">
										<!-- <h2>Goods</h2> -->
										<div class="excerpt span5">
											<a href="http://shop.spareroomhollywood.com/products/fraggle-cards" target="_blank">
												<h4>Fraggle Rock<br>+<br>The Spare Room</h4>
												<h2>Goods</h2>
												<p>Visit Our Store</p>
											</a>
										</div>
									</div>
									*/
								?>
							</div>
						</div>
					</div><!-- #links -->
					<div class="row gallery-holder">
						<div class="span12 align-center" id="gallery">
							<h3>Gallery</h3>
							<div class="row gallery">
								<div class="span4">
									<div class="row">
										<div class="span4 gallery-set">
											<span class="set-1">
												<a href="gallery/01.jpg" rel="Spareroom-Gallery" class="active gallery-img"><img src="gallery/01.jpg"></a>
												<a href="gallery/02.jpg" rel="Spareroom-Gallery" class="gallery-img"><img src="gallery/02.jpg"></a>
											</span>
										</div>
									</div>
									<div class="row">
										<div class="span4 gallery-set">
											<span class="set-2">
												<a href="gallery/03.jpg" rel="Spareroom-Gallery" class="active gallery-img"><img src="gallery/03.jpg"></a>
												<a href="gallery/04.jpg" rel="Spareroom-Gallery" class="gallery-img"><img src="gallery/04.jpg"></a>
											</span>
										</div>
									</div>
								</div>
								<div class="span8">
									<div class="row">
										<div class="span4 gallery-set">
											<span class="set-3">
												<a href="gallery/05.jpg" rel="Spareroom-Gallery" class="active gallery-img"><img src="gallery/05.jpg"></a>
												<a href="gallery/06.jpg" rel="Spareroom-Gallery" class="gallery-img"><img src="gallery/06.jpg"></a>
											</span>
										</div>
										<div class="span4 gallery-set">
											<span class="set-4">
												<a href="gallery/07.jpg" rel="Spareroom-Gallery" class="active gallery-img"><img src="gallery/07.jpg"></a>
												<a href="gallery/08.jpg" rel="Spareroom-Gallery" class="gallery-img"><img src="gallery/08.jpg"></a>
											</span>
										</div>
									</div>
									<div class="row">
										<div class="span5 gallery-set">
											<span class="set-5">
												<a href="gallery/09.jpg" rel="Spareroom-Gallery" class="active gallery-img"><img src="gallery/09.jpg"></a>
												<a href="gallery/10.jpg" rel="Spareroom-Gallery" class="gallery-img"><img src="gallery/10.jpg"></a>
											</span>
										</div>
										<div class="span3 gallery-set">
											<span class="set-6">
												<a href="gallery/11.jpg" rel="Spareroom-Gallery" class="active gallery-img"><img src="gallery/11.jpg"></a>
												<a href="gallery/12.jpg" rel="Spareroom-Gallery" class="gallery-img"><img src="gallery/12.jpg"></a>
											</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div><!-- #gallery -->

					<div class="row social-holder">
						<div class="span12 align-center" id="social">
							<h3>Social</h3>
							<div class="row">
								<div class="span4 offset1 twitter-wrap">
									<h5><a href="https://twitter.com/SpareRoomHwood" target="_blank"><img src="assets/img/social_twitter.png"></a></h5>
									<div class="twitter thumbnail inset-shadow">
										<table class="table twitter align-left table-striped">
											<tbody>

												<?php include('includes/twitter.php'); ?>
											</tbody>
										</table>
									</div><!-- .twitter -->
								</div>
								<div class="offset2 span4 instagram-wrap">
									<h5><a href="https://www.facebook.com/SpareRoomHwood" target="_blank"><img src="assets/img/social_instagram.png"></a></h5>
									<div class="instagram"></div>
								</div>
							</div>
						</div>
					</div><!-- #social -->

				</div><!-- .container -->
				<div id="push"></div>
			</div><!-- #wrap -->

			<?php include('includes/footerlinks.php'); ?>

		</div><!-- #wrapper -->

<?php include('includes/footer.php'); ?>




