
<?php 
	
	//request for database 
	@mysql_connect('localhost', 'root', '') or die();
	@mysql_select_db('hackathon') or die(); 

	//taking id from the previous page
	$id = $_REQUEST['id'];


	//fetaching the data
	$data = @mysql_fetch_array(mysql_query("SELECT * FROM event_master WHERE event_id = '$id' "));

 ?>

<?php include "includes/header.php"; ?>

	<div class="blog_wrapper">

		<table class="table table-hover d_table table-bordered">
	   
	    <tr>
		    <th>Problem Name</th>
		    <th><?php echo $data['event_name']; ?></th>
	    </tr>

	    <tr>
		    <td>Problem Type</td>
		    <td><?php echo $data['event_type']; ?></td>
	    </tr>

	    <tr>
		    <td>Area</td>
		    <td><?php echo $data['event_area']; ?></td>
	    </tr>

	    <tr>
		    <td>Cost</td>
		    <td><?php echo $data['event_cost']; ?></td>
	    </tr>

	    <tr>
		    <td>Starting Date</td>
		    <td><?php echo $data['event_start_date']; ?></td>
	    </tr>

	    <tr>
		    <td>Status</td>
		    <td><?php echo $data['event_status']; ?></td>
	    </tr>

	    <tr>
		    <td>Ending Date</td>
		    <td><?php echo $data['event_deadline']; ?></td>
	    </tr>

	    <tr>
		    <td>Project Details</td>
		    <td><?php echo $data['event_details']; ?></td>
	    </tr>

	    <tr>
		    <td>User ID</td>
		    <td><?php echo $data['user_id']; ?></td>
	    </tr>

	    <tr>
		    <td>Entry Date</td>
		    <td><?php echo $data['entry_date']; ?></td>
	    </tr>
    </table>

	</div>



    	

<?php include "includes/footer.php"; ?>