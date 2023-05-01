<?php
	include_once("mysql.php");
	include_once("includes/include_functions.php");
	
	$name = '';
	$categories_array = array();
	
	$sql_get_categories = mysqli_query($link, "SELECT * FROM product_categories WHERE active='y'");
	$sql_num_cat = mysqli_num_rows($sql_get_categories);
	$i = 0;
	
	if ($sql_num_cat > 0) {
      	while ($row = mysqli_fetch_array($sql_get_categories)) {
      		$sql_category_id = $row['id'];
        	$sql_name = $row['name'];
        	$created_date = $row['created'];
        	$categories_array[$i]['id'] = $sql_category_id;
        	$categories_array[$i]['name'] = $sql_name;
        	$categories_array[$i]['created'] = $created_date;
        	$i++;
        }
    }
	
	if (isset($_POST['submit'])) {
		$name = clean($_POST['name']);
		
		if (empty($name))
			exit();
			
		$sql_insert_product_category = mysqli_query($link, "INSERT INTO product_categories (name, created) VALUES ('$name',now())");
		$newURL = "categories.php";
    	header('Location: '.$newURL);
	} else if (isset($_POST['submit2'])) {
		$product_category_id = preg_replace('#[^0-9]#', '', $_POST['id']);
		
		
		$sql_update = mysqli_query($link, "UPDATE product_categories SET active='n' WHERE id='$product_category_id' LIMIT 1");
		$newURL = "categories.php";
    	header('Location: '.$newURL);
	}
?>


<html>
	<head>
	</head>
	<body>
		<?php include_once("includes/menu.php"); ?>
		<form action="categories.php" method="post">
			<strong>Product Category</strong><input type="text" name="name" value="<?php echo $name; ?>" size="25">
			<input type="submit" name="submit" value="Submit">
		</form>
		<?php 
    		if (!empty($categories_array)) {
    			$display_list = '<table cellpadding="5" border="1">';
    			for ($j = 0; $j < count($categories_array); $j++) {
    				$display_list .=	'<tr><td>
    										' . $categories_array[$j]['name'] . '
                              			</td>
                              			<td>'
                              				. $categories_array[$j]['created'] . 
                              			'</td>
                              			<td>
                              				<form action="categories.php" method="post">
												<input type="hidden" name="id" value="' . $categories_array[$j]['id'] . '">
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