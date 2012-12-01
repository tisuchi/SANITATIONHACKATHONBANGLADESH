<?php

	//code for database connection
	


		$host = "locahost";
		$user = "root";
		$pass = "";
		$db   = "hackathon";


		@mysql_connect($host, $user, $pass) or die();
		@mysql_select_db($db) or die(); 




?>