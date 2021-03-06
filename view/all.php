<?php
// include('dbconnection.php');
include_once('../controller/config.php');
$connect = $conn;

function make_query($connect)
{
 $query = "SELECT * FROM announcements WHERE status='confirmed' && BINARY Email IN ('All') ORDER BY id ASC";
 $result = mysqli_query($connect, $query);
 return $result;
}

function make_slide_indicators($connect)
{
 $output = ''; 
 $count = 0;
 $result = make_query($connect);
 while($row = mysqli_fetch_array($result))
 {
  if($count == 0)
  {
   $output .= '
   <li data-target="#dynamic_slide_show" data-slide-to="'.$count.'" class="active"></li>
   ';
  }
  else
  {
   $output .= '
   <li data-target="#dynamic_slide_show" data-slide-to="'.$count.'"></li>
   ';
  }
  $count = $count + 1;
 }
 return $output;
}

function make_slides($connect)
{
 $output = '';
 $count = 0;
 $result = make_query($connect);
 while($row = mysqli_fetch_array($result))
 {
  if($count == 0)
  {
   $output .= '<div class="item active">';
  }
  else
  {
   $output .= '<div class="item">';
  }
  if($row["ProfilePic"]!='') {
     $output .= '<img src="profilepics/'.$row["ProfilePic"].'" alt="'.$row["Email"].'" />';
  } else {
    
    $output .= '<div style="padding-top: 20px; height:auto; width:600px; font-size:20pt; font-style:italic; font-width:500; text-align:center; margin: 0 auto;">'.$row["Details"].'</div>';
  }

  $output .= '
     <div class="carousel-caption"></div>
    </div>
    ';
  $count = $count + 1;
 }
 return $output;
}

?>
<!DOCTYPE html>
<html>
 <head>
  <title>SFC eBoard</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="icon" href="../uploads/logo3.png">
 </head>
 <body>
  <br />
  <div class="container">
   <h2 align="center">Welcome to Saint Francis College Guihulngan</h2>
   <br />
   <div id="dynamic_slide_show" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
    <?php echo make_slide_indicators($connect); ?>
    </ol>

    <div class="carousel-inner">
     <?php echo make_slides($connect); ?>
    </div>
    <a class="left carousel-control" href="#dynamic_slide_show" data-slide="prev">
     <span class="glyphicon glyphicon-chevron-left"></span>
     <span class="sr-only">Previous</span>
    </a>

    <a class="right carousel-control" href="#dynamic_slide_show" data-slide="next">
     <span class="glyphicon glyphicon-chevron-right"></span>
     <span class="sr-only">Next</span>
    </a>

   </div>
  </div>
 </body>
</html>