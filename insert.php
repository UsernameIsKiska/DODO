<?php 

$con = mysqli_connect("127.0.0.1", "root", "", "pizza");

$select = "SELECT * FROM products WHERE id = {$_GET['id']}"; 

$query = mysqli_query($con,$select);

$pizza = $query->fetch_assoc(); 

mysqli_query($con, "INSERT INTO trash (name, price, img) VALUES ('{$pizza['name']}', '{$pizza['price']}', '{$pizza['img']}')");

header("Location: index.php"); 

?>