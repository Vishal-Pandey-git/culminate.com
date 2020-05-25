<?php include 'session.php'; ?>
<?php
include 'admindb_con.php';
$email=$_SESSION['email'];
$sel="select * from user_data where email='$email'";
$res=mysqli_query($con,$sel);
$row=mysqli_fetch_array($res);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Culminate- Contact us</title>
  <link rel="icon" href="assets/img/letter-c.png" type="image">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="assets/css/effects.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/contact.css">
  <link rel="stylesheet" href="assets/css/skins/bootstrap2.css">
  <link rel="stylesheet" href="assets/css/skins/default.css">
  <link rel="stylesheet" href="assets/fonts/font-awesome/css/font-awesome.css">
  <link rel="stylesheet" href="assets/fonts/flaticon/font/flaticon.css">
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
        <li><a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown" href="#" aria-expanded="true" style="background-color:transparent;">
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
  <div class="container-fluid" style="background: url(assets/img/bg-image-4.jpg); background-size:cover;">
  <div style="text-align:center">
    <h2 style="font-family:Brush Script MT;  font-size:50px; background:-webkit-linear-gradient(black,grey,white,transparent); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Contact Us</h2>
    <p style="font-size:18px; background:-webkit-linear-gradient(grey,white,transparent); -webkit-background-clip: text; -webkit-text-fill-color: transparent;font-family:Lucida Handwriting;">Leave us your thoughts here :</p>
  </div>
  <div class="row">
    <div class="column">
      <img src="assets/img/bg-image-6.jpg" style="width:100%; border-radius:5px;">
    </div>
    <div class="column">
      <form action="contact.php" method="POST">
        <label for="fname">First Name</label>
        <input type="text" id="fname" name="firstname" placeholder="Your name.." style="border-radius:5px;">
        <label for="lname">Last Name</label>
        <input type="text" id="lname" name="lastname" placeholder="Your last name.." style="border-radius:5px;">
        <label for="state">State</label>
        <select id="country" name="country" style="border-radius:5px;">
          <option value="uttarpradesh">Uttar Pradesh</option>
          <option value="delhi">New Delhi</option>
          <option value="maharashtra">Maharashtra</option>
        </select>
        <label for="subject">Subject</label>
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:170px; border-radius:5px;"></textarea>
        <input type="submit" value="Submit" style="border-radius:5px;">
      </form>
    </div>
  </div>
</div>
</section>
<?php include 'foot.php';?>
