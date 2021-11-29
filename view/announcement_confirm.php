<?php 
//Database Connection
include('dbconnection.php');
if(isset($_GET['confirmid'])){
  $rid=intval($_GET['confirmid']);
  $sql=mysqli_query($con,"update tblusers set status='confirmed' where ID=$rid");
  unlink($ppicpath);
  echo "<script>alert('Announcement Confirmed!');</script>"; 
  echo "<script>window.location.href = 'announcement.php'</script>"; 
}else{
    echo "<script>alert('Something Went Wrong. Please try again');</script>";
}
?>