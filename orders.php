<?php
	include_once("mysql.php");
	include_once("includes/include_functions.php");
	
	$orders_array		= array();
	$display_list 		= '';
	
	$sql_get_orders = mysqli_query($link, "SELECT * FROM orders WHERE active='y'ORDER BY id DESC");
	$sql_num_orders = mysqli_num_rows($sql_get_orders);
	$i = 0;
	
	if ($sql_num_orders > 0) {
      	while ($row = mysqli_fetch_array($sql_get_orders)) {
      		$sql_order_id 		= $row['id'];
      		$sql_product_id 	= $row['product_id'];
        	$sql_user_id 		= $row['user_id'];
        	$sql_processor_id 	= $row['processor_id'];
        	$sql_shipper_id 	= $row['shipper_id'];
        	$sql_total 			= $row['total'];
        	$sql_quantity 		= $row['quantity'];
        	$sql_ship_city		= $row['ship_city'];
        	$sql_ship_state		= $row['ship_state'];
        	$sql_ship_country	= $row['ship_country']; 
        	$created	 		= $row['created'];
        	$sql_product_name	= '';
        	$sql_user_name		= '';
        	$sql_processor_name = '';
        	$sql_shipper_name	= '';
        	
        	//get product name
        	$sql_get_product = mysqli_query($link, "SELECT name FROM products WHERE id='$sql_product_id' LIMIT 1");
        	$sql_num_product = mysqli_num_rows($sql_get_product);
        	
        	if ($sql_num_product > 0) {
        		while ($row = mysqli_fetch_array($sql_get_product)) {
        			$sql_product_name = $row['name'];
        		}
        	}
        	
        	//get user name
        	$sql_get_user = mysqli_query($link, "SELECT username FROM users WHERE id='$sql_user_id' LIMIT 1");
        	$sql_num_user = mysqli_num_rows($sql_get_user);
        	
        	if ($sql_num_user > 0) {
        		while ($row = mysqli_fetch_array($sql_get_user)) {
        			$sql_user_name = $row['username'];	
        		}
        	}
        	
        	//get processor name
        	$sql_get_processor = mysqli_query($link, "SELECT name FROM processors WHERE id='$sql_processor_id' LIMIT 1");
        	$sql_num_processor = mysqli_num_rows($sql_get_processor);
        	
        	if ($sql_num_processor > 0) {
        		while ($row = mysqli_fetch_array($sql_get_processor)) {
        			$sql_processor_name = $row['name'];	
        		}
        	}
        	
        	//get shipper name
        	$sql_get_shipper = mysqli_query($link, "SELECT name FROM shippers WHERE id='$sql_shipper_id' LIMIT 1");
        	$sql_num_shipper = mysqli_num_rows($sql_get_shipper);
        	
        	if ($sql_num_shipper > 0) {
        		while ($row = mysqli_fetch_array($sql_get_shipper)) {
        			$sql_shipper_name = $row['name'];	
        		}
        	}
        	
        	$orders_array[$i]['id'] 			= $sql_order_id;
        	$orders_array[$i]['product_id'] 	= $sql_product_id;
        	$orders_array[$i]['product_name'] 	= $sql_product_name;
        	$orders_array[$i]['user_id'] 		= $sql_user_id;
        	$orders_array[$i]['user_name'] 		= $sql_user_name;
        	$orders_array[$i]['processor_name'] = $sql_processor_name;
        	$orders_array[$i]['shipper_name'] 	= $sql_shipper_name;
        	$orders_array[$i]['total'] 			= $sql_total;
        	$orders_array[$i]['quantity'] 		= $sql_quantity;
        	$orders_array[$i]['ship_city']		= $sql_ship_city;
        	$orders_array[$i]['ship_state']		= $sql_ship_state;
        	$orders_array[$i]['ship_country']	= $sql_ship_country;
        	$orders_array[$i]['created'] 		= $created;
        	
        	$i++;
        }
    }
?>


<html>
	<head>
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
		<?php 
    		if (!empty($orders_array)) {
    			$display_list = '<table cellpadding="5" border="1">';
    			for ($j = 0; $j < count($orders_array); $j++) {
    				$display_list .=	'<tr><td>
    										<a href="order.php?id=' . $orders_array[$j]['id'] . '">' . $orders_array[$j]['id'] . '</a>
                              			</td>
                              			<td>
                              				<a href="product.php?id=' . $orders_array[$j]['product_id'] . '">' . $orders_array[$j]['product_name'] . '</a>
                              			</td>
                              			<td>
                              				<a href="user.php?id=' . $orders_array[$j]['user_id'] . '">' . $orders_array[$j]['user_name'] . '</a>
                              			</td>
                              			<td>
                              				' . $orders_array[$j]['processor_name'] . '
                              			</td>
                              			<td>
                              				' . $orders_array[$j]['shipper_name'] . '
                              			</td>
                              			<td>
                              				' . $orders_array[$j]['total'] . '
                              			</td>
                              			<td>'
                              				. $orders_array[$j]['quantity'] . 
                              			'</td>
                              			<td>
                              				' . $orders_array[$j]['ship_city'] . '
                              			</td>
                              			<td>
                              				' . $orders_array[$j]['ship_state'] . '
                              			</td>
                              			<td>
                              				' . $orders_array[$j]['ship_country'] . '
                              			</td>
                              			<td>
                              				' . $orders_array[$j]['created'] . '
                              			</td></tr>';
    			}
    			
    			$display_list .= '</table>'; 
    			echo $display_list;
    		} else {
    			echo '<h3>No Orders</h3>';
    		}
    	?>
	</body>
</html>