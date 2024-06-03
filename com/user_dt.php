
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

$mid=$_GET['mid'];

$sel=mysqli_query($dbcon,"select * from user_data where em='$mid'");
    $r=mysqli_fetch_row($sel);
    
?>
<?php
                 
                    if(isset($_POST['sub1']))
 {
    
    $t1=$_POST['t1'];
    
   $t2=$_POST['t2'];
    $t3=$_POST['t3'];
    $t4=$_POST['t4'];
    $start = strtotime("$t2");
$end = strtotime("$t3");

$dy = ceil(abs($end - $start) / 86400);

  $dy1=$dy+1;  
  $amt=$r[17];
  $tot=$amt*$dy1;
  $tot1=$tot*$t4;
        
    $ins=mysqli_query($dbcon,"insert into req values('','$t1','$t2','$t3','$t4','$dy1','$amt','$tot1','$mid','$usr','3')");
    $id=mysqli_insert_id($dbcon);
    
    if($ins>0)
    {
      
                header("location:user_dt.php?mid=$mid&req=$id");
            }
    }
        
 
        ?>
<?php
if(isset($_GET['upd']))
{
    $uid=$_GET['uid'];  
    $upd=$_GET['upd'];
    $upd1=mysqli_query($dbcon,"update req set st='0' where id='$upd'");
    
   
    if($upd1>0)
    {
        
       header("location:user_dt.php?mid=$uid");
}
}                         
                            


?>
<?php
if(isset($_GET['del']))
{
    $uid=$_GET['uid'];  
    $upd=$_GET['del'];
    $upd1=mysqli_query($dbcon,"delete from req where id='$upd'");
    
   
    if($upd1>0)
    {
        
       header("location:user_dt.php?mid=$uid");
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
<title>Retire Hand  | Single :: Trinity Technologies</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Retire Hand Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="../temp/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="../temp/css/font-awesome.css" rel="stylesheet"> 
<link href="../temp/css/easy-responsive-tabs.css" rel='stylesheet' type='text/css'/>
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
</div>			
</div>
<!--//home-->
<!--banner end here-->
<!-- breadcrumbs -->

<!-- //breadcrumbs -->
<div class="matches elite-app">
	<div class="container">
	<div class="tittle-agileinfo">
		<h3>Profile</h3>
	</div>
	<div class="matches-main-agileinfo">
		<div class="col-md-6 profile1"> 
                    <img style="width: 245px;height: 325px" src="../img1/<?php echo $r[14] ?>">
		</div>
		<div class="col-md-6 person-info-agileits-w3layouts">
			<ul>
				<li><span>Name</span>: <?php echo $r[1] ?></li>
				<li><span>Gender</span>: <?php echo $r[2] ?></li>
				<li><span>Age</span>: <?php echo $r[3] ?></li>
				<li><span>Profession</span>: 
                                <?php
                                $cat=mysqli_query($dbcon,"select * from cate where id='$r[6]'");
                                $cat1=mysqli_fetch_row($cat);
                                echo"$cat1[2]";
                                ?>
                                </li>
				<li><span>Experience</span>: <?php echo $r[7] ?> Years</li>
				<li><span>Company</span>: <?php echo $r[8] ?>(<?php echo $r[9] ?>)</li>
				<li><span>Contact</span>: <?php echo $r[10] ?></li>
                                <li><span>Fee</span>: <b><?php echo $r[17] ?> Rs/- (1 day per head)</b></li>
                                <li><a href="../img2/<?php echo $r[15] ?>">Download Info <div class="fa fa-download"></div></a></li>
			</ul>
		</div>
		<div class="clearfix"> </div>
		<div class="about-person">
			<h6>About Myself:</h6>
			
                        <p class="para-agileits-w3layouts"><span>Hi!, I am <?php echo $r[1] ?> </span><?php echo $r[4] ?></p>
                        </div>
                
        </div>
                <div class="tittle-agileinfo">
		<h3>Request Service</h3>
	</div>
                <div class="col-md-6 ">
                    
                    <form method="post" enctype="multipart/form-data">
                        <table class="table table-bordered"style="background-color: lightblue">
                                            <tr>
                                                <td>Subject</td>
                                                <td><input type="text"   name="t1"required="" class="form-control" /></td>
                                            </tr> 
                                            <tr>
                                                <td>Starting Date</td>
                                                <td><input type="date"   name="t2"required="" class="form-control" /></td>
                                            </tr>
                                            <tr>
                                                <td>Ending Date</td>
                                                <td><input type="date"   name="t3"required="" class="form-control" /></td>
                                            </tr> 
                                            <tr>
                                                <td>Staffs Assigned</td>
                                                <td><input type="number"   name="t4"required="" class="form-control" /></td>
                                            </tr> 
                                                                                       
                                            <tr>
                                                <td colspan="2"><center>
                                                <input type="submit" name="sub1" value="Send Request" class="bt btn-success" />
                                            
                                            
                                            
                                            </center></td>
                                            </tr>  
                                        </table>
                                        </form>
                    
                    
                </div>
            <div class="col-md-6 person-info-agileits-w3layouts">
                <?php
                if(isset($_GET['req']))
                {
                    
                  $req=$_GET['req'];

$sel1=mysqli_query($dbcon,"select * from req where id='$req'");
    $r1=mysqli_fetch_row($sel1);  
                ?>
			<h3>Payment Details</h3>
			<ul>
				<li><span>Starting Date</span>: <?php echo $r1[2] ?></li>
                                <li><span>Ending Date</span>: <?php echo $r1[3] ?></li>
                                <li><span>No of staffs</span>: <?php echo $r1[4] ?></li>
                                <li><span>Total Days</span>: <?php echo $r1[5] ?> days</li>
				<li><span>Fee</span>: <?php echo $r1[6] ?> Rs/- (1 day per head)</li>
                                <li><span>Total Amount</span>: <b><?php echo $r1[7] ?> Rs/-</b></li>
			</ul>
                        <br/>
                        <div class="btn btn-success"><a href="user_dt.php?upd=<?php echo $r1[0] ?>&uid=<?php echo $mid ?>"><b style="color: white">Approve</b></a></div>&nbsp;&nbsp;<div class="btn btn-danger"><a href="user_dt.php?del=<?php echo $r1[0] ?>&uid=<?php echo $mid ?>"><b style="color: white">Reject</b></a></div>
		
                        
                        <?php
                }
                else
                {
                ?>
                        <img style="width: 100%;height: 400px" src="../pic/chat-chatting-communicate-communicating.jpg">       
                        <?php
                }
                ?>
		</div>
	</div>
		
	</div>
</div>
<!--login-inner-->
<!-- footer -->

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
<!-- script for responsive tabs -->						
<script src="../temp/js/easy-responsive-tabs.js"></script>
<script>
$(document).ready(function () {
$('#horizontalTab').easyResponsiveTabs({
type: 'default', //Types: default, vertical, accordion           
width: 'auto', //auto or any width like 600px
fit: true,   // 100% fit in a container
closed: 'accordion', // Start closed if in accordion view
activate: function(event) { // Callback function if tab is switched
var $tab = $(this);
var $info = $('#tabInfo');
var $name = $('span', $info);
$name.text($tab.text());
$info.show();
}
});
$('#verticalTab').easyResponsiveTabs({
type: 'vertical',
width: 'auto',
fit: true
});
});
</script>
<!-- script for responsive tabs -->		


<script src="../temp/js/SmoothScroll.min.js"></script>
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