<?php include 'session.php';?>
<html>
 <head>
   <meta charset="utf-8"/>
   <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
   <meta name="description" content=""/>
   <meta name="author" content=""/>
   <title>Admin Panel</title>
   <link rel="icon" href="assets/images/letter-c.png" type="image/x-icon">
   <link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet"/>
   <link href="assets/css/bootstrap.min.css" rel="stylesheet"/>
   <link href="assets/css/animate.css" rel="stylesheet" type="text/css"/>
   <link href="assets/css/icons.css" rel="stylesheet" type="text/css"/>
   <link href="assets/css/sidebar-menu.css" rel="stylesheet"/>
   <link href="assets/css/app-style.css" rel="stylesheet"/>

 </head>

 <body>

  <div id="wrapper" >

    <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true" style="background:url(assets/images/bg-image-4.jpg); background-size:cover;">
      <div class="brand-logo" style="height:50px;">
       <a href="index.php" style="height:50px;">
        <h3 style="float:left; font-family:Brush Script MT; font-size:40px; background:-webkit-linear-gradient(black, grey); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Culminate</h3>
      </a>
    </div>
    <ul class="sidebar-menu do-nicescrol">
       <li class="sidebar-header">MAIN NAVIGATION</li>
       <li>
         <a href="index.php" class="waves-effect">
           <i class="zmdi zmdi-view-dashboard"></i> <span>Dashboard</span> <i class="fa fa-angle-left pull-right"></i>
         </a>
         <ul class="sidebar-submenu">
           <li><a href="index.php"><i class="zmdi zmdi-star-outline"></i>Student Dashboard</a></li>
           <li><a href="index.php"><i class="zmdi zmdi-star-outline"></i>Recruiter Dashboard</a></li>
         </ul>
       </li>
    </div>

<header class="topbar-nav">
 <nav class="navbar navbar-expand fixed-top bg-white">
  <ul class="navbar-nav mr-auto align-items-center">
    <li class="nav-item">
      <a class="nav-link toggle-menu" href="javascript:void();">
       <i class="icon-menu menu-icon"></i>
     </a>
    </li>
    <li class="nav-item">
      <form class="search-bar">
        <input type="text" class="form-control" placeholder="Enter keywords">
         <a href="javascript:void();"><i class="icon-magnifier"></i></a>
      </form>
    </li>
  </ul>
  <?php
  include 'admindb.php';
  $email=$_SESSION['email'];
  $sel_data="select * from admin where email='$email'";
  $res=mysqli_query($db,$sel_data);
  $row=mysqli_fetch_array($res);
  ?>
  <ul class="navbar-nav align-items-center right-nav-link">
    <li class="nav-item dropdown-lg">

    <li class="nav-item">
      <p class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown">
        <span class="user-profile"><img src="assets/images/<?php echo "assets/images/".$row['pic'].".jpg";?>" style="width:49px;height:49px;" class="img-circle" alt="user avatar"></span>
      </p>
      <ul class="dropdown-menu dropdown-menu-right">
       <li class="dropdown-item user-details">
        <a href="javaScript:void();">
           <div class="media">
				<div class="media-body">
				<h6 class="mt-2 user-title"><?php echo $row['name']; ?></h6>
				<p class="user-subtitle"><?php echo $row['email']; ?></p>
				</div>
           </div>
          </a>
        </li>
        <li class="dropdown-divider"></li>
        <li class="dropdown-item"><i class="icon-power mr-2"></i><a href="logout.php"> Logout</a></li>
      </ul>
    </li>
	</li>
  </ul>
</nav>
</header>


<div class="clearfix"></div>

  <div class="content-wrapper">
    <div class="container-fluid">

      <div class="row">
         <div class="col-12 col-lg-4 col-xl-12">
           <div class="card">
             <div class="card-header border-0">
              User List
             </div>
            <div class="table-responsive">
             <table class="table align-items-center table-flush">
               <thead>
                <tr>
                 <!--<th>Photo</th>-->
                 <th>Name</th>
                 <th>Date of Birth</th>
                 <th>Gender</th>
                 <th>City</th>
                 <th>Email</th>
				         <th>Qualification</th>
				         <th>Job Location</th>
				         <th>Delete</th>
                </tr>
               </thead>
               <tbody>
                <?php
				include 'admindb.php';
				$sel_data="select*from user_data";
				$res=mysqli_query($db,$sel_data);
        $i=1;
				while($row=mysqli_fetch_array($res))
				{
				?>
				<tr align="left">
				<td><img src="<?php echo $row['pic']; ?>"style="height:30px;"class="img-circle"></td>
				<td><?php echo $row['name'];?></td>
        <td><?php echo $row['dob'];?></td>
        <td><?php echo $row['gender'];?></td>
				<td><?php echo $row['city'];?></td>
				<td><?php echo $row['email'];?></td>
				<td><?php echo $row['qualification'];?></td>
				<td><?php echo $row['location'];?></td>
				<td>
				<form action="delete.php"method="POST">
				<input type="hidden" name="user_id" value="<?php echo $row['user_id']; ?>">
				<input type="hidden" name="old_image" value="<?php echo $row['pic']; ?>">
				<input type="submit"value="Delete"name="delete_user"onclick="return confirm('Are your Sure...?')">
				</form>
				</td>
				</tr>
				<?php
        $i++;
				}
				?>
               </tbody>
             </table>
           </div>
           </div>
         </div>
        </div>
        <div class="row">
           <div class="col-12 col-lg-4 col-xl-12">
             <div class="card">
              <div class="card-header border-0">
                     Jobs
                     <a href="new_job.php" style="float:right;"><input type="button" name="insert" value="Insert New Job"></a>
             </div>
              <div class="table-responsive">
                <table class="table align-items-center table-flush" align="center"width="85%">
                      <tr>
                        <div class="card-header border-0">
                          <th align="center">Company</th>
                          <th align="center" style="width:50px;">Description</th>
                          <th align="center">Link</th>
                          <th align="center">Location</th>
                          <th align="center">Delete</th>
                        </div>
                      </tr>
                      <?php
                          include'admindb.php';
                          $sel_data="select*from job_data";
                          $res=mysqli_query($db,$sel_data);
                          $c=0;
                          while($row=mysqli_fetch_array($res))
                          {
                         ?>
                         <tr >
                         <td align="center"><?php echo $row['company']; ?></td>
                         <td align="center"><?php echo $row['description'];?></td>
                         <td align="center"><?php echo $row['link']; ?></td>
                         <td align="center"><?php echo $row['location']; ?></td>
                         <td align="center">
                         <form action="delete_job.php"method="POST">
                         <input type="hidden" name="s_no" value="<?php echo $row['s_no']; ?>">
                         <input type="submit"value="Delete"name="delete_job"onclick="return confirm('Are your Sure...?')">
                         </form>
                         </td>
                         </tr>

                         <?php
                         $c++;
                         }
                         ?>
                      </table>
                         </div>

                     </div>
                   </div>
                 </div>
      </div>



    </div>


    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>


    	<footer class="footer">
          <div class="container">
            <div class="text-center">
              Copyright © 2018 Culminate Admin
            </div>
          </div>
        </footer>

      </div>

      <script src="assets/js/jquery.min.js"></script>
      <script src="assets/js/popper.min.js"></script>
      <script src="assets/js/bootstrap.min.js"></script>

      <script src="assets/plugins/simplebar/js/simplebar.js"></script>
      <script src="assets/js/waves.js"></script>
      <script src="assets/js/sidebar-menu.js"></script>
      <script src="assets/js/app-script.js"></script>
      <script src="assets/plugins/Chart.js/Chart.min.js"></script>
      <script src="assets/plugins/peity/jquery.peity.min.js"></script>
      <script src="assets/js/index.js"></script>

    </body>

    </html>
