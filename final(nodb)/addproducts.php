<!DOCTYPE HTML>
<html>

<head>

<title>My Shop</title>

</head>
<body>
	
	<form method="post" action="#">
		<table width="700"align="center"border="1">
			<tr align="center">
				<td colspan="2"><h2>Add a new Product:</h2></td>
			</tr>
			<tr>
				<td align="right">product Title</td>
				<td><input type="text"name="product_title"size="50" /></td>
			</tr>
			<tr>
				<td align="right">product Category</td>
				<td>
				<select name="product_cat">
					<option>Select a Category</option>
					<option value='dress'>Dress</option>
					<option value='mobile'>Mobile</option>
					<option value='camera'>Camera</option>
					<option value ='laptop'>Laptop</option>
				</select>	
				</td>
			</tr>
			<tr>
				<td align="right">product Brand</td>
				<td>
				</td>
			</tr>
			
			<tr>
				<td align="right">product Image 1</td>
				<td><input type="file"name="product_img1" /></td>
			</tr>
			
			<tr>
				<td align="right">product Image 2</td>
				<td><input type="file"name="product_img2" /></td>
			</tr>
			
			<tr>
				<td align="right">product Image 3</td>
				<td><input type="file"name="product_img3" /></td>
			</tr>
			<tr>
				<td align="right">product Price</td>
				<td><input type="text"name="product_price" /></td>
			</tr>
			<tr>
				<td align="right">product Description</td>
				<td><textarea name="product_desc"cols="35"rows="10" ></textarea></td>
			</tr>
			<tr>
				<td align="right">product Keywords:</td>
				<td><input type="text"name="product_keywords"size="50" /></td>
			</tr>
			<tr align="center">
				<td colspan="2"><input type="submit"name="add_product"value="Add Product" /></td>
			</tr>
		</table>
	</form>
</body>
</html>

<?php

	if(isset($_POST['insert_product'])){
		//text data variables
		$product_title=$_POST['product_title'];
		$product_cat=$_POST['product_cat'];
		$product_brand=$_POST['product_brand'];
		$product_price=$_POST['product_price'];
		$product_desc=$_POST['product_desc'];
		$status='on';
		$product_keywords=$_POST['product_keywords'];
		
		//image names
		
		$product_img1=$_FILES['product_img1']['name'];
		$product_img2=$_FILES['product_img2']['name'];;
		$product_img3=$_FILES['product_img3']['name'];;
		
		// Image temp names
		
		$temp_name1=$_FILES['product_img1']['tmp_name'];
		$temp_name2=$_FILES['product_img2']['tmp_name'];
		$temp_name3=$_FILES['product_img3']['tmp_name'];
		
		if($product_title =='' OR $product_cat=='' OR $product_brand=='' OR $product_price=='' OR $product_desc=='' OR $product_keywords=='' OR $product_img1==''){
			echo"<script>alert('please fill all the fields!')</script>";
			exit();
		}
		else{
			//uploaded image to its folder
			move_uploaded_file($temp_name1,"product_images/$product_img1");
			move_uploaded_file($temp_name2,"product_images/$product_img2");
			move_uploaded_file($temp_name3,"product_images/$product_img3");
		$insert_product="insert into products(cat_id,brand_id,date,product_title,product_img1,product_img2,product_img3,product_price,product_desc,status) values('$product_cat','$product_brand',NOW(),'$product_title','$product_img1','$product_img2','$product_img3','$product_price','$product_desc','$status')";
		$run_product=mysqli_query($con,$insert_product);
		
		if($run_product){
		
		echo "('Product inserted successfully')";
		
		}		
			
			}
	
	
	
	}



?>







