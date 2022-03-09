<?php include_once('head.php'); ?>
<?php include_once('header_student.php'); ?>
<?php include_once('sidebar1.php'); ?>
<?php include_once('alert.php'); ?>
<?php 
//Databse Connection file
include_once('../controller/config.php');
$con = $conn;

if(isset($_POST['submit']))
{
	//getting the post values
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $contno=$_POST['contactno'];
    $email=$_POST['email'];
    $details=$_POST['details'];
    $ppic=$_FILES["profilepic"]["name"];

    if($_FILES["profilepic"]["size"]) {
        // get the image extension
        $extension = substr($ppic,strlen($ppic)-4,strlen($ppic));
        // allowed extensions
        $allowed_extensions = array(".jpg","jpeg",".png",".gif");
        // Validation for allowed extensions .in_array() function searches an array for a specific value.
        if(!in_array($extension,$allowed_extensions))
        {
            echo "<script>alert('Invalid format. Only jpg / jpeg/ png /gif format allowed');</script>";
        }
        else
        {
            //rename the image file
            $imgnewfile=md5($imgfile).time().$extension;
            // Code for move image into directory
            move_uploaded_file($_FILES["profilepic"]["tmp_name"],"profilepics/".$imgnewfile);
            // Query for data insertion
            
        }
    }

    $query=mysqli_query($con, "insert into announcements(FirstName,LastName, MobileNumber, Email, Details, ProfilePic, status) value('$fname','$lname', '$contno', '$email', '$details','$imgnewfile', 'pending' )");
    if ($query) {
        echo "<script>alert('You have successfully inserted the data');</script>";
        echo "<script type='text/javascript'> document.location ='announcement_student_add.php'; </script>";
    } else{
        echo "<script>alert('Something Went Wrong. Please try again');</script>";
    }
}
?>
<style>

.form-control-feedback {
  
   pointer-events: auto;
  
}

.set-width-tooltip + .tooltip > .tooltip-inner { 
     min-width:180px;
}
.msk-fade {  
      
    -webkit-animation-name: animatetop;
    -webkit-animation-duration: 0.5s;
    animation-name: animatetop;
    animation-duration: 0.5s;
    

}

.modal-content1 {
  height: auto;
  min-height: 100%;
  border-radius: 0;
  position: absolute;
  left: 25%; 
}

/* Add Animation */
@-webkit-keyframes animatetop {
    from {top:-300px; opacity:0} 
    to {top:0; opacity:1}
}

@keyframes animatetop {
    from {top:-300px; opacity:0}
    to {top:0; opacity:1}
}

.cal-table{
    
width:100%;
padding:0;
margin:0;   
}

#calendar_dates{
    padding:10px;
    margin-left:10px;
    width:95%;  
    
}

.tHead{
    
    height:40px;
    background-color:#8e1c82;
    color:#FFF;
    text-align:center;
    border:1px solid #FFF;
    width:70px;
}

.cal-tr{
    height:50px;
    
}

.td_no_number{
    border:1px solid white;
    width:70px;
    background-color:#979045;
    padding:0;
}



.cal-number-td{
    border:1px solid white;
    width:70px;
    background-color:#677be2;
    color:white;
    
        
}

.h5{
    color:#FFF;
    display: inline-block;
    background:#636;
    width:15px;
    height:15px;    
    font-size:11px;
    font-weight:bold;
    font-family:Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", serif;
    text-align:center;
    float:right;
    padding-top:1px;
    margin-bottom:50%;
    
}
.div-event-c{
    margin-top:65%;
    height:17px;
    
}

#cal_month{
    width:20%;
    border-radius:5%;
    
    padding:0;
}
#cal_year{
    width:15%;
    border-radius:5%;
    margin-left:5px;
    padding:0;
}

#btnShow{
    
    margin-left:5px;
    
}


</style>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            SFC eBoard
            <small>Preview</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="announcement_add.php" class="btn btn-secondary"><i class="material-icons">&#xE147;</i> <span>Add Announcement</span></a></li>
        </ol>
    </section>

    <section class="content">
		<div class="signup-form">
		    <form  method="POST" enctype="multipart/form-data" >
				<h2>Fill Data</h2>
		        <div class="form-group">
					<div class="row">
                        <div class="col-sm-1" align="right">First Name</div>
						<div class="col-sm-2"><input type="text" class="form-control" name="fname" placeholder="First Name" required="true"></div>
                        <div class="col-sm-1" align="right">Last Name</div>
						<div class="col-sm-2"><input type="text" class="form-control" name="lname" placeholder="Last Name" required="true"></div>
                        <div class="col-sm-1" align="right">Mobile Number</div>
                        <div class="col-sm-2"><input type="text" class="form-control" name="contactno" placeholder="Enter your Mobile Number" required="true" maxlength="10" pattern="[0-9]+"></div>
                        <div class="col-sm-1" align="right">Department</div>
                        <div class="col-sm-2">
                            <select class="form-control" name="email" placeholder="Intended Recipients" required="true">
                                 <option>All</option>
                                 <option>Elementary Department</option>
                                 <option>Junior High School Department</option>
                                 <option>Senior High School Department</option>
                                 <option>College Department</option>
                             </select>
                        </div>
					</div>        	
		        </div>
				
				<div class="form-group">
                    <div class="row">
                        <div class="col-sm-1" align="right">Details</div>
                        <div class="col-sm-5">
		                  <textarea class="form-control" name="details" placeholder="Enter Announcement Details" style="height: 307px;"></textarea>
                        </div>
                        <div class="col-sm-1" align="right">
                            Or upload image
                            <br><br><br><br><br><br><br><br><br><br><br><br>
                            <button type="submit" class="btn btn-success btn-lg btn-block" name="submit" style="width: 300px; ">Submit Announcement</button>
                        </div>
                        <div class="col-sm-2">
                            <input type="file" class="form-control" name="profilepic" >
                            <span style="color:red; font-size:12px;">Only jpg / jpeg/ png /gif format allowed.</span>
                        </div>
                    </div>
                    
		        </div>     
		      
		    </form>
			<!-- <div class="text-center">View Aready Inserted Data!!  <a href="announcement.php">View</a></div> -->
		</div>
	</section>
</div>

<?php include_once('footer.php'); ?>