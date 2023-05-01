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
  	
  	if (isset($_GET['id'])) {
  		$product_id = preg_replace('#[^0-9]#', '', $_GET['id']);
  		
  		if (empty($product_id)) {
  			$newURL = "products.php";
    		header('Location: '.$newURL);
    	}
      	
      	//Finally, Get Product
      	$sql_get_product = mysqli_query($link, "SELECT * FROM products WHERE id='$product_id' LIMIT 1");
      	$sql_num_prod = mysqli_num_rows($sql_get_product);
      	
      	if ($sql_num_prod > 0) {
      		while ($row = mysqli_fetch_array($sql_get_product)) {
      			$sku 				= $row['sku'];
      			$name 				= $row['name'];
				$price 				= $row['price'];
				$msrp 				= $row['msrp'];
				$unit_weight 		= $row['unit_weight'];
				$cart_desc 			= $row['cart_desc'];
				$short_desc			= $row['short_desc'];
				$long_desc 			= $row['long_desc'];
				$category_id		= $row['category_id'];
				$units_in_stock 	= $row['units_in_stock'];
				$supplier_id		= $row['supplier_id'];
				$quantity_per_unit	= $row['quantity_per_unit'];
				$available_sizes	= $row['available_sizes'];
				$available_colors	= $row['available_colors'];
				$discount			= $row['discount'];
				$units_on_order		= $row['units_on_order'];
				$reorder_level		= $row['reorder_level'];
				
				$active 			= $row['active'];
				$available			= $row['available'];
				$discount_available	= $row['discount_available'];
				$current_order		= $row['current_order'];
				$note				= $row['note'];
				
				//get category id
				$sql_get_cat =  mysqli_query($link,"SELECT name FROM product_categories WHERE id='$category_id' LIMIT 1");
	  			$sql_num_cat = mysqli_num_rows($sql_get_cat);
	  	
	  			if ($sql_num_cat > 0) {
	  				while ($row = mysqli_fetch_array($sql_get_cat)) {
      					$category = $row['name'];
	  				}
				} else {
					exit();
				}
		
				//echo "Suppliers: " . $supplier_name;
				//exit();
		
				//get supplier id
				$sql_get_supp =  mysqli_query($link,"SELECT company_name FROM suppliers WHERE id='$supplier_id' LIMIT 1") or die(mysqli_error($link));
	  			$sql_num_supp = mysqli_num_rows($sql_get_supp);
	  	
	  			if ($sql_num_supp > 0) {
	  				while ($row = mysqli_fetch_array($sql_get_supp)) {
      					$supplier = $row['company_name'];
	  				}
				} else {
					exit();
				}
      			
      		}
      	}
      	
    }
?>

<html>
	<head>
	</head>
	<body>
		<?php include_once("includes/menu.php"); ?>
		<a href="products.php"><--Back To Products</a><br /><br />
		<strong>Required: <span style="color:red">*</span></strong><br /><br />
		<form action="products.php" method="post">
			<strong>SKU:</strong> <input type="text" name="sku" value="<?php echo $sku; ?>" size="50"><br /><br />
			<strong>Name<span style="color:red">*</span>:</strong> <input type="text" name="name" value="<?php echo $name; ?>" size="100"><br /><br />
			<strong>Price<span style="color:red">*</span>:</strong> <input type="text" name="price" value="<?php echo $price; ?>" size="100"><br /><br />
			<strong>MSRP:</strong> <input type="text" name="msrp" value="<?php echo $msrp; ?>" size="100"><br /><br />
			<strong>Unit Weight (in pounds)<span style="color:red">*</span>:</strong> <input type="text" name="unit_weight" value="<?php echo $unit_weight; ?>" size="100"><br /><br />
			<?php echo $category; ?>
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
		<a href="product_images.php?id=<?php echo $product_id; ?>">Add images</a>
	</body>
</html>