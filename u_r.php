<?php
if(isset($_POST['signup']))
{
	include'admindb_con.php';
	extract($_POST);
	$id=rand(111,999999);
	$status=true;
	while($status)
	{
		$chk="select * from user_data where user_id='$id'";
		$run=mysqli_query($con,$chk);
		if(mysqli_num_rows($run)>=1)
		{
			$id=rand(111,999999);
		}
		else
		{
			$status=false;
		}
	}
	$ins="insert into user_data(user_id,name,email,password)values('$id','$name','$email','$password')";
	$res=mysqli_query($con,$ins);

?>
<script>
alert('Registered. Now please login and update your profile');
window.location='login.php';
</script>
<?php
}
else
{
	header('location:register.php');
}
?>
