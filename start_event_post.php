
<?php 
	
	//request for database 
	@mysql_connect('localhost', 'root', '') or die();
	@mysql_select_db('hackathon') or die(); 




	//code for data insert

	if(@$_POST['submit']){

		$date 	= date('Y-m-d');

		
			$reg_data = array(
				'event_name' 		=> @$_POST['event_name'],	//0
				'event_details' 	=> @$_POST['event_details'],	//1
				'event_type' 		=> @$_POST['event_type'],	//2
				'event_area' 		=> @$_POST['event_area'],	//3
				'event_cost' 		=> @$_POST['event_cost'],	//4
				'event_start_date' 	=> @$_POST['event_start_date'],	//5
				'event_deadline' 	=> @$_POST['event_deadline'],	//6
				'event_status' 		=> @$_POST['event_status'],	//7
			);
			

			$qry = @mysql_query("INSERT INTO event_master VALUES(
							'',
							'".$reg_data['event_name']."',
							'".$reg_data['event_details']."',
							'".$reg_data['event_type']."',
							'".$reg_data['event_area']."',
							'".$reg_data['event_cost']."',
							'".$reg_data['event_start_date']."',
							'".$reg_data['event_deadline']."',
							'".$reg_data['event_status']."',
							'user_id',
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

