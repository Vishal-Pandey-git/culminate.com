<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>Admin Log in</title>
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

<body style="background: url(assets/images/bg-image-4.jpg); background-size:cover;">
 <!-- Start wrapper-->
 <div id="wrapper">
	<div class="card card-authentication1 mx-auto my-5">
		<div class="card-body">
		 <div class="card-content p-2">
		 	<div class="text-center">
		 		<h2 style="font-family:Brush Script MT; font-size:50px; background:-webkit-linear-gradient(black, grey); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Culminate Admin</h2>
		 	</div>
		  <div class="card-title text-uppercase text-center py-3">Sign In</div>
		    <form method="POST" action="login.php">
			  <div class="form-group">
			  <label for="exampleInputUsername" class="">Email Id</label>
			   <div class="position-relative has-icon-right">
				  <input type="email" name="email" id="exampleInputUsername" class="form-control input-shadow" placeholder="Enter Email Id">
				  <div class="form-control-position">
					  <i class="icon-user"></i>
				  </div>
			   </div>
			  </div>
			  <div class="form-group">
			  <label for="exampleInputPassword" class="">Password</label>
			   <div class="position-relative has-icon-right">
				  <input type="password"name="password"id="exampleInputPassword" class="form-control input-shadow" placeholder="Enter Password">
				  <div class="form-control-position">
					  <i class="icon-lock"></i>
				  </div>
			   </div>
			  </div>
			<div class="form-row">
			 <div class="form-group col-6">
			   <div class="icheck-material-primary">
                <input type="checkbox" id="user-checkbox"/>
                <label for="user-checkbox">Remember me</label>
			  </div>
			 </div>
			</div>
			 <button type="submit" class="btn btn-primary shadow-primary btn-block waves-effect waves-light" name="signin">Sign In</button>

			 </form>
		   </div>
		  </div>
		  <div class="card-footer text-center py-3">
		  </div>
	     </div>

    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
	</div

  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>

</body>

</html>
