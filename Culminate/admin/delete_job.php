<?php
if(isset($_POST['delete_job']))
{
	include'admindb.php';
	$user_id=$_POST['s_no'];
	//$file=$_POST['old_image']
	$del_que="delete from job_data where s_no='$user_id'";
	mysqli_query($db,$del_que);

	//unlink("images/".$file);
?>
<script>
alert('Data deleted successfully......?');
window.location="index.php";
</script>
<?php
}
else
{
	header('location:index.php');
}
?>
