<?php
	include_once("mysql.php");
	include_once("includes/include_functions.php");
	
	$shippers_array = array();
	
	$sql_get_shippers = mysqli_query($link, "SELECT * FROM shippers WHERE active='y'");
	$sql_num_ship = mysqli_num_rows($sql_get_shippers);
	$i = 0;
	
	if ($sql_num_ship > 0) {
      	while ($row = mysqli_fetch_array($sql_get_shippers)) {
      		$sql_shipper_id = $row['id'];
        	$sql_name = $row['name'];
        	$sql_cost = $row['cost'];
        	$created_date = $row['created'];
        	$shippers_array[$i]['id'] = $sql_shipper_id;
        	$shippers_array[$i]['name'] = $sql_name;
        	$shippers_array[$i]['cost'] = $sql_cost;
        	$shippers_array[$i]['created'] = $created_date;
        	$i++;
        }
    }
	
	if (isset($_POST['submit'])) {
		$name = clean($_POST['name']);
		$cost = clean($_POST['cost']);
		
		if (empty($name) || empty($cost))
			exit();
		
		$sql_insert_shipper = mysqli_query($link, "INSERT INTO shippers (name, cost, created) VALUES ('$name', '$cost', now())");
		
		$newURL = "shippers.php";
    	header('Location: '.$newURL);
	} else if (isset($_POST['submit2'])) {
		$shipper_id = preg_replace('#[^0-9]#', '', $_POST['id']);
		
		$sql_update = mysqli_query($link, "UPDATE shippers SET active='n' WHERE id='$shipper_id' LIMIT 1");
		$newURL = "shippers.php";
    	header('Location: '.$newURL);
	}
?>

<html>
	<head>
	</head>
	<body>
		<?php include_once("includes/menu.php"); ?>
		<form action="shippers.php" method="post">
			<strong>Shipper Name</strong> <input type="text" name="name" size="20">&nbsp;&nbsp;
			<strong>Shipper Cost</strong> <input type="text" name="cost" size="10">&nbsp;&nbsp;
			<input type="submit" name="submit" value="Submit">
		</form>
		<?php 
    		if (!empty($shippers_array)) {
    			$display_list = '<table cellpadding="5" border="1">';
    			for ($j = 0; $j < count($shippers_array); $j++) {
    				$display_list .=	'<tr><td>' 
    										. $shippers_array[$j]['name'] . 
    									'</td>
                              			<td>'
                              				. $shippers_array[$j]['cost'] . 
                              			'</td>
                              			<td>'
                              				. $shippers_array[$j]['created'] . 
                              			'</td>
                              			<td>
                              				<form action="shippers.php" method="post">
												<input type="hidden" name="id" value="' . $shippers_array[$j]['id'] . '">
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