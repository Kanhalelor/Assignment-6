<?php 
session_start();
if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
 ?>
<!DOCTYPE html>
<html>
<head>
    <title>Pamwe Daily Namibia</title>
    <link rel="stylesheet" type="text/css" href="./main.css">
</head>
<body>
     <h1>Hello, <?php echo $_SESSION['name']; ?></h1>
     <!-- <a href="logout.php">Logout</a> -->

     <!-- Main navigation -->
     <div class="nav-bar">
       <div class="logo">
         <img class="logo" src="./assests/logo.jpeg" alt="logo">
       </div>
       <ul>
         <li>
           <a href="#">Home</a>
           <a href="index.php">Login</a>
           <a href="#contact">Contact</a>
         </li>
       </ul>
     </div>
     <!-- prodcuts section -->
     <div class="products">
       <!-- product 1 -->
       <div class="product">
         <h3 class="product-name">Fresh Milk</h3>
         <img src="./" alt="./assets/fresh.png" class="product-iamge">
         <div class="call-out">
         <span class="price">$ 78.99</span>
         <span class="buy">BUY</span>
         </div>
       </div>
       <!-- prpoduct 2 -->
       <div class="product">
         <h3 class="product-name">Sunshine Quava</h3>
         <img src="./" alt="./assets/fresh.png" class="product-iamge">
         <div class="call-out">
         <span class="price">$ 48.99</span>
         <span class="buy">BUY</span>
         </div>
       </div>
       <!-- product 3 -->
       <div class="product">
         <h3 class="product-name">Greek Yorghut</h3>
         <img src="./" alt="./assets/fresh.png" class="product-iamge">
         <div class="call-out">
         <span class="price">$ 24.99</span>
         <span class="buy">BUY</span>
         </div>
       </div>
       <!-- prodcut 4 -->
       <div class="product">
         <h3 class="product-name">Butter Milk</h3>
         <img src="./" alt="./assets/fresh.png" class="product-iamge">
         <div class="call-out">
         <span class="price">$ 16.99</span>
         <span class="buy">BUY</span>
         </div>
       </div>
       <!-- end of prodcuts listing -->
     </div>
     <!-- end of products div -->

     <!-- contact details section -->
     <div id="contact" class="contact-div">
       <div class="p-address">123 Mario Street, Windhoek</div>
       <div class="phone">+264 61 456 688</div>
       <div class="email">info@pamwe.com.na</div>
     </div> 
     <!-- footer -->
     <footer>
       <small>@&copy Pamwe Daily - 2021</small>
     </footer>
</body>
</html>
<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>