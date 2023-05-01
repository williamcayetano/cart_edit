<?php
	include_once("mysql.php");
	include_once("includes/include_functions.php");
	
	$supplier_id			= 0;
    $company_name 			= '';
    $contact_f_name 		= '';
	$contact_l_name 		= '';
	$contact_title 			= '';
	$address 				= '';
	$address2 				= '';
	$city					= '';
	$state 					= '';
	$zip					= '';
	$country 				= '';
	$phone					= '';
	$fax					= '';
	$email					= '';
	$website				= '';
	$payment_methods		= '';
	$discount_rate			= '';
	$type_goods				= '';
	$discount_available		= '';
	$avg_order_size			= '';
	$avg_order_freq_days	= '';
	$last_order				= '';
	$my_cust_id				= '';
	$custom_urls			= '';
	$notes					= '';
	$active					= '';
	
	if (isset($_GET['id'])) {
		$supplier_id = preg_replace('#[^0-9]#', '', $_GET['id']);
		
		if (empty($supplier_id))
  			exit();
      	
      	//Finally, Get Product
      	$sql_get_supplier = mysqli_query($link, "SELECT * FROM suppliers WHERE id='$supplier_id' LIMIT 1");
      	$sql_num_supp = mysqli_num_rows($sql_get_supplier);
      	
      	if ($sql_num_supp > 0) {
      		while ($row = mysqli_fetch_array($sql_get_supplier)) {
      			$company_name 			= $row['company_name'];
      			$contact_f_name 		= $row['contact_f_name'];
				$contact_l_name 		= $row['contact_l_name'];
				$contact_title 			= $row['contact_title'];
				$address 				= $row['address'];
				$address2 				= $row['address2'];
				$city					= $row['city'];
				$state 					= $row['state'];
				$zip					= $row['zip'];
				$country 				= $row['country'];
				$phone					= $row['phone'];
				$fax					= $row['fax'];
				$email					= $row['email'];
				$website				= $row['website'];
				$payment_methods		= $row['payment_methods'];
				$discount_rate			= $row['discount_rate'];
				$type_goods				= $row['type_goods'];
				$discount_available		= $row['discount_available'];
				$avg_order_size			= $row['avg_order_size'];
				$avg_order_freq_days	= $row['avg_order_freq_days'];
				$last_order				= $row['last_order'];
				$my_cust_id				= $row['my_cust_id'];
				$custom_urls			= $row['custom_urls'];
				$notes					= $row['notes'];
				$active					= $row['active'];
      			
      		}
      	}
	} else if (isset($_POST['submit'])) {
		$supplier_id 			= preg_replace('#[^0-9]#', '', $_POST['supplier_id']);
		$company_name 			= clean($_POST['company_name']);
      	$contact_f_name 		= clean($_POST['contact_f_name']);
		$contact_l_name 		= clean($_POST['contact_l_name']);
		$contact_title 			= clean($_POST['contact_title']);
		$address 				= clean($_POST['address']);
		$address2 				= clean($_POST['address2']);
		$city					= clean($_POST['city']);
		$state 					= clean($_POST['state']);
		$zip					= clean($_POST['zip']);
		$country 				= clean($_POST['country']);
		$phone					= clean($_POST['phone']);
		$fax					= clean($_POST['fax']);
		$email					= clean($_POST['email']);
		$website				= clean($_POST['website']);
		$payment_methods		= clean($_POST['payment_methods']);
		$discount_rate			= clean($_POST['discount_rate']);
		$type_goods				= clean($_POST['type_goods']);
		$discount_available		= clean($_POST['discount_available']);
		$avg_order_size			= clean($_POST['avg_order_size']);
		$avg_order_freq_days	= clean($_POST['avg_order_freq_days']);
		$last_order				= clean($_POST['last_order']);
		$my_cust_id				= clean($_POST['my_cust_id']);
		$custom_urls			= clean($_POST['custom_urls']);
		$notes					= clean($_POST['notes']);
		$active					= isset($_POST['active']) ? preg_replace('#[^yn]#', '', $_POST['active']) : 'y';
		
		if (empty($supplier_id) || empty($company_name) || empty($email) || empty($type_goods)) { 
			$newURL = "suppliers.php";
    		header('Location: '.$newURL);
		}
		
		$sql_update_product = mysqli_query($link, "UPDATE suppliers SET company_name='$company_name', 
		contact_f_name='$contact_f_name', contact_l_name='$contact_l_name', contact_title='$contact_title', 
		address='$address', address2='$address2', city='$city', state='$state', zip='$zip', 
		country='$country', phone='$phone', fax='$fax', email='$email', website='$website', 
		payment_methods='$payment_methods', discount_rate='$discount_rate', type_goods='$type_goods', 
		discount_available='$discount_available', avg_order_size='$avg_order_size', 
		avg_order_freq_days='$avg_order_freq_days', last_order='$last_order', my_cust_id='$my_cust_id', 
		custom_urls='$custom_urls', notes='$notes', active='$active' WHERE id='$supplier_id' LIMIT 1");
    
	} else {
		$newURL = "suppliers.php";
    	header('Location: '.$newURL);
	}
?>


<html>
	<head>
	</head>
	<body>
		<?php include_once("includes/menu.php"); ?>
		<a href="suppliers.php"><--Back To Suppliers</a><br /><br />
		<form action="supplier.php" method="post">
				<input type="hidden" name="supplier_id" value="<?php echo $supplier_id; ?>">
				<strong>Company Name</strong><input type="text" name="company_name" value="<?php echo $company_name; ?>" size="50"><br /><br />
				<strong>Email:</strong><input type="text" name="email" value="<?php echo $email; ?>" size="100"><br /><br />
				<strong>Type Goods:</strong><textarea name="type_goods" cols="69" rows="5"><?php echo $type_goods; ?></textarea><br /><br />
				<strong>Contact F. Name</strong><input type="text" name="contact_f_name" value="<?php echo $contact_f_name; ?>" size="100"><br /><br />
				<strong>Contact L. Name</strong><input type="text" name="contact_l_name" value="<?php echo $contact_l_name; ?>" size="100"><br /><br />
				<strong>Contact Title</strong><input type="text" name="contact_title" value="<?php echo $contact_title; ?>" size="100"><br /><br />
				<strong>Phone:</strong> <input type="text" name="phone" value="<?php echo $phone; ?>" size="30" maxlength="30"><br /><br />
				<strong>Address 1</strong><input type="text" name="address" value="<?php echo $address; ?>" size="100"><br /><br />
				<strong>Address 2</strong><input type="text" name="address2" value="<?php echo $address2; ?>" size="100"><br /><br />
				<strong>Town/City:</strong> <input type="text" name="city" value="<?php echo $city; ?>" size="30" maxlength="60"><br /><br />
				<strong>State/County:</strong> <input type="text" name="state" value="<?php echo $state; ?>" size="10" maxlength="20"><br /><br />
				<strong>Country</strong> <select name="country" selected="<?php echo $country; ?>"><?php echo drop_down($country_array, $country) ?></select><br /><br />
				<strong>Postcode/Zip:</strong> <input type="text" name="zip" value="<?php echo $zip; ?>" size="20" maxlength="30"><br /><br />
				<strong>Fax:</strong> <input type="text" name="fax" value="<?php echo $fax; ?>" size="100"><br /><br />
				<strong>Website:</strong><input type="text" name="website" value="<?php echo $website; ?>" size="100"><br /><br />
				<strong>Payment Methods:</strong><textarea name="payment_methods" cols="69" rows="5"><?php echo $payment_methods; ?></textarea><br /><br />
				<strong>Discount Available:</strong>&nbsp;Y<input type="radio" name="discount_available" value="y">
				N<input type="radio" name="discount_available" value="n" checked><br /><br />
				<strong>Discount Rate:</strong><input type="text" name="discount_rate" value="<?php echo $discount_rate; ?>" size="100"><br /><br />
				<strong>Avg. Order Size:</strong><input type="text" name="avg_order_size" value="<?php echo $avg_order_size; ?>" size="50"><br /><br />
				<strong>Avg. Order Freq. Days:</strong><input type="text" name="avg_order_freq_days" value="<?php echo $avg_order_freq_days; ?>" size="50"><br /><br />
				<strong>My Cust. ID:</strong><input type="text" name="my_cust_id" value="<?php echo $my_cust_id; ?>" size="50"><br /><br />
				<strong>Cust. URLS:</strong><textarea name="custom_urls" cols="69" rows="5"><?php echo $custom_urls; ?></textarea><br /><br />
				<strong>Notes:</strong><textarea name="notes" cols="69" rows="5"><?php echo $notes; ?></textarea><br /><br />
				<strong>Active:</strong>
					Y<input type="radio" name="active" value="y" <?php echo (strcmp($active,'y') == 0) ? "checked" : ""; ?>>
					N<input type="radio" name="active" value="n" <?php echo (strcmp($active,'n') == 0) ? "checked" : ""; ?>><br /><br />
				<input type="submit" name="submit" value="Submit">
		</form>
	</body>
</html>