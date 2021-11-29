<?php
include('dbconnection.php');
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
            <div class="table-responsive">
                <div class="table-wrapper">
                    <div class="table-title">
                        <div class="row">
                            <div class="col-sm-5">
                                <h2>User <b>Details</b></h2>
                            </div>
        <?php
        $vid=$_GET['viewid'];
        $ret=mysqli_query($con,"select * from tblusers where ID =$vid");
        $cnt=1;
        while ($row=mysqli_fetch_array($ret)) {

        ?>

                             <div class="col-sm-7" align="right">
                                <a href="announcement_edit.php?editid=<?php echo htmlentities ($row['ID']);?>" class="btn btn-primary"><span>Edit User Details</span></a>
                                                
                            </div>
                        </div>
                    </div>
        <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
                       
        <tbody>
            <tr>
                <th width="200">Profile Pic</th>
                <td><img src="profilepics/<?php  echo $row['ProfilePic'];?>" width="80" height="80"></td>
                   <th width="200">Creation Date</th>
            <td><?php  echo $row['CreationDate'];?></td>
            </tr>

         <tr>
            <th>First Name</th>
            <td><?php  echo $row['FirstName'];?></td>
            <th>Last Name</th>
            <td><?php  echo $row['LastName'];?></td>
          </tr>
          <tr>
            <th>Intended Recipient</th>
            <td><?php  echo $row['Email'];?></td>
            <th>Mobile Number</th>
            <td><?php  echo $row['MobileNumber'];?></td>
          </tr>
          <tr>
            <th>Address</th>
            <td><?php  echo $row['Address'];?></td>
         
          </tr>
        <?php 
        $cnt=$cnt+1;
        }?>
                         
        </tbody>
        </table>
               
                </div>
            </div>
        </div>     
    </section>    

</div>

    
<?php include_once('footer.php'); ?>