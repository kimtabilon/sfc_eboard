<?php

include_once('../controller/config.php');
$id=$_GET["id"];
$sql = "SELECT * FROM admin WHERE id=$id";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);

$sql2 = "SELECT * FROM user WHERE email='".$row['email']."'";
$result2=mysqli_query($conn,$sql2);
$row2=mysqli_fetch_assoc($result2);

$row1=array($row['id'],$row['full_name'],$row['i_name'],$row['address'],$row['gender'],$row['phone'],$row['email'],$row2['password'],$row['image_name'],$row['reg_date']);
echo json_encode($row1);//MSK-00117 - Ajax Response Json

?>	