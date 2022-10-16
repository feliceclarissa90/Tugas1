<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="img/caramel.png" type="image/png">
        <title>Curriculum Vitae Felice Clarissa</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="vendors/linericon/style.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css">
        <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
        <link rel="stylesheet" href="vendors/animate-css/animate.css">
        <link rel="stylesheet" href="vendors/flaticon/flaticon.css">
        <!-- main css -->
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
    </head>

	<style>
body {
  color: #213546;
  background: #ffffff;
  font-family: Arial, Helvetica, sans-serif;
}

.title {
  position: relative;
  margin-top: 30px;
  width: 100%;
  text-align: center;
}

.timeline {
  position: relative;
  width: 100%;
  padding: 30px 0;
}

.timeline .timeline-container {
  position: relative;
  width: 100%;
}

.timeline .timeline-end,
.timeline .timeline-start,
.timeline .timeline-year {
  position: relative;
  width: 100%;
  text-align: center;
  z-index: 1;
}

.timeline .timeline-end p,
.timeline .timeline-start p,
.timeline .timeline-year p {
  display: inline-block;
  font-weight: 700;
  width: 80px;
  height: 80px;
  margin: 0;
  padding: 30px 0;
  text-align: center;
  background: linear-gradient(to left, #8490ff 0%, #62bdfc 48%, #8490ff 99%);
  border-radius: 100px;
  box-shadow: 0 0 5px rgba(0, 0, 0, .4);
  color: #ffffff;
  font-size: 14px;
  text-transform: uppercase;
}

.timeline .timeline-year {
  margin: 5px 0;
}

.timeline .timeline-continue {
  position: relative;
  width: 100%;
  padding: 1px 0;
}

.timeline .timeline-continue::after {
  position: absolute;
  content: "";
  width: 1px;
  height: 100%;
  top: 0;
  left: 50%;
  margin-left: -1px;
  background: gray;
}

.timeline .row.timeline-left,
.timeline .row.timeline-right .timeline-date {
  text-align: right;
}

.timeline .row.timeline-right,
.timeline .row.timeline-left .timeline-date {
  text-align: left;
}

.timeline .timeline-date {
  font-size: 14px;
  font-weight: 600;
  margin: 41px 0 0 0;
}

.timeline .timeline-date::after {
  content: '';
  display: block;
  position: absolute;
  width: 14px;
  height: 14px;
  top: 45px;
  background: linear-gradient(gray, black);
  box-shadow: 0 0 5px rgba(0, 0, 0, .4);
  border-radius: 15px;
  z-index: 1;
}

.timeline .row.timeline-left .timeline-date::after {
  left: -7px;
}

.timeline .row.timeline-right .timeline-date::after {
  right: -7px;
}

.timeline .timeline-box,
.timeline .timeline-launch {
  position: relative;
  display: inline-block;
  margin: 15px;
  padding: 20px;
  border: 1px solid #dddddd;
  border-radius: 6px;
  background: #ffffff;
}

.timeline .timeline-launch {
  width: 100%;
  margin: 15px 0;
  padding: 0;
  border: none;
  text-align: center;
  background: transparent;
}

.timeline .timeline-box::after,
.timeline .timeline-box::before {
  content: '';
  display: block;
  position: absolute;
  width: 0;
  height: 0;
  border-style: solid;
}

.timeline .row.timeline-left .timeline-box::after,
.timeline .row.timeline-left .timeline-box::before {
  left: 100%;
}

.timeline .row.timeline-right .timeline-box::after,
.timeline .row.timeline-right .timeline-box::before {
  right: 100%;
}

.timeline .timeline-launch .timeline-box::after,
.timeline .timeline-launch .timeline-box::before {
  left: 50%;
  margin-left: -10px;
}

.timeline .timeline-box::after {
  top: 26px;
  border-color: transparent transparent transparent #ffffff;
  border-width: 10px;
}

.timeline .timeline-box::before {
  top: 25px;
  border-color: transparent transparent transparent #dddddd;
  border-width: 11px;
}

.timeline .row.timeline-right .timeline-box::after {
  border-color: transparent #ffffff transparent transparent;
}

.timeline .row.timeline-right .timeline-box::before {
  border-color: transparent #dddddd transparent transparent;
}

.timeline .timeline-launch .timeline-box::after {
  top: -20px;
  border-color: transparent transparent #dddddd transparent;
}

.timeline .timeline-launch .timeline-box::before {
  top: -19px;
  border-color: transparent transparent #ffffff transparent;
  border-width: 10px;
  z-index: 1;
}

.timeline .timeline-box .timeline-icon {
  position: relative;
  width: 40px;
  height: auto;
  float: left;
}

.timeline .timeline-icon i {
  font-size: 25px;
  color: gray;
}

.timeline .timeline-box .timeline-text {
  position: relative;
  width: calc(100% - 40px);
  float: left;
}

.timeline .timeline-launch .timeline-text {
  width: 100%;
}

.timeline .timeline-text h3 {
  font-size: 16px;
  font-weight: 600;
  margin-bottom: 3px;
}

.timeline .timeline-text p {
  font-size: 14px;
  font-weight: 400;
  margin-bottom: 0;
}

@media (max-width: 768px) {
  .timeline .timeline-continue::after {
    left: 40px;
  }

  .timeline .timeline-end,
  .timeline .timeline-start,
  .timeline .timeline-year,
  .timeline .row.timeline-left,
  .timeline .row.timeline-right .timeline-date,
  .timeline .row.timeline-right,
  .timeline .row.timeline-left .timeline-date,
  .timeline .timeline-launch {
    text-align: left;
  }

  .timeline .row.timeline-left .timeline-date::after,
  .timeline .row.timeline-right .timeline-date::after {
    left: 47px;
  }

  .timeline .timeline-box,
  .timeline .row.timeline-right .timeline-date,
  .timeline .row.timeline-left .timeline-date {
    margin-left: 55px;
  }

  .timeline .timeline-launch .timeline-box {
    margin-left: 0;
  }

  .timeline .row.timeline-left .timeline-box::after {
    left: -20px;
    border-color: transparent #ffffff transparent transparent;
  }

  .timeline .row.timeline-left .timeline-box::before {
    left: -22px;
    border-color: transparent #dddddd transparent transparent;
  }

  .timeline .timeline-launch .timeline-box::after,
  .timeline .timeline-launch .timeline-box::before {
    left: 30px;
    margin-left: 0;
  }
}
</style>

    <body>
        
        <!--================Header Menu Area =================-->

        <header class="header_area">
            <div class="main_menu" id="mainNav">
            	<nav class="navbar navbar-expand-lg navbar-light">
					<div class="container box_1620">
						<!-- Brand and toggle get grouped for better mobile display -->
						<a class="navbar-brand logo_h" href="welcome"><b>Felice</b></a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
							<ul class="nav navbar-nav menu_nav ml-auto">
								<li class="nav-item"><a class="nav-link" href="welcome">Welcome</a></li> 
								<li class="nav-item"><a class="nav-link" href="profile">Profile</a></li> 
								<li class="nav-item active"><a class="nav-link" href="education">Education</a>
								<li class="nav-item"><a class="nav-link" href="experience">Experience</a>
								<li class="nav-item"><a class="nav-link" href="contact">Contact</a></li>
                <li class="nav-item"><a class="nav-link" href="lihatkrs">Lihat KRS</a></li>
              </ul>
						</div> 
					</div>
            	</nav>
            </div>
        </header>
        <!--================Header Menu Area ===	==============-->
        
        <!--================Welcome Area =================-->
		<section class="welcome_area p_120">
        	<div class="container">
        <div class="title">
			<h2>Educational Background</h2>
			
		  </div>
		  <div class="timeline">
			<div class="container">
			  <div class="row">
				<div class="col-lg-12">
				  <div class="timeline-container">
					<div class="timeline-end">
					  <p>2008</p>
					</div>
					<div class="timeline-continue">
		  
					  <div class="row timeline-right">
						<div class="col-md-6">

						</div>
						<div class="col-md-6">
						  <div class="timeline-box" style="height: 90px; width: 210px;">
							<div class="timeline-text">
							  <h3>Primary School</h3>
							  <p>at Sutomo 1 Medan</p>
							</div>
						  </div>
						</div>
					  </div>

					  <div class="row">
						<div class="col-12">
						  <div class="timeline-year">
							<p>2014</p>
						  </div>
						</div>
					  </div>
		  
					  <div class="row timeline-left">
				
						<div class="col-md-6">
						  <div class="timeline-box">
							<div class="timeline-text">
							  <h3>Junior Highschool</h3>
							  <p>at Sutomo 1 Medan</p>
							</div>
							<div class="timeline-icon d-md-block d-none">
							  <i class="fa fa-business-time"></i>
							</div>
						  </div>
						</div>
						<div class="col-md-6 d-md-block d-none">

						</div>
					  </div>
		  
					  <div class="row">
						<div class="col-12">
						  <div class="timeline-year">
							<p>2017</p>
						  </div>
						</div>
					  </div>
		  
					  <div class="row timeline-right">
						<div class="col-md-6">
					
						</div>
						<div class="col-md-6">
						  <div class="timeline-box" style="height: 90px; width: 220px;">
							<div class="timeline-text">
							  <h3>Senior Highschool</h3>
							  <p>at Sutomo 1 Medan</p>
							</div>
						  </div>
						</div>
					  </div>
		  

		
					</div>
					<div class="timeline-start">
					  <p>2020</p>
					</div>
					<div class="timeline-launch">
					  <div class="timeline-box">
						<div class="timeline-text">
						  <h3>Pursuing S1 Degree</h3>
						  <p>at Universitas Pelita Harapan</p>
						</div>
					  </div>
					</div>
				  </div>
				</div>
			  </div>
			</div>
		  </div>
			</div>
		</section>
        <!--================End Welcome Area =================-->
        
        
        <!--================Footer Area =================-->
        <footer class="footer_area p_120">
        	<div class="container">
        		<div class="row footer_inner">
        			<div class="col-lg-5 col-sm-6">
        				<aside class="f_widget ab_widget">
        					<div class="f_title">
        						<h3>About Me</h3>
        					</div>
        					<p>Penasaran ya? HAHAHA</p>
<p>Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved
</p>
        				</aside>
        			</div>
        			<div class="col-lg-5 col-sm-6">
        				<aside class="f_widget news_widget">
        					<div class="f_title">
        						<h3>Newsletter</h3>
        					</div>
        					<p>Stay updated with our latest trends</p>
        					<div id="mc_embed_signup">
                                <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="subscribe_form relative">
                                	<div class="input-group d-flex flex-row">
                                        <input name="EMAIL" placeholder="Enter email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address '" required="" type="email">
                                        <button class="btn sub-btn"><span class="lnr lnr-arrow-right"></span></button>		
                                    </div>				
                                    <div class="mt-10 info"></div>
                                </form>
                            </div>
        				</aside>
        			</div>
        			<div class="col-lg-2">
        				<aside class="f_widget social_widget">
        					<div class="f_title">
        						<h3>Follow Me</h3>
        					</div>
        					<p>Let us be social</p>
        					<ul class="list">
        						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
        						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
        						<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
        						<li><a href="#"><i class="fa fa-behance"></i></a></li>
        					</ul>
        				</aside>
        			</div>
        		</div>
        	</div>
        </footer>
        <!--================End Footer Area =================-->
        
        
        
        
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/popper.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/stellar.js"></script>
        <script src="vendors/lightbox/simpleLightbox.min.js"></script>
        <script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
        <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
        <script src="vendors/isotope/isotope-min.js"></script>
        <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="js/jquery.ajaxchimp.min.js"></script>
        <script src="vendors/counter-up/jquery.waypoints.min.js"></script>
        <script src="vendors/counter-up/jquery.counterup.min.js"></script>
        <script src="js/mail-script.js"></script>
        <!--gmaps Js-->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
        <script src="js/gmaps.min.js"></script>
        <script src="js/theme.js"></script>
    </body>
</html>