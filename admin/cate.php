<!--
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
    
         
    $ins=mysqli_query($dbcon,"insert into cate values('','$t1','$t2','0')");
    
    if($ins>0)
    {
      
                header("location:cate.php?suss=1");
            }
    }
        
 
 
        ?>
<?php
                            if(isset($_GET['del']))
{
    $del1=mysqli_query($dbcon,"delete from cate where id='".$_GET['del']."'");
    //echo mysql_error();
    if($del1>0)
    {
       header("location:cate.php");
}
}
  


?>
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="zxx">
<head>
<title>Retire Hand  | Register :: Trinity Technologies</title>
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
<link rel="stylesheet" href="../temp/css/jquery-ui.css" />
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
<div class="login elite-app">
	<div class="container">
	<div class="tittle-agileinfo">
				<h3>Add Job Category</h3>
			</div>
	<div class="col-md-4 login-form-w3-agile">
			<form method="post">
				<div class="w3_form_body_grid">
					<span>Category</span>
					<select name="t1" class="frm-field required">
						<option value="">--Select Category--</option>
						<option value="IT">IT</option>   
						<option value="Non-IT">Non-IT</option>   
											
					</select>
				</div>
				<div class="w3_form_body_grid">
					<span>Job</span>
					<input type="text" name="t2" placeholder="Name" required="">
				</div>
				
                            <input name="b1" type="submit" value="Add now">
			</form>
			
		</div>
		<div class="col-md-4 login-right-info">
			<h3 class="subhead-agileits">Added jobs</h3>
                        <?php
                
            $sel_p=mysqli_query($dbcon,"select * from cate order by id desc");
            if(mysqli_num_rows($sel_p)>0)
            {
                ?>
			<table class="table table-bordered">
            <tr>
                
                 <td>Type</td>
                <td>job</td>
                
                <td>#</td>
            </tr>
            <?php
            $i=0;
            while($r_p=mysqli_fetch_row($sel_p))
            {
                $i++;
                ?>
            <tr>
                
                
                <td><?php echo $r_p[1] ?></td>
                 <td><?php echo $r_p[2] ?></td>
                 <td><a href="cate.php?del=<?php echo $r_p[0] ?>"><span style="color: red" class="fa fa-trash"></span></a></td>
            </tr>
            <?php
            }
            ?>
        </table>
                        <?php
            }
            ?>
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
<!-- Calendar -->
				<script src="../temp/js/jquery-ui.js"></script>
				  <script>
						  $(function() {
							$( "#datepicker" ).datepicker();
						  });
				  </script>
			<!-- //Calendar -->
<script type="text/javascript" src="../temp/js/bootstrap-3.1.1.min.js"></script>
	

</body>
</html>