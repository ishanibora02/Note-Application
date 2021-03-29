<?php 
	
	session_start();
	
	include 'conn.php';

	$note  = "";
	//$uname = $pswd ="";

	

	if(isset($_POST['done'])){

		$note = $_POST['note'];

		$q = "INSERT INTO `mynote` (`id`, `note`) VALUES (NULL, '$note')";

		$query = mysqli_query($con,$q);





	}

	
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
	 <form action="insert.php" method="post">

	 
	 	<div class="col-lg-6 m-auto">

	 		<form method='post'>

	 			<br/>
	 			<h5><a href="main.php">Home</a></h5>
	 			<div class="card">
	 				
	 				<div class="card-header bg-dark">
	 					
	 					<h1 class="text-white text-center">Write your Note here</h1>
	 				</div>


	 				<label>Note Area</label>

	 				<input type="text-area" name="note">
	 				
  					 <br/>


	 				<button class="btn btn-success" type="submit" name="done">Submit</button>
	 				<br/>
	 				
	 				<button class="btn btn-success" type="button" name="done">Cancel</a></button>
	 				<br/>



	 				

	 			</div>
	 			
	 		</form>
	 	</div>
	</form>
 </body>
</html>