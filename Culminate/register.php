<!DOCTYPE html>
<html lang="zxx">

<head>
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        '../../../../www.googletagmanager.com/gtm5445.html?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-TAGCODE');
  </script>
    <title>Culminate-Register</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <link type="text/css" rel="stylesheet" href="assets/css/bootstrap.css">
    <link type="text/css" rel="stylesheet" href="assets/fonts/font-awesome/css/font-awesome.css">
    <link type="text/css" rel="stylesheet" href="assets/fonts/flaticon/font/flaticon.css">

    <link rel="shortcut icon" href="assets/img/letter-c.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800%7CPoppins:400,500,700,800,900%7CRoboto:100,300,400,400i,500,700">

    <link type="text/css" rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" id="style_sheet" href="assets/css/skins/default.css">

</head>
<body id="top">
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TAGCODE"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<div class="page_loader"></div>

<div class="login-3 tab-box">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-7 col-md-12 col-pad-0 form-section">
                <div class="login-inner-form">
                    <div class="details">
                    <h2 style="font-family:Brush Script MT; font-size:50px; background:-webkit-linear-gradient(black, grey); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Culminate</h2>
                        <h3>Create an account</h3>
                        <form action="u_r.php" method="POST">
                          <div class="form-group">
                              <input type="text" name="name" class="input-text" placeholder="Full Name" style=" box-shadow:2px 2px 5px 1.5px grey;" required>
                          </div>
                            <div class="form-group">
                                <input type="email" name="email" class="input-text" placeholder="Email Address" style=" box-shadow:2px 2px 5px 1.5px grey;" required>
                            </div>
                            <div class="form-group" style="width:1000px;">
                              <table>
                                <tr style="width:1000px;">
                                  <td style="width:350px;">
                                    <input type="password" name="password" class="input-text" placeholder="Create Password" style=" box-shadow:2px 2px 5px 1.5px grey;" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,12}" required>
                                  </td>
                                  <td style="width:180px">
                                    <small id="passwordHelpInline" class="text-muted">
                                        Must be 8-12 characters long with at least one uppercase, lowercase, numeric and special character.
                                    </small>
                                  </td>
                                </tr>
                              </table>
                            </div>
                            <div class="checkbox clearfix">
                                <div class="form-check checkbox-theme">
                                    <input class="form-check-input" type="checkbox" value="" id="termsOfService">
                                    <label class="form-check-label" for="termsOfService">
                                        I agree to the<a href="#" class="terms">terms of service</a>
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" name="signup" class="btn-md btn-theme btn-block">Sign up</button>
                            </div>
                            <p class="none-2">Already a member?<a href="login.php"> Login here</a></p>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-12 col-pad-0 bg-img none-992">
                <div class="informeson">
                    <div class="btn-section">
                        <a href="login.php" class="link-btn">Login</a>
                        <a href="register.php" class="link-btn active">Register</a>
                    </div>
<?php include 'logfoot.php';?>
