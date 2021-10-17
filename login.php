<?php 
// start session
session_start(); 
// connect to a database
include "db_conn.php";
// input validation
if (isset($_POST['uname']) && isset($_POST['password'])) {
    function validate($data){
       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
       return $data;
    }
    $uname = validate($_POST['uname']);
    $pass = validate($_POST['password']);
    // check if username field is empty
    if (empty($uname)) {
        header("Location: index.php?error=Username is required");
        exit();
    }
    // check is password field is empty
    else if(empty($pass)){
        header("Location: index.php?error=Password is required");
        exit();
    }
    // connect to a database / login
    else{
      // create a query
        $sql = "SELECT * FROM users WHERE user_name='$uname' AND password='$pass'";
        // run query
        $result = mysqli_query($conn, $sql);
        // if username and password found
        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            // check if username equals current username on the database
            if ($row['user_name'] === $uname && $row['password'] === $pass) {
                echo "Logged in!"; // allow login
                $_SESSION['user_name'] = $row['user_name'];
                $_SESSION['name'] = $row['name'];
                $_SESSION['id'] = $row['id'];
                header("Location: home.php");
                exit();
            }else{
                header("Location: index.php?error=Incorect Username or password");
                exit();
            }
        }else{ // deny login
            header("Location: index.php?error=Incorect Username or password");
            exit();
        }
    }
}else{ // revert back to home page
    header("Location: index.php");
    exit();
}