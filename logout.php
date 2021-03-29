<?php 

	session_start();

	//session_unset();

	if(isset($_SESSION['aname'])){

		if(session_destroy()){

			header('location:login.php');
		}

		//$_SESSOIN = array();

		//echo "<script>location.href='login.php'</script>";
	//}
		else{


		echo "<script>location.href='login.php'</script>";
	}

	?>