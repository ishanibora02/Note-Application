<?php 
 session_start();
?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>
 		Note Application
 	</title>
 	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

 <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
   <script type="text/javascript" charset="utf8" src="https://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>
 </head>
 <body>

 	<div class="container">

 		<div class="col-lg-12">
 			
 				<h1 class="text-warning text-center">Modify your Note</h1>
 				<br/>

                 <h5><a href="main.php">Home</a></h5>
 				<table class="table table-striped table-hover table-border">
 					<tr class="bg-dark text-white text-center">
 						
 						<th> ID </th>
 						<th> NOTE </th>
 						<th> DELETE </th>
 						<th> UPDATE </th>
 						
 					</tr>

 					<?php 		

						include 'conn.php';

						$q = "SELECT * FROM mynote";

						$query = mysqli_query($con,$q);
	

						while($res = mysqli_fetch_array($query)){


					 ?>

 					<tr class="text-center">

 						<td> <?php echo $res['id']; ?></td>
 						<td> <?php echo $res['note']; ?> </td>
 						<td> <button class="btn-danger btn"><a href="delete.php?id=<?php echo $res['id'];?>" onClick="return checkdel()" class="text-white">Delete</a></button></td>

 
 						<td><button class="btn-primary btn"><a href="update.php?id=<?php echo $res['id']; ?>" class="text-white">Update</a></button> </td>


 					</tr>

 					<?php  
 				}?>

 				</table>

 				<script>
 					function checkdel(){
 						return confirm("Are you sure you want to delete this record?");
 					}
 				</script>


 		</div>
 		

 	</div>
 
 	
 </body>
 </html>