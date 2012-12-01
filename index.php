	<!--
	| ----------------------------------------------------------------------------------
	| This code developed for donate mate web apps in Sanitation Hackathon 2012.
	| ----------------------------------------------------------------------------------
	| Author: Thouhedul Islam Suchi
	| Email: tisuchi@gmail.com
	| URI : http://tisuchi.wordpress.com
	| Cell: +8801710823643
	| Copyright: all rights researved by author.
	-->

<?php session_start(); ?>
<?php include "includes/header.php"; ?>

		<div class="welcome_slider"> 
			<img src="images/welcome_image.jpg" width="960" height="519" />
		</div>
	

		<!-- this div for showig the donation button-->
	    <div class="hero-unit regi_div">
		    <h1>Hello</h1>
		    <p>can you ensure hygenic sanitation for me?</p>
			<p>
			    <a class="btn btn-primary btn-large">
			    	donate now
			    </a>
		    </p>
	    </div>


	    <!-- search box -->
	    <div class="search_box"> </div>
	    <form name="" id="" method="GET" action="search_result.php" class="search_form">
    		      
			    <input type="text" id="search_field" name="search_field" placeholder="search project to donate">
			  	<input type="submit" class="btn d_btn btn-large" value="search now" name="submit" id="submit" />
    	</form>



    	<div class="d_blog">
    		<a href="start_sms_bloging.php">start your SMS bloging</a>
    	</div>

<?php include "includes/footer.php"; ?>