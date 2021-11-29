<?php 
//Database Connection
include('dbconnection.php');
if(isset($_GET['delid'])){
  $rid=intval($_GET['delid']);
  $profilepic=$_GET['ppic'];
  $ppicpath="profilepics"."/".$profilepic;
  $sql=mysqli_query($con,"delete from tblusers where ID=$rid");
  unlink($ppicpath);
  echo "<script>alert('Data deleted');</script>"; 
  echo "<script>window.location.href = 'announcement.php'</script>"; 
}else{
    echo "<script>alert('Something Went Wrong. Please try again');</script>";
}
?>