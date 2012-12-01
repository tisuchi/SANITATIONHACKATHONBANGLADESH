<?php session_start(); ?>

<?php 
	
	//request for database 
	@mysql_connect('localhost', 'root', '') or die();
	@mysql_select_db('hackathon') or die(); 


	//fetaching the data
	$d = @$_GET['search_field'];
	//$qry = @mysql_query("SELECT * FROM event_master ORDER BY event_id DESC");
	$qry = @mysql_query("SELECT * FROM event_master where event_name LIKE '%".$d."%' 
											OR event_details LIKE '%".$d."%'
											OR event_type LIKE '%".$d."%'
											OR event_area LIKE '%".$d."%'
											OR event_cost LIKE '%".$d."%'
											OR event_start_date LIKE '%".$d."%'
											OR event_deadline LIKE '%".$d."%'
											OR event_status LIKE '%".$d."%'
											");

 ?>

<?php include "includes/header.php"; ?>

	<div class="blog_wrapper">


		<?php if(@mysql_num_rows($qry) > 0): ?>
			<?php while($data = @mysql_fetch_array($qry)): ?>
			<div class="post_div">
				<h4><a href="problem_details.php?id=<?php echo $data['event_id']; ?>"><?php echo $data['event_name']; ?></a></h4>
				<p><?php echo $data['event_details']; ?> </p>
				<a href="#"><?php echo $data['user_id']; ?></a>  | <?php echo 'Status: '.$data['user_id']; ?> | <?php echo 'Event Deadline'.$data['event_deadline']; ?> <i><?php echo 'posted by :'.$data['entry_date']; ?></i>
			</div>
			<?php endwhile; ?>
		<?php else: ?>
			<h2>Sorry! No Data Found....</h2>
		<?php endif; ?>

	</div>



    	

<?php include "includes/footer.php"; ?>