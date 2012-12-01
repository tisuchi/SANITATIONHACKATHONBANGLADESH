
<?php 
	
	//request for database 
	@mysql_connect('localhost', 'root', '') or die();
	@mysql_select_db('hackathon') or die(); 




	//code for data insert

	if(@$_POST['submit']){

		$date 	= date('Y-m-d');

		
			$reg_data = array(
				'mobile_number' 	=> @$_POST['mobile_number'],	//0
				'details' 			=> @$_POST['details']	//1
				
			);
			

			$qry = @mysql_query("INSERT INTO sms_blog VALUES(
							'',
							'".$reg_data['mobile_number']."',
							'".$reg_data['details']."',
							'".$date."'
					)");

			if($qry){

				echo "Post saved successfully";
				echo '<meta http-equiv="refresh" content="2;url=index.php" />';
			}else{

				echo "Sorry. Technical Issue. Please try again later.";
			}




	}//if(@$_POST['submit']){


?>

