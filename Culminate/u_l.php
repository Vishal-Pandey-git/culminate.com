<?php
session_start();
if(isset($_POST['login']))
{
	include'admindb_con.php';
	$email=$_POST['email'];
	$password=$_POST['pass'];
	$sel="select * from user_data where email='$email' and password='$password'";
	//mysqli_real_escape_string()
	$res=mysqli_query($con,$sel);
	if(mysqli_num_rows($res)>=1)
	{
		$_SESSION['login_status']=true;
		$_SESSION['email']=$email;
		?>
		<script>
		window.location='profile.php';
		</script>
		<?php
	}
	else
	{
		?>
		<script>
		alert('Email or Passwword not found. Try again or register if new');
		window.location='login.php';
		</script>
		<?php
	}
}
else
{
	header('location:login.php');
}
?>
