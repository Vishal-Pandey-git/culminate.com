<?php
include 'admindb_con.php';
include 'session.php';
if(isset($_POST['tab_form']))
{
	$email=$_SESSION['email'];
	extract($_POST);
	$up="update user_data set name='$name', gender='$gender', dob='$dob', city='$city', phone='$phone', qualification='$qualification', field='$field', location='$location', skills='$skills' where email='$email'";
	$res=mysqli_query($con,$up);
	$img=$_FILES['pic']['name'];
	if($img!=null && $img!=' ')
	{
	$del="select * from user_data where email='$email'";
	$des=mysqli_query($con,$del);
	$dow=mysqli_fetch_array($des);
	$old=$dow['pic'];
	if($old!='admin/user/user_d.png')
	{
		unlink($old);
	}
	$save=$name.$img;
	$path="admin/user/".$save;
	$tmp=$_FILES['pic']['tmp_name'];

	move_uploaded_file($tmp,$path);
	//unlink($path);
	$ins="update user_data set pic='$path' where email='$email'";
	mysqli_query($con,$ins);
	}
	?>
	<script>
	//alert('Data Submited ');
	window.location='profile.php';
	</script>
	<?php
}
else
{
	header('location:profile_up.php');
}
?>
