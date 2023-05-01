<?php
	include_once("includes/mysql.php");
	include_once("includes/include_functions.php");
	
	$msg = '';
	$product_id = 1;
	$photo_name = '';
	$product_name = '';
	$active = 'y';
	$image_array = array();
	//$rank = 0;
	
	/*$gd = gd_info();

	while( list( $k, $v ) = each( $gd ) )
	{
  		//echo "$k: $v";
	}*/
	
  	
  	if (isset($_GET['id'])) {
  		$product_id = preg_replace('#[^0-9]#', '', $_GET['id']);
  		
  		if (empty($product_id)) {
  			$newURL = "products.php";
    		header('Location: '.$newURL);
  		}
  			
  		$sql_get_product = mysqli_query($link,"SELECT name FROM products WHERE id='$product_id LIMIT 1");
  		$product_name = $sql_get['name'];
  		$i = 0;
  		
  		$sql_get_images = mysqli_query($link, "SELECT * FROM product_images WHERE product_id='$product_id' ORDER BY rank");
  		
  		$sql_num_post = mysqli_num_rows($sql_get_images);
    
    	if ($sql_num_post > 0) {
      		while ($row = mysqli_fetch_array($sql_get_images)) {
        		$image_id = $row['id'];
        		$name = $row['name'];
        		$rank = $row['rank'];
        		$product_active = $row['active'];
        		$created = $row['created'];
        		$image_array[$i]['id'] = $image_id;
        		$image_array[$i]['html'] = '<img src="uploads/list_'. $name . '">';
        		$image_array[$i]['rank'] = $rank;
        		$image_array[$i]['active'] = $product_active;
        		$image_array[$i]['created'] = $created;
        		$i++;
        	}
        }
  	} else if (isset($_POST['submit'])) {
  		$product_id = preg_replace('#[^0-9]#', '', $_POST['product_id']);
  		$rank = preg_replace('#[^1-9]#', '0', $_POST['rank']);
  		$active = isset($_POST['active']) ? preg_replace('#[^yn]#', '', $_POST['active']) : 'y';
  		
  		//photo Uploading capabilities
    	$uploaded_file = '';
    	//$photo_name = '';
    	//$orig_photo_name = '';
    	if (is_uploaded_file($_FILES['uploaded_file']['tmp_name'])) {
      		$uploaded_file = upload_image();
      		if (is_array($uploaded_file)) {
        		$photo_name = $uploaded_file['name'];
        		//$orig_photo_name = clean($uploaded_file['orig_name']); 
      		} else {
        		$msg = $uploaded_file; echo $msg; exit();
      		}
    	} 
    	
    	if (!empty($photo_name) && !empty($product_id)) {
    		$sql_insert = mysqli_query($link, "INSERT INTO product_images (product_id,name,rank,active,created) VALUES ('$product_id','$photo_name','$rank','$active',now())");
    		$msg = 'Image uploaded successfully';
    	}
  	} else if (isset($_POST['submit2'])) {
  		$product_id = preg_replace('#[^0-9]#', '', $_POST['product_id']);
  		$product_image_id = preg_replace('#[^0-9]#', '', $_POST['product_image_id']);
  		$rank = preg_replace('#[^0-9]#', '0', $_POST['rank']);
  		$active = isset($_POST['active']) ? preg_replace('#[^yn]#', '', $_POST['active']) : 'y';
  		
  		//echo "Product Image Id: " . $product_image_id . " Rank: " . $rank . " Active: " . $active;
  		//exit();
  		
  		if (!empty($product_image_id)) {
    		$sql_update = mysqli_query($link, "UPDATE product_images SET rank='$rank', active='$active' WHERE id='$product_image_id' LIMIT 1");
    		$msg = 'Image updated successfully';
    	}
    	if(!empty($product_id)) {
    		$newURL = "http://localhost:8888/cart_edit/product_images.php?product_id=$product_id";
    		header('Location: '.$newURL);
    	}
        
  	} else {
		$newURL = "products.php";
    	header('Location: '.$newURL);
	}
?>

<html>
	<head>
	</head>
	<body>
		<?php include_once("includes/menu.php"); ?>
		<?php echo $msg . ' <br />'; ?>
		<?php echo $product_name . ' <br />'; ?>
		<form action="product_images.php" method="post" enctype="multipart/form-data">
      		<input type="hidden" name="product_id" value="<?php echo $product_id; ?>">
      		<strong>Photo upload</strong> <span class="grey"> .jpg, .jpeg, or .png only please.</span><br />
      		<input type="file" name="uploaded_file" class="custom_link"/></div><br /><br />
      		
      		<?php echo !empty($photo_name) ? '<img src="uploads/list_'. $photo_name . '"></div>' : ''; ?>
      		<?php  
          		if ($product_id > 0) { 
          			if (strcmp($active,'y') == 0) {
          				echo '<input type="radio" name="active" value="n">Non-active<br><input type="radio" name="active" value="y" checked>Active<br /><br />';
          			} else {
          				echo '<input type="radio" name="active" value="n" checked>Non-active<br><input type="radio" name="active" value="y">Active<br /><br />'; 
          			}
          		}
        	?>
        	<strong>Rank:</strong> <input type="text" name="rank" value="0" size="2"><br /><br />
       		<input type="submit" name="submit" value="Submit">
    	</form>
    	<?php 
    		if (!empty($image_array)) {
    			$display_list = '<table cellpadding="5" width="870"><tr>';
    			for ($i = 0; $i < count($image_array); $i++) {
    				$active =  $image_array[$i]['active'];
    				$active_input = '';
    				if (strcmp($active,'y') == 0) {
          				$active_input = '<input type="radio" name="active" value="n">Non-active<br><input type="radio" name="active" value="y" checked>Active<br /><br />';
          			} else {
          				$active_input = '<input type="radio" name="active" value="n" checked>Non-active<br><input type="radio" name="active" value="y">Active<br /><br />'; 
          			}
    				$display_list .=	'<td height="100px">
    										' . $image_array[$i]['html'] . '
    										<form action="product_images.php" method="post">
    											<input type="hidden" name="product_id" value="'. $product_id .'">
                                				<input type="hidden" name="product_image_id" value="'. $image_array[$i]['id'] .'">
                                				<input type="text" name="rank" value="' . $image_array[$i]['rank'] . '" size="2"><br />
                                				' . $active_input . '
        									<input type="submit" name="submit2" value="Submit">
        									</form>
        									Created: ' . $image_array[$i]['created'] . '
                              			</td>';
    				if ($i > 0 && $i % 4 == 0) { 
          				$display_list .= '</tr><tr>';
          			}
    			}
    			
    			$display_list .= '</tr></table>'; 
    		}
    		echo $display_list;
    	?>
	</body>
</html>