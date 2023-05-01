<?php
	include_once("mysql.php");
	include_once("includes/include_functions.php");
	
	$product 		= '';
	$user 			= '';
	$processor 		= '';
	$shipper		= '';
	$company			= '';
	$quantity		= '';
	$ship_f_name	= '';
	$ship_l_name	= '';
	$ship_address 	= '';
	$ship_address2	= '';
	$ship_city		= '';
	$ship_state		= '';
	$ship_zip		= '';
	$ship_country	= '';
	$phone			= '';
	$bill_f_name	= '';
	$bill_l_name	= '';
	$bill_address 	= '';
	$bill_address2	= '';
	$bill_city		= '';
	$bill_state		= '';
	$bill_zip		= '';
	$bill_country	= '';
	$ship_date		= '';
	$email 			= '';
	$tax			= '';
	$tracking		= '';
	$shipped		= '';
	$fulfilled		= '';
	$paid			= '';
	$product_id		= 0;
	$user_id		= 0;
	$processor_id	= 0;
	$shipper_id		= 0;
	$order_id		= 0;
	$active 		= '';
	
	
	if (isset($_GET['id'])) {
		$order_id = preg_replace('#[^0-9]#', '', $_GET['id']);
		
		if (empty($order_id))
  			exit();
  			
  		$sql_get_order = mysqli_query($link, "SELECT * FROM orders WHERE id='$order_id' LIMIT 1");
      	$sql_num_order = mysqli_num_rows($sql_get_order);
      	
      	if ($sql_num_order > 0) {
      		while ($row = mysqli_fetch_array($sql_get_order)) {
      			$product_id 	= $row['product_id'];
      			$user_id		= $row['user_id'];
      			$processor_id	= $row['processor_id'];
      			$shipper_id		= $row['shipper_id'];
      			$company		= $row['company'];
      			$quantity		= $row['quantity'];
      			$ship_f_name	= $row['ship_f_name'];
      			$ship_l_name	= $row['ship_l_name'];
      			$ship_address	= $row['ship_address'];
      			$ship_address_2 = $row['ship_address_2'];
      			$ship_city		= $row['ship_city'];
      			$ship_state		= $row['ship_state'];
				$ship_zip		= $row['ship_zip'];
				$ship_country	= $row['ship_country'];
				$phone			= $row['phone'];
				$bill_f_name	= $row['bill_f_name'];
				$bill_l_name	= $row['bill_l_name'];
				$bill_address 	= $row['bill_address'];
				$bill_address2	= $row['bill_address2'];
				$bill_city		= $row['bill_city'];
				$bill_state		= $row['bill_state'];
				$bill_zip		= $row['bill_zip'];
				$bill_country	= $row['bill_country'];
				$ship_date		= $row['ship_date'];
				$email 			= $row['email'];
				$ip_address     = $row['ip_address'];
				$user_agent		= $row['user_agent'];
				$tax			= $row['tax'];
				$tracking		= $row['tracking'];
				$shipped		= $row['shipped'];
				$fulfilled		= $row['fulfilled'];
				$paid			= $row['paid'];
				$active			= $row['active'];
      		}
      	}
  			
  		//Get Product Name
  		$sql_get_product = mysqli_query($link, "SELECT name FROM products WHERE id='$product_id' LIMIT 1");
  		$sql_num_product = mysqli_num_rows($sql_get_product);
  		
  		if ($sql_num_product > 0) {
  			while ($row = mysqli_fetch_array($sql_get_product)) {
  				$product = $row['name'];
  			}
  		}
  		
  		//Get User Name
  		$sql_get_user = mysqli_query($link, "SELECT username FROM users WHERE id='$user_id' LIMIT 1");
  		$sql_num_user = mysqli_num_rows($sql_get_user);
  		
  		if ($sql_num_user > 0) {
  			while ($row = mysqli_fetch_array($sql_get_user)) {
  				$user = $row['username'];
  			}
  		}
  		
  		//Get Processor Name
  		$sql_get_processor = mysqli_query($link, "SELECT name FROM processors WHERE id='$processor_id' LIMIT 1");
  		$sql_num_processor = mysqli_num_rows($sql_get_processor);
  		
  		if ($sql_num_processor > 0) {
  			while ($row = mysqli_fetch_array($sql_get_processor)) {
  				$processor = $row['name'];
  			}
  		}
  		
  		//Get Shipper Name
  		$sql_get_shipper = mysqli_query($link, "SELECT name FROM shippers WHERE id='$shipper_id' LIMIT 1");
  		$sql_num_shipper = mysqli_num_rows($sql_get_shipper);
  		
  		if ($sql_num_shipper > 0) {
  			while ($row = mysqli_fetch_array($sql_get_shipper)) {
  				$shipper = $row['name'];
  			}
  		}
      	
    } else if (isset($_POST['submit'])) {
		$order_id 		= preg_replace('#[^0-9]#', '', $_POST['id']);
		$product 		= clean($_POST['product']);
      	$user			= clean($_POST['user']);
      	$processor		= clean($_POST['processor']);
      	$shipper		= clean($_POST['shipper']);
      	$quantity		= clean($_POST['quantity']);
      	$ship_f_name	= clean($_POST['ship_f_name']);
      	$ship_l_name	= clean($_POST['ship_l_name']);
      	$ship_address	= clean($_POST['ship_address']);
      	$ship_address_2 = clean($_POST['ship_address_2']);
      	$ship_city		= clean($_POST['ship_city']);
      	$ship_state		= clean($_POST['ship_state']);
		$ship_zip		= clean($_POST['ship_zip']);
		$ship_country	= clean($_POST['ship_country']);
		$phone			= clean($_POST['phone']);
		$bill_f_name	= clean($_POST['bill_f_name']);
		$bill_l_name	= clean($_POST['bill_l_name']);
		$bill_address 	= clean($_POST['bill_address']);
		$bill_address_2	= clean($_POST['bill_address2']);
		$bill_city		= clean($_POST['bill_city']);
		$bill_state		= clean($_POST['bill_state']);
		$bill_zip		= clean($_POST['bill_zip']);
		$bill_country	= clean($_POST['bill_country']);
		$ship_date		= clean($_POST['ship_date']);
		$email 			= clean($_POST['email']);
		$tax			= clean($_POST['tax']);
		$tracking		= clean($_POST['tracking']);
		$shipped		= clean($_POST['shipped']);
		$fulfilled		= clean($_POST['fulfilled']);
		$paid			= clean($_POST['paid']);
		$notes			= clean($_POST['notes']);
		$active 		= clean($_POST['active']);
		$ip_address     = getenv('REMOTE_ADDR');
		$user_agent		= user_agent();
		
		
			
		if (empty($order_id))
			exit();
				
		//Get Product ID
  		$sql_get_product = mysqli_query($link, "SELECT id FROM products WHERE name='$product' LIMIT 1");
  		$sql_num_product = mysqli_num_rows($sql_get_product);
  		
  		if ($sql_num_product > 0) {
  			while ($row = mysqli_fetch_array($sql_get_product)) {
  				$product_id = $row['id'];
  			}
  		}
  		
  		//Get User ID
  		$sql_get_user = mysqli_query($link, "SELECT id FROM users WHERE username='$user' LIMIT 1");
  		$sql_num_user = mysqli_num_rows($sql_get_user);
  		
  		if ($sql_num_user > 0) {
  			while ($row = mysqli_fetch_array($sql_get_user)) {
  				$user_id = $row['id'];
  			}
  		}
  		
  		//Get Processor ID
  		$sql_get_processor = mysqli_query($link, "SELECT id FROM processors WHERE name='$processor' LIMIT 1");
  		$sql_num_processor = mysqli_num_rows($sql_get_processor);
  		
  		if ($sql_num_processor > 0) {
  			while ($row = mysqli_fetch_array($sql_get_processor)) {
  				$processor_id = $row['id'];
  			}
  		}
  		
  		//Get Shipper ID
  		$sql_get_shipper = mysqli_query($link, "SELECT id FROM shippers WHERE name='$shipper' LIMIT 1");
  		$sql_num_shipper = mysqli_num_rows($sql_get_shipper);
  		
  		if ($sql_num_shipper > 0) {
  			while ($row = mysqli_fetch_array($sql_get_shipper)) {
  				$shipper_id = $row['id'];
  			}
  		}
		
		//check if new order
		if (!empty($product_id) && !empty($user_id) && !empty($processor_id) && !empty($shipper_id)) {
			$sql_update_processor = mysqli_query($link, "UPDATE ORDERS SET product_id='$product_id', user_id='$user_id', processor_id='$processor_id', shipper_id='$shipper_id', quantity='$quantity', ship_f_name='$ship_f_name', ship_l_name='$ship_l_name', ship_address='$ship_address', ship_address_2='$ship_address_2', ship_city='$ship_city', ship_state='$ship_state', ship_zip='$ship_zip', ship_country='$ship_country', phone='$phone', bill_f_name='$bill_f_name', bill_l_name='$bill_l_name', bill_address='$bill_address', bill_address_2='$bill_address_2', bill_city='$bill_city', bill_state='$bill_state', bill_zip='$bill_zip', bill_country='$bill_country', ship_date='$ship_date', email='$email', ip_address='$ip_address', user_agent='$user_agent', tax='$tax', tracking_name='$tracking_name', shipped='$shipped', fulfilled='$fulfilled', paid='$paid', notes='$notes', active='$active' WHERE id='$order_id' LIMIT 1");
		} else {
			exit();
		}
	}
?>


<html>
	<head>
	</head>
	<body>
		<?php include_once("includes/menu.php"); ?>
		<a href="orders.php"><--Back To Orders</a><br /><br />
		<form action="order.php" method="post">
			<input type="hidden" name="id" value="<?php echo $order_id; ?>">
			<strong>Product</strong> <input type="text" name="product" value="<?php echo $product; ?>" size="50" readonly><br /><br />
			<strong>User</strong> <input type="text" name="user" value="<?php echo $user; ?>" size="40" readonly><br /><br />
			<strong>Processor</strong> <input type="text" name="processor" value="<?php echo $processor; ?>" size="40" readonly><br /><br />
			<strong>Shipper</strong> <input type="text" name="shipper" value="<?php echo $shipper; ?>" size="40" readonly><br /><br />
			<strong>Company</strong> <input type="text" name="company" value="<?php echo $company; ?>" size="30"><br /><br />
			<strong>Quantity</strong> <input type="text" name="quantity" value="<?php echo $quantity; ?>" size="10"><br /><br />
			<strong>Ship F. Name</strong> <input type="text" name="ship_f_name" value="<?php echo $ship_f_name; ?>" size="40"><br /><br />
			<strong>Ship L. Name</strong> <input type="text" name="ship_l_name" value="<?php echo $ship_l_name; ?>" size="30"><br /><br />
			<strong>Ship Address</strong> <input type="text" name="ship_address" value="<?php echo $ship_address; ?>" size="50"><br /><br />
			<strong>Ship Address 2</strong> <input type="text" name="ship_address2" value="<?php echo $ship_address2; ?>" size="20"><br /><br />
			<strong>Ship City</strong> <input type="text" name="ship_city" value="<?php echo $ship_city; ?>" size="20"><br /><br />
			<strong>Ship State</strong> <input type="text" name="ship_state" value="<?php echo $ship_state; ?>" size="20"><br /><br />
			<strong>Ship Zip</strong> <input type="text" name="ship_zip" value="<?php echo $ship_zip; ?>" size="20"><br /><br />
			<strong>Ship Country</strong> <input name="ship_country" input type="text" value="<?php echo $ship_country; ?>" size="40"><br /><br />
			<strong>Phone</strong> <input type="text" name="phone" value="<?php echo $phone; ?>" size="20"><br /><br />
			
			<strong>Bill F. Name</strong> <input type="text" name="bill_f_name" value="<?php echo $bill_f_name; ?>" size="40"><br /><br />
			<strong>Bill L. Name</strong> <input type="text" name="bill_l_name" value="<?php echo $bill_l_name; ?>" size="30"><br /><br />
			<strong>Bill Address</strong> <input type="text" name="bill_address" value="<?php echo $bill_address; ?>" size="50"><br /><br />
			<strong>Bill Address2</strong> <input type="text" name="bill_address2" value="<?php echo $bill_address_2; ?>" size="20"><br /><br />
			<strong>Bill City</strong> <input type="text" name="bill_city" value="<?php echo $bill_city; ?>" size="20"><br /><br />
			<strong>Bill State</strong> <input type="text" name="bill_state" value="<?php echo $bill_state; ?>" size="20"><br /><br />
			<strong>Bill Zip</strong> <input type="text" name="bill_zip" value="<?php echo $bill_zip; ?>" size="20"><br /><br />
			<strong>Bill Country</strong> <input name="bill_country" input type="text" value="<?php echo $bill_country; ?>" size="40"><br /><br />
			<strong>Ship Date</strong> <input type="text" name="ship_date" value="<?php echo $ship_date; ?>" size="40"><br /><br />
			<strong>Email</strong> <input type="text" name="email" value="<?php echo $email; ?>" size="40"><br /><br />
			<strong>Tax</strong> <input type="text" name="tax" value="<?php echo $tax; ?>" size="40"><br /><br />
			<strong>Tracking</strong> <textarea name="tracking" cols="49" rows="2"><?php echo $tracking; ?></textarea><br /><br />
			<strong>Notes</strong> <textarea name="notes" cols="49" rows="2"><?php echo $notes; ?></textarea><br /><br />
			
			<strong>Shipped</strong> <input type="radio" name="shipped" value="y" <?php echo strcmp('y',$shipped) == 0 ? 'checked' : ''; ?>>&nbsp;&nbsp;
			<input type="radio" name="shipped" value="n" <?php echo strcmp('n',$shipped) == 0 ? 'checked' : ''; ?>><br /><br />
			<strong>Fulfilled</strong> <input type="radio" name="fulfilled" value="y" <?php echo strcmp('y',$fulfilled) == 0 ? 'checked' : ''; ?>>&nbsp;&nbsp;
			<input type="radio" name="fulfilled" value="n" <?php echo strcmp('n',$fulfilled) == 0 ? 'checked' : ''; ?>><br /><br />
			<strong>Paid</strong> <input type="radio" name="paid" value="y" <?php echo strcmp('y',$paid) == 0 ? 'checked' : ''; ?>>&nbsp;&nbsp;
			<input type="radio" name="paid" value="n" <?php echo strcmp('n',$paid) == 0 ? 'checked' : ''; ?>><br /><br />
			<strong>Active</strong> <input type="radio" name="active" value="y" <?php echo strcmp('y',$active) == 0 ? 'checked' : ''; ?>>&nbsp;&nbsp;
			<input type="radio" name="active" value="n" <?php echo strcmp('n',$active) == 0 ? 'checked' : ''; ?>><br /><br />
			<input type="submit" name="submit" value="Submit">
		</form>
	</body>
</html>