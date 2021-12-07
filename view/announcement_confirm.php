<?php 
//Database Connection
include_once('../controller/config.php');
$con = $conn;

if(isset($_GET['confirmid'])){
  $rid=intval($_GET['confirmid']);
  $sql=mysqli_query($con,"update announcements set status='confirmed' where ID=$rid");
  unlink($ppicpath);
  echo "<script>alert('Announcement Confirmed!');</script>"; 
  echo "<script>window.location.href = 'announcement.php'</script>"; 
}else{
    echo "<script>alert('Something Went Wrong. Please try again');</script>";
}
?>