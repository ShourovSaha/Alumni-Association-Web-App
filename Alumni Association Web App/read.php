<!--===============Read Data From Database=========-->
<?php
// include "config_DB.php";
// WHERE id='".$id."'";
include "database.php";
?>
 

<?php  
  $id =2;
  $db = new database();
  $query = "SELECT * FROM alumni_info";
  $read = $db->select_data($query);

?>

<?php
  if (isset($_GET['msg'])) {
    echo "<span style='color:#ff0000'>".$_GET['msg']."</span>";
  }
?>


<?php
  //Database connection.
  /*$servername = "localhost";
  $username = "root";
  $password = "";

  $connection = mysql_connect($servername,$username,$password);
  if (!$connection) {
    die("Connection failed !<br>".mysqli_connect_error());
  }else{
    echo "Database connected succesfully !<br>";
  }
  //adding database.
  $myDB = mysql_select_db("pstu_emba_alumni");
  if (mysql_select_db("pstu_emba_alumni")) {
    echo "Database found !<br>";
  }else{
    echo "Database not found !<br>";
  }
  //close mysql database connection.
  mysql_close($connection);*/
  //form validation.
  
?> 
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
<div class="wrapper col0">
  <div id="topbar">
    <div id="slidepanel">
      <div class="topbox">
        <h2>Rules of Login</h2>
        <p>skdvskdvksdvjsdvbksjdvsdvbks</p>
        <p class="readmore"><a href="#">Continue Reading &raquo;</a></p>
      </div>
      <div class="topbox">
        <h2>Teachers Login Here</h2>
        <form action="#" method="post">
          <fieldset>
            <legend>Teachers Login Form</legend>
            <label for="teachername">Username:
              <input type="text" name="teachername" id="teachername" value="" />
            </label>
            <label for="teacherpass">Password:
              <input type="password" name="teacherpass" id="teacherpass" value="" />
            </label>
            <label for="teacherremember">
              <input class="checkbox" type="checkbox" name="teacherremember" id="teacherremember" checked="checked" />
              Remember me</label>
            <p>
              <input type="submit" name="teacherlogin" id="teacherlogin" value="Login" />
              &nbsp;
              <input type="reset" name="teacherreset" id="teacherreset" value="Reset" />
            </p>
          </fieldset>
        </form>
      </div>
      <div class="topbox last">
        <h2>Pupils Login Here</h2>
        <form action="#" method="post">
          <fieldset>
            <legend>Pupils Login Form</legend>
            <label for="pupilname">Username:
              <input type="text" name="pupilname" id="pupilname" value="" />
            </label>
            <label for="pupilpass">Password:
              <input type="password" name="pupilpass" id="pupilpass" value="" />
            </label>
            <label for="pupilremember">
              <input class="checkbox" type="checkbox" name="pupilremember" id="pupilremember" checked="checked" />
              Remember me</label>
            <p>
              <input type="submit" name="pupillogin" id="pupillogin" value="Login" />
              &nbsp;
              <input type="reset" name="pupilreset" id="pupilreset" value="Reset" />
            </p>
          </fieldset>
        </form>
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
    <!--=================Show Output=========================-->
    <div class="input_queri_main_content_section">
      <table class="table_1">
      <?php if($read) { ?>
        <?php while( $read_data = $read->fetch_assoc()){?>
        <tr>
          <th colspan="2">Personal Information</th>
        </tr>
        <tr>
          <td>Serial No</td>
          <td><?php echo $read_data['id']?></td>
        </tr>
        <tr>
          <td>Image</td>
          <td></td>
        </tr>
        <tr>
          <td>Name</td>
          <td><?php echo $read_data['name']?></td>
        </tr>
        <tr>
          <td>Registrtion No</td>
          <td><?php echo $read_data['registrationNo']?></td>
        </tr>
        <tr>
          <td>Department</td>
          <td><?php echo $read_data['department']?></td>
        </tr>
        <tr>
          <td>Batch</td>
          <td><?php echo $read_data['batch']?></td>
        </tr>
        <tr>
          <td>Session</td>
          <td><?php echo $read_data['session']?></td>
        </tr>
        <tr>
          <td>Address</td>
          <td><?php echo  $read_data['address']?></td>
        </tr>
        <tr>
          <td>Age</td>
          <td><?php echo $read_data['age']?></td>
        </tr>
        <tr>
          <td>Educational Qualification</td>
          <td><?php echo $read_data['educational_qualification'] ?></td>
        </tr>
        <tr>
          <td>Mobile Number</td>
          <td><?php echo $read_data['mobile_no'] ?></td>
        </tr>
        <tr>
          <td>Email Address</td>
          <td><?php echo $read_data['email']  ?></td>
        </tr>
        <tr>
          <th colspan="2">Professional Information</th>
        </tr>
        <tr>
          <td>Job Designation</td>
          <td><?php echo $read_data['job_designation'] ?></td>
        </tr>
        <tr>
          <td>Job Organization</td>
          <td><?php echo $read_data['job_organization'] ?></td>
        </tr>
        <tr>
          <td>Job Location</td>
          <td><?php echo $read_data['job_location'] ?></td>
        </tr>
        <tr>
          <td>Past Job Experience</td>
          <td><?php echo $read_data['past_job_experience']  ?></td>
        </tr>
        <tr>
          <td></td>
          <td><a href="update.php?id=<?php echo urlencode($read_data['id'])?>" class="button">Edit</a></td>
        </tr>


        <?php  }?>
        <?php }else{  ?>
        <p>Database Empty !</p>
        <?php } ?>

      </table>
    </div>
     <br><br>
    <a href="admin_panel.php" class="button">Back to Admin Panel</a>
    <br><br>
    <br><br>
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