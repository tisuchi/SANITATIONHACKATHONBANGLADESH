<?php session_start(); ?>
<?php 
	
	//request for database 
	@mysql_connect('localhost', 'root', '') or die();
	@mysql_select_db('hackathon') or die(); 


	//fetaching the data
	$qry = @mysql_query("SELECT * FROM sms_blog ORDER BY id DESC");

 ?>

<?php include "includes/header.php"; ?>

	<div class="blog_wrapper">

		<?php while($data = @mysql_fetch_array($qry)): ?>
		<div class="post_div">
			<p><?php echo $data['blog_details']; ?> </p>
			<a href="#"><?php echo $data['mobile_number']; ?></a> <i><?php echo $data['entry_date']; ?></i>
		</div>
		<?php endwhile; ?>

	</div>



    	

<?php include "includes/footer.php"; ?>