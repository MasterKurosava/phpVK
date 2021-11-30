<?php
  session_start();
  require_once 'connection.php';

  $login=$_POST['login'];
  $password=$_POST['password'];
  $hash=password_hash($password, PASSWORD_DEFAULT);

  if($login && $hash){
    $free=mysqli_query($link, "SELECT LOGIN FROM `users` WHERE LOGIN='$login'");
    $free=mysqli_fetch_assoc($free);
    if($free){
      $_SESSION['message']='Логин занят';
    }else{
      mysqli_query($link,"INSERT INTO `users`(LOGIN,PASSWORD,ROLL) VALUES ('$login','$hash','USER')");
    }
  }else{
    $_SESSION['message']='Заполните все поля';
  }
  header('Location: ../register.php');
  exit();
?>