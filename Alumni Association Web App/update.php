<!--===============Read Data From Database=========-->
<?php
// include "config_DB.php";
include "database.php";
?>


<?php
  if(isset($_GET['id'])){
	$id = $_GET['id'];
}
	$db = new database();
	$query = "SELECT * FROM alumni_info";
	$get_data = $db->select_data($query)->fetch_assoc();
  
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
  $id =$name = $registrationNo = $department = $batch = $session = $address =
  $age = $educational_qualification=$mobile_no=$email=$job_designation=$job_organization=$job_location =$past_job_experience = NULL ;
  
  $nameErr = $registrationNoErr = $departmentErr = $batchErr = $sessionErr = NULL;

  if (isset($_POST['submit'])) {
    
    if (isset($_POST['name'])) {
    $name = validate_inputs(mysql_real_escape_string($db->link,$_POST['name']));
    }
    if (isset($_POST['registrationNo'])) {
      $registrationNo = validate_inputs(mysql_real_escape_string($db->link,$_POST['registrationNo']));
    }
    if (isset($_POST['department'])) {
      $department = validate_inputs(mysql_real_escape_string($db->link,$_POST['department']));
    }
    if (isset($_POST['batch'])) {
      $batch = validate_inputs(mysql_real_escape_string($db->link,$_POST['batch']));
    }
    if (isset($_POST['session'])) {
      $session = validate_inputs(mysql_real_escape_string($db->link,$_POST['session']));
    }
    if (isset($_POST['address'])) {
      $name = validate_inputs(mysql_real_escape_string($db->link,$_POST['address']));
    }
    if (isset($_POST['age'])) {
      $name = validate_inputs(mysql_real_escape_string($db->link,$_POST['age']));
    }
    if (isset($_POST['educational_qualification'])) {
      $name = validate_inputs(mysql_real_escape_string($db->link,$_POST['educational_qualification']));
    }
    if (isset($_POST['mobile_no'])) {
      $name = validate_inputs(mysql_real_escape_string($db->link,$_POST['mobile_no']));
    }
    if (isset($_POST['email'])) {
      $name = validate_inputs(mysql_real_escape_string($db->link,$_POST['email']));
    }
    if (isset($_POST['job_designation'])) {
      $name = validate_inputs(mysql_real_escape_string($db->link,$_POST['job_designation']));
    }
    if (isset($_POST['job_organization'])) {
      $name = validate_inputs(mysql_real_escape_string($db->link,$_POST['job_organization']));
    }
    if (isset($_POST['job_location'])) {
      $name = validate_inputs(mysql_real_escape_string($db->link,$_POST['job_location']));
    }
    if (isset($_POST['past_job_experience'])) {
      $name = validate_inputs(mysql_real_escape_string($db->link,$_POST['past_job_experience
        ']));
    }
    
    $query= "UPDATE alumni_info 
    		 SET 
    		 name = '$name',
    		 registrationNo = '$registrationNo',
    		 department = '$department',
    		 batch = '$batch',
    		 session = '$session',
    		 address = '$address',
    		 age = '$age',
    		 educational_qualification = '$educational_qualification';
    		 mobile_no = '$mobile_no',
    		 email = '$email',
    		 job_designation = '$job_designation',
    		 job_organization = '$job_organization',
    		 job_location = '$job_location',
    		 past_job_experience = '$past_job_experience'
    		 WHERE id='$id'  ";
    $update_data = $db->update($query);
  }

  /* if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST['name'])) {
       if (!preg_match("/^[a-zA-Z ]*$/", $_POST['name'])) {
         $nameErr ="Only letters and white space is allowed !";
       }else{
          $name = validate_inputs($_POST['name']);
         // $name = $_POST['name'];
       }
     }
     if (!empty($_POST['registrationNo'])) {
       if (!preg_match("/^[EMBAemba0-9]$/", $_POST['registrationNo'])) {
         $registrationNo = "Invalid Registration Number ! Only letters and digit are allowed and no white space is allowed !";
       }else{
        $registrationNo = validate_inputs($_POST['registrationNo']);
        //$registrationNo = $_POST['registrationNo'];
       }
     }
     if (!empty($_POST['department'])) {
       $department = $_POST['department'];
     }
     if (!empty($_POST['batch'])) {
       $batch = $_POST['batch'];
     }
     if (!empty($_POST['session'])) {
       $session = $_POST['session'];
     }
  }else{
    echo "<span style="color : 'red'">* Please fill at least one field to search alumni and then click on submit !";
  } */

  function validate_inputs($data){
      $data = trim($data);
      $data = stripcslashes($data);
      $data = htmlspecialchars($data);
      return $data;
  }
?> 
<!DOCTYPE html>
<html>
<head>
<title>PUST EMBA Alumni Asspciation</title>
<!--<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />-->
<meta charset="utf-8">
<!--<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">-->

<link rel="stylesheet" href="css/layout_for_create_table.css" type="text/css" />
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

</script>
<script type="text/javascript" src="js/scrolltop.js"></script>


</head>
<!---================MAinBody===========---->
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
    <!--#######################_Option_link_#############-->
    <div id="topnav">
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="https://www.pstu.ac.bd/site/main">PSTU Website</a></li>
        <!--<li><a href="#">About us</a></li>-->
        <li class="last;"><a href="search_alumni.php">Search Alumni</a></li>
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
      <form action="update.php?id=<?php echo $id;?>" method="POST" id="input_form">
        <label for="name">Name</label><br>
        <input type="text" id="fname" name="name" value="<?php echo $get_data['name']?>">
          <br><br>
        <label for="registrationNo">Registration No</label><br>
        <input type="text" id="lname" name="registrationNo" value="<?php echo $get_data['registrationNo']?>">
          <br><br>
        <label for="department">Department</label><br>
        <select id="department" name="department" form="input_form" value="<?php echo $get_data['department']?>">
            <option>Select Department</option>
            <option value="finance&banking">Finance and Banking</option>
            <option value="marketing">Marketing</option>
            <option value="management">Management</option>
        </select>
        <br><br>
        <label for="batch">Batch</label><br>
        <select id="batch" name =" batch" form="input_form" value="<?php echo $get_data['batch']?>">
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
        <select id="session" name="session" form="input_form" value="<?php echo $get_data['session']?>">
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
        <label for="address">Address</label><br>
        <input type="text" id="fname" name="address" value="<?php echo $get_data['address']?>" >
        <br><br>
        <label for="age">Age</label><br>
        <input type="text" id="fname" name="age" value="<?php echo $get_data['age']?>">
        <br><br>
        <label for="educational_qualification">Educational Qualification</label><br>
        <input type="text" id="fname" name="educational_qualification" value="<?php echo $get_data['educational_qualification']?>">
        <br><br>
        <label for="mobile_no">Mobile Number</label><br>
        <input type="text" id="fname" name="mobile_no" value="<?php echo $get_data['mobile_no']?>">
        <br><br>
        <label for="email">Email</label><br>
        <input type="text" id="fname" name="email" value="<?php echo $get_data['email']?>">
        <br><br>
         <label for="job_designation">Job Designation</label><br>
        <input type="text" id="fname" name="job_designation" value="<?php echo $get_data['job_designation']?>" >
        <br><br>
        <label for="job_organization">Job Organization</label><br>
        <input type="text" id="fname" name="job_organization" pvalue="<?php echo $get_data['job_organization']?>">
        <br><br>
        <label for="job_location">Job Location</label><br>
        <input type="text" id="fname" name="job_location" value="<?php echo $get_data['job_location']?>">
        <br><br>
        <label for="past_job_experience">Past Job Experience</label><br>
        <input type="text" id="fname" name="past_job_experience" value="<?php echo $get_data['past_job_experience']?>">
        <br><br>

        <input type="submit" value="submit" name="submit">
        <input type="reset" name="reset">
      </form>
      <br><br> 
     </div>
    <br><br>
    <a href="admin_panel.php" class="button">Back to Admin Panel</a>
    <br><br>
    <br><br>
    <br><br>
    
     <!-- input form as table -->
    <!--<div class="input_queri_main_content_section">-->
      <!--<form action="" method="" >   -->
     <!--   <table border=2px ; bgcolor="#f2f2f2" >
          <tr>
            <th class="attribute_font_size">Name </th>
            <td><input type="text" name="name" placeholder="Name"></td>
          </tr>
          <tr>
            <th class="attribute_font_size">Registration No </th>
            <td><input type="text" name="registrationID" placeholder="Registration No"></td>
          </tr>
          <tr>
            <th class="attribute_font_size">Department</th>
            <td align="center">
              <select>
                <option>Seclect Department</option>
                <option value="Finance & Banking">Finance and Banking</option>
                <option value="Marketing">Marketing</option>
                <option value="Management">Management</option>
              </select>
            </td>
          </tr>
          <tr>
            <th class="attribute_font_size">Batch</th>
            <td>
              <select>
                <option>Select Batch</option>
                <option value="1st_batch">1st Batch</option>
                <option value="2nd_batch">2nd Batch</option>
                <option value="3rd_batch">3rd Batch</option>
                <option value="4th_batch">4th Batch</option>
                <option value="5th_batch">6th Batch</option>
                <option value="6th_batch">7th Batch</option>
              </select>
            </td>
          </tr>
          <tr>
            <th class="attribute_font_size">Session</th>
              <td>
                <select>
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
              </td>
          </tr>
          <!--  <tr>
              
              <input type="submit" name="submit">
              <input type="reset" name="reset from">
            </tr>   -->
     <!--   </table>
          <input type="submit" name="submit">
          <input type="reset" name="reset from">
    </form>
<!--===============Admin Input Form=================-->
   
    <!--=================Show Output=========================-->
    
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