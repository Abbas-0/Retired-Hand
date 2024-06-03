<?php
include '../connection.php';
ob_start();
session_start();
$usr=$_SESSION['uid'];
$mid=$_GET['mid'];
date_default_timezone_set("Asia/Kolkata"); 
$tim=date("h:i:a");
$date=date('Y-m-d'); 
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
if(isset($_GET['upd']))
{
    
    $upd=$_GET['upd'];
    $upd1=mysqli_query($dbcon,"update req set st='1' where id='$upd'");
    
   
    if($upd1>0)
    {
        
       header("location:req.php");
}
}                         
                            


?>
<?php
if(isset($_GET['del']))
{
    
    $upd=$_GET['del'];
    $upd1=mysqli_query($dbcon,"delete from req where id='$upd'");
    
   
    if($upd1>0)
    {
        
       header("location:req.php");
}
}                         
                            


?>
<?php
if(isset($_POST['sub']))
{
    $t1=$_POST['t1'];
    
    $zz=  mysqli_query($dbcon,"insert into msg values('','$usr','$mid','$t1','$date','$tim','0')");
    if($zz>0)
    {
         
        header("location:chat.php?mid=$mid");
    }
    else
    {
       
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
<title>Retire Hand  | Matches :: Trinity Technologies</title>
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
<style>
            
            
            

.well {
    margin-top:-20px;
    background-color:#007FBD;
    border:2px solid #0077B2;
    text-align:center;
    cursor:pointer;
    font-size: 25px;
    padding: 15px;
    border-radius: 0px !important;
}

.well:hover {
    margin-top:-20px;
    background-color:#0077B2;
    border:2px solid #0077B2;
    text-align:center;
    cursor:pointer;
    font-size: 25px;
    padding: 15px;
    border-radius: 0px !important;
    border-bottom : 2px solid rgba(97, 203, 255, 0.65);
}





.bg_blur
{
    background-image:url('../images/giphy.gif');
    height: 300px;
    background-size: cover;
}

.follow_btn {
    text-decoration: none;
    position: absolute;
    left: 35%;
    top: 42.5%;
    width: 35%;
    height: 15%;
    background-color: #007FBE;
    padding: 10px;
    padding-top: 6px;
    color: #fff;
    text-align: center;
    font-size: 20px;
    border: 4px solid #007FBE;
}

.follow_btn:hover {
    text-decoration: none;
    position: absolute;
    left: 35%;
    top: 42.5%;
    width: 35%;
    height: 15%;
    background-color: #007FBE;
    padding: 10px;
    padding-top: 6px;
    color: #fff;
    text-align: center;
    font-size: 20px;
    border: 4px solid rgba(255, 255, 255, 0.8);
}

.header1{
    color : #808080;
    margin-left:10%;
    
}

.picture{
    height:150px;
    width:150px;
    position:absolute;
    top: 75px;
    left:-75px;
}

.picture_mob{
    position: absolute;
    width: 35%;
    left: 35%;
    bottom: 70%;
}

.btn-style{
    color: #fff;
    background-color: #007FBE;
    border-color: #adadad;
    width: 33.3%;
}

.btn-style:hover {
    color: #333;
    background-color: #3D5DE0;
    border-color: #adadad;
    width: 33.3%;
   
}


@media (max-width: 767px) {
    .header{
        text-align : center;
    }
    
    
    
    .nav{
        margin-top : 30px;
    }
}

.container{max-width:1170px; margin:auto;}
img{ max-width:100%;}
.inbox_people {
  background: #f8f8f8 none repeat scroll 0 0;
  float: left;
  overflow: hidden;
  width: 40%; border-right:1px solid #c4c4c4;
}
.inbox_msg {
  border: 1px solid #c4c4c4;
  clear: both;
  overflow: hidden;
}
.top_spac{ margin: 20px 0 0;}


.recent_heading {float: left; width:40%;}
.srch_bar {
  display: inline-block;
  text-align: right;
  width: 60%;
}
.headind_srch{ padding:10px 29px 10px 20px; overflow:hidden; border-bottom:1px solid #c4c4c4;}

.recent_heading h4 {
  color: #05728f;
  font-size: 21px;
  margin: auto;
}
.srch_bar input{ border:1px solid #cdcdcd; border-width:0 0 1px 0; width:80%; padding:2px 0 4px 6px; background:none;}
.srch_bar .input-group-addon button {
  background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
  border: medium none;
  padding: 0;
  color: #707070;
  font-size: 18px;
}
.srch_bar .input-group-addon { margin: 0 0 0 -27px;}

.chat_ib h5{ font-size:15px; color:#464646; margin:0 0 8px 0;}
.chat_ib h5 span{ font-size:13px; float:right;}
.chat_ib p{ font-size:14px; color:#989898; margin:auto}
.chat_img {
  float: left;
  width: 11%;
}
.chat_ib {
  float: left;
  padding: 0 0 0 15px;
  width: 88%;
}

.chat_people{ overflow:hidden; clear:both;}
.chat_list {
  border-bottom: 1px solid #c4c4c4;
  margin: 0;
  padding: 18px 16px 10px;
}
.inbox_chat { height: 550px; overflow-y: scroll;}

.active_chat{ background:#ebebeb;}

.incoming_msg_img {
  display: inline-block;
  width: 6%;
}
.received_msg {
  display: inline-block;
  padding: 0 0 0 10px;
  vertical-align: top;
  width: 92%;
 }
 .received_withd_msg p {
  background: #ebebeb none repeat scroll 0 0;
  border-radius: 3px;
  color: #646464;
  font-size: 14px;
  margin: 0;
  padding: 5px 10px 5px 12px;
  width: 100%;
}
.time_date {
  color: #747474;
  display: block;
  font-size: 12px;
  margin: 8px 0 0;
}
.received_withd_msg { width: 57%;}
.mesgs {
  float: left;
  padding: 30px 15px 0 25px;
  width: 60%;
}

 .sent_msg p {
  background: #05728f none repeat scroll 0 0;
  border-radius: 3px;
  font-size: 14px;
  margin: 0; color:#fff;
  padding: 5px 10px 5px 12px;
  width:100%;
}
.outgoing_msg{ overflow:hidden; margin:26px 0 26px;}
.sent_msg {
  float: right;
  width: 46%;
}
.input_msg_write input {
  background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
  border: medium none;
  color: #4c4c4c;
  font-size: 15px;
  min-height: 48px;
  width: 100%;
}

.type_msg {border-top: 1px solid #c4c4c4;position: relative;}
.msg_send_btn {
  background: #05728f none repeat scroll 0 0;
  border: medium none;
  border-radius: 50%;
  color: #fff;
  cursor: pointer;
  font-size: 17px;
  height: 33px;
  position: absolute;
  right: 0;
  top: 11px;
  width: 33px;
}
.messaging { padding: 0 0 50px 0;}
.msg_history {
  height: 516px;
  overflow-y: auto;
}
        </style>
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
		<h3>Chat Room</h3>
	</div>
        
        
                
                
                
                <div class="container">

<div class="messaging">
      <div class="inbox_msg">
        <div class="inbox_people">
          <div class="headind_srch">
            <div class="recent_heading">
              <h4>Assigned Staffs</h4>
            </div>
            
          </div>
          <div class="inbox_chat">
              <?php
                        
                                                        $sel_gal=mysqli_query($dbcon,"select * from assi where rid='$mid'");
                                                        if(mysqli_num_rows($sel_gal)>0)
                                                        {$i=0;
                                                        ?>
               <?php
                                                            while($r_gal=mysqli_fetch_row($sel_gal))
                                                            {
                                                                $cu=mysqli_query($dbcon,"select * from staff_data where em='$r_gal[3]'");
    $cu1=mysqli_fetch_row($cu);
                                                                $i++;
                                                                ?>
              
              
              
            <div class="chat_list">
              <div class="chat_people">
                  <div class="chat_img"> <img src="../img5/<?php echo $cu1[8] ?>"style="width: 100%;height: 40px" alt="sunil" class="img img-circle"> </div>
                <div class="chat_ib">
                  <h5><?php echo $cu1[1] ?><span class="chat_date"></span></h5>
                  
                </div>
              </div>
            </div>
            <?php
                                                            }
                                                        }
                                                        ?>
            
          </div>
        </div>
        <div class="mesgs">
<!--            <script>
                                          function update() {                                             
                                                $.get("loadchat1.php?mid=<?php echo $mid ?>", function(data) {
                                                    $("#mssg").html(data);
                                                });
                                                window.setTimeout("update();", 100);
                                            }
                                          </script>-->
          <div class="msg_history">
              <div id="mssg">
              <?php
                        
                                                        $sel_gal1=mysqli_query($dbcon,"select * from msg where eid='$mid'");
                                                        if(mysqli_num_rows($sel_gal1)>0)
                                                        {$i=0;
                                                        ?>
               <?php
                                                            while($r_gal1=mysqli_fetch_row($sel_gal1))
                                                            {
                                                                $pr=mysqli_query($dbcon,"select * from staff_data where em='$r_gal1[1]'");
    $pr1=mysqli_fetch_row($pr);
                                                                $i++;
                                                                ?>
               <?php
              
              if($r_gal1[1]!="$usr")
              {
              ?>
              <?php
              if($r_gal1[6]=="1")
              {
                   $pr2=mysqli_query($dbcon,"select * from user_data where em='$r_gal1[1]'");
    $pr12=mysqli_fetch_row($pr2);
              ?>
<div class="incoming_msg">
    <div class="incoming_msg_img"> <img style="width: 100px;height: 53px;"  class="img img-circle "  src="../img1/<?php echo $pr12[14] ?>" alt="sunil"> </div>
              <div class="received_msg">
                  <div class="received_withd_msg">
                      <p ><b><span><?php echo $pr12[1] ?><span style="color: lightgreen">(Lecturer)</span></b></span>
                        <br/>
                        <p><?php echo $r_gal1[3] ?>
                    </p>
                  <span class="time_date">    <?php echo $r_gal1[5] ?>|   <?php echo $r_gal1[4] ?></span></div>
              </div>
            </div>

<?php
              }
              else
              {
                  ?>
              


            <div class="incoming_msg">
              <div class="incoming_msg_img"> <img style="width: 10px;height: 53px;" class="img img-circle" src="../img5/<?php echo $pr1[8] ?>" alt="sunil"> </div>
              <div class="received_msg">
                <div class="received_withd_msg">
                    <p><?php echo $pr1[1] ?>
                        <br/>
                        <?php echo $r_gal1[3] ?>
                    </p>
                  <span class="time_date">    <?php echo $r_gal1[5] ?>|   <?php echo $r_gal1[4] ?></span></div>
              </div>
            </div>
             <br/>
             
             
             <?php
              }
              ?>
              <?php
              }
 else {
              ?>
              <?php
              
              if($r_gal1[1]="$usr")
              {
              ?>
            <div class="outgoing_msg">
              <div class="sent_msg">
                <p><?php echo $r_gal1[3] ?></p>
                <span class="time_date">   <?php echo $r_gal1[5] ?>|   <?php echo $r_gal1[4] ?></span></div>
            </div>
            
            <?php
              }
 }
              ?>
            <?php
            
                                                            }
                                                        }
            ?>
          </div>
            
          </div>
        </div>
      </div>
      
      
      
      
    </div></div>
                
            
        
        </div>
</div>
<!--login-inner-->
<!-- footer -->


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