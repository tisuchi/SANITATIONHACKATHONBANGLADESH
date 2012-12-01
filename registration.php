<?php include "includes/header.php"; ?>

		
	<form name="" method="POST" action="registration_process.php" enctype="multipart/form-data">
    <fieldset>
	    <legend>User Registration Form</legend>
	    <label>Name  </label>
	    <input type="text" name="name" placeholder="type your name" class="span3" required>
			
		<label>Profession </label>
	    <input type="text" name="profession" placeholder="type your profession" class="span3" required>
	
		<label>Email </label>
	    <input type="email" name="email" placeholder="type your email" class="span3" required>
	
		<label>Password </label>
	    <input type="password" name="password" placeholder="type your password" class="span3"  required>
	
		<label>Retype Password </label>
	    <input type="password" name="repassword" placeholder="retype your password" class="span3"  required>
	
		<label>Upload Your Photo </label>
	    <input type="file" name="uploadedfile" placeholder="type your name" class="span3">

		<label>Facebook ID </label>
	    <input type="text" name="facebook_id" placeholder="type your facebook ID" class="span3">
	
		<label>Others ID </label>
	    <input type="text" name="others_id" placeholder="type your others ID" class="span3">
	    
		<label>Phone Number </label>
	    <input type="text" name="phone_number" placeholder="type your phone numbers" class="span3"  required>

	    <label>Present Address </label>
	    <textarea rows="3" name="present_address"  class="span3" required></textarea>

	    <label>Parmanent Address </label>
	    <textarea rows="3" name="parmanent_address" class="span3" required></textarea>
	    
	    <label class="checkbox">
	    <input type="checkbox" value="1" name="email_signup" checked="checked"> Signup me for email newsletter
	    </label>
	    <input type="submit" name="submit" class="btn" value="Save Now!"/>
	    
    </fieldset>
    </form>



    	

<?php include "includes/footer.php"; ?>