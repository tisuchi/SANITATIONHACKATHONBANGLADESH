<?php session_start(); ?>

<?php 
	
	//request for database 
	@mysql_connect('localhost', 'root', '') or die();
	@mysql_select_db('hackathon') or die(); 


	//fetaching the data
	$qry = @mysql_query("SELECT * FROM event_master ORDER BY event_id DESC");

 ?>

<?php include "includes/header.php"; ?>

	<div class="blog_wrapper">

		<?php while($data = @mysql_fetch_array($qry)): ?>
		<div class="post_div">
			<h4><a href="problem_details.php?id=<?php echo $data['event_id']; ?>"><?php echo $data['event_name']; ?></a></h4>
			<p><?php echo $data['event_details']; ?> </p>
			<a href="#"><?php echo $data['user_id']; ?></a>  | <?php echo 'Status: '.$data['user_id']; ?> | <?php echo 'Event Deadline'.$data['event_deadline']; ?> <i><?php echo 'posted by :'.$data['entry_date']; ?></i>
		</div>
		<?php endwhile; ?>

	</div>



    	

<?php include "includes/footer.php"; ?>