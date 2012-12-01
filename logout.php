<?php 

	session_start();

	if(isset($_SESSION['sess_user'])){

		//$q = @unset($_SESSION['sess_user']);
		$q = session_destroy();

		if($q){

			echo "Log out successfully..! ";
			echo '<meta http-equiv="refresh" content="2;url=index.php" />'; 
		}

	}



?>