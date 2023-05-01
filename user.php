<?php
	include_once("mysql.php");
	include_once("includes/include_functions.php");
	
	$email 					= '';
	$username				= '';
	$first_name 			= '';
	$last_name 				= '';
	$phone					= '';
	$address 				= '';
	$address2				= '';
	$city 					= '';
	$state					= '';
	$country				= '';
	$zip					= '';
	$user_id				= 0;
	$email_verified			= 'n';
	$active 				= 'y';
	
	if (isset($_GET['id'])) {
		$user_id = preg_replace('#[^0-9]#', '', $_GET['id']);
		
		
		if (empty($user_id))
  			exit();
  			
  		$sql_get_user = mysqli_query($link, "SELECT * FROM users WHERE id='$user_id' LIMIT 1");
      	$sql_num_user = mysqli_num_rows($sql_get_user);
      	
      	if ($sql_num_user > 0) {
      		while ($row = mysqli_fetch_array($sql_get_user)) {
      			$email 					= $row['email'];
				$username				= $row['username'];
				$first_name 			= $row['first_name'];
				$last_name 				= $row['last_name'];
				$phone					= $row['phone'];
				$address 				= $row['address'];
				$address2				= $row['address2'];
				$city 					= $row['city'];
				$state					= $row['state'];
				$country				= $row['country'];
				$zip					= $row['zip'];
				$email_verified			= $row['email_verified'];
				$active					= $row['active'];
      		}
      	}
	} else if (isset($_GET['name'])) {
		$username = clean($_GET['username']);
		
		$sql_get_user = mysqli_query($link, "SELECT * FROM users WHERE username='$username' LIMIT 1");
      	$sql_num_user = mysqli_num_rows($sql_get_user);
      	
      	if ($sql_num_user > 0) {
      		while ($row = mysqli_fetch_array($sql_get_user)) {
      			$email 					= $row['email'];
				$username				= $row['username'];
				$first_name 			= $row['first_name'];
				$last_name 				= $row['last_name'];
				$phone					= $row['phone'];
				$address 				= $row['address'];
				$address2				= $row['address2'];
				$city 					= $row['city'];
				$state					= $row['state'];
				$country				= $row['country'];
				$zip					= $row['zip'];
      		}
      	}
	} else if (isset($_POST['submit'])) {
		$user_id 				= preg_replace('#[^0-9]#', '', $_POST['user_id']);
      	$email 					= clean($_POST['email']);
		$username				= clean($_POST['username']);
		$first_name 			= clean($_POST['first_name']);
		$last_name 				= clean($_POST['last_name']);
		$phone					= clean($_POST['phone']);
		$address 				= clean($_POST['address']);
		$address2				= clean($_POST['address2']);
		$city 					= clean($_POST['city']);
		$state					= clean($_POST['state']);
		$country				= clean($_POST['country']);
		$zip					= clean($_POST['zip']);
		$email_verified			= isset($_POST['email_verified']) ? preg_replace('#[^yn]#', '', $_POST['email_verified']) : 'n';
		$active					= isset($_POST['active']) ? preg_replace('#[^yn]#', '', $_POST['active']) : 'n';
		
		$sql_update_user = mysqli_query($link, "UPDATE users SET email='$email', username='$username', 
		first_name='$first_name', last_name='$last_name', phone='$phone', address='$address', address2='$address2', 
		city='$city', state='$state', country='$country', zip='$zip', email_verified='$email_verified', active='$active' 
		WHERE id='$user_id' LIMIT 1");
	}
?>


<html>
	<head>
	</head>
	<body>
		<?php include_once("includes/menu.php"); ?>
		<a href="users.php"><--Back To Users</a><br /><br />
		<form action="user.php" method="post">
			<input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
			<strong>Email:</strong> <input type="text" name="email" value="<?php echo $email; ?>" size="50"><br /><br />
			<strong>Username:</strong> <input type="text" name="username" value="<?php echo $username; ?>" size="40"><br /><br />
			<strong>First Name:</strong> <input type="text" name="first_name" value="<?php echo $first_name; ?>" size="40"><br /><br />
			<strong>Last Name:</strong> <input type="text" name="last_name" value="<?php echo $last_name; ?>" size="40"><br /><br />
			<strong><span style="color:#DCDCDC">Phone:</span></strong> <input type="text" name="phone" value="<?php echo $phone; ?>" size="30"><br /><br />
			<strong>Address:</strong> <input type="text" name="address" value="<?php echo $address; ?>" size="40"><br /><br />
			<strong><span style="color:#DCDCDC">Address 2:</span></strong><input type="text" name="address2" value="<?php echo $address2; ?>" size="40"><br /><br />
			<strong>Town/City:</strong> <input type="text" name="city" value="<?php echo !empty($city) ? $city : set_value('city'); ?>" size="30"><br /><br />
			<strong>State/County:</strong> <input type="text" name="state" value="<?php echo !empty($state) ? $state : set_value('state'); ?>" size="10"><br /><br />
			<strong>Country:</strong> <select name="country" selected="<?php echo $country; ?>"><?php echo drop_down($country_array, $country) ?></select><br /><br />
			<strong>Postcode/Zip:</strong> <input type="text" name="zip" value="<?php echo !empty($zip) ? $zip : set_value('zip'); ?>" size="20"><br /><br />
			<strong>Email Verified:</strong>
			<input type="radio" name="email_verified" value="y" <?php echo strcmp('y',$email_verified) == 0 ? 'checked' : ''; ?>>
			<input type="radio" name="email_verified" value="n" <?php echo strcmp('n',$email_verified) == 0 ? 'checked' : ''; ?>><br /><br />
			<strong>Active:</strong>
			<input type="radio" name="active" value="y" <?php echo strcmp('y',$active) == 0 ? 'checked' : ''; ?>>
			<input type="radio" name="active" value="n" <?php echo strcmp('n',$active) == 0 ? 'checked' : ''; ?>><br /><br />
			<input type="submit" name="submit" value="Submit">
		</form>
	</body>
</html>