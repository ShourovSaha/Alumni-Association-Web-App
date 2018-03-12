
<!DOCTYPE html>
<html>
  <head>
    <title>PUST EMBA Alumni Association</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/layout.css" type="text/css" />
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.slidepanel.setup.js"></script>
    <!-- Homepage Only Scripts -->
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
    </script>
    <script type="text/javascript" src="js/scrolltop.js"></script>
    <!-- End Homepage Only Scripts -->
  </head>
  <body>


  <!--<h2 style="background-color: #ffff99 ; color: #ff0000 ;">This site is in developing state.</h2>  -->

<div class="wrapper col0">
  <div id="topbar">
    <div id="slidepanel">
      <div class="topbox">
        <h2>Admin Login</h2>
        <form action="login.php" method="post">
          <fieldset>
            <legend>Admin Login Form</legend>
            <label for="name">Username:
              <input type="text" name="admin_name" id="aadmin_name" value="" placeholder="Admin Name" />
            </label>
            <label for="password">Password:
              <input type="password" name="password" id="password" value="" placeholder="Admin Password" />
            </label>
            <label for="adminremember">
              <input class="checkbox" type="checkbox" name="adminremember" id="adminremember" checked="" />
              Remember me</label>
            <p>
              <input type="submit" name="submit" id="submit" value="Login" />
              
              <input type="reset" name="reset" id="reset" value="Reset" />
            </p>
          </fieldset>
        </form>
        <!--<div style = "font-size:14px; color:#cc0000; margin-top:10px"><?php //echo $error; ?></div>-->
      </div>
      <br class="clear" />
    </div>
    <div id="loginpanel">
      <ul>
        <li class="left">Log In Here &raquo;</li>
        <li class="right" id="toggle"><a id="slideit" href="#slidepanel">Administration</a><a id="closeit" style="display: none;" href="#slidepanel">Close Panel</a></li>
      </ul>
    </div>
    <br class="clear" />
  </div>
</div>
<!-- ##########################-main_page_header_################################ -->
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
        <li class="active"><a href="index.php">Home</a></li>
        <li><a href="https://www.pstu.ac.bd/site/main">PSTU Website</a></li>
        <!--<li <a id="about_us"></a>About us</a></li>-->
        <!--<li><a href="#">About us</a></li>   -->
        <li class="last"><a href="search_alumni.php">Search Alumni</a></li>
       <!-- <li class="last"><a href="pages/Search_Alumni.html">Search Alumni</a></li>-->
      </ul>
    </div>
    <br class="clear" />
  </div>
</div>
<!-- #######################-front_page_image_slide-###################################### -->
<div class="wrapper col2">
  <div id="featured_slide">
    <div class="featured_box"><a href="#"><img src="images/PSTU_building01.JPG" alt="PSTU_building01" /></a>
      <!--##########################-photo_news-##############
      <div class="floater">
        <h2>1. Aliquatjusto quisque nam</h2>
        <p>Orcimagna rhoncus et a nec antesque sed temportor pellus nibh conseque. Accumstsemper wisi pretium feugiat non ut eleifendrerisque at et condisse sce. Iaculumorci congue nam mollis odio id cras orci vestique euisquet at. Donecconsectetus lacilis ac pellus nam nibh curabitur sed anterdum nectetus adipis. Pretiummagnisse antes nunc pretium convallis tincidunt non at rutrumt.</p>
        <p class="readmore"><a href="#">Continue Reading &raquo;</a></p>
      </div>-->
    </div>
    <div class="featured_box"><a href="#"><img src="images/Central_Library_pstu.jpg" alt="" /></a>
      <!--<div class="floater">
        <h2>2. Aliquatjusto quisque nam</h2>
        <p>Duisvest lacus pellus purus temper maurisus et sodalesuada loreet sapiente et. Quissociis magnisl orci dui nulla ut antesque malesuada sed pede et. Idlacus ridiculisi nec cursus enim ac tur urnar nunc pellus pellenterdum. Necelisi aliquat curabiturpiscing semportortor sed et velit convallis quat adipiscing cursus. Rutrumeget id ipsum et sed maurisuspendimentum auctor siti.</p>
        <p class="readmore"><a href="#">Continue Reading &raquo;</a></p>
      </div>-->
    </div> 
    <div class="featured_box"><a href="#"><img src="images/PSTU_03.jpg" alt="" /></a>
    <!--  <div class="floater">
        <h2>3. Dapiensociis temper donec</h2>
        <p>Pharetiumurna habitur et enim pellentesque phasellus aliquam nunc quis justo nam. Lobortororci dapibulum ac intesquet ut id sed intesque nec alique congue. Liberoaenec vest maurisus libero pede nisl ligula cursus vitae dis metus. Aeneanaccumsan orci nasce ac pulvinare enim tor quis antesque cumsan in. Justomontesque sem ac dolor iaculum dolor orci elit lacus et vestibulum.</p>
        <p class="readmore"><a href="#">Continue Reading &raquo;</a></p>
      </div> -->
    </div>
    <div class="featured_box"><a href="#"><img src="images/Shahid_minar_PSTU.png" alt="" /></a>
    <!--  <div class="floater">
        <h2>4. Dapiensociis temper donec</h2>
        <p>Pharetiumurna habitur et enim pellentesque phasellus aliquam nunc quis justo nam. Lobortororci dapibulum ac intesquet ut id sed intesque nec alique congue. Liberoaenec vest maurisus libero pede nisl ligula cursus vitae dis metus. Aeneanaccumsan orci nasce ac pulvinare enim tor quis antesque cumsan in. Justomontesque sem ac dolor iaculum dolor orci elit lacus et vestibulum.</p>
        <p class="readmore"><a href="#">Continue Reading &raquo;</a></p>
      </div> -->
    </div>
    
  </div>
</div>
<!-- ####################################################################################################### -->
<!--news_part----
<div class="wrapper col3">
  <div id="homecontent">
    <div class="fl_left">
      <div class="column2">
        <ul>
          <li>
            <h2>News_1</h2>
            <div class="imgholder"><img src="images/demo/240x130.gif" alt="" /></div>
            <p>dbsjkdbvsldvblk  vlbdljfvbdlj  vbdkjfvbdkj.</p>
            <p>jkbvkjdbvdd vlbj kvjdkbvdkj kvkdbv dkj bdkjfvbdjfvbdj  jvbdkjfvbkdj.</p>
            <p class="readmore"><a href="#">Continue Reading &raquo;</a></p>
          </li>


          <li class="last">
            <h2>News_3</h2>
            <div class="imgholder"><img src="images/demo/240x130.gif" alt="" /></div>
            <p>dvcksjdbvslj  jbkjdb j dbbdm vsalklk j ajdb djb alk.</p>
            <p>sjdbv bdsvjsbdkv sbvdbvjad.</p>
            <p class="readmore"><a href="#">Continue Reading &raquo;</a></p>
          </li>
        </ul>
        <br class="clear" />
      </div>
    </div>
    <br class="clear" />
  </div>
</div>
-->
<!--#######################-about_part-#########################-->
<div class="wrapper col4">
  <div id="footer">
   <!-- <div class="footbox">
      
    </div>
    <div class="footbox">
      
    </div>
    <div class="footbox">
    
    </div>
    <div class="footbox">
      
    </div> -->
    <div class="footbox last">
      <h2 style="color: #00b300"><a id="about_us"></a>About us</h2>
      <p style="color: ">Alumni associations are mainly organized around universities or departments of universities, but may also be organized among students that studied in a certain country. In the past, they were often considered to be the university's or school's old boy society (or old boys network). Today, alumni associations involve graduates of all age groups and demographics.</p>
      <!--<ul>
        <li><a href="#">Lorem ipsum dolor</a></li>
        <li><a href="#">Suspendisse in neque</a></li>
        <li><a href="#">Praesent et eros</a></li>
        <li><a href="#">Lorem ipsum dolor</a></li>
        <li><a href="#">Suspendisse in neque</a></li>
        <li class="last"><a href="#">Praesent et eros</a></li>
      </ul>-->
    </div>
    <br class="clear" />
  </div>
</div>
<!-- #####################################Footer########################## -->
<div class="wrapper col5 footer_sec template clear_1">
  <div id="copyright">
    <p class="fl_left">Copyright &copy;<?php echo date("Y"); ?> - All Rights Reserved - <a href="pstuembaalumniassociation.com">pstuembaalumniassociation.com</a></p>
    <p class="fl_right">Website build by:<a target="_blank" href="#" title="">Shourov Saha</a></p>
    <br class="clear" />
  </div>
  <div class="fixed_icon">
    <a href="https://www.facebook.com/"><img src="images/fb.png" alt="facebook.com"></a> 
    <a href="https://www.linkedin.com/"><img src="images/Li.png" alt="Linkedin.com"></a> 
    <a href="https://www.instagram.com/"><img src="images/insta.png" alt="instagram.com"></a>
    <a href="https://plus.google.com/"><img src="images/G+.png" alt="googleplus.com"></a>
    <a href="https://www.youtube.com/"><img src="images/utube.png" alt="youtube.com"></a>  
  </div>
</body>
</html>