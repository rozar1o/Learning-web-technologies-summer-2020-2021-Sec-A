<?php
	
?>

<!DOCTYPE html>
<html>
<head>
	<title>Display Product</title>
</head>
<body>
	<center>
		<form method="POST" action="">
			<table>
				<tr>
					<td>
						<fieldset>
							<legend>DISPLAY</legend>
<?php 

	//connection
	$conn = mysqli_connect('localhost', 'root', '', 'product_db');

	$sql = 'select * from products';
                    
	$result = mysqli_query($conn, $sql);

	
	echo "<table border=1> 
			<tr>
				<td>NAME</td>
				<td>PROFIT</td>
				<td colspan=2></td>
			</tr>";
	while ($row = mysqli_fetch_assoc($result)) {
 		$name =$row['name'];
		$buy = $row['buyingPrice'];
		$sell = $row['sellingPrice'];
		$profit = $sell - $buy;
		
		echo 	"<tr>
					<td>{$row['name']}</td>
					<td>$profit</td>
					<td>
					<a href=editProduct.php>edit</a>
					</td>
					<td>
						<a href=deleteProduct.php?name=$name>delete</a>
					</td>
					
				</tr>";


	}
	

	echo "</table>";
	
?>
						</fieldset>
					</td>
				</tr>
			</table>
		</form>
	</center>
</body>
</html