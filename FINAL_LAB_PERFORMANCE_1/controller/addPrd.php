<?php
	require_once('../model/prdModel.php');

	if(isset($_POST['submit'])){

		$name 		= $_POST['name'];
		$bPrice 	= $_POST['bprice'];
		$sPrice 	= $_POST['sprice'];
		
		$product = [
						'name'		=>$name, 
						'buying price'	=>$bPrice, 
						'selling price'	=>$sPrice,
			
				];

										
				$status = insertProduct($product);
				print_r($status);
				
				if ($status) {
					if(isset($_POST['check'])){
				  	header('location: ../view/product_list.php');
				  	
				  	}else{
				  		
				  		header('location: ../view/home.html');
				  	}
				}									
				
				else{
					echo "DB Error";
				}
	}

?>