<?php include "includes/header.php"; ?>

		
	<form name="" method="POST" action="sms_blog_post.php">
    <fieldset>
	    <legend>Start SMS Bloging</legend>
	    <label>Mobile Number  </label>
	    <input type="text" name="mobile_number" placeholder="type your name" class="span3" required>
			
		<label>Details </label>
	    <textarea rows="5" name="details"  class="span3" placeholder="type your detials" required></textarea>
 
	    <br/>
	    <input type="submit" name="submit" class="btn" value="Post Now!"/>
	    
    </fieldset>
    </form>



    	

<?php include "includes/footer.php"; ?>