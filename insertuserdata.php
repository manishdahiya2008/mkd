<html>
<head>

<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body style="background-color:pink;">

<h1 align="center">User Description</h1>
	



<form action="insertuserdata.php" method="post" enctype="multipart/form-data">

<table border="1" style="width:70%; margin-top:40px;" align="center">

<tr>
<td>Name</td><td><input type="text" name="name" placeholder="Enter full name" required></td>
</tr>
<tr>
<td>Mob No</td><td><input type="text" name="mobno" placeholder="Enter Mob No" required></td>
</tr>
<tr>
<td>E Mail ID</td><td><input type="email" name="email" placeholder="Enter Email" required></td>
</tr>
<tr>
<td>Description</td><td><textarea name='textarea2'  cols=30 rows =4 name="des" required></textarea></td>
</tr>

<tr>
<td colspan="2" align="center"><input type="submit" name="submit" value="insert"></td>
</tr>

</table>

</form>


<?php

if(isset($_POST['submit']))
{
	include('dbcon.php');
	$name=$_POST['name'];
	$mobno=$_POST['mobno'];
	$email=$_POST['email'];
	$description=$_POST['textarea2'];
	
	$qry="INSERT INTO `details`(`name`, `mobno`, `email`, `description`) VALUES ('$name','$mobno','$email','$description')";
	$run=mysqli_query($con,$qry);
	if($run==true)
	{
		?>
		<script>
		alert('data inserted successfully');
		window.open('index.php','_self');
		</script>
		<?php

	}

}
?>
</body>
</html>