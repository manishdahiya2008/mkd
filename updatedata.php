<?php
include('dbcon.php');
	$id=$_POST['id'];
	$name=$_POST['name'];
	$mobno=$_POST['mobno'];
	$email=$_POST['email'];
	$description=$_POST['textarea2'];
	
	$qry="UPDATE `user_des`.`details` SET `id` = '$id', `name` = '$name', `mobno` = '$mobno', `email` = '$email', `description` = '$description' WHERE `id` = $id; ";
	$run=mysqli_query($con,$qry);
	if($run==true)
	{
		?>
		<script>
		alert('data updated successfully');
		window.open('index.php','_self');
		</script>
		<?php
	}
	?>
		