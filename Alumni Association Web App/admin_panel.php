<?php
   include('session.php');
?>
<html">
   
   <head>
      <title>Welcome </title>
   </head>
   
   <body>
      <h1>Welcome <?php echo $login_session; ?></h1> 
      <h2><a href = "logout.php">Sign Out</a></h2>
   </body>
   
</html>





<!DOCTYPE html>
<html>
<head>
<title>PUST EMBA Alumni Asspciation</title>
<!--<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />-->
<meta charset="utf-8">
<!--<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">-->

<link rel="stylesheet" href="css/layout.css" type="text/css" />
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.slidepanel.setup.js"></script>
<!-- ghfjasjah-->
<script type="text/javascript" src="js/jquery.cycle.min.js"></script>
<script type="text/javascript">
$(function() {
    $('#featured_slide').after('<div id="fsn"><ul id="fs_pagination">').cycle({
        timeout: 5000,
        fx: 'fade',
        pager: '#fs_pagination',
        pause: 1,
        pauseOnPagerHover: 0
    });
});
<!--smooth scrool Bar-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript" src="js/scrolltop.js"></script>


</head>
<body>

<!-- ####################################################################################################### -->
<div class="wrapper col1">
  <div id="header">
    <div id="logo">
      <div style="float:left;overflow: hidden; margin:40px 0 0 12px;">
        <img src="images/PSTU_Logo.jpg" alt="logo" style="width:80px;height:80px;">
      </div>
      <div style="float:left;overflow: hidden;margin:72px 0 0 12px; ">
        <h1 style="font-size: 25px">
          <a href="index.php">PSTU EMBA Alumni Association</a>
        </h1>
      <p><a href="https://www.pstu.ac.bd/site/main"></a><strong>Potuakhali Science & Techonology University</strong></p>
      </div>
    </div>
    <!--#######################_Option_link_#############-->
    <div id="topnav">
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="https://www.pstu.ac.bd/site/main">PSTU Website</a></li>
        <!--<li><a href="#">About us</a></li>-->
        <li class=" last;"><a href="search_alumni.php">Search Alumni</a></li>
      </ul>
    </div>
    <br class="clear" />
  </div>
</div>
<!-- #####################-indicating_web_page_path-################################### -->
<div class="wrapper col2">
  <div id="breadcrumb">
    <ul>
      <li class="first">You Are Here</li>
      <li>&#187;</li>
      <li><a href="#">Home</a></li>
      <li>&#187;</li>
      <li><a href="#">Grand Parent</a></li>
      <li>&#187;</li>
      <li><a href="#">Parent</a></li>
      <li>&#187;</li>
      <li class="current"><a href="#">Child</a></li>
    </ul>
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col3">
  <div id="container">
    
   <br><br>
    <!--=================Show Output=========================-->
    <div class="input_queri_main_content_section ">
      <h2 style="color:#45a049">Admin Panel</h2>
      <a href="create.php" class="button">Insert</a>
      <a href="update.php" class="button">Update</a>
      <a href="read.php" class="button">Read</a>


      <br><br>
      <br><br>
      <br><br>
      <br><br>
      <br><br>
      <br><br>
      <br><br>
    </div>
      <br><br>

  </div>
</div>

<!-- ####################################################################################################### -->
<!--<div class="wrapper col4">
  <div id="footer">
    <div class="footbox">
      
    </div>
    <div class="footbox">
      
    </div>
    <div class="footbox">
    
    </div>
    <div class="footbox">
      
    </div>
    <div class="footbox last">
      <h2>About us</h2>
      <p>Alumni associations are mainly organized around universities or departments of universities, but may also be organized among students that studied in a certain country. In the past, they were often considered to be the university's or school's old boy society (or old boys network). Today, alumni associations involve graduates of all age groups and demographics.</p>
      <!--<ul>
        <li><a href="#">Lorem ipsum dolor</a></li>
        <li><a href="#">Suspendisse in neque</a></li>
        <li><a href="#">Praesent et eros</a></li>
        <li><a href="#">Lorem ipsum dolor</a></li>
        <li><a href="#">Suspendisse in neque</a></li>
        <li class="last"><a href="#">Praesent et eros</a></li>
      </ul>-->
<!--    </div>
    <br class="clear" />
  </div>
</div>-->
<!-- ##################---fotter----##################################################################################### -->




<div class="wrapper col5 footer_sec template clear_1">
  <div id="copyright">
    <p class="fl_left">Copyright &copy;<?php echo date("Y"); ?> - All Rights Reserved - <a href="pstuembaalumniassociation.com">pstuembaalumniassociation.com</a></p>
    <p class="fl_right">Website build by:<a target="_blank" href="#" title="">Shourov Saha</a></p>
    <br class="clear" />
  </div>
<!--  <div class="fixed_icon">
    <a href="https://www.facebook.com/"><img src="../../images/demo/fb.png" alt="facebook.com"></a> 
    <a href="https://www.linkedin.com/"><img src="../../images/demo/Li.png" alt="Linkedin.com"></a> 
    <a href="https://www.instagram.com/"><img src="../../images/demo/insta.png" alt="instagram.com"></a>
    <a href="https://plus.google.com/"><img src="../../images/demo/G+.png" alt="googleplus.com"></a>
    <a href="https://www.youtube.com/"><img src="../../images/demo/utube.png" alt="youtube.com"></a>  
  </div>   -->
  </body>
</html>