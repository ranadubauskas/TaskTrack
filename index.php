<?php
session_start();
include "backend/db.php";
include 'backend/login_auth.php';
?>

<!DOCTYPE html>
<html lang= "en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>To do List</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
<div class="flash-message">
        <h4>
            <?php
                if(isset($_SESSION['mssge'])) {
                    echo $_SESSION['mssge'];
                    unset($_SESSION['mssge']);
                }
            ?>
        </h4>
    </div>
<div class="user">
    <header class="user__header">
    <img src="https://img.icons8.com/external-prettycons-lineal-prettycons/49/000000/external-to-do-list-text-formatting-prettycons-lineal-prettycons.png"/>
        <h1 class="user__title">Task Manager</h1>
        <div class= "message"> 
            <h5 class="ques"> Don't have an account? <a href="register.php"> Register </a> </h5>
</div>
<style type="text/css">
  h2 {
    color: white;
    font: 2px;
    margin-bottom: 2px;
    font-weight: lighter;
 }
  </style>
    </header>
    
    <form class="form" action="index.php" method="post">
        <div class="form__group">
            <input type="text" name="username" placeholder="Username" class="form__input" />
        </div>
        <div class="form__group">
            <input type="password"  name= "password" placeholder="Password" class="form__input"  />
            <i class="far fa-eye" id="togglePassword" style="margin-left: -30px; cursor: pointer;"></i>
        </div>
        <button class="btn" name="login-user" type="submit">Log in</button>
    </form>
</div>
</body>
</html>
