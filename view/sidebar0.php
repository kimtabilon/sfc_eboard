<!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
<?php
include_once('../controller/config.php');

$index=$_SESSION["index_number"];
$type=$_SESSION["type"];


$sql="SELECT * FROM admin WHERE index_number='$index'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$name=$row['i_name'];
$image=$row['image_name'];

?>      
      
      <div class="user-panel">
        <div class="pull-left image">
          <img src="../<?php echo $type=='Super Admin' ? 'assets/images/super_admin.jpg' : $image; ?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $name; ?></p>
            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active treeview">
          <a href="dashboard0.php">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
         <li>
          <a href="admin_profile.php">
            <i class="fa fa-flag"></i> <span>My Profile</span>
          </a>
        </li>
       
        <li>
          <a href="grade.php">
            <i class="fa fa-database"></i> <span>Department</span>
          </a>
        </li>
       
        <li class="treeview">
          <a href="#">
            <i class="fa fa-user" aria-hidden="true"></i>
            <span>Teacher</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="teacher.php"><i class="fa fa-circle-o"></i> Add Teacher</a></li>
            <li><a href="all_teacher.php"><i class="fa fa-circle-o"></i> All Teacher</a></li>
          </ul>
        </li>
       
       <li class="treeview">
          <a href="#">
            <i class="fa fa-graduation-cap"></i>
            <span>Student</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="student.php"><i class="fa fa-circle-o"></i> Add Student</a></li>
            <li><a href="all_student.php"><i class="fa fa-circle-o"></i> All Student</a></li>
            <li><a href="student_leave.php"><i class="fa fa-circle-o"></i> Leave Student</a></li>
          </ul>
        </li>
       
       <li class="treeview">
          <a href="#">
            <i class="fa fa-facebook"></i>
            <span>Friends</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="add_friends.php"><i class="fa fa-circle-o"></i> Add Friends</a></li>
            <li><a href="my_friends.php"><i class="fa fa-circle-o"></i> My Friends</a>
           
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-calendar"></i>
            <span>Event</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="my_events.php"><i class="fa fa-circle-o"></i> My Events</a></li>
            <li><a href="all_events.php"><i class="fa fa-circle-o"></i> All Events</a></li>
          </ul>
        </li>

        <li>
          <a href="#">
            <i class="fa fa-flag"></i>
            <span>eBoard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="announcement.php"><i class="fa fa-circle-o"></i> Confirmed</a></li>
            <li><a href="announcement_request.php"><i class="fa fa-circle-o"></i> Pending</a></li>
          </ul>
        </li>

        <li>
          <a href="#">
            <i class="fa fa-user"></i>
            <span>Administrator</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="admin_new.php"><i class="fa fa-circle-o"></i> New Admin</a></li>
            <li><a href="admin_accounts.php"><i class="fa fa-circle-o"></i> Accounts</a></li>
          </ul>
        </li>

      </ul>

      
      
      
    </section>
    <!-- /.sidebar -->
  </aside>