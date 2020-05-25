<?php include 'session.php'; ?>
<html lang="en">

<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>Job Insertion</title>
  <!--favicon-->
  <link rel="icon" href="assets/images/letter-c.png" type="image/x-icon">
  <!-- Bootstrap core CSS-->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="assets/css/animate.css" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="assets/css/icons.css" rel="stylesheet" type="text/css"/>
  <!-- Custom Style-->
  <link href="assets/css/app-style.css" rel="stylesheet"/>

</head>

<body class="bg-dark">
 <!-- Start wrapper-->
 <div id="wrapper">
	<div class="card card-authentication1 mx-auto my-5">
		<div class="card-body">
		 <div class="card-content p-2">
		 	<div class="text-center">
		 		<img src="assets/images/logo-icon.png" alt="logo icon">
		 	</div>
		  <div class="card-title text-uppercase text-center py-3">New Job</div>
		    <form method="POST" action="insert_job.php">
			  <div class="form-group">
			  <label for="exampleInputUsername" >Company</label>
			   <div class="position-relative has-icon-right">
				  <input type="text" name="company" id="exampleInputUsername" class="form-control input-shadow" placeholder="Enter Company Name">
				  <div class="form-control-position">
					  <i class="icon-user"></i>
				  </div>
			   </div>
			  </div>
			  <div class="form-group">
			  <label for="exampleInputUsername" >Job Discription</label>
			   <div class="position-relative has-icon-right">
				  <input type="text"name="discription"id="exampleInputUsername" class="form-control input-shadow" placeholder="Enter Job" >
				  <div class="form-control-position">
					  <i class="icon-lock"></i>
				  </div>
			   </div>
			  </div>

        <div class="form-group">
			  <label for="exampleInputUsername" >Link</label>
			   <div class="position-relative has-icon-right">
				  <input type="url"name="link"id="exampleInputUsername" class="form-control input-shadow" placeholder=" Provide worling link " >
				  <div class="form-control-position">
					  <i class="icon-lock"></i>
				  </div>
			   </div>
			  </div>

        <div class="form-group">
			  <label for="exampleInputUsername" >Job Location</label>
			   <div class="position-relative has-icon-right">
				  <input type="text"name="location"id="exampleInputUsername" class="form-control input-shadow" placeholder="Enter Job Location" >
				  <div class="form-control-position">
					  <i class="icon-lock"></i>
				  </div>
			   </div>
			  </div>


			<div class="form-row">
			 <div class="form-group col-6">
			   <div class="icheck-material-primary">
                <input type="checkbox" id="user-checkbox" checked="" />

			  </div>
			 </div>

			</div>
			 <button type="submit" class="btn btn-primary shadow-primary btn-block waves-effect waves-light" name="jobinsert">Submit</button>

			 </form>
		   </div>
		  </div>
		  <div class="card-footer text-center py-3">
		    <!--p class="text-muted mb-0">Do not have an account? <a href="signup.php"> Sign Up here</a></p-->
		  </div>
	     </div>

     <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
	</div><!--wrapper-->

  <!-- Bootstrap core JavaScript-->
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>

</body>

</html>
