<?php
	include_once("mysql.php");
	include_once("includes/include_functions.php");
	
	$product_id				= 0;
	$sku 					= '';
	$name 					= '';
	$price 					= '';
	$msrp 					= '';
	$unit_weight			= '';
	$cart_desc 				= '';
	$short_desc				= '';
	$long_desc 				= '';
	$category				= '';
	$units_in_stock 		= '';
	$category_array			= array();
	$supplier				= '';
	$supplier_product_id	= '';
	$supplier_array			= array();
	$quantity_per_unit		= '';
	$available_sizes		= '';
	$available_colors		= '';
	$discount				= '';
	$units_on_order			= '';
	$reorder_level			= '';
	
	$active 				= '';
	$available				= '';
	$discount_available		= '';
	$current_order			= '';
	$note					= '';
	$product_array			= array();
	
	$sql_get_products = mysqli_query($link, "SELECT * FROM products WHERE active='y' ORDER BY id DESC");
	$sql_num_prod = mysqli_num_rows($sql_get_products);
	$i = 0;
	
	if ($sql_num_prod > 0) {
      	while ($row = mysqli_fetch_array($sql_get_products)) {
      	
      		$sql_product_id 	= $row['id'];
      		$sql_name 			= $row['name'];
        	$sql_cart_desc 		= $row['cart_desc'];
        	$sql_category_id 	= $row['category_id'];
        	$sql_supplier_id 	= $row['supplier_id'];
        	$sql_create_date 	= $row['created'];
        	$category_name		= '';
        	$supplier_name		= '';
        	
        	//Get category_name
        	$sql_get_category = mysqli_query($link,"SELECT name FROM product_categories WHERE id='$sql_category_id' LIMIT 1");
			$sql_num_cat = mysqli_num_rows($sql_get_category);
	  	
			if ($sql_num_cat > 0) {
      			while ($row = mysqli_fetch_array($sql_get_category)) {
      				$category_name = $row['name'];
      			}
      		}
      		
      		//Get supplier_name
    		$sql_get_supplier = mysqli_query($link,"SELECT company_name FROM suppliers WHERE id='$sql_supplier_id' LIMIT 1");
			$sql_num_supp = mysqli_num_rows($sql_get_supplier);
	  	
			if ($sql_num_supp > 0) {
      			while ($row = mysqli_fetch_array($sql_get_supplier)) {
      				$supplier_name = $row['company_name'];
      			}
    		}
        	
        	$product_array[$i]['id'] 			= $sql_product_id;
        	$product_array[$i]['name'] 			= $sql_name;
        	$product_array[$i]['cart_desc'] 	= substr($sql_cart_desc,0,30);
        	$product_array[$i]['category'] 		= $category_name;
        	$product_array[$i]['supplier'] 		= $supplier_name;
        	$product_array[$i]['created'] 		= $sql_create_date;
        	$i++;
        }
    }
	
	
	//Get Categories
	$sql_get_categories = mysqli_query($link,"SELECT * FROM product_categories WHERE active='y'");
	$sql_num_cat = mysqli_num_rows($sql_get_categories);
	  	
	if ($sql_num_cat > 0) {
      	while ($row = mysqli_fetch_array($sql_get_categories)) {
      		$category_id = $row['id'];
      		$category_name = $row['name'];
      		$category_array[$category_id] = $category_name;
      	}
    }
      	
    //Get Suppliers
    $sql_get_suppliers = mysqli_query($link,"SELECT * FROM suppliers WHERE active='y'");
	$sql_num_supp = mysqli_num_rows($sql_get_suppliers);
	  	
	if ($sql_num_supp > 0) {
      	while ($row = mysqli_fetch_array($sql_get_suppliers)) {
      		$supplier_id = $row['id'];
      		$supplier_name = $row['company_name'];
      		$supplier_array[$supplier_id] = $supplier_name;
      	}
    }
  	
  	if (isset($_POST['submit'])) {
    	$sku 				= clean($_POST['sku']);
      	$name 				= clean($_POST['name']);
		$price 				= clean($_POST['price']);
		$msrp 				= clean($_POST['msrp']);
		$unit_weight 		= clean($_POST['unit_weight']);
		$cart_desc 			= clean($_POST['cart_desc']);
		$short_desc			= clean($_POST['short_desc']);
		$long_desc 			= clean($_POST['long_desc']);
		$category			= clean($_POST['category']);
		$units_in_stock 	= clean($_POST['units']);
		$supplier			= clean($_POST['supplier']);
		$supplier_product_id= clean($_POST['supplier_product_id']);
		$quantity_per_unit	= clean($_POST['quantity_per_unit']);
		$available_sizes	= clean($_POST['available_sizes']);
		$available_colors	= clean($_POST['available_colors']);
		$discount			= clean($_POST['discount']);
		$units_on_order		= clean($_POST['units_on_order']);
		$reorder_level		= clean($_POST['reorder_level']);
				
		$active 			= isset($_POST['active']) ? preg_replace('#[^yn]#', '', $_POST['active']) : 'y';
		$available 			= isset($_POST['$available']) ? preg_replace('#[^yn]#', '', $_POST['$available']) : 'y';
		$discount_available = isset($_POST['discount_available']) ? preg_replace('#[^yn]#', '', $_POST['discount_available']) : 'y';
		$current_order 		= isset($_POST['current_order']) ? preg_replace('#[^yn]#', '', $_POST['current_order']) : 'y';
		$note				= clean($_POST['note']);
		$category_id 		= 0;
		$supplier_id		= 0;
		
		if (empty($name) || empty($price) || empty($category) || empty($unit_weight)
		|| empty($supplier) || empty($quantity_per_unit) || empty($cart_desc)
		|| empty($active) || empty($available) || empty($discount_available) || empty($current_order)) {
			$newURL = "products.php";
    		header('Location: '.$newURL);
    	}
			
		//get category id
		$sql_get_cat =  mysqli_query($link,"SELECT id FROM product_categories WHERE name='$category' LIMIT 1");
	  	$sql_num_cat = mysqli_num_rows($sql_get_cat);
	  	
	  	if ($sql_num_cat > 0) {
	  		while ($row = mysqli_fetch_array($sql_get_cat)) {
      			$category_id = $row['id'];
	  		}
		} else {
			exit();
		}
		
		//get supplier id
		$sql_get_supp =  mysqli_query($link,"SELECT id FROM suppliers WHERE company_name='$supplier' LIMIT 1") or die(mysqli_error($link));
	  	$sql_num_supp = mysqli_num_rows($sql_get_supp);
	  	
	  	if ($sql_num_supp > 0) {
	  		while ($row = mysqli_fetch_array($sql_get_supp)) {
      			$supplier_id = $row['id'];
	  		}
		} else {
			exit();
		}
		
		$sql_insert_product = mysqli_query($link, "INSERT INTO products (sku, name, price, msrp, unit_weight, cart_desc, short_desc, long_desc, category_id, units_in_stock, created, supplier_id, supplier_product_id, quantity_per_unit, available_sizes, available_colors, discount, units_on_order, reorder_level, active, available, discount_available, current_order, note) VALUES ('$sku', '$name', '$price', '$msrp', '$unit_weight', '$cart_desc', '$short_desc', '$long_desc', '$category_id', '$units_in_stock', now(), '$supplier_id', '$supplier_product_id', '$quantity_per_unit', '$available_sizes', '$available_colors', '$discount', '$units_on_order', '$reorder_level', '$active', '$available', '$discount_available', '$current_order', '$note')");
		$newURL = "products.php";
    	header('Location: '.$newURL);
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
		<strong>Add Product?</strong><input type="checkbox" id="slide" name="slide" value="y"><br /><br />
		<div id="slide-down">
			<strong>Required: <span style="color:red">*</span></strong><br /><br />
			<form action="products.php" method="post">
				<strong>SKU:</strong> <input type="text" name="sku" value="<?php echo $sku; ?>" size="50"><br /><br />
				<strong>Name<span style="color:red">*</span>:</strong> <input type="text" name="name" value="<?php echo $name; ?>" size="100"><br /><br />
				<strong>Price<span style="color:red">*</span>:</strong> <input type="text" name="price" value="<?php echo $price; ?>" size="100"><br /><br />
				<strong>MSRP:</strong> <input type="text" name="msrp" value="<?php echo $msrp; ?>" size="100"><br /><br />
				<strong>Unit Weight (in pounds)<span style="color:red">*</span>:</strong> <input type="text" name="unit_weight" value="<?php echo $unit_weight; ?>" size="100"><br /><br />
				<strong>Category<span style="color:red">*</span>:</strong> <select name="category" selected="<?php echo $category; ?>"><?php echo drop_down($category_array, $category) ?></select><br /><br />
				<strong>Units:</strong> <input type="text" name="units" value="<?php echo $units_in_stock; ?>" size="10"><br /><br />
				<strong>Supplier<span style="color:red">*</span>:</strong> <select name="supplier" selected="<?php echo $supplier; ?>"><?php echo drop_down($supplier_array, $supplier) ?></select><br /><br />
				<strong>Supplier Product Id:</strong> <input type="text" name="supplier_product_id" value="<?php echo $supplier_product_id; ?>" size="6"><br /><br />
				<strong>Quan. Per Unit<span style="color:red">*</span>:</strong> <input type="text" name="quantity_per_unit" value="<?php echo $quantity_per_unit; ?>" size="6"><br /><br />
				<strong>Sizes (Avail.):</strong> <input type="text" name="available_sizes" value="<?php echo $available_sizes; ?>" size=50"><br /><br />
				<strong>Discount:</strong> <input type="text" name="discount" value="<?php echo $discount; ?>" size=50"><br /><br />
				<strong>Units On Order:</strong> <input type="text" name="units_on_order" value="<?php echo $units_on_order; ?>" size=50"><br /><br />
				<strong>Reorder Level:</strong> <input type="text" name="reorder_level" value="<?php echo $reorder_level; ?>" size=50"><br /><br />
				<strong>Active:</strong>&nbsp;Y<input type="radio" name="active" value="y" checked>
				N<input type="radio" name="active" value="n"><br /><br />
				<strong>Available:</strong>&nbsp;Y<input type="radio" name="available" value="y" checked>
				N<input type="radio" name="available" value="n"><br /><br />
				<strong>Discount (in %):</strong>&nbsp;Y<input type="radio" name="discount_available" value="y">
				N<input type="radio" name="discount_available" value="n" checked><br /><br />
				<strong>Currently on Order?:</strong>&nbsp;Y<input type="radio" name="current_order" value="y">
				N<input type="radio" name="current_order" value="n" checked><br /><br />
				<strong>Cart Desc.<span style="color:red">*</span>:</strong> <textarea name="cart_desc" cols="69" rows="5"><?php echo $cart_desc; ?></textarea><br /><br />
				<strong>Short Desc.:</strong> <textarea name="short_desc" cols="69" rows="5"><?php echo $short_desc; ?></textarea><br /><br />
				<strong>Long Desc.:</strong> <textarea name="long_desc" cols="69" rows="5"><?php echo $long_desc; ?></textarea><br /><br />
				<strong>Color (Avail.):</strong> <textarea name="available_colors" cols="69" rows="5"><?php echo $available_colors; ?></textarea><br /><br />
				<strong>Note:</strong> <textarea name="note" cols="69" rows="5"><?php echo $note; ?></textarea><br /><br />
				<input type="submit" name="submit" value="Submit">
			</form>
		</div>
		<?php 
    		if (!empty($product_array)) {
    			$display_list = '<table cellpadding="5" border="1">';
    			for ($j = 0; $j < count($product_array); $j++) {
    				$display_list .=	'<tr><td>
    										<a href="product.php?id=' . $product_array[$j]['id'] . '">' . $product_array[$j]['name'] . '</a>
                              			</td>
                              			<td>
                              				' . $product_array[$j]['category'] . '
                              			</td>
                              			<td>
                              				' . $product_array[$j]['cart_desc'] . '
                              			</td>
                              			<td>
                              				' . $product_array[$j]['supplier'] . '
                              			</td>
                              			<td>
                              				' . $product_array[$j]['created'] . '
                              			</td></tr>';
    			}
    			
    			$display_list .= '</table>'; 
    		}
    		echo $display_list;
    	?>
	</body>
</html>