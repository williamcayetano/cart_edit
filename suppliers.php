<?php
	include_once("mysql.php");
	include_once("includes/include_functions.php");
	
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
	$suppliers_array		= array();
	
	$sql_get_suppliers = mysqli_query($link, "SELECT * FROM suppliers ORDER BY id DESC");
	$sql_num_supp = mysqli_num_rows($sql_get_suppliers);
	$i = 0;
	
	if ($sql_num_supp > 0) {
      	while ($row = mysqli_fetch_array($sql_get_suppliers)) {
      		$sql_supplier_id 	= $row['id'];
      		$sql_company_name 	= $row['company_name'];
        	$sql_city 			= $row['city'];
        	$sql_state 			= $row['state'];
        	$sql_country 		= $row['country'];
        	$sql_email 			= $row['email'];
        	$sql_type_goods 	= $row['type_goods'];
        	$created	 		= $row['created'];
        	$suppliers_array[$i]['id'] 				= $sql_supplier_id;
        	$suppliers_array[$i]['company_name'] 	= $sql_company_name;
        	$suppliers_array[$i]['city'] 			= $sql_city;
        	$suppliers_array[$i]['state'] 			= $sql_state;
        	$suppliers_array[$i]['country'] 		= $sql_country;
        	$suppliers_array[$i]['email'] 			= $sql_email;
        	$suppliers_array[$i]['type_goods'] 		= $sql_type_goods;
        	$suppliers_array[$i]['created'] 		= $created;
        	$i++;
        }
    }
	
	if (isset($_POST['submit'])) {
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
		
		if (empty($company_name) || empty($email) || empty($type_goods)) { 
			exit();
		}
		
		$sql_insert_product = mysqli_query($link, "INSERT INTO suppliers (company_name, contact_f_name, contact_l_name, 
		contact_title, address, address2, city, state, zip, country, phone, fax, email, website, payment_methods, discount_rate, 
		type_goods, discount_available, avg_order_size, avg_order_freq_days, last_order, my_cust_id, custom_urls, notes, created) VALUES 
		('$company_name', '$contact_f_name', '$contact_l_name', '$contact_title', '$address', '$address2', '$city', '$state', '$zip', 
		'$country', '$phone', '$fax', '$email', '$website', '$payment_methods', 
		'$discount_rate', '$type_goods', '$discount_available', '$avg_order_size', '$avg_order_freq_days', '$last_order', '$my_cust_id', 
		'$custom_urls', '$notes', now())");
    	
    	/*if($sql_insert_product) {
			$newURL = "suppliers.php";
    		header('Location: '.$newURL);
		}*/
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
		<strong>Add Supplier?</strong><input type="checkbox" id="slide" name="slide" value="y"><br /><br />
		<div id="slide-down">
			<strong>Required: <span style="color:red">Company Name, Email, Type Goods</span></strong><br /><br />
			<form action="supplier_edit.php" method="post">
				<strong>Company Name<span style="color:red">*</span>:</strong><input type="text" name="company_name" value="<?php echo $company_name; ?>" size="50"><br /><br />
				<strong>Email<span style="color:red">*</span>:</strong><input type="text" name="email" value="<?php echo $email; ?>" size="100"><br /><br />
				<strong>Type Goods<span style="color:red">*</span>:</strong><textarea name="type_goods" cols="69" rows="5"><?php echo $type_goods; ?></textarea><br /><br />
				<strong>Contact F. Name:</strong><input type="text" name="contact_f_name" value="<?php echo $contact_f_name; ?>" size="100"><br /><br />
				<strong>Contact L. Name:</strong><input type="text" name="contact_l_name" value="<?php echo $contact_l_name; ?>" size="100"><br /><br />
				<strong>Contact Title:</strong><input type="text" name="contact_title" value="<?php echo $contact_title; ?>" size="100"><br /><br />
				<strong>Phone:</strong> <input type="text" name="phone" value="<?php echo $phone; ?>" size="30" maxlength="30"><br /><br />
				<strong>Address:</strong><input type="text" name="address" value="<?php echo $address; ?>" size="100"><br /><br />
				<strong>Address 2:</strong><input type="text" name="address2" value="<?php echo $address2; ?>" size="100"><br /><br />
				<strong>Town/City:</strong> <input type="text" name="city" value="<?php echo $city; ?>" size="30" maxlength="60"><br /><br />
				<strong>State/County:</strong> <input type="text" name="state" value="<?php echo $state; ?>" size="10" maxlength="20"><br /><br />
				<strong>Country:</strong> <select name="country" selected="<?php echo $country; ?>"><?php echo drop_down($country_array, $country) ?></select><br /><br />
				<strong>Postcode/Zip:</strong> <input type="text" name="zip" value="<?php echo $zip; ?>" size="20" maxlength="30"><br /><br />
				<strong>Fax:</strong> <input type="text" name="fax" value="<?php echo $fax; ?>" size="100"><br /><br />
				<strong>Website:</strong><input type="text" name="website" value="<?php echo $website; ?>" size="100"><br /><br />
				<strong>Payment Methods:</strong><textarea name="payment_methods" cols="69" rows="5"><?php echo $payment_methods; ?></textarea><br /><br />
				<strong>Discount Available:</strong>Y<input type="radio" name="discount_available" value="y">
				N<input type="radio" name="discount_available" value="n" checked><br /><br />
				<strong>Discount Rate:</strong><input type="text" name="discount_rate" value="<?php echo $discount_rate; ?>" size="100"><br /><br />
				<strong>Avg. Order Size:</strong><input type="text" name="avg_order_size" value="<?php echo $avg_order_size; ?>" size="50"><br /><br />
				<strong>Avg. Order Freq. Days:</strong><input type="text" name="avg_order_freq_days" value="<?php echo $avg_order_freq_days; ?>" size="50"><br /><br />
				<strong>My Cust. ID:</strong><input type="text" name="my_cust_id" value="<?php echo $my_cust_id; ?>" size="50"><br /><br />
				<strong>Cust. URLS:</strong><textarea name="custom_urls" cols="69" rows="5"><?php echo $custom_urls; ?></textarea><br /><br />
				<strong>Notes:</strong><textarea name="notes" cols="69" rows="5"><?php echo $notes; ?></textarea><br /><br />
				<input type="submit" name="submit" value="Submit">
			</form>
		</div>
		<?php 
    		if (!empty($suppliers_array)) {
    			$display_list = '<table cellpadding="5" border="1">';
    			for ($j = 0; $j < count($suppliers_array); $j++) {
    				$display_list .=	'<tr><td>
    										<a href="supplier.php?id=' . $suppliers_array[$j]['id'] . '">' . $suppliers_array[$j]['company_name'] . '</a>
                              			</td>
                              			<td>
                              				' . $suppliers_array[$j]['email'] . '
                              			</td>
                              			<td>
                              				' . $suppliers_array[$j]['city'] . '
                              			</td>
                              			<td>
                              				' . $suppliers_array[$j]['state'] . '
                              			</td>
                              			<td>
                              				' . $suppliers_array[$j]['country'] . '
                              			</td>
                              			<td>
                              				' . $suppliers_array[$j]['type_goods'] . '
                              			</td>
                              			<td>'
                              				. $suppliers_array[$j]['created'] . 
                              			'</td></tr>';
    			}
    			
    			$display_list .= '</table>'; 
    		}
    		echo $display_list;
    	?>
	</body>
</html>