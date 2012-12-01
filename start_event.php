<?php 

	session_start(); 



?>



<?php include "includes/header.php"; ?>


<?php 	if(isset($_SESSION['sess_user'])) : ?>


	<form name="" method="POST" action="start_event_post.php" class="create_problem_div">
    <fieldset>
	    <legend>Create a Problem</legend>
	    <label>Event Name</label>
	    <input type="text" name="event_name" placeholder="type your event name" class="span3" required>
			
		<label>Event Details </label>
	    <textarea rows="5" name="event_details"  class="span3" placeholder="type your detials" required></textarea>
 	
		<label>Event Type </label>
		<input type="text" name="event_type" placeholder="type your event type" class="span3" required>
	    
		<label>Event Area </label>
		<input type="text" name="event_area" placeholder="type your event area" class="span3" required>
	    
		<label>Event Cost </label>
		<input type="text" name="event_cost" placeholder="type your event cost" class="span3" required>
	    
		<label>Event Start Date </label>
		<input type="text" name="event_start_date" placeholder="yyyy-mm-dd" class="span3" required>
	    
		<label>Event Dead Line </label>
		<input type="text" name="event_deadline" placeholder="yyyy-mm-dd" class="span3" required>
	    
		<label>Event Status </label>
		<input type="text" name="event_status" placeholder="start / pending / running / complete" class="span3" required>
	    
		<br/>
	    <input type="submit" name="submit" class="btn" value="Post Event Now!"/>
	    
    </fieldset>
    </form>

<?php else: ?>

	<h1>101 error: You can not access this page without login.</h1>
	<p><a href="index.php">go back to home page</a> | <a href="login.php">go to login page</a> </p>


<?php endif; ?>


    	

<?php include "includes/footer.php"; ?>


