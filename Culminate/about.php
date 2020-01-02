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
    <title>Culminate-About us</title>
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

<section class="flexslider" style="margin-left:-40px;">
      <ul class="slides">
        <li style="background: url(assets/img/bg-image-4.jpg); background-size:cover;" class="overlay">
          <div class="container" style="background:transparent;">
            <div class="row">
              <div class="col-md-8 col-md-offset-2">
                <div class="probootstrap-slider-text text-center">
                  <h1 class="probootstrap-heading" style="color:white; font-family:Brush Script MT; font-size:50px;">About Us</h1><br>
                  <h3 class="probootstrap-subheading" style="color:white; font-family: Comic Sans MS;">We provide an easy to view and understand interface for you to find a suitable job without any trouble. A collection of jobs is always ready with us to show you, so that you can find a job which may satisfy you with ease. There are jobs near you which you may miss for any reason. We let you know any job which is in your city or state so that you don't miss any opportunity. We have also managed to show you the jobs that you may find suitable for yourselves according to your mentioned qualification. You may anytime update your personal information so that you can get an up to date list of jobs ready for you. We continuosly work hard to make sure you don't miss a chance in your life, that is what we do. A very good luck from all of us.<h2 style="font-family:Brush Script MT; font-size:50px; background:-webkit-linear-gradient(black, grey);-webkit-background-clip: text; -webkit-text-fill-color: transparent;">~Team Culminate</h2>
                  </h3>
                </div>
              </div>
            </div>
          </div>
        </li>
      </ul>
    </section>


    <section class="probootstrap-section"style="background: url(assets/img/bg-image-4.jpg); background-size:cover;">
      <div class="container" style="background:transparent;">
        <div class="row">
          <div class="col-md-6 col-md-offset-3 text-center section-heading probootstrap-animate">
            <h2 style="font-family:Brush Script MT;  font-size:50px; background:white; -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Team</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3 col-sm-6 col-xs-6 probootstrap-animate">
            <div class="hovereffect">
              <img src="assets/img/vishal.jpg" alt="" class="img-responsive img-rounded">
              <div class="overlay">
                <h2>Vishal Pandey</h2>
                <a class="info"><span class="position">Team Leader, Designer & Developer</span></a>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-6 probootstrap-animate">
            <div class="hovereffect">
              <img src="assets/img/piyush.jpg" alt="" class="img-responsive img-rounded">
              <div class="overlay">
                <h2>Piyush</h2>
                <a class="info"><span class="position">Vice-Team Leader, Developer & Security</span></a>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-6 probootstrap-animate">
            <div class="hovereffect">
              <img src="assets/img/shikha.jpg" alt="" class="img-responsive img-rounded">
              <div class="overlay">
                <h2>Shikha Chaurasia</h2>
                <a class="info"><span class="position">Database & Creative</span></a>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-6 probootstrap-animate">
            <div class="hovereffect">
              <img src="assets/img/abhay.jpg" alt="" class="img-responsive img-rounded">
              <div class="overlay">
                <h2>Abhay Yadav</h2>
                <a class="info"><span class="position">Database & Debugger</span></a>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-6 probootstrap-animate">
            <div class="hovereffect">
              <img src="assets/img/rohan.jpg" alt="" class="img-responsive img-rounded">
              <div class="overlay">
                <h2>Rohan Gupta</h2>
                <a class="info"><span class="position">Tester & Creative</span></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


<section style="background: url(assets/img/bg-image-4.jpg); background-size:cover;">
  <div><center><h2 style="font-family:Brush Script MT;  font-size:50px; background: white; -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Testimonial</h2></center></div>
  <div class="container" style="background:transparent;">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">

    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
    </ol>

    <div class="carousel-inner">

      <div class="item active">
        <center><img src="assets/img/vishal.jpg" alt="Vishal" style="display: block; max-width:400px; max-height:400px; width: auto; height: auto;"></center>
        <div class="carousel-caption">
          <h3 style="font-family:Brush Script MT;  font-size:50px; background:-webkit-linear-gradient(black,red,red,black); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Vishal</h3>
          <p style="font-size:20px; font-family:Lucida Handwriting;">Success is usually the culmination of controlling failure.</p>
        </div>
      </div>

      <div class="item">
        <center><img src="assets/img/piyush.jpg" alt="Piyush" style="display: block; max-width:400px; max-height:400px; width: auto; height: auto;"></center>
        <div class="carousel-caption">
          <h3 style="font-family:Brush Script MT;  font-size:50px; background:-webkit-linear-gradient(black,red,black); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Piyush</h3>
          <p style="font-size:20px; font-family:Lucida Handwriting;">Sometimes later becomes never. Do it now.</p>
        </div>
      </div>

      <div class="item">
        <center><img src="assets/img/shikha.jpg" alt="Shikha" style="display: block; max-width:400px; max-height:400px; width: auto; height: auto;"></center>
        <div class="carousel-caption">
          <h3 style="font-family:Brush Script MT;  font-size:50px; background:-webkit-linear-gradient(white,red,black); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Shikha</h3>
          <p style="font-size:20px; font-family:Lucida Handwriting;">Push yourself, because no one else is going to do it for you.</p>
        </div>
      </div>

      <div class="item">
        <center><img src="assets/img/abhay.jpg" alt="Abhay" style="display: block; max-width:400px; max-height:400px; width: auto; height: auto;"></center>
        <div class="carousel-caption">
          <h3 style="font-family:Brush Script MT;  font-size:50px; background:-webkit-linear-gradient(white,red,black); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Abhay</h3>
          <p style="font-size:20px; font-family:Lucida Handwriting;">Dream bigger.</p>
        </div>
      </div>

      <div class="item">
        <center><img src="assets/img/rohan.jpg" alt="Rohan" style="display: block; max-width:400px; max-height:400px; width: auto; height: auto;"></center>
        <div class="carousel-caption">
          <h3 style="font-family:Brush Script MT;  font-size:50px; background:-webkit-linear-gradient(white,red,black); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Rohan</h3>
          <p style="font-size:20px; font-family:Lucida Handwriting;">Success doesn't just find you</p>
        </div>
      </div>

    </div>

    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="fa fa-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="fa fa-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

</section>




<?php include 'foot.php';?>
