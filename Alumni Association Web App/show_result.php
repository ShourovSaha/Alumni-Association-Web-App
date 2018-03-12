<?php

 /* $db = new database();
  $query = "SELECT * FROM alumni_info";
  $read = $db->select_data($query);*/
  



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
  $name = $registrationNo = $department = $batch = $session = $address =
  $age = $educational_qualification=$mobile=$email=$job_designation=$job_organization=$job_location =$past_job_expericence = NULL ;
  
  $nameErr = $registrationNoErr = $departmentErr = $batchErr = $sessionErr = NULL;

  if (isset($_POST['name'])) {
    $name = validate_inputs($_POST['name']);
  }else{
    echo "Empty name field!";
  }
  if (isset($_POST['registrationNo'])) {
    $registrationNo = validate_inputs($_POST['registrationNo']);
  }else{
    echo "Empty registration Number field!";
  } 
  if (isset($_POST['department'])) {
    $department = validate_inputs($_POST['department']);
  }else{
    echo "Empty de field!";
  }
  if (isset($_POST['batch'])) {
    $batch = validate_inputs($_POST['batch']);
  }else{
    echo "Empty batch field!";
  }
  if (isset($_POST['session'])) {
    $session = validate_inputs($_POST['session']);
  }else{
    echo "Empty session field!";
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

</script>
<script type="text/javascript" src="js/scrolltop.js"></script>


</head>
<!--=================main body======================-->
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
    <!--<br><br>
    <br><br>-->
    <!-- selected form -->
   <!-- <div class="input_queri_main_content_section">
      <form action="" method="" id="input_form">
        <label for="name">Name</label><br>
        <input type="text" id="fname" name="name" placeholder="Name" required="1">
          <br><br>
        <label for="registrationNo">Registration No</label><br>
        <input type="text" id="lname" name="registrationNo" placeholder="Registration No" required="1">
          <br><br>
        <label for="department">Department</label><br>
        <select id="department" name="department" form="input_form" >
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
          <input type="submit" value="Submit">
          <input type="reset" name="reset">
      </form>
    </div>
    <br><br>
    <br><br>
    <br><br>-->
    
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
   </div>
   <br><br>
   <br><br>-->
   <br><br>
    <!--=================Show Output=========================-->
    <div class="input_queri_main_content_section">
      <table class="table_1">
        <tr>
          <th colspan="2">Personal Information</th>
        </tr>
        <tr>
          <td>Image</td>
          <td></td>
        </tr>
        <tr>
          <td>Name</td>
          <td><?php echo htmlentities($name)?></td>
        </tr>
        <tr>
          <td>Registrtion No</td>
          <td><?php echo htmlentities($registrationNo)?></td>
        </tr>
        <tr>
          <td>Department</td>
          <td><?php echo $department?></td>
        </tr>
        <tr>
          <td>Batch</td>
          <td><?php echo $batch?></td>
        </tr>
        <tr>
          <td>Session</td>
          <td><?php echo $session?></td>
        </tr>
        <tr>
          <td>Address</td>
          <td><?php echo  $address?></td>
        </tr>
        <tr>
          <td>Age</td>
          <td><?php echo $age?></td>
        </tr>
        <tr>
          <td>Educational Qualification</td>
          <td><?php echo $educational_qualification ?></td>
        </tr>
        <tr>
          <td>Mobile</td>
          <td><?php echo $mobile ?></td>
        </tr>
        <tr>
          <td>Email Address</td>
          <td><?php echo $email  ?></td>
        </tr>
        <tr>
          <th colspan="2">Professional Information</th>
        </tr>
        <tr>
          <td>Job Designation</td>
          <td><?php echo $job_designation ?></td>
        </tr>
        <tr>
          <td>Job Organization</td>
          <td><?php echo $job_organization ?></td>
        </tr>
        <tr>
          <td>Job Location</td>
          <td><?php echo $job_location ?></td>
        </tr>
        <tr>
          <td>Past Job Experience</td>
          <td><?php echo $past_job_expericence  ?></td>
        </tr>

      </table>
    </div>
    <br><br>
    <br><br>
    

  </div>
</div>


<!-- ##################-fotter################################################################## -->




  <div class="wrapper col5 footer_sec template clear_1">
    <div id="copyright">
      <p class="fl_left">Copyright &copy;<?php echo date("Y"); ?> - All Rights Reserved - <a href="pstuembaalumniassociation.com">pstuembaalumniassociation.com</a></p>
      <p class="fl_right">Website build by:<a target="_blank" href="#" title="">Shourov Saha</a></p>
      <br class="clear" />
    </div>
  </div>  
  </body>
</html>