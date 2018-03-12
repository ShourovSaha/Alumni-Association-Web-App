<?php
    //mysql_connect("localhost", "root", "") or die("Error connecting to database: ".mysql_error());
    /*
        localhost - it's location of the mysql server, usually localhost
        root - your username
        third is your password
         
        if connection fails it will stop loading the page and display an error
    */
     
   // mysql_select_db("tutorial_search") or die(mysql_error());
    /* tutorial_search is the name of database we've created */
?>
 
<!DOCTYPE html>
<html>
<head>
    <title>Search</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>
<?php
    if (isset($_POST['submit'])) {
        
        if (isset($_POST['name']) && isset($_POST['registrationNo']) && isset($_POST['department']) && isset($_POST['batch']) && isset($_POST['session'])) {

            $query = validate_query($_POST['registrationNo']);
            
        





        $query = validate_query($_POST['name']);
        }
        if (isset($_POST['registrationNo'])) {
            $query = validate_query($_POST['registrationNo']);
        }
        if (isset($_POST['department'])) {
            $query = validate_query($_POST['department']);
        }
        if (isset($_POST['batch'])) {
            $query = validate_query($_POST['batch']);
        }
        if (isset($_POST['session'])) {
            $query = validate_query($_POST['session']);
        }
    }
    

    function validate_query($data){
      $data = trim($data);
      $data = stripcslashes($data);
      $data = htmlspecialchars($data);
      $data = mysql_real_escape_string($data);
      return $data;
    }
    //$query = $_POST['name']; 
    // gets value sent over search form
     
    $min_length = 3;
    // you can set minimum length of the query if you want
     
    if(strlen($query) >= $min_length){ // if query length is more or equal minimum length then
         
        $query = htmlspecialchars($query); 
        // changes characters used in html to their equivalents, for example: < to &gt;
         
        $query = mysql_real_escape_string($query);
        // makes sure nobody uses SQL injection
        $raw_results = 0;
        $raw_results = mysql_query("SELECT * FROM alumni_info
            WHERE (`name` LIKE '%".$query."%') OR (`registrationNo` LIKE '%".$query."%') OR (`department` LIKE '%".$query."%') OR (`batch` LIKE '%".$query."%') OR (`session` LIKE '%".$query."%')") or die(mysql_error());
             
        // * means that it selects all fields, you can also write: `id`, `title`, `text`
        // articles is the name of our table
         
        // '%$query%' is what we're looking for, % means anything, for example if $query is Hello
        // it will match "hello", "Hello man", "gogohello", if you want exact match use `title`='$query'
        // or if you want to match just full word so "gogohello" is out use '% $query %' ...OR ... '$query %' ... OR ... '% $query'
         
        if(mysql_num_rows($raw_results) > 0){ // if one or more rows are returned do following
             
            while($results = mysql_fetch_array($raw_results)){
            // $results = mysql_fetch_array($raw_results) puts data from database into array, while it's valid it does the loop
             
                echo "<p><h3>".$results['name']."</h3>".$results['registrationNo']."</p>";
                // posts results gotten from database(title and text) you can also show id ($results['id'])
            }
             
        }
        else{ // if there is no matching rows do following
            echo "No results";
        }
         
    }
    else{ // if query length is less than minimum
        echo "Minimum length is ".$min_length;
    }
?>
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
<!--==================Main bodt=============== -->
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
    
   <br><br>
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


<!-- ##################---fotter----####################################### -->




<div class="wrapper col5 footer_sec template clear_1">
  <div id="copyright">
    <p class="fl_left">Copyright &copy;<?php echo date("Y"); ?> - All Rights Reserved - <a href="pstuembaalumniassociation.com">pstuembaalumniassociation.com</a></p>
    <p class="fl_right">Website build by:<a target="_blank" href="#" title="">Shourov Saha</a></p>
    <br class="clear" />
  </div>  
  </body>
</html>