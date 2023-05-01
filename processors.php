<?php
	include_once("mysql.php");
	include_once("includes/include_functions.php");
	
	$processors_array = array();
	
	$sql_get_processors = mysqli_query($link, "SELECT * FROM processors WHERE active='y'");
	$sql_num_proc = mysqli_num_rows($sql_get_processors);
	$i = 0;
	
	if ($sql_num_proc > 0) {
      	while ($row = mysqli_fetch_array($sql_get_processors)) {
      		$sql_processor_id = $row['id'];
        	$sql_name = $row['name'];
        	$created_date = $row['created'];
        	$processors_array[$i]['id'] = $sql_processor_id;
        	$processors_array[$i]['name'] = $sql_name;
        	$processors_array[$i]['created'] = $created_date;
        	$i++;
        }
    }
	
	if (isset($_POST['submit'])) {
		$name = clean($_POST['name']);
		
		if (empty($name))
			exit();
		
		$sql_insert_processor = mysqli_query($link, "INSERT INTO processors (name, created) VALUES ('$name',now())");
		
		$newURL = "processors.php";
    	header('Location: '.$newURL);
	} else if (isset($_POST['submit2'])) {
		$product_processor_id = preg_replace('#[^0-9]#', '', $_POST['id']);
		
		$sql_update = mysqli_query($link, "UPDATE processors SET active='n' WHERE id='$product_processor_id' LIMIT 1");
		$newURL = "processors.php";
    	header('Location: '.$newURL);
	}
?>

<html>
	<head>
	</head>
	<body>
		<?php include_once("includes/menu.php"); ?>
		<form action="processors.php" method="post">
			<strong>Payment Processor</strong><input type="text" name="name" size="20">&nbsp;&nbsp;
			<input type="submit" name="submit" value="Submit">
		</form>
		<?php 
    		if (!empty($processors_array)) {
    			$display_list = '<table cellpadding="5" border="1">';
    			for ($j = 0; $j < count($processors_array); $j++) {
    				$display_list .=	'<tr><td>
    										' . $processors_array[$j]['name'] . '
                              			</td>
                              			<td>'
                              				. $processors_array[$j]['created'] . 
                              			'</td>
                              			<td>
                              				<form action="processors.php" method="post">
												<input type="hidden" name="id" value="' . $processors_array[$j]['id'] . '">
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