<?php
session_start();
    include "backend/db.php";
    include 'backend/reg_auth.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Todo List</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
<div class="user">
    <header class="user__header">
    <img src="https://img.icons8.com/external-prettycons-lineal-prettycons/49/000000/external-to-do-list-text-formatting-prettycons-lineal-prettycons.png"/>
        <h1 class="user__title">Task Manager</h1>
        <div class= "message"> 
            <h5 class="ques"> Already have an account? <a href="login.php"> Log in </a> </h5>
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
    
    <form class="form" action="register.php" action="post">
        <div class="form__group">
            <input type="text" name="username" placeholder="Username" class="form__input" />
        </div>
        <div class="form__group">
            <input type="email"  name= "email" placeholder="Email" class="form__input" />
        </div>

        <div class="form__group">
            <input type="password"  name= "password" placeholder="Password" class="form__input" />
        </div>
        <div class="form__group">
            <input type="password"  name= "passwordComf" placeholder="Confirm Password" class="form__input" />
        </div>
        
        <button class="btn" name="submit-user" type="submit">Register</button>

    </form>
    <script type="text/javascript" src="js.js"></script>
</div>
</body>
</html>
