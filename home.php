<!DOCTYPE html>
<html>
<head>
	
	 <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Home Page</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <link rel="stylesheet" type="text/css" href="js/jquery-1.11.1.js">

  <link rel="stylesheet" href="dist/css/stylesheet.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/square/blue.css">

</head>
<body>
	<div id="home_container">
		<?php include('header.php');  ?>
	</div>
	<div style="clear: both;"></div>

	<div class="container overall" style="border: none;">
		<div class="col-md-3 first_colmn">
			<div id="first_colmn_img">
				<img src="dist/img/user8.jpg" class="img-rounded" alt="Cinque Terre">
				<hr/>
				<h4>Jikio Paer</h4>
				<p>Staff ID : SP-12311</p>
				<p>Head of Department</p>
			</div>
			<div id="first_colmn_name">
				
			</div>
		</div>
		<div class="col-md-5 second_colmn">
		<div id="second_colmn_profile">
			<div class="panel panel-success profile_panel" style="border: 1px solid seagreen;">
		      <div class="panel-heading"><span class="glyphicon glyphicon-user" style="margin-right: 4px;"> </span>Personal Details
		      <a href="#" data-toggle="modal" data-target ="#myModal" style="margin-left: 170px; font-size: 13px;">
		      View Profile</a>
		       </div>
		      <div class="panel-body profile_body">
		      		<div class="profile_body_form">
		      			Full Name:
		      		</div>
		      		<div class="profile_body_form">
		      			Gender:
		      		</div>
		      		<div class="profile_body_form">
		      			Date Of Birth:
		      		</div>
		      		<div class="profile_body_form">
		      			Year of Entry:
		      		</div>
		      		<div class="profile_body_form">
		      			Phone Number:
		      		</div>
		      		<div class="profile_body_form">
		      			Email:
		      		</div>
		      		<div class="profile_body_form">
		      			Home Address:
		      		</div>
		      </div>
		    </div>
			
		</div>
			
		</div>
		<div class="col-md-3 third_colmn">
		<div id="third_overall">
			<div class="third_grid">
				<h5>0/30</h5>
				<h5>Attendance</h5>
			</div>
			<div class="third_grid"></div>
			<div class="third_grid"></div>
		</div>
		<div style="clear: both;"></div>
		<div id="notice_board">
			<div class="panel panel-success" style="border: 1px solid seagreen;">
      			<div class="panel-heading"> <span class="glyphicon glyphicon-bell"></span> Notice Board</div>
      			<div class="panel-body notice_body"></div>
    			</div>

		</div>
		</div>
	</div>

	<div class="second_row">
		<div class="container">
			<div class="col-md-6 mail_div">
				<div class="panel panel-success" style="border: 1px solid seagreen;">
      			<div class="panel-heading"><span class="glyphicon glyphicon-triangle-left"></span> Recent Mails
      			<a href="#" style="margin-left: 310px; font-size: 13px;">
		      Go To Mailbox</a>
      			</div>
      			<div class="panel-body event_body"> There is no Recent mail to display</div>
    			</div>

			</div>
			<div class="col-md-3 event">
				<div class="panel panel-success" style="border: 1px solid seagreen;">
			      <div class="panel-heading"> <span class="glyphicon glyphicon-bell"></span>Upcoming Event</div>
			      <div class="panel-body event_body"></div>
			    </div>

			</div>
		</div>
		
	</div>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" >
  <div class="modal-dialog"style="width:1000px;">
    <div class="modal-content" style=" height:600px;width:1100px;margin-left:-50px;">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel"><center><strong>Personal Information</strong></center></h4>
      </div>
	  <form action="add_personal_info.php" method="POST" enctype="multipart/form-data">
      <div class="modal-body">
<div class="col-lg-4">
										<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Gender:</span>
												<select name="sex" class="form-control input-sm" required>
												<option></option>
												<option value="Male">Male</option>
												<option value="Female">Female</option>
												</select>
											</div>
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Residential Address:</span>
												<textarea name="residential_address" class="form-control input-sm"  rows="1" required></textarea>
											</div>
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Permanent Address:</span>
												<textarea name="permanent_address"  class="form-control input-sm"  rows="1" required> </textarea>
											</div>
											<div class="input-group input-sm">
											  <span class="input-group-addon input-sm">Civil Status</span>
												 <select name="civil_status" class="form-control input-sm" id="animal" required>
															<option value=""></option>
															<option value="Single">Single</option>
															<option value="Married">Married</option>
															<option value="Annulled">Annulled</option>
															<option value="Widowed">Widowed</option>
															<option value="Seperated">Seperated</option>
													
														</select>
											</div>
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Height:</span>
												<input type="text" name="height" class="form-control input-sm" required>
												
								
											</div>
												<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Position:</span>
												<input type="text" name="position" class="form-control input-sm" required>
											</div>
												<div class="input-group input-sm">
												<span class="input-group-addon input-sm">GSIS ID No.:</span>
												<input type="text" name="gsis_id_no" class="form-control input-sm" required>
											</div>
												<div class="input-group input-sm">
												<span class="input-group-addon input-sm">PhilHealth.:</span>
												<input type="text" name="philhealth_no" class="form-control input-sm" required>
											</div>
									
											</br>
											</br>
													<div class="input-group input-sm">
												<span class="input-group-addon input-sm" >Image Upload.:</span>
												<input type="file" name="file" id="file"  class="btn btn-outline btn-success">
											</div>
									</div>
									<div class="col-lg-4">
										<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Date of Birth:</span>
												<input type="date" name="date_of_birth" class="form-control input-sm" required>
											</div>
												<div class="input-group input-sm">
												<span class="input-group-addon input-sm">ZIP Code:</span>
												<input type="text" name="ra_zip_code" class="form-control input-sm" required>
											</div>
												<div class="input-group input-sm">
												<span class="input-group-addon input-sm">ZIP Code:</span>
												<input type="text" name="pa_zip_code" class="form-control input-sm" required>
											</div>
												<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Citizenship:</span>
												<input type="text" name="citizenship" class="form-control input-sm" required>
											</div>
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Weight:</span>
												<input type="text" name="weight" class="form-control input-sm" required>
											</div>
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Department:</span>
												<input type="text" name="department" class="form-control input-sm" required>
											</div>
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Agency Employee No.:</span>
												<input type="text" name="agency_employee_no" class="form-control input-sm" required>
											</div>
												<div class="input-group input-sm">
												<span class="input-group-addon input-sm">CSC ID No:</span>
												<input type="cis_no" name="cis_no" class="form-control input-sm" required>
											</div>
											
											
									</DIV>
									<div class="col-lg-4">
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Place of Birth:</span>
												<input type="text" name="place_birth" class="form-control input-sm" required>
											</div>
									
										
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Telephone No.:</span>
												<input type="text" name="ra_telephone_no" class="form-control input-sm" required>
											</div>
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Telephone No.:</span>
												<input type="text" name="pa_telephone_no" class="form-control input-sm" required>
											</div>
										
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">E-Mail Address:</span>
												<input type="text" name="email_address" class="form-control input-sm" required>
											</div>
												<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Blood Type:</span>
												<input type="text" name="bloodtype" class="form-control input-sm" required>
											</div>
												<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Cellphone No.:</span>
												<input type="text" name="cellphone_no" class="form-control input-sm" required>
											</div>
												<div class="input-group input-sm">
												<span class="input-group-addon input-sm">TIN:</span>
												<input type="text" name="tin" class="form-control input-sm" required>
											</div>	
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">SSS No.:</span>
												<input type="text" name="sss_no" class="form-control input-sm" required>
											</div>	
											
											<div class="input-group input-sm">
												<span class=" input-group-addon input-sm ">Pag-ibig No.:</span>
												<input type="text" name="pag_ibig_id_no" class="form-control input-sm" required>
											</div>	
									
											
											
									</div>
      </div>
	  </br>
	  </br>
	  </br>
	  	<div class="row">
	  	<div class="col-lg-12">
      <div class="modal-footer">
        <button type="button" class="btn btn- btn-danger" data-dismiss="modal">Close</button>
        <button type="submit"  name="submit" class="btn btn-success">Save</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      </div>
      
      </div>
      </div>
	  </form>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<?php //include('footer.php') ?>

<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="plugins/iCheck/icheck.min.js"></script>
</body>
</html>