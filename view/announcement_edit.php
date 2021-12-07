<?php 
//Database Connection
include_once('../controller/config.php');
$con = $conn;
if(isset($_POST['submit']))
  {
  	$eid=$_GET['editid'];
  	//Getting Post Values
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $contno=$_POST['contactno'];
    $email=$_POST['email'];
    $details=$_POST['details'];

    //Query for data updation
     $query=mysqli_query($con, "update  announcements set FirstName='$fname',LastName='$lname', MobileNumber='$contno', Email='$email', Details='$details' where ID='$eid'");
     
    if ($query) {
    echo "<script>alert('You have successfully update the data');</script>";
    echo "<script type='text/javascript'> document.location ='announcement.php'; </script>";
  }
  else
    {
      echo "<script>alert('Something Went Wrong. Please try again');</script>";
    }
}
?>
<?php include_once('head.php'); ?>
<?php include_once('header_admin.php'); ?>
<?php include_once('sidebar.php'); ?>
<?php include_once('alert.php'); ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            SFC eBoard
            <small>Preview</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="add_announcement.php" class="btn btn-secondary"><i class="material-icons">&#xE147;</i> <span>Add Announcement</span></a></li>
        </ol>
    </section>

    <section class="content">
		<div class="signup-form">
		    <form  method="POST">
		 <?php
		$eid=$_GET['editid'];
		$ret=mysqli_query($con,"select * from announcements where ID='$eid'");
		while ($row=mysqli_fetch_array($ret)) {
		?>
				<h2>Update </h2>
				<p class="hint-text">Update your info.</p>

			<div class="form-group">
		<img src="profilepics/<?php  echo $row['ProfilePic'];?>" width="120" height="120">
		<a href="change-image.php?userid=<?php echo $row['ID'];?>">Change Image</a>
				</div>

		        <div class="form-group">
					<div class="row">
						<div class="col-sm-6"><input type="text" class="form-control" name="fname" value="<?php  echo $row['FirstName'];?>" required="true"></div>
						<div class="col-sm-6"><input type="text" class="form-control" name="lname" value="<?php  echo $row['LastName'];?>" required="true"></div>
					</div>        	
		        </div>
		        <div class="form-group">
		            <input type="text" class="form-control" name="contactno" value="<?php  echo $row['MobileNumber'];?>" required="true" maxlength="10" pattern="[0-9]+">
		        </div>
		        <div class="form-group">
		        	<select class="form-control" name="email" placeholder="Intended Recipients" required="true">
		     			 <option>All</option>
		      			 <option>Elementary Department</option>
		     			 <option>Junior High School Department</option>
		    			 <option>Senior High School Department</option>
		     			 <option>College Department</option>
		   			 </select>
		        </div>
				
				<div class="form-group">
		            <textarea class="form-control" name="details" required="true"><?php  echo $row['Details'];?></textarea>
		        </div>   

		<?php 
		}?>
				<div class="form-group">
		            <button type="submit" class="btn btn-success btn-lg btn-block" name="submit">Update</button>
		        </div>
		    </form>

		</div>
    </section>    

</div>

    
<?php include_once('footer.php'); ?>	