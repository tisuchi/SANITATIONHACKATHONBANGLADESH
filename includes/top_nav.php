<ul class="nav nav-pills dnavs">
	<li><a href="start_event.php">create problem</a></li>
	<li><a href="problems.php">problems</a></li>
	<li><a href="#">complete projects</a></li>
	<li><a href="sms_blog.php">sms blogging</a></li>							
	<li><a href="#">donators</a></li>

	<?php if (isset($_SESSION['sess_user'])): ?>

		<li><a href="#">Welcome </a> | </li>
		<li><a href="logout.php">log out </a> </li>

	<?php else: ?>
	<li><a href="registration.php">registration</a></li>
	<li><a href="login.php">login</a></li>
	<?php endif; ?>
</ul>