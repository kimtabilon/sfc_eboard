<?php 
//Database Connection
include_once('../controller/config.php');
$con = $conn;

if(isset($_GET['delid'])){
  $rid=intval($_GET['delid']);
  $profilepic=$_GET['ppic'];
  $ppicpath="profilepics"."/".$profilepic;
  $sql=mysqli_query($con,"delete from announcements where ID=$rid");
  unlink($ppicpath);
  echo "<script>alert('Data deleted');</script>"; 
  echo "<script>window.location.href = 'announcement.php'</script>"; 
}else{
    echo "<script>alert('Something Went Wrong. Please try again');</script>";
}
?>