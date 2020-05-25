<?php
if(isset($_POST['signup']))
{
	include'admindb.php';
	extract($_POST);
	$id=rand(111,999999);
	$status=true;
	while($status)
	{
		$chk="select * from admin where id='$id'";
		$run=mysqli_query($db,$chk);
		if(mysqli_num_rows($run)>=1)
		{
			$id=rand(111,999999);
		}
		else
		{
			$status=false;
		}
	}
	$ins="insert into job(id,name,email,password)values('$id','$name','$email','$password')";
	$res=mysqli_query($db,$ins);
	
?>
<script>
alert('Data Submitted');
window.location='index.php';
</script>
<?php
}
else
{
	header('location:signin.php');
}
?>