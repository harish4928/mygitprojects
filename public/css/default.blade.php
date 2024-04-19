<!DOCTYPE html>
<html lang="zxx">
	<head>
		<meta charset="utf-8" >
		<meta http-equiv="x-ua-compatible" content="ie=edge" >
		<title><?php echo $meta_title; ?> | NIPS Noida</title>
		<meta content="<?php echo $meta_description; ?>" name="description" >
		<meta content="<?php echo $meta_keyword; ?>" name="keywords" >
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
		<meta content="telephone=no" name="format-detection" >
		<meta name="HandheldFriendly" content="true" >
		<link rel="icon" type="image/x-icon" href="{{$base_url}}public/images/favicon.png" >
		<link rel="stylesheet" href="{{$base_url}}public/css/bootstrap.css" >
		<link rel="stylesheet" href="{{$base_url}}public/css/owl.carousel.css" >
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
		<link rel="canonical" href="{{ url()->current() }}">
		
	
	</head>
	<body>	
		<!--main layout-->
		<main class="layoutmain">
			<div class="topheaders">
				<div class="container">
					<div class="topheadcontainer">
						<div class="leftheadinfo">
							<div class="headinfowrap">
								<span class="fa fa-phone"></span>Call Us : <?php echo $commonRecords->mobile_no; ?>
							</div>
							<div class="headinfowrap">
								<span class="fa fa-envelope-o"></span>Email : <?php echo $commonRecords->telephone_no; ?>
							</div>
							<div class="headinfowrap">
								<span class="fa fa-bullhorn"></span>Public Disclosure
							</div>
						</div>
						<div class="toprighthead"> 
							<div class="topheadsocialicon">
								<a href="#"><span class="fa fa-facebook"></span></a>
								<a href="#"><span class="fa fa-youtube-play"></span></a>
								<a href="#"><span class="fa fa-instagram"></span></a>
							</div>
							<a href="#" class="topheadlinks">Admission Open</a>
						</div>
					</div>
				</div>
			</div>	
			<header class="headermain">
				<!-- nav -->
				<nav class="navbar navbar-expand-lg navbar-light navbarcustom">
					<div class="container ">
						<a class="navbar-brand" href="{{$base_url}}">
							<img src="<?php echo $base_url_img.'logo/'.$commonRecords->logo; ?>" alt="<?php echo $commonRecords->logo_alt; ?>"/>
						</a> 
						<div class="collapse navbar-collapse justify-content-end" id="navbarScroll">
							<ul class="navbar-nav my-2 my-lg-0">
								<li class="nav-item">
									<a class="nav-link <?php if($active_menu == 'home'){ echo 'active';} ?>" href="{{$base_url}}">Home</a>
								</li>
								<li class="nav-item dropdown">
									<a class="nav-link <?php if($active_menu == 'about'){ echo 'active';} ?>" href="#">About </a>
									<span class="openchildmnu"></span>
									<ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
										<li><a class="dropdown-item" href="{{$base_url}}school-overview">School Overview</a></li>
										<li><a class="dropdown-item" href="{{$base_url}}mission-vision">Mission & Vision</a></li>
										<li><a class="dropdown-item" href="{{$base_url}}managment-team">School Management Team</a></li>
										<li><a class="dropdown-item" href="{{$base_url}}chairmans-message">Chairman’s Message</a></li>
										<li><a class="dropdown-item" href="{{$base_url}}principals-message">Principal’s Message</a></li>
									</ul>
								</li>
								<li class="nav-item dropdown">
									<a class="nav-link <?php if($active_menu == 'admission'){ echo 'active';} ?>" href="#">Admission </a>
									<span class="openchildmnu"></span>
									<ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
										<li><a class="dropdown-item" href="{{$base_url}}why-nips">Why Us</a></li>
										<li><a class="dropdown-item" href="{{$base_url}}process-of-admission">Admission Procedure</a></li>
										<li><a class="dropdown-item" href="{{$base_url}}general-enquiry">Enquiry Form</a></li>
										<li><a class="dropdown-item" href="{{$base_url}}admission-form">Admission Form</a></li>
										<li><a class="dropdown-item" href="{{$base_url}}fee-structure">Fee Structure</a></li>
										<li><a class="dropdown-item" href="{{$base_url}}faqs">FAQ’s</a></li>
									</ul>
								</li>
								<li class="nav-item dropdown">
									<a class="nav-link <?php if($active_menu == 'academic'){ echo 'active';} ?>" href="#">Academic </a>
									<span class="openchildmnu"></span>
									<ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
	                                   <li><a class="dropdown-item" href="{{$base_url}}curriculum">Curriculum</a></li>
	                                   <li><a class="dropdown-item" href="{{$base_url}}esubject-combinations">Subject Combinations</a></li>
	                                   <li><a class="dropdown-item" href="{{$base_url}}exam-planner">Exam Planner</a></li>
	                                   <li><a class="dropdown-item" href="{{$base_url}}assessment-criteria">Assessment Criteria</a></li>
	                                   <li><a class="dropdown-item" href="{{$base_url}}criteria-for-awards">Criteria for Awards</a></li>
	                                   <li><a class="dropdown-item" href="{{$base_url}}results-x-xii">Results – X & XII</a></li>
	                                   <li><a class="dropdown-item" href="{{$base_url}}workshops-seminars">Workshops & Seminars</a></li>
									</ul>
								</li>
								<li class="nav-item dropdown">
									<a class="nav-link <?php if($active_menu == 'activities'){ echo 'active';} ?>" href="#">Activities </a>
									<span class="openchildmnu"></span>
									<ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
	                                   
									   <li><a class="dropdown-item" href="{{$base_url}}music-dance">Music & Dance</a></li>
									   <li><a class="dropdown-item" href="{{$base_url}}sports">Sports</a></li>
									   <li><a class="dropdown-item" href="{{$base_url}}art-craft">Art & Craft</a></li>
									   <li><a class="dropdown-item" href="{{$base_url}}public-speaking">Public Speaking</a></li>
									   <li><a class="dropdown-item" href="{{$base_url}}houses">Houses</a></li>
									   <li><a class="dropdown-item" href="{{$base_url}}excursion-picnic">Excursion & Picnic</a></li>
	
									</ul>
								</li>
								<li class="nav-item dropdown">
									<a class="nav-link <?php if($active_menu == 'campus'){ echo 'active';} ?>" href="#">Campus </a>
									<span class="openchildmnu"></span>
									<ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
									
										<li><a class="dropdown-item" href="{{$base_url}}facilities-infrastructure">Facilities & Infrastructure</a></li>
										<li><a class="dropdown-item" href="{{$base_url}}health-care">Health Care</a></li>
										<li><a class="dropdown-item" href="{{$base_url}}uniform">Uniform</a></li>
										<li><a class="dropdown-item" href="{{$base_url}}transport">Transport</a></li>
									</ul>
								</li>
								<li class="nav-item dropdown">
									<a class="nav-link <?php if($active_menu == 'parentscorner'){ echo 'active';} ?>" href="#">PARENTS CORNER </a>
									<span class="openchildmnu"></span>
									<ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
									     <li><a class="dropdown-item" href="https://nipsportal.radicallogix.com/radnips/users/login">Fee Portal</a></li>
										<li><a class="dropdown-item" href="{{$base_url}}guidelines-for-parents">Guidelines for Parents</a></li>
										<li><a class="dropdown-item" href="{{$base_url}}feedback">FeedBack</a></li>
									</ul>
								</li>
															
								<li class="nav-item">
									<a class="nav-link <?php if($active_menu == 'home'){ echo 'gallery';} ?>" href="{{$base_url}}gallery">Gallery</a>
								</li>
								<li class="nav-item">
									<a class="nav-link <?php if($active_menu == 'contact-us'){ echo 'active';} ?>" href="{{$base_url}}contact-us">Contact Us</a>
								</li>
								<!-- <li class="nav-item show-mobile">
									<a class="nav-link" href="#">
									</a>
								</li> -->
							</ul>
						</div>
						<div class="navbar-toggler menubaar">
							<span></span>
							<span></span>
							<span></span>
						</div>
					</div>
				</nav>
				<!--/ nav -->
			</header>
		@yield('content')
		
	<!--footer-->
			<footer>
				<div class="requestfromain">
					<div class="container">
						<div class="row justify-content-center">
							<div class="col-md-10 col-sm-12">
								<div class="footerfromain">
									<div class="footerfrmtext">
										<span>Get in touch with us</span>
										<h3>Are you ready to take the next step?</h3>
									</div>
									<div class="footerfrmbox">
										<form action="#" method="#">
											<div class="footerfrmfield">
												<input type="text" placeholder="Full Name">
											</div>
											<div class="footerfrmfield">
												<input type="text" placeholder="Email Address">
											</div>
											<div class="footerfrmfield">
												<input type="text" placeholder="City">
											</div>
											<div class="footerfrmfield">
												<input type="text" placeholder="Contact Number">
											</div>
											<div class="footerfrmfield">
												<button type="submit" class="footersbmitbtn">Request CAllback</button>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="footermiddle">
					<?php echo $commonRecords->footer_text; ?>
					<!--/end footer-->
				</footer>
				<!--/footer-->
				</div>
			<!--/end home middle -->


			<!--page load popup-->
			<div id="popupModal" class="modal fade">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="popupics">
									<img alt="" src="images/popup-pic.jpg" class="img-fluid">
								</div>
								
					<div class="modal-header explores">
						<h5 class="modal-title">Enquiry Form</h5>
						<span type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">
								<svg viewport="0 0 12 12" version="1.1" xmlns="http://www.w3.org/2000/svg">
									<line x1="1" y1="11" x2="11" y2="1" stroke="black" stroke-width="2"></line>
									<line x1="1" y1="1" x2="11" y2="11" stroke="black" stroke-width="2"></line>
								</svg>
							</span>
						</span>
					</div>
					<div class="modal-body">
						<form method="POST" action="http://demo.magetrue.com/development/youngmindz-demo/App%5CHttp%5CControllers%5CFrontendformstore/popUpEnquery" accept-charset="UTF-8" id="popup-form" class="enquirefrm" enctype="multipart/form-data"><input name="_token" type="hidden" value="3qmyPvZtdt34E1wzUeRZaoHeZAMClqTrcuxWWrzX">
						
							<div class="row">
								
								<div class="col-md-6">
									<div class="form-floating">
										<input type="text" class="form-control" id="pop_name" placeholder="Name" name="con_name">
									</div>
								</div>
								<div class="col-6">
									<div class="form-floating">
										<input type="text" class="form-control" id="pop_mobile" placeholder="Contact Number" name="con_mobile">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-floating">
										<input type="email" class="form-control" id="pop_email" placeholder="Email" name="con_email">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-floating">
										<input type="text" class="form-control" id="pop_city" placeholder="City" name="con_city">
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-floating">
										<select class="form-control" name="con_course" id="pop_course">
											<option value="">Select Course</option>
											<option value="Public Speaking">Public Speaking</option>
											<option value="Grammar Course">Grammar Course</option>
											<option value="INTEGRATED COURSE">Integrated Course</option>
											<option value="WRITING COURSE">Writing Course</option>
											<option value="YOUNG MINDS AS AUTHORS">Young Mindz as Authors</option>
											<option value="Third Level Language">Third Language Course</option>
										</select>
									</div>
								</div>
								<div class="col-12 mt-2">
									<button class="btn sendmesage" type="submit">Request Call Back</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
			<!--/page load popup-->
		</main>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
		<script src="{{$base_url}}public/js/owl.carousel.js"></script> 
		<script src="{{$base_url}}public/js/bootstrap.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.0/jquery.cookie.min.js">
		</script>
		<script type="text/javascript">
			$(document).ready(function() {
				if ($.cookie('pop') == null) {
					$("#popupModal").modal('show');
					$.cookie('pop', '1');
				}
				$("#tavvipop").click(function(){
					$("#tanvimorecontent").modal('show');
				})
				$("#preetipop").click(function(){
					$("#preetmorecontent").modal('show');
				})
				$(".explores.modal-header img").click(function(){
					$("#tanvimorecontent").modal('hide');
					$("#preetmorecontent").modal('hide');
				})
			});
		</script>
		<script>
			$(document).ready(function(){
				$('.menubaar').click(function(){
					$(this).toggleClass('active');	
					$('.navbar-collapse').slideToggle();
				});
				$('.openchildmnu').click(function(){
					$('.navbar-light .navbar-nav .nav-item').removeClass('current');	
					$(this).toggleClass('open');
					$(this).parent('.nav-item').toggleClass('current');	
					$(this).parent('.nav-item').find('.dropdown-menu').slideToggle();
				});
			});
		</script>
		<!--settimeout through loop-->
		<script>
			$(function () {
				var $anchors = $('.txtanimate');
				(function _loop(idx) {
					$anchors.removeClass('highlight').eq(idx).addClass('highlight');
					setTimeout(function () {
						_loop((idx + 1) % $anchors.length);
					}, 4000);
				}(0));
			});
		</script>
		<!--/settimeout through loop-->
		<script>
			$('#buinessquotes').owlCarousel({
				loop:true,
				margin:10,
				nav:true,
				dots:true,
				navText : ["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
				responsive:{
					0:{
						items:1
					},
					600:{
						items:1
					},
					1000:{
						items:1
					}
				}
			});
			$('#testi-carousel').owlCarousel({
				loop:false,
				margin:10,
				nav:true,
				navText : ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],
				dots:false,
				responsive:{
					0:{
						items:1
						//stagePadding: 35
					},
					768:{
						items:2,
						margin:30
					}
				}
			});
		</script>
		<script>
			$(function () {
				var fx = function fx() {
					$(".stat-number").each(function (i, el) {
						var data = parseInt(this.dataset.n, 10);
						var props = {
							"from": {
								"count": 0
							},
							"to": { 
								"count": data
							}
						};
						$(props.from).animate(props.to, {
							duration: 2000 * 1,
							step: function (now, fx) {
								$(el).text(Math.ceil(now));
							},
							complete:function() {
								if (el.dataset.sym !== undefined) {
									el.textContent = el.textContent.concat(el.dataset.sym)
								}
							}
						});
					});
				};
				var reset = function reset() {
					//console.log($(this).scrollTop())
					if ($(this).scrollTop() > 90) {
						$(this).off("scroll");
						fx()
					}
				};
				$(window).on("scroll", reset);
			});	
		</script>
	</body>
</html>










