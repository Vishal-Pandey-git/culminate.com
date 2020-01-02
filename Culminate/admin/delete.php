<?php
include'session.php';
if(isset($_POST['delete_user']))
{
	include'admindb.php';
	$id=$_POST['user_id'];
	$file=$_POST['old_image'];
	$del="select * from user_data where user_id='$id'";
	$des=mysqli_query($db,$del);
	$dow=mysqli_fetch_array($des);
	$old=$dow['pic'];
	$dp="admin/".$old;
	if($dp!='admin/user/user_d.png')
	{
		unlink($dp);
	}
	$del_que="delete from user_data where user_id='$id'";
	mysqli_query($db,$del_que);
?>
<script>
//alert('Data deleted successfully......?');
//window.location="panel.php";
</script>
<?php
}
else
{
	header('location:panel.php');
}
?>
