<?php
session_start();
if(isset($_POST['signin']))
{
	include'admindb.php';
	extract($_POST);
	$email=$_POST['email'];
	$password=$_POST['password'];
	$sel="select * from admin where email='$email' and password='$password'";
	$res=mysqli_query($db,$sel);
	if(mysqli_num_rows($res)>=1)
	{
		$_SESSION['login_status']=true;
		$_SESSION['email']=$email;
		?>
		<script>
		//alert('Login Successfull');
		window.location='panel.php';
		</script>
		<?php
	}
	else
	{
		?>
		<script>
		alert('Email and Passwword is incorrect');
		window.location='signin.php';
		</script>
		<?php
	}
}
else
{
	header('location:index.php');
}
?>
