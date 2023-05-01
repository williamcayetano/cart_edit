<?php
	include_once("mysql.php");
	include_once("includes/include_functions.php");
	
	$users_array = array();
	
	$sql_get_users = mysqli_query($link, "SELECT * FROM users WHERE active='y'");
	$sql_num_user = mysqli_num_rows($sql_get_users);
	$i = 0;
	
	if ($sql_num_user > 0) {
      	while ($row = mysqli_fetch_array($sql_get_users)) {
      		$sql_user_id = $row['id'];
        	$sql_email = $row['email'];
        	$sql_username = $row['username'];
        	$sql_firstname = $row['first_name'];
        	$sql_lastname = $row['last_name'];
        	$sql_city = $row['city'];
        	$sql_state = $row['state'];
        	$sql_country = $row['country'];
        	$created_date = $row['created'];
        	$users_array[$i]['id'] = $sql_user_id;
        	$users_array[$i]['email'] = $sql_email;
        	$users_array[$i]['username'] = $sql_username;
        	$users_array[$i]['first_name'] = $sql_firstname;
        	$users_array[$i]['last_name'] = $sql_lastname;
        	$users_array[$i]['city'] = $sql_city;
        	$users_array[$i]['state'] = $sql_state;
        	$users_array[$i]['country'] = $sql_country;
        	$users_array[$i]['created'] = $created_date;
        	$i++;
        }
    }
	
	if (isset($_POST['submit'])) {
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
		
		$sql_insert_user = mysqli_query($link, "INSERT INTO users (email, username, first_name, last_name, phone, address, address2, city, state, country, zip, email_verified, created) VALUES ('$email','$username','$first_name','$last_name','$phone','$address','$address2','$city','$state','$country','$zip','$email_verified', now())"); 
		
		$newURL = "users.php";
    	header('Location: '.$newURL);
	} else if (isset($_POST['submit2'])) {
		$user_id = preg_replace('#[^0-9]#', '', $_POST['id']);
		
		$sql_update = mysqli_query($link, "UPDATE users SET active='n' WHERE id='$user_id' LIMIT 1");
		$newURL = "users.php";
    	header('Location: '.$newURL);
	}
?>


<html>
	<head>
		<!-- Latest compiled and minified Bootstrap JavaScript -->
		<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script>
			$(document).ready(function(){
	
				$("#slide-down").hide();
				$("#slide").click(function() {
        			$("#slide-down").slideToggle();
    			});
			});
		</script>
	</head>
	<body>
		<?php include_once("includes/menu.php"); ?>
		<strong>Add User?</strong><input type="checkbox" id="slide" name="slide" value="y"><br /><br />
		<div id="slide-down">
			<form action="users.php" method="post">
				<strong>Email:</strong> <input type="text" name="email" size="20"><br /><br />
				<strong>Username:</strong> <input type="text" name="username" size="20"><br /><br />
				<strong>First Name:</strong> <input type="text" name="first_name" size="20"><br /><br />
				<strong>Last Name:</strong> <input type="text" name="last_name" size="20"><br /><br />
				<strong><span style="color:#DCDCDC">Phone:</span></strong> <input type="text" name="phone" size="30" maxlength="30"><br /><br />
				<strong>Address:</strong> <input type="text" name="address" size="100"><br /><br />
				<strong><span style="color:#DCDCDC">Address 2:</span></strong><input type="text" name="address2" size="100"><br /><br />
				<strong>Town/City:</strong> <input type="text" name="city" size="30" maxlength="60"><br /><br />
				<strong>State/County:</strong> <input type="text" name="state" size="10" maxlength="20"><br /><br />
				<strong>Country:</strong> <select name="country"><?php echo drop_down($country_array, ""); ?></select><br /><br />
				<strong>Postcode/Zip:</strong> <input type="text" name="zip" size="20" maxlength="30"><br /><br />
				<strong>Email Verified:</strong>
				<input type="radio" name="email_verified" value="y">
				<input type="radio" name="email_verified" value="n"><br /><br />
				<input type="submit" name="submit" value="Submit">
			</form>
		</div>
		<?php 
    		if (!empty($users_array)) {
    			$display_list = '<table cellpadding="5" border="1">';
    			for ($j = 0; $j < count($users_array); $j++) {
    				$display_list .=	'<tr>
    									<td> 
    										<a href="user.php?id=' . $users_array[$j]['id'] . '">' . $users_array[$j]['email'] . '</a>
    									</td>
    									
    									<td>' 
    										. $users_array[$j]['first_name'] . 
    									'</td>
    									
    									<td>' 
    										. $users_array[$j]['last_name'] . 
    									'</td>
    									<td>' 
    										. $users_array[$j]['username'] . 
    									'</td>
                              			<td>'
                              				. $users_array[$j]['city'] . 
                              			'</td>
                              			<td>'
                              				. $users_array[$j]['state'] . 
                              			'</td>
                              			<td>'
                              				. $users_array[$j]['country'] . 
                              			'</td>
                              			<td>'
                              				. $users_array[$j]['created'] . 
                              			'</td>
                              			<td>
                              				<form action="users.php" method="post">
												<input type="hidden" name="id" value="' . $users_array[$j]['id'] . '">
												<input type="submit" name="submit2" value="Delete">
											</form>
                              			</td>
                              			</tr>';
    			}
    			
    			$display_list .= '</table>'; 
    		}
    		echo $display_list;
    	?>
	</body>
</html>