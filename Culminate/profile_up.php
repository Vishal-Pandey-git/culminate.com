<?php include 'session.php'; ?>
<?php
include 'admindb_con.php';
$email=$_SESSION['email'];
$sel="select * from user_data where email='$email'";
$res=mysqli_query($con,$sel);
$row=mysqli_fetch_array($res);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="assets/fonts/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <meta charset="utf-8">
    <link rel="icon" href="assets/img/letter-c.png" type="image">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Culminate-Personal Information</title>
    <style media="screen">
      h4{
        font-family:Bookman Old Style;
        background: white;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
      }
    </style>
  </head>
  <body style="background: url(assets/img/bg-image-4.jpg); background-size:cover; background-size: 1380px 660px;">
    <div style="float:center;">
      <form method="POST" action="u_u.php" enctype="multipart/form-data">
      <table align="center" border="0">
        <tr>
        <td>
          <label for="">
            <h4>Image</h4>
          </label>
        </td>
        <td><input type="file" class="form-control-file" id="exampleFormControlFile1" name="pic"></td>
        </tr>
      <tr>
        <td>
        <label for="">
        <h4>Name</h4>
        </label>
        </td>
      <td><input class="form-control" type="text" name="name" value="<?php echo $row['name']; ?>"></td>
      </tr>
      <tr>
        <td>
        <label for="">
        <h4>Gender</h4>
        </label>
        </td>
      <td required>
        <div class="form-check" style="float:left; margin-right:10px;">
          <input class="form-check-input" type="radio" name="gender" <?php if($row['gender']=='Male'){echo 'checked';}; ?> id="exampleRadios1" value="Male">
          <label class="form-check-label" for="exampleRadios1">
            Male
          </label>
        </div>
        <div class="form-check" style="float:left;">
          <input class="form-check-input" type="radio" name="gender" <?php if($row['gender']=='Female'){echo "checked";}; ?> id="exampleRadios1" value="Female">
          <label class="form-check-label" for="exampleRadios1">
            Female
          </label>
        </div>
      </td>
      </tr>
      <tr>
        <td>
        <label for="">
        <h4>Date of Birth</h4>
        </label>
        </td>
      <td>
      <input class="form-control" type="date" name="dob" value="<?php echo $row['dob']; ?>" style="width:auto;">
      </td>
      </tr>
      <tr>
        <td>
        <label for="">
        <h4>Your City</h4>
        </label>
        </td>
      <td><select name="city" class="form-control" style="width:auto;">
      <option value="<?php echo $row['city']; ?>"><?php echo $row['city']; ?></option>
      <option value="Delhi">Delhi</option>
      <option value="Agra">Agra</option>
      <option value="Kanpur">Kanpur</option>
      <option value="Mumbai">Mumbai</option>
      <option value="Other">Other</option>
      </td>
      </tr>
      <tr>
        <td>
        <label for="">
        <h4>Email</h4>
        </label>
        </td>
        <td><input class="form-control" style="width:auto;" type="email" name="email" value="<?php echo $row['email']; ?>" disabled> </td>
      </tr>
      <tr>
        <td>
        <label for="">
        <h4>Contact</h4>
        </label>
        </td>
      <td><input class="form-control" style="width:auto;" type="number" name="phone" value="<?php echo $row['phone']; ?>"></td>
      </tr>


      <tr>
        <td>
        <label for="">
        <h4>Qualification</h4>
        </label>
        </td>
      <td><select class="form-control" style="width:auto;" name="qualification">
      <option value="<?php echo $row['qualification']; ?>"><?php echo $row['qualification']; ?></option>
      <option value="10th">10th</option>
      <option value="12th">12th</option>
      <option value="Graduate">Graduate</option>
      <option value="Post-graduate">Post-graduate</option>
      <option value="Other">Other</option>
      </td>
      </tr>
      <td>
      <label for="">
      <h4>Interested Fields</h4>
      </label>
      </td>
      <td><select class="form-control" style="width:auto;" name="field">
      <option value="<?php echo $row['field']; ?>"><?php echo $row['field']; ?></option>
      <option value="Software developer">Software development</option>
      <option value="Marketing">Marketing</option>
      <option value="Banking">Banking</option>
      <option value="Web designing">Web designing</option>
      <option value="Other">Other</option>
      </td>
      </tr>

      <tr>
        <td>
        <label for="">
        <h4>Job Location</h4>
        </label>
        </td>
      <td><select class="form-control" style="width:auto;" name="location">
      <option value="<?php echo $row['location']; ?>"><?php echo $row['location']; ?></option>
      <option value="Delhi">Delhi</option>
      <option value="Agra">Agra</option>
      <option value="Kanpur">Kanpur</option>
      <option value="Mumbai">Mumbai</option>
      <option value="Other">Other</option>
      </td>
      </tr>

      <tr>
        <td>
        <label for="">
        <h4>Extra Skills</h4>
        </label>
        </td>
      <td><textarea class="form-control" name="skills"><?php echo $row['skills']; ?></textarea>
      </tr>

      <tr align="center">
      <td colspan="2"><input class="btn btn-primary" type="submit" name="tab_form" value="Update Profile">
      <input class="btn btn-secondary" type="reset" value="Re-enter">
      </table>
      </form>
    </div>
    <div style="float:right;">
      <a href="profile.php"><i class="fa fa-chevron-circle-left">Return to profile</i></a>
    </div>
  </body>
</html>
