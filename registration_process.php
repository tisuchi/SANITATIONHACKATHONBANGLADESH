
<?php 
	
	//request for database 
	@mysql_connect('localhost', 'root', '') or die();
	@mysql_select_db('hackathon') or die(); 




	//code for data insert

	if(@$_POST['submit']){

		$date 	= date('Y-m-d');
		$ip 	= $_SERVER['REMOTE_ADDR'];;

		$pass = @$_POST['password'];
		$repass= @$_POST['repassword'];


		//code for photo uploading
		$target_path = "uploads/";

		$target_path = $target_path . basename( $_FILES['uploadedfile']['name']); 

		if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)){
			$photo_name = $_FILES['uploadedfile']['name'];
		}else{
			echo "File did not uploded successfuly";
		}
		




		if($pass == $repass){

			$reg_data = array(
				'name' 			=> @$_POST['name'],	//0
				'profession' 	=> @$_POST['profession'], //1
				'email' 		=> @$_POST['email'], //2
				'password' 		=> @$_POST['password'], //3
				//'photo' 		=> @$_POST['photo'], //4
				'facebook_id' 	=> @$_POST['facebook_id'], //5
				'others_id' 	=> @$_POST['others_id'], //6
				'phone_number' 	=> @$_POST['phone_number'], //7
				'present_address' => @$_POST['present_address'], //8
				'parmanent_address' => @$_POST['parmanent_address'], //9
				'email_signup' 	=> @$_POST['email_signup'] //10
			);


			

			$qry = @mysql_query("INSERT INTO personal_info VALUES(
							'',
							'".$reg_data['name']."',
							'".$reg_data['profession']."',
							'".$reg_data['email']."',
							'".$pass."',
							'".$photo_name."',
							'".$reg_data['facebook_id']."',
							'".$reg_data['others_id']."',
							'".$reg_data['present_address']."',
							'".$reg_data['phone_number']."',
							'".$reg_data['parmanent_address']."',
							'".$reg_data['email_signup']."',
							'".$date."',
							'',
							'".$ip."'
					)");

			if($qry){

				echo "Data Update Successfully";
				echo '<meta http-equiv="refresh" content="2;url=index.php" />';
			}else{

				echo "Sorry. Technical Issue. Please try again later.";
			}

		}//if($pass == $repass){ss	


	}//if(@$_POST['submit']){


?>

