<?php

$db = mysqli_connect("127.0.0.1", "root", "", "EcommerceShop");
mysqli_select_db($db);



$title = $_POST['title'];
$price = $_POST['price'];
$listprice = $_POST['list_price'];
$brand = $_POST['brand'];
$description = $_POST['description'];
$image = $_POST['image'];
$featured = $_POST['featured'];


$sqlproduct = "INSERT INTO `products` (`id`, `title`, `price`, `list_price`,`brand`,`description`, `image`, `featured`) VALUES (NULL, '$title', '$price','$list_price', '$brand', '$description', '$image', '$featured')";

$successproduct = mysqli_query($db, $sqlproduct);

if($successproduct){
    echo "Success";
}

?>