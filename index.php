<?php
include('config.php');
$sql="select *from students";
$res=mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<title>Export Excel</title>
</head>
<body>
<div class="container">	
	<table class="table table-bordered table-striped  my-5 ">
	  <thead>
	  	<tr>
	  		<th>Name</th>
	  		<th>Email</th>
	  		<th>Phone</th>
	  		<th>Course</th>	  		
	  	</tr>
	  </thead>
	  <tbody>
	  	<?php while ($row=mysqli_fetch_assoc($res)) { ?>
	  		<tr>
	  			<td><?php echo $row['name']?></td>
	  			<td><?php echo $row['email']?></td>
	  			<td><?php echo $row['phone']?></td>
	  			<td><?php echo $row['course']?></td>
	  		</tr>



	  	<?php } ?>
	  </tbody>			
	</table>
	<a href="export.php"><button type="button" class="btn btn-success">Export</button></a>
</div>
</body>
</html>