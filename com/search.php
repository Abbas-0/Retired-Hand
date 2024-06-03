<?php
include '../connection.php';
ob_start();
session_start();
$usr=$_SESSION['uid'];

?>
<?php

if($usr=$_SESSION['uid'])
{
    
}
 else
     {
    header("location:../index.php");    
}
?>
<?php


if(isset($_POST['b1']))
{
    $t1=$_POST['t1'];
    $t2=$_POST['t2'];
$log=mysqli_query($dbcon,"select * from user_data where pro='$t2' and st='1'");
if(mysqli_num_rows($log)>0)
{
   header("location:user1.php?mid=$t2"); 
}
else
{
    header("location:search.php?fail=1");
}
    

}
                                    ?>

<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="zxx">
<head>
<title>Retire Hand</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Retire Hand Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="../temp/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" /><!-- Bootstrap -->
<link href="../temp/css/font-awesome.css" rel="stylesheet"> <!-- Font awesome -->
<link href="../temp/css/owl.carousel.css" rel="stylesheet"><!-- Clients -->
<link href="../temp/css/popuo-box.css" rel="stylesheet" type="text/css" media="all" /><!-- Pop-up -->
<link href="../temp/css/lsb.css" rel="stylesheet" type="text/css"><!-- gallery -->
<link href="../temp/css/style.css" rel="stylesheet" type="text/css" media="all" />
<!--fonts-->
<link href="//fonts.googleapis.com/css?family=Raleway:400,500,600,700,800,900" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Dancing+Script:400,700" rel="stylesheet">
<!--//fonts-->

</head>
<body>
<!--banner start here-->
<div class="banner-w3ls inner-banner-agileits" id="home">
	<div class="container">
		<!-- header -->
                <?php
                
                include 'menu.php';
                
                ?>
			<!-- //header -->
			<!-- banner-slider -->
			
			
		<!-- //banner-slider -->
				 </div>
</div>
<!--//home-->
<!--banner end here-->
<!-- services -->
	<div class="services" id="services">
		<div class="container">
		<div class="tittle-agileinfo">
				<h3>Quick Search</h3>
                                <center>
                          <?php
                          if(isset($_GET['fail']))
                          {
                          
                          ?>
                          <br/>
                          <h4 style="color: red">SORRY NO DATA FOUND</h4>
                          
                          
                          <?php
                          }
                          ?>
                      </center>
			</div>
			<div class="col-md-6 w3_agileits_services_grids">
				<div class="w3_agileits_services_grid">
					<div class="w3_agileits_services_grid_agile">
						<div class="w3_agileits_services_grid_1">
							<i class="fa fa-search" aria-hidden="true"></i>
						</div>
						<h3>Search within reach</h3>
					</div>
				</div>
				<div class="w3_agileits_services_grid">
					<div class="w3_agileits_services_grid_agile">
						<div class="w3_agileits_services_grid_1">
							<i class="fa fa-list-alt" aria-hidden="true"></i>
						</div>
						<h3>Shortlisted matches</h3>
					</div>
				</div>
				<div class="w3_agileits_services_grid">
					<div class="w3_agileits_services_grid_agile">
						<div class="w3_agileits_services_grid_1">
							<i class="fa fa-phone" aria-hidden="true"></i>
						</div>
						<h3>Initiate communication</h3>
					</div>
				</div>
				<div class="w3_agileits_services_grid">
					<div class="w3_agileits_services_grid_agile">
						<div class="w3_agileits_services_grid_1">
							<i class="fa fa-users" aria-hidden="true"></i>
						</div>
						<h3>Meet the prospects</h3>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="col-md-6 regstr-r-w3-agileits">
			<div class="form-bg-w3ls">
				<h3 class="subhead-agileits white-w3ls">Interested in help services....?</h3>
				<p class="para-agileits-w3layouts">Leave your details below, Search Now.</p>
				<form  method="post">
                                    <script type="text/javascript">
                               function loaddistrict(x)
                               {
                                   var xmlhttp = new XMLHttpRequest();
                                    xmlhttp.onreadystatechange = function() {
                                        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {

                                            document.getElementById("dis").innerHTML = xmlhttp.responseText;
                                        }
                                    };
                                    xmlhttp.open("GET", "load_districtindex.php?x=" + x, true);
                                    xmlhttp.send();
                               }
                               </script>
					<select name="t1" class="form-control"onchange="loaddistrict(this.value);loadst_hos(this.value)">
						<option value="">--Select Job Category--</option>
						<option value="IT">IT</option>   
						<option value="Non-IT">Non-IT</option>   
											
					</select>
                               <br/>
                               <div id="dis">
					<select name="t2" class="form-control">
						<option value="">--Select Profession--</option>
			 
											
					</select>
                                        </div>
					<input type="submit"name='b1' value="Search" class="button-w3layouts hvr-rectangle-out">
				</form>	
			</div>
			</div>
		</div>
	</div>
<!-- //services -->

<!-- about -->

<div class="footer-w3layouts">
				<div class="container">
				<div class="agile-copy">
					<p><p>© 2020 Retire Hand. All rights reserved | Design by <a href="#">Trinity Technologies</p></a></p>
				</div>
				<div class="agileits-social">
					<ul>
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-rss"></i></a></li>
							<li><a href="#"><i class="fa fa-vk"></i></a></li>
						</ul>
				</div>
					<div class="clearfix"></div>
				</div>
			</div>
<!--/footer -->

<!-- js -->
<script type='text/javascript' src='js/jquery-2.2.3.min.js'></script>
<!-- flexisel -->
		<script type="text/javascript">
		$(window).load(function() {
			$("#flexiselDemo1").flexisel({
				visibleItems: 4,
				animationSpeed: 1000,
				autoPlay: true,
				autoPlaySpeed: 3000,    		
				pauseOnHover: true,
				enableResponsiveBreakpoints: true,
				responsiveBreakpoints: { 
					portrait: { 
						changePoint:480,
						visibleItems: 1
					}, 
					landscape: { 
						changePoint:640,
						visibleItems:2
					},
					tablet: { 
						changePoint:768,
						visibleItems: 2
					}
				}
			});
			
		});
	</script>
	<script type="text/javascript" src="../temp/js/jquery.flexisel.js"></script>
<!-- //flexisel -->
<!-- gallery-pop-up -->
	<script src="../temp/js/lsb.min.js"></script>
	<script>
	$(window).load(function() {
		  $.fn.lightspeedBox();
		});
	</script>
<!-- //gallery-pop-up -->
<script src="../temp/js/SmoothScroll.min.js"></script>
<!--responsive slider -->
<script src="../temp/js/responsiveslides.min.js"></script>
							<script>
								// You can also use "$(window).load(function() {"
								$(function () {
								  // Slideshow 3
								  $("#slider3").responsiveSlides({
									auto: true,
									pager:true,
									nav:true,
									speed: 500,
									namespace: "callbacks",
									before: function () {
									  $('.events').append("<li>before event fired.</li>");
									},
									after: function () {
									  $('.events').append("<li>after event fired.</li>");
									}
								  });
							
								});
							 </script>
<!--//responsive slider -->
<!--pop-up-box -->
					<script src="../temp/js/jquery.magnific-popup.js" type="text/javascript"></script>
					<script>
					$(document).ready(function() {
					$('.popup-with-zoom-anim').magnificPopup({
					type: 'inline',
					fixedContentPos: false,
					fixedBgPos: true,
					overflowY: 'auto',
					closeBtnInside: true,
					preloader: false,
					midClick: true,
					removalDelay: 300,
					mainClass: 'my-mfp-zoom-in'
					});

					});
					</script>
<!-- //pop-up-box -->

<!-- smooth scrolling -->
	<script type="text/javascript">
		$(document).ready(function() {
		/*
			var defaults = {
			containerID: 'toTop', // fading element id
			containerHoverID: 'toTopHover', // fading element hover id
			scrollSpeed: 1200,
			easingType: 'linear' 
			};
		*/								
		$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>
	
	
	<a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //smooth scrolling -->
	<!-- for-Clients -->
		<script src="../temp/js/owl.carousel.js"></script>
			<!-- requried-jsfiles-for owl -->
							        <script>
									    $(document).ready(function() {
									      $("#owl-demo2").owlCarousel({
									        items : 1,
									        lazyLoad : false,
									        autoPlay : true,
									        navigation : false,
									        navigationText :  false,
									        pagination : true,
									      });
									    });
									  </script>
			<!-- //requried-jsfiles-for owl -->
	<!-- //for-Clients -->
	<!-- start-smoth-scrolling -->
<script type="text/javascript" src="../temp/js/move-top.js"></script>
<script type="text/javascript" src="../temp/js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="../temp/js/bootstrap-3.1.1.min.js"></script>
	

</body>
</html>