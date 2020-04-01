<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<script src="jquery-3.4.1.min.js"></script>
</head>
<body style="background-color:green;">

<h1 align="center">User Description</h1>



<?php


include('dbcon.php');
$sid=$_POST['userid'];
$sql="SELECT * FROM `details` WHERE `id` ='$sid'";
$run=mysqli_query($con,$sql);
$data=mysqli_fetch_assoc($run);
?>
<form action="updatedata.php" method="post" enctype="multipart/form-data">

<table border="1" style="width:70%; margin-top:40px;" align="center">
<tr>
<td align="">ID</td><td><input type="text" name="id" value=<?php echo $data['id']; ?> required></td>
</tr>
<tr>
<td>Name</td><td><input type="text" name="name" value=<?php echo $data['name']; ?> required></td>
</tr>
<tr>
<td>Mob No</td><td><input type="text" name="mobno" value=<?php echo $data['mobno']; ?> required></td>
</tr>
<tr>
<td>E Mail</td><td><input type="text" name="email" size="30" value=<?php echo $data['email']; ?> required></td>
</tr>
<tr>
<td>Description</td><td><textarea name='textarea2'  cols=30 rows =4 name="des"> <?php echo $data['description']; ?></textarea></td>
</tr>




<tr>
<td colspan="2" align="center"><input type="submit" id="sub" name="submit" value="update"/></td>

</tr>

</table>

</form>

<script>
        $(document).ready(function(){
            $('#sub').click(function(){

                if(confirm("Are you sure to update")){
					form.submit()
				}
				else{
					return false
				}
            });
        });
        </script>
                                                                                                                          
</body>
</html>