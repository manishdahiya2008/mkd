<?php



function showdetails()
{
	include('dbcon.php');
	
	$sql="SELECT * FROM `details`";
	$run=mysqli_query($con,$sql);
	
		
	
	

		?>
		
		
		
		
		
		
		
		<div class="container">
    <div class="jumbotron">
    



    <h1 class="text-center text-primary">User Details </h1>
<a href="insertuserdata.php" class="btn btn-primary">Insert User Details</a></br>
   
  
   
  
    <table class="table table-bordered table-hover">
    <thread>
<tr>
   

<th scope="col" class="bg-dark text-white font-weight-bold ">ID</th>
<th scope="col" class="bg-dark text-white font-weight-bold ">Name</th>
<th scope="col" class="bg-dark text-white font-weight-bold ">Mob No</th>
<th scope="col" class="bg-dark text-white font-weight-bold ">E MAil</th>
<th scope="col" class="bg-dark text-white font-weight-bold ">Description</th>
<th scope="col" class="bg-dark text-white font-weight-bold "> Update</th>
</tr>
</thread>


<?php while ($tot = mysqli_fetch_assoc($run))
{
	?>
	<tbody class="bg-primary">


	<?php
	
	
$id=$tot['id'];
$name=$tot['name'];
$mobno=$tot['mobno'];
$email=$tot['email'];
$description=$tot['description'];


		
	
  
  echo "<form id=form1 name=form1 method=post action=update.php><tr><td> <center>$id</center></td><td><center>$name</center></td><td><center>$mobno</center></td><td><center>$email</center></td><td><center>$description</center></td><td><input type=hidden name=userid value=$id><input type=submit name=Submit value=Update></center></td></tr></form>";
 
  
  

  
  
  
?>












</tbody>
		
		<?php
}
?>
</table>
</div>
</div>
<?php
}
?>