<?php

if(isset($_POST['login-user'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE username='$username' AND password='$password' LIMIT 1";
    $result = mysqli_query($conn,$query);
    //creating an array of users to get data from and set new session variables
    $user = mysqli_fetch_assoc($result);

    if($result) {
        $db_username = $user['username'];
        $db_password = $user['password'];
        
        if(mysqli_num_rows($result) > 0) {
            $_SESSION['user_id'] = $user['user_id'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['success'] = "You are now logged in";
            header("Location: tasks.php");
            exit(0);
        } else {
            die("Please you need to create an account first");
        }
    }
}