<?php 
session_start();
if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
 ?>
<!DOCTYPE html>
<html>
<head>
    <title>Pamwe Daily Namibia</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
     <h1>Hello, <?php echo $_SESSION['name']; ?></h1>
     <a href="logout.php">Logout</a>
     <div class="nav-bar">
       <ul>
         <li>
           <a href="#">Home</a>
           <a href="index.php">Login</a>
           <a href="#contact">Contact</a>
         </li>
       </ul>
     </div>
     <div id="contact" class="contact-div">
       <div class="p-address">123 Mario Street, Windhoek</div>
       <div class="phone">+264 61 456 688</div>
       <div class="email">info@pamwe.com.na</div>
     </div> 
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