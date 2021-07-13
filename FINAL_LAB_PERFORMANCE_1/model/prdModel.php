<?php
	
	require_once('db.php');

	function insertProduct($product){
		$conn = getConnection();
		$sql = "insert into products values('', '{$product['name']}', '{$product['buying price']}', '{$product['selling price']}')";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	

	function getAllProduct(){
		$conn = getConnection();
		$sql = "select * from products";
		$result = mysqli_query($conn, $sql);
		$products = [];
		
		while ($row = mysqli_fetch_assoc($result)) {
			array_push($products, $row);
		}

		return $products;
	}

	function updateUser($user){
		$conn = getConnection();
		$sql = "update users set username='{$user['username']}', password='{$user['password']}', email='{$user['email']}', type='{$user['type']}' where id={$user['id']}";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function deleteUser($id){
		$conn = getConnection();
		$sql = "delete from users where id={$id}";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

?>