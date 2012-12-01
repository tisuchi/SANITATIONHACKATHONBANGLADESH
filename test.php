<?php 

	

	//getting the IP from the user
	//echo $_SERVER['REMOTE_ADDR'];


	
	@mysql_connect('localhost', 'root', '') or die();
	@mysql_select_db('hackathon') or die(); 
	

	/*
	// for simple inserting
	if(@$_POST['submit']){

		$q = "INSERT INTO status VALUES(
					'',
					'".@$_POST['name']."'
			)";
		
		if(mysql_query($q)){

				echo "Success";
		}else{

			echo "Error";
		}

	}

	*/


	/*

	if(@$_POST['submit']){


		$target_path = "uploads/";

		$target_path = $target_path . basename( $_FILES['uploadedfile']['name']); 

		if($_FILES['uploadedfile']['type'] =='jpeg'){
			if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)){
				echo $_FILES['uploadedfile']['name']." Data Post Successfully";
			}else{
				echo "File did not uploded successfuly";
			}
		}else{

			echo "Sorry! File type can be only JPEG";
		}
	}
	*/

//	echo date('Y-m-d');



	if($_POST['submit']){

		$name = $_POST['name'];
		$password = $_POST['password'];


		$q = mysql_query("SELECT * FROM personal_info WHERE email = '$name' AND password = '$password'");

		if(mysql_num_rows($q)){

			echo "Success";
		}else{

			echo "Error!";
		}



	}	




?>


<form enctype="multipart/form-data" action="" method="POST">
	
	<input type="name" name="name" /><br>
	<input type="password" name="password" /><br>
	<input type="submit" name="submit" value="Login" />
</form>