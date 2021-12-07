<?php

include_once('../controller/config.php');
$id=$_GET["id"];
$sql = "SELECT * FROM teacher WHERE id=$id";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);

$row1=array($row['id'],$row['first_name'],$row['middle_name'],$row['last_name'],$row['full_name'],$row['i_name'],$row['street'],$row['barangay'],$row['city'],$row['province'],$row['gender'],$row['phone'],$row['email'],$row['image_name'],$row['reg_date']);
echo json_encode($row1);//MSK-00117 - Ajax Response Json

?>	