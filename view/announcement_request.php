<?php
//database conection  file
include_once('../controller/config.php');
$con = $conn;
?>
<?php include_once('head.php'); ?>
<?php include_once('header_admin.php'); ?>
<?php include_once('sidebar.php'); ?>
<?php include_once('alert.php'); ?>

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
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
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
            <div class="table-responsive">
                <div class="table-wrapper">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Announcements</th>
                                <th>Name</th>                       
                                <th>Recipients</th>
                                <th>Mobile Number</th>
                                <th>Created Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                             <?php
        $ret=mysqli_query($con,"SELECT * FROM announcements WHERE status='pending' ORDER BY ID DESC");
        $cnt=1;
        $row=mysqli_num_rows($ret);
        if($row>0){
        while ($row=mysqli_fetch_array($ret)) {

        ?>
        <!--Fetch the Records -->
                            <tr>
                                <td><?php echo $cnt;?></td>
                                <td style="width: 200px"><?php echo $row['ProfilePic']=='' ? $row['Details'] : '<img src="profilepics/'.$row['ProfilePic'].'" width="80" height="80">' ?></td>
                                <td><?php  echo $row['FirstName'];?> <?php  echo $row['LastName'];?></td>
                                <td><?php  echo $row['Email'];?></td>                        
                                <td><?php  echo $row['MobileNumber'];?></td>
                                <td> <?php  echo $row['CreationDate'];?></td>
                                <td>
                                    <a href="announcement_read.php?viewid=<?php echo htmlentities ($row['ID']);?>" class="view" title="View" data-toggle="tooltip"><i class="material-icons">&#xE417;</i></a>
                                    <a href="announcement_edit.php?editid=<?php echo htmlentities ($row['ID']);?>" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                                    <a href="announcement_delete.php?delid=<?php echo ($row['ID']);?>&&ppic=<?php echo $row['ProfilePic'];?>" class="delete" title="Delete" data-toggle="tooltip" onclick="return confirm('Do you really want to Delete ?');"><i class="material-icons">&#xE872;</i></a>
                                    <a href="announcement_confirm.php?confirmid=<?php echo ($row['ID']);?>&&ppic=<?php echo $row['ProfilePic'];?>" class="confirm" title="Confirm" data-toggle="tooltip"><i class="material-icons">&#xe52d;</i></a>
                                </td>
                            </tr>
                            <?php 
        $cnt=$cnt+1;
        } } else {?>
        <tr>
            <th style="text-align:center; color:red;" colspan="6">No Record Found</th>
        </tr>
        <?php } ?>                 
                        
                        </tbody>
                    </table>
               
                </div>
            </div>
        </div> 
    </section>    

</div>

    
<?php include_once('footer.php'); ?>