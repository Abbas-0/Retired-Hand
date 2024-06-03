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
                 
                    if(isset($_POST['sub1']))
 {
    
    $t1=$_POST['t1'];
    
   $t2=$_POST['t2'];
    $t3=$_POST['t3'];
    $t4=$_POST['t4'];
    $t5=$_POST['t5'];
    
    $t6=$_POST['t6'];
    $t7=$_POST['t7'];
    
    
    $log1=mysqli_query($dbcon,"select * from user_log where uid='$t11'");
if(mysqli_num_rows($log1)>0)
{
 header("location:reg.php?fail=1");   
}
 else {
    

    
    $up=$_FILES['myFile']['name'];
    $chk=mysqli_query($dbcon,"select * from staff_data");
    $count=mysqli_num_rows($chk);
    $nfn=$count."".substr($up,strrpos($up,"."));
   
    
   
     if(move_uploaded_file($_FILES['myFile']['tmp_name'],getcwd()."//../img5//$nfn"))
    {
          
    $ins=mysqli_query($dbcon,"insert into staff_data values('','$t1','$t2','$t3','$t4','$t5','$t6','$t7','$nfn','$usr','1')");
    
    if($ins>0)
    {
      $ins1=mysqli_query($dbcon,"insert into user_log values('','$t6','$t7','staff','1')");
        if($ins1>0)
        {
                header("location:reg.php?suss=1");
            }
    }
        }
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
<script type="text/javascript">
    function nme(b2)
{
var k5=b2.length;
var ch2=/([a-z])$/;
if(ch2.test(b2)==false)
{
document.getElementById("np3").innerHTML="<font color='red'>*Only Alphabets*</font>";
$("#btn").hide();
return false;
}

else
{
  document.getElementById("np3").innerHTML="";  
  $("#btn").show();
}
}
  
    
    function chkc(b2)
{
var k5=b2.length;
var ch2=/([0-9])$/;
if(ch2.test(b2)==false)
{
document.getElementById("o3").innerHTML="<font color='red'>*Only Numbers*</font>";
$("#btn").hide();
return false;
}
else if(k5!=10)
{
document.getElementById("o3").innerHTML="<font color='red'>*Please Check Your Mobile Number*</font>";
$("#btn").hide();
return false;
}
else
{
  document.getElementById("o3").innerHTML="";  
  $("#btn").show();
}
}
  
 function chkp(c)
{
var s=document.getElementById("p10").value;

if(s==c)
{
document.getElementById("p").innerHTML="<font color='Green'>*Password is Correct*</font>";
$("#btn").show();
return false;
}
else
{
document.getElementById("p").innerHTML="<font color='red'>*Verfy Password*</font>";
$("#btn").hide();
}
}





function vem(a)  
     {  
          //var a = document.myform.email.value;  
          var atposition = a.indexOf("@");  
          var dotposition = a.lastIndexOf(".");  
          if (atposition<1 || dotposition<atposition+2 || dotposition+2>=a.length) 
          {  
               document.getElementById("em").innerHTML="<font color='red'>*Please Check Your Email Address*</font>";
                $("#btn").hide();  
          }  
          else
{
                document.getElementById("em").innerHTML="";  
  $("#btn").show();
}
     }  
    </script>
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
				<h3>Staff Register </h3>
                                
                                <center>
                          <?php
                          if(isset($_GET['suss']))
                          {
                          
                          ?>
                          <br/>
                          <h4 style="color: green">REGISTRATION COMPLETE</h4>
                          
                          
                          <?php
                          }
                          ?>
                      </center>
                      
                      <center>
                          <?php
                          if(isset($_GET['fail']))
                          {
                          
                          ?>
                          <br/>
                          <h4 style="color: red">EMAIL ALREADY EXIST</h4>
                          
                          
                          <?php
                          }
                          ?>
                      </center>
                                <center>
                          <?php
                          if(isset($_GET['fail1']))
                          {
                          
                          ?>
                          <br/>
                          <h4 style="color: red">INCORRECT ACCOUNT NUMBER</h4>
                          
                          
                          <?php
                          }
                          ?>
                      </center>
			</div>
	<div class="col-md-8 login-form-w3-agile">
			<form  method="post" enctype="multipart/form-data">
				
                               
				<div class="w3_form_body_grid w3_form_body_grid1">
					<span>Name</span>
					<input type="text" name="t1" placeholder="Name" required="">
				</div>
				<div class="w3_form_body_grid">
					<span>Gender</span>
					<div class="w3_gender">
						<div class="colr ert">
							<label class="radio"><input type="radio"value="Male" name="t2"><i></i>Male</label>
						</div>
						<div class="colr">
							<label class="radio"><input type="radio"value="Female" name="t2"><i></i>Female</label>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="w3_form_body_grid w3_form_body_grid1">
					<span>Age</span>
					
                                <input type="text"class="frm-field required" name="t3"  required="">
                                </div>
                            
                            
                               
				<div class="w3_form_body_grid w3_form_body_grid1">
					<span>Position</span>
					<input type="text" name="t4" placeholder="position in your company" required="">
				</div>
                               
                              <div class="w3_form_body_grid w3_form_body_grid1">
					<span>Contact</span>
                                        <input type="text" name="t5" placeholder="Contact Info" required="">
				</div>
				<div class="w3_form_body_grid">
					<span>Email</span>
                                        <input type="email" name="t6" placeholder="Email" required="">
				</div>
				<div class="w3_form_body_grid w3_form_body_grid1">
					<span>Password</span>
					<input type="password" name="t7" placeholder="Password" required="">
				</div>
                               
                               <div class="w3_form_body_grid w3_form_body_grid1">
					<span>Photo</span>
					<input name="myFile" class="frm-field required" class="form-control" type="file"required="">
				</div>
                               
				<input name="sub1" type="submit" value="Sign Up">
			</form>
			
		</div>
            <div class="col-md-4 login-right-info">
                
                <img style="width: 100%;height: 240px" src="../pic/Working-in-an-open-office-1024x576.png">
            </div>
            <div class="col-md-4 login-right-info right-info-find">
                
                <img style="width: 100%;height: 240px" src="../pic/photo-1522071820081-009f0129c71c.jpg">
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