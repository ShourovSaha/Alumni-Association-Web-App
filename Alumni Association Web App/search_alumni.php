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
<!--=================Main Body==============-->
<body>
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
    <!--#######################_Option_link_Navigatiob_Bar_#############-->
    <div id="topnav">
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="https://www.pstu.ac.bd/site/main">PSTU Website</a></li>
        <!--<li><a href="#">About us</a></li>-->
        <li class="active last;"><a href="search_alumni.php">Search Alumni</a></li>
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
    <br><br>
    <!-- selected form -->
    <div class="input_queri_main_content_section">
      <form action="search.php" method="post" id="input_form">
        <label for="name">Name</label><br>
        <input type="text" id="fname" name="name" placeholder="Name">
          <br><br>
        <label for="registrationNo">Registration No</label><br>
        <input type="text" id="lname" name="registrationNo" placeholder="Registration No">
          <br><br>
        <label for="department">Department</label><br>
        <select id="department" name="department" form="input_form">
            <option>Select Department</option>
            <option value="finance&banking">Finance and Banking</option>
            <option value="marketing">Marketing</option>
            <option value="management">Management</option>
        </select>
        <br><br>
        <label for="batch">Batch</label><br>
        <select id="batch" name =" batch" form="input_form">
            <option>Select Batch</option>
            <option value="1st_batch">1st Batch</option>
            <option value="2nd_batch">2nd Batch</option>
            <option value="3rd_batch">3rd Batch</option>
            <option value="4th_batch">4th Batch</option>
            <option value="5th_batch">6th Batch</option>
            <option value="6th_batch">7th Batch</option>
        </select>
        <br><br>
        <label for="session">Session</label><br>
        <select id="session" name="session" form="input_form">
            <option>Select Session</option>
            <option value="Summer'2013">Summer'2013</option>
            <option value="Fall'2013">Fall'2013</option>
            <option value="Spring'2013">Spring'2013</option>
            <option value="Summer'2014">Summer'2014</option>
            <option value="Fall'2014">Fall'2014</option>
            <option value="Spring'2014">Spring'2014</option>
            <option value="Summer'2015">Summer'2015</option>
            <option value="Fall'2015">Fall'2015</option>
            <option value="Spring'2015">Spring'2015</option>
        </select>
        <br><br>
          <input type="submit" value="Submit" name="submit">
          <input type="reset" name="reset">
      </form>
    </div>
    <br><br>
    <br><br>
    <br><br>
    <br><br>


     <!-- input form as table -->
    

  
    <br><br>
    <br><br>

<!--============================Search Result~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    


  </div>
</div>

<!-- ####################################################################################################### -->





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