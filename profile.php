<?php include 'session.php';?>
<?php
include 'admindb_con.php';
$email=$_SESSION['email'];
$sel="select * from user_data where email='$email'";
$res=mysqli_query($con,$sel);
$row=mysqli_fetch_array($res);
?>
  <title>Culminate-Personalized Job Notifications</title>
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <link rel="icon" href="assets/img/letter-c.png" type="image">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="assets/css/effects.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/contact.css">
    <link rel="stylesheet" href="assets/css/skins/bootstrap2.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="assets/fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="assets/css/skins/default.css">
    <script src="assets/js/jquery-2.2.0.js"></script>
    <script src="assets/js/jquery-3.4.1.js"></script>
    <script src="assets/js/bootstrap2.js"></script>
    <script src="assets/js/bootstrap.js" ></script>
    <script src="assets/js/popper.js"></script>
    <style>
      .navbar {
        margin-bottom: 5px;
        border-radius: 0;
        border-bottom: 4px, color:black;
      }
      footer {
        background-color: #1D1D1D;
        padding: 25px;
      }
      .ex:hover{
        font-size: 150%;
      }
      .ex:active {
        color: #3B88C3;
        text-decoration: underline;
      }
      th{
        border-left: 1px solid black;
      }
      th,td{
        text-align: left;
        padding-left: 15px;
        border-bottom:2px solid black;
      }

    </style>
  </head>
  <body>

  <nav class="navbar navbar-inverse">
    <div  style="background: url(assets/img/bg-image-4.jpg); background-size:cover;">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
       </button>
      <h2 style="font-family:Brush Script MT;  font-size:50px; background:-webkit-linear-gradient(black, grey); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Culminate</h2>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav" style="background-color:transparent;">
          <li><a class="ex" style="font-family:Arial Rounded MT;" href="profile.php">Home</a></li>
          <li><a class="ex" style="font-family:Arial Rounded MT;" href="about.php">About us</a></li>
          <li><a class="ex" style="font-family:Arial Rounded MT;" href="contact.php">Contact us</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li>
            <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown" href="#" aria-expanded="true" style="background-color:transparent;">
              <span class="user-profile"><img src="<?php echo $row['pic'];?>" class="img-circle" style="width:70px; height:70px;" alt="user avatar"></span>
            </a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink" style="width:200px">
              <center><a class="dropdown-item" href="profile_up.php">Update Personal Information</a></center><br>
              <div class="dropdown-divider"></div>
              <center><a href="logout.php"><span class="dropdown-item fa fa-sign-out"></span> Logout</a></center>
            </div>
        </li>
        </ul>
      </div>
    </div>
  </nav>

<section>
<div class="jumbotron" style="background-image:linear-gradient(#C0DCAA,#D3E4BE); padding-top:5px; padding-bottom:10px; margin:0px;">
  <div class="container-fluid">
    <div class="table-responsive">
      <h4><b>Your personal details:</b></h4>
      <table style="width:90%;">
        <tr>
          <td><th>User Id:</th><td><?php echo $row['user_id']; ?></td></td>
          <td><th>Name:</th><td><?php echo $row['name']; ?></td></td>
          <td><th>Date of Birth:</th><td><?php echo $row['dob']; ?></td></td>
          <td><th>Gender:</th><td><?php echo $row['gender']; ?></td></td>
          <td><th>Phone:</th><td><?php echo $row['phone']; ?></td></td>
          <td><th>Email:</th><td><?php echo $row['email']; ?></td></td>
        </tr>
        <tr>
          <td><th>Your City:</th><td><?php echo $row['city']; ?></td></td>
          <td><th>Qualification:</th><td><?php echo $row['qualification']; ?></td></td>
          <td><th>Your field of interest:</th><td><?php echo $row['field']; ?></td></td>
          <td><th>Preferred work City:</th><td><?php echo $row['location'] ?></td></td>
        </tr>
      </table>
    </div>
  </div>
</div>
</section>
<section style="background: url(assets/img/bg-image-4.jpg); background-size:cover; height:480px;">
<div class="container-fluid bg-3 text-center">
  <h3 style="font-family:Brush Script MT;  font-size:50px; background: white; -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Jobs for you</h3><br>
  <div class="row">
    <div class="col-sm-6">
      <h4 style="font-family:Brush Script MT;  font-size:30px; background: white; -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Jobs near you</h4>
      <div style="height:300px; width:100%; overflow-y:scroll; background-image:linear-gradient(#C0DCAA,#D3E4BE);">
        <table>
        <thead>
          <td>Sno.</td>
          <td>Company:</td>
          <td>Description:</td>
          <td>Link to apply:</td>
        </thead>
        <?php
        $see=$row['city'];
        $s="select * from job_data where location='$see'";
        $r=mysqli_query($con,$s);
        $i=1;
        while($w=mysqli_fetch_array($r))
        {
        ?>
        
        <tbody>
          <td><?php echo $i;?></td>
          <td><p><?php echo $w['company']; ?></p></td>
          <td><p><?php echo $w['description']; ?></p></td>
          <td><a href="profile.php"><p><?php echo $w['link']; ?></p></a></td>
        </tbody>
        <?php
        $i++;
        }
        ?>
        </table>
      </div>
    </div>
    <div class="col-sm-6">
      <h4 style="font-family:Brush Script MT;  font-size:30px; background: white; -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Jobs you may prefer</h4>
      <div style="height:300px; width:100%; overflow-y:scroll; background-image:linear-gradient(#C0DCAA,#D3E4BE);">

        <?php
        $s="select * from job_data";
        $r=mysqli_query($con,$s);
        $i=1;
        ?>
        <table>
        <thead>
          <td>Sno.</td>
          <td>Company:</td>
          <td>Description:</td>
          <td>Link to apply:</td>
        </thead>
        <?php
        while($w=mysqli_fetch_array($r))
        {
        ?>
        <tbody>
          <td><?php echo $i;?></td>
          <td><p><?php echo $w['company']; ?></p></td>
          <td><p><?php echo $w['description']; ?></p></td>
          <td><a href="profile.php"><p><?php echo $w['link']; ?></p></a></td>
        </tbody>        
        
        <?php
        $i++;
        }
        ?>
        </table>
      </div>
    </div>
  </div>
</div>
</section>
<?php include 'foot.php';?>
