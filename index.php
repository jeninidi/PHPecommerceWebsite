<?php
    require_once 'init.php'; 
    
    $sql = "SELECT * FROM products WHERE featured = 1";
    $featured =$db->query($sql);
?>

<!DOCTYPE html>

<html lang="en">

<head>
    <title>Ecommerce website for PHP mandatory assignment</title>

    <link rel="stylesheet" href="css/bootstrap.min.css"/> 
    <link rel="stylesheet" href="css/main.css"/>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta charset="UTF-8">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>  
    <script src="js/bootstrap.min.js"></script>
</head>

<body>
     
    <nav class="navbar navbar-default navbar-fixed-top" id="navbar">  
        <div class="container">
            <a href="/phpAssignment2/index.php" class="navbar-brand" id="text">Ecommerce shop</a>

            <ul class="nav navbar-nav">
                <!-- Dropdown menu -->
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="text">Men fashion
                        <span class="caret" ></span>
                    </a>
                    
                    <ul class="dropdown-menu" role="menu">
                         <li> <a href="#">Shirts </a> </li>
                         <li> <a href="#">Pants </a> </li>
                         <li> <a href="#">Shoes </a> </li>
                         <li> <a href="#">Accessories </a> </li>
                    </ul>
                </li>
            </ul>
          
            <a href="/phpAssignment2/login.php"> <button>Log in</button></a>

            <a href="/phpAssignment2/admin.php"> <button>Admin</button></a>

            <a href="/phpAssignment2/add_cart.php"> <button>View my cart</button></a>
                
            
                
        </div>

    </nav>

    <!-- Inserting images -->
    <div id="background-image">
        <div id="image-1"></div>
    </div> 

    <!-- Featured products -->
    <h2 class="text-center" style="margin-top: 25px;">Featured products</h2>

    <div class="col-md-8" id="featured">
        <div class="row">
        <?php while($products = mysqli_fetch_assoc($featured)): ?>
            <div class="col-md-3">
                <h4> <?= $products['title'];?> </h4>
                <img src=" <?= $products['image']; ?> " alt=" <?= $products['title']; ?>" style="height:150px !important;"/>
                <p class="list-price text-danger"><s>List Price:<?= $products['list_price']; ?> $</s></p>
                <p class="price"> Price: <?= $products['price']; ?> $</p>
                <a href="details.php">
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-1"> 
                  Details
                </button>
              </a>
            </div>
            
            <?php endwhile; ?>

            <!-- This is now obsolete as products come from the DB -->

            <!-- <div class="col-md-3">
                <h4>Sweatshirt</h4>
                <img src="images/hoodie.png" alt="Hoodie" style="height:150px !important;">
                <p class="list-price text-danger"><s>List Price: $29.99</s></p>
                <p class="price">Our Price: $23.99</p>
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-2">Details</button>
            </div>

            <div class="col-md-3">
                <h4>Beanie</h4>
                <img src="images/beanie.png" alt="Beanie" style="height:150px !important;">
                <p class="list-price text-danger"><s>List Price: $14.99</s></p>
                <p class="price">Our Price: $9.99</p>
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-3">Details</button>
            </div>

            <div class="col-md-3">
                <h4>Jacket</h4>
                <img src="images/jacket.png" alt="Jacket" style="height:150px !important;">
                <p class="list-price text-danger"><s>List Price: $44.99</s></p>
                <p class="price">Our Price: $35.99</p>
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-4">Details</button>
            </div>

            <div class="col-md-3">
                <h4>Bracelet</h4>
                <img src="images/bracelet.png" alt="Bracelet" style="height:150px !important;">
                <p class="list-price text-danger"><s>List Price: $11.99</s></p>
                <p class="price">Our Price: $9.99</p>
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-5">Details</button>
            </div>

            <div class="col-md-3">
                <h4>Socks</h4>
                <img src="images/socks.png" alt="Socks" style="height:150px !important;">
                <p class="list-price text-danger"><s>List Price: $5.99</s></p>
                <p class="price">Our Price: $3.99</p>
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-6">Details</button>
            </div> -->

        </div>

        <footer class="text-center" id="footer">&copy; Copyright 2022 PHP mandatory assignment 2</footer>

    </div>

    <!-- Detais-modal -->
    <?php 
        
        include 'details-modal-jeans.php'; 
        include 'details-modal-beanie.php';
        include 'details-modal-bracelet.php';
        include 'details-modal-jacket.php';
        include 'details-modal-socks.php';
        include 'details-modal-sweatshirt.php';   
        include 'details.php'; 
  
    ?>
    <!-- End of Details modal --> 

</body>
 
</html> 