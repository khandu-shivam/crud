<!DOCTYPE html>
<html>
<head>
	<title>displaying data</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body>

<div class="container">
	<h1 class="text-center text-info">DATA DISPLAY</h1>
	<br>
	<table class="table table-striped table-bordered">
		<tr>
		<th>id</th>
		<th>name</th>
		<th>image</th>
		<th>action</th>
		</tr>

        
        <?php
        include 'dbcon.php';

        $data = "select * from image order by id desc";
        $result = mysqli_query($con,$data);
      

        while($query = mysqli_fetch_array($result))
        {   
        	
        

        ?>


		<tr>
			
			<td> <?php echo $query['id'] ?> </td>      
			<td> <?php echo $query['name'] ?> </td>
			<td> <img src="<?php echo $query['image'] ?>" style="width:200px;height:150px;border-radius:20px;"  > </td>
			<td>
				<a href="">view</a>
				<a href="">edit</a>
				<a href="">delete</a>
			</td>
		</tr>

        <?php

         }

         ?>

	</table>
</div>


</body>
</html>