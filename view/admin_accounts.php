<?php
if(!isset($_SERVER['HTTP_REFERER'])){
    // redirect them to your desired location
    header('location:../index.php');
    exit;
}
?>
<?php include_once('head.php'); ?>
<?php include_once('header_admin.php'); ?>
<?php include_once('sidebar0.php'); ?>
<?php include_once('alert.php'); ?>

<style>

body{
	overflow-y:scroll;	
}

.msk-col-md-4{
	width:28%;
}
.modal{
	overflow-y: auto;
}

.form-control-feedback {
  
   pointer-events: auto;
  
}

.msk-set-width-tooltip + .tooltip > .tooltip-inner { 
  
     min-width:180px;
}
.msk-set-color-tooltip + .tooltip > .tooltip-inner { 
  
     min-width:180px;
	 background-color:red;
}
.msk-image-error{
	border:1px solid #f44336;
	
}

.msk-fade {  
      
    -webkit-animation-name: animatetop;
    -webkit-animation-duration: 0.4s;
    animation-name: animatetop;
    animation-duration: 0.4s

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


.modal-dialog1 {
  width: 75%;
  height: 100%;
  margin: 0;
  padding: 0;
}

.modal-content1 {
  height: auto;
  min-height: 100%;
  border-radius: 0;
  position: absolute;
  left: 16%; 
}
.modal-content2 {
  height: auto;
  min-height: 100%;
  border-radius: 0;
  position: absolute;
  left: 10%; 
}

.modal-content3 {
  height: auto;
  min-height: 100%;
  border-radius: 0;
  position: absolute;
  left: -31%; 
}

@media only screen and (max-width: 500px) {
	
	.modal-content1, .modal-content2, .modal-content3, .container, .modal-dialog1{
		
	 	width:100%;
	  	position: static;
		
		
	}
	
	#salaryDetails, #salary_details, #salary_details2{
		width:100%;
	}
	
	 #tableSdetails, #tableSdetails1, #tableSdetails2 , #tableSdetails3{
		
		width:100%;
		
	}
	
	.panel-body, .table1-responsive, .table2-responsive {
		overflow-x:auto !important; 
	}
	
	

}

@media only screen and (max-width: 768px) {
    /* For mobile phones: */
    [class*="col-"] {
        width: 100%;
    }
	
	.panel-body, .table1-responsive, .table2-responsive  {
		overflow-x:auto !important; 
	}
	
	
	.modal-content1, .modal-content2, .modal-content3, .container, .modal-dialog1{
		
	 	width:100%;
	  	position: static;
		
		
	}
	
	#salaryDetails, #salary_details, #salary_details2{
		width:100%;
	}
	
	 #tableSdetails, #tableSdetails1, tableSdetails2{
		
		width:100%;
		
	}
	
	
	
}

@media only screen and (max-width: 1200px) {
    /* For mobile phones: */
 
	
	.modal-content1, .modal-content2, .modal-content3, .container, .modal-dialog1{
		
	 	width:100%;
	  	position: static;
		
		
	}
	
	[class*="col-"] {
        width: 100%;
    }
	
	#salaryDetails, #salary_details, #salary_details2{
		width:100%;
	}
	
	 #tableSdetails, #tableSdetails1, tableSdetails2{
		
		width:100%;
		
	}
	
	.panel-body, .table1-responsive, .table2-responsive  {
		overflow-x:auto !important; 
	}
	
	
}


/* #modalINV css  */
#modalINV .div-logo {
	float: left;
	height: 130px;
}

#modalINV .logo{
	float: left;
	width: 90px;
	height: 90px;
	margin-right: 10px;
	border-radius: 50%;
	text-align: center;
	background-color:#8860a7;
}

#modalINV .class-name{
	float: left;		
	margin-top:0;
	padding-top:0;			
}

#modalINV h1,#modalINV h2,#modalINV h3{
	margin-top:0;
	color:#8860a7;

}

#modalINV .class-address {
	float: left;
			
}

#modalINV .class-email {
	float: right;
	margin-right:15px;
	padding-right:0;
	color:white;
	background-color:#8860a7;
}

#modalINV th{			
	background-color:#8860a7;
	color:white;
}
#modalINV .std-name{
	color:#8860a7;
	font-size:16px;
}
#modalINV #h1{
display:none;	
}
#modalINV .pdetail1 {
	padding:0;
	float:right;
	margin-right:7px; 
	
}

#modalINV .pdetail2 {
	float: right;
	
}

@media print{
	
	#show_INV{
		height:450px;
	}
	

	body{
		visibility: hidden;
	}
	
	#modalINV{
	   visibility: visible;
	}
	
	#tSalaryhistory{
		display:none !important;
	}

	#divPhoto{
		display:none;	
	}
	
	#modalINV .logo{
		background-color:#8860a7 !important;	
	}

	#modalINV h1,#modalINV h2,#modalINV h3,#modalINV .std-name{
		color:#8860a7 !important;	
	}
		
		
	#modalINV .table-bordered th{
		color:white!important;
		background-color:#8860a7 !important;		
	}
	#modalINV .class-email {
		color:white!important;
		background-color:#8860a7 !important;
	} 
	
	#modalINV .panel{
		border:hidden!important;
	}
	#modalINV #btn1,#modalINV .panel-footer ,#modalINV .msk-heading {
		display:none;
	}
		
	#modalINV #h1{
		display:inline;	
	}
	
	#modalINV .close{
		display:none;	
	}
	
	#modalINV .pdetail1 {
		margin:0;	
	}

	@-moz-document url-prefix() {
			
		.panel{
			margin:0;
			padding:0;
		}
		#modalINV{
			margin:0!important;
			padding:0!important;
			position:absolute;
			left:-150px;
		}
		@page{
			margin:0;
			padding:0;	
		}
	}
}


/* #modalINV1 css  */

#modalINV1 .div-logo {
	float: left;
	height: 130px;
}

#modalINV1 .logo{
	float: left;
	width: 90px;
	height: 90px;
	margin-right: 10px;
	border-radius: 50%;
	text-align: center;
	background-color:#8860a7;
}

#modalINV1 .class-name{
	float: left;		
	margin-top:0;
	padding-top:0;			
}

#modalINV1 h1,#modalINV1 h2,#modalINV1 h3{
	margin-top:0;
	color:#8860a7;

}

#modalINV1 .class-address {
	float: left;
			
}

#modalINV1 .class-email {
	float: right;
	margin-right:15px;
	padding-right:0;
	color:white;
	background-color:#8860a7;
}

#modalINV1 th{			
	background-color:#8860a7;
	color:white;
}
#modalINV1 .std-name{
	color:#8860a7;
	font-size:16px;
}
#modalINV1 #h1{
display:none;	
}

#modalINV1 .pdetail1 {
	padding:0;
	float:right;
	margin-right:7px; 
	
}

#modalINV1 .pdetail2 {
	float: right;
	
}


@media print{
	
	#show_INV{
		height:450px;
	}
	

	body{
		visibility: hidden;
	}
	
	#modalINV1{
	   visibility: visible;
	}
	
	#tSalaryhistory{
		display:none !important;
	}

	#divPhoto{
		display:none;	
	}
	
	#modalINV1 .logo{
		background-color:#8860a7 !important;	
	}

	#modalINV1 h1,#modalINV1 h2,#modalINV1 h3,#modalINV1 .std-name{
		color:#8860a7 !important;	
	}
		
		
	#modalINV1 .table-bordered th{
		color:white!important;
		background-color:#8860a7 !important;		
	}
	#modalINV1 .class-email {
		color:white!important;
		background-color:#8860a7 !important;
	} 
	
	#modalINV1 .panel{
		border:hidden!important;
	}
	#modalINV1 #btn1,#modalINV1 .panel-footer ,#modalINV1 .msk-heading {
		display:none;
	}
		
	#modalINV1 #h1{
		display:inline;	
	}
	
	#modalINV1 .close{
		display:none;	
	}
	#modalINV1 .pdetail1 {
		margin:0;	
		
	}
	@-moz-document url-prefix() {
			
		.panel{
			margin:0;
			padding:0;
		}
		#modalINV1{
			margin:0!important;
			padding:0!important;
			position:absolute;
			left:-150px;
		}
		@page{
			margin:0;
			padding:0;	
		}
	}
}


</style>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
    <section class="content-header">
    	<h1>
        	Administrator
            <small>Preview</small>
        </h1>
        <ol class="breadcrumb">
        	<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#"><i class="fa fa-teacher"></i> Admin</a></li>
            <li><a href="#"> Accounts</a></li>
         </ol>
     </section>

    <!-- table for view all records //MSK-00112 -->
    <section class="content" > <!-- Start of table section -->
        <div class="row" id="table1"><!-- after delete methanata thamay overite karanne view_classroom table -->
            <div class="col-md-8">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Accounts</h3>
                    </div><!-- /.box-header -->
                    <div class="box-body table-responsive">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <th class="col-md-1">ID</th>
                                <th class="col-md-3">Name</th>
                                <th class="col-md-3">Actions</th>
                            </thead>
                            <tbody>
<?php
include_once('../controller/config.php');
$sql="SELECT * FROM admin";
$result=mysqli_query($conn,$sql);
$count = 0;
$cant_remove1=0;
$cant_remove2=0;
$cant_remove3=0;
$cant_remove4=0;
$cant_remove5=0;
$cant_remove6=0;
$cant_remove7=0;
$cant_remove8=0;
$cant_remove9=0;
$cant_remove10=0;

if(mysqli_num_rows($result) > 0){
	while($row=mysqli_fetch_assoc($result)){
    	$count++;
		$id=$row['id'];
		$index=$row['index_number'];
?>   
                                <tr>
                                    <td><?php echo $count; ?></td>
                                    <td id="td1_<?php echo $row['id']; ?>">
                                    	<?php echo $row['i_name']; ?>
                                    </td>
                                    <td>
                                    	<a href="#modalUpdateform" onClick="showModal(this)" class="btn btn-warning btn-xs" data-id="<?php echo $row["id"]; ?>" data-toggle="modal">Edit</a>
                                    	<a href="#" class="confirm-delete btn btn-danger btn-xs"  data-id="<?php echo $row['id']; ?>">Delete</a>
                                    </td>
                                </tr>
<?php } } ?>
                            </tbody>
                        </table>
                	</div><!-- /.box-body -->	
                </div>
            </div>
        </div>
    </section> <!-- End of table section --> 

<!--Modal-Update form //MSK-00114-->  
	<div class="modal msk-fade" id="modalUpdateform" tabindex="-1" role="dialog" aria-labelledby="modalUpdateform" aria-hidden="true">  
		<div class="modal-dialog">
		<div class="container">
        	<div class="row ">
        		<div class="col-md-6">
            		<div class="panel">
    					<div class="panel-heading bg-orange">               
                			<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                			<h4 class="modal-title custom_align" id="Heading">Edit Account</h4>
            			</div>
            			<form action="../index.php" method="post" enctype="multipart/form-data" id="form2">
            				<div class="panel-body"><!-- Start of the modal body--> 
                                <div class="form-group">
                                    <label for="">Full Name</label>
                                    <input class="form-control" type="text" id="full_name1" name="full_name" autocomplete="off">
                                </div>
                                
                                <div class="form-group" id="divINameUpdate">
                                    <label for="">Profile Name</label>
                                    <input class="form-control " type="text" id="i_name1" name="i_name" autocomplete="off">
                                </div>
                                
                                <div class="form-group" id="divAddressUpdate">
                                    <label for="">Address</label>
                                    <input class="form-control " type="text" id="address1" name="address" autocomplete="off">
                                </div>
                                <div class="form-group">
                                    <label for="">Gender</label>
                                    <select class="form-control" style="width:200px;" id="gender1" name="gender">
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div>
                                <div class="form-group" id="divPhoneUpdate">
                                    <label for="">Phone Number</label>
                                    <input class="form-control" type="text" id="phone1" name="phone" autocomplete="off">
                                </div>
                                <div class="form-group" id="divEmailUpdate">
                                    <label for="">Email</label>
                                    <input class="form-control " type="text" id="email1" name="email" autocomplete="off">
                                </div>
                                <div class="form-group" id="divPassUpdate">
                                    <label for="">Password</label>
                                    <input class="form-control " type="text" id="password1" name="password" autocomplete="off">
                                </div>
                                <div class="form-group" id="divPhotoUpdate">
                                    <label for="">Photo</label>
                                </div>
                                <div class="form-group"  id="divPhotoUpdate1">
                                    <img id="output1" style="width:130px;height:150px;" src="" />
                                    <input type="file" name="fileToUpload" id="fileToUpload1"  style="margin-top:7px; "  />
                                </div>
            				</div><!--/.modal body-->
                            <div class="panel-footer bg-gray-light">
                                <input type="hidden" id="id1"  name="id" value="" />
                                <input type="hidden" name="do" value="admin_update">
                                <button type="submit" class="btn btn-info" id="btnSubmit1" style="width: 100%;"><span class="glyphicon glyphicon-ok-sign"></span> Update</button>
                        	</div><!--/.panel-footer-->
                    	</form> 
        			</div><!--/.panel--> 
        		</div><!--/.col-md-6-->
        	</div><!--/.row-->                                    
    	</div><!-- /.modal-content -->  		 
		</div><!-- /.modal-dialog -->        
</div><!--/.Modal-Update form -->   

<!-- Modal-Delete Confirm Popup //MSK-000129 -->
<div class="modal msk-fade " id="deleteConfirm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
		<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header bg-primary">
    			<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
    			<h4 class="modal-title" id="frm_title">Delete</h4>
  			</div>

			<div class="modal-body bgColorWhite">
    			<strong style="color:red;">Are you sure?</strong>  Do you want to Delete this Record
    		</div>
  			<div class="modal-footer">
				<a href="#" style='margin-left:10px;' id="btnYes" class="deletebtn btn btn-danger col-sm-2 pull-right">Yes</a><!-- MSK-000130 -->
    			<button type="button" class="btn btn-primary col-sm-2 pull-right" data-dismiss="modal" id="frm_cancel">No</button>
  			</div>
		</div>
		</div>
</div>
<script>
$('body').on('click', '.confirm-delete', function (e){
	e.preventDefault();
    var id = $(this).data('id');
	$('#deleteConfirm').data('id1', id).modal('show');//MSK-000128
});

$('#btnYes').click(function() {
//MSK-000131  
  	console.log('delete yes');
    var id = $('#deleteConfirm').data('id1');	
	var do1 = "delete_record";
	var table_name="admin";	

	var info = $('#example1').DataTable().page.info();
	var currentPage= (info.page + 1);		
	
	var xhttp = new XMLHttpRequest();//MSK-000132-Ajax Start  

  		xhttp.onreadystatechange = function() {
			
    		if (this.readyState == 4 && this.status == 200){//MSK-000134
				
				location.reload();

    		}
			
  		};
			
    	xhttp.open("GET", "../model/delete_record.php?id=" + id + "&do="+do1 + "&table_name="+table_name  + "&page="+currentPage , true);												
  		xhttp.send();//MSK-000133-Ajax End
	 			   		
});

function Delete_alert(msg){
//MSK-000142	
	if(msg==1){
		
    	var myModal = $('#delete_Success');
		myModal.modal('show');
		
		clearTimeout(myModal.data('hideInterval'));
    	myModal.data('hideInterval', setTimeout(function(){
    		myModal.modal('hide');
			
			
    	}, 3000));
			
	}
	
	if(msg==2){
		
    	var myModal = $('#connection_Problem');
		myModal.modal('show');
		
    	clearTimeout(myModal.data('hideInterval'));
    	myModal.data('hideInterval', setTimeout(function(){
    		myModal.modal('hide');
			
    	}, 3000));
				
	}

};	

function showModal(Updateform){
//MSK-00115 
	$('#modalViewform').modal('hide');
	var Id = $(Updateform).data("id"); 
	var path = "../"; 
	
	var xhttp = new XMLHttpRequest();//MSK-00116-Ajax Start
  		xhttp.onreadystatechange = function() {
    		if (this.readyState == 4 && this.status == 200) {
				
				var myArray1 = eval( xhttp.responseText );
				var imagePath = path.concat(myArray1[7]);

				console.log(myArray1);
			
				//MSK-00118
				document.getElementById("id1").value =myArray1[0];
				document.getElementById("full_name1").value =myArray1[1];
				document.getElementById("i_name1").value =myArray1[2];
				document.getElementById("address1").value =myArray1[3];
				document.getElementById("gender1").value =myArray1[4];
				document.getElementById("phone1").value =myArray1[5];
				document.getElementById("email1").value =myArray1[6];
				document.getElementById("password1").value =myArray1[7];
				document.getElementById("output1").src ='../'+myArray1[8];
				
				var telformat = /\d{3}[\-]\d{3}[\-]\d{4}$/;
				var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
				
				$("#phone1" ).keydown(function(){//MSK-00119-phone
					
					var beforeValue = $(this);// this is the value before the keypress
					
    				setTimeout(function() {
        				
        				var afterValue = beforeValue.val();// this is the value after the keypress
						var mom = $('#divPhoneUpdate');
						
						if (telformat.test(afterValue) == false){
							//MSK-00120-phone
							$("#btnSubmit1").attr("disabled", true);
							mom.removeClass('has-success has-feedback');
							mom.children("span").remove();
							
							mom.addClass('has-error has-feedback');
							mom.append('<span id="spanPhoneUpdate" class="glyphicon glyphicon-remove form-control-feedback msk-set-color-tooltip" data-toggle="tooltip" title="Enter valid phone number" ></span>');	
							
						}else{
							//MSK-00121-phone
							$("#btnSubmit1").attr("disabled", false);
							mom.removeClass('has-error has-feedback');
							mom.children("span").remove();
							
							mom.addClass('has-success has-feedback');
							mom.append('<span id="spanPhoneUpdate" class="glyphicon glyphicon-ok form-control-feedback" ></span>');	
						}
				
    				}, 0);

				
				});	
				
				$("#email1" ).keydown(function(){//MSK-00119-email
					
					var beforeValue = $(this);// this is the value before the keypress
					
    				setTimeout(function() {
        				
        				var afterValue = beforeValue.val();// this is the value after the keypress
						var mom = $('#divEmailUpdate');
						
						if (mailformat.test(afterValue) == false){
							//MSK-00120-email
							$("#btnSubmit1").attr("disabled", true);
							mom.removeClass('has-success has-feedback');
							mom.children("span").remove();
							
							mom.addClass('has-error has-feedback');
							mom.append('<span id="spanEmailUpdate" class="glyphicon glyphicon-remove form-control-feedback msk-set-color-tooltip" data-toggle="tooltip" title="Enter valid email address" ></span>');	
							
						}else{
							//MSK-00121-email
							$("#btnSubmit1").attr("disabled", false);
							mom.removeClass('has-error has-feedback');
							mom.children("span").remove();
							
							mom.addClass('has-success has-feedback');
							mom.append('<span id="spanEmailUpdate" class="glyphicon glyphicon-ok form-control-feedback" ></span>');	
						}
				
    				}, 0);

				
				});	
				
				$('[type="file"]').change(function () {
					//MSK-00119-photo
					var fileSize = this.files[0].size;	
					var maxSize = 1000000;// bytes
					var ext = $('#fileToUpload1').val().split('.').pop().toLowerCase();
										
						if($.inArray(ext, ['png','jpg','jpeg']) == -1) {
    						//MSK-00120-photo
							
							output1.src="../uploads/error.png";
							
							$("#btnSubmit1").attr("disabled", true);
							$('#divPhotoUpdate1').addClass('has-error has-feedback msk-col-md-4');
							$('#divPhotoUpdate1').append('<span id="spanPhoto" class="glyphicon glyphicon-remove form-control-feedback msk-set-width-tooltip" data-toggle="tooltip" title="This file type is not allowed" ></span>');
														
						}else{
							
							if(fileSize > maxSize) {
								//MSK-00121-photo
								output1.src="../uploads/error.png";
								
								$("#btnSubmit1").attr("disabled", true);
								$('#divPhotoUpdate1').addClass('has-error has-feedback msk-col-md-4');	
								$('#divPhotoUpdate1').append('<span id="spanPhoto" class="glyphicon glyphicon-remove form-control-feedback msk-set-width-tooltip" data-toggle="tooltip" title="The image size is too large" ></span>');		
							
							}else{
								//MSK-00122-photo 
								output1.src = URL.createObjectURL(this.files[0]);
								
								$("#btnSubmit1").attr("disabled", false);	
								$('#divPhotoUpdate1').removeClass('has-error has-feedback msk-col-md-4');
								$('#spanPhoto').remove();
	   
							}
						}
					});
    		}
			
  		};	
		
    	xhttp.open("GET", "../model/admin_get.php?id=" + Id , true);//MSK-00116-Ajax End											
  		xhttp.send();
	 
};


//MSK-000125
function cTablePage(page){
	
	var currentPage1 = (page-1)*10;
	
	$(function(){
		$("#example1").DataTable({
			"displayStart": currentPage1,    
			"bDestroy": true       
   		});
						
	});
					  
	window.scrollTo(0,document.body.scrollHeight);
	
};

</script> 


<!--run insert alert using PHP & JS/jQuery  -->       
<?php
//MSK-000143-10-PHP-JS-INSERT
if(isset($_GET["do"])&&($_GET["do"]=="alert_from_insert")){
  
$msg=$_GET['msg'];

	if($msg==1){
		echo"
			<script>
			
			var myModal = $('#index_Duplicated');
			myModal.modal('show');
			
    		myModal.data('hideInterval', setTimeout(function(){
    			myModal.modal('hide');
    		}, 3000));
						
			</script>
		";
	
	}

	if($msg==2){
		echo"
			<script>
			
			var myModal = $('#insert_Success');
			myModal.modal('show');

			clearTimeout(myModal.data('hideInterval'));
    		myModal.data('hideInterval', setTimeout(function(){
    			myModal.modal('hide');
    		}, 3000));
			
			</script>
		";
	
	}

	if($msg==3){
		echo"
			<script>
			
			var myModal = $('#connection_Problem');
			myModal.modal('show');
			
			clearTimeout(myModal.data('hideInterval'));
    		myModal.data('hideInterval', setTimeout(function(){
    			myModal.modal('hide');
    		}, 3000));
			
			</script>
		";
	
	}
	
	if($msg==4){
		echo"
			<script>
			
			var myModal = $('#index_email_Duplicated');
			myModal.modal('show');
			
			clearTimeout(myModal.data('hideInterval'));
    		myModal.data('hideInterval', setTimeout(function(){
    			myModal.modal('hide');
    		}, 3000));
			
			</script>
		";
	
	}
	
	if($msg==5){
		echo"
			<script>
			
			var myModal = $('#email_Duplicated');
			myModal.modal('show');
			
			clearTimeout(myModal.data('hideInterval'));
    		myModal.data('hideInterval', setTimeout(function(){
    			myModal.modal('hide');
    		}, 3000));
			
			</script>
		";
	
	}
	
	if($msg==6){
		echo"
			<script>
			
			var myModal = $('#upload_error1');
			myModal.modal('show');
			
			clearTimeout(myModal.data('hideInterval'));
    		myModal.data('hideInterval', setTimeout(function(){
    			myModal.modal('hide');
    		}, 3000));
			
			</script>
		";
	
	}
	
}
?><!--./Insert alert -->
  	 	
</div><!-- /.content-wrapper -->  
                             
<?php include_once('footer.php');?>